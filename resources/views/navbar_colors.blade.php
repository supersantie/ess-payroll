@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Navbars @endslot
@slot('subtitle') Colors @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Light navbar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Light navbar</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Light navbar is a basic Bootstrap navbar with <strong>white</strong> background color defined in <code>$navbar-light-bg | --navbar-bg</code> variables. Light navbar is the only navbar style that has light color scheme. By default, basic Bootstrap styling has only 2 color presets: <code>light</code> and <code>dark</code>. Light is the default navbar theme and doesn't require any color classes in the base <code>.navbar</code> container.</p>

            <p class="fw-semibold">Light navbar example:</p>
            <div class="navbar navbar-expand-xl border rounded mb-3">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <a href="index" class="d-inline-flex align-items-center">
                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                            <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
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

            <p class="fw-semibold">Light navbar markup:</p>
            <pre class="language-markup" data-line="2">
								<code>
									&lt;!-- Light navbar -->
									&lt;div class="navbar navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Navbar brand -->
											&lt;div class="navbar-brand">
												...
											&lt;/div>
											&lt;!-- /navbar brand -->


											&lt;!-- Mobile toggler -->
											&lt;div class="d-lg-none">
												...
											&lt;/div>
											&lt;!-- /mobile toggler -->


											&lt;!-- Navbar content -->
											&lt;div class="collapse navbar-collapse" id="navbar-main">
												...
											&lt;/div>
											&lt;!-- /navbar content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /light navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /light navbar -->


    <!-- Dark navbar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dark navbar</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Dark navbar is one of the default Bootstrap navbar styles with <code>dark</code> blue/grey background color defined in <code>$navbar-dark-bg</code> variable. Default BS styling requires color helper class added to <code>.navbar-dark</code> container. This behaviour was improved and all <code>.bg-[color]</code> classes are now optional, but still require <code>.navbar-dark</code> class for proper content styling. Some elements require minor color adjustments (link and border colors), so use utility classes to make them pixel perfect.</p>

            <p class="fw-semibold">Dark navbar example:</p>
            <div class="navbar navbar-dark navbar-expand-xl rounded mb-3">
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

            <p class="fw-semibold">Dark navbar markup:</p>
            <pre class="language-markup" data-line="2">
								<code>
									&lt;!-- Dark navbar -->
									&lt;div class="navbar navbar-dark navbar-expand-lg">
										&lt;div class="container-fluid"> 

											&lt;!-- Navbar brand -->
											&lt;div class="navbar-brand">
												...
											&lt;/div>
											&lt;!-- /navbar brand -->


											&lt;!-- Mobile toggler -->
											&lt;div class="d-lg-none">
												...
											&lt;/div>
											&lt;!-- /mobile toggler -->


											&lt;!-- Navbar content -->
											&lt;div class="collapse navbar-collapse" id="navbar-main">
												...
											&lt;/div>
											&lt;!-- /navbar content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /dark navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /dark navbar -->


    <!-- Custom navbar color -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom navbar color</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Both light and dark navbars support custom background colors from template's <a href="colors_primary">color system</a> and default BS color options. For <strong>dark</strong> colors use <code>.bg-[color]</code> and/or <code>.bg-[color]-[tone]</code> classes, for <strong>light</strong> colors use <code>.bg-light</code> and <code>.bg-[color]-100</code> classes. All components inside navbar automatically adjust text, placeholder and background colors according to the specified color theme.</p>

            <div class="mb-4">
                <p class="fw-semibold">Custom light color example:</p>
                <div class="navbar bg-primary bg-opacity-10 navbar-expand-xl rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-body lh-1 mb-0 ms-3">Limitless</h4>
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
                                    <a href="#" class="navbar-nav-link bg-transparent rounded active">Active</a>
                                </li>
                                <li class="nav-item ms-xl-1">
                                    <a href="#" class="navbar-nav-link bg-transparent rounded">Link</a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link bg-transparent rounded dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
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
                                    <a href="#" class="navbar-nav-link bg-transparent rounded">
                                        <i class="ph-circles-three me-2"></i>
                                        Link
                                    </a>
                                </li>
                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link bg-transparent rounded dropdown-toggle" data-bs-toggle="dropdown">
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

            <div class="mb-4">
                <p class="fw-semibold">Custom dark color example:</p>
                <div class="navbar navbar-dark bg-secondary navbar-expand-xl rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo4-mobile">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-demo4-mobile">
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

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Custom light color markup:</p>
                    <pre class="language-markup mb-3" data-line="2">
										<code>
											&lt;!-- Custom light color -->
											&lt;div class="navbar bg-primary bg-opacity-10 navbar-expand-lg">
												&lt;div class="container-fluid">

													&lt;!-- Navbar brand -->
													&lt;div class="navbar-brand">
														...
													&lt;/div>
													&lt;!-- /navbar brand -->


													&lt;!-- Mobile toggler -->
													&lt;div class="d-lg-none">
														...
													&lt;/div>
													&lt;!-- /mobile toggler -->


													&lt;!-- Navbar content -->
													&lt;div class="collapse navbar-collapse" id="navbar-main">
														...
													&lt;/div>
													&lt;!-- /navbar content -->

												&lt;/div>
											&lt;/div>
											&lt;!-- /custom light color -->
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Custom dark color markup:</p>
                    <pre class="language-markup mb-3" data-line="2">
										<code>
											&lt;!-- Custom dark color -->
											&lt;div class="navbar navbar-dark bg-secondary navbar-expand-lg">
												&lt;div class="container-fluid">

													&lt;!-- Navbar brand -->
													&lt;div class="navbar-brand">
														...
													&lt;/div>
													&lt;!-- /navbar brand -->


													&lt;!-- Mobile toggler -->
													&lt;div class="d-lg-none">
														...
													&lt;/div>
													&lt;!-- /mobile toggler -->


													&lt;!-- Navbar content -->
													&lt;div class="collapse navbar-collapse" id="navbar-main">
														...
													&lt;/div>
													&lt;!-- /navbar content -->

												&lt;/div>
											&lt;/div>
											&lt;!-- /custom dark color -->
										</code>
									</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /custom navbar color -->


    <!-- Color combinations -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Color combinations</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Background colors in multiple navbars can be mixed: you can specify custom background colors for <code>main</code> and <code>secondary</code> navbars or make them look identical. All navbars have top and bottom borders, so in some color combinations you might need to use <code>border</code> utility classes to remove some borders, change border color or make them transparent (prefered for correct padding calculations in SASS). </p>

            <p class="fw-semibold">Example of mixing dark colors:</p>
            <div class="mb-3">
                <div class="navbar navbar-dark bg-teal navbar-expand-xl rounded-top">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index" class="d-inline-flex align-items-center">
                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                                <h4 class="text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-demo5-mobile">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-demo5-mobile">
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

                <div class="navbar navbar-dark navbar-expand-xl rounded-bottom">
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
                            <li class="nav-item nav-item-dropdown-sm dropdown">
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
            </div>

            <p class="fw-semibold">Multiple navbars markup:</p>
            <pre class="language-markup" data-line="3, 22">
								<code>
									&lt;!-- First navbar -->
									&lt;div class="navbar navbar-dark bg-teal navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Navbar content -->
											&lt;div class="navbar-brand">
												...
											&lt;/div>
											&lt;div class="d-lg-none">
												...
											&lt;/div>
											&lt;div class="collapse navbar-collapse" id="navbar-first">
												...
											&lt;/div>
											&lt;!-- /navbar content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /first navbar -->


									&lt;!-- Second navbar -->
									&lt;div class="navbar navbar-dark navbar-expand-lg">
										&lt;div class="container-fluid">

											&lt;!-- Navbar content -->
											&lt;div class="navbar-brand">
												...
											&lt;/div>
											&lt;div class="d-lg-none">
												...
											&lt;/div>
											&lt;div class="collapse navbar-collapse" id="navbar-second">
												...
											&lt;/div>
											&lt;!-- /navbar content -->

										&lt;/div>
									&lt;/div>
									&lt;!-- /second navbar -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /color combinations -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
