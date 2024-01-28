@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Placeholder @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Placeholder component</h6>
                <p class="mb-3">Use loading placeholders for your components or pages to indicate something may still be loading. They’re built only with HTML and CSS, no JS is needed to create them</p>

                <div>
                    <span class="placeholder col-12"></span>
                    <span class="placeholder col-12"></span>
                    <span class="placeholder col-12"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Placeholder animation</h6>
                <p class="mb-3">Animate placeholders with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> added to parent container to better convey the perception of something being actively loaded</p>

                <div>
                    <span class="placeholder col-6"></span>
                    <div class="placeholder-glow">
                        <span class="placeholder col-9"></span>
                    </div>
                    <div class="placeholder-wave">
                        <span class="placeholder col-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic -->


    <!-- Sizing -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Placeholder width</h6>
                <p class="mb-3">You can change the width through grid column classes: <code>.col-[1-12]</code>, width utilities: <code>.w-[25|50|75|100]</code>, or inline styles: <code>style="width: [number]%"</code>. The base <code>.placeholder</code> class is required</p>

                <div>
                    <span class="placeholder col-12"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder w-75"></span>
                    <span class="placeholder" style="width: 25%;"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Placeholder height</h6>
                <p class="mb-3">The size of <code>.placeholder</code> is based on the typographic style of the parent element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or <code>.placeholder-xs</code>.</p>

                <div>
                    <span class="placeholder placeholder-lg col-6"></span>
                    <span class="placeholder col-9"></span>
                    <span class="placeholder placeholder-sm col-4"></span>
                    <span class="placeholder placeholder-xs col-8"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /sizing -->


    <!-- Alignment -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Centered placeholder</h6>
                <p class="mb-3">Placeholder by default is an inline element and you can control its alignment simply by using <code>.text-start</code>, <code>.text-center</code> and <code>.text-end</code> classes on parent container</p>

                <div class="text-center">
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-9"></span>
                    <span class="placeholder col-4"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Right aligned placeholder</h6>
                <p class="mb-3">Example of right alignmed placeholder. Can be combined with other placeholders in the same container or used separately depending on original content alignment</p>

                <div class="text-end">
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-9"></span>
                    <span class="placeholder col-4"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /alignment -->


    <!-- Colors -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Placeholder color</h6>
                <p class="mb-3">By default, the placeholder uses <code>currentColor</code> and inherits color from parent element. This can be overridden with a custom color or utility class, including a set of available custom colors</p>

                <div>
                    <span class="placeholder col-12"></span>

                    <span class="placeholder col-4 bg-primary"></span>
                    <span class="placeholder col-10 bg-secondary"></span>
                    <span class="placeholder col-8 bg-success"></span>
                    <span class="placeholder col-6 bg-danger"></span>
                    <span class="placeholder col-10 bg-warning"></span>
                    <span class="placeholder col-9 bg-info"></span>
                    <span class="placeholder col-8 bg-light"></span>
                    <span class="placeholder col-5 bg-dark"></span>

                    <span class="placeholder col-7 bg-pink"></span>
                    <span class="placeholder col-9 bg-purple"></span>
                    <span class="placeholder col-8 bg-teal"></span>
                    <span class="placeholder col-5 bg-indigo"></span>
                    <span class="placeholder col-10 bg-yellow"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Animated color options</h6>
                <p class="mb-3">All placeholder colors support animation by default, no additional CSS or classes are required since both effects are based on repeating <code>opacity</code> or <code>image-mask</code> animation</p>

                <div class="placeholder-glow">
                    <span class="placeholder col-12"></span>

                    <span class="placeholder col-4 bg-primary"></span>
                    <span class="placeholder col-10 bg-secondary"></span>
                    <span class="placeholder col-8 bg-success"></span>
                    <span class="placeholder col-6 bg-danger"></span>
                    <span class="placeholder col-10 bg-warning"></span>
                    <span class="placeholder col-9 bg-info"></span>
                    <span class="placeholder col-8 bg-light"></span>
                    <span class="placeholder col-5 bg-dark"></span>

                    <span class="placeholder col-7 bg-pink"></span>
                    <span class="placeholder col-9 bg-purple"></span>
                    <span class="placeholder col-8 bg-teal"></span>
                    <span class="placeholder col-5 bg-indigo"></span>
                    <span class="placeholder col-10 bg-yellow"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /colors -->


    <!-- Card placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Card placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two. We apply additional styling to <code>.btn</code> via <code>::before</code> to ensure the height is respected. You may extend this pattern for other situations as needed, or add a <code>&ampnbsp;</code> within the element to reflect the height when actual text is rendered in its place.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Component</div>
                    <div class="border rounded p-3 p-lg-4 mb-3 mb-lg-0">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8 col-lg-10 col-xxl-7">
                                <div class="card mb-0">
                                    <svg class="card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#20c997"></rect>
                                        <text x="50%" y="50%" text-anchor="middle" font-size="1.5em" fill="#fff" dy=".3em">Image cap</text>
                                    </svg>

                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">
                                            Go somewhere
                                            <i class="ph-paper-plane-tilt ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Loading state</div>
                    <div class="border rounded p-3 p-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8 col-lg-10 col-xxl-7">
                                <div class="card mb-0" aria-hidden="true">
                                    <svg class="card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                    </svg>

                                    <div class="card-body">
                                        <div class="h5 card-title placeholder-glow">
                                            <span class="placeholder col-6"></span>
                                        </div>

                                        <p class="card-text placeholder-glow mb-3">
                                            <span class="placeholder col-7"></span>
                                            <span class="placeholder col-4"></span>
                                            <span class="placeholder col-4"></span>
                                            <span class="placeholder col-6"></span>
                                        </p>
                                        <a href="#" tabindex="-1" class="btn btn-primary disabled d-inline-block placeholder col-6"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /card placeholder -->


    <!-- Table placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Table placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of placeholder in table element. You can show placeholder only in table head, table body or in both. Keeping header text visible would work better when number of columns is known and you need only to load table content (e.g. when pagination is triggered). If headers are hidden, make sure column widths are defined in table markup or CSS, as they may collapse and jump when content is loaded.</p>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Component</div>
                    <div class="border rounded">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Eugene</td>
                                        <td>Kopyov</td>
                                        <td>@Kopyov</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Victoria</td>
                                        <td>Baker</td>
                                        <td>@Vicky</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>James</td>
                                        <td>Alexander</td>
                                        <td>@Alex</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Franklin</td>
                                        <td>Morrison</td>
                                        <td>@Frank</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Loading state</div>
                    <div class="border rounded">
                        <div class="table-responsive placeholder-glow" aria-hidden="true">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="placeholder col-7"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="placeholder col-7"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="placeholder col-7"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="placeholder col-7"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                        <td><span class="placeholder col-9"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /table placeholder -->


    <!-- Navbar placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Navbar placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Although navbar supports placeholder, implementation is a bit different: all collapsible containers and dropdown menus are disabled, but all their togglers are visible. To disable links, add <code>.pe-none</code> to disable pointer events and control container widths with <code>.col-*</code> classes, in some cases you might also need to toggle these classes in parent containers as well. Check the example below.</p>

            <div class="fw-bold mb-2">Component</div>
            <div class="navbar navbar-expand-lg navbar-dark rounded py-2 mb-3">
                <div class="container-fluid">
                    <div class="d-flex d-lg-none me-2">
                        <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                            <i class="ph-list"></i>
                        </button>
                    </div>

                    <div class="navbar-brand flex-1 flex-lg-0">
                        <a href="index" class="d-inline-flex align-items-center">
                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
                        </a>
                    </div>

                    <ul class="nav flex-row">
                        <li class="nav-item d-lg-none">
                            <a href="#navbar_placeholder_demo" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                                <i class="ph-magnifying-glass"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill">
                                <i class="ph-squares-four"></i>
                            </a>
                        </li>

                        <li class="nav-item ms-lg-2">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill">
                                <i class="ph-chats"></i>
                                <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                            </a>
                        </li>
                    </ul>

                    <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_placeholder_demo">
                        <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                            <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                                <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                            </div>

                            <a href="#" class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1">
                                <i class="ph-faders-horizontal"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill">
                                <i class="ph-bell"></i>
                                <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                            </a>
                        </li>

                        <li class="nav-item ms-lg-2">
                            <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1">
                                <div class="status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </div>
                                <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="fw-bold mb-2">Loading state</div>
            <div class="navbar navbar-expand-lg navbar-dark rounded py-2 placeholder-glow" aria-hidden="true">
                <div class="container-fluid">
                    <div class="d-flex d-lg-none me-2">
                        <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill placeholder pe-none"></button>
                    </div>

                    <div class="d-inline-flex flex-1 flex-lg-0">
                        <a href="index" class="navbar-brand d-inline-flex align-items-center col pe-none">
                            <span class="placeholder col-8"></span>
                        </a>
                    </div>

                    <ul class="navbar-nav flex-row col col-lg-2 justify-content-end justify-content-lg-start">
                        <li class="nav-item nav-item-dropdown-lg dropdown col col-lg-5">
                            <a href="#" class="navbar-nav-link navbar-nav-link-toggler pe-none">
                                <span class="placeholder w-100"></span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2 col col-lg-5">
                            <a href="#" class="navbar-nav-link navbar-nav-link-toggler pe-none">
                                <span class="placeholder w-100"></span>
                            </a>
                        </li>
                    </ul>

                    <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_placeholder_demo">
                        <div class="navbar-search d-flex align-items-center flex-1 mt-2 mt-lg-0 mx-lg-3">
                            <div class="form-control-feedback form-control-feedback-start flex-grow-1 placeholder text-white"></div>
                        </div>
                    </div>

                    <ul class="navbar-nav flex-row order-1 order-lg-2 justify-content-end align-items-center col col-lg-2">
                        <li class="nav-item nav-item-dropdown-lg d-lg-none col col-lg-5">
                            <a href="#navbar_placeholder_demo" class="navbar-nav-link navbar-nav-link-toggler rounded-pill pe-none" data-bs-toggle="collapse">
                                <span class="placeholder w-100"></span>
                            </a>
                        </li>

                        <li class="nav-item col col-lg-5">
                            <a href="#" class="navbar-nav-link navbar-nav-link-toggler pe-none">
                                <span class="placeholder w-100"></span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100 ms-lg-2">
                            <a href="#" class="navbar-nav-link navbar-nav-link-toggler align-items-center p-1 pe-none">
                                <div class="status-indicator-container">
                                    <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" class="placeholder rounded-pill" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /navbar placeholder -->


    <!-- Sidebar placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sidebar placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Placeholder implementation in the sidebar is custom and depends on the content type you display there. All sub levels and item states in sidebar navigation are disabled by default, unless you need to show them intentionally (e.g. when you load sub menus dynamically). Apart from that, all other elements are rendered in a regular way with <code>.placeholder</code> elements.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Component</div>
                    <div class="sidebar sidebar-dark position-static w-100 d-block border-0 rounded mb-3 mb-lg-0">
                        <div class="sidebar-content position-static">

                            <!-- User menu -->
                            <div class="sidebar-section sidebar-section-body d-flex">
                                <div class="me-3">
                                    <a href="#" class="status-indicator-container d-block">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Victoria Williams</div>
                                    <span class="text-white opacity-75">Marketing director</span>
                                </div>

                                <div class="ms-3">
                                    <a href="#" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent">
                                        <i class="ph-gear"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Navigation -->
                            <div class="sidebar-section">
                                <ul class="nav nav-sidebar" data-nav-type="collapsible">
                                    <li class="nav-item-header pt-0">
                                        <div class="text-white opacity-75 text-uppercase fs-sm lh-sm">Main</div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <i class="ph-house"></i>
                                            Active link
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-layout"></i>
                                            Top level link
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-swatches"></i>
                                            With children
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level link</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-note-blank"></i>
                                            Multiple levels
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level</a>
                                            </li>
                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link">Second level with child</a>
                                                <ul class="nav-group-sub collapse">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link disabled">
                                            <i class="ph-translate"></i>
                                            Disabled levels
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Loading state</div>
                    <div class="sidebar sidebar-dark position-static w-100 d-block border-0 rounded placeholder-glow" aria-hidden="true">
                        <div class="sidebar-content position-static">

                            <!-- User menu -->
                            <div class="sidebar-section sidebar-section-body d-flex">
                                <div class="me-3">
                                    <a href="#" class="status-indicator-container d-block pe-none">
                                        <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" role="img" class="placeholder rounded-pill" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <div class="fw-semibold">
                                        <span class="placeholder placeholder col-4"></span>
                                    </div>
                                    <span class="text-white opacity-75">
                                        <span class="placeholder placeholder-sm col-3"></span>
                                    </span>
                                </div>

                                <div class="ms-3">
                                    <a href="#" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent placeholder pe-none"></a>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Navigation -->
                            <div class="sidebar-section">
                                <ul class="nav nav-sidebar" data-nav-type="collapsible">
                                    <li class="nav-item-header pt-0">
                                        <div class="text-white opacity-75 text-uppercase fs-sm lh-sm placeholder col-1"></div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <div class="w-100 text-nowrap">
                                                <span class="placeholder col-8"></span>
                                                <span class="placeholder col-3"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <div class="w-100 text-nowrap">
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-6"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <div class="w-100 text-nowrap">
                                                <span class="placeholder col-3"></span>
                                                <span class="placeholder col-6"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <div class="w-100 text-nowrap">
                                                <span class="placeholder col-5"></span>
                                                <span class="placeholder col-5"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <div class="w-100 text-nowrap">
                                                <span class="placeholder col-2"></span>
                                                <span class="placeholder col-9"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /sidebar placeholder -->


    <!-- Media object placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Media object placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can replace any text or image content with placeholder, keeping the structure of content section. In this example we have a regular list group with custom inner content structure based on utility classes, where we replace our images with a custom inline SVG placeholder that has similar size and shape. All parent links are disabled with <code>.pe-none</code> class.</p>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Component</div>
                    <div class="border rounded mb-3 mb-lg-0">
                        <div class="list-group list-group-borderless py-2">
                            <div class="list-group-item d-flex">
                                <div class="me-3">
                                    <a href="#">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Walking away fallaciously</div>
                                    Wise that some and before yellow thus yikes mandrill
                                </div>
                            </div>

                            <div class="list-group-item d-flex">
                                <div class="me-3">
                                    <a href="#">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Recklessly won</div>
                                    Awkwardly thus when much according forwardly far grizzly
                                </div>
                            </div>

                            <div class="list-group-item d-flex">
                                <div class="me-3">
                                    <a href="#">
                                        <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Fired or unlocked</div>
                                    Much contemptible squid crud the dear less hazy naturally
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Loading state</div>
                    <div class="border rounded">
                        <div class="list-group list-group-borderless py-2 placeholder-glow" aria-hidden="true">
                            <div class="list-group-item d-flex">
                                <div class="me-3">
                                    <a href="#" class="pe-none" tabindex="-1">
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg" role="img" class="placeholder rounded-pill" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <span class="placeholder placeholder col-5"></span>
                                    <span class="placeholder placeholder-sm col-12"></span>
                                </div>
                            </div>

                            <div class="list-group-item d-flex">
                                <div class="me-3">
                                    <a href="#" class="pe-none" tabindex="-1">
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg" role="img" class="placeholder rounded-pill" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <span class="placeholder placeholder col-7"></span>
                                    <span class="placeholder placeholder-sm col-12"></span>
                                </div>
                            </div>

                            <div class="list-group-item d-flex">
                                <div class="me-3">
                                    <a href="#" class="pe-none" tabindex="-1">
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg" role="img" class="placeholder rounded-pill" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96"></rect>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <span class="placeholder placeholder col-6"></span>
                                    <span class="placeholder placeholder-sm col-12"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /media object placeholder -->


    <!-- Page header placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Page header placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Replacing content in page header might be useful when you need to show layout structure on page load. Here we replace right content group (dropdown and a list of images) with a multi line placeholder, this requires some additional changes in the markup - we don't replace inner content of right nav, but the whole container with a few parent levels. This can be changed if you really need to be that precise.</p>

            <div class="mb-3">
                <div class="fw-bold mb-2">Component</div>
                <div class="border rounded mb-4">
                    <div class="page-header">
                        <div class="page-header-content d-lg-flex">
                            <div class="d-flex">
                                <div class="page-title">
                                    <h4 class="mb-0">
                                        <i class="ph-arrow-circle-left me-2"></i>
                                        Components - <span class="fw-normal">Placeholder</span>
                                    </h4>
                                </div>

                                <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#page_header_elements">
                                    <i class="ph-caret-circle-down"></i>
                                </button>
                            </div>

                            <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header_elements">
                                <div class="d-lg-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                                    <div class="dropdown mb-3 mb-lg-0">
                                        <button type="button" class="btn btn-outline-light border-transparent text-body text-start w-100 w-lg-auto lh-1 align-items-center justify-content-start py-2">
                                            <img src="{{URL::asset('assets/images/brands/klm.svg')}}" class="w-32px h-32px me-2" alt="">
                                            <div>
                                                <div class="fs-sm text-muted mb-1">Customer</div>
                                                <div class="fw-semibold">Royal Dutch Airlines</div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="img-group d-inline-flex align-items-center ms-lg-3">
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
                                        <a href="#" class="btn btn-light d-inline-flex align-items-center justify-content-center h-32px rounded-pill px-2 me-1">
                                            +14
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="index" class="breadcrumb-item">Home</a>
                                    <a href="#" class="breadcrumb-item">Components</a>
                                    <span class="breadcrumb-item active">Placeholder</span>
                                </div>

                                <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto" data-bs-toggle="collapse" data-bs-target="#breadcrumb_elements">
                                    <i class="ph-caret-circle-down"></i>
                                </button>
                            </div>

                            <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                <div class="d-lg-flex mb-2 mb-lg-0">
                                    <a href="#" class="d-flex align-items-center text-body py-2">
                                        <i class="ph-lifebuoy me-2"></i>
                                        Support
                                    </a>

                                    <div class="dropdown ms-lg-3">
                                        <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                            <i class="ph-gear me-2"></i>
                                            <span class="flex-1">Settings</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-bold mb-2">Loading state</div>
            <div class="border rounded">
                <div class="page-header placeholder-glow" aria-hidden="true">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex flex-grow-1">
                            <div class="page-title col-7 col-lg-5">
                                <h4 class="mb-0">
                                    <span class="placeholder col-12"></span>
                                </h4>
                            </div>

                            <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto placeholder pe-none" data-bs-toggle="collapse" data-bs-target="#page_header_placeholder"></button>
                        </div>

                        <div class="collapse d-lg-block my-lg-auto ms-lg-auto col-4" id="page_header_placeholder">
                            <div class="text-end">
                                <span class="placeholder col-9"></span>
                                <span class="placeholder col-7"></span>
                            </div>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex flex-grow-1">
                            <div class="breadcrumb d-block py-2 col col-lg-6">
                                <span class="placeholder col-7"></span>
                                <span class="placeholder col-3"></span>
                            </div>

                            <button type="button" class="btn btn-light btn-icon btn-sm align-self-center d-lg-none rounded-pill ms-auto placeholder pe-none" data-bs-toggle="collapse" data-bs-target="#breadcrumb_placeholder"></button>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto col-lg-6" id="breadcrumb_placeholder">
                            <div class="text-lg-end py-lg-2 mb-2 mb-lg-0">
                                <span class="placeholder col-12 col-lg-2"></span>
                                <span class="placeholder col-12 col-lg-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /page header placeholder -->


    <!-- Modal placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Modal placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Showing placeholders in modals is easy, it has the same logic as in other elements with a few exceptions: we can replace single or multiple buttons with animated placeholders, close button is also visible and disabled. We recommend to keep modal markup always available during loading process and replace only inner content, this will prevent full component layout shift when progress is finished.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Component</div>
                    <div class="border rounded p-2 p-lg-4 mb-3 mb-lg-0">
                        <div class="modal position-static d-block" tabindex="-1">
                            <div class="modal-dialog wmax-0 my-0">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6 class="fw-semibold">Text in a modal</h6>
                                        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Loading state</div>
                    <div class="border rounded p-2 p-lg-4">
                        <div class="modal position-static d-block placeholder-glow" tabindex="-1">
                            <div class="modal-dialog wmax-0 my-0">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title col-6">
                                            <span class="placeholder col-12"></span>
                                        </h5>
                                        <button type="button" class="btn-close placeholder pe-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6 class="fw-semibold">
                                            <span class="placeholder placeholder-lg col-4"></span>
                                        </h6>
                                        <span class="placeholder col-7"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-6"></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light disabled placeholder d-inline-block col-2" data-bs-dismiss="modal">
                                        </button>
                                        <button type="button" class="btn btn-primary disabled placeholder d-inline-block col-3"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal placeholder -->


    <!-- Dropdown placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dropdown placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Dropdown menu also supports placeholder. You can either show it in each dropdown item, simulate a short vertical list with multiple placeholders that are displayed on multiple lines within 1 container, or you can completely replace all content inside <code>.dropdown-menu</code> container with your custom placeholder implementation.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Component</div>
                    <div class="border rounded p-2 p-lg-4 mb-3 mb-lg-0">
                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold mb-2">Loading state</div>
                    <div class="border rounded p-2 p-lg-4">
                        <div class="dropdown-menu placeholder-glow" aria-hidden="true" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                            <a href="#" class="dropdown-item d-block pe-none">
                                <span class="placeholder col-8"></span>
                                <span class="placeholder col-3"></span>
                            </a>
                            <a href="#" class="dropdown-item d-block pe-none">
                                <span class="placeholder col-2"></span>
                                <span class="placeholder col-8"></span>
                            </a>
                            <a href="#" class="dropdown-item d-block pe-none">
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-8"></span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item d-block pe-none">
                                <span class="placeholder col-5"></span>
                                <span class="placeholder col-6"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdown placeholder -->

</div>
<!-- /content area -->

@endsection
