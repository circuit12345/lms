<?php
namespace local_jobboard\output;

defined('MOODLE_INTERNAL') || die();

use renderable;
use templatable;
use renderer_base;
use moodle_url;

class job_view implements renderable, templatable {
    protected $job;
    protected $canapply;

    public function __construct(\stdClass $job, bool $canapply) {
        $this->job = $job;
        $this->canapply = $canapply;
    }

    public function export_for_template(renderer_base $output) {
        global $DB, $USER;
        $statusopen = $this->job->published && (empty($this->job->applydeadline) || $this->job->applydeadline > time());

        // If user can apply, ensure they have not already applied.
        $alreadyapplied = false;
        if ($this->canapply && $statusopen && isloggedin() && !isguestuser()) {
            $alreadyapplied = $DB->record_exists('jobboard_applications', [
                'jobid' => $this->job->id,
                'userid' => $USER->id
            ]);
        }

        return [
            'id' => $this->job->id,
            'title' => format_string($this->job->title),
            'description' => format_text($this->job->description, FORMAT_HTML),
            'summary' => format_text($this->job->summary, FORMAT_HTML),
            'location' => s($this->job->location ?? ''),
            'jobtype' => s($this->job->jobtype ?? ''),
            'salaryrange' => s($this->job->salaryrange ?? ''),
            'deadline' => $this->job->applydeadline ? userdate($this->job->applydeadline) : '',
            'tags' => array_filter(array_map('trim', explode(',', $this->job->tags ?? ''))),
            'status_label' => $statusopen ? get_string('open', 'local_jobboard') : get_string('closed', 'local_jobboard'),
            'apply_url' => (new moodle_url('/local/jobboard/apply.php', ['jobid' => $this->job->id]))->out(false),
            'canapply' => $this->canapply && $statusopen && !$alreadyapplied,
            'alreadyapplied' => $alreadyapplied,
        ];
    }
}
