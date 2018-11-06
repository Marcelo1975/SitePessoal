<?php
// Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/theme-customizer/theme-customizer.php';

// Hooks
add_action('wp_enqueue_scripts', 'ms_theme_styles');
add_action('after_setup_theme', 'ms_after_setup');
add_action('customize_register', 'ms_customize_register');