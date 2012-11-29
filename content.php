<article class="row">

	<div class="col span_3">
		<?php get_template_part('sidebar'); ?>
	</div>

	<div class="col span_9">

		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		
		<?php if ( is_single() ) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>">Read the rest of this entry &raquo;</a></p>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
			<?php comments_template('', TRUE); ?>
		<?php endif; ?>

	</div>

</article>