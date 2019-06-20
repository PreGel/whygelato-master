<!doctype html>

<html class="no-js"  <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta class="foundation-mq">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
	<!-- Icons & Favicons -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				<![endif]-->
				<meta name="msapplication-TileColor" content="#f01d4f">
				<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
				<meta name="theme-color" content="#121212">
				<?php } ?>

				<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

				<script src="https://use.typekit.net/gzw2svp.js"></script>
        		<script>try{Typekit.load({ async: true });}catch(e){}</script>

				<?php wp_head(); ?>

				<!-- Drop Google Analytics here -->
				<!-- end analytics -->

			</head>

			<!-- Uncomment this line if using the Off-Canvas Menu --> 

			<body <?php body_class(); ?>>

				<div class="off-canvas-wrapper">

					<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

					<div class="off-canvas-content" data-off-canvas-content>

						<header class="header" role="banner">

					 <!-- This navs will be applied to the topbar, above all content 
					 To see additional nav styles, visit the /parts directory -->
					 <?php //get_template_part( 'parts/nav', 'offcanvas' ); ?>

					 <div id="offcanvas-full-screen" class="offcanvas-full-screen" data-off-canvas data-transition="overlap">
					 	<div class="offcanvas-full-screen-inner">
					 		<button class="offcanvas-full-screen-close" aria-label="Close menu" type="button" data-close>
					 			<span aria-hidden="true">&times;</span>
					 		</button>

					 		<?php joints_off_canvas_nav(); ?>

					 	</div>
					 </div>

					 <div class="off-canvas-content" data-off-canvas-content>
					 	<div class="top-bar">
					 		<div class="top-bar-title">
					 			<button class="menu-icon dark" type="button" data-toggle="offcanvas-full-screen"></button>
					 			<!-- <a href="<?php //echo home_url(); ?>"><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/whygelato_logo_web1.png" alt"Why Gelato - A Gelato Inspired Resource"></a> -->
					 		</div>
					 		<div class="top-bar-right">
					 			<!-- <button class="menu-icon dark" type="button" data-toggle="offcanvas-full-screen"></button> -->
					 		</div>
					 	</div>
					 </div>

				</header> <!-- end .header -->