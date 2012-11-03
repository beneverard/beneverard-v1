<!DOCTYPE html>
<html lang="en">

	<head>
	
		<?php // META ?>
		<meta charset="UTF-8" />
		<meta name="author" content="Ben Everard" />
		
		<title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

		<?php // FAVICON ?>
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/apple-touch-icon.png" />
		
		<?php // CSS ?>
		<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/screen.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/fonts/ss-social/ss-social.css">
	
		<?php // TYPEKIT ?>
		<script type="text/javascript" src="//use.typekit.net/sui3xwz.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?> >

		<div class="container">

			<div class="wrapper">
					
				<header class="row">
					
					<div class="span_12 col wide">

						<h1><a href="/">Ben Everard, Web Developer</a></h1>
				
						<?php
								
							wp_nav_menu(
								array(
									'menu'			=> 'primary_navigation',
									'container'		=> '',
									'items_wrap'	=> '<ul class="nav site-nav">%3$s</ul>'
								)
							);

						?>

					</div>

				</header>

			</div> <!-- / .wrapper -->

			<div class="wrapper / main">