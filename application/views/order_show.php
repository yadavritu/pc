<div class="main">
				<div class="breadcrumb">
					<a href="">Home</a>
					<a href="<?=base_url();?>my_pizza/display_order/order_table/o_id/">Order Dispaly</a>
				</div>
				
				<div class="top-banner">
					<div class="top-banner-title"></div>
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
									<div class="table-responsive">
								<?php
									$title=array();
									$colunm=array();
										foreach($lib_col as $k=>$v)
											{
												$title[].=$k;
												$colunm[].=$v;
											}
								?>
										<table  class="table table-striped table-bordered datatable">
											<thead>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													
													 <?php foreach($title as $h){ ?>
													<th class="text-center"><?=$h; ?></th>
													<?php } ?>
													<th class="text-center">Action</th>
													
												</tr>
											</thead>
											<tbody>
												<?php foreach($records as $r){ ?>
												<tr>
												<td class="text-center"><input type="checkbox"></td>
												 <?php foreach($colunm as $m){ ?>				
												
													<td class="text-center"><?= $r->$m; ?></td>
												<?php } ?>
<!--<td><a class="btn btn-danger" href='<?= base_url()?>My_pizza/delete_data/<?= $tbl ."/". $id."/".$r->$id;?>/?re=<?= $redirect; ?>'>Delete</a></td>
<td><a class="btn  btn-primary" href='<?= base_url().$edit ;?>?tbl=<?= $tbl ."&col=". $id."&valu=".$r->$id;?>&edit=true'>Edit</a></td>
<td><a class="btn  btn-warning" href='<?= base_url()?>My_pizza/status/<?= $tbl."/". $id."/".$r->$id."/".$status."/".$r->$status;?>/?sre=<?= $redirect;?>'><?= $r->$status;?></a></td>
-->	
<td><a class="btn btn-primary" href="<?=base_url();?>My_pizza/user_data">View</a>								
</td>								
</tr>
<?php } ?>
											
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				
				</div>
			</div>
		
		
		