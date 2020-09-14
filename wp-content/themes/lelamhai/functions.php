<?php


/**
 * Regsiter menu
 */

if(function_exists('wp_nav_menu')){
    function jinn_wp_my_menus(){
        register_nav_menus(array(
            'main_nav' => __('Main_menu')
        ));
    }
    add_action('init','jinn_wp_my_menus');
}


function get_main_menu(){
    wp_nav_menu(array(
        'theme_location'  => 'main_nav',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => '',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
    ));
}
add_shortcode('main_menu', 'get_main_menu');

function get_sub_menu() {
    wp_nav_menu( array(
        'theme_location'  => 'sub_menu',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => '',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
    ));
} add_shortcode( 'sub_menu' , 'get_sub_menu' );

/*
** Crop image
*/
function agilsun_imagesize(){
	add_theme_support( 'post-thumbnails' );
    add_image_size('item_239x238',239,238, true);
	add_image_size('item_detail_458x250',458,250, true);
 }
 add_action('after_setup_theme','agilsun_imagesize');


/** REGISTER LIST POST_TYPES **/
add_action('init', 'hrPostTypeRegister');
function hrPostTypeRegister() {
	$post_types = array(
		'products' => array(
			'labels' => array(
				'name' => __( 'Sản Phẩm', 'wood' ),
				'singular_name' => __( 'Sản Phẩm', 'wood' ),
				'add_new_item' => __( 'Add New', 'wood' ),
				'add_new' => __( 'Add New', 'wood' ),
			),
			'rewrite' => array('slug' => 'san-pham'),
            'supports' => array('title','editor','thumbnail'),
            'menu_position' => 5
		)
	);
	foreach ($post_types as $post_type => $args){
		$defaults = array(
			'public' => true,
			'show_ui' => true,
			'has_archive' => true,
			'show_in_rest' => false
		);
		$args = wp_parse_args( $args, $defaults );
		register_post_type( $post_type , $args );
	}
}

function pp_create_taxonomy($args) {
    if(!is_array($args) || !$args['post_type'] || !$args['name'] || !$args['single'] || !$args['taxonomy'] || !$args['slug']) return;
    $post_type = $args['post_type'];
    $name = $args['name'];
    $single = $args['single'];
    $slug = $args['slug'];
    $rewrite = (isset($args['rewrite']))?$args['rewrite']:$slug;
    $taxonomy = $args['taxonomy'];
    $labels = array(
        'name' => __($name,'pp'),
        'singular_name' => __($single,'pp'),
        'search_items' => __('Filter By '.$name,'pp'),
        'popular_items' => __('Popular '.$name,'pp'),
        'all_items' => __('All '.$name,'pp'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit '.$single,'pp'),
        'update_item' => __('Update '.$single,'pp'),
        'add_new_item' => __('Add New '.$single,'pp'),
        'new_item_name' => __('Add New '.$single,'pp'),
        'menu_name' => __($name,'pp'),
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => $rewrite),
    );
    register_taxonomy($taxonomy, $post_type, $args);
}

function create_custom_taxonomies() {
    $args = array(
        array(
            "post_type" => array('products'),
            "name" => "Product category",
            "single" => "Product category",
            "slug" => "product_cat",
            "taxonomy" => "product_cat",
        ),
    );
    foreach($args as $arg) {
        if(!empty($arg['post_type'])) {
            pp_create_taxonomy($arg);
        }
    }
}
add_action('init', 'create_custom_taxonomies', 0);
?>