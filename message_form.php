<?php

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

class local_greetings_message_form extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('textarea',  'message',  "Enter message");
        $mform->setType("message", PARAM_TEXT);
        $button_submit = "Send";
        $mform->addElement("submit", "submitmessage", $button_submit);
    }
}

