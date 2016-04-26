<?php
/*
Plugin Name: Easy Image Flipper
Plugin URI: http://www.tortan-limited.co.uk/easyimagefx
Version: 1.0
Author: Tortan Limited
Author Website: http://www.tortan-limited.co.uk
Description: A SIMPLE and EASY to use image flipper. When a user hovers over an image, that image will be replaced with another of your choice.

INSTRUCTIONS
In this initial version, simply add a div with class name "flip" that contains subdivs named "front" and "back". For example, paste the following HTML onto your Wordpress page or post:

<plaintext>
	<div class="flip">
		<div class="front">
			<img src="url_to_image.jpg" alt="" />
		</div>
		<div class="back">
			<img src="url_to_image.jpg" alt="" />
		</div>
	</div>
</plaintext>

And that's it! With that HTMl on your page and the plugin installed and activated, you will have an image that uses JQuery to flip.

*/

function easyimagefx_script_and_style_includer() {
    wp_enqueue_style( 'easyimagefx-css', plugins_url( 'style.css' , __FILE__ ) );
    wp_enqueue_script("easyimagefx-js", WP_PLUGIN_URL."/easyimagefx/flip.js",array("jquery"), "",1);
    wp_enqueue_script("easyimagefx-jquery", WP_PLUGIN_URL."/easyimagefx/jquery.flip.min.js",array("jquery"), "",1);
}
add_action( 'wp_enqueue_scripts', 'easyimagefx_script_and_style_includer' );

?>