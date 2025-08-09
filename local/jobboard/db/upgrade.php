<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_local_jobboard_upgrade($oldversion) {
    global $DB;

    // Add expirydate column if not exists.
    if ($oldversion < 2025080800) {
        $table = new xmldb_table('jobboard_jobs');
        $field = new xmldb_field('expirydate', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'dateposted');

        // Only add if it doesn't already exist.
        if (!$DB->get_manager()->field_exists($table, $field)) {
            $dbman = $DB->get_manager();
            $dbman->add_field($table, $field);
        }

        // Savepoint to mark upgrade done.
        upgrade_plugin_savepoint(true, 2025080802, 'local', 'jobboard');
    }

    return true;
}
