
	<!-- Footer -->
	<footer class="footer">
		<div id="shopify-section-theme-footer" class="shopify-section">
			<section class="footer-information-block clearfix" style="background-image:  url(<?=base_url();?>assets_client/images/bg_footer.png);">
				<div class="container">
					<div class="row">
						<div class="footer-information-inner">
							<div class="footer-information-content">
								<div class="information-item col-sm-4 not-animated" data-animate="fadeInUp" data-delay="100">
									<div class="about-content">
										<div class="logo-footer">
										<?php foreach($logo as $l) { ?>
											<!--<img src="<?= base_url(); ?>assets_client/images/logo_footer.png" alt="" />-->
									 
											<?= $l->logo_image;?>
										<?php } ?>
										</div>
									</div>
								</div>
									<div class="information-item col-sm-4 not-animated" data-animate="fadeInUp" data-delay="100">
									
										<div class="fb-page" data-href="https://www.facebook.com/tcskuldeep/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tcskuldeep/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tcskuldeep/">The Complete Softech</a></blockquote></div>
										
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
							<?php foreach($menu as $m) { ?>
								<li><a href="<?=base_url();?>Pizza/collection" title=""><?=$m->m_name;?></a></li>
								
								<?php } ?>
								<li><a href="<?=base_url();?>Pizza/feedback">feedback</a></li>
								
								<li><a href="<?=base_url();?>Pizza/show_wishlist">Wishlist</a></li>
								<li><a href="<?=base_url();?>Pizza/contact">contact</a></li>
								<li><a href="<?=base_url();?>Pizza/about">about us</a></li>
							</ul>
				
						</div>
						<div class="footer_copyright">2018 <a href="" title="">Pizza corner</a>. All Rights Reserved</div>
					</div>
				</div>
			</section>
		</div>
	</footer>

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

	<div id="fb-root"></div>
<script>

function wishlist(proid)
{
	
	var user="<?php if($sess['Admin_ID']){echo $sess['Admin_ID'];}else{ echo "null";}?>";
	if(user=="null")
	{
		alert("login first");
	}
	else
	{
		 // alert("ok");	
		$.ajax({
			url:"<?= base_url();?>Pizza/wishlist",
			type:"post",
			data:{p_id:proid,u_id:<?php  if($sess['Admin_ID']){echo $sess['Admin_ID'];}else{ echo "null";}?>}
		})
		.done(function(message){
			alert(message);
		});
	}
		
}

</script>

	<script>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>