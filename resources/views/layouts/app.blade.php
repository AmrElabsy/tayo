<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Zatech">
	<link rel="icon" href="{{ asset("assets/images/logo/favicon-icon.png") }}" type="image/x-icon">
	<link rel="shortcut icon" href="{{ asset("assets/images/logo/favicon-icon.png") }}" type="image/x-icon">
	<title>Tayo | Admin </title>
	<!-- Google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
		  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
		  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/font-awesome.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/icofont.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/themify.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/flag-icon.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/feather-icon.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/scrollbar.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/animate.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/date-picker.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/photoswipe.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/bootstrap.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">
	<link id="color" rel="stylesheet" href="{{ asset("assets/css/color-1.css") }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}">
	@yield('styles')
</head>
<body style="text-align: center">
<!-- Loader starts-->
<div class="loader-wrapper">
	<div class="loader">
		<div class="loader-bar"></div>
		<div class="loader-bar"></div>
		<div class="loader-bar"></div>
		<div class="loader-bar"></div>
		<div class="loader-bar"></div>
		<div class="loader-ball"></div>
	</div>
</div>
<!-- Loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
	<!-- Page Header Start-->
	<div class="page-header">
		<div class="header-wrapper row m-0">
			<div class="header-logo-wrapper col-auto p-0">
				<div class="logo-wrapper"><a href="{{ route("home") }}"><img class="img-fluid"
																	src="{{ asset("assets/images/logo/logo.png") }}" alt=""></a>
				</div>
				<div class="toggle-sidebar">
					<div class="status_toggle sidebar-toggle d-flex">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z"
										  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
										  stroke-linejoin="round"></path>
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z"
										  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
										  stroke-linejoin="round"></path>
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z"
										  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
										  stroke-linejoin="round"></path>
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z"
										  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
										  stroke-linejoin="round"></path>
								</g>
							</g>
						</svg>
					</div>
				</div>
			</div>
			<div class="left-side-header col ps-0 d-none d-md-block">
				<div class="input-group"></div>
			</div>
			<div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
				<ul class="nav-menus">
					<li>
						<div class="mode animated backOutRight">
							<svg class="lighticon" width="24" height="24" viewBox="0 0 24 24" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd"
											  d="M18.1377 13.7902C19.2217 14.8742 16.3477 21.0542 10.6517 21.0542C6.39771 21.0542 2.94971 17.6062 2.94971 13.3532C2.94971 8.05317 8.17871 4.66317 9.67771 6.16217C10.5407 7.02517 9.56871 11.0862 11.1167 12.6352C12.6647 14.1842 17.0537 12.7062 18.1377 13.7902Z"
											  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
											  stroke-linejoin="round"></path>
									</g>
								</g>
							</svg>
							<svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"></path>
								<path d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117"
									  stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</div>
					</li>
					<li class="maximize"><a class="text-dark" href="#!" onclick="toggleFullScreen()">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<g>
									<g>
										<path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995"
											  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
											  stroke-linejoin="round"></path>
										<path d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804"
											  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
											  stroke-linejoin="round"></path>
										<path d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99"
											  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
											  stroke-linejoin="round"></path>
										<path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995"
											  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
											  stroke-linejoin="round"></path>
									</g>
								</g>
							</svg>
						</a></li>
					<li class="profile-nav pe-0 py-0 me-0">
						<div class="media profile-media">
							@if( \Illuminate\Support\Facades\Auth::check() )
								<form method="post" action="{{ route("logout") }}">
									@csrf
									<button class="btn btn-default" type="submit"><i data-feather="log-out"> </i><span>Log out</span></button>
								</form>
							@else
								<a href="{{ route("login") }}" class="btn btn-default"><i data-feather="log-in"></i> Log in</a>
							@endif
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Page Header Ends-->
	<!-- Page Body Start-->
	<div class="page-body-wrapper">
		<!-- Page Sidebar Start-->
		<div class="sidebar-wrapper">
			<div>
				<div class="logo-wrapper"><a href="{{ route("home") }}"><img class="img-fluid for-light"
																	src="{{ asset("assets/images/logo/small-logo.png")}}"
																	alt=""><img class="img-fluid for-dark"
																				src="../assets/images/logo/small-white-logo.png"
																				alt=""></a>
					<div class="back-btn"><i class="fa fa-angle-left"></i></div>
				</div>
				<div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
																		 src="../assets/images/logo-icon.png"
																		 alt=""></a></div>
				<nav class="sidebar-main">
					<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
					<div id="sidebar-menu">
						<ul class="sidebar-links" id="simple-bar">
							<li class="back-btn"><a href="index.html"><img class="img-fluid"
																		   src="../assets/images/logo-icon.png" alt=""></a>
								<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
																					  aria-hidden="true"></i></div>
							</li>
							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="{{ route("home") }}">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<g>
											<g>
												<path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5"
													  stroke-linecap="round" stroke-linejoin="round"></path>
												<path fill-rule="evenodd" clip-rule="evenodd"
													  d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
											</g>
										</g>
									</svg>
									<span>Timeline</span></a>
							</li>
							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="{{ route("product.index") }}">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<g>
											<g>
												<path d="M15.7499 9.47167V6.43967C15.7549 4.35167 14.0659 2.65467 11.9779 2.64967C9.88887 2.64567 8.19287 4.33467 8.18787 6.42267V9.47167"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path fill-rule="evenodd" clip-rule="evenodd"
													  d="M2.94995 14.2074C2.94995 8.91344 5.20495 7.14844 11.969 7.14844C18.733 7.14844 20.988 8.91344 20.988 14.2074C20.988 19.5004 18.733 21.2654 11.969 21.2654C5.20495 21.2654 2.94995 19.5004 2.94995 14.2074Z"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
											</g>
										</g>
									</svg>
									<span>Market</span></a>
							</li>
							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="{{ route("home.users") }}">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<g>
											<g>
												<path fill-rule="evenodd" clip-rule="evenodd"
													  d="M11.9724 20.3683C8.73343 20.3683 5.96643 19.8783 5.96643 17.9163C5.96643 15.9543 8.71543 14.2463 11.9724 14.2463C15.2114 14.2463 17.9784 15.9383 17.9784 17.8993C17.9784 19.8603 15.2294 20.3683 11.9724 20.3683Z"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path fill-rule="evenodd" clip-rule="evenodd"
													  d="M11.9725 11.4488C14.0985 11.4488 15.8225 9.72576 15.8225 7.59976C15.8225 5.47376 14.0985 3.74976 11.9725 3.74976C9.84645 3.74976 8.12245 5.47376 8.12245 7.59976C8.11645 9.71776 9.82645 11.4418 11.9455 11.4488H11.9725Z"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M18.3622 10.3915C19.5992 10.0605 20.5112 8.93254 20.5112 7.58954C20.5112 6.18854 19.5182 5.01854 18.1962 4.74854"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M18.9431 13.5444C20.6971 13.5444 22.1951 14.7334 22.1951 15.7954C22.1951 16.4204 21.6781 17.1014 20.8941 17.2854"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M5.58372 10.3915C4.34572 10.0605 3.43372 8.93254 3.43372 7.58954C3.43372 6.18854 4.42772 5.01854 5.74872 4.74854"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M5.00176 13.5444C3.24776 13.5444 1.74976 14.7334 1.74976 15.7954C1.74976 16.4204 2.26676 17.1014 3.05176 17.2854"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
											</g>
										</g>
									</svg>
									<span>Users</span></a>
							</li>
							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="{{ route("score.index") }}">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<g>
											<g>
												<path d="M13.3352 19.5078H19.7122" stroke="#130F26" stroke-width="1.5"
													  stroke-linecap="round" stroke-linejoin="round"></path>
												<path fill-rule="evenodd" clip-rule="evenodd"
													  d="M16.0578 4.85901V4.85901C14.7138 3.85101 12.8078 4.12301 11.7998 5.46601C11.7998 5.46601 6.78679 12.144 5.04779 14.461C3.30879 16.779 4.95379 19.651 4.95379 19.651C4.95379 19.651 8.19779 20.397 9.91179 18.112C11.6268 15.828 16.6638 9.11701 16.6638 9.11701C17.6718 7.77401 17.4008 5.86701 16.0578 4.85901Z"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M10.5042 7.21143L15.3682 10.8624" stroke="#130F26"
													  stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
											</g>
										</g>
									</svg>
									<span>Score</span></a>
							</li>
							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="compitition-classes.html">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<g>
											<g>
												<path fill-rule="evenodd" clip-rule="evenodd"
													  d="M2.75024 12C2.75024 5.063 5.06324 2.75 12.0002 2.75C18.9372 2.75 21.2502 5.063 21.2502 12C21.2502 18.937 18.9372 21.25 12.0002 21.25C5.06324 21.25 2.75024 18.937 2.75024 12Z"
													  stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M9.42993 14.5697L14.5699 9.42969" stroke="#130F26"
													  stroke-width="1.5" stroke-linecap="round"
													  stroke-linejoin="round"></path>
												<path d="M14.4955 14.5H14.5045" stroke="#130F26" stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M9.4955 9.5H9.5045" stroke="#130F26" stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</g>
									</svg>
									<span>Competitions</span></a>
							</li>
						</ul>
						<div class="sidebar-img-section">
							<div class="sidebar-img-content"><img class="img-fluid" src="../assets/images/side-bar.png"
																  alt="">
								<h4>Need Help ?</h4><a class="txt" href="mailto:contact@zatech.tech">Contact Developer
									at "contact@zatech.tech"</a><a class="btn btn-secondary"
																   href="mailto:contact@zatech.tech">Contact Now</a>
							</div>
						</div>
					</div>
					<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
				</nav>
			</div>
		</div>
		<!-- Page Sidebar Ends-->
		<div class="page-body">
			<div class="container-fluid">
				@yield("content")
			</div>
			<!-- Container-fluid Ends-->
		</div>
		<!-- footer start-->
		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 footer-copyright text-center">
						<p class="mb-0">Copyright 2022 © Tayo theme by ZATECH </p>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
