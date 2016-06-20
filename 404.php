<?php get_header(); ?>

	<main class="main-primary">
		<?php custom_breadcrumbs(); ?>
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
		</section>
		<!-- /section -->
	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
