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

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-collapsed">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->


                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" id="navbar-nav" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="index" class="nav-link">
                                <i class="ph-house"></i>
                                <span>
                                    Dashboard
                                    <span class="d-block fw-normal opacity-50">No pending orders</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-swatches"></i>
                                <span>Themes</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="index" class="nav-link">Default</a></li>
                                <li class="nav-item"><a href="javascript:void(0)" class="nav-link disabled">Material <span class="badge align-self-center ms-auto">Coming soon</span></a></li>
                                <li class="nav-item"><a href="javascript:void(0)" class="nav-link disabled">Clean <span class="badge align-self-center ms-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="ph-list-numbers"></i>
                                <span>Changelog</span>
                                <span class="badge bg-primary align-self-center rounded-pill ms-auto">4.0</span>
                            </a>
                        </li>

                        <!-- Forms -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Forms</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-note-pencil"></i>
                                <span>Form components</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="form_autocomplete" class="nav-link">Autocomplete</a></li>
                                <li class="nav-item"><a href="form_checkboxes_radios" class="nav-link">Checkboxes &amp; radios</a></li>
                                <li class="nav-item"><a href="form_dual_listboxes" class="nav-link">Dual Listboxes</a></li>
                                <li class="nav-item"><a href="form_controls_extended" class="nav-link">Extended controls</a></li>
                                <li class="nav-item"><a href="form_floating_labels" class="nav-link">Floating labels</a></li>
                                <li class="nav-item"><a href="form_actions" class="nav-link">Form actions</a></li>
                                <li class="nav-item"><a href="form_wizard" class="nav-link">Form wizard</a></li>
                                <li class="nav-item"><a href="form_inputs" class="nav-link">Input fields</a></li>
                                <li class="nav-item"><a href="form_input_groups" class="nav-link">Input groups</a></li>
                                <li class="nav-item"><a href="form_multiselect" class="nav-link">Multiselect</a></li>
                                <li class="nav-item"><a href="form_select2" class="nav-link">Select2 selects</a></li>
                                <li class="nav-item"><a href="form_tags" class="nav-link">Tags</a></li>
                                <li class="nav-item"><a href="form_validation_styles" class="nav-link">Validation styles</a></li>
                                <li class="nav-item"><a href="form_validation_library" class="nav-link">Validation library</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-text-aa"></i>
                                <span>Text editors</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">CKEditor</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="editor_ckeditor_classic" class="nav-link">Classic</a></li>
                                        <li class="nav-item"><a href="editor_ckeditor_document" class="nav-link">Document</a></li>
                                        <li class="nav-item"><a href="editor_ckeditor_balloon" class="nav-link">Balloon</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="editor_quill" class="nav-link">Quill</a></li>
                                <li class="nav-item"><a href="editor_trumbowyg" class="nav-link">Trumbowyg</a></li>
                                <li class="nav-item"><a href="editor_code" class="nav-link">Code</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-hand-pointing"></i>
                                <span>Pickers</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="picker_color" class="nav-link">Color pickers</a></li>
                                <li class="nav-item"><a href="picker_date" class="nav-link">Date &amp; time pickers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-browser"></i>
                                <span>Form layouts</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="form_layout_horizontal" class="nav-link">Horizontal form</a></li>
                                <li class="nav-item"><a href="form_layout_vertical" class="nav-link">Vertical form</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="form_layout_grid" class="nav-link">Input grid</a></li>
                            </ul>
                        </li>
                        <!-- /forms -->

                        <!-- Components -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Components</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-squares-four"></i>
                                <span>Basic components</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="components_accordion" class="nav-link">Accordion</a></li>
                                <li class="nav-item"><a href="components_alerts" class="nav-link">Alerts</a></li>
                                <li class="nav-item"><a href="components_badges" class="nav-link">Badges</a></li>
                                <li class="nav-item"><a href="components_breadcrumbs" class="nav-link">Breadcrumbs</a></li>
                                <li class="nav-item"><a href="components_buttons" class="nav-link">Buttons</a></li>
                                <li class="nav-item"><a href="components_carousel" class="nav-link">Carousel</a></li>
                                <li class="nav-item"><a href="components_collapsible" class="nav-link">Collapsible</a></li>
                                <li class="nav-item"><a href="components_dropdowns" class="nav-link">Dropdown menus</a></li>
                                <li class="nav-item"><a href="components_list_group" class="nav-link">List group</a></li>
                                <li class="nav-item"><a href="components_media" class="nav-link">Media objects</a></li>
                                <li class="nav-item"><a href="components_modals" class="nav-link">Modals</a></li>
                                <li class="nav-item"><a href="components_offcanvas" class="nav-link">Offcanvas</a></li>
                                <li class="nav-item"><a href="components_pagination" class="nav-link">Pagination</a></li>
                                <li class="nav-item"><a href="components_pills" class="nav-link">Pills</a></li>
                                <li class="nav-item"><a href="components_placeholder" class="nav-link">Placeholder</a></li>
                                <li class="nav-item"><a href="components_popovers" class="nav-link">Popovers</a></li>
                                <li class="nav-item"><a href="components_progress" class="nav-link">Progress</a></li>
                                <li class="nav-item"><a href="components_scrollspy" class="nav-link">Scrollspy</a></li>
                                <li class="nav-item"><a href="components_tabs" class="nav-link">Tabs</a></li>
                                <li class="nav-item"><a href="components_toasts" class="nav-link">Toasts</a></li>
                                <li class="nav-item"><a href="components_tooltips" class="nav-link">Tooltips</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-article"></i>
                                <span>Content styling</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="content_page_header" class="nav-link">Page header</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="content_cards" class="nav-link">Cards</a></li>
                                <li class="nav-item"><a href="content_cards_header" class="nav-link">Card header elements</a></li>
                                <li class="nav-item"><a href="content_cards_footer" class="nav-link">Card footer elements</a></li>
                                <li class="nav-item"><a href="content_cards_content" class="nav-link">Card content</a></li>
                                <li class="nav-item"><a href="content_cards_layouts" class="nav-link">Card layouts</a></li>
                                <li class="nav-item"><a href="content_cards_draggable" class="nav-link">Draggable cards</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="content_helpers_flex" class="nav-link">Flex utilities</a></li>
                                <li class="nav-item"><a href="content_helpers" class="nav-link">Helper classes</a></li>
                                <li class="nav-item"><a href="content_grid" class="nav-link">Grid system</a></li>
                                <li class="nav-item"><a href="content_syntax_highlighter" class="nav-link">Syntax highlighter</a></li>
                                <li class="nav-item"><a href="content_text_styling" class="nav-link">Text styling</a></li>
                                <li class="nav-item"><a href="content_typography" class="nav-link">Typography</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-dots-three-circle"></i>
                                <span>Extra components</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="extra_noty" class="nav-link">Noty notifications</a></li>
                                <li class="nav-item"><a href="extra_sweetalert" class="nav-link">Sweet alert</a></li>
                                <li class="nav-item"><a href="extra_sliders_noui" class="nav-link">NoUI sliders</a></li>
                                <li class="nav-item"><a href="extra_sliders_ion" class="nav-link">Ion range sliders</a></li>
                                <li class="nav-item"><a href="extra_trees" class="nav-link">Dynamic tree views</a></li>
                                <li class="nav-item"><a href="extra_fab" class="nav-link">Floating action buttons</a></li>
                                <li class="nav-item"><a href="extra_session_timeout" class="nav-link">Session timeout</a></li>
                                <li class="nav-item"><a href="extra_idle_timeout" class="nav-link">Idle timeout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-drop"></i>
                                <span>Color system</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="colors_primary" class="nav-link">Primary palette</a></li>
                                <li class="nav-item"><a href="colors_secondary" class="nav-link">Secondary palette</a></li>
                                <li class="nav-item"><a href="colors_danger" class="nav-link">Danger palette</a></li>
                                <li class="nav-item"><a href="colors_success" class="nav-link">Success palette</a></li>
                                <li class="nav-item"><a href="colors_warning" class="nav-link">Warning palette</a></li>
                                <li class="nav-item"><a href="colors_info" class="nav-link">Info palette</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="colors_pink" class="nav-link">Pink palette</a></li>
                                <li class="nav-item"><a href="colors_purple" class="nav-link">Purple palette</a></li>
                                <li class="nav-item"><a href="colors_indigo" class="nav-link">Indigo palette</a></li>
                                <li class="nav-item"><a href="colors_teal" class="nav-link">Teal palette</a></li>
                                <li class="nav-item"><a href="colors_yellow" class="nav-link">Yellow palette</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-spinner spinner"></i>
                                <span>Animations</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="animations_css3" class="nav-link">CSS3 animations</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Velocity animations</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="animations_velocity_basic" class="nav-link">Basic usage</a></li>
                                        <li class="nav-item"><a href="animations_velocity_ui" class="nav-link">UI pack effects</a></li>
                                        <li class="nav-item"><a href="animations_velocity_examples" class="nav-link">Advanced examples</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-smiley-wink"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="icons_phosphor" class="nav-link">Phosphor</a></li>
                                <li class="nav-item"><a href="icons_icomoon" class="nav-link">Icomoon</a></li>
                                <li class="nav-item"><a href="icons_material" class="nav-link">Material</a></li>
                                <li class="nav-item"><a href="icons_fontawesome" class="nav-link">Font awesome</a></li>
                            </ul>
                        </li>
                        <!-- /components -->

                        <!-- Layout -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-layout"></i>
                                <span>Page layouts</span>
                            </a>

                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="layout_static" class="nav-link">Static layout</a></li>
                                <li class="nav-item"><a href="layout_no_header" class="nav-link">No header</a></li>
                                <li class="nav-item"><a href="layout_no_footer" class="nav-link">No footer</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="layout_fixed_header" class="nav-link">Fixed header</a></li>
                                <li class="nav-item"><a href="layout_fixed_footer" class="nav-link">Fixed footer</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="layout_2_sidebars_1_side" class="nav-link">2 sidebars on 1 side</a></li>
                                <li class="nav-item"><a href="layout_2_sidebars_2_sides" class="nav-link">2 sidebars on 2 sides</a></li>
                                <li class="nav-item"><a href="layout_3_sidebars" class="nav-link">3 sidebars</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="layout_boxed_page" class="nav-link">Boxed page</a></li>
                                <li class="nav-item"><a href="layout_boxed_content" class="nav-link">Boxed content</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-columns"></i>
                                <span>Sidebars</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Main sidebar</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="sidebar_default_resizable" class="nav-link">Resizable</a></li>
                                        <li class="nav-item"><a href="sidebar_default_resized" class="nav-link">Resized</a></li>
                                        <li class="nav-item"><a href="sidebar_default_collapsible" class="nav-link">Collapsible</a></li>
                                        <li class="nav-item"><a href="sidebar_default_collapsed" class="nav-link">Collapsed</a></li>
                                        <li class="nav-item"><a href="sidebar_default_hideable" class="nav-link">Hideable</a></li>
                                        <li class="nav-item"><a href="sidebar_default_hidden" class="nav-link">Hidden</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="sidebar_default_color_light" class="nav-link">Light color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Secondary sidebar</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="sidebar_secondary_collapsible" class="nav-link">Collapsible</a></li>
                                        <li class="nav-item"><a href="sidebar_secondary_collapsed" class="nav-link">Collapsed</a></li>
                                        <li class="nav-item"><a href="sidebar_secondary_hideable" class="nav-link">Hideable</a></li>
                                        <li class="nav-item"><a href="sidebar_secondary_hidden" class="nav-link">Hidden</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="sidebar_secondary_color_dark" class="nav-link">Dark color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Right sidebar</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="sidebar_right_collapsible" class="nav-link">Collapsible</a></li>
                                        <li class="nav-item"><a href="sidebar_right_collapsed" class="nav-link">Collapsed</a></li>
                                        <li class="nav-item"><a href="sidebar_right_hideable" class="nav-link">Hideable</a></li>
                                        <li class="nav-item"><a href="sidebar_right_hidden" class="nav-link">Hidden</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="sidebar_right_color_dark" class="nav-link">Dark color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Content sidebar</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="sidebar_content_left" class="nav-link">Left aligned</a></li>
                                        <li class="nav-item"><a href="sidebar_content_left_stretch" class="nav-link">Left stretched</a></li>
                                        <li class="nav-item"><a href="sidebar_content_left_sections" class="nav-link">Left sectioned</a></li>
                                        <li class="nav-item"><a href="sidebar_content_right" class="nav-link">Right aligned</a></li>
                                        <li class="nav-item"><a href="sidebar_content_right_stretch" class="nav-link">Right stretched</a></li>
                                        <li class="nav-item"><a href="sidebar_content_right_sections" class="nav-link">Right sectioned</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="sidebar_content_color_dark" class="nav-link">Dark color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Sticky areas</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="sidebar_sticky_header" class="nav-link">Header</a></li>
                                        <li class="nav-item"><a href="sidebar_sticky_footer" class="nav-link">Footer</a></li>
                                        <li class="nav-item"><a href="sidebar_sticky_header_footer" class="nav-link">Header and footer</a></li>
                                        <li class="nav-item"><a href="sidebar_sticky_custom" class="nav-link">Custom elements</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="sidebar_components" class="nav-link">Sidebar components</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-rows"></i>
                                <span>Navbars</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Single navbar</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="navbar_single_bottom_fixed" class="nav-link">Bottom fixed</a></li>
                                        <li class="nav-item"><a href="navbar_single_header_before" class="nav-link">Before page header</a></li>
                                        <li class="nav-item"><a href="navbar_single_header_before_fixed" class="nav-link">Before page header fixed</a></li>
                                        <li class="nav-item"><a href="navbar_single_header_after" class="nav-link">After page header</a></li>
                                        <li class="nav-item"><a href="navbar_single_header_after_sticky" class="nav-link">After page header sticky</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Multiple navbars</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="navbar_multiple_top" class="nav-link">Multiple top</a></li>
                                        <li class="nav-item"><a href="navbar_multiple_bottom_static" class="nav-link">Multiple bottom static</a></li>
                                        <li class="nav-item"><a href="navbar_multiple_bottom_fixed" class="nav-link">Multiple bottom fixed</a></li>
                                        <li class="nav-item"><a href="navbar_multiple_top_bottom_fixed" class="nav-link">Top and bottom fixed</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Content navbar</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="navbar_component_single" class="nav-link">Single navbar</a></li>
                                        <li class="nav-item"><a href="navbar_component_multiple" class="nav-link">Multiple navbars</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="navbar_colors" class="nav-link">Color options</a></li>
                                <li class="nav-item"><a href="navbar_sizes" class="nav-link">Sizing options</a></li>
                                <li class="nav-item"><a href="navbar_components" class="nav-link">Navbar components</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-arrow-fat-lines-down"></i>
                                <span>Vertical navigation</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navigation_vertical_styles" class="nav-link">Navigation styles</a></li>
                                <li class="nav-item"><a href="navigation_vertical_collapsible" class="nav-link">Collapsible menu</a></li>
                                <li class="nav-item"><a href="navigation_vertical_accordion" class="nav-link">Accordion menu</a></li>
                                <li class="nav-item"><a href="navigation_vertical_bordered" class="nav-link">Bordered navigation</a></li>
                                <li class="nav-item"><a href="navigation_vertical_right_icons" class="nav-link">Right icons</a></li>
                                <li class="nav-item"><a href="navigation_vertical_badges" class="nav-link">Badges</a></li>
                                <li class="nav-item"><a href="navigation_vertical_disabled" class="nav-link">Disabled items</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-arrow-fat-lines-right"></i>
                                <span>Horizontal navigation</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navigation_horizontal_styles" class="nav-link">Navigation styles</a></li>
                                <li class="nav-item"><a href="navigation_horizontal_elements" class="nav-link">Navigation elements</a></li>
                                <li class="nav-item"><a href="navigation_horizontal_tabs" class="nav-link">Tabbed navigation</a></li>
                                <li class="nav-item"><a href="navigation_horizontal_disabled" class="nav-link">Disabled navigation links</a></li>
                                <li class="nav-item"><a href="navigation_horizontal_mega" class="nav-link">Horizontal mega menu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="ph-arrow-elbow-down-right"></i> <span>Menu levels</span></a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Second level with child</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Third level with child</a>
                                            <ul class="nav-group-sub collapse">
                                                <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                            </ul>
                        </li>
                        <!-- /layout -->

                        <!-- Data visualization -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Data visualization</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-chart-line"></i>
                                <span>Echarts library</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="echarts_lines" class="nav-link">Line charts</a></li>
                                <li class="nav-item"><a href="echarts_areas" class="nav-link">Area charts</a></li>
                                <li class="nav-item"><a href="echarts_columns_waterfalls" class="nav-link">Columns and waterfalls</a></li>
                                <li class="nav-item"><a href="echarts_bars_tornados" class="nav-link">Bars and tornados</a></li>
                                <li class="nav-item"><a href="echarts_scatter" class="nav-link">Scatter charts</a></li>
                                <li class="nav-item"><a href="echarts_pies_donuts" class="nav-link">Pies and donuts</a></li>
                                <li class="nav-item"><a href="echarts_funnels_calendars" class="nav-link">Funnels and calendars</a></li>
                                <li class="nav-item"><a href="echarts_candlesticks_others" class="nav-link">Candlesticks and others</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-chart-bar"></i>
                                <span>D3 library</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="d3_lines_basic" class="nav-link">Simple lines</a></li>
                                <li class="nav-item"><a href="d3_lines_advanced" class="nav-link">Advanced lines</a></li>
                                <li class="nav-item"><a href="d3_bars_basic" class="nav-link">Simple bars</a></li>
                                <li class="nav-item"><a href="d3_bars_advanced" class="nav-link">Advanced bars</a></li>
                                <li class="nav-item"><a href="d3_pies" class="nav-link">Pie charts</a></li>
                                <li class="nav-item"><a href="d3_circle_diagrams" class="nav-link">Circle diagrams</a></li>
                                <li class="nav-item"><a href="d3_tree" class="nav-link">Tree layout</a></li>
                                <li class="nav-item"><a href="d3_other" class="nav-link">Other charts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-chart-pie-slice"></i>
                                <span>C3 library</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="c3_lines_areas" class="nav-link">Lines and areas</a></li>
                                <li class="nav-item"><a href="c3_bars_pies" class="nav-link">Bars and pies</a></li>
                                <li class="nav-item"><a href="c3_advanced" class="nav-link">Advanced examples</a></li>
                                <li class="nav-item"><a href="c3_axis" class="nav-link">Chart axis</a></li>
                                <li class="nav-item"><a href="c3_grid" class="nav-link">Grid options</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-google-logo"></i>
                                <span>Google charts</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="google_lines" class="nav-link">Line charts</a></li>
                                <li class="nav-item"><a href="google_bars" class="nav-link">Bar charts</a></li>
                                <li class="nav-item"><a href="google_pies" class="nav-link">Pie charts</a></li>
                                <li class="nav-item"><a href="google_scatter_bubble" class="nav-link">Bubble &amp; scatter charts</a></li>
                                <li class="nav-item"><a href="google_other" class="nav-link">Other charts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-map-pin"></i>
                                <span>Maps integration</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="maps_leaflet" class="nav-link">Leaflet maps</a></li>
                                <li class="nav-item"><a href="maps_echarts" class="nav-link">ECharts maps</a></li>
                                <li class="nav-item"><a href="maps_vector" class="nav-link disabled">D3.js maps <span class="badge bg-transparent align-self-center ms-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <!-- /data visualization -->

                        <!-- Extensions -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Extensions</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-three"></i>
                                <span>Extensions</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="extension_image_cropper" class="nav-link">Image cropper</a></li>
                                <li class="nav-item"><a href="extension_mark" class="nav-link">Mark</a></li>
                                <li class="nav-item"><a href="extension_dnd" class="nav-link">Drag and drop</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-cloud-arrow-up"></i>
                                <span>File uploaders</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="uploader_plupload" class="nav-link">Plupload</a></li>
                                <li class="nav-item"><a href="uploader_bootstrap" class="nav-link">Bootstrap file uploader</a></li>
                                <li class="nav-item"><a href="uploader_dropzone" class="nav-link">Dropzone</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-calendar-check"></i>
                                <span>Event calendars</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="fullcalendar_views" class="nav-link">Basic views</a></li>
                                <li class="nav-item"><a href="fullcalendar_styling" class="nav-link">Event styling</a></li>
                                <li class="nav-item"><a href="fullcalendar_formats" class="nav-link">Language and time</a></li>
                                <li class="nav-item"><a href="fullcalendar_advanced" class="nav-link">Advanced usage</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-globe"></i>
                                <span>Internationalization</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="internationalization_switch_direct" class="nav-link">Direct translation</a></li>
                                <li class="nav-item"><a href="internationalization_switch_query" class="nav-link">Querystring parameter</a></li>
                                <li class="nav-item"><a href="internationalization_fallback" class="nav-link">Language fallback</a></li>
                                <li class="nav-item"><a href="internationalization_callbacks" class="nav-link">Callbacks</a></li>
                            </ul>
                        </li>
                        <!-- /extensions -->

                        <!-- Tables -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Tables</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-table"></i>
                                <span>Basic tables</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="table_basic" class="nav-link">Basic examples</a></li>
                                <li class="nav-item"><a href="table_sizing" class="nav-link">Table sizing</a></li>
                                <li class="nav-item"><a href="table_borders" class="nav-link">Table borders</a></li>
                                <li class="nav-item"><a href="table_styling" class="nav-link">Table styling</a></li>
                                <li class="nav-item"><a href="table_elements" class="nav-link">Table elements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-square-half-bottom"></i>
                                <span>Grid.js tables</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="gridjs_basic" class="nav-link">Basic</a></li>
                                <li class="nav-item"><a href="gridjs_data_source" class="nav-link">Data source</a></li>
                                <li class="nav-item"><a href="gridjs_server_side" class="nav-link">Server side</a></li>
                                <li class="nav-item"><a href="gridjs_customizing" class="nav-link">Customizing</a></li>
                                <li class="nav-item"><a href="gridjs_advanced" class="nav-link">Advanced</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-square-half"></i>
                                <span>Data tables</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="datatable_basic" class="nav-link">Basic initialization</a></li>
                                <li class="nav-item"><a href="datatable_styling" class="nav-link">Basic styling</a></li>
                                <li class="nav-item"><a href="datatable_advanced" class="nav-link">Advanced examples</a></li>
                                <li class="nav-item"><a href="datatable_sorting" class="nav-link">Sorting options</a></li>
                                <li class="nav-item"><a href="datatable_api" class="nav-link">Using API</a></li>
                                <li class="nav-item"><a href="datatable_data_sources" class="nav-link">Data sources</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-puzzle-piece"></i>
                                <span>Data tables extensions</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="datatable_extension_reorder" class="nav-link">Columns reorder</a></li>
                                <li class="nav-item"><a href="datatable_extension_row_reorder" class="nav-link">Row reorder</a></li>
                                <li class="nav-item"><a href="datatable_extension_fixed_columns" class="nav-link">Fixed columns</a></li>
                                <li class="nav-item"><a href="datatable_extension_autofill" class="nav-link">Auto fill</a></li>
                                <li class="nav-item"><a href="datatable_extension_key_table" class="nav-link">Key table</a></li>
                                <li class="nav-item"><a href="datatable_extension_scroller" class="nav-link">Scroller</a></li>
                                <li class="nav-item"><a href="datatable_extension_select" class="nav-link">Select</a></li>
                                <li class="nav-item"><a href="datatable_extension_responsive" class="nav-link">Responsive</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Buttons</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="datatable_extension_buttons_init" class="nav-link">Initialization</a></li>
                                        <li class="nav-item"><a href="datatable_extension_buttons_pdf" class="nav-link">PDF buttons</a></li>
                                        <li class="nav-item"><a href="datatable_extension_buttons_excel" class="nav-link">Excel buttons</a></li>
                                        <li class="nav-item"><a href="datatable_extension_buttons_print" class="nav-link">Print buttons</a></li>
                                        <li class="nav-item"><a href="datatable_extension_buttons_html5" class="nav-link">HTML5 buttons</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="datatable_extension_colvis" class="nav-link">Columns visibility</a></li>
                            </ul>
                        </li>
                        <!-- /tables -->

                        <!-- Page kits -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Page kits</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-cards"></i>
                                <span>General pages</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="general_feed" class="nav-link">Feed</a></li>
                                <li class="nav-item"><a href="general_embeds" class="nav-link">Embeds</a></li>
                                <li class="nav-item"><a href="general_faq" class="nav-link">FAQ page</a></li>
                                <li class="nav-item"><a href="general_knowledgebase" class="nav-link">Knowledgebase</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Blog</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="blog_classic_v" class="nav-link">Classic vertical</a></li>
                                        <li class="nav-item"><a href="blog_classic_h" class="nav-link">Classic horizontal</a></li>
                                        <li class="nav-item"><a href="blog_grid" class="nav-link">Grid</a></li>
                                        <li class="nav-item"><a href="blog_single" class="nav-link">Single post</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="blog_sidebar_left" class="nav-link">Left sidebar</a></li>
                                        <li class="nav-item"><a href="blog_sidebar_right" class="nav-link">Right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Timelines</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="timelines_left" class="nav-link">Left timeline</a></li>
                                        <li class="nav-item"><a href="timelines_right" class="nav-link">Right timeline</a></li>
                                        <li class="nav-item"><a href="timelines_center" class="nav-link">Centered timeline</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Gallery</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="gallery_grid" class="nav-link">Media grid</a></li>
                                        <li class="nav-item"><a href="gallery_titles" class="nav-link">Media with titles</a></li>
                                        <li class="nav-item"><a href="gallery_description" class="nav-link">Media with description</a></li>
                                        <li class="nav-item"><a href="gallery_library" class="nav-link">Media library</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-wrench"></i>
                                <span>Service pages</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="service_sitemap" class="nav-link">Sitemap</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Invoicing</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="invoice_template" class="nav-link">Invoice template</a></li>
                                        <li class="nav-item"><a href="invoice_grid" class="nav-link">Invoice grid</a></li>
                                        <li class="nav-item"><a href="invoice_archive" class="nav-link">Invoice archive</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Authentication</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="login_simple" class="nav-link">Simple login</a></li>
                                        <li class="nav-item"><a href="login_advanced" class="nav-link">More login info</a></li>
                                        <li class="nav-item"><a href="login_registration" class="nav-link">Simple registration</a></li>
                                        <li class="nav-item"><a href="login_registration_advanced" class="nav-link">More registration info</a></li>
                                        <li class="nav-item"><a href="login_unlock" class="nav-link">Unlock user</a></li>
                                        <li class="nav-item"><a href="login_password_recover" class="nav-link">Reset password</a></li>
                                        <li class="nav-item"><a href="login_hide_navbar" class="nav-link">Hide navbar</a></li>
                                        <li class="nav-item"><a href="login_transparent" class="nav-link">Transparent box</a></li>
                                        <li class="nav-item"><a href="login_background" class="nav-link">Background option</a></li>
                                        <li class="nav-item"><a href="login_validation" class="nav-link">With validation</a></li>
                                        <li class="nav-item"><a href="login_tabbed" class="nav-link">Tabbed form</a></li>
                                        <li class="nav-item"><a href="login_modals" class="nav-link">Inside modals</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Error pages</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="error_403" class="nav-link">Error 403</a></li>
                                        <li class="nav-item"><a href="error_404" class="nav-link">Error 404</a></li>
                                        <li class="nav-item"><a href="error_405" class="nav-link">Error 405</a></li>
                                        <li class="nav-item"><a href="error_500" class="nav-link">Error 500</a></li>
                                        <li class="nav-item"><a href="error_503" class="nav-link">Error 503</a></li>
                                        <li class="nav-item"><a href="error_offline" class="nav-link">Offline page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-user-focus"></i>
                                <span>User pages</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="user_pages_list" class="nav-link">User list</a></li>
                                <li class="nav-item"><a href="user_pages_cards" class="nav-link">User cards</a></li>
                                <li class="nav-item"><a href="user_pages_profile" class="nav-link">Simple profile</a></li>
                                <li class="nav-item"><a href="user_pages_profile_tabbed" class="nav-link">Tabbed profile</a></li>
                                <li class="nav-item"><a href="user_pages_profile_cover" class="nav-link">Profile with cover</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>Application pages</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Task manager</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="task_manager_grid" class="nav-link">Task grid</a></li>
                                        <li class="nav-item"><a href="task_manager_list" class="nav-link">Task list</a></li>
                                        <li class="nav-item"><a href="task_manager_detailed" class="nav-link">Task detailed</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Inbox</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="mail_list" class="nav-link">Mail list</a></li>
                                        <li class="nav-item"><a href="mail_list_detached" class="nav-link">Mail list (detached)</a></li>
                                        <li class="nav-item"><a href="mail_read" class="nav-link">Read mail</a></li>
                                        <li class="nav-item"><a href="mail_write" class="nav-link">Write mail</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="chat_layouts" class="nav-link">Chat layouts</a></li>
                                        <li class="nav-item"><a href="chat_options" class="nav-link">Chat options</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Search</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="search_basic" class="nav-link">Basic search results</a></li>
                                        <li class="nav-item"><a href="search_users" class="nav-link">User search results</a></li>
                                        <li class="nav-item"><a href="search_images" class="nav-link">Image search results</a></li>
                                        <li class="nav-item"><a href="search_videos" class="nav-link">Video search results</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Job search</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="job_list_cards" class="nav-link">Cards view</a></li>
                                        <li class="nav-item"><a href="job_list_list" class="nav-link">List view</a></li>
                                        <li class="nav-item"><a href="job_detailed" class="nav-link">Job detailed</a></li>
                                        <li class="nav-item"><a href="job_apply" class="nav-link">Apply</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Learning</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="learning_list" class="nav-link">List view</a></li>
                                        <li class="nav-item"><a href="learning_grid" class="nav-link">Grid view</a></li>
                                        <li class="nav-item"><a href="learning_detailed" class="nav-link">Detailed course</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Ecommerce set</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="ecommerce_product_list" class="nav-link">Product list</a></li>
                                        <li class="nav-item"><a href="ecommerce_product_grid" class="nav-link">Product grid</a></li>
                                        <li class="nav-item"><a href="ecommerce_orders_history" class="nav-link">Orders history</a></li>
                                        <li class="nav-item"><a href="ecommerce_customers" class="nav-link">Customers</a></li>
                                        <li class="nav-item"><a href="ecommerce_pricing" class="nav-link">Pricing tables</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-gift"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="widgets_content" class="nav-link">Content widgets</a></li>
                                <li class="nav-item"><a href="widgets_stats" class="nav-link">Statistics widgets</a></li>
                                <li class="nav-item"><a href="widgets_menu" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ms-auto">Coming soon</span></a></li>
                                <li class="nav-item"><a href="widgets_form" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ms-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <!-- /page kits -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @component('components.breadcrumb')
                @slot('title') Sidebars @endslot
                @slot('subtitle') Default Hidden @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Info alert -->
                    <div class="alert alert-success alert-dismissible">
                        <div class="alert-heading fw-semibold">Hidden default sidebar</div>
                        If you want to hide main sidebar on page load and show it on demand, add <code>.sidebar-collapsed</code> class to <code>.sidebar-main</code> container.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <!-- /info alert -->


                    <!-- Sidebars overview -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Sidebars overview</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Sidebar - vertical area that displays onscreen and presents widget components and website navigation menu in a text-based hierarchical form. All sidebars are css-driven - just add one of css classes to the <code>.sidebar</code> container, and sidebar will change its width and color. No js, css only. Although sidebar type is based on css, buttons do their job with JS - they switch necessary classes in <code>.sidebar</code> container. Below you'll find summarized tables with all available <code>button</code> and <code>sidebar</code> container classes. By default, the template includes 6 different sidebar types and combinations:</p>

                            <div class="mb-3">
                                <h6>1. Default sidebar</h6>
                                <p>Default template sidebar has <code>300px</code> (~18.75rem) width, aligned to the left (to the right in RTL version) and has dark blue background color. All navigation levels are based on accordion <strong>or</strong> collapsible functionality, open on click. Supports 2 versions: fixed (default) and static (in static layout only). Both versions use default browser scrollbars, but support custom scrollbars such as <code>perfect scrollbar</code> component.</p>
                            </div>

                            <div class="mb-3">
                                <h6>2. Mini sidebar</h6>
                                <p>Mini sidebar has <code>56px</code> width, which is calculated dynamically (icon size + double padding). No text in parent level of menu items, aligned to the left (to the right in RTL version) and has dark blue background color. Sidebar changes the width on hover, no additional changes. It is <strong>required</strong> to add <code>.sidebar-main-resized</code> class to the <code>.sidebar</code> container if you want to have it collapsed by default. This class is responsible for sidebar width and main navigation. By default all components except main navigation are hidden in mini sidebar. Can be used with main sidebar only.</p>
                            </div>

                            <div class="mb-3">
                                <h6>3. Secondary sidebar</h6>
                                <p>Main sidebar has <code>300px</code> width or <code>56px</code> (if <code>.sidebar-main-resized</code> class added). Secondary sidebar has the same fixed width of <code>300px</code>, which is similar to default and right sidebars, so different sidebar components can be placed to all sidebar types. Main and secondary sidebars can contain any content - menu, navigation, buttons, lists, tabs etc. Secondary sidebar can be either collapsed or hidden.</p>
                            </div>

                            <div class="mb-3">
                                <h6>4. Right sidebar</h6>
                                <p>Right sidebar layout includes additional sidebar displayed on the right (left in RTL direction) side. It is displayed as an additional component with 100% height, similar to other sidebars. Right sidebar is visible by default, but can be collapsed or hidden.</p>
                            </div>

                            <div class="mb-3">
                                <h6>5. Right/Secondary sidebars</h6>
                                <p>Secondary and Right sidebars can be used together, so basically it is a 4 column layout. The width of any sidebar doesn't affect other layout columns, they all have independent width controls. Refer to the table below for more information.</p>
                            </div>

                            <div class="mb-3">
                                <h6>6. Content (component) sidebar</h6>
                                <p>Usually sidebar is not a part of content and mainly used for navigation. Limitless allows you to use sidebar outside and inside content area. Content sidebar isn't based on grid and has the same width as other sidebars, this means all sidebar components can be placed inside content sidebar. Supports left and right positioning and can be either stretched to fill all available height or height that depends on sidebar content height.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /sidebars overview -->


                    <!-- Button classes -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Button classes</h5>
                        </div>

                        <div class="card-body">
                            <h6>Overview</h6>
                            <p class="mb-3">This table displays all optional <code>button</code> classes, responsible for the sidebar appearance. Depending on the sidebar type, add one of these classes to any button or link and this element will handle sidebar control. Multiple controls are also available - add as many sidebar controls as you wish. Please note: these classes don't change sidebar markup, only CSS rules.</p>
                            <div class="table-responsive border rounded mb-4">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0" style="width: 300px;">Button class</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>.sidebar-main-resize</code></td>
                                            <td>Resizable sidebar. Changes main sidebar width from default to mini. This button is added to all pages by default.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main-toggle</code></td>
                                            <td>Collapses/expands and/or hides/shows <code>main</code> sidebar. Used mostly in dual sidebar type to hide main sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-end-toggle</code></td>
                                            <td>Toggles right sidebar - if right sidebar is shown, main sidebar width remains the same, whether it's in default or mini mode.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-secondary-toggle</code></td>
                                            <td>Hides/shows or collapses/expands <code>secondary</code> sidebar. Secondary sidebar supports only toggle functionality and always has fixed width of <code>300px</code>.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-component-toggle</code></td>
                                            <td>Hides/shows <code>content</code> sidebars. Content sidebars aren't connected with other sidebars, so this is the only button that controls their visibility.</td>
                                        </tr>
                                        <tr class="border-top-width-2">
                                            <td><code>.sidebar-mobile-main-toggle</code></td>
                                            <td>Toggles <code>main</code> sidebar on mobile - slides from left to right.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-mobile-secondary-toggle</code></td>
                                            <td>Toggles <code>secondary</code> sidebar on mobile - slides from left to right.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-mobile-end-toggle</code></td>
                                            <td>Toggles <code>right</code> sidebar on mobile - slides from right to left.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-mobile-component-toggle</code></td>
                                            <td>Toggles <code>content</code> sidebar on mobile - has full width by default, has no animation.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h6>Example Markup</h6>
                            <p>Default placement of sidebar control buttons is sidebar header:</p>
                            <pre class="language-markup mb-3" data-line="13-19">
								<code>
									&lt;!-- Main sidebar -->
									&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

										&lt;!-- Sidebar content -->
										&lt;div class="sidebar-content">

											&lt;!-- Header -->
											&lt;div class="sidebar-section">
												&lt;div class="sidebar-section-body d-flex justify-content-center">
													&lt;h6 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation&lt;/h6>

													&lt;div>
														&lt;button type="button" class="[button classes]">
															&lt;i class="ph-arrows-left-right">&lt;/i>
														&lt;/button>

														&lt;button type="button" class="[button classes]">
															&lt;i class="ph-x">&lt;/i>
														&lt;/button>
													&lt;/div>
												&lt;/div>
											&lt;/div>
											&lt;!-- /header -->

											[other content]

										&lt;/div>
										&lt;!-- /sidebar content -->

									&lt;/div>
									&lt;!-- /main sidebar -->
								</code>
							</pre>

                            <p>Here is an example of button inside navbar:</p>
                            <pre class="language-markup" data-line="7-9">
								<code>
									&lt;!-- Navbar placement -->
									&lt;div class="navbar navbar-expand navbar-dark">
										&lt;div class="navbar-brand">...&lt;/div>

										&lt;ul class="navbar-nav">
											&lt;li class="nav-item">
												&lt;a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle">
													&lt;i class="ph-arrows-left-right">&lt;/i>
												&lt;/a>
											&lt;/li>
											...
										&lt;/ul>
									&lt;/div>
									&lt;!-- /navbar placement -->
								</code>
							</pre>
                        </div>
                    </div>
                    <!-- /button classes -->


                    <!-- Sidebar classes -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Sidebar classes</h5>
                        </div>

                        <div class="card-body">
                            <h6>Overview</h6>
                            <p class="mb-3">This table demonstrates all classes for <code>sidebar</code> container, responsible for the sidebar width and color. Almost all of these classes are mandatory, some of them are responsible for proper styling or have a specific code attached to this class (like <code>.sidebar-main</code> class, which has collapsible functionality). All classes can be combined depending on the type of sidebar:</p>
                            <div class="table-responsive border rounded mb-4">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0" style="width: 300px">Body class</th>
                                            <th class="border-top-0">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>.sidebar</code></td>
                                            <td>Default sidebar class, should be added in all layout types.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main</code></td>
                                            <td>Defines <strong>main</strong> sidebar. Mini sidebar (<code>.sidebar-main-resized</code> class) takes effect only if sidebar has <code>.sidebar-main</code> class. By default, all components except main navigation are hidden in mini sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main-resized</code></td>
                                            <td>Defines <strong>main</strong> sidebar in <code>collapsed</code> state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-secondary</code></td>
                                            <td>Defines <strong>secondary</strong> sidebar. Has fixed <code>270px</code> width and usually comes after main sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-secondary-collapsed</code></td>
                                            <td>Defines <strong>secondary</strong> sidebar in <code>collapsed</code> state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-end</code></td>
                                            <td>Defines <strong>right</strong> sidebar. Has fixed <code>270px</code> width and appears on the right side from the main sidebar.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-end-collapsed</code></td>
                                            <td>Defines <strong>right</strong> sidebar in <code>collapsed</code> state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-component</code></td>
                                            <td>This class is required in <strong>content</strong> (or component) sidebar. Also requires <code>.sidebar-component-left</code> or <code>.sidebar-component-right</code> classes for proper spacing.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-component-collapsed</code></td>
                                            <td>Defines <strong>content</strong> sidebar in collapsed state</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-dark</code></td>
                                            <td>Defines <strong>dark</strong> sidebar. This class can be applied to all sidebar types and positions. This class is also required for custom colors (see below).</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-dark.bg-*</code></td>
                                            <td>Defines sidebar background color. According to the custom color system, sidebar background color can be changed to one of the available colors by adding a proper class to the main sidebar container.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-expand-[breakpoint]</code></td>
                                            <td>This class specifies when sidebar needs to be collapsed, basically when sidebar switches to mobile mode. Breakpoint should always be similar to <strong>navbar</strong> breakpoint for proper matching. Available breakpoints are: xl, lg, md and sm. This class is required.</td>
                                        </tr>
                                        <tr>
                                            <td><code>.sidebar-main-unfold</code></td>
                                            <td>This class gets added when user hovers on mini sidebar. It controls resizable behaviour when main sidebar is collapsed. Has no effect on mobile since all sidebars on mobile have same width.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h6>Example Markup</h6>
                            <p>Default left aligned sidebar markup:</p>
                            <pre class="language-markup mb-3" data-line="15">
								<code>
									&lt;!-- Default sidebar layout -->
									&lt;body>

										&lt;!-- Navbar -->
										&lt;div class="navbar navbar-dark navbar-expand-lg">
											...
										&lt;/div>
										&lt;!-- /navbar -->


										&lt;!-- Page container -->
										&lt;div class="page-content">

											&lt;!-- Main sidebar -->
											&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
												&lt;div class="sidebar-content">
													...
												&lt;/div>
											&lt;/div>
											&lt;!-- /main sidebar -->

											&lt;!-- Main content -->
											&lt;div class="content-wrapper">
												...
											&lt;/div>
											&lt;!-- /main content -->

										&lt;/div>
										&lt;!-- /page content -->

									&lt;/body>
									&lt;!-- /default sidebar layout -->
								</code>
							</pre>

                            <p>Mini sidebar markup. The only difference is <code>.sidebar-main-resized</code> class:</p>
                            <pre class="language-markup" data-line="15">
								<code>
									&lt;!-- Mini sidebar layout -->
									&lt;body>

										&lt;!-- Navbar -->
										&lt;div class="navbar navbar-dark navbar-expand-lg">
											...
										&lt;/div>
										&lt;!-- /navbar -->


										&lt;!-- Page container -->
										&lt;div class="page-content">

											&lt;!-- Main sidebar -->
											&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized">
												&lt;div class="sidebar-content">
													...
												&lt;/div>
											&lt;/div>
											&lt;!-- /main sidebar -->

											&lt;!-- Main content -->
											&lt;div class="content-wrapper">
												...
											&lt;/div>
											&lt;!-- /main content -->

										&lt;/div>
										&lt;!-- /page content -->

									&lt;/body>
									&lt;!-- /mini sidebar layout -->
								</code>
							</pre>
                        </div>
                    </div>
                    <!-- /sidebar classes -->

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
