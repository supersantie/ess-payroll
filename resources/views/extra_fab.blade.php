@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') FAB Menu @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Floating action button overview -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Floating action button</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Floating action button (FAB) menu - very useful component to display a single floating button with or without nested menu. Supports plenty of different styling, interaction and direction options and can be added nearly to any container within page layout or to page itself. By default, it supports top and bottom menu direction, but can be easily extended to left and right directions with simple CSS additions. Inner elements can be either buttons with single icon or image thumbnails.</p>
            <p class="fw-semibold">Default FAB menu markup:</p>
            <pre class="language-markup mb-3">
								<code>
									&lt;!-- Clickable menu -->
									&lt;div class="fab-menu" data-fab-toggle="click">
										&lt;a class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
											&lt;div class="m-1">
												&lt;i class="fab-icon-open ph-plus">&lt;/i>
												&lt;i class="fab-icon-close ph-x">&lt;/i>
											&lt;/div>
										&lt;/a>

										&lt;ul class="fab-menu-inner">
											&lt;li>
												&lt;div data-fab-label="Compose email">
													&lt;a href="#" class="btn btn-light btn-icon rounded-pill">
														&lt;i class="ph-pencil m-1">&lt;/i>
													&lt;/a>
												&lt;/div>
											&lt;/li>
											&lt;li>
												&lt;div data-fab-label="Conversations">
													&lt;a href="#" class="btn btn-light btn-icon rounded-pill">
														&lt;i class="ph-chats m-1">&lt;/i>
													&lt;/a>
													&lt;span class="badge bg-success position-absolute start-100 top-0 translate-middle rounded-pill">5&lt;/span>
												&lt;/div>
											&lt;/li>
										&lt;/ul>
									&lt;/div>
									&lt;!-- /clickable menu -->
								</code>
							</pre>
        </div>
    </div>
    <!-- /floating action button overview -->


    <!-- Basic examples -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Basic examples
        </h6>
        <span class="text-muted d-block">Demo of buttons and button lists</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Single floating button</h6>
                <p class="mb-3">Floating button uses our regular button markup with <code>.fab-menu-btn</code> class wrapped in <code>.fab-menu</code> container</p>

                <div>
                    <div class="fab-menu">
                        <a href="#" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Open menu on hover</h6>
                <p class="mb-3">Sub menu can be opened on hover. To show menu on hover, add <code>data-fat-boggle="hover"</code> in <code>.fab-menu</code> container</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="hover">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div>
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-pencil m-1"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-chats m-1"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Open menu on click</h6>
                <p class="mb-3">Most common use case is to show menu on click. Use <code>data-fat-boggle="click"</code> in <code>.fab-menu</code> container</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary rounded-pill btn-icon">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light rounded-pill btn-icon">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light rounded-pill btn-icon">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic examples -->


    <!-- Menu elements -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            FAB menu elements
        </h6>
        <span class="text-muted d-block">Buttons, dropdown menus and images</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Simple buttons</h6>
                <p class="mb-3">Sub menu usually contains regular rounded buttons with single icon. You can use any button style in the list</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Button with dropdowns</h6>
                <p class="mb-3">Buttons also support left and right dropdowns. Use <code>dropstart/dropend</code> classes for correct placement</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div class="dropstart">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-arrow-left m-1"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-shield-warning me-2"></i>
                                            Account security
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Analytics
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Privacy
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            All settings
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropend">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-arrow-right m-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-shield-warning me-2"></i>
                                            Account security
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Analytics
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Privacy
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            All settings
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Button with images</h6>
                <p class="mb-3">You can also use images instead of icons inside buttons. Some adjustments may be required for better look</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill p-0 border-0">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-48px h-48px rounded-pill" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill p-0 border-0">
                                    <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-48px h-48px rounded-pill" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /menu elements -->


    <!-- Inner button elements -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Inner button elements
        </h6>
        <span class="text-muted d-block">Badges, labels, color marks and status indicators</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Badges with number</h6>
                <p class="mb-3">Buttons can container labels and badges in any style. Use a set of utility classes to position them properly</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div class="position-relative">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-pencil m-1"></i>
                                    </a>
                                    <span class="badge bg-pink position-absolute start-100 top-0 translate-middle">5</span>
                                </div>
                            </li>
                            <li>
                                <div class="position-relative">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-chats m-1"></i>
                                    </a>
                                    <span class="badge bg-success position-absolute start-100 top-0 translate-middle rounded-pill">8</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Badge mark</h6>
                <p class="mb-3">If you prefer to show a simple colored indicator, usage of utility classes is exactly the same as with badges</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div class="position-relative">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-pencil m-1"></i>
                                    </a>
                                    <span class="bg-pink position-absolute start-0 top-0 rounded-pill p-1"></span>
                                </div>
                            </li>
                            <li>
                                <div class="position-relative">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-chats m-1"></i>
                                    </a>
                                    <span class="bg-success position-absolute end-0 top-0 rounded-pill p-1"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Status indicators</h6>
                <p class="mb-3">Our simple status indicator component is also supported, when buttons contain images instead of icons</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill p-0 border-0">
                                    <div class="status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-48px h-48px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill p-0 border-0">
                                    <div class="status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-48px h-48px rounded-pill" alt="">
                                        <span class="status-indicator bg-warning"></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /inner button elements -->


    <!-- Inner button labels -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Inner button labels
        </h6>
        <span class="text-muted d-block">Display tooltips on left/right sides in 2 colors</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Visible labels</h6>
                <p class="mb-3">Use <code>.fab-label-visible</code> class in parent container to make tooltips always visible when the list is expanded</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div class="fab-label-end fab-label-visible" data-fab-label="Compose email">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-pencil m-1"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="fab-label-end fab-label-visible fab-label-light" data-fab-label="Conversations">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-chats m-1"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Light labels</h6>
                <p class="mb-3">All button types support light and dark tooltips displayed on hover. In dark theme all colors are inverted</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div class="fab-label-end fab-label-light" data-fab-label="Compose email">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-pencil m-1"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="fab-label-end fab-label-light" data-fab-label="Conversations">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-chats m-1"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Label positions</h6>
                <p class="mb-3">Button tooltips also support left or right placement. Left is default, use <code>.fab-label-end</code> to display it on the right</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <div data-fab-label="Compose email">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-pencil m-1"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="fab-label-end" data-fab-label="Conversations">
                                    <a href="#" class="btn btn-light btn-icon rounded-pill">
                                        <i class="ph-chats m-1"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /inner button labels -->


    <!-- Default button colors -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Default button colors
        </h6>
        <span class="text-muted d-block">Examples of pre-defined contextual colors</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Default button color</h6>
                <p class="mb-3">We are using <code>light</code> as our default button style. Make sure <code>.fab-menu-btn</code> class is always included as well</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click" style="z-index: 1002;">
                        <button type="button" class="fab-menu-btn btn btn-light btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <h6>Success button color</h6>
                <p class="mb-3">Success contextual color alternative using <code>.btn-success</code> class. Outline and flat styles are also supported</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-success btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Primary button color</h6>
                <p class="mb-3">Primary contextual color alternative using <code>.btn-primary</code> class. Outline and flat styles are also supported</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click" style="z-index: 1002;">
                        <button type="button" class="fab-menu-btn btn btn-primary btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <h6>Warning button color</h6>
                <p class="mb-3">Warning contextual color alternative using <code>.btn-warning</code> class. Outline and flat styles are also supported</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-warning btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Danger button color</h6>
                <p class="mb-3">Danger contextual color alternative using <code>.btn-danger</code> class. Outline and flat styles are also supported</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click" style="z-index: 1002;">
                        <button type="button" class="fab-menu-btn btn btn-danger btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <h6>Info button color</h6>
                <p class="mb-3">Info contextual color alternative using <code>.btn-info</code> class. Outline and flat styles are also supported</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-info btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /default button colors -->


    <!-- Custom color options -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Custom color options
        </h6>
        <span class="text-muted d-block">Use custom color in main and inner buttons</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom main button color</h6>
                <p class="mb-3">Use optional button color classes to apply secondary colors to the main button. All styles are supported</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-teal btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-light btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom inner button color</h6>
                <p class="mb-3">You can also use any button color classes in the button list inside <code>.fab-menu-inner</code> submenu container</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-light btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-indigo btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-indigo btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Mixing button colors</h6>
                <p class="mb-3">Feel free to also mix button colors and styles, submenu supports unlimited number of buttons in the list</p>

                <div>
                    <div class="fab-menu fab-menu-top" data-fab-toggle="click">
                        <button type="button" class="fab-menu-btn btn btn-indigo btn-icon rounded-pill">
                            <div class="m-1">
                                <i class="fab-icon-open ph-plus"></i>
                                <i class="fab-icon-close ph-x"></i>
                            </div>
                        </button>

                        <ul class="fab-menu-inner">
                            <li>
                                <a href="#" class="btn btn-teal btn-icon rounded-pill">
                                    <i class="ph-pencil m-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-warning btn-icon rounded-pill">
                                    <i class="ph-chats m-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /custom color options -->


    <!-- FAB menu classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">FAB menu classes</h5>
        </div>

        <div class="card-body">
            FAB menu styling is fully controlled by CSS. you can apply different color and button styling options directly in markup. Direction and display options are also can be changed on the fly just by replacing data attributes or class names in main container. Table below demonstrates all available classes that can be used with the FAB menu:
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 20%;">Class</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th colspan="2">Basic classes</th>
                    </tr>
                    <tr>
                        <td><code>.fab-menu</code></td>
                        <td>Default menu class name, added to <code>&lt;ul></code> element</td>
                    </tr>
                    <tr>
                        <td><code>.fab-menu-inner</code></td>
                        <td>Container class for inner menu list, added to inner <code>&lt;ul></code> element</td>
                    </tr>
                    <tr>
                        <td><code>.fab-icon-open</code></td>
                        <td>Icon visible by default, hidden when menu opened</td>
                    </tr>
                    <tr>
                        <td><code>.fab-icon-close</code></td>
                        <td>Icon that appears when menu is opened, hidden when menu closed</td>
                    </tr>

                    <tr class="table-border-double table-active">
                        <th colspan="2">Positions and directions</th>
                    </tr>
                    <tr>
                        <td><code>.fab-menu-top</code></td>
                        <td>Static button, menu opens <strong>below</strong> the button</td>
                    </tr>
                    <tr>
                        <td><code>.fab-menu-bottom</code></td>
                        <td>Static button, menu opens <strong>above</strong> the button</td>
                    </tr>

                    <tr class="table-border-double table-active">
                        <th colspan="2">Menu positioning</th>
                    </tr>
                    <tr>
                        <td><code>.fab-menu-absolute</code></td>
                        <td>Absolute positioning. Can be used in any container</td>
                    </tr>
                    <tr>
                        <td><code>.fab-menu-fixed</code></td>
                        <td>Fixed positioning. Can be used in main container only, relative to page layout</td>
                    </tr>

                    <tr class="table-border-double table-active">
                        <th colspan="2">Menu visibility</th>
                    </tr>
                    <tr>
                        <td><code>data-fab-toggle="click"</code></td>
                        <td>Open menu on <strong>click</strong>. Applies to main menu container that has <code>.fab-menu</code> class</td>
                    </tr>
                    <tr>
                        <td><code>data-fab-toggle="hover"</code></td>
                        <td>Open menu on <strong>hover</strong>. Applies to main menu container that has <code>.fab-menu</code> class</td>
                    </tr>
                    <tr>
                        <td><code>data-fab-state="opened"</code></td>
                        <td>Display menu on page load. Works only with <code>data-fab-toggle="click"</code> option</td>
                    </tr>

                    <tr class="table-border-double table-active">
                        <th colspan="2">Inner button labels</th>
                    </tr>
                    <tr>
                        <td><code>data-fab-label="..."</code></td>
                        <td>Text label to display on inner button hover. Must be added to <code>&lt;div></code> element inside inner menu item</td>
                    </tr>
                    <tr>
                        <td><code>.fab-label-end</code></td>
                        <td>Display labels on the right side. Default position is left. Must be added to <code>&lt;div></code> element inside inner menu item</td>
                    </tr>
                    <tr>
                        <td><code>.fab-label-light</code></td>
                        <td>Use this class if you want to display light labels instead of default dark. Must be added to <code>&lt;div></code> element inside inner menu item</td>
                    </tr>
                    <tr>
                        <td><code>.fab-label-visible</code></td>
                        <td>By default, all labels appear on hover. To make them always visible, add this class to <code>&lt;div></code> element inside inner menu item</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /FAB menu classes -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/fab.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_fab.js')}}"></script>
@endsection
