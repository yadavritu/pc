<!-- Main Content -->
<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="heading-content">
				<div class="heading-wrapper">
					<div class="container">
						<div class="row">
							<div class="page-heading-inner heading-group">
								<div class="breadcrumb-group">
									<h1 class="hidden">Products</h1>
									<div class="breadcrumb clearfix">
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" title="Fast Food" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
											<a href="" title="Products" itemprop="url"><span itemprop="title">Products</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="product-detail-layout">
				<div class="product-detail-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-product-template" class="shopify-section">
								<div class="product-detail-inner" itemscope="" itemtype="http://schema.org/Product">
									<meta itemprop="name" content="Extra Crispy">
									<meta itemprop="url" content="./">
									<meta itemprop="image" content="<?= base_url(); ?>assets_client/images/product_10.jpg">
									<div class="product-detail-content col-sm-9">
										<div id="product" class="extra-crispy-1 detail-content">
											<!--pro info -->
											<?php foreach($cart_data as $pro){}?>
											<div class="col-md-12 info-detail-pro clearfix">
												<div class="col-md-6" id="product-image">
													<div id="featuted-image" class="image featured" style="position: static; overflow: visible;">
														
														<?php $h=explode(",",$pro->p_img);?>
																				<?= str_ireplace("height='50' width='50'","class='front' height='400' width='400'",$h[0]);?>
													</div>
													
													
													
													<div id="gallery-images" class="thumbs clearfix gallery-images-layout">
														<div class="gallery-images-inner">
															<div class="show-image-load show-load-detail" style="display: none;">
																<div class="show-image-load-inner">
																	<i class="fa fa-spinner fa-pulse fa-2x"></i>
																</div>
															</div>
															
															<div class="slider-3itemsc vertical-image-content">
																<?php foreach($cart_data as $loop){?>
																 <?php $img=explode(",",$loop->p_img);
																				if(count($img)>1){	
																				$re=str_ireplace("<img src='"," ",$img[0]);
																					$img_array=explode("'",$re);
																					$re1=str_ireplace("<img src='"," ",$img[1]);
																					$img_array1=explode("'",$re1);
																					$re2=str_ireplace("<img src='"," ",$img[2]);
																					$img_array2=explode("'",$re2);
																			?>
																<div class="image-vertical image ">
																	<a href="<?= $img_array[0];?>" class="cloud-zoom-gallery">
																		
																			 <?= str_ireplace("height='50' width='50'",'height="100" width="100"  class="product-img-primary"',$img[0]); ?>
																			
																	</a>
																	<p></p>
																</div>
																<div class="image-vertical image ">
																	<a href="<?=$img_array1[0]; ?>" class="cloud-zoom-gallery">
																		
																			 <?= str_ireplace("height='50' width='50'",'height="100" width="100"  class="product-img-primary"',$img[1]); ?>
																			
																	</a>
																	<p></p>
																</div>
																<div class="image-vertical image ">
																		
																	<a href="<?= $img_array2[0]; ?>" class="cloud-zoom-gallery">
																			 <?= str_ireplace("height='50' width='50'",'height="100" width="100"  class="product-img-primary"',$img[2]); ?>
																			
																	</a>
																	<p></p>
																</div>
																 <?php }else{ ?>
																			  <?= str_ireplace("height='100' width='100'",'class="product-img-primary"',$img[0]); ?>
																		   <?php } ?>	
																<?php }?>
															</div>
															
														</div>
													</div>
												</div>
												<div class="col-md-6" id="product-information">
													<!--satyam product info -->
													<h1 itemprop="name" class="title"><?= $pro->p_name;?></h1>
													<div class="rating-content">
														<div class="rating-description">
															<span class="spr-badge" data-rating="<?php echo getRating($cart_data[0]->rating,$cart_data[0]->review_count)?>">
																<span class="spr-starrating spr-badge-starrating">
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																	<i class="spr-icon spr-icon-star" style=""></i>
																</span>
																<span class="spr-badge-caption"><?php echo $cart_data[0]->review_count?> review</span>
															</span>											
															<span class="review-link"><a href="#review">Write a review</a></span>
														</div>
													</div>
													<script>
														$('.review-link a').click(function(e) {
															e.preventDefault();
															$('html, body').animate({
																scrollTop: $("#tabs-information").offset().top - 120
															}, 800);
															$('.nav-tabs a[href="#review"]').tab('show');
															return false;
														});
													</script>
													<form id="add-item-form" action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants">
														<div class="product-options " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
															<meta itemprop="priceCurrency" content="USD">
															<link itemprop="availability" href="http://schema.org/InStock">
															<div class="product-type">
																<div class="select clearfix">
																	<div class="selector-wrapper variant-wrapper-size">
																	
																		<?php $sizes = explode("/",$cart_data[0]->p_pizza_size)?>
																		<label for="product-select-option-0">Size</label>
																		<select class="single-option-selector" data-option="option1" id="product-select-option-0">
																			<?php foreach($sizes as $size){?>
																			<option value="<?=$size;?>"><?=$size;?></option>
																			<?php } ?>
																		</select>
																	</div>
																
																</div>
																<div class="swatch-variant swatch color clearfix" data-option-index="1">
																	<script>
																		$(function() {
																			$('.swatch-element').hover(
																				function() {
																					$(this).addClass("hovered");
																				},
																				function() {
																					$(this).removeClass("hovered");
																				});

																			$(".swatch-element").click(function() {
																				if (!$(this).hasClass('active')) {
																					$(this).parent().find(".swatch-element.active").removeClass("active");
																					$(this).addClass("active");
																				}
																			});
																		});
																	</script>
																</div>
															</div>
														
															<div class="product-price">
																<meta itemprop="price" content="10.00">
																<h2 class="price" id="price-preview"><span class="money" data-currency-usd="$10.00" data-currency="USD"><i class="fa fa-rupee"></i> <?= $pro->p_price-($pro->p_price * $pro->p_discount)/100 ; ?></span></h2>
																You saved <span class="product-caption-price-new fa fa-rupee"><?= ($pro->p_price * $pro->p_discount)/100 ; ?></span>
															</div>
															<div class="purchase-section multiple">
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
																
																<div class="purchase">
																	<a   id="cart" data-productid="<?= $pro->p_id; ?>" data-productname="<?=  $pro->p_name; ?>"
								                              data-productprize="<?=  $pro->p_price-($pro->p_price * $pro->p_discount)/100 ?>"
								                              data-productimg="<?=$img_array[0]?>" class="_btn add-to-cart" type="submit" name="add"><span><i class="cs-icon icon-cart"></i>Add to cart</span></a>
																	
																	<div id="cart-animation" style="display:none">1</div>
																</div>
															</div>
														</div>
													</form>
													
												
												</div>
											</div>
											<!--end pro info -->
											<div class="may-like-products col-sm-12 hidden">
												<div class="sub-title">
													<h2>You May Also Like</h2>
												</div>
												<div class="may-like-content-inner">
													<div class="may-like-content">
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix product-circle">
																<div class="row-left">
																	<a href="" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="<?= base_url(); ?>assets_client/images/product_1.jpg" class="img-responsive front" alt="Juice Ice Tea">
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
																			<span>New</span>
																		</div>
																	</div>
																</div>
																<div class="row-right animMix">
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span><span class="spr-badge-caption">No reviews</span>
																		</span>
																	</div>
																	<div class="product-title"><a class="title-5" href="">Juice Ice Tea</a></div>
																	<div class="product-price">
																		<span class="price">
																			<span class="money" data-currency-usd="$20.00">$20.00</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														</div>
												</div>
											</div>
											<div id="tabs-information" class="col-md-12 tabs-information">
												<div class="col-md-12 tabs-title">
													<ul class="nav nav-tabs tabs-left sideways">
														<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
														<li><a href="#review" data-toggle="tab">Reviews</a></li>
														</ul>
												</div>
												<div class="col-md-12 tabs-content">
													<div class="tab-content">
														<div class="tab-pane active" id="desc">
															<p>Lorem Ipsum. </p>
															<ul class="angle-right">
																<li>Version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li>
																</ul>
														</div>
														<div class="tab-pane fade " id="review">
															<div id="customer_review">
																<div class="preview_content">
																	<div id="shopify-product-reviews" data-id="6537875078">
																		<div class="spr-container">
																			<div class="spr-header">
																				<h2 class="spr-header-title">Customer Reviews</h2>
																				<div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
																					<meta itemprop="itemreviewed" content="">
																					<meta itemprop="votes" content="<?php echo $cart_data[0]->review_count;?>">
																					<span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
																						<meta itemprop="average" content="<?php echo getRating($cart_data[0]->rating,$cart_data[0]->review_count)?>">
																						<meta itemprop="best" content="5">
																						<meta itemprop="worst" content="1">
																						<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>
																					</span>
																					<span class="spr-summary-caption">
																						<span class="spr-summary-actions-togglereviews">Based on <?php echo $cart_data[0]->review_count?> review</span>
																					</span>
																					<span class="spr-summary-actions">
																						<a href="#" class="spr-summary-actions-newreview" onclick="active_review_form();return false">Write a review</a>
																					</span>
																				</div>
																			</div>
																			<div class="spr-content">
																				<div class="spr-form" id="form_6537875078" style="display: none;">
																					<?php echo form_open('Pizza/add_review');?>
																						<input type="hidden" name="review[rating]">
																						<input type="hidden" name="review[product_id]" value="<?php echo $productId?>">
																						<h3 class="spr-form-title">Write a review</h3>
																						<fieldset class="spr-form-review">
																							<div class="spr-form-review-rating">
																								<label class="spr-form-label">Rating</label>
																								<div class="spr-form-input spr-starrating ">
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
																									<a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
																								</div>
																							</div>
																							<div class="spr-form-review-title">
																								<label class="spr-form-label" for="review_title">Review Title</label>
																								<input class="spr-form-input spr-form-input-text col-md-12" id="review_title" type="text" name="review[title]" value="" placeholder="Give your review a title">
																							</div>
																							<div class="spr-form-review-body">
																								<label class="spr-form-label" for="review_body">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
																								<div class="spr-form-input">
																									<textarea class="spr-form-input spr-form-input-textarea col-md-12" id="review_body" data-product-id="6537875078" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
																								</div>
																							</div>
																							<br><br><br><br><br><br>
																							<div class="spr-form-review-body">
																								<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
																							</div>
																						</fieldset>
																					</form>
																				</div>
																				<div class="spr-reviews" id="reviews_6537875078">
																					<?php foreach($reviews as $review){?>
																					<div class="spr-review" id="spr-review-">
																						<div class="spr-review-header">
																							<h3 class="spr-review-header-title"><?php echo ucwords($review->name)?></h3>
																							<span class="spr-starratings spr-review-header-starratings">
																								<i class="spr-icon spr-icon-star" style=""></i>
																								<i class="spr-icon spr-icon-star" style=""></i>
																								<i class="spr-icon spr-icon-star" style=""></i>
																								<i class="spr-icon spr-icon-star" style=""></i>
																								<i class="spr-icon spr-icon-star" style=""></i>
																							</span>
																							<span class="spr-review-header-byline"><strong><?php echo $review->title?></strong><br><strong><?php echo date("d M, y h:i a")?></strong></span>
																						</div>
																						<div class="spr-review-content">
																							<p class="spr-review-content-body"><?php echo nl2br($review->body);?></p>
																						</div>
																						<div class="spr-review-footer hidden">
																							<a href="#" class="spr-review-reportreview" onclick="SPR.reportReview(7003642);return false" id="report_7003642" data-msg="This review has been reported">Report as Inappropriate</a>
																						</div>
																					</div>
																					<?php }?>
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
												<?php 		
		if(get_cookie('reco')!='')
		{
			$a=get_cookie('reco');
		$r_cat=$this1->get_categories_record($a);
		
		?>
								
											<div class="related-products col-sm-12">
											
												<div class="sub-title">
													<h2>Recommended Based on Your Browsing History</h2>
												</div>
												<div class="group-related">
													<div class="group-related-inner">
														<div class="rp-slider">
														
															<div class="row-container product list-unstyled clearfix product-circle">
																<div class="row-left">
																	<a href="" class="hoverBorder container_item">
																		<div class="hoverBorderWrapper">
																			<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" class="img-responsive front" alt="Coke">
																			<div class="mask"></div>
																		</div>
																	</a>
																	<div class="hover-mask">
																		<div class="group-mask">
																			<div class="inner-mask">
																				<div class="group-actionbutton">
																					<ul class="quickview-wishlist-wrapper">
																						<li class="wishlist">
																							<a title="Add To Wishlist" class="wishlist wishlist-coke" data-wishlisthandle="coke"><span class="cs-icon icon-heart"></span></a>
																						</li>
																						<li class="quickview hidden-xs hidden-sm">
																							<div class="product-ajax-cart">
																								<span class="overlay_mask"></span>
																								<div data-handle="coke" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																									<a class=""><span class="cs-icon icon-eye"></span></a>
																								</div>
																							</div>
																						</li>
																						<li class="compare">
																							<a title="Add To Compare" class="compare compare-coke" data-comparehandle="coke"><span class="cs-icon icon-retweet2"></span></a>
																						</li>
																					</ul>
																				</div>
																				<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post">
																					<div class="effect-ajax-cart">
																						<button class="_btn select-option" type="button" onclick="window.location='';" title="Select Option">Select options</button>
																					</div>
																				</form>
																			</div>
																			<!--inner-mask-->
																		</div>
																		<!--Group mask-->
																	</div>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span>33%</span>
																		</div>
																	</div>
																</div>
																<div class="row-right animMix">
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																		</span>
																	</div>
																	<div class="product-title"><a class="title-5" href="">Coke</a></div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money" data-currency-usd="$10.00">$10.00</span></span>
																		<del class="price_compare"> <span class="money" data-currency-usd="$15.00">$15.00</span></del>
																	</div>
																</div>
															</div>
															</div>
													
</div>
												</div>
												<!--END -->
											</div>
		<?php } ?>
		
										</div>
									</div>
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
														<?php foreach($menu as $data) { ?>
														<li><a href="<?=base_url();?>Pizza/collection/?c=<?=$data->m_id;?>"><?=$data->m_name;?> </a></li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<div class="sidebar-block latest-block">
												<h3 class="sidebar-title">
													<span class="text">LATEST</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<div class="latest-inner">
														<div class="products-item">
															<div class="row-container product-circle">
																<div class="product home_product">
																	<div class="row-left">
																		<a href="products.html" class="container_item">
																			<div class="hoverBorderWrapper">
																				<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" class="not-rotation img-responsive front" alt="Coke">
																				<div class="mask"></div>
																			</div>
																		</a>
																	</div>
																	<div class="row-right">
																		<div class="product-title"><a class="title-5" href="products.html">Coke</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>

																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD">$15.00</span></del>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="products-item">
															<div class="row-container product-circle">
																<div class="product home_product">
																	<div class="row-left">
																		<a href="products.html" class="container_item">
																			<div class="hoverBorderWrapper">
																				<img src="<?= base_url(); ?>assets_client/images/product_11.jpg" class="not-rotation img-responsive front" alt="Coke">
																				<div class="mask"></div>
																			</div>
																		</a>
																	</div>
																	<div class="row-right">
																		<div class="product-title"><a class="title-5" href="products.html">Extra Crispy</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>

																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD">$15.00</span></del>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="products-item">
															<div class="row-container product-circle">
																<div class="product home_product">
																	<div class="row-left">
																		<a href="products.html" class="container_item">
																			<div class="hoverBorderWrapper">
																				<img src="<?= base_url(); ?>assets_client/images/product_12.jpg" class="not-rotation img-responsive front" alt="Coke">
																				<div class="mask"></div>
																			</div>
																		</a>
																	</div>
																	<div class="row-right">
																		<div class="product-title"><a class="title-5" href="products.html">Juice Ice Tea</a></div>
																		<div class="rating-star">
																			<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																			</span>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD">$15.00</span></del>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- filter tags group -->
											<div class="sidebar-block filter-block">
												<h3 class="sidebar-title">
													<span class="text">Size</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="filter-content ">
														<li data-handle="small"><a href="" title="Narrow selection to products matching tag Small"><span class="fe-checkbox"></span> Small</a></li>
														<li data-handle="medium"><a href="" title="Narrow selection to products matching tag Medium"><span class="fe-checkbox"></span> Medium</a></li>
														<li data-handle="large"><a href="" title="Narrow selection to products matching tag Large"><span class="fe-checkbox"></span> Large</a></li>
													</ul>
												</div>
											</div>
											<div class="sidebar-block filter-block">
												<h3 class="sidebar-title">
													<span class="text">Price</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="filter-content ">
														<li data-handle="under-100"><a href="" title="Narrow selection to products matching tag Under $100"><span class="fe-checkbox"></span> Under $100</a></li>
														<li data-handle="100-200"><a href="" title="Narrow selection to products matching tag $100 - $200"><span class="fe-checkbox"></span> $100 - $200</a></li>
														<li data-handle="above-200"><a href="" title="Narrow selection to products matching tag Above $200"><span class="fe-checkbox"></span> Above $200</a></li>
													</ul>
												</div>
											</div>
											<div class="sidebar-block type-block">
												<h3 class="sidebar-title">
													<span class="text">Type List</span>
													<span class="cs-icon icon-minus"></span>
												</h3>
												<div class="sidebar-content">
													<ul class="type-content">
														<!--type-->
														<li class="">
															<a href="" title="Drink">Drink</a>
														</li>
														<li class="">
															<a href="" title="Fast food">Fast food</a>
														</li>
														<li class="">
															<a href="" title="Hamburger">Hamburger</a>
														</li>
														<li class="">
															<a href="" title="Pizza">Pizza</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="sidebar-block banner-block">
												<div class="sidebar-content">
													<a href="">
														<img src="<?= base_url(); ?>assets_client/images/collections_banner.jpg" alt="" title="">
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
								</div>
								<script type="text/javascript">
									function active_review_form(){
										if($("#form_6537875078").attr('style')=='display: none;'){
											$("#form_6537875078").css('display','block');
										}
										else {
											$("#form_6537875078").css('display','none');
										}
									}
									jQuery(document).ready(function($){
										$('#gallery-images div.image').on('click', function() {
											var $this = $(this);
											var parent = $this.parents('#gallery-images');
											parent.find('.image').removeClass('active');
											$this.addClass('active');
										});
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	
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