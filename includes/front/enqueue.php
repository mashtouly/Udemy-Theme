<?php

function ud_enqueue()
{

    // styles 

    wp_register_style('ud_google_fonts','http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic');
    wp_register_style('ud_bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_register_style('ud_style',get_template_directory_uri() . '/assets/style.css');
    wp_register_style('ud_dark',get_template_directory_uri() . '/assets/css/dark.css');
    wp_register_style('ud_font_icons',get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_register_style('ud_animate',get_template_directory_uri() . '/assets/css/animate.css');
    wp_register_style('ud_magnific_popup',get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_register_style('ud_responsive',get_template_directory_uri() . '/assets/css/responsive.css');
    wp_register_style('ud_custom',get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_style('ud_google_fonts');
    wp_enqueue_style('ud_bootstrap');
    wp_enqueue_style('ud_style');
    wp_enqueue_style('ud_dark');
    wp_enqueue_style('ud_font_icons');
    wp_enqueue_style('ud_animate');
    wp_enqueue_style('ud_magnific_popup');
    wp_enqueue_style('ud_responsive');
    wp_enqueue_style('ud_custom');

    // scripts

    wp_register_script('ud_plugins', get_template_directory_uri() . '/assets/js/plugins.js');
    wp_register_script('ud_functions', get_template_directory_uri() . '/assets/js/functions.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('ud_plugins');
    wp_enqueue_script('ud_functions');
}