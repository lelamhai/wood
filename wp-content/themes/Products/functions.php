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
 

/*
* Use: category load more
*/
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts_policy', 'security');

    $paged = $_POST['page'];
    $category = $_POST['category'];
    $posts_per_page = 4;
    $datas = '';
    if(isset($_POST['category']))
    {
        $arrayCommonCategory = array(
            'category_name'      => $category,
            'post_status'       => 'publish',
            'posts_per_page'    => $posts_per_page,
            'paged' => $paged
        );
        $my_posts = new WP_Query( $arrayCommonCategory );
        
        if($my_posts->have_posts())
        {
            
            ob_start();
            while ($my_posts->have_posts()) {
                $my_posts-> the_post();
                ?>

                    <div class="col-md-3 col-sm-4 col-xs-12 wrap-item">
                        <a href="<?php the_permalink(); ?>">
                        <div class="wrap-frame-item">
                            <div class="wrap-image hover-zoom ">
                            <img src="<?php the_post_thumbnail_url('item_239x238'); ?>" alt="">
                            </div>
                            <div class="wrap-content">
                            <div class="item-title">
                                <p><?php the_title();?></p>
                            </div>
                            <div class="item-price">
                                
                            <?php
                                    if(get_field( "check-contact", $post->ID ))
                                    {
                                    ?>
                                        <p>Liên hệ</p>
                                    <?php
                                    } else {
                                        if(get_field( "price", $post->ID ))
                                        {
                                            ?>
                                                <p><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?> VND</p>
                                            <?php
                                        }
                                    }
                                ?>

                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php
            }
            $datas = ob_get_clean();
            if($my_posts->max_num_pages==(float)$paged){
                echo json_encode(array('status'=>2,'datas'=>$datas));
            }else{
                echo json_encode(array('status'=>1,'datas'=>$datas));
            }
        } else {
            echo json_encode(array('status'=>0,'datas'=>$datas));
        }
        wp_die();
    }
}



 /*
* Use: search load more
*/
add_action('wp_ajax_search_load_posts_by_ajax', 'search_load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_search_load_posts_by_ajax', 'search_load_posts_by_ajax_callback');
function search_load_posts_by_ajax_callback() {
    check_ajax_referer('search_load_more_posts_policy', 'security');

    $paged = $_POST['page'];
    $keywords = $_POST['search'];
    $posts_per_page = 4;
    $datas = '';
    // if(isset($_POST['category']))
    //{
        $arrays = array(
            's'                 => $keywords,
            'post_type'         => 'post',
            'post_status'       => 'publish',
            'posts_per_page'    => $posts_per_page,
            'paged' => $paged
        );
        $query_post = new WP_Query( $arrays );
        if($query_post->have_posts())
        {
            ob_start();
            while ($query_post->have_posts()) {
                $query_post-> the_post();
                ?>

                    <div class="col-md-3 col-sm-4 col-xs-12 wrap-item">
                        <a href="<?php the_permalink(); ?>">
                        <div class="wrap-frame-item">
                            <div class="wrap-image hover-zoom ">
                            <img src="<?php the_post_thumbnail_url('item_239x238'); ?>" alt="">
                            </div>
                            <div class="wrap-content">
                            <div class="item-title">
                                <p><?php the_title();?></p>
                            </div>
                            <div class="item-price">
                                
                            <?php
                                    if(get_field( "check-contact", $post->ID ))
                                    {
                                    ?>
                                        <p>Liên hệ</p>
                                    <?php
                                    } else {
                                        if(get_field( "price", $post->ID ))
                                        {
                                            ?>
                                                <p><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?> VND</p>
                                            <?php
                                        }
                                    }
                                ?>

                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php
            }
            $datas = ob_get_clean();
            if($query_post->max_num_pages==(float)$paged){
                echo json_encode(array('status'=>2,'datas'=>$datas));
            }else{
                echo json_encode(array('status'=>1,'datas'=>$datas));
            }
        } else {
            echo json_encode(array('status'=>0,'datas'=>$datas));
        }
        wp_die();
    //}
}