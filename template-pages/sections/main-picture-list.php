<section class="main-picture-list">
	<div class="wrapper wrapper-abs">
		<div class="main-slider__block">
            <?php if( get_sub_field('img_list') ): ?>
            <ul class="main-slider__list">
                <?php while( has_sub_field('img_list') ):
                    $icon = get_sub_field('icon');
                    switch($icon){
                        case "Грузовик": $icon = "icon-5"; break;
	                    case "Часы": $icon = "icon-6"; break;
	                    case "Сертификат": $icon = "icon-7"; break;
	                    case "Медаль": $icon = "icon-8"; break;
	                    case "Сеть": $icon = "icon-8_1"; break;
                    }?>
				<li class="main-slider__el">
					<div class="main-slider__img">
						<i class="<?=$icon;?>"></i>
					</div>
					<div class="main-slider__text">
						<?= get_sub_field('title'); ?>
					</div>
				</li>
                <?php endwhile; ?>
			</ul>
            <?php endif; ?>
		</div>
	</div>
</section>