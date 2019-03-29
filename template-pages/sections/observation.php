<section class="observation">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<?php $pages = get_sub_field('pages');
		if($pages):?>
		<ul class="internet-list">
		<?php foreach( $pages as $page ): ?>
			<li class="internet-list__item">
				<a href="<?=$page->guid;?>" class="internet-list__link">
					<div class="follower-wrapper">
						<div class="follower-container">
							<div class="follower"></div>
						</div>
					</div>
					<span><?=$page->post_title;?></span>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
		<?php
		endif;

		$observation = get_sub_field('observation');
		if($observation):
		$count = 0;
		?>
		<ul class="observation-box__list">
			<?php foreach ($observation as $item): $count++; ?>
			<li class="observation-box__item">
				<div class="observation-box__left"><?= ($count === 1)? 'Наименование' : $item['name']; ?></div>
				<div class="observation-box__right"><?= ($count === 1)? 'Цена за штуку' : $item['price']; ?></div>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
</section>