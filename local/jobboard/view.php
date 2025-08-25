<?php
require('../../config.php');

$id = required_param('id', PARAM_INT);

require_login(null, false);
$context = context_system::instance();
require_capability('local/jobboard:viewjobs', $context);

$job = $DB->get_record('jobboard_jobs', ['id' => $id], '*', MUST_EXIST);

$PAGE->set_url(new moodle_url('/local/jobboard/view.php', ['id' => $id]));
$PAGE->set_context($context);
$PAGE->set_title(format_string($job->title));
$PAGE->set_heading(format_string($job->title));

$renderable = new \local_jobboard\output\job_view($job, has_capability('local/jobboard:apply', $context));

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_jobboard/job_view', $renderable->export_for_template($OUTPUT));
echo $OUTPUT->footer();
