<?php get_header(); ?>
<main class="fourofour-page">
	<section class="post not-found">
		<div id="container" class="container">
			<header class="fourteen columns offset-by-one">
				<h1 class="lobster"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
				<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
			</header>
			<div class="eight columns offset-by-four entry-content">
				<?php get_search_form(); ?>
			</div>
		</div>
	</article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>