<?php

function siwce_get_icon_list() {
	return apply_filters( 'siwce_social_links', array(
		'facebook' => 'Facebook',
		'instagram' => 'Instagram',
		'twitter' => 'Twitter',
		'youtube' => 'Youtube',
		'google_plus' => 'Google+',
		'linkedin' => 'LinkedIn',
		'pinterest' => 'Pinterest'
	) );
}

function siwce_get_icon_image_uri( $id ) {
	$default_uri = plugins_url( SIWCE_PLUGIN_NAME . '/assets/icons/' . $id . '.png' );
	return apply_filters( 'siwce_icon_image_uri', $default_uri, $id );
}