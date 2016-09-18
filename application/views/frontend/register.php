<!DOCTYPE html>
<html lang="en" class="fixed"> 
 
<head>

<!-- Basic -->
<meta charset="utf-8"/>

<title>PT. CAD Solusindo</title>  
<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Web Fonts  -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/bootstrap/css/bootstrap.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/font-awesome/css/font-awesome.css')?>" /> 

<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/stylesheets/theme.css')?>" />

<!-- Skin CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/stylesheets/skins/default.css')?>" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/stylesheets/theme-custom.css')?>">

<!-- Head Libs -->
<script src="<?php echo base_url('assets/backend/vendor/modernizr/modernizr.js')?>"></script>
</head>

<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="<?php echo base_url(); ?>" class="logo pull-left">
					<img src="<?php echo base_url('assets/backend/images/logo.png')?>" height="54" alt="Logo" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
                    <!-- NOTIF -->
            <?php
            $message = $this->session->flashdata('notif');
            if($message){
                echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            }?>
    					
						<?php echo form_open('register/register','class="form-horizontal"'); ?> 
							<div class="form-group mb-lg">
								<label>Email</label>
								<div class="input-group input-group-icon"> 
									<input name="email" type="email" class="form-control input-lg" required autofocus/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-envelope"></i>
										</span>
									</span>
								</div>
							</div>
                            
                            <div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon"> 
									<input name="username" type="text" class="form-control input-lg" required/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label> 
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" required/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. PT. CAD SOLUSINDO. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url('assets/backend/vendor/jquery/jquery.js')?>"></script>
		<script src="<?php echo base_url('assets/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js')?>"></script>
		<script src="<?php echo base_url('assets/backend/vendor/bootstrap/js/bootstrap.js')?>"></script>  
		<script src="<?php echo base_url('assets/backend/vendor/jquery-placeholder/jquery.placeholder.js')?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('assets/backend/javascripts/theme.js')?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('assets/backend/javascripts/theme.custom.js')?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('assets/backend/javascripts/theme.init.js')?>"></script>

	</body>
</html>





