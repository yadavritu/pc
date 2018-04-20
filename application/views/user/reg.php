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
								<!--register form uge for -->
									<h2>Register</h2>
									<form method="post" action="<?= $action;?>" enctype="multipart/form-data" id="form_values" accept-charset="UTF-8">
										<div class="clearfix large_form form-item">
											<input type="text" value="" placeholder="First Name"  name="tfname" class="text" size="30">
										</div>
										<div class="clearfix large_form form-item">
											<input type="text" value="" placeholder="Last Name" name="tlname" class="text" size="30">
										</div>
										<div class="clearfix large_form form-item">
											<input type="email" value="" placeholder="Email" name="temail" class="text" size="30">
										</div>
										<div class="clearfix large_form form-item">
											<input type="file" value="" placeholder="" name="file" class="file" size="30">
										</div>
										<div class="clearfix large_form form-password form-item">
											<input type="password" value="" placeholder="Password" name="tpassword" class="password text" size="30">
											<span class="cs-icon icon-eye"></span>
										</div>
										<div class="action_bottom">
											<input type="submit" class="_btn"  value="Create">
											<span class="note"><span class="or">or</span><a href="<?=base_url();?>Pizza/index">Return to Store</a></span>
											<span class="note"><span class="or"></span><a href="<?=base_url();?>Pizza/login">login</a></span>
										</div>

									</form>
								</div>
								<!-- #register -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
	
	