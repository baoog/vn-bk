<?php

/**
 * The plugin bootstrap file
 *
 * @link              http://wpreloaded.com/farhan-noor
 * @since             1.0
 * @package           Applyonline
 *
 * @wordpress-plugin
 * Plugin Name:       Apply Online
 * Plugin URI:        https://www.linkedin.com/in/farhan-noor
 * Description:       Post ads and start receiving applications online. 
 * Version:           1.9.93
 * Author:            Spider Teams
 * Author URI:        https://spiderteams.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ApplyOnline
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'APPLYONLINE_VERSION', '1.9.93' );

require_once( 'wp_autoupdate.php' );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-applyonline-activator.php
 */
function activate_applyonline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-applyonline-activator.php';
	Applyonline_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-applyonline-deactivator.php
 */
function deactivate_applyonline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-applyonline-deactivator.php';
	Applyonline_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_applyonline' );
register_deactivation_hook( __FILE__, 'deactivate_applyonline' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-applyonline.php';
require plugin_dir_path( __FILE__ ) . 'includes/applyonline-functions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_applyonline() {
	$plugin = new Applyonline();
	$plugin->run();
}
run_applyonline();