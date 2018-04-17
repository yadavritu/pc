
	<!--menu ajax-->
<script>
		$(document).ready(function(){
			//alert("hello");
			$("#menu_check").blur(function(){
				$("#msg").html("plz wait")
			$.ajax({
				url:"<?=base_url();?>My_pizza/menu_check",
				method:"post",
				data:{menu:$(this).val()}
			})
				.done(function(message){
					$("#msg").html(message);
			});
			});
		});
</script>
<!-------------A SELECT MENU ON SUB MENU ------------------->
<script>

$("#menu").change(function(){
	alert($("#menu").val());
	$("#result").html("please wait..."+$("#menu").val());
	$.ajax({
		url:'product_submenu_fetch',
		method:'post',
		data:{value:$("#menu").val()}
	})
	.done(function(message){
		$("#result").html(message);
	});
});

</script>

<script>
			function function_cat()
			{
				var e=document.getElementById("submenu_cat");
				var struser=e.options[e.selectedIndex].value;
				$.ajax({
					url:"<?=base_url();?>My_pizza/catory_fetch",
					method:"post",
					data:{struser:struser}
				})
				.done(function(message){
					$("#msg1").html(message);
				});
				
			}
</script>


<!-----submenu ajax---->
	<script>
		$(document).ready(function(){
			//alert("hello");
			$("#submenu_check").blur(function(){
				$("#msg").html("plz wait")
			$.ajax({
				url:"<?=base_url();?>My_pizza/submenu_check1",
				method:"post",
				data:{submenu:$(this).val()}
			})
				.done(function(message){
					$("#msg").html(message);
			});
			});
		});
	</script>
<!---------categery---------->
	<script>
		$(document).ready(function(){
			//alert("hello");
			$("#catogery_check").blur(function(){
				$("#msg").html("plz wait")
			$.ajax({
				url:"<?=base_url();?>My_pizza/categry_check1",
				method:"post",
				data:{category:$(this).val()}
			})
				.done(function(message){
					$("#msg").html(message);
			});
			});
		});
		
			
		});
	
	</script>

<div class="main">
				<div class="breadcrumb">
					<a href="">Home</a> 
				
				 <a href="<?= base_url().$link; ?>"> <strong><?= $heading1;?></strong></a>
                    </div>
				<div class="top-banner">
					<div class="top-banner-title"><?=$heading;?></div>
					<div class="top-banner-subtitle">Pizza Shop <i class="fa fa-map-marker"></i> Surat</div>
				</div>
				<div class="content">
					<div class="panel">
					<?php if($this->input->get('valid')=='done'){ ?>
				<div class="alert alert-success alert-dismissible fade show">
					
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				    </button>
					<strong>Success!</strong> The data of <?= $heading;?> Insert Successfully <u><a href="<?= base_url().$link; ?>">Click Here</a></u> To Show
				</div>
				<?php } elseif($this->input->get('valid')=='notdone'){ ?>
				<div class="alert alert-danger alert-dismissible fade show">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
		</button>
				  <strong>Danger!</strong> The data of <?= $heading;?> Not Inserted Successfully<u><a href="<?= base_url().$link; ?>">Click Here</a></u> To Show
				</div>
				<?php } ?>
				<?php if($this->input->get('upvalid')=='done'){ ?>
				<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<strong>Success!</strong> The data of <?= $heading;?> Updates Successfully <u><a href="<?= base_url().$link; ?>">Click Here</a></u> To Show
				</div>
				<?php } elseif($this->input->get('upvalid')=='notdone'){ ?>
				<div class="alert alert-danger alert-dismissible fade show">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				  <strong>Danger!</strong> The data of <?= $heading;?> Not Updated Successfully<u><a href="<?= base_url().$link; ?>">Click Here</a></u> To Show
				</div>
				<?php } ?>
					<!--<?php if(count($update)>0) { foreach($update as $up) {
											//echo  $up->r_menu; 
										} } ?>-->
						<div class="row">
							<div class="col-md-12">
								<div class="content-box">
									<div class="content-box-header">
										<div class="box-title"><?=$heading;?></div>
										
									</div>
			
								<?php $data=array('id'=>"Form_control") ;?>
									<?= form_open_multipart($action,$data); ?>
										
									<?= $text; ?>			
									<label style="font-size:20px; color:blue;" id="msg"></label>
   
			
	
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script> <script>
      $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 200
      });
    </script>
	
	