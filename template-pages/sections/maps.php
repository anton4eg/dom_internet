<style type="text/css">
    .acf-map {
        width: 100%;
        height: 400px;
        border: #ccc solid 1px;
        margin: 20px 0;
    }

    /* fixes potential theme css conflict */
    .acf-map img {
        max-width: inherit !important;
    }

</style>

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
		<div class="map acf-map">

<!--			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A31d20edc28a2d4dcc586a45dd2fa3d23bd94d47618e1d7f09d8d2c8f0927ffe6&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>-->

            <?php
            $location = get_sub_field('map');
            var_dump($location);

//            echo do_shortcode('[yamap center=’55.7532,37.6225′ height=’15rem’ zoom=’12’ type=’yandex#map’ controls=’typeSelector;zoomControl’][yaplacemark coord=’55.7532,37.6225′ icon=’islands#blueRailwayIcon’ color=’#ff751f’ name=’Placemark’][/yamap]');

			if( !empty($location) ):

            echo "<br><br><br>";
            print_r($location);
            ?>

            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

			<?php endif; ?>
		</div>
		<div class="map-row">
			<a href="#" class="btn-green main-slider__btn">
				Заказать консультацию
			</a>
		</div>
	</div>
</section>