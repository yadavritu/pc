<div class="main">
				<div class="breadcrumb">
					<a href="">Home</a>
					<a href=""><?=$heading;?></a>
				</div>
				
				<div class="top-banner">
					<div class="top-banner-title"><?=$heading;?></div>
					<div class="top-banner-subtitle">Welcome back, John Doe, <i class="fa fa-map-marker"></i> New York City</div>
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
									<div class="container">
										<div class="row">
												<div class="col-sm-3 ">
													<h1>ORDER# <?php echo ($order[0]->id);?></h1>
													<div class="form-group">
														<label><?php echo  date("D M,y h:i a",strtotime($order[0]->created)); ?></label>
													</div>	
													<h4 style="margin-bottom:0px">Customer: <?php echo $order[0]->r_name." ".$order[0]->r_lname;?></h4>
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
													<div class="form-group">
														<?php
															if($order[0]->status == "Pending"){
																echo anchor('My_pizza/order_update/?status=Accepted&order_id='.$order[0]->id, "Click here to Mark as In Progress",array('class'=>'btn btn-warning','onclick'=>"confirm('Are you sure want to change status?')"));
															}elseif($order[0]->status=="Accepted"){
																echo anchor('My_pizza/order_update/?status=Delivered&order_id='.$order[0]->id, "Click here to Mark as Delivered",array('class'=>'btn btn-success','onclick'=>"confirm('Are you sure want to change status?')"));
															}
														?>
													</div>	
												</div>
												<div class="col-sm-9">
														<table  class="table table-striped table-bordered">
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
				
				</div>
			</div>
		
		
		