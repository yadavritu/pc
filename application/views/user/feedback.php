<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">					
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">FAQs (Frequently Asked Questions)</h1>
								<div class="breadcrumb clearfix">
									<span><a href="/" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span>
										<a href="/" title="FAQs" itemprop="url"><span itemprop="title">FAQs (Frequently Asked Questions)</span></a>
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
														<?php $i=1?>
														<div class="panel-heading active" role="tab" id="tab_heading<?php echo $i?>">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse<?php echo $i?>" aria-expanded="true" aria-controls="tab_collapse1"><span class="cs-icon icon-minus"></span>
																  I'm not able to place Order Online.
																</a>
															</h4>
														</div>
														<div id="tab_collapse<?php echo $i?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="tab_heading<?php echo $i?>">
															<div class="panel-body">
																Call us on 1000-210-0000 for more detail.
															</div>
														</div>
														<?php $i++?>
														<div class="panel-heading" role="tab" id="tab_heading<?php echo $i?>">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse<?php echo $i?>" aria-expanded="true" aria-controls="tab_collapse1"><span class="cs-icon icon-minus"></span>
																  I am not able to login
																</a>
															</h4>
														</div>
														<div id="tab_collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="tab_heading<?php echo $i?>">
															<div class="panel-body">
																Sir/Ma'am, please check if you are using the correct login credentials? Please try the "forget password" link to generate a new password.
															</div>
														</div>
														<?php $i++?>
														<div class="panel-heading" role="tab" id="tab_heading<?php echo $i?>">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse<?php echo $i?>" aria-expanded="true" aria-controls="tab_collapse1"><span class="cs-icon icon-minus"></span>
																  How to register on your website / how will I get login credentials
																</a>
															</h4>
														</div>
														<div id="tab_collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="tab_heading<?php echo $i?>">
															<div class="panel-body">
																After you place your 1st order an auto generated password will be sent on your email address to login at your next visit to our site.
															</div>
														</div>
														<?php $i++?>
														<div class="panel-heading" role="tab" id="tab_heading<?php echo $i?>">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse<?php echo $i?>" aria-expanded="true" aria-controls="tab_collapse1"><span class="cs-icon icon-minus"></span>
																  I was charged however, didn't receive order details. What is the status?
																</a>
															</h4>
														</div>
														<div id="tab_collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="tab_heading<?php echo $i?>">
															<div class="panel-body">
																We apologize for the inconvenience caused to you. As your order was Not Successful you will receive a refund back in your account within 7-10 working days.Also we would request you to please place another order by calling our Hotline number 1234-210-0000.
															</div>
														</div>
														<?php $i++?>
														<div class="panel-heading" role="tab" id="tab_heading<?php echo $i?>">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#tab_collapse<?php echo $i?>" aria-expanded="true" aria-controls="tab_collapse1"><span class="cs-icon icon-minus"></span>
																  How can I avail Corporate Discount?
																</a>
															</h4>
														</div>
														<div id="tab_collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="tab_heading<?php echo $i?>">
															<div class="panel-body">
																Sir/Madam, Corporate Discount is Not Applicable on OLO however, in order to avail Corporate Discount please call 1234-210-0000 or please visit your Nearest Restaurant.
															</div>
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