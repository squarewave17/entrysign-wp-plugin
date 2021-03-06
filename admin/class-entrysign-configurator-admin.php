<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://squarewavedigital.co.uk/
 * @since      1.0.0
 *
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/admin
 */

/**
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/admin
 * @author     Paul Ryder <paul@squarewavedigital.co.uk>
 */
class Entrysign_Configurator_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles($hook)
	{

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

		if ($hook !== 'toplevel_page_entrysign') {
			return;
		}

		wp_enqueue_style('vue-css', plugin_dir_url(__FILE__) . '/app/dist/css/app.css', array(), $this->version, 'all');
		wp_enqueue_style('vue-css-vendor', plugin_dir_url(__FILE__) . '/app/dist/css/chunk-vendors.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts($hook)
	{

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
		if ($hook !== 'toplevel_page_entrysign') {
			return;
		}
		wp_enqueue_script('vue-vendors', plugin_dir_url(__FILE__) . '/app/dist/js/chunk-vendors.js', [], $this->version, true);
		wp_enqueue_script('vue-js', plugin_dir_url(__FILE__) . '/app/dist/js/app.js', [], $this->version, true);
	}
}
