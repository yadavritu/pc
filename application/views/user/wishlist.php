<!-- Main Content -->
<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="heading-content">
				<div class="heading-wrapper">
					<div class="container">
						<div class="row">
							<div class="page-heading-inner heading-group">
								<div class="breadcrumb-group">
									<h1 class="hidden">Wish List</h1>
									<div class="breadcrumb clearfix">
										<span><a href="<?=base_url();?>" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span>
											<a href="<?=base_url();?>Pizza/show_wishlist" title="Wish List" itemprop="url"><span itemprop="title">Wish List</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="container wishlist-page shop_area">
				<div class="row">
					<div id="wishlistcontent">
						<span class="wishlist-count"> Total Wish list <h2><?= $wish_total;?></h2> </span>
						<ul>
							<li class="wishlist-heading">
								<div class="wishlist-image">
									Image
								</div>
								<div class="wishlist-name">
									Name
								</div>
								<div class="wishlist-price">
									Price
								</div>
								<div class="wishlist-addCart">
									Add to cart
								</div>
								<div class="wishlist-remove">
									Remove
								</div>
							</li>
							<?php foreach($data as $d){ ?>
							<?php $p_i=explode(",",$d->p_img); ?>
							<li class="wlr wishlist-juice-ice-tea-1 wishlist-added">
								<div class="wishlist-image wishlist-image-213224194087"><?=str_ireplace("height='100' width='100'","",$p_i[0])?></div>
								<div class="wishlist-name"><a href="<?=base_url();?>#"><?=$d->p_name;?></a></div>
								<div class="wishlist-price wishlist-price-213224194087"><span class="price"><span class="money" data-currency-usd="$20.00" data-currency="USD"><?=$d->p_price;?></span></span>
								</div>
								<div class="wishlist-addCart">
									<form action="http://demo.designshopify.com/html_fastfood/cart.html" method="post" class="variants" enctype="multipart/form-data">
										<div class="others-bottom"><a href="<?=base_url();?>cart.html" class=" wishlist-addToCart _btn btn-quick-shop add-to-cart" style="opacity: 1;">Add to cart</a></div>
									</form>
								</div>
								<div class="wishlist-remove" data-wishlisthandle="juice-ice-tea-1"><span class="cs-icon icon-bin"></span></div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</main>
	</div>