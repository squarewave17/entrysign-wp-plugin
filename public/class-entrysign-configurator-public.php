<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://squarewavedigital.co.uk/
 * @since      1.0.0
 *
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/public
 */

/**
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/public
 * @author     Paul Ryder <paul@squarewavedigital.co.uk>
 */
class Entrysign_Configurator_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Entrysign_Configurator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Entrysign_Configurator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		 /**
		  * Only run vue when on the desired page
		  */
		if (!is_page('app-test')){
			return;
		}
		wp_enqueue_style( 'vue-css', plugin_dir_url( __FILE__ ) . '/configurator/dist/css/app.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'vue-css-vendor', plugin_dir_url( __FILE__ ) . '/configurator/dist/css/chunk-vendors.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * The Entrysign_Configurator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		 /**
		  * Only run vue when on the desired page
		  */
		if (!is_page('app-test')){
			return;
		}
		wp_enqueue_script( 'vue-vendors', plugin_dir_url( __FILE__ ) . '/configurator/dist/js/chunk-vendors.js', [], $this->version, true );
		wp_enqueue_script( 'vue-js', plugin_dir_url( __FILE__ ) . '/configurator/dist/js/app.js', [], $this->version, true );

	}

}
