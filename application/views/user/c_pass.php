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
									<h2>CONFROM_PASSWORD</h2>
									<form method="post" action="<?= $action; ?>" accept-charset="UTF-8">
									
										<div class="clearfix large_form form-item form-password">
											<input type="password" value="" placeholder="Password" name="tpassword" id="customer_password" class="text" size="16">
											<span class="cs-icon icon-eye"></span>
										</div>
									
										<div class="action_bottom">
											<input class="_btn" type="submit" value="Sign In">
										</div>
										
							
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
	</main>
</div>

