<?php
namespace local_jobboard\form;

defined('MOODLE_INTERNAL') || die();

use moodleform;

require_once($CFG->libdir.'/formslib.php');

class job_form extends moodleform {
    public function definition() {
        $mform = $this->_form;

        $mform->addElement('text', 'title', get_string('title', 'local_jobboard'));
        $mform->setType('title', PARAM_TEXT);
        $mform->addRule('title', null, 'required', null, 'client');

        $mform->addElement('textarea', 'summary', get_string('summary', 'local_jobboard'), 'wrap="virtual" rows="4"');
        $mform->setType('summary', PARAM_RAW);

        $mform->addElement('editor', 'description_editor', get_string('description', 'local_jobboard'), null, ['maxfiles' => 0]);
        $mform->setType('description_editor', PARAM_RAW);

        $mform->addElement('text', 'location', get_string('location', 'local_jobboard'));
        $mform->setType('location', PARAM_TEXT);

        $mform->addElement('text', 'jobtype', get_string('jobtype', 'local_jobboard'));
        $mform->setType('jobtype', PARAM_TEXT);

        $mform->addElement('text', 'tags', get_string('tags', 'local_jobboard'));
        $mform->setType('tags', PARAM_TEXT);

        $mform->addElement('text', 'salaryrange', get_string('salaryrange', 'local_jobboard'));
        $mform->setType('salaryrange', PARAM_TEXT);

        $mform->addElement('date_time_selector', 'applydeadline', get_string('applydeadline', 'local_jobboard'), ['optional' => true]);

        $mform->addElement('advcheckbox', 'published', get_string('published', 'local_jobboard'));
        $mform->setDefault('published', 1);

        $this->add_action_buttons(true, get_string('savechanges'));
    }

    public function set_data_for_edit(\stdClass $job) {
        $job->description_editor = [
            'text' => $job->description,
            'format' => FORMAT_HTML
        ];
        parent::set_data($job);
    }
}
