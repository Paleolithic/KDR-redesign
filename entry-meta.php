<section class="entry-meta">
	<span class="author vcard">Posted by <?php the_author_posts_link(); ?> in <?php the_category( ', ' ); ?></span>
	<span class="tag-links"><i class="fa fa-tags"></i> <?php the_tags(''); ?></span>
	<span class="comments-link"><i class="fa fa-comments"></i> <a href="' . get_comments_link() . '"><?php comments_number( "0", "1", "%" ); ?></a></span>
	<!-- <span class="meta-sep"> | </span> -->
	<!-- <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span> -->
</section>