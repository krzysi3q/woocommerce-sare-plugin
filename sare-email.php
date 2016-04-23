<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/krzysi3q
 * @since             1.0.0
 * @package           Sare_Email
 *
 * @wordpress-plugin
 * Plugin Name:       Sare e-mail
 * Plugin URI:        https://github.com/krzysi3q/woocommerce-sare-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Krzysztof
 * Author URI:        https://github.com/krzysi3q
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sare-email
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sare-email-activator.php
 */
function activate_sare_email() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sare-email-activator.php';
	Sare_Email_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sare-email-deactivator.php
 */
function deactivate_sare_email() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sare-email-deactivator.php';
	Sare_Email_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sare_email' );
register_deactivation_hook( __FILE__, 'deactivate_sare_email' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sare-email.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sare_email() {

	$plugin = new Sare_Email();
	$plugin->run();

}
run_sare_email();
