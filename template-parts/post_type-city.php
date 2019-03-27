<?php

add_action( 'init', 'city' );
function city(){
	register_post_type('city', array(
		'label'  => 'City',
		'labels' => array(
			'name'                  => 'Города',
			'singular_name'         => 'Город',
			'add_new'               => 'Добавить город',
			'add_new_item'          => 'Добавить город',
			'edit_item'             => 'Редактировать город',
			'new_item'              => 'Новый город',
			'view_item'             => 'Просмотреть город',
			'search_items'          => 'Поиск городов',
			'not_found'             => 'Городов не найдено.',
			'not_found_in_trash'    => 'Городов в корзине не найдено.',
			'parent_item_colon'     => '',
			'all_items'             => 'Все города',
			'archives'              => 'Архивы городов',
			'insert_into_item'      => 'Вставить город',
			'uploaded_to_this_item' => 'Загруженные для этого города',
			'featured_image'        => 'Миниатюра города',
			'filter_items_list'     => 'Фильтровать список городов',
			'items_list_navigation' => 'Навигация по списку городов',
			'items_list'            => 'Список городов',
			'menu_name'             => 'Города',
			'name_admin_bar'        => 'Город',
		),
		'description'         => 'Все города',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-location',
//		'capability_type'   => 'post',
//		'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//		'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite' => array( 'slug' => 'city/%type_work%', 'with_front' => false ),
		'has_archive' => 'city',
	) );

	register_taxonomy(
		"regions", array("city"),
		array("hierarchical" => true,
		      "label" => "Регионы",
		      'labels' => array(
			      'name'                  => 'Регионы',
			      'singular_name'         => 'Регионы',
			      'add_new'               => 'Добавить регион',
			      'add_new_item'          => 'Добавить регион',
			      'edit_item'             => 'Редактировать регион',
			      'new_item'              => 'Новый регион',
			      'view_item'             => 'Просмотреть регион',
			      'search_items'          => 'Поиск регионов',
			      'not_found'             => 'Регионов не найдено.',
			      'not_found_in_trash'    => 'Регионов в корзине не найдено.',
			      'parent_item_colon'     => '',
			      'all_items'             => 'Все региона',
			      'archives'              => 'Архивы регионов',
			      'insert_into_item'      => 'Вставить регион',
			      'uploaded_to_this_item' => 'Загруженные для этого региона',
			      'featured_image'        => 'Миниатюра региона',
			      'filter_items_list'     => 'Фильтровать список регионов',
			      'items_list_navigation' => 'Навигация по списку регионов',
			      'items_list'            => 'Список регионов',
			      'menu_name'             => 'Регионы',
			      'name_admin_bar'        => 'Регионы',
		      ),
		"singular_label" => "region",
		"rewrite" => array( 'slug' => 'regions', 'with_front'=> false )
		)
	);
}

// rewrite url type_work on taxonomy->slug
function wpa_portfolio_permalinks( $post_link, $post ){
	if ( is_object( $post ) && $post->post_type == 'city' ){
		$terms = wp_get_object_terms( $post->ID, 'regions' );
		if( ! empty($terms) ){
			return str_replace( '%type_work%' , $terms[0]->slug , $post_link );
		} else {
			return str_replace( '%type_work%' , 'unregions' , $post_link );
		}
	}
	return $post_link;
}
add_filter( 'post_type_link', 'wpa_portfolio_permalinks', 1, 2 );