<?php

include 'template-parts/enqueue.php';

$include_path = 'includes/';

require_once ( $include_path . 'theme-functions.php' );

$theme = new NewTheme();

$theme->activate_menus();

$theme->clean_custom_menus();

$theme->activate_class_body();

if ( function_exists( 'acf_add_options_page' ) ) {
	// add parent
	$parent = acf_add_options_page( array(
		'page_title' => __( 'Theme General Settings', 'dom-internet' ),
		'menu_title' => __( '<b>Расширенные</b>', 'dom-internet' ),
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => true,
		'icon_url'   => 'dashicons-screenoptions',
		'position'   => '2.3'
	) );
	// add sub page
	acf_add_options_sub_page( array(
		'page_title'  => 'Социальные сети ',
		'menu_slug'   => 'theme-socials-settings',
		'menu_title'  => 'Соц.сети',
		'redirect'    => false,
		'parent_slug' => $parent['menu_slug'],
	) );
	// add sub page
	acf_add_options_sub_page( array(
		'page_title'  => 'Меню с номерами ',
		'menu_slug'   => 'theme-menu_phones-settings',
		'menu_title'  => 'Меню с номерами',
		'redirect'    => false,
		'parent_slug' => $parent['menu_slug'],
	) );
}