<?php
namespace local_skillcheck;

defined('MOODLE_INTERNAL') || die();

class observer {
    public static function user_loggedin(\core\event\user_loggedin $event) {
        global $CFG, $USER;

        if (is_siteadmin() || isguestuser()) {
            return true;
        }

        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        if (preg_match('~/local/skillcheck/index\.php$~', $script)) {
            return true;
        }

        require_once($CFG->dirroot . '/user/profile/lib.php');
        $record = profile_user_record($USER->id, false);
        $value  = ($record && property_exists($record, 'skillset')) ? $record->skillset : '';

        if (empty($value)) {
            redirect(new \moodle_url('/local/skillcheck/index.php'));
        }
        return true;
    }
}
