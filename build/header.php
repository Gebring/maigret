<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Gebring.se
 * @subpackage Maigret2
 * @since Maigret 1.1
 */
?><!DOCTYPE html>

<html class="no-js">
	<head>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta charset="utf-8">
	  <meta name="HandheldFriendly" content="True">
	  <meta name="MobileOptimized" content="320">
	  <meta name="viewport" content="width=device-width,initial-scale=1">
	  	
	  <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');</script>
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	  
	  <!--[if lt IE 9]>
			<script type="text/javascript" src="js/helpers/html5shiv.min.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
			<script type="text/javascript" src="js/helpers/respond.min.js"></script>
		<![endif]-->
	  <?php wp_head(); ?>	
	  <title></title>

	</head>
	
	<body <?php body_class(); ?>>

		<header class="o-global__header" role="banner">


		<div class="l-container">
			<div class="l-span-A7 l-span-B6 l-span-C5 no-gutter">
				<?php
					if ( is_front_page() /*&& is_home()*/ ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; 
				?>
			</div>
			<div class="l-span-A5 l-span-B6 l-span-C7 o-global__nav no-gutter">

					<a class="m-burger m-burger2 l-pull-right" href="#"><span></span></a>
					<?php
						wp_nav_menu(array('theme_location' => 'header_menu',
						'container'   => 'nav',
						'menu_class'  => 'o-global__nav--mobile'));
					?>
				
					<?php
						wp_nav_menu(array('theme_location' => 'header_menu',
						'container'   => 'nav',
						'menu_class'  => 'o-global__nav--desktop'));
					?>	
			</div>
		</div>

		</header>
		
		