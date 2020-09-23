<?php
 /*
  Template Name: search
 */
?>

<?php
get_header();
?>
<?php
$keywords = $_GET['search'];
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'category_name' => $queried_category->slug,
    'posts_per_page' => 8,
    's' => $keywords,
    'paged' => $paged
); 

    $the_query = new WP_Query( $args );
    $total =  $the_query->max_num_pages;
    if ( $the_query->have_posts() ) {
?>
 <div class="selling-products wrap-category">
                <div class="wrap-title">
                    <h4 class="title-h3"><a><?php echo $keywords ?></a></h4>
                </div>

                <div class="wrap-items">

                    <div class="row">

<?php

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
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
                                  ?>
                                    <p><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?> VND</p>
                                  <?php
                                }
                            ?>

                          </div>
                        </div>
                      </div>
                    </a>
                </div>
              
           <?php
        }

        ?>
        </div>
    </div>
  </div>

  <div class="wrap-pagination">
                <div class="row">
                    <div class="col-md-12">

                    <?php
                        $pagination = paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' =>  $total,
                            'prev_text'    => __('<'),
                            'next_text'    => __('>'),
                            'type' => 'list'
                        ));
                        echo $pagination;  
                    ?>
                    
                    </div>
                </div>
            </div>
  <?php
    } 
    wp_reset_postdata();
?>




<?php
 $args = array(
    'category_name' => 'products',
    'posts_per_page' => 8,
    'meta_query' => array(
    array(
        'key'   => 'sell-product',
        'value' => '1',
    )
)
); 

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
  <div class="wrap-slider-product wrap-category">
                <div class="wrap-title">
                    <h4 class="title-h3"><a>Sản phẩm bán chạy</a></h4>
                </div>


                <div class="row">
                
                    <div class="autoplay">

<?php

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
           ?>
                 <div class="col-md-4 col-xs-1 wrap-item">
                                <a href="<?php the_permalink(); ?>">
                                            <div class="wrap-frame-item">
                                                <div class="wrap-image hover-zoom">
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
                                                                ?>
                                                                <p><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?> VND</p>
                                                                <?php
                                                            }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
              
           <?php
        }

        ?>
        </div>
    </div>
  </div>
  <?php
    } 
    wp_reset_postdata();

get_footer();