<?php

echo "HELLO CITY <br>";

$args = array( 'post_type' => 'city', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

	echo "Current: "; the_category();
	the_title();
	echo '<br>';

endwhile;


echo "<br><br>Current without while: "; the_category();

