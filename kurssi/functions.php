<?php


function custom_theme_setup() {
	add_theme_support('title-tag');
	add_tehe_support('custom-background');
}
add_action( 'after_setup_theme', 'custom_setup_theme' );


function rekisteroi_menu(){
	register_nav_menu('reuna', 'Päävalikko');
}

add_action('init', 'rekisteroi_menu');

?>