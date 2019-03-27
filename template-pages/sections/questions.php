<section class="question">
	<div class="wrapper">
		<h3 class="title"><?=get_sub_field('title');?></h3>
		<?php if( get_sub_field('questions') ): ?>
		<ul class="question-list">
			<?php while( has_sub_field('questions') ): ?>
			<li class="question-list__item ">
				<div class="question-list__name"><?=get_sub_field('question');?></div>
				<div class="question-list__answer"><?=get_sub_field('answer');?></div>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>
	</div>
</section>