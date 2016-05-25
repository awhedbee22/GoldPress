<?php
/*
 *  Author: Alex Whedbee | @AlexWhedbee
 *  URL: TheDisruptory.io
 *  Custom functions, support, custom post types and more. Built upon HTML5Blank.
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/
require_once(get_template_directory().'/functions/theme-support.php');

/*------------------------------------*\
	Theme Options
\*------------------------------------*/
require_once(get_template_directory().'/functions/theme-options.php');

/*------------------------------------*\
	Script Enqueues
\*------------------------------------*/
require_once(get_template_directory().'/functions/enqueues.php');

/*------------------------------------*\
	Navigations Enqueues
\*------------------------------------*/
require_once(get_template_directory().'/functions/navigation.php');

/*------------------------------------*\
	Widgets Enqueues
\*------------------------------------*/
require_once(get_template_directory().'/functions/widgets.php');

/*------------------------------------*\
	Additions Enqueues
\*------------------------------------*/
require_once(get_template_directory().'/functions/additions.php');

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/
require_once(get_template_directory().'/functions/actions-filters.php');

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/
require_once(get_template_directory().'/functions/custom-post-types.php');

?>
