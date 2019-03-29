<section class="offers">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<div class="offers-box">
			<?php
			$offer = get_sub_field('offer');
			if($offer): ?>
			<ul class="offers__list">
				<?php foreach ($offer as $item): ?>
				<li class="offers__item">
					<a href="#">
						<div class="offers-pic"><img class="js-img-lazy" data-src="<?=$item['img']['url'];?>" src="/" alt="<?=$item['img']['alt'];?>"></div>
						<h4><?=$item['name'];?></h4>
						<p><?=$item['desc'];?></p>
						<div class="offers-price">
							<div>Ценат от:</div>
							<div><?=$item['price'];?> <i class="icon-rub"></i></div>
						</div>
						<button class="btn-green sheme-form__btn">Заказать</button>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>

</section>