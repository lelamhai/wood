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