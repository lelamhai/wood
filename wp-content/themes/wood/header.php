<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/slick/slick.css">
		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/slick/slick-theme.css">

		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/common.css">

		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/home/home.css">
		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/home/responsive.css">

		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/listproduct/list-product.css">
		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/listproduct/responsive.css">

		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/detail/detail.css">
		<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/detail/responsive.css">

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="img-left">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/common/img_left.png" alt="">
		</div>

		<div class="img-right">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/common/img_left.png" alt="">
		</div>


		<div class="container">
    	<div class="header">
			<div class="home-banner">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/common/img_header.jpg" alt="" class="home-header-banner">
			</div>
			<div class="home-menu">
				<nav class="navbar navbar-default navbar-default-custom">
				<div class="container-fluid container-fluid-custom">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand navbar-brand-custom" href="#">Project name</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse navbar-collapse-custom" aria-expanded="false"
					style="height: 1px;">
					<ul class="nav navbar-nav ">
						<li class="active-custom"><a href="#">Trang Chủ</a></li>
						<li><a href="#">Sàn Gỗ</a></li>
						<li><a href="#">Sàn Nhựa</a></li>
						<li><a href="#">Giấy Dán Tường</a></li>
						<li><a href="#">Tấm Nhựa PVC</a></li>
						<li><a href="#">Lam Gỗ</a></li>
						<li><a href="#">Làm Sóng</a></li>
						<li><a href="#">Thiết kế</a></li>
						<li><a href="#">Thi Công</a></li>
					</ul>
					</div>
				</nav>
			</div>

			<div class="wrap-slider">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
		
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
		
					<div class="item active">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/slider1.jpg" alt="">
					</div>
		
					<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/slider2.jpg" alt="">
					</div>
		
					<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/slider3.jpg" alt="">
					</div>
					<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/slider4.jpg" alt="">
					</div>
		
				</div>
		
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
    	</div>
    <div class="main">
<main>