<?php get_header(); ?>
<div class="container" id="container">
	<section class="sixteen columns" id="content" role="main">
		<header class="header">
			<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
			<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
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
	</section>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>