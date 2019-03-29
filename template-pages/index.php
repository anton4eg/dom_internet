<?php

$template = get_field('template');

if( $template === 'Пустой' ):

    get_template_part( 'template-pages/content-tpl-none', get_post_type() );

elseif( !get_field('sections') ):

	get_template_part( 'template-pages/content-none', get_post_type() );

else:

	/* !!!!!!!!! * ВЕРСТАЛЬЩИКАМ СЮДА * !!!!!!!!! */
	// это классы для обертки дива (main-wrapper) в зависимости от страницы
    switch ($template){
        case "Главная":                           $template = ''; break;
	    case "Камеры наблюдения":                 $template = ' cctv'; break;
        case "Домашний интернет":                 $template = ' house-inet'; break;
        case "Интернет":                          $template = ' net'; break;
        case "Примеры работ":                     $template = ' examples'; break;
        case "ТВ Онлайн":                         $template = ' online-tv'; break;
        case "Цены и услуги":                     $template = ' price'; break;
        case "Регион":                            $template = ' video-dacha'; break;
        case "Усиление сотовой связи":            $template = ' price'; break;
        case "Тарифы":                            $template = ' tarifs'; break;
        case "В деревню":                         $template = ''; break;
        case "Видеонаблюдение для частного дома": $template = ' video-dacha'; break;
        case "В котедже":                         $template = ' vkotedji'; break;
        default:                                  $template = ' regions'; break;
    }

	echo '<div class="main-wrapper'.$template.'">';

	echo '<!-- BEGIN CONTENT -->';

	echo '<main class="content">';

	while ( has_sub_field('sections') ) :

		if( get_row_layout() == 'main-slider__wrapper' && get_sub_field('show') ):
                get_template_part('template-pages/sections/main-slider__wrapper');
		endif;

		if( get_row_layout() == 'main-picture-list' && get_sub_field('show') ):
	            get_template_part('template-pages/sections/main-picture-list');
		endif;

        if( get_row_layout() == 'connect' && get_sub_field('show') ):
	            get_template_part('template-pages/sections/connect');
        endif;

		if( get_row_layout() == 'rate' && get_sub_field('show') ):
			get_template_part('template-pages/sections/rate');
		endif;

		if( get_row_layout() == 'scheme' && get_sub_field('show') ):
			get_template_part('template-pages/sections/scheme');
		endif;

		if( get_row_layout() == 'callback' && get_sub_field('show') ):
			get_template_part('template-pages/sections/callback');
		endif;

		if( get_row_layout() == 'equipment' && get_sub_field('show') ):
			get_template_part('template-pages/sections/equipment');
		endif;

		if( get_row_layout() == 'portfolio' && get_sub_field('show') ):
			get_template_part('template-pages/sections/portfolio');
		endif;

		if( get_row_layout() == 'service' && get_sub_field('show') ):
			get_template_part('template-pages/sections/service');
		endif;

		if( get_row_layout() == 'questions' && get_sub_field('show') ):
			get_template_part('template-pages/sections/questions');
		endif;

		if( get_row_layout() == 'regions' && get_sub_field('show') ):
			get_template_part('template-pages/sections/regions');
		endif;

		if( get_row_layout() == 'maps' && get_sub_field('show') ):
			get_template_part('template-pages/sections/maps');
		endif;

		if( get_row_layout() == 'descriptions' && get_sub_field('show') ):
			get_template_part('template-pages/sections/descriptions');
		endif;

		if( get_row_layout() == 'reviews' && get_sub_field('show') ):
			get_template_part('template-pages/sections/reviews');
		endif;

		if( get_row_layout() == 'news' && get_sub_field('show') ):
			get_template_part('template-pages/sections/news');
		endif;

		if( get_row_layout() == 'observation' && get_sub_field('show') ):
			get_template_part('template-pages/sections/observation');
		endif;

		if( get_row_layout() == 'main-picture' && get_sub_field('show') ):
			get_template_part('template-pages/sections/main-picture');
		endif;

		if( get_row_layout() == 'special' && get_sub_field('show') ):
			get_template_part('template-pages/sections/special');
		endif;

		if( get_row_layout() == 'special-additional' && get_sub_field('show') ):
			get_template_part('template-pages/sections/special-additional');
		endif;

	endwhile;

	get_template_part('template-parts/popups/header-footer');
	get_template_part('template-parts/popups/main-screen');

	echo '</main>';

	echo '<!-- CONTENT EOF -->';


endif;