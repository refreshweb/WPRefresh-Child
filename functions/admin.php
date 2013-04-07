<?php
/* Custom Admin Login Logo */
function my_custom_login_logo() { 
     echo '<style type="text/css"> 
	 		body.login { background:#cf7002; }
	       .login h1 a { width:323px; height:107px; background-size: 323px 107px; background-image:url('.get_bloginfo('stylesheet_directory').'/functions/images/custom-login-logo.png) !important; } 
		   #loginform { border:3px solid #cf7002; -webkit-box-shadow:0 0 30px rgba(255,255,255,0.3); box-shadow:0 0 30px rgba(255,255,255,0.3); background:#444; } 
		   .login #nav a, .login #backtoblog a { color:white !important; text-shadow:none; }
		   .login #nav a:hover, .login #backtoblog a:hover { color:#444 !important; }
		   #wp-submit {
			-moz-box-shadow:inset 0px 1px 0px 0px #ffb24d;
			-webkit-box-shadow:inset 0px 1px 0px 0px #ffb24d;
			box-shadow:inset 0px 1px 0px 0px #ffb24d;
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fa9d32), color-stop(1, #bd6800) );
			background:-moz-linear-gradient( center top, #fa9d32 5%, #bd6800 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#fa9d32", endColorstr="#bd6800");
			background-color:#fa9d32;
			border:1px solid #cf6f02;
			display:inline-block;
			color:#ffffff;
			text-decoration:none;
			}#wp-submit:hover {
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #bd6800), color-stop(1, #fa9d32) );
				background:-moz-linear-gradient( center top, #bd6800 5%, #fa9d32 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#bd6800", endColorstr="#fa9d32");
				background-color:#bd6800;
			}#wp-submit:active {
				position:relative;
				top:1px;
			}
		   </style>';}   
add_action('login_head', 'my_custom_login_logo');

// Remove top level admin menu items
//function my_remove_menu_pages() {
	//remove_menu_page('link-manager.php');// Removes 'Links'
	//remove_menu_page('upload.php');// Removes 'Media'
	//remove_menu_page('edit-comments.php');// Removes 'Comments'
	//remove_menu_page('plugins.php');// Removes 'Plugins'
	//remove_menu_page('users.php');// Removes 'Users'
	//remove_menu_page('edit.php');// Removes 'Posts'
	//remove_menu_page('tools.php');// Removes 'Tools'
	//remove_menu_page('wp-security-scan/securityscan.php');	// Removes 'Security'
	//remove_menu_page('options-general.php');	// Removes 'options'
	//remove_menu_page('wpseo_dashboard');	// Removes 'SEO'
	//SubMenu
	//remove_submenu_page ( 'options-general.php', 'options-permalink.php' ); //
	//remove_submenu_page ( 'options-general.php', 'options-writing.php' ); //
	//remove_submenu_page ( 'options-general.php', 'options-reading.php' ); //
	//remove_submenu_page ( 'options-general.php', 'options-discussion.php' ); //
	//remove_submenu_page ( 'options-general.php', 'options-media.php' ); //
	//remove_submenu_page ( 'options-general.php', 'options-privacy.php' ); //
	//remove_submenu_page ( 'options-general.php', 'wordpress-firewall-2/wordpress-firewall-2.php' ); //
	//remove_submenu_page ( 'options-general.php', 'secure-wordpress.php' ); //
	//remove_submenu_page ( 'index.php', 'akismet-stats-display' ); //
	//remove_submenu_page ( 'index.php', 'update-core.php' ); //
	//remove_submenu_page ( 'themes.php', 'themes.php' ); //	
//}
//add_action( 'admin_menu', 'my_remove_menu_pages' );
// Gravity Forms
//function remove_gravity_links() {
    //if( current_user_can( 'manage_options' ) ) {
        // remove_submenu_page( 'gf_edit_forms', 'gf_edit_forms' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_new_form' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_new_formf_help' ); 
        // remove_submenu_page( 'gf_edit_forms', 'gf_entries' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_settings' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_export' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_update' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_addons' ); 
        //remove_submenu_page( 'gf_edit_forms', 'gf_help' ); 
    //}
//}
//add_action( 'admin_menu', 'remove_gravity_links', 9999 );
?>