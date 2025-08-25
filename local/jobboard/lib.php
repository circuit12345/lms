<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Add Job Board entries to global navigation (left drawer).
 */
function local_jobboard_extend_navigation(global_navigation $nav): void {
    $ctx = context_system::instance();

    // Only users allowed to view jobs see the menu.
    if (!has_capability('local/jobboard:viewjobs', $ctx)) {
        return;
    }

    // Place under Site home if available, else at root.
    $parent = $nav->find('home', navigation_node::TYPE_SYSTEM) ?: $nav;

    // Avoid duplicates.
    if ($nav->find('local_jobboard', navigation_node::TYPE_CUSTOM)) {
        return;
    }

    // Main "Job Board" node.
    $parent->add(
        get_string('pluginname', 'local_jobboard'),
        new moodle_url('/local/jobboard/index.php'),
        navigation_node::TYPE_CUSTOM,
        null,
        'local_jobboard',
        new pix_icon('icon', get_string('pluginname', 'local_jobboard'), 'local_jobboard')
    );

    // Optional: show "My applications" only to users who can apply (students).
    if (has_capability('local/jobboard:apply', $ctx)) {
        $parent->add(
            get_string('nav_myapps', 'local_jobboard'),
            new moodle_url('/local/jobboard/my.php'),
            navigation_node::TYPE_CUSTOM,
            null,
            'local_jobboard_my'
        );
    }

    // Optional: show "Manage jobs" only to managers/admins.
    if (has_capability('local/jobboard:managejobs', $ctx)) {
        $parent->add(
            get_string('nav_manage', 'local_jobboard'),
            new moodle_url('/local/jobboard/manage.php'),
            navigation_node::TYPE_CUSTOM,
            null,
            'local_jobboard_manage'
        );
    }
}

/**
 * Serve files from the jobboard file areas (resumes).
 */
function local_jobboard_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = []) {
    require_login();

    if ($context->contextlevel != CONTEXT_SYSTEM) {
        return false;
    }
    if ($filearea !== 'resume') {
        return false;
    }

    $itemid = array_shift($args);
    $relativepath = implode('/', $args);
    $fullpath = "/{$context->id}/local_jobboard/$filearea/$itemid/$relativepath";

    $fs = get_file_storage();
    if (!$file = $fs->get_file_by_hash(sha1($fullpath))) {
        return false;
    }

    global $USER, $DB;
    $app = $DB->get_record('jobboard_applications', ['id' => $itemid], '*', MUST_EXIST);
    $sysctx = context_system::instance();

    // Only owner or staff (viewapplications or managejobs) can access the file.
    if ($USER->id != $app->userid && !has_any_capability(['local/jobboard:viewapplications', 'local/jobboard:managejobs'], $sysctx)) {
        send_file_not_found();
    }

    send_stored_file($file, 0, 0, true, $options);
}
