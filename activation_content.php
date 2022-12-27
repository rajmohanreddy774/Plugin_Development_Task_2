<?php
//function to show content page on activation of plugin
function hwy_add_content_on_activation()
{
    if (get_option('hwy_page_id', false)) {
        return;
    }
    $post_id = wp_insert_post(
        array(
            //__('content','unique identifier of plugin') helps to translate
            'post_title' => __('Hello World confirmation', 'hello-world-insert'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => __('My plugin was just activated!'),
        )
    );
    update_option('hwy_page_id', $post_id);
}

register_activation_hook(__FILE__, 'hwy_add_content_on_activation');
