<?php
/*
 * Plugin Name: On Leave Spinner
 * Description: Displays a Spinner on Page Leave
 * Author: Niedermann IT-Dienstleistungen
 * Author URI:  http://www.niedermann.it
 * Version: 0.1.0
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: onleavespinner
*/
function it_niedermann_ols_add_style_and_script() {
		wp_enqueue_script( 'onleavespinnerjs', plugins_url( '/onleavespinner.js', __FILE__ ) );
		wp_enqueue_style( 'onleavespinnercss', plugins_url( '/onleavespinner.css', __FILE__ ) );
}
if(!is_admin()) {add_action('wp_enqueue_scripts', 'it_niedermann_ols_add_style_and_script');}
?>
