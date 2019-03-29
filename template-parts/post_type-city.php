<?php
//
//add_action( 'init', 'city' );
//function city(){
//	register_post_type('city', array(
//		'label'  => 'City',
//		'labels' => array(
//			'name'                  => 'Города',
//			'singular_name'         => 'Город',
//			'add_new'               => 'Добавить город',
//			'add_new_item'          => 'Добавить город',
//			'edit_item'             => 'Редактировать город',
//			'new_item'              => 'Новый город',
//			'view_item'             => 'Просмотреть город',
//			'search_items'          => 'Поиск городов',
//			'not_found'             => 'Городов не найдено.',
//			'not_found_in_trash'    => 'Городов в корзине не найдено.',
//			'parent_item_colon'     => '',
//			'all_items'             => 'Все города',
//			'archives'              => 'Архивы городов',
//			'insert_into_item'      => 'Вставить город',
//			'uploaded_to_this_item' => 'Загруженные для этого города',
//			'featured_image'        => 'Миниатюра города',
//			'filter_items_list'     => 'Фильтровать список городов',
//			'items_list_navigation' => 'Навигация по списку городов',
//			'items_list'            => 'Список городов',
//			'menu_name'             => 'Города',
//			'name_admin_bar'        => 'Город',
//		),
//		'description'         => 'Все города',
//		'public'              => true,
//		'publicly_queryable'  => true, // зависит от public
//		'exclude_from_search' => null, // зависит от public
//		'show_ui'             => null, // зависит от public
//		'show_in_menu'        => null, // показывать ли в меню адмнки
//		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
//		'show_in_nav_menus'   => null, // зависит от public
//		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
//		'rest_base'           => null, // $post_type. C WP 4.7
//		'menu_position'       => 5,
//		'menu_icon'           => 'dashicons-location',
////		'capability_type'   => 'post',
////		'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
////		'map_meta_cap'      => false, // Ставим true чтобы включить дефолтный обработчик специальных прав
//		'hierarchical'        => true,
//		'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
//		'taxonomies'          => array('regions'),
//		'has_archive'         => true,
//		'rewrite'             => true,
//		'query_var'           => true,
//		'can_export'          => true,
////		'rewrite'             => array( 'slug' => 'city' ),
//		'rewrite'             => array( 'slug' => 'city/%type_work%', 'with_front' => false ),
//		'has_archive'         => 'city',
//	) );
//
//	register_taxonomy(
//		"regions",
//		array("city"),
//		array("hierarchical" => true,
//			"label"  => "Регионы",
//			'labels' => array(
//				'name'                  => 'Регионы',
//				'singular_name'         => 'Регионы',
//				'add_new'               => 'Добавить регион',
//				'add_new_item'          => 'Добавить регион',
//				'edit_item'             => 'Редактировать регион',
//				'new_item'              => 'Новый регион',
//				'view_item'             => 'Просмотреть регион',
//				'search_items'          => 'Поиск регионов',
//				'not_found'             => 'Регионов не найдено.',
//				'not_found_in_trash'    => 'Регионов в корзине не найдено.',
//				'parent_item_colon'     => '',
//				'all_items'             => 'Все региона',
//				'archives'              => 'Архивы регионов',
//				'insert_into_item'      => 'Вставить регион',
//				'uploaded_to_this_item' => 'Загруженные для этого региона',
//				'featured_image'        => 'Миниатюра региона',
//				'filter_items_list'     => 'Фильтровать список регионов',
//				'items_list_navigation' => 'Навигация по списку регионов',
//				'items_list'            => 'Список регионов',
//				'menu_name'             => 'Регионы',
//				'name_admin_bar'        => 'Регионы',
//			),
//		'hierarchical' => true,
//		'sort' => true,
//		'args' => array( 'orderby' => 'term_order' ),
//		'show_admin_column' => true,
//		"singular_label" => "region",
////		"rewrite"        => array( 'slug' => 'regions', 'with_front'=> true ),
//		)
//	);
//}
//
//// rewrite url type_work on taxonomy->slug
//function regions_link( $post_link, $post ){
//	if ( is_object( $post ) && $post->post_type == 'city' ){
//		$terms = wp_get_object_terms( $post->ID, 'regions' );
//		if( ! empty($terms) ){
//			return str_replace( '%type_work%' , $terms[0]->slug , $post_link );
//		} else {
//			return str_replace( '%type_work%' , 'unregions' , $post_link );
//		}
//	}
//	return $post_link;
//}
//add_filter( 'post_type_link', 'regions_link', 1, 2 );
//
//
//
//// update table for rules URL
//flush_rewrite_rules();


$labels = apply_filters( "post_type_labels_{$post_type}", $labels );
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
	// заменять автоматически не пойдет например заменили: Запись = Город, а в тесте получится так "Просмотреть Город"

	$new = array(
		'name'                  => 'Города',
		'singular_name'         => 'Город',
		'add_new'               => 'Добавить город',
		'add_new_item'          => 'Добавить город',
		'edit_item'             => 'Редактировать город',
		'new_item'              => 'Новый Город',
		'view_item'             => 'Просмотреть город',
		'search_items'          => 'Поиск городов',
		'not_found'             => 'Городов не найдено.',
		'not_found_in_trash'    => 'Городов в корзине не найдено.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все города',
		'archives'              => 'Архивы городов',
		'insert_into_item'      => 'Вставить в город',
		'uploaded_to_this_item' => 'Загруженные для этого города',
		'featured_image'        => 'Миниатюра Города',
		'filter_items_list'     => 'Фильтровать список городов',
		'items_list_navigation' => 'Навигация по списку городов',
		'items_list'            => 'Список городов',
		'menu_name'             => 'Города',
		'name_admin_bar'        => 'Город',
		'menu_icon'             => 'dashicons-location',
	);

	return (object) array_merge( (array) $labels, $new );
}

## Изменяет лейблы у таксономии "Рубрики".
add_filter( 'taxonomy_labels_'.'category', 'change_labels_category' );
function change_labels_category( $labels ) {

	// Запишем лейблы для изменения в виде массива для удобства
	$my_labels = array(
		'name'                  => 'Регионы',
		'singular_name'         => 'Регион',
		'search_items'          => 'Поиск регионов',
		'all_items'             => 'Все регионы',
		'parent_item'           => 'Родительский регион',
		'parent_item_colon'     => 'Родительский регион:',
		'edit_item'             => 'Изменить регион',
		'view_item'             => 'Просмотреть регион',
		'update_item'           => 'Обновить регион',
		'add_new_item'          => 'Добавить новый регион',
		'new_item_name'         => 'Название нового региона',
		'not_found'             => 'Регионы не найдены.',
		'no_terms'              => 'Регионов нет',
		'items_list_navigation' => 'Навигация по списку регионов',
		'items_list'            => 'Список регионов',
		'back_to_items'         => '← Назад к регионам',
		'menu_name'             => 'Регионы',
	);

	return $my_labels;
}