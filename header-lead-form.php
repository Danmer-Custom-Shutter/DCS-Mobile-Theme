<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<?php // echo 'test';
		/*
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width" />		

*/
		 ?>
		
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>
		<![endif]-->
		<?php wp_head(); ?>
		
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6888814-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>
		<?php if( get_header_image() != '' ) : ?>

			<div id="logo" class="clearfix">
				<a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/themes/danmer-mobile-v2/core/images/event-lead-logo.jpg" width="227px" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->
		<?php endif; // header image was removed ?>
		
		<?php wp_nav_menu( array(
							   'container'       => 'div',
							   'container_class' => 'main-nav',
							   'fallback_cb'     => 'responsive_fallback_menu',
							   'theme_location'  => 'lead-form-menu'
						   )
		);
		?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
	<div id="menu-overlay"></div>
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>