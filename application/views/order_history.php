<div class="main">
				<div class="breadcrumb">
					<a href="">Home</a>
					<a href=""><?=$heading;?></a>
				</div>
				
				<div class="top-banner">
					<div class="top-banner-title"><?=$heading;?></div>
					<div class="top-banner-subtitle"></div>
				</div>

				<div class="content">
				<?php if($this->input->get('data')=='true'){ ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
  <strong>Hurry !!!</strong> record successfully updated .
			</div><?php } ?>
            
					<div class="panel">
						<div class="row">
							<div class="col-md-12">
								<div class="content-box">
									<div class="table-responsive">
										<table  class="table table-striped table-bordered datatable">
											<thead>
												<tr>
													<th>Order No.</th>
													<th>Customer Name</th>
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
													<td><?php echo $order->r_name." ".$order->r_lname?></td>
													<td><?= $order->status; ?></td>
													<td><?php echo  date("D M,y h:i a",strtotime($order->created)); ?></td>
													<td>
														<?php echo $order->flat_no;?> <?php echo $order->address;?> <?php echo $order->landmark;?> <?php echo $order->zipcode;?>
													</td>
													<td><i class="fa fa-rupee"></i> <?= $order->amount + $order->shipping_charge; ?></td>
													<td><?php echo anchor('My_pizza/order_detail?order_id='.$order->id, 'View') ?></td>
												</tr>										
												<?php }?>
												<?php }else{?>
												<tr>
													<td colspan="6" class="text-danger">No Order found!</td>
												</tr>	
												<?php }?>
											</tbody>
										</table>																		
									</div>
								</div>
								
							</div>
						</div>
					</div>
				
				</div>
			</div>
		
		
		