<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_fastfood/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 11:41:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="http://demo.designshopify.com/" />
	<meta name="theme-color" content="#7796A8">
	<meta name="description" content="" />
	<title>
	Collections - Pizza corner  
	</title>
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link href="<?= base_url(); ?>assets_client/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">  
	<link href="<?=base_url();?>assets_client/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url(); ?>assets_client//stylesheets/fonts.googleapis.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
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
	<link rel="icon" type="stylesheet" href="<?=base_url();?>assets_client/images/c.jpg">
	
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
									<!--	<a href="index.html"><img src="<?= base_url(); ?>assets_client/images/logo.png" alt="" title="Fast Food" /></a>-->
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
																		Cart<span class="number"></span>                       
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
														<i class="fa fa-user"></i><?php print_r($sess['User_name']) ?>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													</span>
													<div class="m_dropdown-login dropdown-menu login-content">
														<div class="clearfix">
															
															
															<div class="login-register-content">
																<ul class="nav nav-tabs">
																
																<?php if($sess==''){ ?>
																	<li class="account-item-title active">
																		<a href="<?=base_url();?>Pizza/login" >
																			Login
																		</a>
																	</li>
																<?php } else { ?>
																<li class="account-item-title active">
																		<a href="<?=base_url();?>Pizza/logout_session" >
																			Logout
																		</a>
																	</li>
																<?php } ?>
																
																</ul>
																</div>
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
																		<span class="number"></span>                        
																		</span>
																	</div>
																</div>
															</div>
														</a>
														<div class="dropdown-menu cart-info">
															<div class="cart-content">
																<div class="text-items"><span>  shopping cart</span> <span class="cs-icon icon-close close-dropdown"></span> </div>
																<div class="items control-container">
																	<div class="group_cart_item">
																		<div class="cart-left"><a class="cart-image" href="product.html"><img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="" title=""></a></div>
																		<div class="cart-right">
																			<div class="cart-title"><a href="product.html">Extra Crispy - Small / Black / Black Bottom Cupcakes</a></div>
																			<div class="cart-price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></div>
																			<div class="cart-qty">
																				<span class="quantity">Qty: 1</span>
																				<a title="Add To Wishlist" class="wishlist-extra-crispy-1" href="wish-list.html">
																					<span class="cs-icon icon-heart"></span>
																				</a>
																				<a class="cart-close" title="Remove" href="javascript:void(0);">
																					<span class="cs-icon icon-bin"></span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="group_cart_item">
																		<div class="cart-left"><a class="cart-image" href="product.html"><img src="<?= base_url(); ?>assets_client/images/product_11.jpg" alt="" title=""></a></div>
																		<div class="cart-right">
																			<div class="cart-title"><a href="product.html">Juice Ice Tea</a></div>
																			<div class="cart-price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></div>
																			<div class="cart-qty">
																				<span class="quantity">Qty: 2</span>
																				<a title="Add To Wishlist" class="wishlist-extra-crispy-1" href="wish-list.html">
																					<span class="cs-icon icon-heart"></span>
																				</a>
																				<a class="cart-close" title="Remove" href="javascript:void(0);">
																					<span class="cs-icon icon-bin"></span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="subtotal"><span>Subtotal:</span><span class="cart-total-right money" data-currency-usd="$30.00" data-currency="USD">$30.00</span></div>
																<div class="action"><a href="<?=base_url();?>">View All Your Cart</button><button class="_btn float-right" onclick="window.location=''">Proceed To Checkout</button></div>
															</div>
														</div>
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
									<h1 class="hidden">Collections</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" title="Fast Food" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="" title="Collections" itemprop="url"><span itemprop="title">Collections</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="collection-layout">
				<div class="collection-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-collection-template" class="shopify-section">
								<div class="collection-inner collection-sidebar">
									<!-- Tags loading -->
									<div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
									<div id="collection">
										<div class="clearfix">
											<div class="collection-toolbar _mobile col-sm-9">
												<a href="" class="collection-banner-top">
													<img src="<?= base_url(); ?>assets_client/images/collections_banner_top.jpg" alt="image product" title="">
												</a>
												<div class="group_toolbar">
													<div class="group-left">
														<div class="filter-mobile">
															<a href="javascript:void(0)" class="filter-icon"> 
																<span class="cs-icon icon-filter"></span>
															</a>
														</div>
														<!-- Sort by -->
														<div class="sortBy">
															<div class="dropdown-toggle" data-toggle="dropdown">
																<span class="toolbar-title">Sort by</span>
																<button class="sortButton">
																	<span class="name">Featured</span><i class="fa fa-caret-down"></i>
																</button>
																<i class="sub-dropdown1"></i>
																<i class="sub-dropdown"></i>
															</div>
															<div class="sortBox control-container dropdown-menu">
																<ul class="sortForm list-unstyled option-set text-left list-styled" data-option-key="sortBy">
																	<li class="sort manual"><a href="">Featured</a></li>
																	<li class="sort price-ascending"><a href="">Price, low to high</a></li>
																	<li class="sort price-descending"><a href="">Price, high to low</a></li>
																	<li class="sort title-ascending"><a href="">Alphabetically, A-Z</a></li>
																	<li class="sort title-descending"><a href="">Alphabetically, Z-A</a></li>
																	<li class="sort created-ascending"><a href="">Date, old to new</a></li>
																	<li class="sort created-descending"><a href="">Date, new to old</a></li>
																	<li class="sort best-selling"><a href="">Best Selling</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="collection-content">
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
																<?php foreach($menu as $m) { ?>
																<li><a href="<?=base_url();?>Pizza/collection/?c=<?=$m->m_id;?>"><?= $m->m_name;?> </a></li>
																<?php } ?>
															</ul>
														</div>
													</div>
													
													<!-- filter tags group -->
												
														
													</div>
												
												
													
													<div class="sidebar-block type-block">
														<h3 class="sidebar-title">
															<span class="text">Type List</span>
															<span class="cs-icon icon-minus"></span>
														</h3>
														<div class="sidebar-content">
															<ul class="type-content">
																<!--type-->
																<?php foreach ($pizza as $pdata) { ?>
																<li class="">
																	<a href="" title=""><?= $pdata->pizza_name;?></a>
																</li>
																<?php } ?>
															</ul>
														</div>
													</div>
													
													<div class="sidebar-block banner-block">
														<div class="sidebar-content">
															<a href="">
																<img src="<?= base_url(); ?>assets_client/images/collections_banner.jpg" alt="image product" title="">
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
											<div class="collection-mainarea  col-sm-9 clearfix">
												<div class="collection-toolbar _desktop">
													<a href="" class="collection-banner-top">
														<img src="<?= base_url(); ?>assets_client/images/collections_banner_top.jpg" alt="image product" title="">
													</a>
													<div class="group_toolbar">
														<div class="group-left">
															<div class="filter-mobile">
																<a href="javascript:void(0)" class="filter-icon"> 
																	<span class="cs-icon icon-filter"></span>
																</a>
															</div>
															<!-- Sort by -->
															
														</div>
														<!-- View as -->
														<div class="grid_list">
															<ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
																<li data-option-value="fitRows" id="goGrid" class="active goAction" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid">
																	<i class="icon-small icon-small-grid"></i>
																</li>
																<li data-option-value="straightDown" id="goList" class="goAction" data-toggle="tooltip" data-placement="top" title="" data-original-title="List">
																	<i class="icon-small icon-small-list"></i>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="collection-items clearfix">
													<div class="products">
													<?php foreach($pizza_data as $pdata) { ?>
														<div class="product-item col-sm-4 ">
															<div class="product product-circle">
																<div class="row-left">
																	<a href="<?=base_url();?>Pizza/product_info/?pid=<?= $pdata->p_id;?>" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<?php $h=explode(",",$pdata->p_img);?>
																				<?= str_ireplace("height='50' width='50'","class='front' height='200' width='225'",$h[0]);?>
																				<div class="mask"></div>
																		</div>
																	</a>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span><?= $pdata->p_discount;?>%</span>
																		</div>
																	</div>
																	<div class="hover-mask grid-mode">
																		<div class="group-mask">
																			<div class="inner-mask">
																				<div class="group-actionbutton">
																					<ul class="quickview-wishlist-wrapper">
																						<li class="wishlist">
																						
																							<a title="Add To Wishlist"  onclick="wishlist(<?=$pdata->p_id;?>);"><span class="cs-icon icon-heart"></span></a>
																						</li>
																						<li class="quickview hidden-xs hidden-sm">
																							<div class="product-ajax-cart">
																								<span class="overlay_mask"></span>
																								<div data-handle="cheese-burger-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																									<a href="<?=base_url();?>Pizza/product_info/?pid=<?= $pdata->p_id;?>" class=""><span class="cs-icon icon-eye"></span></a>
																								</div>
																							</div>
																						</li>
																						<li class="compare">
																							<a title="Add To Compare" href="<?= base_url(); ?>Pizza/compare/?p_id=<?=$pdata->p_id?>"><span class="cs-icon icon-retweet2"></span></a>
																						</li>
																					</ul>
																				</div>
																				<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<a href="" class="_btn select-option" type="button"  title=""><?= $pdata->p_name;?></a>
																					</div>
																				</form>
																			</div>
																			<!--inner-mask-->
																		</div>
																		<!--Group mask-->
																	</div>
																</div>
																<div class="row-right animMix">
																	<div class="grid-mode">
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-title"><a class="title-5" href="product.html"><?=$pdata->p_name;?></a></div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD"><?= $pdata->p_price-($pdata->p_price * $pdata->p_discount)/100 ; ?></span></span>
																				<li>You saved <span class="product-caption-price-new fa fa-rupee"><?= ($pdata->p_price * $pdata->p_discount)/100 ; ?></span></li>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD"><?=$pdata->p_price;?></span></del>
																		</div>
																	</div>
																	<div class="list-mode hide">
																		<div class="list-collection-left">
																			<div class="group">
																				<div class="product-title"><a class="title-5" href="product.html"><?= $pdata->p_name;?></a></div>
																				<div class="rating-star">
																					<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																					</span>
																				</div>
																			</div>
																			<div class="product-price">
																				<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD"><?= $pdata->p_price-($pdata->p_price * $pdata->p_discount)/100 ; ?></span></span>
																				<li>You saved <span class="product-caption-price-new fa fa-rupee"><?= ($pdata->p_price * $pdata->p_discount)/100 ; ?></span></li>
																				<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD"><?=$pdata->p_price;?></span></del>
																			</div>
																		</div>
																		<div class="list-collection-right">
																			<div class="product-description">
																			<?=$pdata->p_discription;?>
																			</div>
																			<div class="group-actionbutton">
																				<form class="product-addtocart" action="" method="post">
																					<div class="effect-ajax-cart">
																						<input type="hidden" name="quantity" value="1">
																						<a href=""><button class="_btn select-option" type="button" onclick="'" title=""><span class="cart-title"><?= $pdata->p_name;?></span></button></a>
																					</div>
																				</form>
																				<ul class="quickview-wishlist-wrapper">
																					<li class="wishlist">
																						<a title="Add To Wishlist" class="wishlist wishlist-cheese-burger-1" data-wishlisthandle="cheese-burger-1">
																							<span class="cs-icon icon-heart" title="Wishlist"></span>
																						</a>
																					</li>
																					<li class="product-quickview quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart ">
																							<span class="overlay_mask"></span>
																							<div data-handle="cheese-burger-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a class="quick-view">
																									<span class="cs-icon icon-eye" title="Quick View"></span>
																								</a>
																							</div>
																						</div>
																					</li>
																					<li class="compare">
																						<a title="Add To Compare" class="compare compare-cheese-burger-1" data-comparehandle="cheese-burger-1">
																							<span class="cs-icon icon-retweet2" title="Compare"></span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<?php } ?>
													</div>
												</div>
												<div class="collection-bottom-toolbar">
													<div class="product-counter col-sm-6">
														Items 1 to 18 of 20 total
													</div>
													<div class="product-pagination col-sm-6">
														<div class="pagination_group">
															<ul class="pagination pagination-collection">
																<li class="prev"><a class="disabled" href="">Prev</a></li>
																<li class="active"><a href="">1</a></li>
																<li><a href="">2</a></li>
																<li class="next"><a href="">Next</a></li>
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
					</div>
				</div>
			</section>
		</main>
	</div>
	
	<!-- Footer -->
	

	<!-- Modal  all product data QuickView -->

	
	<!-- Modal WishList -->
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
												<div class="name wishlist-name"><a href="product.html">Extra Crispy</a></div>
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
	
	<!-- Modal Compare -->
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
												<div class="name wishlist-name"><a href="product.html">Extra Crispy</a></div>
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
												
												<a href="cart.html" class="_btn add-to-cart"> Add to cart</a>
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
	
	<!-- Modal Search-->
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
	
</body>