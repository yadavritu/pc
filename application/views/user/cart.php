<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">Your Cart</h1>
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="cart.html" title="Your Cart" itemprop="url"><span itemprop="title">Your Cart</span></a>
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
														<th>Remove</th>
														<th>update</th>
													</tr>
												</thead>
												<tbody>
													
						 <?php
						
						 foreach($this1->cart->contents() as $item)
						 {
							 ?>   
							<form   method="get" action="<?= base_url()?>Pizza/update_cart" id="cartform">
									
					<tr>
							<td class="table-shopping-cart-img">
								<a href="#">
									<img src="<?= $item['img']; ?>" style="height:100px;width:100px" alt="Image Alternative text" title="Image Title" />
								</a>
							</td>
							<td class="table-shopping-cart-title"><a href="#"><?= $item['name']; ?></a>
							</td>
							<td><i class="fa fa-rupee"></i><?= $item['price']; ?></td>
							<td>
								<input class="form-control table-shopping-qty" type="text" name="qty" value="<?= $item['qty']; ?>" />
								<input class="form-control table-shopping-qty" type="hidden" name="qty1" value="<?= $item['rowid']; ?>" />
							</td>
							<td><i class="fa fa-rupee"></i><?= $item['price']*$item['qty']; ?></td>
							<td>
								<a class="fa fa-close table-shopping-remove "  data-productid="<?= $item['rowid']; ?>" href="<?php echo base_url(); ?>Pizza/cart_remove/?id=<?= $item['rowid'];?>"></a>
							  
								
							</td>
							<td>
							  <button  ><i  title="update"  class="fa fa-refresh table-shopping-remove " ></i></button>
							</td>
						</tr>
							</form>
										
						 <?php  } ?>
					 
						
												</tbody>
											</table>
											<div class="group-button">
											<a data-productid="<?= $item['rowid']; ?> "href="<?=base_url();?>Pizza/collection/" class="_btn">Continue Shopping</a>
												<div class="group_btn_right">
													<a href="<?php echo base_url(); ?>Pizza/cart_remove/?id=<?= $item['rowid'];?>">
													<input type="button" class="_btn clearAllCart"  value="Clear all" ></a>
													
												</div>
											</div>
																							
											<div class="group-checkout-input">
												<hr style="border-top:2px solid #d5d5d5;">
												<form   method="POST" action="<?= base_url()?>order/confirmation">
													<div class="shipping-calculator col-sm-6 col-xs-12 ">
														<div id="shipping-calculator">
															<h3>Shipping Information</h3>
															<div class="group_form">
																<div class="form-item">
																	<label for="order_flat_no">House No/Flat Number</label>
																	<input type="text" id="order_flat_no" name="order[flat_no]" value="<?php echo isset($order['flat_no'])?$order['flat_no']:""?>">
																</div>
																<div class="form-item">
																	<label for="order_address">Address</label>
																	<textarea id="order_address" name="order[address]" style="min-height:100px;"><?php echo isset($order['address'])?$order['address']:""?></textarea>
																</div>
																<div class="form-item" id="order_landmark" style="">
																	<label for="order_landmark" id="order_landmark_label">Landmark</label>
																	<input type="text" id="order_landmark" name="order[landmark]" value="<?php echo isset($order['landmark'])?$order['landmark']:""?>">
																</div>
																<div class="form-item">
																	<label for="order_zip">Pin Code</label>
																	<input type="text" id="order_pincode" name="order[pincode]" value="<?php echo isset($order['pincode'])?$order['pincode']:""?>">
																</div>															
															</div>
														</div>
													</div>
													<div class="checkout-buttons col-sm-6 col-xs-12">
														<div class="note-content group_form">
															<div class="form-item">
																<label for="note">Add special instructions for your order</label>
																<textarea id="note" name="order[note]" placeholder="Enter text here..."> <?php echo isset($order['note'])?$order['note']:""?></textarea>
															</div>
														</div>
														<div class="checkout-content">
															<div class="buttons clearfix">
																<input  type="submit" id="checkout" class="_btn" name="checkout" value="Proceed to Check Out"></a>
															</div>
														</div>
													</div>
												</form>
											</div>
									</div>
								</div>
							</div>
							<script>
								$(window).ready(function($) {
									$(".quantity-mobile input").change(function() {
										var qty = $(this).val();
										$(this).parents('tr').find('.item-quantity').val(qty);
									});
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php } else{?>
<center> Empty Cart!!</center>
<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
								<center><a href="<?= base_url(); ?>Pizza" class="btn bg-warning">	CONTINUE SHOPPING </a></center>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
</main>
</div>
	