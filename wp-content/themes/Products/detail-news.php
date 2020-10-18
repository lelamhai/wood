<?php
 /*
  Template Name: detail-news
 */
?>

<?php
get_header();
?>
    <div class="breadcrumbs">
        <span><a href="../../">Trang Chủ</a><b> > </b><a href="category/../../"><?php echo $category[0]->name?></a><b> > </b><a><?php the_title();?></a></span>
    </div>

    <div class="wrap-detail-design">
        <div class="title"><h2><?php the_title();?></h2></div>
        <div class="detail-design-content">
            <div><?php the_content();?></div>
            <div class="share">
                            <span>
                                <div class="text-share">Chia sẻ:</div> 
                                <div class="facebook"> 
                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_facebook.png" alt=""></a>
                                </div>
                                <div class="zalo-share-button" data-href="<?php the_permalink();?>" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=true>
                                    <a>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_zalo.png" alt="">
                                    </a>
                                </div>
                            </span>
                        </div>
        </div>
    </div>
           
<?php
get_footer();