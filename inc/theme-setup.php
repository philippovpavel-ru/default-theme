<?php
add_action( 'after_setup_theme', '_sd_t_theme_setup' );
function _sd_t_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-primary' => 'Основное меню',
			'menu-mobile' => 'Мобильное меню',
			'menu-dropdown' => 'Выпадающее меню',
			'menu-footer' => 'Меню в подвале',
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 67,
			'width'       => 59,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}