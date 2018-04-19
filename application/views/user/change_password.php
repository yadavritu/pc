<script>
$(document).ready(function(){
			//alert("hello");
			$("#chk_old").blur(function(){
				$("#msg").html("plz wait")
			$.ajax({
				url:"<?=base_url();?>Pizza/change_new_password",
				method:"post",
				data:{submenu:$(this).val()}
			})
				.done(function(message){
					$("#msg").html(message);
			});
			});
		});
</script>
<body class="fastfood_1" >

	<!--Header-->
	<div class="fix-sticky"></div>
	
	<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="customers-layout register-layout">
				<div class="customers-wrapper">
					<div class="container">
						<div class="row">
							<div class="customers-inner">
								<div class="customers-content">
									<div id="register" class="customers">
										<h2>Change password</h2>
										<?=form_open_multipart($action);?>
										
								<div class="row">
								<div class="col-md-12">
							
								<div class="form-group">
								<label >Old Password:</label><br>
								<input type="text" name="change_password" id="chk_old" placeholder="OLD PASSWORD" class="form-control">
								
								</div>
								
								<p   id="msg"></p>
								
								</div>
								</div>
								<div class="content-box-footer">
								<input type="Submit" class="btn btn-danger">
									</div>
									<?=form_close();?>
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
	
	
	
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>