<section class="equipment">

	<div class="wrapper">
		<?php $title = get_sub_field('title'); echo ($title) ? '<h3 class="title">'.$title.'</h3>' : '';

		if( get_sub_field('lists') ):

		$count = 0;

		echo '<ul class="equipment-list">';

		while( has_sub_field('lists') ): $count++; $class = '';

			if($count % 2 === 0)
				$class = ' green';


			echo '<li class="equipment-list__item">';
				echo '<div class="equipment-list__block">';

					echo '<div class="equipment-list__top'.$class.'">'.get_sub_field('title').'</div>';
					echo '<div class="equipment-list__img"><img class="js-img-lazy" data-src="'.get_sub_field('image')['url'].'" src="/" alt="'.get_sub_field('image')['alt'].'"></div>';
					echo '<div class="equipment-list__dbi">'.get_sub_field('frame').'</div>';

					if(get_sub_field('list')){

						echo '<ul class="equipment-list__specifications">';

						while(has_sub_field('list')){

							echo '<li class="equpment-specifications__item">'.get_sub_field('element').'</li>';

						}

						echo '</ul>';
					}

					if(get_sub_field('desc')){

						while(has_sub_field('desc')){

							echo '<div class="equipment-list__text">'.get_sub_field('element').'</div>';

						}
					}
					echo '<a href="#nav-form" class="equipment-list__btn btn-green">Цена под ключ: <b>'.get_sub_field('price').'</b> <i class="icon-rub"></i></a>';


				echo '</div>';
			echo '</li>';

		endwhile;

		echo '</ul>';

		endif;

		if(get_sub_field('choose_desc')): ?>
		<div class="equipment-block show-more">
			<div class="equipment-block__left"><?=get_sub_field('desc1');?></div>
			<div class="equipment-block__right"><?=get_sub_field('desc2');?></div>
		</div>
		<a href="#" class="region-list__more show-more-js">
                    <span class="region-span-1">
                    Показать весь список</span>
			<span class="region-span-2">
                    Скрыть весь список</span>
			<i class="icon-arr-down"></i>
		</a>
		<?php endif; ?>
	</div>
</section>