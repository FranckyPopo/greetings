<?php
defined('MOODLE_INTERNAL') || die();
require_once('../../config.php');


function get_messages() {
    $messages = $DB->get_records("local_greetings_messages");
    return $messages;
}