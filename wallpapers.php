<?php
/*
Template Name: Wallpapers
*/
?>
<?php get_header(); ?>
	<script type="text/javascript">
	/* <![CDATA[ */
		$(document).ready(function(){
			var contentH = $(".entry").height();
			var sidebarH = $("#sidebar").height();
			if(contentH>sidebarH){ $("#sidebar").height(contentH+100) }
			
			$(".folio").hover(
			function(){
				$(this).children(".folio-desc").slideDown();
			},
			function(){
				$(".folio-desc").slideUp();
			}
			);
			$(".folio").click(function(){
				viewLarger = $(this).children("img").attr("src").replace(/(\/timthumb\.php\?src\=*)/, '').replace(/(&.*)/, '');
				window.location = viewLarger;
			});
		});
	/* ]]> */
	</script>
	
	<div id="content" style="padding-top: 5em;">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
				<h2>Chosen Wallpapers</h2>
				<div class="folio clear">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/chosen-collective.jpg&amp;w=300&amp;h=200&zc=1" alt="Chosen Rock, Grunge style wallpaper" />
					<div class="folio-desc">
						<h3>Chosen - Blue Rock</h3>
						<h4>1600 x 1600</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Grunge Wallpaper</li>
						<li>Artistic Wallpaper</li>
						<li>Blue Wallpaper</li>
						<li>Free Wallpaper</li>
						</ul>
					</div>
				</div>
				<div class="folio">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/chosen-organic.gif&amp;w=300&amp;h=200&zc=1" alt="Organic Colorful Vector Wallpaper" />
					<div class="folio-desc">
						<h3>Chosen - Organic Logo Wallpaper</h3>
						<h4>1600 x 1200</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Organic Wallpaper</li>
						<li>Colorful Wallpaper</li>
						<li>Vector Wallpaper</li>
						<li>Free Wallpaper</li>
						</ul>
					</div>
				</div>
				<div class="folio clear">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/washed_out.jpg&amp;w=300&amp;h=200&zc=1" alt="Mac Brushed Steel Wallpaper" />
					<div class="folio-desc">
						<h3>Chosen - Washed Out Wallpaper</h3>
						<h4>1680 x 1050</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Mac Theme Wallpaper</li>
						<li>Brushed Steel Wallpaper</li>
						<li>Green Wallpaper</li>
						<li>Free Wallpaper</li>
						</ul>
					</div>
				</div>
				<div class="folio">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/vday-2009.png&amp;w=300&amp;h=200&zc=1" alt="Valentines Day Wallpaper" />
					<div class="folio-desc">
						<h3>Chosen - Valentines Day</h3>
						<h4>1600 x 1200</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Valentines Day Wallpaper</li>
						<li>Holiday Wallpaper</li>
						<li>Chocolate Wallpaper</li>
						<li>Heart Wallpaper</li>
						</ul>
					</div>
				</div>
				<hr class="clear" />
				
				<h2>Windows Theme Wallpapers</h2>
				<div class="folio clear">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/vista-bluestreak.jpg&amp;w=300&amp;h=200&zc=1" alt="Windows Vista Theme Wallpaper" />
					<div class="folio-desc">
						<h3>Vista - Blue Streak</h3>
						<h4>1800 x 1600</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Windows Vista Wallpaper</li>
						<li>Vista Style Wallpaper</li>
						<li>Windows 7 Wallpaper</li>
						<li>Windows Vista Theme</li>
						</ul>
					</div>
				</div>
				<div class="folio">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/vista-bw.jpg&amp;w=300&amp;h=200&zc=1" alt="Windows Vista Theme Wallpaper" />
					<div class="folio-desc">
						<h3>Vista - Black Streak</h3>
						<h4>1800 x 1600</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Windows Vista Wallpaper</li>
						<li>Vista Style Wallpaper</li>
						<li>Windows 7 Wallpaper</li>
						<li>Windows Vista Theme</li>
						</ul>
					</div>
				</div>
				<div class="folio clear">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/green_vs_orange.jpg&amp;w=300&amp;h=200&zc=1" alt="Windows Abstract Wallpaper" />
					<div class="folio-desc">
						<h3>Green vs Orange</h3>
						<h4>1600 x 1200</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Windows Vista Wallpaper</li>
						<li>Vista Style Wallpaper</li>
						<li>Green vs Orange Wallpaper</li>
						<li>Abstract Wallpaper</li>
						</ul>
					</div>
				</div>
				<div class="folio">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/green-vs-purple.jpg&amp;w=300&amp;h=200&zc=1" alt="Green vs Purple Abstract Wallpaper" />
					<div class="folio-desc">
						<h3>Green vs Purple</h3>
						<h4>1600 x 1293</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Windows Vista Wallpaper</li>
						<li>Vista Style Wallpaper</li>
						<li>Green vs Purple Wallpaper</li>
						<li>Abstract Wallpaper</li>
						</ul>
					</div>
				</div>
				<hr class="clear" />
				
				<h2>Mac Theme Wallpapers</h2>
				<div class="folio clear">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/green_apple.jpg&amp;w=300&amp;h=200&zc=1" alt="Green Apple Wallpaper" />
					<div class="folio-desc">
						<h3>Green Apple</h3>
						<h4>1680 x 1050</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Green Apple Wallpaper</li>
						<li>Apple Style Wallpaper</li>
						<li>Mac Wallpaper</li>
						<li>Mac Theme Wallpaper</li>
						</ul>
					</div>
				</div>
				<div class="folio">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/clover.jpg&amp;w=300&amp;h=200&zc=1" alt="Lucky Brushed Steel Wallpaper" />
					<div class="folio-desc">
						<h3>Brushed Steel is Lucky</h3>
						<h4>1625 x 1050</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Brushed Steel Wallpaper</li>
						<li>Apple Style Wallpaper</li>
						<li>Mac Wallpaper</li>
						<li>Mac Theme Wallpaper</li>
						</ul>
					</div>
				</div>
				<hr class="clear" />
				
				<h2>Abstract Wallpapers</h2>
				<div class="folio clear">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/lightning.jpg&amp;w=300&amp;h=200&zc=1" alt="Lightning Wallpaper" />
					<div class="folio-desc">
						<h3>Bright Lightning</h3>
						<h4>1467 x 1200</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Sky Wallpaper</li>
						<li>Storm Wallpaper</li>
						<li>Lightning Wallpaper</li>
						<li>Abstract Wallpaper</li>
						</ul>
					</div>
				</div>
				<div class="folio">
					<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/nebula2.jpg&amp;w=300&amp;h=200&zc=1" alt="Nebula Space Wallpaper" />
					<div class="folio-desc">
						<h3>Nebula</h3>
						<h4>1600 x 1024</h4>
						<ul>
						<li>Click to view full size</li>
						<li>&nbsp;</li>
						<li><b>Tagged as:</b></li>
						<li>Space Wallpaper</li>
						<li>Nebula Wallpaper</li>
						<li>Phenomenon Wallpaper</li>
						<li>Abstract Wallpaper</li>
						</ul>
					</div>
				</div>
				
				<h2>More Random Wallpapers</h2>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/chosen-retrofly.jpg" rel="attachment wp-att-632"><img src="http://thinkclay.com/wp-content/uploads/2008/11/chosen-retrofly-175x175.jpg" alt="Retro Pipes" title="Chosen Wallpaper - Retro Pipes" width="175" height="175" class="size-thumbnail wp-image-632" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/mmmbuntu.jpg" rel="attachment wp-att-529"><img src="http://thinkclay.com/wp-content/uploads/2008/11/mmmbuntu-175x175.jpg" alt="ubuntu creative media design wallpaper" title="ubuntu wallpaper" width="175" height="175" class="size-thumbnail wp-image-529" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/thinkclay-smoke.jpg" rel="attachment wp-att-853"><img src="http://thinkclay.com/wp-content/uploads/2008/11/thinkclay-smoke-175x175.jpg" alt="Smoke Desktop Wallpaper" title="thinkclay Smoke Wallpaper" width="175" height="175" class="size-thumbnail wp-image-853" /></a>
					
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/neon-lights.jpg" rel="attachment wp-att-536"><img src="http://thinkclay.com/wp-content/uploads/2008/11/neon-lights-175x175.jpg" alt="neon wallpaper design" title="neon-lights wallpaper" width="175" height="175" class="size-thumbnail wp-image-536" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/neon.jpg" rel="attachment wp-att-537"><img src="http://thinkclay.com/wp-content/uploads/2008/11/neon-175x175.jpg" alt="creative wallpaper" title="neon glow lightbulb wallpaper" width="175" height="175" class="size-thumbnail wp-image-537" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/nebula.jpg" rel="attachment wp-att-534"><img src="http://thinkclay.com/wp-content/uploads/2008/11/nebula-175x175.jpg" alt="nebula space creative media design" title="space nebula wallpaper" width="175" height="175" class="size-thumbnail wp-image-534" /></a>
				
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/nebula1.jpg" rel="attachment wp-att-535"><img src="http://thinkclay.com/wp-content/uploads/2008/11/nebula1-175x175.jpg" alt="space creative media design" title="nebula creative abstract wallpaper" width="175" height="175" class="size-thumbnail wp-image-535" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/space.jpg" rel="attachment wp-att-540"><img src="http://thinkclay.com/wp-content/uploads/2008/11/space-175x175.jpg" alt="space theme wallpaper - creative media design" title="space wallpaper theme" width="175" height="175" class="size-thumbnail wp-image-540" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/blue-purple-grunge.jpg" rel="attachment wp-att-838"><img src="http://thinkclay.com/wp-content/uploads/2008/11/blue-purple-grunge-175x175.jpg" alt="Blue and Purple Grunge Wallpaper" title="blue and purple grunge wallpaper" width="175" height="175" class="size-thumbnail wp-image-838" /></a>
				
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/guitar.jpg" rel="attachment wp-att-528"><img src="http://thinkclay.com/wp-content/uploads/2008/11/guitar-175x175.jpg" alt="ibanez creative media design" title="ibanez guitar wallpaper" width="175" height="175" class="size-thumbnail wp-image-528" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/october-day.jpg" rel="attachment wp-att-538"><img src="http://thinkclay.com/wp-content/uploads/2008/11/october-day-175x175.jpg" alt="autumn creative media design wallpaper" title="october-day creative wallpaper" width="175" height="175" class="size-thumbnail wp-image-538" /></a>
				<a href="http://thinkclay.com/wp-content/uploads/2008/11/sk8.jpg" rel="attachment wp-att-539"><img src="http://thinkclay.com/wp-content/uploads/2008/11/sk8-175x175.jpg" alt="kickflip skateboarding wallpaper" title="sk8 skateboarding wallpaper" width="175" height="175" class="size-thumbnail wp-image-539" /></a>
				</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this page.', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>