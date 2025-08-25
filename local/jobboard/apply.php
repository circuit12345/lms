<?php
require('../../config.php');
require_once($CFG->libdir.'/filelib.php');

$jobid = required_param('jobid', PARAM_INT);

require_login();
$context = context_system::instance();

// Only students/applicants can access apply page.
require_capability('local/jobboard:apply', $context);

$job = $DB->get_record('jobboard_jobs', ['id' => $jobid, 'published' => 1], '*', MUST_EXIST);

// Job must be open.
$deadlineok = empty($job->applydeadline) || (int)$job->applydeadline > time();
if (!$deadlineok) {
    print_error('Job is closed.');
}

// Prevent multiple applications by same user for the same job.
$existing = $DB->record_exists('jobboard_applications', ['jobid' => $jobid, 'userid' => $USER->id]);
if ($existing) {
    redirect(new moodle_url('/local/jobboard/my.php'), get_string('applied', 'local_jobboard'));
}

$PAGE->set_url(new moodle_url('/local/jobboard/apply.php', ['jobid' => $jobid]));
$PAGE->set_context($context);
$PAGE->set_title(get_string('apply', 'local_jobboard').': '.format_string($job->title));
$PAGE->set_heading(format_string($job->title));

$mform = new \local_jobboard\form\apply_form(null, []);
$mform->set_data(['jobid' => $jobid]);

if ($mform->is_cancelled()) {
    redirect(new moodle_url('/local/jobboard/view.php', ['id' => $jobid]));
} else if ($data = $mform->get_data()) {
    // Double-check again (race condition prevention).
    if ($DB->record_exists('jobboard_applications', ['jobid' => $jobid, 'userid' => $USER->id])) {
        redirect(new moodle_url('/local/jobboard/my.php'), get_string('applied', 'local_jobboard'));
    }

    $transaction = $DB->start_delegated_transaction();

    $app = (object)[
        'jobid' => $jobid,
        'userid' => $USER->id,
        'coverletter' => $data->coverletter ?? '',
        'status' => 'submitted',
        'timecreated' => time(),
        'timemodified' => time()
    ];
    $appid = $DB->insert_record('jobboard_applications', $app);

    // Save resume file to file area local_jobboard/resume with itemid = $appid.
    $draftitemid = file_get_submitted_draft_itemid('resume_file');
    file_save_draft_area_files(
        $draftitemid,
        $context->id,
        'local_jobboard',
        'resume',
        $appid,
        [
            'maxfiles' => 1,
            'subdirs' => 0,
            'accepted_types' => array_map(function($e){return '.'.ltrim($e, '.');},
                array_filter(array_map('trim', explode(',', get_config('local_jobboard', 'allowedtypes') ?: 'pdf,doc,docx'))))
        ]
    );

    // Activity log.
    $DB->insert_record('jobboard_activitylog', (object)[
        'applicationid' => $appid,
        'action' => 'submitted',
        'actorid' => $USER->id,
        'notetext' => '',
        'timecreated' => time()
    ]);

    $transaction->allow_commit();

    redirect(new moodle_url('/local/jobboard/my.php'), get_string('applied', 'local_jobboard'));
}

echo $OUTPUT->header();
$mform->display();
echo $OUTPUT->footer();