<!-- latest jquery-->
<script src="{{ asset("assets/js/jquery-3.5.1.min.js")}}"></script>
<!-- Bootstrap js-->
<script src="{{ asset("assets/js/bootstrap/bootstrap.bundle.min.js")}}"></script>
<!-- feather icon js-->
<script src="{{ asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
<script src="{{ asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>
<!-- scrollbar js-->
<script src="{{ asset("assets/js/scrollbar/simplebar.js")}}"></script>
<script src="{{ asset("assets/js/scrollbar/custom.js")}}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset("assets/js/config.js")}}"></script>
<!-- Plugins JS start-->
<script src="{{ asset("assets/js/sidebar-menu.js")}}"></script>
<script src="{{ asset("assets/js/chart/knob/knob.min.js")}}"></script>
<script src="{{ asset("assets/js/chart/knob/knob-chart.js")}}"></script>
<script src="{{ asset("assets/js/chart/apex-chart/apex-chart.js")}}"></script>
<script src="{{ asset("assets/js/chart/apex-chart/stock-prices.js")}}"></script>
<script src="{{ asset("assets/js/notify/bootstrap-notify.min.js")}}"></script>
<script src="{{ asset("assets/js/dashboard/default.js")}}"></script>
<script src="{{ asset("assets/js/notify/index.js")}}"></script>
<script src="{{ asset("assets/js/datepicker/date-picker/datepicker.js")}}"></script>
<script src="{{ asset("assets/js/datepicker/date-picker/datepicker.en.js")}}"></script>
<script src="{{ asset("assets/js/datepicker/date-picker/datepicker.custom.js")}}"></script>
<script src="{{ asset("assets/js/photoswipe/photoswipe.min.js")}}"></script>
<script src="{{ asset("assets/js/photoswipe/photoswipe-ui-default.min.js")}}"></script>
<script src="{{ asset("assets/js/photoswipe/photoswipe.js")}}"></script>
<script src="{{ asset("assets/js/typeahead/handlebars.js")}}"></script>
<script src="{{ asset("assets/js/typeahead/typeahead.bundle.js")}}"></script>
<script src="{{ asset("assets/js/typeahead/typeahead.custom.js")}}"></script>
<script src="{{ asset("assets/js/typeahead-search/handlebars.js")}}"></script>
<script src="{{ asset("assets/js/typeahead-search/typeahead-custom.js")}}"></script>
<script src="{{ asset("assets/js/height-equal.js")}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
@yield("scripts")
<script src="{{ asset("assets/js/script.js")}}"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>