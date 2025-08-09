<?php
require('../../config.php');
require_login();

global $DB, $OUTPUT, $PAGE, $USER;

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/jobboard/index.php'));
$PAGE->set_title(get_string('pluginname', 'local_jobboard'));
$PAGE->set_heading(get_string('pagename', 'local_jobboard'));

require_capability('local/jobboard:applyjobs', $context);

echo $OUTPUT->header();

// echo $OUTPUT->heading(get_string('pagename', 'local_jobboard'));

// If user can manage jobs, show Post Job button
if (has_capability('local/jobboard:managejobs', $context)) {
    echo html_writer::link(new moodle_url('/local/jobboard/addjob.php'), get_string('postjob', 'local_jobboard'), ['class' => 'btn btn-primary mb-3']);
}

// Fetch active jobs (expirydate empty => show)
$now = time();
$sql = "SELECT j.*, u.firstname, u.lastname
        FROM {jobboard_jobs} j
        JOIN {user} u ON u.id = j.postedby
        WHERE (j.expirydate = 0 OR j.expirydate >= :now)
        ORDER BY j.dateposted DESC";
$jobs = $DB->get_records_sql($sql, ['now' => $now]);

if (empty($jobs)) {
    echo html_writer::tag('p', get_string('nojobs', 'local_jobboard') ? get_string('nojobs', 'local_jobboard') : 'No jobs posted yet.');
} else {
    echo html_writer::start_tag('table', ['class'=>'generaltable table table-striped']);
    echo html_writer::start_tag('thead');
    echo html_writer::start_tag('tr');
    echo html_writer::tag('th', get_string('jobtitle', 'local_jobboard'));
    echo html_writer::tag('th', get_string('location', 'local_jobboard'));
    echo html_writer::tag('th', get_string('postedby', 'local_jobboard'));
    echo html_writer::tag('th', get_string('dateposted', 'local_jobboard'));
    echo html_writer::tag('th', get_string('applications', 'local_jobboard'));
    echo html_writer::tag('th', '');
    echo html_writer::end_tag('tr');
    echo html_writer::end_tag('thead');
    echo html_writer::start_tag('tbody');

    foreach ($jobs as $job) {
        $poster = fullname((object)['firstname'=>$job->firstname,'lastname'=>$job->lastname]);
        $apcount = $DB->count_records('jobboard_applications', ['jobid'=>$job->id]);
        $viewurl = new moodle_url('/local/jobboard/viewjob.php', ['id'=>$job->id]);
        echo html_writer::start_tag('tr');
        echo html_writer::tag('td', html_writer::link($viewurl, format_string($job->title)));
        echo html_writer::tag('td', format_string($job->location));
        echo html_writer::tag('td', $poster);
        echo html_writer::tag('td', userdate($job->dateposted));
        echo html_writer::tag('td', $apcount);
        $applylink = '';
        if (has_capability('local/jobboard:applyjobs', $context)) {
            $applylink = html_writer::link(new moodle_url('/local/jobboard/apply.php', ['jobid'=>$job->id]), get_string('apply', 'local_jobboard'), ['class'=>'btn btn-secondary']);
        }
        // Admin link to view applicants:
        if (has_capability('local/jobboard:viewapplications', $context)) {
            $viewapp = html_writer::link(new moodle_url('/local/jobboard/manageapplications.php', ['jobid'=>$job->id]), get_string('viewapplicants','local_jobboard'), ['class'=>'btn btn-info ml-2']);
            $applylink .= ' ' . $viewapp;
        }
        echo html_writer::tag('td', $applylink);
        echo html_writer::end_tag('tr');
    }

    echo html_writer::end_tag('tbody');
    echo html_writer::end_tag('table');
}

echo $OUTPUT->footer();
