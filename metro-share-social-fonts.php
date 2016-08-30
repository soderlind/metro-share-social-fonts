<?php
/*
Plugin Name: Metro Share Social Fonts
Plugin URI: http://soderlind.no/
Description: Replace the default Metro Share social icons with icomoon social fonts
Version: 0.2.0
Author: Per Soderlind
Author URI: http://soderlind.no/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

define( 'METROSHARESOCIALFONTS_VERSION', '0.2.0' );
/*
 * Dequeue Metroshare CSS file
 *
 * @since 0.1
 * @author Per Soderlind <per@soderlind.no>
 */
function metroshare_remove_default_styles() {
	wp_dequeue_style( 'metroshare-css' );
}
add_action( 'wp_enqueue_scripts', 'metroshare_remove_default_styles', 11 );

/*
 * Change Metroshare using another CSS file
 *
 * @since 0.1
 * @author Per Soderlind <per@soderlind.no>
 */
function metroshare_add_social_fonts() {
	wp_enqueue_style( 'metroshare-social-fonts', plugins_url( '/css/social.min.css', __FILE__ ), array() , METROSHARESOCIALFONTS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'metroshare_add_social_fonts' );
