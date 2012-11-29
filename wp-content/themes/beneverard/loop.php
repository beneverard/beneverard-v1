<?php // loop.php ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>

	<?php endwhile; ?>

	<div class="row">

		<div class="col span_3">&nbsp;</div>

		<div class="col span_9">

			<?php if (next_posts_link() || previous_posts_link()): ?>
				<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>
			<?php endif ?>

		</div>

<?php else : ?>

	<p>No blog posts</p>

<?php endif; ?>