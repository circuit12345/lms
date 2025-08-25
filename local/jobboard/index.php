<?php
require('../../config.php');

require_login(null, false);
$context = context_system::instance();
require_capability('local/jobboard:viewjobs', $context);

$PAGE->set_url(new moodle_url('/local/jobboard/index.php'));
$PAGE->set_context($context);
$PAGE->set_title(get_string('nav_jobs', 'local_jobboard'));
$PAGE->set_heading(get_string('nav_jobs', 'local_jobboard'));

$pagesize = (int) get_config('local_jobboard', 'jobspagecount') ?: 12;

$jobs = $DB->get_records_sql(
    "SELECT * FROM {jobboard_jobs} WHERE published=1 AND (applydeadline IS NULL OR applydeadline=0 OR applydeadline > :now)
     ORDER BY timemodified DESC",
    ['now' => time()], 0, $pagesize
);

$renderable = new \local_jobboard\output\jobs_list(array_values($jobs), has_capability('local/jobboard:apply', $context));

echo $OUTPUT->header();
echo $OUTPUT->render($renderable);
$PAGE->requires->js_call_amd('local_jobboard/ui', 'init', ['.jobboard-grid']);
echo $OUTPUT->footer();
