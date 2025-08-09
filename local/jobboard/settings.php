<?php

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $ADMIN->add('localplugins', new admin_externalpage(
        'local_jobboard',
        get_string('pluginname', 'local_jobboard'),
        new moodle_url('/local/jobboard/index.php'),
        'local/jobboard:managejobs'
    ));
}
