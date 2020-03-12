<?php
/**
 * Funkcje zmiejające panel administratora
 */

/* Remove Contact Form 7 Links from dashboard menu items if not admin */
    if (!(current_user_can('administrator'))) {
	function remove_wpcf7() {
	    remove_menu_page( 'wpcf7' ); 
	}

	add_action('admin_menu', 'remove_wpcf7');
     }

/**
 * Apply theme's stylesheet to the visual editor.
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
add_action( 'admin_init', 'wpsam_add_editor_styles' );
function wpsam_add_editor_styles() {
	add_editor_style( 'admin-style.css' );
}


add_action( 'admin_init', 'fb_deactivate_support' );
function fb_deactivate_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'post', 'author' );
}


if( !function_exists('wp_remove_wp_columns') ):

function wp_remove_wp_columns( $columns ) {
  unset($columns['tags']);
  return $columns;
}

function wp_remove_wp_columns_init() {
add_filter( 'manage_posts_columns' , 'wp_remove_wp_columns' );
}
add_action( 'admin_init' , 'wp_remove_wp_columns_init' );
endif;


//Remove the Dashboard menu : (Why do you still have it?)

function remove_menus () {
    global $menu;
    $restricted = array(__('Dashboard'));
    //$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
    end($menu);
    while(prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0]!= NULL?$value[0]:'',$restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu','remove_menus');


/**
 * Remove menus from admin menu
 */
add_action( 'admin_menu', 'wpsam_remove_menu', 999 );
function wpsam_remove_menu(){
	remove_menu_page( 'link-manager.php' );
	remove_menu_page( 'edit-comments.php' );
	//remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag');	// Tags
	//remove_menu_page( 'upload.php' );                 //Media

    remove_menu_page( 'themes.php' );                 //Appearance
    remove_submenu_page('edit.php','edit-tags.php?taxonomy=category');

	//global $submenu;
    // Appearance Menu
	//unset($submenu['themes.php'][6]); // Customize
	//unset($submenu['themes.php'][5]); // Themes
	//unset($submenu['themes.php'][10]); // Widgets
	//unset($submenu['themes.php'][20]); // Background
    //unset($submenu['themes.php'][15]); // Header
    //unset($submenu['themes.php'][101]); // Editor


	if ( !current_user_can('manage_options')) {
		
		remove_menu_page( 'tools.php' );
		remove_menu_page( 'themes.php' ); 
		remove_menu_page( 'users.php' );
		remove_submenu_page( 'themes.php','customize.php' ); //pozycja poresonalizacja
		remove_submenu_page( 'themes.php','themes.php' ); //pozycja themes
		//
		
		remove_menu_page( 'options-general.php' );
		remove_menu_page( 'index.php' );
		remove_menu_page( 'plugins.php' );                //Plugins
	}

}


/**
 * Remove default description column from category
 *
 */
function jw_remove_taxonomy_description($columns)
{
 // only edit the columns on the current taxonomy, replace category with your custom taxonomy (don't forget to change in the filter as well)
 if ( !isset($_GET['taxonomy']) || $_GET['taxonomy'] != 'category' )
 return $columns;

 // unset the description columns
 if ( $posts = $columns['description'] ){ unset($columns['description']); }
 return $columns;
}
add_filter('manage_edit-category_columns','jw_remove_taxonomy_description');

// Remove Category Description

function custom_admin_js() {
    $url = get_bloginfo('template_directory') . '/js/remove-category-description.js';
    echo '"<script type="text/javascript" src="'. $url . '"></script>"';
}
add_action('admin_footer', 'custom_admin_js');




/**
 * Usuwanie pozycji w menu w top
 * http://www.paulund.co.uk/how-to-remove-links-from-wordpress-admin-bar
 */
