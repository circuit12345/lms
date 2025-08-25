<?php
require('../../config.php');

$id = optional_param('id', 0, PARAM_INT);

require_login();
$context = context_system::instance();
require_capability('local/jobboard:managejobs', $context);

$PAGE->set_url(new moodle_url('/local/jobboard/post.php', ['id' => $id]));
$PAGE->set_context($context);
$PAGE->set_title(get_string($id ? 'editjob' : 'createjob', 'local_jobboard'));
$PAGE->set_heading(get_string($id ? 'editjob' : 'createjob', 'local_jobboard'));

$mform = new \local_jobboard\form\job_form();

if ($id) {
    $job = $DB->get_record('jobboard_jobs', ['id' => $id], '*', MUST_EXIST);
    $mform->set_data_for_edit($job);
}

if ($mform->is_cancelled()) {
    redirect(new moodle_url('/local/jobboard/manage.php'));
} else if ($data = $mform->get_data()) {
    $record = new stdClass();
    $record->title = $data->title;
    $record->summary = $data->summary;
    $record->description = $data->description_editor['text'] ?? '';
    $record->location = $data->location ?? '';
    $record->jobtype = $data->jobtype ?? '';
    $record->tags = $data->tags ?? '';
    $record->salaryrange = $data->salaryrange ?? '';
    $record->applydeadline = $data->applydeadline ?? 0;
    $record->published = empty($data->published) ? 0 : 1;
    $record->timemodified = time();

    if ($id) {
        $record->id = $id;
        $DB->update_record('jobboard_jobs', $record);
    } else {
        $record->createdby = $USER->id;
        $record->timecreated = time();
        $id = $DB->insert_record('jobboard_jobs', $record);
    }
    redirect(new moodle_url('/local/jobboard/manage.php'));
}

echo $OUTPUT->header();
$mform->display();
echo $OUTPUT->footer();
