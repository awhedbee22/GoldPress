<?php get_header(); ?>

	<main class="main-primary">
		<?php custom_breadcrumbs(); ?>
		<!-- section -->
		<section>

		<h1><span class="ca-gov-icon-arrow-down"></span> <?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
