<?php
get_header();
?>
<style>
    .main-404 {
        text-align: center;
    }

    .wrap-image-404 {
        padding: 45px 0 30px 0; 
    }

    .wrap-text-404 {
        color: #FF3838;
        padding: 0 0 15px 0; 
    }

    .wrap-home-404 {
        color: #23527c;
        padding-bottom: 45px; 
    }
</style>

<div class="main-404">
    <div class="wrap-image-404">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/404/404.png" alt="">
    </div>

    <div class="wrap-text-404"><h4>RẤT TIẾC, TRANG BẠN TÌM KIẾM KHÔNG TỒN TẠI</h4></div>
    
    <div class="wrap-home-404"><h6><a href="<?php echo get_home_url(); ?>">Quay lại trang chủ</a></h6></div>
</div>
<?php
get_footer();