<?php
/*
Plugin Name: Social Icons for WooCoomerce Emails
Description: Add social icons on footer of your WooCommerce emails.
Version: 2.1.1
Author: Luiz Bills
Author URI: https://www.luizpb.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: siwce
Domain Path: /languages/
*/

if ( ! defined( 'ABSPATH' ) ) die;

define( 'SIWCE_PLUGIN_VERSION', '2.0.4' );
define( 'SIWCE_SLUG', 'social-icons-for-woocoomerce-emails' );
define( 'SIWCE_FILE', __FILE__ );
define( 'SIWCE_DIR', dirname( __FILE__ ) );
define( 'SIWCE_ASSETS_DIR', trailingslashit( SIWCE_DIR ) . 'static' );
define( 'SIWCE_ASSETS_URL', esc_url( trailingslashit( plugins_url( '/static/', __FILE__) ) ) );

require_once 'inc/plugin_helpers.php';
require_once 'inc/plugin_functions.php';
require_once 'inc/plugin_hooks.php';
