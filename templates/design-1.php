  <div class="slick-image-slide" <?php echo $slider_height_css ; ?>>	<?php $sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );		if($sliderurl != '') { ?>		<a href="<?php echo $sliderurl; ?>" ><img src="<?php $slider_img; ?>" alt="<?php the_title(); ?>" /></a>		<?php } else {  ?>		<img src="<?php echo $slider_img; ?>" alt="<?php the_title(); ?>" />	<?php	}	?>								</div>