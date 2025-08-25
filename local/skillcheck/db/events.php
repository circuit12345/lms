<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'   => '\core\event\user_loggedin',
        'callback'    => '\local_skillcheck\observer::user_loggedin',
        'includefile' => '/local/skillcheck/classes/observer.php',
        'priority'    => 9999,
    ],
];
