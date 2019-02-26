<?php
function add_meta_boxes_pages( $meta_boxes ) {

	// Homepage section introduction
	$meta_boxes[] = array(
	    'title'      => __( 'Section introduction', 'textdomain' ),
	    'post_types' => 'page',
	    'fields'     => array(
	        array (
				'id'   => 'pagina_titel',
				'name' => __( 'Titel van de section', 'textdomain' ),
				'type' => 'text',
			),
	        
	        array(
		        'id'   => 'profiel_foto',
		        'name' => __( 'Voeg een profielfoto toe', 'textdomain' ),
		        'type' => 'image_advanced',
			),
			array(
		        'id'   => 'profiel_naam',
		        'name' => __( 'Naam en achternaam', 'textdomain' ),
		        'type' => 'text',
			),
			array(
		        'id'   => 'profiel_functie',
		        'name' => __( 'Functie', 'textdomain' ),
		        'type' => 'text',
			),
			array(
		        'id'   => 'profiel_intro',
		        'name' => __( 'Intro', 'textdomain' ),
		        'type' => 'wysiwyg',
			),
			array(
		        'id'   => 'github_link',
		        'name' => __( 'Github link', 'textdomain' ),
		        'type' => 'text',
			),
			array(
		        'id'   => 'linkedin_link',
		        'name' => __( 'Linkedin link', 'textdomain' ),
		        'type' => 'text',
			),
		)
	);


	// Homepage section portfolio
	$meta_boxes[] = array(
		'title'      => __( 'Section portfolio', 'textdomain' ),
		'post_types' => 'page',
		'fields'     => array(
		    array (
				    'id'   => 'pagina_titel_links',
				    'name' => __( 'Titel van blok links', 'textdomain' ),
				    'type' => 'text',
			    ),
		    
		    array(
			    'id'   => 'portfolio_code_foto',
			    'name' => __( 'Foto voor blok links', 'textdomain' ),
			    'type' => 'image_advanced',
			    ),
			    array(
			    'id'   => 'pagina_titel_rechts',
			    'name' => __( 'Titel van blok rechts', 'textdomain' ),
			    'type' => 'text',
			    ),
			    array(
			    'id'   => 'portfolio_design_foto',
			    'name' => __( 'Functie', 'textdomain' ),
			    'type' => 'image_advanced',
			    ),
		    )
		);
		
		$meta_boxes[] = array(
			'title'  => __( 'Het portfolio item', 'your-prefix' ),
			'post_types' => array('design', 'code'),
			'fields' => array(
			array(
		        'id'   => 'Foto',
		        'name' => __( 'Voeg een foto toe', 'textdomain' ),
		        'type' => 'image_advanced',
			),
		),
	);
		$meta_boxes[] = array(
			'title'  => __( 'Design section', 'your-prefix' ),
			'post_types' => array('code', 'design'),
			'fields' => array(
			array(
			'id'   => 'design_foto',
			'name' => __( 'Voeg een foto toe', 'textdomain' ),
			'type' => 'image_advanced',
			),
		),
	);
	return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'add_meta_boxes_pages');
