<?php 

$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url = $_SERVER['REQUEST_URI'];
$my_url = explode('wp-content' , $url); 
$path = $_SERVER['DOCUMENT_ROOT']."/".$my_url[0];

include_once $path . '/wp-config.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';

global $wpdb;

?>

if(document.location.toString().indexOf('#filter=<?php $str = get_field('homepage', 'option');
$str = '.' . implode(' .',explode(' ',$str));
echo $str;
?>')!=-1){

	$("#page_nav").css("display","block");
	
} else if (!window.location.hash) {

	$("#page_nav").css("display","block");

} else {
	$("#page_nav").css("display","none");
}

if(document.location.toString().indexOf('#filter=.contact')!=-1){


	$("#map_canvas").animate({opacity:'1'});
	$("#map_canvas").css("left","0");
	$("#map_canvas").css("top","75px");
	
	
	
} else {

	$("#map_canvas").animate({opacity:'0'});
	$("#map_canvas").css("left","-9999px");
	$("#map_canvas").css("top","-9999px");

}

$("#page_nav a").click(function() {
	$("#page_nav a").css("background-image","url(<?php echo get_template_directory_uri(); ?>/img/loading.gif)");
});





