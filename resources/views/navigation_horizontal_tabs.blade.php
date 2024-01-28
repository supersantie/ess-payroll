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
                @slot('subtitle') Tabbed @endslot
                @endcomponent

                <!-- Content area -->
                <div class="content">

                    <!-- Tabbed nav -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Tabbed nav</h5>
                        </div>

                        <div class="card-body">
                            <p class="mb-3">Sometimes the layout can be quite complex and part of your content can be hidden by default, but still be present on the same page. In such cases you can convert static navigation links to tabbed navigation that basically switches between containers without page reloading. Just add <code>.nav</code> class to <code>.navbar-nav</code> container and add <code>data-bs-toggle="tab"</code> to your <code>&lt;a></code> elements. You can also add tabbed links to your dropdown items. Since it's default <a href="components_tabs">Tabs component</a>, tabbed navbar links support all styling and config options of the component.</p>

                            <div class="mb-3">
                                <p class="fw-semibold">Light navbar tabs:</p>

                                <div class="navbar navbar-expand-xl border rounded-top">
                                    <div class="container-fluid">
                                        <div class="navbar-brand">
                                            <a href="index.html" class="d-inline-flex align-items-center">
                                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
                                            </a>
                                        </div>

                                        <div class="nav-tabs-responsive scrollbar-hidden shadow-none order-2 order-xl-1">
                                            <ul class="nav nav-tabs border-0 mt-2 mt-xl-0">
                                                <li class="nav-item dropdown">
                                                    <a href="#tab-light-1" class="navbar-nav-link rounded active" data-bs-toggle="tab">
                                                        <i class="ph-calendar me-2"></i>
                                                        Active
                                                    </a>
                                                </li>

                                                <li class="nav-item dropdown ms-1">
                                                    <a href="#tab-light-2" class="navbar-nav-link rounded" data-bs-toggle="tab">
                                                        <i class="ph-circles-four me-2"></i>
                                                        Inactive
                                                    </a>
                                                </li>

                                                <li class="nav-item dropdown ms-1">
                                                    <a href="#tab-light-3" class="navbar-nav-link rounded disabled" data-bs-toggle="tab">
                                                        <i class="ph-flower me-2"></i>
                                                        Disabled
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="navbar-nav order-1 order-xl-2 ms-xl-auto">
                                            <li class="nav-item nav-item-dropdown-xl dropdown ms-xl-2">
                                                <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                                    <div class="status-indicator-container">
                                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-1" alt="">
                                                        <span class="status-indicator bg-success"></span>
                                                    </div>
                                                    <span class="d-none d-xl-inline-block mx-xl-2">Victoria</span>
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

                                <div class="tab-content border border-top-0 rounded-bottom p-3">
                                    <div class="tab-pane fade active show" id="tab-light-1">
                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                                    </div>
                                    <div class="tab-pane fade" id="tab-light-2">
                                        DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                                    </div>
                                    <div class="tab-pane fade" id="tab-light-3">
                                        Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                                    </div>
                                </div>
                            </div>

                            <div>
                                <p class="fw-semibold">Dark navbar tabs:</p>
                                <div class="navbar navbar-expand-xl navbar-dark rounded-top">
                                    <div class="container-fluid">
                                        <div class="navbar-brand">
                                            <a href="index.html" class="d-inline-flex align-items-center">
                                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                                            </a>
                                        </div>

                                        <div class="nav-tabs-responsive scrollbar-hidden shadow-none order-2 order-xl-1">
                                            <ul class="nav nav-tabs border-0 mt-2 mt-xl-0">
                                                <li class="nav-item dropdown">
                                                    <a href="#tab-dark-1" class="navbar-nav-link rounded active" data-bs-toggle="tab">
                                                        <i class="ph-calendar me-2"></i>
                                                        Active
                                                    </a>
                                                </li>

                                                <li class="nav-item dropdown ms-1">
                                                    <a href="#tab-dark-2" class="navbar-nav-link rounded" data-bs-toggle="tab">
                                                        <i class="ph-circles-four me-2"></i>
                                                        Inactive
                                                    </a>
                                                </li>

                                                <li class="nav-item dropdown ms-1">
                                                    <a href="#tab-dark-3" class="navbar-nav-link rounded disabled" data-bs-toggle="tab">
                                                        <i class="ph-flower me-2"></i>
                                                        Disabled
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="navbar-nav order-1 order-xl-2 ms-xl-auto">
                                            <li class="nav-item nav-item-dropdown-xl dropdown ms-xl-2">
                                                <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                                    <div class="status-indicator-container">
                                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-1" alt="">
                                                        <span class="status-indicator bg-success"></span>
                                                    </div>
                                                    <span class="d-none d-xl-inline-block mx-xl-2">Victoria</span>
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

                                <div class="tab-content border border-top-0 rounded-bottom p-3">
                                    <div class="tab-pane fade active show" id="tab-dark-1">
                                        Me smallness is existence attending he enjoyment favourite affection. Feebly do engage of narrow.
                                    </div>
                                    <div class="tab-pane fade" id="tab-dark-2">
                                        Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor sunt.
                                    </div>
                                    <div class="tab-pane fade" id="tab-dark-3">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tabbed nav -->


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


                    <!-- Navigation markup -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Navigation markup</h5>
                        </div>

                        <div class="card-body">
                            <h6>Navigation alignment</h6>
                            <p class="mb-3">Navigation in the navbar can be aligned to the <strong>left</strong>, <strong>right</strong> or <strong>center</strong>. By default it's aligned to the left (right in RTL direction). Since parent container is flexible, you need to use <a href="content_helpers_flex">flex utility classes</a> to change default alignment: add <code>.justify-content-[breakpoint]-[property]</code> to <code>.navbar-collapse</code> container and/or responsive <code>spacing</code> utilities to push content to the right and horizontal spacing between navigation containers. On mobiles all navigation items within <code>.navbar-collapse</code> container are stackable by default. Make sure you use same breakpoint in all navbar elements. Examples below demonstrate <strong>left (start)</strong> (default) and <strong>right (end)</strong> nav container alignments.</p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="fw-semibold">Left navigation alignment:</p>
                                    <pre class="language-markup mb-3 mb-lg-4" data-line="5">
										<code>
											&lt;!-- Navbar collapse container -->
											&lt;div class="collapse navbar-collapse" id="navbar-mobile">

												&lt;!-- Left aligned navigation -->
												&lt;ul class="navbar-nav">
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item dropdown">
														&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
															Dropdown
														&lt;/a>

														&lt;div class="dropdown-menu">
															&lt;a href="#" class="dropdown-item">Action&lt;/a>
															&lt;a href="#" class="dropdown-item">Another action&lt;/a>
															&lt;a href="#" class="dropdown-item">One more action&lt;/a>
														&lt;/div>
													&lt;/li>
												&lt;/ul>
												&lt;!-- /left aligned navigation -->

												[...]

											&lt;/div>
											&lt;!-- /navbar collapse container -->
										</code>
									</pre>
                                </div>

                                <div class="col-lg-6">
                                    <p class="fw-semibold">Right navigation alignment:</p>
                                    <pre class="language-markup mb-3 mb-lg-4" data-line="7">
										<code>
											&lt;!-- Navbar collapse container -->
											&lt;div class="collapse navbar-collapse" id="navbar-mobile">

												[...]

												&lt;!-- Right aligned navigation -->
												&lt;ul class="navbar-nav ms-auto">
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
													&lt;li class="nav-item dropdown">
														&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
															Dropdown
														&lt;/a>

														&lt;div class="dropdown-menu">
															&lt;a href="#" class="dropdown-item">Action&lt;/a>
															&lt;a href="#" class="dropdown-item">Another action&lt;/a>
															&lt;a href="#" class="dropdown-item">One more action&lt;/a>
														&lt;/div>
													&lt;/li>
												&lt;/ul>
												&lt;!-- /right aligned navigation -->

											&lt;/div>
											&lt;!-- /navbar collapse container -->
										</code>
									</pre>
                                </div>
                            </div>


                            <h6>Navigation item states</h6>
                            <p class="mb-3">Navbar navigation items support 2 state classes: <code>active</code> and <code>disabled</code>. In <code>active</code> state nav links appear pressed, with a darker background and stronger text. Please note: <code>.active</code> class doesn't open dropdown menu, it just highlights links. If navigation link has class <code>.disabled</code>, JS blocks user interaction (basically disabled click event) and CSS mutes the link down. If this class is added to the <code>.dropdown-toggle</code> navigation element, dropdown menu won't be toggled. Examples below demonstrate active/disabled states markup.</p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="fw-semibold">Active item/dropdown state:</p>
                                    <pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11">
										<code>
											&lt;!-- Active state -->
											&lt;ul class="navbar-nav">
												&lt;li>&lt;a href="#" class="navbar-nav-link active">Active link&lt;/a>&lt;/li>
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item dropdown">
													&lt;a href="#" class="navbar-nav-link dropdown-toggle active" data-bs-toggle="dropdown">
														Active dropdown
													&lt;/a>

													&lt;div class="dropdown-menu">
														&lt;a href="#" class="dropdown-item active">Active action&lt;/a>
														&lt;a href="#" class="dropdown-item">Another action&lt;/a>
														&lt;div class="dropdown-divider">&lt;/div>
														&lt;a href="#" class="dropdown-item">One more action&lt;/a>
													&lt;/div>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /active state -->
										</code>
									</pre>
                                </div>

                                <div class="col-lg-6">
                                    <p class="fw-semibold">Disabled item/dropdown state:</p>
                                    <pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11">
										<code>
											&lt;!-- Disabled state -->
											&lt;ul class="navbar-nav">
												&lt;li>&lt;a href="#" class="navbar-nav-link disabled">Disabled link&lt;/a>&lt;/li>
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item dropdown">
													&lt;a href="#" class="navbar-nav-link dropdown-toggle disabled" data-bs-toggle="dropdown">
														Disabled dropdown
													&lt;/a>

													&lt;div class="dropdown-menu">
														&lt;a href="#" class="dropdown-item disabled">Disabled action&lt;/a>
														&lt;a href="#" class="dropdown-item">Another action&lt;/a>
														&lt;div class="dropdown-divider">&lt;/div>
														&lt;a href="#" class="dropdown-item">One more action&lt;/a>
													&lt;/div>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /disabled state -->
										</code>
									</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /navigation markup -->

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
