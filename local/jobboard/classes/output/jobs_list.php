namespace local_jobboard\output;

defined('MOODLE_INTERNAL') || die();

class jobs_list implements \renderable, \templatable {
    protected $jobs;
    protected $canapply;

    public function __construct(array $jobs, bool $canapply) {
        $this->jobs = $jobs;
        $this->canapply = $canapply;
    }

    public function export_for_template(\renderer_base $output) {
        $uniquejobs = [];
        $seen = [];

        foreach ($this->jobs as $job) {
            if (!isset($seen[$job->id])) {
                $seen[$job->id] = true;
                $jobdata = new \stdClass();
                $jobdata->id = $job->id;
                $jobdata->status_class = strtolower($job->status);
                $jobdata->status_label = ucfirst($job->status);
                $jobdata->tags = explode(',', $job->tags);
                $jobdata->title = format_string($job->title);
                $jobdata->location = format_string($job->location);
                $jobdata->jobtype = format_string($job->jobtype);
                $jobdata->posted_relative = userdate($job->timemodified, '%d/%m/%y');
                $jobdata->summary = format_text($job->summary, FORMAT_HTML);
                $jobdata->view_url = (string)new \moodle_url('/local/jobboard/view.php', ['id' => $job->id]);
                $jobdata->canapply = $this->canapply;
                $uniquejobs[] = $jobdata;
            }
        }
        return ['jobs' => $uniquejobs];
    }
}
