
<body class="fastfood_1" >

	<div class="fix-sticky"></div>
	<br>
	<br>
	<br>
	<br>
	
	<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="heading-content">
				<div class="heading-wrapper">
					<div class="container">
						<center>
						<?php if($this->input->get('em')){?>
						<div class="alert alert-info"><h3>* Thank You For Feedback *</h3><a href="<?= base_url();?>Pizza">back to home</a></div>
						<?php }?>
						</center>
						<div class="row">
						
							<div class="page-heading-inner heading-group">
								<div class="breadcrumb-group">
									<h1 class="hidden">FAQs</h1>
									<div class="breadcrumb clearfix">
										<span><a href="/" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span>
											<a href="/" title="FAQs" itemprop="url"><span itemprop="title">FAQs</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page-content">
				<div class="page-wrapper">
					<div class="container">
						<div class="row">
							<div class="page-inner">
								<div id="shopify-section-faq-template" class="shopify-section">
									<div class="faqs-content">
										<div class="questions-layout">
											<div class="questions-inner">
												<div class="accordions-content">
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<div class="panel-heading active" role="tab" id="tab_heading1">
																<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse1" aria-expanded="true" aria-controls="tab_collapse1"><span class="cs-icon icon-minus"></span>
																	  1. Feedback
																	</a>
																</h4>
															</div>
															<div id="tab_collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="tab_heading1">
																<div class="panel-body">
																	Lorem Ipsum. </div>
															</div>
														</div>
															<div class="panel-heading " role="tab" id="tab_heading7">
																<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse7" aria-expanded="true" aria-controls="tab_collapse7"><span class="cs-icon icon-plus"></span>
																	  7. Class aptent taciti </a>
																</h4>
															</div>
															<div id="tab_collapse7" class="panel-collapse collapse " role="tabpanel" aria-labelledby="tab_heading7">
																<div class="panel-body">
																	Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
																</div>
															</div>
														</div>
														<script>
															jQuery(function($) {
																var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
																$active.find('a').prepend('<span class="cs-icon icon-minus"></span>');
																$('#accordion .panel-heading').not($active).find('a').prepend('<span class="cs-icon icon-plus"></span>');
																$('#accordion').on('show.bs.collapse', function(e) {
																	$('#accordion .panel-heading.active').removeClass('active').find('.cs-icon').toggleClass('icon-minus icon-plus');
																	$(e.target).prev().addClass('active').find('.cs-icon').toggleClass('icon-plus icon-minus');
																})
															});
														</script>
													</div>
												</div>
											</div>
										</div>
										<!--feedback start page-->
										<div class="contact-layout">
											<div class="contact-inner">
												<h2 class="faqs-title">Still have questions? Contact us leave a comment</h2>
												<div class="contact-content">
													<form method="post" action="<?=$action;?>" id="form_values" class="contact-form" accept-charset="UTF-8">
														<div id="container">
														<div class="row">
															<div class="col-md-6">
															<div class="form-group">
																<label>Name:</label>
																<input type="text" name="fname"required class="form-control">
																</div>
															
															<div class="form-group">
																<label>Email:</label>
																<input type="email" name="femail" required class="form-control">
															</div>
															<div class="form-group">
																<label>Contact Number:</label>
																<input type="number" name="fnumber" required class="form-control">
															</div>
															
																
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label>Your Message:<label>
																	<textarea rows="5" cols="75" required class="form-control" name="fmsg"></textarea>
																</div>
														    </div>
															
														</div>
														<div class="col-md-10">
														</div>
														
														<div class="col-md-2">
														<div class="form-group">
																	<label><label><br><br>
																	<input type="submit" class="btn-danger" cols="75" class="form-control" name="fbtn">
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
				</div>					<!--feedback end page-->
										
			</section>
		</main>
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