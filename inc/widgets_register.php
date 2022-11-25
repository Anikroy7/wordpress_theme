<?php

//Sidebar register function

function anik_widgets_register()
{

    register_sidebar(array(
        'name' => __('Main Widget Area', 'anikroy'),
        'id'   => 'sideber-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anikroy'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    // Footer area
    register_sidebar(array(
        'name' => __('Footer One', 'anikroy'),
        'id'   => 'footer-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anikroy'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Two', 'anikroy'),
        'id'   => 'footer-2',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anikroy'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Three', 'anikroy'),
        'id'   => 'footer-3',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'anikroy'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'anik_widgets_register');
