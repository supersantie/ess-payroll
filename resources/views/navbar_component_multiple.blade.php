@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content Navbar @endslot
@slot('subtitle') Multiple @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Multiple navbar components -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiple navbar components</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">In some cases you might need a complex component that consists of multiple rows. This is where multiple content navbars can be useful. Basically 2 or more navbars can be easily used together, if one comes after another and navbar containers have corresponding class names. Optionally you can add <code>.rounded-top</code> and <code>.rounded-bottom</code> classes to the first and last navbars accordingly. Additionally, since navbar component has bottom margin, you need to add <code>.mb-0</code> class to all navbars except the last one. Use other utility classes for additional adjustments.</p>


            <!-- Multiple dark navbars -->
            <div class="mb-4">
                <h6>Multiple dark navbars</h6>
                <p class="mb-3">You can combine default <code>dark</code> navbar color with custom colors just by adding <code>.bg-[color]</code> class to the navbar container. As always, all navbar content is adjusted accordingly. You can also use <code>border</code> utility classes to control vertical and horizontal borders stacking.</p>

                <div class="navbar navbar-dark rounded-top">
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

                        <ul class="nav align-items-center ms-auto">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-upload-simple"></i>
                                        <span class="d-none d-md-inline-block ms-2">Upload files</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item nav-item-dropdown-sm dropdown ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-share-network"></i>
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

                <div class="navbar navbar-dark border-top border-white border-opacity-10 rounded-bottom">
                    <div class="container-fluid flex-column flex-sm-row align-items-start align-items-sm-center">
                        <span class="navbar-text">
                            <i class="ph-user-circle me-1"></i>
                            Signed in as <a href="#">Victoria Baker</a>
                        </span>

                        <div class="d-flex align-items-center w-100 w-sm-auto ms-xl-auto">
                            <div class="my-2 my-xl-0">
                                <label class="form-check form-switch ps-sm-0 mb-0" data-color-theme="dark">
                                    <input type="checkbox" class="form-check-input float-sm-end ms-sm-2" checked>
                                    <span class="form-check-label">Remember me</span>
                                </label>
                            </div>

                            <ul class="nav align-items-center ms-auto ms-sm-2">
                                <li class="nav-item nav-item-dropdown-sm dropdown">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                        <span class="d-none d-md-inline-block ms-2">Settings</span>
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
            <!-- /multiple dark navbars -->


            <!-- Multiple light navbars -->
            <div class="mb-4">
                <h6>Multiple light navbars</h6>
                <p class="mb-3">Light navbar have <strong>white</strong> background color by default defined in <code>$navbar-light-bg</code> variable. You can use additional light color classes from color system: <code>.bg-light</code> for light grey color, <code>.bg-[color].bg-opacity-10</code> for other light colors. In some cases stacked light navbars require border color or width adjustments, use <code>border</code> utility classes to control border styles.</p>

                <div class="navbar border rounded-top">
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

                        <ul class="nav align-items-center ms-auto">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-upload-simple"></i>
                                        <span class="d-none d-md-inline-block ms-2">Upload files</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item nav-item-dropdown-sm dropdown ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-share-network"></i>
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

                <div class="navbar border border-top-0 rounded-bottom">
                    <div class="container-fluid flex-column flex-sm-row align-items-start align-items-sm-center">
                        <span class="navbar-text">
                            <i class="ph-user-circle me-1"></i>
                            Signed in as <a href="#">Victoria Baker</a>
                        </span>

                        <div class="d-flex align-items-center w-100 w-sm-auto ms-xl-auto">
                            <div class="my-2 my-xl-0">
                                <label class="form-check form-switch ps-sm-0 mb-0">
                                    <input type="checkbox" class="form-check-input float-sm-end ms-sm-2" checked>
                                    <span class="form-check-label">Remember me</span>
                                </label>
                            </div>

                            <ul class="nav align-items-center ms-auto ms-sm-2">
                                <li class="nav-item nav-item-dropdown-sm dropdown">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                        <span class="d-none d-md-inline-block ms-2">Settings</span>
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
            <!-- /multiple light navbars -->


            <!-- Mixing multiple navbars color -->
            <div class="mb-4">
                <h6>Mixing colors</h6>
                <p class="mb-3">Thanks to color helper classes, <code>background</code> and <code>border</code> utility classes you can easily mix background colors in multiple content navbars. The example below demonstrates <strong>dark</strong> teal and <strong>white</strong> navbars, but you can mix up colors without any limits: dark/white, white/dark, white/alphas, alphas/dark etc. Check out all available colors <a href="colors_primary">here</a>.</p>

                <div class="navbar navbar-dark bg-primary rounded-top">
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

                        <ul class="nav align-items-center ms-auto">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-upload-simple"></i>
                                        <span class="d-none d-md-inline-block ms-2">Upload files</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item nav-item-dropdown-sm dropdown ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-share-network"></i>
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

                <div class="navbar border border-top-0 rounded-bottom">
                    <div class="container-fluid flex-column flex-sm-row align-items-start align-items-sm-center">
                        <span class="navbar-text">
                            <i class="ph-user-circle me-1"></i>
                            Signed in as <a href="#">Victoria Baker</a>
                        </span>

                        <div class="d-flex align-items-center w-100 w-sm-auto ms-xl-auto">
                            <div class="my-2 my-xl-0">
                                <label class="form-check form-switch ps-sm-0 mb-0">
                                    <input type="checkbox" class="form-check-input float-sm-end ms-sm-2" checked>
                                    <span class="form-check-label">Remember me</span>
                                </label>
                            </div>

                            <ul class="nav align-items-center ms-auto ms-sm-2">
                                <li class="nav-item nav-item-dropdown-sm dropdown">
                                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                        <span class="d-none d-md-inline-block ms-2">Settings</span>
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
            <!-- /mixing multiple navbars color -->


            <h6>Navbar component markup</h6>
            <p class="mb-3">Navbar component markup is similar to default navbar markup. But in most cases navbar component doesn't use <code>.navbar-brand</code> container that occupies left navbar side, since content navbar has slightly different purpose and doesn't need brand logo. Use border and margin helper classes to add bottom spacing and borders, and <code>.rounded</code> class to make it rounded. Navbar component supports all available navbar styling and sizing options, including all navbar components.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Default colors markup:</p>
                    <pre class="language-markup mb-3" data-line="2, 23">
										<code>
											&lt;!-- First navbar component -->
											&lt;div class="navbar navbar-dark navbar-expand-lg rounded-top">

												&lt;!-- Mobile toggler -->
												&lt;div class="d-lg-none">
													...
												&lt;/div>
												&lt;!-- /mobile toggler -->


												&lt;!-- Navbar content -->
												&lt;div class="collapse navbar-collapse" id="navbar-component1">
													...
												&lt;/div>
												&lt;!-- /navbar content -->

											&lt;/div>
											&lt;!-- /first navbar component -->


											&lt;!-- Second navbar component -->
											&lt;div class="navbar navbar-expand-lg rounded-bottom">

												&lt;!-- Mobile toggler -->
												&lt;div class="d-lg-none">
													...
												&lt;/div>
												&lt;!-- /mobile toggler -->


												&lt;!-- Navbar content -->
												&lt;div class="collapse navbar-collapse" id="navbar-component2">
													...
												&lt;/div>
												&lt;!-- /navbar content -->

											&lt;/div>
											&lt;!-- /second navbar component -->
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Custom colors markup:</p>
                    <pre class="language-markup mb-3" data-line="2, 23">
										<code>
											&lt;!-- First navbar component -->
											&lt;div class="navbar navbar-dark navbar-expand-lg rounded-top">

												&lt;!-- Mobile toggler -->
												&lt;div class="d-lg-none">
													...
												&lt;/div>
												&lt;!-- /mobile toggler -->


												&lt;!-- Navbar content -->
												&lt;div class="collapse navbar-collapse" id="navbar-component1">
													...
												&lt;/div>
												&lt;!-- /navbar content -->

											&lt;/div>
											&lt;!-- /first navbar component -->


											&lt;!-- Second navbar component -->
											&lt;div class="navbar navbar-dark navbar-expand-lg rounded-bottom">

												&lt;!-- Mobile toggler -->
												&lt;div class="d-lg-none">
													...
												&lt;/div>
												&lt;!-- /mobile toggler -->


												&lt;!-- Navbar content -->
												&lt;div class="collapse navbar-collapse" id="navbar-component2">
													...
												&lt;/div>
												&lt;!-- /navbar content -->

											&lt;/div>
											&lt;!-- /second navbar component -->
										</code>
									</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /multiple navbar components -->


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
