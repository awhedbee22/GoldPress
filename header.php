<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<!-- For iPad 3-->
		<link rel="apple-touch-icon" sizes="144x144" href="/images/template2014/apple-touch-icon-144x144.png">
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon" sizes="114x114" href="/images/template2014/apple-touch-icon-114x114.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon" sizes="72x72" href="/images/template2014/apple-touch-icon-72x72.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon" href="/images/template2014/apple-touch-icon-57x57.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="/images/template2014/apple-touch-icon-57x57.png">
		<!-- For everything else -->
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicons.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Use highest compatibility mode, enable Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- http://t.co/dKP3o1e -->
		<meta name="HandheldFriendly" content="True"> <!-- for Blackberry, AvantGo -->
		<meta name="MobileOptimized" content="320"> <!-- for Windows mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<!-- selectivizr.com, emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8 -->
		<!--[if (lt IE 9) & (!IEMobile)]>
		<script src="/js/libs/selectivizr-min.js"></script>
		<![endif]-->

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

		<!-- Activate ClearType for Mobile IE -->
		<!--[if IE]>
		<meta http-equiv="cleartype" content="on">
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="/js/libs/html5shiv.min.js"></script>
		  <script src="/js/libs/respond.min.js"></script>
		<![endif]-->

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header role="banner" id="header" class="global-header header clear" role="banner">
			<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>

		    <!-- header branding -->
			<?php get_template_part( 'partials/content', 'branding' ); ?>

		    <!-- mobile navigation controls -->
			<?php get_template_part( 'partials/content', 'mobile_nav' ); ?>

		    <div class="navigation-search">

		        <div id="head-search" class="search-container">
		            <!-- Include Search -->
		            <?php get_template_part( 'partials/content', 'search' ); ?>
		        </div>

		        <!-- Include Navigation -->
				<?php get_template_part( 'partials/nav', 'single_level' ); ?>

		    </div>
		    <div class="header-decoration"></div>
		</header>
		<!-- /header -->


		<div id="main-content" class="main-content">
		    <div class="wrapper">
