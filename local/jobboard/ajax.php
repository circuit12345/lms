<?php
require('../../config.php');
require_login();

$action = required_param('action', PARAM_ALPHANUMEXT);
$context = context_system::instance();

require_sesskey();

switch ($action) {
    case 'viewapp':
        require_capability('local/jobboard:viewapplications', $context);
        $id = required_param('id', PARAM_INT);
        $app = $DB->get_record('jobboard_applications', ['id' => $id], '*', MUST_EXIST);
        $job = $DB->get_record('jobboard_jobs', ['id' => $app->jobid], '*', MUST_EXIST);
        $user = core_user::get_user($app->userid, '*', MUST_EXIST);

        echo $OUTPUT->header();
        echo html_writer::tag('h3', format_string($job->title));
        echo html_writer::div(fullname($user) . ' · ' . s($user->email));
        echo html_writer::div(get_string('status', 'local_jobboard') . ': ' . s($app->status));
        // Show resume files
        $files = get_file_storage()->get_area_files($context->id, 'local_jobboard', 'resume', $app->id, 'id', false);
        foreach ($files as $f) {
            $url = moodle_url::make_pluginfile_url(
                $f->get_contextid(), $f->get_component(), $f->get_filearea(),
                $f->get_itemid(), $f->get_filepath(), $f->get_filename(), true
            );
            echo html_writer::div(html_writer::link($url, $f->get_filename(), ['target' => '_blank']));
        }
        echo $OUTPUT->footer();
        break;

    default:
        print_error('invalidaction');
}
