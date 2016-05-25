<?php
// Options Page Functions
function themeoptions_admin_menu()
{
    // here's where we add our theme options page link to the dashboard sidebar
    add_theme_page("Theme Options", "Theme Options", 'edit_themes', basename(__FILE__), 'themeoptions_page');
}

function themeoptions_page()
{
    // here's the main function that will generate our options page

    if ( $_POST['update_themeoptions'] == 'true' ) { themeoptions_update(); }

    //if ( get_option() == "checked"

    ?>
    <div class="wrap">
        <div id="icon-themes" class="icon32"><br /></div>
        <h2>Theme Options</h2>

        <form method="POST" action="">
            <input type="hidden" name="update_themeoptions" value="true" />

            <h4>Home Icon in Nav</h4>
            <select name ="homeIcon">
                <?php $showHome = get_option('mytheme_display_home'); ?>
                <option value="visable" <?php if ($showHome=='display') { echo 'selected'; } ?> >Display</option>
                <option value="hidden" <?php if ($showHome=='hidden') { echo 'selected'; } ?>>Hide</option>
            </select>

            <h4>Contact Us Icon in Nav <span style="color:red;">* Contact page must be called "Contact Us".</span></h4>
            <select name ="contactIcon">
                <?php $showContactUs = get_option('mytheme_display_contact'); ?>
                <option value="visable" <?php if ($showContactUs=='display') { echo 'selected'; } ?> >Display</option>
                <option value="hidden" <?php if ($showContactUs=='hidden') { echo 'selected'; } ?>>Hide</option>
            </select>

            <h4>Menu Type</h4>
            <select name ="menu">
                <?php $menuType = get_option('mytheme_menu_type'); ?>
                <option value="mega" <?php if ($menuType=='mega') { echo 'selected'; } ?> >Mega Menu</option>
                <option value="dropdown" <?php if ($menuType=='dropdown') { echo 'selected'; } ?>>Drop-Down Menu</option>
                <option value="single" <?php if ($menuType=='single') { echo 'selected'; } ?>>Single Menu</option>
            </select>

            <hr>

            <h4>Color Scheme</h4>
            <select name ="color">
                <?php $color = get_option('mytheme_color'); ?>
                <option value="oceanside" <?php if ($color=='oceanside') { echo 'selected'; } ?> >Oceanside Stylesheet</option>
                <option value="orangecounty" <?php if ($color=='orangecounty') { echo 'selected'; } ?>>Orange County Stylesheet</option>
                <option value="pasorobles" <?php if ($color=='pasorobles') { echo 'selected'; } ?>>Paso Robles Stylesheet</option>
                <option value="santabarbara" <?php if ($color=='santabarbara') { echo 'selected'; } ?> >Santa Barbara Stylesheet</option>
                <option value="sierra" <?php if ($color=='sierra') { echo 'selected'; } ?> >Sierra Stylesheet</option>
            </select>

            <hr>

            <h4>Enable Governor Banner</h4>
            <select name ="govBanner">
                <?php $showGovBanner = get_option('mytheme_display_govBanner'); ?>
                <option value="visable" <?php if ($showGovBanner=='display') { echo 'selected'; } ?> >Display</option>
                <option value="hidden" <?php if ($showGovBanner=='hidden') { echo 'selected'; } ?>>Hide</option>
            </select>

            <hr>

            <h4>Social Media</h4>
            <p><input type="text" name="facebook_info" id="facebook_info" size="15" value="<?php echo get_option('mytheme_facebook_info'); ?>" /> Facebook ID<br><a href="http://findmyfbid.com/" title="Find My Facebook ID">How to find my Facebook ID?</a></p>

            <p><input type="text" name="twitter_username" id="twitter_username" size="31" value="<?php echo get_option('mytheme_twitter_username'); ?>" placeholder="@TwitterHandle" /> Twitter Username</p>

            <p><input type="text" name="instagram_username" id="instagram_username" size="31" value="<?php echo get_option('mytheme_instagram_username'); ?>" placeholder="@InstagramHandle" /> Instagram Username</p>

            <p><input type="text" name="google_username" id="google_username" value="<?php echo get_option('mytheme_google_username'); ?>" placeholder="http://google.com/" /> Google+ URL</p>

            <hr>

            <h4>Google Analytics</h4>
            <p><input type="text" name="googleanalytics" id="googleanalytics" size="14" value="<?php echo get_option('mytheme_googleanalytics'); ?>" placeholder="UA-XXXXXXXX-XX"/> Google Analytics Tracking ID</p>

            <p><input type="text" name="mydomain" id="mydomain" value="<?php echo get_option('mytheme_mydomain'); ?>" placeholder="yourdomain.com"/> Your Domain</p>

            <p><input type="submit" name="search" value="Update Options" class="button" /></p>
        </form>

    </div>
    <?php
}

function themeoptions_update()
{
    // this is where validation would go
    update_option('mytheme_color',     $_POST['color']);

    update_option('mytheme_menu_type',     $_POST['menu']);

    update_option('mytheme_display_home',     $_POST['homeIcon']);

    update_option('mytheme_display_contact',     $_POST['contactIcon']);

    update_option('mytheme_display_govBanner',     $_POST['govBanner']);

    update_option('mytheme_googleanalytics',   $_POST['googleanalytics']);

    update_option('mytheme_facebook_info',   $_POST['twitter_username']);

    update_option('mytheme_twitter_username',   $_POST['facebook_info']);

    update_option('mytheme_instagram_username',   $_POST['instagram_username']);

    update_option('mytheme_google_username',   $_POST['google_username']);

    update_option('mytheme_googleanalytics',   $_POST['googleanalytics']);

    update_option('mytheme_mydomain',   $_POST['mydomain']);
}

add_action('admin_menu', 'themeoptions_admin_menu');
?>
