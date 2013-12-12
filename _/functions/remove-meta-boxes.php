<?php 
if (is_admin()) {

	function remove_metaboxes() {
	
		if( !current_user_can('administrator') ) {
		
		}
		
	}
	
	add_action('admin_menu', 'remove_metaboxes');

}
 ?>