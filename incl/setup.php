<?php 
register_nav_menus( array(
	'header-menu'	=> 'Hoofdmenu',
) );

register_nav_menus( array(
	'footer-menu'	=> 'Footermenu',
) );

register_nav_menus( array(
	'mobile-menu'	=> 'Mobile-menu',
));


register_sidebar( array(
	'id'			=> 'footer1_widget',
	'name'			=> __( 'Footer Widget Links', $text_domain ),
	'description'	=> __( 'This sidebar is located above the age logo.', $text_domain ),
) );

register_sidebar( array(
	'id'			=> 'footer2_widget',
	'name'			=> __( 'Footer Widget Midden', $text_domain ),
	'description'	=> __( 'This sidebar is located above the age logo.', $text_domain ),
) );

register_sidebar( array(
	'id'			=> 'footer3_widget',
	'name'			=> __( 'Footer Widget Rechts', $text_domain ),
	'description'	=> __( 'This sidebar is located above the age logo.', $text_domain ),
) );

add_theme_support( 'post-thumbnails' );
