<?php


// Theme Function
function anik_customizer_register($wp_customize)
{
    // Header Option 
    $wp_customize->add_section("anik_header_area", array(
        'title' => __('Header Area', 'anikroy'),
        'description' => 'If you want to update the header area, Do it here.'
    ));
    $wp_customize->add_setting('anik_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/download (1).png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anik_logo', array(
        'label' => 'Logo Uploaded',
        'setting' => 'anik_logo',
        'section' => 'anik_header_area'

    )));

    // Menu Position option
    $wp_customize->add_section("anik_menu_option", array(
        'title' => __('Menu Position Option', 'anikroy'),
        'description' => 'If you want to change your menu position you can do it.'
    ));
    $wp_customize->add_setting('anik_menu_position', array(
        'default' => 'right_menu',
    ));
    $wp_customize->add_control('anik_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => '  ',
        'section' => 'anik_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_Menu' => 'Center Menu',
        )

    ));


    // Theme Color
    $wp_customize->add_section('anik_colors', array(
        'title' => __('Theme Color ', 'anikroy'),
        'description' => 'If need you can change your theme color.',
    ));


    $wp_customize->add_setting('anik_bg_color', array(
        'default' => '#ffffff',
    ));
    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'anik_bg_color', array(
        'label' => 'Background Color',
        'section' => 'anik_colors',
        'settings' => 'anik_bg_color',
    )));

    $wp_customize->add_setting('anik_primary_color', array(
        'default' => '#ea1a70',
    ));
    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'anik_primary_color', array(
        'label' => 'Primary Color',
        'section' => 'anik_colors',
        'settings' => 'anik_primary_color',
    )));



    // Footer option
    $wp_customize->add_section("anik_footer_option", array(
        'title' => __('footer Option', 'anikroy'),
        'description' => 'If you want to change your footer position you can do it.'
    ));
    $wp_customize->add_setting('anik_copyright_section', array(
        'default' => '&copy; Copyright 2022 | Web Development By Anik',
    ));
    $wp_customize->add_control('anik_copyright_section', array(
        'label' => 'Copyright text',
        'description' => 'You can update your copyright text from here',
        'setting' => 'anik_copyright_section',
        'section' => 'anik_footer_option',

    ));
}


add_action('customize_register', 'anik_customizer_register');

function anik_theme_color_customization()
{
?>
    <style>
        body {
            background: <?php echo get_theme_mod('anik_bg_color'); ?>
        }

        :root {
            --pink: <?php echo get_theme_mod('anik_primary_color'); ?>
        }
    </style>
<?php
}


add_action('wp_head',  'anik_theme_color_customization');
