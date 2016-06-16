<?php
// Jquery Call w/fallback
function load_jquery() {
    // only use this method is we're not in wp-admin
    if (!is_admin()) {

        // deregister the original version of jQuery
        wp_deregister_script('jquery');

        // discover the correct protocol to use
        $protocol='http:';
        if($_SERVER['HTTPS']=='on') {
            $protocol='https:';
        }

        // register the Google CDN version
        wp_register_script('jquery', $protocol.'//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1');

        // add it back into the queue
        wp_enqueue_script('jquery');
    }
}
add_action('template_redirect', 'load_jquery');


// Load Scripts
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/libs/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr');

        wp_register_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr');

        wp_register_script('cagovcore', get_template_directory_uri() . '/js/cagov.core.js', array('jquery'), false, true); // State scripts (footer)
        wp_enqueue_script('cagovcore');

        // UNSURE IF THIS IS NEEDED DUE TO WORDPRESS SEARCH
        // wp_register_script('search', get_template_directory_uri() . '/js/search.js', array('jquery'), false, true); // search scripts (footer)
        // wp_enqueue_script('search');

        wp_register_script('customscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true); // Custom scripts (footer)
        wp_enqueue_script('customscripts');

    }
}

// Load Conditional Scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname');
    }
}

// Load Styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    // wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    // wp_enqueue_style('html5blank');

    wp_register_style('coregov', get_template_directory_uri() . '/css/cagov.core.css', array(), '1.0', 'all');
    wp_enqueue_style('coregov');

    wp_register_style('color-color_scheme', get_template_directory_uri() . '/css/colorscheme-' . get_option('mytheme_color') . '.css', array(), '1.0', 'all');
    wp_enqueue_style('color-color_scheme');

    wp_register_style('general', get_template_directory_uri() . '/css/general-styles.css', array(), '1.0', 'all');
    wp_enqueue_style('general');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('custom');
}
?>
