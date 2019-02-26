<?php 
	require_once('incl/setup.php');
	require_once('incl/posttypes.php');
	require_once('incl/metabox.php');
	require_once('incl/scripts.php');
	
	remove_filter( 'the_content', 'wpautop' );

	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
	add_action('get_header', 'remove_admin_login_header');
