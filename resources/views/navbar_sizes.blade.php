@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Navbars @endslot
@slot('subtitle') Sizes @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Large navbar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Large navbar</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Increase size of the navbar navigation by adding <code>.navbar-lg</code> class to the main <code>.navbar</code> container. Large navbar height is ~66px, almost all navbar components are adjusted to the large navbar height automatically, some use cases may require minor adjustments. You can also use padding utility classes to change inner spacing.</p>

            <div class="mb-4">
                <p class="fw-semibold">Large navbar example:</p>
                <div class="navbar navbar-dark navbar-lg navbar-expand-xl rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo1-mobile">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-demo1-mobile">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded active">Active</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-circles-three me-2"></i>
                                        Link
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        Menu
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

            <p class="fw-semibold">Large navbar markup:</p>
            <pre class="language-markup mb-3" data-line="2">
								<code>
									&lt;!-- Main navbar -->
									&lt;div class="navbar navbar-lg navbar-dark navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Mobile togglers -->
											&lt;div class="d-flex d-lg-none me-2">
												...
											&lt;/div>
											&lt;!-- /mobile togglers -->


											&lt;!-- Navbar brand -->
											&lt;div class="d-inline-flex flex-1 flex-lg-0">
												&lt;a href="index.html" class="navbar-brand d-inline-flex align-items-center">
													...
												&lt;/a>
											&lt;/div>
											&lt;!-- /navbar brand -->


											&lt;!-- Left content -->
											&lt;div class="flex-row">
												...
											&lt;/div>
											&lt;!-- /left content -->


											&lt;!-- Collapsible navbar content (center) -->
											&lt;div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar-mobile">
												...
											&lt;/div>
											&lt;!-- /collapsible navbar content (center) -->


											&lt;!-- Right content -->
											&lt;div class="flex-row justify-content-end order-1 order-lg-2">
												...
											&lt;/div>
											&lt;!-- /right content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /main navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /large navbar -->


    <!-- Default navbar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default navbar</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Default navbar height is ~62px. Navbar container doesn't have any <code>height</code> properties in CSS, so if you change vertical padding of navbar navigation items or brand height, computed navbar height will be adjusted automatically thanks to the power of SASS. All sizes can be also changed in CSS variables without build process, primary containers that control navbar height are <code>.navbar</code> and <code>.nav</code></p>

            <div class="mb-4">
                <p class="fw-semibold">Default navbar example:</p>
                <div class="navbar navbar-dark navbar-expand-xl rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo2-mobile">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-demo2-mobile">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded active">Active</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-circles-three me-2"></i>
                                        Link
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        Menu
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

            <p class="fw-semibold">Default navbar markup:</p>
            <pre class="language-markup mb-3" data-line="2">
								<code>
									&lt;!-- Main navbar -->
									&lt;div class="navbar navbar-dark navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Mobile togglers -->
											&lt;div class="d-flex d-lg-none me-2">
												...
											&lt;/div>
											&lt;!-- /mobile togglers -->


											&lt;!-- Navbar brand -->
											&lt;div class="d-inline-flex flex-1 flex-lg-0">
												&lt;a href="index.html" class="navbar-brand d-inline-flex align-items-center">
													...
												&lt;/a>
											&lt;/div>
											&lt;!-- /navbar brand -->


											&lt;!-- Left content -->
											&lt;div class="flex-row">
												...
											&lt;/div>
											&lt;!-- /left content -->


											&lt;!-- Collapsible navbar content (center) -->
											&lt;div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar-mobile">
												...
											&lt;/div>
											&lt;!-- /collapsible navbar content (center) -->


											&lt;!-- Right content -->
											&lt;div class="flex-row justify-content-end order-1 order-lg-2">
												...
											&lt;/div>
											&lt;!-- /right content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /main navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /default navbar -->


    <!-- Small navbar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Small navbar</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Decrease size of the navbar navigation by adding <code>.navbar-sm</code> class to the main <code>.navbar</code> container. Small navbar height is ~58px, almost all navbar components are adjusted to the small navbar height automatically, some use cases may require minor adjustments. You can also use padding utility classes to change inner spacing.</p>

            <div class="mb-4">
                <p class="fw-semibold">Small navbar example:</p>
                <div class="navbar navbar-dark navbar-sm navbar-expand-xl rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo3-mobile">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-demo3-mobile">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded active">Active</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-circles-three me-2"></i>
                                        Link
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        Menu
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

            <p class="fw-semibold">Small navbar markup:</p>
            <pre class="language-markup mb-3" data-line="2">
								<code>
									&lt;!-- Main navbar -->
									&lt;div class="navbar navbar-sm navbar-dark navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Mobile togglers -->
											&lt;div class="d-flex d-lg-none me-2">
												...
											&lt;/div>
											&lt;!-- /mobile togglers -->


											&lt;!-- Navbar brand -->
											&lt;div class="d-inline-flex flex-1 flex-lg-0">
												&lt;a href="index.html" class="navbar-brand d-inline-flex align-items-center">
													...
												&lt;/a>
											&lt;/div>
											&lt;!-- /navbar brand -->


											&lt;!-- Left content -->
											&lt;div class="flex-row">
												...
											&lt;/div>
											&lt;!-- /left content -->


											&lt;!-- Collapsible navbar content (center) -->
											&lt;div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar-mobile">
												...
											&lt;/div>
											&lt;!-- /collapsible navbar content (center) -->


											&lt;!-- Right content -->
											&lt;div class="flex-row justify-content-end order-1 order-lg-2">
												...
											&lt;/div>
											&lt;!-- /right content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /main navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /small navbar -->


    <!-- Size combinations -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Size combinations</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Multiple navbars support different heights as well, just add optional height classes to both navbars. It doesn't matter if navbars are sticky, fixed or static - no additional classes or CSS required, everything works out of the box.</p>

            <div class="mb-4">
                <p class="fw-semibold">Sizes of static multiple navbars:</p>
                <div class="navbar navbar-dark navbar-expand-xl rounded-top">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo2-mobile">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-demo2-mobile">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded active">Active</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a href="#" class="dropdown-item">One more line</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ms-xl-auto">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded">
                                        <i class="ph-circles-three me-2"></i>
                                        Link
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        Menu
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

                <div class="navbar navbar-sm border border-top-0 rounded-bottom">
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
                        </ul>
                    </div>
                </div>
            </div>

            <p class="fw-semibold">Markup of multiple navbars:</p>
            <pre class="language-markup mb-3" data-line="2, 47">
								<code>
									&lt;!-- Main navbar -->
									&lt;div class="navbar navbar-dark navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Mobile togglers -->
											&lt;div class="d-flex d-lg-none me-2">
												...
											&lt;/div>
											&lt;!-- /mobile togglers -->


											&lt;!-- Navbar brand -->
											&lt;div class="d-inline-flex flex-1 flex-lg-0">
												&lt;a href="index.html" class="navbar-brand d-inline-flex align-items-center">
													...
												&lt;/a>
											&lt;/div>
											&lt;!-- /navbar brand -->


											&lt;!-- Left content -->
											&lt;div class="flex-row">
												...
											&lt;/div>
											&lt;!-- /left content -->


											&lt;!-- Collapsible navbar content (center) -->
											&lt;div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar-mobile">
												...
											&lt;/div>
											&lt;!-- /collapsible navbar content (center) -->


											&lt;!-- Right content -->
											&lt;div class="flex-row justify-content-end order-1 order-lg-2">
												...
											&lt;/div>
											&lt;!-- /right content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /main navbar -->


									&lt;!-- Second navbar -->
									&lt;div class="navbar navbar-sm navbar-expand-lg">

										&lt;!-- Navbar content -->
										&lt;div class="collapse navbar-collapse" id="navbar-second">
											...
										&lt;/div>
										&lt;!-- /navbar content -->

									&lt;/div>
									&lt;!-- /second navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /size combinations -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
