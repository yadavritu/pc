<!-- capta google -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="customers-layout login-layout">
			<div class="customers-wrapper">
				<div class="container">
					<div class="row">
						<div class="customers-inner">
							<div class="customers-content">
								<div id="login" class="customers">
									<h2>Login</h2>
									<form method="post" action="<?= $action; ?>" accept-charset="UTF-8">
										<div class="clearfix large_form form-item">
											<input type="email" value="" placeholder="Email Address" required name="temail" id="mail_check" class="text">
											<label id="msg"></label>
									</div>
										<div class="clearfix large_form form-item form-password">
											<input type="password" value="" placeholder="Password" required name="tpassword" id="customer_password" class="text" size="16" >
											<span class="cs-icon icon-eye"></span>
										</div>
										<div class="g-recaptcha" data-sitekey="6Lfm0lMUAAAAALibANdhec5zXl3452OygvLE3JVQ" ></div>
											<div id="html_element"></div>
										<div class="clearfix">
											<a class="note" href="<?=base_url();?>Pizza/forget_pass" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a>
										</div>
										<div class="action_bottom">
											<input class="_btn" type="submit" value="Sign In">
										</div>
										<div class="create-account">
								<?php if($this->input->get('em')=='unsuccess') { ?>
								<h4 style="font-size:30px;color:red;">NOT_LOGIN</h4>
								<?php } ?>
								</div>
								<div class="create-account">
									<?php if($this->input->get('em')=='invlid_email') {?>
									<h4 style="color:red;font-size:40px;">Email_invlide</h4>
									<?php } ?>
								</div>
									</form>
									<div class="create-account">
										<h4>You don't have account?</h4>
										<a href="<?=base_url();?>Pizza/reg" class="_btn">Create account now</a>
									</div>
								</div>
								<div id="recover-password" style="display:none;" class="customers">
									<h2>Reset Password</h2>
									<p class="note">We will send you an email to reset your password.</p>
									<form method="post" action="<?= $action1; ?>" accept-charset="UTF-8">
										<div class="clearfix large_form form-item">
											<input type="email" value="" placeholder="Email Address" size="30" name="temail" id="recover-email" class="text">
										</div>
										<div class="action_bottom clearfix">
											<input class="_btn" type="submit" value="Send_mail">
										</div>
										<div class="clearfix note_text_group">
											or<span class="note_link"><a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript">
			function showRecoverPasswordForm() {
				document.getElementById('recover-password').style.display = 'block';
				document.getElementById('login').style.display = 'none';
			}

			function hideRecoverPasswordForm() {
				document.getElementById('recover-password').style.display = 'none';
				document.getElementById('login').style.display = 'block';
			}

			if (window.location.hash == '#recover') {
				showRecoverPasswordForm()
			}
		</script>
		<script>
			$(document).ready(function(){
				var googleResponse = jQuery('#g-recaptcha').val();
if (!googleResponse) {
$('<p style="color:red !important" class=error-captcha"><span class="fa fa-remove " ></span> Please fill up the captcha.</p>" ').insertAfter("#html_element");
return false;
} else {            
return true;
}
			});			</script>
	</main>
</div>

