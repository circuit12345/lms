<?php
require('../../config.php');
require_login();
$context = context_system::instance();
require_capability('local/jobboard:viewapplications', $context);

$PAGE->set_url(new moodle_url('/local/jobboard/manage.php'));
$PAGE->set_context($context);
$PAGE->set_title(get_string('nav_manage', 'local_jobboard'));
$PAGE->set_heading(get_string('nav_manage', 'local_jobboard'));

$action = optional_param('action', '', PARAM_ALPHANUMEXT);

echo $OUTPUT->header();

if ($action === 'status' && confirm_sesskey()) {
    require_capability('local/jobboard:changeapplicationstatus', $context);
    $appid = required_param('id', PARAM_INT);
    $status = required_param('status', PARAM_ALPHANUMEXT);
    $note = optional_param('note', '', PARAM_RAW);

    if ($app = $DB->get_record('jobboard_applications', ['id' => $appid])) {
        $app->status = $status;
        $app->statusnote = $note;
        $app->timemodified = time();
        $DB->update_record('jobboard_applications', $app);

        $DB->insert_record('jobboard_activitylog', (object)[
            'applicationid' => $appid,
            'action' => 'status_change',
            'actorid' => $USER->id,
            'notetext' => $status.'|'.$note,
            'timecreated' => time()
        ]);

        if (get_config('local_jobboard', 'notifyapplicant')) {
            // Send simple message.
            $eventdata = new \core\message\message();
            $eventdata->component         = 'local_jobboard';
            $eventdata->name              = 'statuschange';
            $eventdata->userfrom          = \core_user::get_noreply_user();
            $eventdata->userto            = \core_user::get_user($app->userid);
            $eventdata->subject           = 'Application status updated';
            $eventdata->fullmessage       = "Your application (ID {$app->id}) status: {$status}";
            $eventdata->fullmessageformat = FORMAT_PLAIN;
            $eventdata->fullmessagehtml   = '';
            $eventdata->smallmessage      = "Application status: {$status}";
            $eventdata->notification      = 1;
            message_send($eventdata);
        }

        redirect(new moodle_url('/local/jobboard/manage.php'), get_string('savechanges'));
    }
}

// Jobs quick table
echo $OUTPUT->heading(get_string('nav_manage', 'local_jobboard'), 3);
$jobs = $DB->get_records('jobboard_jobs', null, 'timemodified DESC');

echo html_writer::start_tag('div', ['class' => 'mb-4']);
echo html_writer::link(new moodle_url('/local/jobboard/post.php'), get_string('createjob', 'local_jobboard'), ['class' => 'btn btn-primary']);
echo html_writer::end_tag('div');

if ($jobs) {
    echo html_writer::start_tag('table', ['class' => 'generaltable']);
    echo html_writer::start_tag('thead');
    echo html_writer::tag('tr',
        html_writer::tag('th', get_string('title', 'local_jobboard')) .
        html_writer::tag('th', get_string('published', 'local_jobboard')) .
        html_writer::tag('th', get_string('actions', 'local_jobboard'))
    );
    echo html_writer::end_tag('thead');
    echo html_writer::start_tag('tbody');
    foreach ($jobs as $j) {
        $edit = html_writer::link(new moodle_url('/local/jobboard/post.php', ['id' => $j->id]), get_string('editjob', 'local_jobboard'));
        echo html_writer::tag('tr',
            html_writer::tag('td', format_string($j->title)) .
            html_writer::tag('td', $j->published ? get_string('open', 'local_jobboard') : get_string('closed', 'local_jobboard')) .
            html_writer::tag('td', $edit)
        );
    }
    echo html_writer::end_tag('tbody');
    echo html_writer::end_tag('table');
}

// Applications list
echo $OUTPUT->heading(get_string('applications', 'local_jobboard'), 3);

$sql = "SELECT a.*, j.title AS jobtitle, u.firstname, u.lastname
          FROM {jobboard_applications} a
          JOIN {jobboard_jobs} j ON j.id = a.jobid
          JOIN {user} u ON u.id = a.userid
      ORDER BY a.timecreated DESC";
$apps = $DB->get_records_sql($sql, [], 0, 100);

$template = new \local_jobboard\output\applications_table(array_values($apps));
echo $OUTPUT->render_from_template('local_jobboard/application_row', ['applications' => []]); // Header via page-level table below.

if ($apps) {
    echo html_writer::start_tag('table', ['class' => 'generaltable']);
    echo html_writer::start_tag('thead');
    echo html_writer::tag('tr',
        html_writer::tag('th', get_string('title', 'local_jobboard')) .
        html_writer::tag('th', get_string('user')) .
        html_writer::tag('th', get_string('status', 'local_jobboard')) .
        html_writer::tag('th', get_string('time')) .
        html_writer::tag('th', get_string('actions', 'local_jobboard'))
    );
    echo html_writer::end_tag('thead');
    echo html_writer::start_tag('tbody');

    foreach ($apps as $r) {
        $viewurl = new moodle_url('/local/jobboard/ajax.php', ['action' => 'viewapp', 'id' => $r->id]);
        echo html_writer::tag('tr',
            html_writer::tag('td', format_string($r->jobtitle)) .
            html_writer::tag('td', fullname($r)) .
            html_writer::tag('td', s($r->status)) .
            html_writer::tag('td', userdate($r->timecreated)) .
            html_writer::tag('td',
                html_writer::start_tag('form', ['method' => 'post', 'action' => new moodle_url('/local/jobboard/manage.php')]) .
                html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'sesskey', 'value' => sesskey()]) .
                html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'action', 'value' => 'status']) .
                html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'id', 'value' => $r->id]) .
                html_writer::select([
                    'submitted' => get_string('status_submitted', 'local_jobboard'),
                    'under_review' => get_string('status_under_review', 'local_jobboard'),
                    'shortlisted' => get_string('status_shortlisted', 'local_jobboard'),
                    'rejected' => get_string('status_rejected', 'local_jobboard'),
                    'offer' => get_string('status_offer', 'local_jobboard'),
                    'hired' => get_string('status_hired', 'local_jobboard'),
                ], 'status', $r->status, false) . ' ' .
                html_writer::empty_tag('input', ['type' => 'text', 'name' => 'note', 'placeholder' => get_string('note', 'local_jobboard')]) . ' ' .
                html_writer::empty_tag('input', ['type' => 'submit', 'class' => 'btn btn-secondary btn-sm', 'value' => get_string('update', 'local_jobboard')]) .
                html_writer::end_tag('form')
            )
        );
    }

    echo html_writer::end_tag('tbody');
    echo html_writer::end_tag('table');
} else {
    echo $OUTPUT->notification(get_string('noapps', 'local_jobboard'), \core\output\notification::NOTIFY_INFO);
}

echo $OUTPUT->footer();
