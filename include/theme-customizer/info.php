<?php
function ms_info_customizer( $wp_customize ) {
	// Settings
	$wp_customize->add_setting('ms_idade', array('default' => ''));
	$wp_customize->add_setting('ms_endereco', array('default' => ''));
	$wp_customize->add_setting('ms_email', array('default' => ''));
	$wp_customize->add_setting('ms_telefone', array('default' => ''));
	$wp_customize->add_setting('ms_site', array('default' => ''));

	// Sections
	$wp_customize->add_section('ms_info_section', array(
		'title' => 'Informações Pessoais',
		'priority' => '2'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_idade',
			array(
				'label' => 'Idade',
				'section' => 'ms_info_section',
				'settings' => 'ms_idade',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_endereco',
			array(
				'label' => 'Endereço',
				'section' => 'ms_info_section',
				'settings' => 'ms_endereco',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_email',
			array(
				'label' => 'E-mail',
				'section' => 'ms_info_section',
				'settings' => 'ms_email',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_telefone',
			array(
				'label' => 'Telefone',
				'section' => 'ms_info_section',
				'settings' => 'ms_telefone',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ms_site',
			array(
				'label' => 'Site',
				'section' => 'ms_info_section',
				'settings' => 'ms_site',
				'type' => 'text'
			)
		)
	);
}