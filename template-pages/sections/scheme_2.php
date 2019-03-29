<section class="scheme ineer-slider-list">
	<div class="wrapper">
	<?php
	if( get_sub_field('icons') ):

	echo '<ul class="main-slider__list">';

	while( has_sub_field('icons') ):

	$icon = get_sub_field('icon');
	$title = get_sub_field('title');

	switch ($icon){
		case 'Чат':      $icon = 'icon-chat'; break;
		case 'Мир':      $icon = 'icon-worldwide'; break;
		case 'Сигнал':   $icon = 'icon-alarm'; break;
	}
	?>
		<li class="main-slider__el">
			<div class="main-slider__img">
				<i class="<?=$icon;?>"></i>
			</div>
			<div class="main-slider__text"><?=$title;?></div>
		</li>
	<?php
	endwhile;

	echo "</ul>";

	endif;
	?>
	</div>
</section>