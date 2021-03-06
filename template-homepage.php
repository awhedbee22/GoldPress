<?php /* Template Name: Homepage */ get_header('primary'); ?>

	<main class="main-primary">
		<!-- section -->
		<section>

		<h1><span class="ca-gov-icon-arrow-down"></span> Welcome To <?php bloginfo('name'); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

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
