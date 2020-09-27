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
		<!-- <div class="img-left">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/common/banner-left.jpg" alt="">
		</div> -->

		<!--<div class="img-right">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/common/img_left.png" alt="">
		</div> -->


		<div class="container">
    	<div class="header">
			<div class="home-banner">
			<div class="row wrap-banner">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="header-logo">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/img_logo.svg" alt=""></a>
					</div>
				</div>
				
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="banner-info">

						<div class="banner-title">
							<h2>CÔNG TY TNHH NỘI THẤT LIÊN KẾT HD</h2>
						</div>

						<div class="bannrer-text-red">
							<h1 class="text-outline">NỘI THẤT HD</h1>
						</div>

						<div class="wrap-banner-phone">
							<span><span><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_call.png" alt=""></span><span class="phone-text">0708220000</span></span>
						</div>

						<div class="wrap-banner-address">
							<span><span ><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_home.png" alt=""></span><span class="address-text">86 CHU VĂN AN - P.26 - Q.BÌNH THẠNH - TP.HCM</span></span>
						</div>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="banner-search">
						<form action="/search" method="get">
							<div class="text-search"><input type="text" name="search" placeholder="Tìm kiếm"></div>
							<div class="button-search"><button>Tìm</button></div>
						</form>
					</div>
				</div>
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
						<?php echo do_shortcode('[main_menu]'); ?>
					</ul>
                    
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
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/1.jpg" alt="">
					</div>
		
					<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/2.jpg" alt="">
					</div>
		
					<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/3.jpg" alt="">
					</div>
					
					<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/home/4.jpg" alt="">
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