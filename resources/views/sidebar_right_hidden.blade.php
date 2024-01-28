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
                @slot('title') Sidebars @endslot
                @slot('subtitle') Right hidden @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Info alert -->
                    <div class="alert alert-success alert-dismissible">
                        <div class="alert-heading fw-semibold">Hidden right sidebar</div>
                        To make right sidebar hidden by default, simply add <code>.sidebar-collapsed</code> class to right sidebar container and keep the toggler somewhere.
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
