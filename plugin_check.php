<?php

//plugin check for versions minimum required
$plugin_checks = new HWY_Requirements('shortcode test', 'HWY_PLUGIN_FILE', array(
    'PHP' => '5.3.3',
    //if we add 'php'=>'9.1'  it shows message to update the requirements in dashboad 
    'WordPress' => '4.9',

));
if (false === $plugin_checks->pass()) {
    $plugin_checks->halt();
    return;
}