<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
    	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }
     
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    ?>
    
	<?php wp_head(); ?>
</head>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>

<body style="overflow: hidden" <?php body_class(); ?>>

<div id="cover" class="u-cover" style="position: absolute; left: 0; top: 0; z-index: 200; width: 100%; height: 100%; background-color: #101010; background-image: url(<?php echo get_template_directory_uri(); ?>/img/assets/logo-sealand.svg); background-size: 180px 56px; background-repeat: no-repeat; background-position: center"></div>

    <?php get_template_part('template-parts/top'); ?>
