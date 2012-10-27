<?php // loop.php ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article class="row">

			<div class="col span_3">
				<h3><?php the_time('j F y'); ?></h3>
			</div>

			<div class="col span_9">

				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>">Read the rest of this entry &raquo;</a></p>

			</div>

		</article>

	<?php endwhile; ?>

	<?php if (next_posts_link() || previous_posts_link()): ?>
		<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>
	<?php endif ?>

<?php else : ?>

	<p>No blog posts</p>

<?php endif; ?>