<?php
if(file_exists('../../../../wp-load.php')) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;

header("Content-type:text/js");

		$pdoob = new  PDO('mysql:host=localhost;dbname=wordpresslsp','root','1');
		$pdoob->query('set names utf8');

?>
// JQUERY (flexslider)
$(document).ready(function() {
	"use strict";
	$('.widget-slider .flexslider').flexslider({
		animation: "<?php if (get_field('slider_animation', 'option')) { the_field('slider_animation', 'option'); } else { echo 'slide'; } ?>",
		slideshow: "<?php if (get_field('slider_slideshow', 'option')) { the_field('slider_slideshow', 'option'); } else { echo 'false';} ?>",
		slideshowSpeed: <?php if (get_field('slideshow_speed', 'option')) {the_field('slideshow_speed', 'option'); } else { echo '800'; } ?>,
		animationSpeed: <?php if (get_field('slider_animation_speed', 'option')) {the_field('slider_animation_speed', 'option'); } else { echo '600'; } ?>,  
		easing: "swing", 
		directionNav: false 
		});
	});

// Le preloader
$(window).load(function() { // makes sure the whole site is loaded
"use strict";
	$("#status").fadeOut(); // will first fade out the loading animation
	$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
	$("#preloader-container").css("position","static");  
});


// JQUERY (tooltips)
$("[rel=alternate]").tooltip()

// JQUERY (hash)
$(window).bind( 'hashchange', function( event ) {
  $.getScript("<?php echo get_template_directory_uri(); ?>/js/load-more.php")
});

// JQUERY (fancy)
$(document).ready(function() {
	$(".fancybox").fancybox({
		helpers : {
		        overlay : {
		            locked : false
		        }
		    },
		    
		    padding: ['5px', '5px', '5px', '5px']
	});
});

