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

    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <script src="{{URL::asset('assets/demo/pages/mail_list.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    @include('layouts.navbar')

    <!-- Page content -->
    <div class="page-content">

        @include('layouts.sidebar-detached')

        <!-- Secondary sidebar -->
        <div class="sidebar sidebar-secondary sidebar-expand-lg">

            <!-- Expand button -->
            <button type="button" class="btn btn-sidebar-expand sidebar-control sidebar-secondary-toggle h-100">
                <i class="ph-caret-right"></i>
            </button>
            <!-- /expand button -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Header -->
                <div class="sidebar-section sidebar-section-body d-flex align-items-center">
                    <h5 class="mb-0">Sidebar</h5>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-secondary-toggle d-none d-lg-inline-flex">
                            <i class="ph-arrows-left-right"></i>
                        </button>

                        <button type="button" class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-secondary-toggle d-lg-none">
                            <i class="ph-x"></i>
                        </button>
                    </div>
                </div>
                <!-- /header -->


                <!-- Action -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body pt-0">
                        <a href="#" class="btn btn-primary w-100">Compose mail</a>
                    </div>
                </div>
                <!-- /action -->


                <!-- Sub navigation -->
                <div class="sidebar-section">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Navigation</span>
                    </div>

                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item-header text-muted">Folders</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="ph-envelope-open me-2"></i>
                                Inbox
                                <span class="badge bg-success rounded-pill ms-auto">32</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-file-dotted me-2"></i>
                                Drafts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-share me-2"></i>
                                Sent mail
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-star me-2"></i>
                                Starred
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-warning-octagon me-2"></i>
                                Spam
                                <span class="badge bg-danger rounded-pill ms-auto">99+</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-trash me-2"></i>
                                Trash
                            </a>
                        </li>
                        <li class="nav-item-header text-muted">Labels</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="bg-primary rounded-circle align-self-center p-1 me-2"></span>
                                Facebook
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="bg-success rounded-circle align-self-center p-1 me-2"></span>
                                Spotify
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="bg-indigo rounded-pill align-self-center p-1 me-2"></span>
                                Twitter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="bg-pink rounded-circle align-self-center p-1 me-2"></span>
                                Dribbble
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /sub navigation -->


                <!-- Start conversation -->
                <div class="sidebar-section">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Start conversation</span>
                        <span class="badge bg-success rounded-pill ms-auto">+32</span>
                    </div>

                    <div class="list-group list-group-borderless py-2">
                        <div class="list-group-item fw-semibold">Office staff</div>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Bastian Miller</div>
                                <span class="text-muted">Web dev</span>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Jordana Mills</div>
                                <span class="text-muted">Sales consultant</span>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Buzz Brenson</div>
                                <span class="text-muted">UX expert</span>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Zachary Willson</div>
                                <span class="text-muted">Illustrator</span>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">William Miles</div>
                                <span class="text-muted">SEO expert</span>
                            </div>
                        </a>

                        <div class="list-group-item fw-semibold">Partners</div>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Freddy Walden</div>
                                <span class="text-muted">Microsoft</span>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Dori Laperriere</div>
                                <span class="text-muted">Google</span>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Vanessa Aurelius</div>
                                <span class="text-muted">Facebook</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /start conversation -->


                <!-- Recent messages -->
                <div class="sidebar-section">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Recent messages</span>
                    </div>

                    <div class="list-group list-group-borderless py-1">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Will Samuel</span>
                                <div class="text-muted">And he looked over at the alarm clock, ticking..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-checks fs-base text-primary align-text-top me-1"></i>
                                    Just now
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Margo Baker</span>
                                <div class="text-muted">However hard he threw himself onto..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-checks fs-base text-primary align-text-top me-1"></i>
                                    6 minutes ago
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Monica Smith</span>
                                <div class="text-muted">Yes, but was it possible to quietly sleep through..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-check fs-base align-text-top me-1"></i>
                                    Yesterday
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Jordana Mills</span>
                                <div class="text-muted">What should he do now? The next train went at..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-check fs-base align-text-top me-1"></i>
                                    Monday
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">John Craving</span>
                                <div class="text-muted">Gregor then turned to look out the window..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-checks fs-base text-primary align-text-top me-1"></i>
                                    Jan 24, 14:50
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /recent messages -->


                <!-- Contacts -->
                <div class="sidebar-section">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Contacts</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3 position-relative">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle rounded-pill">6</span>
                            </a>

                            <div class="flex-fill fw-medium">
                                Rebecca Jameson
                            </div>

                            <div class="ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chats me-2"></i>
                                            Start chat
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-phone me-2"></i>
                                            Make a call
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope me-2"></i>
                                            Send mail
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3 position-relative">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle rounded-pill">9</span>
                            </a>

                            <div class="flex-fill fw-medium">
                                Walter Sommers
                            </div>

                            <div class="ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chats me-2"></i>
                                            Start chat
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-phone me-2"></i>
                                            Make a call
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope me-2"></i>
                                            Send mail
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill fw-medium">
                                Otto Gerwald
                            </div>

                            <div class="ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chats me-2"></i>
                                            Start chat
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-phone me-2"></i>
                                            Make a call
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope me-2"></i>
                                            Send mail
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill fw-medium">
                                Vince Satmann
                            </div>

                            <div class="ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chats me-2"></i>
                                            Start chat
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-phone me-2"></i>
                                            Make a call
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope me-2"></i>
                                            Send mail
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill fw-medium">
                                Jason Leroy
                            </div>

                            <div class="ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chats me-2"></i>
                                            Start chat
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-phone me-2"></i>
                                            Make a call
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope me-2"></i>
                                            Send mail
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /contacts -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /secondary sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @component('components.breadcrumb')
                @slot('title') Mailbox @endslot
                @slot('subtitle') List @endslot
                @endcomponent

                <!-- Content area -->
				<div class="content">

					<!-- Single line -->
					<div class="card">
						<div class="card-header d-flex">
							<h5 class="mb-0">My Inbox (single line)</h5>

							<div class="ms-auto">
								<span class="badge bg-primary">259 today</span>
		                	</div>
						</div>

						<!-- Action toolbar -->
						<div class="card-body d-flex align-items-start flex-wrap border-bottom">
							<div class="btn-group">
								<button type="button" class="btn btn-light btn-icon btn-checkbox-all">
									<input type="checkbox" class="form-check-input">
								</button>
								<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item">Select all</a>
									<a href="#" class="dropdown-item">Select read</a>
									<a href="#" class="dropdown-item">Select unread</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item">Clear selection</a>
								</div>
							</div>

							<div class="d-inline-flex hstack gap-2 gap-lg-3 ms-3">
								<button type="button" class="btn btn-primary">
									<i class="ph-pencil"></i>
									<span class="d-none d-lg-inline-block ms-2">Compose</span>
								</button>
								<div class="btn-group">
									<button type="button" class="btn btn-light">
										<i class="ph-trash"></i>
										<span class="d-none d-lg-inline-block ms-2">Delete</span>
									</button>
			                    	<button type="button" class="btn btn-light">
			                    		<i class="ph-warning-octagon"></i>
			                    		<span class="d-none d-lg-inline-block ms-2">Spam</span>
			                    	</button>
			                    </div>
							</div>

							<div class="d-inline-flex align-items-center hstack gap-2 gap-lg-3 w-100 w-lg-auto mt-2 mt-lg-0 ms-lg-auto">
								<div><span class="fw-semibold">1-50</span> of <span class="fw-semibold">528</span></div>

								<div class="btn-group">
									<button type="button" class="btn btn-light btn-icon disabled">
										<i class="ph-arrow-left"></i>
									</button>
			                    	<button type="button" class="btn btn-light btn-icon">
			                    		<i class="ph-arrow-right"></i>
			                    	</button>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
										<i class="ph-gear"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<a href="#" class="dropdown-item">One more line</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /action toolbar -->


						<!-- Table -->
						<div class="table-responsive">
							<table class="table table-inbox">
								<tbody>
									<tr class="unread">
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/spotify.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Spotify</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">On Tower-hill, as you go down &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">To the London docks, you may have seen a crippled beggar (or KEDGER, as the sailors say) holding a painted board before him, representing the tragic scene in which he lost his leg</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											11:09 pm
										</td>
									</tr>

									<tr class="unread">
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-warning text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">James Alexander</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject"><span class="badge bg-success align-top me-2">Promo</span> There are three whales and three boats &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">And one of the boats (presumed to contain the missing leg in all its original integrity) is being crunched by the jaws of the foremost whale</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											10:21 pm
										</td>
									</tr>

									<tr class="unread">
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-primary text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Nathan Jacobson</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">Any time these ten years, they tell me, has that man held up &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">That picture, and exhibited that stump to an incredulous world. But the time of his justification has now come. His three whales are as good whales as were ever published in Wapping, at any rate; and his stump</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											8:37 pm
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-pink text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Margo Baker</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">Throughout the Pacific, and also in Nantucket, and New Bedford &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">and Sag Harbor, you will come across lively sketches of whales and whaling-scenes, graven by the fishermen themselves on Sperm Whale-teeth, or ladies' busks wrought out of the Right Whale-bone</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											4:28 am
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/dribbble.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Dribbble</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">The whalemen call the numerous little ingenious contrivances &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">They elaborately carve out of the rough material, in their hours of ocean leisure. Some of them have little boxes of dentistical-looking implements</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 5
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-indigo text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Hanna Dorman</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">Some of them have little boxes of dentistical-looking implements &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">Specially intended for the skrimshandering business. But, in general, they toil with their jack-knives alone; and, with that almost omnipotent tool of the sailor</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Dec 5
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/twitter.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Twitter</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject"><span class="badge bg-indigo align-top me-2">Order</span> Long exile from Christendom &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">And civilization inevitably restores a man to that condition in which God placed him, i.e. what is called savagery</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 4
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-teal text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Vanessa Aurelius</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">Your true whale-hunter is as much a savage as an Iroquois &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">I myself am a savage, owning no allegiance but to the King of the Cannibals; and ready at any moment to rebel against him. Now, one of the peculiar characteristics of the savage in his domestic hours</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Dec 4
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-purple text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">William Brenson</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">An ancient Hawaiian war-club or spear-paddle &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">In its full multiplicity and elaboration of carving, is as great a trophy of human perseverance as a Latin lexicon. For, with but a bit of broken sea-shell or a shark's tooth</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Dec 4
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/facebook.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Facebook</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">As with the Hawaiian savage, so with the white sailor-savage &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">With the same marvellous patience, and with the same single shark's tooth, of his one poor jack-knife, he will carve you a bit of bone sculpture, not quite as workmanlike</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 3
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-success text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Vicky Barna</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject"><span class="badge bg-pink align-top me-2">Track</span> Achilles's shield &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">Wooden whales, or whales cut in profile out of the small dark slabs of the noble South Sea war-wood, are frequently met with in the forecastles of American whalers. Some of them are done with much accuracy</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 2
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/youtube.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Youtube</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">At some old gable-roofed country houses &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">You will see brass whales hung by the tail for knockers to the road-side door. When the porter is sleepy, the anvil-headed whale would be best. But these knocking whales are seldom remarkable as faithful essays</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Nov 30
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-warning text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Tony Gurrano</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">On the spires of some old-fashioned churches &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">You will see sheet-iron whales placed there for weather-cocks; but they are so elevated, and besides that are to all intents and purposes so labelled with "HANDS OFF!" you cannot examine them</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Nov 28
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-info text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Barbara Walden</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">In bony, ribby regions of the earth &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">Where at the base of high broken cliffs masses of rock lie strewn in fantastic groupings upon the plain, you will often discover images as of the petrified forms</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Nov 28
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/amazon.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Amazon</div>
											</a>
										</td>
										<td class="text-truncate">
											<span class="table-inbox-subject">Here and there from some lucky point of view &nbsp;-&nbsp;</span>
											<span class="text-muted fw-normal">You will catch passing glimpses of the profiles of whales defined along the undulating ridges. But you must be a thorough whaleman, to see these sights; and not only that, but if you wish to return to such a sight again</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Nov 27
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /table -->

					</div>
					<!-- /single line -->


					<!-- Multiple lines -->
					<div class="card">
						<div class="card-header d-flex">
							<h5 class="mb-0">My Inbox (multiple lines)</h5>

							<div class="ms-auto">
								<span class="badge bg-primary">259 today</span>
		                	</div>
						</div>

						<!-- Action toolbar -->
						<div class="card-body d-flex align-items-start flex-wrap border-bottom">
							<div class="btn-group">
								<button type="button" class="btn btn-light btn-icon btn-checkbox-all">
									<input type="checkbox" class="form-check-input">
								</button>
								<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item">Select all</a>
									<a href="#" class="dropdown-item">Select read</a>
									<a href="#" class="dropdown-item">Select unread</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item">Clear selection</a>
								</div>
							</div>

							<div class="d-inline-flex hstack gap-2 gap-lg-3 ms-3">
								<button type="button" class="btn btn-primary">
									<i class="ph-pencil"></i>
									<span class="d-none d-lg-inline-block ms-2">Compose</span>
								</button>
								<div class="btn-group">
									<button type="button" class="btn btn-light">
										<i class="ph-trash"></i>
										<span class="d-none d-lg-inline-block ms-2">Delete</span>
									</button>
			                    	<button type="button" class="btn btn-light">
			                    		<i class="ph-warning-octagon"></i>
			                    		<span class="d-none d-lg-inline-block ms-2">Spam</span>
			                    	</button>
			                    </div>
							</div>

							<div class="d-inline-flex align-items-center hstack gap-2 gap-lg-3 w-100 w-lg-auto mt-2 mt-lg-0 ms-lg-auto">
								<div><span class="fw-semibold">1-50</span> of <span class="fw-semibold">528</span></div>

								<div class="btn-group">
									<button type="button" class="btn btn-light btn-icon disabled">
										<i class="ph-arrow-left"></i>
									</button>
			                    	<button type="button" class="btn btn-light btn-icon">
			                    		<i class="ph-arrow-right"></i>
			                    	</button>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
										<i class="ph-gear"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<a href="#" class="dropdown-item">One more line</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /action toolbar -->


						<!-- Table -->
						<div class="table-responsive">
							<table class="table table-inbox">
								<tbody>
									<tr class="unread">
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/spotify.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Spotify</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">On Tower-hill, as you go down</div>
											<span class="text-muted fw-normal">To the London docks, you may have seen a crippled beggar (or KEDGER, as the sailors say) holding a painted board before him, representing the tragic scene in which he lost his leg</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											11:09 pm
										</td>
									</tr>

									<tr class="unread">
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-warning text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">James Alexander</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject"><span class="badge bg-success align-top me-2">Promo</span> There are three whales and three boats</div>
											<span class="text-muted fw-normal">And one of the boats (presumed to contain the missing leg in all its original integrity) is being crunched by the jaws of the foremost whale</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											10:21 pm
										</td>
									</tr>

									<tr class="unread">
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-primary text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Nathan Jacobson</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">Any time these ten years, they tell me, has that man held up</div>
											<span class="text-muted fw-normal">That picture, and exhibited that stump to an incredulous world. But the time of his justification has now come. His three whales are as good whales as were ever published in Wapping, at any rate; and his stump</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											8:37 pm
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-pink text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Margo Baker</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">Throughout the Pacific, and also in Nantucket, and New Bedford</div>
											<span class="text-muted fw-normal">and Sag Harbor, you will come across lively sketches of whales and whaling-scenes, graven by the fishermen themselves on Sperm Whale-teeth, or ladies' busks wrought out of the Right Whale-bone</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											4:28 am
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/dribbble.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Dribbble</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">The whalemen call the numerous little ingenious contrivances</div>
											<span class="text-muted fw-normal">They elaborately carve out of the rough material, in their hours of ocean leisure. Some of them have little boxes of dentistical-looking implements</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 5
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-indigo text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Hanna Dorman</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">Some of them have little boxes of dentistical-looking implements</div>
											<span class="text-muted fw-normal">Specially intended for the skrimshandering business. But, in general, they toil with their jack-knives alone; and, with that almost omnipotent tool of the sailor</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Dec 5
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/twitter.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Twitter</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject"><span class="badge bg-indigo align-top me-2">Order</span> Long exile from Christendom</div>
											<span class="text-muted fw-normal">And civilization inevitably restores a man to that condition in which God placed him, i.e. what is called savagery</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 4
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-teal text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Vanessa Aurelius</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">Your true whale-hunter is as much a savage as an Iroquois</div>
											<span class="text-muted fw-normal">I myself am a savage, owning no allegiance but to the King of the Cannibals; and ready at any moment to rebel against him. Now, one of the peculiar characteristics of the savage in his domestic hours</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Dec 4
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-purple text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">William Brenson</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">An ancient Hawaiian war-club or spear-paddle</div>
											<span class="text-muted fw-normal">In its full multiplicity and elaboration of carving, is as great a trophy of human perseverance as a Latin lexicon. For, with but a bit of broken sea-shell or a shark's tooth</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Dec 4
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/facebook.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Facebook</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">As with the Hawaiian savage, so with the white sailor-savage</div>
											<span class="text-muted fw-normal">With the same marvellous patience, and with the same single shark's tooth, of his one poor jack-knife, he will carve you a bit of bone sculpture, not quite as workmanlike</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 3
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-success text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Vicky Barna</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject"><span class="badge bg-pink align-top me-2">Track</span> Achilles's shield</div>
											<span class="text-muted fw-normal">Wooden whales, or whales cut in profile out of the small dark slabs of the noble South Sea war-wood, are frequently met with in the forecastles of American whalers. Some of them are done with much accuracy</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Dec 2
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/youtube.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Youtube</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">At some old gable-roofed country houses</div>
											<span class="text-muted fw-normal">You will see brass whales hung by the tail for knockers to the road-side door. When the porter is sleepy, the anvil-headed whale would be best. But these knocking whales are seldom remarkable as faithful essays</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Nov 30
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-warning text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Tony Gurrano</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">On the spires of some old-fashioned churches</div>
											<span class="text-muted fw-normal">You will see sheet-iron whales placed there for weather-cocks; but they are so elevated, and besides that are to all intents and purposes so labelled with "HANDS OFF!" you cannot examine them</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Nov 28
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-muted opacity-25"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<div class="bg-info text-white lh-1 rounded-pill p-1">
												<span class="letter-icon fs-sm"></span>
											</div>
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Barbara Walden</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">In bony, ribby regions of the earth</div>
											<span class="text-muted fw-normal">Where at the base of high broken cliffs masses of rock lie strewn in fantastic groupings upon the plain, you will often discover images as of the petrified forms</span>
										</td>
										<td class="table-inbox-attachment"></td>
										<td class="table-inbox-time">
											Nov 28
										</td>
									</tr>

									<tr>
										<td class="table-inbox-checkbox">
											<input type="checkbox" class="form-check-input">
										</td>
										<td class="table-inbox-star">
											<a href="#">
												<i class="ph-star text-warning"></i>
											</a>
										</td>
										<td class="table-inbox-image">
											<img src="{{URL::asset('assets/images/brands/amazon.svg')}}" class="rounded-circle" width="32" height="32" alt="">
										</td>
										<td class="table-inbox-name">
											<a href="mail_read">
												<div class="letter-icon-title text-body">Amazon</div>
											</a>
										</td>
										<td class="text-truncate">
											<div class="table-inbox-subject">Here and there from some lucky point of view</div>
											<span class="text-muted fw-normal">You will catch passing glimpses of the profiles of whales defined along the undulating ridges. But you must be a thorough whaleman, to see these sights; and not only that, but if you wish to return to such a sight again</span>
										</td>
										<td class="table-inbox-attachment">
											<i class="ph-paperclip text-muted"></i>
										</td>
										<td class="table-inbox-time">
											Nov 27
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /table -->

					</div>
					<!-- /multiple lines -->

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
