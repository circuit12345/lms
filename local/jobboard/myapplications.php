<?php
require('../../config.php');
require_login();

global $DB, $OUTPUT, $PAGE, $USER;

$context = context_system::instance();
require_capability('local/jobboard:applyjobs', $context);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/jobboard/myapplications.php'));
$PAGE->set_title(get_string('myapplications','local_jobboard'));
$PAGE->set_heading(get_string('myapplications','local_jobboard'));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('myapplications','local_jobboard'));

$applications = $DB->get_records('jobboard_applications', ['userid'=>$USER->id], 'dateapplied DESC');

if (empty($applications)) {
    echo html_writer::tag('p', 'No applications yet.');
} else {
    echo html_writer::start_tag('table', ['class'=>'generaltable table table-striped']);
    echo html_writer::start_tag('thead');
    echo html_writer::start_tag('tr');
    echo html_writer::tag('th', get_string('jobtitle','local_jobboard'));
    echo html_writer::tag('th', 'Resume');
    echo html_writer::tag('th', 'Applied on');
    echo html_writer::tag('th', 'Status');
    echo html_writer::end_tag('tr');
    echo html_writer::end_tag('thead');
    echo html_writer::start_tag('tbody');

    foreach ($applications as $app) {
        $job = $DB->get_record('jobboard_jobs', ['id'=>$app->jobid]);
        $resume = $DB->get_record('jobboard_resumes', ['id'=>$app->resumeid]);
        // create resume download link
        $fileurl = '';
        if ($resume) {
            $fileurl = moodle_url::make_webservice_pluginfile_url(
                $context->id, 'local_jobboard', 'resume', $resume->fileitemid, '/', $resume->filename, true
            );
        }
        echo html_writer::start_tag('tr');
        echo html_writer::tag('td', html_writer::link(new moodle_url('/local/jobboard/viewjob.php', ['id'=>$job->id]), format_string($job->title)));
        echo html_writer::tag('td', $resume ? html_writer::link($fileurl, s($resume->filename)) : '-');
        echo html_writer::tag('td', userdate($app->dateapplied));
        echo html_writer::tag('td', s($app->status));
        echo html_writer::end_tag('tr');
    }

    echo html_writer::end_tag('tbody');
    echo html_writer::end_tag('table');
}

echo $OUTPUT->footer();
