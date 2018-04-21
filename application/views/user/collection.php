<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">Collections</h1>
								<div class="breadcrumb clearfix">
									<span><a href="/" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="" title="Collections" itemprop="url"><span itemprop="title">Collections</span></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="collection-layout">
			<div class="collection-wrapper">
				<div class="container">
					<div class="row">
						<div id="shopify-section-collection-template" class="shopify-section">
							<div class="collection-inner collection-sidebar">
								<!-- Tags loading -->
								<div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
								<div id="collection">
									<div class="clearfix">
										<div class="collection-toolbar _mobile col-sm-9">
											<a href="" class="collection-banner-top">
												<img src="<?= base_url(); ?>assets_client/images/collections_banner_top.jpg" alt="image product" title="">
											</a>
											<div class="group_toolbar">
												<div class="group-left">
													<div class="filter-mobile">
														<a href="javascript:void(0)" class="filter-icon"> 
															<span class="cs-icon icon-filter"></span>
														</a>
													</div>
													<!-- Sort by -->
													<div class="sortBy">
														<div class="dropdown-toggle" data-toggle="dropdown">
															<span class="toolbar-title">Sort by</span>
															<button class="sortButton">
																<span class="name">Featured</span><i class="fa fa-caret-down"></i>
															</button>
															<i class="sub-dropdown1"></i>
															<i class="sub-dropdown"></i>
														</div>
														<div class="sortBox control-container dropdown-menu">
															<ul class="sortForm list-unstyled option-set text-left list-styled" data-option-key="sortBy">
																<li class="sort manual"><a href="">Featured</a></li>
																<li class="sort price-ascending"><a href="">Price, low to high</a></li>
																<li class="sort price-descending"><a href="">Price, high to low</a></li>
																<li class="sort title-ascending"><a href="">Alphabetically, A-Z</a></li>
																<li class="sort title-descending"><a href="">Alphabetically, Z-A</a></li>
																<li class="sort created-ascending"><a href="">Date, old to new</a></li>
																<li class="sort created-descending"><a href="">Date, new to old</a></li>
																<li class="sort best-selling"><a href="">Best Selling</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="collection-content">
										<div class="collection-leftsidebar sidebar col-sm-3 clearfix">
											<div class="collection-leftsidebar-group">
												<div class="sidebar-block collection-block">
													<h3 class="sidebar-title">
														<span class="text">Categories</span>
														<span class="cs-icon icon-minus"></span>
													</h3>
													<div class="sidebar-content">
														<ul class="list-cat">
															<li  class="<?php echo $category==0?"active":""?>"><?php echo anchor("Pizza/collection/?main=1&c=0", "All Collections")?></li>
															<?php foreach($menu as $m) { ?>															
															<li class="<?php echo $category==$m->m_id?"active":""?>"><?php echo anchor("Pizza/collection/?main=1&c=".$m->m_id, $m->m_name)?></li>
															<?php } ?>
														</ul>
													</div>
												</div>
												
												<!-- filter tags group -->
											
													
												</div>
											
											
												
												<div class="sidebar-block type-block">
													<h3 class="sidebar-title">
														<span class="text">Type List</span>
														<span class="cs-icon icon-minus"></span>
													</h3>
													<div class="sidebar-content">
														<ul class="type-content">
															<!--type-->
															<?php foreach ($pizza as $pdata) { ?>
															<li class="">
																<a href="" title=""><?= $pdata->pizza_name;?></a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
												
												<div class="sidebar-block banner-block">
													<div class="sidebar-content">
														<a href="">
															<img src="<?= base_url(); ?>assets_client/images/collections_banner.jpg" alt="image product" title="">
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
										<div class="collection-mainarea  col-sm-9 clearfix">
											<div class="collection-toolbar _desktop">
												<a href="" class="collection-banner-top">
													<img src="<?= base_url(); ?>assets_client/images/collections_banner_top.jpg" alt="image product" title="">
												</a>
												<div class="group_toolbar">
													<div class="group-left">
														<div class="filter-mobile">
															<a href="javascript:void(0)" class="filter-icon"> 
																<span class="cs-icon icon-filter"></span>
															</a>
														</div>
														<!-- Sort by -->
														
													</div>
													<!-- View as -->
													<div class="grid_list">
														<ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
															<li data-option-value="fitRows" id="goGrid" class="active goAction" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid">
																<i class="icon-small icon-small-grid"></i>
															</li>
															<li data-option-value="straightDown" id="goList" class="goAction" data-toggle="tooltip" data-placement="top" title="" data-original-title="List">
																<i class="icon-small icon-small-list"></i>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<?php if(!empty($pizza_data)) { ?>
											<div class="collection-items clearfix">
												<div class="products">
												<?php foreach($pizza_data as $pdata) { ?>
													<div class="product-item col-sm-4 ">
														<div class="product product-circle">
															<div class="row-left">
																<a href="<?=base_url();?>Pizza/product_info/?pid=<?= $pdata->p_id;?>" class="hoverBorder container_item">
																	<div class="hoverBorderWrapper">
																		<?php $h=explode(",",$pdata->p_img);?>
																			<?= str_ireplace("height='50' width='50'","class='front' height='200' width='225'",$h[0]);?>
																			<div class="mask"></div>
																	</div>
																</a>
																<div class="product-label">
																	<div class="label-element deal-label">
																		<span><?= $pdata->p_discount;?>%</span>
																	</div>
																</div>
																<div class="hover-mask grid-mode">
																	<div class="group-mask">
																		<div class="inner-mask">
																			<div class="group-actionbutton">
																				<ul class="quickview-wishlist-wrapper">
																					<li class="wishlist">
																					
																						<a title="Add To Wishlist"  onclick="wishlist(<?=$pdata->p_id;?>);"><span class="cs-icon icon-heart"></span></a>
																					</li>
																					<li class="quickview hidden-xs hidden-sm">
																						<div class="product-ajax-cart">
																							<span class="overlay_mask"></span>
																							<div data-handle="cheese-burger-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																								<a href="<?=base_url();?>Pizza/product_info/?pid=<?= $pdata->p_id;?>" class=""><span class="cs-icon icon-eye"></span></a>
																							</div>
																						</div>
																					</li>
																					<li class="compare">
																						<a title="Add To Compare" href="<?= base_url(); ?>Pizza/compare/?p_id=<?=$pdata->p_id?>"><span class="cs-icon icon-retweet2"></span></a>
																					</li>
																				</ul>
																			</div>
																			<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post">
																				<div class="effect-ajax-cart">
																					<input type="hidden" name="quantity" value="1">
																					<a href="<?=base_url();?>Pizza/product_info/?pid=<?= $pdata->p_id;?>" class="_btn select-option" type="button"  title=""><?= $pdata->p_name;?></a>
																				</div>
																			</form>
																		</div>
																		<!--inner-mask-->
																	</div>
																	<!--Group mask-->
																</div>
															</div>
															<div class="row-right animMix">
																<div class="grid-mode">
																	<div class="rating-star">
																		<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																		</span>
																	</div>
																	<div class="product-title"><a class="title-5" href="product.html"><?=$pdata->p_name;?></a></div>
																	<div class="product-price">
																		<span class="price_sale"><span class="money"><?= $pdata->p_price-($pdata->p_price * $pdata->p_discount)/100 ; ?></span></span>
																			<li>You saved <span class="product-caption-price-new fa fa-rupee"><?= ($pdata->p_price * $pdata->p_discount)/100 ; ?></span></li>
																		<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD"><?=$pdata->p_price;?></span></del>
																	</div>
																</div>
																<div class="list-mode hide">
																	<div class="list-collection-left">
																		<div class="group">
																			<div class="product-title"><a class="title-5" href="product.html"><?= $pdata->p_name;?></a></div>
																			<div class="rating-star">
																				<span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
																				</span>
																			</div>
																		</div>
																		<div class="product-price">
																			<span class="price_sale"><span class="money" data-currency-usd="$10.00" data-currency="USD"><?= $pdata->p_price-($pdata->p_price * $pdata->p_discount)/100 ; ?></span></span>
																			<li>You saved <span class="product-caption-price-new fa fa-rupee"><?= ($pdata->p_price * $pdata->p_discount)/100 ; ?></span></li>
																			<del class="price_compare"> <span class="money" data-currency-usd="$15.00" data-currency="USD"><?=$pdata->p_price;?></span></del>
																		</div>
																	</div>
																	<div class="list-collection-right">
																		<div class="product-description">
																		<?=$pdata->p_discription;?>
																		</div>
																		<div class="group-actionbutton">
																			<form class="product-addtocart" action="" method="post">
																				<div class="effect-ajax-cart">
																					<input type="hidden" name="quantity" value="1">
																					<a href=""><button class="_btn select-option" type="button" onclick="'" title=""><span class="cart-title"><?= $pdata->p_name;?></span></button></a>
																				</div>
																			</form>
																			<ul class="quickview-wishlist-wrapper">
																				<li class="wishlist">
																					<a title="Add To Wishlist" class="wishlist wishlist-cheese-burger-1" data-wishlisthandle="cheese-burger-1">
																						<span class="cs-icon icon-heart" title="Wishlist"></span>
																					</a>
																				</li>
																				<li class="product-quickview quickview hidden-xs hidden-sm">
																					<div class="product-ajax-cart ">
																						<span class="overlay_mask"></span>
																						<div data-handle="cheese-burger-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																							<a class="quick-view">
																								<span class="cs-icon icon-eye" title="Quick View"></span>
																							</a>
																						</div>
																					</div>
																				</li>
																				<li class="compare">
																					<a title="Add To Compare" class="compare compare-cheese-burger-1" data-comparehandle="cheese-burger-1">
																						<span class="cs-icon icon-retweet2" title="Compare"></span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												</div>
											</div>
												<?php }else{ ?>
													<div class="alert ">No product available in this category, Please select another category.</div>
												<?php }?>
											<div class="collection-bottom-toolbar hidden">
												<div class="product-counter col-sm-6">
													Items 1 to 18 of 20 total
												</div>
												<div class="product-pagination col-sm-6">
													<div class="pagination_group">
														<ul class="pagination pagination-collection">
															<li class="prev"><a class="disabled" href="">Prev</a></li>
															<li class="active"><a href="">1</a></li>
															<li><a href="">2</a></li>
															<li class="next"><a href="">Next</a></li>
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
			</div>
		</section>
	</main>
</div>

<!-- Footer -->


<!-- Modal  all product data QuickView -->


<!-- Modal WishList -->
<div class="wishlist-model">
	<div class="modal fade" id="modalwishlist1" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
		<div class="modal-dialog white-modal">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="cs-icon icon-close"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-note wishlist-note">
						Added to <a href="wish-list.html">Wishlist</a>
					</div>
					<div class="modal-body-inner">
						<div class="modal-left wishlist-left">
							<div class="modal-product wishlist-product">
								<div class="product-left">
									<div class="wishlist-image modal-image wishlist-image-213223800871">
										<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="Extra Crispy">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-right wishlist-right">
							<div class="wishlist-cart">
								<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants-form variants"  enctype="multipart/form-data">
									<div class="form-left">
										<div class="product-right">
											<div class="name wishlist-name"><a href="product.html">Extra Crispy</a></div>
											<div class="wishlist-price wishlist-price-213223800871"><span class="price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
											</div>
										</div>
										<div class="quantity-content">
											<label>QTY</label>
											<input type="text" size="5" class="item-quantity item-quantity-qs" name="quantity" value="1">
										</div>
									</div>
									<div class="form-right">
										<div class="others-bottom">
											<a class="_btn btn-quick-shop" href="wish-list.html">View Wishlist</a>
											<a href="cart.html" class="_btn add-to-cart">Add to cart</a>
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

<!-- Modal Compare -->
<div class="wishlist-model">
	<div class="modal fade" id="modalCompare" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
		<div class="modal-dialog white-modal">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="cs-icon icon-close"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-note wishlist-note">
						Added to <a href="compare.html">Compare</a>
					</div>
					<div class="modal-body-inner">
						<div class="modal-left wishlist-left">
							<div class="modal-product wishlist-product">
								<div class="product-left">
									<div class="wishlist-image modal-image wishlist-image-213223800871">
										<img src="<?= base_url(); ?>assets_client/images/product_10.jpg" alt="Extra Crispy">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-right wishlist-right">
							<div class="wishlist-cart">
								<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants-form variants" enctype="multipart/form-data">
									<div class="form-left">
										<div class="product-right">
											<div class="name wishlist-name"><a href="product.html">Extra Crispy</a></div>
											<div class="wishlist-price wishlist-price-213223800871"><span class="price"><span class="money" data-currency-usd="$10.00" data-currency="USD">$10.00</span></span>
											</div>
										</div>
										<div class="quantity-content">
											<label>QTY</label>
											<input type="text" size="5" class="item-quantity item-quantity-qs" name="quantity" value="1">
										</div>
									</div>
									<div class="form-right">
										<div class="others-bottom">
											<a class="_btn btn-quick-shop" href="wish-list.html">View Compare</a>
											
											<a href="cart.html" class="_btn add-to-cart"> Add to cart</a>
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
