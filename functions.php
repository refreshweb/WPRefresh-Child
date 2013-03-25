<?php
/* REFRESH functions and definitions */
function REFRESHchild_setup() {
	// Register Theme Menus
	register_nav_menu( 'secondary', __( 'Secondary Menu', 'refreshweb' ) );
	// Add Image Sizes
	add_image_size( 'image-reference', 500, 300 );
}
add_action( 'after_setup_theme', 'REFRESHchild_setup' );

/* Enqueues child theme scripts for front-end */
function REFRESHmt_child_scripts() {
		
	// Load jQuery and Theme Scripts - ADDITIONAL SCRIPTS ADDED HERE
	if (!is_admin());
	wp_enqueue_script( 'REFRESHmtchild-theme', get_stylesheet_directory_uri(). '/js/theme.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'REFRESHmt_child_scripts' );

/* ---------------------------------------------------------------------- */
/*	Load Custom Functions in Functions Folder
/* ---------------------------------------------------------------------- */

/* Admin */
include( get_stylesheet_directory(). '/functions/admin.php' );

/* Admin Welcome */
include( get_stylesheet_directory(). '/functions/admin-welcome.php' );

/* Registers Widget Areas */
include( get_stylesheet_directory(). '/functions/widget-area.php' );

/* Contextual Help Menu */
//include( get_stylesheet_directory(). '/functions/admin-help.php' );

/* Taxonomies */
//include( get_stylesheet_directory(). '/functions/custom-taxonomies.php' );

/* Post Types */
//include( get_stylesheet_directory(). '/functions/custom-post-types.php' );

/* Meta Boxes */
include( get_stylesheet_directory(). '/functions/custom-metabox.php' );

/* Meta Relative Date Info */
include( get_stylesheet_directory(). '/functions/meta-information.php' ); 


?>