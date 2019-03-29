<?php

function ba_ajax_search(){
	$args = array(
		'post_type' => 'post',
		's' => $_POST['term'],
		'posts_per_page' => -1
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
			?>
			<li class="region-list__item result-search-list">
				<a href="<?=get_the_permalink();?>" class="region-list__link"><?=get_the_title();?></a>
			</li>
			<?php
		}
	} else {
		?>
		<div class="result_item">
			<span class="not_found">Ничего не найдено :(</span>
		</div>
		<?php
	}
	exit;
}
add_action('wp_ajax_nopriv_ba_ajax_search','ba_ajax_search');
add_action('wp_ajax_ba_ajax_search','ba_ajax_search');