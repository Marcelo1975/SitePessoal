<?php
function ms_color_customizer( $wp_customize ) {
	// Settings
	$wp_customize->add_setting('ms_color', array('default'=>'#CCCCCC'));
	$wp_customize->add_setting('ms_img', array('default'=>''));

	// Sections
	$wp_customize->add_section('ms_color_section', array(
		'title' => 'Cor e Imagem Padrão',
		'priority' => '3'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'ms_color',
			array(
				'label' => 'Cor padrão do tema',
				'section' => 'ms_color_section',
				'settings' => 'ms_color'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'ms_img',
			array(
				'label' => 'Imagem padrão do tema',
				'section' => 'ms_color_section',
				'settings' => 'ms_img',
				'width' => 500,
				'height' => 500
			)
		)
	);
}