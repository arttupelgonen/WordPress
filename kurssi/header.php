<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700&display=swap" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?> ">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<div class="main-container">	
<header class="tummansininen main-header">
	<div class="punainen tunnus"><a href="<?php echo get_home_url(); ?>">Oma Yritys</a></div>
	<div class="search-block">
		<?php get_search_form(); ?>
	</div>
</header>
<div class="banner">
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Banneri">
	
</div>