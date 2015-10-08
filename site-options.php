<?php
class SiteOptions {
	private $site_options_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'site_options_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'site_options_page_init' ) );
	}

	public function site_options_add_plugin_page() {
		add_menu_page(
			'Site Options', // page_title
			'Site Options', // menu_title
			'manage_options', // capability
			'site-options', // menu_slug
			array( $this, 'site_options_create_admin_page' ), // function
			'dashicons-admin-settings', // icon_url
			66 // position
		);
	}

	public function site_options_create_admin_page() {
		$this->site_options_options = get_option( 'site_options_option_name' ); ?>

		<div class="wrap">
			<h2>Site Options</h2>
			<p>These options are used to help customize your site to fit your agencies needs.</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'site_options_option_group' );
					do_settings_sections( 'site-options-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function site_options_page_init() {
		register_setting(
			'site_options_option_group', // option_group
			'site_options_option_name', // option_name
			array( $this, 'site_options_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'site_options_setting_section', // id
			'Settings', // title
			array( $this, 'site_options_section_info' ), // callback
			'site-options-admin' // page
		);

		add_settings_field(
			'google_analytics_tracking_id_0', // id
			'Google Analytics Tracking ID', // title
			array( $this, 'google_analytics_tracking_id_0_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);

		add_settings_field(
			'color_scheme_1', // id
			'Color Scheme', // title
			array( $this, 'color_scheme_1_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);

		add_settings_field(
			'menu_type_2', // id
			'Menu Type', // title
			array( $this, 'menu_type_2_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);

		add_settings_field(
			'facebook_id_4', // id
			'Facebook ID', // title
			array( $this, 'facebook_id_4_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);

		add_settings_field(
			'twitter_handle_5', // id
			'Twitter Handle', // title
			array( $this, 'twitter_handle_5_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);

		add_settings_field(
			'instagram_handle_6', // id
			'Instagram Handle', // title
			array( $this, 'instagram_handle_6_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);

		add_settings_field(
			'google_url_7', // id
			'Google+ URL', // title
			array( $this, 'google_url_7_callback' ), // callback
			'site-options-admin', // page
			'site_options_setting_section' // section
		);
	}

	public function site_options_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['google_analytics_tracking_id_0'] ) ) {
			$sanitary_values['google_analytics_tracking_id_0'] = sanitize_text_field( $input['google_analytics_tracking_id_0'] );
		}

		if ( isset( $input['color_scheme_1'] ) ) {
			$sanitary_values['color_scheme_1'] = $input['color_scheme_1'];
		}

		if ( isset( $input['menu_type_2'] ) ) {
			$sanitary_values['menu_type_2'] = $input['menu_type_2'];
		}

		if ( isset( $input['facebook_id_4'] ) ) {
			$sanitary_values['facebook_id_4'] = sanitize_text_field( $input['facebook_id_4'] );
		}

		if ( isset( $input['twitter_handle_5'] ) ) {
			$sanitary_values['twitter_handle_5'] = sanitize_text_field( $input['twitter_handle_5'] );
		}

		if ( isset( $input['instagram_handle_6'] ) ) {
			$sanitary_values['instagram_handle_6'] = sanitize_text_field( $input['instagram_handle_6'] );
		}

		if ( isset( $input['google_url_7'] ) ) {
			$sanitary_values['google_url_7'] = sanitize_text_field( $input['google_url_7'] );
		}

		return $sanitary_values;
	}

	public function site_options_section_info() {

	}

	public function google_analytics_tracking_id_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="site_options_option_name[google_analytics_tracking_id_0]" id="google_analytics_tracking_id_0" value="%s">',
			isset( $this->site_options_options['google_analytics_tracking_id_0'] ) ? esc_attr( $this->site_options_options['google_analytics_tracking_id_0']) : ''
		);
	}

	public function color_scheme_1_callback() {
		?> <select name="site_options_option_name[color_scheme_1]" id="color_scheme_1">
			<?php $selected = (isset( $this->site_options_options['color_scheme_1'] ) && $this->site_options_options['color_scheme_1'] === 'oceanside') ? 'selected' : '' ; ?>
			<option value="oceanside" <?php echo $selected; ?>>Oceanside</option>
			<?php $selected = (isset( $this->site_options_options['color_scheme_1'] ) && $this->site_options_options['color_scheme_1'] === 'orangecounty') ? 'selected' : '' ; ?>
			<option value="orangecounty" <?php echo $selected; ?>>Orange County</option>
			<?php $selected = (isset( $this->site_options_options['color_scheme_1'] ) && $this->site_options_options['color_scheme_1'] === 'pasorobles') ? 'selected' : '' ; ?>
			<option value="pasorobles" <?php echo $selected; ?>>Paso Robles</option>
			<?php $selected = (isset( $this->site_options_options['color_scheme_1'] ) && $this->site_options_options['color_scheme_1'] === 'santabarbara') ? 'selected' : '' ; ?>
			<option value="santabarbara" <?php echo $selected; ?>>Santa Barbara</option>
			<?php $selected = (isset( $this->site_options_options['color_scheme_1'] ) && $this->site_options_options['color_scheme_1'] === 'sierra') ? 'selected' : '' ; ?>
			<option value="sierra" <?php echo $selected; ?>>Sierra</option>
		</select> <?php
	}

	public function menu_type_2_callback() {
		?> <select name="site_options_option_name[menu_type_2]" id="menu_type_2">
			<?php $selected = (isset( $this->site_options_options['menu_type_2'] ) && $this->site_options_options['menu_type_2'] === 'mega-menu') ? 'selected' : '' ; ?>
			<option value="mega-menu" <?php echo $selected; ?>>Mega Menu</option>
			<?php $selected = (isset( $this->site_options_options['menu_type_2'] ) && $this->site_options_options['menu_type_2'] === 'dropdown-menu') ? 'selected' : '' ; ?>
			<option value="dropdown-menu" <?php echo $selected; ?>>Dropdown Menu</option>
			<?php $selected = (isset( $this->site_options_options['menu_type_2'] ) && $this->site_options_options['menu_type_2'] === 'single-menu') ? 'selected' : '' ; ?>
			<option value="single-menu" <?php echo $selected; ?>>Single Menu</option>
		</select> <?php
	}

	public function facebook_id_4_callback() {
		printf(
			'<input class="regular-text" type="text" name="site_options_option_name[facebook_id_4]" id="facebook_id_4" value="%s">',
			isset( $this->site_options_options['facebook_id_4'] ) ? esc_attr( $this->site_options_options['facebook_id_4']) : ''
		);
	}

	public function twitter_handle_5_callback() {
		printf(
			'<input class="regular-text" type="text" name="site_options_option_name[twitter_handle_5]" id="twitter_handle_5" value="%s">',
			isset( $this->site_options_options['twitter_handle_5'] ) ? esc_attr( $this->site_options_options['twitter_handle_5']) : ''
		);
	}

	public function instagram_handle_6_callback() {
		printf(
			'<input class="regular-text" type="text" name="site_options_option_name[instagram_handle_6]" id="instagram_handle_6" value="%s">',
			isset( $this->site_options_options['instagram_handle_6'] ) ? esc_attr( $this->site_options_options['instagram_handle_6']) : ''
		);
	}

	public function google_url_7_callback() {
		printf(
			'<input class="regular-text" type="text" name="site_options_option_name[google_url_7]" id="google_url_7" value="%s">',
			isset( $this->site_options_options['google_url_7'] ) ? esc_attr( $this->site_options_options['google_url_7']) : ''
		);
	}

}
if ( is_admin() )
	$site_options = new SiteOptions();


/*
 * Retrieve this value with:
 * $site_options_options = get_option( 'site_options_option_name' ); // Array of All Options
 * $google_analytics_tracking_id_0 = $site_options_options['google_analytics_tracking_id_0']; // Google Analytics Tracking ID
 * $color_scheme_1 = $site_options_options['color_scheme_1']; // Color Scheme
 * $menu_type_2 = $site_options_options['menu_type_2']; // Menu Type
 * $facebook_id_4 = $site_options_options['facebook_id_4']; // Facebook ID
 * $twitter_handle_5 = $site_options_options['twitter_handle_5']; // Twitter Handle
 * $instagram_handle_6 = $site_options_options['instagram_handle_6']; // Instagram Handle
 * $google_url_7 = $site_options_options['google_url_7']; // Google+ URL
 */
?>
