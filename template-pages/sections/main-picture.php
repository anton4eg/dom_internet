<?php
$title = get_sub_field('title');
$bg = get_sub_field('background');
?>
<section class="main-picture" style="background-image: url(<?=$bg['url'];?>)">
	<div class="wrapper">
		<div class="main-picture__box">
			<?php if($title): ?><h1 class="main-title"><?=$title;?></h1><?php endif; ?>
			<?php if(get_sub_field('btn')): ?>
			<a href="" class="btn-green main-slider__btn">Заказать консультацию</a>
			<?php endif; ?>
		</div>
	</div>
</section>