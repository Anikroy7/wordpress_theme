<?php

/* 
* My theme functions
*/

// Theme title
add_theme_support('title-tag');

// Theme css and jquery file calling
function anik_css_js_file_calling_test()
{

    wp_enqueue_style('style-Anik', get_stylesheet_uri());
    wp_register_style("bootsrap", get_template_directory_uri() . './css/bootsrap.css', array(), '5.0.2', "all");
    wp_register_style("custom", get_template_directory_uri() . './css/custom.css', array(), '5.0.2', "all");
    wp_enqueue_style("bootsrap");
    wp_enqueue_style("custom");
    wp_enqueue_script("jquery");
    wp_enqueue_script("bootsrap", get_template_directory_uri() . "/js/bootsrap.js", array(), "5.2.2", "true");
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array(), "1.2.0", "true");
}

add_action("wp_enqueue_scripts", "anik_css_js_file_calling_test");


// Theme Function
function anik_customizer_register($wp_customize)
{

    $wp_customize->add_section("anik_header_area", array(
        'title' => __('Header Area', 'anikroy'),
        'description' => 'If you want to update the header area, Do it here.'
    ));

    $wp_customize->add_setting('anik_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.jpg',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anik_logo', array(
        'label' => 'Logo Uploaded',
        'setting' => 'anik_logo',
        'section' => 'anik_header_area'

    )));
}


add_action('customize_register', 'anik_customizer_register');
