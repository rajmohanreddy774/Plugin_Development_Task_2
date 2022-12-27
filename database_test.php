<?php

//function to create table in local db
function hwy_create_custom_data_table()
{
    global $wpdb;
    //table name with prefix
    $table_name = $wpdb->prefix . 'hwy_custom_data';
    $charset = $wpdb->get_charset_collate();
    //sql command to create table with entities
    $sql = "CREATE TABLE $table_name (
    post_id int(11) NOT NULL,
    name char(10) NOT NULL,
    PRIMARY KEY (post_id)
    ) $charset;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
};

register_activation_hook(__FILE__, 'hwy_create_custom_data_table');
