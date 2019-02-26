
<?php
 function get_theme_scripts() {
	wp_enqueue_script( 'slider', get_template_directory_uri().'/src/js/slider.js', array(), false, true );
	wp_enqueue_script( 'padding-intro', get_template_directory_uri().'/src/js/intro-padding.js', array(), false, true);
	wp_enqueue_script( 'bar', get_template_directory_uri().'/src/js/bar.js', array(), false, true);
	wp_enqueue_script( 'hamburger-menu', get_template_directory_uri().'/src/js/hamburger.js', array(), false, true);
	wp_enqueue_script( 'scroll', get_template_directory_uri().'/src/js/scroll.js', array(), false, true);
	wp_enqueue_script( 'lightbox', get_template_directory_uri().'/src/js/lightbox.js', array(), false, true);
	wp_enqueue_script( 'home-animation', get_template_directory_uri().'/src/js/home-animation.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'get_theme_scripts' );
