<?php
// Set Content Width
function mytheme_adjust_content_width() {
    if ( ! isset( $content_width ) ) {
        if (get_field('column_size') == "4") {
            $content_width = 306;
        }
        if (get_field('column_size') == "8") {
            $content_width = 634;
        }
    }
}

add_action( 'template_redirect', 'mytheme_adjust_content_width' );

// Widgets
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'my_mega_menu',
        'before_widget' => '<div class="span4 margin-bottom"><div class="entry side-widget drop-shadow curved">',
        'after_widget' => '<div class="stripes"></div></div></div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));
}

// Enqueue CSS
function theme_styles()  {  
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '20120208' ); 
        wp_enqueue_style( 'flex-slider', get_template_directory_uri() . '/css/flexslider.css', array(), '20120208'); 
        wp_enqueue_style( 'isotope', get_template_directory_uri() . '/css/isotope.css', array(), '20120208', 'all' ); 
        wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '20120208');
        wp_enqueue_style( 'premium-pixels', get_template_directory_uri() . '/css/skin/premium-pixels.css', array(), '20120208' );    
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '20120208');
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom_css.php', array(), '20120208' );
        wp_enqueue_style( 'responsive-grid', get_template_directory_uri() . '/css/responsive-grid.css', array(), '20120208'); 
        
        if (is_single()) {
            wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '20120208' );
        }
        if (is_page()) {
            wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '20120208' );
        }
    }  
    add_action( 'wp_enqueue_scripts', 'theme_styles' );  

// Enqueue Scripts
function theme_scripts() {
        wp_enqueue_script( 'jquery_script', get_template_directory_uri().'/js/jquery-1.7.1.min.js', array(),'');	
        wp_enqueue_script( 'preloader', get_template_directory_uri() . "/js/jquery.preloader.js", array(),'', 'in_footer');
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'flexslider', get_template_directory_uri() . "/js/jquery.flexslider-min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'loadmore', get_template_directory_uri() . "/js/load-more.php", array(),'', 'in_footer');
        wp_enqueue_script( 'infinitescroll', get_template_directory_uri() . "/js/jquery.infinitescroll.min.js", array(),'', 'in_footer');
        
        if (!is_single()) {
        wp_enqueue_script( 'isotope', get_template_directory_uri() . "/js/jquery.isotope.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'isotope_manual', get_template_directory_uri() . "/js/jquery.manual-trigger.js", array(),'', 'in_footer');
        }
        wp_enqueue_script( 'bbq', get_template_directory_uri() . "/js/jquery.ba-bbq.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . "/js/jquery.fancybox.js", array(),'', 'in_footer');
        wp_enqueue_script( 'post-like', get_template_directory_uri() . "/js/post-like.js", array(),'', 'in_footer');
        wp_enqueue_script( 'custom', get_template_directory_uri() . "/js/custom.php", array(),'', 'in_footer');
        wp_enqueue_script( 'like_post', get_template_directory_uri().'/js/post-like.js');
}    

add_action('wp_enqueue_scripts', 'theme_scripts');

// Enqueue Google Fonts
function mytheme_fonts() {
    	$protocol = is_ssl() ? 'https' : 'http';
    	wp_enqueue_style( 'mytheme-opensans', "$protocol://fonts.googleapis.com/css?family=Oswald:300,400" );
}
	   
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );


// Check Span Size + Offset
if ( is_singular() ) wp_enqueue_script( "comment-reply" );

function column_size_offset() {
    if (get_field('column_size') == "3") {
        echo "span3 offset3";
    }
    if (get_field('column_size') == "4") {
        echo "span4 offset2";
    }
    if (get_field('column_size') == "5") {
        echo "span5 offset2";
    }
    if (get_field('column_size') == "6") {
        echo "span6 offset1";
    }
    if (get_field('column_size') == "7") {
        echo "span6 offset1";
    }
    if (get_field('column_size') == "8") {
        echo "span8";
    }
    if (get_field('column_size') == "9") {
        echo "span8";
    }
    if (get_field('column_size') == "10") {
        echo "span8";
    }
    if (get_field('column_size') == "11") {
        echo "span8";
    }
    if (get_field('column_size') == "12") {
        echo "span8";
    }
    if (!get_field('column_size')) {
        echo "span8";
    }
}

// Check Span Size
function column_size() {
    if (get_field('column_size') == "3") {
        echo "span3";
    }
    if (get_field('column_size') == "4") {
        echo "span4";
    }
    if (get_field('column_size') == "5") {
        echo "span5";
    }
    if (get_field('column_size') == "6") {
        echo "span6";
    }
    if (get_field('column_size') == "7") {
        echo "span6";
    }
    if (get_field('column_size') == "8") {
        echo "span8";
    }
    if (get_field('column_size') == "9") {
        echo "span8";
    }
    if (get_field('column_size') == "10") {
        echo "span8";
    }
    if (get_field('column_size') == "11") {
        echo "span8";
    }
    if (get_field('column_size') == "12") {
        echo "span8";
    }
    if (!get_field('column_size')) {
        echo "span8";
    }
}

// Add theme support
add_theme_support( 'automatic-feed-links' );

// Add editor style
add_editor_style();

// Like Script
$timebeforerevote = 1;

add_action('wp_ajax_nopriv_post-like', 'post_like');
add_action('wp_ajax_post-like', 'post_like');

function loadMyScripts()
{
wp_localize_script('like_post', 'ajax_var', array(
	'url' => admin_url('admin-ajax.php'),
	'nonce' => wp_create_nonce('ajax-nonce')
));
}

add_action( 'wp_enqueue_scripts','loadMyScripts' );

function post_like()  
{  
    // Check for nonce security  
    $nonce = $_POST['nonce'];  
   
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )  
        die ( 'Busted!');  
      
    if(isset($_POST['post_like']))  
    {  
        // Retrieve user IP address  
        $ip = $_SERVER['REMOTE_ADDR'];  
        $post_id = $_POST['post_id'];  
          
        // Get voters'IPs for the current post  
        if (get_post_meta($post_id, "voted_IP")) {
        $meta_IP = get_post_meta($post_id, "voted_IP"); 
        } else {
            $meta_IP = 0;
        }  
        $voted_IP = $meta_IP[0];  
  
        if(!is_array($voted_IP))  
            $voted_IP = array();  
          
        // Get votes count for the current post  
        $meta_count = get_post_meta($post_id, "votes_count", true);  
  
        // Use has already voted ?  
        if(!hasAlreadyVoted($post_id))  
        {  
            $voted_IP[$ip] = time();  
  
            // Save IP and increase votes count  
            update_post_meta($post_id, "voted_IP", $voted_IP);  
            update_post_meta($post_id, "votes_count", ++$meta_count);  
              
            // Display count (ie jQuery return value)  
            echo $meta_count;  
        }  
        else  
            echo "already";  
    }  
    exit;  
}  

