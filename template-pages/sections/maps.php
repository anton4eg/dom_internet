<section class="regions-head">
	<div class="wrapper">
		<div class="box-paging">
			<ul class="paging-list">
				<li class="paging-list__item">
					<a href="<?php echo get_home_url(); ?>" class="paging-list__link">Главная</a>
				</li>
				<li class="paging-list__item">
					<?php the_title(); ?>
				</li>
			</ul>
		</div>
		<h3 class="title">
			<?php echo get_sub_field('title'); ?>
		</h3>
		<div class="map">
            <?php
            $location = get_sub_field('map');

            // This output lat, lng, zoom and marks maps
            var_dump($location);
            ?>
            <div id="mapc"></div>
		</div>
		<div class="map-row">
			<a href="#" class="btn-green main-slider__btn">
				Заказать консультацию
			</a>
		</div>
	</div>
</section>