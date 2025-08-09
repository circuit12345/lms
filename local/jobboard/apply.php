<?php
require('../../config.php');
require_login();

global $DB, $PAGE, $OUTPUT, $USER;

$context = context_system::instance();
require_capability('local/jobboard:applyjobs', $context);

// Get jobid from GET or POST
$jobid = required_param('jobid', PARAM_INT);

// Check job exists
$job = $DB->get_record('jobboard_jobs', ['id' => $jobid], '*', MUST_EXIST);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/jobboard/apply.php', ['jobid' => $jobid]));
$PAGE->set_title(get_string('apply', 'local_jobboard') . ' - ' . $job->title);
$PAGE->set_heading(get_string('apply', 'local_jobboard'));

require_once($CFG->libdir . '/formslib.php');

class job_apply_form extends moodleform {
    public function definition() {
        global $DB, $USER;
        $mform = $this->_form;
        $jobid = $this->_customdata['jobid'];

        // Hidden field for jobid
        $mform->addElement('hidden', 'jobid', $jobid);
        $mform->setType('jobid', PARAM_INT);

        // Show existing resumes
        $resumes = $DB->get_records('jobboard_resumes', ['userid' => $USER->id]);
        if (!empty($resumes)) {
            $options = [];
            foreach ($resumes as $r) {
                $options[$r->id] = userdate($r->uploadedon) . ' - ' . s($r->filename);
            }
            $mform->addElement('select', 'existingresume', 'Use existing resume', $options);
            $mform->setDefault('existingresume', 0);
        }

        // Filepicker for new resume
        $mform->addElement(
            'filepicker',
            'newresume',
            get_string('uploadresume', 'local_jobboard'),
            null,
            ['accepted_types' => ['.pdf', '.doc', '.docx']]
        );

        $mform->addElement('submit', 'submit', get_string('submitapplication', 'local_jobboard'));
    }
}

// Pass jobid into the form
$form = new job_apply_form(null, ['jobid' => $jobid]);

if ($form->is_cancelled()) {
    redirect(new moodle_url('/local/jobboard/viewjob.php', ['id' => $jobid]));
}

if ($data = $form->get_data()) {
    $jobid = (int)$data->jobid; // Ensure jobid is still correct
    $resumeid = 0;

    // 1) If user selected existing resume
    if (!empty($data->existingresume)) {
        $resumeid = (int)$data->existingresume;
    }

    // 2) If user uploaded new resume (filepicker draft)
    $draftitemid = file_get_submitted_draft_itemid('newresume');
    if ($draftitemid) {
        $newitemid = time() + $USER->id;
        file_save_draft_area_files($draftitemid, $context->id, 'local_jobboard', 'resume', $newitemid, ['subdirs' => false]);

        $fs = get_file_storage();
        $files = $fs->get_area_files($context->id, 'local_jobboard', 'resume', $newitemid, 'filename', false);
        $filename = !empty($files) ? reset($files)->get_filename() : 'resume_' . $newitemid;

        $rec = new stdClass();
        $rec->userid = $USER->id;
        $rec->fileitemid = $newitemid;
        $rec->filename = $filename;
        $rec->uploadedon = time();
        $resumeid = $DB->insert_record('jobboard_resumes', $rec);
    }

    if (empty($resumeid)) {
        echo $OUTPUT->notification('Please upload or select a resume.', 'notifyproblem');
    } else {
        $app = new stdClass();
        $app->jobid = $jobid;
        $app->userid = $USER->id;
        $app->resumeid = $resumeid;
        $app->status = get_string('status_pending', 'local_jobboard');
        $app->dateapplied = time();
        $DB->insert_record('jobboard_applications', $app);

        redirect(new moodle_url('/local/jobboard/myapplications.php'), 'Application submitted', 2);
    }
}

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('apply', 'local_jobboard') . ': ' . format_string($job->title));
$form->display();
echo $OUTPUT->footer();
