<?php get_header();echo "3333333333";
define('PATH','http://localhost/xampp/wordpresslsp/wp-content/themes/supergrid/');
?>


<?php
echo "<script type=\"text/javascript\" src=\"".PATH."jquery-cookie/jquery.cookie.js\"></script>";
?>
<!-- 透明遮罩层 -->
<div id="gn_curtain" ></div>
<div id="gn_wind">
	<div id="gn_wind_exit"><img  class="gn_wind_exit_img" src="<?PHP echo PATH; ?>img/blog-exit.png" style="width:50px;height:50px;margin:0 auto auto 0;"></div>
	<img id="gn_wind_img"  src="">
	
</div>


<!-- MOBILE MENU
		================================================== -->
		<div class="mobile-nav-container">
		<div class="mobile-nav-bar">
		    <button type="button" class="btn-mobile-nav" data-toggle="collapse" data-target="#mobile-nav"></button>
		    <button type="button" class="btn-info-nav" data-toggle="collapse" data-target="#info-nav"></button>
		    
						<div class="mobile-logo">
				<a class="dblyfcss" style="font-size:18px;letter-spacing:5px;" onClick="location.href=''">
					今天头条	
				</a>
			</div>
							
						
		</div>
		
		<div id="mobile-nav" class="collapse">
			<ul>
							   <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6"><a href="?cat=6">推荐</a></li>
<li id="menu-item-699" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-699"><a  href="#filter=.anecdote">奇闻</a></li>
<li id="menu-item-709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-709"><a  href="?cat=5">社会</a></li>
<li id="menu-item-717" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-717"><a  href="?cat=8">军事</a></li>
<li id="menu-item-718" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-718"><a  href="?cat=7">娱乐</a></li>
<li id="menu-item-722" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-722"><a  href="?cat=4">财经</a></li>
<li id="menu-item-723" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-723"><a  href="?cat=9">科技</a></li>
<li id="menu-item-716" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-716"><a  href="?cat=10">美女</a></li>
<li id="menu-item-785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-785"><a href="?cat=2">体育</a></li>
			</ul>
		</div>
	</div>
		
		<!-- DESKTOP NAVIGATION
		================================================== -->
		    <div class="navigation">
		<nav>		
			<ul class="nav myclear" style="text-align:left;">
				<div class="myclear"></div>
								<li class="logo" style="position:absolute;left:-400px;">
					<a style="font-size:18px;letter-spacing:5px;" onClick="location.href=''">
						今天头条					</a>
				</li>
												
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6"><a href="<?php echo site_url();?>/all">推荐</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-699"><a href="<?php echo site_url();?>/hot">奇闻</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-709"><a href="<?php echo site_url();?>/society">社会</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-717"><a href="<?php echo site_url();?>/military">军事</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-718"><a href="<?php echo site_url();?>/entertainment">娱乐</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-722"><a href="<?php echo site_url();?>/finance">财经</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-723"><a href="<?php echo site_url();?>/tech">科技</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-716"><a href="<?php echo site_url();?>/mm">美女</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-785"><a href="<?php echo site_url();?>/sports">体育</a></li>
			   
			</ul>
		
		
					
		</nav>	 
		<div class="nav-arrow"></div>
	</div>








<div id="preloader-container">
<div id="container">

