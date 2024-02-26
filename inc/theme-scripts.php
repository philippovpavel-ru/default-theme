<?php
add_action( 'wp_enqueue_scripts', '_sd_t_theme_scripts' );
function _sd_t_theme_scripts() {
	wp_enqueue_style(
		'font-roboto',
		'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'
	);
	wp_enqueue_style(
		'main-style',
		_SD_T_URL_ .'/css/style.css',
		[],
		filemtime( _SD_T_DIR_ .'/css/style.css' )
	);
	wp_enqueue_style(
		'_sd-theme-style',
		get_stylesheet_uri(),
		[],
		filemtime( _SD_T_DIR_ .'/style.css' )
	);

	wp_enqueue_script(
		'main-script',
		_SD_T_URL_ .'/js/main.js',
		[],
		filemtime( _SD_T_DIR_ .'/js/main.js' ),
		true
	);
	wp_enqueue_script(
		'_sd-theme-script',
		_SD_T_URL_ .'/script.js',
		[],
		filemtime( _SD_T_DIR_ .'/script.js' ),
		true
	);
}