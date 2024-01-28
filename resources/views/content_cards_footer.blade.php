@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Card Footer @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Card footer layouts -->
    <div class="mb-3">
        <h6 class="mb-0">Card footer layouts</h6>
        <span class="text-muted">Default, custom, light and dark footer colors</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Default style -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default style</h6>
                </div>

                <div class="card-body">
                    Default example of card footer. By default, footer container has transparent background color. Default style doesn't require any additional classes. Supports all elements listed below, including custom colors.
                </div>

                <div class="card-footer hstack gap-3 justify-content-between">
                    <div class="text-muted">Added 3 hours ago</div>

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
            <!-- /default style -->


            <!-- Custom color -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Custom color</h6>
                </div>

                <div class="card-body">
                    Example of a card footer with custom background color. You can use any available color helper class, also use text color classes where needed. Some elements require minor color adjustments.
                </div>

                <div class="card-footer bg-indigo text-white hstack gap-3 justify-content-between">
                    <div>Added 3 hours ago</div>

                    <div class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="opacity-75 ms-1">(49)</span>
                    </div>
                </div>
            </div>
            <!-- /custom color -->

        </div>

        <div class="col-lg-6">

            <!-- Light style -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default style</h6>
                </div>

                <div class="card-body">
                    You can use <code>.bg-light</code> class in card footer container to add light grey background color to footer container. Adjust other elements accordingly. Use border and spacing utility classes for custom styling.
                </div>

                <div class="card-footer bg-light hstack gap-3 justify-content-between">
                    <div class="text-muted">Added 3 hours ago</div>

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
            <!-- /light style -->


            <!-- Dark background -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Dark background</h6>
                </div>

                <div class="card-body">
                    You can use <code>.bg-dark</code> and <code>.text-white</code> classes in card footer container to inverse colors and make the footer dark. Use border and spacing utility classes for custom styling.
                </div>

                <div class="card-footer bg-dark hstack gap-3 justify-content-between">
                    <div class="text-muted">Added 3 hours ago</div>

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
            <!-- /dark background -->

        </div>
    </div>
    <!-- /card footer layouts -->


    <!-- Basic footer options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Basic elements</h6>
        <span class="text-muted">Examples of elements that card footer supports</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Title with left icon -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text with left icon</h6>
                </div>

                <div class="card-body">
                    Card footer plain text with left icon
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="hstack gap-2">
                        <i class="ph-calendar"></i>
                        Schedule
                    </div>

                    <div class="hstack gap-2">
                        <i class="ph-gear"></i>
                        Settings
                    </div>
                </div>
            </div>
            <!-- /title with left icon -->


            <!-- Single icon -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single icon</h6>
                </div>

                <div class="card-body">
                    Card footer with a single icon, inline or linked
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <a href="#">
                        <i class="ph-gear"></i>
                    </a>
                </div>
            </div>
            <!-- /single icon -->


            <!-- Multiple icons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple icons</h6>
                </div>

                <div class="card-body">
                    Card footer with a group of multiple icons
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="hstack gap-2">
                        <i class="ph-play-circle"></i>
                        <i class="ph-pause-circle"></i>
                        <i class="ph-stop-circle"></i>
                    </div>

                    <div class="hstack gap-2">
                        <a href="#">
                            <i class="ph-twitter-logo"></i>
                        </a>
                        <a href="#">
                            <i class="ph-telegram-logo"></i>
                        </a>
                        <a href="#">
                            <i class="ph-instagram-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /multiple icons -->


            <!-- Plain text -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Plain text</h6>
                </div>

                <div class="card-body">
                    Card footer with simple inline text. Use utility classes for proper spacing and alignment
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <div>Good morning, Eugene!</div>
                    <div class="mt-2 mt-sm-0">You have 3 unread messages</div>
                </div>
            </div>
            <!-- /plain text -->


            <!-- Inline list -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Inline list</h6>
                </div>

                <div class="card-body">
                    Card footer with regular inline list
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">10 bugs</li>
                        <li class="list-inline-item">8 commits</li>
                    </ul>

                    <ul class="list-inline mb-0 mt-2 mt-sm-0">
                        <li class="list-inline-item">December 12th</li>
                        <li class="list-inline-item">Version 2.0</li>
                    </ul>
                </div>
            </div>
            <!-- /inline list -->


            <!-- Linked inline list -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Linked inline list</h6>
                </div>

                <div class="card-body">
                    Card footer with linked inline list
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">3 reports</a></li>
                        <li class="list-inline-item"><a href="#">7 files</a></li>
                    </ul>

                    <ul class="list-inline mb-0 mt-2 mt-sm-0">
                        <li class="list-inline-item"><a href="#">Download</a></li>
                        <li class="list-inline-item"><a href="#">Upload</a></li>
                        <li class="list-inline-item"><a href="#">Generate</a></li>
                    </ul>
                </div>
            </div>
            <!-- /linked inline list -->


            <!-- Inline badge -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Inline badges</h6>
                </div>

                <div class="card-body">
                    Card footer with <code>.badge</code> element displayed before/after the text
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <div class="hstack gap-2">
                        <span class="badge bg-danger">Bug</span>
                        Ticket <a href="#">#54325</a>
                    </div>

                    <div class="hstack gap-2 mt-2 mt-sm-0">
                        Resolution:
                        <span class="badge bg-success">Fixed</span>
                    </div>
                </div>
            </div>
            <!-- /inline badge -->


            <!-- Pagination -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Pagination</h6>
                </div>

                <div class="card-body">
                    Card footer pagination in left and right alignments. Supports all pagination sizes and styles
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between flex-sm-wrap py-sm-2">
                    <div class="pagination hstack gap-3">
                        <div class="page-item disabled">
                            <a href="#" class="page-link rounded-pill px-0">
                                <i class="ph-caret-left"></i>
                            </a>
                        </div>
                        <div>
                            1 of <a href="#">12</a>
                        </div>
                        <div class="page-item">
                            <a href="#" class="page-link rounded-pill px-0">
                                <i class="ph-caret-right"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="pagination pagination-flat mt-2 mt-sm-0">
                        <li class="page-item"><a href="#" class="page-link rounded">&larr;</a></li>
                        <li class="page-item"><a href="#" class="page-link rounded">1</a></li>
                        <li class="page-item active"><a href="#" class="page-link rounded">2</a></li>
                        <li class="page-item"><a href="#" class="page-link rounded">3</a></li>
                        <li class="page-item"><a href="#" class="page-link rounded">&rarr;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /pagination -->

        </div>

        <div class="col-lg-6">

            <!-- Title with right icon -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Title with right icon</h6>
                </div>

                <div class="card-body">
                    Card footer with plain text and icon next to it
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="hstack gap-2">
                        Schedule
                        <i class="ph-calendar"></i>
                    </div>

                    <div class="hstack gap-2">
                        Settings
                        <i class="ph-gear"></i>
                    </div>
                </div>
            </div>
            <!-- /title with right icon -->


            <!-- Single icon dropdown -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Icon dropdown</h6>
                </div>

                <div class="card-body">
                    Card footer with single icon dropdown, both sides
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-list"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-link"></i>
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
            <!-- /single icon dropdown -->


            <!-- Multiple icon dropdown -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple icons with dropdown</h6>
                </div>

                <div class="card-body">
                    Card footer with multiple icons and dropdown menu
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="hstack gap-2">
                        <a href="#">
                            <i class="ph-play-circle"></i>
                        </a>
                        <a href="#">
                            <i class="ph-pause-circle"></i>
                        </a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-stop-circle"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">One more separated line</a>
                            </div>
                        </div>
                    </div>

                    <div class="hstack gap-2">
                        <a href="#">
                            <i class="ph-dribbble-logo"></i>
                        </a>
                        <a href="#">
                            <i class="ph-telegram-logo"></i>
                        </a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-messenger-logo"></i>
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
            <!-- /multiple icon dropdowns -->


            <!-- Custom text -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Custom text styling</h6>
                </div>

                <div class="card-body">
                    Card footer text displayed on both sides. Make sure the text is wrapped in block element
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <div>
                        <i class="ph-user-circle me-1"></i> Good morning, <strong>Eugene</strong>
                    </div>
                    <div class="mt-2 mt-sm-0">You have <a href="#">3 unread messages</a></div>
                </div>
            </div>
            <!-- /custom text -->


            <!-- Bullet list -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Bullet list</h6>
                </div>

                <div class="card-body">
                    Card footer with bullet inline list
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <ul class="list-inline list-inline-bullet mb-0">
                        <li class="list-inline-item">10 bugs</li>
                        <li class="list-inline-item">8 commits</li>
                    </ul>

                    <ul class="list-inline list-inline-bullet mb-0 mt-2 mt-sm-0">
                        <li class="list-inline-item">December 12th</li>
                        <li class="list-inline-item">Version 2.0</li>
                    </ul>
                </div>
            </div>
            <!-- /bullet list -->


            <!-- Linked bullet list -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Linked bullet list</h6>
                </div>

                <div class="card-body">
                    Card footer with linked bullet inline list
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between">
                    <ul class="list-inline list-inline-bullet mb-0">
                        <li class="list-inline-item"><a href="#">3 reports</a></li>
                        <li class="list-inline-item"><a href="#">7 files</a></li>
                    </ul>

                    <ul class="list-inline list-inline-bullet mb-0 mt-2 mt-sm-0">
                        <li class="list-inline-item"><a href="#">Download</a></li>
                        <li class="list-inline-item"><a href="#">Upload</a></li>
                        <li class="list-inline-item"><a href="#">Generate</a></li>
                    </ul>
                </div>
            </div>
            <!-- /linked bullet list -->


            <!-- Inline pill badge -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Inline pill badges</h6>
                </div>

                <div class="card-body">
                    Card footer with fully rounded <code>.badge</code> element displayed before/after the text
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="hstack gap-2">
                        <span class="badge bg-primary rounded-pill">36</span>
                        New orders
                    </div>

                    <div class="hstack gap-2">
                        Shipped:
                        <span class="badge bg-secondary rounded-pill">74</span>
                    </div>
                </div>
            </div>
            <!-- /inline pill badge -->


            <!-- Pager -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Pager</h6>
                </div>

                <div class="card-body">
                    Card footer pager in left and right alignment. Supports all pager sizes and styles
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <ul class="pagination pagination-linked">
                        <li class="page-item disabled">
                            <a href="#" class="page-link rounded">&larr; &nbsp; Older</a>
                        </li>
                        <li class="page-item ms-1">
                            <a href="#" class="page-link rounded">Newer &nbsp; &rarr;</a>
                        </li>
                    </ul>

                    <ul class="pagination pagination-linked mt-2 mt-sm-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link rounded">&larr; &nbsp; Older</a>
                        </li>
                        <li class="page-item ms-1">
                            <a href="#" class="page-link rounded">Newer &nbsp; &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /pager -->

        </div>
    </div>
    <!-- /basic footer options -->


    <!-- Footer thumbnails -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card footer thumbnails</h6>
        <span class="text-muted">Card footer with single or multiple thumbnails</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Single thumbnail -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single thumbnail</h6>
                </div>

                <div class="card-body">
                    Card footer with single thumbnail (left or right)
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                    <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                </div>
            </div>
            <!-- /single thumbnail -->


            <!-- Thumbnail group -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Thumbnail group</h6>
                </div>

                <div class="card-body">
                    Card footer with thumbnail group
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-2">
                    <div class="hstack gap-2">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                    </div>

                    <div class="hstack gap-2 mt-2 mt-sm-0">
                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-pill mx-2" width="32" height="32" alt="">
                        <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                    </div>
                </div>
            </div>
            <!-- /thumbnail group -->


            <!-- Thumbnail with badge -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Thumb with badge</h6>
                </div>

                <div class="card-body">
                    Card footer thumbnail with badge
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <div class="position-relative">
                        <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                        <span class="badge bg-success position-absolute top-0 left-100 translate-middle rounded-pill">9</span>
                    </div>

                    <div class="hstack gap-2">
                        <div class="position-relative">
                            <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            <span class="badge bg-warning position-absolute top-0 left-100 translate-middle rounded-pill">2</span>
                        </div>
                        <div class="position-relative">
                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            <span class="badge bg-warning position-absolute top-0 left-100 translate-middle rounded-pill">4</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /thumbnail with badge -->

        </div>

        <div class="col-lg-6">

            <!-- Single linked thumbnail -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Linked thumbnail</h6>
                </div>

                <div class="card-body">
                    Card footer with single linked thumbnail
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <a href="#">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                    </a>

                    <a href="#">
                        <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                    </a>
                </div>
            </div>
            <!-- /single linked thumbnail -->


            <!-- Linked thumbnail group -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Linked thumbnail group</h6>
                </div>

                <div class="card-body">
                    Card footer with linked thumbnail group
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-2">
                    <div class="hstack gap-2">
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                    </div>

                    <div class="hstack gap-2 mt-2 mt-sm-0">
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face17.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /linked thumbnail group -->


            <!-- Thumbnail with status indicator -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Thumb with status indicator</h6>
                </div>

                <div class="card-body">
                    Card footer thumbnail with status indicators
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <div class="status-indicator-container">
                        <img src="{{URL::asset('assets/images/demo/users/face19.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>

                    <div class="hstack gap-2">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face21.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            <span class="status-indicator bg-light"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /thumbnail with status indicator -->

        </div>
    </div>
    <!-- /footer thumbnails -->


    <!-- Footer form components -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Form components</h6>
        <span class="text-muted">A set of form elements that card footer supports</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Single checkbox -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single checkbox</h6>
                </div>

                <div class="card-body">
                    Single checkbox. Available in both directions
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <span class="form-check-label">Unchecked</span>
                    </label>

                    <label class="form-check form-check-reverse">
                        <input type="checkbox" class="form-check-input" checked>
                        <span class="form-check-label">Checked</span>
                    </label>
                </div>
            </div>
            <!-- /single checkbox -->


            <!-- Checkbox group -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Checkbox group</h6>
                </div>

                <div class="card-body">
                    Card footer with group of inline checkboxes
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Unchecked</span>
                        </label>

                        <label class="form-check form-check-inline me-0">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <label class="form-check form-check-inline form-check-reverse">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Unchecked</span>
                        </label>

                        <label class="form-check form-check-inline form-check-reverse me-0">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /checkbox group -->


            <!-- Switch -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Switch</h6>
                </div>

                <div class="card-body">
                    Pure CSS toggle switcher in left and right directions
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <form action="#">
                        <label class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Refresh</span>
                        </label>
                    </form>

                    <form action="#">
                        <label class="form-check form-switch form-check-reverse">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Enable</span>
                        </label>
                    </form>
                </div>
            </div>
            <!-- /switch -->


            <!-- Input field -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text input</h6>
                </div>

                <div class="card-body">
                    Card footer with basic text input
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div>
                        <input type="text" class="form-control wmin-sm-200" placeholder="Search...">
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <input type="text" class="form-control wmin-sm-200" placeholder="Search...">
                    </div>
                </div>
            </div>
            <!-- /input field -->


            <!-- File inputs -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">File inputs</h6>
                </div>

                <div class="card-body">
                    Card footer file input, in both directions
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="w-sm-200">
                        <input type="file" class="form-control">
                    </div>

                    <div class="w-sm-200 mt-3 mt-sm-0">
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>
            <!-- /file inputs -->

        </div>

        <div class="col-lg-6">

            <!-- Single radio -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single radio</h6>
                </div>

                <div class="card-body">
                    Single radio. Available in both directions
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <label class="form-check">
                        <input type="radio" class="form-check-input" name="single-radio">
                        <span class="form-check-label">Unchecked</span>
                    </label>

                    <label class="form-check form-check-reverse">
                        <input type="radio" class="form-check-input" name="single-radio" checked>
                        <span class="form-check-label">Checked</span>
                    </label>
                </div>
            </div>
            <!-- /single radio -->


            <!-- Radio group -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Radio group</h6>
                </div>

                <div class="card-body">
                    Card footer with group of inline radio buttons
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div>
                        <label class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radio-group-left" checked>
                            <span class="form-check-label">Radio 1</span>
                        </label>

                        <label class="form-check form-check-inline me-0">
                            <input type="radio" class="form-check-input" name="radio-group-left">
                            <span class="form-check-label">Radio 2</span>
                        </label>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <label class="form-check form-check-inline form-check-reverse">
                            <input type="radio" class="form-check-input" name="radio-group-right">
                            <span class="form-check-label">Radio 1</span>
                        </label>

                        <label class="form-check form-check-inline form-check-reverse me-0">
                            <input type="radio" class="form-check-input" name="radio-group-right" checked>
                            <span class="form-check-label">Radio 2</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /radio group -->


            <!-- Switches -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Switches</h6>
                </div>

                <div class="card-body">
                    Card footer with a group of switches
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div>
                        <label class="form-check form-check-inline form-switch">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Unchecked</span>
                        </label>
                        <label class="form-check form-check-inline form-switch me-0">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <label class="form-check form-check-inline form-switch form-check-reverse">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Unchecked</span>
                        </label>
                        <label class="form-check form-check-inline form-switch form-check-reverse me-0">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Checked</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /switches -->


            <!-- Field with icon feedback -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Input with icon</h6>
                </div>

                <div class="card-body">
                    Input field and icon feedback, in both directions
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="form-control-feedback form-control-feedback-end">
                        <input type="search" class="form-control wmin-sm-200" placeholder="Searching...">
                        <div class="form-control-feedback-icon">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="search" class="form-control wmin-sm-200" placeholder="Searching...">
                            <div class="form-control-feedback-icon">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /field with icon feedback -->


            <!-- Input group -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Input group</h6>
                </div>

                <div class="card-body">
                    Card footer with input group text and button
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button type="button" class="btn btn-light">
                                <i class="ph-paper-plane-tilt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /input group -->

        </div>
    </div>
    <!-- /footer form components -->


    <!-- Footer selects -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Select menus</h6>
        <span class="text-muted">Various select options in card footer</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Basic select -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Basic selects</h6>
                </div>

                <div class="card-body">
                    Card footer with our basic selects
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="wmin-sm-200">
                        <select class="form-select">
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

                    <div class="wmin-sm-200 mt-3 mt-sm-0">
                        <select class="form-select">
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
            </div>
            <!-- /basic select -->


            <!-- Single select2 selects -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single select2 selects</h6>
                </div>

                <div class="card-body">
                    Card footer with a single <code>Select2</code> select
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
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

                    <div class="wmin-sm-200 mt-3 mt-sm-0">
                        <select class="form-control form-control-select2">
                            <optgroup label="Alaskan Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV" selected>Nevada</option>
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
            <!-- /single select2 selects -->

        </div>


        <div class="col-lg-6">

            <!-- Multiple select2 selects -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple select2 selects</h6>
                </div>

                <div class="card-body">
                    Card footer with multiple <code>Select2</code> select
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
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

                    <div class="wmin-sm-200 mt-3 mt-sm-0">
                        <select class="form-control form-control-select2" multiple="multiple">
                            <optgroup label="Alaskan Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI" selected>Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV" selected>Nevada</option>
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
            <!-- /multiple select2 selects -->


            <!-- Multiselect -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiselect</h6>
                </div>

                <div class="card-body">
                    Card footer with single and multiple selects
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="wmin-sm-200">
                        <select class="form-control form-control-multiselect">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                        </select>
                    </div>

                    <div class="wmin-sm-200 mt-3 mt-sm-0">
                        <select class="form-control form-control-multiselect" multiple="multiple">
                            <option value="cheese" selected>Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions" selected>Onions</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /multiselect -->

        </div>
    </div>
    <!-- /footer selects -->


    <!-- Footer buttons -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card footer buttons</h6>
        <span class="text-muted">Basic buttons with options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Single button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single button</h6>
                </div>

                <div class="card-body">
                    Footer with basic button. Available in all sizes, colors and styles
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <button type="button" class="btn btn-light w-100 w-sm-auto">Left button</button>
                    <button type="button" class="btn btn-primary mt-3 mt-sm-0 w-100 w-sm-auto">Right button</button>
                </div>
            </div>
            <!-- /single button -->


            <!-- Single button dropdown -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Button dropdown</h6>
                </div>

                <div class="card-body">
                    Footer with a dropdown menu attached to a single button
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="btn-group w-100 w-sm-auto">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">Left menu</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>

                    <div class="btn-group w-100 w-sm-auto mt-3 mt-sm-0">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">Right menu</button>
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
            <!-- /single button dropdown -->


            <!-- Segmented button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Segmented button</h6>
                </div>

                <div class="card-body">
                    Card footer with segmented buttons
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="btn-group w-100 w-sm-auto">
                        <button class="btn btn-primary w-100 w-sm-auto">Left menu</button>
                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>

                    <div class="btn-group w-100 w-sm-auto mt-3 mt-sm-0">
                        <button class="btn btn-teal w-100 w-sm-auto">Right menu</button>
                        <button class="btn btn-teal dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
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
            <!-- /segmented button -->


            <!-- Multiple buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple buttons</h6>
                </div>

                <div class="card-body">
                    Card footer with multiple buttons
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="btn-group w-100 w-sm-auto">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-check me-2"></i>
                            Save
                        </button>
                        <button type="button" class="btn btn-light ms-0 border-start-0">
                            <i class="ph-x me-2"></i>
                            Close
                        </button>
                    </div>

                    <div class="hstack gap-2 mt-3 mt-sm-0">
                        <button type="button" class="btn btn-indigo w-100 w-sm-auto">
                            <i class="ph-check me-2"></i>
                            Save
                        </button>
                        <button type="button" class="btn btn-light w-100 w-sm-auto">
                            <i class="ph-x me-2"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
            <!-- /multiple button -->

        </div>


        <div class="col-lg-6">

            <!-- Icon button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Card header</h6>
                </div>

                <div class="card-body">
                    Card footer with single icon button. Available in all sizes, colors and styling options
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <button type="button" class="btn btn-outline-pink btn-icon">
                        <i class="ph-check"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-icon">
                        <i class="ph-check-square-offset"></i>
                    </button>
                </div>
            </div>
            <!-- /icon button -->


            <!-- Icon button dropdown -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Icon button dropdown</h6>
                </div>

                <div class="card-body">
                    Card footer with icon button dropdown
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-list"></i>
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-teal btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-calendar"></i>
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
            <!-- /icon button dropdown -->


            <!-- Segmented icon button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Segmented icon button</h6>
                </div>

                <div class="card-body">
                    Card footer with segmented icon button
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <div class="btn-group">
                        <button class="btn btn-outline-indigo btn-icon">
                            <i class="ph-circles-three"></i>
                        </button>
                        <button class="btn btn-outline-indigo btn-icon dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-danger btn-icon">
                            <i class="ph-users"></i>
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
            <!-- /segmented icon button -->


            <!-- Multiple icon buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple icon buttons</h6>
                </div>

                <div class="card-body">
                    Card footer with multiple icon buttons
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-teal btn-icon">
                            <i class="ph-check"></i>
                        </button>
                        <button type="button" class="btn btn-light btn-icon ms-0 border-start-0">
                            <i class="ph-x"></i>
                        </button>
                    </div>

                    <div class="hstack gap-2">
                        <button type="button" class="btn btn-teal btn-icon">
                            <i class="ph-check"></i>
                        </button>
                        <button type="button" class="btn btn-light btn-icon">
                            <i class="ph-x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /multiple icon buttons -->

        </div>
    </div>
    <!-- /footer buttons -->


    <!-- Additional footer elements -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Other elements</h6>
        <span class="text-muted">Other elements that card footer supports</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Pills -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Footer pills</h6>
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

                <div class="card-footer d-flex align-items-center py-2">
                    <ul class="nav nav-pills mb-0">
                        <li class="nav-item">
                            <a href="#card-pill1" class="nav-link active" data-bs-toggle="tab">
                                <i class="ph-house me-2"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#card-pill2" class="nav-link" data-bs-toggle="tab">
                                <i class="ph-chart-bar me-2"></i>
                                Stats
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#card-pill3" class="dropdown-item" tabindex="-1" data-bs-toggle="tab">
                                    <i class="ph-user-circle me-2"></i>
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
            <!-- /pills -->


            <!-- Progress bar -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Progress bar</h6>
                </div>

                <div class="card-body">
                    Card footer with progress bar. Available in all colors and styles
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div class="progress w-100 w-sm-auto wmin-sm-200" style="height: 0.375rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress w-100 w-sm-auto wmin-sm-200 mt-3 mt-sm-0">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <!-- /progress bar -->

        </div>


        <div class="col-lg-6">

            <!-- Bottom tabs -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Footer tabs</h6>
                </div>

                <div class="card-body tab-content">
                    <div class="tab-pane fade show active" id="card-bottom-tab1">
                        This is the first card tab content
                    </div>

                    <div class="tab-pane fade" id="card-bottom-tab2">
                        This is the second card tab content
                    </div>

                    <div class="tab-pane fade" id="card-bottom-tab3">
                        This is the third card tab content
                    </div>

                    <div class="tab-pane fade" id="card-bottom-tab4">
                        This is the fourth card tab content
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center p-0">
                    <ul class="nav nav-tabs nav-tabs-overline border-0">
                        <li class="nav-item">
                            <a href="#card-bottom-tab1" class="nav-link active" data-bs-toggle="tab">
                                <i class="ph-house me-2"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#card-bottom-tab2" class="nav-link" data-bs-toggle="tab">
                                <i class="ph-chart-bar me-2"></i>
                                Stats
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#card-bottom-tab3" tabindex="-1" class="dropdown-item" data-bs-toggle="tab">
                                    <i class="ph-user-circle me-2"></i>
                                    Profile settings
                                </a>
                                <a href="#card-bottom-tab4" tabindex="-1" class="dropdown-item" data-bs-toggle="tab">
                                    <i class="ph-stack me-2"></i>
                                    Layout settings
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /bottom tabs -->


            <!-- Noui slider -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">NoUI slider</h6>
                </div>

                <div class="card-body">
                    Card footer with NoUI slider. Available in all sizes
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div class="w-100 w-sm-auto wmin-sm-200">
                        <div class="noui-slider noui-slider-danger noui-height-helper" id="noui-slider-demo"></div>
                    </div>

                    <div class="w-100 w-sm-auto wmin-sm-200 mt-3 mt-sm-0">
                        <div class="noui-slider noui-slider-success noui-height-helper" id="noui-slider-demo2"></div>
                    </div>
                </div>
            </div>
            <!-- /noui slider -->

        </div>
    </div>
    <!-- /additional header elements -->


    <!-- Mixing footer elements -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Mixing elements</h6>
        <span class="text-muted">Different variations of components</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Select2 and text with icons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Select and text</h6>
                </div>

                <div class="card-body">
                    Mixing Select2 selects and inline text with icons
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="wmin-sm-200">
                        <select class="form-control form-control-select2" data-placeholder="Add to collection">
                            <option></option>
                            <option value="1">Favourites</option>
                            <option value="2">Best sellers</option>
                            <option value="3">To purchase</option>
                            <option value="4">Commercial</option>
                        </select>
                    </div>

                    <div class="hstack gap-2 mt-3 mt-sm-0">
                        <span class="text-muted">Rating:</span>
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
            <!-- /select2 and text with icons -->


            <!-- Checkbox and text dropdown -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Checkbox and text dropdown</h6>
                </div>

                <div class="card-body">
                    Mixing checkbox with label and inline text with dropdown
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" checked>
                        <span class="form-check-label">Remember</span>
                    </label>

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-gear me-1"></i>
                            Settings
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
            <!-- /checkbox and text dropdown -->


            <!-- Switch and input field -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Switch and input field</h6>
                </div>

                <div class="card-body">
                    Mixing switch toggle and input field
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="form-control-feedback form-control-feedback-end">
                        <input type="search" class="form-control wmin-200" placeholder="Searching...">
                        <div class="form-control-feedback-icon">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <label class="form-check form-switch form-check-reverse">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Auto save</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /switch and input field -->

        </div>


        <div class="col-lg-6">

            <!-- Text and button dropdown -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text and button dropdown</h6>
                </div>

                <div class="card-body">
                    Mixing inline text and button dropdown
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
                    <div class="hstack gap-2 text-danger">
                        <i class="ph-prohibit"></i>
                        Error occurred
                    </div>

                    <div class="btn-group">
                        <button class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdowndivider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /text and button dropdown -->


            <!-- Spinner and progress bar -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text, spinner and progress bar</h6>
                </div>

                <div class="card-body">
                    Mixing inline text, rotating spinner icon and progress bar
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <!-- /spinner and progress bar -->


            <!-- Multiple elements -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple elements</h6>
                </div>

                <div class="card-body">
                    Mixing icon group, inline text and link
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div class="hstack gap-3">
                        <div class="hstack gap-3">
                            <a href="#" class="link-pink">
                                <i class="ph-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ph-chats"></i>
                            </a>
                        </div>

                        <span class="text-muted">Posted 3 hours ago</span>
                    </div>

                    <a href="#" class="d-inline-block mt-3 mt-sm-0">Read more</a>
                </div>
            </div>
            <!-- /multiple elements -->

        </div>
    </div>
    <!-- /mixing footer elements -->


    <!-- Responsive options -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Responsive options</h6>
        <span class="text-muted">Resize the browser or open on mobile to explore options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Always visible -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Always visible</h6>
                </div>

                <div class="card-body">
                    Add <code>.d-flex</code> class to direct parent of content container to make header elements visible on mobile and desktop.
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center py-2">
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

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
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
            <!-- /always visible -->


            <!-- Wrap and show -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Wrap and show</h6>
                </div>

                <div class="card-body">
                    To wrap footer elements to the second row, add <code>.d-[breakpoint]-flex</code> class to parent container. Breakpoint in class name is required, CSS needs to know screen size.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="hstack gap-2 text-danger">
                        <i class="ph-prohibit"></i>
                        Error occurred
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <div class="form-control-feedback form-control-feedback-end">
                            <input type="search" class="form-control wmin-sm-200" placeholder="Search...">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wrap and show -->


            <!-- Stack elements -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Stack elements</h6>
                </div>

                <div class="card-body">
                    Footer (block) elements are stackable by default. Use responsive margin classes to control vertical and horizontal spacing. Make sure margin and container breakpoints are matching.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="wmin-sm-200">
                        <input type="file" class="form-control">
                    </div>

                    <div class="d-sm-flex align-items-sm-center mt-3 mt-sm-0">
                        <span class="text-muted me-sm-3">Loading:</span>

                        <div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /stack elements -->


            <!-- Centered elements -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Centered elements</h6>
                </div>

                <div class="card-body">
                    Use combination of <code>.d-[breakpoint]-flex</code> and <code>.justify-content-[breakpoint]-center</code> classes to center items on the same line. All flex helper classes can be used as well for additional position options.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center text-center">
                    <div class="hstack gap-2 justify-content-center">
                        <span class="text-muted">Rating:</span>
                        <div class="hstack gap-1">
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <span class="text-muted ms-1">(49)</span>
                        </div>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <!-- /centered elements -->

        </div>

        <div class="col-lg-6">

            <!-- Hide on mobile -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Hide on mobile</h6>
                </div>

                <div class="card-body">
                    To hide footer elements on certain breakpoints, use <code>.d-none.d-[breakpoint]-block</code> classes in the container with footer elements.
                </div>

                <div class="card-footer d-none d-sm-flex justify-content-sm-between align-items-sm-center py-2">
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

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
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
            <!-- /hide on mobile -->


            <!-- Wrap and toggle -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Wrap and toggle</h6>
                </div>

                <div class="card-body">
                    You can also use optional toggler - add <code>.d-flex</code> to card footer and custom markup for the toggle button. And <code>.collapse.show</code> to footer elements container.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="d-flex">
                        <div class="text-danger">
                            <i class="ph-prohibit me-2"></i>
                            Error occurred
                        </div>
                        <a href="#card_footer" class="text-body d-sm-none ms-auto align-self-center" data-card-action="collapse" data-bs-toggle="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                    </div>

                    <div class="collapse d-sm-block" id="card_footer">
                        <div class="form-control-feedback form-control-feedback-end mt-3 mt-sm-0">
                            <input type="search" class="form-control wmin-sm-200" placeholder="Search...">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wrap and toggle -->


            <!-- Single line -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single line</h6>
                </div>

                <div class="card-body">
                    You can easily show footer elements in a single line, just wrap inner elements in container with <code>.d-flex</code> and <code>.align-items-center</code> classes. Use other flex utilities for adjustments.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
                    <div class="wmin-sm-200">
                        <input type="file" class="form-control">
                    </div>

                    <div class="hstack gap-3 mt-3 mt-sm-0">
                        <span class="text-muted">Loading:</span>

                        <div class="progress w-100 w-sm-auto wmin-sm-200" style="height: 0.375rem;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /single line -->


            <!-- Justified elements -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Justified elements</h6>
                </div>

                <div class="card-body">
                    Use combination of <code>.d-flex</code> and <code>.justify-content-between</code> (or <code>.m(s,e)-auto</code>) classes to distribute items evenly in the line: first item is on the start line, last item on the end line.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div class="hstack gap-2 justify-content-between">
                        <span class="text-muted">Rating:</span>
                        <div class="hstack gap-1">
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <i class="ph-star fs-base text-warning"></i>
                            <span class="text-muted ms-1">(49)</span>
                        </div>
                    </div>

                    <div class="mt-3 mt-sm-0">
                        <a href="#">Read more</a>
                    </div>
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
<script src="{{URL::asset('assets/demo/pages/content_cards_footer.js')}}"></script>
@endsection
