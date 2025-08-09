<?php
defined('MOODLE_INTERNAL') || die();

function local_jobboard_extend_navigation(global_navigation $nav) {
    global $USER;

    if (!isloggedin() || isguestuser()) {
        return;
    }

    // Add a top-level node under 'site' for all logged-in users
    $url = new moodle_url('/local/jobboard/index.php');
    $node = navigation_node::create(
        get_string('pluginname', 'local_jobboard'),
        $url,
        navigation_node::TYPE_CUSTOM,
        null,
        'local_jobboard',
        new pix_icon('i/navigationitem', '')
    );

    $nav->add_node($node);
}

// Mobile app handler
function local_jobboard_mobile_jobboard_view() {
    global $CFG;
    return [
        'title' => get_string('pluginname', 'local_jobboard'),
        'url' => $CFG->wwwroot . '/local/jobboard/index.php',
        'restrict' => 0
    ];
}
