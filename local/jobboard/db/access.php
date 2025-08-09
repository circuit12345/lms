<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = [
    'local/jobboard:managejobs' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW
        ],
    ],
    'local/jobboard:applyjobs' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'student' => CAP_ALLOW,
            'user' => CAP_ALLOW,
        ],
    ],
    'local/jobboard:viewapplications' => [
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'manager' => CAP_ALLOW
        ],
    ],
];