function hasAlreadyVoted($post_id)  
{  
    global $timebeforerevote;
  
    // Retrieve post votes IPs
    
    if (get_post_meta($post_id, "voted_IP")) {
    $meta_IP = get_post_meta($post_id, "voted_IP"); 
    } else {
        $meta_IP = 0;
    }
    
    $voted_IP = $meta_IP[0];

      
    if(!is_array($voted_IP))  
        $voted_IP = array();  
          
    // Retrieve current user IP  
    $ip = $_SERVER['REMOTE_ADDR'];  
      
    // If user has already voted  
    if(in_array($ip, array_keys($voted_IP)))  
    {  
        $time = $voted_IP[$ip];  
        $now = time();  
          
        // Compare between current time and vote time  
        if(round(($now - $time) / 60) > $timebeforerevote)  
            return false;  
              
        return true;  
    }  
      
    return false;  
}  

function getPostLikeLink($post_id)
{

	$vote_count = get_post_meta($post_id, "votes_count", true);

	$output = '<li class="post-like right">';
	if(hasAlreadyVoted($post_id))
		$output .= '<span class="icon liked"></span>';
	else
		$output .= '<a href="#" data-post_id="'.$post_id.'"><span class="icon like"></span>
					<span title="I like this article" class="qtip like"></span>
				</a>';
				
	if ($vote_count == 0) { 
    	$output .= '<span class="count">0</span>';
	} else {	
	$output .= '<span class="count">'.$vote_count.'</span></li>';
	}
	
	return $output;
}

function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );

// Register Menu
function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => 'Header Menu' )
  );
}

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if (is_single() && $args->theme_location == 'primary') {
        $items .= '<li>Show whatever</li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a href="'. wp_logout_url() .'">Log Out</a></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a href="'. site_url('wp-login.php') .'">Log In</a></li>';
    }
    return $items;
}

