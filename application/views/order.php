
<div class="main">
				<div class="breadcrumb">
			<a href="">Home</a> 
			<a href="<?=base_url();?>My_pizza/display_order/order_table/o_id/o_status">ORDER</a>
			
				</div>
				<div class="top-banner">
					<div class="top-banner-title"></div>
					<div class="top-banner-subtitle">Pizza Shop <i class="fa fa-map-marker"></i> Surat</div>
				</div>
				<div class="content">
					<div class="panel">
						<div class="row">
							<?php if($this->input->get('oder')=='done'){ ?>
				<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<?= $heading1;?> Insert Successfully <u><a href="<?= base_url().$link; ?>">Click Here</a></u> To Show
				</div>
				<?php } elseif($this->input->get('oder')=='notdone'){ ?>
				<div class="alert alert-danger alert-dismissible fade show">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				<?= $heading1;?> Insert Successfully <u><a href="<?= base_url().$link; ?>">Click Here</a></u> To Show
				</div>
				<?php } ?>
							<div class="col-md-12">
								<div class="content-box">
									<div class="content-box-header">
										<div class="box-title"><?= $heading1;?></div>
									
				</div>
				
				<?=form_open_multipart($action);?>
				<div class="form-group row">
			
				<label class="col-sm-4 control-label" for="">User Name</label>
				<div class="col-sm-8">
				<input class="form-control"value="" placeholder="Enter order Name" type="text"  name="o_name">
				</div>
				
				</div>	
			<div class="form-group row">
				<label class="col-sm-4 control-label" for="">ENTER ORDER ADDRESS</label>
				<div class="col-sm-8">
				<input class="form-control"value="" placeholder="Enter Address" type="text"  name="o_address">
			</div>
			</div>
			
				<div class="form-group row">
				<label class="col-sm-4 control-label" for="">ENTER ORDER  QUANTITY</label>
				<div class="col-sm-8">
				<input class="form-control"value="" placeholder="Enter order Quantity" type="text" name="o_qty">
				</div>
				</div>
				
				<div class="form-group row">
			
				<label class="col-sm-4 control-label" for="">ENTER ORDER  AMOUNT </label>
				<div class="col-sm-8">
				<input class="form-control"value="" placeholder="Enter order Amount" type="text"  name="o_amount">
				</div>
				
				</div>
				<div class="form-group row">
			
				<label class="col-sm-4 control-label" for="">ENTER ORDER TIME</label>
				<div class="col-sm-8">
				<input class="form-control"value="" placeholder="Enter order Order Time" type="time" name="o_time">
				</div>
				
				</div>
													
		<div class="content-box-footer">
		<input type="Submit" class="btn btn-primary">
		</div>
		<?=form_close();?>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
		