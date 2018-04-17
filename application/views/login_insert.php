<!DOCTYPE html>
<html>
	
<!-- Mirrored from www.native-theme.com/pongo/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 09:57:33 GMT -->
<head><body>
		<div class="wrapper">
			<div class="main">
				<div class="content">
					<div class="panel">
						<div class="content-header no-mg-top">
							<i class="fa fa-newspaper-o"></i>
							<div class="content-header-title">Form Elements</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="content-box">
									<?=form_open_multipart($action);?>									<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Your Name </label>
											<div class="col-sm-8">
												<input class="form-control" placeholder="Enter Your Name" name="tname" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enatr Your Email</label>
											<div class="col-sm-8">
												<input class="form-control" placeholder="Enter Your email" name="temail" type="email">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Password</label>
											<div class="col-sm-8">
												<input class="form-control" placeholder="Password"  name="tpassword"type="password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">File</label>
											<div class="col-sm-8">
												<input class="form-control" placeholder="file"name="tfile" type="file">
											</div>
										</div>
										<div class="content-box-footer">
										<input type="submit" class="btn btn-primary">
									</div>
										</form>
									
								</div>
							</div>
								</div>
					</div>
				</div>
			</div>
		</div>
	</body>

<!-- Mirrored from www.native-theme.com/pongo/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 09:57:37 GMT -->
</html>