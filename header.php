<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Gym 101 Fitness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gym-101-fitness' ); ?></a>

	<div class="container">

		<header id="masthead" class="site-header" role="banner">
			<div id="header">

			    <div id="logo" class="col-lg-4">

			    	<a href="/home/">

			    		<img src="<?php bloginfo('template_directory') ?>/images/logo_large.png" alt="logo"title="Gym 101 Fitness Center" />

			    	</a>

			    </div>

			    <div class="col-lg-8">

				    <div id="FB">

				    	<a href="https://www.facebook.com/pages/Gym-101-Fitness-Center/128381540511228">

				    		<img src="<?php bloginfo('template_directory') ?>/images/facebook.jpg" alt="facebook icon" title="Visit our Facebook!" />

				    	</a>

				    </div>

				    <div id="motto">

				    	<p>We <span class="green">Educate</span>, You <span class="green">Perform</span>, Together We <span class="orange">Achieve</span></p>

				    </div>

				</div>

			</div><!-- END HEADER DIV -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'gym-101-fitness' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">