<?php
/*
Template Name: Design
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
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<h2>Logo Design and Branding</h2>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/logo-davis-glass-screen.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Davis Glass: Logo Design, Web Design" />
				<div class="folio-desc">
					<h3><a href="http://davis-glass.com" title="Lansing Glass Company">Davis Glass and Screen</a></h3>
					<h4>Logo Design, Web Design</h4>
					<p>Davis Glass is a <a href="http://davis-glass.com" title="Lansing Glass Company">glass and screen company</a> based in Lansing, MI. I did everything from logo design to web design and marketing for Davis Glass.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/snaga-web-development-application.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Snaga Desktop Application: Logo Design" />
				<div class="folio-desc">
					<h3>Snaga Desktop Application</h3>
					<h4>Logo Design</h4>
					<p>Snaga is an application started by <a href="http://timshomepage.net/">Tim Warren</a> to improve the way web developers work by making a fast and efficient coding application.</p>
				</div>
			</div>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/chosen-logo-design.png&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Chosen: Logo Design, Graphic Design" />
				<div class="folio-desc">
					<h3>Chosen</h3>
					<h4>Logo Design, Graphic Design</h4>
					<p>Chosen is a company I started in 2008. This is the latest brand and tagline, which I conceptualized and designed.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/mint-logo.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Saint Johns Mint Festival: Logo Design, Graphic Design" />
				<div class="folio-desc">
					<h3>Saint Johns Mint Festival</h3>
					<h4>Logo Design, Graphic Design</h4>
					<p>Saint Johns has a mint festival every summer, and for the 25th anniversary the had a logo contest for the Silver Celebration. My logo didn't win the contest, however it was featured in a few local newspapers.</p>
				</div>
			</div>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/bb-landscaping-logo-design.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="BB Landscaping: Logo Design" />
				<div class="folio-desc">
					<h3>BB Landscaping Service</h3>
					<h4>Logo Design</h4>
					<p>BB Landscaping was one of our first clients and what started our packages for Web Cards. Within a limited budget we gave them a strong brand and entry level web presence that they could use for business cards.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/inovest-logo-design.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Inovest: Logo Design" />
				<div class="folio-desc">
					<h3>Inovest</h3>
					<h4>Logo Design</h4>
					<p>Inovest is an investment group based in Bahrain, SA. I worked with a team to put together multiple concepts for a proposal of a larger project.</p>
				</div>
			</div>
			<hr class="clear" />
			
			<a href="http://thinkclay.com/wp-content/uploads/2008/11/michigan-spyn.jpg"><img class="size-thumbnail" title="Spyn Student Ministries" src="http://thinkclay.com/wp-content/uploads/2008/11/michigan-spyn-175x175.jpg" alt="logo design and identity for Spyn Student Ministries" width="175" height="175" /></a>
			
			<a href="http://thinkclay.com/wp-content/uploads/2008/11/pyro-logo-design.jpg"><img class="size-thumbnail" title="pyro logo design" src="http://thinkclay.com/wp-content/uploads/2008/11/pyro-logo-design-175x175.jpg" alt="logo design and identity for churches" width="175" height="175" /></a>
			
			<a href="http://thinkclay.com/wp-content/uploads/2008/11/i-am-design-logo-design.gif"><img class="size-thumbnail" title="I AM Design: Logo Design, Graphic Design" src="http://thinkclay.com/wp-content/uploads/2008/11/i-am-design-logo-design-175x175.gif" alt="I AM Design: Logo Design, Graphic Design" width="175" height="175" /></a>

			<h2>Web Design</h2>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/wordpress-ygg.png&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Young Go Getter: Web Design" />
				<div class="folio-desc">
					<h3><a href="http://younggogetter.com" title="Young Go Getter">Young Go Getter</a></h3>
					<h4>Web Design &amp; Development (WP)</h4>
					<p>Young Go Getter is an entrepreneur blog operated by Justin Nowak and Clay McIlrath. When I joined YGG as a partner I brought with my a partnership a rebranding, redesign, and development to the website.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/magento-assault.png&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Assault: Web Design" />
				<div class="folio-desc">
					<h3><a href="http://assaultboards.com" title="Asault Snowboards">Assault Snowboards</a></h3>
					<h4>Design &amp; Development (WP, magento)</h4>
					<p>A ridiculously creative website, and awesome company, Assault makes custom snowboards from design to core. I did a website built on Wordrpess and Magento for the company.</p>
				</div>
			</div>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-spyn.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Spyn Student Ministries: Web Design" />
				<div class="folio-desc">
					<h3><a href="http://myspyn.com" title="Spyn Student Ministries">Spyn Student Ministries</a></h3>
					<h4>Web Design</h4>
					<p>Spyn is the student ministry of <a href="http://mounthopechurch.org" title="Mount Hope Church in Lansing, MI">Mount Hope Church</a> in Lansing, MI. We are in the process of re-designing their website currently, and I will update as soon as it launches!</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/portfolio/website-amy-castle.jpg&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Amy Castle: Web Design" />
				<div class="folio-desc">
					<h3>Amy Castle</h3>
					<h4>Web Design</h4>
					<p>Amy Castle is an amazing actress and entrepreneur. I put together this web design for her and we're in the process of re-doing her portfolio website.</p>
				</div>
			</div>
			<a href="http://reignovermedia.com"><img class="size-thumbnail" title="reign-over-media" src="http://thinkclay.com/wp-content/uploads/2008/11/reign-over-media-175x175.png" alt="Reign Over Media Logo" width="175" height="175" /></a>
			
			<a href="http://thinkclay.com/wp-content/uploads/2008/11/anthony-vasquez.jpg"><img class="size-thumbnail wp-image-556" title="anthony-vasquez christian artist" src="http://thinkclay.com/wp-content/uploads/2008/11/anthony-vasquez-175x175.jpg" alt="christian artist and painter" width="175" height="175" /></a>
			
			<a href="http://tuckeystattoos.com"><img class="size-thumbnail wp-image-557" title="tuckeys-tattoos charlotte michigan" src="http://thinkclay.com/wp-content/uploads/2008/11/tuckeys-tattoos-175x175.gif" alt="tuckeys tattoos charlotte michigan" width="175" height="175" /></a>

			<h2>Print Design</h2>
			<div class="folio clear">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/clay-samantha-wedding-invitations.gif&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Wedding Invitations: Graphic Design, Print" />
				<div class="folio-desc">
					<h3>McIlrath Wedding Invitations</h3>
					<h4>Graphic Design, Web Card, Litho</h4>
					<p>I designed our wedding invitations, because my wife wanted an autumn theme, and we couldn't find any others that we liked. I did the entire process from design to print.</p>
				</div>
			</div>
			<div class="folio">
				<img src="http://thinkclay.com/timthumb.php?src=/wp-content/uploads/2008/11/clay-samantha-wedding-rsvp.gif&amp;w=300&amp;h=200&amp;zc=1" 
					alt="Wedding RSVP Cards: Logo Design, Print" />
				<div class="folio-desc">
					<h3>McIlrath Wedding RSVP Cards</h3>
					<h4>Graphic Design, Litho</h4>
					<p>I designed our wedding RSVP cards as well as a custom RSVP online application which let us track who had responded and how many guests they were bringing, all over the internet without having to send a reply letter.</p>
				</div>
			</div>
			<hr class="clear" />

			<a href="http://thinkclay.com/wp-content/uploads/2008/11/chosen-business-cards.jpg"><img  title="chosen-business-cards" src="http://thinkclay.com/wp-content/uploads/2008/11/chosen-business-cards-175x175.jpg" alt="business card design" width="175" height="175" class="size-thumbnail" /></a>
			
			<a href="http://thinkclay.com/wp-content/uploads/2008/11/matt-tisdale-resume.gif"><img class="size-thumbnail wp-image-561" title="matt tisdale resume" src="http://thinkclay.com/wp-content/uploads/2008/11/matt-tisdale-resume-175x175.gif" alt="resume design" width="175" height="175" /></a>
			
			<a href="http://thinkclay.com/wp-content/uploads/2008/11/bauhaus.png"><img src="http://thinkclay.com/wp-content/uploads/2008/11/bauhaus-175x175.png" alt="Bauhaus, Minimilastic, Modernistic Poster" title="bauhaus style poster" width="175" height="175" class="size-thumbnail wp-image-1045" /></a>
		</div>
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this page.', '<p>', '</p>'); ?>

<?php get_footer(); ?>