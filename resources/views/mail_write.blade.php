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

    <script src="{{URL::asset('assets/js/vendor/editors/quill/quill.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <script src="{{URL::asset('assets/demo/pages/mail_list_write.js')}}"></script>
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
                @slot('subtitle') Write Mail @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Single mail -->
                    <div class="card h-100">

                        <!-- Action toolbar -->
                        <div class="card-body d-sm-flex align-items-sm-center flex-sm-wrap flex-grow-0">
                            <div class="btn-toolbar">
                                <button type="button" class="btn btn-primary me-3">
                                    <i class="ph-paper-plane-tilt"></i>
                                    <span class="d-none d-xl-inline-block ms-2">Send mail</span>
                                </button>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">
                                        <i class="ph-check"></i>
                                        <span class="d-none d-xl-inline-block ms-2">Save</span>
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
                        <!-- /action toolbar -->


                        <!-- Mail details -->
                        <div class="border-top py-0 flex-grow-0">
                            <div class="row mx-0 px-2">
                                <div class="col col-md-2 col-xl-1 d-none d-sm-block">
                                    <div class="py-2 me-sm-3">To:</div>
                                </div>

                                <div class="col col-md-10 col-xl-11">
                                    <div class="d-sm-flex flex-sm-wrap">
                                        <input type="text" class="form-control flex-fill w-sm-auto py-2 px-0 order-0 shadow-none border-0 rounded-0" placeholder="Add recipients">
                                        <div class="hstack gap-2 gap-sm-3 pt-sm-2 pb-2 ms-sm-auto">
                                            <a href="#email_cc" data-bs-toggle="collapse">Copy</a>
                                            <a href="#email_bcc" data-bs-toggle="collapse">Hidden copy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row collapse border-top mx-0 px-2" id="email_cc">
                                <div class="col col-md-2 col-xl-1 d-none d-sm-block">
                                    <div class="py-2 me-sm-3">CC:</div>
                                </div>

                                <div class="col col-md-10 col-xl-11">
                                    <input type="text" class="form-control flex-fill w-sm-auto py-2 px-0 order-0 shadow-none border-0 rounded-0" placeholder="Add CC recipients">
                                </div>
                            </div>

                            <div class="row collapse border-top mx-0 px-2" id="email_bcc">
                                <div class="col col-md-2 col-xl-1 d-none d-sm-block">
                                    <div class="py-2 me-sm-3">BCC:</div>
                                </div>

                                <div class="col col-md-10 col-xl-11">
                                    <input type="text" class="form-control flex-fill w-sm-auto py-2 px-0 order-0 shadow-none border-0 rounded-0" placeholder="Add BCC recipients">
                                </div>
                            </div>

                            <div class="row border-top mx-0 px-2">
                                <div class="col col-md-2 col-xl-1 d-none d-sm-block">
                                    <div class="py-2 me-sm-3">Subject:</div>
                                </div>

                                <div class="col col-md-10 col-xl-11">
                                    <input type="text" class="form-control flex-fill w-sm-auto py-2 px-0 order-0 shadow-none border-0 rounded-0" placeholder="Add subject">
                                </div>
                            </div>

                            <div class="row border-top mx-0 px-2">
                                <div class="col col-md-2 col-xl-1 d-none d-sm-block">
                                    <div class="py-2 me-sm-3">Attachments:</div>
                                </div>

                                <div class="col col-md-10 col-xl-11">
                                    <div class="hstack gap-2 gap-sm-3 flex-wrap py-2">
                                        <a href="#" class="me-auto">
                                            <i class="ph-paperclip me-1"></i>
                                            Attach files
                                        </a>
                                        <a href="#">
                                            <i class="ph-google-logo me-1"></i>
                                            <span class="d-none d-sm-inline-block">Google Drive</span>
                                        </a>
                                        <a href="#">
                                            <i class="ph-cloud-arrow-up me-1"></i>
                                            <span class="d-none d-sm-inline-block">Cloud drive</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /mail details -->


                        <!-- Mail container -->
                        <div class="border-top flex-grow-1">
                            <div id="editor"></div>
                        </div>
                        <!-- /mail container -->


                        <!-- Attachments -->
                        <div class="card-body border-top flex-grow-0">
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
