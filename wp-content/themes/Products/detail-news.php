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
                                <div class="facebook">Chia sẻ: 
                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_facebook.png" alt=""></a>
                                </div>
                            </span>
                        </div>
        </div>
    </div>
           
<?php
get_footer();