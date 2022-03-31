<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://squarewavedigital.co.uk/
 * @since      1.0.0
 *
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/includes
 * @author     Paul Ryder <paul@squarewavedigital.co.uk>
 */
class Entrysign_Configurator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'entrysign-configurator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
