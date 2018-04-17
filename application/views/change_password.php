
<script>
$(document).ready(function(){
			//alert("hello");
			$("#chk_old").blur(function(){
				$("#msg").html("plz wait")
			$.ajax({
				url:"<?=base_url();?>My_pizza/change_new_password",
				method:"post",
				data:{submenu:$(this).val()}
			})
				.done(function(message){
					$("#msg").html(message);
			});
			});
		});
</script>

<div class="main">
				<div class="breadcrumb">
					<a href="<?=base_url();?>My_pizza/dash">Home</a> 
					<a href="">Change password</a>
				</div>
					<div class="top-banner">
					<div class="top-banner-title">Cange password</div>
					<div class="top-banner-subtitle">Pizza Shop <i class="fa fa-map-marker"></i> Surat</div>
				</div>
				<div class="content">
					<div class="panel">
						<div class="row">
							<div class="col-md-12">
								<div class="content-box">
								<div class="content-box-header">
								<div class="box-title">Change Password Form</div></div>
								<?php $from_values=array('id'=>"from_validations");?>
								<?=form_open_multipart($action,$from_values);?>
										
								<div class="row">
								<div class="col-md-12">
							
								<div class="form-group">
								<label >Old Password:</label>
								<input type="text" name="change_password" id="chk_old" placeholder="OLD PASSWORD" class="form-control">
								
								</div>
								<p   id="msg"></p>
								
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
		