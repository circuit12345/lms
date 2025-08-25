<?php
// local/jobboard/portal.php
require('../../config.php');

require_login();
$context = context_system::instance();

// Basic visibility: must be able to view jobs.
require_capability('local/jobboard:viewjobs', $context);

// Decide destination by capability priority:
// 1) Managers/Admins: manage jobs.
// 2) Teachers: can view applications.
// 3) Students (applicants): my applications.
// 4) Others: public jobs list.

if (has_capability('local/jobboard:managejobs', $context)) {
    redirect(new moodle_url('/local/jobboard/manage.php'));
}

if (has_capability('local/jobboard:viewapplications', $context)) {
    // Teachers get to manage.php (it will be read-only unless they also have manage capability).
    redirect(new moodle_url('/local/jobboard/manage.php'));
}

if (has_capability('local/jobboard:apply', $context)) {
    redirect(new moodle_url('/local/jobboard/my.php'));
}

// Fallback: jobs listing.
redirect(new moodle_url('/local/jobboard/index.php'));
