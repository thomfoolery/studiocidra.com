<?php
// Slider Post Type
function post_type_product() {

  $labels = array(
    'name'               => _x( 'Products', 'post type general name' ),
    'singular_name'      => _x( 'Rotator  Post', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'item' ),
    'add_new_item'       => __( 'Add New Product' ),
    'edit_item'          => __( 'Edit Product' ),
    'new_item'           => __( 'New Product' ),
    'all_items'          => __( 'All Products' ),
    'view_item'          => __( 'View Products' ),
    'not_found'          => __( 'No Products found' ),
    'not_found_in_trash' => __( 'No Products found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Products'
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Products.',
    'public'        => true,
    'menu_position' => 9,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => false
  );

  register_post_type( 'product', $args );
  remove_post_type_support( 'product', 'editor' );
}
add_action( 'init', 'post_type_product' );
