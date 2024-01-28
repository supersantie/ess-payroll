@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') User Pages @endslot
@slot('subtitle') User Pages @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Square thumbs -->
    <div class="mb-3">
        <h6 class="mb-0">Square thumbs</h6>
        <span class="text-muted">Basic style using <code>card</code> component</span>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
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
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
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
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
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
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
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
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <h6 class="mb-0">Hanna Dorman</h6>
                    <span class="text-muted">UX/UI designer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <h6 class="mb-0">Benjamin Loretti</h6>
                    <span class="text-muted">Network engineer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <h6 class="mb-0">Vanessa Aurelius</h6>
                    <span class="text-muted">Front end guru</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <h6 class="mb-0">William Brenson</h6>
                    <span class="text-muted">Chief officer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                            <i class="ph-microsoft-teams-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /square thumbs -->


    <!-- Rounded thumbs -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Rounded thumbs</h6>
        <span class="text-muted">Responsive rounded thumbs</span>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="170" height="170" alt="">
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
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="170" height="170" alt="">
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
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="170" height="170" alt="">
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
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="170" height="170" alt="">
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
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Hanna Dorman</h6>
                    <span class="text-muted">UX/UI designer</span>
                </div>

                <a href="#" class="d-inline-block mb-3">
                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-pill" width="150" height="150" alt="">
                </a>

                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                        <i class="ph-dribbble-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                        <i class="ph-twitter-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                        <i class="ph-microsoft-teams-logo"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Benjamin Loretti</h6>
                    <span class="text-muted">Network engineer</span>
                </div>

                <a href="#" class="d-inline-block mb-3">
                    <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" class="rounded-pill" width="150" height="150" alt="">
                </a>

                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                        <i class="ph-dribbble-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                        <i class="ph-twitter-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                        <i class="ph-microsoft-teams-logo"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Vanessa Aurelius</h6>
                    <span class="text-muted">Front end guru</span>
                </div>

                <a href="#" class="d-inline-block mb-3">
                    <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-pill" width="150" height="150" alt="">
                </a>

                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                        <i class="ph-dribbble-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                        <i class="ph-twitter-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                        <i class="ph-microsoft-teams-logo"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">William Brenson</h6>
                    <span class="text-muted">Chief officer</span>
                </div>

                <a href="#" class="d-inline-block mb-3">
                    <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-pill" width="150" height="150" alt="">
                </a>

                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
                        <i class="ph-dribbble-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
                        <i class="ph-twitter-logo"></i>
                    </a>
                    <a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
                        <i class="ph-microsoft-teams-logo"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card bg-secondary text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="170" height="170" alt="">
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
                    <span class="opacity-75">Lead developer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
                            <i class="ph-google-logo"></i>
                        </a>
                        <a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
                            <i class="ph-github-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card bg-pink text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="170" height="170" alt="">
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
                    <span class="opacity-75">Lead UX designer</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
                            <i class="ph-google-logo"></i>
                        </a>
                        <a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
                            <i class="ph-github-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card bg-indigo text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="170" height="170" alt="">
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
                    <span class="opacity-75">Sales manager</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
                            <i class="ph-google-logo"></i>
                        </a>
                        <a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
                            <i class="ph-github-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card bg-teal text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="170" height="170" alt="">
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
                    <span class="opacity-75">SEO specialist</span>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
                            <i class="ph-google-logo"></i>
                        </a>
                        <a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
                            <i class="ph-github-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /rounded thumbs-->


    <!-- Horizontal cards -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Horizontal cards</h6>
        <span class="text-muted">User cards in horizontal direction</span>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <div class="fw-semibold">James Alexander</div>
                        <span class="text-muted">Lead developer</span>
                    </div>

                    <div class="ms-3 align-self-center">
                        <div class="bg-success rounded-circle p-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <div class="fw-semibold">Nathan Jacobson</div>
                        <span class="text-muted">Lead UX designer</span>
                    </div>

                    <div class="ms-3 align-self-center">
                        <div class="bg-warning rounded-circle p-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <div class="fw-semibold">Margo Baker</div>
                        <span class="text-muted">Sales manager</span>
                    </div>

                    <div class="ms-3 align-self-center">
                        <div class="bg-secondary rounded-circle p-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <div class="fw-semibold">Barbara Walden</div>
                        <span class="text-muted">SEO specialist</span>
                    </div>

                    <div class="ms-3 align-self-center">
                        <div class="bg-primary rounded-circle p-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6">
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

        <div class="col-xl-3 col-lg-6">
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

        <div class="col-xl-3 col-lg-6">
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

        <div class="col-xl-3 col-lg-6">
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
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <div class="flex-fill">
                        <div class="fw-semibold">James Alexander</div>
                        <span class="text-muted">Lead developer</span>
                    </div>

                    <a href="#" class="ms-3">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <div class="flex-fill">
                        <div class="fw-semibold">Nathan Jacobson</div>
                        <span class="text-muted">Lead UX designer</span>
                    </div>

                    <a href="#" class="ms-3">
                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <div class="flex-fill">
                        <div class="fw-semibold">Margo Baker</div>
                        <span class="text-muted">Sales manager</span>
                    </div>

                    <a href="#" class="ms-3">
                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <div class="flex-fill">
                        <div class="fw-semibold">Barbara Walden</div>
                        <span class="text-muted">SEO specialist</span>
                    </div>

                    <a href="#" class="ms-3">
                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-1">Hanna Dorman</h6>
                        <div class="d-flex">
                            <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                                <i class="ph-dribbble-logo"></i>
                            </a>
                            <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                                <i class="ph-twitter-logo"></i>
                            </a>
                            <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
                                <i class="ph-microsoft-teams-logo"></i>
                            </a>
                        </div>
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

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-1">Benjamin Loretti</h6>
                        <div class="d-flex">
                            <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                                <i class="ph-dribbble-logo"></i>
                            </a>
                            <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                                <i class="ph-twitter-logo"></i>
                            </a>
                            <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
                                <i class="ph-microsoft-teams-logo"></i>
                            </a>
                        </div>
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

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-1">Vanessa Aurelius</h6>
                        <div class="d-flex">
                            <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                                <i class="ph-dribbble-logo"></i>
                            </a>
                            <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                                <i class="ph-twitter-logo"></i>
                            </a>
                            <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
                                <i class="ph-microsoft-teams-logo"></i>
                            </a>
                        </div>
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

        <div class="col-xl-3 col-lg-6">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-1">William Brenson</h6>
                        <div class="d-flex">
                            <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                                <i class="ph-dribbble-logo"></i>
                            </a>
                            <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                                <i class="ph-twitter-logo"></i>
                            </a>
                            <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
                                <i class="ph-microsoft-teams-logo"></i>
                            </a>
                        </div>
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
    <!-- /horizontal cards -->

</div>
<!-- /content area -->

@endsection
