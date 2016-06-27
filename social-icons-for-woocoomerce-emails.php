<?php
/*
Plugin Name: Social Icons for WooCoomerce Emails
Description: Add social icons on footer of your emails.
Version: 1.0.0
Author: Luiz Bills
Author URI: https://profiles.wordpress.org/luizbills
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: siwce
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	die; // Exit if accessed directly
}

define( 'SIWCE_PLUGIN_NAME', 'social-icons-for-woocoomerce-emails' );

require 'inc/plugin_helpers.php';
require 'inc/plugin_functions.php';
require 'inc/plugin_hooks.php';
