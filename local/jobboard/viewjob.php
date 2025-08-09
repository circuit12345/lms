<?php
require('../../config.php');
require_login();

global $DB, $OUTPUT, $PAGE;

$id = required_param('id', PARAM_INT);
$job = $DB->get_record('jobboard_jobs', ['id'=>$id], '*', MUST_EXIST);

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/jobboard/viewjob.php', ['id'=>$id]));
$PAGE->set_title(format_string($job->title));
$PAGE->set_heading(format_string($job->title));

echo $OUTPUT->header();

echo $OUTPUT->heading(format_string($job->title));
echo html_writer::tag('p', format_text($job->description, FORMAT_HTML));
echo html_writer::tag('p', get_string('skills','local_jobboard') . ': ' . format_text($job->skills));
echo html_writer::tag('p', get_string('location','local_jobboard') . ': ' . $job->location);
echo html_writer::tag('p', get_string('salary','local_jobboard') . ': ' . $job->salary);
echo html_writer::tag('p', get_string('postedby','local_jobboard') . ': ' . fullname($DB->get_record('user', ['id'=>$job->postedby])));
echo html_writer::tag('p', get_string('dateposted','local_jobboard') . ': ' . userdate($job->dateposted));

if (has_capability('local/jobboard:applyjobs', $context)) {
    echo html_writer::link(new moodle_url('/local/jobboard/apply.php', ['jobid'=>$job->id]), get_string('applynow','local_jobboard'), ['class'=>'btn btn-primary']);
}

if (has_capability('local/jobboard:viewapplications', $context)) {
    echo ' ' . html_writer::link(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$job->id]), get_string('viewapplicants','local_jobboard'), ['class'=>'btn btn-info']);
}

echo $OUTPUT->footer();
