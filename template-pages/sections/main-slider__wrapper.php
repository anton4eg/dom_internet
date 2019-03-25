<section class="main-slider__wrapper">
	<ul class="main-slider main-slider-js">

        <?php if( get_sub_field('slider') ): $count = 0; ?>
		<?php while( has_sub_field('slider') ): $count++ ?>
		<li class="main-slider__item item1" style="background: url(<?= get_sub_field('background')['url']; ?>);-webkit-background-size: cover; background-size: cover; background-position: center;">
			<div class="wrapper">
				<?php if($count == 1): ?><div class="main-slider__box"><?php endif; ?>
					<h1 class="main-title"><?= get_sub_field('title'); ?></h1>
                    <?php if(get_sub_field('btn')): ?>
					<a href="#modal31" data-fancybox="modal" class="btn-green main-slider__btn">Заказать консультацию</a>
                    <?php endif; ?>
                <?php if($count == 1): ?></div><?php endif; ?>
			</div>
		</li>
        <?php endwhile; ?>
        <?php endif; ?>


	</ul>
	<div class="main-slider__control">
		<a href="#" class="slider-control__prev slider-arrow slider-control__prev-1-js"><i class="icon-arr-up"></i></a>
		<a href="#" class="slider-control__next slider-arrow slider-control__next-1-js"><i class="icon-arr-bot"></i></a>

	</div>

</section>