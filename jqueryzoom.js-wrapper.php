<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://durgin.com
 * @since             1.0.0
 * @package           Jqueryzoom.js_Wrapper
 *
 * @wordpress-plugin
 * Plugin Name:       jqueryZoom.js Wrapper
 * Plugin URI:        http://durgin.com/jqueryZoom.js-wrapper
 * Description:       This plugin acts as a Wrapper to include jqueryZoom.js within a wordpress install. I've modified the original plugin to support Jquery's Noconflict mode. 
 * Version:           0.1.0
 * Author:            Ellery Durgin
 * Author URI:        http://durgin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jqueryzoom.js-wrapper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

wp_register_script('jqueryZoom.js', plugin_dir_url(__FILE__) . 'public/js/jqueryZoom.js', array('jquery'), '1.0', true);
wp_enqueue_script('jqueryZoom.js');

?>
