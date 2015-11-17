<?php 
function get_wpsisac_slider( $atts, $content = null ){          
      extract(shortcode_atts(array(
		"category" => '',
		"design" => '',		"show_content" => '',       
		"dots"     			=> '',
		"arrows"     		=> '',		"autoplay"     		=> '',	
		"autoplay_interval"  => '',		"speed"             => '',
		"fade"		        => '',
		"sliderheight"     => '',
	), $atts));

	if( $category ) { 
		$cat = $category; 
	} else {
		$cat = '';
	}	
	if( $design ) { 
		$slidercdesign = $design; 
	} else {
		$slidercdesign = 'design-1';
	}	
    if( $show_content ) { 
        $showContent = $show_content; 
    } else {
        $showContent = 'true';
    }
	if( $dots ) { 
		$dotsv = $dots; 
	} else {
		$dotsv = 'true';
	}
	if( $arrows ) {
		$arrowsv = $arrows; 
	} else {
		$arrowsv = 'true';
	}	
	if( $autoplay ) { 
		$autoplayv = $autoplay;
	} else {
		$autoplayv = 'true';
	}	
	if( $autoplay_interval ) { 
		$autoplayIntervalv = $autoplay_interval; 
	} else {
		$autoplayIntervalv = '3000';
	}	
	if( $speed ) { 
		$speedv = $speed;
	} else {
		$speedv = '300';
	}
	if( $fade ) { 
		$fadev = $fade;
	} else {
		$fadev = 'false';
	}if( $sliderheight ) { 
		$sliderheightv = $sliderheight;
	} else {
		$sliderheightv = '500';
	}

	ob_start();	
	$post_type 		= 'slick_slider';
	$orderby 		= 'post_date';
	$order 			= 'DESC';		
        $args = array ( 
            'post_type'      => $post_type, 
            'orderby'        => $orderby, 
            'order'          => $order,
            'posts_per_page' => $posts_per_page,  
           
            );
	if($cat != ""){
            	$args['tax_query'] = array( array( 'taxonomy' => 'wpsisac_slider-category', 'field' => 'id', 'terms' => $cat) );
            }        
      $query = new WP_Query($args);
      $post_count = $query->post_count;         
             if ( $query->have_posts() ) :
			 ?>
		<div class="wpsisac-slick-slider <?php echo $slidercdesign; ?>">
				<?php while ( $query->have_posts() ) : $query->the_post();				switch ($slidercdesign) {
				 case "design-1":
					include('designs/design-1.php');
					break;
				 case "design-2":
					include('designs/design-2.php');
					break;
				 case "design-3":
					include('designs/design-3.php');
					break;
				 case "design-4":
					include('designs/design-4.php');
					break;	
					case "design-5":
					include('designs/design-5.php');
					break;	
				 default:		 
						include('designs/design-1.php');
					}
					endwhile; ?>
		  </div><!-- #post-## -->		
		  <?php
            endif; ?>
<script type="text/javascript">
		jQuery(document).ready(function(){
		jQuery('.wpsisac-slick-slider.<?php echo $slidercdesign; ?>').slick({
			dots: <?php echo $dotsv; ?>,
			infinite: true,
			arrows: <?php echo $arrowsv; ?>,
			speed: <?php echo $speedv; ?>,
			autoplay: <?php echo $autoplayv; ?>,							fade: <?php echo $fadev; ?>,
			autoplaySpeed: <?php echo $autoplayIntervalv; ?>,
			slidesToShow: 1,
			slidesToScroll: 1,			adaptiveHeight: false,			
			});
	});
	</script>	
			<?php
             wp_reset_query(); 			
		return ob_get_clean();			             
	}
add_shortcode('slick-slider','get_wpsisac_slider');


