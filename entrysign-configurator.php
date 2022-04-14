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
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 */
define('ENTRYSIGN_CONFIGURATOR_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-entrysign-configurator-activator.php
 */
function activate_entrysign_configurator()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-entrysign-configurator-activator.php';
	Entrysign_Configurator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-entrysign-configurator-deactivator.php
 */
function deactivate_entrysign_configurator()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-entrysign-configurator-deactivator.php';
	Entrysign_Configurator_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_entrysign_configurator');
register_deactivation_hook(__FILE__, 'deactivate_entrysign_configurator');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-entrysign-configurator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_entrysign_configurator()
{

	$plugin = new Entrysign_Configurator();
	$plugin->run();
}
run_entrysign_configurator();

// Create Oxyframe Menu
add_action('admin_menu', function () {
	add_menu_page(
		'entrysign',
		'entrysign',
		'manage_options',
		'entrysign',
		function () {
			echo '<div id="entrysign-app"></div>';
		},
		'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMjE2IDg1IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zOnNlcmlmPSJodHRwOi8vd3d3LnNlcmlmLmNvbS8iIHN0eWxlPSJmaWxsLXJ1bGU6ZXZlbm9kZDtjbGlwLXJ1bGU6ZXZlbm9kZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MjsiPgogICAgPGcgdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsMSwtNDUyLjA0LC0xODIuNSkiPgogICAgICAgIDxnIHRyYW5zZm9ybT0ibWF0cml4KDAuNDk0MzU0LDAsMCwwLjU4NTQ5OCw0MzcuMDMzLDE3Mi44ODIpIj4KICAgICAgICAgICAgPGcgdHJhbnNmb3JtPSJtYXRyaXgoMi4wMjI4NCwwLDAsMS43MDc5NSwtODg0LjA0OSwtMjk1LjI3MykiPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTU4OC4xNjEsMjA0LjY4OUM1OTUuMzcsMTkxLjQ3NSA2MDkuMzkzLDE4Mi41IDYyNS40OTYsMTgyLjVDNjQ4Ljk1MiwxODIuNSA2NjcuOTk2LDIwMS41NDQgNjY3Ljk5NiwyMjVDNjY3Ljk5NiwyNDguNDU3IDY0OC45NTIsMjY3LjUgNjI1LjQ5NiwyNjcuNUM2MDkuMzY5LDI2Ny41IDU5NS4zMjksMjU4LjQ5OSA1ODguMTMsMjQ1LjI1NEw1MzEuOTA2LDI0NS4yNTRDNTI0LjcwNywyNTguNDk5IDUxMC42NjYsMjY3LjUgNDk0LjU0LDI2Ny41QzQ3MS4wODMsMjY3LjUgNDUyLjA0LDI0OC40NTcgNDUyLjA0LDIyNUM0NTIuMDQsMjAxLjU0NCA0NzEuMDgzLDE4Mi41IDQ5NC41NCwxODIuNUM1MTAuNjQzLDE4Mi41IDUyNC42NjYsMTkxLjQ3NSA1MzEuODc0LDIwNC42ODlMNTg4LjE2MSwyMDQuNjg5Wk01ODQuMDIyLDIxNS42ODRMNTM2LjAxNCwyMTUuNjg0QzUzNi42ODUsMjE4LjY4NCA1MzcuMDQsMjIxLjgwMSA1MzcuMDQsMjI1QzUzNy4wNCwyMjguMTgxIDUzNi42OSwyMzEuMjgxIDUzNi4wMjYsMjM0LjI1OUw1ODQuMDA5LDIzNC4yNTlDNTgzLjM0NiwyMzEuMjgxIDU4Mi45OTYsMjI4LjE4MSA1ODIuOTk2LDIyNUM1ODIuOTk2LDIyMS44MDEgNTgzLjM1LDIxOC42ODQgNTg0LjAyMiwyMTUuNjg0WiIgc3R5bGU9ImZpbGw6bm9uZTsiLz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+Cg==',  // The icon
		'9999999999999999999'
	);
});

/**
 * TEMPORARY
 * 
 * Shorcode handler used for testing Vue connection
 */
function shortcode_handler_function()
{
	echo ('<div id="entrysign-app"></div>');
}

function shortcodes_init()
{
	add_shortcode('shortcode_test', 'shortcode_handler_function');
}
add_action('init', 'shortcodes_init');
