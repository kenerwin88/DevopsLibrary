<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>(function(){document.documentElement.className='js'})();</script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/twitter.js" async=""></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/cb=gapi.loaded_1" async=""></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/cb=gapi.loaded_0" async=""></script>
	<script src="https://apis.google.com/js/platform.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/quant.js" async="" type="text/javascript"></script>
	<script type="text/javascript" async="" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/plusone.js" gapi_processed="true"></script>
	<script id="twitter-wjs" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/widgets.js"></script>
	<script id="facebook-jssdk" async="" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/all.js"></script>
	<script type="text/javascript" async="" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/ga.js"></script>
	<script async="" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/gpt.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/application-3c9106646a906ec807f54eb6057abf18.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/j.php" type="text/javascript"></script>
</head>
