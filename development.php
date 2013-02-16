<?php
/*
Template Name: Development
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
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="entry">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<h2>Websites built on Magento</h2>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/magento-wild-organics.png&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Wild Organics: Front-end Web Development, Magento" />
				<div class="folio-desc">
					<h3>Wild Organics</h3>
					<h4>Web Development, Magento</h4>
					<p>Wild organics is a distributor of healthy products made from green and natural processes and ingredients.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-club52.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Club 52: Front-end Web Development, Magento" />
				<div class="folio-desc">
					<h3>Club 52</h3>
					<h4>Web Development, Magento</h4>
					<p>We launched a store that integrated with Wordpress to bring the best of both systems together. With custom programming for tier navigation and access, Club 52 was one of our biggest successes.</p>
				</div>
			</div>
			<hr class="clear" />
			<ul>
			<li><a href="http://cymbalshack.com" title="Buy Cymbals Online">Online Cymbal Store</a></li>
			</ul>
			
			<h2>Websites build on Wordpress</h2>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-greathoperanch.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Great Hope Ranch: Front-end Web Development, Wordpress" />
				<div class="folio-desc">
					<h3>Great Hope Ranch</h3>
					<h4>Web Development, Wordpress</h4>
					<p>Great Hope Ranch was a pro-bono project for Dave Wright, which consisted of logo design, web design, and web development built on Wordpress. My role was development only.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-reignovermedia.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Reign Over Media: Front-end Web Development, Wordpress" />
				<div class="folio-desc">
					<h3>Reign Over Media</h3>
					<h4>Web Development, Wordpress</h4>
					<p>Reign Over Media is a Christian based art and media sharing site. I designed and developed this site, with some guidance and direction from Nick Rivera.</p>
				</div>
			</div>
			<hr class="clear" />
			
			<a href="http://nccswarriors.org"><img class="size-thumbnail" title="New Covenent: Wordpress" src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/nccs.png&amp;w=175&amp;h=175&amp;zc=1" alt="New Covenant Web Development - Built on Wordpress" width="175" height="175" /></a>
			
			<a href="http://myclub52.com"><img class="size-thumbnail" title="Club 52: Wordpress" src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-club52.jpg&amp;w=175&amp;h=175&amp;zc=1" alt="Club 52 Web Development - Built on Wordpress" width="175" height="175" /></a>
			
			<a href="http://thinkclay.com/?theme=night_royale"><img class="size-thumbnail" title="night royale wordpress theme" src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/wptheme-night-royale.jpg&amp;w=175&amp;h=175&amp;zc=1" alt="Night Royale Wordpress Theme" width="175" height="175" /></a>

			<a href="http://thinkclay.com/?theme=alive-and-well"><img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-thinkclay.jpg&amp;w=175&amp;h=175&amp;zc=1" alt="Alive and Well" title="view the Alive and Well Wordpress Theme" width="175" height="175" class="size-thumbnail" /></a>
			
			<a href="http://mixtapesinc.com/" title="Mixtapes Downloads"><img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/mixtapes.jpg&amp;w=175&amp;h=175&amp;zc=1" alt="Mixtapes Inc - Download Mixtapes" title="Mixtapes Website" width="175" height="175" class="size-thumbnail" /></a>
			
			<a href="http://tuckeystattoos.com" title="Tuckeys Tattoos"><img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-tuckeys-tattoos.jpg&amp;w=175&amp;h=175&amp;zc=1" alt="Tuckeys Tattoos" title="Tuckeys Tattoos" width="175" height="175" class="size-thumbnail" /></a>

			
			<h2>Custom CMS Website Solutions</h2>
			<a href="http://niioanalog.com"><img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/drupal-niio.png&amp;w=175&amp;h=175&amp;zc=1" alt="Body Image" class="size-thumbnail" /></a>
			<a href="http://bodyimagemi.com"><img src="/wp-content/uploads/webdev/bodyimage.jpg" alt="Body Image" class="size-thumbnail" /></a>
			<a href="http://smallbizcoaches.com"><img src="wp-content/uploads/webdev/smallbizcoaches.jpg" alt="Small Biz Coaches" title="Smallbiz Coaches" class="size-thumbnail" /></a>
		
			<ul>
			<li><a href="http://smcyclo.com">Sumitomo Drive Industries</a></li>
			<li><a href="http://cas.msu.edu">Michigan State University - Communications Arts &amp; Sciences</a></li>
			<li><a href="http://www.madisonind.com/">Madison Industries</a></li>
			<li><a href="http://collectiveclicks.com/">Collective Clicks</a></li>
			<li><a href="http://stevenvandora.com/">Steven Vandora</a></li>
			<li><a href="http://www.afglifesettlements.com/">AFG Life Settlements</a></li>
			<li><a href="http://www.income-escalator.com/">Income Escalator</a></li>
			</ul>

			<h2>Web Applications</h2>
			<ul>
			<li><a href="http://vday.bychosen.com" title="Valentines Day Serenade">Valentines Day Serenade App</li>
			<li><a href="http://clayandsamantha.bychosen.com/" title="Wedding Card">McIlrath Wedding Card</a></li>
			<li><a href="http://client.bychosen.com/interview" title="Chosen Interview Application">RFP Application</a></li>
			<li><a href="http://cms.bychosen.com" title="Chosen Content Management System">Chosen CMS</a></li>
			<li><a href="http://dev.bychosen.com" title="Chosen Development Client System">Chosen Dev</a></li>
			<li><a href="http://mockups.bychosen.com" title="Chosen Mockups">Chosen Mockups</a></li>
			</ul>
			
			<h3>Front-end Web Development</h3>
			<a href="http://ciplexlite.ciplex.ws/"><img title="Ciplex Lite" src="wp-content/uploads/webdev/ciplex-lite.jpg" alt="Ciplex Lite - Web Development" width="175" height="175" class="size-thumbnail" /></a>
			<a href="http://collectiveclicks.com" title="SEO Company"><img src="wp-content/uploads/webdev/collective-clicks.jpg" alt="SEO and Internet Marketing Company" title="collective-clicks" width="175" height="175" class="size-thumbnail" /></a>
			<a href="http://citadelperimeter.com/"><img src="http://thinkclay.com/wp-content/uploads/2008/11/picture-4-175x175.png" alt="Citadel Perimeter" title="Click to launch the Citadel Perimeter Website" width="175" height="175" class="size-thumbnail wp-image-921" /></a>
			<a href="http://madisonind.com"><img src="http://thinkclay.com/wp-content/uploads/2008/11/picture-1-175x175.png" alt="Madison Industries" title="Click to launch the Madison Industries website" width="175" height="175" class="size-thumbnail" /></a>
			<a href="http://income-escalator.com" title="Income Escalator"><img src="wp-content/uploads/webdev/income-escalator.jpg" alt="Income Escalator - Web Development" title="income-escalator" width="175" height="175" class="size-thumbnail" /></a>
			<a href="http://www.stevenvandora.com/" title="Steven Vandora and Associates"><img src="wp-content/uploads/webdev/steven-vandora.jpg" alt="Steven Vandora Landscaping" title="steven vandora" width="175" height="175" class="size-thumbnail" /></a>
		</div>
	<?php endwhile; endif; ?>
	
	<?php edit_post_link('Edit this page.', '<p>', '</p>'); ?>

<?php get_footer(); ?>