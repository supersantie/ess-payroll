<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Themesbrand</title>

    <!-- Global stylesheets -->
    <link href="{{URL::asset('assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{URL::asset('assets/demo/demo_configurator.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    @include('layouts.navbar')

    <!-- Page content -->
    <div class="page-content">

        @include('layouts.sidebar-detached')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @component('components.breadcrumb')
                @slot('title') Horizontal Nav @endslot
                @slot('subtitle') Styles @endslot
                @endcomponent

                <!-- Content area -->
				<div class="content">

					<!-- Rounded links -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Rounded links</h5>
						</div>

						<div class="card-body">
							<p class="mb-3">By default, all navigation links have padding and background color, but don't have rounded corners. This can be controlled with our border radius utility classes, just add <code>.rounded</code> or <code>.rounded-[1|2|3|4|5]</code> classes to the base <code>.navbar-nav-link</code> element. Make sure you also have vertical spacing in navbar container. All links with icons only are displayed as squares with equal width and height.</p>

							<p class="fw-semibold">Light navbar:</p>
							<div class="navbar navbar-expand-xl border rounded mb-3">
								<div class="container-fluid">
									<div class="navbar-brand">
										<a href="index.html" class="d-inline-flex align-items-center">
											<img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
											<h4 class="d-none d-sm-inline-block text-body lh-1 mb-0 ms-3">Limitless</h4>
										</a>
									</div>

									<div class="d-xl-none ms-2">
										<button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo-light-rounded">
											<i class="ph-squares-four"></i>
										</button>
									</div>

									<div class="navbar-collapse order-2 order-xl-1 collapse" id="navbar-demo-light-rounded">
										<ul class="navbar-nav mt-2 mt-xl-0">
											<li class="nav-item">
												<a href="#" class="navbar-nav-link rounded">
													<i class="ph-circles-three me-2"></i>
													Link
												</a>
											</li>

											<li class="nav-item dropdown ms-xl-1">
												<a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
													<i class="ph-squares-four me-2"></i>
													Menu
												</a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">
														<i class="ph-youtube-logo me-2"></i>
														Youtube
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-slack-logo me-2"></i>
														Slack
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-reddit-logo me-2"></i>
														Reddit
													</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">
														<i class="ph-gitlab-logo me-2"></i>
														Gitlab
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-stack-overflow-logo me-2"></i>
														Stack Overflow
													</a>
												</div>
											</li>
										</ul>
									</div>

									<ul class="navbar-nav flex-row order-1 order-xl-2 ms-auto">
										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded" data-bs-toggle="dropdown">
												<i class="ph-gear"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-figma-logo me-2"></i>
													Figma
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-dribbble-logo me-2"></i>
													Dribbble
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-tiktok-logo me-2"></i>
													Tiktok
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-telegram-logo me-2"></i>
													Telegram
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-messenger-logo me-2"></i>
													Messenger
												</a>
											</div>
										</li>

										<li class="nav-item ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
												<i class="ph-bell"></i>
												<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top rounded-pill mt-1 me-1">2</span>
											</a>
										</li>

										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
												<div class="status-indicator-container">
													<img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-1" alt="">
													<span class="status-indicator bg-success"></span>
												</div>
												<span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-user-circle me-2"></i>
													My profile
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-currency-circle-dollar me-2"></i>
													My subscription
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-shopping-cart me-2"></i>
													My orders
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope-open me-2"></i>
													My inbox
													<span class="badge bg-primary rounded-pill ms-auto">26</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-gear me-2"></i>
													Account settings
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-sign-out me-2"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<p class="fw-semibold">Dark navbar:</p>
							<div class="navbar navbar-expand-xl navbar-dark rounded">
								<div class="container-fluid">
									<div class="navbar-brand">
										<a href="index.html" class="d-inline-flex align-items-center">
											<img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
											<h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
										</a>
									</div>

									<div class="d-xl-none ms-2">
										<button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo-dark-rounded">
											<i class="ph-squares-four"></i>
										</button>
									</div>

									<div class="navbar-collapse order-2 order-xl-1 collapse" id="navbar-demo-dark-rounded">
										<ul class="navbar-nav mt-2 mt-xl-0">
											<li class="nav-item">
												<a href="#" class="navbar-nav-link rounded">
													<i class="ph-circles-three me-2"></i>
													Link
												</a>
											</li>

											<li class="nav-item dropdown ms-xl-1">
												<a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
													<i class="ph-squares-four me-2"></i>
													Menu
												</a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">
														<i class="ph-youtube-logo me-2"></i>
														Youtube
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-slack-logo me-2"></i>
														Slack
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-reddit-logo me-2"></i>
														Reddit
													</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">
														<i class="ph-gitlab-logo me-2"></i>
														Gitlab
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-stack-overflow-logo me-2"></i>
														Stack Overflow
													</a>
												</div>
											</li>
										</ul>
									</div>

									<ul class="navbar-nav flex-row order-1 order-xl-2 ms-auto">
										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded" data-bs-toggle="dropdown">
												<i class="ph-gear"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-figma-logo me-2"></i>
													Figma
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-dribbble-logo me-2"></i>
													Dribbble
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-tiktok-logo me-2"></i>
													Tiktok
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-telegram-logo me-2"></i>
													Telegram
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-messenger-logo me-2"></i>
													Messenger
												</a>
											</div>
										</li>

										<li class="nav-item ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
												<i class="ph-bell"></i>
												<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top rounded-pill mt-1 me-1">2</span>
											</a>
										</li>

										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
												<div class="status-indicator-container">
													<img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-1" alt="">
													<span class="status-indicator bg-success"></span>
												</div>
												<span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-user-circle me-2"></i>
													My profile
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-currency-circle-dollar me-2"></i>
													My subscription
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-shopping-cart me-2"></i>
													My orders
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope-open me-2"></i>
													My inbox
													<span class="badge bg-primary rounded-pill ms-auto">26</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-gear me-2"></i>
													Account settings
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-sign-out me-2"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /rounded links -->


					<!-- Circle links -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Fully rounded pills</h5>
						</div>

						<div class="card-body">
							<p class="mb-3">To make navigation links fully rounded, add <code>.rounded-pill</code> to each <code>.navbar-nav-link</code> element. Links with text are displayed as pills in this case and links with icons only are equally proportional (height = width). This logic also works in all navbar sizes. Edit <code>$navbar-link-padding-[x|y]</code> or <code>--navbar-link-padding-[x|y]</code> variables to change the default links size. Inner navbar spacing is controlled via padding utility classes.</p>

							<p class="fw-semibold">Light navbar:</p>
							<div class="navbar navbar-expand-xl border rounded mb-3">
								<div class="container-fluid">
									<div class="navbar-brand">
										<a href="index.html" class="d-inline-flex align-items-center">
											<img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
											<h4 class="d-none d-sm-inline-block text-body lh-1 mb-0 ms-3">Limitless</h4>
										</a>
									</div>

									<div class="d-xl-none ms-2">
										<button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo-light-circle">
											<i class="ph-squares-four"></i>
										</button>
									</div>

									<div class="navbar-collapse order-2 order-xl-1 collapse" id="navbar-demo-light-circle">
										<ul class="navbar-nav mt-2 mt-xl-0">
											<li class="nav-item">
												<a href="#" class="navbar-nav-link rounded-pill">
													<i class="ph-circles-three me-2"></i>
													Link
												</a>
											</li>

											<li class="nav-item dropdown ms-xl-1">
												<a href="#" class="navbar-nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
													<i class="ph-squares-four me-2"></i>
													Menu
												</a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">
														<i class="ph-youtube-logo me-2"></i>
														Youtube
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-slack-logo me-2"></i>
														Slack
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-reddit-logo me-2"></i>
														Reddit
													</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">
														<i class="ph-gitlab-logo me-2"></i>
														Gitlab
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-stack-overflow-logo me-2"></i>
														Stack Overflow
													</a>
												</div>
											</li>
										</ul>
									</div>

									<ul class="navbar-nav flex-row order-1 order-xl-2 ms-auto">
										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
												<i class="ph-gear"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-figma-logo me-2"></i>
													Figma
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-dribbble-logo me-2"></i>
													Dribbble
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-tiktok-logo me-2"></i>
													Tiktok
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-telegram-logo me-2"></i>
													Telegram
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-messenger-logo me-2"></i>
													Messenger
												</a>
											</div>
										</li>

										<li class="nav-item ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill">
												<i class="ph-bell"></i>
												<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top rounded-pill mt-1 me-1">2</span>
											</a>
										</li>

										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
												<div class="status-indicator-container">
													<img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
													<span class="status-indicator bg-success"></span>
												</div>
												<span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-user-circle me-2"></i>
													My profile
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-currency-circle-dollar me-2"></i>
													My subscription
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-shopping-cart me-2"></i>
													My orders
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope-open me-2"></i>
													My inbox
													<span class="badge bg-primary rounded-pill ms-auto">26</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-gear me-2"></i>
													Account settings
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-sign-out me-2"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<p class="fw-semibold">Dark navbar:</p>
							<div class="navbar navbar-expand-xl navbar-dark rounded">
								<div class="container-fluid">
									<div class="navbar-brand">
										<a href="index.html" class="d-inline-flex align-items-center">
											<img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
											<h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
										</a>
									</div>

									<div class="d-xl-none ms-2">
										<button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo-dark-circle">
											<i class="ph-squares-four"></i>
										</button>
									</div>

									<div class="navbar-collapse order-2 order-xl-1 collapse" id="navbar-demo-dark-circle">
										<ul class="navbar-nav mt-2 mt-xl-0">
											<li class="nav-item">
												<a href="#" class="navbar-nav-link rounded-pill">
													<i class="ph-circles-three me-2"></i>
													Link
												</a>
											</li>

											<li class="nav-item dropdown ms-xl-1">
												<a href="#" class="navbar-nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
													<i class="ph-squares-four me-2"></i>
													Menu
												</a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">
														<i class="ph-youtube-logo me-2"></i>
														Youtube
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-slack-logo me-2"></i>
														Slack
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-reddit-logo me-2"></i>
														Reddit
													</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">
														<i class="ph-gitlab-logo me-2"></i>
														Gitlab
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-stack-overflow-logo me-2"></i>
														Stack Overflow
													</a>
												</div>
											</li>
										</ul>
									</div>

									<ul class="navbar-nav flex-row order-1 order-xl-2 ms-auto">
										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
												<i class="ph-gear"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-figma-logo me-2"></i>
													Figma
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-dribbble-logo me-2"></i>
													Dribbble
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-tiktok-logo me-2"></i>
													Tiktok
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-telegram-logo me-2"></i>
													Telegram
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-messenger-logo me-2"></i>
													Messenger
												</a>
											</div>
										</li>

										<li class="nav-item ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill">
												<i class="ph-bell"></i>
												<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top rounded-pill mt-1 me-1">2</span>
											</a>
										</li>

										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
												<div class="status-indicator-container">
													<img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
													<span class="status-indicator bg-success"></span>
												</div>
												<span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-user-circle me-2"></i>
													My profile
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-currency-circle-dollar me-2"></i>
													My subscription
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-shopping-cart me-2"></i>
													My orders
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope-open me-2"></i>
													My inbox
													<span class="badge bg-primary rounded-pill ms-auto">26</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-gear me-2"></i>
													Account settings
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-sign-out me-2"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /circle links -->


					<!-- Transparent links -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Transparent links</h5>
						</div>

						<div class="card-body">
							<p class="mb-3">Background color in navigation links can be disabled by adding <code>.bg-transparent</code> utility class. If you have links inside <code>.navbar-collapse</code> container that stack on mobile, you can control left and right padding on desktop and mobile separately with our responsive utility classes. In the examples below we use <code>.px-0.px-[breakpoint]-2</code>. If outside collapsible container, no padding adjustments are necessary.</p>

							<p class="fw-semibold">Light navbar:</p>
							<div class="navbar navbar-expand-xl border rounded mb-3">
								<div class="container-fluid">
									<div class="navbar-brand">
										<a href="index.html" class="d-inline-flex align-items-center">
											<img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
											<h4 class="d-none d-sm-inline-block text-body lh-1 mb-0 ms-3">Limitless</h4>
										</a>
									</div>

									<div class="d-xl-none ms-2">
										<button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo-light">
											<i class="ph-squares-four"></i>
										</button>
									</div>

									<div class="navbar-collapse order-2 order-xl-1 collapse" id="navbar-demo-light">
										<ul class="navbar-nav mt-2 mt-xl-0">
											<li class="nav-item">
												<a href="#" class="navbar-nav-link text-body bg-transparent px-0 px-xl-2">
													<i class="ph-circles-three me-2"></i>
													Link
												</a>
											</li>

											<li class="nav-item dropdown ms-xl-1">
												<a href="#" class="navbar-nav-link text-body bg-transparent dropdown-toggle px-0 px-xl-2" data-bs-toggle="dropdown">
													<i class="ph-squares-four me-2"></i>
													Menu
												</a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">
														<i class="ph-youtube-logo me-2"></i>
														Youtube
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-slack-logo me-2"></i>
														Slack
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-reddit-logo me-2"></i>
														Reddit
													</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">
														<i class="ph-gitlab-logo me-2"></i>
														Gitlab
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-stack-overflow-logo me-2"></i>
														Stack Overflow
													</a>
												</div>
											</li>
										</ul>
									</div>

									<ul class="navbar-nav flex-row order-1 order-xl-2 ms-auto">
										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link text-body navbar-nav-link-icon bg-transparent" data-bs-toggle="dropdown">
												<i class="ph-gear"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-figma-logo me-2"></i>
													Figma
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-dribbble-logo me-2"></i>
													Dribbble
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-tiktok-logo me-2"></i>
													Tiktok
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-telegram-logo me-2"></i>
													Telegram
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-messenger-logo me-2"></i>
													Messenger
												</a>
											</div>
										</li>

										<li class="nav-item ms-1">
											<a href="#" class="navbar-nav-link text-body navbar-nav-link-icon bg-transparent">
												<i class="ph-bell"></i>
												<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top rounded-pill mt-1 me-1">2</span>
											</a>
										</li>

										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link text-body align-items-center bg-transparent p-1" data-bs-toggle="dropdown">
												<div class="status-indicator-container">
													<img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
													<span class="status-indicator bg-success"></span>
												</div>
												<span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-user-circle me-2"></i>
													My profile
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-currency-circle-dollar me-2"></i>
													My subscription
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-shopping-cart me-2"></i>
													My orders
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope-open me-2"></i>
													My inbox
													<span class="badge bg-primary rounded-pill ms-auto">26</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-gear me-2"></i>
													Account settings
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-sign-out me-2"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<p class="fw-semibold">Dark navbar:</p>
							<div class="navbar navbar-expand-xl navbar-dark rounded">
								<div class="container-fluid">
									<div class="navbar-brand">
										<a href="index.html" class="d-inline-flex align-items-center">
											<img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
											<h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
										</a>
									</div>

									<div class="d-xl-none ms-2">
										<button class="navbar-toggler bg-transparent text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo-dark" data-color-theme="dark">
											<i class="ph-squares-four"></i>
										</button>
									</div>

									<div class="navbar-collapse order-2 order-xl-1 collapse" id="navbar-demo-dark">
										<ul class="navbar-nav mt-2 mt-xl-0">
											<li class="nav-item">
												<a href="#" class="navbar-nav-link bg-transparent text-body px-0 px-xl-2" data-color-theme="dark">
													<i class="ph-circles-three me-2"></i>
													Link
												</a>
											</li>

											<li class="nav-item dropdown ms-xl-1">
												<a href="#" class="navbar-nav-link bg-transparent text-body dropdown-toggle px-0 px-xl-2" data-bs-toggle="dropdown" data-color-theme="dark">
													<i class="ph-squares-four me-2"></i>
													Menu
												</a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">
														<i class="ph-youtube-logo me-2"></i>
														Youtube
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-slack-logo me-2"></i>
														Slack
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-reddit-logo me-2"></i>
														Reddit
													</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">
														<i class="ph-gitlab-logo me-2"></i>
														Gitlab
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-stack-overflow-logo me-2"></i>
														Stack Overflow
													</a>
												</div>
											</li>
										</ul>
									</div>

									<ul class="navbar-nav flex-row order-1 order-xl-2 ms-auto">
										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon bg-transparent text-body" data-bs-toggle="dropdown" data-color-theme="dark">
												<i class="ph-gear"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-figma-logo me-2"></i>
													Figma
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-dribbble-logo me-2"></i>
													Dribbble
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-tiktok-logo me-2"></i>
													Tiktok
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-telegram-logo me-2"></i>
													Telegram
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-messenger-logo me-2"></i>
													Messenger
												</a>
											</div>
										</li>

										<li class="nav-item ms-1">
											<a href="#" class="navbar-nav-link navbar-nav-link-icon bg-transparent text-body" data-color-theme="dark">
												<i class="ph-bell"></i>
												<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top rounded-pill mt-1 me-1">2</span>
											</a>
										</li>

										<li class="nav-item nav-item-dropdown-xl dropdown ms-1">
											<a href="#" class="navbar-nav-link align-items-center bg-transparent text-body p-1" data-bs-toggle="dropdown" data-color-theme="dark">
												<div class="status-indicator-container">
													<img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
													<span class="status-indicator bg-success"></span>
												</div>
												<span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-user-circle me-2"></i>
													My profile
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-currency-circle-dollar me-2"></i>
													My subscription
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-shopping-cart me-2"></i>
													My orders
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope-open me-2"></i>
													My inbox
													<span class="badge bg-primary rounded-pill ms-auto">26</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-gear me-2"></i>
													Account settings
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-sign-out me-2"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /transparent links -->


					<!-- Navigation classes -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Navigation classes</h5>
						</div>

						<div class="card-body">
							This table contains all classes related to the horizontal navbar navigation. Navbar navigation links build on default <code>.nav</code> options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code>.nav-item</code> and <code>.nav-link</code>.
						</div>

						<div class="table-responsive">
							<table class="table">
								<thead class="table-light">
									<tr>
										<th style="width: 20%;">Class</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.nav</code></td>
										<td>Global wrapper for navigation list. It uses default Bootstrap's styles of <code>.nav</code> component and similar markup options.</td>
									</tr>
									<tr>
										<td><code>.navbar-nav</code></td>
										<td>for a full-height and lightweight navigation (including support for dropdowns).</td>
									</tr>
									<tr>
										<td><code>.nav-item</code></td>
										<td>This class is required in an immediate nav link parent element in any <code>.nav</code> container: sidebar, navbar, nav groups, tabs, pills etc.</td>
									</tr>
									<tr>
										<td><code>.nav-item.dropdown</code></td>
										<td>Combination of these classes is required for items with dropdown menu - nav item with <code>.dropdown</code> class is a dropdown toggle and menu wrapper that declares <code>position: relative;</code>.</td>
									</tr>
									<tr>
										<td><code>.nav-item.nav-item-dropdown-[breakpoint]</code></td>
										<td>Combination of these classes keeps default dropdown menus appearance on mobile. Use it only in nav links outside <code>.navbar-collapse</code> container as the behaviour of menus in collapsible containers is different</td>
									</tr>
									<tr>
										<td><code>.nav-item.dropup</code></td>
										<td>Same as <code>.dropdown</code>, but this class is required in bottom navbars, because it triggers dropdown menus above elements in navbar. Dropdown caret direction in bottom navbar also depends on this class.</td>
									</tr>
									<tr>
										<td><code>.navbar-nav-link</code></td>
										<td>A custom class, unlike Bootstrap's default <code>.nav-link</code> class it doesn't affect navs in dropdowns. This class is responsible for navigation link styling and is also required as a part of nav list element structure. It's also a target for <code>.active</code> and <code>.disabled</code> classes.</td>
									</tr>
									<tr>
										<td><code>.navbar-nav-link-icon</code></td>
										<td>For navigation items that contain icon only. This class adjusts left and right paddings to make sure that proportions are preserved.</td>
									</tr>

									<tr>
										<td><code>.dropdown-scrollable</code></td>
										<td>This class sets <code>max-height</code> to the dropdown body and adds vertical scrollbar. Can be added to child container to make only body scrollable or to the entire <code>.dropdown-menu</code>. Default max-height value is <code>340px</code>.</td>
									</tr>
									<tr>
										<td><code>.w-[breakpoint]-[value]</code></td>
										<td>Set of responsive utility classes that set <code>min-width</code> property to the <code>.dropdown-menu</code> container. Very useful in dropdowns with long content. Available options for <strong>[value]</strong> (in pixels): 200, 250, 300, 350, 400, 450, 500, 550, 600.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /navigation classes -->


					<!-- Navigation markup -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Navigation markup</h5>
						</div>

						<div class="card-body">
							<h6>Navigation alignment</h6>
							<p class="mb-3">Navigation in the navbar can be aligned to the <strong>left</strong>, <strong>right</strong> or <strong>center</strong>. By default it's aligned to the left (right in RTL direction). Since parent container is flexible, you need to use <a href="content_helpers_flex">flex utility classes</a> to change default alignment: add <code>.justify-content-[breakpoint]-[property]</code> to <code>.navbar-collapse</code> container and/or responsive <code>spacing</code> utilities to push content to the right and horizontal spacing between navigation containers. On mobiles all navigation items within <code>.navbar-collapse</code> container are stackable by default. Make sure you use same breakpoint in all navbar elements. Examples below demonstrate <strong>left (start)</strong> (default) and <strong>right (end)</strong> nav container alignments.</p>

							<div class="row">
								<div class="col-lg-6">
									<p class="fw-semibold">Left navigation alignment:</p>
									<pre class="language-markup mb-3 mb-lg-4" data-line="5">
										<code>
											&lt;!-- Navbar collapse container -->
											&lt;div class="collapse navbar-collapse" id="navbar-mobile">

												&lt;!-- Left aligned navigation -->
												&lt;ul class="navbar-nav">
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item dropdown">
														&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
															Dropdown
														&lt;/a>

														&lt;div class="dropdown-menu">
															&lt;a href="#" class="dropdown-item">Action&lt;/a>
															&lt;a href="#" class="dropdown-item">Another action&lt;/a>
															&lt;a href="#" class="dropdown-item">One more action&lt;/a>
														&lt;/div>
													&lt;/li>
												&lt;/ul>
												&lt;!-- /left aligned navigation -->

												[...]

											&lt;/div>
											&lt;!-- /navbar collapse container -->
										</code>
									</pre>
								</div>

								<div class="col-lg-6">
									<p class="fw-semibold">Right navigation alignment:</p>
									<pre class="language-markup mb-3 mb-lg-4" data-line="7">
										<code>
											&lt;!-- Navbar collapse container -->
											&lt;div class="collapse navbar-collapse" id="navbar-mobile">

												[...]

												&lt;!-- Right aligned navigation -->
												&lt;ul class="navbar-nav ms-auto">
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item dropdown">
														&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
															Dropdown
														&lt;/a>

														&lt;div class="dropdown-menu">
															&lt;a href="#" class="dropdown-item">Action&lt;/a>
															&lt;a href="#" class="dropdown-item">Another action&lt;/a>
															&lt;a href="#" class="dropdown-item">One more action&lt;/a>
														&lt;/div>
													&lt;/li>
												&lt;/ul>
												&lt;!-- /right aligned navigation -->

											&lt;/div>
											&lt;!-- /navbar collapse container -->
										</code>
									</pre>
								</div>
							</div>


							<h6>Navigation item states</h6>
							<p class="mb-3">Navbar navigation items support 2 state classes: <code>active</code> and <code>disabled</code>. In <code>active</code> state nav links appear pressed, with a darker background and stronger text. Please note: <code>.active</code> class doesn't open dropdown menu, it just highlights links. If navigation link has class <code>.disabled</code>, JS blocks user interaction (basically disabled click event) and CSS mutes the link down. If this class is added to the <code>.dropdown-toggle</code> navigation element, dropdown menu won't be toggled. Examples below demonstrate active/disabled states markup.</p>

							<div class="row">
								<div class="col-lg-6">
									<p class="fw-semibold">Active item/dropdown state:</p>
									<pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11">
										<code>
											&lt;!-- Active state -->
											&lt;ul class="navbar-nav">
												&lt;li>&lt;a href="#" class="navbar-nav-link active">Active link&lt;/a>&lt;/li>
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item dropdown">
													&lt;a href="#" class="navbar-nav-link dropdown-toggle active" data-bs-toggle="dropdown">
														Active dropdown
													&lt;/a>

													&lt;div class="dropdown-menu">
														&lt;a href="#" class="dropdown-item active">Active action&lt;/a>
														&lt;a href="#" class="dropdown-item">Another action&lt;/a>
														&lt;div class="dropdown-divider">&lt;/div>
														&lt;a href="#" class="dropdown-item">One more action&lt;/a>
													&lt;/div>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /active state -->
										</code>
									</pre>
								</div>

								<div class="col-lg-6">
									<p class="fw-semibold">Disabled item/dropdown state:</p>
									<pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11">
										<code>
											&lt;!-- Disabled state -->
											&lt;ul class="navbar-nav">
												&lt;li>&lt;a href="#" class="navbar-nav-link disabled">Disabled link&lt;/a>&lt;/li>
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item dropdown">
													&lt;a href="#" class="navbar-nav-link dropdown-toggle disabled" data-bs-toggle="dropdown">
														Disabled dropdown
													&lt;/a>

													&lt;div class="dropdown-menu">
														&lt;a href="#" class="dropdown-item disabled">Disabled action&lt;/a>
														&lt;a href="#" class="dropdown-item">Another action&lt;/a>
														&lt;div class="dropdown-divider">&lt;/div>
														&lt;a href="#" class="dropdown-item">One more action&lt;/a>
													&lt;/div>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /disabled state -->
										</code>
									</pre>
								</div>
							</div>
						</div>
					</div>
					<!-- /navigation markup -->

				</div>
				<!-- /content area -->

                @include('layouts.footer')

            </div>
            <!-- /inner content -->


        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    @include('layouts.notification')

    @include('layouts.right-sidebar')

</body>
</html>
