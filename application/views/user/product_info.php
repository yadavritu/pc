<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_fastfood/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 11:42:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="http://demo.designshopify.com/" />
	<meta name="theme-color" content="#7796A8">
	<meta name="description" content="" />
	<title>
	Products -Pizza corner
	</title>
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link href="<?= base_url(); ?>assets_client/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">  
	<link href="<?= base_url(); ?>assets_client/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/fonts.googleapis.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/icon-font.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/social-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/cs.styles.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/font-icon.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/slideshow-fade.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/themepunch.revolution.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client/stylesheets/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/classie.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/application-appear.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/cs.script.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.currencies.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.zoom.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/linkOptionSelectors.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/scripts.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/social-buttons.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets_client/javascripts/jquery.fancybox.js"></script>

</head>

<body class="fastfood_1" >

	<!--Header-->
	<header id="top" class="header clearfix">
		<div id="shopify-section-theme-header" class="shopify-section">
			<div data-section-id="theme-header" data-section-type="header-section">
				<section class="main-header">
					<div class="main-header-wrapper">
						<div class="container clearfix">
							<div class="row">
								<div class="main-header-inner">
									<div class="nav-logo">
									<?php foreach($logo as $l) {?>
										<?= $l->logo_image;?>
										<h1 style="display:none"><a href="http://demo.designshopify.com/">Fast Food</a></h1>
									<?php } ?>
									</div>
									<div class="nav-top">
										<div class="nav-menu">
									<ul class="navigation-links ">
									<li><a href="<?= base_url();?>Pizza"><span>HOME<span></a><li>	
									<?php foreach($menu as $m) { ?>
									<li class="nav-item dropdown navigation">
									<a href="<?=base_url();?>Pizza/collection/?c=<?=$m->m_id;?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
									<span><?=$m->m_name;?></span>
									<i class="fa fa-angle-down"></i>
									<i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
									<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
									</a>
									<!--submenu fetch hedear page start-->
									<?php $sub=$this1->sub_head($m->m_id); if(count($sub)>0){ 	?>
									<ul class="dropdown-menu">
									<?php foreach($sub as $smenu){ ?>
									<li class="li-sub-mega">
									<a tabindex="-1" href="<?=base_url();?>Pizza/collection1/?c=<?=$smenu->s_id;?>"><?= $smenu->sub_name; ?></a>
									</li>
									<?php } ?>
									</ul>
									<?php } ?>
									<!--submenu fetch end -->
									</li>
									<?php } ?>
									<li><a href="<?= base_url();?>Pizza/about"><span>About Us<span></a><li>		
									</ul>
										</div>
										<div class="nav-icon">
											
											<div class="icon_cart">
												<div class="m_cart-group">
													<a class="cart dropdown-toggle dropdown-link" href="<?= base_url();?>Pizza/show_cart">
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
														<div class="num-items-in-cart">
															<div class="items-cart">
																<div class="num-items-in-cart">
																	<i class="fa fa-shopping-cart"></i>
																	<span class="cart_text"> 
																		Cart <span class="number"></span>                       
																	</span>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div class="icon_accounts">
												<div class="m_login-account">
													<span class="dropdown-toggle login-icon" data-toggle="dropdown">
														<i class="fa fa-user"></i>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													</span>
													<div class="m_dropdown-login dropdown-menu login-content">
														<div class="clearfix">
															<div class="login-register-content">
																<ul class="nav nav-tabs">
																	<li class="account-item-title active">
																		<a href="<?=base_url();?>Pizza/login" >
																			Login
																		</a>
																	</li>
																
																</ul>
																</div>
													</div>
												</div>
											</div>
										</div>
										<div class="icon_accounts">
												<div class="m_login-account">
													<span class="dropdown-toggle login-icon">
														<i title="profile" class="fa fa-user"></i>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													</span>
													<div class="m_dropdown-login dropdown-menu login-content">
														<div class="clearfix">
															<div class="login-register-content">
																	<ul class="nav nav-tabs">
																
																	<li class="account-item-title active">
																		<a href="<?=base_url();?>Pizza/profile" >
																		Profile
																		</a>
																	</li>
																
																<li class="account-item-title active">
																		<a href="<?=base_url();?>Pizza/change_password" >
																			Change password
																		</a>
																	</li>
																
																
																</ul>
															</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="navMobile-navigation">
										<div class="navMobile-logo">
											<a href="index.html"><img class="header-logo-image" src="<?= base_url(); ?>assets_client/images/logo.png" alt="" title="Fast Food" /></a>
										</div>
										<div class="group_mobile_right">
											<div class="nav-icon">
												<div class="m_search search-tablet-icon">
													<span class="dropdownMobile-toggle search-dropdown">
														<span class="icon-dropdown cs-icon icon-search" data-class="cs-icon icon-search"></span>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
													</span>
													<div class="m_dropdown-search dropdown-menu search-content">
														<form class="search" action="http://demo.designshopify.com/html_fastfood/search.html">
															<input type="hidden" name="type" value="product" />
															<input type="text" name="q" class="search_box" placeholder="search our store" value="" />
															<span class="search-clear cs-icon icon-close"></span>
															<button class="search-submit" type="submit">
																<span class="cs-icon icon-search"></span>
															</button>
														</form>
													</div>
												</div>
												<div class="icon_cart">
													<div class="m_cart-group">
														<a class="cart dropdownMobile-toggle dropdown-link">
															<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
															<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
															<div class="num-items-in-cart">
																<div class="items-cart">
																	<div class="num-items-in-cart">
																		<span class="cs-icon icon-bag"></span>
																		<span class="cart_text">                                              
																		<span class="number">2</span>                        
																		</span>
																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="icon_accounts">
													<div class="m_login-account">
														<span class="dropdownMobile-toggle login-icon">
															<i class="icon-dropdown cs-icon icon-ellipsis" data-class="cs-icon icon-ellipsis" aria-hidden="true"></i>
															<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
															<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
														</span>
														<div class="m_dropdown-login dropdown-menu login-content">
															<div class="clearfix">
																<div class="login-register-content">
																	<ul class="nav nav-tabs">
																		<li class="account-item-title active">
																			<a href="#account-login-mobile" data-toggle="tab">
																				Login
																			</a>
																		</li>
																		<li class="account-item-title">
																			<a href="#account-register-mobile" data-toggle="tab">
																				Register
																			</a>
																		</li>
																	</ul>
																	<div class="tab-content group_form">
																		<div class="tab-pane active account-item-content" id="account-login-mobile">
																			<form method="post" action="http://demo.designshopify.com/html_fastfood/login.html" id="customer_login_mobile" accept-charset="UTF-8">
																				<div class="clearfix large_form form-item">
																					<input type="email" value="" name="customer[email]" class="form-control" placeholder="Email Address *" />
																				</div>
																				<div class="clearfix large_form form-password form-item">
																					<input type="password" value="" name="customer[password]" class="form-control password" placeholder="Password *" />
																					<span class="cs-icon icon-eye"></span>
																				</div>
																				<div class="action_bottom">
																					<button class="_btn" type="submit">Login</button>
																					<a href="login-recover.html"><span class="red"></span> Forgot your password?</a>
																				</div>
																			</form>
																		</div>
																		<div class="tab-pane account-item-content " id="account-register-mobile">
																			<form method="post" action="http://demo.designshopify.com/html_fastfood/register.html" id="create_customer_mobile" accept-charset="UTF-8">
																				<div class="clearfix large_form form-item">
																					<input placeholder="First Name" type="text" value="" name="customer[first_name]" class="text" size="30" />
																				</div>
																				<div class="clearfix large_form form-item">
																					<input placeholder="Last Name" type="text" value="" name="customer[last_name]" class="text" size="30" />
																				</div>
																				<div class="clearfix large_form form-item">
																					<input placeholder="Email" type="email" value="" name="customer[email]" class="text" size="30" />
																				</div>
																				<div class="clearfix large_form form-password form-item">
																					<input placeholder="Password" type="password" value="" name="customer[password]" class="password text" size="30" />
																					<span class="cs-icon icon-eye"></span>
																				</div>
																				<div class="action_bottom">
																					<button class="_btn" type="submit">Create</button>
																				</div>
																			</form>
																		</div>
																	</div>
																</div>
																<ul class="wish-compare-content">
																	<li class="link-item"><a href="wish-list.html">My Wishlist</a></li>
																	<li class="link-item"><a href="compare.html">My Compare</a></li>
																</ul>
																<ul class="currencies currencies-content">
																	<li class="currency-USD active">
																		<a href="javascript:;">USD</a>
																		<input type="hidden" value="USD" />
																	</li>
																	<li class="currency-GBP">
																		<a href="javascript:;">GBP</a>
																		<input type="hidden" value="GBP" />
																	</li>
																	<li class="currency-EUR">
																		<a href="javascript:;">EUR</a>
																		<input type="hidden" value="EUR" />
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="navMobile-menu">
												<div class="group_navbtn">
													<a href="javascript:void(0)" class="dropdown-toggle-navigation">                  
														<span class="cs-icon icon-menu"></span>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													</a>
													<div class="navigation_dropdown_scroll dropdown-menu">
														<ul class="navigation_links_mobile">
															<li class="nav-item navigation navigation_mobile">
																<a href="" class="menu-mobile-link">
																	Hamburger
																</a>
																<a href="javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Whopper</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Chicken Burger</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Beef Burger</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">DOUBLE WHOPPER</a>
																	</li>
																</ul>
															</li>
															<li class="nav-item navigation navigation_mobile">
																<a href="" class="menu-mobile-link">
																	Pizza
																</a>
																<a href="javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Popular pizzas</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Meats</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Chicken</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="">Veggie</a>
																	</li>
																</ul>
															</li>
															<li class="nav-item">
																<a href="">
																	Fast food
																</a>
															</li>
															<li class="nav-item">
																<a href="">
																	Drinks
																</a>
															</li>
															<li class="nav-item">
																<a href="super-deal.html">
																	Combo buy
																</a>
															</li>
															<li class="nav-item navigation navigation_mobile">
																<a href="contact.html" class="menu-mobile-link">
																	Pages
																</a>
																<a href="javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="blog.html">Blogs</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="about-us.html">About Us</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="contact.html">Contact</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="faqs.html">FAQs</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="lookbook.html">Lookbook</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="super-deal.html">Super Deal</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="404.html">404</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections-all.html">All Collections</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<script>
				function addaffix(scr) {
					if ($(window).innerWidth() >= 992) {
						if (scr > 153) {
							if (!$('#top').hasClass('affix')) {
								$('#top').addClass('affix').addClass('fadeInDown animated');
							}
						} else {
							if ($('#top').hasClass('affix')) {
								$('#top').removeClass('affix').removeClass('fadeInDown animated');
							}
						}
					} else if ($(window).innerWidth() < 992 && $(window).innerWidth() > 767) {
						if (scr > 95) {
							if (!$('#top').hasClass('affix')) {
								$('#top').addClass('affix').addClass('fadeInDown animated');
							}
						} else {
							if ($('#top').hasClass('affix')) {
								$('#top').removeClass('affix').removeClass('fadeInDown animated');
							}
						}
					} else {
						if (scr > 45) {
							if (!$('#top').hasClass('affix')) {
								$('#top').addClass('affix').addClass('');
							}
						} else {
							if ($('#top').hasClass('affix')) {
								$('#top').removeClass('affix').removeClass('');
							}
						}
					}
				}
				$(window).scroll(function() {
					"use strict"; 
					var scrollTop = $(this).scrollTop();
					addaffix(scrollTop);
				});
				$(window).resize(function() {
					"use strict"; 
					var scrollTop = $(this).scrollTop();
					addaffix(scrollTop);
				});
			</script>
		</div>
	</header>
	<div class="fix-sticky"></div>
	
	<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="heading-content">
				<div class="heading-wrapper">
					<div class="container">
						<div class="row">
							<div class="page-heading-inner heading-group">
								<div class="breadcrumb-group">
									<h1 class="hidden">Products</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" title="Fast Food" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="" title="Products" itemprop="url"><span itemprop="title">Products</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="product-detail-layout">
				<div class="product-detail-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-product-template" class="shopify-section">
								<div class="product-detail-inner" itemscope="" itemtype="http://schema.org/Product">
									<meta itemprop="name" content="Extra Crispy">
									<meta itemprop="url" content="./">
									<meta itemprop="image" content="<?= base_url(); ?>assets_client/images/product_10.jpg">
									<div class="product-detail-content col-sm-9">
										<div id="product" class="extra-crispy-1 detail-content">
											<!--pro info -->
											<?php foreach($cart_data as $pro){}?>
											<div class="col-md-12 info-detail-pro clearfix">
												<div class="col-md-6" id="product-image">
													<div id="featuted-image" class="image featured" style="position: static; overflow: visible;">
														
														<?php $h=explode(",",$pro->p_img);?>
																				<?= str_ireplace("height='50' width='50'","class='front' height='400' width='400'",$h[0]);?>
													</div>
													
													
													
													<div id="gallery-images" class="thumbs clearfix gallery-images-layout">
														<div class="gallery-images-inner">
															<div class="show-image-load show-load-detail" style="display: none;">
																<div class="show-image-load-inner">
																	<i class="fa fa-spinner fa-pulse fa-2x"></i>
																</div>
															</div>
															
															<div class="slider-3itemsc vertical-image-content">
																<?php foreach($cart_data as $loop){?>
																 <?php $img=explode(",",$loop->p_img);
																				if(count($img)>1){	
																				$re=str_ireplace("<img src='"," ",$img[0]);
																					$img_array=explode("'",$re);
																					$re1=str_ireplace("<img src='"," ",$img[1]);
																					$img_array1=explode("'",$re1);
																					$re2=str_ireplace("<img src='"," ",$img[2]);
																					$img_array2=explode("'",$re2);
																			?>
																<div class="image-vertical image ">
																	<a href="<?= $img_array[0];?>" class="cloud-zoom-gallery">
																		
																			 <?= str_ireplace("height='50' width='50'",'height="100" width="100"  class="product-img-primary"',$img[0]); ?>
																			
																	</a>
																	<p></p>
																</div>
																<div class="image-vertical image ">
																	<a href="<?=$img_array1[0]; ?>" class="cloud-zoom-gallery">
																		
																			 <?= str_ireplace("height='50' width='50'",'height="100" width="100"  class="product-img-primary"',$img[1]); ?>
																			
																	</a>
																	<p></p>
																</div>
																<div class="image-vertical image ">
																		
																	<a href="<?= $img_array2[0]; ?>" class="cloud-zoom-gallery">
																			 <?= str_ireplace("height='50' width='50'",'height="100" width="100"  class="product-img-primary"',$img[2]); ?>
																			
																	</a>
																	<p></p>
																</div>
																 <?php }else{ ?>
																			  <?= str_ireplace("height='100' width='100'",'class="product-img-primary"',$img[0]); ?>
																		   <?php } ?>	
																<?php }?>
															</div>
															
														</div>
													</div>
												</div>
												<div class="col-md-6" id="product-information">
													<!--satyam product info -->
													<h1 itemprop="name" class="title"><?= $pro->p_name;?></h1>
													<div class="rating-content">
														<div class="rating-description">
															<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i>
															<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>
															<i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
															</span>											
															<span class="review-link"><a href="#review">Write a review</a></span>
														</div>
													</div>
													<script>
														$('.review-link a').click(function(e) {
															e.preventDefault();
															$('html, body').animate({
																scrollTop: $("#tabs-information").offset().top - 120
															}, 800);
															$('.nav-tabs a[href="#review"]').tab('show');
															return false;
														});
													</script>
													<form id="add-item-form" action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants">
														<div class="product-options " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
															<meta itemprop="priceCurrency" content="USD">
															<link itemprop="availability" href="http://schema.org/InStock">
															<div class="product-type">
																<div class="select clearfix">
																	<div class="selector-wrapper variant-wrapper-size">
																	
																		<label for="product-select-option-0">Size</label>
																		<?php foreach($cart_data as $data) { ?>
																		<select class="single-option-selector" data-option="option1" id="product-select-option-0"><option value="Small"><?=$data->p_pizza_size;?></option></select>
																		<?php } ?>
																	</div>
																
																</div>
																<div class="swatch-variant swatch color clearfix" data-option-index="1">
																	<script>
																		$(function() {
																			$('.swatch-element').hover(
																				function() {
																					$(this).addClass("hovered");
																				},
																				function() {
																					$(this).removeClass("hovered");
																				});

																			$(".swatch-element").click(function() {
																				if (!$(this).hasClass('active')) {
																					$(this).parent().find(".swatch-element.active").removeClass("active");
																					$(this).addClass("active");
																				}
																			});
																		});
																	</script>
																</div>
															</div>
														
															<div class="product-price">
																<meta itemprop="price" content="10.00">
																<h2 class="price" id="price-preview"><span class="money" data-currency-usd="$10.00" data-currency="USD"><i class="fa fa-rupee"></i> <?= $pro->p_price;?></span></h2>
															</div>
															<div class="purchase-section multiple">
