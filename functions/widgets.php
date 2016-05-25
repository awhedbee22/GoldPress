<?php
// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Primary Widgets
    register_sidebar(array(
        'name' => __('Primary Widgets', 'html5blank'),
        'description' => __('These widgets will utilize the .panel-standout class. Making them primary widgets in the sidebar.', 'html5blank'),
        'id' => 'widget-area-1',
        'class' => 'panel panel-standout',
        'before_widget' => '<div id="%1$s" class="%2$s panel panel-standout">',
        'after_widget' => '</div>',
        'before_title' => '<div class="panel-heading"><h2><span></span>',
        'after_title' => '</h2></div>'
    ));

    // Define Sidebar Secondary Widgets
    register_sidebar(array(
        'name' => __('Secondary Widgets', 'html5blank'),
        'description' => __('These widgets will utilize the .panel-default class. Making them the standard sidebar widgets.', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s panel panel-default">',
        'after_widget' => '</div>',
        'before_title' => '<div class="panel-heading"><h4><span></span>',
        'after_title' => '</h4></div>'
    ));
}

// Register form element
function kk_in_widget_form($t,$return,$instance){
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '') );

    if ( !isset($instance['headericon']) )
        $instance['headericon'] = null;
    ?>

    <p>Header Icon Class:<br>
    <input type="text" name="<?php echo $t->get_field_name('headericon'); ?>" id="<?php echo $t->get_field_id('headericon'); ?>" value="<?php echo $instance['headericon'];?>" /></p>
    <?php
    $retrun = null;
    return array($t,$return,$instance);
}

// Save Widget input data
function kk_in_widget_form_update($instance, $new_instance, $old_instance){

    $instance['headericon'] = strip_tags($new_instance['headericon']);
    return $instance;
}

// Display Widget Output
function kk_dynamic_sidebar_params($params){
    global $wp_registered_widgets;
    $widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];

        if(isset($widget_opt[$widget_num]['headericon']))
                    $headericon = $widget_opt[$widget_num]['headericon'];
            else
                $headericon = '';
        $params[0]['before_title'] = preg_replace('/span/', 'span class="'.$headericon.'"',  $params[0]['before_title'], 1);

    return $params;
}

// Called the Function with Wordpress Action Hooks
// Add input fields(priority 5, 3 parameters)
add_action('in_widget_form', 'kk_in_widget_form',5,3);
//Callback function for options update (priorität 5, 3 parameters)
add_filter('widget_update_callback', 'kk_in_widget_form_update',5,3);
//add class names (default priority, one parameter)
add_filter('dynamic_sidebar_params', 'kk_dynamic_sidebar_params');
?>
