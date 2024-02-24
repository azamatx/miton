<?php
function miton_setup_theme() {
	load_theme_textdomain( 'miton', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'miton_setup_theme' );
