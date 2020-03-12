<?php

/**
 * Wyłączamy niepotrzebne wpisy w nagłówku
 */

//http://wordpress.org/support/topic/how-to-disable-wlwmanifestxml
remove_action('wp_head', 'wlwmanifest_link');


//remove information about alkivia
//http://digwp.com/2010/03/wordpress-functions-php-template-custom-functions/
remove_action('wp_head', '_ak_framework_meta_tags');

//remove information about rel links
//http://digwp.com/2010/03/wordpress-functions-php-template-custom-functions/
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'rsd_link');

// Remove WP Generator
remove_action('wp_head', 'wp_generator');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// qTrans generator
remove_action('wp_head','qtranxf_wp_head_meta_generator');

/**
 * Przekierowanie z niewykorzystywanych stron na stronę główną
 */
add_action( 'wp', 'wpsam_archive_redirect'  );
function wpsam_archive_redirect() {
	global $wp_query;

	if (is_admin()){
		return;
	}

	if ( ($wp_query->is_date ) || ( $wp_query->is_author )|| ( $wp_query->is_tax )|| ( $wp_query->is_tag ) || ( $wp_query->is_category ) ) {
		wp_redirect( get_bloginfo( 'url' ), 301 );
		exit;
	}
}

/**
 * Przekierowanie ze strony attachementów na stronę posta do którego jest przypięty attachement
 * to jest potrzebne aby nie można było np. załączonych plików podglądu
 */

add_action( 'template_redirect', 'wpsam_attachment_redirect' , 1 );
function wpsam_attachment_redirect() {
	global $post;
	if ( is_attachment() && isset( $post->post_parent ) && is_numeric( $post->post_parent ) && $post->post_parent != 0 ) {
		wp_redirect( get_permalink( $post->post_parent ), 301 );
		exit;
	}
}


/**
 * Udzielamy dostępu do obslugi menu (pozycja Menu w główny menu)
 * dla użytkowników z rolą Edytor
 */


// get the the role object
$editor = get_role( 'editor' );

// add $cap capability to this role object
$editor->add_cap( 'edit_theme_options' );