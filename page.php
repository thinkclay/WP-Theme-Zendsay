<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="entry">
			<h1><?php the_title(); ?></h1>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this page.', '<p>', '</p>'); ?>

<?php get_footer(); ?>