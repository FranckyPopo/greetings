<?php
// defined('MOODLE_INTERNAL') || die();
require_once('../../config.php');
require_once($CFG->dirroot. "/local/greetings/message_form.php");

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading("HEllO WORD FRANCK");
$messages = $DB->get_records("local_greetings_messages");

echo $OUTPUT->header();

$form = new local_greetings_message_form();
$form->display();

foreach ($messages as $message) {
    print("<p>". $message->message . " crée le ". userdate($message->timecreated) ."</p>");
}

if ($data = $form->get_data()) {
    $message = required_param("message", PARAM_TEXT);
    
    if ($message) {
        $record = new stdClass();
        $record->message = $message;
        $record->timecreated = time();
        $DB->insert_record("local_greetings_messages", $record);
    }
}



echo $OUTPUT->footer();

