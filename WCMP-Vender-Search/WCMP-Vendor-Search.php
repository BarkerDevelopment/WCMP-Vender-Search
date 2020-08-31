<?php

/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/BarkerDevelopment/WCMP-Vendor-Search
 * @since             1.0.0
 * @package           WCMP_Vendor_Search
 *
 * @wordpress-plugin
 * Plugin Name:       WC Marketplace - Vendor Search
 * Plugin URI:        https://github.com/BarkingDevelopment/WCMP-Vendor-Search
 * Description:       A WCMp add-on that allows customers to browse vendors.
 * Version:           0.1.0
 * Author:            Max Web Design
 * Author URI:        https://maxweb.design
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       WCMP-Vendor-Search
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '0.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-WCMP-Vendor-Search-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-WCMP-Vendor-Search-activator.php';
	WCMP_Vendor_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-WCMP-Vendor-Search-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-WCMP-Vendor-Search-deactivator.php';
	WCMP_Vendor_Search_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-WCMP-Vendor-Search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new WCMP_Vendor_Search();
	$plugin->run();

}
run_plugin_name();
