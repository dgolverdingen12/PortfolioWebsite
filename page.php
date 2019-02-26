<?php get_header();
	require_once('sections/section-slider.php');
	require_once('sections/section-intro.php');
	require_once('sections/section-portfolio.php');

	$value = rwmb_meta( $field_id );
	echo $value;
get_footer(); ?>
