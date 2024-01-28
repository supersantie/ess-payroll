@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Page Header @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Page header styling -->
    <div class="mb-3">
        <h6 class="mb-0">
            Header styling
        </h6>
        <span class="text-muted d-block">Page header colors and basic styles</span>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="page-header border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-muted mt-1">Transparent header</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <button class="btn btn-primary btn-icon btn-sm">
                            <i class="ph-gear"></i>
                        </button>
                    </div>
                </div>

                <div class="page-header-content d-md-flex flex-md-wrap border-top">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>

                        <a href="#bc_color_transparent" class="d-flex align-items-center text-body d-md-none py-2 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-circle-down"></i>
                        </a>
                    </div>

                    <div class="collapse d-md-block ms-md-auto" id="bc_color_transparent">
                        <div class="dropdown ms-md-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <span class="flex-1">Actions</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-md-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-muted mt-1">Header with light background</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <button class="btn btn-primary btn-icon btn-sm">
                            <i class="ph-gear"></i>
                        </button>
                    </div>
                </div>

                <div class="page-header-content d-md-flex flex-md-wrap border-top">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>

                        <a href="#bc_color_light" class="d-flex align-items-center text-body d-md-none py-2 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-circle-down"></i>
                        </a>
                    </div>

                    <div class="collapse d-md-block ms-md-auto" id="bc_color_light">
                        <div class="dropdown ms-md-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <span class="flex-1">Actions</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-md-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="page-header page-header-dark text-white rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-reset opacity-50 mt-1">Header with dark background</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <button class="btn btn-primary btn-icon btn-sm">
                            <i class="ph-gear"></i>
                        </button>
                    </div>
                </div>

                <div class="page-header-content d-md-flex flex-md-wrap border-top border-top-white border-opacity-20">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index" class="breadcrumb-item text-reset py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item text-reset py-2">Current</a>
                            <span class="breadcrumb-item text-reset opacity-50 active py-2">Location</span>
                        </div>

                        <a href="#bc_color_dark" class="d-flex align-items-center text-body d-md-none py-2 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-circle-down"></i>
                        </a>
                    </div>

                    <div class="collapse d-md-block ms-md-auto" id="bc_color_dark">
                        <div class="dropdown ms-md-3">
                            <a href="#" class="d-flex align-items-center text-reset dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <span class="flex-1">Actions</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-md-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-dark bg-indigo text-white rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-reset text-opacity-50 mt-1">Header with dark background</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <button class="btn btn-dark btn-icon btn-sm">
                            <i class="ph-gear"></i>
                        </button>
                    </div>
                </div>

                <div class="page-header-content d-md-flex flex-md-wrap border-top border-top-white border-opacity-20">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index" class="breadcrumb-item text-reset py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item text-reset py-2">Current</a>
                            <span class="breadcrumb-item text-reset opacity-50 active py-2">Location</span>
                        </div>

                        <a href="#bc_color_custom" class="d-flex align-items-center text-body d-md-none py-2 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-circle-down"></i>
                        </a>
                    </div>

                    <div class="collapse d-md-block ms-md-auto" id="bc_color_custom">
                        <div class="dropdown ms-md-3">
                            <a href="#" class="d-flex align-items-center text-reset dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <span class="flex-1">Actions</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-md-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header styling -->



    <!-- Page header subtitles title -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Header subtitles
        </h6>
        <span class="text-muted d-block">Page title and subtitle options</span>
    </div>
    <!-- /page header subtitles title -->


    <!-- Page header subtitles -->
    <div class="row">
        <div class="col-xl-6">
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex align-items-baseline flex-wrap">
                        <h5 class="mb-0">Page title</h5>
                        <span class="page-subtitle text-muted">Inline subtitle</span>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5 class="mb-0">Page title</h5>
                        <div class="text-muted mt-1">Inline subtitle</div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-arrow-circle-left me-2"></i>
                            <h5 class="mb-0">Page title with icon</h5>
                        </div>
                        <span class="page-subtitle d-inline-block align-text-bottom text-muted">Inline subtitle</span>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <i class="ph-arrow-circle-left lh-lg me-2"></i>
                        <div>
                            <h5 class="mb-0">Page title with icon</h5>
                            <div class="text-muted mt-1">Block subtitle</div>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header subtitles -->



    <!-- Optional borders title -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Optional borders
        </h6>
        <span class="text-muted d-block">Control horizontal border style in page header</span>
    </div>
    <!-- /optional borders title -->


    <!-- Page header borders -->
    <div class="row">
        <div class="col-xl-6">
            <div class="page-header page-header-light border border-bottom-primary rounded-top mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5 class="mb-0">Page title</h5>
                        <div class="text-muted mt-1">Custom bottom border color</div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border border-bottom-primary border-bottom-width-2 rounded-top mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5 class="mb-0">Page title</h5>
                        <div class="text-muted mt-1">Custom bottom border width</div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5 class="mb-0">Page title</h5>
                        <div class="text-muted mt-1">Custom content border</div>
                    </div>
                </div>

                <div class="page-header-content border-top border-top-primary">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5 class="mb-0">Page title</h5>
                        <div class="text-muted mt-1">Custom content border width</div>
                    </div>
                </div>

                <div class="page-header-content border-top border-top-primary border-top-width-2">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header borders -->



    <!-- Title sizing title -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Page title sizing
        </h6>
        <span class="text-muted d-block">Usage of <code>headings</code> in page title</span>
    </div>
    <!-- /title sizing title -->


    <!-- Page title sizing -->
    <div class="row">
        <div class="col-xl-6">
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <h1 class="mb-0">
                            H1 <span class="fw-normal">heading</span>
                            <small class="page-subtitle text-muted">H1 subtitle</small>
                        </h1>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <h3 class="mb-0">
                            H3 <span class="fw-normal">heading</span>
                            <small class="page-subtitle text-muted">H3 subtitle</small>
                        </h3>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <h5 class="mb-0">
                            H5 <span class="fw-normal">heading</span>
                            <small class="page-subtitle text-muted">H5 subtitle</small>
                        </h5>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <h2 class="mb-0">
                            H2 <span class="fw-normal">heading</span>
                            <small class="page-subtitle text-muted">H2 subtitle</small>
                        </h2>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <h4 class="mb-0">
                            H4 <span class="fw-normal">heading</span>
                            <small class="page-subtitle text-muted">H4 subtitle</small>
                        </h4>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>

            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title d-flex flex-wrap">
                        <h6 class="mb-0">
                            H6 <span class="fw-normal">heading</span>
                            <small class="page-subtitle text-muted">H6 subtitle</small>
                        </h6>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page title sizing -->



    <!-- Page header elements -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Header elements
        </h6>
        <span class="text-muted d-block">Example of components that page header supports</span>
    </div>

    <div class="row">
        <div class="col-xl-6">

            <!-- Basic button -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page Header</h5>
                        <div class="text-muted mt-1">Basic button, supports all styles and sizes</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <button type="button" class="btn btn-primary">Button</button>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /basic button -->


            <!-- Icon button -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page Header</h5>
                        <div class="text-muted mt-1">Icon button, supports all styles and sizes</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <button type="button" class="btn btn-teal btn-icon">
                            <i class="ph-download"></i>
                        </button>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /icon button -->


            <!-- Button with dropdown -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page Header</h5>
                        <div class="text-muted mt-1">Icon button with dropdown menu</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <div class="btn-group">
                            <button class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <div class="divider"></div>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /button with dropdown -->


            <!-- Float buttons -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Float icon buttons</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_floating_buttons">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_floating_buttons">
                        <div class="d-flex mb-3 mb-lg-0">
                            <a href="#" class="btn btn-success rounded-pill p-2">
                                <i class="ph-whatsapp-logo ph-lg"></i>
                            </a>
                            <a href="#" class="btn btn-danger rounded-pill p-2 mx-2">
                                <i class="ph-youtube-logo ph-lg"></i>
                            </a>
                            <a href="#" class="btn btn-info rounded-pill p-2">
                                <i class="ph-twitter-logo ph-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /float buttons -->


            <!-- Text input -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Text input field</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_text_input">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_text_input">
                        <form action="#" class="mb-3 mb-lg-0">
                            <input type="text" class="form-control wmin-lg-200" placeholder="Search">
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /text input -->


            <!-- Input with left icon -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Text input field with left icon</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_text_input_left_icon">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_text_input_left_icon">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control wmin-lg-200" placeholder="Search">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /input with left icon -->


            <!-- Input group -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Input group with text or icon</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_ig_icon">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_ig_icon">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="input-group wmin-lg-200">
                                <span class="input-group-text px-2">
                                    <i class="ph-lock"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Enter your password">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /input group -->


            <!-- Single select -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Single select</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_select">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_select">
                        <form action="#" class="mb-3 mb-lg-0">
                            <select name="select" class="form-select wmin-lg-200">
                                <option value="opt1">Select an option</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /single select -->


            <!-- Select2 select -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Single select2 select</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_select2">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_select2">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="wmin-lg-200">
                                <select name="select" class="form-control-select2">
                                    <option value="opt1">Select an option</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /select2 select -->


            <!-- Right toggle -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Form switch, right alignment</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_switch_right">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_switch_right">
                        <form action="#" class="mb-3 mb-lg-0">
                            <label class="form-check form-switch form-check-reverse mb-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Right toggle</span>
                            </label>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /right toggle -->


            <!-- Right checkboxes -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Form checkbox, right alignment</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_checkbox_right">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_checkbox_right">
                        <form action="#" class="mb-3 mb-lg-0">
                            <label class="form-check form-check-inline form-check-reverse mb-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Checked</span>
                            </label>
                            <label class="form-check form-check-inline form-check-reverse mb-0 me-0">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Unchecked</span>
                            </label>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /right checkboxes -->


            <!-- Right radios  -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Form radios, right alignment</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_radio_right">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_radio_right">
                        <form action="#" class="mb-3 mb-lg-0">
                            <label class="form-check form-check-inline form-check-reverse mb-0">
                                <input type="radio" class="form-check-input" name="page-header-radios" checked>
                                <span class="form-check-label">Checked</span>
                            </label>
                            <label class="form-check form-check-inline form-check-reverse mb-0 me-0">
                                <input type="radio" class="form-check-input" name="page-header-radios">
                                <span class="form-check-label">Unchecked</span>
                            </label>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /right radios -->


            <!-- Progress bar -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Progress bar, supports all sizes and styles</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_progress_bar">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_progress_bar">
                        <div class="progress wmin-lg-200 mb-3 mb-lg-0">
                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /progress bar -->


            <!-- Inline elements -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Inline text, links and badges</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_inline_text">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_inline_text">
                        <div class="mb-3 mb-lg-0">
                            <span>Plain text, <a href="#">link</a>, <span class="badge bg-danger">Badge</span> or <span class="badge bg-primary rounded-pill">89</span> pill</span>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /inline elements -->


            <!-- Image group -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Image and image group</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_inline_images">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_inline_images">
                        <div class="mb-3 mb-lg-0">
                            <div class="hstack gap-1 d-inline-flex align-items-center ms-lg-3">
                                <a href="#">
                                    <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /image group -->

        </div>

        <div class="col-xl-6">

            <!-- Button with dropdown -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page Header</h5>
                        <div class="text-muted mt-1">Button with dropdown menu</div>
                    </div>

                    <div class="btn-group my-auto ms-auto">
                        <button class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">Menu</button>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="divider"></div>
                            <a href="#" class="dropdown-item">One more line</a>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /button with dropdown -->


            <!-- Segmented button -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page Header</h5>
                        <div class="text-muted mt-1">Segmented button</div>
                    </div>

                    <div class="btn-group my-auto ms-auto">
                        <button class="btn btn-indigo">Button</button>

                        <button class="btn btn-indigo dropdown-toggle" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more line</a>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /segmented button -->


            <!-- Labeled button -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page Header</h5>
                        <div class="text-muted mt-1">Outline button</div>
                    </div>

                    <div class="btn-group my-auto ms-auto">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="ph-gear me-2"></i>
                            Button
                        </button>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /labeled button -->


            <!-- Float buttons with text -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Float buttons with text</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_floating_buttons_text">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_floating_buttons_text">
                        <div class="d-flex mb-3 mb-lg-0">
                            <a href="#" class="btn btn-success flex-column">
                                <i class="ph-whatsapp-logo ph-lg mb-1"></i>
                                Whatsapp
                            </a>
                            <a href="#" class="btn btn-danger flex-column mx-2">
                                <i class="ph-youtube-logo ph-lg mb-1"></i>
                                Youtube
                            </a>
                            <a href="#" class="btn btn-info flex-column">
                                <i class="ph-twitter-logo ph-lg mb-1"></i>
                                Twitter
                            </a>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /float buttons with text -->


            <!-- Input with spinner -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Text input field with spinner</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_text_input_spinner">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_text_input_spinner">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control wmin-lg-200" placeholder="Search">
                                <div class="form-control-feedback-icon">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /input with spinner -->


            <!-- Input with right icon -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Text input field with right icon</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_text_input_right_icon">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_text_input_right_icon">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="form-control-feedback form-control-feedback-end">
                                <input type="text" class="form-control wmin-lg-200" placeholder="Search">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /input with right icon -->


            <!-- Input group with button -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Input group with button</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_ig_button">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_ig_button">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="input-group wmin-lg-200">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="button" class="btn btn-light btn-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /input group with button -->


            <!-- Multiselect -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Dropdown menu with checkboxes</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_multiselect">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_multiselect">
                        <form action="#" class="mb-3 mb-lg-0">
                            <div class="wmin-lg-200">
                                <select class="form-control form-control-multiselect" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /multiselect -->


            <!-- Styled file input -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">File input</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_file_input">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_file_input">
                        <form action="#" class="mb-3 mb-lg-0">
                            <input type="file" class="form-control wmin-lg-200" placeholder="Search">
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /styled file input -->


            <!-- Left toggle -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Form switch, left alignment</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_switch_left">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_switch_left">
                        <form action="#" class="mb-3 mb-lg-0">
                            <label class="form-check form-switch mb-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Left toggle</span>
                            </label>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /left toggle -->


            <!-- Left checkboxes -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Form checkbox, left alignment</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_checkbox_left">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_checkbox_left">
                        <form action="#" class="mb-3 mb-lg-0">
                            <label class="form-check form-check-inline mb-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Checked</span>
                            </label>
                            <label class="form-check form-check-inline mb-0 me-0">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Unchecked</span>
                            </label>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /left checkboxes -->


            <!-- Left radios -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Form radios, left alignment</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_radio_left">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_radio_left">
                        <form action="#" class="mb-3 mb-lg-0">
                            <label class="form-check form-check-inline mb-0">
                                <input type="radio" class="form-check-input" name="page-header-radios-left" checked>
                                <span class="form-check-label">Checked</span>
                            </label>
                            <label class="form-check form-check-inline mb-0 me-0">
                                <input type="radio" class="form-check-input" name="page-header-radios-left">
                                <span class="form-check-label">Unchecked</span>
                            </label>
                        </form>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /left radios -->


            <!-- Basic daterange picker -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Basic daterange picker</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_daterange">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_daterange">
                        <div class="mb-3 mb-lg-0">
                            <button type="button" class="btn btn-light daterange-ranges dropdown-toggle">
                                <i class="ph-calendar me-2"></i>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /basic daterange picker -->


            <!-- Inline list with dropdown -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Linked inline list</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_list_inline">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_list_inline">
                        <ul class="list-inline mb-3 mb-lg-0">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-calendar-check me-1"></i>
                                    Schedule
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-chat-text me-1"></i>
                                    Chat
                                </a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">One more line</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /inline list with dropdown -->


            <!-- Simple content with icon -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Inline content with icon</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_list_content">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_list_content">
                        <span class="d-flex align-items-center mb-3 mb-lg-0">
                            <div class="spinner-border me-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            Processing...
                        </span>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /simple content with icon -->

        </div>
    </div>
    <!-- /page header elements -->


    <!-- Mobile view options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Mobile view options
        </h6>
        <span class="text-muted d-block">Control header elements appearance on mobile devices</span>
    </div>

    <div class="row">
        <div class="col-xl-6">

            <!-- No header elements -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-muted mt-1">No header elements</div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /no header elements -->


            <!-- Stackable on mobile -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-muted mt-1">Stackable on mobile</div>
                    </div>

                    <div class="my-auto ms-auto">
                        <div class="mb-3 mb-lg-0">
                            I'm stacked on mobile
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /stackable on mobile -->

        </div>

        <div class="col-xl-6">

            <!-- Inline on mobile -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-flex">
                    <div class="page-title">
                        <h5 class="mb-0">Page header</h5>
                        <div class="text-muted mt-1">Inline on mobile</div>
                    </div>

                    <div class="my-auto ms-auto">
                        I'm not stackable
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /inline on mobile -->


            <!-- Collapsible on mobile -->
            <div class="page-header page-header-light border rounded mb-3">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <div class="page-title">
                            <h5 class="mb-0">Page header</h5>
                            <div class="text-muted mt-1">Collapsible on mobile</div>
                        </div>

                        <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#ph_collapse_mobile">
                            <i class="ph-caret-circle-down"></i>
                        </button>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="ph_collapse_mobile">
                        <div class="mb-3 mb-lg-0">
                            I'm stacked and collapsed
                        </div>
                    </div>
                </div>

                <div class="page-header-content border-top">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item py-2">Home</a>
                        <a href="#" class="breadcrumb-item py-2">Current</a>
                        <span class="breadcrumb-item active py-2">Location</span>
                    </div>
                </div>
            </div>
            <!-- /collapsible on mobile -->

        </div>
    </div>
    <!-- /mobile view options -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/pickers/daterangepicker.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/content_page_header.js')}}"></script>
@endsection
