<!DOCTYPE html>
<html lang="en" class="fixed"> 
 
<head>
<!-- Basic -->
<meta charset="utf-8"/>

<title>PT. CAD SOLUSINDO</title>  
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Web Fonts  -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/bootstrap/css/bootstrap.css')?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/font-awesome/css/font-awesome.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/magnific-popup/magnific-popup.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/bootstrap-datepicker/css/datepicker3.css')?>" /> 

<link rel="stylesheet" href="<?php echo base_url('assets/backend/chosen.css')?>">
<script src="<?php echo base_url('assets/backend/jquery.js')?>"></script>
<script src="<?php echo base_url('assets/backend/vendor/jquery/jquery.min.js')?>"></script>/>
<script src="<?php echo base_url('assets/backend/chosen.jquery.js');?>"></script>
 
<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/select2/select2.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/bootstrap-multiselect/bootstrap-multiselect.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/dropzone/css/basic.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/dropzone/css/dropzone.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/summernote/summernote.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/summernote/summernote-bs3.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/codemirror/lib/codemirror.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/codemirror/theme/monokai.css')?>" />
   
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/jquery-datatables-bs3/assets/css/datatables.css')?>" /> 
<link rel="stylesheet" href="<?php echo base_url('assets/backend/vendor/pnotify/pnotify.custom.css')?>" /> 

<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/stylesheets/theme.css')?>" />

<!-- Skin CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/stylesheets/skins/default.css')?>" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/stylesheets/theme-custom.css')?>">
 
<!-- Head Libs -->
<script src="<?php echo base_url('assets/backend/vendor/modernizr/modernizr.js')?>"></script> 
   
<script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

</script>   
   
</head>

<body  class="loading-overlay-showing" data-loading-overlay>
		<div class="loading-overlay dark">
			<div class="loader white"></div>
		</div>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="<?php base_url(); ?>dashboard" class="logo">
						<img src="<?php echo base_url('assets/backend/images/logo.png')?>" height="35" alt="Logo" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
				
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<div class="profile-info">
								<span class="name"><?php echo $this->session->userdata('NAME'); ?></span>
								<span class="role"><?php echo $this->session->userdata('LEVEL'); ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
								</li> 
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo site_url('admin/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
					
                    <!--========================= Header + Navbar ==============================--> 
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
										<a href="<?php echo site_url('dashboard')?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li class="nav-<?php if(isset($active_lowongan)){echo $active_lowongan ;}?>">
										<a href="<?php echo site_url('lowongan')?>">
											<i class="fa fa-briefcase" aria-hidden="true"></i>
											<span>Lowongan</span>
										</a>
									</li>
									<li class="nav-<?php if(isset($active_pelamar)){echo $active_pelamar ;}?>">
										<a href="<?php echo site_url('pelamar')?>">
											<i class="fa fa-group" aria-hidden="true"></i>
											<span>Pelamar</span>
										</a>
									</li>
									<li class="nav-<?php if(isset($active_pengaturan)){echo $active_pengaturan ;}?>">
										<a href="<?php echo site_url('pengaturan')?>">
											<i class="fa fa-gear" aria-hidden="true"></i>
											<span>Pengaturan</span>
										</a>
									</li>
									<li class="nav-<?php if(isset($active_laporan)){echo $active_laporan ;}?>">
										<a href="<?php echo site_url('laporan')?>">
											<i class="fa fa-file" aria-hidden="true"></i>
											<span>Laporan</span>
										</a>
									</li>
                                    
								</ul>
							</nav>
						</div>
					</div>
                	
                    
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">  
					</header>

				

