@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Search @endslot
@slot('subtitle') Users @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Search field -->
    <div class="card">
        <form action="#" class="card-body d-sm-flex">
            <div class="form-control-feedback form-control-feedback-start flex-grow-1 mb-3 mb-sm-0">
                <input type="text" class="form-control" value="Limitless interface kit" placeholder="Search">
                <div class="form-control-feedback-icon">
                    <i class="ph-magnifying-glass"></i>
                </div>
            </div>

            <div class="ms-sm-3">
                <select class="form-select wmin-sm-200 mb-3 mb-sm-0">
                    <option value="1">Getting started</option>
                    <option value="2">Registration</option>
                    <option value="3">General info</option>
                    <option value="4">Your settings</option>
                    <option value="5">Copyrights</option>
                    <option value="6">Contacting sellers</option>
                </select>
            </div>

            <div class="ms-sm-3">
                <button type="submit" class="btn btn-primary w-100 w-sm-auto">Search</button>
            </div>
        </form>
    </div>
    <!-- /search field -->


    <!-- Tabs -->
    <div class="nav-tabs-responsive mb-3">
        <ul class="nav nav-tabs nav-tabs-underline">
            <li class="nav-item">
                <a href="search_basic" class="nav-link">
                    <i class="ph-monitor me-2"></i>
                    Website
                </a>
            </li>
            <li class="nav-item">
                <a href="search_users" class="nav-link active">
                    <i class="ph-users-three me-2"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a href="search_images" class="nav-link">
                    <i class="ph-image me-2"></i>
                    Images
                </a>
            </li>
            <li class="nav-item">
                <a href="search_videos" class="nav-link">
                    <i class="ph-monitor-play me-2"></i>
                    Videos
                </a>
            </li>
            <li class="nav-item ms-lg-auto">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-boundary="body">
                    <i class="ph-gear me-2"></i>
                    Options
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- /tabs -->


    <!-- Vertical cards view -->
    <div class="pt-2 mb-3">
        <h6 class="mb-0">Vertical cards view</h6>
        <span class="text-muted">User cards with vertical stack of components</span>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face1.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">James Alexander</h6>
                    <span class="text-muted">Lead developer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face2.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Nathan Jacobson</h6>
                    <span class="text-muted">Lead UX designer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face3.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Margo Baker</h6>
                    <span class="text-muted">Sales manager</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face4.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Barbara Walden</h6>
                    <span class="text-muted">SEO specialist</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face11.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Hanna Dorman</h6>
                    <span class="text-muted">UX/UI designer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face14.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Benjamin Loretti</h6>
                    <span class="text-muted">Network engineer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face13.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Vanessa Aurelius</h6>
                    <span class="text-muted">Front end guru</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face8.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">William Brenson</h6>
                    <span class="text-muted">Chief officer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face6.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Lucy North</h6>
                    <span class="text-muted">PHP developer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face16.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Vicky Barna</h6>
                    <span class="text-muted">UI designer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face25.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Hugo Bills</h6>
                    <span class="text-muted">Sales manager</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face22.jpg')}}" width="170" height="170" alt="">
                        <div class="card-img-actions-overlay card-img rounded-circle">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h6 class="mb-0">Tony Gurrano</h6>
                    <span class="text-muted">CEO and founder</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /vertical cards view -->


    <!-- Horizontal cards view -->
    <div class="pt-2 mb-3">
        <h6 class="mb-0">Horizontal cards view</h6>
        <span class="text-muted">User cards with horizontal components</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Hanna Dorman</h6>
                        <span class="text-muted">UX/UI designer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Benjamin Loretti</h6>
                        <span class="text-muted">Network engineer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Vanessa Aurelius</h6>
                        <span class="text-muted">Front end guru</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">James Alexander</h6>
                        <span class="text-muted">Lead developer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Nathan Jacobson</h6>
                        <span class="text-muted">Lead UX designer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Margo Baker</h6>
                        <span class="text-muted">Sales manager</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Barbara Walden</h6>
                        <span class="text-muted">SEO specialist</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">William Brenson</h6>
                        <span class="text-muted">Chief officer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Lucy North</h6>
                        <span class="text-muted">PHP developer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Vicky Barna</h6>
                        <span class="text-muted">UI designer</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Hugo Bills</h6>
                        <span class="text-muted">Sales manager</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face22.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">Tony Gurrano</h6>
                        <span class="text-muted">CEO and founder</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /horizontal cards view -->


    <!-- List view -->
    <div class="pt-2 mb-3">
        <h6 class="mb-0">List view</h6>
        <span class="text-muted">Single card with rows</span>
    </div>

    <div class="card">
        <div class="list-group list-group-borderless py-2">
            <div class="list-group-item fw-semibold">Team leaders</div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-success"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">James Alexander</div>
                    <span class="text-muted">Development</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-success"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Jeremy Victorino</div>
                    <span class="text-muted">Finances</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-danger"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Margo Baker</div>
                    <span class="text-muted">Marketing</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-secondary"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Monica Smith</div>
                    <span class="text-muted">Design</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item fw-semibold">Office staff</div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-success"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Bastian Miller</div>
                    <span class="text-muted">Web dev</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-warning"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Jordana Mills</div>
                    <span class="text-muted">Sales consultant</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-danger"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Buzz Brenson</div>
                    <span class="text-muted">UX expert</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-danger"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Zachary Willson</div>
                    <span class="text-muted">Illustrator</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-danger"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">William Miles</div>
                    <span class="text-muted">SEO expert</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item fw-semibold">Partners</div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-warning"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Freddy Walden</div>
                    <span class="text-muted">Microsoft</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-success"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Dori Laperriere</div>
                    <span class="text-muted">Google</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>

            <div class="list-group-item hstack gap-3">
                <a href="#" class="status-indicator-container">
                    <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                    <span class="status-indicator bg-success"></span>
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Vanessa Aurelius</div>
                    <span class="text-muted">Facebook</span>
                </div>

                <div class="hstack gap-2">
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                        <i class="ph-phone"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                        <i class="ph-chats"></i>
                    </a>
                    <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                        <i class="ph-video-camera"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /list view -->


    <!-- Pagination -->
    <div class="d-flex justify-content-center pt-2 mb-2">
        <ul class="pagination pagination-flat">
            <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link rounded-pill">1</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">2</a></li>
            <li class="page-item align-self-center"><span class="mx-2">...</span></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">58</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">59</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-right"></i></a></li>
        </ul>
    </div>
    <!-- /pagination -->

</div>
<!-- /content area -->

@endsection