// JQUERY (isotope)
$(window).load(function(){

	$.Isotope.prototype._getCenteredMasonryColumns = function() {
		this.width = this.element.width();
		var parentWidth = this.element.parent().width();
      
		// i.e. options.masonry && options.masonry.columnWidth
		var colW = this.options.masonry && this.options.masonry.columnWidth ||
		// or use the size of the first item
		this.$filteredAtoms.outerWidth(true) ||
		// if there's no items, use size of container
		parentWidth;
		
		var cols = Math.floor( parentWidth / colW );
		cols = Math.max( cols, 1 );
  
		// i.e. this.masonry.cols = ....
		this.masonry.cols = cols;
		// i.e. this.masonry.columnWidth = ...
		this.masonry.columnWidth = colW;
	};
	
	$.Isotope.prototype._masonryReset = function() {
		// layout-specific props
		this.masonry = {};
		// FIXME shouldn't have to call this again
		this._getCenteredMasonryColumns();
		var i = this.masonry.cols;
		this.masonry.colYs = [];
		while (i--) {
			this.masonry.colYs.push( 0 );
		}
	};
	
	$.Isotope.prototype._masonryResizeChanged = function() {
		var prevColCount = this.masonry.cols;
		// get updated colCount
		this._getCenteredMasonryColumns();
		return ( this.masonry.cols !== prevColCount );
	};
	
	$.Isotope.prototype._masonryGetContainerSize = function() {
		var unusedCols = 0,
		i = this.masonry.cols;
		// count unused columns
		while ( --i ) {
			if ( this.masonry.colYs[i] !== 0 ) {
				break;
			}
			unusedCols++;
		}
      
		return {
			height : Math.max.apply( Math, this.masonry.colYs ),
			// fit container to columns that have been used;
			width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
		};
	};
    
	// Check if Mobile or Tablet device  
	function is_touch_device() {
		return !!('ontouchstart' in window) // works on most browsers 
		|| !!('onmsgesturechange' in window); // works on ie10
	};
    
	// If touch device, disable transforms.
	if (is_touch_device() && $(window).width() < 800) { 
		var bubu = {
			animationEngine: 'best-available',
			filter: '*',
			sortBy: 'original-order',
			sortAscending: true,
			transformsEnabled: false,
			layoutMode: 'masonry'
		};
		
     } else {
	     var bubu = {
		     animationEngine: 'best-available',
		     filter: '*',
			sortBy: '<?php if (get_field('sort_by', 'option') == "DateTime") { echo 'original-order'; } else { echo 'random'; } ?>',
			sortAscending: true,
			transformsEnabled: true,
			layoutMode: 'masonry',
			animationOptions: {
				queue: false,
				easing: 'linear',
				duration: <?php if (get_field('grid_animation_duration', 'option')) {the_field('grid_animation_duration', 'option');} else { echo '5000'; } ?>
			},
		};
	}
	
	// Settings for the grid
    $(function(){
	    var $container = $('#container'),
	    // object that will keep track of options
	    isotopeOptions = {},
	    // defaults, used if not explicitly set in hash
	    defaultOptions = bubu;
	    
	    var setupOptions = $.extend( {}, defaultOptions, {
		    itemSelector : '.widget',
		    masonry: {
			    gutterWidth: 50,
			    columnWidth: 1,
			   },
		});
		
    
	// set up Isotope
	$container.isotope( setupOptions );
	var $optionSets = $('nav').find('ul'),
	isOptionLinkClicked = false;
  
	// switches selected class on buttons
	function changeSelectedLink( $elem ) {
		// remove selected class on previous item
		$elem.parents().find('.selected').removeClass('selected');
		// set selected class on new item
		$elem.addClass('selected');
	}
	

	$container.infinitescroll({
        navSelector  : '#page_nav',    // selector for the paged navigation 
        nextSelector : '#page_nav a',  // selector for the NEXT link (to page 2)
        itemSelector : '<?php //$str = get_field('homepage', 'option');
        $re = preg_replace('/[\w\W]+\/(\w+)$/',"$1",$_SERVER['HTTP_REFERER']);
		//echo $re;
		/*		
		$sql = "select slug from wp_terms where term_id = '$re'";
		$re_sel = $pdoob->query($sql);
		$re_s = $re_sel -> fetch();
		
		$pdoob = null;
		*/                          //$str = '.' . implode(' .',explode(' ',$str));
		echo ".$re";
		//echo".society";
?>',     
		debug        : true,
		// selector for all items you'll retrieve
        //behavior: 'twitter',
        loading: {
            finishedMsg: '',
            img: ''
          }
        },
        // call Isotope as a callback
        function(newElements) {
  var $newElems = $(newElements);
  $newElems.imagesLoaded(function(){
    $container.isotope('appended', $newElems );
  });
	$("#page_nav a").css("background-image","url(<?php echo get_template_directory_uri(); ?>/img/icon_cross.png)");
	$.getScript("<?php echo get_template_directory_uri(); ?>/js/post-like.js");
}
      );

    var hashChanged = false;
    $(window).bind( 'hashchange', function( event ){
	    // get options object from hash
	    var hashOptions = window.location.hash ? $.deparam.fragment( window.location.hash, true ) : {},
	    // do not animate first call
	    aniEngine = hashChanged ? 'best-available' : 'none',
	    // apply defaults where no option was specified
	    options = $.extend( {}, defaultOptions, hashOptions, { animationEngine: aniEngine } );
	    // apply options from hash
	    $container.isotope( options );
	    // save options
	    isotopeOptions = hashOptions;
	    
	    // if option link was not clicked
        // then we'll need to update selected links
        if ( !isOptionLinkClicked ) {
	        // iterate over options
	        var hrefObj, hrefValue, $selectedLink;
	        for ( var key in options ) {
		        hrefObj = {};
		        hrefObj[ key ] = options[ key ];
		        // convert object into parameter string
		        // i.e. { filter: '.inner-transition' } -> 'filter=.inner-transition'
		        hrefValue = $.param( hrefObj );
		        // get matching link
		        $selectedLink = $optionSets.find('a[href="#' + hrefValue + '"]');
		        changeSelectedLink( $selectedLink );
		    }
		}
		
		isOptionLinkClicked = false;
		hashChanged = true;
	})
	
	
    // trigger hashchange to capture any hash data on init
    .trigger('hashchange');
    });
    });
    
<!-- --------------------------以下JS非原生------------------------------- -->
$(document).on('click','div.ajaxmm',show);
$(document).on('click','img.gn_wind_exit_img',hide);

				//./wp-content/themes/supergrid/cache/contract/3076221391.jpeg
function show(){
	$('#gn_wind_img').attr('src','');
	$('#gn_wind_img').attr('src','./wp-content/themes/supergrid/img/loading.gif');
	var url = $(this).children('img').attr('src');		
	$.cookie('src', url);
	var id = url.match(/\d+/);

	$.ajax({
		url:'./wp-content/themes/supergrid/cache/ajax_getlmm.php',
		
		data:'pid ='+id,	
		
		type:'GET',
		dataType:'text',
		success:function(re){
				$('#gn_wind_img').attr('src',re);
			}
		});

    $('#gn_curtain').show();
	$('#gn_wind').show();	
}

function hide(){
    $('#gn_curtain').hide();
	$('#gn_wind').hide();
}





<!-- --------------------------以上JS非原生------------------------------- -->

<?php 

/*-----------------------------------------------------------------------------------*/
/*	Google Analytics Code
/*-----------------------------------------------------------------------------------*/

$google_analytics = get_field('google_analytics', 'option'); 
$google_analytics = str_replace("&#039;","'",$google_analytics);
$google_analytics = str_replace("&lt;","<",$google_analytics); 
$google_analytics = str_replace("&quot;",'"',$google_analytics); 
$google_analytics = str_replace("&gt;",'>',$google_analytics); 
	    
echo $google_analytics;

?>
