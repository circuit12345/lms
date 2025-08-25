<?php
namespace local_skillcheck\form;

defined('MOODLE_INTERNAL') || die();

use moodleform;

class skills_form extends moodleform {
    public function definition() {
        $mform = $this->_form;

        $optionsraw = trim(get_config('local_skillcheck', 'options') ?? '');
        $options = [];
        foreach (preg_split("/\r\n|\n|\r/", $optionsraw) as $line) {
            $line = trim($line);
            if ($line !== '') {
                $options[$line] = $line;
            }
        }
        if (empty($options)) {
            $options = [
                'C Programming' => 'C Programming',
                'Python' => 'Python',
                'Embedded Systems' => 'Embedded Systems',
            ];
        }

        // Create checkboxes
        $checkboxes = [];
        foreach ($options as $key => $label) {
            $checkboxes[] = $mform->createElement('advcheckbox', 'skillset['.$key.']', '', $label, ['group' => 1], [0, 1]);
        }

        $mform->addGroup($checkboxes, 'skillsetgroup', get_string('skillset', 'local_skillcheck'), ['<br>'], false);
        $mform->addRule('skillsetgroup', get_string('required'), 'required', null, 'client');

        $mform->addElement('submit', 'submitbtn', get_string('savecontinue', 'local_skillcheck'));
    }

    // 🔥 Convert checkbox 0/1 into readable list
    public function get_data() {
        $data = parent::get_data();
        if ($data && isset($data->skillset)) {
            $selected = [];
            foreach ($data->skillset as $skill => $checked) {
                if ($checked) {
                    $selected[] = $skill;
                }
            }
            $data->skillset = implode(', ', $selected);
        }
        return $data;
    }
}
