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
		<script type="text/javascript">
			(function() {
				var config = {
					kitId: 'sui3xwz',
					scriptTimeout: 3000
				};
				var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
			})();
		</script>
				
		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-ajax-css-deprecated-dimensions-effects-offset.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/scripts.js"></script>

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