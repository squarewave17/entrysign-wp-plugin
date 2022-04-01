<?php

/**
 *
 * @link              https://squarewavedigital.co.uk/
 * @since             1.0.0
 * @package           Entrysign_Configurator
 *
 * @wordpress-plugin
 * Plugin Name:       Entrysign Configurator
 * Plugin URI:        https://squarewavedigital.co.uk/
 * Description:       Entrysign Configurator
 * Version:           1.0.0
 * Author:            Paul Ryder
 * Author URI:        https://squarewavedigital.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       entrysign-configurator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'ENTRYSIGN_CONFIGURATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-entrysign-configurator-activator.php
 */
function activate_entrysign_configurator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-entrysign-configurator-activator.php';
	Entrysign_Configurator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-entrysign-configurator-deactivator.php
 */
function deactivate_entrysign_configurator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-entrysign-configurator-deactivator.php';
	Entrysign_Configurator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_entrysign_configurator' );
register_deactivation_hook( __FILE__, 'deactivate_entrysign_configurator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-entrysign-configurator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_entrysign_configurator() {

	$plugin = new Entrysign_Configurator();
	$plugin->run();

}
run_entrysign_configurator();


/**
 * TEMPORARY
 * 
 * Shorcode handler used for testing Vue connection
 */
function shortcode_handler_function(){
	echo('<div id="entrysign-app"></div>');
}

function shortcodes_init(){
	add_shortcode( 'shortcode_test', 'shortcode_handler_function' );
   }
   add_action('init', 'shortcodes_init');

  
