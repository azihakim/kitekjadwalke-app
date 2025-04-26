<html lang="en" itemscope="" itemtype="http://schema.org/WebPage">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vendor/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="https://palembang.go.id/assets/img/logo.png">
	<title>
		Kite Jadwalke
	</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900">
	<!-- Nucleo Icons -->
	<link href="{{ asset('vendor/assets/css/nucleo-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/assets/css/nucleo-svg.css') }}" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Material Icons -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0">
	<!-- CSS Files -->
	<link id="pagestyle" href="{{ asset('vendor/assets/css/material-kit.css?v=3.1.0') }}" rel="stylesheet">
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/60/10/common.js">
	</script>
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/60/10/util.js">
	</script>
	<!-- DataTables CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
	@yield('css')
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=person" />
</head>

<body class="index-page bg-gray-200">

	<!-- Navbar -->
	<div class="container position-sticky z-index-sticky top-0">
		<div class="row">
			<div class="col-12">
				<nav
					class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 p-2 start-0 end-0 mx-4">
					<div class="container-fluid px-0">
						<a class="navbar-brand font-weight-bolder ms-sm-3 text-sm" href="#" rel="tooltip"
							title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
							<img src="https://palembang.go.id/assets/img/logo.png" style="max-width: 30px"> &nbsp; Kite Jadwalke
						</a>
						<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
							data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon mt-2">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</span>
						</button>
						<div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
							<ul class="navbar-nav navbar-nav-hover ms-auto">

								<li class="nav-item dropdown dropdown-hover mx-2">
									<a class="nav-link ps-2 d-flex cursor-pointer align-items-center font-weight-semibold" id="dropdownMenuDocs"
										data-bs-toggle="dropdown" aria-expanded="false">
										Docs &nbsp;
										<span class="material-symbols-outlined">
											person
										</span>
									</a>
									<ul
										class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg"
										aria-labelledby="dropdownMenuDocs">
										<div class="d-none d-lg-block">
											<ul class="list-group">
												<li class="nav-item list-group-item border-0 p-0">
													<a class="dropdown-item py-2 ps-3 border-radius-md"
														href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
														<h6
															class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
															Log Out</h6>
													</a>
												</li>
											</ul>
										</div>

										<div class="row d-lg-none">
											<div class="col-md-12 g-0">
												<a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
													<h6
														class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Getting Started</h6>
													<span class="text-sm">All about overview, quick start, license and contents</span>
												</a>

												<a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
													<h6
														class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Foundation</h6>
													<span class="text-sm">See our colors, icons and typography</span>
												</a>

												<a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
													<h6
														class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Components</h6>
													<span class="text-sm">Explore our collection of fully designed components</span>
												</a>

												<a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
													<h6
														class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Plugins</h6>
													<span class="text-sm">Check how you can integrate our plugins</span>
												</a>

												<a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
													<h6
														class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Utility Classes</h6>
													<span class="text-sm">For those who want flexibility, use our utility classes</span>
												</a>
											</div>
										</div>

									</ul>
								</li>
								<li class="nav-item my-auto ms-3 ms-lg-0">

									<a href="https://www.creative-tim.com/product/material-kit-pro"
										class="btn  bg-gradient-dark  mb-0 mt-2 mt-md-0">Login</a>

								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- End Navbar -->
			</div>
		</div>
	</div>
	<header class="header-2">
		<div class="page-header min-vh-75 relative">
			{{-- <div class="page-header min-vh-75 relative"
			style="background-image: url('https://palembang.go.id/uploads/Sungai_Musi_sandiyanto_dd61741ef9.jpeg')"> --}}
			<span class="mask bg-gradient-dark opacity-4"></span>
			<div class="container">
				<div class="row">
					<div class="col-lg-7 text-center mx-auto">
						<h1 class="text-white font-weight-black pt-3 mt-n5">Material Kit 3</h1>
						<p class="lead text-white mt-3">Free &amp; Open Source Web UI Kit built over Bootstrap 5. <br> Join over 1.6
							million developers around the world. </p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
		<!-- -------- START Content Presentation Docs ------- -->

		<div class="row">
			<div class="col-lg-12 mx-auto">
				@yield('content')
			</div>
		</div>

		<!-- -------- END Content Presentation Docs ------- -->
	</div>
	<footer class="footer pt-5 mt-5">
		<div class="container">
			<div class=" row">
				<div class="col-md-3 mb-4 ms-auto">
					<div>
						<a href="https://www.creative-tim.com/product/material-kit">
							<img src="vendor/assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
						</a>
						<h6 class="font-weight-bolder mb-4">Material Kit 3</h6>
					</div>
					<div>
						<ul class="d-flex flex-row ms-n3 nav">
							<li class="nav-item">
								<a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
									<i class="fab fa-facebook text-lg opacity-8"></i>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
									<i class="fab fa-twitter text-lg opacity-8"></i>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
									<i class="fab fa-dribbble text-lg opacity-8"></i>
								</a>
							</li>


							<li class="nav-item">
								<a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
									<i class="fab fa-github text-lg opacity-8"></i>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
									<i class="fab fa-youtube text-lg opacity-8"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-6 mb-4">
					<div>
						<h6 class="text-sm">Company</h6>
						<ul class="flex-column ms-n3 nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
									About Us
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
									Freebies
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
									Premium Tools
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
									Blog
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-sm-6 col-6 mb-4">
					<div>
						<h6 class="text-sm">Resources</h6>
						<ul class="flex-column ms-n3 nav">
							<li class="nav-item">
								<a class="nav-link" href="https://iradesign.io/" target="_blank">
									Illustrations
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
									Bits &amp; Snippets
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
									Affiliate Program
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-sm-6 col-6 mb-4">
					<div>
						<h6 class="text-sm">Help &amp; Support</h6>
						<ul class="flex-column ms-n3 nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
									Contact Us
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
									Knowledge Center
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
									Custom Development
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
									Sponsorships
								</a>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
					<div>
						<h6 class="text-sm">Legal</h6>
						<ul class="flex-column ms-n3 nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
									Terms &amp; Conditions
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
									Privacy Policy
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
									Licenses (EULA)
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-12">
					<div class="text-center">
						<p class="text-dark my-4 text-sm font-weight-normal">
							All rights reserved. Copyright ©
							<script>
								document.write(new Date().getFullYear())
							</script>2025 Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative
								Tim</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--   Core JS Files   -->
	<script src="{{ asset('vendor/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vendor/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vendor/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
	<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
	<script src="{{ asset('vendor/assets/js/plugins/countup.min.js') }}"></script>
	<script src="{{ asset('vendor/assets/js/plugins/choices.min.js') }}"></script>
	<script src="{{ asset('vendor/assets/js/plugins/prism.min.js') }}"></script>
	<script src="{{ asset('vendor/assets/js/plugins/highlight.min.js') }}"></script>
	<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
	<script src="{{ asset('vendor/assets/js/plugins/rellax.min.js') }}"></script>
	<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
	<script src="{{ asset('vendor/assets/js/plugins/tilt.min.js') }}"></script>
	<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
	<script src="{{ asset('vendor/assets/js/plugins/choices.min.js') }}"></script>
	<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
	<script src="{{ asset('vendor/assets/js/material-kit.min.js?v=3.1.0') }}" type="text/javascript"></script>
	<script type="text/javascript">
		if (document.getElementById('state1')) {
			const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
			if (!countUp.error) {
				countUp.start();
			} else {
				console.error(countUp.error);
			}
		}
		if (document.getElementById('state2')) {
			const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
			if (!countUp1.error) {
				countUp1.start();
			} else {
				console.error(countUp1.error);
			}
		}
		if (document.getElementById('state3')) {
			const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
			if (!countUp2.error) {
				countUp2.start();
			} else {
				console.error(countUp2.error);
			};
		}
	</script>

	<!-- DataTables JS -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
	@yield('scripts')
</body>

</html>
