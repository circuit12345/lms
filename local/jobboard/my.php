<?php
require('../../config.php');

require_login();
$context = context_system::instance();
require_capability('local/jobboard:apply', $context);

$jobid = optional_param('jobid', 0, PARAM_INT);

// Optional: if jobid is provided, route to apply.php when valid and not already applied.
if ($jobid) {
    // Ensure job exists and is open (published and before deadline).
    if ($job = $DB->get_record('jobboard_jobs', ['id' => $jobid, 'published' => 1])) {
        $deadlineok = empty($job->applydeadline) || (int)$job->applydeadline > time();
        if ($deadlineok) {
            $already = $DB->record_exists('jobboard_applications', ['jobid' => $jobid, 'userid' => $USER->id]);
            if (!$already) {
                // Redirect straight to apply form for this job.
                redirect(new moodle_url('/local/jobboard/apply.php', ['jobid' => $jobid]));
            }
        }
    }
    // If invalid/closed/already applied, fall through to the dashboard with an info message.
    \core\notification::add(get_string('applied', 'local_jobboard'), \core\output\notification::NOTIFY_INFO);
}

$PAGE->set_url(new moodle_url('/local/jobboard/my.php'));
$PAGE->set_context($context);
$PAGE->set_title(get_string('nav_myapps', 'local_jobboard'));
$PAGE->set_heading(get_string('nav_myapps', 'local_jobboard'));

$sql = "SELECT a.*, j.title AS jobtitle
          FROM {jobboard_applications} a
          JOIN {jobboard_jobs} j ON j.id = a.jobid
         WHERE a.userid = :uid
      ORDER BY a.timecreated DESC";
$apps = $DB->get_records_sql($sql, ['uid' => $USER->id]);

echo $OUTPUT->header();

// Add a prominent "Browse jobs" button so students can go apply.
echo html_writer::div(
    html_writer::link(
        new moodle_url('/local/jobboard/index.php'),
        get_string('browsejobs', 'local_jobboard'),
        ['class' => 'btn btn-secondary']
    ),
    'mb-3'
);

if ($apps) {
    echo html_writer::start_tag('table', ['class' => 'generaltable']);
    echo html_writer::start_tag('thead');
    echo html_writer::tag('tr',
        html_writer::tag('th', get_string('title', 'local_jobboard')) .
        html_writer::tag('th', get_string('status', 'local_jobboard')) .
        html_writer::tag('th', get_string('time'))
    );
    echo html_writer::end_tag('thead');
    echo html_writer::start_tag('tbody');
    foreach ($apps as $r) {
        echo html_writer::tag('tr',
            html_writer::tag('td', format_string($r->jobtitle)) .
            html_writer::tag('td', s($r->status)) .
            html_writer::tag('td', userdate($r->timecreated))
        );
    }
    echo html_writer::end_tag('tbody');
    echo html_writer::end_tag('table');
} else {
    echo $OUTPUT->notification(get_string('noapps', 'local_jobboard'), \core\output\notification::NOTIFY_INFO);
    // When no applications exist yet, offer a primary call to action.
    echo html_writer::div(
        html_writer::link(
            new moodle_url('/local/jobboard/index.php'),
            get_string('apply', 'local_jobboard'),
            ['class' => 'btn btn-primary']
        ),
        'mt-2'
    );
}

echo $OUTPUT->footer();
