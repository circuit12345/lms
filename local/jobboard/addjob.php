<?php
require('../../config.php');
require_login();

global $PAGE, $OUTPUT, $DB, $USER;

$context = context_system::instance();
require_capability('local/jobboard:managejobs', $context);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/jobboard/addjob.php'));
$PAGE->set_title(get_string('postjob','local_jobboard'));
$PAGE->set_heading(get_string('postjob','local_jobboard'));

require_once($CFG->libdir.'/formslib.php');

class job_post_form extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('text', 'title', get_string('jobtitle','local_jobboard'));
        $mform->setType('title', PARAM_TEXT);
        $mform->addRule('title', null, 'required', null, 'client');

        $mform->addElement('editor', 'description', get_string('description','local_jobboard'));
        $mform->setType('description', PARAM_RAW);

        $mform->addElement('text', 'skills', get_string('skills','local_jobboard'));
        $mform->setType('skills', PARAM_TEXT);

        $mform->addElement('text', 'location', get_string('location','local_jobboard'));
        $mform->setType('location', PARAM_TEXT);

        $mform->addElement('text', 'salary', get_string('salary','local_jobboard'));
        $mform->setType('salary', PARAM_TEXT);

        $mform->addElement(
            'date_time_selector',
            'expirydate',
            get_string('expirydate','local_jobboard'),
            array('optional'=>true)
        );

        $mform->addElement('submit', 'submitbutton', get_string('postjob','local_jobboard'));
    }
}

$form = new job_post_form();

if ($form->is_cancelled()) {
    redirect(new moodle_url('/local/jobboard/index.php'));
} else if ($data = $form->get_data()) {
    $record = new stdClass();
    $record->title       = $data->title;
    $record->description = isset($data->description['text']) ? $data->description['text'] : '';
    $record->skills      = $data->skills ?? '';
    $record->location    = $data->location ?? '';
    $record->salary      = $data->salary ?? '';
    $record->postedby    = $USER->id;
    $record->dateposted  = time();
    $record->expirydate  = isset($data->expirydate) ? $data->expirydate : 0;
    $record->timecreated = time(); // ✅ This fixes the error

    $DB->insert_record('jobboard_jobs', $record);
    redirect(new moodle_url('/local/jobboard/index.php'), get_string('jobposted','local_jobboard'), 2);
}

echo $OUTPUT->header();
$form->display();
echo $OUTPUT->footer();
