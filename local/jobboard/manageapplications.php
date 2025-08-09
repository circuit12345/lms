<?php
require('../../config.php');
require_login();

global $DB, $PAGE, $OUTPUT;

$context = context_system::instance();
require_capability('local/jobboard:viewapplications', $context);

$jobid = optional_param('jobid', 0, PARAM_INT);
$action = optional_param('action','',PARAM_ALPHANUM);
$appid = optional_param('appid',0,PARAM_INT);
$newstatus = optional_param('status','',PARAM_TEXT);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$jobid]));
$PAGE->set_title('Manage Applications');
$PAGE->set_heading('Manage Applications');

echo $OUTPUT->header();

if (!$jobid) {
    // Show all jobs with counts
    $jobs = $DB->get_records('jobboard_jobs', null, 'dateposted DESC');
    if (empty($jobs)) {
        echo html_writer::tag('p', 'No jobs found.');
    } else {
        echo html_writer::start_tag('ul');
        foreach ($jobs as $j) {
            $count = $DB->count_records('jobboard_applications', ['jobid'=>$j->id]);
            echo html_writer::tag('li', html_writer::link(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$j->id]), format_string($j->title) . " ($count applications)"));
        }
        echo html_writer::end_tag('ul');
    }
    echo $OUTPUT->footer();
    exit;
}

// If changing status
if ($action === 'changestatus' && $appid && $newstatus) {
    $rec = $DB->get_record('jobboard_applications', ['id'=>$appid], '*', MUST_EXIST);
    $rec->status = $newstatus;
    $DB->update_record('jobboard_applications', $rec);
    redirect(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$jobid]), 'Status updated', 1);
}

// Show applications for jobid
$applications = $DB->get_records('jobboard_applications', ['jobid'=>$jobid], 'dateapplied DESC');

echo $OUTPUT->heading('Applications for Job');
if (empty($applications)) {
    echo html_writer::tag('p', 'No applications yet for this job.');
} else {
    echo html_writer::start_tag('table', ['class'=>'generaltable table table-striped']);
    echo html_writer::start_tag('thead');
    echo html_writer::start_tag('tr');
    echo html_writer::tag('th', 'Applicant');
    echo html_writer::tag('th', 'Resume');
    echo html_writer::tag('th', 'Applied on');
    echo html_writer::tag('th', 'Status');
    echo html_writer::tag('th', 'Actions');
    echo html_writer::end_tag('tr');
    echo html_writer::end_tag('thead');
    echo html_writer::start_tag('tbody');

    foreach ($applications as $app) {
        $user = $DB->get_record('user', ['id'=>$app->userid]);
        $resume = $DB->get_record('jobboard_resumes', ['id'=>$app->resumeid]);
        $fileurl = $resume ? moodle_url::make_webservice_pluginfile_url($context->id, 'local_jobboard', 'resume', $resume->fileitemid, '/', $resume->filename, true) : '';
        echo html_writer::start_tag('tr');
        echo html_writer::tag('td', fullname($user));
        echo html_writer::tag('td', $resume ? html_writer::link($fileurl, s($resume->filename)) : '-');
        echo html_writer::tag('td', userdate($app->dateapplied));
        echo html_writer::tag('td', s($app->status));
        $actions = html_writer::link(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$jobid,'action'=>'changestatus','appid'=>$app->id,'status'=>get_string('status_selected','local_jobboard')]), 'Select') . ' | ';
        $actions .= html_writer::link(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$jobid,'action'=>'changestatus','appid'=>$app->id,'status'=>get_string('status_rejected','local_jobboard')]), 'Reject');
        echo html_writer::tag('td', $actions);
        echo html_writer::end_tag('tr');
    }

    echo html_writer::end_tag('tbody');
    echo html_writer::end_tag('table');
}

echo $OUTPUT->footer();
