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
									<h2>Register with Pizza Corner</h2>
									<?php echo form_open_multipart("Pizza/register",'id="form_values"')?>
										<div class="clearfix large_form form-item">
											<input type="text" value="<?php echo set_value('r_name'); ?>" placeholder="First Name"  name="r_name" class="text" size="30">
											<?php echo form_error('r_name', '<div class="text-danger">', '</div>');?>
										</div>
										<div class="clearfix large_form form-item">
											<input type="text" value="<?php echo set_value('r_lname'); ?>" placeholder="Last Name" name="r_lname" class="text" size="30">
											<?php echo form_error('r_lname', '<div class="text-danger">', '</div>');?>
										</div>
										<div class="clearfix large_form form-item">
											<input type="email" value="<?php echo set_value('r_email'); ?>" placeholder="Email" name="r_email" class="text" size="30">
											<?php echo form_error('r_email', '<div class="text-danger">', '</div>');?>
										</div>
										<div class="clearfix large_form form-password form-item">
											<input type="password" value="" placeholder="Password" name="r_password" class="password text" size="30">
											<span class="cs-icon icon-eye"></span>
											<?php echo form_error('r_password', '<div class="text-danger">', '</div>');?>
										</div>
										<div class="clearfix large_form form-item">
											<input type="text" value="<?php echo set_value('mobile_no'); ?>" placeholder="Mobile Number" name="mobile_no" class="text" maxlength="10">
											<?php echo form_error('mobile_no', '<div class="text-danger">', '</div>');?>
										</div>
										<div class="clearfix large_form form-item">
											<input type="file" value="<?php echo set_value('r_file'); ?>" placeholder="" name="r_file" class="file" size="30">
											<?php echo form_error('r_file', '<div class="text-danger">', '</div>');?>
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
	
	