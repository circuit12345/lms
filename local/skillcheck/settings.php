<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_skillcheck', get_string('pluginname', 'local_skillcheck'));

    $settings->add(new admin_setting_configtextarea(
        'local_skillcheck/options',
        get_string('options', 'local_skillcheck'),
        get_string('options_desc', 'local_skillcheck'),
        "C Programming\nPython\nEmbedded Systems\nAI/ML\nNetworking"
    ));

    $ADMIN->add('localplugins', $settings);
}
