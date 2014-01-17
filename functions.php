<?php 
automatic_feed_links();

// Load jQuery
if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
		
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery-ui-core');
				
			}
	}
	core_mods();
}

// CLEAN UP HEAD<head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');

remove_action('wp_head', 'wp_generator');

/* REGISTER MENUS */
include (TEMPLATEPATH . '/_/functions/register-menus.php');

/* ADD EDITOR STYLES */		
add_editor_style();

/* ADD CUSTOM BACKGROUND */	
add_custom_background();

/* CUSTOM FUNCTIONS ----------------------------------------*/

/* CHANGE EDITOR BUTTONS */
//include (TEMPLATEPATH . '/_/functions/change-editor-buttons.php');

//CHANGE DEFAULT LABELS AND ICONS
include (TEMPLATEPATH . '/_/functions/change-default-labels.php');

//CUSTOMISE DASHBOARD
include (TEMPLATEPATH . '/_/functions/customise-dashboard.php');

// ADD ADMIN STYLESHEET
include (TEMPLATEPATH . '/_/functions/add-admin-stylesheet.php');

//REMOVE UPDATE FOR NONE ADMINS
include (TEMPLATEPATH . '/_/functions/remove-wp-update-notice.php');

//CHANGE HOWDY MESSAGE TO WELCOME
include (TEMPLATEPATH . '/_/functions/change-howdy-to-welcome.php');

//ADMIN FOOTER COPYRIGHT
include (TEMPLATEPATH . '/_/functions/admin-footer-copyright.php');

//REMOVE USER CONTACT METHODS
include (TEMPLATEPATH . '/_/functions/remove-user-contact-methods.php');

/* REMOVE ADMIN COLOR SCHEME OPTIONS */
include (TEMPLATEPATH . '/_/functions/admin-color-scheme-options.php');

/* REMOVE META BOXES */
include (TEMPLATEPATH . '/_/functions/remove-meta-boxes.php');

/* REMOVE ADMIN LOGO */
include (TEMPLATEPATH . '/_/functions/remove-wp-logo.php');


/* TEST AREA -------------- */

/* ADMIN TESTS */
include (TEMPLATEPATH . '/_/functions/admin-tests.php');

 ?>