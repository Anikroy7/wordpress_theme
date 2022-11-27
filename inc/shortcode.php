<?php

function basic_shortcoder()
{
    return 'Anik is a web developer';
}
add_shortcode('text', 'basic_shortcoder');


function btn_shortcode($atts, $content = null)
{
    $values = shortcode_atts(array(
        'url' => '#',
    ), $atts);

    return '<a class="button" href="' . esc_attr($values['url']) . '">' . $content . '<a/>';
}
add_shortcode('button', 'btn_shortcode');
