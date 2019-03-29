<section class="news">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>

		<?php
		$post_news = get_posts(array(
			'post_type' => 'news',
			'numberposts' => -1,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'suppress_filters' => true,
		));
		?>
		<ul class="news-slider news-slider-js">
		<?php foreach( $post_news as $post ): setup_postdata($post_news); ?>
			<li class="news-slider__item">
				<a href="<?=get_the_permalink();?>" class="news-slider__link">
					<div class="news-slider__img"><img class="js-img-lazy" data-src="<?=get_the_post_thumbnail_url();?>" src="/" alt=""></div>
					<div class="news-slider__box">
						<div class="news-slider__date"><?=get_the_date();?></div>
						<h6 class="news-slider__title"><?php the_title(); ?></h6>
						<div class="news-slider__more">
							Подробнее <i class="icon-arr-right"></i>
						</div>
					</div>
				</a>
			</li>
		<?php endforeach; wp_reset_postdata(); ?>
		</ul>

		<div class="portfolio-slider__control">
			<a href="#" class="portfolio-arrow__prev portfolio-arrow__prev-3-js portfolio-arrow">
				<i class="icon-arr-left"></i>
			</a>
			<a href="#" class="portfolio-arrow__next portfolio-arrow__next-3-js portfolio-arrow">
				<i class="icon-arr-right"></i>
			</a>
		</div>
	</div>
</section>