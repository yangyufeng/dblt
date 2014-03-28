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
    <?php wp_enqueue_style("responsive"); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <style>
    body, .navigation {
	    margin-top: 28px;
    }
    .blog-top-bar {
		top: 28px;
	}
	.blog-exit {
		top: 48px;
	}
    </style>
    <?php } ?>
    
    <style>
    body {
	    padding-top: 30px
    }
    </style>
    
    </head>
<body>
						 
<a class="blog-exit" href="<?php echo site_url(); ?>"></a>
<div class="blog-top-bar"></div>

<?php while ( have_posts() ) : the_post(); ?> 
		
		<div class="body-container">
			<div class="container">
				<div class="row">
					<div class="entry-container span8 offset2">
					   		 
					   	<div class="entry drop-shadow curved ">
							  	 
							  	<!-- Portfolio Heading -->
						   		<?php if (get_the_title()) { ?>
						   		<h5 class="heading">
						   			<a href="<?php the_permalink(); ?>">
						   				<?php the_title(); ?>
						   			</a>
						   		</h5>
						   		
						   		<!-- Icons -->
						   		<?php if(get_field('post_icons') && (get_field('post_type') !== "Slider")) { ?>
						   		<ul class="social">
							   	
								   	<?php while(has_sub_field('post_icons')) { ?>	
									<li class="social-button-team right"><a href="<?php the_sub_field('post_icon_url')?>" rel="alternate" data-original-title="<?php the_sub_field('post_icon_title')?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/img/icons/<?php the_sub_field('post_icon')?>" alt="" /></a></li>
									<?php } ?>
								
							   	</ul>
							   	<?php } ?>
							   	<?php } ?>
							  	 
							   	<!-- Description -->
							  	<?php the_content(); ?>
							  	 <div class="clearboth">&nbsp;</div>
							  	<?php if(get_field('post_footer')) { ?>
						   		 <div class="entry-footer">
						   		 	<ul>
						   		 		<?php if( in_array( 'Timestamp', get_field('post_footer'))) { ?>
						   		 			<li class="left"> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </li>
						   		 		<?php } ?>
						   		 		
						   		 		<?php if( in_array( 'Comments', get_field('post_footer'))) { ?>
						   		 			<li class="right no-margin"><a href="<?php the_permalink(); ?>"><div class="icon comment"></div> <?php comments_number('0','1','%'); ?></a></li>
						   		 		<?php } ?>
						   		 		<?php if( in_array( 'Like', get_field('post_footer'))) { ?>
						   		 			<?php echo getPostLikeLink(get_the_ID());?>    
						   		 		<?php } ?>
						   		 	</ul>
						   		 </div>
						   		<?php } ?>
						   		
						   		 <div class="stripes"></div>
						   	</div>			
					</div>
				</div>
			</div>
		</div>
<?php endwhile; ?>
<?php get_footer(); ?>   
