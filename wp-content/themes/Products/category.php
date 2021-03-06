<?php
 /*
  Template Name: list-product
 */
?>

<?php
get_header();

$posts_per_page = 8;
$queried_category = get_term( get_query_var('cat'), 'category' );

$getParentID = get_term( get_query_var('cat'));
$parentSlug = get_category($getParentID->parent);
?>

            <div class="breadcrumbs">
                <span><a href="<?php echo home_url();?>">Trang Chủ</a><b> > </b><a><?php echo $queried_category->name ?></a></span>
            </div>

<div id="category" style="display:none"><?php echo $queried_category->name ?></div>


<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'category_name'     => $queried_category->slug,
    'posts_per_page'    => $posts_per_page,
    'post_status'       => 'publish',
    'paged' => $paged
); 

    $the_query = new WP_Query( $args );
    $total =  $the_query->post_count;
    if ( $the_query->have_posts() ) {
?>
 <div class="selling-products wrap-category">
                <div class="wrap-title">
                    <h4 class="title-h3"><a><?php echo $queried_category->name ?></a></h4>
                </div>

                <div class="wrap-items">

                    <div class="row" id="row-more">

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
                        <div class="wrap-content <?php 
                            if($parentSlug->slug === "news")
                            {
                                echo "wrap-news";
                            }
                        ?>">
                          <div class="item-title">
                            <p><?php the_title();?></p>
                          </div>
                          <div class="item-price">
                            
                          <?php
                                if(get_field( "check-contact", $post->ID ))
                                {
                                  ?>
                                    <span><b>Liên hệ</b></span>
                                  <?php
                                } else {
                                    if(get_field( "price", $post->ID ))
                                    {
                                        ?>
                                       <span>
                                      <b class="price-new"><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?></b><b class="type-money"> VNĐ</b>
                                      <?php 
                                        if(get_field( "price-old", $post->ID ))
                                        {
                                          ?>
                                            <b class="price-old"><?php echo number_format(get_field( "price-old", $post->ID ), 0, '.', '.');?> VNĐ</b>
                                          <?php
                                        }
                                      ?>
                                     </span>
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

        ?>

        </div>

            <?php
                if($total >= $posts_per_page)
                {
                    ?>
                        <div class="wrap-more">
                            <Button id="more">Xem thêm</Button>
                        </div>
                    <?php
                }
            ?>
           
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
                                                                <span><b>Liên hệ</b></span>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <span>
                                                                    <b class="price-new"><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?></b><b class="type-money"> VNĐ</b>
                                                                    <?php 
                                                                        if(get_field( "price-old", $post->ID ))
                                                                        {
                                                                        ?>
                                                                            <b class="price-old"><?php echo number_format(get_field( "price-old", $post->ID ), 0, '.', '.');?> VNĐ</b>
                                                                        <?php
                                                                        }
                                                                    ?>
                                                                    </span>
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