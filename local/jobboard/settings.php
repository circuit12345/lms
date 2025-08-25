<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_jobboard', get_string('pluginname', 'local_jobboard'));

    $settings->add(new admin_setting_configcheckbox(
        'local_jobboard/enableinfinite',
        get_string('enableinfinite', 'local_jobboard'),
        get_string('enableinfinite_desc', 'local_jobboard'),
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_jobboard/jobspagecount',
        get_string('jobspagecount', 'local_jobboard'),
        get_string('jobspagecount_desc', 'local_jobboard'),
        12,
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_jobboard/allowedtypes',
        get_string('allowedtypes', 'local_jobboard'),
        get_string('allowedtypes_desc', 'local_jobboard'),
        'pdf,doc,docx'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_jobboard/notifyapplicant',
        get_string('notifyapplicant', 'local_jobboard'),
        get_string('notifyapplicant_desc', 'local_jobboard'),
        1
    ));

    $ADMIN->add('localplugins', $settings);
}
