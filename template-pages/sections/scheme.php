<section class="scheme">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<?php

		if( get_sub_field('stages') ):
		$count = 0;
		$content  = '<ul class="scheme-list">';
		while( has_sub_field('stages') ):
		
		$icon = get_sub_field('icon');
		
		switch ($icon){
			case 'Сигнал':      $icon = 'icon-25'; break;
			case 'Антена':      $icon = 'icon-26'; break;
			case 'Установка':   $icon = 'icon-27'; break;
			case 'WiFi':        $icon = 'icon-22'; break;
			case 'Подключение': $icon = 'icon-29'; break;
		}

		$content  .= '<li class="scheme-list__item">';
			$content  .= '<div class="scheme-list__num">'.++$count.'<i class="icon-arrow"></i></div>';
			$content  .= '<div class="scheme-list__box">';
				$content  .= '<div class="scheme-list__img"><i class="'.$icon.'"></i></div>';
				$content  .= '<h6 class="scheme-list__title">'.get_sub_field('title').'</h6>';
				$content  .= '<div class="scheme-list__text">'.get_sub_field('desc').'</div>';
			$content  .= '</div>';
		$content  .= '</li>';

		endwhile;
		$content  .= '</ul>';

		echo $content;
		endif;
		?>
	</div>
</section>