<div class="profile-banner <?php echo get_option('mytheme_display_govBanner'); ?>" itemscope="" itemtype="http://schema.org/Person">
    <div class="inner gov-banner">
        <div class="banner-subtitle"><a href="http://gov.ca.gov/m_about.php">California's Governor</a></div>
        <div class="banner-title">Edmund G. Brown Jr.</div>
        <div class="banner-link"><a href="http://www.gov.ca.gov/" target="_blank" itemprop="url">Visit Webpage</a></div>
    </div>
</div>

<?php
    $govOfficials = array(
      'post_type'      => 'gov-officials'
    );
    $my_query = new WP_Query( $govOfficials );
    while ($my_query->have_posts()) : $my_query->the_post();
    $do_not_duplicate = $post->ID;
?>

<div class="profile-banner" itemscope="" itemtype="http://schema.org/Person">
    <div class="inner gov-officials">
        <div class="banner-subtitle"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'wpt_officials_position', true ) ); ?></a></div>
        <div class="banner-title"><?php the_title(); ?></div>
        <div class="banner-link"><a href="<?php the_permalink(); ?>" itemprop="url">Visit Webpage</a></div>
        <?php the_post_thumbnail( 'thumbnail' ); ?>
    </div>
</div>

<?php endwhile; ?>
