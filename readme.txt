=== Social Icons for WooCoomerce Emails ===
Contributors: luizbills
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8QF4ZNK6K3TXW
Requires at least: 4.4
Tested up to: 4.5.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: woocommerce, email, social, links, footer

Add social icons to your WooCommerce emails.

== Description ==

Add social icons to your WooCommerce emails.

Go to WooCoomerce > Settings > Emails to configure the plugin.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/social-icons-for-wc-emails` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Go to WooCoomerce > Settings > Emails to configure the plugin.

== Frequently Asked Questions ==

= How I can add/remove social networks? =

Using the filter `siwce_social_links`.

Example:
`// add this to your functions.php
add_filter( 'siwce_social_links', 'yourprefix_add_vk_wc_emails' );
function yourprefix_add_vk_wc_emails( $icons ) {
	$icons['vk'] = 'VK';
	return $icons;
}
`

= How I can add/change the icon image? =

Using the filter `siwce_icon_image_uri`.

Example:
`// add this to your functions.php
add_filter( 'siwce_icon_image_uri', 'yourprefix_change_facebook_icon', 10, 2 );
function yourprefix_change_facebook_icon( $uri, $icon_id ) {
	if ( $icon_id == 'facebook' ) {
		$uri = get_stylesheet_directory_uri() . '/path/to/your/facebook_icon.png';
	}
	return $uri;
}
`

== Screenshots ==

1. Default icons appearance

2. WooCoomerce > Settings > Emails page

== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==
