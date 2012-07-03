<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- www.phpied.com/conditional-comments-block-downloads/ -->
  <!--[if IE]><![endif]-->

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <!-- Does not currently validate. Known issue with the Boilerplate. -->

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile Viewport Fix
        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
  -->
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php echo home_url() ?>/favicon.ico" />
  
  <!-- Note nesessary -->
  <!-- <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->

  <!-- CSS : implied media="all" -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/style.css") ?>

  <!-- For the less-enabled mobile browsers like Opera Mini -->
  <!-- <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/handheld.css", 'media="handheld"') ?> -->
  
  <!-- Main CSS -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
  <!-- PageSlide CSS -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."jquery.pageslide.css") ?>
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  
  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>
  
  <script type="text/javascript" src="http://use.typekit.com/bvy7nos.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class('ie7'); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class('ie8'); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class('ie9'); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

<div class="background"></div>
<div class="dimmer"></div>

  <div id="container">
 　 <div class="shared_header">
	 	<header role="banner" class="blog-logo">
	        <span class="description tk-acuta"><?php bloginfo('description'); ?></span>
	        <a class="logo tk-coquette" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
	    </header>
	    <!--
<nav id="nav-main" role="navigation">
	    	<a href="javascript:toggleSidebar();"><div class="action" id="loader">Sidebar</div></a>
            <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
     	</nav>
-->
		<span id="timeclock" class="arrow-left"></span>
   </div>

<div id="center-container">
<div class="left">
	<div id="page-title">
	<img alt="" src="" class="user-avatar avatar avatar-60 opacity-transition">
	<b style="opacity: 1; "></b>
	<h2 class="article-title opacity-transition"></h2>
	</div>
</div>
<a href="javascript:toggleSidebar();" class="transform-anime-enable">
	<div class="right margin-anime-enable">
	<div id="hint" class="opacity-transition">See more</div>
	<div id="clock" class="opacity-transition">See more</div>
	<div class="time-arrow"></div>

	</div>
</a>
</div>
