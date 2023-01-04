<?php
require_once('../../config.php');
require_once($CFG->dirroot. "/local/greetings/message_form.php");

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading("HEllO WORD FRANCK");

$PAGE->navbar->ignore_active();
$PAGE->navbar->add(
    get_string('preview'),
    new moodle_url('/local/greetings/'),
    navigation_node::TYPE_CUSTOM,
    null,
    null,
    new pix_icon('t/message', '')
);

echo $OUTPUT->header();
$messageform = new local_greetings_message_form();
$messageform->display();

if ($data = $messageform->get_data()) {
    $message =required_param("message", PARAM_TEXT);
    echo $OUTPUT->heading($message, 1);
}
echo $OUTPUT->footer();
