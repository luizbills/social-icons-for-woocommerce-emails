<?php

function siwce_email_social_icons( $footer_content ) {
	$icons = siwce_get_icon_list();
	$img_width = get_option( 'siwce_img_width' );
	$img_height = get_option( 'siwce_img_height' );

	ob_start();
	?>
	<table border="0" cellpadding="10" cellspacing="0" align="center">
		<tr>
			<td valign="middle">
				<table border="0" cellpadding="0" cellspacing="10" align="center">
					<tr>
	<?php
	foreach ( $icons as $id => $name ):
		$link_href = get_option( 'siwce_url_' . $id );
		$img_src = siwce_get_icon_image_uri( $id );
		$img_alt = $name;

		if ( !$link_href ) continue; ?>

						<td valign="middle">
							<a href="<?php echo $link_href; ?>" title="<?php echo $img_alt; ?>"><img
								alt="<?php echo $img_alt; ?>"
								src="<?php echo $img_src; ?>"
								width="<?php echo $img_width ? $img_width : 48; ?>"
								height="<?php echo $img_height ? $img_height : 48; ?>"
							/></a>
						</td>
	<?php
	endforeach;
	?>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table width="100%" border="0" cellpadding="10" cellspacing="0">
		<tr>
			<td valign="middle">
				<?php echo $footer_content; ?>
			</td>
		</tr>
	</table>
	<?php

	return ob_get_clean();
}

function siwce_social_icons_settings( $settings ) {
	$icons = siwce_get_icon_list();

	$settings[] = array(
		'title' => __( 'Social Icons', 'siwce' ),
		'desc' => __( 'Leave in blank the social networks that you don\'t use.', 'siwce' ),
		'type' => 'title',
		'id' => 'siwce'
	);

	$settings[] = array(
			'title' => __( 'Icon width', 'siwce' ),
			'id' => 'siwce_img_width',
			'type' => 'text',
			'placeholder' => '48'
	);

	$settings[] = array(
			'title' => __( 'Icon height', 'siwce' ),
			'id' => 'siwce_img_height',
			'type' => 'text',
			'placeholder' => '48',
	);

	foreach($icons as $id => $name) {
		$settings[] = array(
			'title' => $name . ' URL',
			'id' => 'siwce_url_' . $id,
			'type' => 'text'
		);
	}

	$settings[] = array( 'type' => 'sectionend', 'id' => 'siwce' );

	return $settings;
}