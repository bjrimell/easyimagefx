<?php
/*
Plugin Name: Easy Image FX
Plugin URI: http://www.tortan-limited.co.uk/easyimagefx
Version: 1.0
Author: Tortan Limited
Author Website: http://www.tortan-limited.co.uk
Description: A SIMPLE and EASY to use plugin that will let you apply effects upon mouseover/hover. This early version includes just one feature:
	- Image Replace - when a user hovers over an image, that image will be replaced with another of your choice.

In the future, further effects will be added.
*/

function easyimagefx_script_and_style_includer() {
    wp_enqueue_style( 'easyimagefx-css', plugins_url( 'style.css' , __FILE__ ) );
    wp_enqueue_script("easyimagefx-js", WP_PLUGIN_URL."/easyimagefx/flip.js",array("jquery"), "",1);
    wp_enqueue_script("easyimagefx-jquery", WP_PLUGIN_URL."/easyimagefx/jquery.flip.min.js",array("jquery"), "",1);
}
add_action( 'wp_enqueue_scripts', 'easyimagefx_script_and_style_includer' );

?>