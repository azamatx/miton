<?php
if ( ! defined( 'MITON_VERSION' ) ) {
	$miton_version = defined( 'WP_DEBUG' ) && true === WP_DEBUG ? time() : '1.0.0';
	define( 'MITON_VERSION', $miton_version );
}

require_once get_parent_theme_file_path( 'inc/setup.php' );
require_once get_parent_theme_file_path( 'inc/enqueue.php' );
