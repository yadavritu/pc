<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">Order Confirmation</h1>
								<div class="breadcrumb clearfix">
									<span ><a href="/"><span><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span>
										<?php echo anchor('Pizza/show_cart', '<span>Cart</span>') ?>
									</span>
									<span class="arrow-space"></span>
									<span>
										<?php echo anchor('Pizza/confirmation', '<span>Order Confirmation</span>') ?>
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
							<div class="shipping-calculator col-sm-4 col-xs-12 ">
								<h3>Shipping Information</h3>
								<div class="form-group">
									<h4 style="margin-bottom:0px">Name</h4>
									<label><?php echo ucfirst($sess['User_name']);?></label>
								</div>	
								<div class="form-group">
									<h4 style="margin-bottom:0px">Address</h4>
									<label><?php echo nl2br($order['flat_no']);?> <?php echo nl2br($order['address']);?><br><?php echo $order['landmark'];?><br><?php echo $order['pincode'];?></label>
																</div>	
								<div class="form-group">	
									<h4 style="margin-bottom:0px">SPECIAL INSTRUCTION</h4>
									<label><?php echo nl2br($order['note']);?></label>
								</div>
							</div>
							<div class="shipping-calculator col-sm-8 col-xs-12 ">
								<h3>Order Information</h3>
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
												</tr>
											</thead>
											<tbody>													
												<?php foreach($this1->cart->contents() as $item){?>   									
												<tr>
													<td class="table-shopping-cart-img">
														<a href="#">
															<img src="<?php echo $item['img']; ?>" style="height:75px;width:75px" title="<?php echo  $item['name']; ?>" />
														</a>
													</td>
													<td class="table-shopping-cart-title"><a href="#"><?php echo  $item['name']; ?></a>
													</td>
													<td><i class="fa fa-rupee"></i> <?= $item['price']; ?></td>
													<td>
														<?php echo $item['qty']; ?>
													</td>
													<td><i class="fa fa-rupee"></i> <?= $item['price']*$item['qty']; ?></td>						
												</tr>										
												<?php  } ?>
												<?php $shippingCharge = getShippingCharge($order['distance']['distance'],$order['per_km_cost'],$order['free_km']);?>		
												<?php if(!empty($shippingCharge['charge'])){?>
													<td class="table-shopping-cart-img" >
													</td>
													<td class="table-shopping-cart-title">Shipping Charge</a>
													</td>
													<td><i class="fa fa-rupee"></i> <?php echo $shippingCharge['per_km_cost']?>/KM</td>
													<td>
														<?php echo $shippingCharge['distance']?> KM
													</td>
													<td><i class="fa fa-rupee"></i> <?php echo $shippingCharge['charge']; ?></td>
												<?php }?>
											</tbody>
											<thead>
												<tr>
													<th colspan="3">Gross Total</th>
													<th><?php echo $this1->cart->total_items()?></th>
													<th><i class="fa fa-rupee"></i> <?php echo $this1->cart->total()+$shippingCharge['charge']?></th>
												</tr>
											</thead>
										</table>																							
									</div>
								</div>
							</div>
							</div>
							<div class="shipping-calculator col-sm-12 col-xs-12 group-checkout-input" style="margin:0px;">
								<div class="checkout-buttons">
									<div class="checkout-content">
										<div class="buttons clearfix">
											<?php echo anchor('order/buy', 'Make Payment','class="_btn"') ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php }?>
	</main>
</div>
	