<?php // page.php ?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : the_post(); ?>

		<article>

			<div class="row">

				<div class="col span_3">&nbsp;</div>

				<div class="col span_9">
					<h2><?php the_title(); ?></h2>
				</div>

			</div>

			<div class="row">

				<div class="col span_3 / sidebar">
					<?php the_post_thumbnail('sidebar-featured'); ?>
				</div>

				<div class="col span_9 / content">
					<?php the_content(); ?>
				</div>

			</div>

		</article>

	<?php endif; ?>

<?php get_footer(); ?>