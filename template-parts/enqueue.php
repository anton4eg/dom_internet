<?php

function enqueue_frontend() {

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.0.0.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri().'/assets/js/jquery-migrate-1.4.1.min.js',array(),false, true );
	wp_enqueue_script( 'jquery-mask', get_template_directory_uri().'/assets/js/jquery.mask.js',array(),false, true );
	wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/components/slick.js',array(),false, true );
	wp_enqueue_script( 'jquery-formstyler', get_template_directory_uri().'/assets/js/components/jquery.formstyler.js',array(),false, true );
	wp_enqueue_script( 'jquery-mCustomScrollbar', get_template_directory_uri().'/assets/js/components/jquery.mCustomScrollbar.js',array(),false, true );
	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri().'/assets/js/components/jquery.fancybox.js',array(),false, true );
	wp_enqueue_script( 'jqeye-min', get_template_directory_uri().'/assets/js/components/jqeye.min.js',array(),false, true );
	wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js',array(),false, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_frontend' );