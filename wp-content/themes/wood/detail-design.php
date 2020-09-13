<?php
 /*
  Template Name: detail-design
 */
?>

<?php
get_header();
?>
    <div class="breadcrumbs">
        <span><a href="../../">Trang Chủ</a><b> > </b><a href="category/../../">Sàn Gõ</a><b> > </b><a><?php the_title();?></a></span>
    </div>

    <div class="wrap-detail-design">
        <div class="title"><h2><?php the_title();?></h2></div>
        <div class="detail-design-content">
            <?php the_content();?>
        </div>
    </div>
           
<?php
get_footer();