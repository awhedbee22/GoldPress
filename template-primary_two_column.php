<?php /* Template Name: Primary Two Column */ get_header('primary'); ?>

	<main class="main-primary">
		<!-- section -->
		<section>

		<h1><span class="ca-gov-icon-arrow-down"></span> <?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		<p class="modify">Last modified: <?php the_modified_date(); ?></p>
	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
