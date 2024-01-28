@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content Navbar @endslot
@slot('subtitle') Single @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Single navbar component -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Single navbar component</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Standard use case for navbar is main top or optional bottom navigation with various components. But in some cases, such as toolbars with form components (filters, content navigation, tabs etc), navbar as a stand alone component can be very useful. For such cases use standard navbar markup with spacing and border helper classes added to the <code>.navbar</code> container and optional <code>.rounded</code> class for rounded corners. And now you can use navbar wherever you want within <code>.page-content</code> container. Please note - nested navbars are not supported.</p>

            <!-- Dark navbar demo -->
            <div class="mb-4">
                <h6>Dark navbar component</h6>
                <p class="mb-3">Unlike Bootstrap's default navbar color option, where all navbars require background helper class, default background colors are set in SASS and defined in <code>$navbar-dark-bg</code> and <code>$navbar-light-bg</code> variables. So <strong>dark</strong> navbar component requires only default container classes along with optinal <code>.rounded</code> class to make all corners rounded. Additionally you can add <code>.bg-[color]</code> helper class to apply custom background color.</p>

                <div class="navbar navbar-dark rounded px-1">
                    <div class="container-fluid">
                        <ul class="nav align-items-center">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-git-branch"></i>
                                        <span class="d-none d-md-inline-block ms-2">Branches</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-git-merge"></i>
                                        <span class="d-none d-md-inline-block ms-2">Merges</span>
                                        <span class="badge bg-yellow text-black rounded-pill ms-1 ms-md-2">5</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-git-pull-request"></i>
                                        <span class="d-none d-md-inline-block ms-2">Pull Requests</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <div class="d-flex align-items-center w-100 w-sm-auto ms-sm-auto mt-1 mt-sm-0">
                            <div class="my-2 my-xl-0">
                                <label class="form-check form-switch ps-sm-0 mb-0" data-color-theme="dark">
                                    <input type="checkbox" class="form-check-input float-sm-end ms-sm-2" checked>
                                    <span class="form-check-label">Remember me</span>
                                </label>
                            </div>

                            <ul class="nav align-items-center ms-auto ms-sm-2">
                                <li class="nav-item nav-item-dropdown-md dropdown">
                                    <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                        <div class="status-indicator-container">
                                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded" alt="">
                                            <span class="status-indicator bg-success"></span>
                                        </div>
                                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
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
            <!-- /dark navbar demo -->


            <!-- Light navbar demo -->
            <div class="mb-4">
                <h6>Light navbar component</h6>
                <p class="mb-3">Light content navbar has dark border color with alpha transparency by default. You can also use additional <code>.bg-[color].bg-opacity-10</code> color classes along with <code>.border-[color]</code> border classes if you want to highlight the navbar with custom light color. All colors within light navbar depend on main body color, keep that in mind if you want to change main text color in SASS variables.</p>

                <div class="navbar border rounded px-1">
                    <div class="container-fluid">
                        <ul class="nav align-items-center">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-git-branch"></i>
                                        <span class="d-none d-md-inline-block ms-2">Branches</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-git-merge"></i>
                                        <span class="d-none d-md-inline-block ms-2">Merges</span>
                                        <span class="badge bg-primary rounded-pill ms-1 ms-md-2">5</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-git-pull-request"></i>
                                        <span class="d-none d-md-inline-block ms-2">Pull Requests</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <div class="d-flex align-items-center w-100 w-sm-auto ms-sm-auto mt-1 mt-sm-0">
                            <div class="my-2 my-xl-0">
                                <label class="form-check form-switch ps-sm-0 mb-0">
                                    <input type="checkbox" class="form-check-input float-sm-end ms-sm-2" checked>
                                    <span class="form-check-label">Remember me</span>
                                </label>
                            </div>

                            <ul class="nav align-items-center ms-auto ms-sm-2">
                                <li class="nav-item nav-item-dropdown-md dropdown">
                                    <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                        <div class="status-indicator-container">
                                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded" alt="">
                                            <span class="status-indicator bg-success"></span>
                                        </div>
                                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
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
            <!-- /light navbar demo -->

            <h6>Navbar component markup</h6>
            <p class="mb-3">Navbar component markup is similar to default navbar markup. But in most cases navbar component doesn't use <code>.navbar-brand</code> container that occupies left navbar side, since content navbar has slightly different purpose and doesn't need brand logo. Use border and margin helper classes to add bottom spacing and borders, and <code>.rounded</code> class to make it rounded. Navbar component supports all available navbar styling and sizing options, including all navbar components.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Light navbar markup example:</p>
                    <pre class="language-markup mb-3" data-line="2">
										<code>
											&lt;!-- Light navbar -->
											&lt;div class="navbar">
												&lt;div class="container-fluid">

													&lt;!-- Left content -->
													&lt;ul class="nav">
														&lt;li class="nav-item">
															&lt;a href="#" class="navbar-nav-link rounded">Link&lt;/a>
														&lt;/li>
														...
													&lt;/ul>
													&lt;!-- /left content -->


													&lt;!-- Right content -->
													&lt;div class="d-flex align-items-center w-100 w-sm-auto ms-xl-auto">
														...
														&lt;ul class="nav ms-auto ms-sm-2">
															&lt;li class="nav-item">
																&lt;a href="#" class="navbar-nav-link rounded">Link&lt;/a>
															&lt;/li>
															...
														&lt;/ul>
													&lt;/div>
													&lt;!-- /right content -->

												&lt;/div>
											&lt;/div>
											&lt;!-- /light navbar -->
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Dark navbar markup example:</p>
                    <pre class="language-markup mb-3" data-line="2">
										<code>
											&lt;!-- Dark navbar component -->
											&lt;div class="navbar navbar-dark">
												&lt;div class="container-fluid">

													&lt;!-- Left content -->
													&lt;ul class="nav">
														&lt;li class="nav-item">
															&lt;a href="#" class="navbar-nav-link rounded">Link&lt;/a>
														&lt;/li>
														...
													&lt;/ul>
													&lt;!-- /left content -->


													&lt;!-- Right content -->
													&lt;div class="d-flex align-items-center w-100 w-sm-auto ms-xl-auto">
														...
														&lt;ul class="nav ms-auto ms-sm-2">
															&lt;li class="nav-item">
																&lt;a href="#" class="navbar-nav-link rounded">Link&lt;/a>
															&lt;/li>
															...
														&lt;/ul>
													&lt;/div>
													&lt;!-- /right content -->

												&lt;/div>
											&lt;/div>
											&lt;!-- /dark navbar component -->
										</code>
									</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /single navbar component -->


    <!-- Navbar classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Navbar classes</h5>
        </div>

        <div class="card-body">
            Navbar is a complex, but very flexible component. It supports different types of content, responsive utilities manage content appearance and spacing on various screen sizes, supports multiple sizing and color options etc. And everything can be changed on-the-fly directly in HTML markup. If you can't find an option you need, you can always extend default SCSS code. Table below demonstrates all available classes that can be used within the navbar:
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Class</th>
                        <th style="width: 20%;">Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.navbar</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>Default navbar class, must be used with any navbar type and color. Responsible for basic navbar and navbar components styling as a parent container.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-dark</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>This class is used for <code>dark</code> background colors - default dark color is set in <code>$navbar-dark-bg</code> variable, feel free to adjust the color according to your needs.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar.bg-*</code></td>
                        <td><span class="text-muted">Optional</span></td>
                        <td>Combination of these classes allows you to set custom <strong>light</strong> color to the default <code>light</code> navbar.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-dark.bg-*</code></td>
                        <td><span class="text-muted">Optional</span></td>
                        <td>Combination of these classes allows you to set custom <strong>dark</strong> color to the <code>dark</code> navbar. Note - <code>.navbar-dark</code> is required, it's responsible for correct content styling.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-expand-[breakpoint]</code></td>
                        <td><span class="text-muted">Optional</span></td>
                        <td>For navbars that never collapse, add the <code>.navbar-expand</code> class on the navbar. For navbars that always collapse, don’t add any <code>.navbar-expand</code> class. Otherwise use this class to change when navbar content collapses behind a button.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-brand</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>Class for logo container. It can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-toggler</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>This class needs to be added to the navbar toggle button that toggles navbar content on small screens. Always used with visibility utility classes.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-collapse</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>Groups and hides navbar contents by a parent breakpoint. Requires an ID for targeting collapsible container when sidebar content is collapsed.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-nav</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>Responsive navigation container class that adds default styling for navbar navigation.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-item</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>Wrapper class for immediate parents of all navigation links. Responsible for correct styling of nav items</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-nav-link</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>Custom class for links within <code>.nav</code> list, it sets proper styling for links in light and dark navbars.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-nav-link-icon</code></td>
                        <td><span class="text-muted">Optional</span></td>
                        <td>For navigation items that contain icon only. This class adjusts left and right paddings to make sure that proportions are preserved.</td>
                    </tr>
                    <tr>
                        <td><code>.navbar-text</code></td>
                        <td><span class="text-muted">Required</span></td>
                        <td>This class adjusts vertical alignment and horizontal spacing for strings of text</td>
                    </tr>
                    <tr>
                        <td><code>.sticky-top</code></td>
                        <td><span class="text-muted">Optional</span></td>
                        <td>Adds <code>position: sticky;</code> to the navbar - it's treated as relatively positioned until its containing block crosses a specified threshold, at which point it is treated as fixed. Support is limited.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /navbar classes -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
