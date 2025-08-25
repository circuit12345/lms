<?php
namespace local_jobboard\output;

defined('MOODLE_INTERNAL') || die();

use renderable;
use templatable;
use renderer_base;

class applications_table implements renderable, templatable {
    protected $rows;

    public function __construct(array $rows) {
        $this->rows = $rows;
    }

    public function export_for_template(renderer_base $output) {
        $items = [];
        foreach ($this->rows as $r) {
            $items[] = [
                'id' => $r->id,
                'jobtitle' => format_string($r->jobtitle),
                'applicant' => fullname($r),
                'status' => s($r->status),
                'submitted' => userdate($r->timecreated),
                'viewurl' => (new \moodle_url('/local/jobboard/ajax.php', ['action' => 'viewapp', 'id' => $r->id]))->out(false)
            ];
        }
        return ['applications' => $items];
    }
}