<?php while ( have_posts() ) : the_post(); ?>


    <?php $custom = get_post_custom(); ?>
    <?php $my_terms = get_the_terms( $post->ID, 'Skills' ); ?>
    <div class="widget <?php if (!get_field('page_filter')) { echo 'blog'; } ?> <?php the_field('page_filter') ?> <?php if (is_sticky() == true) { echo 'widget-dark'; } ?>
			
			<?php
    foreach(get_the_category() as $category) {
        echo $category->slug . ' ';
    }
    ?>
			<?php
    if( $my_terms && !is_wp_error( $my_terms ) ) {
        foreach( $my_terms as $term ) {
            echo $term->slug . ' ';
        }
    }
    ?> <?php if (get_field('column_size')) { ?> span<?php the_field('column_size'); } else { echo 'span4'; } ?>">

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( get_field('featured_stamp') ) { ?>
        <div class="featured-stamp">
            <p>FEATURED</p>
        </div>
    <?php } ?>


    <?php if ( (get_field('post_type')) == "Image" ) { ?>
        <!-- ======================================
        // Featured Image
        =========================================== -->
        <a href="<?php the_field('image') ?>" class="fancybox entry-image">
            <span class="entry-image-overlay"></span>
            <img src="<?php the_field('image') ?>" alt="" />
        </a>
    <?php } ?>

    <?php if ( (get_field('post_type')) == "Slider" ) { ?>
        <!-- ======================================
        // Slider
        =========================================== -->

        <div class="widget-slider">
            <div class="flexslider">
                <ul class="slides">

                    <?php while(has_sub_field('slider_images')) { ?>
                        <li>
                            <div class="entry-image">
                                <a href="<?php the_sub_field('slider_image'); ?>" class="fancybox">
                                    <span class="entry-image-overlay"></span>
                                    <img src="<?php the_sub_field('slider_image'); ?>" alt="" />
                                </a>
                            </div>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    <?php } ?>

    <?php if ( (get_field('post_type')) == "Tabs" ) { ?>
        <!-- ======================================
        // TABS
        =========================================== -->

        <!-- Tab Buttons -->
        <ul class="tabs" id="myTab-<?php echo get_the_ID(); ?>">
            <?php while(has_sub_field('tabs')) { ?>
                <li class="<?php if( get_sub_field('tab_active') ) { ?>active<?php } ?> drop-shadow curved-small"><a href="#<?php the_sub_field('tab_title'); ?>"><?php the_sub_field('tab_title'); ?></a></li>
            <?php } ?>
        </ul>

        <!-- Tab Content -->
        <div class="drop-shadow curved">
            <div class="tab-content">

                <?php while(has_sub_field('tabs')) { ?>
                    <!-- Tab Content (Home) -->
                    <div class="tab-pane <?php if( get_sub_field('tab_active') ) { ?>active<?php } ?>" id="<?php the_sub_field('tab_title'); ?>">
                        <div class="row-fluid">
                            <?php the_sub_field('tab_content'); ?>
                        </div>
                        <div class="stripes"></div>
                    </div>
                <?php } ?>

            </div>
        </div>

        <script>
            $('#myTab-<?php echo get_the_ID(); ?> a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
        </script>
        
    <?php } ?>

    <?php if ( (get_field('post_type') !== "Social") && (get_field('post_type') !== "Tabs")) { ?>
        <!-- ======================================
        // PLAIN
        =========================================== -->
        <div class="entry drop-shadow curved">
            <!-- Portfolio Heading -->


            <!-- Portfolio Description -->
            <?php if (get_field('excerpt') == "Full") {?>
                <?php the_content(); ?>
            <?php } ?>

            <?php if (get_field('excerpt') == "Excerpt") {?>
                <?php the_excerpt(); ?>
            <?php } ?>

            <?php if(get_field('post_footer')) { ?>
                <ul class="entry-footer">
                    <?php if( in_array( 'Timestamp', get_field('post_footer'))) { ?>
                        <li class="left"> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </li>
                    <?php } ?>

                    <?php if( in_array( 'Comments', get_field('post_footer'))) { ?>
                        <li class="right no-margin"><div class="icon comment"></div> <?php comments_number('0','1','%'); ?></li>
                    <?php } ?>
                    <?php if( in_array( 'Like', get_field('post_footer'))) { ?>
                        <?php echo getPostLikeLink(get_the_ID());?>
                    <?php } ?>
                </ul>
            <?php } ?>
            <span class="stripes"></span>
        </div>
    <?php } ?>
    </div>
    </div>
<?php endwhile; ?>

</div>
</div>
<?php paginate_links(); ?>
<?php get_footer(); ?>   
