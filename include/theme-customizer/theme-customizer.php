<?php
require get_template_directory().'/include/theme-customizer/social.php';
require get_template_directory().'/include/theme-customizer/info.php';
require get_template_directory().'/include/theme-customizer/color.php';

function ms_customize_register( $wp_customize ) {

	ms_social_customizer( $wp_customize );
	ms_info_customizer( $wp_customize );
	ms_color_customizer( $wp_customize );
}