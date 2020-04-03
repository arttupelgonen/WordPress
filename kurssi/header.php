<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?> ">
	<?php wp_head(); ?>
</head>

<body> 
<header>
	<?php get_search_form(); ?>
</header>