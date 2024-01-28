@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Service Pages @endslot
@slot('subtitle') Sitemap @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Sitemap -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sitemap</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="mb-3">
                        <h6>Main</h6>
                        <ul class="list list-unstyled">
                            <li><a href="index">Dashboard</a></li>
                            <li><a href="../../RTL/default/index">RTL version</a></li>
                            <li><a href="../../../../docs/other_changelog">Changelog</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Starter kit</h6>
                        <ul class="list list-unstyled">
                            <li><a href="starters/horizontal_nav">Horizontal navigation</a></li>
                            <li><a href="starters/1_col">1 column</a></li>
                            <li><a href="starters/2_col">2 columns</a></li>
                            <li><a href="starters/3_col_dual">3 columns - Dual sidebars</a></li>
                            <li><a href="starters/3_col_double">3 columns - Double sidebars</a></li>
                            <li><a href="starters/4_col">4 columns</a></li>
                            <li><a href="starters/detached_left">Detached layout - Left sidebar</a></li>
                            <li><a href="starters/detached_right">Detached layout - Right sidebar</a></li>
                            <li><a href="starters/detached_sticky">Detached layout - Sticky sidebar</a></li>
                            <li><a href="starters/layout_boxed">Boxed layout</a></li>
                            <li><a href="starters/layout_navbar_fixed_main">Fixed main navbar</a></li>
                            <li><a href="starters/layout_navbar_fixed_secondary">Fixed secondary navbar</a></li>
                            <li><a href="starters/layout_navbar_fixed_both">Both navbars fixed</a></li>
                            <li><a href="starters/layout_fixed">Fixed layout</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Editors</h6>
                        <ul class="list list-unstyled">
                            <li><a href="editor_summernote">Summernote editor</a></li>
                            <li><a href="editor_ckeditor">CKEditor</a></li>
                            <li><a href="editor_trumbowyg">Trumbowyg editor</a></li>
                            <li><a href="editor_code">Code editor</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Content appearance</h6>
                        <ul class="list list-unstyled">
                            <li><a href="appearance_content_cards">Content cards</a></li>
                            <li><a href="appearance_card_heading">Card heading elements</a></li>
                            <li><a href="appearance_card_footer">Card footer elements</a></li>
                            <li><a href="appearance_draggable_cards">Draggable cards</a></li>
                            <li><a href="appearance_text_styling">Text styling</a></li>
                            <li><a href="appearance_typography">Typography</a></li>
                            <li><a href="appearance_helpers">Helper classes</a></li>
                            <li><a href="appearance_syntax_highlighter">Syntax highlighter</a></li>
                            <li><a href="appearance_content_grid">Grid system</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Sidebars</h6>
                        <ul class="list list-unstyled">
                            <li><a href="sidebar_default_collapse">Default collapsible</a></li>
                            <li><a href="sidebar_default_hide">Default hideable</a></li>
                            <li><a href="sidebar_mini_collapse">Mini collapsible</a></li>
                            <li><a href="sidebar_mini_hide">Mini hideable</a></li>
                            <li><a href="sidebar_dual">Dual sidebar</a></li>
                            <li><a href="sidebar_dual_double_collapse">Dual double collapse</a></li>
                            <li><a href="sidebar_dual_double_hide">Dual double hide</a></li>
                            <li><a href="sidebar_dual_swap">Swap sidebars</a></li>
                            <li><a href="sidebar_double_collapse">Double - Collapse main sidebar</a></li>
                            <li><a href="sidebar_double_hide">Double - Hide main sidebar</a></li>
                            <li><a href="sidebar_double_fix_default">Double - Fix default width</a></li>
                            <li><a href="sidebar_double_fix_mini">Double - Fix mini width</a></li>
                            <li><a href="sidebar_double_visible">Double - Opposite sidebar visible</a></li>
                            <li><a href="sidebar_detached_left">Detached - Left position</a></li>
                            <li><a href="sidebar_detached_right">Detached - Right position</a></li>
                            <li><a href="sidebar_detached_sticky_custom">Detached - Sticky (custom scroll)</a></li>
                            <li><a href="sidebar_detached_sticky_native">Detached - Sticky (native scroll)</a></li>
                            <li><a href="sidebar_detached_separate">Detached - Separate categories</a></li>
                            <li><a href="sidebar_hidden">Hidden sidebar</a></li>
                            <li><a href="sidebar_light">Light sidebar</a></li>
                            <li><a href="sidebar_components">Sidebar components</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Echarts library</h6>
                        <ul class="list list-unstyled">
                            <li><a href="echarts_lines_areas">Lines and areas</a></li>
                            <li><a href="echarts_columns_waterfalls">Columns and waterfalls</a></li>
                            <li><a href="echarts_bars_tornados">Bars and tornados</a></li>
                            <li><a href="echarts_scatter">Scatter charts</a></li>
                            <li><a href="echarts_pies_donuts">Pies and donuts</a></li>
                            <li><a href="echarts_funnels_chords">Funnels and chords</a></li>
                            <li><a href="echarts_candlesticks_others">Candlesticks and others</a></li>
                            <li><a href="echarts_combinations">Chart combinations</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Google library</h6>
                        <ul class="list list-unstyled">
                            <li><a href="google_lines">Line charts</a></li>
                            <li><a href="google_bars">Bar charts</a></li>
                            <li><a href="google_pies">Pie charts</a></li>
                            <li><a href="google_scatter_bubble">Bubble &amp; scatter charts</a></li>
                            <li><a href="google_other">Other charts</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>File uploaders</h6>
                        <ul class="list list-unstyled">
                            <li><a href="uploader_plupload">Plupload</a></li>
                            <li><a href="uploader_bootstrap">Bootstrap file uploader</a></li>
                            <li><a href="uploader_dropzone">Dropzone</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Data tables</h6>
                        <ul class="list list-unstyled">
                            <li><a href="datatable_basic">Basic initialization</a></li>
                            <li><a href="datatable_styling">Basic styling</a></li>
                            <li><a href="datatable_advanced">Advanced examples</a></li>
                            <li><a href="datatable_sorting">Sorting options</a></li>
                            <li><a href="datatable_api">Using API</a></li>
                            <li><a href="datatable_data_sources">Data sources</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>User pages</h6>
                        <ul class="list list-unstyled">
                            <li><a href="user_list">User list</a></li>
                            <li><a href="user_profile">Simple profile</a></li>
                            <li><a href="user_profile_tabbed">Tabbed profile</a></li>
                            <li><a href="user_profile_cover">Profile with cover</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Learning</h6>
                        <ul class="list list-unstyled">
                            <li><a href="learning_list">List view</a></li>
                            <li><a href="learning_grid">Grid view</a></li>
                            <li><a href="learning_detailed">Detailed course</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="mb-3">
                        <h6>Page layouts</h6>
                        <ul class="list list-unstyled">
                            <li><a href="layout_navbar_fixed">Fixed navbar</a></li>
                            <li><a href="layout_navbar_sidebar_fixed">Fixed navbar &amp; sidebar</a></li>
                            <li><a href="layout_sidebar_fixed_native">Fixed sidebar native scroll</a></li>
                            <li><a href="layout_navbar_hideable">Hideable navbar</a></li>
                            <li><a href="layout_footer_fixed">Fixed footer</a></li>
                            <li><a href="boxed_default">Boxed with default sidebar</a></li>
                            <li><a href="boxed_mini">Boxed with mini sidebar</a></li>
                            <li><a href="boxed_full">Boxed full width</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Form components</h6>
                        <ul class="list list-unstyled">
                            <li><a href="form_inputs_basic">Basic inputs</a></li>
                            <li><a href="form_checkboxes_radios">Checkboxes &amp; radios</a></li>
                            <li><a href="form_input_groups">Input groups</a></li>
                            <li><a href="form_controls_extended">Extended controls</a></li>
                            <li><a href="form_floating_labels">Floating labels</a></li>
                            <li><a href="form_select2">Select2 selects</a></li>
                            <li><a href="form_multiselect">Bootstrap multiselect</a></li>
                            <li><a href="form_tag_inputs">Tag inputs</a></li>
                            <li><a href="form_dual_listboxes">Dual Listboxes</a></li>
                            <li><a href="form_editable">Editable forms</a></li>
                            <li><a href="form_validation">Validation</a></li>
                            <li><a href="form_inputs_grid">Inputs grid</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Pickers</h6>
                        <ul class="list list-unstyled">
                            <li><a href="picker_date">Date &amp; time pickers</a></li>
                            <li><a href="picker_color">Color pickers</a></li>
                            <li><a href="picker_location">Location pickers</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Extra components</h6>
                        <ul class="list list-unstyled">
                            <li><a href="extra_sliders_noui">NoUI sliders</a></li>
                            <li><a href="extra_sliders_ion">Ion range sliders</a></li>
                            <li><a href="extra_session_timeout">Session timeout</a></li>
                            <li><a href="extra_idle_timeout">Idle timeout</a></li>
                            <li><a href="extra_trees">Dynamic tree views</a></li>
                            <li><a href="extra_context_menu">Context menu</a></li>
                            <li><a href="extra_fab">Floating action buttons</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Vertical navigation</h6>
                        <ul class="list list-unstyled">
                            <li><a href="navigation_vertical_collapsible">Collapsible menu</a></li>
                            <li><a href="navigation_vertical_accordion">Accordion menu</a></li>
                            <li><a href="navigation_vertical_sizing">Navigation sizing</a></li>
                            <li><a href="navigation_vertical_bordered">Bordered navigation</a></li>
                            <li><a href="navigation_vertical_right_icons">Right icons</a></li>
                            <li><a href="navigation_vertical_labels_badges">Labels and badges</a></li>
                            <li><a href="navigation_vertical_disabled">Disabled navigation links</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>D3 library</h6>
                        <ul class="list list-unstyled">
                            <li><a href="d3_lines_basic">Simple lines</a></li>
                            <li><a href="d3_lines_advanced">Advanced lines</a></li>
                            <li><a href="d3_bars_basic">Simple bars</a></li>
                            <li><a href="d3_bars_advanced">Advanced bars</a></li>
                            <li><a href="d3_pies">Pie charts</a></li>
                            <li><a href="d3_circle_diagrams">Circle diagrams</a></li>
                            <li><a href="d3_tree">Tree layout</a></li>
                            <li><a href="d3_other">Other charts</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Maps</h6>
                        <ul class="list list-unstyled">
                            <li><a href="maps_google_basic">Google - Basics</a></li>
                            <li><a href="maps_google_controls">Google - Controls</a></li>
                            <li><a href="maps_google_markers">Google - Markers</a></li>
                            <li><a href="maps_google_drawings">Google - Map drawings</a></li>
                            <li><a href="maps_google_layers">Google - Layers</a></li>
                            <li><a href="maps_vector">Vector maps</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Event calendars</h6>
                        <ul class="list list-unstyled">
                            <li><a href="extension_fullcalendar_views">Basic views</a></li>
                            <li><a href="extension_fullcalendar_styling">Event styling</a></li>
                            <li><a href="extension_fullcalendar_formats">Language and time</a></li>
                            <li><a href="extension_fullcalendar_advanced">Advanced usage</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Data tables extensions</h6>
                        <ul class="list list-unstyled">
                            <li><a href="datatable_extension_reorder">Columns reorder</a></li>
                            <li><a href="datatable_extension_row_reorder">Row reorder</a></li>
                            <li><a href="datatable_extension_fixed_columns">Fixed columns</a></li>
                            <li><a href="datatable_extension_autofill">Auto fill</a></li>
                            <li><a href="datatable_extension_key_table">Key table</a></li>
                            <li><a href="datatable_extension_scroller">Scroller</a></li>
                            <li><a href="datatable_extension_select">Select</a></li>
                            <li><a href="datatable_extension_buttons_init">Buttons - Initialization</a></li>
                            <li><a href="datatable_extension_buttons_flash">Buttons - Flash buttons</a></li>
                            <li><a href="datatable_extension_buttons_print">Buttons - Print buttons</a></li>
                            <li><a href="datatable_extension_buttons_html5">Buttons - HTML5 buttons</a></li>
                            <li><a href="datatable_extension_colvis">Columns visibility</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>General pages</h6>
                        <ul class="list list-unstyled">
                            <li><a href="general_news">News</a></li>
                            <li><a href="general_feed">Feed</a></li>
                            <li><a href="general_widgets_content">Content widgets</a></li>
                            <li><a href="general_widgets_stats">Statistics widgets</a></li>
                            <li><a href="general_embeds">Embeds</a></li>
                            <li><a href="general_faq">FAQ page</a></li>
                            <li><a href="general_knowledgebase">Knowledgebase</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Timelines</h6>
                        <ul class="list list-unstyled">
                            <li><a href="timelines_left">Left timeline</a></li>
                            <li><a href="timelines_right">Right timeline</a></li>
                            <li><a href="timelines_center">Centered timeline</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Search</h6>
                        <ul class="list list-unstyled">
                            <li><a href="search_basic">Basic search results</a></li>
                            <li><a href="search_users">User search results</a></li>
                            <li><a href="search_images">Image search results</a></li>
                            <li><a href="search_videos">Video search results</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="mb-3">
                        <h6>Layouts</h6>
                        <ul class="list list-unstyled">
                            <li><a href="../../../layout_1/LTR/index" id="layout1">Layout 1</a></li>
                            <li><a href="index" id="layout2">Layout 2</a></li>
                            <li><a href="../../../layout_3/LTR/index" id="layout3">Layout 3</a></li>
                            <li><a href="../../../layout_4/LTR/index" id="layout4">Layout 4</a></li>
                            <li><a href="../../../layout_5/LTR/index" id="layout5">Layout 5</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>JSON forms</h6>
                        <ul class="list list-unstyled">
                            <li><a href="alpaca_basic">Basic inputs</a></li>
                            <li><a href="alpaca_advanced">Advanced inputs</a></li>
                            <li><a href="alpaca_controls">Controls</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Form layouts</h6>
                        <ul class="list list-unstyled">
                            <li><a href="form_layout_vertical">Vertical form</a></li>
                            <li><a href="form_layout_horizontal">Horizontal form</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Animations</h6>
                        <ul class="list list-unstyled">
                            <li><a href="animations_css3">CSS3 animations</a></li>
                            <li><a href="animations_velocity_basic">Velocity - Basic usage</a></li>
                            <li><a href="animations_velocity_ui">Velocity - UI pack effects</a></li>
                            <li><a href="animations_velocity_examples">Velocity - Advanced examples</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Horizontal navigation</h6>
                        <ul class="list list-unstyled">
                            <li><a href="navigation_horizontal_click">Submenu on click</a></li>
                            <li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
                            <li><a href="navigation_horizontal_elements">With custom elements</a></li>
                            <li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
                            <li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
                            <li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Extensions</h6>
                        <ul class="list list-unstyled">
                            <li><a href="extension_image_cropper">Image cropper</a></li>
                            <li><a href="extension_blockui">Block UI</a></li>
                            <li><a href="extension_dnd">Drag and drop</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Internationalization</h6>
                        <ul class="list list-unstyled">
                            <li><a href="internationalization_switch_direct">Direct translation</a></li>
                            <li><a href="internationalization_switch_query">Querystring parameter</a></li>
                            <li><a href="internationalization_on_init">Set language on init</a></li>
                            <li><a href="internationalization_after_init">Set language after init</a></li>
                            <li><a href="internationalization_fallback">Language fallback</a></li>
                            <li><a href="internationalization_callbacks">Callbacks</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Blog</h6>
                        <ul class="list list-unstyled">
                            <li><a href="blog_classic_v">Classic vertical</a></li>
                            <li><a href="blog_classic_h">Classic horizontal</a></li>
                            <li><a href="blog_grid">Grid</a></li>
                            <li><a href="blog_timeline">Timeline</a></li>
                            <li><a href="blog_single">Single post</a></li>
                            <li><a href="blog_sidebar_left">Left sidebar</a></li>
                            <li><a href="blog_sidebar_right">Right sidebar</a></li>
                            <li><a href="blog_no_sidebar">No sidebar</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Authentication</h6>
                        <ul class="list list-unstyled">
                            <li><a href="login_simple">Simple login</a></li>
                            <li><a href="login_advanced">More login info</a></li>
                            <li><a href="login_registration">Simple registration</a></li>
                            <li><a href="login_registration_advanced">More registration info</a></li>
                            <li><a href="login_unlock">Unlock user</a></li>
                            <li><a href="login_password_recover">Reset password</a></li>
                            <li><a href="login_hide_navbar">Hide navbar</a></li>
                            <li><a href="login_transparent">Transparent box</a></li>
                            <li><a href="login_background">Background option</a></li>
                            <li><a href="login_validation">With validation</a></li>
                            <li><a href="login_tabbed">Tabbed form</a></li>
                            <li><a href="login_modals">Inside modals</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Error pages</h6>
                        <ul class="list list-unstyled">
                            <li><a href="error_403">Error 403</a></li>
                            <li><a href="error_404">Error 404</a></li>
                            <li><a href="error_405">Error 405</a></li>
                            <li><a href="error_500">Error 500</a></li>
                            <li><a href="error_503">Error 503</a></li>
                            <li><a href="error_offline">Offline page</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Ecommerce set</h6>
                        <ul class="list list-unstyled">
                            <li><a href="ecommerce_product_list">Product list</a></li>
                            <li><a href="ecommerce_product_grid">Product grid</a></li>
                            <li><a href="ecommerce_orders_history">Orders history</a></li>
                            <li><a href="ecommerce_customers">Customers</a></li>
                            <li><a href="ecommerce_pricing">Pricing tables</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="mb-3">
                        <h6>Color system</h6>
                        <ul class="list list-unstyled">
                            <li><a href="colors_primary">Primary palette</a></li>
                            <li><a href="colors_danger">Danger palette</a></li>
                            <li><a href="colors_success">Success palette</a></li>
                            <li><a href="colors_warning">Warning palette</a></li>
                            <li><a href="colors_info">Info palette</a></li>
                            <li><a href="colors_pink">Pink palette</a></li>
                            <li><a href="colors_violet">Violet palette</a></li>
                            <li><a href="colors_purple">Purple palette</a></li>
                            <li><a href="colors_indigo">Indigo palette</a></li>
                            <li><a href="colors_blue">Blue palette</a></li>
                            <li><a href="colors_teal">Teal palette</a></li>
                            <li><a href="colors_green">Green palette</a></li>
                            <li><a href="colors_orange">Orange palette</a></li>
                            <li><a href="colors_brown">Brown palette</a></li>
                            <li><a href="colors_grey">Grey palette</a></li>
                            <li><a href="colors_slate">Slate palette</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Wizards</h6>
                        <ul class="list list-unstyled">
                            <li><a href="wizard_steps">Steps wizard</a></li>
                            <li><a href="wizard_form">Form wizard</a></li>
                            <li><a href="wizard_stepy">Stepy wizard</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Components</h6>
                        <ul class="list list-unstyled">
                            <li><a href="components_modals">Modals</a></li>
                            <li><a href="components_dropdowns">Dropdown menus</a></li>
                            <li><a href="components_tabs">Tabs component</a></li>
                            <li><a href="components_pills">Pills component</a></li>
                            <li><a href="components_navs">Accordion and navs</a></li>
                            <li><a href="components_buttons">Buttons</a></li>
                            <li><a href="components_notifications_pnotify">PNotify notifications</a></li>
                            <li><a href="components_notifications_others">Other notifications</a></li>
                            <li><a href="components_popups">Tooltips and popovers</a></li>
                            <li><a href="components_alerts">Alerts</a></li>
                            <li><a href="components_pagination">Pagination</a></li>
                            <li><a href="components_labels">Labels and badges</a></li>
                            <li><a href="components_loaders">Loaders and bars</a></li>
                            <li><a href="components_thumbnails">Thumbnails</a></li>
                            <li><a href="components_page_header">Page header</a></li>
                            <li><a href="components_breadcrumbs">Breadcrumbs</a></li>
                            <li><a href="components_media">Media objects</a></li>
                            <li><a href="components_affix">Affix and Scrollspy</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Icons</h6>
                        <ul class="list list-unstyled">
                            <li><a href="icons_glyphicons">Glyphicons</a></li>
                            <li><a href="icons_icomoon">Icomoon</a></li>
                            <li><a href="icons_fontawesome">Font awesome</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Navbars</h6>
                        <ul class="list list-unstyled">
                            <li><a href="navbar_single">Single navbar</a></li>
                            <li><a href="navbar_multiple_navbar_navbar">Multiple - Navbar + navbar</a></li>
                            <li><a href="navbar_multiple_navbar_header">Multiple - Navbar + header</a></li>
                            <li><a href="navbar_multiple_header_navbar">Multiple - Header + navbar</a></li>
                            <li><a href="navbar_multiple_top_bottom">Multiple - Top + bottom</a></li>
                            <li><a href="navbar_colors">Color options</a></li>
                            <li><a href="navbar_sizes">Sizing options</a></li>
                            <li><a href="navbar_hideable">Hide on scroll</a></li>
                            <li><a href="navbar_components">Navbar components</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>C3 library</h6>
                        <ul class="list list-unstyled">
                            <li><a href="c3_lines_areas">Lines and areas</a></li>
                            <li><a href="c3_bars_pies">Bars and pies</a></li>
                            <li><a href="c3_advanced">Advanced examples</a></li>
                            <li><a href="c3_axis">Chart axis</a></li>
                            <li><a href="c3_grid">Grid options</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>JQuery UI</h6>
                        <ul class="list list-unstyled">
                            <li><a href="jqueryui_interactions">Interactions</a></li>
                            <li><a href="jqueryui_forms">Forms</a></li>
                            <li><a href="jqueryui_components">Components</a></li>
                            <li><a href="jqueryui_sliders">Sliders</a></li>
                            <li><a href="jqueryui_navigation">Navigation</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Basic tables</h6>
                        <ul class="list list-unstyled">
                            <li><a href="table_basic">Basic examples</a></li>
                            <li><a href="table_sizing">Table sizing</a></li>
                            <li><a href="table_borders">Table borders</a></li>
                            <li><a href="table_styling">Table styling</a></li>
                            <li><a href="table_elements">Table elements</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Responsive tables</h6>
                        <ul class="list list-unstyled">
                            <li><a href="table_responsive">Responsive basic tables</a></li>
                            <li><a href="datatable_responsive">Responsive data tables</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Invoicing</h6>
                        <ul class="list list-unstyled">
                            <li><a href="invoice_template">Invoice template</a></li>
                            <li><a href="invoice_grid">Invoice grid</a></li>
                            <li><a href="invoice_archive">Invoice archive</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Task manager</h6>
                        <ul class="list list-unstyled">
                            <li><a href="task_manager_grid">Task grid</a></li>
                            <li><a href="task_manager_list">Task list</a></li>
                            <li><a href="task_manager_detailed">Task detailed</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Job search</h6>
                        <ul class="list list-unstyled">
                            <li><a href="job_list">Job list</a></li>
                            <li><a href="job_grid">Job grid</a></li>
                            <li><a href="job_detailed">Job detailed</a></li>
                            <li><a href="job_apply">Apply</a></li>
                            <li><a href="job_create">Create job</a></li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Conversation set</h6>
                        <ul class="list list-unstyled">
                            <li><a href="mail_list">Mail list</a></li>
                            <li><a href="mail_list_detached">Mail list (detached)</a></li>
                            <li><a href="mail_read">Read mail</a></li>
                            <li><a href="mail_write">Write mail</a></li>
                            <li><a href="chat_layouts">Chat layouts</a></li>
                            <li><a href="chat_options">Chat options</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /sitemap -->

</div>
<!-- /content area -->

@endsection
