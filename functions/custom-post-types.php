<?php
// Create 1 Custom Post type for a Demo, called gov-officials
function gov_ent_post_type()
{
    register_post_type('gov-officials', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Government Officals', 'html5blank'), // Rename these to suit
            'singular_name' => __('Government Official', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Government Official', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Government Official', 'html5blank'),
            'new_item' => __('New Government Official', 'html5blank'),
            'view' => __('View Government Official', 'html5blank'),
            'view_item' => __('View Government Official', 'html5blank'),
            'search_items' => __('Search Government Officials', 'html5blank'),
            'not_found' => __('No Government Officials found', 'html5blank'),
            'not_found_in_trash' => __('No Government Officials found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'can_export' => false
    ));
}
add_action( 'add_meta_boxes', 'add_officials_position' );

function add_officials_position() {
    add_meta_box('wpt_officials_position', 'Officials Position', 'wpt_officials_position', 'gov-officials', 'side', 'default');
}

// The Officials Position Metabox
function wpt_officials_position() {
    global $post;
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="officialsposition_noncename" id="officialsposition_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
    // Get the position data if its already been entered
    $position = get_post_meta($post->ID, '_position', true);
    // Echo out the field
    echo '<input type="text" name="_position" value="' . $position  . '" class="widefat" />';
}

// Save the Metabox Data
function wpt_save_officials_position($post_id, $post) {
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !wp_verify_nonce( $_POST['officialsposition_noncename'], plugin_basename(__FILE__) )) {
    return $post->ID;
    }
    // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;
    // OK, we're authenticated: we need to find and save the data
    // We'll put it into an array to make it easier to loop though.
    $position_meta['_position'] = $_POST['_position'];
    // Add values of $events_meta as custom fields
    foreach ($position_meta as $key => $value) { // Cycle through the $events_meta array!
        if( $post->post_type == 'revision' ) return; // Don't store custom data twice
        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post->ID, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
    }
}
add_action('save_post', 'wpt_save_officials_position', 1, 2); // save the custom fields
?>
