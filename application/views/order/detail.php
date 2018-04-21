<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">Order Detail</h1>
								<div class="breadcrumb clearfix">
									<span ><a href="/"><span><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span>
										<?php echo anchor('Order/history', '<span>Order History</span>') ?>
									</span>
									<span class="arrow-space"></span>
									<span>
										<?php echo anchor('Order/history', '<span>Order Detail</span>') ?>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		 <section class="cart-content">
			<div class="cart-wrapper">
				<div class="container">
					<div class="row">
						<div id="shopify-section-cart-template" class="shopify-section">
							<div class="shipping-calculator col-sm-4 col-xs-12 ">
								<h3>ORDER# <?php echo ($order[0]->id);?></h3>
								<div class="form-group">
									<h4 style="margin-bottom:0px">Order Status: <?php echo $order[0]->status;?></h4>
									<label><?php echo  date("D M,y h:i a",strtotime($order[0]->created)); ?></label>
								</div>	
								<div class="form-group">
									<h4 style="margin-bottom:0px">Address</h4>
									<label><?php echo nl2br($order[0]->flat_no);?> <?php echo nl2br($order[0]->address);?><br><?php echo $order[0]->landmark;?><br><?php echo $order[0]->zipcode;?></label>
								</div>	
								<?php if(!empty($order[0]->note)){?>
								<div class="form-group">	
									<h4 style="margin-bottom:0px">SPECIAL INSTRUCTION</h4>
									<label><?php echo nl2br($order[0]->note);?></label>
								</div>
								<?php }?>
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
												<?php $quantity = 0;?>
												<?php foreach($orderDetail as $item){?>   									
												<tr>
													<td class="table-shopping-cart-img">
														<a href="/Pizza/product_info/?pid=<?php echo $item->product_id;?>">
															<img src="<?php echo $item->product_img; ?>" style="height:75px;width:75px" title="<?php echo  $item->product_name; ?>" />
														</a>
													</td>
													<td class="table-shopping-cart-title">
														<?php echo anchor('Pizza/product_info/?pid='.$item->product_id, $item->product_name)?></a>
													</td>
													<td><i class="fa fa-rupee"></i> <?= $item->product_price; ?></td>
													<td>
														<?php 
															echo $item->quantity; 
															$quantity+=$item->quantity;
														?>
													</td>
													<td><i class="fa fa-rupee"></i> <?= $item->product_price*$item->quantity; ?></td>						
												</tr>										
												<?php  } ?>
												<?php if($order[0]->shipping_charge > 0){?>
													<td class="table-shopping-cart-img" >
													</td>
													<td class="table-shopping-cart-title">Shipping Charge</a>
													</td>
													<td></td>
													<td>
														<?php echo $order[0]->distance/1000?> KM
													</td>
													<td><i class="fa fa-rupee"></i> <?php echo $order[0]->shipping_charge; ?></td>
												<?php }?>
											</tbody>
											<thead>
												<tr>
													<th colspan="3">Gross Total</th>
													<th><?php echo $quantity?></th>
													<th><i class="fa fa-rupee"></i> <?php echo $order[0]->amount+$order[0]->shipping_charge?></th>
												</tr>
											</thead>
										</table>																							
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
	