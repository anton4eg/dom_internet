<section class="reviews">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
	</div>
	<div class="reviews-box">
		<div class="wrapper ">
			<?php if( get_sub_field('review') ): ?>
			<ul class="reviews-box__list reviews-box__list-js">
				<?php while ( has_sub_field('review') ):
				$img = get_sub_field('img');
				$right = get_sub_field('right');
				?>
				<li class="reviews-box__item">
					<div class="reviews-box__block">
						<div class="reviews-box__img" style="width: 41.5%;background: url(<?=$img['url'];?>);-webkit-background-size: cover; background-size: cover; background-position: center;"></div>
						<div class="reviews-box__description">
							<div class="reviews-box__avatar">
								<img class="js-img-lazy" data-src="<?=$right['img']['url'];?>" src="/" alt="<?=$right['img']['alt'];?>">
							</div>
							<div class="reviews-box__name"><?=$right['name'];?></div>
							<div class="reviews-box__location"><?=$right['city'];?></div>
							<div class="reviews-box__text"><?=$right['review'];?></div>
						</div>
						<div class="reviews-box__picture"><img class="js-img-lazy" data-src="<?=get_template_directory_uri();?>/assets/img/qv.svg" src="/" alt="quote"></div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<div class="portfolio-slider__control">
				<a href="#" class="portfolio-arrow__prev portfolio-arrow__prev-4-js portfolio-arrow">
					<i class="icon-arr-left"></i>
				</a>
				<a href="#" class="portfolio-arrow__next portfolio-arrow__next-4-js portfolio-arrow">
					<i class="icon-arr-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>