// Portfolio custom post type
add_action('init', 'portfolio_register');
 
function portfolio_register() {
 
	$labels = array(
		'name' => 'My Portfolio', 'post type general name',
		'singular_name' => 'Portfolio Item', 'post type singular name',
		'add_new' => 'Add New', 'portfolio item',
		'add_new_item' => 'Add New Portfolio Item',
		'edit_item' => 'Edit Portfolio Item',
		'new_item' => 'New Portfolio Item',
		'view_item' => 'View Portfolio Item',
		'search_items' => 'Search Portfolio',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => '',
	);
 
	$args = array(
		'labels' => $labels,
		'label' => 'asd',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/admin_icon2.png',
		'rewrite' => true,
		'menu_position' => null,
		'supports' => array('title','comments', 'editor'),
		'show_in_menu' => TRUE,
		'show_in_nav_menus' => TRUE,
	  ); 
 
	register_post_type( 'portfolio' , $args );
	register_taxonomy("Skills", array("portfolio"), array("hierarchical" => true, "label" => "Skills", "singular_label" => "Skill", "rewrite" => true));
	
}

add_filter( 'pre_get_posts', 'my_get_posts' );

// CUSTOM PAGE POST TYPE
add_action('init', 'custom_register');
 
function custom_register() {
 
	$labels = array(
		'name' => 'Custom Page', 'post type general name',
		'singular_name' => 'Portfolio Item', 'post type singular name',
		'add_new' => 'Add New', 'portfolio item',
		'add_new_item' => 'Add New Portfolio Item',
		'edit_item' => 'Edit Portfolio Item',
		'new_item' => 'New Portfolio Item',
		'view_item' => 'View Portfolio Item',
		'search_items' => 'Search Portfolio',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => '',
	);
 
	$args = array(
		'labels' => $labels,
		'label' => 'asd',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/admin_icon1.png',
		'rewrite' => true,
		'menu_position' => null,
		'supports' => array('title','comments', 'editor','thumbnail'),
		'show_in_menu' => TRUE,
		'show_in_nav_menus' => TRUE,
	  ); 
 
	register_post_type( 'custom_page' , $args );
	
}

function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'portfolio', 'custom_page') );

	return $query;
}


add_action( 'init', 'register_my_menus' );

function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

// Output for navigation
class Clean_Walker extends Walker_Page {
    function start_lvl(&$output, $depth = 0, $args = "") {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }
    function start_el(&$output, $object, $depth = 0, $args = "", $current_object_id = 0) {
        if ( $depth )
            $indent = str_repeat("\t", $depth);
        else
            $indent = '';
        extract($args, EXTR_SKIP);
        $class_attr = '';
        if ( !empty($current_page) ) {
            $_current_page = get_page( $current_page );
            if ( (isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors)) || ( $page->ID == $current_page ) || ( $_current_page && $page->ID == $_current_page->post_parent ) ) {
                $class_attr = 'sel';
            }
        } elseif ( (is_single() || is_archive()) && ($page->ID == get_option('page_for_posts')) ) {
            $class_attr = 'sel';
        }
        if ( $class_attr != '' ) {
            $class_attr = ' class="' . $class_attr . '"';
            $link_before .= '<strong>';
            $link_after = '</strong>' . $link_after;
        }
        $output .= $indent . '<li' . $class_attr . '><a href="hello"' . $class_attr . '>' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';

        if ( !empty($show_date) ) {
            if ( 'modified' == $show_date )
                $time = $page->post_modified;
            else
                $time = $page->post_date;
            $output .= " " . mysql2date($date_format, $time);
        }
    }
}

//=========================================
// CUSTOM SHORTCODES
//=========================================

// QUOTE
function quote( $atts, $content = null ) {  
    return '<blockquote><p>'.$content.'</p></blockquote>';  
}
add_shortcode("quote", "quote");    

// HEADINGS
//=====================

// h1
function h1( $atts, $content = null ) {  
    return '<h1>'.$content.'</h1>';  
}
add_shortcode("h1", "h1");

// h2
function h2( $atts, $content = null ) {  
    return '<h2>'.$content.'</h2>';  
}
add_shortcode("h2", "h2");     

