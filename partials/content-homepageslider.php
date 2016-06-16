<div class="header-slideshow-banner <?php echo get_option('mytheme_display_homepageSlider'); ?>">
	<div id="primary-carousel" class="carousel carousel-banner">

        <?php
            $homeSlider = array(
              'post_type'      => 'homepage_slider'
            );
            $my_query = new WP_Query( $homeSlider );
            while ($my_query->have_posts()) : $my_query->the_post();
            $do_not_duplicate = $post->ID;
        ?>

        <div class="slide" style="background-image: url(<?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" ); echo $thumbnail_src[0]; ?>)">
            <a href="<?php echo get_post_permalink(); ?>">
                <p class="slide-text"><span class="title"><?php the_title(); ?></span><br><?php the_excerpt(); ?></p>
            </a>
        </div>

        <?php endwhile; ?>

    </div>
</div>
