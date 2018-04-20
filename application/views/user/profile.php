<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">My Profile</h1>
								<div class="breadcrumb clearfix">
									<span><a href="" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span>
										<a href="" title="My Account" itemprop="url"><span itemprop="title">My Profile</span></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="account-layout">
			<div class="account-wrapper">
				<div class="container">
					<div class="row">
						<div class="account-inner">
							<div class="account-content">
								<div class="account-info">
								<?=form_open_multipart();?>
								<div class="form-group row">
										<label class="col-sm-10 control-label" for="">Enter Profile Show</label>
											
										<div class="col-sm-8">
											<?=$user_data['user_img'];?>
											<br>
											<br>
											<?=$user_data['User_name'];?>
										</div>
										
										</div>
									<br>
									<div class="content-box-footer">
									<input type="Submit" class="btn btn-danger">
									<br>	
									<br>
									</div>
								<?=	form_close();?>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>