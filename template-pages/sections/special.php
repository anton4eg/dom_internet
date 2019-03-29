<section class="special">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<div class="special-box">
			<div class="special-text"><?=get_sub_field('subtitle');?></div>
			<?php $img = get_sub_field('img');
			if($img): ?>
			<div class="special-wrap full-photo">
				<div class="special-wrap__photo">
					<img class="js-img-lazy" data-src="<?=$img['url'];?>" src="/" alt="<?=$img['alt'];?>">
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php
		$left = get_sub_field('left');
		$right = get_sub_field('right');
		if(get_sub_field('choose')):
		?>
		<div class="portfolio-bottom__box show-more">
			<div class="portfolio-bottom__left"><?=$left['desc'];?></div>
			<div class="portfolio-bottom__right"><?=$right['desc'];?></div>
		</div>
		<?php endif; ?>
		<a href="#" class="region-list__more show-more-js">
			<span class="region-span-1">Показать весь список</span>
			<span class="region-span-2">Скрыть весь список</span>
			<i class="icon-arr-down"></i>
		</a>
	</div>

</section>