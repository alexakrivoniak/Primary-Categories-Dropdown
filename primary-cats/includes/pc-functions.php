<?php
/*
 * Add dropdown to admin sidebar panel
 */

// add metabox 
function primary_cats_add_metabox() {
	add_meta_box( 'primary_cats_box', __( 'Primary Category', 'primary-cat-value' ), 'primary_cats_metabox_callback', 'post', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'primary_cats_add_metabox' );

// create metabox
function primary_cats_metabox_callback( $post ) {
	// stored value? display in metabox
	$value = get_post_meta( $post->ID, '_primary_cats_field', true );

	// show all categories, even if empty and only if parent (can't assign child as primary category)
	$args = array(
		'orderby' => 'name',
		'order' => 'ASC',
		'hide_empty' => false,
		'parent' => 0
	);
	$categories = get_categories($args);

	// include metabox html
	include plugin_dir_path(__FILE__) . '/../assets/pc-metabox.php';
}

// save metabox
function primary_cats_save( $post_id ) {
	if ( array_key_exists( 'primary-cat-select', $_POST ) ) {
		update_post_meta( $post_id, '_primary_cats_field', $_POST['primary-cat-select'] );
	}
}
add_action( 'save_post', 'primary_cats_save' );

?>