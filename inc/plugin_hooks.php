<?php

add_filter( 'woocommerce_email_footer_text' , 'siwce_email_social_icons' );
add_filter( 'woocommerce_get_settings_email', 'siwce_social_icons_settings', 10, 2 );