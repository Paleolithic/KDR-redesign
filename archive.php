<?php get_header(); ?>
<div class="container" id="container">
	<header class="header sixteen columns">
		<h1 class="entry-title"><?php 
		if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
		elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
		elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
		else { _e( 'Archives', 'blankslate' ); }
		?></h1>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php 
		if(function_exists('wp_pagenavi')) {
			// wp_paginate(); 
			wp_pagenavi();
		} else{
			get_template_part( 'nav', 'below' );
		}
	?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>