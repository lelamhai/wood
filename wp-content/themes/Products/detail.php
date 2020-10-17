<?php
 /*
  Template Name: detail
 */
?>

<?php
get_header();
?>
            <div class="breadcrumbs">
                <span><a href="../../">Trang Chủ</a><b> > </b><a href="category/../../"><?php echo $category[0]->name?></a><b> > </b><a><?php the_title();?></a></span>
            </div>

            <div class="wrap-detail-content">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <?php 
                            $images = get_field('gallery');
                            
                        ?>
                           <?php
                           if( $images ):
                            ?>
                            
                            
                            <div class="detail-img-left slider slider-for"><?php

                                while( have_rows('gallery') ) : the_row();

                                    // Load sub field value.
                                    $sub_value = get_sub_field('image');
                                    ?>
                                    <div>
                                        <img src="<?php echo esc_url($sub_value['sizes']['item_detail_458x250']); ?>" alt="">
                                    </div>
                                    <?php
                                    // var_dump($sub_value);exit;
                                    // Do something...

                                // End loop.
                                endwhile;
                            ?>
                        </div>
                            <?php
                           endif;
                           ?>
                            
                       
                            <?php
                            $images = get_field('gallery');
                            if( $images ):
                                ?> 
                            <div class="detail-small slider slider-nav">
                                <?php
                                    while( have_rows('gallery') ) : the_row();
                                    // Load sub field value.
                                    $sub_value = get_sub_field('image');
                                    ?>
                                        <div class="item-small-galley">
                                            <img src="<?php echo esc_url($sub_value['sizes']['item_239x238']); ?>" alt="">
                                        </div>
                                    <?php
                                    // var_dump($sub_value);exit;
                                    // Do something...

                                // End loop.
                                endwhile;
                                    
                                ?>
                            </div>
                                
                                <?php
                            endif;
                           ?>

                           
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="detail-content-right">
                            <div class="title"><h2><?php the_title();?></h2></div>
							
							 <?php
                              if(get_field( "check-contact", $post->ID ))
                              {
                                ?>
                                  <div class="price"><span><b class="title-price"> Giá bán: </b> <b class="value-price">Liên hệ</b></span></div>

                                <?php
                              } else {
                                  if(get_field( "price", $post->ID ) )
                                  {
                                    ?>
                                        <div class="price"><span><b class="title-price"> Giá bán: </b> <b class="value-price"><?php echo number_format(get_field( "price", $post->ID ), 0, '.', '.');?></b> <span class="type-money">VNĐ</span></div>
                                    <?php
                                  }
                              }
                          ?>
                            
                            <?php
                            $images = get_field('gallery');
                            $id = 1;
                            $postFirst = true;
                            if( $images ):
                                ?>
                                    <div class="wrap-description">
                                        <?php
                                        while( have_rows('gallery') ) : the_row();
                                            $sub_value = get_sub_field('description');
                                            if($postFirst)
                                            {
                                                ?>
                                                    <div class="description-short active-description" id ="id-<?php echo $id?>">
                                                        <?php echo $sub_value;?>
                                                    </div>
                                                <?php
                                                $postFirst = false;
                                            } else {
                                                ?>
                                                    <div class="description-short" id ="id-<?php echo $id?>">
                                                        <?php echo $sub_value;?>
                                                    </div>
                                                <?php
                                            }
                                           
                                            $id ++;
                                        endwhile;
                                ?></div><?php
                            endif;
                           ?>


                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-tabs">

                <ul class="nav nav-tabs custom-nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#detail">Chi tiết sản phẩm</a></li>
                    <li><a data-toggle="tab" href="#contact">Liên hệ</a></li>
                   
                </ul>

                <div class="tab-content">
                    <div id="detail" class="tab-pane fade in active">
                        <div><?php the_content();?></div>
                        <div class="share">
                            <span>
                                <div class="text-share">Chia sẻ:</div> 
                                <div class="facebook"> 
                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_facebook.png" alt=""></a>
                                </div>
                                <div class="zalo-share-button" data-href="<?php the_permalink();?>" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=true>
                                    <a href="">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_zalo.png" alt="">
                                    </a>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div id="contact" class="tab-pane fade">
                        <div class="wrap-content-contact">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="wrap-address"><span><b class="title-address">Địa chỉ: </b> <b class="value-address">86 Chu Văn An - P.26 - Bình Thạnh</b></span></div>
                                    <div class="wrap-google-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.008500458135!2d106.70740961533426!3d10.810660361515689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752897d84afee7%3A0x8379470bd61ad378!2zODYgQ2h1IFbEg24gQW4sIFBoxrDhu51uZyAyNiwgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1598722145188!5m2!1sen!2s"
                                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                            aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="wrap-form">
                                        <?php echo do_shortcode( '[contact-form-7 id="64" title="Liên Hệ"]' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                </div>
            </div>
<?php
get_footer();

