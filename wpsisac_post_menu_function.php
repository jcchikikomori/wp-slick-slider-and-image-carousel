<?php
add_action('admin_menu', 'register_wpsisac_slider_submenu_page');
function register_wpsisac_slider_submenu_page() {
	add_submenu_page( 'edit.php?post_type=slick_slider', 'Slider Designs', 'Slider Designs', 'manage_options', 'wpsisac_slider-submenu-page', 'register_wpsisac_slider_page_callback' );

}
function register_wpsisac_slider_page_callback() {

	$result ='<div class="wrap"><div id="icon-tools" class="icon32"></div><h2 style="padding:15px 0">Slider Designs</h2></div>
				<div class="medium-4 columns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-1.jpg"><p><code>[slick-slider design="design-1"]</code></p></div></div>
				<div class="medium-4 columns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-2.jpg"><p><code>[slick-slider design="design-2"]</code></p></div></div>
				<div class="medium-4 columns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-3.jpg"><p><code>[slick-slider design="design-3"]</code></p></div></div>
				<div class="medium-4 columns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-4.jpg"><p><code>[slick-slider design="design-4"]</code></p></div></div>
				<div class="medium-4 columns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-5.jpg"><p><code>[slick-slider design="design-5"]</code></p></div></div>
				<h2 style="padding:15px 0; clear:both;">Carousel Designs</h2>
				<div class="medium-4 columns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-6.jpg"><p><code>[slick-carousel-slider] OR [slick-carousel-slider centermode="true"] OR [slick-carousel-slider variablewidth="true"]</code></p></div></div>';

	echo $result;

}

function register_wpsisac_slider_admin_style(){
	?>
	<style type="text/css">
	.postdesigns{-moz-box-shadow: 0 0 5px #ddd;-webkit-box-shadow: 0 0 5px#ddd;box-shadow: 0 0 5px #ddd; background:#fff; padding:10px;  margin-bottom:15px;}
	.column, .columns {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;  box-sizing: border-box;}
.postdesigns img{width:100%; height:auto;}
@media only screen and (min-width: 40.0625em) {  
  .column,
  .columns {position: relative;padding-left:10px;padding-right:10px;float: left; }
  .medium-1 {    width: 8.33333%; }
  .medium-2 {    width: 16.66667%; }
  .medium-3 {    width: 25%; }
  .medium-4 {    width: 33.33333%; }
  .medium-5 {    width: 41.66667%; }
  .medium-6 {    width: 50%; }
  .medium-7 {    width: 58.33333%; }
  .medium-8 {    width: 66.66667%; }
  .medium-9 {    width: 75%; }
  .medium-10 {    width: 83.33333%; }
  .medium-11 {    width: 91.66667%; }
  .medium-12 {    width: 100%; } 
   }
	</style>

<?php }

add_action('admin_head', 'register_wpsisac_slider_admin_style');

