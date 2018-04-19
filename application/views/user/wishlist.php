<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_fastfood/wish-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 11:42:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" http://demo.designshopify.com/" />
	<meta name="theme-color" content="#7796A8">
	<meta name="description" content="" />
	<title>
	Wish List - Fast Food
	</title>
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playball:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link href="<?=base_url();?>assets_client/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">  
	<link href="<?=base_url();?>../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/fonts.googleapis.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/icon-font.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/social-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/cs.styles.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/font-icon.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/slideshow-fade.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/themepunch.revolution.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url();?>assets_client/stylesheets/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/classie.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/application-appear.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/cs.script.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.currencies.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.zoom.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/linkOptionSelectors.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/scripts.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/social-buttons.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets_client/javascripts/jquery.fancybox.js"></script>
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
										<?php foreach($logo as $l) {?>
											<?= $l->logo_image;?>
											<h1 style="display:none"><a href="http://demo.designshopify.com/">Fast Food</a></h1>
										<?php } ?></div>
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
									<a tabindex="-1" href="<?=base_url();?>Pizza/collection/?c=<?=$smenu->s_id;?>"><?= $smenu->sub_name; ?></a>
									</li>
									<?php } ?>
									</ul>
									<?php } ?>
									<!--submenu fetch end -->
									</li>
									<?php } ?>
									<li><a href="<?= base_url();?>Pizza/about"><span>About Us<span></a><li>		
									</ul>	</div>
										<div class="nav-icon">
											<div class="m_search search-icon">
												<a href="<?=base_url();?>#" data-toggle="modal" data-target="#lightbox-search">
													<i class="fa fa-search"></i>
												</a>
											</div>
											<div class="icon_cart">
												<div class="m_cart-group">
													<a class="cart dropdown-toggle dropdown-link" data-toggle="dropdown">
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
										</div></div>
									</div>
									<div class="navMobile-navigation">
										<div class="navMobile-logo">
											<a href="<?=base_url();?>index.html"><img class="header-logo-image" src="<?=base_url();?>assets_client/images/logo.png" alt="" title="Fast Food" /></a>
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
														<div class="dropdown-menu cart-info">
															<div class="cart-content">
																<div class="text-items"><span>2 item(s) in the shopping cart</span> <span class="cs-icon icon-close close-dropdown"></span> </div>
																<div class="items control-container">
																	<div class="group_cart_item">
																		<div class="cart-left"><a class="cart-image" href="<?=base_url();?>product.html"><img src="<?=base_url();?>assets_client/images/product_10.jpg" alt="" title=""></a></div>
																		<div class="cart-right">
																			<div class="cart-title"><a href="<?=base_url();?>product.html">Extra Crispy - Small / Black / Black Bottom Cupcakes</a></div>
																			<div class="cart-price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></div>
																			<div class="cart-qty">
																				<span class="quantity">Qty: 1</span>
																				<a title="Add To Wishlist" class="wishlist-extra-crispy-1" href="<?=base_url();?>wish-list.html">
																					<span class="cs-icon icon-heart"></span>
																				</a>
																				<a class="cart-close" title="Remove" href="<?=base_url();?>javascript:void(0);">
																					<span class="cs-icon icon-bin"></span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="group_cart_item">
																		<div class="cart-left"><a class="cart-image" href="<?=base_url();?>product.html"><img src="<?=base_url();?>assets_client/images/product_11.jpg" alt="" title=""></a></div>
																		<div class="cart-right">
																			<div class="cart-title"><a href="<?=base_url();?>product.html">Juice Ice Tea</a></div>
																			<div class="cart-price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></div>
																			<div class="cart-qty">
																				<span class="quantity">Qty: 2</span>
																				<a title="Add To Wishlist" class="wishlist-extra-crispy-1" href="<?=base_url();?>wish-list.html">
																					<span class="cs-icon icon-heart"></span>
																				</a>
																				<a class="cart-close" title="Remove" href="<?=base_url();?>javascript:void(0);">
																					<span class="cs-icon icon-bin"></span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="subtotal"><span>Subtotal:</span><span class="cart-total-right money" data-currency-usd="$30.00" data-currency="USD">$30.00</span></div>
																<div class="action"><button class="_btn" onclick="window.location='cart.html'">View All Your Cart</button><button class="_btn float-right" onclick="window.location='cart.html'">Proceed To Checkout</button></div>
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
																			<a href="<?=base_url();?>#account-login-mobile" data-toggle="tab">
																				Login
																			</a>
																		</li>
																		<li class="account-item-title">
																			<a href="<?=base_url();?>#account-register-mobile" data-toggle="tab">
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
																					<a href="<?=base_url();?>login-recover.html"><span class="red"></span> Forgot your password?</a>
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
																	<li class="link-item"><a href="<?=base_url();?>">My Wishlist</a></li>
																	<li class="link-item"><a href="<?=base_url();?>compare.html">My Compare</a></li>
																</ul>
																<ul class="currencies currencies-content">
																	<li class="currency-USD active">
																		<a href="<?=base_url();?>javascript:;">USD</a>
																		<input type="hidden" value="USD" />
																	</li>
																	<li class="currency-GBP">
																		<a href="<?=base_url();?>javascript:;">GBP</a>
																		<input type="hidden" value="GBP" />
																	</li>
																	<li class="currency-EUR">
																		<a href="<?=base_url();?>javascript:;">EUR</a>
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
													<a href="<?=base_url();?>javascript:void(0)" class="dropdown-toggle-navigation">                  
														<span class="cs-icon icon-menu"></span>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													</a>
													<div class="navigation_dropdown_scroll dropdown-menu">
														<ul class="navigation_links_mobile">
															<li class="nav-item navigation navigation_mobile">
																<a href="<?=base_url();?>collections.html" class="menu-mobile-link">
																	Hamburger
																</a>
																<a href="<?=base_url();?>javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">	
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Whopper</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Chicken Burger</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Beef Burger</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">DOUBLE WHOPPER</a>
																	</li>
																</ul>
															</li>
															<li class="nav-item navigation navigation_mobile">
																<a href="<?=base_url();?>collections.html" class="menu-mobile-link">
																	Pizza
																</a>
																<a href="<?=base_url();?>javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Popular pizzas</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Meats</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Chicken</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections.html">Veggie</a>
																	</li>
																</ul>
															</li>
															<li class="nav-item">
																<a href="<?=base_url();?>collections.html">
																	Fast food
																</a>
															</li>
															<li class="nav-item">
																<a href="<?=base_url();?>collections.html">
																	Drinks
																</a>
															</li>
															<li class="nav-item">
																<a href="<?=base_url();?>super-deal.html">
																	Combo buy
																</a>
															</li>
															<li class="nav-item navigation navigation_mobile">
																<a href="<?=base_url();?>contact.html" class="menu-mobile-link">
																	Pages
																</a>
																<a href="<?=base_url();?>javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>blog.html">Blogs</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>about-us.html">About Us</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>contact.html">Contact</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>faqs.html">FAQs</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>lookbook.html">Lookbook</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>super-deal.html">Super Deal</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>404.html">404</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="<?=base_url();?>collections-all.html">All Collections</a>
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
									<h1 class="hidden">Wish List</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?=base_url();?>" title="Fast Food" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="<?=base_url();?>Pizza/show_wishlist" title="Wish List" itemprop="url"><span itemprop="title">Wish List</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="container wishlist-page shop_area">
				<div class="row">
					<div id="wishlistcontent">
						<span class="wishlist-count"> Total Wish list <h2><?= $wish_total;?></h2> </span>
						<ul>
							<li class="wishlist-heading">
								<div class="wishlist-image">
									Image
								</div>
								<div class="wishlist-name">
									Name
								</div>
								<div class="wishlist-price">
									Price
								</div>
								<div class="wishlist-addCart">
									Add to cart
								</div>
								<div class="wishlist-remove">
									Remove
								</div>
							</li>
							<?php foreach($data as $d){ ?>
							<?php $p_i=explode(",",$d->p_img); ?>
							<li class="wlr wishlist-juice-ice-tea-1 wishlist-added">
								<div class="wishlist-image wishlist-image-213224194087"><?=str_ireplace("height='100' width='100'","",$p_i[0])?></div>
								<div class="wishlist-name"><a href="<?=base_url();?>#"><?=$d->p_name;?></a></div>
								<div class="wishlist-price wishlist-price-213224194087"><span class="price"><span class="money" data-currency-usd="$20.00" data-currency="USD"><?=$d->p_price;?></span></span>
								</div>
								<div class="wishlist-addCart">
									<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants" enctype="multipart/form-data">
										<div class="others-bottom"><a href="<?=base_url();?>cart.html" class=" wishlist-addToCart _btn btn-quick-shop add-to-cart" style="opacity: 1;">Add to cart</a></div>
									</form>
								</div>
								<div class="wishlist-remove" data-wishlisthandle="juice-ice-tea-1"><span class="cs-icon icon-bin"></span></div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</main>
	</div>
	
	<!-- Footer -->
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
	
	<!-- Float right icon -->
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
	