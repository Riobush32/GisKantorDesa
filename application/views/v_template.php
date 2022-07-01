<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('argon') ?>/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?= base_url('argon') ?>/assets/img/favicon.png">
	<title>
		Argon Dashboard 2 by Creative Tim
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url('argon') ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= base_url('argon') ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('argon') ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url('argon') ?>/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

	<!-- leaflet  -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
		integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
		crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
		integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
		crossorigin=""></script>

        <style>
            html, body {
                height: 100%;
                margin: 0;
            }
            .leaflet-container {
                height: 400px;
                width: 600px;
                max-width: 100%;
                max-height: 100%;
            }
	    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
	<div class="min-height-300 bg-primary position-absolute w-100"></div>
	<aside
		class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
		id="sidenav-main">
		<div class="sidenav-header">
			<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
				aria-hidden="true" id="iconSidenav"></i>
			<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
				target="_blank">
				<!-- <img src="<?= base_url('argon') ?>/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo"> -->

				<svg fill="#1cad62" role="img" width="25px" height="25px" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
					<title>Google Maps</title>
					<path
						d="M19.527 4.799c1.212 2.608.937 5.678-.405 8.173-1.101 2.047-2.744 3.74-4.098 5.614-.619.858-1.244 1.75-1.669 2.727-.141.325-.263.658-.383.992-.121.333-.224.673-.34 1.008-.109.314-.236.684-.627.687h-.007c-.466-.001-.579-.53-.695-.887-.284-.874-.581-1.713-1.019-2.525-.51-.944-1.145-1.817-1.79-2.671L19.527 4.799zM8.545 7.705l-3.959 4.707c.724 1.54 1.821 2.863 2.871 4.18.247.31.494.622.737.936l4.984-5.925-.029.01c-1.741.601-3.691-.291-4.392-1.987a3.377 3.377 0 0 1-.209-.716c-.063-.437-.077-.761-.004-1.198l.001-.007zM5.492 3.149l-.003.004c-1.947 2.466-2.281 5.88-1.117 8.77l4.785-5.689-.058-.05-3.607-3.035zM14.661.436l-3.838 4.563a.295.295 0 0 1 .027-.01c1.6-.551 3.403.15 4.22 1.626.176.319.323.683.377 1.045.068.446.085.773.012 1.22l-.003.016 3.836-4.561A8.382 8.382 0 0 0 14.67.439l-.009-.003zM9.466 5.868L14.162.285l-.047-.012A8.31 8.31 0 0 0 11.986 0a8.439 8.439 0 0 0-6.169 2.766l-.016.018 3.665 3.084z" />
				</svg>

				<span class="ms-1 font-weight-bold">Gis Kantor Desa</span>
			</a>
		</div>
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('gis/index')?>">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Home</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?= base_url('gis/viewMaps')?>">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">View Maps</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-credit-card text-success text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">View Base Maps</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-app text-info text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Marker</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Circle</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Polyline</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Polygon</span>
					</a>
				</li>
				<li class="nav-item mt-3">
					<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('argon') ?>/pages/profile.html">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Profile</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('argon') ?>/pages/sign-in.html">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Sign In</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('argon') ?>/pages/sign-up.html">
						<div
							class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-collection text-info text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Sign Up</span>
					</a>
				</li>

			</ul>
		</div>
		<div class="sidenav-footer mx-3 ">
			<div class="card card-plain shadow-none" id="sidenavCard">
				<img class="w-50 mx-auto" src="<?= base_url('argon') ?>/assets/img/illustrations/icon-documentation.svg"
					alt="sidebar_illustration">
				<div class="card-body text-center p-3 w-100 pt-0">
					<div class="docs-info">
						<h6 class="mb-0">Need help?</h6>
						<p class="text-xs font-weight-bold mb-0">Please check our docs</p>
					</div>
				</div>
			</div>
			<a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank"
				class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
			<a class="btn btn-primary btn-sm mb-0 w-100"
				href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to
				pro</a>
		</div>
	</aside>
	<main class="main-content position-relative border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
			data-scroll="false">
			<div class="container-fluid py-1 px-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
						<li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
								href="javascript:;"><?= $dir ?></a></li>
						<li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $judul ?></li>
					</ol>
					<h6 class="font-weight-bolder text-white mb-0"><?= $judul ?></h6>
				</nav>
				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
					<div class="ms-md-auto pe-md-3 d-flex align-items-center">
						<div class="input-group">
							<span class="input-group-text text-body"><i class="fas fa-search"
									aria-hidden="true"></i></span>
							<input type="text" class="form-control" placeholder="Type here<?= base_url('argon') ?>.">
						</div>
					</div>
					<ul class="navbar-nav  justify-content-end">
						<li class="nav-item d-flex align-items-center">
							<a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
								<i class="fa fa-user me-sm-1"></i>
								<span class="d-sm-inline d-none">Sign In</span>
							</a>
						</li>
						<li class="nav-item d-xl-none ps-3 d-flex align-items-center">
							<a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
								<div class="sidenav-toggler-inner">
									<i class="sidenav-toggler-line bg-white"></i>
									<i class="sidenav-toggler-line bg-white"></i>
									<i class="sidenav-toggler-line bg-white"></i>
								</div>
							</a>
						</li>


					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->
		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-12">
					<div class="card mb-4">
						<div class="card-header pb-0">
							<h6><?= $judul ?></h6>
						</div>
						<hr>
						<div class="card-body px-4 pt-4 pb-4">
							<!-- content -->
							<?php
                                if($page){
                                    $this->load->view($page);
                                }
                            ?>
							<!-- content end-->

						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>



	<!--   Core JS Files   -->
	<script src="<?= base_url('argon') ?>/assets/js/core/popper.min.js"></script>
	<script src="<?= base_url('argon') ?>/assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url('argon') ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url('argon') ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}

	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="<?= base_url('argon') ?>/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
