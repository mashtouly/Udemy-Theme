<?php

// Setup


// Includes
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');
include(get_template_directory() . '/includes/customizer/social.php');
include(get_template_directory() . '/includes/customizer/misc-setting.php');
include(get_template_directory() . '/includes/customize-register.php');
include(get_template_directory() . '/includes/front/enqueue.php');

// Hooks
add_action('after_setup_theme','ud_setup');
add_action('widgets_init','ud_widgets');
add_action('wp_enqueue_scripts' , 'ud_enqueue');
add_action('customize_register' , 'ud_customize_register');
// Shortcuts