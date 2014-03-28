<?php header("Content-type: text/css; charset: UTF-8"); ?>
<?php 	
if(file_exists('../../../../wp-load.php')) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;  
?>

<?php if (get_field('background_color', 'option')) { ?>
body, #preloader {
	background: <?php the_field('background_color', 'option'); ?> !important;
}
<?php } ?>
<?php if (get_field('background_texture', 'option')) { ?>
body, #preloader {
	background: url(<?php echo get_template_directory_uri(); ?>/img/textures/<?php the_field('background_texture', 'option'); ?>.png) !important;
}
<?php } ?>
<?php if (get_field('background_image', 'option')) { ?>
body, #preloader {
	background: url(<?php the_field('background_image', 'option'); ?>) !important;
}
<?php } ?>
<?php if (get_field('nav_background', 'option')) { ?>
.navigation {
	background: <?php the_field('nav_background', 'option'); ?> !important;
}
<?php } ?>
<?php if (get_field('nav_background', 'option')) { ?>
.nav-arrow {
	border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid <?php the_field('nav_background', 'option'); ?>;
}
<?php } ?>
<?php if (get_field('nav_active', 'option')) { ?>
.selected {
	background: <?php the_field('nav_active', 'option'); ?> url("") no-repeat right center !important;
	color: #fff !important;
}
<?php } ?>
<?php if (get_field('nav_hover', 'option')) { ?>
nav .nav li:hover {
	background: <?php the_field('nav_hover', 'option'); ?>;		
	color: #fff !important;
}
<?php } ?>
<?php if (get_field('post_shadow', 'option')) { ?>
.curved:before {
    box-shadow:20px 0 10px <?php the_field('post_shadow', 'option'); ?>;
}	
<?php } ?>
<?php if (get_field('image_hover_icon', 'option')) { ?>
.entry-image-overlay {
	background: url(<?php echo get_template_directory_uri(); ?>/img/<?php the_field('image_hover_icon', 'option') ?>), url(<?php echo get_template_directory_uri(); ?>/img/overlay_bg.png); background-size:10px 10px, 100% 100%;
	background-position: center; background-repeat: no-repeat;
}
<?php } ?>
<?php if (get_field('upload_hover_icon', 'option')) { ?>
.entry-image-overlay {
	background: url(<?php the_field('upload_hover_icon', 'option') ?>), url(<?php echo get_template_directory_uri(); ?>/img/overlay_bg.png); background-size:10px 10px, 100% 100%;
	background-position: center; background-repeat: no-repeat;
}
<?php } ?>

<?php the_field('custom_css', 'option'); ?>

<?php if (get_field('heading_font', 'option')) { ?>
<?php if (get_field('heading_font', 'option') !== "Default") { ?>
h1, h2, h3, h4, h5, h6 { 
	font-family: '<?php the_field('heading_font', 'option'); ?>'; 
	padding: 0 0 0 0; 
	margin-top: 0; margin-bottom: 12px; margin-left: auto; margin-right: auto; 
	font-weight:blod ! important ;
	color: #666;
}
<?php } ?>
<?php } ?>

<?php if (get_field('body_font', 'option')) { ?>
<?php if (get_field('body_font', 'option') !== "Default") { ?>
p { 
	width: 100%; 
	padding: 0 0 0 0; 
	margin-bottom: 22px; 
	font-family: '<?php the_field('body_font', 'option'); ?>'; 
	font-size: <?php the_field('body_font_size', 'option'); ?>; 
	line-height: 20px;
	color: #888; 
 	margin-top: 0; 
}
<?php } ?>
<?php } ?>
<?php
//一下为非源生
echo "
#gn_curtain{
	display:none;
	width:100%;
	height:1000px;
	background:black;
	opacity:0.7;
	filter:alpha(opacity=70);
	position:fixed;
	z-index:100001;
	top:0px;
}

#gn_wind{
	display:none;
	width:100%;
	height:1000px;
	
	position:fixed;
	z-index:100002;
	top:0px;
	
}

#gn_wind_img{
	display:block;
	margin:140px auto;
	width:540px;
	height:720px;
}

#gn_wind_exit{
	color:white;
}

#gn_wind_exit:hover{
	cursor:pointer;
}

#gn_wind_last{
	color:white;
}

#gn_wind_next{

	color:white;

}

.gn_wind_exit_img{
	position:absolute;
	right:0;
}
";
?>
