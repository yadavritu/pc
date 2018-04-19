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
													<div class="shipping-calculator col-sm-6 col-xs-12 ">
														<div id="shipping-calculator">
															<h3>Get shipping estimates</h3>
															<div class="group_form">
																<div class="form-item">
																	<label for="address_country">Country</label>
																	<select id="address_country" name="address[country]" data-default="United States"><option value="---" data-provinces="[]">---</option>
																		<option value="Afghanistan" data-provinces="[]">Afghanistan</option>
																		<option value="Aland Islands" data-provinces="[]">Åland Islands</option>
																		<option value="Albania" data-provinces="[]">Albania</option>
																		<option value="Algeria" data-provinces="[]">Algeria</option>
																		<option value="Andorra" data-provinces="[]">Andorra</option>
																		<option value="Angola" data-provinces="[]">Angola</option>
																		<option value="Anguilla" data-provinces="[]">Anguilla</option>
																		<option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
																		<option value="Argentina" data-provinces="[[&quot;Buenos Aires&quot;,&quot;Buenos Aires&quot;],[&quot;Catamarca&quot;,&quot;Catamarca&quot;],[&quot;Chaco&quot;,&quot;Chaco&quot;],[&quot;Chubut&quot;,&quot;Chubut&quot;],[&quot;Ciudad Autónoma de Buenos Aires&quot;,&quot;Ciudad Autónoma de Buenos Aires&quot;],[&quot;Córdoba&quot;,&quot;Córdoba&quot;],[&quot;Corrientes&quot;,&quot;Corrientes&quot;],[&quot;Entre Ríos&quot;,&quot;Entre Ríos&quot;],[&quot;Formosa&quot;,&quot;Formosa&quot;],[&quot;Jujuy&quot;,&quot;Jujuy&quot;],[&quot;La Pampa&quot;,&quot;La Pampa&quot;],[&quot;La Rioja&quot;,&quot;La Rioja&quot;],[&quot;Mendoza&quot;,&quot;Mendoza&quot;],[&quot;Misiones&quot;,&quot;Misiones&quot;],[&quot;Neuquén&quot;,&quot;Neuquén&quot;],[&quot;Río Negro&quot;,&quot;Río Negro&quot;],[&quot;Salta&quot;,&quot;Salta&quot;],[&quot;San Juan&quot;,&quot;San Juan&quot;],[&quot;San Luis&quot;,&quot;San Luis&quot;],[&quot;Santa Cruz&quot;,&quot;Santa Cruz&quot;],[&quot;Santa Fe&quot;,&quot;Santa Fe&quot;],[&quot;Santiago Del Estero&quot;,&quot;Santiago Del Estero&quot;],[&quot;Tierra Del Fuego&quot;,&quot;Tierra Del Fuego&quot;],[&quot;Tucumán&quot;,&quot;Tucumán&quot;]]">Argentina</option>
																		<option value="Armenia" data-provinces="[]">Armenia</option>
																		<option value="Aruba" data-provinces="[]">Aruba</option>
																		<option value="Australia" data-provinces="[[&quot;Australian Capital Territory&quot;,&quot;Australian Capital Territory&quot;],[&quot;New South Wales&quot;,&quot;New South Wales&quot;],[&quot;Northern Territory&quot;,&quot;Northern Territory&quot;],[&quot;Queensland&quot;,&quot;Queensland&quot;],[&quot;South Australia&quot;,&quot;South Australia&quot;],[&quot;Tasmania&quot;,&quot;Tasmania&quot;],[&quot;Victoria&quot;,&quot;Victoria&quot;],[&quot;Western Australia&quot;,&quot;Western Australia&quot;]]">Australia</option>
																		<option value="Austria" data-provinces="[]">Austria</option>
																		<option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
																		<option value="Bahamas" data-provinces="[]">Bahamas</option>
																		<option value="Bahrain" data-provinces="[]">Bahrain</option>
																		<option value="Bangladesh" data-provinces="[]">Bangladesh</option>
																		<option value="Barbados" data-provinces="[]">Barbados</option>
																		<option value="Belarus" data-provinces="[]">Belarus</option>
																		<option value="Belgium" data-provinces="[]">Belgium</option>
																		<option value="Belize" data-provinces="[]">Belize</option>
																		<option value="Benin" data-provinces="[]">Benin</option>
																		<option value="Bermuda" data-provinces="[]">Bermuda</option>
																		<option value="Bhutan" data-provinces="[]">Bhutan</option>
																		<option value="Bolivia" data-provinces="[]">Bolivia</option>
																		<option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
																		<option value="Botswana" data-provinces="[]">Botswana</option>
																		<option value="Bouvet Island" data-provinces="[]">Bouvet Island</option>
																		<option value="Brazil" data-provinces="[[&quot;Acre&quot;,&quot;Acre&quot;],[&quot;Alagoas&quot;,&quot;Alagoas&quot;],[&quot;Amapá&quot;,&quot;Amapá&quot;],[&quot;Amazonas&quot;,&quot;Amazonas&quot;],[&quot;Bahia&quot;,&quot;Bahia&quot;],[&quot;Ceará&quot;,&quot;Ceará&quot;],[&quot;Distrito Federal&quot;,&quot;Distrito Federal&quot;],[&quot;Espírito Santo&quot;,&quot;Espírito Santo&quot;],[&quot;Goiás&quot;,&quot;Goiás&quot;],[&quot;Maranhão&quot;,&quot;Maranhão&quot;],[&quot;Mato Grosso&quot;,&quot;Mato Grosso&quot;],[&quot;Mato Grosso do Sul&quot;,&quot;Mato Grosso do Sul&quot;],[&quot;Minas Gerais&quot;,&quot;Minas Gerais&quot;],[&quot;Pará&quot;,&quot;Pará&quot;],[&quot;Paraíba&quot;,&quot;Paraíba&quot;],[&quot;Paraná&quot;,&quot;Paraná&quot;],[&quot;Pernambuco&quot;,&quot;Pernambuco&quot;],[&quot;Piauí&quot;,&quot;Piauí&quot;],[&quot;Rio Grande do Norte&quot;,&quot;Rio Grande do Norte&quot;],[&quot;Rio Grande do Sul&quot;,&quot;Rio Grande do Sul&quot;],[&quot;Rio de Janeiro&quot;,&quot;Rio de Janeiro&quot;],[&quot;Rondônia&quot;,&quot;Rondônia&quot;],[&quot;Roraima&quot;,&quot;Roraima&quot;],[&quot;Santa Catarina&quot;,&quot;Santa Catarina&quot;],[&quot;São Paulo&quot;,&quot;São Paulo&quot;],[&quot;Sergipe&quot;,&quot;Sergipe&quot;],[&quot;Tocantins&quot;,&quot;Tocantins&quot;]]">Brazil</option>
																		<option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
																		<option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
																		<option value="Brunei" data-provinces="[]">Brunei</option>
																		<option value="Bulgaria" data-provinces="[]">Bulgaria</option>
																		<option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
																		<option value="Burundi" data-provinces="[]">Burundi</option>
																		<option value="Cambodia" data-provinces="[]">Cambodia</option>
																		<option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
																		<option value="Canada" data-provinces="[[&quot;Alberta&quot;,&quot;Alberta&quot;],[&quot;British Columbia&quot;,&quot;British Columbia&quot;],[&quot;Manitoba&quot;,&quot;Manitoba&quot;],[&quot;New Brunswick&quot;,&quot;New Brunswick&quot;],[&quot;Newfoundland&quot;,&quot;Newfoundland&quot;],[&quot;Northwest Territories&quot;,&quot;Northwest Territories&quot;],[&quot;Nova Scotia&quot;,&quot;Nova Scotia&quot;],[&quot;Nunavut&quot;,&quot;Nunavut&quot;],[&quot;Ontario&quot;,&quot;Ontario&quot;],[&quot;Prince Edward Island&quot;,&quot;Prince Edward Island&quot;],[&quot;Quebec&quot;,&quot;Quebec&quot;],[&quot;Saskatchewan&quot;,&quot;Saskatchewan&quot;],[&quot;Yukon&quot;,&quot;Yukon&quot;]]">Canada</option>
																		<option value="Cape Verde" data-provinces="[]">Cape Verde</option>
																		<option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
																		<option value="Central African Republic" data-provinces="[]">Central African Republic</option>
																		<option value="Chad" data-provinces="[]">Chad</option>
																		<option value="Chile" data-provinces="[]">Chile</option>
																		<option value="China" data-provinces="[[&quot;Anhui&quot;,&quot;Anhui&quot;],[&quot;Beijing&quot;,&quot;Beijing&quot;],[&quot;Chongqing&quot;,&quot;Chongqing&quot;],[&quot;Fujian&quot;,&quot;Fujian&quot;],[&quot;Gansu&quot;,&quot;Gansu&quot;],[&quot;Guangdong&quot;,&quot;Guangdong&quot;],[&quot;Guangxi&quot;,&quot;Guangxi&quot;],[&quot;Guizhou&quot;,&quot;Guizhou&quot;],[&quot;Hainan&quot;,&quot;Hainan&quot;],[&quot;Hebei&quot;,&quot;Hebei&quot;],[&quot;Heilongjiang&quot;,&quot;Heilongjiang&quot;],[&quot;Henan&quot;,&quot;Henan&quot;],[&quot;Hubei&quot;,&quot;Hubei&quot;],[&quot;Hunan&quot;,&quot;Hunan&quot;],[&quot;Inner Mongolia&quot;,&quot;Inner Mongolia&quot;],[&quot;Jiangsu&quot;,&quot;Jiangsu&quot;],[&quot;Jiangxi&quot;,&quot;Jiangxi&quot;],[&quot;Jilin&quot;,&quot;Jilin&quot;],[&quot;Liaoning&quot;,&quot;Liaoning&quot;],[&quot;Ningxia&quot;,&quot;Ningxia&quot;],[&quot;Qinghai&quot;,&quot;Qinghai&quot;],[&quot;Shaanxi&quot;,&quot;Shaanxi&quot;],[&quot;Shandong&quot;,&quot;Shandong&quot;],[&quot;Shanghai&quot;,&quot;Shanghai&quot;],[&quot;Shanxi&quot;,&quot;Shanxi&quot;],[&quot;Sichuan&quot;,&quot;Sichuan&quot;],[&quot;Tianjin&quot;,&quot;Tianjin&quot;],[&quot;Xinjiang&quot;,&quot;Xinjiang&quot;],[&quot;Xizang&quot;,&quot;Xizang&quot;],[&quot;Yunnan&quot;,&quot;Yunnan&quot;],[&quot;Zhejiang&quot;,&quot;Zhejiang&quot;]]">China</option>
																		<option value="Christmas Island" data-provinces="[]">Christmas Island</option>
																		<option value="Cocos (Keeling) Islands" data-provinces="[]">Cocos (Keeling) Islands</option>
																		<option value="Colombia" data-provinces="[[&quot;Bogotá, D.C.&quot;,&quot;Bogotá, D.C.&quot;],[&quot;Amazonas&quot;,&quot;Amazonas&quot;],[&quot;Antioquia&quot;,&quot;Antioquia&quot;],[&quot;Arauca&quot;,&quot;Arauca&quot;],[&quot;Atlántico&quot;,&quot;Atlántico&quot;],[&quot;Bolívar&quot;,&quot;Bolívar&quot;],[&quot;Boyacá&quot;,&quot;Boyacá&quot;],[&quot;Caldas&quot;,&quot;Caldas&quot;],[&quot;Caquetá&quot;,&quot;Caquetá&quot;],[&quot;Casanare&quot;,&quot;Casanare&quot;],[&quot;Cauca&quot;,&quot;Cauca&quot;],[&quot;Cesar&quot;,&quot;Cesar&quot;],[&quot;Chocó&quot;,&quot;Chocó&quot;],[&quot;Córdoba&quot;,&quot;Córdoba&quot;],[&quot;Cundinamarca&quot;,&quot;Cundinamarca&quot;],[&quot;Guainía&quot;,&quot;Guainía&quot;],[&quot;Guaviare&quot;,&quot;Guaviare&quot;],[&quot;Huila&quot;,&quot;Huila&quot;],[&quot;La Guajira&quot;,&quot;La Guajira&quot;],[&quot;Magdalena&quot;,&quot;Magdalena&quot;],[&quot;Meta&quot;,&quot;Meta&quot;],[&quot;Nariño&quot;,&quot;Nariño&quot;],[&quot;Norte de Santander&quot;,&quot;Norte de Santander&quot;],[&quot;Putumayo&quot;,&quot;Putumayo&quot;],[&quot;Quindío&quot;,&quot;Quindío&quot;],[&quot;Risaralda&quot;,&quot;Risaralda&quot;],[&quot;San Andrés, Providencia y Santa Catalina&quot;,&quot;San Andrés, Providencia y Santa Catalina&quot;],[&quot;Santander&quot;,&quot;Santander&quot;],[&quot;Sucre&quot;,&quot;Sucre&quot;],[&quot;Tolima&quot;,&quot;Tolima&quot;],[&quot;Valle del Cauca&quot;,&quot;Valle del Cauca&quot;],[&quot;Vaupés&quot;,&quot;Vaupés&quot;],[&quot;Vichada&quot;,&quot;Vichada&quot;]]">Colombia</option>
																		<option value="Comoros" data-provinces="[]">Comoros</option>
																		<option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
																		<option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
																		<option value="Cook Islands" data-provinces="[]">Cook Islands</option>
																		<option value="Costa Rica" data-provinces="[]">Costa Rica</option>
																		<option value="Croatia" data-provinces="[]">Croatia</option>
																		<option value="Cuba" data-provinces="[]">Cuba</option>
																		<option value="Curaçao" data-provinces="[]">Curaçao</option>
																		<option value="Cyprus" data-provinces="[]">Cyprus</option>
																		<option value="Czech Republic" data-provinces="[]">Czech Republic</option>
																		<option value="Côte d'Ivoire" data-provinces="[]">Côte d’Ivoire</option>
																		<option value="Denmark" data-provinces="[]">Denmark</option>
																		<option value="Djibouti" data-provinces="[]">Djibouti</option>
																		<option value="Dominica" data-provinces="[]">Dominica</option>
																		<option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
																		<option value="Ecuador" data-provinces="[]">Ecuador</option>
																		<option value="Egypt" data-provinces="[[&quot;6th of October&quot;,&quot;6th of October&quot;],[&quot;Al Sharqia&quot;,&quot;Al Sharqia&quot;],[&quot;Alexandria&quot;,&quot;Alexandria&quot;],[&quot;Aswan&quot;,&quot;Aswan&quot;],[&quot;Asyut&quot;,&quot;Asyut&quot;],[&quot;Beheira&quot;,&quot;Beheira&quot;],[&quot;Beni Suef&quot;,&quot;Beni Suef&quot;],[&quot;Cairo&quot;,&quot;Cairo&quot;],[&quot;Dakahlia&quot;,&quot;Dakahlia&quot;],[&quot;Damietta&quot;,&quot;Damietta&quot;],[&quot;Faiyum&quot;,&quot;Faiyum&quot;],[&quot;Gharbia&quot;,&quot;Gharbia&quot;],[&quot;Giza&quot;,&quot;Giza&quot;],[&quot;Helwan&quot;,&quot;Helwan&quot;],[&quot;Ismailia&quot;,&quot;Ismailia&quot;],[&quot;Kafr el-Sheikh&quot;,&quot;Kafr el-Sheikh&quot;],[&quot;Luxor&quot;,&quot;Luxor&quot;],[&quot;Matrouh&quot;,&quot;Matrouh&quot;],[&quot;Minya&quot;,&quot;Minya&quot;],[&quot;Monufia&quot;,&quot;Monufia&quot;],[&quot;New Valley&quot;,&quot;New Valley&quot;],[&quot;North Sinai&quot;,&quot;North Sinai&quot;],[&quot;Port Said&quot;,&quot;Port Said&quot;],[&quot;Qalyubia&quot;,&quot;Qalyubia&quot;],[&quot;Qena&quot;,&quot;Qena&quot;],[&quot;Red Sea&quot;,&quot;Red Sea&quot;],[&quot;Sohag&quot;,&quot;Sohag&quot;],[&quot;South Sinai&quot;,&quot;South Sinai&quot;],[&quot;Suez&quot;,&quot;Suez&quot;]]">Egypt</option>
																		<option value="El Salvador" data-provinces="[]">El Salvador</option>
																		<option value="Equatorial Guinea" data-provinces="[]">Equatorial Guinea</option>
																		<option value="Eritrea" data-provinces="[]">Eritrea</option>
																		<option value="Estonia" data-provinces="[]">Estonia</option>
																		<option value="Ethiopia" data-provinces="[]">Ethiopia</option>
																		<option value="Falkland Islands (Malvinas)" data-provinces="[]">Falkland Islands</option>
																		<option value="Faroe Islands" data-provinces="[]">Faroe Islands</option>
																		<option value="Fiji" data-provinces="[]">Fiji</option>
																		<option value="Finland" data-provinces="[]">Finland</option>
																		<option value="France" data-provinces="[]">France</option>
																		<option value="French Guiana" data-provinces="[]">French Guiana</option>
																		<option value="French Polynesia" data-provinces="[]">French Polynesia</option>
																		<option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
																		<option value="Gabon" data-provinces="[]">Gabon</option>
																		<option value="Gambia" data-provinces="[]">Gambia</option>
																		<option value="Georgia" data-provinces="[]">Georgia</option>
																		<option value="Germany" data-provinces="[]">Germany</option>
																		<option value="Ghana" data-provinces="[]">Ghana</option>
																		<option value="Gibraltar" data-provinces="[]">Gibraltar</option>
																		<option value="Greece" data-provinces="[]">Greece</option>
																		<option value="Greenland" data-provinces="[]">Greenland</option>
																		<option value="Grenada" data-provinces="[]">Grenada</option>
																		<option value="Guadeloupe" data-provinces="[]">Guadeloupe</option>
																		<option value="Guatemala" data-provinces="[[&quot;Alta Verapaz&quot;,&quot;Alta Verapaz&quot;],[&quot;Baja Verapaz&quot;,&quot;Baja Verapaz&quot;],[&quot;Chimaltenango&quot;,&quot;Chimaltenango&quot;],[&quot;Chiquimula&quot;,&quot;Chiquimula&quot;],[&quot;El Progreso&quot;,&quot;El Progreso&quot;],[&quot;Escuintla&quot;,&quot;Escuintla&quot;],[&quot;Guatemala&quot;,&quot;Guatemala&quot;],[&quot;Huehuetenango&quot;,&quot;Huehuetenango&quot;],[&quot;Izabal&quot;,&quot;Izabal&quot;],[&quot;Jalapa&quot;,&quot;Jalapa&quot;],[&quot;Jutiapa&quot;,&quot;Jutiapa&quot;],[&quot;Petén&quot;,&quot;Petén&quot;],[&quot;Quetzaltenango&quot;,&quot;Quetzaltenango&quot;],[&quot;Quiché&quot;,&quot;Quiché&quot;],[&quot;Retalhuleu&quot;,&quot;Retalhuleu&quot;],[&quot;Sacatepéquez&quot;,&quot;Sacatepéquez&quot;],[&quot;San Marcos&quot;,&quot;San Marcos&quot;],[&quot;Santa Rosa&quot;,&quot;Santa Rosa&quot;],[&quot;Sololá&quot;,&quot;Sololá&quot;],[&quot;Suchitepéquez&quot;,&quot;Suchitepéquez&quot;],[&quot;Totonicapán&quot;,&quot;Totonicapán&quot;],[&quot;Zacapa&quot;,&quot;Zacapa&quot;]]">Guatemala</option>
																		<option value="Guernsey" data-provinces="[]">Guernsey</option>
																		<option value="Guinea" data-provinces="[]">Guinea</option>
																		<option value="Guinea Bissau" data-provinces="[]">Guinea-Bissau</option>
																		<option value="Guyana" data-provinces="[]">Guyana</option>
																		<option value="Haiti" data-provinces="[]">Haiti</option>
																		<option value="Heard Island And Mcdonald Islands" data-provinces="[]">Heard &amp; McDonald Islands</option>
																		<option value="Honduras" data-provinces="[]">Honduras</option>
																		<option value="Hong Kong" data-provinces="[]">Hong Kong SAR China</option>
																		<option value="Hungary" data-provinces="[]">Hungary</option>
																		<option value="Iceland" data-provinces="[]">Iceland</option>
																		<option value="India" data-provinces="[[&quot;Andaman and Nicobar&quot;,&quot;Andaman and Nicobar&quot;],[&quot;Andhra Pradesh&quot;,&quot;Andhra Pradesh&quot;],[&quot;Arunachal Pradesh&quot;,&quot;Arunachal Pradesh&quot;],[&quot;Assam&quot;,&quot;Assam&quot;],[&quot;Bihar&quot;,&quot;Bihar&quot;],[&quot;Chandigarh&quot;,&quot;Chandigarh&quot;],[&quot;Chattisgarh&quot;,&quot;Chattisgarh&quot;],[&quot;Dadra and Nagar Haveli&quot;,&quot;Dadra and Nagar Haveli&quot;],[&quot;Daman and Diu&quot;,&quot;Daman and Diu&quot;],[&quot;Delhi&quot;,&quot;Delhi&quot;],[&quot;Goa&quot;,&quot;Goa&quot;],[&quot;Gujarat&quot;,&quot;Gujarat&quot;],[&quot;Haryana&quot;,&quot;Haryana&quot;],[&quot;Himachal Pradesh&quot;,&quot;Himachal Pradesh&quot;],[&quot;Jammu and Kashmir&quot;,&quot;Jammu and Kashmir&quot;],[&quot;Jharkhand&quot;,&quot;Jharkhand&quot;],[&quot;Karnataka&quot;,&quot;Karnataka&quot;],[&quot;Kerala&quot;,&quot;Kerala&quot;],[&quot;Lakshadweep&quot;,&quot;Lakshadweep&quot;],[&quot;Madhya Pradesh&quot;,&quot;Madhya Pradesh&quot;],[&quot;Maharashtra&quot;,&quot;Maharashtra&quot;],[&quot;Manipur&quot;,&quot;Manipur&quot;],[&quot;Meghalaya&quot;,&quot;Meghalaya&quot;],[&quot;Mizoram&quot;,&quot;Mizoram&quot;],[&quot;Nagaland&quot;,&quot;Nagaland&quot;],[&quot;Orissa&quot;,&quot;Orissa&quot;],[&quot;Puducherry&quot;,&quot;Puducherry&quot;],[&quot;Punjab&quot;,&quot;Punjab&quot;],[&quot;Rajasthan&quot;,&quot;Rajasthan&quot;],[&quot;Sikkim&quot;,&quot;Sikkim&quot;],[&quot;Tamil Nadu&quot;,&quot;Tamil Nadu&quot;],[&quot;Telangana&quot;,&quot;Telangana&quot;],[&quot;Tripura&quot;,&quot;Tripura&quot;],[&quot;Uttar Pradesh&quot;,&quot;Uttar Pradesh&quot;],[&quot;Uttarakhand&quot;,&quot;Uttarakhand&quot;],[&quot;West Bengal&quot;,&quot;West Bengal&quot;]]">India</option>
																		<option value="Indonesia" data-provinces="[[&quot;Aceh&quot;,&quot;Aceh&quot;],[&quot;Bali&quot;,&quot;Bali&quot;],[&quot;Bangka Belitung&quot;,&quot;Bangka Belitung&quot;],[&quot;Banten&quot;,&quot;Banten&quot;],[&quot;Bengkulu&quot;,&quot;Bengkulu&quot;],[&quot;Gorontalo&quot;,&quot;Gorontalo&quot;],[&quot;Jakarta&quot;,&quot;Jakarta&quot;],[&quot;Jambi&quot;,&quot;Jambi&quot;],[&quot;Jawa Barat&quot;,&quot;Jawa Barat&quot;],[&quot;Jawa Tengah&quot;,&quot;Jawa Tengah&quot;],[&quot;Jawa Timur&quot;,&quot;Jawa Timur&quot;],[&quot;Kalimantan Barat&quot;,&quot;Kalimantan Barat&quot;],[&quot;Kalimantan Selatan&quot;,&quot;Kalimantan Selatan&quot;],[&quot;Kalimantan Tengah&quot;,&quot;Kalimantan Tengah&quot;],[&quot;Kalimantan Timur&quot;,&quot;Kalimantan Timur&quot;],[&quot;Kalimantan Utara&quot;,&quot;Kalimantan Utara&quot;],[&quot;Kepulauan Riau&quot;,&quot;Kepulauan Riau&quot;],[&quot;Lampung&quot;,&quot;Lampung&quot;],[&quot;Maluku&quot;,&quot;Maluku&quot;],[&quot;Maluku Utara&quot;,&quot;Maluku Utara&quot;],[&quot;Nusa Tenggara Barat&quot;,&quot;Nusa Tenggara Barat&quot;],[&quot;Nusa Tenggara Timur&quot;,&quot;Nusa Tenggara Timur&quot;],[&quot;Papua&quot;,&quot;Papua&quot;],[&quot;Papua Barat&quot;,&quot;Papua Barat&quot;],[&quot;Riau&quot;,&quot;Riau&quot;],[&quot;Sulawesi Barat&quot;,&quot;Sulawesi Barat&quot;],[&quot;Sulawesi Selatan&quot;,&quot;Sulawesi Selatan&quot;],[&quot;Sulawesi Tengah&quot;,&quot;Sulawesi Tengah&quot;],[&quot;Sulawesi Tenggara&quot;,&quot;Sulawesi Tenggara&quot;],[&quot;Sulawesi Utara&quot;,&quot;Sulawesi Utara&quot;],[&quot;Sumatra Barat&quot;,&quot;Sumatra Barat&quot;],[&quot;Sumatra Selatan&quot;,&quot;Sumatra Selatan&quot;],[&quot;Sumatra Utara&quot;,&quot;Sumatra Utara&quot;],[&quot;Yogyakarta&quot;,&quot;Yogyakarta&quot;]]">Indonesia</option>
																		<option value="Iran, Islamic Republic Of" data-provinces="[]">Iran</option>
																		<option value="Iraq" data-provinces="[]">Iraq</option>
																		<option value="Ireland" data-provinces="[[&quot;Carlow&quot;,&quot;Carlow&quot;],[&quot;Cavan&quot;,&quot;Cavan&quot;],[&quot;Clare&quot;,&quot;Clare&quot;],[&quot;Cork&quot;,&quot;Cork&quot;],[&quot;Donegal&quot;,&quot;Donegal&quot;],[&quot;Dublin&quot;,&quot;Dublin&quot;],[&quot;Galway&quot;,&quot;Galway&quot;],[&quot;Kerry&quot;,&quot;Kerry&quot;],[&quot;Kildare&quot;,&quot;Kildare&quot;],[&quot;Kilkenny&quot;,&quot;Kilkenny&quot;],[&quot;Laois&quot;,&quot;Laois&quot;],[&quot;Leitrim&quot;,&quot;Leitrim&quot;],[&quot;Limerick&quot;,&quot;Limerick&quot;],[&quot;Longford&quot;,&quot;Longford&quot;],[&quot;Louth&quot;,&quot;Louth&quot;],[&quot;Mayo&quot;,&quot;Mayo&quot;],[&quot;Meath&quot;,&quot;Meath&quot;],[&quot;Monaghan&quot;,&quot;Monaghan&quot;],[&quot;Offaly&quot;,&quot;Offaly&quot;],[&quot;Roscommon&quot;,&quot;Roscommon&quot;],[&quot;Sligo&quot;,&quot;Sligo&quot;],[&quot;Tipperary&quot;,&quot;Tipperary&quot;],[&quot;Waterford&quot;,&quot;Waterford&quot;],[&quot;Westmeath&quot;,&quot;Westmeath&quot;],[&quot;Wexford&quot;,&quot;Wexford&quot;],[&quot;Wicklow&quot;,&quot;Wicklow&quot;]]">Ireland</option>
																		<option value="Isle Of Man" data-provinces="[]">Isle of Man</option>
																		<option value="Israel" data-provinces="[]">Israel</option>
																		<option value="Italy" data-provinces="[[&quot;Agrigento&quot;,&quot;Agrigento&quot;],[&quot;Alessandria&quot;,&quot;Alessandria&quot;],[&quot;Ancona&quot;,&quot;Ancona&quot;],[&quot;Aosta&quot;,&quot;Aosta&quot;],[&quot;Arezzo&quot;,&quot;Arezzo&quot;],[&quot;Ascoli Piceno&quot;,&quot;Ascoli Piceno&quot;],[&quot;Asti&quot;,&quot;Asti&quot;],[&quot;Avellino&quot;,&quot;Avellino&quot;],[&quot;Bari&quot;,&quot;Bari&quot;],[&quot;Barletta-Andria-Trani&quot;,&quot;Barletta-Andria-Trani&quot;],[&quot;Belluno&quot;,&quot;Belluno&quot;],[&quot;Benevento&quot;,&quot;Benevento&quot;],[&quot;Bergamo&quot;,&quot;Bergamo&quot;],[&quot;Biella&quot;,&quot;Biella&quot;],[&quot;Bologna&quot;,&quot;Bologna&quot;],[&quot;Bolzano&quot;,&quot;Bolzano&quot;],[&quot;Brescia&quot;,&quot;Brescia&quot;],[&quot;Brindisi&quot;,&quot;Brindisi&quot;],[&quot;Cagliari&quot;,&quot;Cagliari&quot;],[&quot;Caltanissetta&quot;,&quot;Caltanissetta&quot;],[&quot;Campobasso&quot;,&quot;Campobasso&quot;],[&quot;Carbonia-Iglesias&quot;,&quot;Carbonia-Iglesias&quot;],[&quot;Caserta&quot;,&quot;Caserta&quot;],[&quot;Catania&quot;,&quot;Catania&quot;],[&quot;Catanzaro&quot;,&quot;Catanzaro&quot;],[&quot;Chieti&quot;,&quot;Chieti&quot;],[&quot;Como&quot;,&quot;Como&quot;],[&quot;Cosenza&quot;,&quot;Cosenza&quot;],[&quot;Cremona&quot;,&quot;Cremona&quot;],[&quot;Crotone&quot;,&quot;Crotone&quot;],[&quot;Cuneo&quot;,&quot;Cuneo&quot;],[&quot;Enna&quot;,&quot;Enna&quot;],[&quot;Fermo&quot;,&quot;Fermo&quot;],[&quot;Ferrara&quot;,&quot;Ferrara&quot;],[&quot;Firenze&quot;,&quot;Firenze&quot;],[&quot;Foggia&quot;,&quot;Foggia&quot;],[&quot;Forlì-Cesena&quot;,&quot;Forlì-Cesena&quot;],[&quot;Frosinone&quot;,&quot;Frosinone&quot;],[&quot;Genova&quot;,&quot;Genova&quot;],[&quot;Gorizia&quot;,&quot;Gorizia&quot;],[&quot;Grosseto&quot;,&quot;Grosseto&quot;],[&quot;Imperia&quot;,&quot;Imperia&quot;],[&quot;Isernia&quot;,&quot;Isernia&quot;],[&quot;L'Aquila&quot;,&quot;L'Aquila&quot;],[&quot;La Spezia&quot;,&quot;La Spezia&quot;],[&quot;Latina&quot;,&quot;Latina&quot;],[&quot;Lecce&quot;,&quot;Lecce&quot;],[&quot;Lecco&quot;,&quot;Lecco&quot;],[&quot;Livorno&quot;,&quot;Livorno&quot;],[&quot;Lodi&quot;,&quot;Lodi&quot;],[&quot;Lucca&quot;,&quot;Lucca&quot;],[&quot;Macerata&quot;,&quot;Macerata&quot;],[&quot;Mantova&quot;,&quot;Mantova&quot;],[&quot;Massa-Carrara&quot;,&quot;Massa-Carrara&quot;],[&quot;Matera&quot;,&quot;Matera&quot;],[&quot;Medio Campidano&quot;,&quot;Medio Campidano&quot;],[&quot;Messina&quot;,&quot;Messina&quot;],[&quot;Milano&quot;,&quot;Milano&quot;],[&quot;Modena&quot;,&quot;Modena&quot;],[&quot;Monza e Brianza&quot;,&quot;Monza e Brianza&quot;],[&quot;Napoli&quot;,&quot;Napoli&quot;],[&quot;Novara&quot;,&quot;Novara&quot;],[&quot;Nuoro&quot;,&quot;Nuoro&quot;],[&quot;Ogliastra&quot;,&quot;Ogliastra&quot;],[&quot;Olbia-Tempio&quot;,&quot;Olbia-Tempio&quot;],[&quot;Oristano&quot;,&quot;Oristano&quot;],[&quot;Padova&quot;,&quot;Padova&quot;],[&quot;Palermo&quot;,&quot;Palermo&quot;],[&quot;Parma&quot;,&quot;Parma&quot;],[&quot;Pavia&quot;,&quot;Pavia&quot;],[&quot;Perugia&quot;,&quot;Perugia&quot;],[&quot;Pesaro e Urbino&quot;,&quot;Pesaro e Urbino&quot;],[&quot;Pescara&quot;,&quot;Pescara&quot;],[&quot;Piacenza&quot;,&quot;Piacenza&quot;],[&quot;Pisa&quot;,&quot;Pisa&quot;],[&quot;Pistoia&quot;,&quot;Pistoia&quot;],[&quot;Pordenone&quot;,&quot;Pordenone&quot;],[&quot;Potenza&quot;,&quot;Potenza&quot;],[&quot;Prato&quot;,&quot;Prato&quot;],[&quot;Ragusa&quot;,&quot;Ragusa&quot;],[&quot;Ravenna&quot;,&quot;Ravenna&quot;],[&quot;Reggio Calabria&quot;,&quot;Reggio Calabria&quot;],[&quot;Reggio Emilia&quot;,&quot;Reggio Emilia&quot;],[&quot;Rieti&quot;,&quot;Rieti&quot;],[&quot;Rimini&quot;,&quot;Rimini&quot;],[&quot;Roma&quot;,&quot;Roma&quot;],[&quot;Rovigo&quot;,&quot;Rovigo&quot;],[&quot;Salerno&quot;,&quot;Salerno&quot;],[&quot;Sassari&quot;,&quot;Sassari&quot;],[&quot;Savona&quot;,&quot;Savona&quot;],[&quot;Siena&quot;,&quot;Siena&quot;],[&quot;Siracusa&quot;,&quot;Siracusa&quot;],[&quot;Sondrio&quot;,&quot;Sondrio&quot;],[&quot;Taranto&quot;,&quot;Taranto&quot;],[&quot;Teramo&quot;,&quot;Teramo&quot;],[&quot;Terni&quot;,&quot;Terni&quot;],[&quot;Torino&quot;,&quot;Torino&quot;],[&quot;Trapani&quot;,&quot;Trapani&quot;],[&quot;Trento&quot;,&quot;Trento&quot;],[&quot;Treviso&quot;,&quot;Treviso&quot;],[&quot;Trieste&quot;,&quot;Trieste&quot;],[&quot;Udine&quot;,&quot;Udine&quot;],[&quot;Varese&quot;,&quot;Varese&quot;],[&quot;Venezia&quot;,&quot;Venezia&quot;],[&quot;Verbano-Cusio-Ossola&quot;,&quot;Verbano-Cusio-Ossola&quot;],[&quot;Vercelli&quot;,&quot;Vercelli&quot;],[&quot;Verona&quot;,&quot;Verona&quot;],[&quot;Vibo Valentia&quot;,&quot;Vibo Valentia&quot;],[&quot;Vicenza&quot;,&quot;Vicenza&quot;],[&quot;Viterbo&quot;,&quot;Viterbo&quot;]]">Italy</option>
																		<option value="Jamaica" data-provinces="[]">Jamaica</option>
																		<option value="Japan" data-provinces="[[&quot;Hokkaidō&quot;,&quot;Hokkaidō&quot;],[&quot;Aomori&quot;,&quot;Aomori&quot;],[&quot;Iwate&quot;,&quot;Iwate&quot;],[&quot;Miyagi&quot;,&quot;Miyagi&quot;],[&quot;Akita&quot;,&quot;Akita&quot;],[&quot;Yamagata&quot;,&quot;Yamagata&quot;],[&quot;Fukushima&quot;,&quot;Fukushima&quot;],[&quot;Ibaraki&quot;,&quot;Ibaraki&quot;],[&quot;Tochigi&quot;,&quot;Tochigi&quot;],[&quot;Gunma&quot;,&quot;Gunma&quot;],[&quot;Saitama&quot;,&quot;Saitama&quot;],[&quot;Chiba&quot;,&quot;Chiba&quot;],[&quot;Tōkyō&quot;,&quot;Tōkyō&quot;],[&quot;Kanagawa&quot;,&quot;Kanagawa&quot;],[&quot;Niigata&quot;,&quot;Niigata&quot;],[&quot;Toyama&quot;,&quot;Toyama&quot;],[&quot;Ishikawa&quot;,&quot;Ishikawa&quot;],[&quot;Fukui&quot;,&quot;Fukui&quot;],[&quot;Yamanashi&quot;,&quot;Yamanashi&quot;],[&quot;Nagano&quot;,&quot;Nagano&quot;],[&quot;Gifu&quot;,&quot;Gifu&quot;],[&quot;Shizuoka&quot;,&quot;Shizuoka&quot;],[&quot;Aichi&quot;,&quot;Aichi&quot;],[&quot;Mie&quot;,&quot;Mie&quot;],[&quot;Shiga&quot;,&quot;Shiga&quot;],[&quot;Kyōto&quot;,&quot;Kyōto&quot;],[&quot;Ōsaka&quot;,&quot;Ōsaka&quot;],[&quot;Hyōgo&quot;,&quot;Hyōgo&quot;],[&quot;Nara&quot;,&quot;Nara&quot;],[&quot;Wakayama&quot;,&quot;Wakayama&quot;],[&quot;Tottori&quot;,&quot;Tottori&quot;],[&quot;Shimane&quot;,&quot;Shimane&quot;],[&quot;Okayama&quot;,&quot;Okayama&quot;],[&quot;Hiroshima&quot;,&quot;Hiroshima&quot;],[&quot;Yamaguchi&quot;,&quot;Yamaguchi&quot;],[&quot;Tokushima&quot;,&quot;Tokushima&quot;],[&quot;Kagawa&quot;,&quot;Kagawa&quot;],[&quot;Ehime&quot;,&quot;Ehime&quot;],[&quot;Kōchi&quot;,&quot;Kōchi&quot;],[&quot;Fukuoka&quot;,&quot;Fukuoka&quot;],[&quot;Saga&quot;,&quot;Saga&quot;],[&quot;Nagasaki&quot;,&quot;Nagasaki&quot;],[&quot;Kumamoto&quot;,&quot;Kumamoto&quot;],[&quot;Ōita&quot;,&quot;Ōita&quot;],[&quot;Miyazaki&quot;,&quot;Miyazaki&quot;],[&quot;Kagoshima&quot;,&quot;Kagoshima&quot;],[&quot;Okinawa&quot;,&quot;Okinawa&quot;]]">Japan</option>
																		<option value="Jersey" data-provinces="[]">Jersey</option>
																		<option value="Jordan" data-provinces="[]">Jordan</option>
																		<option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
																		<option value="Kenya" data-provinces="[]">Kenya</option>
																		<option value="Kiribati" data-provinces="[]">Kiribati</option>
																		<option value="Kosovo" data-provinces="[]">Kosovo</option>
																		<option value="Kuwait" data-provinces="[]">Kuwait</option>
																		<option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
																		<option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
																		<option value="Latvia" data-provinces="[]">Latvia</option>
																		<option value="Lebanon" data-provinces="[]">Lebanon</option>
																		<option value="Lesotho" data-provinces="[]">Lesotho</option>
																		<option value="Liberia" data-provinces="[]">Liberia</option>
																		<option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
																		<option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
																		<option value="Lithuania" data-provinces="[]">Lithuania</option>
																		<option value="Luxembourg" data-provinces="[]">Luxembourg</option>
																		<option value="Macao" data-provinces="[]">Macau SAR China</option>
																		<option value="Macedonia, Republic Of" data-provinces="[]">Macedonia</option>
																		<option value="Madagascar" data-provinces="[]">Madagascar</option>
																		<option value="Malawi" data-provinces="[]">Malawi</option>
																		<option value="Malaysia" data-provinces="[[&quot;Johor&quot;,&quot;Johor&quot;],[&quot;Kedah&quot;,&quot;Kedah&quot;],[&quot;Kelantan&quot;,&quot;Kelantan&quot;],[&quot;Kuala Lumpur&quot;,&quot;Kuala Lumpur&quot;],[&quot;Labuan&quot;,&quot;Labuan&quot;],[&quot;Melaka&quot;,&quot;Melaka&quot;],[&quot;Negeri Sembilan&quot;,&quot;Negeri Sembilan&quot;],[&quot;Pahang&quot;,&quot;Pahang&quot;],[&quot;Perak&quot;,&quot;Perak&quot;],[&quot;Perlis&quot;,&quot;Perlis&quot;],[&quot;Pulau Pinang&quot;,&quot;Pulau Pinang&quot;],[&quot;Putrajaya&quot;,&quot;Putrajaya&quot;],[&quot;Sabah&quot;,&quot;Sabah&quot;],[&quot;Sarawak&quot;,&quot;Sarawak&quot;],[&quot;Selangor&quot;,&quot;Selangor&quot;],[&quot;Terengganu&quot;,&quot;Terengganu&quot;]]">Malaysia</option>
																		<option value="Maldives" data-provinces="[]">Maldives</option>
																		<option value="Mali" data-provinces="[]">Mali</option>
																		<option value="Malta" data-provinces="[]">Malta</option>
																		<option value="Martinique" data-provinces="[]">Martinique</option>
																		<option value="Mauritania" data-provinces="[]">Mauritania</option>
																		<option value="Mauritius" data-provinces="[]">Mauritius</option>
																		<option value="Mayotte" data-provinces="[]">Mayotte</option>
																		<option value="Mexico" data-provinces="[[&quot;Aguascalientes&quot;,&quot;Aguascalientes&quot;],[&quot;Baja California&quot;,&quot;Baja California&quot;],[&quot;Baja California Sur&quot;,&quot;Baja California Sur&quot;],[&quot;Campeche&quot;,&quot;Campeche&quot;],[&quot;Chiapas&quot;,&quot;Chiapas&quot;],[&quot;Chihuahua&quot;,&quot;Chihuahua&quot;],[&quot;Ciudad de México&quot;,&quot;Ciudad de México&quot;],[&quot;Coahuila&quot;,&quot;Coahuila&quot;],[&quot;Colima&quot;,&quot;Colima&quot;],[&quot;Durango&quot;,&quot;Durango&quot;],[&quot;Guanajuato&quot;,&quot;Guanajuato&quot;],[&quot;Guerrero&quot;,&quot;Guerrero&quot;],[&quot;Hidalgo&quot;,&quot;Hidalgo&quot;],[&quot;Jalisco&quot;,&quot;Jalisco&quot;],[&quot;México&quot;,&quot;México&quot;],[&quot;Michoacán&quot;,&quot;Michoacán&quot;],[&quot;Morelos&quot;,&quot;Morelos&quot;],[&quot;Nayarit&quot;,&quot;Nayarit&quot;],[&quot;Nuevo León&quot;,&quot;Nuevo León&quot;],[&quot;Oaxaca&quot;,&quot;Oaxaca&quot;],[&quot;Puebla&quot;,&quot;Puebla&quot;],[&quot;Querétaro&quot;,&quot;Querétaro&quot;],[&quot;Quintana Roo&quot;,&quot;Quintana Roo&quot;],[&quot;San Luis Potosí&quot;,&quot;San Luis Potosí&quot;],[&quot;Sinaloa&quot;,&quot;Sinaloa&quot;],[&quot;Sonora&quot;,&quot;Sonora&quot;],[&quot;Tabasco&quot;,&quot;Tabasco&quot;],[&quot;Tamaulipas&quot;,&quot;Tamaulipas&quot;],[&quot;Tlaxcala&quot;,&quot;Tlaxcala&quot;],[&quot;Veracruz&quot;,&quot;Veracruz&quot;],[&quot;Yucatán&quot;,&quot;Yucatán&quot;],[&quot;Zacatecas&quot;,&quot;Zacatecas&quot;]]">Mexico</option>
																		<option value="Moldova, Republic of" data-provinces="[]">Moldova</option>
																		<option value="Monaco" data-provinces="[]">Monaco</option>
																		<option value="Mongolia" data-provinces="[]">Mongolia</option>
																		<option value="Montenegro" data-provinces="[]">Montenegro</option>
																		<option value="Montserrat" data-provinces="[]">Montserrat</option>
																		<option value="Morocco" data-provinces="[]">Morocco</option>
																		<option value="Mozambique" data-provinces="[]">Mozambique</option>
																		<option value="Myanmar" data-provinces="[]">Myanmar (Burma)</option>
																		<option value="Namibia" data-provinces="[]">Namibia</option>
																		<option value="Nauru" data-provinces="[]">Nauru</option>
																		<option value="Nepal" data-provinces="[]">Nepal</option>
																		<option value="Netherlands" data-provinces="[]">Netherlands</option>
																		<option value="Netherlands Antilles" data-provinces="[]">Netherlands Antilles</option>
																		<option value="New Caledonia" data-provinces="[]">New Caledonia</option>
																		<option value="New Zealand" data-provinces="[[&quot;Auckland&quot;,&quot;Auckland&quot;],[&quot;Bay of Plenty&quot;,&quot;Bay of Plenty&quot;],[&quot;Canterbury&quot;,&quot;Canterbury&quot;],[&quot;Gisborne&quot;,&quot;Gisborne&quot;],[&quot;Hawke's Bay&quot;,&quot;Hawke's Bay&quot;],[&quot;Manawatu-Wanganui&quot;,&quot;Manawatu-Wanganui&quot;],[&quot;Marlborough&quot;,&quot;Marlborough&quot;],[&quot;Nelson&quot;,&quot;Nelson&quot;],[&quot;Northland&quot;,&quot;Northland&quot;],[&quot;Otago&quot;,&quot;Otago&quot;],[&quot;Southland&quot;,&quot;Southland&quot;],[&quot;Taranaki&quot;,&quot;Taranaki&quot;],[&quot;Tasman&quot;,&quot;Tasman&quot;],[&quot;Waikato&quot;,&quot;Waikato&quot;],[&quot;Wellington&quot;,&quot;Wellington&quot;],[&quot;West Coast&quot;,&quot;West Coast&quot;]]">New Zealand</option>
																		<option value="Nicaragua" data-provinces="[]">Nicaragua</option>
																		<option value="Niger" data-provinces="[]">Niger</option>
																		<option value="Nigeria" data-provinces="[]">Nigeria</option>
																		<option value="Niue" data-provinces="[]">Niue</option>
																		<option value="Norfolk Island" data-provinces="[]">Norfolk Island</option>
																		<option value="Korea, Democratic People's Republic Of" data-provinces="[]">North Korea</option>
																		<option value="Norway" data-provinces="[]">Norway</option>
																		<option value="Oman" data-provinces="[]">Oman</option>
																		<option value="Pakistan" data-provinces="[]">Pakistan</option>
																		<option value="Palestinian Territory, Occupied" data-provinces="[]">Palestinian Territories</option>
																		<option value="Panama" data-provinces="[[&quot;Bocas del Toro&quot;,&quot;Bocas del Toro&quot;],[&quot;Chiriquí&quot;,&quot;Chiriquí&quot;],[&quot;Coclé&quot;,&quot;Coclé&quot;],[&quot;Colón&quot;,&quot;Colón&quot;],[&quot;Darién&quot;,&quot;Darién&quot;],[&quot;Emberá&quot;,&quot;Emberá&quot;],[&quot;Herrera&quot;,&quot;Herrera&quot;],[&quot;Kuna Yala&quot;,&quot;Kuna Yala&quot;],[&quot;Los Santos&quot;,&quot;Los Santos&quot;],[&quot;Ngöbe-Buglé&quot;,&quot;Ngöbe-Buglé&quot;],[&quot;Panamá&quot;,&quot;Panamá&quot;],[&quot;Panamá Oeste&quot;,&quot;Panamá Oeste&quot;],[&quot;Veraguas&quot;,&quot;Veraguas&quot;]]">Panama</option>
																		<option value="Papua New Guinea" data-provinces="[]">Papua New Guinea</option>
																		<option value="Paraguay" data-provinces="[]">Paraguay</option>
																		<option value="Peru" data-provinces="[]">Peru</option>
																		<option value="Philippines" data-provinces="[]">Philippines</option>
																		<option value="Pitcairn" data-provinces="[]">Pitcairn Islands</option>
																		<option value="Poland" data-provinces="[]">Poland</option>
																		<option value="Portugal" data-provinces="[[&quot;Açores&quot;,&quot;Açores&quot;],[&quot;Aveiro&quot;,&quot;Aveiro&quot;],[&quot;Beja&quot;,&quot;Beja&quot;],[&quot;Braga&quot;,&quot;Braga&quot;],[&quot;Bragança&quot;,&quot;Bragança&quot;],[&quot;Castelo Branco&quot;,&quot;Castelo Branco&quot;],[&quot;Coimbra&quot;,&quot;Coimbra&quot;],[&quot;Évora&quot;,&quot;Évora&quot;],[&quot;Faro&quot;,&quot;Faro&quot;],[&quot;Guarda&quot;,&quot;Guarda&quot;],[&quot;Leiria&quot;,&quot;Leiria&quot;],[&quot;Lisboa&quot;,&quot;Lisboa&quot;],[&quot;Madeira&quot;,&quot;Madeira&quot;],[&quot;Portalegre&quot;,&quot;Portalegre&quot;],[&quot;Porto&quot;,&quot;Porto&quot;],[&quot;Santarém&quot;,&quot;Santarém&quot;],[&quot;Setúbal&quot;,&quot;Setúbal&quot;],[&quot;Viana do Castelo&quot;,&quot;Viana do Castelo&quot;],[&quot;Vila Real&quot;,&quot;Vila Real&quot;],[&quot;Viseu&quot;,&quot;Viseu&quot;]]">Portugal</option>
																		<option value="Qatar" data-provinces="[]">Qatar</option>
																		<option value="Reunion" data-provinces="[]">Réunion</option>
																		<option value="Romania" data-provinces="[]">Romania</option>
																		<option value="Russia" data-provinces="[[&quot;Altai Krai&quot;,&quot;Altai Krai&quot;],[&quot;Altai Republic&quot;,&quot;Altai Republic&quot;],[&quot;Amur Oblast&quot;,&quot;Amur Oblast&quot;],[&quot;Arkhangelsk Oblast&quot;,&quot;Arkhangelsk Oblast&quot;],[&quot;Astrakhan Oblast&quot;,&quot;Astrakhan Oblast&quot;],[&quot;Belgorod Oblast&quot;,&quot;Belgorod Oblast&quot;],[&quot;Bryansk Oblast&quot;,&quot;Bryansk Oblast&quot;],[&quot;Chechen Republic&quot;,&quot;Chechen Republic&quot;],[&quot;Chelyabinsk Oblast&quot;,&quot;Chelyabinsk Oblast&quot;],[&quot;Chukotka Autonomous Okrug&quot;,&quot;Chukotka Autonomous Okrug&quot;],[&quot;Chuvash Republic&quot;,&quot;Chuvash Republic&quot;],[&quot;Irkutsk Oblast&quot;,&quot;Irkutsk Oblast&quot;],[&quot;Ivanovo Oblast&quot;,&quot;Ivanovo Oblast&quot;],[&quot;Jewish Autonomous Oblast&quot;,&quot;Jewish Autonomous Oblast&quot;],[&quot;Kabardino-Balkarian Republic&quot;,&quot;Kabardino-Balkarian Republic&quot;],[&quot;Kaliningrad Oblast&quot;,&quot;Kaliningrad Oblast&quot;],[&quot;Kaluga Oblast&quot;,&quot;Kaluga Oblast&quot;],[&quot;Kamchatka Krai&quot;,&quot;Kamchatka Krai&quot;],[&quot;Karachay–Cherkess Republic&quot;,&quot;Karachay–Cherkess Republic&quot;],[&quot;Kemerovo Oblast&quot;,&quot;Kemerovo Oblast&quot;],[&quot;Khabarovsk Krai&quot;,&quot;Khabarovsk Krai&quot;],[&quot;Khanty-Mansi Autonomous Okrug&quot;,&quot;Khanty-Mansi Autonomous Okrug&quot;],[&quot;Kirov Oblast&quot;,&quot;Kirov Oblast&quot;],[&quot;Komi Republic&quot;,&quot;Komi Republic&quot;],[&quot;Kostroma Oblast&quot;,&quot;Kostroma Oblast&quot;],[&quot;Krasnodar Krai&quot;,&quot;Krasnodar Krai&quot;],[&quot;Krasnoyarsk Krai&quot;,&quot;Krasnoyarsk Krai&quot;],[&quot;Kurgan Oblast&quot;,&quot;Kurgan Oblast&quot;],[&quot;Kursk Oblast&quot;,&quot;Kursk Oblast&quot;],[&quot;Leningrad Oblast&quot;,&quot;Leningrad Oblast&quot;],[&quot;Lipetsk Oblast&quot;,&quot;Lipetsk Oblast&quot;],[&quot;Magadan Oblast&quot;,&quot;Magadan Oblast&quot;],[&quot;Mari El Republic&quot;,&quot;Mari El Republic&quot;],[&quot;Moscow&quot;,&quot;Moscow&quot;],[&quot;Moscow Oblast&quot;,&quot;Moscow Oblast&quot;],[&quot;Murmansk Oblast&quot;,&quot;Murmansk Oblast&quot;],[&quot;Nizhny Novgorod Oblast&quot;,&quot;Nizhny Novgorod Oblast&quot;],[&quot;Novgorod Oblast&quot;,&quot;Novgorod Oblast&quot;],[&quot;Novosibirsk Oblast&quot;,&quot;Novosibirsk Oblast&quot;],[&quot;Omsk Oblast&quot;,&quot;Omsk Oblast&quot;],[&quot;Orenburg Oblast&quot;,&quot;Orenburg Oblast&quot;],[&quot;Oryol Oblast&quot;,&quot;Oryol Oblast&quot;],[&quot;Penza Oblast&quot;,&quot;Penza Oblast&quot;],[&quot;Perm Krai&quot;,&quot;Perm Krai&quot;],[&quot;Primorsky Krai&quot;,&quot;Primorsky Krai&quot;],[&quot;Pskov Oblast&quot;,&quot;Pskov Oblast&quot;],[&quot;Republic of Adygeya&quot;,&quot;Republic of Adygeya&quot;],[&quot;Republic of Bashkortostan&quot;,&quot;Republic of Bashkortostan&quot;],[&quot;Republic of Buryatia&quot;,&quot;Republic of Buryatia&quot;],[&quot;Republic of Dagestan&quot;,&quot;Republic of Dagestan&quot;],[&quot;Republic of Ingushetia&quot;,&quot;Republic of Ingushetia&quot;],[&quot;Republic of Kalmykia&quot;,&quot;Republic of Kalmykia&quot;],[&quot;Republic of Karelia&quot;,&quot;Republic of Karelia&quot;],[&quot;Republic of Khakassia&quot;,&quot;Republic of Khakassia&quot;],[&quot;Republic of Mordovia&quot;,&quot;Republic of Mordovia&quot;],[&quot;Republic of North Ossetia–Alania&quot;,&quot;Republic of North Ossetia–Alania&quot;],[&quot;Republic of Tatarstan&quot;,&quot;Republic of Tatarstan&quot;],[&quot;Rostov Oblast&quot;,&quot;Rostov Oblast&quot;],[&quot;Ryazan Oblast&quot;,&quot;Ryazan Oblast&quot;],[&quot;Saint Petersburg&quot;,&quot;Saint Petersburg&quot;],[&quot;Sakha Republic (Yakutia)&quot;,&quot;Sakha Republic (Yakutia)&quot;],[&quot;Sakhalin Oblast&quot;,&quot;Sakhalin Oblast&quot;],[&quot;Samara Oblast&quot;,&quot;Samara Oblast&quot;],[&quot;Saratov Oblast&quot;,&quot;Saratov Oblast&quot;],[&quot;Smolensk Oblast&quot;,&quot;Smolensk Oblast&quot;],[&quot;Stavropol Krai&quot;,&quot;Stavropol Krai&quot;],[&quot;Sverdlovsk Oblast&quot;,&quot;Sverdlovsk Oblast&quot;],[&quot;Tambov Oblast&quot;,&quot;Tambov Oblast&quot;],[&quot;Tomsk Oblast&quot;,&quot;Tomsk Oblast&quot;],[&quot;Tula Oblast&quot;,&quot;Tula Oblast&quot;],[&quot;Tver Oblast&quot;,&quot;Tver Oblast&quot;],[&quot;Tyumen Oblast&quot;,&quot;Tyumen Oblast&quot;],[&quot;Tyva Republic&quot;,&quot;Tyva Republic&quot;],[&quot;Udmurtia&quot;,&quot;Udmurtia&quot;],[&quot;Ulyanovsk Oblast&quot;,&quot;Ulyanovsk Oblast&quot;],[&quot;Vladimir Oblast&quot;,&quot;Vladimir Oblast&quot;],[&quot;Volgograd Oblast&quot;,&quot;Volgograd Oblast&quot;],[&quot;Vologda Oblast&quot;,&quot;Vologda Oblast&quot;],[&quot;Voronezh Oblast&quot;,&quot;Voronezh Oblast&quot;],[&quot;Yamalo-Nenets Autonomous Okrug&quot;,&quot;Yamalo-Nenets Autonomous Okrug&quot;],[&quot;Yaroslavl Oblast&quot;,&quot;Yaroslavl Oblast&quot;],[&quot;Zabaykalsky Krai&quot;,&quot;Zabaykalsky Krai&quot;]]">Russia</option>
																		<option value="Rwanda" data-provinces="[]">Rwanda</option>
																		<option value="Sint Maarten" data-provinces="[]">Saint Martin</option>
																		<option value="Samoa" data-provinces="[]">Samoa</option>
																		<option value="San Marino" data-provinces="[]">San Marino</option>
																		<option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
																		<option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
																		<option value="Senegal" data-provinces="[]">Senegal</option>
																		<option value="Serbia" data-provinces="[]">Serbia</option>
																		<option value="Seychelles" data-provinces="[]">Seychelles</option>
																		<option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
																		<option value="Singapore" data-provinces="[]">Singapore</option>
																		<option value="Slovakia" data-provinces="[]">Slovakia</option>
																		<option value="Slovenia" data-provinces="[]">Slovenia</option>
																		<option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
																		<option value="Somalia" data-provinces="[]">Somalia</option>
																		<option value="South Africa" data-provinces="[[&quot;Eastern Cape&quot;,&quot;Eastern Cape&quot;],[&quot;Free State&quot;,&quot;Free State&quot;],[&quot;Gauteng&quot;,&quot;Gauteng&quot;],[&quot;KwaZulu-Natal&quot;,&quot;KwaZulu-Natal&quot;],[&quot;Limpopo&quot;,&quot;Limpopo&quot;],[&quot;Mpumalanga&quot;,&quot;Mpumalanga&quot;],[&quot;North West&quot;,&quot;North West&quot;],[&quot;Northern Cape&quot;,&quot;Northern Cape&quot;],[&quot;Western Cape&quot;,&quot;Western Cape&quot;]]">South Africa</option>
																		<option value="South Georgia And The South Sandwich Islands" data-provinces="[]">South Georgia &amp; South Sandwich Islands</option>
																		<option value="South Korea" data-provinces="[[&quot;Busan&quot;,&quot;Busan&quot;],[&quot;Chungbuk&quot;,&quot;Chungbuk&quot;],[&quot;Chungnam&quot;,&quot;Chungnam&quot;],[&quot;Daegu&quot;,&quot;Daegu&quot;],[&quot;Daejeon&quot;,&quot;Daejeon&quot;],[&quot;Gangwon&quot;,&quot;Gangwon&quot;],[&quot;Gwangju&quot;,&quot;Gwangju&quot;],[&quot;Gyeongbuk&quot;,&quot;Gyeongbuk&quot;],[&quot;Gyeonggi&quot;,&quot;Gyeonggi&quot;],[&quot;Gyeongnam&quot;,&quot;Gyeongnam&quot;],[&quot;Incheon&quot;,&quot;Incheon&quot;],[&quot;Jeju&quot;,&quot;Jeju&quot;],[&quot;Jeonbuk&quot;,&quot;Jeonbuk&quot;],[&quot;Jeonnam&quot;,&quot;Jeonnam&quot;],[&quot;Sejong&quot;,&quot;Sejong&quot;],[&quot;Seoul&quot;,&quot;Seoul&quot;],[&quot;Ulsan&quot;,&quot;Ulsan&quot;]]">South Korea</option>
																		<option value="South Sudan" data-provinces="[]">South Sudan</option>
																		<option value="Spain" data-provinces="[[&quot;A Coruña&quot;,&quot;A Coruña&quot;],[&quot;Álava&quot;,&quot;Álava&quot;],[&quot;Albacete&quot;,&quot;Albacete&quot;],[&quot;Alicante&quot;,&quot;Alicante&quot;],[&quot;Almería&quot;,&quot;Almería&quot;],[&quot;Asturias&quot;,&quot;Asturias&quot;],[&quot;Ávila&quot;,&quot;Ávila&quot;],[&quot;Badajoz&quot;,&quot;Badajoz&quot;],[&quot;Balears&quot;,&quot;Balears&quot;],[&quot;Barcelona&quot;,&quot;Barcelona&quot;],[&quot;Burgos&quot;,&quot;Burgos&quot;],[&quot;Cáceres&quot;,&quot;Cáceres&quot;],[&quot;Cádiz&quot;,&quot;Cádiz&quot;],[&quot;Cantabria&quot;,&quot;Cantabria&quot;],[&quot;Castellón&quot;,&quot;Castellón&quot;],[&quot;Ceuta&quot;,&quot;Ceuta&quot;],[&quot;Ciudad Real&quot;,&quot;Ciudad Real&quot;],[&quot;Córdoba&quot;,&quot;Córdoba&quot;],[&quot;Cuenca&quot;,&quot;Cuenca&quot;],[&quot;Girona&quot;,&quot;Girona&quot;],[&quot;Granada&quot;,&quot;Granada&quot;],[&quot;Guadalajara&quot;,&quot;Guadalajara&quot;],[&quot;Guipúzcoa&quot;,&quot;Guipúzcoa&quot;],[&quot;Huelva&quot;,&quot;Huelva&quot;],[&quot;Huesca&quot;,&quot;Huesca&quot;],[&quot;Jaén&quot;,&quot;Jaén&quot;],[&quot;La Rioja&quot;,&quot;La Rioja&quot;],[&quot;Las Palmas&quot;,&quot;Las Palmas&quot;],[&quot;León&quot;,&quot;León&quot;],[&quot;Lleida&quot;,&quot;Lleida&quot;],[&quot;Lugo&quot;,&quot;Lugo&quot;],[&quot;Madrid&quot;,&quot;Madrid&quot;],[&quot;Málaga&quot;,&quot;Málaga&quot;],[&quot;Melilla&quot;,&quot;Melilla&quot;],[&quot;Murcia&quot;,&quot;Murcia&quot;],[&quot;Navarra&quot;,&quot;Navarra&quot;],[&quot;Ourense&quot;,&quot;Ourense&quot;],[&quot;Palencia&quot;,&quot;Palencia&quot;],[&quot;Pontevedra&quot;,&quot;Pontevedra&quot;],[&quot;Salamanca&quot;,&quot;Salamanca&quot;],[&quot;Santa Cruz de Tenerife&quot;,&quot;Santa Cruz de Tenerife&quot;],[&quot;Segovia&quot;,&quot;Segovia&quot;],[&quot;Sevilla&quot;,&quot;Sevilla&quot;],[&quot;Soria&quot;,&quot;Soria&quot;],[&quot;Tarragona&quot;,&quot;Tarragona&quot;],[&quot;Teruel&quot;,&quot;Teruel&quot;],[&quot;Toledo&quot;,&quot;Toledo&quot;],[&quot;Valencia&quot;,&quot;Valencia&quot;],[&quot;Valladolid&quot;,&quot;Valladolid&quot;],[&quot;Vizcaya&quot;,&quot;Vizcaya&quot;],[&quot;Zamora&quot;,&quot;Zamora&quot;],[&quot;Zaragoza&quot;,&quot;Zaragoza&quot;]]">Spain</option>
																		<option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
																		<option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
																		<option value="Saint Helena" data-provinces="[]">St. Helena</option>
																		<option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
																		<option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
																		<option value="Saint Martin" data-provinces="[]">St. Martin</option>
																		<option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
																		<option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
																		<option value="Sudan" data-provinces="[]">Sudan</option>
																		<option value="Suriname" data-provinces="[]">Suriname</option>
																		<option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
																		<option value="Swaziland" data-provinces="[]">Swaziland</option>
																		<option value="Sweden" data-provinces="[]">Sweden</option>
																		<option value="Switzerland" data-provinces="[]">Switzerland</option>
																		<option value="Syria" data-provinces="[]">Syria</option>
																		<option value="Taiwan" data-provinces="[]">Taiwan</option>
																		<option value="Tajikistan" data-provinces="[]">Tajikistan</option>
																		<option value="Tanzania, United Republic Of" data-provinces="[]">Tanzania</option>
																		<option value="Thailand" data-provinces="[]">Thailand</option>
																		<option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
																		<option value="Togo" data-provinces="[]">Togo</option>
																		<option value="Tokelau" data-provinces="[]">Tokelau</option>
																		<option value="Tonga" data-provinces="[]">Tonga</option>
																		<option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
																		<option value="Tunisia" data-provinces="[]">Tunisia</option>
																		<option value="Turkey" data-provinces="[]">Turkey</option>
																		<option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
																		<option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
																		<option value="Tuvalu" data-provinces="[]">Tuvalu</option>
																		<option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
																		<option value="Uganda" data-provinces="[]">Uganda</option>
																		<option value="Ukraine" data-provinces="[]">Ukraine</option>
																		<option value="United Arab Emirates" data-provinces="[[&quot;Abu Dhabi&quot;,&quot;Abu Dhabi&quot;],[&quot;Ajman&quot;,&quot;Ajman&quot;],[&quot;Dubai&quot;,&quot;Dubai&quot;],[&quot;Fujairah&quot;,&quot;Fujairah&quot;],[&quot;Ras al-Khaimah&quot;,&quot;Ras al-Khaimah&quot;],[&quot;Sharjah&quot;,&quot;Sharjah&quot;],[&quot;Umm al-Quwain&quot;,&quot;Umm al-Quwain&quot;]]">United Arab Emirates</option>
																		<option value="United Kingdom" data-provinces="[]">United Kingdom</option>
																		<option value="United States" data-provinces="[[&quot;Alabama&quot;,&quot;Alabama&quot;],[&quot;Alaska&quot;,&quot;Alaska&quot;],[&quot;American Samoa&quot;,&quot;American Samoa&quot;],[&quot;Arizona&quot;,&quot;Arizona&quot;],[&quot;Arkansas&quot;,&quot;Arkansas&quot;],[&quot;California&quot;,&quot;California&quot;],[&quot;Colorado&quot;,&quot;Colorado&quot;],[&quot;Connecticut&quot;,&quot;Connecticut&quot;],[&quot;Delaware&quot;,&quot;Delaware&quot;],[&quot;District of Columbia&quot;,&quot;District of Columbia&quot;],[&quot;Federated States of Micronesia&quot;,&quot;Federated States of Micronesia&quot;],[&quot;Florida&quot;,&quot;Florida&quot;],[&quot;Georgia&quot;,&quot;Georgia&quot;],[&quot;Guam&quot;,&quot;Guam&quot;],[&quot;Hawaii&quot;,&quot;Hawaii&quot;],[&quot;Idaho&quot;,&quot;Idaho&quot;],[&quot;Illinois&quot;,&quot;Illinois&quot;],[&quot;Indiana&quot;,&quot;Indiana&quot;],[&quot;Iowa&quot;,&quot;Iowa&quot;],[&quot;Kansas&quot;,&quot;Kansas&quot;],[&quot;Kentucky&quot;,&quot;Kentucky&quot;],[&quot;Louisiana&quot;,&quot;Louisiana&quot;],[&quot;Maine&quot;,&quot;Maine&quot;],[&quot;Marshall Islands&quot;,&quot;Marshall Islands&quot;],[&quot;Maryland&quot;,&quot;Maryland&quot;],[&quot;Massachusetts&quot;,&quot;Massachusetts&quot;],[&quot;Michigan&quot;,&quot;Michigan&quot;],[&quot;Minnesota&quot;,&quot;Minnesota&quot;],[&quot;Mississippi&quot;,&quot;Mississippi&quot;],[&quot;Missouri&quot;,&quot;Missouri&quot;],[&quot;Montana&quot;,&quot;Montana&quot;],[&quot;Nebraska&quot;,&quot;Nebraska&quot;],[&quot;Nevada&quot;,&quot;Nevada&quot;],[&quot;New Hampshire&quot;,&quot;New Hampshire&quot;],[&quot;New Jersey&quot;,&quot;New Jersey&quot;],[&quot;New Mexico&quot;,&quot;New Mexico&quot;],[&quot;New York&quot;,&quot;New York&quot;],[&quot;North Carolina&quot;,&quot;North Carolina&quot;],[&quot;North Dakota&quot;,&quot;North Dakota&quot;],[&quot;Northern Mariana Islands&quot;,&quot;Northern Mariana Islands&quot;],[&quot;Ohio&quot;,&quot;Ohio&quot;],[&quot;Oklahoma&quot;,&quot;Oklahoma&quot;],[&quot;Oregon&quot;,&quot;Oregon&quot;],[&quot;Palau&quot;,&quot;Palau&quot;],[&quot;Pennsylvania&quot;,&quot;Pennsylvania&quot;],[&quot;Puerto Rico&quot;,&quot;Puerto Rico&quot;],[&quot;Rhode Island&quot;,&quot;Rhode Island&quot;],[&quot;South Carolina&quot;,&quot;South Carolina&quot;],[&quot;South Dakota&quot;,&quot;South Dakota&quot;],[&quot;Tennessee&quot;,&quot;Tennessee&quot;],[&quot;Texas&quot;,&quot;Texas&quot;],[&quot;Utah&quot;,&quot;Utah&quot;],[&quot;Vermont&quot;,&quot;Vermont&quot;],[&quot;Virgin Islands&quot;,&quot;Virgin Islands&quot;],[&quot;Virginia&quot;,&quot;Virginia&quot;],[&quot;Washington&quot;,&quot;Washington&quot;],[&quot;West Virginia&quot;,&quot;West Virginia&quot;],[&quot;Wisconsin&quot;,&quot;Wisconsin&quot;],[&quot;Wyoming&quot;,&quot;Wyoming&quot;],[&quot;Armed Forces Americas&quot;,&quot;Armed Forces Americas&quot;],[&quot;Armed Forces Europe&quot;,&quot;Armed Forces Europe&quot;],[&quot;Armed Forces Pacific&quot;,&quot;Armed Forces Pacific&quot;]]">United States</option>
																		<option value="Uruguay" data-provinces="[]">Uruguay</option>
																		<option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
																		<option value="Vanuatu" data-provinces="[]">Vanuatu</option>
																		<option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
																		<option value="Venezuela" data-provinces="[]">Venezuela</option>
																		<option value="Vietnam" data-provinces="[]">Vietnam</option>
																		<option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
																		<option value="Western Sahara" data-provinces="[]">Western Sahara</option>
																		<option value="Yemen" data-provinces="[]">Yemen</option>
																		<option value="Zambia" data-provinces="[]">Zambia</option>
																		<option value="Zimbabwe" data-provinces="[]">Zimbabwe</option>
																	</select>
																</div>
																<div class="form-item" id="address_province_container" style="">
																	<label for="address_province" id="address_province_label">State</label>
																	<select id="address_province" name="address[province]" data-default=""><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="American Samoa">American Samoa</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Federated States of Micronesia">Federated States of Micronesia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Marshall Islands">Marshall Islands</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Palau">Palau</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virgin Islands">Virgin Islands</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option></select>
																</div>
																<div class="form-item">
																	<label for="address_zip">Zip/Postal Code</label>
																	<input type="text" id="address_zip" name="address[zip]">
																</div>
																<div class="form-action">
																	<input type="button" class="get-rates _btn button" value="Calculate shipping">
																</div>
															</div>
														</div>
													</div>
													<div class="checkout-buttons col-sm-6 col-xs-12">
														<div class="note-content group_form">
															<div class="form-item">
																<label for="note">Add special instructions for your order</label>
																<textarea id="note" name="note" placeholder="Enter text here..."></textarea>
															</div>
														</div>
														<div class="checkout-content">
															<div class="buttons clearfix">
																<a href="<?=base_url().'/Pizza/buy/'.$item['id']?>"><input   id="checkout" class="_btn" name="checkout" value="Check Out"></a>
															</div>
														</div>
													</div>
												</div>
											</form>
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
	