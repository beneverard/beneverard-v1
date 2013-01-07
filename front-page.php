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

				<p>Also, I'm <a href="#hire-me">available for hire</a>!</p>

			</div>

		</div>

	<?php endif; ?>

	<hr />

	<div id="get-personal" class="get-personal">

		<!-- a placehoder element to allow #get-professional URLs -->
		<span id="get-professional" class="invisible"></span>

		<div class="row">

			<?php if ( get_field('professional_lists') ) : ?>

				<?php while ( has_sub_field('professional_lists') ) : ?>

					<div class="span_4 col">
						
						<h2><?php the_sub_field('professional_list_label'); ?></h2>

						<?php if ( get_sub_field('professional_list_items') ) : ?>

							<ul>

								<?php while ( has_sub_field('professional_list_items') ) : ?>
									<li><?php the_sub_field('professional_list_item'); ?></li>
								<?php endwhile; ?>

							</ul>

						<?php endif; ?>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>
			
		</div>

		<div class="row">

			<div class="span_12 col">
				
				<p>
					<a href="#get-personal" class="get-personal-button / button">Get Personal&#8230;</a>
					<a href="#get-professional" class="get-professional-button / button">Get Professional&#8230;</a>
				</p>

			</div>

		</div>

		<div class="row / get-personal-container">

			<?php if ( get_field('personal_lists') ) : ?>

				<?php while ( has_sub_field('personal_lists') ) : ?>

					<div class="span_4 col">
						
						<h2><?php the_sub_field('personal_list_label'); ?></h2>

						<?php if ( get_sub_field('personal_list_items') ) : ?>

							<ul>

								<?php while ( has_sub_field('personal_list_items') ) : ?>
									<li><?php the_sub_field('personal_list_item'); ?></li>
								<?php endwhile; ?>

							</ul>

						<?php endif; ?>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>

	</div>

	<hr />

	<div class="row">

		<div class="span_12 col">

			<h2>Things I've done...</h2>

			<ul class="project-type-legend">
				<li data-project-type="client-work"><span class="project-type client-work"></span>Client Work</li>
				<li data-project-type="pet-project"><span class="project-type pet-project"></span>Pet Projects</li>
				<li data-project-type="experiment"><span class="project-type experiment"></span>Experiments</li>
			</ul>

		</div>

	</div>

	<div class="row / my-projects">	

		<?php

			$projects = new BE_Query([
				'post_type'			=> 'project',
				'posts_per_page'	=> 8,
				'orderby'			=> 'menu_order',
				'order'				=> 'ASC'
			]);

		?>

		<?php while ( $projects->have_posts() ) : ?>

			<div class="span_12 col">

				<?php for ( $i = 0; $i < 3; $i++ ) : ?>

					<?php if ( ! $projects->at_end() ) : $projects->the_post(); ?>

						<div class="project <?php the_field('project_type'); ?>">

							<div class="mini-browser">

								<a href="<?php the_field('project_url'); ?>" class="address-bar"><?php the_field('project_url'); ?></a>

								<figure>

									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('project-thumbnail'); ?>
									</a>

								</figure>

							</div>

							<h6><a href="<?php the_permalink(); ?>"><span class="project-type <?php the_field('project_type'); ?>"></span><?php the_title(); ?></a></h6>
							<?php the_field('project_description'); ?>

						</div>

					<?php endif; ?>

				<?php endfor; ?>

			</div>

		<?php endwhile; /* AND */ wp_reset_postdata(); ?>

	</div>

	<hr />

	<div id="hire-me" class="row">

		<div class="span_12 col">
			<h2 id="hire-me">Hire Me&#8230;</h2>
		</div>

		<div class="span_4 col">
			
			<p>Fancy a chat about a project? Here are a few ways you can get in contact with me:</p>

			<ul>
				<li>Email: <a href="mailto:hello@beneverard.co.uk">hello@beneverard.co.uk</a></li>
				<li>Skype: <a href="skype:ben.everard?add">ben.everard</a></li>
				<li>Telephone: <a href="tel:00447549925328">07549 925 328</a></li>
			</ul>

			<p>Or use the contact form on the right&#8230;</p>

		</div>

		<form class="hire-me-form">

			<input type="hidden" name="" />
			<div class="span_4 col">
				<input type="text" name="name" placeholder="name" />
			</div>

			<div class="span_4 col">
				<input type="email" name="email" placeholder="email" />
			</div>

			<div class="span_8 col">
				<textarea name="message" placeholder="message"></textarea>
				<input type="submit" name="submit" value="Send Enquiry" />
			</div>

		</form>

	</div>

<?php get_footer(); ?>