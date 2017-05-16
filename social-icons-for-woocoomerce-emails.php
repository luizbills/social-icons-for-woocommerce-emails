<?php
/*
 * Plugin Name: Social Icons for WooCoomerce Emails
 * Description: Add social icons on footer of your WooCommerce emails.
 * Version: 2.0.0
 *
 * Author: Luiz Bills
 * Author URI: https://luizp.com
 *
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: siwce
 * Domain Path: /languages/
 *
 * Requires at least: 4.0
 * Tested up to: 4.7
 *
 * WC requires at least: 2.5
 * WC tested up to: 3.0
*/

if ( ! defined( 'ABSPATH' ) ) die;

define( 'SIWCE_SLUG', 'social-icons-for-woocoomerce-emails' );
define( 'SIWCE_FILE', __FILE__ );
define( 'SIWCE_DIR', dirname( __FILE__ ) );
define( 'SIWCE_ASSETS_DIR', trailingslashit( SIWCE_DIR ) . 'static' );
define( 'SIWCE_ASSETS_URL', esc_url( trailingslashit( plugins_url( '/static/', __FILE__) ) ) );

require 'inc/plugin_helpers.php';
require 'inc/plugin_functions.php';
require 'inc/plugin_hooks.php';
