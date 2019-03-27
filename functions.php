<?php
$include_parts = "template-parts/";

include $include_parts . 'enqueue.php';

$include_path = 'includes/';

require_once ( $include_path . 'theme-functions.php' );

include $include_parts . 'post_type-portfolio.php';

include $include_parts . 'post_type-city.php';

$theme = new NewTheme();

$theme->activate_menus();

$theme->clean_custom_menus();

$theme->activate_class_body();

$theme->set_clear_phone();

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
	// add sub page
	acf_add_options_sub_page( array(
		'page_title'  => 'Допольнительное в меню ',
		'menu_slug'   => 'theme-menu-additional-settings',
		'menu_title'  => 'Допольнительное в меню',
		'redirect'    => false,
		'parent_slug' => $parent['menu_slug'],
	) );
}


// Contact-form 7
add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );
function custom_custom_form_class_attr( $class ) {
	$class .= ' scheme-box__form';
	return $class;
}
add_filter('wpcf7_autop_or_not', '__return_false');


// support thubnail
add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );


// hide post_type = posts
add_action('admin_menu', 'remove_admin_menu_links', 999);
function remove_admin_menu_links() {
	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');
}

include $include_parts . "ajax-search-post.php";


// add shortcode for contact-form 7. Select post type city @output [regions]
wpcf7_add_shortcode('regions', 'createbox');
function createbox(){
	global $post;
	// Show Post Type city:  $args = array( 'numberposts' => 0, 'post_type' => 'city' );
	$args = array(
		'taxonomy' => 'regions',
		'hide_empty' => false,
	);
//	$myposts = get_posts( $args );
	$myposts = get_terms( $args );
	$output = '<div class="scheme-form__box">';
	$output .= '<select class=\'order-form__select order-form__select-js\' data-placeholder=\'Выбрать регион\' name="lstdate" id="fleet" onchange="document.getElementById(\'fleet\').value=this.value;">';
	$output .= '<option></option>';
	foreach ( $myposts as $post ) : setup_postdata($post);
		// Show Post Type city:
		// $title = get_the_title();
		// $output .= "<option> $title </option>";
	$output .= "<option>".$post->name."</option>";
	endforeach;
	$output .= "</select>";
	$output .= '</div>';

	return $output;
}