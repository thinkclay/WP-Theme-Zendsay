<? get_header(); ?>

	<? if (have_posts()) : ?>

		<? while (have_posts()) : the_post(); ?>
		<div class="entry clearfix">
			<?php if(has_post_thumbnail()): ?>
			<a href="<?php the_permalink(); ?>" class="post-image"><span></span><?php the_post_thumbnail('medium'); ?></a>
			<?php endif; ?>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p><?php echo strip_tags(get_the_excerpt()); ?></p>
		</div>
		<!-- end: .entry -->
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1 class="center">Not Found</h1>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
