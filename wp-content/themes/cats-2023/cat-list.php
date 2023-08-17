<?php

$filter = new WP_Query( [
	'post_type' => "feline"
] );

// The Loop.
if ( $filter->have_posts() ) {
	echo '<ul>';
	while ( $filter->have_posts() ) {
		$filter->the_post();

		echo '<li>';
			include('cat-card.php');
		echo '</li>';

	}
	echo '</ul>';
} else {
	esc_html_e( 'Sorry, no posts matched your criteria.' );
}

wp_reset_postdata();