<?php
namespace local_jobboard\table;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/tablelib.php');

class applications extends \table_sql {
    public function __construct($uniqueid) {
        parent::__construct($uniqueid);
        $this->define_columns(['jobtitle', 'user', 'status', 'timecreated', 'actions']);
        $this->define_headers([get_string('title', 'local_jobboard'), get_string('user'), get_string('status', 'local_jobboard'),
            get_string('time'), get_string('actions', 'local_jobboard')]);
        $this->sortable(true, 'timecreated', SORT_DESC);
        $this->collapsible(false);
    }

    public function col_user($row) {
        return fullname($row);
    }

    public function col_actions($row) {
        $url = new \moodle_url('/local/jobboard/manage.php', ['viewapp' => $row->id]);
        return \html_writer::link($url, get_string('view', 'local_jobboard'));
    }
}
