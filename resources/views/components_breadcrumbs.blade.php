@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Breadcrumbs @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Breadcrumb placement title -->
    <div class="mb-3">
        <h6 class="mb-0">
            Breadcrumb location
        </h6>
        <span class="text-muted d-block">Various location and alignment options</span>
    </div>
    <!-- /breadcrumb placement title -->


    <!-- Inside page title -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex">
            <div class="page-title">
                <h5 class="mb-0">
                    Header - <span class="fw-normal">Breadcrumb</span>
                </h5>
                <div class="text-muted">Basic breadcrumb inside page header</div>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="breadcrumb">
                    <a href="index" class="breadcrumb-item">Home</a>
                    <a href="#" class="breadcrumb-item">Components</a>
                    <span class="breadcrumb-item active">Breadcrumbs</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /inside page title -->


    <!-- Top full width position -->
    <div class="card">
        <div class="page-header">
            <div class="page-header-content d-lg-flex flex-lg-wrap border-bottom">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item py-2">Components</a>
                        <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                    </div>

                    <a href="#bc_top_full" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-circle-down"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="bc_top_full">
                    <div class="d-lg-flex">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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

            <div class="page-header-content d-lg-flex flex-lg-wrap">
                <div class="page-title">
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Top Full Width</span>
                    </h5>
                    <div class="text-muted">Top position - placed before page header content</div>
                </div>

                <div class="mb-3 my-lg-auto ms-lg-auto">
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="search" class="form-control" placeholder="Search">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /top full width position -->


    <!-- Top transparent -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex flex-lg-wrap">
            <div class="pt-3">
                <div class="breadcrumb">
                    <a href="index" class="breadcrumb-item">Home</a>
                    <a href="#" class="breadcrumb-item">Components</a>
                    <span class="breadcrumb-item active">Breadcrumb</span>
                </div>

                <div class="page-title">
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Top Transparent</span>
                    </h5>
                    <div class="text-muted">No border, background color and bigger padding</div>
                </div>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /top transparent -->


    <!-- Top component -->
    <div class="card">
        <div class="page-header page-header-content pt-3">
            <div class="card flex-lg-row flex-lg-wrap px-3 mb-0">
                <div class="d-flex flex-1">
                    <div class="breadcrumb">
                        <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item py-2">Components</a>
                        <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                    </div>

                    <a href="#bc_top_component" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-circle-down"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="bc_top_component">
                    <div class="d-lg-flex">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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

            <div class="d-lg-flex flex-lg-wrap">
                <div class="page-title">
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Top Component</span>
                    </h5>
                    <div class="text-muted">Breadcrumb as a component</div>
                </div>

                <div class="mb-3 my-lg-auto ms-lg-auto">
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="search" class="form-control" placeholder="Search">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /top component -->


    <!-- Bottom full width position -->
    <div class="card">
        <div class="page-header">
            <div class="page-header-content d-lg-flex flex-lg-wrap">
                <div class="page-title">
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Bottom Full Width</span>
                    </h5>
                    <div class="text-muted">Default bottom position</div>
                </div>

                <div class="mb-3 my-lg-auto ms-lg-auto">
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="search" class="form-control" placeholder="Search">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item py-2">Components</a>
                        <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                    </div>

                    <a href="#bc_bottom_full" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-circle-down"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="bc_bottom_full">
                    <div class="d-lg-flex">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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
    <!-- /bottom full width position -->


    <!-- Bottom transparent -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex flex-lg-wrap">
            <div class="pb-3">
                <div class="page-title">
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Bottom Transparent</span>
                    </h5>
                    <div class="text-muted">No border, background color and bigger padding</div>
                </div>

                <div class="breadcrumb">
                    <a href="index" class="breadcrumb-item">Home</a>
                    <a href="#" class="breadcrumb-item">Components</a>
                    <span class="breadcrumb-item active">Breadcrumb</span>
                </div>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bottom transparent -->


    <!-- Bottom component -->
    <div class="card">
        <div class="page-header page-header-content pb-3">
            <div class="d-lg-flex flex-lg-wrap">
                <div class="page-title">
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Bottom Component</span>
                    </h5>
                    <div class="text-muted">Breadcrumb as a component</div>
                </div>

                <div class="mb-3 my-lg-auto ms-lg-auto">
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="search" class="form-control" placeholder="Search">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card flex-lg-row flex-lg-wrap px-3 mb-0">
                <div class="d-flex flex-1">
                    <div class="breadcrumb">
                        <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item py-2">Components</a>
                        <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                    </div>

                    <a href="#bc_bottom_component" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-circle-down"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="bc_bottom_component">
                    <div class="d-lg-flex">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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
    <!-- /bottom component -->



    <!-- Breadcrumb inside title -->
    <div class="mb-3 pt-3">
        <h6 class="mb-0">
            Page title breadcrumb
        </h6>
        <span class="text-muted d-block">Above or below page title</span>
    </div>
    <!-- /breadcrumb inside title -->


    <!-- Above page title -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex flex-lg-wrap">
            <div class="page-title">
                <div class="breadcrumb mb-1">
                    <a href="index" class="breadcrumb-item">Home</a>
                    <a href="#" class="breadcrumb-item">Components</a>
                    <span class="breadcrumb-item active">Breadcrumbs</span>
                </div>

                <h5 class="mb-0">
                    Breadcrumb - <span class="fw-normal">Top Condensed</span>
                </h5>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /above page title -->


    <!-- Above page title with spacing -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex flex-lg-wrap">
            <div class="page-title d-flex">
                <i class="ph-arrow-circle-left align-self-end lh-lg me-2"></i>
                <div>
                    <div class="breadcrumb mb-1">
                        <a href="index" class="breadcrumb-item">Home</a>
                        <a href="#" class="breadcrumb-item">Components</a>
                        <span class="breadcrumb-item active">Breadcrumbs</span>
                    </div>

                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Top Condensed Spaced</span>
                    </h5>
                </div>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /above page title with spacing -->


    <!-- Below page title -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex flex-lg-wrap">
            <div class="page-title">
                <h5 class="mb-0">
                    Breadcrumb - <span class="fw-normal">Bottom Condensed</span>
                </h5>

                <div class="breadcrumb mt-1">
                    <a href="index" class="breadcrumb-item">Home</a>
                    <a href="#" class="breadcrumb-item">Components</a>
                    <span class="breadcrumb-item active">Breadcrumbs</span>
                </div>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /below page title -->


    <!-- Below page title with spacing -->
    <div class="card">
        <div class="page-header page-header-content d-lg-flex flex-lg-wrap">
            <div class="page-title d-flex">
                <i class="ph-arrow-circle-left lh-lg me-2"></i>
                <div>
                    <h5 class="mb-0">
                        Breadcrumb - <span class="fw-normal">Bottom Condensed Spaced</span>
                    </h5>

                    <div class="breadcrumb mt-1">
                        <a href="index" class="breadcrumb-item">Home</a>
                        <a href="#" class="breadcrumb-item">Components</a>
                        <span class="breadcrumb-item active">Breadcrumbs</span>
                    </div>
                </div>
            </div>

            <div class="mb-3 my-lg-auto ms-lg-auto">
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /below page title with spacing -->



    <!-- Breacrumb component -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Breadcrumb component
        </h6>
        <span class="text-muted d-block">Use breadcrumb as a stand alone component</span>
    </div>

    <div class="card flex-lg-row flex-lg-wrap px-3">
        <div class="d-flex flex-1">
            <div class="breadcrumb">
                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                <a href="#" class="breadcrumb-item py-2">Components</a>
                <span class="breadcrumb-item active py-2">Breadcrumbs</span>
            </div>

            <a href="#bc_component" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-circle-down"></i>
            </a>
        </div>

        <div class="collapse d-lg-block ms-lg-auto" id="bc_component">
            <div class="d-lg-flex">
                <a href="#" class="d-flex align-items-center text-body py-2">
                    <i class="ph-lifebuoy me-2"></i>
                    Support
                </a>

                <div class="dropdown ms-lg-3">
                    <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                        <i class="ph-gear me-2"></i>
                        <span class="flex-1">Settings</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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
    <!-- /breacrumb component -->


    <!-- Breadcrumb options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Breadcrumb options
        </h6>
        <span class="text-muted d-block">Optional styling and elements</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Default breadcrumb styling</div>
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

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Display helper text</div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb">
                            <span class="fs-sm text-uppercase text-muted align-self-center lh-1 me-2">You are here:</span>
                            <a href="#" class="breadcrumb-item py-2">Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb list with <code>home</code> icon only</div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house"></i></a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb list with icons</div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-folders me-2"></i> Current</a>
                            <span class="breadcrumb-item active py-2"><i class="ph-file me-2"></i> Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb with icons only and a <code>tooltip</code></div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house" data-bs-popup="tooltip" title="Home"></i></a>
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-folders" data-bs-popup="tooltip" title="Level 2"></i></a>
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-file-search" data-bs-popup="tooltip" title="Level 3"></i></a>
                            <span class="breadcrumb-item active py-2"><i class="ph-file" data-bs-popup="tooltip" title="Level 4"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Dash divider using <code>.breadcrumb-dash</code></div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Arrows divider using <code>.breadcrumb-arrows</code></div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb breadcrumb-arrows">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Caret divider using <code>.breadcrumb-caret</code></div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb breadcrumb-caret">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Arrow divider using <code>.breadcrumb-arrow</code></div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb breadcrumb-arrow">
                            <a href="#" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Current</a>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Links with dropdown menu</div>
                        </div>
                    </div>

                    <div class="page-header-content border-top">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item dropdown">
                                <a href="#" class="breadcrumb-item dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <i class="ph-house me-2"></i>
                                    Home
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Default dashboard</a>
                                    <a href="#" class="dropdown-item">Statistics dashboard</a>
                                    <a href="#" class="dropdown-item">Ecommerce dashboard</a>
                                </div>
                            </div>
                            <div class="breadcrumb-item dropdown">
                                <a href="#" class="breadcrumb-item dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    Forms
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">General components</a>
                                    <div class="dropdown-submenu">
                                        <a href="#" class="dropdown-item">Selects</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Select2 selects</a>
                                            <a href="#" class="dropdown-item">Bootstrap multiselect</a>
                                            <a href="#" class="dropdown-item">SelectBoxIt selects</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Advanced components</a>
                                </div>
                            </div>
                            <span class="breadcrumb-item active py-2">Location</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb options -->


    <!-- Breacrumb elements -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Breadcrumb elements
        </h6>
        <span class="text-muted d-block">Various elements that can be displayed in breadcrumb line</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb line with single button</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_single_button" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_single_button">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                Single button
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Single button with icon</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_single_button_icon_left" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_single_button_icon_left">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <i class="ph-gear me-2"></i>
                                Left icon
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Single button with icon</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_single_button_icon_right" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_single_button_icon_right">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <span class="flex-1">Right icon</span>
                                <i class="ph-gear ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Single button with icon only</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_single_button_icon_only" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_single_button_icon_only">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <i class="ph-gear"></i>
                                <span class="d-lg-none ms-2">Button</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb line with button group</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_button_group" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_button_group">
                            <div class="d-lg-flex">
                                <a href="#" class="d-flex align-items-center text-body py-2">
                                    First
                                </a>

                                <a href="#" class="d-flex align-items-center text-body py-2 ms-lg-3">
                                    Second
                                </a>

                                <div class="dropdown ms-lg-3">
                                    <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                        <span class="flex-1">Third</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                        <a href="#" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            Something else
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            One more action
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb line with button dropdown</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_button_dropdown" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_button_dropdown">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <span class="flex-1">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Button dropdown with icon and caret</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_icon_text_button_dropdown" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_icon_text_button_dropdown">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    <span class="flex-1">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">With single icon button dropdown</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_icon_button_dropdown" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_icon_button_dropdown">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                    <span class="flex-1 d-lg-none ms-2">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Button group with icons only</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_icon_button_group" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_icon_button_group">
                            <div class="d-lg-flex">
                                <a href="#" class="d-flex align-items-center text-body py-2">
                                    <i class="ph-folders"></i>
                                    <span class="d-lg-none ms-2">First</span>
                                </a>

                                <a href="#" class="d-flex align-items-center text-body py-2 ms-lg-3">
                                    <i class="ph-files"></i>
                                    <span class="d-lg-none ms-2">Second</span>
                                </a>

                                <div class="dropdown ms-lg-3">
                                    <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                        <i class="ph-circles-four"></i>
                                        <span class="flex-1 d-lg-none ms-2">Third</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                        <a href="#" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            Something else
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            One more action
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Breadcrumb line buttons with badge</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_single_button" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_single_button">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <span class="flex-1">Button with badge</span>
                                <span class="badge bg-primary rounded-pill align-self-center ms-2">6</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /breacrumb elements -->


    <!-- Breacrumb colors -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Breadcrumb colors
        </h6>
        <span class="text-muted d-block">Light and solid color options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content bg-secondary bg-opacity-10 d-lg-flex flex-lg-wrap border-bottom rounded-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_top_light" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_top_light">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <span class="flex-1">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Top breadcrumb with light background</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content bg-secondary d-lg-flex flex-lg-wrap rounded-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item text-white py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item text-white py-2">Current</a>
                                <span class="breadcrumb-item text-white text-opacity-75 active py-2">Location</span>
                            </div>

                            <a href="#bc_top_solid" class="d-flex align-items-center text-white d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_top_solid">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-white dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <span class="flex-1">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Top breadcrumb with solid background</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Bottom breadcrumb with light background</div>
                        </div>
                    </div>

                    <div class="page-header-content bg-secondary bg-opacity-10 d-lg-flex flex-lg-wrap border-top rounded-bottom">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Current</a>
                                <span class="breadcrumb-item active py-2">Location</span>
                            </div>

                            <a href="#bc_bottom_light" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_bottom_light">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <span class="flex-1">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Bottom breadcrumb with solid background</div>
                        </div>
                    </div>

                    <div class="page-header-content bg-secondary d-lg-flex flex-lg-wrap rounded-bottom">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item text-white py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item text-white py-2">Current</a>
                                <span class="breadcrumb-item text-white text-opacity-75 active py-2">Location</span>
                            </div>

                            <a href="#bc_bottom_solid" class="d-flex align-items-center text-white d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_bottom_solid">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-white dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <span class="flex-1">Menu</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /breacrumb colors -->


    <!-- Responsive options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Responsive options
        </h6>
        <span class="text-muted d-block">How things are displayed on mobile</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">No elements</div>
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

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Collapsible elements</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                                <a href="#" class="breadcrumb-item py-2">Components</a>
                                <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                            </div>

                            <a href="#bc_mobile_collapse" class="d-flex align-items-center text-body d-lg-none py-2 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-circle-down"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="bc_mobile_collapse">
                            <div class="d-lg-flex">
                                <a href="#" class="d-flex align-items-center text-body py-2">
                                    <i class="ph-lifebuoy me-2"></i>
                                    Support
                                </a>

                                <div class="dropdown ms-lg-3">
                                    <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        <span class="flex-1">Settings</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Inline elements</div>
                        </div>
                    </div>

                    <div class="page-header-content d-flex flex-wrap border-top">
                        <div class="breadcrumb">
                            <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Components</a>
                            <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                        </div>

                        <div class="ms-auto">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Something else
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        One more action
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5 class="mb-0">
                                Components - <span class="fw-normal">Breadcrumb</span>
                            </h5>
                            <div class="text-muted">Stackable elements</div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex flex-lg-wrap border-top">
                        <div class="breadcrumb">
                            <a href="index" class="breadcrumb-item py-2"><i class="ph-house me-2"></i> Home</a>
                            <a href="#" class="breadcrumb-item py-2">Components</a>
                            <span class="breadcrumb-item active py-2">Breadcrumbs</span>
                        </div>

                        <div class="d-flex ms-lg-auto">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <i class="ph-lifebuoy me-2"></i>
                                Support
                            </a>

                            <div class="dropdown ms-3">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    <span class="flex-1">Settings</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
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
    </div>
    <!-- /responsive options -->

</div>
<!-- /content area -->

@endsection
