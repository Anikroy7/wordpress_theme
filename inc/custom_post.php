<?php

function custom_service()
{
    register_post_type('service', array(
        'labels' => array(
            'name' => ('Sevices'),
            'singular_name' => ('Service'),
            'add_new' => ('Add new service'),
            'add_new_service' => ('Add new service'),
            'edit_item' => ('Edit service'),
            'new_item' => ('New service'),
            'view_item' => ('View service'),
            'not_found' => ('Sorry we couldn\'n found the service you are looking for!'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor',),
    ));
}

add_action('init', 'custom_service');
