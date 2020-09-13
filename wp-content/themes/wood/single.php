<?php 
if (have_posts()) : the_post();
$category = get_the_category();
if ($category[0]->slug === "thi-cong" || $category[0]->slug === "thiet-ke") 
{
    include 'detail-design.php';

} else {
    include 'detail.php';

}
endif;
?>