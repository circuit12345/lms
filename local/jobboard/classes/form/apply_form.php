<?php
namespace local_jobboard\form;

defined('MOODLE_INTERNAL') || die();

use moodleform;

require_once($CFG->libdir.'/formslib.php');

class apply_form extends moodleform {
    public function definition() {
        $mform = $this->_form;

        $mform->addElement('textarea', 'coverletter', get_string('coverletter', 'local_jobboard'), 'wrap="virtual" rows="8"');
        $mform->setType('coverletter', PARAM_RAW);

        $mform->addElement('filepicker', 'resume_file', get_string('resume', 'local_jobboard'), null, [
            'maxbytes' => 0,
            'accepted_types' => $this->get_allowed_types()
        ]);

        $mform->addRule('resume_file', null, 'required', null, 'client');

        $mform->addElement('hidden', 'jobid');
        $mform->setType('jobid', PARAM_INT);

        $this->add_action_buttons(true, get_string('submitapplication', 'local_jobboard'));
    }

    protected function get_allowed_types(): array {
        $cfg = get_config('local_jobboard', 'allowedtypes');
        $exts = array_filter(array_map('trim', explode(',', $cfg ?: 'pdf,doc,docx')));
        return array_map(function($e){ return '.'.ltrim($e, '.'); }, $exts);
    }
}
