@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Task Manager @endslot
@slot('subtitle') Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Filter toolbar -->
    <div class="navbar navbar-expand-lg shadow rounded py-1 mb-3">
        <div class="container-fluid">
            <div class="text-center d-lg-none">
                <button type="button" class="navbar-toggler dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#navbar-filter">
                    <i class="ph-funnel me-2"></i>
                    Filters
                </button>
            </div>

            <div class="navbar-collapse collapse order-2 order-lg-1" id="navbar-filter">
                <span class="navbar-text d-none d-lg-inline-flex align-items-lg=center me-3">
                    <i class="ph-funnel me-2"></i>
                    Filter:
                </span>

                <ul class="navbar-nav flex-wrap mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                            By date
                        </a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Show all</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Today</a>
                            <a href="#" class="dropdown-item">Yesterday</a>
                            <a href="#" class="dropdown-item">This week</a>
                            <a href="#" class="dropdown-item">This month</a>
                            <a href="#" class="dropdown-item">This year</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown ms-lg-1">
                        <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                            By status
                        </a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Show all</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Open</a>
                            <a href="#" class="dropdown-item">On hold</a>
                            <a href="#" class="dropdown-item">Resolved</a>
                            <a href="#" class="dropdown-item">Closed</a>
                            <a href="#" class="dropdown-item">Duplicate</a>
                            <a href="#" class="dropdown-item">Invalid</a>
                            <a href="#" class="dropdown-item">Wontfix</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown ms-lg-1">
                        <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                            By priority
                        </a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Show all</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Highest</a>
                            <a href="#" class="dropdown-item">High</a>
                            <a href="#" class="dropdown-item">Normal</a>
                            <a href="#" class="dropdown-item">Low</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="d-flex order-1 order-lg-2 ms-auto">
                <span class="navbar-text d-none d-lg-inline-flex align-items-lg-center me-3 ms-lg-auto">
                    <i class="ph-eye me-2"></i>
                    View mode:
                </span>

                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link navbar-nav-link-icon active rounded">
                            <i class="ph-squares-four"></i>
                        </a>
                    </li>

                    <li class="nav-item ms-1">
                        <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                            <i class="ph-list"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /filter toolbar -->


    <!-- Task grid -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-primary me-2">Research</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#24. Create UI design model</a></h6>
                        <p class="mb-2">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 28.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Eternity app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">23 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-success me-2">Development</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#23. New icons set for an iOS app</a></h6>
                        <p class="mb-2">A collection of textile samples lay spread out on the table..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 27.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Eternity app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">18 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Resolved
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item active">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-danger me-2">Blocker</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#22. Create ad campaign banners set</a></h6>
                        <p class="mb-2">That he had recently cut out of an illustrated magazine..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 27.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Singular website</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">22 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Resolved
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item active">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-success me-2">Development</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#22. Create ad campaign banners set</a></h6>
                        <p class="mb-2">That he had recently cut out of an illustrated magazine..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 26.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Corelius app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">27 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Invalid
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item active">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-indigo me-2">Testing</span>
                            <span class="badge bg-success me-2">Development</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#20. Fix validation issues and commit</a></h6>
                        <p class="mb-2">But who knows, maybe that would be the best thing for me..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 25.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Singular app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">18 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Resolved
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item active">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-primary me-2">Research</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#19. Support tickets list doesn't support commas</a></h6>
                        <p class="mb-2">I'd have gone up to the boss and told him just what i think..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 24.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Singular app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face23.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">30 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Closed
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item active">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center text-muted content-divider mb-3">
        <span class="p-2">Yesterday</span>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-danger me-2">Blocker</span>
                            <span class="badge bg-indigo me-2">Testing</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#18. Help Web devs with HTML integration</a></h6>
                        <p class="mb-2">Samsa was a travelling salesman - and above it there hung..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 23.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Corelius app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">31 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Resolved
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item active">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#17. Another icon set</a></h6>
                        <p class="mb-2">A wonderful serenity has taken possession of my entire soul..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 22.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Aquincum app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">32 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Invalid
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item active">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-primary me-2">Research</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#16. iOS application design mockups</a></h6>
                        <p class="mb-2">Sweet mornings of spring which I enjoy with my whole heart..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 20.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Design work</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">44 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#15. UI/UX design review</a></h6>
                        <p class="mb-2">I am alone, and feel the charm of existence in this spot..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 19.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Singular app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face19.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">48 hours</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                On hold
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item active">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-teal me-2">Marketing</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#14. Marketing campaign review</a></h6>
                        <p class="mb-2">Which was created for the bliss of souls like mine..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 17.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Marketing</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">2 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-success me-2">Development</span>
                            <span class="badge bg-indigo me-2">Testing</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#13. Fix website issues on mobile</a></h6>
                        <p class="mb-2">I am so happy, my dear friend, so absorbed in the exquisite..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 16.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Aquincum app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face17.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">2 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Invalid
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item active">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#12. Add updated responsive styles</a></h6>
                        <p class="mb-2">I should be incapable of drawing a single stroke at the present..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 15.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Design system</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">2 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-success me-2">Development</span>
                            <span class="badge bg-indigo me-2">Testing</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#11. Merge latest changes</a></h6>
                        <p class="mb-2">When, while the lovely valley teems with vapour around me..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 14.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Singular app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face21.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face22.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">2 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Wontfix
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item active">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-teal me-2">Marketing</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#10. Create landing page for a new app</a></h6>
                        <p class="mb-2">A few stray gleams steal into the inner sanctuary, I throw..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 13.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Marketing</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">3 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-indigo me-2">Testing</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#9. Update JS code in app.js file</a></h6>
                        <p class="mb-2">When I hear the buzz of the little world among the stalks..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 12.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Aquincum app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">3 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                On hold
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item active">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center text-muted content-divider mb-3">
        <span class="p-2">Apr 21, 10:38 am</span>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-success me-2">Development</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#8. Combine .js files in /app/js/</a></h6>
                        <p class="mb-2">Insects and flies, then I feel the presence of the Almighty..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 11.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Aquincum app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">3 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Resolved
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item active">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-primary me-2">Research</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#7. Create application Photoshop draft</a></h6>
                        <p class="mb-2">Who formed us in his own image, and the breath of that universal..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 10.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Dashboard</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">3 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Invalid
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item active">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-teal me-2">Marketing</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#6. Cartoon characters for app ads</a></h6>
                        <p class="mb-2">My friend, when darkness overspreads my eyes, and heaven..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 09.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Dashboard</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">4 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                On hold
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item active">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-danger me-2">Blocker</span>
                            <span class="badge bg-teal me-2">Marketing</span>
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#5. Google AdWords campain graphics</a></h6>
                        <p class="mb-2">Seem to dwell in my soul and absorb its power, like the form..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 08.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Dashboard</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face23.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">4 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Invalid
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item active">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-pink me-2">Sales</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#4. Monthly statistics report</a></h6>
                        <p class="mb-2">I sink under the weight of the splendour of these visions..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 06.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Dashboard</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">4 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-yellow text-black me-2">Design</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#3. Create invoice template</a></h6>
                        <p class="mb-2">Far far away, behind the word mountains, far from the..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 05.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Corporate website</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">5 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Resolved
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item active">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-teal me-2">Marketing</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#2. Add images to the product gallery</a></h6>
                        <p class="mb-2">Countries Vokalia and Consonantia, there live the blind..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 04.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Noname app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">5 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Closed
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item active">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="d-inline-flex">
                            <span class="badge bg-secondary me-2">Content</span>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="mb-1"><a href="task_manager_detailed">#1. Update User profile page</a></h6>
                        <p class="mb-2">A small river named Duden flows by their place and supplies it..</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <div class="d-flex flex-wrap">
                            <div><span class="text-muted"><i class="ph-calendar me-1"></i> 03.06.2022</span></div>
                            <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Noname app</a></div>
                        </div>

                        <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="me-1">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                            </a>
                            <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex align-items-center">
                    <span>
                        <i class="ph-bell-ringing me-1"></i>
                        Due: <span class="fw-semibold">6 days</span>
                    </span>

                    <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                        <div class="dropdown d-inline-flex">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-check-square-offset me-2"></i>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /task grid -->


    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3 mb-3">
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link"><i class="ph-arrow-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="ph-arrow-right"></i></a></li>
        </ul>
    </div>
    <!-- /pagination -->

</div>
<!-- /content area -->

@endsection
