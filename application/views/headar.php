<!DOCTYPE html>
<html>
<head>
		<title>Pizza_coner | Admin </title>
		<meta charset="utf-8">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<meta content="template language" name="keywords">
		<meta content="Native Theme" name="author">
		<meta content="Admin Template" name="description">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		
		<link href="<?=base_url();?>favicon.png" rel="shortcut icon">
		<link href="<?=base_url();?>apple-touch-icon.png" rel="apple-touch-icon">
	
  
	
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/bootstrap/dist/css/bootstrap.min.css"/>
		<link href="<?=base_url();?>assets/plugins/datatable/media/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?=base_url();?>assets/plugins/datatable/media/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/animate/animate.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="<?=base_url();?>assets/plugins/jquery/jquery-2.1.1.min.js"></script>
		<script src="<?=base_url();?>assets/plugins/chart.js/dist/Chart.min.js"></script>
		<script src="<?=base_url();?>assets/plugins/jquery-count-to/jquery.countTo.js"></script>
		<script src="<?=base_url();?>assets/plugins/datatable/media/js/jquery.dataTables.min.js"></script>
		<script src="<?=base_url();?>assets/plugins/datatable/media/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?=base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="<?=base_url();?>assets/js/app.js"></script>
		<link rel="icon" type="stylesheet" href="<?=base_url();?>assets/images/c.png">
			
	
	<!--banner cycle2--->
		<script src="<?= base_url(); ?>assets/libs/bootstrap-tagsinput/dist/tagsinput.js"></script>

		<!--- jqv,jv --->
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>	
	
		<script src="<?=base_url();?>validations/jqv.js"></script>
		<script src="<?=base_url();?>validations/<?= $validation; ?>"></script>
		
					
	<style>
	.error
	{
		color:red;
		font-size:15px;
	}
	</style>
	</head>
	
	<body>
		<div class="top-nav">
			<div class="top-nav-box">
				<div class="side-nav-mobile"><i class="fa fa-bars"></i></div>
				<div class="logo-wrapper">
					<div class="logo-box">
						<img alt="pongo" src="<?=base_url();?>assets/images/c.png">
						<a href="<?=base_url();?>#">
							<div class="logo-title">Fooder - Pizza </div>
						</a>
					</div>
				</div>
				<div class="top-nav-content">
					<div class="top-nav-box">
						<div class="quick-link">
							<div class="link-icon"><i class="fa fa-bars"></i></div>
							<ul class="animated bounceInUp">
								<li><a href="#"><i class="fa fa-bars"></i> Mailbox</a></li>
								<li><a href="#"><i class="fa fa-map-marker"></i> Calendar</a></li>
								<li><a href="#"><i class="fa fa-suitcase"></i> Map</a></li>
								<li><a href="#"><i class="fa fa-signal"></i> Trainning</a></li>
								<li><a href="#"><i class="fa fa-paper-plane"></i> Photos</a></li>
								<li><a href="#"><i class="fa fa-map-o"></i> Timeline</a></li>
							</ul>
						</div>
						<div class="global-search">
							<form class="form-inline">
								<button class="btn btn-primary" type="submit"> <i class="fa fa-search"></i></button>
								<input class="form-control mb-1 mr-sm-1 mb-sm-0" placeholder="Search projects..." type="text">
							</form>
						</div>
						<div class="user-top-profile">
							<div class="user-image">
								<div class="user-on"></div>
								<!--<img alt="pongo" src="<?=base_url();?>assets/images/profile.png">-->
									<?=$admin_data['Admin_Img'];?>
							</div>
							<div class="clear">
								<div class="user-name"><?=$admin_data['Admin_Name'];?></div>
								<div class="user-group">Admin</div>
								<ul class="user-top-menu animated bounceInUp">
									<li><a href="#">Profile <div class="badge badge-yellow pull-right">2</div></a></li>
									<li><a href="#">Settings</a></li>
									<li><a href="<?=base_url();?>My_pizza/change_password">Change Password</a></li>
									<li><a href="<?=base_url();?>My_pizza/logout_session">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		

<!-- Mirrored from www.native-theme.com/pongo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 09:56:58 GMT -->
</html>