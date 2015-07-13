<?php 

/* CHANGE POST LABELS */
    function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Blog';
	$submenu['edit.php'][5][0] = 'Articles';
	$submenu['edit.php'][10][0] = 'Add Article';
	$submenu['edit.php'][15][0] = 'Article Topics';
	$submenu['edit.php'][16][0] = 'Article Subjects';
	echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
	
/* CHANGE POST LABELS */
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Blog';
	$labels->singular_name = 'Article';
	$labels->add_new = 'Add Article';
	$labels->add_new_item = 'Add Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'Article';
	$labels->view_item = 'View Article';
	$labels->search_items = 'Search Articles';
	$labels->not_found = 'No Articles found';
	$labels->not_found_in_trash = 'No Article found in Trash';
}
add_action( 'init', 'change_post_object_label' );

/* CHANGE CATEGORY LABELS */
function change_category_object_label() {
	global $wp_taxonomies;
	$labels = &$wp_taxonomies['category']->labels;
	$labels->name = 'Topics';
	$labels->singular_name = 'Topic';
	$labels->search_items = 'Search Topics';
	$labels->all_items = 'All Topics';
	$labels->parent_item = 'Parent Topic';
	$labels->parent_item_colon = 'Parent Topic:';
	$labels->edit_item = 'Edit Topic';
	$labels->view_item = 'View Topic';
	$labels->update_item = 'Update Topic';
	$labels->add_new_item = 'Add New Topic';
	$labels->new_item_name = 'New Topic Name';
	}
add_action( 'init', 'change_category_object_label' );

/* CHANGE TAG LABELS */
function change_tag_object_label() {
	global $wp_taxonomies;
	$labels = &$wp_taxonomies['post_tag']->labels;
	$labels->name = 'Subjects';
	$labels->singular_name = 'Subject';
	$labels->search_items = 'Search Subjects';
	$labels->popular_items = 'Popular Subjects';
	$labels->all_items = 'All Subjects';
	$labels->edit_item = 'Edit Subject';
	$labels->view_item = 'View Subject';
	$labels->update_item = 'Update Subject';
	$labels->add_new_item = 'Add New Subject';
	$labels->new_item_name = 'New Subjectc Name';
	$labels->separate_items_with_commas = 'Separate subjects with commas';
	$labels->add_or_remove_items = 'Add or remove subjects';
	$labels->choose_from_most_used = 'Choose from the most used subjects';
	}
add_action( 'init', 'change_tag_object_label' );
?>