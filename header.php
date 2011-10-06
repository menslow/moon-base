<?php
/**
 * @package WordPress
 * @subpackage 
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>	<html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>	<html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>	<html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" media="all" href="<?php echo(get_bloginfo('template_directory')); ?>/assets/css/theme.css" />
	<link rel="stylesheet" media="all and (min-width: 1200px)" href="<?php echo(get_bloginfo('template_directory')); ?>/assets/css/1200.css" >
	<link rel="stylesheet" media="all and (min-width: 620px) and (max-width: 1200px)" href="<?php echo(get_bloginfo('template_directory')); ?>/assets/css/960.css" />
	<link rel="stylesheet" media="all and (min-width: 0px) and (max-width: 620px)" href="<?php echo(get_bloginfo('template_directory')); ?>/assets/css/mobile.css" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page wrapper">
		<div class="header">
			<div class=" container_12">
				<div class="hGroup grid_3"><a class="logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				
				<div class="grid_9">
					<?php// get_search_form(); ?>
				</div>
				
				<div class="grid_9"><!-- START nav -->
					<?php wp_nav_menu( array('menu' => 'Main Menu', 'container' => '' ) ); ?>		
				</div><!--END nav -->
			</div>
		</div>
		
		<div class="container_12">