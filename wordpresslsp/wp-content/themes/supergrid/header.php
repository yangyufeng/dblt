<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />  
    
    <!-- Fav and touch icons -->
    <?php if (get_field('apple_touch_icon', 'option')) { ?>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php the_field('apple_touch_icon', 'option'); ?>">
    <?php } ?>
    
    <?php if (get_field('favicon', 'option')) { ?>
    <link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>">
    <?php } ?>
    <?php wp_head(); ?>
    
    <?php if ( is_user_logged_in() ) { ?>
    <style>
    body, .navigation {
	    margin-top: 28px;
    }
    body {
	    padding-top: 80px;
    }
    #info-nav {
		top: 97px;
	}
    </style>    
    <?php } ?>
</head>

<body <?php body_class(); ?> onload="initialize()">
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<?php if (!is_tag() && !is_search() && !is_archive()) { ?> 
	<!-- Google Maps -->
	<div id="map_canvas" style="opacity: 0; width:100%; height:100%"></div>

	<?php if (has_nav_menu( 'header-menu' )) { ?>
		<!-- MOBILE MENU
		================================================== -->
		<?php mobile_menu(); ?>
		
		<!-- DESKTOP NAVIGATION
		================================================== -->
		<?php ajax_menu(); ?>
	<?php } ?>
<?php } ?>

<?php if (is_tag() || is_search() || is_archive()) { ?> 
	<a class="blog-exit" href="<?php echo site_url(); ?>"></a>
	<div class="blog-top-bar"></div>
<?php } ?>

<?php // style_switcher(); ?>
	
	
