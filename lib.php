<?php

function local_greetings_extend_navigation_frontpage(navigation_node $frontpage)
{
    $frontpage->add(
        get_string('pluginname', 'local_greetings'),
        new moodle_url('/local/greetings/index.php'),
        navigation_node::TYPE_CUSTOM,
        null,
        null,
        new pix_icon('t/message', '')
    );
}


function local_greetings_extend_navigation(global_navigation $root) {
    $node = navigation_node::create(
        get_string('pluginname', 'local_greetings'),
        new moodle_url('/local/greetings/index.php')
    );
    $node->showinflatnavigation = true;
    $root->add_node($node);
}
