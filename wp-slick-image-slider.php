<?php
/**
 * Plugin Name: WP Slick Slider and Image Carousel
 * Plugin URI: http://www.wponlinesupport.com/
 * Description: Easy to add and display wp slick image slider and carousel  
 * Author: WP Online Support
 * Version: 1.0
 * Author URI: http://www.wponlinesupport.com/
 *
 * @package WordPress
 * @author WP Online Support
 */
add_action( 'wp_enqueue_scripts','wpsisacstyle_css' );
	function wpsisacstyle_css() {
		wp_enqueue_script( 'wpsisac_slick_jquery', plugin_dir_url( __FILE__ ) . 'assets/js/slick.min.js', array( 'jquery' ) );
		wp_enqueue_style( 'wpsisac_slick_style',  plugin_dir_url( __FILE__ ) . 'assets/css/slick.css');
  		wp_enqueue_style( 'wpsisac_recent_post_style',  plugin_dir_url( __FILE__ ) . 'assets/css/slick-slider-style.css'); 		
}
require_once( 'wpsisac-slider-custom-post.php' );
require_once( 'templates/wpsisac-template.php' );
require_once( 'templates/wpsisac-carousel-template.php' );
require_once( 'wpsisac_post_menu_function.php' );




