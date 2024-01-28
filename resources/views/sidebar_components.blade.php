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
    <script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/inputs/dual_listbox.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/pickers/datepicker.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/ui/dragula.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/trees/fancytree_all.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/sliders/nouislider.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/pickers/color/spectrum.js')}}"></script>

    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <script src="{{URL::asset('assets/demo/pages/sidebar_components.js')}}"></script>
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


            <!-- Sidebar tabs -->
            <ul class="nav nav-tabs nav-tabs-highlight nav-justified px-3">
                <li class="nav-item">
                    <a href="#components-tab" class="nav-link active" data-bs-toggle="tab">
                        <i class="ph-squares-four"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#forms-tab" class="nav-link" data-bs-toggle="tab">
                        <i class="ph-rows"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#other-tab" class="nav-link" data-bs-toggle="tab">
                        <i class="ph-circles-three"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#custom-tab" class="nav-link" data-bs-toggle="tab">
                        <i class="ph-dots-three-circle-vertical"></i>
                    </a>
                </li>
            </ul>
            <!-- /sidebar tabs -->


            <!-- Sidebar content -->
            <div class="sidebar-content tab-content">
                <div class="tab-pane fade active show" id="components-tab">

                    <!-- Block buttons -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Block buttons</span>
                            <div class="ms-auto">
                                <a href="#sidebar-block-buttons" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-block-buttons">
                            <div class="sidebar-section-body">
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-teal w-100 flex-column py-2 mb-2">
                                            <i class="ph-git-branch ph-2x mb-1"></i>
                                            Branches
                                        </button>

                                        <button type="button" class="btn btn-purple w-100 flex-column py-2">
                                            <i class="ph-git-commit ph-2x mb-1"></i>
                                            Commits
                                        </button>
                                    </div>

                                    <div class="col">
                                        <button type="button" class="btn btn-warning w-100 flex-column py-2 mb-2">
                                            <i class="ph-git-merge ph-2x mb-1"></i>
                                            Merges
                                        </button>

                                        <button type="button" class="btn btn-primary w-100 flex-column py-2">
                                            <i class="ph-git-pull-request ph-2x mb-1"></i>
                                            Pull requests
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /block buttons -->


                    <!-- Light buttons tile -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Light buttons tile</span>
                            <div class="ms-auto">
                                <a href="#sidebar-light-buttons-tile" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-light-buttons-tile">
                            <div class="sidebar-section-body">
                                <div class="row row-tile g-0">
                                    <div class="col">
                                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-top-start py-2">
                                            <i class="ph-app-store-logo text-primary ph-2x mb-1"></i>
                                            App store
                                        </button>

                                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-start py-2">
                                            <i class="ph-twitter-logo text-info ph-2x mb-1"></i>
                                            Twitter
                                        </button>
                                    </div>

                                    <div class="col">
                                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-top-end py-2">
                                            <i class="ph-dribbble-logo text-pink ph-2x mb-1"></i>
                                            Dribbble
                                        </button>

                                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-end py-2">
                                            <i class="ph-spotify-logo text-success ph-2x mb-1"></i>
                                            Spotify
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /light buttons tile -->


                    <!-- Dark buttons tile -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Dark buttons tile</span>
                            <div class="ms-auto">
                                <a href="#sidebar-dark-buttons-tile" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-dark-buttons-tile">
                            <div class="sidebar-section-body">
                                <div class="row row-tile g-0">
                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100 flex-column border-white border-opacity-10 rounded-0 rounded-top-start py-2">
                                            <i class="ph-app-store-logo text-primary ph-2x mb-1"></i>
                                            App store
                                        </button>

                                        <button type="button" class="btn btn-dark w-100 flex-column border-white border-opacity-10 rounded-0 rounded-bottom-start py-2">
                                            <i class="ph-twitter-logo text-info ph-2x mb-1"></i>
                                            Twitter
                                        </button>
                                    </div>

                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100 flex-column border-white border-opacity-10 rounded-0 rounded-top-end py-2">
                                            <i class="ph-dribbble-logo text-pink ph-2x mb-1"></i>
                                            Dribbble
                                        </button>

                                        <button type="button" class="btn btn-dark w-100 flex-column border-white border-opacity-10 rounded-0 rounded-bottom-end py-2">
                                            <i class="ph-spotify-logo text-success ph-2x mb-1"></i>
                                            Spotify
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /dark buttons tile -->


                    <!-- Sub navigation -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Navigation</span>
                            <div class="ms-auto">
                                <a href="#sidebar-multilevel-nav" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-multilevel-nav">
                            <div class="sidebar-section-body p-0">
                                <ul class="nav nav-sidebar" data-nav-type="accordion">
                                    <li class="nav-item-header opacity-50 mt-2">Subtitle</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-pinterest-logo text-danger"></i>
                                            First level item #1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-dribbble-logo text-pink"></i>
                                            First level item #2
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-spotify-logo text-success"></i>
                                            First level item #3
                                            <span class="badge bg-success ms-auto">New</span>
                                        </a>
                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Second level item #1
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Second level item #2
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Second level item #3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-gitlab-logo text-warning"></i>
                                            First level item #4
                                            <span class="badge badge-danger badge-pill ml-auto">20</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-twitter-logo text-info"></i>
                                            First level item #5
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /sub navigation -->


                    <!-- Thumbnails -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Thumbnails</span>
                            <div class="ms-auto">
                                <a href="#sidebar-thumbnails" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-thumbnails">
                            <div class="sidebar-section-body">
                                <div class="mb-2">
                                    <div class="card-img-actions">
                                        <a href="{{URL::asset('assets/images/demo/images/1.png')}}" class="text-white" data-bs-popup="lightbox">
                                            <img class="img-thumbnail rounded img-fluid" src="{{URL::asset('assets/images/demo/images/1.png')}}" alt="">
                                            <span class="card-img-actions-overlay rounded">
                                                <i class="ph-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2">
                                            <div class="card-img-actions">
                                                <a href="{{URL::asset('assets/images/demo/images/2.png')}}" class="text-white" data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded" src="{{URL::asset('assets/images/demo/images/2.png')}}" alt="">
                                                    <span class="card-img-actions-overlay rounded">
                                                        <i class="ph-plus"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <div class="card-img-actions">
                                                <a href="{{URL::asset('assets/images/demo/images/3.png')}}" class="text-white" data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded" src="{{URL::asset('assets/images/demo/images/3.png')}}" alt="">
                                                    <span class="card-img-actions-overlay rounded">
                                                        <i class="ph-plus"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-2">
                                            <div class="card-img-actions">
                                                <a href="{{URL::asset('assets/images/demo/images/4.png')}}" class="text-white" data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded" src="{{URL::asset('assets/images/demo/images/4.png')}}" alt="">
                                                    <span class="card-img-actions-overlay rounded">
                                                        <i class="ph-plus"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <div class="card-img-actions">
                                                <a href="{{URL::asset('assets/images/demo/images/5.png')}}" class="text-white" data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded" src="{{URL::asset('assets/images/demo/images/5.png')}}" alt="">
                                                    <span class="card-img-actions-overlay rounded">
                                                        <i class="ph-plus"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /thumbnails -->


                    <!-- Thumbnail tiles -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Thumbnail tiles</span>
                            <div class="ms-auto">
                                <a href="#sidebar-thumbnail-tiles" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-thumbnail-tiles">
                            <div class="sidebar-section-body">
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/1.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-top-start" src="{{URL::asset('assets/images/demo/images/1.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-top-start">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/3.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-bottom-start" src="{{URL::asset('assets/images/demo/images/3.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-bottom-start">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/4.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-top-end" src="{{URL::asset('assets/images/demo/images/4.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-top-end">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/6.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-bottom-end" src="{{URL::asset('assets/images/demo/images/6.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-bottom-end">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/1.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-top-start" src="{{URL::asset('assets/images/demo/images/1.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-top-start">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/2.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid" src="{{URL::asset('assets/images/demo/images/2.png')}}" alt="">
                                                <span class="card-img-actions-overlay">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/3.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-bottom-start" src="{{URL::asset('assets/images/demo/images/3.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-bottom-start">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/4.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid" src="{{URL::asset('assets/images/demo/images/4.png')}}" alt="">
                                                <span class="card-img-actions-overlay">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/5.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid" src="{{URL::asset('assets/images/demo/images/5.png')}}" alt="">
                                                <span class="card-img-actions-overlay">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/6.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid" src="{{URL::asset('assets/images/demo/images/6.png')}}" alt="">
                                                <span class="card-img-actions-overlay">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/7.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-top-end" src="{{URL::asset('assets/images/demo/images/7.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-top-end">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/8.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid" src="{{URL::asset('assets/images/demo/images/8.png')}}" alt="">
                                                <span class="card-img-actions-overlay">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="card-img-actions">
                                            <a href="{{URL::asset('assets/images/demo/images/9.png')}}" class="text-white" data-bs-popup="lightbox">
                                                <img class="img-fluid rounded-bottom-end" src="{{URL::asset('assets/images/demo/images/9.png')}}" alt="">
                                                <span class="card-img-actions-overlay rounded-bottom-end">
                                                    <i class="ph-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /thumbnail tiles -->


                    <!-- Pickers -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Pickers</span>
                            <div class="ms-auto">
                                <a href="#sidebar-pickers" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-pickers">
                            <div class="sidebar-section-body">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Color picker:</label>
                                        <input type="text" class="form-control colorpicker-flat-full" data-preferred-format="hex" value="#45818e">
                                    </div>

                                    <div>
                                        <label class="form-label">Date picker:</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control datepicker-basic" placeholder="Pick a date&hellip;">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /pickers -->


                    <!-- Rounded buttons -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Rounded buttons</span>
                            <div class="ms-auto">
                                <a href="#sidebar-rounded-buttons" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-rounded-buttons">
                            <div class="sidebar-section-body text-center">
                                <div class="d-inline-flex">
                                    <a href="#" class="btn btn-info rounded-pill p-2">
                                        <i class="ph-twitter-logo"></i>
                                    </a>
                                    <a href="#" class="btn btn-pink rounded-pill p-2 ms-2">
                                        <i class="ph-dribbble-logo"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning rounded-pill p-2 ms-2">
                                        <i class="ph-gitlab-logo"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary rounded-pill p-2 ms-2">
                                        <i class="ph-telegram-logo"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /rounded buttons -->


                    <!-- Progress bars -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Progress bars</span>
                            <div class="ms-auto">
                                <a href="#sidebar-progress-bars" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-progress-bars">
                            <div class="sidebar-section-body">
                                <div class="mb-2">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <div class="progress" style="height: 0.875rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <div class="progress" style="height: 0.625rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <div class="progress" style="height: 0.375rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress" style="height: 0.125rem;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /progress bars -->


                    <!-- Collapsible -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Collapsible sections</span>
                            <div class="ms-auto">
                                <a href="#sidebar-collapsible-sections" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-collapsible-sections">
                            <div class="mb-3">
                                <div>
                                    <div class="sidebar-section-header bg-light border-bottom">
                                        <a class="text-body fw-semibold d-flex align-items-center flex-grow-1" data-bs-toggle="collapse" href="#collapsible-item-group1">
                                            Collapsible Item #1
                                            <i class="ph-caret-down collapsible-indicator ms-auto"></i>
                                        </a>
                                    </div>

                                    <div id="collapsible-item-group1" class="collapse show">
                                        <div class="sidebar-section-body border-bottom">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="sidebar-section-header bg-light border-bottom">
                                        <a class="collapsed text-body fw-semibold d-flex align-items-center flex-grow-1" data-bs-toggle="collapse" href="#collapsible-item-group2">
                                            Collapsible Item #2
                                            <i class="ph-caret-down collapsible-indicator ms-auto"></i>
                                        </a>
                                    </div>

                                    <div id="collapsible-item-group2" class="collapse">
                                        <div class="sidebar-section-body border-bottom">
                                            Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod 3 wolf moon.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="sidebar-section-header bg-light border-bottom">
                                        <a class="collapsed text-body fw-semibold d-flex align-items-center flex-grow-1" data-bs-toggle="collapse" href="#collapsible-item-group3">
                                            Collapsible Item #3
                                            <i class="ph-caret-down collapsible-indicator ms-auto"></i>
                                        </a>
                                    </div>

                                    <div id="collapsible-item-group3" class="collapse">
                                        <div class="sidebar-section-body border-bottom">
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /collapsible -->


                    <!-- Buttons -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Buttons</span>
                            <div class="ms-auto">
                                <a href="#sidebar-buttons" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-buttons">
                            <div class="sidebar-section-body text-center">
                                <div class="mb-2">
                                    <button type="button" class="btn btn-secondary w-100">Block button</button>
                                </div>

                                <div class="mb-2">
                                    <button type="button" class="btn btn-danger btn-labeled btn-labeled-start">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="ph-check-square-offset"></i>
                                        </span>
                                        Labeled button
                                    </button>
                                </div>

                                <div class="mb-2">
                                    <button type="button" class="btn btn-info">
                                        With icon
                                        <i class="ph-list ms-2"></i>
                                    </button>
                                </div>

                                <div class="mb-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">Button dropdown</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">One more separated line</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-icon">
                                            <i class="ph-link"></i>
                                        </button>
                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">One more separated line</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <button class="btn btn-warning rounded-pill" type="button">
                                        Rounded button
                                        <i class="ph-arrow-circle-right ms-2"></i>
                                    </button>
                                </div>

                                <div class="row">
                                    <div class="col"><button type="button" class="btn btn-teal w-100">Grid</button></div>
                                    <div class="col"><button type="button" class="btn btn-purple w-100">Buttons</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /buttons -->


                    <!-- Accordion -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Accordion</span>
                            <div class="ms-auto">
                                <a href="#sidebar-accordion" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-accordion">
                            <div class="accordion accordion-flush" id="accordion_expanded">
                                <div class="accordion-item">
                                    <h2 class="accordion-header bg-light">
                                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item1" aria-expanded="true">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="expanded_item1" class="accordion-collapse collapse show" data-bs-parent="#accordion_expanded" style="">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header bg-light">
                                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item2" aria-expanded="false">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                                        <div class="accordion-body">
                                            Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod 3 wolf moon.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header bg-light">
                                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item3" aria-expanded="false">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="expanded_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                                        <div class="accordion-body">
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /accordion -->

                </div>

                <div class="tab-pane fade" id="forms-tab">

                    <!-- Sidebar search -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Sidebar search</span>
                            <div class="ms-auto">
                                <a href="#sidebar-search" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-search">
                            <div class="sidebar-section-body">
                                <div class="form-control-feedback form-control-feedback-end">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /sidebar search -->


                    <!-- Default selects -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Default selects</span>
                            <div class="ms-auto">
                                <a href="#sidebar-selects-default" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-selects-default">
                            <div class="sidebar-section-body">
                                <div class="mb-3">
                                    <label class="form-label">Single select:</label>
                                    <select class="form-select">
                                        <option value="opt1">Regular select box</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="form-label">Multiple select:</label>
                                    <select multiple="multiple" class="form-control">
                                        <option selected>Amsterdam</option>
                                        <option selected>Atlanta</option>
                                        <option>Baltimore</option>
                                        <option>Boston</option>
                                        <option>Buenos Aires</option>
                                        <option>Calgary</option>
                                        <option selected>Chicago</option>
                                        <option>Denver</option>
                                        <option>Dubai</option>
                                        <option>Frankfurt</option>
                                        <option>Hong Kong</option>
                                        <option>Honolulu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /default selects -->


                    <!-- Select2 selects -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Select2 selects</span>
                            <div class="ms-auto">
                                <a href="#sidebar-selects-select2" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-selects-select2">
                            <div class="sidebar-section-body">
                                <div class="mb-3">
                                    <label class="form-label">Single Select:</label>
                                    <select class="form-control form-control-select2">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div>
                                    <label class="form-label">Multiple Select:</label>
                                    <select class="form-control form-control-select2" multiple="multiple">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI" selected>Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV" selected>Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /select2 selects -->


                    <!-- Multiselect -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Multiselect</span>
                            <div class="ms-auto">
                                <a href="#sidebar-selects-multi" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-selects-multi">
                            <div class="sidebar-section-body">
                                <div class="mb-3">
                                    <label class="form-label">Single select:</label>
                                    <select class="form-control form-control-multiselect">
                                        <option value="cheese">Cheese</option>
                                        <option value="tomatoes">Tomatoes</option>
                                        <option value="mozarella">Mozzarella</option>
                                        <option value="mushrooms">Mushrooms</option>
                                        <option value="pepperoni">Pepperoni</option>
                                        <option value="onions">Onions</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="form-label">Multiple select:</label>
                                    <select class="form-control form-control-multiselect" multiple="multiple">
                                        <option value="cheese">Cheese</option>
                                        <option value="tomatoes">Tomatoes</option>
                                        <option value="mozarella" selected>Mozzarella</option>
                                        <option value="mushrooms">Mushrooms</option>
                                        <option value="pepperoni">Pepperoni</option>
                                        <option value="onions" selected>Onions</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /multiselect -->


                    <!-- Left checkbox group -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Left checkbox group</span>
                            <div class="ms-auto">
                                <a href="#sidebar-checkbox-group-left" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-checkbox-group-left">
                            <div class="sidebar-section-body">
                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Janet Cook</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Michelle Brown</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Lauren Wood</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Michael Johnson</span>
                                </label>

                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Joseph Dixon</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /left checkbox group -->


                    <!-- Left radio group -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Left radio group</span>
                            <div class="ms-auto">
                                <a href="#sidebar-radio-group-left" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-radio-group-left">
                            <div class="sidebar-section-body">
                                <label class="form-check mb-2">
                                    <input type="radio" name="radio-group-left" class="form-check-input" checked>
                                    <span class="form-check-label">Elise Parkes</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="radio" name="radio-group-left" class="form-check-input">
                                    <span class="form-check-label">Sofia Fuller</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="radio" name="radio-group-left" class="form-check-input">
                                    <span class="form-check-label">Nicholas Blackburn</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="radio" name="radio-group-left" class="form-check-input">
                                    <span class="form-check-label">Max Brennan</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="radio" name="radio-group-left" class="form-check-input">
                                    <span class="form-check-label">Cameron Allan</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /left radio group -->


                    <!-- Right checkbox group -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Right checkbox group</span>
                            <div class="ms-auto">
                                <a href="#sidebar-checkbox-group-right" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-checkbox-group-right">
                            <div class="sidebar-section-body">
                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Chris Wallace</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Brittany Clark</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Michael Langer</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Jennifer Garcia</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Daniel Andersen</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /right checkbox group -->


                    <!-- Right radio group -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Right radio group</span>
                            <div class="ms-auto">
                                <a href="#sidebar-radio-group-right" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-radio-group-right">
                            <div class="sidebar-section-body">
                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="radio" name="radio-group-right" class="form-check-input" checked>
                                    <span class="form-check-label">Daisy Moods</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="radio" name="radio-group-right" class="form-check-input">
                                    <span class="form-check-label">Madeleine Bruce</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="radio" name="radio-group-right" class="form-check-input">
                                    <span class="form-check-label">David Patterson</span>
                                </label>

                                <label class="form-check form-check-reverse text-start mb-2">
                                    <input type="radio" name="radio-group-right" class="form-check-input">
                                    <span class="form-check-label">Bethany Hold</span>
                                </label>

                                <label class="form-check form-check-reverse text-start">
                                    <input type="radio" name="radio-group-right" class="form-check-input">
                                    <span class="form-check-label">Eleanor Charltons</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /right radio group -->


                    <!-- File inputs -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">File inputs</span>
                            <div class="ms-auto">
                                <a href="#sidebar-inputs-file" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-inputs-file">
                            <div class="sidebar-section-body">
                                <div class="mb-3">
                                    <label class="form-label">Styled file input:</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div>
                                    <label class="form-label">Default file input:</label>
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /file inputs -->


                    <!-- Input groups -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Input groups</span>
                            <div class="ms-auto">
                                <a href="#sidebar-inputs-groups" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-inputs-groups">
                            <div class="sidebar-section-body">
                                <div class="mb-3">
                                    <label class="form-label">Input group with text:</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="ph-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Input group">
                                    </div>
                                </div>

                                <div>
                                    <label class="form-label">Input group with button:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input group">
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-gear"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">One more separated line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /input groups -->


                    <!-- Switch group -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Switch group</span>
                            <div class="ms-auto">
                                <a href="#sidebar-inputs-switch" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-inputs-switch">
                            <div class="sidebar-section-body">
                                <label class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Free People</span>
                                </label>

                                <label class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">GAP</span>
                                </label>

                                <label class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Lane Bryant</span>
                                </label>

                                <label class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Ralph Lauren</span>
                                </label>

                                <label class="form-check form-switch form-check-reverse text-start">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Liz Claiborne</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /switch group -->


                    <!-- Form sample -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Form example</span>
                            <div class="ms-auto">
                                <a href="#sidebar-form" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-form">
                            <div class="sidebar-section-body">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Your name:</label>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Your password:</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Your message:</label>
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <button type="reset" class="btn btn-light w-100">Reset</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /form sample -->

                </div>

                <div class="tab-pane fade" id="other-tab">

                    <!-- Collapsed section -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Collapsed section</span>
                            <div class="ms-auto">
                                <a href="#sidebar-section-collapsed" class="text-reset collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="sidebar-section-collapsed">
                            <div class="sidebar-section-body">
                                <ul class="list mb-0 ps-3">
                                    <li>It wasn't actually a dream</li>
                                    <li>A collection of textile samples</li>
                                    <li>I've got the money together</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /collapsed section -->


                    <!-- Closable section -->
                    <div class="sidebar-section collapse show" id="sidebar-section-close">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Closable section</span>
                            <div class="ms-auto">
                                <a href="#sidebar-section-close" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-x"></i>
                                </a>
                            </div>
                        </div>

                        <div class="sidebar-section-body">
                            <ul class="list mb-0 pl-3">
                                <li>It wasn't actually a dream</li>
                                <li>A collection of textile samples</li>
                                <li>I've got the money together</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /closable section -->


                    <!-- Sortable section -->
                    <div class="sidebar-section sidebar-section-sortable">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Sortable section</span>
                            <div class="ms-auto">
                                <i class="ph-arrows-out-cardinal cursor-move" data-section-action="sort"></i>
                            </div>
                        </div>

                        <div class="sidebar-section-body">
                            <ul class="list mb-0 pl-3">
                                <li>I've got the money together</li>
                                <li>That's definitely what I'll do</li>
                                <li>What should he do now?</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sortable section -->


                    <!-- Updatable section -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Sortable section</span>
                            <div class="ms-auto">
                                <a href="#" class="text-reset" data-section-action="reload">
                                    <i class="ph-arrows-clockwise"></i>
                                </a>
                            </div>
                        </div>

                        <div class="sidebar-section-body">
                            <ul class="list mb-0 pl-3">
                                <li>A collection of textile samples</li>
                                <li>I've got the money together</li>
                                <li>That's definitely what I'll do</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /updatable section -->


                    <!-- Combined controls -->
                    <div class="sidebar-section sidebar-section-sortable collapse show" id="sidebar-section-controls-combined">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Combined controls</span>
                            <div class="d-inline-flex ms-auto">
                                <a href="#sidebar-action-combined-collapse" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                                <a href="#" class="text-reset ms-2" data-section-action="reload">
                                    <i class="ph-arrows-clockwise"></i>
                                </a>
                                <div class="ms-2">
                                    <i class="ph-arrows-out-cardinal cursor-move" data-section-action="sort"></i>
                                </div>
                                <a href="#sidebar-section-controls-combined" class="text-reset ms-2" data-bs-toggle="collapse">
                                    <i class="ph-x"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-action-combined-collapse">
                            <div class="sidebar-section-body">
                                <ul class="list mb-0 pl-3">
                                    <li>That's definitely what I'll do</li>
                                    <li>What should he do now?</li>
                                    <li>A collection of textile samples</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /combined controls -->


                    <!-- Dual listbox -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Dual listbox</span>
                            <div class="ms-auto">
                                <a href="#sidebar-dual-listbox" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-dual-listbox">
                            <div class="sidebar-section-body">
                                <select multiple class="form-control listbox-basic">
                                    <option value="option1" selected>Classical mechanics</option>
                                    <option value="option2">Electromagnetism</option>
                                    <option value="option4">Relativity</option>
                                    <option value="option5" selected>Quantum mechanics</option>
                                    <option value="option7">Astrophysics</option>
                                    <option value="option8" selected>Biophysics</option>
                                    <option value="option9">Chemical physics</option>
                                    <option value="option10">Econophysics</option>
                                    <option value="option11">Geophysics</option>
                                    <option value="option12">Medical physics</option>
                                    <option value="option13">Physical chemistry</option>
                                    <option value="option14" selected>Continuum mechanics</option>
                                    <option value="option15">Electrodynamics</option>
                                    <option value="option16" selected>Quantum field theory</option>
                                    <option value="option17">Scattering theory</option>
                                    <option value="option18" selected>Chaos theory</option>
                                    <option value="option19" selected>Newton's laws of motion</option>
                                    <option value="option20">Thermodynamics</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /dual listbox -->


                    <!-- Progress list -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Progress list</span>
                            <div class="ms-auto">
                                <a href="#sidebar-progress-list" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-progress-list">
                            <div class="sidebar-section-body">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center mb-1">CPU usage <span class="opacity-50 ms-auto">50%</span></div>
                                    <div class="progress" style="height: 0.125rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center mb-1">RAM usage <span class="opacity-50 ms-auto">70%</span></div>
                                    <div class="progress" style="height: 0.125rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center mb-1">Disc space <span class="opacity-50 ms-auto">80%</span></div>
                                    <div class="progress" style="height: 0.125rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="d-flex align-items-center mb-1">Bandwidth <span class="opacity-50 ms-auto">60%</span></div>
                                    <div class="progress" style="height: 0.125rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /progress list -->


                    <!-- Horizontal sliders -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Horizontal sliders</span>
                            <div class="ms-auto">
                                <a href="#sidebar-sliders-horizontal" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-sliders-horizontal">
                            <div class="sidebar-section-body">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Default slider</label>
                                        <div class="noui-height-helper" id="noui-slider-range"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Range slider</label>
                                        <div class="noui-height-helper" id="noui-slider-behaviour"></div>
                                    </div>

                                    <div>
                                        <label class="form-label">Slider with pips</label>
                                        <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-range"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /horizontal sliders -->


                    <!-- Vertical sliders -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Vertical sliders</span>
                            <div class="ms-auto">
                                <a href="#sidebar-sliders-vertical" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-sliders-vertical">
                            <div class="sidebar-section-body text-center">
                                <div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-bottom1"></div>
                                <div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-bottom2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /vertical sliders -->


                    <!-- Dynamic tree -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Dynamic tree</span>
                            <div class="ms-auto">
                                <a href="#sidebar-dynamic-tree" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-dynamic-tree">
                            <div class="sidebar-section-body tree-default">
                                <ul class="d-none mb-0">
                                    <li class="folder expanded">Expanded folder
                                        <ul>
                                            <li class="expanded">Expanded sub-item
                                                <ul>
                                                    <li class="active focused">Active sub-item</li>
                                                    <li>Basicmenu item</li>
                                                </ul>
                                            </li>
                                            <li>Collapsed sub-item
                                                <ul>
                                                    <li>Sub-item 2.2.1</li>
                                                    <li>Sub-item 2.2.2</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Menu item</li>
                                    <li class="folder">Collapsed folder
                                        <ul>
                                            <li>Sub-item 1.1</li>
                                            <li>Sub-item 1.2</li>
                                        </ul>
                                    </li>
                                    <li class="selected">This is a selected item</li>
                                    <li class="expanded">Document with children
                                        <ul>
                                            <li>Document sub-item</li>
                                            <li>Another sub-item
                                                <ul>
                                                    <li>Sub-item 2.1.1</li>
                                                    <li>Sub-item 2.1.2</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /dynamic tree -->

                </div>

                <div class="tab-pane fade" id="custom-tab">

                    <!-- User block -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">User block</span>
                            <div class="ms-auto">
                                <a href="#sidebar-user" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-user">
                            <div class="sidebar-section-body">
                                <div class="d-flex justify-content-center">
                                    <a href="#">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                    </a>

                                    <div class="flex-fill sidebar-resize-hide ms-3">
                                        <div class="fw-semibold">Victoria Baker</div>
                                        <div class="fs-sm lh-1 opacity-50 mt-1">
                                            Senior developer
                                        </div>
                                    </div>

                                    <div class="ms-3 align-self-center sidebar-resize-hide">
                                        <button type="button" class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-secondary-toggle d-none d-lg-inline-flex">
                                            <i class="ph-arrows-left-right"></i>
                                        </button>

                                        <button type="button" class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-secondary-toggle d-lg-none">
                                            <i class="ph-x"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user block -->


                    <!-- User list -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Media list</span>
                            <div class="ms-auto">
                                <a href="#sidebar-list-media" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-list-media">
                            <div class="sidebar-section-body">
                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>
                                    <div class="flex-fill">
                                        <a href="#" class="fw-semibold">James Alexander</a>
                                        <div class="fs-sm text-muted">Santa Ana, CA.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="bg-success border-success rounded-pill p-1"></div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>
                                    <div class="flex-fill">
                                        <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                        <div class="fs-sm text-muted">Dowagiac, MI.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="bg-danger border-danger rounded-pill p-1"></div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>
                                    <div class="flex-fill">
                                        <a href="#" class="fw-semibold">Margo Baker</a>
                                        <div class="fs-sm text-muted">Kasaan, AK.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="bg-success border-success rounded-pill p-1"></div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>
                                    <div class="flex-fill">
                                        <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                        <div class="fs-sm text-muted">Neenah, WI.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="bg-warning border-warning rounded-pill p-1"></div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>
                                    <div class="flex-fill">
                                        <a href="#" class="fw-semibold">Richard Vango</a>
                                        <div class="fs-sm text-muted">Grapevine, TX.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="bg-secondary border-secondary rounded-pill p-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user list -->


                    <!-- Linked media list -->
                    <div class="sidebar-section mb-2">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Linked media list</span>
                            <div class="ms-auto">
                                <a href="#sidebar-list-media-linked" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-list-media-linked">
                            <div class="list-group list-group-borderless py-1">
                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold">Will Baker</span>
                                        <div class="fs-sm text-muted">Santa Ana, CA.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="badge badge-mark bg-success border-success"></div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold">Joseph Mills</span>
                                        <div class="fs-sm text-muted">Dowagiac, MI.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="badge badge-mark bg-danger border-danger"></div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold">Buzz Brenson</span>
                                        <div class="fs-sm text-muted">Kasaan, AK.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="badge badge-mark bg-success border-success"></div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold">Zachary Willson</span>
                                        <div class="fs-sm text-muted">Neenah, WI.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="badge badge-mark bg-warning border-warning"></div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold">Bastian Miller</span>
                                        <div class="fs-sm text-muted">Grapevine, TX.</div>
                                    </div>
                                    <div class="ms-3 align-self-center">
                                        <div class="badge badge-mark bg-secondary border-secondary"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /linked media list -->


                    <!-- Linked multiline list -->
                    <div class="sidebar-section mb-2">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Linked multiline list</span>
                            <div class="ms-auto">
                                <a href="#sidebar-list-media-linked-multiline" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-list-media-linked-multiline">
                            <div class="list-group list-group-borderless py-1">
                                <a href="#" class="list-group-item list-group-item-action d-flex">
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

                                <a href="#" class="list-group-item list-group-item-action d-flex">
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

                                <a href="#" class="list-group-item list-group-item-action d-flex">
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

                                <a href="#" class="list-group-item list-group-item-action d-flex">
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

                                <a href="#" class="list-group-item list-group-item-action d-flex">
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
                    </div>
                    <!-- /linked multiline list -->


                    <!-- Action link -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Action links</span>
                            <div class="ms-auto">
                                <a href="#sidebar-list-actions" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-list-actions">
                            <div class="sidebar-section-body">
                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>

                                    <div class="flex-fill fw-medium">
                                        Victoria Mongerini
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chats"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="me-3 position-relative">
                                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                        <span class="badge bg-warning position-absolute top-0 start-100 translate-middle rounded-pill">8</span>
                                    </a>

                                    <div class="flex-fill fw-medium">
                                        Sarah Clifferson
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chats"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>

                                    <div class="flex-fill fw-medium">
                                        Shane Brigger
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chats"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>

                                    <div class="flex-fill fw-medium">
                                        Aaron Statement
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chats"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                    </a>

                                    <div class="flex-fill fw-medium">
                                        Jeff Stickson
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chats"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /action link -->


                    <!-- Action dropdown -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Action dropdown</span>
                            <div class="ms-auto">
                                <a href="#sidebar-list-action-menu" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-list-action-menu">
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
                    </div>
                    <!-- /action dropdown -->


                    <!-- Feed with icons -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-header border-bottom">
                            <span class="fw-semibold">Feed with icons</span>
                            <div class="ms-auto">
                                <a href="#sidebar-feed" class="text-reset" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse show" id="sidebar-feed">
                            <div class="sidebar-section-body">
                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                            <i class="ph-git-pull-request"></i>
                                        </div>
                                    </div>

                                    <div class="flex-fill">
                                        Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                        <div class="fs-sm opacity-50">4 minutes ago</div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2">
                                            <i class="ph-git-commit"></i>
                                        </div>
                                    </div>

                                    <div class="flex-fill">
                                        Add full font overrides for popovers and tooltips
                                        <div class="fs-sm opacity-50">36 minutes ago</div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="bg-info bg-opacity-10 text-info lh-1 rounded-pill p-2">
                                            <i class="ph-git-branch"></i>
                                        </div>
                                    </div>

                                    <div class="flex-fill">
                                        <a href="#">Chris Arney</a> created a new <span class="fw-semibold">Design</span> branch
                                        <div class="fs-sm opacity-50">2 hours ago</div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                            <i class="ph-git-merge"></i>
                                        </div>
                                    </div>

                                    <div class="flex-fill">
                                        <a href="#">Eugene Kopyov</a> merged <span class="fw-semibold">Master</span> and <span class="fw-semibold">Dev</span> branches
                                        <div class="fs-sm opacity-50">Dec 18, 18:36</div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                            <i class="ph-git-pull-request"></i>
                                        </div>
                                    </div>

                                    <div class="flex-fill">
                                        Have Carousel ignore keyboard events
                                        <div class="fs-sm opacity-50">Dec 12, 05:46</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /feed with icons -->

                </div>
            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /secondary sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @component('components.breadcrumb')
                @slot('title') Sidebars @endslot
                @slot('subtitle') Components @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Info alert -->
                    <div class="alert alert-success alert-dismissible">
                        <div class="alert-heading fw-semibold">Sidebar components</div>
                        This page contains a major part of components, adapted for usage in the sidebar: form components, navigation, UI components, plugins and custom widgets.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <!-- /info alert -->


                    <!-- Sidebars overview -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Sidebars overview</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Sidebar - vertical area that displays onscreen and presents widget components and website navigation menu in a text-based hierarchical form. All sidebars are css-driven - just add one of css classes to the <code>.sidebar</code> container, and sidebar will change its width and color. No js, css only. Although sidebar type is based on css, buttons do their job with JS - they switch necessary classes in <code>.sidebar</code> container. Below you'll find summarized tables with all available <code>button</code> and <code>sidebar</code> container classes. By default, the template includes 6 different sidebar types and combinations:</p>

                            <div class="mb-3">
                                <h6>1. Default sidebar</h6>
                                <p>Default template sidebar has <code>300px</code> (~18.75rem) width, aligned to the left (to the right in RTL version) and has dark blue background color. All navigation levels are based on accordion <strong>or</strong> collapsible functionality, open on click. Supports 2 versions: fixed (default) and static (in static layout only). Both versions use default browser scrollbars, but support custom scrollbars such as <code>perfect scrollbar</code> component.</p>
                            </div>

                            <div class="mb-3">
                                <h6>2. Mini sidebar</h6>
                                <p>Mini sidebar has <code>56px</code> width, which is calculated dynamically (icon size + double padding). No text in parent level of menu items, aligned to the left (to the right in RTL version) and has dark blue background color. Sidebar changes the width on hover, no additional changes. It is <strong>required</strong> to add <code>.sidebar-main-resized</code> class to the <code>.sidebar</code> container if you want to have it collapsed by default. This class is responsible for sidebar width and main navigation. By default all components except main navigation are hidden in mini sidebar. Can be used with main sidebar only.</p>
                            </div>

                            <div class="mb-3">
                                <h6>3. Secondary sidebar</h6>
                                <p>Main sidebar has <code>300px</code> width or <code>56px</code> (if <code>.sidebar-main-resized</code> class added). Secondary sidebar has the same fixed width of <code>300px</code>, which is similar to default and right sidebars, so different sidebar components can be placed to all sidebar types. Main and secondary sidebars can contain any content - menu, navigation, buttons, lists, tabs etc. Secondary sidebar can be either collapsed or hidden.</p>
                            </div>

                            <div class="mb-3">
                                <h6>4. Right sidebar</h6>
                                <p>Right sidebar layout includes additional sidebar displayed on the right (left in RTL direction) side. It is displayed as an additional component with 100% height, similar to other sidebars. Right sidebar is visible by default, but can be collapsed or hidden.</p>
                            </div>

                            <div class="mb-3">
                                <h6>5. Right/Secondary sidebars</h6>
                                <p>Secondary and Right sidebars can be used together, so basically it is a 4 column layout. The width of any sidebar doesn't affect other layout columns, they all have independent width controls. Refer to the table below for more information.</p>
                            </div>

                            <div class="mb-3">
                                <h6>6. Content (component) sidebar</h6>
                                <p>Usually sidebar is not a part of content and mainly used for navigation. Limitless allows you to use sidebar outside and inside content area. Content sidebar isn't based on grid and has the same width as other sidebars, this means all sidebar components can be placed inside content sidebar. Supports left and right positioning and can be either stretched to fill all available height or height that depends on sidebar content height.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /sidebars overview -->


                    <!-- Button classes -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Button classes</h5>
                        </div>

                        <div class="card-body">
                            <h6>Overview</h6>
                            <p class="mb-3">This table displays all optional <code>button</code> classes, responsible for the sidebar appearance. Depending on the sidebar type, add one of these classes to any button or link and this element will handle sidebar control. Multiple controls are also available - add as many sidebar controls as you wish. Please note: these classes don't change sidebar markup, only CSS rules.</p>
                            <div class="table-responsive border rounded mb-4">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0" style="width: 300px;">Button class</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>.sidebar-main-resize</code></td>
                                            <td>Resizable sidebar. Changes main sidebar width from default to mini. This button is added to all pages by default.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main-toggle</code></td>
                                            <td>Collapses/expands and/or hides/shows <code>main</code> sidebar. Used mostly in dual sidebar type to hide main sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-end-toggle</code></td>
                                            <td>Toggles right sidebar - if right sidebar is shown, main sidebar width remains the same, whether it's in default or mini mode.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-secondary-toggle</code></td>
                                            <td>Hides/shows or collapses/expands <code>secondary</code> sidebar. Secondary sidebar supports only toggle functionality and always has fixed width of <code>300px</code>.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-component-toggle</code></td>
                                            <td>Hides/shows <code>content</code> sidebars. Content sidebars aren't connected with other sidebars, so this is the only button that controls their visibility.</td>
                                        </tr>
                                        <tr class="border-top-width-2">
                                            <td><code>.sidebar-mobile-main-toggle</code></td>
                                            <td>Toggles <code>main</code> sidebar on mobile - slides from left to right.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-mobile-secondary-toggle</code></td>
                                            <td>Toggles <code>secondary</code> sidebar on mobile - slides from left to right.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-mobile-end-toggle</code></td>
                                            <td>Toggles <code>right</code> sidebar on mobile - slides from right to left.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-mobile-component-toggle</code></td>
                                            <td>Toggles <code>content</code> sidebar on mobile - has full width by default, has no animation.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h6>Example Markup</h6>
                            <p>Default placement of sidebar control buttons is sidebar header:</p>
                            <pre class="language-markup mb-3" data-line="13-19">
								<code>
									&lt;!-- Main sidebar -->
									&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

										&lt;!-- Sidebar content -->
										&lt;div class="sidebar-content">

											&lt;!-- Header -->
											&lt;div class="sidebar-section">
												&lt;div class="sidebar-section-body d-flex justify-content-center">
													&lt;h6 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation&lt;/h6>

													&lt;div>
														&lt;button type="button" class="[button classes]">
															&lt;i class="ph-arrows-left-right">&lt;/i>
														&lt;/button>

														&lt;button type="button" class="[button classes]">
															&lt;i class="ph-x">&lt;/i>
														&lt;/button>
													&lt;/div>
												&lt;/div>
											&lt;/div>
											&lt;!-- /header -->

											[other content]

										&lt;/div>
										&lt;!-- /sidebar content -->

									&lt;/div>
									&lt;!-- /main sidebar -->
								</code>
							</pre>

                            <p>Here is an example of button inside navbar:</p>
                            <pre class="language-markup" data-line="7-9">
								<code>
									&lt;!-- Navbar placement -->
									&lt;div class="navbar navbar-expand navbar-dark">
										&lt;div class="navbar-brand">...&lt;/div>

										&lt;ul class="navbar-nav">
											&lt;li class="nav-item">
												&lt;a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle">
													&lt;i class="ph-arrows-left-right">&lt;/i>
												&lt;/a>
											&lt;/li>
											...
										&lt;/ul>
									&lt;/div>
									&lt;!-- /navbar placement -->
								</code>
							</pre>
                        </div>
                    </div>
                    <!-- /button classes -->


                    <!-- Sidebar classes -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Sidebar classes</h5>
                        </div>

                        <div class="card-body">
                            <h6>Overview</h6>
                            <p class="mb-3">This table demonstrates all classes for <code>sidebar</code> container, responsible for the sidebar width and color. Almost all of these classes are mandatory, some of them are responsible for proper styling or have a specific code attached to this class (like <code>.sidebar-main</code> class, which has collapsible functionality). All classes can be combined depending on the type of sidebar:</p>
                            <div class="table-responsive border rounded mb-4">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0" style="width: 300px">Body class</th>
                                            <th class="border-top-0">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>.sidebar</code></td>
                                            <td>Default sidebar class, should be added in all layout types.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main</code></td>
                                            <td>Defines <strong>main</strong> sidebar. Mini sidebar (<code>.sidebar-main-resized</code> class) takes effect only if sidebar has <code>.sidebar-main</code> class. By default, all components except main navigation are hidden in mini sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main-resized</code></td>
                                            <td>Defines <strong>main</strong> sidebar in <code>collapsed</code> state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-secondary</code></td>
                                            <td>Defines <strong>secondary</strong> sidebar. Has fixed <code>270px</code> width and usually comes after main sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-secondary-collapsed</code></td>
                                            <td>Defines <strong>secondary</strong> sidebar in <code>collapsed</code> state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-end</code></td>
                                            <td>Defines <strong>right</strong> sidebar. Has fixed <code>270px</code> width and appears on the right side from the main sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-end-collapsed</code></td>
                                            <td>Defines <strong>right</strong> sidebar in <code>collapsed</code> state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-component</code></td>
                                            <td>This class is required in <strong>content</strong> (or component) sidebar. Also requires <code>.sidebar-component-left</code> or <code>.sidebar-component-right</code> classes for proper spacing.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-component-collapsed</code></td>
                                            <td>Defines <strong>content</strong> sidebar in collapsed state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-dark</code></td>
                                            <td>Defines <strong>dark</strong> sidebar. This class can be applied to all sidebar types and positions. This class is also required for custom colors (see below).</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-dark.bg-*</code></td>
                                            <td>Defines sidebar background color. According to the custom color system, sidebar background color can be changed to one of the available colors by adding a proper class to the main sidebar container.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-expand-[breakpoint]</code></td>
                                            <td>This class specifies when sidebar needs to be collapsed, basically when sidebar switches to mobile mode. Breakpoint should always be similar to <strong>navbar</strong> breakpoint for proper matching. Available breakpoints are: xl, lg, md and sm. This class is required.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main-unfold</code></td>
                                            <td>This class gets added when user hovers on mini sidebar. It controls resizable behaviour when main sidebar is collapsed. Has no effect on mobile since all sidebars on mobile have same width.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h6>Example Markup</h6>
                            <p>Default left aligned sidebar markup:</p>
                            <pre class="language-markup mb-3" data-line="15">
								<code>
									&lt;!-- Default sidebar layout -->
									&lt;body>

										&lt;!-- Navbar -->
										&lt;div class="navbar navbar-dark navbar-expand-lg">
											...
										&lt;/div>
										&lt;!-- /navbar -->


										&lt;!-- Page container -->
										&lt;div class="page-content">

											&lt;!-- Main sidebar -->
											&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
												&lt;div class="sidebar-content">
													...
												&lt;/div>
											&lt;/div>
											&lt;!-- /main sidebar -->

											&lt;!-- Main content -->
											&lt;div class="content-wrapper">
												...
											&lt;/div>
											&lt;!-- /main content -->

										&lt;/div>
										&lt;!-- /page content -->

									&lt;/body>
									&lt;!-- /default sidebar layout -->
								</code>
							</pre>

                            <p>Mini sidebar markup. The only difference is <code>.sidebar-main-resized</code> class:</p>
                            <pre class="language-markup" data-line="15">
								<code>
									&lt;!-- Mini sidebar layout -->
									&lt;body>

										&lt;!-- Navbar -->
										&lt;div class="navbar navbar-dark navbar-expand-lg">
											...
										&lt;/div>
										&lt;!-- /navbar -->


										&lt;!-- Page container -->
										&lt;div class="page-content">

											&lt;!-- Main sidebar -->
											&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized">
												&lt;div class="sidebar-content">
													...
												&lt;/div>
											&lt;/div>
											&lt;!-- /main sidebar -->

											&lt;!-- Main content -->
											&lt;div class="content-wrapper">
												...
											&lt;/div>
											&lt;!-- /main content -->

										&lt;/div>
										&lt;!-- /page content -->

									&lt;/body>
									&lt;!-- /mini sidebar layout -->
								</code>
							</pre>
                        </div>
                    </div>
                    <!-- /sidebar classes -->

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
