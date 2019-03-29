<section class="portfolio">
	<div class="wrapper"><h3 class="title"><?=get_sub_field('title');?></h3></div>

    <?php
    $posts = get_sub_field('pages');
    if( $posts ): $count = 0; ?>
        <ul class="protfolio-slider protfolio-slider-js">
            <li class="portfolio-slider__item">
            <?php foreach( $posts as $post): $count++; ?>
			    <?php setup_postdata($post); ?>
                    <a href="<?=get_the_permalink();?>" class="portfolio-slider__box" style="background-image: url(<?=get_the_post_thumbnail_url();?>);">
                        <div class="portfolio-slider__description">

                            <?php
                            $choose = get_field('choose');

                            switch ($choose){
                                case "Тест":
	                                $block1 = get_field('block1');
	                                $block2 = get_field('block2'); ?>
                                    <div class="portfolio-description__top">
                                        <div class="portfolio-description__left">
                                            <div class="portfolio-description__icon">
                                                <i class="icon-15"></i>
                                            </div>
                                            <div class="portfolio-description__text">
                                                <?=$block1['speedtest'];?>
                                                <div>
	                                                <?=$block1['name'];?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-description__right">
                                            <div class="portfolio-description__time">
                                                <span><?=$block1['date'];?></span>
                                                <span><?=$block1['time']; // str_replace('пп', 'PM', $block1['time']);?> GMT</span>
                                            </div>
                                            <div class="portfolio-description__wi-fi">
                                                <i class="icon-16"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="portfolio-description__list">
                                        <li class="portfolio-description__item">
                                            <div class="portfolio-description__element">
                                                <i class="icon-17 portfolio-icon icon1"></i>
	                                            <?=$block2['ping'];?>
                                            </div>
                                            <div class="portfolio-description__result">
	                                            <?=str_replace('ms', '<small>ms</small>', $block2['ping2']);?>
                                            </div>
                                        </li>
                                        <li class="portfolio-description__item">
                                            <div class="portfolio-description__element">
                                                <i class="icon-18 portfolio-icon icon2"></i>
	                                            <?=$block2['download'];?>
                                            </div>
                                            <div class="portfolio-description__result">
	                                            <?=str_replace('Mbps', '<small>Mbps</small>', $block2['download2']);?>
                                            </div>
                                        </li>
                                        <li class="portfolio-description__item">
                                            <div class="portfolio-description__element">
                                                <i class="icon-19 portfolio-icon icon3"></i>
	                                            <?=$block2['upload'];?>
                                            </div>
                                            <div class="portfolio-description__result">
	                                            <?=str_replace('Mbps', '<small>Mbps</small>', $block2['upload2']);?>
                                            </div>
                                        </li>
                                    </ul>
                                <?php
                                break;

	                            case "Своё описание": ?>

                                <div class="portfolio-description__top">
                                    <div class="portfolio-description__text"><?=get_field('my_desc');?></div>
                                </div>

                                <?php
                                break;

                                default: ''; break;
                            }
                            ?>


                        </div>
                    </a>
                <?php if( $count % 2 === 0 ): ?>
                </li>
                <li class="portfolio-slider__item">
                <?php endif; ?>

		    <?php endforeach; ?>
                </li>
        </ul>
	    <?php wp_reset_postdata();?>
    <?php endif; ?>
	<div class="portfolio-slider__control">
		<a href="#" class="portfolio-arrow__prev portfolio-arrow__prev-1-js portfolio-arrow">
			<i class="icon-arr-left"></i>
		</a>
		<a href="#" class="portfolio-arrow__next portfolio-arrow__next-1-js portfolio-arrow">
			<i class="icon-arr-right"></i>
		</a>
	</div>

<?php if(get_sub_field('choose_desc')): ?>
	<div class="portfolio-bottom">
		<div class="wrapper">
			<?php if(get_sub_field('headtitle')): ?><div class="portfolio-bottom__pretitle"><?=get_sub_field('headtitle');?></div><?php endif; ?>
			<?php if(get_sub_field('desc-title')): ?><h2 class="portfolio-bottom__title"><?=get_sub_field('desc-title');?></h2><?php endif; ?>
			<?=get_sub_field('subtitle');?>
			<?php if(get_sub_field('img')): ?>
            <div class="portfolio-bottom__img">
				<img class="js-img-lazy" data-src="<?=get_sub_field('img')['url'];?>" src="/" alt="<?=get_sub_field('img')['alt'];?>">
			</div>
			<?php endif; ?>
            <?php
            $desc1 = get_sub_field('desc1');
            $desc2 = get_sub_field('desc2');
            if($desc1 && $desc2):
            ?>
			<div class="portfolio-bottom__box show-more">
				<?php if($desc1): ?><div class="portfolio-bottom__left"><?=$desc1;?></div><?php endif; ?>
				<?php if($desc2): ?><div class="portfolio-bottom__right"><?=$desc2;?></div><?php endif; ?>
			</div>
            <?php endif; ?>
			<a href="#" class="region-list__more show-more-js">
                        <span class="region-span-1">
                        Показать весь список</span>
				<span class="region-span-2">
                        Скрыть весь список</span>
				<i class="icon-arr-down"></i>
			</a>
		</div>
	</div>
<?php endif; ?>
</section>