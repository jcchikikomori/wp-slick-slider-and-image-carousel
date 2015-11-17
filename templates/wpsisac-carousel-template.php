<?php 
function get_wpsisac_carousel_slider( $atts, $content = null ){
       extract(shortcode_atts(array(		"category" => '',		"design" => '',				"slidestoshow" => '',		"slidestoscroll" => '',				"dots"     			=> '',		"arrows"     		=> '',		"autoplay"     		=> '',			"autoplay_interval"  => '',		"speed"             => '',		"centermode"        => '',			"variablewidth"    => '',			), $atts));	if( $category ) { 		$cat = $category; 	} else {		$cat = '';	}		if( $design ) { 		$sliderdesign = $design; 	} else {		$sliderdesign = 'design-6';	}		if( $dots ) { 		$dotsv = $dots; 	} else {		$dotsv = 'true';	}	if( $arrows ) {		$arrowsv = $arrows; 	} else {		$arrowsv = 'true';	}		if( $autoplay ) { 		$autoplayv = $autoplay;	} else {		$autoplayv = 'true';	}		if( $autoplay_interval ) { 		$autoplayIntervalv = $autoplay_interval; 	} else {		$autoplayIntervalv = '3000';	}		if( $speed ) { 		$speedv = $speed;	} else {		$speedv = '300';	}			if( $slidestoshow ) { 		$slidestoshowv = $slidestoshow;	} else {		$slidestoshowv = '3';	}			if( $slidestoscroll ) { 		$slidestoscrollv = $slidestoscroll;	} else {		$slidestoscrollv = '1';	}		if( $centermode ) { 		$centermodev = $centermode;	} else {		$centermodev = 'false';	}	if( $variablewidth ) { 		$variablewidthv = $variablewidth;	} else {		$variablewidthv = 'false';	}	ob_start();		$post_type 		= 'slick_slider';	$orderby 		= 'post_date';	$order 			= 'DESC';		        $args = array (             'post_type'      => $post_type,             'orderby'        => $orderby,             'order'          => $order,            'posts_per_page' => $posts_per_page,                         );	if($cat != ""){            	$args['tax_query'] = array( array( 'taxonomy' => 'wpsisac_slider-category', 'field' => 'id', 'terms' => $cat) );            }              $query = new WP_Query($args);      $post_count = $query->post_count;                      if ( $query->have_posts() ) :			 ?>		<div class="wpsisac-slick-carousal <?php echo $sliderdesign; ?> <?php if($centermodev == 'true') { echo 'center';} ?>">				<?php while ( $query->have_posts() ) : $query->the_post();				switch ($sliderdesign) {				 case "design-6":					include('designs/design-6.php');					break;								 default:		 						include('designs/design-6.php');					}					endwhile; ?>		  </div><!-- #post-## -->				  <?php            endif; ?>
<script type="text/javascript">
		jQuery(document).ready(function(){
		jQuery('.wpsisac-slick-carousal.<?php echo $sliderdesign; ?>').slick({
			dots: <?php echo $dotsv; ?>,
			infinite: true,
			arrows: <?php echo $arrowsv; ?>,
			speed: <?php echo $speedv; ?>,
			autoplay: <?php echo $autoplayv; ?>,		
			autoplaySpeed: <?php echo $autoplayIntervalv; ?>,
			slidesToShow: <?php echo $slidestoshowv; ?>,
			slidesToScroll: <?php echo $slidestoscrollv; ?>,			centerMode: <?php echo $centermodev; ?>,			variableWidth :<?php echo $variablewidthv; ?>,
			responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,		 dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,		 dots: false
      }
    }
  ]
		});
	});
	</script>	
			<?php
             wp_reset_query(); 			
		return ob_get_clean();	             
	}
add_shortcode('slick-carousel-slider','get_wpsisac_carousel_slider');


