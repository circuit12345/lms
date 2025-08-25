<?php
defined('MOODLE_INTERNAL') || die();

$functions = [
    'local_jobboard_get_jobs' => [
        'classname'   => 'local_jobboard\\external\\api',
        'methodname'  => 'get_jobs',
        'classpath'   => '',
        'description' => 'List jobs with filters.',
        'type'        => 'read',
        'ajax'        => true,
        'capabilities' => 'local/jobboard:viewjobs'
    ],
];

$services = [
    'Jobboard Services' => [
        'functions' => ['local_jobboard_get_jobs'],
        'restrictedusers' => 0,
        'enabled' => 0,
        'shortname' => 'local_jobboard_services'
    ]
];
