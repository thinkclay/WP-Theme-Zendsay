<?php get_header(); ?>

	<div id="content" class="homepage">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="entry">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<span class="commentcount"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></span>
				<?php the_excerpt(); ?>
				
			<div style="clear:both;"></div>  	
		</div>
		<!-- end: .entry -->
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
		<div class="entry" style="background-image: none;">
			<h1>No posts found. Try a different search?</h1>
			<p><?php get_search_form(); ?></p>
		</div>	
	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>