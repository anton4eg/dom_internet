<?php

get_template_part('template-parts/head');

if( is_front_page() && is_home() || is_page() ):

	get_template_part( 'template-pages/index', get_post_type() );

elseif( is_single() ):

	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part( 'template-pages/single', get_post_type() );

		endwhile;

	else :

		get_template_part( 'template-pages/content', 'none' );

	endif;

endif;

get_header();

get_footer();