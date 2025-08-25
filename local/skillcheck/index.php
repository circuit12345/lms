<?php
require('../../config.php');
require_once($CFG->libdir . '/formslib.php');
require_once($CFG->dirroot . '/user/profile/lib.php');
require_once($CFG->dirroot . '/local/skillcheck/classes/form/skills_form.php');

require_login();

$PAGE->set_url(new moodle_url('/local/skillcheck/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_skillcheck'));
$PAGE->set_heading(get_string('pluginname', 'local_skillcheck'));

// Load Boost theme CSS for modern styling
$PAGE->requires->css('/local/skillcheck/styles.css');

$form = new \local_skillcheck\form\skills_form();

if ($form->is_cancelled()) {
    redirect(new moodle_url('/'));
}

if ($data = $form->get_data()) {
    $values = is_array($data->skillset) ? implode(',', $data->skillset) : $data->skillset;

    $user = core_user::get_user($USER->id);
    $user->profile_field_skillset = $values;
    profile_save_data($user);
    redirect(new moodle_url('/user/profile.php', ['id' => $USER->id]), get_string('thanks', 'local_skillcheck'));
}

echo $OUTPUT->header();
?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="card-title mb-4 text-center"><?= get_string('fillskills', 'local_skillcheck'); ?></h2>
        <div class="card-body">
            <?php $form->display(); ?>
        </div>
    </div>
</div>

<?php
echo $OUTPUT->footer();