add_action( 'wp_before_admin_bar_render', 'wpsam_remove_admin_bar_links' );
function wpsam_remove_admin_bar_links() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
	$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
	$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
	$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
	$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
	$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
	//$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
	//$wp_admin_bar->remove_menu('view-site');        // Remove the view site link
	$wp_admin_bar->remove_menu('updates');          // Remove the updates link
	//$wp_admin_bar->remove_menu('new-post');         // Remove the new post link
	$wp_admin_bar->remove_menu('comments');         // Remove the comments link
	//$wp_admin_bar->remove_menu('new-content');      // Remove the content link
	$wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
	//$wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
	$wp_admin_bar->remove_menu('wpseo-menu');       // WordPress SEO by Yoast

}



/**
 * Usuwanie pozycji ze strony edycji menu
 * http://wordpress.stackexchange.com/questions/97890/how-to-remove-a-metabox-from-menu-editor-page
*/
//add_action('admin_head-nav-menus.php', 'wpsam_remove_menu_metaboxes');
function wpsam_remove_menu_metaboxes() {
	//remove_meta_box('nav-menu-theme-locations', 'nav-menus', 'side');
	//remove_meta_box('add-custom-links', 'nav-menus', 'side');
	//remove_meta_box('add-post', 'nav-menus', 'side');
	//remove_meta_box('add-page', 'nav-menus', 'side');
	remove_meta_box('add-category', 'nav-menus', 'side');
}



/**
 * Remove metaboxes from posts and pages edit page
 * http://chrisburbridge.com/317/
 */
add_action('admin_init', 'wpsam_remove_metaboxes');
function wpsam_remove_metaboxes() {
	// Remove boxes I don’t like

	//w przypadku admina zostawiamy wszystko bez zmian
	//if ( current_user_can('manage_options')){
	//	return;
	//}


	// *** For posts *** //
	// Custom Fields
	//remove_meta_box( 'postcustom' , 'post' , 'normal' );
	// Excerpt
	//remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
	// Trackbacks
	remove_meta_box( 'trackbacksdiv' , 'post' , 'normal' );
	// Discussion
	//remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' );
	// Revisions
	remove_meta_box( 'revisionsdiv' , 'post' , 'normal' );
	// Author
	remove_meta_box( 'authordiv' , 'post' , 'normal' );
	// Categories
	remove_meta_box( 'categorydiv' , 'post' , 'normal' );
	// Tags
	remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' );
	// Publish
	//remove_meta_box( 'submitdiv' , 'post' , 'normal' );

	// *** For pages *** //
	// Custom Fields
	remove_meta_box( 'postcustom' , 'page' , 'normal' );
	// Discussion
	remove_meta_box( 'commentsdiv' , 'page' , 'normal' );
	// Comments
	remove_meta_box( 'commentstatusdiv' , 'page' , 'normal' );
	// Revisions
	remove_meta_box( 'revisionsdiv' , 'page' , 'normal' );
	// Author
	remove_meta_box( 'authordiv' , 'page' , 'normal' );
	// Page Attributes
	//remove_meta_box( 'pageparentdiv' , 'page' , 'normal' );
	// Publish
	//remove_meta_box( 'submitdiv' , 'page' , 'normal' );
}



/**
 * Zmiany nazwy pozycji posts w menu
 */


add_action( 'admin_menu', 'wpsam_edit_admin_menus' );
function wpsam_edit_admin_menus() {
	global $menu;

	$menu[5][0] = 'Usługi'; // Change Posts to Projects
}


/**
 * Remove WordPress Default Image Sizes
 */
 
add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
// Remove default image sizes here. 
function prefix_remove_default_images( $sizes ) {
 unset( $sizes['small']); // 150px
 unset( $sizes['medium']); // 300px
 unset( $sizes['large']); // 1024px
 unset( $sizes['medium_large']); // 768px
 return $sizes;
}




add_action('admin_menu', 'change_menus_position');
function change_menus_position() {

    // Remove old menu
    remove_submenu_page( 'themes.php', 'nav-menus.php' );

    //Add new menu page
     add_menu_page(
       'Menus',
       'Menus',
       'edit_theme_options',
       'nav-menus.php',
       '',
       'dashicons-list-view',
       68
    );
}

