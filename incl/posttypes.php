<?php add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'Code',
		array(
			'labels'		=> array(
			'name'			=> __( 'Code-items' ),
			'singular_name'	=> __( 'Code-item' ),
			'add_new'		=> __( 'New code item')
			),
			'public'		=> true,
			'has_archive'	=> false,
			'supports'		=> array('title', 'editor', 'thumbnail', 'author', 'date'),
			'taxonomies'	=> array('category'),
			'menu_icon'		=> 'dashicons-editor-code',
		)
	);
	register_post_type( 'Design',
		array(
			'labels'		=> array(
			'name'			=> __( 'Design-items' ),
			'singular_name'	=> __( 'Design-item' ),
			'add_new'		=> __( 'New design item')
			),
			'public'		=> true,
			'has_archive'	=> false,
			'supports'		=> array('title', 'editor', 'thumbnail', 'author', 'date'),
			'taxonomies'	=> array('category'),
			'menu_icon'		=> 'dashicons-edit',
		)
	);
}
