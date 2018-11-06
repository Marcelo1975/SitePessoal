<?php
function ms_social_customizer( $wp_customize ) {
	// Settings
	$wp_customize->add_setting('ms_facebook', array('default' => ''));
	$wp_customize->add_setting('ms_twitter', array('default' => ''));
	$wp_customize->add_setting('ms_gplus', array('default' => ''));
	$wp_customize->add_setting('ms_instagram', array('default' => ''));

	// Sections
	$wp_customize->add_section('ms_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => '1'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_facebook',
			array(
				'label' => 'Link do Facebook',
				'section' => 'ms_social_section',
				'settings' => 'ms_facebook',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_twitter',
			array(
				'label' => 'Link do Twitter',
				'section' => 'ms_social_section',
				'settings' => 'ms_twitter',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_instagram',
			array(
				'label' => 'Link do Instagram',
				'section' => 'ms_social_section',
				'settings' => 'ms_instagram',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_gplus',
			array(
				'label' => 'Link do Google Plus',
				'section' => 'ms_social_section',
				'settings' => 'ms_gplus',
				'type' => 'text'
			)
		)
	);
}