// h3
function h3( $atts, $content = null ) {  
    return '<h3>'.$content.'</h3>';  
}
add_shortcode("h3", "h3");  

// h4
function h4( $atts, $content = null ) {  
    return '<h4>'.$content.'</h4>';  
}
add_shortcode("h4", "h4");  

// h5
function h5( $atts, $content = null ) {  
    return '<h5>'.$content.'</h5>';  
}
add_shortcode("h5", "h5");  

// h6
function h6( $atts, $content = null ) {  
    return '<h6>'.$content.'</h6>';  
}
add_shortcode("h6", "h6");

// COLUMNS
//=====================

// row-fluid
function row( $atts, $content = null ) {  
    return '<div class="row-fluid"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("row", "row");

// span1
function span1( $atts, $content = null ) {  
    return '<div class="span1"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span1", "span1");

// span2
function span2( $atts, $content = null ) {  
    return '<div class="span2"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span2", "span2");

// span3
function span3( $atts, $content = null ) {  
    return '<div class="span3"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span3", "span3");

// span4
function span4( $atts, $content = null ) {  
    return '<div class="span4"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span4", "span4");

// span5
function span5( $atts, $content = null ) {  
    return '<div class="span5"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span5", "span5");

// span6
function span6( $atts, $content = null ) {  
    return '<div class="span6"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span6", "span6");

// span7
function span7( $atts, $content = null ) {  
    return '<div class="span7"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span7", "span7");

// span8
function span8( $atts, $content = null ) {  
    return '<div class="span8"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span8", "span8");

// span9
function span9( $atts, $content = null ) {  
    return '<div class="span9"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span9", "span9");

// span10
function span10( $atts, $content = null ) {  
    return '<div class="span10"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span10", "span10");

// span11
function span11( $atts, $content = null ) {  
    return '<div class="span11"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span11", "span11");

// span12
function span12( $atts, $content = null ) {  
    return '<div class="span12"><p>'.do_shortcode($content).'</p></div>';  
}
add_shortcode("span12", "span12");

// ALERTS
//=====================

function alert( $atts, $content = null ) {
	extract(shortcode_atts( array('alert_type' => ''), $atts));   
    return '<div class="alert alert-'.$alert_type.'">'.do_shortcode($content).'</div>';  
}
add_shortcode("alert", "alert");

// Progress bar
//=====================

function progress_bar( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'progress_type' => '',
							'progress' => '',
							), $atts));   
    return '<div class="progress progress-'.$progress_type.'"><div class="bar" style="width: '.$progress.'"></div></div>';  
}
add_shortcode("progress_bar", "progress_bar");

// Buttons
//=====================

function btn( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'btn_color' => '',
							), $atts));   
    return '<div class="button-rounded '.$btn_color.'">'.do_shortcode($content).'</div>';  
}
add_shortcode("btn", "btn");

// Buttons Mini
//=====================

function btn_mini( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'btn_color' => '',
							), $atts));   
    return '<div class="button-mini '.$btn_color.'">'.do_shortcode($content).'</div>';  
}
add_shortcode("btn_mini", "btn_mini");

// Tabs
//=====================

function tabgroup( $atts, $content ){
	$GLOBALS['tab_count'] = 0;

	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
		foreach( $GLOBALS['tabs'] as $tab ){
			$tabs[] = '<li class="'.$tab['state'].'"><a href="#'.$tab['title'].'" data-toggle="tab">'.$tab['title'].'</a></li>';
			$panes[] = '<div id="'.$tab['title'].'" class="tab-pane '.$tab['state'].'"><p>'.$tab['content'].'</p></div>';
			}
			$return = "\n".'<div class="dark-tabs"><ul class="tabs">'.implode( "\n", $tabs ).'</ul>'."\n".'<div class="tab-content">'.implode( "\n", $panes ).'</div></div>'."\n";
		}
		return $return;
	}
add_shortcode( 'tabgroup', 'tabgroup' );
	
function tabs( $atts, $content ){
	extract(shortcode_atts(array(
	'title' => 'Tab %d',
	'state' => ''
), $atts));

$x = $GLOBALS['tab_count'];
$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'state' => sprintf( $state, $GLOBALS['tab_count'] ), 'content' =>  $content );

$GLOBALS['tab_count']++;
}
add_shortcode( 'tab', 'tabs' );

function webtreats_formatter($content) {
	$new_content = '';

	/* Matches the contents and the open and closing tags */
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';

	/* Matches just the contents */
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

	/* Divide content into pieces */
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	/* Loop over pieces */
	foreach ($pieces as $piece) {
		/* Look for presence of the shortcode */
		if (preg_match($pattern_contents, $piece, $matches)) {

			/* Append to content (no formatting) */
			$new_content .= $matches[1];
		} else {

			/* Format and append to content */
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}

// Before displaying for viewing, apply this function
add_filter('the_content', 'webtreats_formatter', 99);
add_filter('widget_text', 'webtreats_formatter', 99);

//////////////////////////////////////
// ADVANCED CUSTOM FIELDS
/////////////////////////////////////

require_once('acf/acf-lite.php');
require_once('field-groups.php');

/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
 */ 

function my_acf_settings( $options )
{
    // activate add-ons
    $options['activation_codes']['repeater'] = 'QJF7-L4IX-UCNP-RF2W';
    $options['activation_codes']['options_page'] = 'OPN8-FA4J-Y2LW-81LS';
    
    // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)
    
    return $options;
    
}
add_filter('acf_settings', 'my_acf_settings');

/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul class="recent-posts">
				<?php while( $r->have_posts() ) : $r->the_post(); ?>				
				<li><?php the_title(); ?></li>
				<?php endwhile; ?>
			</ul>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');

/**
 * Navigation Menu widget class
 *
 * @since 3.0.0
 */
class MV_Cleaner_Walker_Nav_Menu extends Walker {
    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
    function start_lvl(&$output, $depth = 0, $args = "") {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
    function end_lvl(&$output, $depth = 0, $args = "") {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    function start_el(&$output, $item, $depth = 0, $args = "", $current_object_id = 0) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', '', $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li' . $id . $value . $class_names .'>';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="' . get_bloginfo('url') .'/'. esc_attr( $item->url        ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el(&$output, $item, $depth = 0, $args = "") {
        $output .= "</li>\n";
    }
}

 class WP_My_Menu_Widget extends WP_Widget {

	function __construct() {
		$widget_ops = array( 'description' => __('Use this widget to add one of your custom menus as a widget.') );
		parent::__construct( 'nav_menu', __('Custom Menu'), $widget_ops );
	}

	function widget($args, $instance) {
		// Get menu
		$nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

		if ( !$nav_menu )
			return;

		$instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		echo $args['before_widget'];

		if ( !empty($instance['title']) )
			echo $args['before_title'] . $instance['title'] . $args['after_title'];

		
			wp_nav_menu( array( 'fallback_cb' => '', 'menu' => $nav_menu, 'walker' => new MV_Cleaner_Walker_Nav_Menu() ) );

		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) {
		$instance['title'] = strip_tags( stripslashes($new_instance['title']) );
		$instance['nav_menu'] = (int) $new_instance['nav_menu'];
		return $instance;
	}

	function form( $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

		// Get menus
		$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

		// If no menus exists, direct the user to go and create some.
		if ( !$menus ) {
			echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php') ) .'</p>';
			return;
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
			<select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
		<?php
			foreach ( $menus as $menu ) {
				echo '<option value="' . $menu->term_id . '"'
					. selected( $nav_menu, $menu->term_id, false )
					. '>'. $menu->name . '</option>';
			}
		?>
			</select>
		</p>
		<?php
	}
}
//function my_menu_widget_registration() {
//  unregister_widget('WP_Nav_Menu_Widget');
//  register_widget('WP_my_Menu_Widget');
//}
//add_action('widgets_init', 'my_menu_widget_registration');

function none_ajax_menu() { ?>
    <div class="navigation">
		<nav>		
			<ul class="nav">
				<?php if (get_field('logo_option', 'option') == "Text") { ?>
				<li class="logo">
					<a href="<?php echo get_site_url(); ?>">
						<?php the_field('logo_text', 'option'); ?>
					</a>
				</li>
				<?php } ?>
				<?php if (get_field('logo_option', 'option') == "Image") { ?>
				<li class="logo-image">
					<a href="<?php echo get_site_url(); ?>">
						<img src="<?php the_field('logo_image', 'option'); ?>"/>
					</a>
				</li>
				<?php } ?>
				
				<?php
  
			 $defaults = array(
			   	'theme_location'  => 'header-menu',
			   	'menu'            => '',
			   	'container'       => 'ul',
			   	'container_class' => '',
			   	'container_id'    => '',
			   	'menu_class'      => 'menu',
			   	'menu_id'         => '',
			   	'echo'            => true,
			   	'fallback_cb'     => 'wp_page_menu',
			   	'before'          => '',
			   	'after'           => '',
			   	'link_before'     => '',
			   	'link_after'      => '',
			   	'items_wrap'      => '%3$s',
			   	'depth'           => 0,
			   	'walker'          => new MV_Cleaner_Walker_Nav_Menu()
			   );
			   
			   wp_nav_menu( $defaults );

			   ?>
			   
			</ul>
		
		
			<?php if (get_field('info_tab', 'option')) { ?>		
			<button type="button" class="btn-info-nav" data-toggle="collapse" data-target="#info-nav"></button>
			<?php } ?>
		
		</nav>	 
		<div class="nav-arrow"></div>
	</div>
		
	<div id="info-nav" class="collapse">
		<div class="info-body"><?php the_field('info_tab', 'option'); ?></div>
	</div>

<?php }

function ajax_menu() { ?>
    <div class="navigation">
		<nav>		
			<ul class="nav">
				<?php if (get_field('logo_option', 'option') == "Text") { ?>
				<li class="logo">
					<a onClick="location.href='<?php get_bloginfo('url') ?>'">
						<?php the_field('logo_text', 'option'); ?>
					</a>
				</li>
				<?php } ?>
				<?php if (get_field('logo_option', 'option') == "Image") { ?>
				<li class="logo-image">
					<a onClick="location.href='<?php get_bloginfo('url') ?>'">
						<img src="<?php the_field('logo_image', 'option'); ?>"/>
					</a>
				</li>
				<?php } ?>
				
				<?php
			   $defaults = array(
			   	'theme_location'  => 'header-menu',
			   	'menu'            => '',
			   	'container'       => 'ul',
			   	'container_class' => '',
			   	'container_id'    => '',
			   	'menu_class'      => 'menu',
			   	'menu_id'         => '',
			   	'echo'            => true,
			   	'fallback_cb'     => 'wp_page_menu',
			   	'before'          => '',
			   	'after'           => '',
			   	'link_before'     => '',
			   	'link_after'      => '',
			   	'items_wrap'      => '%3$s',
			   	'depth'           => 0,
			   	'walker'          => ''
			   );
			   
			   wp_nav_menu( $defaults );
			   ?>
			   
			</ul>
		
		
			<?php if (get_field('info_tab', 'option')) { ?>		
			<button type="button" class="btn-info-nav" data-toggle="collapse" data-target="#info-nav"></button>
			<?php } ?>
		
		</nav>	 
		<div class="nav-arrow"></div>
	</div>
		
	<div id="info-nav" class="collapse">
		<div class="info-body"><?php the_field('info_tab', 'option'); ?></div>
	</div>
<?php }

function mobile_menu() { ?>
<div class="mobile-nav-container">
		<div class="mobile-nav-bar">
		    <button type="button" class="btn-mobile-nav" data-toggle="collapse" data-target="#mobile-nav"></button>
		    <button type="button" class="btn-info-nav" data-toggle="collapse" data-target="#info-nav"></button>
		    
			<?php if (get_field('logo_option', 'option') == "Text") { ?>
			<div class="mobile-logo">
				<a onClick="location.href='<?php get_bloginfo('url') ?>'">
					<?php the_field('logo_text', 'option'); ?>	
				</a>
			</div>
			<?php } ?>
				
			<?php if (get_field('logo_option', 'option') == "Image") { ?>
			<div class="logo-image">
				<a onClick="location.href='<?php get_bloginfo('url') ?>'">
					<img src="<?php the_field('logo_image', 'option'); ?>"/>	
				</a>
			</div>
			<?php } ?>
			
		</div>
		
		<div id="mobile-nav" class="collapse">
			<ul>
				<?php
				$defaults = array(
			   	'theme_location'  => 'header-menu',
			   	'menu'            => '',
			   	'container'       => 'ul',
			   	'container_class' => '',
			   	'container_id'    => '',
			   	'menu_class'      => 'menu',
			   	'menu_id'         => '',
			   	'echo'            => true,
			   	'fallback_cb'     => 'wp_page_menu',
			   	'before'          => '',
			   	'after'           => '',
			   	'link_before'     => '',
			   	'link_after'      => '',
			   	'items_wrap'      => '%3$s',
			   	'depth'           => 0,
			   	'walker'          => ''
			   );
			   ?>
			   <?php wp_nav_menu( $defaults ); ?>
			</ul>
		</div>
	</div>
<?php }

function none_ajax_mobile_menu() { ?>
<div class="mobile-nav-container">
		<div class="mobile-nav-bar">
		    <button type="button" class="btn-mobile-nav" data-toggle="collapse" data-target="#mobile-nav"></button>
		    <button type="button" class="btn-info-nav" data-toggle="collapse" data-target="#info-nav"></button>
		    
			<?php if (get_field('logo_option', 'option') == "Text") { ?>
				<li class="logo">
					<a href="<?php get_bloginfo('url') ?>">
						<?php the_field('logo_text', 'option'); ?>
					</a>
				</li>
				<?php } ?>
				<?php if (get_field('logo_option', 'option') == "Image") { ?>
				<li class="logo-image">
					<a href="<?php get_bloginfo('url') ?>">
						<img src="<?php the_field('logo_image', 'option'); ?>"/>
					</a>
				</li>
				<?php } ?>
			
		</div>
		
		<div id="mobile-nav" class="collapse">
			<ul>
				<?php
				$defaults = array(
			   	'theme_location'  => 'header-menu',
			   	'menu'            => '',
			   	'container'       => 'ul',
			   	'container_class' => '',
			   	'container_id'    => '',
			   	'menu_class'      => 'menu',
			   	'menu_id'         => '',
			   	'echo'            => true,
			   	'fallback_cb'     => 'wp_page_menu',
			   	'before'          => '',
			   	'after'           => '',
			   	'link_before'     => '',
			   	'link_after'      => '',
			   	'items_wrap'      => '%3$s',
			   	'depth'           => 0,
			   	'walker'          => new MV_Cleaner_Walker_Nav_Menu()
			   );
			   ?>
			   <?php wp_nav_menu( $defaults ); ?>
			</ul>
		</div>
	</div>
<?php } 

require_once('update-notification.php');
new WPUpdatesThemeUpdater( 'http://wp-updates.com/api/1/theme', 201, basename(get_template_directory()) );   
   
function style_switcher() { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style-switcher.css"/>
<ul id="navigation">
	<li><span></span>
			<div id="panel">
	    		<div class="colour-container">
    			 <a class="concrete_wall_2"></a>
    			 <a class="bgnoise_lg"></a>
    			 <a class="grid_noise"></a>
    			 
    			 <a class="wood_pattern"></a>
    			 <a class="gray_jean"></a>
		  	     <a class="billie_holiday"></a>
		  	
		  	     <a class="circles"></a>
		  	     <a class="cubes"></a>
		  	     <a class="grilled"></a>
		  	     
		  	     <a class="furley_bg"></a>
		  	     <a class="old_wall"></a>
		  	     <a class="old_mathematics"></a>
		  	     
		  	     <a class="silver_scales"></a>
		  	     <a class="tileable_wood_texture"></a>
		  	     <a class="subtle_stripes"></a>

		  	     <a class="rockywall"></a>
		  	     <a class="chruch"></a>
		  	     <a class="project_papper"></a>
		  	     
		  	     <!-- black -->
		  	     
		  	     <a class="dark_matter black-texture"></a>
		  	     <a class="black_thread black-texture"></a>
		  	     <a class="dark_wood black-texture"></a>
		  	     
		  	     <a class="low_contrast_linen black-texture"></a>
		  	     <a class="irongrip black-texture"></a>
		  	     <a class="dark_geometric black-texture"></a>
		  	     
		  	     <a class="vertical_cloth black-texture"></a>
		  	     <a class="flowers black-texture"></a> 
		  	     <a class="tactile_noise black-texture"></a>     
		  	     
	   			 </div>
			</div>
	</li>
	</ul>
<? }

function jrh_post_names($classes) {
	$classes = array_diff($classes, array("portfolio", "blog"));
	return $classes;
}
add_filter('post_class','jrh_post_names');

function slugify($text)
{ 
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}
    
?>
