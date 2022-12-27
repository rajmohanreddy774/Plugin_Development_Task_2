<?php 
//function to add welcome screen to the plugin
function hwy_plugin_welcome_screen(){
    add_dashboard_page('welocme','welcome','read','hwy_plugin_welcome','hwy_display_welcome_page');

}

add_action('admin_menu', 'hwy_add_plugin_welcome_screen');

function hwy_display_welcome_page(){
    //html content from welcome.php
    include dirname(__FILE__) . '/welcome.php';
}