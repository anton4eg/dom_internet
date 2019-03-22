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

}