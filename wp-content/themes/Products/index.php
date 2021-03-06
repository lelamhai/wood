<?php
get_header();
?>

<?php
   $args = array(
    'category_name' => 'products',
    'post_status'       => 'publish',
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


<div class="selling-products wrap-category">
    <div class="wrap-title">
      <h4 class="title-h3"><a>Sản phẩm bán chạy</a></h4>
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
                                    <span><span><p>Liên hệ</p></span></span>
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
?>


<?php
 $args = array(
  'category_name' => 'san-go',
  'post_status'       => 'publish',
  'posts_per_page' => 4
); 

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
 <div class="floor-knocking wrap-category">
      <div class="wrap-title">
        <h4 class="title-h3"><a href="/category/san-go">Sàn Gỗ</a></h4>
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
                                    <span><b>Liên hệ</b></span>
                                  <?php
                                } else {
                                  ?>
                                    <span>
                                      <b class="price-new"><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?></b> <b class="type-money"> VNĐ</b>
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
?>
        




    <?php
 $args = array(
  'category_name' => 'san-nhua',
  'post_status'       => 'publish',
  'posts_per_page' => 4
); 

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
 <div class="Plastic-flooring wrap-category">
        <div class="wrap-title">
          <h4 class="title-h3"><a href="/category/san-nhua">Sàn Nhựa</a></h4>
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
                                    <span><p>Liên hệ</p></span>
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
?>





    <?php
 $args = array(
  'category_name' => 'giay-dan-tuong',
  'post_status'       => 'publish',
  'posts_per_page' => 4
); 

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
   <div class="Plastic-flooring wrap-category">
        <div class="wrap-title">
          <h4 class="title-h3"><a href="/category/giay-dan-tuong">Giấy dán tường</a></h4>
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
                                    <span><p>Liên hệ</p></span>
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
?>
        



<?php
$args = array(
  'category_name' => 'tam-nhua-pvc',
  'post_status'       => 'publish',
  'posts_per_page' => 4
);  

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
   <div class="sheet-pvc wrap-category">
        <div class="wrap-title">
          <h4 class="title-h3"><a href="/category/tam-nhua-pvc">Tấm nhựa PVC</a></h4>
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
                                    <span><p>Liên hệ</p></span>
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
?>
       




<?php
$args = array(
  'category_name' => 'lam-go-lam-song',
  'post_status'       => 'publish',
  'posts_per_page' => 4
);  

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
    <div class="blue-flooring wrap-category">
        <div class="wrap-title">
          <h4 class="title-h3"><a href="/category/lam-go-lam-song">Lam gỗ - Lam Sóng</a></h4>
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
                                    <span><p>Liên hệ</p></span>
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
?>
       

<?php
$args = array(
  'category_name' => 'thiet-ke',
  'post_status'       => 'publish',
  'posts_per_page' => 4
);  

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
   <div class="blue-live-flooring wrap-category">
        <div class="wrap-title">
          <h4 class="title-h3"><a href="/category/thiet-ke">Thiết kế</a></h4>
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
                        <div class="wrap-content wrap-news">
                          <div class="item-title">
                            <p><?php the_title();?></p>
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
?>



<?php
$args = array(
  'category_name' => 'thi-cong',
  'post_status'       => 'publish',
  'posts_per_page' => 4
);  

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
?>
   <div class="blue-live-flooring wrap-category">
        <div class="wrap-title">
          <h4 class="title-h3"><a href="/category/thi-cong">Thi công</a></h4>
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
                        <div class="wrap-content wrap-news">
                          <div class="item-title">
                            <p><?php the_title();?></p>
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
?>
       


<?php
get_footer();