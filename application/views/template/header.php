<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8"/>
	<title>SME Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
	<meta content="Coderthemes" name="author"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

	<!-- plugin css -->
	<link href="<?php echo base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
		  rel="stylesheet" type="text/css"/>

	<!-- App css -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-material.min.css" rel="stylesheet" type="text/css"
		  id="bs-default-stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/app-material.min.css" rel="stylesheet" type="text/css"
		  id="app-default-stylesheet"/>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css"
		  id="bs-dark-stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/app-material-dark.min.css" rel="stylesheet" type="text/css"
		  id="app-dark-stylesheet"/>

	<!-- icons -->
	<link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>

	<!-- third party css -->
	<link href="<?php echo base_url(); ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
		  rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
		  rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
		  rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css"
		  rel="stylesheet" type="text/css"/>
	<!-- third party css end -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- App css -->
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"
		  id="bs-default-stylesheet"/>
	<link href="<?php echo base_url(); ?>/assets/css/app.min.css" rel="stylesheet" type="text/css"
		  id="app-default-stylesheet"/>
</head>

<style>
	#sidebar-menu .menuitem-active .active {
		color: #ffc107
	}
</style>

<body class="loading">

<!-- Begin page -->
<div id="wrapper">

	<!-- Topbar Start -->
	<div class="navbar-custom"  style="background-color: #ffc107 !important;">
		<div class="container-fluid">
			<ul class="list-unstyled topnav-menu float-right mb-0">


				<li class="dropdown d-none d-lg-inline-block">
					<a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
					   href="#">
						<i class="fe-maximize noti-icon"></i>
					</a>
				</li>

				<li class="dropdown notification-list topbar-dropdown">
					<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
					   href="#" role="button" aria-haspopup="false" aria-expanded="false">

						<div class="row">
							<!--<img src="<?php // echo base_ url();                  ?>assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle"><span class="pro-user-name ml-1">-->
							<span class="m-0 fw-normal"> <?php
								//                                        echo $user_admin[0]->FULL_NAME ?>
                                    </span>
							</br>
							<!--                                    <span class="m-0 fw-normal"> --><?php
							//                                        echo $user_admin[0]->DESIGNATION ?>
							<!--                                    </span>-->
							<i class="mdi mdi-chevron-down"></i>

						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<div class="dropdown-header noti-title">
							<h6 class="text-overflow m-0">Welcome !</h6>
						</div>


						<div class="dropdown-divider"></div>

						<!-- item-->
						<a href="<?php echo base_url() ?>logout" class="dropdown-item notify-item">
							<i class="fe-log-out"></i>
							<span>Logout</span>
						</a>

					</div>
				</li>


			</ul>

			<!-- LOGO -->
			<div class="logo-box">

				<a href="/" class="logo logo-light text-center">
					<span class="logo-sm">
                                <span class="logo-lg-text-light">SME</span>
                            </span>
					<span class="logo-lg">
                                <img src="<?php echo base_url(); ?>assets/images/lgoqs.jpg" alt="" height="65">
                                    <span class="logo-lg-text-light">SME</span>
                            </span>
				</a>
			</div>

			<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
				<li>
					<button class="button-menu-mobile waves-effect waves-light">
						<i class="fe-menu"></i>
					</button>
				</li>

				<li>
					<!-- Mobile menu toggle (Horizontal Layout)-->
					<a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
						<div class="lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
					<!-- End mobile menu toggle-->
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- end Topbar -->

	<div class="left-side-menu">

		<div class="h-100" data-simplebar>

			<!--- Sidemenu -->
			<div id="sidebar-menu">
				<ul id="side-menu">

					<li class="menu-title">Navigation</li>
					<li>
						<a href="<?php echo base_url() ?>reports?business_unit=1">
							<i class="fe-download-cloud"></i>
							<span> Reports</span></a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>users">
							<i class="fe-user-plus"></i>
							<span> User Upload</span></a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>export">
							<i class="fe-file-text"></i>
							<span> Export Files</span></a>
					</li>
					<li>
						<a href="#sidebarIcons3" data-toggle="collapse">
							<i class="mdi mdi-cog"></i>
							<span> Administration </span>
							<span class="menu-arrow"></span>
						</a>
						<div class="collapse" id="sidebarIcons3">
							<ul class="nav-second-level">
								<li>
									<a href="<?php echo base_url(); ?>user/user">
										<i class="fe-user"></i>
										<span>Users</span></a>
								</li>
<!--								<li>-->
<!--									<a href="--><?php //echo base_url(); ?><!--user/user/user_group_list">-->
<!--										<i class="fe-users"></i>-->
<!--										<span>User Groups</span></a>-->
<!--								</li>-->
							</ul>
						</div>
					</li>

				</ul>

			</div>
			<!-- End Sidebar -->

			<div class="clearfix"></div>

		</div>
		<!-- Sidebar -left -->


	</div>
	<!-- Left Sidebar End -->
