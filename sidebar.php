<div id="sidebar">
	<div class="container">
			<!--
			<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
			<div id="primary" class="widget-area">
				<ul class="xoxo">
					<?php dynamic_sidebar( 'primary-widget-area' ); ?>
				</ul>
			</div>
			<?php endif; ?>
			-->
			<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
				<?php $recent_posts = wp_get_recent_posts();?>
				<div id="recent-posts" class="four columns offset-by-two">
					<h3>Recent Posts</h3>
					<ul>
						<?php
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . 
							'" title="Look '.esc_attr($recent["post_title"]).'" >' .
							   $recent["post_title"].'</a> </li> ';
						} ?>
					</ul>
				</div>
				<div id="archives" class="four columns">
					<h3>Archives</h3>
					<ul>
						<?php wp_get_archives('type=monthly&limit=6'); ?>
					</ul>
				</div>
				<div id="categories" class="four columns">
					<h3>Categories</h3>
					<ul>
						<?php
						$args = array(
						  'orderby' => 'name',
						  'parent' => 0
						  );
						$categories = get_categories( $args );
						foreach ( $categories as $category ) {
							echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
						}
						?>
					</ul>
				</div>
			<?php endif; ?>
	</div>
</div>	