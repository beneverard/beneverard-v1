<!DOCTYPE html>
<html lang="en" class="js-disabled home">

	<head>
	
		<!-- META -->
		<meta charset="UTF-8" />
		<meta name="description" content="" />
		<meta name="author" content="Ben Everard" />
		<title>Ben Everard, Web Developer</title>
		
		<!-- CSS -->
		<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/screen.css" />
	
		<?php wp_head(); ?>
		
	</head>
	
	<body>

		<div class="background">

			<div class="wrapper">
					
				<header>
					
					<div class="span_12 col wide">

						<h1>Ben Everard, Web Developer</h1>
				
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