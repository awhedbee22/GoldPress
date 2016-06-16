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

function position_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function position_add_meta_box() {
	add_meta_box(
		'position-position',
		__( 'Position', 'position' ),
		'position_html',
		'gov-officials',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'position_add_meta_box' );

function position_html( $post) {
	wp_nonce_field( '_position_nonce', 'position_nonce' ); ?>

	<p>
		<label for="position_position"><?php _e( 'Position', 'position' ); ?></label><br>
		<input type="text" name="position_position" id="position_position" value="<?php echo position_get_meta( 'position_position' ); ?>">
	</p><?php
}

function position_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['position_nonce'] ) || ! wp_verify_nonce( $_POST['position_nonce'], '_position_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['position_position'] ) )
		update_post_meta( $post_id, 'position_position', esc_attr( $_POST['position_position'] ) );
}
add_action( 'save_post', 'position_save' );

/*
	Usage: position_get_meta( 'position_position' )
*/


/*-------------------------------------------------------------------------------------------*/
/* homepage_slider Post Type */
/*-------------------------------------------------------------------------------------------*/
class homepage_slider {

	function homepage_slider() {
		add_action('init',array($this,'create_post_type'));
	}

	function create_post_type() {
		$labels = array(
		    'name' => 'Slide',
		    'singular_name' => 'Slide',
		    'add_new' => 'Add New',
		    'all_items' => 'All Slides',
		    'add_new_item' => 'Add New Slide',
		    'edit_item' => 'Edit Slide',
		    'new_item' => 'New Slide',
		    'view_item' => 'View Slide',
		    'search_items' => 'Search Slides',
		    'not_found' =>  'No Slides found',
		    'not_found_in_trash' => 'No Slides found in trash',
		    'parent_item_colon' => 'Parent Slide:',
		    'menu_name' => 'Homepage Slider'
		);
		$args = array(
			'labels' => $labels,
			'description' => "Homepage slider with image, title, and link. Slides recommended 1500x500",
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => false,
			'menu_position' => 20,
            'menu_icon' => 'dashicons-slides',
            'label'     => __( 'Portfolio', 'local' ),
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','thumbnail','excerpt'),
			'has_archive' => false,
			'rewrite' => array('slug' => 'featured-slide'),
			'query_var' => true,
			'can_export' => true
		);
		register_post_type('homepage_slider',$args);
	}
}

$homepage_slider = new homepage_slider();

?>
