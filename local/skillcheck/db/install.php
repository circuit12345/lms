<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_local_skillcheck_install() {
    global $DB;

    $shortname = 'skillset';
    if (!$DB->record_exists('user_info_field', ['shortname' => $shortname])) {
        // Create category if missing
        $category = $DB->get_record('user_info_category', ['name' => 'Custom fields']);
        if (!$category) {
            $category = (object)[
                'name' => 'Custom fields',
                'sortorder' => 1
            ];
            $category->id = $DB->insert_record('user_info_category', $category);
        }

        // Create profile field
        $field = new stdClass();
        $field->shortname = $shortname;
        $field->name = 'Skill Set';
        $field->datatype = 'text';
        $field->description = 'Stores student skills';
        $field->descriptionformat = 1;
        $field->categoryid = $category->id;
        $field->sortorder = 1;
        $field->required = 0;
        $field->locked = 0;
        $field->visible = 1;
        $field->signup = 0;
        $field->param1 = 255; // max length
        $DB->insert_record('user_info_field', $field);
    }
}
