<?php
/*
Plugin Name: insert post plugin
Description: New plugin for translation
Version: 1.0
Author: Raj
Author URI: http://localhost:10030/
License: GPL v2 or later
Text Domain: hello-world-insert
*/

//importing api call function from api_call_test.php
require_once dirname(__FILE__) . '/api_call_test.php';
require_once dirname(__FILE__) . '/plugin_check.php';
require_once dirname(__FILE__) . '/activation_content.php';

//enqueue script for css in plugin
function plugin_styles()
{
    wp_enqueue_style(
        'MyPluginStyles',
        plugins_url('/style.css', __FILE__)
    );
}



