<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">About Us</h1>
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="about-us.html" title="About Us" itemprop="url"><span itemprop="title">About Us</span></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="shopify-section-1507179171162" class="shopify-section index-section index-section-slideshow  hidden">
			<div data-section-id="1507179171162" data-section-type="slideshow-section">
				<section class="home-slideshow-layout">
					<div class="home-slideshow-wrapper">
						<div class="group-home-slideshow">
							<div class="home-slideshow-inner">
								<div class="home-slideshow-content slideshow_1507179171162">
									<ul>	
										<?php foreach($slider as $s){ ?>
										<li data-transition="random-static" data-masterspeed="2000" data-saveperformance="on">
											<!---<img src="<?=base_url();?>assets_client/s/files/1/2487/3424/files/1_83ead4e7-aea5-4e9d-9434-4955aa4586dc.jpg" data-lazyload="<?= base_url(); ?>assets_client/s/files/1/2487/3424/files/1_83ead4e7-aea5-4e9d-9434-4955aa4586dc.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">-->
											 <?= $s->banner_image; ?>
	
											<div class="slideshow-caption position-left transition-fade">
												<div class="group">
													<a href="">
														<img src="<?= base_url(); ?>assets_client/images/slideshow-caption-1.png" alt="" />
													</a>
													<a class="_btn" href="">Find out more!</a>
												</div>
											</div>
										</li>
										<?php } ?>
										</ul>
									<div class="tp-bannertimer"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<section class="page-content">
			<div class="page-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-inner">
							<div id="shopify-section-about-template" class="shopify-section">
								<div class="about-content">
									<div class="introduction_layout">
										<div class="introduction_inner">
											<div class="page_title">
												<h2 class="title">
													<span class="first">About</span>
													<span class="last"> Yummy</span>
												</h2>
												<p class="caption">Tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
											</div>
											
										</div>
									</div>
									<div class="team_layout">
										<div class="page_title">
											<h2 class="title">
												<span class="first">Our</span>
												<span class="last"> Yummy Team</span>
											</h2>
											<p class="caption">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</p>
										</div>
										<div class="team_inner">
											<div class="team_content">
												<div class="team_item col-sm-4">
													<div class="item_avatar">
														<img src="<?= base_url(); ?>assets_client/images/about_avatar_1.jpg" alt="">
													</div>
													<div class="item_content">
														<p class="item_name">
															sara bethel
														</p><br><br>
														<p class="item_position">
															Chef
														</p>
														<br>
														<br>
												
														<br>
														<p class="item_description">
															Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
														</p>
													</div>
												</div>
												<div class="team_item col-sm-4">
													<div class="item_avatar">
														<img src="<?= base_url(); ?>assets_client/images/about_avatar_2.jpg" alt="">
													</div>
													<div class="item_content">
														<p class="item_name">
															odio tincidunt
														</p>
														<p class="item_position">
															CEO/Founder
														</p>
														<p class="item_description">
															Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
														</p>
													</div>
												</div>
												<div class="team_item col-sm-4">
													<div class="item_avatar">
														<img src="<?= base_url(); ?>assets_client/images/about_avatar_3.jpg" alt="">
													</div>
													<div class="item_content">
														<p class="item_name">
															odio tincidunt
														</p>
														<p class="item_position">
															Chef
														</p>
														<p class="item_description">
															Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
														</p>
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
