<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_fastfood/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 11:42:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="http://demo.designshopify.com/" />
	<meta name="theme-color" content="#7796A8">
	<meta name="description" content="" />
	<title>
	Login - Fast Food
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
											<?php foreach($logo as $l) {?>
											<?= $l->logo_image;?>
											<h1 style="display:none"><a href="http://demo.designshopify.com/">Fast Food</a></h1>
										<?php } ?>	</div>
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
									</ul>
									</div>
									<div class="nav-icon">
											
											</div>
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
			<section class="customers-layout login-layout">
				<div class="customers-wrapper">
					<div class="container">
						<div class="row">
							<div class="customers-inner">
								<div class="customers-content">
									<div id="login" class="customers">
										<h2>CONFROM_PASSWORD</h2>
										<form method="post" action="<?= $action; ?>" accept-charset="UTF-8">
										
											<div class="clearfix large_form form-item form-password">
												<input type="password" value="" placeholder="Password" name="tpassword" id="customer_password" class="text" size="16">
												<span class="cs-icon icon-eye"></span>
											</div>
										
											<div class="action_bottom">
												<input class="_btn" type="submit" value="Sign In">
											</div>
											
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<script type="text/javascript">
				function showRecoverPasswordForm() {
					document.getElementById('recover-password').style.display = 'block';
					document.getElementById('login').style.display = 'none';
				}

				function hideRecoverPasswordForm() {
					document.getElementById('recover-password').style.display = 'none';
					document.getElementById('login').style.display = 'block';
				}

				if (window.location.hash == '#recover') {
					showRecoverPasswordForm()
				}
			</script>
		</main>
	</div>
	
