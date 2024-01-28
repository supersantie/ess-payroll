@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Card Header @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic header options -->
    <div class="mb-3">
        <h6 class="mb-0">Basic elements</h6>
        <span class="text-muted">Examples of elements that card header supports</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Title with left icon -->
            <div class="card">
                <div class="card-header">
                    <h6 class="hstack gap-2 mb-0">
                        <i class="ph-gear"></i>
                        Left title icon
                    </h6>
                </div>

                <div class="card-body">
                    Card title with left icon
                </div>
            </div>
            <!-- /title with left icon -->


            <!-- Single icon -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Single icon</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body">
                            <i class="ph-gear"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Card header with a single icon
                </div>
            </div>
            <!-- /single icon -->


            <!-- Multiple icons -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Icon group</h6>
                    <div class="ms-auto">
                        <div class="hstack gap-2">
                            <a href="#" class="text-body">
                                <i class="ph-at"></i>
                            </a>
                            <a href="#" class="text-body">
                                <i class="ph-corners-out"></i>
                            </a>
                            <a href="#" class="text-body">
                                <i class="ph-envelope-open"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with multiple icons group
                </div>
            </div>
            <!-- /multiple icons -->


            <!-- Title with subtitle -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Subtitle</h6>
                    <span class="text-muted ms-2">Some alt description</span>
                </div>

                <div class="card-body">
                    Card title with subtitle using inline elements with <code>.d-flex</code> class in card header
                </div>
            </div>
            <!-- /title with subtitle -->


            <!-- Inline list -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-0">Inline list</h6>
                    <div class="ms-sm-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">Version 2.0</li>
                            <li class="list-inline-item">December 12th</li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    Card header with simple inline list
                </div>
            </div>
            <!-- /inline list -->


            <!-- Linked inline list -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-0">Linked inline list</h6>
                    <div class="ms-sm-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Download</a></li>
                            <li class="list-inline-item"><a href="#">Upload</a></li>
                            <li class="list-inline-item"><a href="#">Generate</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    Card header with linked inline list
                </div>
            </div>
            <!-- /linked inline list -->


            <!-- Title badge -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Title badge</h6>
                    <span class="badge bg-success ms-2">New</span>
                </div>

                <div class="card-body">
                    Card title with badge element
                </div>
            </div>
            <!-- /title badge -->


            <!-- Title pill badge -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Title pill badge</h6>
                    <span class="badge bg-secondary rounded-pill ms-2">387</span>
                </div>

                <div class="card-body">
                    Card title with pill badge element
                </div>
            </div>
            <!-- /title pill badge -->


            <!-- Pagination -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Pagination</h6>
                    <div class="ms-sm-auto">
                        <ul class="pagination pagination-flat">
                            <li class="page-item disabled">
                                <a href="#" class="page-link rounded">&larr;</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link rounded">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link rounded">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link rounded">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link rounded">&rarr;</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    Card header pagination. Available in 3 sizes
                </div>
            </div>
            <!-- /pagination -->

        </div>

        <div class="col-lg-6">

            <!-- Title with right icon -->
            <div class="card">
                <div class="card-header">
                    <h6 class="hstack gap-2 mb-0">
                        Right title icon
                        <i class="ph-gear"></i>
                    </h6>
                </div>

                <div class="card-body">
                    Card title with right icon
                </div>
            </div>
            <!-- /title with right icon -->


            <!-- Single icon dropdown -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Icon dropdown</h6>
                    <div class="ms-auto dropdown">
                        <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-list"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with single icon and dropdown
                </div>
            </div>
            <!-- /single icon dropdown -->


            <!-- Multiple icon dropdown -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Icons group with dropdown</h6>
                    <div class="hstack gap-2 ms-auto">
                        <a href="#" class="text-body">
                            <i class="ph-figma-logo"></i>
                        </a>
                        <a href="#" class="text-body">
                            <i class="ph-framer-logo"></i>
                        </a>
                        <div class="dropdown">
                            <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-github-logo"></i>
                            </a>
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

                <div class="card-body">
                    Card header with multiple icons and dropdown menu
                </div>
            </div>
            <!-- /multiple icon dropdowns -->


            <!-- Custom text -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Heading text</h6>
                    <div class="ms-auto">
                        <i class="ph-github-logo me-1"></i> Some text or <a href="#">link</a> and icon
                    </div>
                </div>

                <div class="card-body">
                    Card header text. Make sure the text is wrapped in inline element
                </div>
            </div>
            <!-- /custom text -->


            <!-- Bullet list -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-0">Bullet list</h6>
                    <div class="ms-sm-auto">
                        <ul class="list-inline list-inline-bullet mb-0">
                            <li class="list-inline-item">Version 2.0</li>
                            <li class="list-inline-item">December 12th</li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    Card header with bullet inline list
                </div>
            </div>
            <!-- /bullet list -->


            <!-- Linked bullet list -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-0">Linked bullet list</h6>
                    <div class="ms-sm-auto">
                        <ul class="list-inline list-inline-bullet mb-0">
                            <li class="list-inline-item"><a href="#">Download</a></li>
                            <li class="list-inline-item"><a href="#">Upload</a></li>
                            <li class="list-inline-item"><a href="#">Generate</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    Card header with linked bullet inline list
                </div>
            </div>
            <!-- /linked bullet list -->


            <!-- Header badge -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Header badge</h6>
                    <div class="ms-auto">
                        <span class="badge bg-danger">Badge</span>
                    </div>
                </div>

                <div class="card-body">
                    Card header with <code>.badge</code> element
                </div>
            </div>
            <!-- /header badge -->


            <!-- Header pill badge -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Header pill badge</h6>
                    <div class="ms-auto">
                        <span class="badge bg-indigo rounded-pill">578</span>
                    </div>
                </div>

                <div class="card-body">
                    Card header with <code>.badge-pill</code> element
                </div>
            </div>
            <!-- /header pill badge -->


            <!-- Pager -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Heading pager</h6>
                    <div class="ms-sm-auto">
                        <ul class="pagination pagination-linked">
                            <li class="page-item disabled">
                                <a href="#" class="page-link rounded">&larr; &nbsp; Older</a>
                            </li>
                            <li class="page-item ms-1">
                                <a href="#" class="page-link rounded">Newer &nbsp; &rarr;</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    Card header pager. Available in 3 sizes
                </div>
            </div>
            <!-- /pager -->

        </div>
    </div>
    <!-- /basic header options -->


    <!-- Header thumbnails -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card header thumbnails</h6>
        <span class="text-muted">Card header with single or multiple thumbnails</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Single thumbnail -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Single thumbnail</h6>
                    <div class="ms-auto my-auto">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                    </div>
                </div>

                <div class="card-body">
                    Card header with single thumbnail
                </div>
            </div>
            <!-- /single thumbnail -->


            <!-- Thumbnail group -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Thumbnail group</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="hstack gap-2">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with thumbnail group
                </div>
            </div>
            <!-- /thumbnail group -->


            <!-- Thumbnail with badge -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Thumb with badge</h6>
                    <div class="ms-auto my-auto">
                        <div class="position-relative">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                            <span class="badge bg-danger position-absolute top-0 left-100 translate-middle rounded-pill">9</span>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header thumbnail with badge
                </div>
            </div>
            <!-- /thumbnail with badge -->

        </div>

        <div class="col-lg-6">

            <!-- Single linked thumbnail -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Linked thumbnail</h6>
                    <div class="ms-auto my-auto">
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Card header with single linked thumbnail
                </div>
            </div>
            <!-- /single linked thumbnail -->


            <!-- Linked thumbnail group -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Linked thumbnail group</h6>
                    <div class="hstack gap-2 ms-sm-auto my-sm-auto">
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Card header with linked thumbnail group
                </div>
            </div>
            <!-- /linked thumbnail group -->


            <!-- Thumbnail with status indication -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Thumb with status indication</h6>
                    <div class="ms-auto my-auto">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="32" height="32" class="rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header thumbnail with rounded status indication
                </div>
            </div>
            <!-- /thumbnail with status indication -->

        </div>
    </div>
    <!-- /header thumbnails -->


    <!-- Card controls -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card controls</h6>
        <span class="text-muted">Collapse/expand, move, remove, reload, fullscreen and modal</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Collapse/expand card -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Collapse/expand card content</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body">
                        Use <code>data-card-action="collapse"</code> attribute and wrap collapsible content in div with <code>.collapse.show</code> classes
                    </div>
                </div>
            </div>
            <!-- /collapse/expand card -->


            <!-- Reload action -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Reload card content</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="reload">
                            <i class="ph-arrows-clockwise"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Use <code>data-card-action="reload"</code> attribute to add show spinner with overlay and block user interactions
                </div>
            </div>
            <!-- /reload action -->


            <!-- Remove action -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Remove card</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="remove">
                            <i class="ph-x"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Use <code>data-card-action="remove"</code> attribute to add an option to collapse-and-remove functionality
                </div>
            </div>
            <!-- /Remove action -->

        </div>

        <div class="col-lg-6">

            <!-- Move action -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Move (sort) card</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body cursor-move" data-card-action="sort">
                            <i class="ph-arrows-out-cardinal"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Use <code>data-card-action="sort"</code> attribute to make card sortable (draggable) within specified container
                </div>
            </div>
            <!-- /move action -->


            <!-- Fullscreen mode -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Fullscreen mode</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="fullscreen">
                            <i class="ph-corners-out"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Use <code>data-card-action="fullscreen"</code> attribute to add an option to display card in full screen mode
                </div>
            </div>
            <!-- /fullscreen mode -->


            <!-- Toggle modal -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Toggle modal</h6>
                    <div class="d-inline-flex ms-auto">
                        <a href="#settings" class="text-body" data-bs-toggle="modal">
                            <i class="ph-gear"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Use <code>data-bs-toggle="modal"</code> attribute to toggle modal with content. Make sure the markup exists
                </div>
            </div>
            <!-- /toggle modal -->

        </div>
    </div>
    <!-- /card controls -->


    <!-- Header form components -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Form components</h6>
        <span class="text-muted">A set of form elements that card header supports</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Single checkbox -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Single checkbox</h6>
                    <div class="ms-auto">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    Single checkbox. Available in both directions
                </div>
            </div>
            <!-- /single checkbox -->


            <!-- Checkbox group -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Checkbox group</h6>
                    <div class="ms-sm-auto">
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Unchecked</span>
                        </label>

                        <label class="form-check form-check-inline me-0">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    Header with group of inline checkboxes
                </div>
            </div>
            <!-- /checkbox group -->


            <!-- Switch toggle -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Switch toggle</h6>
                    <div class="ms-auto">
                        <label class="form-check form-switch form-check-reverse">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Enable</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    Switch toggle. Available in all styles and sizes
                </div>
            </div>
            <!-- /switch toggle -->


            <!-- Input field -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Text input</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <input type="text" class="form-control wmin-200" placeholder="Search...">
                    </div>
                </div>

                <div class="card-body">
                    Header with basic text input field
                </div>
            </div>
            <!-- /input field -->


            <!-- File input -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">File input</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <input type="file" class="form-control wmin-200">
                    </div>
                </div>

                <div class="card-body">
                    Card header with custom file input field
                </div>
            </div>
            <!-- /file input -->

        </div>

        <div class="col-lg-6">

            <!-- Single radio -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Single radio</h6>
                    <div class="ms-auto">
                        <label class="form-check">
                            <input type="radio" class="form-check-input" name="single-radio" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    Single radio. Available in both directions
                </div>
            </div>
            <!-- /single radio -->


            <!-- Radio group -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Radio group</h6>
                    <div class="ms-sm-auto">
                        <label class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="group-radio">
                            <span class="form-check-label">Unchecked</span>
                        </label>

                        <label class="form-check form-check-inline me-0">
                            <input type="radio" class="form-check-input" name="group-radio" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    Header with group of inline radio buttons
                </div>
            </div>
            <!-- /radio group -->


            <!-- Switch toggles -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Switch toggles</h6>
                    <div class="ms-sm-auto">
                        <label class="form-check form-check-inline form-switch form-check-reverse">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">First</span>
                        </label>

                        <label class="form-check form-check-inline form-switch form-check-reverse me-0">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Second</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    Multiple inline switches
                </div>
            </div>
            <!-- /switch toggles -->


            <!-- Field with icon feedback -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-auto">Input with icon</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="form-control-feedback form-control-feedback-end">
                            <input type="search" class="form-control wmin-200" placeholder="Search...">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Input field and icon feedback
                </div>
            </div>
            <!-- /field with icon feedback -->


            <!-- Input group -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Input group</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <button type="button" class="btn btn-primary">
                                <i class="ph-paper-plane-tilt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Heading with regular input group with button
                </div>
            </div>
            <!-- /input group -->

        </div>
    </div>
    <!-- /header form components -->


    <!-- Header selects -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Select menus</h6>
        <span class="text-muted">Various select options in card header</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Basic select -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Basic select</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <select class="form-select wmin-200">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    Card header with basic select
                </div>
            </div>
            <!-- /basic select -->


            <!-- Single Select2 select -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Single Select2 select</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="wmin-sm-200">
                            <select class="form-control form-control-select2">
                                <optgroup label="Alaskan Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with a single <code>Select2</code> select
                </div>
            </div>
            <!-- /single Select2 select -->

        </div>


        <div class="col-lg-6">

            <!-- Single multiselect -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-auto">Multiselect</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="wmin-sm-200">
                            <select class="form-control form-control-multiselect" multiple>
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Heading with single multiselect
                </div>
            </div>
            <!-- /single multiselect -->


            <!-- Multiple Select2 select -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Multiple Select2 select</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="wmin-sm-200">
                            <select class="form-control form-control-select2" multiple="multiple">
                                <optgroup label="Alaskan Time Zone">
                                    <option value="AK" selected>Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID" selected>Idaho</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with multiple <code>Select2</code> select
                </div>
            </div>
            <!-- /multiple Select2 select -->

        </div>
    </div>
    <!-- /header selects -->


    <!-- Header buttons -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Header buttons</h6>
        <span class="text-muted">Basic buttons with options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Single button -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Single button</h6>
                    <div class="ms-auto my-auto">
                        <button type="button" class="btn btn-primary">Button</button>
                    </div>
                </div>

                <div class="card-body">
                    Header with basic button. Available in all sizes, colors and options
                </div>
            </div>
            <!-- /single button -->


            <!-- Outline button -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Outline button</h6>
                    <div class="ms-auto my-auto">
                        <button type="button" class="btn btn-outline-indigo">Button</button>
                    </div>
                </div>

                <div class="card-body">
                    Header with outline button. Available in all sizes, colors and options
                </div>
            </div>
            <!-- /outline button -->


            <!-- Single button dropdown -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Button dropdown</h6>
                    <div class="ms-auto my-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">Menu</button>
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

                <div class="card-body">
                    Header with single button dropdown menu
                </div>
            </div>
            <!-- /single button dropdown -->


            <!-- Segmented button -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Segmented button</h6>
                    <div class="ms-auto my-auto">
                        <div class="btn-group">
                            <button class="btn btn-success">Menu</button>
                            <button class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
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

                <div class="card-body">
                    Card header with segmented button
                </div>
            </div>
            <!-- /segmented button -->


            <!-- Multiple buttons -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-auto">Multiple buttons</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-check me-2"></i>
                            Save
                        </button>
                        <button type="button" class="btn btn-light ms-2">
                            <i class="ph-x me-2"></i>
                            Cancel
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    Card header with multiple buttons
                </div>
            </div>
            <!-- /multiple button -->

        </div>


        <div class="col-lg-6">

            <!-- Icon button -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Icon button</h6>
                    <div class="ms-auto my-auto">
                        <button type="button" class="btn btn-success btn-icon">
                            <i class="ph-circles-four"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    Card header with single icon button
                </div>
            </div>
            <!-- /icon button -->


            <!-- Outline icon button -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Outline button</h6>
                    <div class="ms-auto my-auto">
                        <button type="button" class="btn btn-outline-pink btn-icon">
                            <i class="ph-check"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    Header with outline icon button
                </div>
            </div>
            <!-- /outline icon button -->


            <!-- Icon button dropdown -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Icon button dropdown</h6>
                    <div class="ms-auto my-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
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

                <div class="card-body">
                    Card header with icon button dropdown
                </div>
            </div>
            <!-- /icon button dropdown -->


            <!-- Segmented icon button -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Segmented icon button</h6>
                    <div class="ms-auto my-auto">
                        <div class="btn-group">
                            <button class="btn btn-danger btn-icon">
                                <i class="ph-globe"></i>
                            </button>
                            <button class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
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

                <div class="card-body">
                    Card header with segmented icon button
                </div>
            </div>
            <!-- /segmented icon button -->


            <!-- Multiple icon buttons -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Multiple icon buttons</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <button type="button" class="btn btn-primary btn-icon">
                            <i class="ph-cloud-arrow-down"></i>
                        </button>
                        <button type="button" class="btn btn-pink btn-icon ms-2">
                            <i class="ph-cloud-arrow-up"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    Card headers with multiple icon buttons
                </div>
            </div>
            <!-- /multiple icon buttons -->

        </div>
    </div>
    <!-- /header buttons -->


    <!-- Additional header elements -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Other elements</h6>
        <span class="text-muted">Other card header elements</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Default tabs -->
            <div class="card">
                <div class="card-header d-sm-flex pt-sm-0 pb-0">
                    <h6 class="align-self-sm-center mb-sm-0">Default tabs</h6>
                    <div class="ms-sm-auto">
                        <ul class="nav nav-tabs nav-tabs-highlight card-header-tabs mb-0">
                            <li class="nav-item">
                                <a href="#card-tab1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-house me-2"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#card-tab2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-chart-bar me-2"></i>
                                    Stats
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#card-tab3" tabindex="-1" class="dropdown-item" data-bs-toggle="tab">
                                        <i class="ph-user me-2"></i>
                                        Profile settings
                                    </a>
                                    <a href="#card-tab4" tabindex="-1" class="dropdown-item" data-bs-toggle="tab">
                                        <i class="ph-stack me-2"></i>
                                        Layout settings
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body tab-content">
                    <div class="tab-pane fade show active" id="card-tab1">
                        This is the first card tab content
                    </div>

                    <div class="tab-pane fade" id="card-tab2">
                        This is the second card tab content
                    </div>

                    <div class="tab-pane fade" id="card-tab3">
                        This is the third card tab content
                    </div>

                    <div class="tab-pane fade" id="card-tab4">
                        This is the fourth card tab content
                    </div>
                </div>
            </div>
            <!-- /default tabs -->


            <!-- Pills -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Default pills</h6>
                    <div class="ms-sm-auto">
                        <ul class="nav nav-pills mb-0">
                            <li class="nav-item">
                                <a href="#card-pill1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-house me-1"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#card-pill2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-chart-bar me-1"></i>
                                    Stats
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#card-pill3" class="dropdown-item" tabindex="-1" data-bs-toggle="tab">
                                        <i class="ph-user me-2"></i>
                                        Profile settings
                                    </a>
                                    <a href="#card-pill4" class="dropdown-item" tabindex="-1" data-bs-toggle="tab">
                                        <i class="ph-stack me-2"></i>
                                        Layout settings
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body tab-content">
                    <div class="tab-pane fade show active" id="card-pill1">
                        This is the first card pill content
                    </div>

                    <div class="tab-pane fade" id="card-pill2">
                        This is the second card pill content
                    </div>

                    <div class="tab-pane fade" id="card-pill3">
                        This is the third card pill content
                    </div>

                    <div class="tab-pane fade" id="card-pill4">
                        This is the fourth card pill content
                    </div>
                </div>
            </div>
            <!-- /pills -->


            <!-- Progress bar -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Progress bar</h6>
                    <div class="ms-sm-auto">
                        <div class="progress w-100 wmin-sm-200">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with progress bar. Available in all colors and options
                </div>
            </div>
            <!-- /progress bar -->

        </div>


        <div class="col-lg-6">

            <!-- Underline tabs -->
            <div class="card">
                <div class="card-header d-sm-flex pt-sm-0 pb-0">
                    <h6 class="align-self-sm-center mb-sm-0">Underline tabs</h6>
                    <div class="ms-sm-auto">
                        <ul class="nav nav-tabs nav-tabs-underline card-header-tabs mb-0">
                            <li class="nav-item">
                                <a href="#card-underline-tab1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-house me-2"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#card-underline-tab2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-chart-bar me-2"></i>
                                    Stats
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#card-underline-tab3" tabindex="-1" class="dropdown-item" data-bs-toggle="tab">
                                        <i class="ph-user me-2"></i>
                                        Profile settings
                                    </a>
                                    <a href="#card-underline-tab4" tabindex="-1" class="dropdown-item" data-bs-toggle="tab">
                                        <i class="ph-stack me-2"></i>
                                        Layout settings
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body tab-content">
                    <div class="tab-pane fade show active" id="card-underline-tab1">
                        This is the first card tab content
                    </div>

                    <div class="tab-pane fade" id="card-underline-tab2">
                        This is the second card tab content
                    </div>

                    <div class="tab-pane fade" id="card-underline-tab3">
                        This is the third card tab content
                    </div>

                    <div class="tab-pane fade" id="card-underline-tab4">
                        This is the fourth card tab content
                    </div>
                </div>
            </div>
            <!-- /underline tabs -->


            <!-- Dropdown title -->
            <div class="card">
                <div class="card-header">
                    <div class="h6 dropdown mb-0">
                        <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">Title dropdown</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with title as a dropdown menu
                </div>
            </div>
            <!-- /dropdown title -->


            <!-- Noui slider -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">NoUI slider</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="w-100 wmin-sm-200">
                            <div class="noui-slider noui-slider-danger noui-height-helper" id="noui-slider-demo"></div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card header with NoUI slider. Available in all sizes
                </div>
            </div>
            <!-- /noui slider -->

        </div>
    </div>
    <!-- /additional header elements -->


    <!-- Mixing header elements -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Mixing elements</h6>
        <span class="text-muted">Different variations of components</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Input field with button -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Input and button</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <form action="#">
                            <div class="input-group wmin-sm-200">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button type="button" class="btn btn-light btn-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    Mixing input field with button
                </div>
            </div>
            <!-- /input field with button -->


            <!-- Checkbox and icon dropdown -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Checkbox and dropdown</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="hstack gap-3 justify-content-between">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Enable</span>
                            </label>

                            <div class="dropdown">
                                <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>
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

                <div class="card-body">
                    Mixing checkbox with label and icon dropdown
                </div>
            </div>
            <!-- /checkbox and icon dropdown -->


            <!-- Switch and card controls -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Switch and controls</h6>
                    <div class="ms-sm-auto">
                        <div class="hstack gap-3 justify-content-between">
                            <label class="form-check form-switch form-check-reverse">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Enable</span>
                            </label>

                            <div class="hstack gap-2">
                                <a class="text-body" data-card-action="collapse">
                                    <i class="ph-caret-down"></i>
                                </a>
                                <a class="text-body" data-card-action="reload">
                                    <i class="ph-arrows-clockwise"></i>
                                </a>
                                <a class="text-body" data-card-action="remove">
                                    <i class="ph-x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body">
                        Mixing switch toggle and card control buttons
                    </div>
                </div>
            </div>
            <!-- /switch and card controls -->

        </div>


        <div class="col-lg-6">

            <!-- Text and button dropdown -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Text and button</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="hstack gap-3 justify-content-between">
                            <span class="text-danger">
                                <i class="ph-prohibit me-2"></i>
                                Error occurred
                            </span>

                            <div class="btn-group">
                                <button class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
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

                <div class="card-body">
                    Mixing text and button dropdown
                </div>
            </div>
            <!-- /text and button dropdown -->


            <!-- Spinner and progress bar -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Spinner and progress</h6>
                    <div class="hstack gap-3 ms-sm-auto">
                        <div class="spinner-border spinner-border-sm flex-shrink-0" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        <div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Mixing spinner and progress bar
                </div>
            </div>
            <!-- /spinner and progress bar -->


            <!-- Multiple elements -->
            <div class="card">
                <div class="card-header d-sm-flex align-items-sm-center">
                    <h6 class="mb-sm-0">Multiple elements</h6>
                    <div class="hstack gap-3 ms-sm-auto">
                        <div class="spinner-border spinner-border-sm flex-shrink-0" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        <span class="badge bg-danger">Badge</span>

                        <div class="d-inline-flex">
                            <a href="#" class="text-body">
                                <i class="ph-at"></i>
                            </a>
                            <a href="#" class="text-body mx-2">
                                <i class="ph-corners-out"></i>
                            </a>
                            <a href="#" class="text-body">
                                <i class="ph-envelope-open"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Mixing spinner icon, badge and icon list group
                </div>
            </div>
            <!-- /multiple elements -->

        </div>
    </div>
    <!-- /mixing header elements -->


    <!-- Responsive options -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Responsive options</h6>
        <span class="text-muted">Resize the browser or open on mobile to explore options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Always visible -->
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h6 class="py-3 mb-0">Always visible</h6>
                    <div class="ms-auto">
                        <div class="wmin-200">
                            <select class="form-control form-control-select2">
                                <optgroup label="Alaskan Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Add <code>.d-flex</code> class to card header container to make header elements visible on mobile and desktop.
                </div>
            </div>
            <!-- /always visible -->


            <!-- Wrap and show -->
            <div class="card">
                <div class="card-header d-sm-flex py-sm-0">
                    <h6 class="py-sm-3 mb-sm-0">Wrap and show</h6>
                    <div class="ms-sm-auto my-sm-auto">
                        <div class="form-control-feedback form-control-feedback-end">
                            <input type="search" class="form-control wmin-sm-200" placeholder="Search...">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    To wrap header elements to the second row, add <code>.d-[breakpoint]-flex</code> class to parent container. Breakpoint in class name is required, CSS needs to know screen size.
                </div>
            </div>
            <!-- /wrap and show -->


            <!-- Stack elements -->
            <div class="card">
                <div class="card-header d-sm-flex">
                    <h6 class="mb-sm-0">Stack elements</h6>
                    <div class="d-sm-flex align-items-sm-center flex-sm-nowrap ms-sm-auto">
                        <div class="text-muted me-sm-3 mb-1 mb-sm-0">Loading:</div>

                        <div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Use <code>.d-[breakpoint]-flex</code> to control when elements are stacked and responsive margin classes to control vertical and horizontal spacing.
                </div>
            </div>
            <!-- /stack elements -->


            <!-- Centered elements -->
            <div class="card">
                <div class="card-header d-sm-flex">
                    <h6 class="mb-sm-auto">Centered elements</h6>
                    <div class="ms-sm-auto">
                        <div class="hstack gap-2">
                            <div class="text-muted">Rating:</div>

                            <div class="hstack gap-1">
                                <i class="ph-star fs-base text-warning"></i>
                                <i class="ph-star fs-base text-warning"></i>
                                <i class="ph-star fs-base text-warning"></i>
                                <i class="ph-star fs-base text-warning"></i>
                                <i class="ph-star fs-base text-warning"></i>
                                <span class="text-muted ms-1">(49)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Use combination of <code>.d-[breakpoint]-flex</code> and <code>.justify-content-center</code> classes to center items in the line. All flex helper classes can be used as well for additional position options.
                </div>
            </div>
            <!-- /centered elements -->

        </div>

        <div class="col-lg-6">

            <!-- Hide on mobile -->
            <div class="card">
                <div class="card-header d-sm-flex py-sm-0">
                    <h6 class="py-sm-3 mb-0">Hide on mobile</h6>
                    <div class="d-none d-sm-block ms-sm-auto my-sm-auto">
                        <div class="wmin-sm-200">
                            <select class="form-control form-control-select2">
                                <optgroup label="Alaskan Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    To hide header elements on certain breakpoints, use <code>.d-none.d-[breakpoint]-block</code> classes in the container with header elements.
                </div>
            </div>
            <!-- /hide on mobile -->


            <!-- Wrap and toggle -->
            <div class="card">
                <div class="card-header d-sm-flex py-sm-0">
                    <h6 class="d-flex py-sm-3 mb-0">
                        Wrap and toggle
                        <a href="#card_header" class="text-body d-sm-none ms-auto align-self-center" data-card-action="collapse" data-bs-toggle="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                    </h6>

                    <div class="collapse d-sm-block ms-sm-auto my-sm-auto" id="card_header">
                        <div class="form-control-feedback form-control-feedback-end mt-3 mt-sm-0">
                            <input type="search" class="form-control wmin-sm-200" placeholder="Search...">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    You can also use optional toggler - add <code>.d-flex</code> to card title and custom markup for the toggle button. And <code>.collapse.show</code> to header elements container.
                </div>
            </div>
            <!-- /wrap and toggle -->


            <!-- Single line -->
            <div class="card">
                <div class="card-header d-sm-flex">
                    <h6 class="mb-sm-0">Stack elements</h6>
                    <div class="d-flex align-items-center ms-sm-auto">
                        <div class="text-muted me-3">Loading:</div>

                        <div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    You can easily show header elements in a single line, just wrap inner elements in container with <code>.d-flex</code> and <code>.align-items-center</code> classes. Use other flex utilities for adjustments.
                </div>
            </div>
            <!-- /single line -->


            <!-- Justified elements -->
            <div class="card">
                <div class="card-header d-sm-flex">
                    <h6 class="mb-sm-0">Justified elements</h6>
                    <div class="ms-sm-auto ms-sm-auto">
                        <div class="hstack gap-2 justify-content-between">
                            <div class="text-muted">Rating:</div>

                            <div class="hstack gap-1">
                                <i class="ph-star text-warning"></i>
                                <i class="ph-star text-warning"></i>
                                <i class="ph-star text-warning"></i>
                                <i class="ph-star text-warning"></i>
                                <i class="ph-star text-warning"></i>
                                <span class="text-muted ms-1">(49)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Use combination of <code>.d-flex</code> and <code>.justify-content-between</code> (or <code>.m(s,e)-auto</code>) classes to distribute items evenly in the line: first item is on the start line, last item on the end line.
                </div>
            </div>
            <!-- /justified elements -->

        </div>
    </div>
    <!-- /responsive options -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/sliders/nouislider.min.js')}}"></script>
<script src="{{URL::asset('assets/js/assets/js/vendor/ui/dragula.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/content_cards_header.js')}}"></script>
@endsection
