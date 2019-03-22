<?php

class NewTheme {

	public function activate_menus()
	{
		$menu = register_nav_menus(array(
			'header-1' => 'Верхнее. Страницы с социальными значками',
			'header-2' => 'Верхнее. Выпадающие страницы',
			'footer-1' => 'Нижнее. Выпадающие страницы',
			'footer-2' => 'Нижнее. Номера с городами',
			'footer-3' => 'Нижнее. Страницы с социальными значками',
		));

		return $menu;
	}

	public function activate_class_body()
	{
		function my_body_class( $classes ) {
			// добавим класс 'class-name' в массив классов $classes
			$classes[] = "loaded";

			if( is_page() )
				$classes[] = 'it_is_page';

			return $classes;
		}

		return add_filter('body_class','my_body_class');
	}

	public function add_class_for_menu_id()
	{
		function add_menu_1_classes($classes, $item, $args) {
			if($args->theme_location == 'header-1') {
				$classes[] = 'header-menu__item';
			}
			return $classes;
		}


		add_filter('nav_menu_css_class', 'add_menu_1_classes', 1, 3);
	}


	public function clean_custom_menus()
	{
		/**
		 * @param $menu_name
		 * @param null $nav_class
		 * @param null $nav_id
		 * @param null $ul_class
		 * @param null $ul_id
		 * @param null $li_class
		 * @param null $li_id
		 * @param null $a_class
		 * @param null $a_id
		 */
		function clean_custom_menus($menu_name, $nav_class=NULL, $nav_id=NULL, $ul_class=NULL, $ul_id=NULL, $li_class=NULL, $li_id=NULL,$a_class=NULL,$a_id=NULL ) {
			$menu_name = $menu_name; // specify custom menu name
			if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
				$menu = wp_get_nav_menu_object($locations[$menu_name]);
				$menu_items = wp_get_nav_menu_items($menu->term_id);
				// our output
				$menu_list = '';

				if( $nav_class || $nav_id ){
					$nav_class = ($nav_class)? ' class="'. $nav_class .'"' : '';
					$nav_id = ($nav_id)? ' id="'. $nav_id .'"' : '';
					// out
					$menu_list .= '<nav'. $nav_id . $nav_class .'>' ."\n";
				}

				if( $ul_class ){
					$ul_class = ($ul_class )? ' class="'. $ul_class .'"' : '';
					$ul_id = ($ul_id)? $ul_id : '';
				}

				$menu_list .= "\t\t\t\t". '<ul id="'. $menu_name . ' ' . $ul_id . '"' . $ul_class .'>' ."\n";

				if( $li_class || $li_id ){
					$li_class = ($li_class)? ' class="'. $li_class.'"' : '';
					$li_id = ($li_id )? ' id="'. $li_id .'"' : '';
				}

				if( $a_class || $a_id ){
					$a_class = ($a_class )? ' class="'. $a_class .'"' : '';
					$a_id = ($a_id )? ' id="'. $a_id .'"' : '';
				}

				foreach ((array) $menu_items as $key => $menu_item) {
					$title = $menu_item->title;
					$url = $menu_item->url;
					$menu_list .= "\t\t\t\t\t". '<li'. $li_id . $li_class .'><a'. $a_id . $a_class .' href="'. $url .'">'. $title .'</a></li>' ."\n";
				}

				$menu_list .= "\t\t\t\t". '</ul>' ."\n";

				if( $nav_class || $nav_id )
					$menu_list .= "\t\t\t". '</nav>' ."\n";
			} else {
				// $menu_list = '<!-- no list defined -->';
			}
			echo $menu_list;
		}
	}

}