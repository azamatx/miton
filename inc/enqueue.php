<?php
function miton_scripts_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), MITON_VERSION );
	wp_enqueue_style( 'miton-style', get_template_directory_uri() . '/assets/css/main.css', array(), MITON_VERSION );

	wp_enqueue_script( 'miton-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), MITON_VERSION, true );

	wp_localize_script(
		'miton-script',
		'miton_object',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'miton_scripts_styles' );
