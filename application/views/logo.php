<div class="main">
				<div class="breadcrumb">
					<a href="<?=base_url();?>Pizza_in/dash">Home</a> 
					<a href="<?=base_url();?>Pizza_in/show_data/logo_table/r_id/r_status">Logo_display</a>
				</div>
					<div class="top-banner">
					<div class="top-banner-title">Logo</div>
					<div class="top-banner-subtitle">Pizza Shop <i class="fa fa-map-marker"></i> Surat</div>
				</div>
				<div class="content">
					<div class="panel">
						<!--<div class="content-header no-mg-top">
								<i class="fa fa-newspaper-o"></i>
							<div class="content-header-title">Form Elements</div>
						</div>-->
										<div class="row">
										<div class="col-md-12">
										<div class="content-box">
										<div class="content-box-header">
										<div class="box-title">	Logo Form</div></div>
										<?=form_open_multipart($action);?>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Logo</label>
											<div class="col-sm-8">
											<input class="form-control" placeholder="Enter Logo" type="file" multiple name="tfile[]" >
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
		