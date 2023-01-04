<?php
defined('MOODLE_INTERNAL') || die();

function local_greetings_get_greeting($user) {
    if (!$user) {
        return get_string('greetinguser', 'local_greetings');
    }

    $country = $user->country;
    switch ($country) {
        case 'ES':
            $langstr = 'greetinguseres';
            break;
        case "EN":
            $langstr = "greetinguserau";
            break;
        case "FR":
            $langstr = "greetinguserfr";
            break;
        default:
            $langstr = 'greetingloggedinuser';
            break;
    }

    return get_string($langstr, 'local_greetings', fullname($user));
}

