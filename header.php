<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<meta property="fb:admins" content="40006440" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Clay McIlrath, <?=date("Y");?>" />
	<meta name="audience" content="All" />
	<meta name="revisit-after" content="7 days" />
	<meta name="google-site-verification" content="lTm_WufT3dlHjh93u69hbj1PefuU1Ziw2ZbeFkDrgIY" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width" />
	
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<link rel="shortcut icon" href="http://thinkclay.com/favicon.ico" type="image/x-icon" /> 
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body>
<div class="container">	
	<?php if(is_home()): ?><h1 id="h1"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></h1><?php endif; ?>
	
	<?php get_sidebar(); ?>

	<div id="content" <? if(is_home()): ?>class="homepage"<? elseif(is_single()) : ?>class="single"<? endif; ?>>
		<a class="logo" href="<?php bloginfo('url'); ?>" title="Thinkclay the Graphic Design Portfolio of Clayton McIlrath">Return to Home Page</a>