<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<p class="alignright"><?php next_post_link('%link &raquo;') ?></p>
		<p class="alignright"><?php previous_post_link('&laquo; %link') ?></p>
		<hr class="clear" />

		<div class="entry">
			<div class="postmeta">
				<div class="date">
					<span class="day"><? the_time('d'); ?></span>
					<span class="month"><? the_time('M'); ?></span>
					<span class="year"><? the_time('y'); ?></span>
				</div>
				
				<h3>Tags:</h3>
				<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
				
				<h3>Category:</h3>
				<ul>
					<li><?php the_category('</li><li>') ?></li>
				</ul>
				
				<h3>Social:</h3>
				<ul>
					<li><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></li>
					<li>&nbsp;</li>
					<li><a href="http://feeds.feedburner.com/thinkclay" title="RSS Feed">RSS Feed</a></li>
					<li><a href="http://del.icio.us/post?url=<?php the_permalink(); ?>">Bookmark on Delicious</a></li>
					<li><a href="http://digg.com/submit?phase=2&url=<?php the_permalink(); ?>">Digg It</a></li>
					<li><a href="http://technorati.com/cosmos/search.html?url=<?php the_permalink(); ?>">Add to Technorati</a></li>
					<li><a href="http://furl.net/storeIt.jsp?t=<?php the_permalink(); ?>&u=<?php the_permalink(); ?>">Store it on Furl</a></li>
					<li><a href="http://reddit.com/submit?url=<?php the_permalink(); ?>" title="add to reddit">Submit to Reddit</a></li>
				</ul>
			</div>
			
			<div class="post">
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			</div>
				
			<div style="clear:both; height: 30px;"></div>  	
		</div>
		<!-- end: .entry -->
	
		<?php comments_template(); ?>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

<?php get_footer(); ?>
