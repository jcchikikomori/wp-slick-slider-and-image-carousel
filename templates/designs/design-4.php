  <div class="slick-image-slide" style="max-height:<?php echo $sliderheight; ?>px;">			<div class="slide-wrap medium-12 columns">											<div class="slider-content-left medium-6 columns">					<h1 class="slide-title"><?php the_title(); ?></h1>					<?php if($showContent == "true" ) { ?>				<div class="slider-short-content">					<?php the_content(); ?>							</div>			<?php } 			$sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );				if($sliderurl != '') { ?>			<div class="readmore"><a href="<?php echo $sliderurl; ?>" class="slider-readmore">Read More</a></div>				<?php } ?>								</div>									<div class="slider-content-right medium-6 columns">					<?php the_post_thumbnail('url'); ?>						</div>							</div>				</div>