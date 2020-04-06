<?php


function custom_setup_theme() {
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('custom-header', array('width' => 1000, 'height' => 400));
}
add_action( 'after_setup_theme', 'custom_setup_theme' );


function rekisteroi_menu(){
	register_nav_menu('reuna', 'Päävalikko');
}

add_action('init', 'rekisteroi_menu');

?>