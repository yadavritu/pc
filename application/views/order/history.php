<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		 <section class="cart-content">
			<div class="cart-wrapper">
				<div class="container">
					<div class="row">
						<div id="shopify-section-cart-template" class="shopify-section">
							<div class="shipping-calculator col-sm-12 col-xs-12 ">
								<h3>My Orders</h3>
							</div>
							<div class="cart-form">								
								<table>
									<thead>
										<tr>
											<th>Order No.</th>
											<th>Status</th>
											<th>Date</th>
											<th>Address</th>
											<th>Order Total</th>
											<th></th>
										</tr>
									</thead>
									<tbody>					
										<?php if(!empty($orders)){?>
										<?php foreach($orders as $order){?>   									
										<tr>
											<td><?php echo anchor('Order/detail?order_id='.$order->id, $order->id) ?></td>
											<td><?= $order->status; ?></td>
											<td><?php echo  date("D M,y h:i a",strtotime($order->created)); ?></td>
											<td>
												<?php echo $order->flat_no;?> <?php echo $order->address;?> <?php echo $order->landmark;?> <?php echo $order->zipcode;?>
											</td>
											<td><i class="fa fa-rupee"></i> <?= $order->amount + $order->shipping_charge; ?></td>
											<td><?php echo anchor('Order/detail?order_id='.$order->id, 'View') ?></td>
										</tr>										
										<?php }?>
										<?php }else{?>
										<tr>
											<td colspan="5" class="text-danger">No Order found!</td>
										</tr>	
										<?php }?>
									</tbody>
								</table>																							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
	