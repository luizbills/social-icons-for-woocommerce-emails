<?php
/*
Plugin Name: Social Icons for WooCoomerce Emails
Description: Add social icons on footer of your WooCommerce emails.
Version: 2.1.0

Author: Luiz Bills
Author URI: https://www.luizpb.com

License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Text Domain: siwce
Domain Path: /languages/

WC requires at least: 4.0
WC tested up to: 4.8
*/

if ( ! defined( 'ABSPATH' ) ) die;

define( 'SIWCE_PLUGIN_VERSION', '2.0.4' );
define( 'SIWCE_SLUG', 'social-icons-for-woocoomerce-emails' );
define( 'SIWCE_FILE', __FILE__ );
define( 'SIWCE_DIR', dirname( __FILE__ ) );
define( 'SIWCE_ASSETS_DIR', trailingslashit( SIWCE_DIR ) . 'static' );
define( 'SIWCE_ASSETS_URL', esc_url( trailingslashit( plugins_url( '/static/', __FILE__) ) ) );

require 'inc/plugin_helpers.php';
require 'inc/plugin_functions.php';
require 'inc/plugin_hooks.php';
