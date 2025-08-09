<?php
defined('MOODLE_INTERNAL') || die();

$addons = [
    'local_jobboard' => [
        'handlers' => [
            'jobboard' => [
                'delegate' => 'CoreMainMenuDelegate',
                'method' => 'mobile_jobboard_view',
                'title' => get_string('pluginname', 'local_jobboard'),
                'icon' => '/local/jobboard/icon.png',
                'styles' => [],
            ],
        ],
        'lang' => [
            ['local_jobboard', 'pluginname'],
        ],
    ],
];
