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
    <script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    @include('layouts.navbar')

    <!-- Page content -->
    <div class="page-content">

        @include('layouts.sidebar-detached')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @component('components.breadcrumb')
                @slot('title') Horizontal Nav @endslot
                @slot('subtitle') Mega Menu @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Nav lists -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Nav lists</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Dropdown menu markup can be used in 12 columns grid, aligned to the left and right, have single or multiple levels, have 100% width and contain all available inline elements (badges, checkboxes, radios, headers, dividers etc). Nested levels are implemented with our regular pills component, which is fully adapted for mobile screens. None of the dropdown options require any additional class names, all is done with utility class names.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-nav-lists">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse wmin-0" id="navbar-nav-lists">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Multi columns menu</a>

                                                <div class="dropdown-menu start-auto w-xl-50 p-3">
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Form components</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="form_inputs.html" class="dropdown-item rounded">Basic inputs</a>
                                                                <a href="form_controls_extended.html" class="dropdown-item rounded">Extended controls</a>
                                                                <a href="form_select2.html" class="dropdown-item rounded">Select2 selects</a>
                                                                <a href="form_validation.html" class="dropdown-item rounded">Validation</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">UI components</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="components_modals.html" class="dropdown-item rounded">Modals <span class="badge bg-secondary rounded-pill ms-auto">10+</span></a>
                                                                <a href="components_dropdowns.html" class="dropdown-item rounded">Dropdown menus</a>
                                                                <a href="components_buttons.html" class="dropdown-item rounded">Buttons</a>
                                                                <a href="components_tabs.html" class="dropdown-item rounded">Tabs component</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Navigation</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="navigation_horizontal_hover.html" class="dropdown-item rounded">Submenu on hover</a>
                                                                <a href="navigation_horizontal_elements.html" class="dropdown-item rounded">With custom elements</a>
                                                                <a href="navigation_horizontal_tabs.html" class="dropdown-item rounded">Tabbed navigation</a>
                                                                <a href="navigation_horizontal_mega.html" class="dropdown-item rounded active">Horizontal mega menu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Grid list</a>

                                                <div class="dropdown-menu start-0 end-0 p-3 mx-xl-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Form components</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="form_inputs.html" class="dropdown-item rounded">Basic inputs</a>
                                                                <a href="form_controls_extended.html" class="dropdown-item rounded">Extended controls</a>
                                                                <a href="form_select2.html" class="dropdown-item rounded">Select2 selects</a>
                                                                <a href="form_floating_labels.html" class="dropdown-item rounded">Floating labels</a>
                                                                <a href="form_validation.html" class="dropdown-item rounded">Validation</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">UI components</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="components_modals.html" class="dropdown-item rounded">Modals <span class="badge bg-secondary rounded-pill ms-auto">10+</span></a>
                                                                <a href="components_dropdowns.html" class="dropdown-item rounded">Dropdown menus</a>
                                                                <a href="components_buttons.html" class="dropdown-item rounded">Buttons</a>
                                                                <a href="components_tabs.html" class="dropdown-item rounded">Tabs component</a>
                                                                <a href="components_breadcrumbs.html" class="dropdown-item rounded">Breadcrumbs</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Sidebars</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="sidebar_default_collapse.html" class="dropdown-item rounded">Main sidebar</a>
                                                                <a href="sidebar_secondary_after.html" class="dropdown-item rounded">Secondary sidebar</a>
                                                                <a href="sidebar_right_default_collapse.html" class="dropdown-item rounded">Right sidebar</a>
                                                                <a href="sidebar_content_left.html" class="dropdown-item rounded">Content sidebar</a>
                                                                <a href="sidebar_components.html" class="dropdown-item rounded">Sidebar components</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Navigation</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="navigation_horizontal_click.html" class="dropdown-item rounded">Submenu on click</a>
                                                                <a href="navigation_horizontal_hover.html" class="dropdown-item rounded">Submenu on hover</a>
                                                                <a href="navigation_horizontal_elements.html" class="dropdown-item rounded">With custom elements</a>
                                                                <a href="navigation_horizontal_tabs.html" class="dropdown-item rounded">Tabbed navigation</a>
                                                                <a href="navigation_horizontal_mega.html" class="dropdown-item rounded active">Horizontal mega menu</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Navbars</div>
                                                            <div class="mb-3 mb-xl-0">
                                                                <a href="navbar_single_top_static.html" class="dropdown-item rounded">Single navbar</a>
                                                                <a href="navbar_multiple_top_static.html" class="dropdown-item rounded">Multiple navbars</a>
                                                                <a href="navbar_colors.html" class="dropdown-item rounded">Color options</a>
                                                                <a href="navbar_hideable.html" class="dropdown-item rounded">Hide on scroll</a>
                                                                <a href="navbar_components.html" class="dropdown-item rounded">Navbar components</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="fw-bold border-bottom pb-2 mb-2">Extensions</div>
                                                            <div class="mb-0">
                                                                <a href="jqueryui_interactions.html" class="dropdown-item rounded">jQuery UI</a>
                                                                <a href="animations_velocity_basic.html" class="dropdown-item rounded">Animations <span class="badge bg-info rounded-pill ms-auto">14</span></a>
                                                                <a href="uploader_plupload.html" class="dropdown-item rounded">File uploaders</a>
                                                                <a href="extension_image_cropper.html" class="dropdown-item rounded">Image cropper</a>
                                                                <a href="fullcalendar_views.html" class="dropdown-item rounded">Calendars</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Multi level grid list</a>

                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="d-xl-flex">
                                                        <div class="d-flex flex-row flex-xl-column bg-light overflow-auto overflow-xl-visible rounded-top rounded-top-xl-0 rounded-start-xl">
                                                            <div class="flex-1 border-bottom border-bottom-xl-0 p-2 p-xl-3">
                                                                <div class="fw-bold border-bottom d-none d-xl-block pb-2 mb-2">Navigation</div>
                                                                <ul class="nav nav-pills flex-xl-column flex-nowrap text-nowrap justify-content-center wmin-xl-300">
                                                                    <li class="nav-item">
                                                                        <a href="#tab_page_demo" class="nav-link rounded active" data-bs-toggle="tab">
                                                                            <i class="ph-layout me-2"></i>
                                                                            Page
                                                                            <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#tab_navbars_demo" class="nav-link rounded" data-bs-toggle="tab">
                                                                            <i class="ph-rows me-2"></i>
                                                                            Navbars
                                                                            <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#tab_sidebar_types_demo" class="nav-link rounded" data-bs-toggle="tab">
                                                                            <i class="ph-columns me-2"></i>
                                                                            Sidebar types
                                                                            <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#tab_sidebar_content_demo" class="nav-link rounded" data-bs-toggle="tab">
                                                                            <i class="ph-square-half me-2"></i>
                                                                            Sidebar content
                                                                            <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#tab_navigation_demo" class="nav-link rounded" data-bs-toggle="tab">
                                                                            <i class="ph-list-dashes me-2"></i>
                                                                            Navigation
                                                                            <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="tab-content flex-xl-1">
                                                            <div class="tab-pane dropdown-scrollable-xl fade show active p-3" id="tab_page_demo">
                                                                <div class="row">
                                                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Sections</div>
                                                                        <a href="layout_no_header.html" class="dropdown-item rounded">No header</a>
                                                                        <a href="layout_no_footer.html" class="dropdown-item rounded">No footer</a>
                                                                        <a href="layout_fixed_header.html" class="dropdown-item rounded">Fixed header</a>
                                                                        <a href="layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                                                                    </div>

                                                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Sidebars</div>
                                                                        <a href="layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1 side</a>
                                                                        <a href="layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2 sides</a>
                                                                        <a href="layout_3_sidebars.html" class="dropdown-item rounded">3 sidebars</a>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Layout</div>
                                                                        <a href="layout_static.html" class="dropdown-item rounded">Static layout</a>
                                                                        <a href="layout_boxed_page.html" class="dropdown-item rounded">Boxed page</a>
                                                                        <a href="layout_liquid_content.html" class="dropdown-item rounded">Liquid content</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_navbars_demo">
                                                                <div class="row">
                                                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Single</div>
                                                                        <a href="navbar_single_bottom_fixed.html" class="dropdown-item rounded">Bottom fixed</a>
                                                                        <a href="navbar_single_header_before.html" class="dropdown-item rounded">Before page header</a>
                                                                        <a href="navbar_single_header_before_fixed.html" class="dropdown-item rounded">Before page header fixed</a>
                                                                        <a href="navbar_single_header_after.html" class="dropdown-item rounded">After page header</a>
                                                                        <a href="navbar_single_header_after_sticky.html" class="dropdown-item rounded">After page header sticky</a>
                                                                    </div>

                                                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Multiple</div>
                                                                        <a href="navbar_multiple_top_static.html" class="dropdown-item rounded">Top static</a>
                                                                        <a href="navbar_multiple_top_fixed.html" class="dropdown-item rounded">Top fixed</a>
                                                                        <a href="navbar_multiple_bottom_static.html" class="dropdown-item rounded">Bottom static</a>
                                                                        <a href="navbar_multiple_bottom_fixed.html" class="dropdown-item rounded">Bottom fixed</a>
                                                                        <a href="navbar_multiple_top_bottom_fixed.html" class="dropdown-item rounded">Top and bottom fixed</a>
                                                                    </div>

                                                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Content</div>
                                                                        <a href="navbar_component_single.html" class="dropdown-item rounded">Single navbar</a>
                                                                        <a href="navbar_component_multiple.html" class="dropdown-item rounded">Multiple navbars</a>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Other</div>
                                                                        <a href="navbar_colors.html" class="dropdown-item rounded">Color options</a>
                                                                        <a href="navbar_sizes.html" class="dropdown-item rounded">Sizing options</a>
                                                                        <a href="navbar_components.html" class="dropdown-item rounded">Navbar components</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_sidebar_types_demo">
                                                                <div class="row">
                                                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Main</div>
                                                                        <a href="sidebar_default_resizable.html" class="dropdown-item rounded">Resizable</a>
                                                                        <a href="sidebar_default_resized.html" class="dropdown-item rounded">Resized</a>
                                                                        <a href="sidebar_default_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                                                                        <a href="sidebar_default_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                                                                        <a href="sidebar_default_hideable.html" class="dropdown-item rounded">Hideable</a>
                                                                        <a href="sidebar_default_hidden.html" class="dropdown-item rounded">Hidden</a>
                                                                        <a href="sidebar_default_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                                                    </div>

                                                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Secondary</div>
                                                                        <a href="sidebar_secondary_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                                                                        <a href="sidebar_secondary_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                                                                        <a href="sidebar_secondary_hideable.html" class="dropdown-item rounded">Hideable</a>
                                                                        <a href="sidebar_secondary_hidden.html" class="dropdown-item rounded">Hidden</a>
                                                                        <a href="sidebar_secondary_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                                                    </div>

                                                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Right</div>
                                                                        <a href="sidebar_right_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                                                                        <a href="sidebar_right_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                                                                        <a href="sidebar_right_hideable.html" class="dropdown-item rounded">Hideable</a>
                                                                        <a href="sidebar_right_hidden.html" class="dropdown-item rounded">Hidden</a>
                                                                        <a href="sidebar_right_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Content</div>
                                                                        <a href="sidebar_content_left.html" class="dropdown-item rounded">Left aligned</a>
                                                                        <a href="sidebar_content_left_stretch.html" class="dropdown-item rounded">Left stretched</a>
                                                                        <a href="sidebar_content_left_sections.html" class="dropdown-item rounded">Left sectioned</a>
                                                                        <a href="sidebar_content_right.html" class="dropdown-item rounded">Right aligned</a>
                                                                        <a href="sidebar_content_right_stretch.html" class="dropdown-item rounded">Right stretched</a>
                                                                        <a href="sidebar_content_right_sections.html" class="dropdown-item rounded">Right sectioned</a>
                                                                        <a href="sidebar_content_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_sidebar_content_demo">
                                                                <div class="row">
                                                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Sticky areas</div>
                                                                        <a href="sidebar_sticky_header.html" class="dropdown-item rounded">Header</a>
                                                                        <a href="sidebar_sticky_footer.html" class="dropdown-item rounded">Footer</a>
                                                                        <a href="sidebar_sticky_header_footer.html" class="dropdown-item rounded">Header and footer</a>
                                                                        <a href="sidebar_sticky_custom.html" class="dropdown-item rounded">Custom elements</a>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Other</div>
                                                                        <a href="sidebar_components.html" class="dropdown-item rounded">Sidebar components</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_navigation_demo">
                                                                <div class="row">
                                                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Vertical</div>
                                                                        <a href="navigation_vertical_collapsible.html" class="dropdown-item rounded">Collapsible menu</a>
                                                                        <a href="navigation_vertical_accordion.html" class="dropdown-item rounded">Accordion menu</a>
                                                                        <a href="navigation_vertical_bordered.html" class="dropdown-item rounded">Bordered navigation</a>
                                                                        <a href="navigation_vertical_right_icons.html" class="dropdown-item rounded">Right icons</a>
                                                                        <a href="navigation_vertical_badges.html" class="dropdown-item rounded">Badges</a>
                                                                        <a href="navigation_vertical_disabled.html" class="dropdown-item rounded">Disabled items</a>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Horizontal</div>
                                                                        <a href="navigation_horizontal_click.html" class="dropdown-item rounded">Submenu on click</a>
                                                                        <a href="navigation_horizontal_hover.html" class="dropdown-item rounded">Submenu on hover</a>
                                                                        <a href="navigation_horizontal_elements.html" class="dropdown-item rounded">With custom elements</a>
                                                                        <a href="navigation_horizontal_tabs.html" class="dropdown-item rounded">Tabbed navigation</a>
                                                                        <a href="navigation_horizontal_disabled.html" class="dropdown-item rounded">Disabled navigation links</a>
                                                                        <a href="navigation_horizontal_mega.html" class="dropdown-item rounded">Horizontal mega menu</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Right multi level menu</a>

                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Second level</a>
                                                    <div class="dropdown-submenu">
                                                        <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                                        <div class="dropdown-menu">
                                                            <a href="#" class="dropdown-item">Third level</a>
                                                            <div class="dropdown-submenu">
                                                                <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                                                <div class="dropdown-menu">
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

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Left multi level menu</a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Second level</a>
                                                    <div class="dropdown-submenu dropdown-submenu-start">
                                                        <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                                        <div class="dropdown-menu">
                                                            <a href="#" class="dropdown-item">Third level</a>
                                                            <div class="dropdown-submenu dropdown-submenu-start">
                                                                <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                                                <div class="dropdown-menu">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /nav lists -->


                    <!-- Content lists -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Content lists</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Besides simple navigation lists, dropdown menu can contain more complex lists of content: horizontal and vertical buttons list, all types of media lists, progress bars and lists, language selection etc etc. Just use standard content lists markup, custom mega menu markup and adjust menu width accordingly. For long lists, add <code>.dropdown-menu-scrollable</code> class to dropdown menu container to limit height to <code>340px</code> and make the content scrollable. You can also use color utility classes to change menu color, but bear in mind that some elements require color adjustments in this case.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content-lists">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="navbar-content-lists">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Media list</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Media list</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-magnifying-glass"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="d-flex mb-3">
                                                            <div class="me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="#" class="fw-semibold">Jordana Ansley</a>
                                                                <div class="fs-sm text-muted">Lead web developer</div>
                                                            </div>
                                                            <div class="ms-3 align-self-center">
                                                                <div class="bg-success rounded-pill p-1"></div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mb-3">
                                                            <div class="me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="#" class="fw-semibold">Will Brason</a>
                                                                <div class="fs-sm text-muted">Marketing manager</div>
                                                            </div>
                                                            <div class="ms-3 align-self-center">
                                                                <div class="bg-danger rounded-pill p-1"></div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mb-3">
                                                            <div class="me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="#" class="fw-semibold">Hanna Walden</a>
                                                                <div class="fs-sm text-muted">Project manager</div>
                                                            </div>
                                                            <div class="ms-3 align-self-center">
                                                                <div class="bg-success rounded-pill p-1"></div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mb-3">
                                                            <div class="me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="#" class="fw-semibold">Dori Laperriere</a>
                                                                <div class="fs-sm text-muted">Business developer</div>
                                                            </div>
                                                            <div class="ms-3 align-self-center">
                                                                <div class="bg-warning rounded-pill p-1"></div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="#" class="fw-semibold">Vanessa Aurelius</a>
                                                                <div class="fs-sm text-muted">UX expert</div>
                                                            </div>
                                                            <div class="ms-3 align-self-center">
                                                                <div class="bg-secondary rounded-pill p-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Linked media list</a>

                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center border-bottom p-3">
                                                        <span class="fw-bold">Linked list</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-magnifying-glass"></i>
                                                        </a>
                                                    </div>

                                                    <div class="dropdown-menu-scrollable py-2">
                                                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                                            <div class="status-indicator-container me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                                <span class="status-indicator bg-warning"></span>
                                                            </div>

                                                            <div class="flex-1">
                                                                <span class="fw-semibold">James Alexander</span>
                                                                <span class="text-muted float-end fs-sm">04:58</span>
                                                                <div class="text-muted">who knows, maybe that would be the best thing for me...</div>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                                            <div class="status-indicator-container me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                                <span class="status-indicator bg-success"></span>
                                                            </div>

                                                            <div class="flex-1">
                                                                <span class="fw-semibold">Margo Baker</span>
                                                                <span class="text-muted float-end fs-sm">12:16</span>
                                                                <div class="text-muted">That was something he was unable to do because...</div>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                                            <div class="status-indicator-container me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                                <span class="status-indicator bg-success"></span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <span class="fw-semibold">Jeremy Victorino</span>
                                                                <span class="text-muted float-end fs-sm">22:48</span>
                                                                <div class="text-muted">But that would be extremely strained and suspicious...</div>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                                            <div class="status-indicator-container me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                                <span class="status-indicator bg-black bg-opacity-50"></span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <span class="fw-semibold">Beatrix Diaz</span>
                                                                <span class="text-muted float-end fs-sm">Tue</span>
                                                                <div class="text-muted">What a strenuous career it is that I've chosen...</div>
                                                            </div>
                                                        </a>

                                                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                                            <div class="status-indicator-container me-3">
                                                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                                                <span class="status-indicator bg-danger"></span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <span class="fw-semibold">Richard Vango</span>
                                                                <span class="text-muted float-end fs-sm">Mon</span>
                                                                <div class="text-muted">Other travelling salesmen live a life of luxury...</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Progress list</a>

                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Progress bars</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="dropdown-scrollable p-3">
                                                        <div class="mb-3">
                                                            <div class="d-flex align-items-center mb-1">CPU usage <span class="ms-auto">50%</span></div>
                                                            <div class="progress" style="height: 0.125rem;">
                                                                <div class="progress-bar bg-info" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="d-flex align-items-center mb-1">RAM usage <span class="ms-auto">70%</span></div>
                                                            <div class="progress" style="height: 0.125rem;">
                                                                <div class="progress-bar bg-danger" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="d-flex align-items-center mb-1">Disc space <span class="ms-auto">80%</span></div>
                                                            <div class="progress" style="height: 0.125rem;">
                                                                <div class="progress-bar bg-success" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <div class="d-flex align-items-center mb-1">Bandwidth <span class="ms-auto">60%</span></div>
                                                            <div class="progress" style="height: 0.125rem;">
                                                                <div class="progress-bar bg-primary" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Link tiles</a>

                                                <div class="dropdown-menu start-auto wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center p-3 border-bottom">
                                                        <span class="fw-bold">Link tiles</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-1">
                                                        <div class="row g-0">
                                                            <div class="col col-sm-4">
                                                                <a href="#" class="d-block text-body text-center p-2 my-2">
                                                                    <i class="ph-gitlab-logo text-warning ph-2x"></i>
                                                                    <div>Github</div>
                                                                </a>

                                                                <a href="#" class="d-block text-body text-center p-2 my-2">
                                                                    <i class="ph-behance-logo text-primary ph-2x"></i>
                                                                    <div>Behance</div>
                                                                </a>
                                                            </div>

                                                            <div class="col col-sm-4">
                                                                <a href="#" class="d-block text-body text-center p-2 my-2">
                                                                    <i class="ph-dribbble-logo text-pink ph-2x"></i>
                                                                    <div>Dribbble</div>
                                                                </a>

                                                                <a href="#" class="d-block text-body text-center p-2 my-2">
                                                                    <i class="ph-figma-logo text-indigo ph-2x"></i>
                                                                    <div>Figma</div>
                                                                </a>
                                                            </div>

                                                            <div class="col col-sm-4">
                                                                <a href="#" class="d-block text-body text-center p-2 my-2">
                                                                    <i class="ph-twitter-logo text-info ph-2x"></i>
                                                                    <div>Twitter</div>
                                                                </a>

                                                                <a href="#" class="d-block text-body text-center p-2 my-2">
                                                                    <i class="ph-youtube-logo text-danger ph-2x"></i>
                                                                    <div>Youtube</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                                                    <img src="{{URL::asset('assets/images/lang/es.svg')}}" class="h-16px me-2" alt="">
                                                    Languages
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item english">
                                                        <img src="{{URL::asset('assets/images/lang/gb.svg')}}" class="h-16px me-2" alt="">
                                                        English
                                                    </a>
                                                    <a href="#" class="dropdown-item ukrainian">
                                                        <img src="{{URL::asset('assets/images/lang/ua.svg')}}" class="h-16px me-2" alt="">
                                                        Українська
                                                    </a>
                                                    <a href="#" class="dropdown-item deutsch">
                                                        <img src="{{URL::asset('assets/images/lang/de.svg')}}" class="h-16px me-2" alt="">
                                                        Deutsch
                                                    </a>
                                                    <a href="#" class="dropdown-item active espana">
                                                        <img src="{{URL::asset('assets/images/lang/es.svg')}}" class="h-16px me-2" alt="">
                                                        España
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /content lists -->


                    <!-- Content component -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Content components</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Besides navigation, mega dropdown menu can also contain <strong>all</strong> available components: forms, buttons, cards, 3rd party extensions, tables, images, videos etc. The only one exception is nested dropdowns with <code>data-bs-toggle="dropdown"</code> attibute due to default BS limitation. If menu doesn't have 100% width, in some cases you would need to set minimum width by using <code>sizing</code> utility classes, because most of the components are fluid by default and their width depends on parent container width. All components are adapted for mobile browsers.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content-components">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="navbar-content-components">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Table</a>
                                                <div class="dropdown-menu p-0">
                                                    <div class="d-flex align-items-center p-3">
                                                        <span class="fw-bold">Table example</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="table-responsive wmin-600">
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th>Description</th>
                                                                    <th>Category</th>
                                                                    <th>Assigned to</th>
                                                                    <th class="text-center">Progress</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#">Frontpage fixes</a></td>
                                                                    <td>Bugs</td>
                                                                    <td>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-center"><span class="badge bg-success rounded-pill">87%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#">CSS compilation</a></td>
                                                                    <td>Bugs</td>
                                                                    <td>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-center"><span class="badge bg-danger rounded-pill">18%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#">Responsive layout changes</a></td>
                                                                    <td>Layout</td>
                                                                    <td>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-center"><span class="badge bg-dark rounded-pill">52%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#">Add categories filter</a></td>
                                                                    <td>Content</td>
                                                                    <td>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-center"><span class="badge bg-success rounded-pill">100%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#">Media grid padding issue</a></td>
                                                                    <td>Bugs</td>
                                                                    <td>
                                                                        <a href="#">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-pill" width="32" height="32" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-center"><span class="badge bg-success rounded-pill">100%</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Images</a>
                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Grid with images</span>
                                                        <div class="d-inline-flex ms-auto">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-arrow-circle-left"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-1">
                                                                <i class="ph-arrow-circle-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-lg-4 col-xl-2">
                                                                <div class="card-img-actions mb-3">
                                                                    <a href="../../../assets/images/demo/flat/1.png" class="text-white">
                                                                        <img class="img-fluid img-thumbnail" src="../../../assets/images/demo/flat/1.png" alt="">
                                                                        <span class="card-img-actions-overlay rounded">
                                                                            <i class="ph-plus"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-lg-4 col-xl-2">
                                                                <div class="card-img-actions mb-3">
                                                                    <a href="../../../assets/images/demo/flat/2.png" class="text-white">
                                                                        <img class="img-fluid img-thumbnail" src="../../../assets/images/demo/flat/2.png" alt="">
                                                                        <span class="card-img-actions-overlay rounded">
                                                                            <i class="ph-plus"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-lg-4 col-xl-2">
                                                                <div class="card-img-actions mb-3">
                                                                    <a href="../../../assets/images/demo/flat/3.png" class="text-white">
                                                                        <img class="img-fluid img-thumbnail" src="../../../assets/images/demo/flat/3.png" alt="">
                                                                        <span class="card-img-actions-overlay rounded">
                                                                            <i class="ph-plus"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-lg-4 col-xl-2">
                                                                <div class="card-img-actions mb-3">
                                                                    <a href="../../../assets/images/demo/flat/4.png" class="text-white">
                                                                        <img class="img-fluid img-thumbnail" src="../../../assets/images/demo/flat/4.png" alt="">
                                                                        <span class="card-img-actions-overlay rounded">
                                                                            <i class="ph-plus"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-lg-4 col-xl-2">
                                                                <div class="card-img-actions mb-3">
                                                                    <a href="../../../assets/images/demo/flat/5.png" class="text-white">
                                                                        <img class="img-fluid img-thumbnail" src="../../../assets/images/demo/flat/5.png" alt="">
                                                                        <span class="card-img-actions-overlay rounded">
                                                                            <i class="ph-plus"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-lg-4 col-xl-2">
                                                                <div class="card-img-actions mb-3">
                                                                    <a href="../../../assets/images/demo/flat/6.png" class="text-white">
                                                                        <img class="img-fluid img-thumbnail" src="../../../assets/images/demo/flat/6.png" alt="">
                                                                        <span class="card-img-actions-overlay rounded">
                                                                            <i class="ph-plus"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Videos</a>
                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Grid with videos</span>
                                                        <div class="d-inline-flex ms-auto">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-arrow-circle-left"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-1">
                                                                <i class="ph-arrow-circle-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="ratio ratio-16x9 mb-3">
                                                                    <iframe class="rounded" src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3">
                                                                <div class="ratio ratio-16x9 mb-3">
                                                                    <iframe class="rounded" src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3">
                                                                <div class="ratio ratio-16x9 mb-3">
                                                                    <iframe class="rounded" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3">
                                                                <div class="ratio ratio-16x9 mb-3">
                                                                    <iframe class="rounded" src="https://player.vimeo.com/video/246294149?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Cards</a>

                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Cards and card groups</span>
                                                        <a href="#" class="ms-auto">View all tasks</a>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="card card-body">
                                                                    <div class="d-flex flex-wrap justify-content-between mb-2">
                                                                        <span class="fs-sm lh-sm text-uppercase text-muted fw-semibold">Nov 12, 11:25am</span>
                                                                        <span class="fs-sm lh-sm text-uppercase text-success fw-semibold">Due in 12 days</span>
                                                                    </div>

                                                                    <h6 class="pt-1">
                                                                        <a href="#">[#462] - Inaccurate small pagination height</a>
                                                                    </h6>

                                                                    <p class="mb-2">Ouch found swore much dear conductively hid submissively hatchet vexed far inanimately alongside candidly much and jeez</p>

                                                                    <div class="d-flex flex-wrap align-items-center pt-1">
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="btn btn-light btn-sm btn-icon rounded-pill">
                                                                            <i class="ph-plus"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-4">
                                                                <div class="card card-body">
                                                                    <div class="d-flex flex-wrap justify-content-between mb-2">
                                                                        <span class="fs-sm lh-sm text-uppercase text-muted fw-semibold">Dec 25, 09:05am</span>
                                                                        <span class="fs-sm lh-sm text-uppercase text-warning fw-semibold">Due in 2 days</span>
                                                                    </div>

                                                                    <h6 class="pt-1">
                                                                        <a href="#">[#548] - Avoid some unnecessary HTML string</a>
                                                                    </h6>

                                                                    <p class="mb-2">Dear spryly growled much far jeepers vigilantly less and far hideous and some mannishly less jeepers less and and crud</p>

                                                                    <div class="d-flex flex-wrap align-items-center pt-1">
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="btn btn-light btn-sm btn-icon rounded-pill">
                                                                            <i class="ph-plus"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-4">
                                                                <div class="card card-body">
                                                                    <div class="d-flex flex-wrap justify-content-between mb-2">
                                                                        <span class="fs-sm lh-sm text-uppercase text-muted fw-semibold">Jan 02, 11:25pm</span>
                                                                        <span class="fs-sm lh-sm text-uppercase text-danger fw-semibold">Overdue</span>
                                                                    </div>

                                                                    <h6 class="pt-1">
                                                                        <a href="#">[#764] - Update json configuration</a>
                                                                    </h6>

                                                                    <p class="mb-2">Diabolically somberly astride crass one endearingly blatant depending peculiar antelope piquantly popularly adept much</p>

                                                                    <div class="d-flex flex-wrap align-items-center pt-1">
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="me-1">
                                                                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-pill" width="34" height="34" alt="">
                                                                        </a>
                                                                        <a href="#" class="btn btn-light btn-sm btn-icon rounded-pill">
                                                                            <i class="ph-plus"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Collapsible</a>
                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <div class="fw-bold">Collapsible cards</div>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="card-group-vertical mb-3" id="accordion-group">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="fw-semibold">
                                                                                <a data-bs-toggle="collapse" class="text-body" href="#accordion-card-group1">Accordion card #1</a>
                                                                            </div>
                                                                        </div>

                                                                        <div id="accordion-card-group1" class="collapse show" data-bs-parent="#accordion-group">
                                                                            <div class="card-body">
                                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="fw-semibold">
                                                                                <a class="collapsed text-body" data-bs-toggle="collapse" href="#accordion-card-group2">Accordion card #2</a>
                                                                            </div>
                                                                        </div>

                                                                        <div id="accordion-card-group2" class="collapse" data-bs-parent="#accordion-group">
                                                                            <div class="card-body">
                                                                                Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="fw-semibold">
                                                                                <a class="collapsed text-body" data-bs-toggle="collapse" href="#accordion-card-group3">Accordion card #3</a>
                                                                            </div>
                                                                        </div>

                                                                        <div id="accordion-card-group3" class="collapse" data-bs-parent="#accordion-group">
                                                                            <div class="card-body">
                                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="card-group-vertical mb-3">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="fw-semibold">
                                                                                <a data-bs-toggle="collapse" class="text-body" href="#collapsible-card-group1">Collapsible card #1</a>
                                                                            </div>
                                                                        </div>

                                                                        <div id="collapsible-card-group1" class="collapse show">
                                                                            <div class="card-body">
                                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="fw-semibold">
                                                                                <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-card-group2">Collapsible card #2</a>
                                                                            </div>
                                                                        </div>

                                                                        <div id="collapsible-card-group2" class="collapse">
                                                                            <div class="card-body">
                                                                                Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <div class="fw-semibold">
                                                                                <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-card-group3">Collapsible card #3</a>
                                                                            </div>
                                                                        </div>

                                                                        <div id="collapsible-card-group3" class="collapse">
                                                                            <div class="card-body">
                                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Mixed content</a>
                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-xl-8">
                                                                <div class="row">
                                                                    <div class="col-xl-3">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Form components</div>
                                                                        <div class="mb-3 mb-xl-0">
                                                                            <a href="form_inputs.html" class="dropdown-item rounded">Basic inputs</a>
                                                                            <a href="form_controls_extended.html" class="dropdown-item rounded">Extended controls</a>
                                                                            <a href="form_select2.html" class="dropdown-item rounded">Select2 selects</a>
                                                                            <a href="form_floating_labels.html" class="dropdown-item rounded">Floating labels</a>
                                                                            <a href="form_validation.html" class="dropdown-item rounded">Validation</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">UI components</div>
                                                                        <div class="mb-3 mb-xl-0">
                                                                            <a href="components_modals.html" class="dropdown-item rounded">Modals <span class="badge bg-secondary rounded-pill ms-auto">10+</span></a>
                                                                            <a href="components_dropdowns.html" class="dropdown-item rounded">Dropdown menus</a>
                                                                            <a href="components_buttons.html" class="dropdown-item rounded">Buttons</a>
                                                                            <a href="components_tabs.html" class="dropdown-item rounded">Tabs component</a>
                                                                            <a href="components_breadcrumbs.html" class="dropdown-item rounded">Breadcrumbs</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Sidebars</div>
                                                                        <div class="mb-3 mb-xl-0">
                                                                            <a href="sidebar_default_collapse.html" class="dropdown-item rounded">Main sidebar</a>
                                                                            <a href="sidebar_secondary_after.html" class="dropdown-item rounded">Secondary sidebar</a>
                                                                            <a href="sidebar_right_default_collapse.html" class="dropdown-item rounded">Right sidebar</a>
                                                                            <a href="sidebar_content_left.html" class="dropdown-item rounded">Content sidebar</a>
                                                                            <a href="sidebar_components.html" class="dropdown-item rounded">Sidebar components</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <div class="fw-bold border-bottom pb-2 mb-2">Navigation</div>
                                                                        <div class="mb-3 mb-xl-0">
                                                                            <a href="navigation_horizontal_click.html" class="dropdown-item rounded">Submenu on click</a>
                                                                            <a href="navigation_horizontal_hover.html" class="dropdown-item rounded">Submenu on hover</a>
                                                                            <a href="navigation_horizontal_elements.html" class="dropdown-item rounded">With custom elements</a>
                                                                            <a href="navigation_horizontal_tabs.html" class="dropdown-item rounded">Tabbed navigation</a>
                                                                            <a href="navigation_horizontal_mega.html" class="dropdown-item rounded active">Horizontal mega menu</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-4">
                                                                <iframe src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" class="rounded" height="230" width="100%" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /content components -->


                    <!-- Content nav -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Content nav</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">This option is completely custom - Bootstrap doesn't support content nav components in dropdown menu by default as class name conflicts and <code>dropdown.js</code> component limitation. This has been improved and both tabs and pills components can be used in dropdowns. There is a requirement - dropdown toggler should have <code>data-bs-auto-close="outside"</code> attribute to keep menu opened when links inside are clicked. Tabs and pills can be placed anywhere in the dropdown - top, center, bottom, left, right, can be nested and can have any type of content.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content-nav">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="navbar-content-nav">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Basic tabs</a>

                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center p-3">
                                                        <span class="fw-bold">Highlighted tabs</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="nav nav-tabs nav-tabs-highlight nav-justified text-nowrap flex-nowrap">
                                                        <li class="nav-item">
                                                            <a href="#basic-tab1" class="nav-link border-start-0 active" data-bs-toggle="tab">
                                                                <i class="ph-envelope me-2"></i>
                                                                Active
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#basic-tab2" class="nav-link" data-bs-toggle="tab">
                                                                <i class="ph-at me-2"></i>
                                                                Inactive
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#basic-tab3" class="nav-link disabled border-end-0" data-bs-toggle="tab">
                                                                <i class="ph-chats me-2"></i>
                                                                Disabled
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="basic-tab1">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="basic-tab2">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Underline tabs</a>

                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-2">
                                                        <span class="fw-bold">Underline tabs</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="nav nav-tabs nav-tabs-underline nav-justified text-nowrap flex-nowrap">
                                                        <li class="nav-item">
                                                            <a href="#underline-tab1" class="nav-link active" data-bs-toggle="tab">
                                                                <i class="ph-envelope me-2"></i>
                                                                Active
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#underline-tab2" class="nav-link" data-bs-toggle="tab">
                                                                <i class="ph-at me-2"></i>
                                                                Inactive
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#underline-tab3" class="nav-link disabled" data-bs-toggle="tab">
                                                                <i class="ph-chats me-2"></i>
                                                                Disabled
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="underline-tab1">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="underline-tab2">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Toolbar tabs</a>

                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center p-3">
                                                        <span class="fw-bold">Tabs as a toolbar</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="nav nav-tabs nav-tabs-underline border-top nav-justified text-nowrap flex-nowrap">
                                                        <li class="nav-item">
                                                            <a href="#toolbar-tab1" class="nav-link active" data-bs-toggle="tab">
                                                                <i class="ph-envelope me-2"></i>
                                                                Active
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#toolbar-tab2" class="nav-link" data-bs-toggle="tab">
                                                                <i class="ph-at me-2"></i>
                                                                Inactive
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#toolbar-tab3" class="nav-link disabled" data-bs-toggle="tab">
                                                                <i class="ph-chats me-2"></i>
                                                                Disabled
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="toolbar-tab1">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="toolbar-tab2">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Overline tabs</a>

                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Bottom tabs</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="top-tab1">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="top-tab2">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <ul class="nav nav-tabs nav-tabs-overline nav-justified rounded-bottom text-nowrap flex-nowrap">
                                                        <li class="nav-item">
                                                            <a href="#top-tab1" class="nav-link active" data-bs-toggle="tab">
                                                                <i class="ph-envelope me-2"></i>
                                                                Active
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#top-tab2" class="nav-link" data-bs-toggle="tab">
                                                                <i class="ph-at me-2"></i>
                                                                Inactive
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#top-tab3" class="nav-link disabled" data-bs-toggle="tab">
                                                                <i class="ph-chats me-2"></i>
                                                                Disabled
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pills</a>

                                                <div class="dropdown-menu dropdown-menu-end wmin-xl-400 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Basic pills</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <ul class="nav nav-pills nav-justified text-nowrap flex-nowrap">
                                                            <li class="nav-item">
                                                                <a href="#basic-pill1" class="nav-link active" data-bs-toggle="tab">
                                                                    <i class="ph-envelope me-2"></i>
                                                                    Active
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#basic-pill2" class="nav-link" data-bs-toggle="tab">
                                                                    <i class="ph-at me-2"></i>
                                                                    Inactive
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#basic-pill3" class="nav-link disabled" data-bs-toggle="tab">
                                                                    <i class="ph-chats me-2"></i>
                                                                    Disabled
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="basic-pill1">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="basic-pill2">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pills toolbar</a>

                                                <div class="dropdown-menu dropdown-menu-end wmin-xl-450 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Pills toolbar</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar nav-justified text-nowrap flex-nowrap">
                                                            <li class="nav-item">
                                                                <a href="#toolbar-pill1" class="nav-link active" data-bs-toggle="tab">
                                                                    <i class="ph-envelope me-2"></i>
                                                                    Active
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#toolbar-pill2" class="nav-link" data-bs-toggle="tab">
                                                                    <i class="ph-at me-2"></i>
                                                                    Inactive
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#toolbar-pill3" class="nav-link disabled" data-bs-toggle="tab">
                                                                    <i class="ph-chats me-2"></i>
                                                                    Disabled
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="toolbar-pill1">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="toolbar-pill2">
                                                            <div class="p-3">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /content nav -->


                    <!-- Menu header styles -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Menu header styles</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">All dropdown menus support custom <strong>header</strong> with a number of elements - plain text, text links, buttons, single icons and icon groups, small images, collapsible panels, badges and badge pills. Thanks to the power of flex model, all elements can be easily aligned vertically and horizontally. Vertical and horizontal spacing of dropdown header is equal to menu body spacing for better content alignment, but you can easily change it using spacing utility classes. Horizontal spacing of menu header depends on menu body spacing.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mega-menu-headers">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="mega-menu-headers">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Basic</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Text styles</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="text-uppercase fw-bold">Uppercase header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Divider</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="border-bottom p-3">
                                                        <span class="fw-bold">Divided header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Heading</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <h6 class="fw-bold m-0">H6 heading title</h6>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Single icon</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                        <a href="#" class="text-body ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Icon group</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="d-flex align-items-center p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                        <div class="d-inline-flex ms-auto">
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-at"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-chats"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-gear"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Custom color</a>

                                                <div class="dropdown-menu dropdown-menu-end wmin-xl-300 p-0">
                                                    <div class="d-flex align-items-center bg-success text-white rounded-top-1 p-3">
                                                        <span class="fw-bold">Custom header color</span>
                                                        <a href="#" class="text-white ms-auto">
                                                            <i class="ph-gear"></i>
                                                        </a>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /menu header styles -->


                    <!-- Menu footer styles -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Menu footer styles</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">All dropdown menus support custom <strong>footers</strong> with a number of elements - plain text, text links, buttons, single icons and icon groups, small images, badges and badge pills. Thanks to the power of flex model, all elements can be easily aligned vertically and horizontally. Menu footer appearance is fully controlled by util classes, e.g. top border and light grey background color (some elements require minor color adjustments as well). You can also control other properties such as vertical spacing and other options.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mega-menu-footers">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="mega-menu-footers">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Text</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex border-top py-2 px-3">
                                                        <span>Left text</span>
                                                        <span class="ms-auto">Right text</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Links</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex border-top py-2 px-3">
                                                        <a href="#">Left link</a>
                                                        <a href="#" class="ms-auto">Right link</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Icons</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex border-top py-2 px-3">
                                                        <div>
                                                            <a href="#" class="text-body">
                                                                <i class="ph-circles-three-plus"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-list-plus"></i>
                                                            </a>
                                                        </div>

                                                        <div class="ms-auto">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-activity"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-gear"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Combo</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex border-top py-2 px-3">
                                                        <a href="#" class="d-inline-block text-body">All updates</a>
                                                        <div class="ms-auto">
                                                            <a href="#" class="text-body">
                                                                <i class="ph-chats"></i>
                                                            </a>
                                                            <a href="#" class="text-body ms-2">
                                                                <i class="ph-gear"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Full width link</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-top">
                                                        <a href="#" class="btn btn-light w-100 border-0 rounded-top-0 rounded-bottom-1 py-2">
                                                            <i class="ph-circles-four"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Buttons</a>

                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex p-3 pt-0">
                                                        <a href="#" class="btn btn-light">
                                                            Cancel
                                                        </a>
                                                        <a href="#" class="btn btn-primary ms-auto">
                                                            Submit
                                                            <i class="ph-paper-plane-tilt ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Custom color</a>

                                                <div class="dropdown-menu dropdown-menu-end wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Menu header</span>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex bg-dark text-white rounded-bottom-1 py-2 px-3">
                                                        <a href="#" class="d-inline-block text-white">All updates</a>
                                                        <div class="ms-auto">
                                                            <a href="#" class="text-white">
                                                                <i class="ph-chats"></i>
                                                            </a>
                                                            <a href="#" class="text-white ms-2">
                                                                <i class="ph-gear"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /menu footer styles -->


                    <!-- Form layouts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Form layouts</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Dropdown menu supports all available form layouts - inline, vertical and horizontal. You can use the forms just like anywhere else, they don't require any additional classes or styling. But you need to control dropdown width in order to fit the form rows correctly, because all forms are fluid by default. You can also control form layouts on small screens with grid classes, in case if you need to display complex forms with multiple columns. Examples below demonstrate form layouts, complex multi column form and separate group of form controls.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mega-menu-forms">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="mega-menu-forms">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Vertical form</a>
                                                <div class="dropdown-menu wmin-xl-300 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Vertical form</div>
                                                    </div>

                                                    <form class="p-3" action="#">
                                                        <div class="mb-3">
                                                            <div class="form-control-feedback form-control-feedback-end">
                                                                <input type="text" class="form-control" placeholder="Your email">
                                                                <div class="form-control-feedback-icon">
                                                                    <i class="ph-at"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <select class="form-select">
                                                                <option value="0" selected disabled>Subscription plan</option>
                                                                <option value="updates">Website updates</option>
                                                                <option value="discounts">Discount offers</option>
                                                                <option value="catalog">Catalog</option>
                                                                <option value="prints">Prints</option>
                                                                <option value="promo">Promotions</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
                                                        </div>

                                                        <div class="d-flex align-items-center flex-nowrap">
                                                            <label class="form-check">
                                                                <input type="checkbox" class="form-check-input" checked>
                                                                <span class="form-check-label">Remember</span>
                                                            </label>

                                                            <div class="ms-auto">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Submit
                                                                    <i class="ph-paper-plane-tilt ps-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Horizontal form</a>
                                                <div class="dropdown-menu wmin-xl-500 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Horizontal form</div>
                                                    </div>

                                                    <form class="p-3" action="#">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-xl-4">Your email:</label>
                                                            <div class="col-xl-8">
                                                                <div class="form-control-feedback form-control-feedback-end">
                                                                    <input type="text" class="form-control" placeholder="email@example.com">
                                                                    <div class="form-control-feedback-icon">
                                                                        <i class="ph-at"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-xl-4">Password:</label>
                                                            <div class="col-xl-8">
                                                                <div class="form-control-feedback form-control-feedback-end">
                                                                    <input type="password" class="form-control" placeholder="Your password">
                                                                    <div class="form-control-feedback-icon">
                                                                        <i class="ph-lock"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-xl-4">Auto save:</label>
                                                            <div class="col-xl-8">
                                                                <label class="form-check form-check-horizontal">
                                                                    <input type="checkbox" class="form-check-input" checked>
                                                                    <span class="form-check-label">Enable</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-8 ms-xl-auto">
                                                                <button type="submit" class="btn btn-light">Cancel</button>
                                                                <button type="submit" class="btn btn-primary ms-3">
                                                                    Submit
                                                                    <i class="ph-paper-plane-tilt ms-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Switch list</a>
                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Stacked switches</div>
                                                    </div>

                                                    <form class="p-3" action="#">
                                                        <label class="form-check form-switch form-check-reverse text-start mb-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Allow direct changes</span>
                                                        </label>

                                                        <label class="form-check form-switch form-check-reverse text-start mb-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Allow new registrations</span>
                                                        </label>

                                                        <label class="form-check form-switch form-check-reverse text-start mb-2">
                                                            <input type="checkbox" class="form-check-input">
                                                            <span class="form-check-label">Navbar is visible to users</span>
                                                        </label>

                                                        <label class="form-check form-switch form-check-reverse text-start mb-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Enable sessions</span>
                                                        </label>

                                                        <label class="form-check form-switch form-check-reverse text-start">
                                                            <input type="checkbox" class="form-check-input">
                                                            <span class="form-check-label">Allow layout changes</span>
                                                        </label>
                                                    </form>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" data-bs-auto-close="outside">Checkers list</a>
                                                <div class="dropdown-menu wmin-xl-350 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Stacked checkers</div>
                                                    </div>

                                                    <form class="p-3" action="#">
                                                        <label class="form-check form-check-reverse text-start mb-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Allow direct changes</span>
                                                        </label>

                                                        <label class="form-check form-check-reverse text-start mb-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                            <span class="form-check-label">Allow new registrations</span>
                                                        </label>

                                                        <label class="form-check form-check-reverse text-start">
                                                            <input type="checkbox" class="form-check-input">
                                                            <span class="form-check-label">Navbar is visible to users</span>
                                                        </label>

                                                        <hr>

                                                        <label class="form-check form-check-reverse text-start mb-2">
                                                            <input type="radio" name="radio-group" class="form-check-input" checked>
                                                            <span class="form-chekc-label">Grant permissions</span>
                                                        </label>

                                                        <label class="form-check form-check-reverse text-start">
                                                            <input type="radio" name="radio-group" class="form-check-input">
                                                            <span class="form-chekc-label">Revoke permissions</span>
                                                        </label>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Multiple columns</a>
                                                <div class="dropdown-menu dropdown-menu-end w-xl-75 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Multi column form</div>
                                                    </div>

                                                    <form class="p-3" action="#">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">First name:</label>
                                                                    <input type="text" placeholder="Eugene" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Last name:</label>
                                                                    <input type="text" placeholder="Kopyov" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Country:</label>
                                                                    <select class="form-select">
                                                                        <option value="0" selected disabled>Select your country</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">State/Province:</label>
                                                                    <input type="text" placeholder="Bayern" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="mb-3">
                                                                    <label class="form-label">ZIP code:</label>
                                                                    <input type="text" placeholder="1031" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3">
                                                                <div class="mb-3">
                                                                    <label class="form-label">City:</label>
                                                                    <input type="text" placeholder="Munich" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Address line:</label>
                                                                    <input type="text" placeholder="Ring street 12" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-link">Cancel</button>
                                                            <button type="submit" class="btn btn-primary ms-2">
                                                                Submit
                                                                <i class="ph-paper-plane-tilt ms-2"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /form layouts -->


                    <!-- Menu sizing -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Menu sizing</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Dropdown menu has several width options: default dropdown width defined in <code>$dropdown-min-width</code> or <code>var(--dropdown-min-width)</code> variable, responsive <code>width</code> and <code>min-width</code> utility classes (in pixels and percents), auto width that depends on child content width and full width. <strong>Auto</strong> width option requires additional utlility classes added to <code>.dropdown-menu</code>; <strong>full</strong> width option requires <code>.start-0.end-0.mx-[value]</code> classes added to <code>.dropdown-nenu</code>. These 2 options should <strong>not</strong> have <code>.dropdown</code> or <code>.dropup</code> classes since position of parent container should be default (static).</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mega-menu-size">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="mega-menu-size">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Auto</a>
                                                <div class="dropdown-menu p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Auto width</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Pixel width</a>
                                                <div class="dropdown-menu wmin-xl-500 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Custom pixel width</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Percent width</a>
                                                <div class="dropdown-menu start-auto w-xl-50 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Custom percent width</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Full width</a>
                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Full width menu</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item dropdown">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Right (auto)</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Auto width</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Right (px)</a>
                                                <div class="dropdown-menu dropdown-menu-end wmin-xl-500 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Vertical form</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Right (%)</a>
                                                <div class="dropdown-menu dropdown-menu-end w-xl-50 p-0">
                                                    <div class="p-3 pb-0">
                                                        <div class="fw-bold">Vertical form</div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="bg-secondary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-danger bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-teal bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-purple bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-pink bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-success bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-info bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="bg-indigo bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-primary bg-opacity-10 p-1 mb-2"></div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="bg-secondary bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="bg-warning bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="bg-success bg-opacity-10 p-2 mb-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /menu sizing -->


                    <!-- Content grid -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Content grid</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Mega menu component supports a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. Using a single set of <code>.col-[breakpoint]-[count]</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code> inside mega menu dropdown to make them stackable on mobile or <code>.col-[count]</code> classes to avoid stacking.</p>

                            <p class="fw-semibold">Examples:</p>
                            <div class="navbar navbar-expand-xl navbar-dark rounded">
                                <div class="container-fluid">
                                    <div class="navbar-brand">
                                        <a href="index.html" class="d-inline-flex align-items-center">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                            <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="h-16px ms-3" alt="">
                                        </a>
                                    </div>

                                    <div class="d-xl-none">
                                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu-grid">
                                            <i class="ph-list"></i>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse" id="navbar-menu-grid">
                                        <ul class="navbar-nav mt-2 mt-xl-0">
                                            <li class="nav-item">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Content grid</a>

                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">12 columns grid</span>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-6
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-6
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-8">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-8
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Columns offset</a>

                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">Columns offset</span>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 offset-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4 .offset-xl-4
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 offset-xl-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-4 .offset-xl-4
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-6 offset-xl-3">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-xl-6 .offset-xl-3
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item ms-xl-1">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">No gutters</a>

                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">No gutters</span>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row g-0">
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white rounded-start py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white border-start border-white border-opacity-20 py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white rounded-end border-start border-white border-opacity-20 py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row g-0">
                                                            <div class="col-6">
                                                                <div class="bg-secondary text-white rounded-start py-2 px-3 mb-3">
                                                                    .col-6
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-secondary text-white rounded-end border-start border-white border-opacity-20 py-2 px-3 mb-3">
                                                                    .col-6
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row g-0">
                                                            <div class="col-8">
                                                                <div class="bg-secondary text-white rounded-start py-2 px-3 mb-3">
                                                                    .col-8
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white rounded-end border-start border-white border-opacity-20 py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="navbar-nav ms-xl-auto">
                                            <li class="nav-item">
                                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">Non-responsive</a>

                                                <div class="dropdown-menu start-0 end-0 p-0 mx-xl-3">
                                                    <div class="p-3 pb-0">
                                                        <span class="fw-bold">All breakpoints</span>
                                                    </div>

                                                    <div class="p-3 pb-0">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-4
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-6
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                                                    .col-6
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /content grid -->


                    <!-- Navigation classes -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Navigation classes</h5>
                        </div>

                        <div class="card-body">
                            This table contains all classes related to the horizontal navbar navigation. Navbar navigation links build on default <code>.nav</code> options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code>.nav-item</code> and <code>.nav-link</code>.
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20%;">Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.nav</code></td>
                                        <td>Global wrapper for navigation list. It uses default Bootstrap's styles of <code>.nav</code> component and similar markup options.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.navbar-nav</code></td>
                                        <td>for a full-height and lightweight navigation (including support for dropdowns).</td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-item</code></td>
                                        <td>This class is required in an immediate nav link parent element in any <code>.nav</code> container: sidebar, navbar, nav groups, tabs, pills etc.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-item.dropdown</code></td>
                                        <td>Combination of these classes is required for items with dropdown menu - nav item with <code>.dropdown</code> class is a dropdown toggle and menu wrapper that declares <code>position: relative;</code>.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-item.nav-item-dropdown-[breakpoint]</code></td>
                                        <td>Combination of these classes keeps default dropdown menus appearance on mobile. Use it only in nav links outside <code>.navbar-collapse</code> container as the behaviour of menus in collapsible containers is different</td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-item.dropup</code></td>
                                        <td>Same as <code>.dropdown</code>, but this class is required in bottom navbars, because it triggers dropdown menus above elements in navbar. Dropdown caret direction in bottom navbar also depends on this class.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.navbar-nav-link</code></td>
                                        <td>A custom class, unlike Bootstrap's default <code>.nav-link</code> class it doesn't affect navs in dropdowns. This class is responsible for navigation link styling and is also required as a part of nav list element structure. It's also a target for <code>.active</code> and <code>.disabled</code> classes.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.navbar-nav-link-icon</code></td>
                                        <td>For navigation items that contain icon only. This class adjusts left and right paddings to make sure that proportions are preserved.</td>
                                    </tr>

                                    <tr>
                                        <td><code>.dropdown-scrollable</code></td>
                                        <td>This class sets <code>max-height</code> to the dropdown body and adds vertical scrollbar. Can be added to child container to make only body scrollable or to the entire <code>.dropdown-menu</code>. Default max-height value is <code>340px</code>.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.w-[breakpoint]-[value]</code></td>
                                        <td>Set of responsive utility classes that set <code>min-width</code> property to the <code>.dropdown-menu</code> container. Very useful in dropdowns with long content. Available options for <strong>[value]</strong> (in pixels): 200, 250, 300, 350, 400, 450, 500, 550, 600.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /navigation classes -->

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