<script>
$(document).ready(function(){
	// disply_cart();
	$("#cart").click(function(){
		
			var p_id=$(this).data("productid");
			var p_name=$(this).data("productname");
			var p_price=$(this).data("productprize");
			var p_img=$(this).data("productimg");
			
			$.ajax({
				url:"<?= base_url(); ?>Pizza/cart_insert",
				method:"post",
				data:{id:p_id,name:p_name,price:p_price,img:p_img}
			})
			.done(function(msg){
				 $("#getmsg").html(msg);
				$("#mymodel").modal('show');
				disply_cart();
			});
	})	;
	
	
	function disply_cart()
	{
			$.ajax({
				url:"<?= base_url(); ?>Pizza/shoppingcart",
				method:"post",
				data:{}
			})
			.done(function(msg){
				
				 $("#cart_display").html(msg);
				
			});
	
	}

});
</script>
																
																<div class="purchase">
																	<a   id="cart" data-productid="<?= $pro->p_id; ?>" data-productname="<?=  $pro->p_name; ?>"
								                              data-productprize="<?=  $pro->p_price-($pro->p_price * $pro->p_discount)/100 ?>"
								                              data-productimg="<?=$img_array[0]?>" class="_btn add-to-cart" type="submit" name="add"><span><i class="cs-icon icon-cart"></i>Add to cart</span></a>
																	
																	<div id="cart-animation" style="display:none">1</div>
																</div>
															</div>
														</div>
													</form>
													
												
												</div>
											</div>
											<!--end pro info -->
											<div class="may-like-products col-sm-12">
												<div class="sub-title">
													<h2>You May Also Like</h2>
												</div>
												<div class="may-like-content-inner">
													<div class="may-like-content">
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix product-circle">
																<div class="row-left">
																	<a href="" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="<?= base_url(); ?>assets_client/images/product_1.jpg" class="img-responsive front" alt="Juice Ice Tea">
																			<div class="mask"></div>
																		</div>
																	</a>
																	<div class="hover-mask">
																		<div class="group-mask">
																			<div class="inner-mask">
																				<div class="group-actionbutton">
																					<ul class="quickview-wishlist-wrapper">
																						<li class="wishlist">
																							<a title="Add To Wishlist" class="wishlist wishlist-juice-ice-tea" data-wishlisthandle="juice-ice-tea"><span class="cs-icon icon-heart"></span></a>
																						</li>
																						<li class="quickview hidden-xs hidden-sm">
																							<div class="product-ajax-cart">
																								<span class="overlay_mask"></span>
																								<div data-handle="juice-ice-tea" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																									<a class=""><span class="cs-icon icon-eye"></span></a>
																								</div>
																							</div>
																						</li>
																						<li class="compare">
																							<a title="Add To Compare" class="compare compare-juice-ice-tea" data-comparehandle="juice-ice-tea"><span class="cs-icon icon-retweet2"></span></a>
																						</li>
																					</ul>
																				</div>
																				<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart">Add to cart</button>
																					</div>
																				</form>
																			</div>
																			<!--inner-mask-->
																		</div>
																		<!--Group mask-->
																	</div>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span>New</span>
																		</div>
																	</div>
																</div>
																<div class="row-right animMix">
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-title"><a class="title-5" href="">Juice Ice Tea</a></div>
																	<div class="product-price">
																		<span class="price">
																			<span class="money" data-currency-usd="$20.00">$20.00</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														</div>
												</div>
											</div>
											<div id="tabs-information" class="col-md-12 tabs-information">
												<div class="col-md-12 tabs-title">
													<ul class="nav nav-tabs tabs-left sideways">
														<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
														<li><a href="#review" data-toggle="tab">Reviews</a></li>
														</ul>
												</div>
												<div class="col-md-12 tabs-content">
													<div class="tab-content">
														<div class="tab-pane active" id="desc">
															<p>Lorem Ipsum. </p>
															<ul class="angle-right">
																<li>Version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li>
																</ul>
														</div>
														<div class="tab-pane fade " id="review">
															<div id="customer_review">
																<div class="preview_content">
																	<div id="shopify-product-reviews" data-id="6537875078">
																		<div class="spr-container">
																			<div class="spr-header">
																				<h2 class="spr-header-title">Customer Reviews</h2>
																				<div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
																					<meta itemprop="itemreviewed" content="Chanel, the cheetah">
																					<meta itemprop="votes" content="1">
																					<span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
																						<meta itemprop="average" content="5.0">
																						<meta itemprop="best" content="5">
																						<meta itemprop="worst" content="1">
																						<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>
																					</span>
																					<span class="spr-summary-caption">
																						<span class="spr-summary-actions-togglereviews">Based on 1 review</span>
																					</span>
																					<span class="spr-summary-actions">
																						<a href="#" class="spr-summary-actions-newreview" onclick="active_review_form();return false">Write a review</a>
																					</span>
																				</div>
																			</div>
																			<div class="spr-content">
																				<div class="spr-form" id="form_6537875078" style="display: none;">
																					<form method="post" action="http://demo.designshopify.com/html_fastfood/" id="new-review-form_6537875078" class="new-review-form" onsubmit="SPR.submitForm(this);return false;"><input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="6537875078">
																						<h3 class="spr-form-title">Write a review</h3>
																						<fieldset class="spr-form-contact">
																							<div class="spr-form-contact-name">
																								<label class="spr-form-label" for="review_author_6537875078">Name</label>
																								<input class="spr-form-input spr-form-input-text " id="review_author_6537875078" type="text" name="review[author]" value="" placeholder="Enter your name">
																							</div>
																							<div class="spr-form-contact-email">
																								<label class="spr-form-label" for="review_email_6537875078">Email</label>
																								<input class="spr-form-input spr-form-input-email " id="review_email_6537875078" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
																							</div>
																						</fieldset>
																						<fieldset class="spr-form-review">
																							<div class="spr-form-review-rating">
																								<label class="spr-form-label">Rating</label>
																								<div class="spr-form-input spr-starrating ">
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
																								</div>
																							</div>
																							<div class="spr-form-review-title">
																								<label class="spr-form-label" for="review_title_6537875078">Review Title</label>
																								<input class="spr-form-input spr-form-input-text " id="review_title_6537875078" type="text" name="review[title]" value="" placeholder="Give your review a title">
																							</div>
																							<div class="spr-form-review-body">
																								<label class="spr-form-label" for="review_body_6537875078">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
																								<div class="spr-form-input">
																									<textarea class="spr-form-input spr-form-input-textarea " id="review_body_6537875078" data-product-id="6537875078" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>

																								</div>
																							</div>
																						</fieldset>
																						<fieldset class="spr-form-actions">
																							<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
																						</fieldset>
																					</form>
																				</div>
																				<div class="spr-reviews" id="reviews_6537875078">
																					<div class="spr-review" id="spr-review-7003642">
																						<div class="spr-review-header">
																							<span class="spr-starratings spr-review-header-starratings"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span>
																							<h3 class="spr-review-header-title">FRENCH CONNECTION, SUNDAY BLISS BAG</h3>
																							<span class="spr-review-header-byline"><strong>Jin Alkaid</strong> on <strong>Jun 10, 2017</strong></span>
																						</div>
																						<div class="spr-review-content">
																							<p class="spr-review-content-body">FRENCH CONNECTION, SUNDAY BLISS BAG</p>
																						</div>
																						<div class="spr-review-footer">
																							<a href="#" class="spr-review-reportreview" onclick="SPR.reportReview(7003642);return false" id="report_7003642" data-msg="This review has been reported">Report as Inappropriate</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
												<?php 		
		if(get_cookie('reco')!='')
		{
			$a=get_cookie('reco');
		$r_cat=$this1->get_categories_record($a);
		
		?>
								
											<div class="related-products col-sm-12">
											
												<div class="sub-title">
													<h2>Recommended Based on Your Browsing History</h2>
												</div>
												<div class="group-related">
													<div class="group-related-inner">
														<div class="rp-slider">
														
															<div class="row-container product list-unstyled clearfix product-circle">
																<div class="row-left">
																	<a href="" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" class="img-responsive front" alt="Coke">
																			<div class="mask"></div>
																		</div>
																	</a>
																	<div class="hover-mask">
																		<div class="group-mask">
																			<div class="inner-mask">
																				<div class="group-actionbutton">
																					<ul class="quickview-wishlist-wrapper">
																						<li class="wishlist">
																							<a title="Add To Wishlist" class="wishlist wishlist-coke" data-wishlisthandle="coke"><span class="cs-icon icon-heart"></span></a>
																						</li>
																						<li class="quickview hidden-xs hidden-sm">
																							<div class="product-ajax-cart">
																								<span class="overlay_mask"></span>
																								<div data-handle="coke" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																									<a class=""><span class="cs-icon icon-eye"></span></a>
																								</div>
																							</div>
																						</li>
																						<li class="compare">
																							<a title="Add To Compare" class="compare compare-coke" data-comparehandle="coke"><span class="cs-icon icon-retweet2"></span></a>
																						</li>
																					</ul>
																				</div>
																				<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<button class="_btn select-option" type="button" onclick="window.location='';" title="Select Option">Select options</button>
																					</div>
																				</form>
																			</div>
																			<!--inner-mask-->
																		</div>
																		<!--Group mask-->
																	</div>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span>33%</span>
																		</div>
																	</div>
																</div>
																<div class="row-right animMix">
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																		</span>
																	</div>
																	<div class="product-title"><a class="title-5" href="">Coke</a></div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$10.00">$10.00</span></span>
																		<del class="price_compare"> <span class="money" data-currency-usd="$15.00">$15.00</span></del>
																	</div>
																</div>
															</div>
															</div>
													
</div>
												</div>
												<!--END -->
											</div>
		<?php } ?>
		
										</div>
									</div>
									<div class="collection-leftsidebar sidebar col-sm-3 clearfix">
										<div class="collection-leftsidebar-group">
											<div class="sidebar-block collection-block">
												<h3 class="sidebar-title">
													<span class="text">Categories</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="list-cat">
														<li class="active"><a href="">All Collections </a></li>
														<?php foreach($menu as $data) { ?>
														<li><a href="<?=base_url();?>Pizza/collection/?c=<?=$data->m_id;?>"><?=$data->m_name;?> </a></li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<div class="sidebar-block latest-block">
												<h3 class="sidebar-title">
													<span class="text">LATEST</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<div class="latest-inner">
														<div class="products-item">
															<div class="row-container product-circle">
																<div class="product home_product">
																	<div class="row-left">
																		<a href="products.html" class="container_item">
																			<div class="hoverBorderWrapper">
																				<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" class="not-rotation img-responsive front" alt="Coke">
																				<div class="mask"></div>
																			</div>
																		</a>
																	</div>
																	<div class="row-right">
																		<div class="product-title"><a class="title-5" href="products.html">Coke</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>

																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD">$15.00</span></del>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="products-item">
															<div class="row-container product-circle">
																<div class="product home_product">
																	<div class="row-left">
																		<a href="products.html" class="container_item">
																			<div class="hoverBorderWrapper">
																				<img src="<?= base_url(); ?>assets_client/images/product_11.jpg" class="not-rotation img-responsive front" alt="Coke">
																				<div class="mask"></div>
																			</div>
																		</a>
																	</div>
																	<div class="row-right">
																		<div class="product-title"><a class="title-5" href="products.html">Extra Crispy</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>

																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD">$15.00</span></del>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="products-item">
															<div class="row-container product-circle">
																<div class="product home_product">
																	<div class="row-left">
																		<a href="products.html" class="container_item">
																			<div class="hoverBorderWrapper">
																				<img src="<?= base_url(); ?>assets_client/images/product_12.jpg" class="not-rotation img-responsive front" alt="Coke">
																				<div class="mask"></div>
																			</div>
																		</a>
																	</div>
																	<div class="row-right">
																		<div class="product-title"><a class="title-5" href="products.html">Juice Ice Tea</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD">$15.00</span></del>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- filter tags group -->
											<div class="sidebar-block filter-block">
												<h3 class="sidebar-title">
													<span class="text">Size</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="filter-content ">
														<li data-handle="small"><a href="" title="Narrow selection to products matching tag Small"><span class="fe-checkbox"></span> Small</a></li>
														<li data-handle="medium"><a href="" title="Narrow selection to products matching tag Medium"><span class="fe-checkbox"></span> Medium</a></li>
														<li data-handle="large"><a href="" title="Narrow selection to products matching tag Large"><span class="fe-checkbox"></span> Large</a></li>
													</ul>
												</div>
											</div>
											<div class="sidebar-block filter-block">
												<h3 class="sidebar-title">
													<span class="text">Price</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="filter-content ">
														<li data-handle="under-100"><a href="" title="Narrow selection to products matching tag Under $100"><span class="fe-checkbox"></span> Under $100</a></li>
														<li data-handle="100-200"><a href="" title="Narrow selection to products matching tag $100 - $200"><span class="fe-checkbox"></span> $100 - $200</a></li>
														<li data-handle="above-200"><a href="" title="Narrow selection to products matching tag Above $200"><span class="fe-checkbox"></span> Above $200</a></li>
													</ul>
												</div>
											</div>
											<div class="sidebar-block type-block">
												<h3 class="sidebar-title">
													<span class="text">Type List</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="type-content">
														<!--type-->
														<li class="">
															<a href="" title="Drink">Drink</a>
														</li>
														<li class="">
															<a href="" title="Fast food">Fast food</a>
														</li>
														<li class="">
															<a href="" title="Hamburger">Hamburger</a>
														</li>
														<li class="">
															<a href="" title="Pizza">Pizza</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="sidebar-block banner-block">
												<div class="sidebar-content">
													<a href="">
														<img src="<?= base_url(); ?>assets_client/images/collections_banner.jpg" alt="" title="">
													</a>
												</div>
											</div>
											<div class="sidebarMobile sidebar-bottom">
												<button class="sidebarMobile-clear _btn">
													Clear All
												</button>
												<button class="sidebarMobile-close _btn">
													Apply &amp; Close
												</button>
											</div>
										</div>
									</div>
								</div>
								<script type="text/javascript">
									function active_review_form(){
										if($("#form_6537875078").attr('style')=='display: none;'){
											$("#form_6537875078").css('display','block');
										}
										else {
											$("#form_6537875078").css('display','none');
										}
									}
									jQuery(document).ready(function($){
										$('#gallery-images div.image').on('click', function() {
											var $this = $(this);
											var parent = $this.parents('#gallery-images');
											parent.find('.image').removeClass('active');
											$this.addClass('active');
										});
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	
	<!-- Footer 
	<footer class="footer">
		<div id="shopify-section-theme-footer" class="shopify-section">
			<section class="footer-information-block clearfix" style="background-image:  url(<?=base_url();?>assets_client/images/bg_footer.png);">
				<div class="container">
					<div class="row">
						<div class="footer-information-inner">
							<div class="footer-information-content">
								<div class="information-item col-sm-4 not-animated" data-animate="fadeInUp" data-delay="200">
									<div class="about-content">
										<div class="logo-footer">
											<img src="<?= base_url(); ?>assets_client/images/logo_footer.png" alt="" />
										</div>
										<div class="about-caption">
											Skort Maison Martin Margiela knot ponytail cami texture tucked t-shirt. Black skirt razor pleats plaited gold collar. 
											<div class="clearfix" style="margin-bottom: 5px; "></div>
											Crop 90s spearmint indigo seam luxe washed out. Prada Saffiano cash mere crop sneaker chignon
										</div>
										<div class="about-contact">
											<div class="item">
												<span class="cs-icon icon-marker"></span><address>No 1104 Sky Tower, Las Vegas, USA</address>
											</div>
											<div class="item">
												<span class="cs-icon icon-phone"></span><a href="tel:(084)0123456789">(084) 0123 456 789</a>
											</div>
											<div class="item">
												<span class="cs-icon icon-mail"></span><a href="mailto:contac@yourcompany.com">contac@yourcompany.com</a>
											</div>
										</div>
									</div>
								</div>
								<div class="blog-group col-sm-4 not-animated" data-animate="fadeInUp" data-delay="200">
									<h5 class="footer-title">Recent Post</h5>
									<div class="blog-content">
										<div class="blogs-item">
											<div class="blogs-left">
												<a class="blogs-img" href="article.html">
													<img src="<?= base_url(); ?>assets_client/images/blog-01.jpg" alt="The art of food" />
												</a>
											</div>
											<div class="blogs-right">
												<a href="article.html" class="blogs-title clearfix">The art of food</a>
												<span class="date">Oct 26th</span>
											</div>
										</div>
										<div class="blogs-item">
											<div class="blogs-left">
												<a class="blogs-img" href="article.html">
													<img src="<?= base_url(); ?>assets_client/images/blog-04.jpg" alt="Sports luxe sandal center part pastel loafer leather skirt sneaker" />
												</a>
											</div>
											<div class="blogs-right">
												<a href="article.html" class="blogs-title clearfix">Sports luxe sandal center part pastel loafer leather skirt sneaker</a>
												<span class="date">Oct 25th</span>
											</div>
										</div>
										<div class="blogs-item">
											<div class="blogs-left">
												<a class="blogs-img" href="article.html">
													<img src="<?= base_url(); ?>assets_client/images/blog-03.jpg" alt="Hermes Givenchy skort chambray Cara D skirt cable knit" />
												</a>
											</div>
											<div class="blogs-right">
												<a href="article.html" class="blogs-title clearfix">Hermes Givenchy skort chambray Cara D skirt cable knit</a>
												<span class="date">Oct 25th</span>
											</div>
										</div>
									</div>
								</div>
								<div class="social-payment-item col-sm-4 not-animated" data-animate="fadeInUp" data-delay="200">
									<h5 class="footer-title"> Follow Us</h5>
									<div class="social-content">
										<div class="social-caption">
											<a href="https://www.facebook.com/shopify" title="Fast Food on Facebook" class="icon-social facebook"><i class="fa fa-facebook"></i></a>
											<a href="https://twitter.com/shopify" title="Fast Food on Twitter" class="icon-social twitter"><i class="fa fa-twitter"></i></a>
											<a href="https://plus.google.com/+shopify" title="Fast Food on Google+" class="icon-social google-plus"><i class="fa fa-google-plus"></i></a>
											<a href="https://www.pinterest.com/shopify" title="Fast Food on Pinterest" class="icon-social pinterest"><i class="fa fa-pinterest"></i></a>
											<a href="https://instagram.com/shopify" title="Fast Food on Instagram" class="icon-social instagram"><i class="fa fa-instagram"></i></a>
											<a href="https://www.youtube.com/user/shopify" title="Fast Food on Youtube" class="icon-social youtube"><i class="fa fa-youtube"></i></a>
										</div>
									</div>
									<div class="payment-content ">
										<h5 class="footer-title">Payment Methods</h5>
										<div class="payment-caption">
											<span class="icon-cc icon-cc-discover" title="Discover"></span>
											<span class="icon-cc icon-cc-american" title="Amex"></span>
											<span class="icon-cc icon-cc-western" title="Western Union"></span>
											<span class="icon-cc icon-cc-paypal" title="PayPal"></span>
											<span class="icon-cc icon-cc-moneybookers" title="MoneyBookers"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="copy-right clearfix">
				<div class="copy-right-wrapper">
					<div class="copy-right-inner">
						<div class="footer_links">
							<ul>
								<li><a href="index.html" title="Home">Home</a></li>
								<li><a href="" title="Pizza">Pizza</a></li>
								<li><a href="" title="Hamburger">Hamburger</a></li>
								<li><a href="" title="Fast food">Fast food</a></li>
								<li><a href="" title="Drinks">Drinks</a></li>
								<li><a href="" title="Combo buy">Combo buy</a></li>
								<li><a href="contact.html" title="Contact">Contact</a></li>
								<li><a href="wish-list.html" title="Wishlist">Wishlist</a></li>
								<li><a href="account.html" title="My account">My account</a></li>
								<li><a href="login.html" title="Login">Login</a></li>
							</ul>
						</div>
						<div class="footer_copyright">Copyright &copy; 2017 <a href="index.html" title="">Fast Food</a>. All Rights Reserved</div>
					</div>
				</div>
			</section>
		</div>
	</footer>
-->
	
	<!-- Modal QuickView 
	<div id="quick-shop-modal" class="modal quick-shop" role="dialog" aria-hidden="true" tabindex="-1" data-width="800" style="display: none;">
		<div class="modal-dialog fadeIn animated">
			<div class="modal-content">
				<div class="modal-header">
					<i class="close lnr lnr-cross btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
				</div>
				<div class="modal-body">
					<div class="quick-shop-modal-bg" style="display: none;"></div>
					<div class="clearfix">
						<div class="col-md-6 product-image">
							<div id="quick-shop-image" class="product-image-wrapper">
								<div id="featuted-image-quick" class="main-image featured">
									<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="image product">
								</div>
								<div id="gallery_main_qs-quick" class="product-image-thumb gallery-images-layout">
									<div class="gallery-images-inner">
										<div class="show-image-load show-load-quick" style="display: none;">
											<div class="show-image-load-inner"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
										</div>
										<div class="qs-vertical-slider vertical-image-content">
											<div class="image-vertical image-thumb active">
												<a class="cloud-zoom-gallery" href="<?= base_url(); ?>assets_client/images/product_10.jpg" data-image="./assets/images/product_10.jpg" data-zoom-image="assets/images/product_10.jpg">
													<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="image product">
												</a>
											</div>
											<div class="image-vertical image-thumb">
												<a class="cloud-zoom-gallery" href="<?= base_url(); ?>assets_client/images/product_11.jpg" data-image="./assets/images/product_11.jpg" data-zoom-image="assets/images/product_11.jpg">
													<img src="<?= base_url(); ?>assets_client/images/product_11.jpg" alt="image product">
												</a>
											</div>
											<div class="image-vertical image-thumb">
												<a class="cloud-zoom-gallery" href="<?= base_url(); ?>assets_client/images/product_12.jpg" data-image="./assets/images/product_12.jpg" data-zoom-image="assets/images/product_12.jpg">
													<img src="<?= base_url(); ?>assets_client/images/product_12.jpg" alt="image product">
												</a>
											</div>
											<div class="image-vertical image-thumb">
												<a class="cloud-zoom-gallery" href="<?= base_url(); ?>assets_client/images/product_13.jpg" data-image="./assets/images/product_13.jpg" data-zoom-image="assets/images/product_13.jpg">
													<img src="<?= base_url(); ?>assets_client/images/product_13.jpg" alt="image product">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 product-information">
							<div id="quick-shop-container">
								<h3 id="quick-shop-title"><a href="">s Extra Crispy</a></h3>
								<div class="rating-star"><span class="shopify-product-reviews-badge" data-id="6537875078"></span></div>
								<div class="quick-shop-management">
									<span class="management-title">Availability:</span>
									<div class="management-description">In-Stock</div>
								</div>
								<div class="description">
									<div id="quick-shop-description" class="text-left">
										<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulp...</p>
									</div>
								</div>
								<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
									<div id="quick-shop-variants-container" class="variants-wrapper">
										<div class="selector-wrapper variant-wrapper-size">
											<label for="quick-shop-variants-213223800871-option-0">Size</label>
											<select class="single-option-selector" data-option="option1" id="quick-shop-variants-213223800871-option-0"><option value="Small">Small</option><option value="Medium">Medium</option><option value="Large">Large</option></select>
										</div>
										<div class="selector-wrapper variant-wrapper-topping">
											<label for="quick-shop-variants-213223800871-option-2">Topping</label>
											<select class="single-option-selector" data-option="option3" id="quick-shop-variants-213223800871-option-2"><option value="Black Bottom Cupcakes">Black Bottom Cupcakes</option><option value="Blue-Ribbon Butter Cake">Blue-Ribbon Butter Cake</option><option value="Cheesy Mcplain">Cheesy Mcplain</option><option value="Chunky Apple Cake">Chunky Apple Cake</option></select>
										</div>
									</div>
									<div class="swatch" id="show_swatch">
										<div id="show_swatch_detail_1" class="swatch_quick color clearfix" data-option-index="1">
											<label>Color</label>
											<div id="element-color-Black" data-value="Black" class="swatch-element color Black available active">
												<div class="tooltip">Black</div>
												<input id="swatch-quick-1-Black" type="radio" name="option-1" value="Black">
												<label id="label-color-Black" for="swatch-quick-1-Black" style="background-color: Black; border-color: Black; background-image: url(assets/images/black.png)"><img class="crossed-out" src="<?= base_url(); ?>assets_client/images/soldout.png" alt="image product"></label>
											</div>
											<div id="element-color-Red" data-value="Red" class="swatch-element color Red available ">
												<div class="tooltip">Red</div>
												<input id="swatch-quick-1-Red" type="radio" name="option-1" value="Red">
												<label id="label-color-Red" for="swatch-quick-1-Red" style="background-color: Red; border-color: Red; background-image: url(<?=base_url();?>assets_client/images/red.png)"><img class="crossed-out" src="<?= base_url(); ?>assets_client/images/soldout.png" alt="image product"></label>
											</div>
											<div id="element-color-Blue" data-value="Blue" class="swatch-element color Blue available ">
												<div class="tooltip">Blue</div>
												<input id="swatch-quick-1-Blue" type="radio" name="option-1" value="Blue">
												<label id="label-color-Blue" for="swatch-quick-1-Blue" style="background-color: Blue; border-color: Blue; background-image: url(<?=base_url();?>assets_client/images/blue.png)"><img class="crossed-out" src="<?= base_url(); ?>assets_client/images/soldout.png" alt="image product"></label>
											</div>
											<div id="element-color-yellow" data-value="yellow" class="swatch-element color yellow available ">
												<div class="tooltip">yellow</div>
												<input id="swatch-quick-1-yellow" type="radio" name="option-1" value="yellow">
												<label id="label-color-yellow" for="swatch-quick-1-yellow" style="background-color: yellow; border-color: yellow; background-image: url(<?=base_url();?>assets_client/images/yellow.png)"><img class="crossed-out" src="<?= base_url(); ?>assets_client/images/soldout.png" alt="image product"></label>
											</div>
										</div>
									</div>
									<div id="quick-shop-price-container" class="product-price">
										<span class="price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
									</div>
									<div class="others-bottom">
										<div class="purchase-section">
											<div class="quantity-wrapper clearfix">
												<div class="wrapper">
													<input id="quantity-quick" type="text" name="quantity" value="1" maxlength="5" size="5" class="item-quantity">
													<div class="qty-btn-vertical">
														<span class="qty-down fa fa-chevron-down" title="Decrease" data-src="#quantity"></span>
														<span class="qty-up fa fa-chevron-up" title="Increase" data-src="#quantity"></span>
													</div>
												</div>
											</div>
											<div class="purchase">
												<button id="quick-shop-add" onclick="change_qs_quantity('-qs');" class="_btn add-to-cart" type="submit" name="add" style="opacity: 1;"><span class="cs-icon icon-cart"></span>Add to cart</button>
											</div>
										</div>
										<div class="comWish-content">
											<a title="Add To Compare" class="_compareWishlist compare compare-extra-crispy-1" data-comparehandle="extra-crispy-1">                
												<span class="icon-small icon-small-retweet"></span>
												<span class="_compareWishlist-text">Compare</span>
											</a>
											<a title="Add To Wishlist" class="wishlist wishlist-extra-crispy-1" data-wishlisthandle="extra-crispy-1">
												<span class="icon-small icon-small-heart"></span>
												<span class="_compareWishlist-text">Wishlist</span>
											</a>
											<a title="Send email" class="send-email">
												<span class="icon-small icon-small-email"></span>
												<span class="_compareWishlist-text">Send email</span>
											</a>
										</div>
									</div>
								</form>
								<div class="supports-fontface">
									<span class="social-title">Share this</span>
									<div class="quick-shop-social">
										<a target="_blank" href="#" class="share-facebook">
											<span class="fa fa-facebook"></span>
										</a>
										<a target="_blank" href="#" class="share-twitter">
											<span class="fa fa-twitter"></span>
										</a>
										<a target="_blank" href="#" class="share-pinterest">
											<span class="fa fa-pinterest"></span>
										</a>
										<a target="_blank" href="#" class="share-google">
											<!-- Cannot get Google+ share count with JS yet -->
											<span class="fa fa-google-plus"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal WishList
	<div class="wishlist-model">
		<div class="modal fade" id="modalwishlist1" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
			<div class="modal-dialog white-modal">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="cs-icon icon-close"></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="modal-note wishlist-note">
							Added to <a href="wish-list.html">Wishlist</a>
						</div>
						<div class="modal-body-inner">
							<div class="modal-left wishlist-left">
								<div class="modal-product wishlist-product">
									<div class="product-left">
										<div class="wishlist-image modal-image wishlist-image-213223800871">
											<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="Extra Crispy">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-right wishlist-right">
								<div class="wishlist-cart">
									<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants-form variants"  enctype="multipart/form-data">
										<div class="form-left">
											<div class="product-right">
												<div class="name wishlist-name"><a href="">sExtra Crispy</a></div>
												<div class="wishlist-price wishlist-price-213223800871"><span class="price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
												</div>
											</div>
											<div class="quantity-content">
												<label>QTY</label>
												<input type="text" size="5" class="item-quantity item-quantity-qs" name="quantity" value="1">
											</div>
										</div>
										<div class="form-right">
											<div class="others-bottom">
												<a class="_btn btn-quick-shop" href="wish-list.html">View Wishlist</a>
												<a href="cart.html" class="_btn add-to-cart">Add to cart</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Compare 
	<div class="wishlist-model">
		<div class="modal fade" id="modalCompare" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
			<div class="modal-dialog white-modal">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="cs-icon icon-close"></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="modal-note wishlist-note">
							Added to <a href="compare.html">Compare</a>
						</div>
						<div class="modal-body-inner">
							<div class="modal-left wishlist-left">
								<div class="modal-product wishlist-product">
									<div class="product-left">
										<div class="wishlist-image modal-image wishlist-image-213223800871">
											<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="Extra Crispy">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-right wishlist-right">
								<div class="wishlist-cart">
									<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants-form variants" enctype="multipart/form-data">
										<div class="form-left">
											<div class="product-right">
												<div class="name wishlist-name"><a href="">Extra Crispy</a></div>
												<div class="wishlist-price wishlist-price-213223800871"><span class="price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
												</div>
											</div>
											<div class="quantity-content">
												<label>QTY</label>
												<input type="text" size="5" class="item-quantity item-quantity-qs" name="quantity" value="1">
											</div>
										</div>
										<div class="form-right">
											<div class="others-bottom">
												<a class="_btn btn-quick-shop" href="wish-list.html">View Compare</a>
												<a href="cart.html" class="_btn add-to-cart">Add to cart</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Search
	<div class="modal fade" id="lightbox-search" tabindex="-1" role="dialog" aria-labelledby="lightbox-search" aria-hidden="true" style="display: none;">
		<div class="modal-dialog animated" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span class="cs-icon icon-close"></span>
			</button>
					<h4 class="modal-title" id="myModalLabel">Search something</h4>
				</div>
				<div class="modal-body">
					<div id="search-info">
						<form class="search" action="http://demo.designshopify.com/html_fastfood/search.html" style="position: relative;">
							<input type="hidden" name="type" value="product">
							<input type="text" name="q" class="search_box" placeholder="search our store" value="" autocomplete="off">
							<span class="search-clear cs-icon icon-close" style="display: none;"></span>
							<button class="search-submit" type="submit">
								<span class="cs-icon icon-search"></span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Float right icon 
	<div class="float-right-icon">
		<ul>
			<li>
				<div id="scroll-to-top" data-toggle="" data-placement="left" title="Scroll to Top" class="off">
					<i class="fa fa-angle-up"></i>
				</div>
			</li>
		</ul>
	</div>
</body>
-->
<div class="modal fade" id="mymodel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Add cart</h4>
        </div>
        <div class="modal-body">
          <p class="" id="getmsg"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>