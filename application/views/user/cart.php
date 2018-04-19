<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_fastfood/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 11:42:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="http://demo.designshopify.com/" />
	<meta name="theme-color" content="#7796A8">
	<meta name="description" content="" />
	<title>		
	Your Cart - Pizza corner
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
											<li><a href="<?=base_url();?>Pizza"><span>HOME</span></a></li>
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
									</ul>
										</li>
											</ul>
										</div>
										<div class="nav-icon">
											<div class="m_search search-icon">
												<a href="#" data-toggle="modal" data-target="#lightbox-search">
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
													<span class="dropdown-toggle login-icon">
														<i title="user" class="fa fa-user"> <?php echo(ucfirst($sess['User_name'])) ?></i>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													</span>
													<div class="m_dropdown-login dropdown-menu login-content">
														<div class="clearfix">
															<div class="login-register-content">
																<ul class="nav nav-tabs">
																<?php if($sess==''){ ?>
																	<li class="account-item-title active">
																		<?php echo anchor('Pizza/login', 'Login') ?>
																	</li>
																<?php } else { ?>
																	<li class="account-item-title active">
																		<?php echo anchor('Pizza/profile', 'My Profile') ?>
																	</li>																
																	<li class="account-item-title active">
																		<?php echo anchor('Pizza/change_password', 'Change Password') ?>
																	</li>
																	<li class="account-item-title active">
																		<?php echo anchor('Pizza/logout_session', 'Logout') ?>
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
																<a href="collections.html" class="menu-mobile-link">
																	Hamburger
																</a>
																<a href="javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Whopper</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Chicken Burger</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Beef Burger</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">DOUBLE WHOPPER</a>
																	</li>
																</ul>
															</li>
															<li class="nav-item navigation navigation_mobile">
																<a href="collections.html" class="menu-mobile-link">
																	Pizza
																</a>
																<a href="javascript:void(0)" class="arrow_sub arrow">
																	<i class="arrow-plus"></i>
																</a>
																<ul class="menu-mobile-container" style="display: none;">
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Popular pizzas</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Meats</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Chicken</a>
																	</li>
																	<li class=" li-sub-mega">
																		<a tabindex="-1" href="collections.html">Veggie</a>
																	</li>
																</ul>
															</li>
															<li class="nav-item">
																<a href="collections.html">
																	Fast food
																</a>
															</li>
															<li class="nav-item">
																<a href="collections.html">
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
									<h1 class="hidden">Your Cart</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" title="Fast Food" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="cart.html" title="Your Cart" itemprop="url"><span itemprop="title">Your Cart</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php  if(count($this1->cart->contents())>0){ ?>			
			 <section class="cart-content">
				<div class="cart-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-cart-template" class="shopify-section">
								<div class="cart-inner">
									<div id="cart">
										<div class="cart-form">
											
												<table>
													<thead>
														<tr>
															<th>Product Image</th>
															<th>Product Name</th>
															<th>Price</th>
															<th>Quality</th>
															<th>Total</th>
															<th>Remove</th>
															<th>update</th>
														</tr>
													</thead>
													<tbody>
														
							 <?php
							
							 foreach($this1->cart->contents() as $item)
							 {
								 ?>   
								<form   method="get" action="<?= base_url()?>Pizza/update_cart" id="cartform">
										
						<tr>
                                <td class="table-shopping-cart-img">
                                    <a href="#">
                                        <img src="<?= $item['img']; ?>" style="height:100px;width:100px" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                </td>
                                <td class="table-shopping-cart-title"><a href="#"><?= $item['name']; ?></a>
                                </td>
                                <td><i class="fa fa-rupee"></i><?= $item['price']; ?></td>
                                <td>
                                    <input class="form-control table-shopping-qty" type="text" name="qty" value="<?= $item['qty']; ?>" />
                                    <input class="form-control table-shopping-qty" type="hidden" name="qty1" value="<?= $item['rowid']; ?>" />
                                </td>
                                <td><i class="fa fa-rupee"></i><?= $item['price']*$item['qty']; ?></td>
                                <td>
                                    <a class="fa fa-close table-shopping-remove "  data-productid="<?= $item['rowid']; ?>" href="<?php echo base_url(); ?>Pizza/cart_remove/?id=<?= $item['rowid'];?>"></a>
                                  
									
                                </td>
								<td>
								  <button  ><i  title="update"  class="fa fa-refresh table-shopping-remove " ></i></button>
								</td>
							</tr>
								</form>
											
							 <?php  } ?>
                         
							
													</tbody>
												</table>
												<div class="group-button">
												<a data-productid="<?= $item['rowid']; ?> "href="<?=base_url();?>Pizza/collection/" class="_btn">Continue Shopping</a>
													<div class="group_btn_right">
														<a href="<?php echo base_url(); ?>Pizza/cart_remove/?id=<?= $item['rowid'];?>">
														<input type="button" class="_btn clearAllCart"  value="Clear all" ></a>
														
													</div>
												</div>
																								
												<div class="group-checkout-input">
													<hr style="border-top:2px solid #d5d5d5;">
													<form   method="POST" action="<?= base_url()?>order/confirmation">
														<div class="shipping-calculator col-sm-6 col-xs-12 ">
															<div id="shipping-calculator">
																<h3>Shipping Information</h3>
																<div class="group_form">
																	<div class="form-item">
																		<label for="order_flat_no">House No/Flat Number</label>
																		<input type="text" id="order_flat_no" name="order[flat_no]" value="<?php echo isset($order['flat_no'])?$order['flat_no']:""?>">
																	</div>
																	<div class="form-item">
																		<label for="order_address">Address</label>
																		<textarea id="order_address" name="order[address]" style="min-height:100px;"><?php echo isset($order['address'])?$order['address']:""?></textarea>
																	</div>
																	<div class="form-item" id="order_landmark" style="">
																		<label for="order_landmark" id="order_landmark_label">Landmark</label>
																		<input type="text" id="order_landmark" name="order[landmark]" value="<?php echo isset($order['landmark'])?$order['landmark']:""?>">
																	</div>
																	<div class="form-item">
																		<label for="order_zip">Pin Code</label>
																		<input type="text" id="order_pincode" name="order[pincode]" value="<?php echo isset($order['pincode'])?$order['pincode']:""?>">
																	</div>															
																</div>
															</div>
														</div>
														<div class="checkout-buttons col-sm-6 col-xs-12">
															<div class="note-content group_form">
																<div class="form-item">
																	<label for="note">Add special instructions for your order</label>
																	<textarea id="note" name="order[note]" placeholder="Enter text here..."> <?php echo isset($order['note'])?$order['note']:""?></textarea>
																</div>
															</div>
															<div class="checkout-content">
																<div class="buttons clearfix">
																	<input  type="submit" id="checkout" class="_btn" name="checkout" value="Proceed to Check Out"></a>
																</div>
															</div>
														</div>
													</form>
												</div>
										</div>
									</div>
								</div>
								<script>
									$(window).ready(function($) {
										$(".quantity-mobile input").change(function() {
											var qty = $(this).val();
											$(this).parents('tr').find('.item-quantity').val(qty);
										});
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php } else{?>
<center> Empty Cart!!</center>
<div class="container">
						<div class="row">
							<div class="page-heading-inner heading-group">
								<div class="breadcrumb-group">
									<div class="breadcrumb clearfix">
									<center><a href="<?= base_url(); ?>Pizza" class="btn bg-warning">	CONTINUE SHOPPING </a></center>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php } ?>
	</main>
	</div>
	