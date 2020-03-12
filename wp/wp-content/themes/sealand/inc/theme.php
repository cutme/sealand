<?php

function cutme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/cutme
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'cutme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cutme' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 600, 730, true );
	
	// Rejestrujemy wymiary obrazków	
	add_image_size( 'contact-icon', 140, 140, true );
	add_image_size( 'certificate-icon', 120, 120, true );
	add_image_size( 'certificate-image', 800, 600, true );
	add_image_size( 'clients-icon', 120, 120, true );
	add_image_size( 'clients-photo', 1240, 620, true );
	add_image_size( 'cooperation', 1240, 620, true );
	add_image_size( 'methods-icon', 80, 70, true );
	add_image_size( 'service', 295, 440, true );
	add_image_size( 'top', 1920, 480, true );
	add_image_size( 'where-map', 1162, 721, true );
	
    

    

	// Navigation
	register_nav_menus( array(
		'Top' => __( 'Top menu', 'cutme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', cutme_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'cutme_setup' );


// Rejestracja styli i skryptów	

function wpsam_theme_enqueue() {
	
	// STYLES Register style
	
	wp_register_style( 'app', get_template_directory_uri() . '/css/style.css', null, '1.0');
	wp_enqueue_style( 'app' );

	// SCRIPTS Footer
	
	wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', null, '1.0', true );
	wp_enqueue_script( 'app' );
}
add_action( 'wp_enqueue_scripts', 'wpsam_theme_enqueue' );



	/**
	 * Rejestrujemy główny styl bloga
	 */
	 /*
	add_action( 'wp_head', 'wpsam_theme_style_css' );
	function wpsam_theme_style_css()
	{?>
				<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php
	}
	*/
	
	
	
	
	
/**
 * Dodajemy excerpt dla Pages
 */
 
	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}



/**
	 * remove <!-- more --> bloat
	 

	add_filter( 'the_content', 'remove_more_bloat' );
	function remove_more_bloat( $content ) { 
		global $post;
	
	
		if ( is_singular() )
			$content = str_replace( '<p><span id="more-' . $post->ID . '"></span></p>', '', $content ); // replace the <span> with an empty string
		return $content;	
	}
*/


	/**
	 * Ustawiamy domyślny rozmiar obrazka w galerii na gallery-image (normalnie to jest thumbnail)
	 */
	/*
	add_filter( 'shortcode_atts_gallery', 'wpsam_set_gallery_default_image_size', 10, 3 );
	function wpsam_set_gallery_default_image_size( $out, $pairs, $atts ) {
		 
		$atts = shortcode_atts( array(
				'size' => 'gallery-image',
		), $atts );
	
		$out['size'] = $atts['size'];
	
		return $out;
	
	}
	*/
	
	
	// Replaces the excerpt "more" text by a link
	/*
	add_filter('excerpt_more', 'wpsam_excerpt_more');
	function wpsam_excerpt_more($more) {
		return '...';
	}
	*/
	
	
	//wyłączamy domyślne stylowanie galerii
	/*

	add_filter( 'use_default_gallery_style', 'wpsam_gallery_style' ) ;
	function wpsam_gallery_style(){
		return false;
	}

	*/
	
	/**
	 * Ktoś wpadł na "genialny" pomysł, aby nie ustawiać automatycznie znacznika title
	 * na podstawie wypełnionego tytułu dla obrazka
	 * //http://core.trac.wordpress.org/ticket/18984
	 * 
	 * Na szczęście mozna to przywrócić :)
	 * //http://wordpress.org/plugins/restore-image-title/developers/
	 * 
	 * @param unknown $html
	 * @param unknown $id
	 * @return unknown|mixed
	 */
	/*
	add_filter( 'media_send_to_editor', 'wpsam_restore_image_title', 15, 2 );
	function wpsam_restore_image_title( $html, $id ) {

		$attachment = get_post($id);
	    if (strpos($html, "title=")) {
	    	return $html;
	    }
	    else 
		{
			$mytitle = esc_attr($attachment->post_title);
			return str_replace('<img', '<img title="' . $mytitle . '" '  , $html);      
		}
	}
	*/



function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  //add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );


function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

remove_action('wp_head', 'wp_generator');




// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for editor styles.
//add_theme_support( 'editor-styles' );

// Enqueue editor styles.
//add_editor_style( 'style-editor.css' );




add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {


        acf_register_block_type(array(
            'name'              => 'designblock',
            'title'             => __('Design blocks'),
            'description'       => __('Images with caption blocks'),
            'render_template'   => 'template-parts/blocks/design.php',
            'category'          => 'layout',
        ));
 
    }
};


add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
