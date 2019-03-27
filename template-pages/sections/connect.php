<?php
$title = get_sub_field('title');
?>
<section class="connect">
	<div class="wrapper">
		<?= ($title)? '<h3 class="title">'.$title.'</h3>' : ''; ?>
		<ul class="connect-list">
			<?php
			if(get_sub_field('connect')):
			while(has_sub_field('connect')): $page = get_sub_field('page');
			?>
				<li class="connect-list__item ">
					<a href="<?=$page['url'];?>" class="connect-list__link" style="background-image: url(<?=get_sub_field('image');?>)" target="<?=$page['target'];?>">
	                    <span><?=$page['title'];?></span>
					</a>
				</li>
			<?php
			endwhile;
			endif;
			?>
		</ul>
	</div>
</section>