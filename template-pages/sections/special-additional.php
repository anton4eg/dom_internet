<section class="special">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<div class="special-box">
			<div class="special-wrap">
                <?php

                $left = get_sub_field('left');
                $right = get_sub_field('right');

                if( $right && get_sub_field('img_left') ): ?>
                    <div class="special-wrap__photo special-wrap__photo_ml">
                        <img class="js-img-lazy" data-src="<?=$right['img']['url'];?>" src="/" alt="<?=$right['img']['alt'];?>">
                    </div>
                <?php

                endif;

				if( $left ): ?>
				<div class="special-wrap__text">
					<?php echo $left['desc'];
					if($left['choose']):?>
					<a href="#" class="btn-white special-btn">
						Бесплатный выезд мастера
					</a>
					<?php endif; ?>
				</div>
				<?php
                endif;
				if( $right && !get_sub_field('img_left') ): ?>
				<div class="special-wrap__photo special-wrap__photo_ml">
					<img class="js-img-lazy" data-src="<?=$right['img']['url'];?>" src="/" alt="<?=$right['img']['alt'];?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>