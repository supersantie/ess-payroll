@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Navbars @endslot
@slot('subtitle') Components @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Custom components -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom components</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Besides navigation, navbar component supports custom content such as: dropdowns with submenu, dropdown menus with custom content, full width dropdowns, language selection, forms, tabs, multi level menus, date pickers etc. Everything is adapted to use in different navbar color schemes and sizes. Examples below demonstrate some of these components, other examples related to <code>mega menu</code> can be found <a href="navigation_horizontal_mega">on this page</a>.</p>

            <div class="mb-4">
                <p>Mixed components</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-mixed">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-mixed">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">List</a>

                                    <div class="dropdown-menu start-0 end-0 py-0 mx-xl-3">
                                        <div class="p-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Form components</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="form_inputs" class="dropdown-item rounded">Basic inputs</a>
                                                        <a href="form_controls_extended" class="dropdown-item rounded">Extended controls</a>
                                                        <a href="form_select2" class="dropdown-item rounded">Select2 selects</a>
                                                        <a href="form_floating_labels" class="dropdown-item rounded">Floating labels</a>
                                                        <a href="form_validation" class="dropdown-item rounded">Validation</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">UI components</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="components_modals" class="dropdown-item rounded">Modals <span class="badge bg-secondary rounded-pill ms-auto">10+</span></a>
                                                        <a href="components_dropdowns" class="dropdown-item rounded">Dropdown menus</a>
                                                        <a href="components_buttons" class="dropdown-item rounded">Buttons</a>
                                                        <a href="components_tabs" class="dropdown-item rounded">Tabs component</a>
                                                        <a href="components_breadcrumbs" class="dropdown-item rounded">Breadcrumbs</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Sidebars</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="sidebar_default_collapse" class="dropdown-item rounded">Main sidebar</a>
                                                        <a href="sidebar_secondary_after" class="dropdown-item rounded">Secondary sidebar</a>
                                                        <a href="sidebar_right_default_collapse" class="dropdown-item rounded">Right sidebar</a>
                                                        <a href="sidebar_content_left" class="dropdown-item rounded">Content sidebar</a>
                                                        <a href="sidebar_components" class="dropdown-item rounded">Sidebar components</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Navigation</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="navigation_horizontal_click" class="dropdown-item rounded">Submenu on click</a>
                                                        <a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a>
                                                        <a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a>
                                                        <a href="navigation_horizontal_tabs" class="dropdown-item rounded">Tabbed navigation</a>
                                                        <a href="navigation_horizontal_mega" class="dropdown-item rounded">Horizontal mega menu</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Navbars</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="navbar_single_top_static" class="dropdown-item rounded">Single navbar</a>
                                                        <a href="navbar_multiple_top_static" class="dropdown-item rounded">Multiple navbars</a>
                                                        <a href="navbar_colors" class="dropdown-item rounded">Color options</a>
                                                        <a href="navbar_hideable" class="dropdown-item rounded">Hide on scroll</a>
                                                        <a href="navbar_components" class="dropdown-item rounded active">Navbar components</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Extensions</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-0">
                                                        <a href="jqueryui_interactions" class="dropdown-item rounded">jQuery UI</a>
                                                        <a href="animations_velocity_basic" class="dropdown-item rounded">Animations <span class="badge badge-pill badge-info ms-auto">14</span></a>
                                                        <a href="uploader_plupload" class="dropdown-item rounded">File uploaders</a>
                                                        <a href="extension_image_cropper" class="dropdown-item rounded">Image cropper</a>
                                                        <a href="fullcalendar_views" class="dropdown-item rounded">Calendars</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Tabs</a>

                                    <div class="dropdown-menu py-0 wmin-xl-350">
                                        <div class="d-flex align-items-center p-3 pb-2">
                                            <span class="fw-semibold">Tabs example</span>
                                            <a href="#" class="text-body ms-auto">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>

                                        <ul class="nav nav-tabs nav-tabs-underline nav-justified">
                                            <li class="nav-item">
                                                <a href="#tab1" class="nav-link active" data-bs-toggle="tab">
                                                    <i class="icon-compose me-2"></i>
                                                    Form example
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#tab2" class="nav-link" data-bs-toggle="tab">
                                                    <i class="icon-list3 me-2"></i>
                                                    List example
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab1">
                                                <form class="p-3" action="#">
                                                    <div class="form-control-feedback form-control-feedback-end mb-3">
                                                        <input type="text" class="form-control" placeholder="Your email">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-at"></i>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <select class="form-select">
                                                            <option value="updates" selected>Website updates</option>
                                                            <option value="discounts">Discount offers</option>
                                                            <option value="catalog">Catalog</option>
                                                            <option value="prints">Prints</option>
                                                            <option value="promo">Promotions</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
                                                    </div>

                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check mb-0">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Save as draft</span>
                                                        </label>

                                                        <button type="submit" class="btn btn-primary">
                                                            Submit
                                                            <i class="ph-paper-plane-tilt ms-2"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="tab2">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">James Alexander</a>
                                                            <div class="fs-sm text-muted">Santa Ana, CA.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                                            <div class="fs-sm text-muted">Dowagiac, MI.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Margo Baker</a>
                                                            <div class="fs-sm text-muted">Kasaan, AK.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                                            <div class="fs-sm text-muted">Neenah, WI.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Richard Vango</a>
                                                            <div class="fs-sm text-muted">Grapevine, TX.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Classic</a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Second level</a>
                                        <div class="dropdown-submenu">
                                            <a href="#" class="dropdown-item dropdown-toggle">Second level with child</a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Third level</a>
                                                <div class="dropdown-submenu">
                                                    <a href="#" class="dropdown-item dropdown-toggle">Third level with child</a>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="dropdown-item">Third level</a>
                                            </div>
                                        </div>
                                        <a href="#" class="dropdown-item">Second level</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto mt-2 mt-xl-0">
                                <li class="nav-item dropdown ms-lg-2">
                                    <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                        <div class="status-indicator-container">
                                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-sm" alt="">
                                            <span class="status-indicator bg-success"></span>
                                        </div>
                                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle me-2"></i>
                                            My profile
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-currency-circle-dollar me-2"></i>
                                            My subscription
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-shopping-cart me-2"></i>
                                            My orders
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope-open me-2"></i>
                                            My inbox
                                            <span class="badge bg-primary rounded-pill ms-auto">26</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Account settings
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-sign-out me-2"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-mixed2">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-mixed2">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">List</a>

                                    <div class="dropdown-menu start-0 end-0 py-0 mx-xl-3">
                                        <div class="p-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Form components</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="form_inputs" class="dropdown-item rounded">Basic inputs</a>
                                                        <a href="form_controls_extended" class="dropdown-item rounded">Extended controls</a>
                                                        <a href="form_select2" class="dropdown-item rounded">Select2 selects</a>
                                                        <a href="form_floating_labels" class="dropdown-item rounded">Floating labels</a>
                                                        <a href="form_validation" class="dropdown-item rounded">Validation</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">UI components</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="components_modals" class="dropdown-item rounded">Modals <span class="badge bg-secondary rounded-pill ms-auto">10+</span></a>
                                                        <a href="components_dropdowns" class="dropdown-item rounded">Dropdown menus</a>
                                                        <a href="components_buttons" class="dropdown-item rounded">Buttons</a>
                                                        <a href="components_tabs" class="dropdown-item rounded">Tabs component</a>
                                                        <a href="components_breadcrumbs" class="dropdown-item rounded">Breadcrumbs</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Sidebars</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="sidebar_default_collapse" class="dropdown-item rounded">Main sidebar</a>
                                                        <a href="sidebar_secondary_after" class="dropdown-item rounded">Secondary sidebar</a>
                                                        <a href="sidebar_right_default_collapse" class="dropdown-item rounded">Right sidebar</a>
                                                        <a href="sidebar_content_left" class="dropdown-item rounded">Content sidebar</a>
                                                        <a href="sidebar_components" class="dropdown-item rounded">Sidebar components</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Navigation</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="navigation_horizontal_click" class="dropdown-item rounded">Submenu on click</a>
                                                        <a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a>
                                                        <a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a>
                                                        <a href="navigation_horizontal_tabs" class="dropdown-item rounded">Tabbed navigation</a>
                                                        <a href="navigation_horizontal_mega" class="dropdown-item rounded">Horizontal mega menu</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Navbars</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-3 mb-xl-0">
                                                        <a href="navbar_single_top_static" class="dropdown-item rounded">Single navbar</a>
                                                        <a href="navbar_multiple_top_static" class="dropdown-item rounded">Multiple navbars</a>
                                                        <a href="navbar_colors" class="dropdown-item rounded">Color options</a>
                                                        <a href="navbar_hideable" class="dropdown-item rounded">Hide on scroll</a>
                                                        <a href="navbar_components" class="dropdown-item rounded active">Navbar components</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="dropdown-header fw-semibold p-0">Extensions</div>
                                                    <div class="dropdown-divider mb-2"></div>
                                                    <div class="mb-0">
                                                        <a href="jqueryui_interactions" class="dropdown-item rounded">jQuery UI</a>
                                                        <a href="animations_velocity_basic" class="dropdown-item rounded">Animations <span class="badge badge-pill badge-info ms-auto">14</span></a>
                                                        <a href="uploader_plupload" class="dropdown-item rounded">File uploaders</a>
                                                        <a href="extension_image_cropper" class="dropdown-item rounded">Image cropper</a>
                                                        <a href="fullcalendar_views" class="dropdown-item rounded">Calendars</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Tabs</a>

                                    <div class="dropdown-menu py-0 wmin-xl-350">
                                        <div class="d-flex align-items-center p-3 pb-2">
                                            <span class="fw-semibold">Tabs example</span>
                                            <a href="#" class="text-body ms-auto">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>

                                        <ul class="nav nav-tabs nav-tabs-underline nav-justified">
                                            <li class="nav-item">
                                                <a href="#tab_light1" class="nav-link active" data-bs-toggle="tab">
                                                    <i class="icon-compose me-2"></i>
                                                    Form example
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#tab_light2" class="nav-link" data-bs-toggle="tab">
                                                    <i class="icon-list3 me-2"></i>
                                                    List example
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab_light1">
                                                <form class="p-3" action="#">
                                                    <div class="form-control-feedback form-control-feedback-end mb-3">
                                                        <input type="text" class="form-control" placeholder="Your email">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-at"></i>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <select class="form-select">
                                                            <option value="updates" selected>Website updates</option>
                                                            <option value="discounts">Discount offers</option>
                                                            <option value="catalog">Catalog</option>
                                                            <option value="prints">Prints</option>
                                                            <option value="promo">Promotions</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
                                                    </div>

                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check mb-0">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Save as draft</span>
                                                        </label>

                                                        <button type="submit" class="btn btn-primary">
                                                            Submit
                                                            <i class="ph-paper-plane-tilt ms-2"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="tab_light2">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">James Alexander</a>
                                                            <div class="fs-sm text-muted">Santa Ana, CA.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                                            <div class="fs-sm text-muted">Dowagiac, MI.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Margo Baker</a>
                                                            <div class="fs-sm text-muted">Kasaan, AK.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start mb-3">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                                            <div class="fs-sm text-muted">Neenah, WI.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start">
                                                        <div class="status-indicator-container me-2">
                                                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                            <span class="status-indicator bg-success"></span>
                                                        </div>

                                                        <div class="flex-fill">
                                                            <a href="#" class="fw-semibold">Richard Vango</a>
                                                            <div class="fs-sm text-muted">Grapevine, TX.</div>
                                                        </div>

                                                        <div class="d-flex align-self-center ms-3">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-phone"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-envelope"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Classic</a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Second level</a>
                                        <div class="dropdown-submenu">
                                            <a href="#" class="dropdown-item dropdown-toggle">Second level with child</a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Third level</a>
                                                <div class="dropdown-submenu">
                                                    <a href="#" class="dropdown-item dropdown-toggle">Third level with child</a>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="dropdown-item">Third level</a>
                                            </div>
                                        </div>
                                        <a href="#" class="dropdown-item">Second level</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto mt-2 mt-xl-0">
                                <li class="nav-item dropdown ms-lg-2">
                                    <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                        <div class="status-indicator-container">
                                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-sm" alt="">
                                            <span class="status-indicator bg-success"></span>
                                        </div>
                                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle me-2"></i>
                                            My profile
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-currency-circle-dollar me-2"></i>
                                            My subscription
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-shopping-cart me-2"></i>
                                            My orders
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-envelope-open me-2"></i>
                                            My inbox
                                            <span class="badge bg-primary rounded-pill ms-auto">26</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Account settings
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-sign-out me-2"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Date range picker</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-daterange">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-daterange">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item daterange-ranges">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle">
                                        <i class="ph-calendar me-2"></i>
                                        <span></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="mt-2 mt-xl-0 ms-xl-auto">
                                <button type="button" class="btn btn-flat-white border-transparent w-100 w-xl-auto daterange-ranges-button dropdown-toggle">
                                    <i class="ph-calendar me-2"></i>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-daterange2">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-daterange2">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item daterange-ranges">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle">
                                        <i class="ph-calendar me-2"></i>
                                        <span></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="mt-2 mt-xl-0 ms-xl-auto">
                                <button type="button" class="btn btn-light w-100 w-xl-auto daterange-ranges-button dropdown-toggle">
                                    <i class="ph-calendar me-2"></i>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <p>Language selector</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-language">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-language">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item dropdown">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <img src="{{URL::asset('assets/images/lang/es.svg')}}" class="h-16px me-2" alt="">
                                        España
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">
                                            <img src="{{URL::asset('assets/images/lang/gb.svg')}}" class="h-16px me-2" alt="">
                                            English
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="{{URL::asset('assets/images/lang/ua.svg')}}" class="h-16px me-2" alt="">
                                            Українська
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="{{URL::asset('assets/images/lang/de.svg')}}" class="h-16px me-2" alt="">
                                            Deutsch
                                        </a>
                                        <a href="#" class="dropdown-item active">
                                            <img src="{{URL::asset('assets/images/lang/es.svg')}}" class="h-16px me-2" alt="">
                                            España
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <img src="{{URL::asset('assets/images/lang/gb.svg')}}" class="h-16px me-2" alt="">
                                        EN
                                    </a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <img src="{{URL::asset('assets/images/lang/de.svg')}}" class="h-16px me-2" alt="">
                                        DE
                                    </a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <img src="{{URL::asset('assets/images/lang/it.svg')}}" class="h-16px me-2" alt="">
                                        IT
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-language2">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-language2">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item dropdown">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <img src="{{URL::asset('assets/images/lang/es.svg')}}" class="h-16px me-2" alt="">
                                        España
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">
                                            <img src="{{URL::asset('assets/images/lang/gb.svg')}}" class="h-16px me-2" alt="">
                                            English
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="{{URL::asset('assets/images/lang/ua.svg')}}" class="h-16px me-2" alt="">
                                            Українська
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="{{URL::asset('assets/images/lang/de.svg')}}" class="h-16px me-2" alt="">
                                            Deutsch
                                        </a>
                                        <a href="#" class="dropdown-item active">
                                            <img src="{{URL::asset('assets/images/lang/es.svg')}}" class="h-16px me-2" alt="">
                                            España
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <img src="{{URL::asset('assets/images/lang/gb.svg')}}" class="h-16px me-2" alt="">
                                        EN
                                    </a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <img src="{{URL::asset('assets/images/lang/de.svg')}}" class="h-16px me-2" alt="">
                                        DE
                                    </a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <img src="{{URL::asset('assets/images/lang/it.svg')}}" class="h-16px me-2" alt="">
                                        IT
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /custom components -->


    <!-- Navbar navigation -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Navbar navigation</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">
                <h6>Basic navigation</h6>
                <p class="mb-3">Navbar navigation links build on our <code>.nav</code> options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code>.nav-item</code> and <code>.nav-link</code>.</p>

                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-navigation">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-navigation">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded active">Active link</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-navigation2">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-navigation2">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded active">Active link</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h6>Navigation icons</h6>
                <p class="mb-3">Navbar navigation supports icons: text with left and right positioned icons, multiple icons within 1 item, icons only and carets for items with dropdown menu. By default, sidebar control buttons are placed in the left navigation. To add icons, place <code>&lt;i></code> element with icon class to the navigation link element. To use with text, depending on the position place icon before or after item text. Use <code>.ms-2</code> or <code>.me-2</code> to add left/right spacer between the icon and nav link text.</p>

                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-navigation-icons">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-navigation-icons">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded active">
                                        <i class="ph-download-simple"></i>
                                        <span class="d-xl-none ms-2">Downloads</span>
                                    </a>
                                </li>

                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                        <i class="ph-chart-bar"></i>
                                        <span class="d-xl-none ms-2">My statistics</span>
                                    </a>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-list-dashes me-2"></i>
                                        Log
                                    </a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-sign-out me-2"></i>
                                        Logout
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                        <span class="d-xl-none ms-2">Settings</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-navigation-icons2">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-navigation-icons2">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded active">
                                        <i class="ph-download-simple"></i>
                                        <span class="d-xl-none ms-2">Downloads</span>
                                    </a>
                                </li>

                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                        <i class="ph-chart-bar"></i>
                                        <span class="d-xl-none ms-2">My statistics</span>
                                    </a>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-list-dashes me-2"></i>
                                        Log
                                    </a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-sign-out me-2"></i>
                                        Logout
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                        <span class="d-xl-none ms-2">Settings</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h6>Badges</h6>
                <p class="mb-3">Flexibility of the navbar navigation also allows you to use 2 kinds of badges - <code>inline</code> and <code>floating</code>. Both types can have left and right positions. To use inline badge, just add badge markup next to the text label, default placement is absolute with top-right position. To use left positioned elements, place it before text in inline version and use our utility classes to adjust position.</p>

                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid justify-content-start">
                        <div class="navbar-brand flex-1 flex-xl-0">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-squares-four"></i>
                                    <span class="badge bg-yellow text-black ms-2">New</span>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-list-checks"></i>
                                    <span class="badge bg-yellow text-black rounded-pill ms-2">89</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav ms-xl-auto">
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-envelope"></i>
                                    <span class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle mt-1">2</span>
                                </a>
                            </li>
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-check-square-offset"></i>
                                    <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">4</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid justify-content-start">
                        <div class="navbar-brand flex-1 flex-xl-0">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="d-none d-sm-inline-block text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-squares-four"></i>
                                    <span class="badge bg-yellow text-black ms-2">New</span>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-list-checks"></i>
                                    <span class="badge bg-yellow text-black rounded-pill ms-2">89</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav ms-xl-auto">
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-envelope"></i>
                                    <span class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle mt-1">2</span>
                                </a>
                            </li>
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-check-square-offset"></i>
                                    <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">4</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <h6>Badge marks</h6>
                <p class="mb-3">Instead of badges, which should contain text by default, navbar component supports badge marks - small rounded indicators. These indicators support all available colors and can have 2 different styles - circle and ring. To use ring, use a combination of our border, background and padding utility classes. Colors are controlled by color classes without any additional CSS. Both variations do not require <code>.badge</code> class by default. Also these indicators support left/right alignment and static/absolute positioning.</p>

                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid justify-content-start">
                        <div class="navbar-brand flex-1 flex-xl-0">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-squares-four"></i>
                                    <span class="bg-yellow rounded-pill p-1 ms-2"></span>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-list-checks"></i>
                                    <span class="border border-yellow rounded-pill p-1 ms-2"></span>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav ms-xl-auto">
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-envelope"></i>
                                    <span class="bg-yellow position-absolute top-0 end-0 rounded-pill p-1"></span>
                                </a>
                            </li>
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-check-square-offset"></i>
                                    <span class="border border-yellow position-absolute top-0 end-0 rounded-pill p-1"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid justify-content-start">
                        <div class="navbar-brand flex-1 flex-xl-0">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="d-none d-sm-inline-block text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-squares-four"></i>
                                    <span class="bg-yellow rounded-pill p-1 ms-2"></span>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-list-checks"></i>
                                    <span class="border border-yellow rounded-pill p-1 ms-2"></span>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav ms-xl-auto">
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-envelope"></i>
                                    <span class="bg-yellow position-absolute top-0 end-0 rounded-pill p-1"></span>
                                </a>
                            </li>
                            <li class="nav-item position-relative ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-check-square-offset"></i>
                                    <span class="border border-yellow position-absolute top-0 end-0 rounded-pill p-1"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /navbar navigation -->


    <!-- Basic components -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic components</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">
                <h6>Navbar buttons</h6>
                <p class="mb-3">Various buttons are supported as part of navbar components. This is also a great reminder that vertical alignment utilities can be used to align different sized elements. Button groups and button dropdowns in different colors, sizes and styles are also supported. For multiple buttons, use reponsive <code>spacing</code> utility classes for proper vertical and horizontal alignment.

                    <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                        <div class="container-fluid">
                            <div class="navbar-brand">
                                <a href="index" class="d-inline-flex align-items-center">
                                    <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                    <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                                </a>
                            </div>

                            <div class="d-xl-none">
                                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-buttons">
                                    <i class="ph-list"></i>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse" id="navbar-buttons">
                                <div class="mt-3 mt-xl-0">
                                    <button type="button" class="btn btn-outline-light me-2" data-color-theme="dark">Button</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-yellow dropdown-toggle" data-bs-toggle="dropdown">Menu</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                    <button type="button" class="btn btn-light" data-color-theme="dark">
                                        <i class="ph-gear me-2"></i>
                                        Settings
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navbar navbar-expand-xl border rounded">
                        <div class="container-fluid">
                            <div class="navbar-brand">
                                <a href="index" class="d-inline-flex align-items-center">
                                    <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                    <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                                </a>
                            </div>

                            <div class="d-xl-none">
                                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-buttons2">
                                    <i class="ph-list"></i>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse" id="navbar-buttons2">
                                <div class="mt-3 mt-xl-0">
                                    <button type="button" class="btn btn-outline-primary me-2">Button</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Menu</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                    <button type="button" class="btn btn-light">
                                        <i class="ph-gear me-2"></i>
                                        Settings
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="mb-4">
                <h6>Navbar text</h6>
                <p class="mb-3">Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;span&gt;</code> tag for proper leading and color. This class adjusts vertical alignment and horizontal spacing for strings of text. In some cases links within <code>.navbar-text</code> may need color adjustments, use <code>color</code> utility classes to style links properly.

                    <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                        <div class="container-fluid">
                            <div class="navbar-brand">
                                <a href="index" class="d-inline-flex align-items-center">
                                    <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                    <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                                </a>
                            </div>

                            <div class="d-xl-none">
                                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-text">
                                    <i class="ph-list"></i>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse" id="navbar-text">
                                <span class="navbar-text d-block d-xl-inline-block">
                                    <i class="ph-user-circle me-1"></i>
                                    Signed in as
                                    <a href="#">Eugene</a>
                                </span>

                                <span class="navbar-text ms-xl-auto">
                                    <i class="ph-bell me-1"></i>
                                    12 new messages
                                </span>

                                <ul class="navbar-nav mt-2 mt-xl-0 ms-xl-3">
                                    <li class="nav-item">
                                        <a href="#" class="navbar-nav-link rounded">Link</a>
                                    </li>
                                    <li class="nav-item dropdown ms-xl-1">
                                        <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="navbar navbar-expand-xl border rounded">
                        <div class="container-fluid">
                            <div class="navbar-brand">
                                <a href="index" class="d-inline-flex align-items-center">
                                    <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                    <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                                </a>
                            </div>

                            <div class="d-xl-none">
                                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-text2">
                                    <i class="ph-list"></i>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse" id="navbar-text2">
                                <span class="navbar-text d-block d-xl-inline-block">
                                    <i class="ph-user-circle me-1"></i>
                                    Signed in as
                                    <a href="#">Eugene</a>
                                </span>

                                <span class="navbar-text ms-xl-auto">
                                    <i class="ph-bell me-1"></i>
                                    12 new messages
                                </span>

                                <ul class="navbar-nav mt-2 mt-xl-0 ms-xl-3">
                                    <li class="nav-item">
                                        <a href="#" class="navbar-nav-link rounded">Link</a>
                                    </li>
                                    <li class="nav-item dropdown ms-xl-1">
                                        <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>

            <div>
                <h6>Progress bars</h6>
                <p class="mb-3">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars. Progress bars inside navbar support all possible styling options: colors, animations, labels, appearance, sizes etc. Also you can add text and icon labels to display current action, it's also available in both left and right positions.</p>

                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-progress">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-progress">
                            <div class="progress mt-2 mt-xl-0 wmin-xl-200" data-color-theme="dark">
                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="navbar-text ms-xl-auto">
                                <i class="ph-spinner spinner me-2"></i>
                                Loading data
                            </div>

                            <div class="progress ms-xl-3 mb-2 mb-xl-0 wmin-xl-200" data-color-theme="dark">
                                <div class="progress-bar bg-teal progress-bar-striped progress-bar-animated" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-progress2">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-progress2">
                            <div class="progress mt-2 mt-xl-0 wmin-xl-200">
                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="navbar-text ms-xl-auto">
                                <i class="ph-spinner spinner me-2"></i>
                                Loading data
                            </div>

                            <div class="progress ms-xl-3 mb-2 mb-xl-0 wmin-xl-200">
                                <div class="progress-bar bg-teal progress-bar-striped progress-bar-animated" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic components -->


    <!-- Navbar forms -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Form components</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Place form content within container with <code>spacing</code> utility classes for proper vertical alignment and collapsed behavior in narrow viewports. Use the <code>alignment</code> options to decide where it resides within the navbar content. Navbar supports all form components: checkboxes, radios, default and custom selects, file inputs etc. Some form controls, like input groups, may require <code>width</code> utility classes to be show up properly within a navbar.</p>

            <div class="mb-4">
                <p>Basic form controls</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-basic-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-basic-dark">
                            <form class="mt-3 mt-xl-0">
                                <input type="text" class="form-control bg-transparent wmin-xl-200" placeholder="Text field" data-color-theme="dark">
                            </form>

                            <form class="d-flex align-items-center flex-nowrap flex-xl-nowrap mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <input type="text" class="form-control bg-transparent wmin-xl-200" placeholder="Text field with button" data-color-theme="dark">
                                <button type="submit" class="btn btn-primary ms-3 ms-xl-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-basic-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-basic-light">
                            <form class="mt-3 mt-xl-0">
                                <input type="text" class="form-control wmin-xl-200" placeholder="Text field">
                            </form>

                            <form class="d-flex align-items-center flex-nowrap flex-xl-nowrap mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <input type="text" class="form-control wmin-xl-200" placeholder="Text field with button">
                                <button type="submit" class="btn btn-primary ms-3 ms-xl-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Default and custom selects</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-selects-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-selects-dark">
                            <form class="mt-3 mt-xl-0">
                                <select class="form-select bg-transparent wmin-xl-200" data-color-theme="dark">
                                    <option value="">Select your state</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                    <option value="AZ">Arizona</option>
                                </select>
                            </form>

                            <form class="d-flex align-items-center flex-nowrap flex-xl-nowrap mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <select class="form-select bg-transparent wmin-xl-200" data-color-theme="dark">
                                    <option value="">Select your state</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                    <option value="AZ">Arizona</option>
                                </select>
                                <button type="submit" class="btn btn-primary ms-3 ms-xl-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-selects-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-selects-light">
                            <form class="mt-3 mt-xl-0">
                                <select class="form-select wmin-xl-200">
                                    <option value="">Select your state</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                    <option value="AZ">Arizona</option>
                                </select>
                            </form>

                            <form class="d-flex align-items-center flex-nowrap flex-xl-nowrap mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <select class="form-select wmin-xl-200">
                                    <option value="">Select your state</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                    <option value="AZ">Arizona</option>
                                </select>
                                <button type="submit" class="btn btn-primary ms-3 ms-xl-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Input group, file select</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-inputs-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-inputs-dark">
                            <div class="mt-3 mt-xl-0">
                                <div class="input-group" data-color-theme="dark">
                                    <span class="input-group-text">
                                        <i class="ph-spinner spinner"></i>
                                    </span>
                                    <input type="text" class="form-control bg-transparent wmin-xl-200" placeholder="Input group">
                                    <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end" data-color-theme="light">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <input type="file" class="form-control bg-transparent wmin-xl-200" data-color-theme="dark">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-inputs-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-inputs-light">
                            <div class="mt-3 mt-xl-0">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="ph-spinner spinner"></i>
                                    </span>
                                    <input type="text" class="form-control wmin-xl-200" placeholder="Input group">
                                    <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <input type="file" class="form-control wmin-xl-200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Input with icons</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-icons-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-icons-dark">
                            <div class="mt-3 mt-xl-0">
                                <div class="form-control-feedback form-control-feedback-start mb-3 mb-xl-0" data-color-theme="dark">
                                    <input type="search" class="form-control bg-transparent wmin-xl-200" placeholder="Search field">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <div class="form-control-feedback form-control-feedback-end" data-color-theme="dark">
                                    <input type="text" class="form-control bg-transparent wmin-xl-200" placeholder="Text field">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-spinner spinner"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-icons-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-icons-light">
                            <div class="mt-3 mt-xl-0">
                                <div class="form-control-feedback form-control-feedback-start mb-3 mb-xl-0">
                                    <input type="search" class="form-control wmin-xl-200" placeholder="Search field">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <div class="form-control-feedback form-control-feedback-end">
                                    <input type="text" class="form-control wmin-xl-200" placeholder="Text field">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-spinner spinner"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Select2 select</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-select2-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-select2-dark">
                            <div class="mt-3 mt-xl-0">
                                <div class="wmin-xl-200" data-color-theme="dark">
                                    <select class="form-control form-control-select2" data-container-css-class="bg-transparent">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <div class="wmin-xl-250" data-color-theme="dark">
                                    <select class="form-control form-control-select2" multiple="multiple" data-container-css-class="bg-transparent">
                                        <option value="AK" selected>Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR" selected>Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-select2-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-select2-light">
                            <div class="mt-3 mt-xl-0">
                                <div class="wmin-xl-200">
                                    <select class="form-control form-control-select2">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <div class="wmin-xl-250">
                                    <select class="form-control form-control-select2" multiple="multiple">
                                        <option value="AK" selected>Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR" selected>Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Multiselect select</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-multiselect-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-multiselect-dark">
                            <div class="mt-3 mt-xl-0">
                                <div class="wmin-xl-200" data-color-theme="dark">
                                    <select class="form-control form-control-multiselect" data-button-class="btn bg-transparent">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <div class="wmin-xl-200" data-color-theme="dark">
                                    <select class="form-control form-control-multiselect" data-button-class="btn bg-transparent" multiple="multiple">
                                        <option value="AK" selected>Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV" selected>Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-multiselect-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-multiselect-light">
                            <div class="mt-3 mt-xl-0">
                                <div class="wmin-xl-200">
                                    <select class="form-control form-control-multiselect">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <div class="wmin-xl-200">
                                    <select class="form-control form-control-multiselect" multiple="multiple">
                                        <option value="AK" selected>Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV" selected>Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Checkboxes - both alignment</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-checks-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-checks-dark">
                            <div class="hstack gap-3 mt-3 mt-xl-0" data-color-theme="dark">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>

                            <div class="hstack gap-3 mt-3 mb-2 my-xl-0 ms-xl-auto" data-color-theme="dark">
                                <label class="form-check form-check-reverse">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check form-check-reverse">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-checks-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-checks-light">
                            <div class="hstack gap-3 mt-3 mt-xl-0">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>

                            <div class="hstack gap-3 mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <label class="form-check form-check-reverse">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check form-check-reverse">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <p>Radios - both alignment</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-radios-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-radios-dark">
                            <div class="hstack gap-3 mt-3 mt-xl-0" data-color-theme="dark">
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="navbar-dark-radio-left" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="navbar-dark-radio-left">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>

                            <div class="hstack gap-3 mt-3 mb-2 my-xl-0 ms-xl-auto" data-color-theme="dark">
                                <label class="form-check form-check-reverse">
                                    <input type="radio" class="form-check-input" name="navbar-dark-radio-right" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check form-check-reverse">
                                    <input type="radio" class="form-check-input" name="navbar-dark-radio-right">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-radios-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-radios-light">
                            <div class="hstack gap-3 mt-3 mt-xl-0">
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="navbar-light-radio-left" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="navbar-light-radio-left">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>

                            <div class="hstack gap-3 mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <label class="form-check form-check-reverse">
                                    <input type="radio" class="form-check-input" name="navbar-light-radio-right" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>

                                <label class="form-check form-check-reverse">
                                    <input type="radio" class="form-check-input" name="navbar-light-radio-right">
                                    <span class="form-check-label">Unchecked</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <p>Switches</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded mb-2">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-toggles-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-toggles-dark">
                            <div class="mt-3 mt-xl-0">
                                <label class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" checked data-color-theme="dark">
                                    <span class="form-check-label">Checked</span>
                                </label>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <label class="form-check form-switch form-check-reverse">
                                    <input type="checkbox" class="form-check-input" checked data-color-theme="dark">
                                    <span class="form-check-label">Refresh</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-expand-xl border rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-form-toggles-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-form-toggles-light">
                            <div class="mt-3 mt-xl-0">
                                <label class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Checked</span>
                                </label>
                            </div>

                            <div class="mt-3 mb-2 my-xl-0 ms-xl-auto">
                                <label class="form-check form-switch form-check-reverse">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Refresh</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /navbar forms -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/pickers/daterangepicker.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/navbar_components.js')}}"></script>
@endsection
