<!DOCTYPE html>
<html>
	
<head>
		<title>Pizza_coner  | Admin Template</title>
		<meta charset="utf-8">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<meta content="template language" name="keywords">
		<meta content="Native Theme" name="author">
		<meta content="Admin Template" name="description">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link rel="icon" type="stylesheet" href="<?=base_url();?>assets/images/c.png">
		
		<link href="<?=base_url();?>assets/favicon.png" rel="shortcut icon">
		<link href="<?=base_url();?>assets/apple-touch-icon.png" rel="apple-touch-icon">
		
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/animate/animate.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css"/>
	
		
		<script src="<?=base_url();?>assets/plugins/jquery/jquery-2.1.1.min.js"></script>
		<script src="<?=base_url();?>assets/js/app.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			//alert("hello");
			$("#mail_check").blur(function(){
				$("#msg").html("<img src='<?=base_url();?>uploads/banner_img/loader.gif' height='50' width='50'>")
			$.ajax({
				url:"<?=base_url();?>My_pizza/mail_check1",
				method:"post",
				data:{email:$(this).val()}
			})
				.done(function(message){
					$("#msg").html(message);
			});
			});
		});
	</script>
	</head>
	<body>
	
		<div class="auth-wrapper">
			<div class="auth-header">
				<div class="auth-title"></div>
				<div class="auth-subtitle"></div>
				<div class="auth-label"><style="font-weight:bold;">Pizza</style></div>
			</div>
			<form method="post" action="<?=($action);?>" class="auth-body">
			<div class="auth-body">
				<div class="auth-content">

					<div class="form-group">
					
						<label>Email</label>
							<input class="form-control" placeholder="Enter email" id="mail_check" type="email" name="temail">
							<label style="font-color:red"; id="msg"></label>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" placeholder="Enter password" type="password" name="tpassword">
					</div>
						<input type="submit" class="btn btn-primary sm-max">
				
				</div>
				<div class="auth-footer sm-text-center">
					<div class=" auth-link sm-max sm-mgtop-20">
						<div class="devider"></div>
						<a href="<?=base_url();?>My_pizza/forgot_pass">Forgot Password?</a>
					</div>
					<div class=" auth-link sm-max sm-mgtop-20">
					<?php if($this->input->get('email')=='unsuccess'){ ?>
						<h1 style="color:red;font-size:30px;">Not match Password </h1>
						<?php } ?>
						<?php if($this->input->get('email')=='invalid_email'){ ?>
						<h1 style="color:red;font-size:30px;"> Not  Email Match </h1>
						<?php } ?>
					</div>
				</div>
			</div>

			</form>
		</div>
	</body>

<!-- Mirrored from www.native-theme.com/pongo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 09:58:23 GMT -->
</html>