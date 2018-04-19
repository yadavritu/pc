	<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<!-- BEGIN content_for_index -->
			<div id="shopify-section-1507179171162" class="shopify-section index-section index-section-slideshow">
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
			<div id="shopify-section-1509012157667" class="shopify-section index-section index-section-banner">
				<div data-section-id="1509012157667" data-section-type="banner-section">
					<section class="home-banslider-layout">
						<div class="container">
							<div class="row">
								<div class="home-banslider-inner">
									<div class="home-banslider-content">
										<div class="banslider-item not-animated" data-animate="zoomIn" data-delay="100">
											<a href="">
												<img src="<?= base_url(); ?>assets_client/images/banslider-1.jpg" alt="" title="">
											</a>
										</div>
										<div class="banslider-item not-animated" data-animate="zoomIn" data-delay="200">
											<a href="">
												<img src="<?= base_url(); ?>assets_client/images/banslider-2.jpg" alt="" title="">
											</a>
										</div>
										<div class="banslider-item not-animated" data-animate="zoomIn" data-delay="300">
											<a href="">
												<img src="<?= base_url(); ?>assets_client/images/banslider-3.jpg" alt="" title="">
											</a>
										</div>
										<div class="banslider-item not-animated" data-animate="zoomIn" data-delay="400">
											<a href="">
												<img src="<?= base_url(); ?>assets_client/images/banslider-1.jpg" alt="" title="">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<div id="shopify-section-1509012338884" class="shopify-section index-section index-section-welcome">
                <div data-section-id="1509012338884" data-section-type="welcome-section">
                    <section class="home-welcome-layout not-animated" data-animate="zoomIn" data-delay="200">
                        <div class="container">
                            <div class="row">
                                <div class="home-welcome-inner">
                                    <h2 class="page-title">Welcome to Pizza Corner!</h2>
                                    <div class="home-welcome-content">
                                        <span class="welcome-caption">
											Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem.
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce feugiat malesuada odio.
										</span>
                                        <img class="welcome-banner" src="<?= base_url(); ?>assets_client/s/files/1/2487/3424/files/1_3e7313a2-24ef-4dea-b4f4-19a75f8b51fa.png" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
			<div class="shopify-section index-section index-section-product">
				<div data-section-id="1509012370397" data-section-type="product-section">
					<section class="home-product-layout">
						<div class="container">
						<?php foreach($menu as $m) { ?>
							<div class="row">
								<div class="banner-product-title not-animated" data-animate="fadeInUp" data-delay="200" style="background-image:  url(<?= base_url(); ?>assets_client/images/banner_product_4.jpg);">
									<div class="title-content">
										<h2><?= $m->m_name; ?></h2>
									</div>
								</div>
								<div class="home-product-inner">
									<div class="home-product-content">
										<!--submenu fetch end-->
									<?php $pro=$this1->product($m->m_id); if(count($pro)>0){ 	?>
										<?php

										foreach($pro as $pmenu){ ?>
										<div class="content_product col-sm-3 not-animated" data-animate="fadeInUp" data-delay="100">
											<div class="row-container product list-unstyled clearfix product-circle">
												<div class="row-left">
													<a href="<?=base_url();?>Pizza/collection/" class="hoverBorder container_item">
														<div class="hoverBorderWrapper">
														<!--	<img src="<?= base_url(); ?>assets_client/images/product_4.jpg" class="img-responsive front" alt="Juice Ice Tea">
															-->
															
															<?php $h=explode(",",$pmenu->p_img);?>
															<?= str_ireplace("height='50' width='50'","class='front' height='200' width='200'",$h[0]);?>
															<div class="mask"></div>
														</div>
													</a>
													<div class="hover-mask">
														<div class="group-mask">
															<div class="inner-mask">
																<div class="group-actionbutton">
																	<ul class="quickview-wishlist-wrapper">
																		<li class="wishlist">
																			<a title="Add To Wishlist"  onclick="wishlist(<?=$pmenu->p_id;?>);"><span class="cs-icon icon-heart"></span></a>
																		</li>
																		<li class="quickview hidden-xs hidden-sm">
																			<div class="product-ajax-cart">
																				<span class="overlay_mask"></span>
																				<div data-handle="juice-ice-tea" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																					<a href="<?=base_url();?>Pizza/product_info/?pid=<?= $pmenu->p_id;?>" class=""><span class="cs-icon icon-eye"></span></a>
																				</div>
																			</div>
																		</li>
																		<li class="compare">
																			<a title="Add To Compare" href="<?= base_url(); ?>Pizza/compare/?p_id=<?=$pmenu->p_id?>"><span class="cs-icon icon-retweet2"></span></a>
																		</li>
																	</ul>
																</div>
																<form action="" method="post">
																	<div class="effect-ajax-cart">
																		
																	<a   id="cart" data-productid="<?= $pmenu->p_id; ?>" data-productname="<?=  $pmenu->p_name; ?>"
								                              data-productprize="<?=  $pmenu->p_price-($pmenu->p_price * $pmenu->p_discount)/100 ?>"
								                              data-productimg="<?=$h[0];?>" class="_btn add-to-cart" type="submit" name="add">
															  <span><i class="cs-icon icon-cart"></i>Add to cart</span></a>
																	
																	<div id="cart-animation" style="display:none">1</div>
																	
																	</div>
															
																</form>
															</div>
															<!--inner-mask-->
														</div>
														<!--Group mask-->
													</div>
													<div class="product-label">
														<div class="label-element best-label">
														<span style="font-size:15px;"><?=$pmenu->p_tag;?></span>
														</div>
													</div>
												</div>
												<div class="row-right animMix">
													<div class="rating-star">
														<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
														</span>
													</div>
													<div class="product-title"><a class="title-5" href=""><?=$pmenu->p_name;?></a></div>
													<div class="product-price">
														<span class="price">
															
														<span class="price_sale"><span class="fa fa-rupee" data-currency-usd="$10.00" data-currency="USD"><?= $pmenu->p_price-($pmenu->p_price * $pmenu->p_discount)/100 ; ?></span></span>
														<li>You saved <span class="product-caption-price-new fa fa-rupee"><?= ($pmenu->p_price * $pmenu->p_discount)/100 ; ?></span></li>
														<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD"><?=$pmenu->p_price;?></span></del>
																		
														</span>
														
													</div>
												</div>
											</div>
										</div>
									<?php } } ?>
									</div>
								</div>
							</div>
						<?php }?>
						</div>
					</section>
				</div>
			</div>
			
			<div id="shopify-section-1509012440185" class="shopify-section index-section index-section-gallery">
				<div data-section-id="1509012440185" data-section-type="banner-section">
					<section class="home-gallery-layout">
						<div class="container">
							<div class="row">
								<h2 class="page-title">Gallery</h2>
								<div class="home-gallery-inner">
									<div class="home-gallery-content">
									<?php foreach($gallery as $g) { ?>
										<div class="gallery-item col-sm-4 not-animated" data-animate="fadeInUp" data-delay="100">
											<?php $h=explode(",",$g->gallery_image);
											$link=str_ireplace("<img src='","",$h);
											$link1=explode("'",$link[0]);
											
											?>
										<a class="home-gallery-lookbook" rel="lookbook" href="<?= $link1[0] ?>">
												<?= str_ireplace("height='100' width='100'","height='450'",$h[0]);?>
											</a>
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
	
			<?php 		
		if(get_cookie('reco')!='')
		{
			$a=get_cookie('reco');
		$r_cat=$this1->get_categories_record($a);
		
		?>
			<h1 class="page-title">Recommended Based on Your Browsing History</h1>
			<div class="content_product col-sm-3 not-animated" data-animate="fadeInUp" data-delay="200">
			 <?php foreach($r_cat as $r_value){?>
											<div class="row-container product list-unstyled clearfix product-circle">
												<div class="row-left">
													<a href="" class="hoverBorder container_item">
														<div class="hoverBorderWrapper">
														<?php  $r_expl=explode(",",$r_value->p_img);
							?>
							<?= str_ireplace("height='50' width='50'","class='product-img' height='200px' width='100%'",$r_expl[0]); ?>
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
															<span><?=$pmenu->p_tag;?></span>
														</div>
													</div>
												</div>
												<div class="row-right animMix">
													<div class="rating-star">
														<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
														</span>
													</div>
													<div class="product-title"><a class="title-5" href="product.html"><?= $pmenu->p_name;?></a></div>
													<div class="product-price">
														<span class="price">
															<span class="fa fa-rupee" data-currency-usd="$20.00"><?=$pmenu->p_price;?></span>
														</span>
													</div>
												</div>
											</div>
			 <?php } ?>
										</div>
										
			 <?php  } ?>
			
			<div id="shopify-section-1509012518613" class="shopify-section  index-section index-section-banner">
				<div data-section-id="1509012518613" data-section-type="banner-section">
					<section class="home-banner-layout not-animated" data-animate="zoomIn" data-delay="200">
						<div class="container">
							<div class="row">
								<div class="home-banner-inner">
									<div class="home-banner-content">
										<a class="banner-image" href="">
											<img src="<?= base_url(); ?>assets_client/s/files/1/2487/3424/files/bn1_53149ef0-f92a-4804-b600-02e903aa4559.png" alt="" title="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</main>
	</div>
	<section class="home-product-layout">
	<center><h1> What Client Say about Our Pizza Corner<hr></h1></center>
	<marquee>
						<div class="container">
					
								
								<?php foreach($feedata as $feed){?>

								<div class="col-md-3" style="background-color:white;display:inline block;padding:10px;border-radius:10px;margin-right:5px">
									
									<center>
										<h4><?= $feed->f_name;?></h4>
										<br>
										<p><?= $feed->f_msg;?></p>
									</center>
								
								</div>
								
								<?php }?>
								
							</div>
							</marquee>
							<hr>
						
						</div>
	</section>
			
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