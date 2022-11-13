<?php

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


// Google fonts enqueue
function anik_add_google_fonts()
{
    wp_enqueue_style('anik_google_fonts', "https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Roboto&display=swap", false);
};

add_action('wp_enqueue_scripts', 'anik_add_google_fonts');
