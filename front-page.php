<?php // front-page.php ?>

<?php get_header(); ?>
	
	<?php if ( have_posts() ) : the_post(); ?>

		<div class="row home-profile">

			<div class="span_3 col">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/avatar.jpg" />
			</div>

			<div class="span_1 col"><img src="<?php bloginfo('template_directory'); ?>/assets/images/pencil-arrow.png" class="no-border arrow" /></div>
			<div class="span_8 col">

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			</div>

		</div>

	<?php endif; ?>

	<hr />
	
<?php get_footer(); ?>