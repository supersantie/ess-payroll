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
    <script src="{{URL::asset('assets/demo/pages/mail_list_read.js')}}"></script>
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
                @slot('subtitle') Read Mail @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Single mail -->
                    <div class="card">

                        <!-- Toolbar -->
                        <div class="card-body d-sm-flex align-items-sm-center flex-sm-wrap">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light">
                                    <i class="ph-arrow-bend-up-left"></i>
                                    <span class="d-none d-xl-inline-block ms-2">Reply</span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="ph-arrow-bend-double-up-left"></i>
                                    <span class="d-none d-xl-inline-block ms-2">Reply to all</span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="ph-arrow-bend-up-right"></i>
                                    <span class="d-none d-xl-inline-block ms-2">Forward</span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="ph-trash"></i>
                                    <span class="d-none d-xl-inline-block ms-2">Delete</span>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Select all</a>
                                        <a href="#" class="dropdown-item">Select read</a>
                                        <a href="#" class="dropdown-item">Select unread</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">Clear selection</a>
                                    </div>
                                </div>
                            </div>

                            <div class="d-inline-flex align-items-center flex-wrap w-100 w-sm-auto mt-2 mt-sm-0 ms-sm-auto">
                                <div>12:49 pm</div>

                                <div class="ms-3">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light">
                                            <i class="ph-printer"></i>
                                            <span class="d-none d-xl-inline-block ms-2">Print</span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <i class="ph-share"></i>
                                            <span class="d-none d-xl-inline-block ms-2">Share</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /toolbar -->


                        <!-- Mail details -->
                        <div class="card-body border-top">
                            <div class="d-flex flex-column flex-lg-row">
                                <a href="#" class="d-none d-lg-block me-lg-3 mb-3 mb-lg-0">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-teal text-white lh-1 w-40px h-40px rounded-pill">
                                        <span class="letter-icon"></span>
                                    </div>
                                </a>

                                <div class="flex-fill">
                                    <h6 class="mb-0">New Imperatives for Enterprise Mobility</h6>
                                    <div><span class="letter-icon-title">Amanda Smith</span> <a href="#">&lt;jira@google.atlassian.net&gt;</a></div>
                                </div>

                                <div class="align-self-lg-center ml-lg-3 mt-3 mt-lg-0">
                                    <div class="hstack gap-1">
                                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        <span class="btn btn-light rounded-pill">+26</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /mail details -->


                        <!-- Mail container -->
                        <div class="card-body border-top">
                            <div class="overflow-auto mw-100">

                                <!-- Email sample (demo) -->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td>

                                            <!-- Hero -->
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                <tr>
                                                    <td align="center" bgcolor="#f67b7c" style="background-image: url('../../../assets/images/backgrounds/panel_bg.png'); background-repeat: repeat;">
                                                        <table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tr>
                                                                <td width="100%" height="15"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">

                                                                    <!-- Nav -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0">
                                                                        <tr>
                                                                            <td width="100%" valign="middle">

                                                                                <!-- Logo -->
                                                                                <table width="280" border="0" cellpadding="0" cellspacing="0" align="left">
                                                                                    <tr>
                                                                                        <td height="60" valign="middle" width="100%" align="left">
                                                                                            <a href="#"><img width="125" src="../../../assets/images/logo_light.png" alt=""></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /logo -->


                                                                                <!-- View Online -->
                                                                                <table width="280" border="0" cellpadding="0" cellspacing="0" align="right">
                                                                                    <tr>
                                                                                        <td height="60" valign="middle" width="100%" align="right">
                                                                                            <a href="#" style="color: #ffffff;">Check the online version</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /view Online -->

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="100%" height="30"></td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /nav -->


                                                                    <!-- Title -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td valign="middle" align="center" style="font-size: 40px; color: #ffffff; line-height: 50px; font-weight: 300;">
                                                                                We Create <span style="font-weight: 400;">Magic.</span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /title -->


                                                                    <!-- Subtitle -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td width="100%" height="30"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td valign="middle" width="100%">
                                                                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                    <tr>
                                                                                        <td width="30"></td>
                                                                                        <td width="540" align="center" style="font-size: 14px; color: #ffffff; line-height: 24px;">
                                                                                            This is a demo of email template, please do not use it as a fully functional template. Sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                                        </td>
                                                                                        <td width="30"></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /subtitle -->


                                                                    <!-- Button -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td height="40"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="auto" align="center">
                                                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                    <tr>
                                                                                        <td width="auto" align="center" height="40" bgcolor="#344b61" style="border-radius: 20px; padding-left: 40px; padding-right: 40px; font-weight: 500;">
                                                                                            <a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; line-height: 34px;">More Information</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /button -->

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100%" height="50"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- /hero -->


                                            <!-- We have a Great Workspace -->
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                <tr>
                                                    <td width="100%" valign="top" bgcolor="#ffffff" align="center">
                                                        <table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tr>
                                                                <td width="100%" height="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">

                                                                    <!-- Post -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td width="100%" align="center">
                                                                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="left">
                                                                                    <tr>
                                                                                        <td width="100%">
                                                                                            <a href="#">
                                                                                                <img src="{{URL::asset('assets/images/demo/cover2.jpg')}}" alt="" border="0" width="600" height="auto" style="border-radius: 4px;">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%" height="25"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="35" width="100%" align="center" style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;">
                                                                                            We have a Great Workspace
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%" height="15"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td valign="middle" width="100%" align="center" style="font-size: 14px; color: #808080; line-height: 22px;">
                                                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%" height="30"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="auto" align="center">
                                                                                            <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tr>
                                                                                                    <td width="auto" align="center" height="38" bgcolor="#fa6f6f" style="border-radius: 20px; padding-left: 22px; padding-right: 22px;">
                                                                                                        <a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; font-weight: 500; line-height: 32px; width: 100%;">Read more</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /post -->

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100%" height="50"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- /we have a Great Workspace -->


                                            <!-- The Best Prices for You -->
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                <tr>
                                                    <td width="100%" height="1" bgcolor="#dddddd" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="100%" valign="top" bgcolor="#fafafa" style="background-color: #fafafa;">
                                                        <table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tr>
                                                                <td width="100%" height="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">

                                                                    <!-- Header -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td align="center">
                                                                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                    <tr>
                                                                                        <td align="center" valign="middle" style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;">
                                                                                            The Best Prices for You
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%" height="30"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%">
                                                                                            <table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tr>
                                                                                                    <td height="1" bgcolor="#f67b7c" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%" height="30"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" valign="middle" width="100%" style="font-size: 14px; color: #808080; line-height: 22px; font-weight: 400;">
                                                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore...
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="100%" height="30"></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /header -->


                                                                    <!-- Prices -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td width="100%" valign="top" align="center">

                                                                                <!-- Basic license -->
                                                                                <table width="290" border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#ffffff" style="border: 1px solid #dddddd; background-color: #ffffff;">
                                                                                    <tr>
                                                                                        <td width="290" valign="top" align="center">
                                                                                            <table width="294" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tr>
                                                                                                    <td height="15">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" style="color: #444444; font-size: 17px; line-height: 24px; padding: 0px 5px; font-weight: 500;">
                                                                                                        Regular License
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="15">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="100" height="1" bgcolor="#e9e9e9" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="20">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px; font-weight: 400;">
                                                                                                        Non-Responsive layout
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="10">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="text-align: center; color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
                                                                                                        Builder excluded
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="10">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="text-align: center; color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
                                                                                                        Instant Access
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="25">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="24" style="text-align: center; color: #444444; font-size: 38px; line-height: 15px; padding: 6px 5px 6px 5px; font-weight: 700;">
                                                                                                        <span style="font-size: 18px; position: relative; bottom: 12px;">$ </span>49<span style="font-size: 14px; color: #808080; font-style: italic;"> / month</span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="25">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="auto" align="center">
                                                                                                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                                            <tr>
                                                                                                                <td width="auto" align="center" height="38" bgcolor="#fa6f6f" style="border-radius: 20px; padding-left: 22px; padding-right: 22px; font-weight: 500;">
                                                                                                                    <a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; line-height: 32px;">Sign Up</a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="30">
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /basic license -->


                                                                                <!-- Space -->
                                                                                <table width="1" border="0" cellpadding="0" cellspacing="0" align="left">
                                                                                    <tr>
                                                                                        <td width="100%" height="30"></td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /space -->


                                                                                <!-- OEM license -->
                                                                                <table width="290" border="0" cellpadding="0" cellspacing="0" align="right" bgcolor="#ffffff" style="border: 1px solid #dddddd; background-color: #ffffff;">
                                                                                    <tr>
                                                                                        <td width="294" valign="top">
                                                                                            <table width="290" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tr>
                                                                                                    <td height="15">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" style="color: #444444; font-size: 17px; line-height: 26px; padding: 0px 5px; font-weight: 500;">
                                                                                                        OEM License
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="15">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="100" height="1" bgcolor="#e9e9e9" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="20">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
                                                                                                        Responsive layout
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="10">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
                                                                                                        Builder included
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="10">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
                                                                                                        Instant Access
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="25">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center" height="24" style="color: #444444; font-size: 38px; line-height: 15px; padding: 6px 5px 6px 5px; font-weight: 700;">
                                                                                                        <span style="font-size: 18px; position: relative; bottom: 12px;">$ </span>80<span style="font-size: 14px; color: #808080; font-style: italic;"> / month</span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="25">
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="auto" align="center">
                                                                                                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                                            <tr>
                                                                                                                <td width="auto" align="center" height="38" bgcolor="#fa6f6f" style="border-radius: 20px; padding-left: 22px; padding-right: 22px; font-weight: 500;">
                                                                                                                    <a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; line-height: 32px;">Sign Up</a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="30">
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /OEM license -->

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /prices -->

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="60"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- /the Best Prices for You -->


                                            <!-- Let our Clients Convince you -->
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                <tr>
                                                    <td align="center" width="100%" valign="top" bgcolor="#4f97e2" style="background-image: url('../../../assets/images/backgrounds/panel_bg.png'); background-color: #4f97e2; background-repeat: repeat;">
                                                        <table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tr>
                                                                <td width="100%" height="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">

                                                                    <!-- Header -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td valign="middle" align="center" width="100%" style="font-size: 24px; color: #ffffff; line-height: 32px; font-weight: 500;">
                                                                                Let our Clients Convince you
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="100%" height="30"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="100%">
                                                                                <table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                                    <tr>
                                                                                        <td width="100" height="1" bgcolor="#ffffff" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="100%" height="30"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" valign="middle" width="100%" style="font-size: 14px; color: #ffffff; line-height: 22px;">
                                                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt <b>mollit anim id est laborum</b>. Sed ut perspiciatis unde omnis iste...
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="100%" height="30"></td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /header -->


                                                                    <!-- Testimonials -->
                                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                        <tr>
                                                                            <td width="100%">

                                                                                <!-- Left table -->
                                                                                <table width="275" border="0" cellpadding="0" cellspacing="0" align="left" style="border-radius: 4px;">
                                                                                    <tr>
                                                                                        <td width="100%" align="center">
                                                                                            <a href="#">
                                                                                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" alt="" border="0" width="83" height="auto" style="border-radius: 100px;">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td valign="middle" align="center" style="font-size: 14px; color: #ffffff; line-height: 22px;">
                                                                                            Excepteur sint occaecat cupidatat non proident id est laborum.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="20"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-size: 15px; color: #ffffff; line-height: 22px;">
                                                                                            <span style="font-weight: 700; font-size: 12px; text-transform: uppercase; color: #fff;">Cris Costo</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /left table -->


                                                                                <!-- Space -->
                                                                                <table width="1" border="0" cellpadding="0" cellspacing="0" align="left">
                                                                                    <tr>
                                                                                        <td width="100%" height="40"></td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /space -->


                                                                                <!-- Right table -->
                                                                                <table width="275" border="0" cellpadding="0" cellspacing="0" align="right" style="border-radius: 4px;">
                                                                                    <tr>
                                                                                        <td width="100%" align="center">
                                                                                            <a href="#">
                                                                                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" alt="" border="0" width="83" height="auto" style="border-radius: 100px;">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td valign="middle" align="center" style="font-size: 14px; color: #ffffff; line-height: 22px;">
                                                                                            Sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="20"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-size: 15px; line-height: 22px;">
                                                                                            <span style="font-weight: 700; font-size: 12px; text-transform: uppercase; color: #ffffff;">Jason Kenny</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                                <!-- /right table -->

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <!-- /testimonials -->

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100%" height="50"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- /let our Clients Convince you -->


                                            <!-- Footer -->
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                <tr>
                                                    <td align="center" width="100%" valign="top" bgcolor="#344b61">

                                                        <!-- Wrapper -->
                                                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tr>
                                                                <td width="100%" height="40" align="center" valign="middle" style="font-size: 12px; color: #aebecd;">
                                                                    <a href="#" style="color: #ffffff;">Unsubscribe</a>

                                                                    <span style="color: #ffffff;">&nbsp;/&nbsp;</span>

                                                                    <a href="#" style="color: #ffffff;">Send to a friend</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- /wrapper -->

                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- /footer -->

                                        </td>
                                    </tr>
                                </table>
                                <!-- /email sample (demo) -->

                            </div>
                        </div>
                        <!-- /mail container -->


                        <!-- Attachments -->
                        <div class="card-body border-top">
                            <h6 class="mb-2">2 attachments</h6>

                            <div class="hstack gap-2 flex-wrap">
                                <div class="border rounded p-2 mt-2">
                                    <div class="d-inline-flex align-items-center fw-semibold my-1">
                                        <i class="ph-file-pdf text-danger me-2"></i>
                                        <a href="#">new_december_offers.pdf</a>
                                        <span class="fs-sm fw-normal text-muted ms-1">(174 KB)</span>
                                    </div>
                                </div>

                                <div class="border rounded py-2 px-3 mt-2">
                                    <div class="d-inline-flex align-items-center fw-semibold my-1">
                                        <i class="ph-file-pdf text-danger me-2"></i>
                                        <a href="#">assignment_letter.pdf</a>
                                        <span class="fs-sm fw-normal text-muted ms-1">(736 KB)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /attachments -->

                    </div>
                    <!-- /single mail -->

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
