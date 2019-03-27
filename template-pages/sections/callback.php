<section class="scheme scheme_mod">
	<div class="wrapper">
        <?php if(get_sub_field('title')): ?><h3 class="title"><?=get_sub_field('title');?></h3><?php endif; ?>
		<div class="scheme-box">
			<div class="scheme-box__pict"
                 style="background: url(<?=get_sub_field('background');?>);
                         -webkit-background-size: cover; background-size: cover;
                         background-repeat: no-repeat; background-position: center;
                         -webkit-border-radius: 4px; border-radius: 4px;">
			</div>
            <?php
            $shortcode = get_sub_field('shortcode');
            if($shortcode)
                echo do_shortcode("$shortcode");
            ?>
		</div>
	</div>
</section>