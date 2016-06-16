<div class="branding">
    <div class="header-cagov-logo"><a href="http://www.ca.gov/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/template2014/header-ca.gov.png" alt="CA.gov" />
    </a></div>

    <div class="header-organization-banner">

        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
		    <a href='<?php echo home_url(); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="logo">
			</a>
		<?php else : ?>
			<a href="<?php echo home_url(); ?>" rel="nofollow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/template2014/header-organization.png" alt="Organization Title" class="logo" />
            </a>
		<?php endif; ?>

    </div>
</div>
