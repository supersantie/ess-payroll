@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Dashboard @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Solid buttons title -->
    <div class="mb-3">
        <h6 class="mb-0">
            Solid buttons
        </h6>
        <span class="text-muted d-block">Buttons with solid background color</span>
    </div>
    <!-- /solid buttons title -->


    <!-- Light button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Light button</h6>
                <p class="mb-3">Light button is considered default in the UI. Use <code>.btn.btn-light</code> classes in anchor, button or input element</p>

                <div>
                    <button type="button" class="btn btn-light">Default button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Light with icon</h6>
                <p class="mb-3">Light button can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <button type="button" class="btn btn-light">
                        <i class="ph-check-circle me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Light with menu</h6>
                <p class="mb-3">Light button also supports dropdown menus in various directions. Use <code>.dropdown-toggle</code> to display directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /light button -->


    <!-- Solid button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid button</h6>
                <p class="mb-3">Solid button supports 14 predefined colors. Use <code>.btn.btn-[color]</code> classes in anchor, button or input element</p>

                <div>
                    <button type="button" class="btn btn-primary">Default button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid with icon</h6>
                <p class="mb-3">Solid button can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <button type="button" class="btn btn-primary">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid with menu</h6>
                <p class="mb-3">Solid button also supports dropdown menus in various directions. Use <code>.dropdown-toggle</code> to display directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /solid button -->


    <!-- Rounded button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded button</h6>
                <p class="mb-3">Use a combination of <code>.btn</code> and <code>.rounded-pill</code> classes in button, anchor or input element to make any button fully rounded</p>

                <div>
                    <button type="button" class="btn btn-primary rounded-pill">Rounded button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded with icon</h6>
                <p class="mb-3">Rounded button can be also used with text label, icons and/or combination of both. No extra adjustments are required</p>

                <div>
                    <button type="button" class="btn btn-primary rounded-pill">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded with menu</h6>
                <p class="mb-3">Rounded button with dropdown menu. In certain cases horizontal padding can be extended with utility classes</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /rounded button -->


    <!-- Labeled button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled button</h6>
                <p class="mb-3">In labeled button icons are separated from text label with slightly darker background color. This color can be adjusted via utility classes</p>

                <div>
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Labeled
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded with label</h6>
                <p class="mb-3">Rounded labeled button requires <code>.rounded-pill</code> class to be added to both button and icon elements</p>

                <div>
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start rounded-pill">
                        <span class="btn-labeled-icon bg-black bg-opacity-20 rounded-pill">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Rounded
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled with menu</h6>
                <p class="mb-3">Labeled button with dropdown menu. Supports left and right alignment. All other options also work in this button type</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-labeled btn-labeled-start dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-check-square-offset"></i>
                            </span>
                            Dropdown
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /labeled button -->


    <!-- Icon button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon button</h6>
                <p class="mb-3">Button can be used with icon only. For better sizing (width = height), use optional <code>.btn-icon</code> class in button element</p>

                <div>
                    <button type="button" class="btn btn-primary btn-icon">
                        <i class="ph-link"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded with icon</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> to <code>.btn-icon</code> to show perfectly rounded button in 38x38 size. Works with all button styles and sizes</p>

                <div>
                    <button type="button" class="btn btn-primary btn-icon rounded-pill">
                        <i class="ph-link"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon button with menu</h6>
                <p class="mb-3">Icon button has variable width and is controlled by padding. Add <code>.dropdown-toggle</code> to <code>.btn-icon</code> to show directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-link"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /icon button -->


    <!-- Floating button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Floating button</h6>
                <p class="mb-3">Button in slightly bigger size to stand out and attract more attention to specific actions. Supports all button colors and options</p>

                <div>
                    <button type="button" class="btn btn-success p-1">
                        <i class="ph-magnifying-glass m-1"></i>
                    </button>
                    <button type="button" class="btn btn-danger p-2 mx-2">
                        <i class="ph-download-simple ph-2x m-1"></i>
                    </button>
                    <button type="button" class="btn btn-indigo p-2">
                        <i class="ph-spinner spinner m-1"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Floating with text</h6>
                <p class="mb-3">In floating buttons text label is displayed on the second line. Adjust text alignment or spacing with our utility classes</p>

                <div>
                    <button type="button" class="btn btn-success flex-column">
                        <i class="ph-magnifying-glass my-1"></i>
                        Search
                    </button>

                    <button type="button" class="btn btn-danger flex-column py-2 mx-2">
                        <i class="ph-download-simple ph-2x mb-1"></i>
                        Download
                    </button>

                    <button type="button" class="btn btn-indigo flex-column">
                        <i class="ph-spinner spinner my-1"></i>
                        Update
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded floating buttons</h6>
                <p class="mb-3">Floating buttons without text label can be displayed in fully rounded style. Just add <code>.rounded-pill</code> to the button element</p>

                <div>
                    <button type="button" class="btn btn-success rounded-pill p-2">
                        <i class="ph-magnifying-glass m-1"></i>
                    </button>
                    <button type="button" class="btn btn-danger rounded-pill p-2 mx-2">
                        <i class="ph-download-simple ph-2x m-1"></i>
                    </button>
                    <button type="button" class="btn btn-indigo rounded-pill p-2">
                        <i class="ph-spinner spinner m-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /floating button -->




    <!-- Outline buttons title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Outline buttons
        </h6>
        <span class="text-muted d-block">Buttons in outline styles with transparent background in default state</span>
    </div>
    <!-- /outline buttons title title -->


    <!-- Outline buttons -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline button</h6>
                <p class="mb-3">Use <code>.btn.btn-outline-[color]</code> classes on button element to remove background color in default state</p>

                <div>
                    <button type="button" class="btn btn-outline-primary">Default button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline with icon</h6>
                <p class="mb-3">Outline button can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <button type="button" class="btn btn-outline-primary">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline with menu</h6>
                <p class="mb-3">Outline button also supports dropdown menus in various directions. Use <code>.dropdown-toggle</code> to display directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /outline buttons -->


    <!-- Outline static -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Static outline button</h6>
                <p class="mb-3">Static outline button has no background color in all states. Use <code>.link-[color]</code> and <code>.border-[color]</code> classes on <code>.btn</code> element</p>

                <div>
                    <button type="button" class="btn link-primary border-primary">Default button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid with icon</h6>
                <p class="mb-3">Static outline button can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <button type="button" class="btn link-primary border-primary">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid with menu</h6>
                <p class="mb-3">Static outline button also supports dropdown menus in various directions. Use <code>.dropdown-toggle</code> to display directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn link-primary border-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /static outline -->


    <!-- Rounded outline -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded outline button</h6>
                <p class="mb-3">Use a combination of <code>.btn-outline-[color]</code> and <code>.rounded-pill</code> classes to make any button fully rounded</p>

                <div>
                    <button type="button" class="btn btn-outline-primary rounded-pill">Default button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded outline with icon</h6>
                <p class="mb-3">Rounded button can be also used with text label, icons and/or combination of both. No extra adjustments are required</p>

                <div>
                    <button type="button" class="btn btn-outline-primary rounded-pill">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline with menu</h6>
                <p class="mb-3">Rounded button with dropdown menu. In certain cases horizontal padding can be extended with utility classes</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /rounded outline -->


    <!-- Labeled outline -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled outline button</h6>
                <p class="mb-3">In labeled outline button icons are separated from text label with slightly darker background color. This color can be adjusted via utility classes</p>

                <div>
                    <button type="button" class="btn btn-outline-primary btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-primary text-white">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Default button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline rounded with label</h6>
                <p class="mb-3">Rounded labeled outline button requires <code>.rounded-pill</code> class to be added to both button and icon elements</p>

                <div>
                    <button type="button" class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
                        <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Default button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled outline with menu</h6>
                <p class="mb-3">Labeled outline button with dropdown menu. Supports left and right alignment. All other options also work in this button type</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-labeled btn-labeled-start dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-primary text-white">
                                <i class="ph-check-square-offset"></i>
                            </span>
                            Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /labeled outline -->


    <!-- Icon button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon outline button</h6>
                <p class="mb-3">Outline button can be used with icon only. For better sizing (width = height), use optional <code>.btn-icon</code> class in button element</p>

                <div>
                    <button type="button" class="btn btn-outline-primary btn-icon">
                        <i class="ph-link"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded outline with icon</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> to <code>.btn-icon</code> to show perfectly rounded button in 38x38 size. Works with all button styles and sizes</p>

                <div>
                    <button type="button" class="btn btn-outline-primary btn-icon rounded-pill">
                        <i class="ph-link"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline icon button with menu</h6>
                <p class="mb-3">Icon button has variable width and is controlled by padding. Add <code>.dropdown-toggle</code> to .btn-icon to show directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-link"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /icon button -->


    <!-- Floating button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Floating outline button</h6>
                <p class="mb-3">Button in slightly bigger size to stand out and attract more attention to specific actions. Supports all button colors and options</p>

                <div>
                    <button type="button" class="btn btn-outline-success p-1">
                        <i class="ph-magnifying-glass m-1"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger p-2 mx-2">
                        <i class="ph-download-simple ph-2x m-1"></i>
                    </button>
                    <button type="button" class="btn btn-outline-indigo p-2">
                        <i class="ph-spinner spinner m-1"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Floating outline with text</h6>
                <p class="mb-3">In floating buttons text label is displayed on the second line. Adjust text alignment or spacing with our utility classes</p>

                <div>
                    <button type="button" class="btn btn-outline-success flex-column">
                        <i class="ph-magnifying-glass my-1"></i>
                        Search
                    </button>

                    <button type="button" class="btn btn-outline-danger flex-column py-2 mx-2">
                        <i class="ph-download-simple ph-2x mb-1"></i>
                        Download
                    </button>

                    <button type="button" class="btn btn-outline-indigo flex-column">
                        <i class="ph-spinner spinner my-1"></i>
                        Update
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded floating outline buttons</h6>
                <p class="mb-3">Floating buttons without text label can be displayed in fully rounded style. Just add <code>.rounded-pill</code> to the button element</p>

                <div>
                    <button type="button" class="btn btn-outline-success rounded-pill p-2">
                        <i class="ph-magnifying-glass m-1"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger rounded-pill p-2 mx-2">
                        <i class="ph-download-simple ph-2x m-1"></i>
                    </button>
                    <button type="button" class="btn btn-outline-indigo rounded-pill p-2">
                        <i class="ph-spinner spinner m-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /floating button -->


    <!-- Border options -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Transparent border</h6>
                <p class="mb-3">Use <code>.border-transparent</code> class in addition to <code>.btn-outline-[color]</code> to make border transparent in all button states
                </p>

                <div>
                    <button type="button" class="btn btn-outline-primary border-transparent">Transparent border</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Default border</h6>
                <p class="mb-3">All outline buttons have <code>1px</code> border width by default and don't require any additional border utility classes</p>

                <div>
                    <button type="button" class="btn btn-outline-primary">Default border</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Thick border</h6>
                <p class="mb-3">You can control border width in outline buttons with our <code>.border-width-[size]</code> utility classes. Here border width is 2px</p>

                <div>
                    <button type="button" class="btn btn-outline-primary border-width-2">Thick border</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /border options -->





    <!-- Flat buttons title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Flat buttons
        </h6>
        <span class="text-muted d-block">Buttons with light backgrounds in various types</span>
    </div>
    <!-- /flat button title -->


    <!-- Flat button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat button</h6>
                <p class="mb-3">Use <code>.btn.btn-flat-[color]</code> classes on button element to show semi transparent background color</p>

                <div>
                    <button type="button" class="btn btn-flat-primary">Flat button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat with icon</h6>
                <p class="mb-3">Flat button can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <button type="button" class="btn btn-flat-primary">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat with menu</h6>
                <p class="mb-3">Flat button also supports dropdown menus in various directions. Use <code>.dropdown-toggle</code> to display directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-flat-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /flat button -->


    <!-- Rounded flat button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded flat button</h6>
                <p class="mb-3">Use a combination of <code>.btn-flat-[color]</code> and <code>.rounded-pill</code> classes to make any button fully rounded</p>

                <div>
                    <button type="button" class="btn btn-flat-primary rounded-pill">Rounded button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded flat with icon</h6>
                <p class="mb-3">Rounded button can be also used with text label, icons and/or combination of both. No extra adjustments are required</p>

                <div>
                    <button type="button" class="btn btn-flat-primary rounded-pill">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded flat with menu</h6>
                <p class="mb-3">Rounded button with dropdown menu. In certain cases horizontal padding can be extended with utility classes</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-flat-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /rounded flat button -->


    <!-- Labeled flat button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled flat button</h6>
                <p class="mb-3">In labeled flat button icons are separated from text label with slightly darker background color. This color can be adjusted via utility classes</p>

                <div>
                    <button type="button" class="btn btn-flat-primary btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-primary text-white">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Labeled
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded flat with label</h6>
                <p class="mb-3">Rounded labeled flat button requires <code>.rounded-pill</code> class to be added to both button and icon elements</p>

                <div>
                    <button type="button" class="btn btn-flat-primary btn-labeled btn-labeled-start rounded-pill">
                        <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Rounded
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled flat with menu</h6>
                <p class="mb-3">Labeled flat button with dropdown menu. Supports left and right alignment. All other options also work in this button type</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-flat-primary btn-labeled btn-labeled-start dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-primary text-white">
                                <i class="ph-check-square-offset"></i>
                            </span>
                            Dropdown
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /labeled flat button -->


    <!-- Icon flat button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon flat button</h6>
                <p class="mb-3">Flat button can be used with icon only. For better sizing (width = height), use optional <code>.btn-icon</code> class in button element</p>

                <div>
                    <button type="button" class="btn btn-flat-primary btn-icon">
                        <i class="ph-link"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded flat with icon</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> to <code>.btn-icon</code> to show perfectly rounded button in 38x38 size. Works with all button styles and sizes</p>

                <div>
                    <button type="button" class="btn btn-flat-primary btn-icon rounded-pill">
                        <i class="ph-link"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat icon button with menu</h6>
                <p class="mb-3">Icon button has variable width and is controlled by padding. Add <code>.dropdown-toggle</code> to <code>.btn-icon</code> to show directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-flat-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-link"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /icon flat button -->


    <!-- Floating flat button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Floating flat button</h6>
                <p class="mb-3">Button in slightly bigger size to stand out and attract more attention to specific actions. Supports all button colors and options</p>

                <div>
                    <button type="button" class="btn btn-flat-success p-1">
                        <i class="ph-magnifying-glass m-1"></i>
                    </button>
                    <button type="button" class="btn btn-flat-danger p-2 mx-2">
                        <i class="ph-download-simple ph-2x m-1"></i>
                    </button>
                    <button type="button" class="btn btn-flat-indigo p-2">
                        <i class="ph-spinner spinner m-1"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Floating flat with text</h6>
                <p class="mb-3">In floating buttons text label is displayed on the second line. Adjust text alignment or spacing with our utility classes</p>

                <div>
                    <button type="button" class="btn btn-flat-success flex-column">
                        <i class="ph-magnifying-glass my-1"></i>
                        Search
                    </button>

                    <button type="button" class="btn btn-flat-danger flex-column py-2 mx-2">
                        <i class="ph-download-simple ph-2x mb-1"></i>
                        Download
                    </button>

                    <button type="button" class="btn btn-flat-indigo flex-column">
                        <i class="ph-spinner spinner my-1"></i>
                        Update
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded floating flat buttons</h6>
                <p class="mb-3">Floating buttons without text label can be displayed in fully rounded style. Just add <code>.rounded-pill</code> to the button element</p>

                <div>
                    <button type="button" class="btn btn-flat-success rounded-pill p-2">
                        <i class="ph-magnifying-glass m-1"></i>
                    </button>
                    <button type="button" class="btn btn-flat-danger rounded-pill p-2 mx-2">
                        <i class="ph-download-simple ph-2x m-1"></i>
                    </button>
                    <button type="button" class="btn btn-flat-indigo rounded-pill p-2">
                        <i class="ph-spinner spinner m-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /floating flat button -->


    <!-- Border options in flat button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Transparent border</h6>
                <p class="mb-3">Use <code>.border-transparent</code> class in addition to <code>.btn-flat-[color]</code> to make border transparent in all button states</p>

                <div>
                    <button type="button" class="btn btn-flat-primary border-transparent">Transparent border</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Default border</h6>
                <p class="mb-3">All flat buttons have 1px border width by default and don't require any additional border utility classes</p>

                <div>
                    <button type="button" class="btn btn-flat-primary border-primary">Default border</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Thick border</h6>
                <p class="mb-3">You can control border width in flat buttons with our <code>.border-width-[size]</code> utility classes. Here border width is 2px</p>

                <div>
                    <button type="button" class="btn btn-flat-primary border-primary border-width-2">Thick border</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /border options in flat button -->





    <!-- Link buttons title -->
    <div class="mb-3">
        <h6 class="mb-0">
            Link buttons
        </h6>
        <span class="text-muted d-block">Buttons with default text link styles</span>
    </div>
    <!-- /link buttons title -->


    <!-- Link button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Link button</h6>
                <p class="mb-3">Link button has same size as other buttons, but background and border colors are transparent and text color is similar to text link color</p>

                <div>
                    <button type="button" class="btn btn-link">Link button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Link button with icon</h6>
                <p class="mb-3">Link button can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <button type="button" class="btn btn-link">
                        <i class="ph-check-square-offset me-2"></i>
                        With icon
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Link button with menu</h6>
                <p class="mb-3">Link button also supports dropdown menus in various directions. Use <code>.dropdown-toggle</code> to display directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /link button -->


    <!-- Labeled link button -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled link button</h6>
                <p class="mb-3">In labeled link button icons are separated from text label with custom background color. This color can be adjusted via utility classes</p>

                <div>
                    <button type="button" class="btn btn-link btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-primary text-white rounded">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Labeled
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Link button with rounded label</h6>
                <p class="mb-3">Rounded labeled link button requires <code>.rounded-pill</code> class to be added to icon element</p>

                <div>
                    <button type="button" class="btn btn-link btn-labeled btn-labeled-start rounded-pill">
                        <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Rounded
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled link button with menu</h6>
                <p class="mb-3">Labeled link button with dropdown menu. Supports left and right alignment. All other options also work in this button type</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-link btn-labeled btn-labeled-start dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-primary text-white rounded">
                                <i class="ph-check-square-offset"></i>
                            </span>
                            Dropdown
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /labeled link button -->





    <!-- Button sizes and colors title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Button sizes
        </h6>
        <span class="text-muted d-block">Buttons in large, medium and small sizes</span>
    </div>
    <!-- /button sizes and colors title -->


    <!-- Solid button sizes -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid button sizes</h6>
                <p class="mb-3">Use <code>.btn-[color].btn-[sm|lg]</code> classes to control solid button size. Default button size doesn't require additional class names</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-primary btn-lg">
                        <i class="ph-chats ph-lg me-2"></i>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-danger">
                        <i class="ph-chats me-2"></i>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-success btn-sm">
                        <i class="ph-chats ph-sm me-2"></i>
                        Small button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid button with label</h6>
                <p class="mb-3">Use <code>.btn-[color].btn-[sm|lg]</code> and <code>.btn-labeled.btn-labeled-[start|end]</code> classes to control labeled solid button size</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start btn-lg">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-map-pin ph-lg"></i>
                        </span>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-danger btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-map-pin"></i>
                        </span>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-map-pin ph-sm"></i>
                        </span>
                        Small button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded solid button</h6>
                <p class="mb-3">Use <code>.btn-[color].btn-[sm|lg]</code> and <code>.rounded-pill</code> classes to control rounded solid button size</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-primary btn-lg rounded-pill">
                        <i class="ph-at ph-lg me-2"></i>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-danger rounded-pill">
                        <i class="ph-at me-2"></i>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-success btn-sm rounded-pill">
                        <i class="ph-at ph-sm me-2"></i>
                        Small button
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /solid button sizes -->


    <!-- Outline button sizes -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline button sizes</h6>
                <p class="mb-3">Use <code>.btn-outline-[color].btn-[sm|lg]</code> classes to control outline button size. Default button size doesn't require additional class names</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-outline-primary btn-lg">
                        <i class="ph-chats ph-lg me-2"></i>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-outline-danger">
                        <i class="ph-chats me-2"></i>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success btn-sm">
                        <i class="ph-chats ph-sm me-2"></i>
                        Small button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline button with label</h6>
                <p class="mb-3">Use <code>.btn-outline-[color].btn-[sm|lg]</code> and <code>.btn-labeled.btn-labeled-[start|end]</code> classes to control labeled outline button size</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-outline-primary btn-labeled btn-labeled-start btn-lg">
                        <span class="btn-labeled-icon bg-primary text-white">
                            <i class="ph-map-pin ph-lg"></i>
                        </span>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-outline-danger btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-danger text-white">
                            <i class="ph-map-pin"></i>
                        </span>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-map-pin ph-sm"></i>
                        </span>
                        Small button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded outline button</h6>
                <p class="mb-3">Use <code>.btn-outline-[color].btn-[sm|lg]</code> and <code>.rounded-pill</code> classes to control rounded outline button size</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-outline-primary btn-lg rounded-pill">
                        <i class="ph-at ph-lg me-2"></i>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-outline-danger rounded-pill">
                        <i class="ph-at me-2"></i>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success btn-sm rounded-pill">
                        <i class="ph-at ph-sm me-2"></i>
                        Small button
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /outline button sizes -->


    <!-- Flat button sizes -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Default button sizes</h6>
                <p class="mb-3">Use <code>.btn-flat-[color].btn-[sm|lg]</code> classes to control flat button size. Default button size doesn't require additional class names</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-flat-primary btn-lg">
                        <i class="ph-chats ph-lg me-2"></i>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-flat-danger">
                        <i class="ph-chats me-2"></i>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-flat-success btn-sm">
                        <i class="ph-chats ph-sm me-2"></i>
                        Small button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled button sizes</h6>
                <p class="mb-3">Use <code>.btn-flat-[color].btn-[sm|lg]</code> and <code>.btn-labeled.btn-labeled-[start|end]</code> classes to control labeled flat button size</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-flat-primary btn-labeled btn-labeled-start btn-lg">
                        <span class="btn-labeled-icon bg-primary text-white">
                            <i class="ph-map-pin ph-lg"></i>
                        </span>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-flat-danger btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-danger text-white">
                            <i class="ph-map-pin"></i>
                        </span>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-map-pin ph-sm"></i>
                        </span>
                        Small button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline button sizes</h6>
                <p class="mb-3">Use <code>.btn-flat-[color].btn-[sm|lg]</code> and <code>.rounded-pill</code> classes to control rounded flat button size</p>

                <div class="mb-2">
                    <button type="button" class="btn btn-flat-primary btn-lg rounded-pill">
                        <i class="ph-at ph-lg me-2"></i>
                        Large button
                    </button>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-flat-danger rounded-pill">
                        <i class="ph-at me-2"></i>
                        Default button
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-flat-success btn-sm rounded-pill">
                        <i class="ph-at ph-sm me-2"></i>
                        Small button
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /flat button sizes -->




    <!-- Button colors title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Button colors
        </h6>
        <span class="text-muted d-block">Predefined button sizing options</span>
    </div>
    <!-- /button colors title -->


    <!-- Button colors -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Light button</h6>
                <p class="mb-3">Use <code>.btn-[light|outline-light|flat-light]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-light my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-light my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-light my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dark button</h6>
                <p class="mb-3">Use <code>.btn-[dark|outline-dark|flat-dark]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-dark my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-dark my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-dark my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Primary button</h6>
                <p class="mb-3">Use <code>.btn-[primary|outline-primary|flat-primary]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-primary my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-primary my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-primary my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Secondary button</h6>
                <p class="mb-3">Use <code>.btn-[secondary|outline-secondary|flat-secondary]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-secondary my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-secondary my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-secondary my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Danger button</h6>
                <p class="mb-3">Use <code>.btn-[danger|outline-danger|flat-danger]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-danger my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-danger my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-danger my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Success button</h6>
                <p class="mb-3">Use <code>.btn-[success|outline-success|flat-success]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-success my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-success my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-success my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Warning button</h6>
                <p class="mb-3">Use <code>.btn-[warning|outline-warning|flat-warning]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-warning my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-warning my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-warning my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Info button</h6>
                <p class="mb-3">Use <code>.btn-[info|outline-info|flat-info]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-info my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-info my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-info my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Indigo button</h6>
                <p class="mb-3">Use <code>.btn-[indigo|outline-indigo|flat-indigo]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-indigo my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-indigo my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-indigo my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Pink button</h6>
                <p class="mb-3">Use <code>.btn-[pink|outline-pink|flat-pink]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-pink my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-pink my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-pink my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Purple button</h6>
                <p class="mb-3">Use <code>.btn-[purple|outline-purple|flat-purple]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-purple my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-purple my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-purple my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Yellow button</h6>
                <p class="mb-3">Use <code>.btn-[yellow|outline-yellow|flat-yellow]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-yellow my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-yellow my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-yellow my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Teal button</h6>
                <p class="mb-3">Use <code>.btn-[teal|outline-teal|flat-teal]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-teal my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-teal my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-teal my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body bg-dark text-white">
                <h6 class="fw-semibold">White button</h6>
                <p class="mb-3">Use <code>.btn-[white|outline-white|flat-white]</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-white my-1 me-2">Button</button>
                    <button type="button" class="btn btn-outline-white my-1 me-2">Button</button>
                    <button type="button" class="btn btn-flat-white my-1 me-2">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Link button</h6>
                <p class="mb-3">Use <code>.btn-link</code> class with the base <code>.btn</code> in any input, anchor or button element</p>

                <div>
                    <button type="button" class="btn btn-link my-1 me-2">Button</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /button colors -->



    <!-- Icon alignment title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Icon alignment
        </h6>
        <span class="text-muted d-block">Examples of left and right icon alignment in buttons</span>
    </div>
    <!-- /icon alignment title -->


    <!-- Icon alignment -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Left icon alignment</h6>
                <p class="mb-3">Add icon markup <strong>before</strong> button text and add optional <code>.me-2</code> class to add extra spacing between them</p>

                <div>
                    <button type="button" class="btn btn-primary">
                        <i class="ph-lock me-2"></i>
                        Left alignment
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Right icon alignment</h6>
                <p class="mb-3">Add icon markup <strong>after</strong> button text and add optional <code>.ms-2</code> class to add extra spacing between them</p>

                <div>
                    <button type="button" class="btn btn-primary">
                        Right alignment
                        <i class="ph-lock ms-2"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Right in dropdown</h6>
                <p class="mb-3">Icons with left and right alignment work well in button with dropdown menu, directional arrow doesn't overlap custom icons</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown
                            <i class="ph-lock ms-2"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /icon alignment -->


    <!-- Label icon alignment -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Left label position</h6>
                <p class="mb-3">Use <code>.btn-labeled.btn-labeled-start</code> classes in button element to align icon label to the left</p>

                <div>
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-lock"></i>
                        </span>
                        Left position
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Right label position</h6>
                <p class="mb-3">Use <code>.btn-labeled.btn-labeled-end</code> classes in button element to align icon label to the right</p>

                <div>
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-lock"></i>
                        </span>
                        Right position
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Right in dropdown</h6>
                <p class="mb-3">Labeled button with icon is also adapted for use in button with dropdown menu. Here icon is displayed after directional arrow</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-labeled btn-labeled-end dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-lock"></i>
                            </span>
                            Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /label icon alignment -->





    <!-- Button dropdowns title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Button dropdowns
        </h6>
        <span class="text-muted d-block">Dropdown menus attached to buttons</span>
    </div>
    <!-- /button dropdowns title -->


    <!-- Button dropdown types -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button dropdown</h6>
                <p class="mb-3">Use <code>.dropdown-toggle</code> class to show directional arrow in button dropdown and <code>data-bs-toggle="dropdown"</code> to trigger the menu</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Menu with icon</h6>
                <p class="mb-3">Button with dropdown can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-gear me-2"></i>
                            Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Segmented button</h6>
                <p class="mb-3">A split button with dropdown. Use additional <code>.dropdown-toggle-split</code> class for proper spacing around the dropdown caret</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-gear me-2"></i>
                            Segmented
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /button dropdown types -->


    <!-- Additional dropdown alignment -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button dropup</h6>
                <p class="mb-3">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element of dropdown toggler</p>

                <div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropup</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Drop right</h6>
                <p class="mb-3">Trigger dropdown menus at the right of the elements by adding <code>.dropend</code> to the parent element of dropdown toggler</p>

                <div>
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropright menu</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Drop left</h6>
                <p class="mb-3">Trigger dropdown menus at the left of the elements by adding <code>.dropstart</code> to the parent element of dropdown toggler</p>

                <div>
                    <div class="btn-group dropstart">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropleft menu</button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /additional dropdown alignment -->


    <!-- Rounded button menus -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded button dropup</h6>
                <p class="mb-3">Trigger dropdown menus above rounded button by adding <code>.dropup</code> to the parent element of dropdown toggler</p>

                <div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded button menu</h6>
                <p class="mb-3">Rounded button with dropdown can be used with text, icons or combination of both. There is no limit in number of icons per button</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-gear me-2"></i>
                            Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="m-0 fw-semibold">Rounded segmented</h6>
                <p class="mb-3">A split rounded button with dropdown. Use additional <code>.dropdown-toggle-split</code> class for proper spacing around the dropdown caret</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary rounded-pill rounded-end-0">
                            <i class="ph-gear me-2"></i>
                            Segmented
                        </button>
                        <button type="button" class="btn btn-primary rounded-pill rounded-start-0 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /rounded button menus -->


    <!-- Labeled button menus -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled button dropup</h6>
                <p class="mb-3">Trigger dropdown menus above labeled button by adding <code>.dropup</code> to the parent element of dropdown toggler</p>

                <div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary btn-labeled btn-labeled-start dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-gear"></i>
                            </span>
                            Dropup
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Labeled segmented</h6>
                <p class="mb-3">A split labeled button with dropdown. Use additional <code>.dropdown-toggle-split</code> class for proper spacing around the dropdown caret</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-labeled btn-labeled-start">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-gear"></i>
                            </span>
                            Segmented
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Segmented dropup</h6>
                <p class="mb-3">A split labeled button with dropup. Use additional <code>.dropdown-toggle-split</code> class for proper spacing around the dropdown caret</p>

                <div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary btn-labeled btn-labeled-start">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-gear"></i>
                            </span>
                            Segmented
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /labeled button menus -->


    <!-- Icon button menus -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon button dropup</h6>
                <p class="mb-3">Dropup menu can be attached to any button, including buttons with icons only. Logic and markup are the same</p>

                <div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-list"></i>
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Segmented dropdown icon</h6>
                <p class="mb-3">Example of segmented button with dropdown menu, attached to button with icon only. Works best in button toolbars</p>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-icon">
                            <i class="ph-list"></i>
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Segmented dropup button</h6>
                <p class="mb-3">Dropup is dynamic, meaning if there's not enough space above or below the button, it automatically flips</p>

                <div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary btn-icon">
                            <i class="ph-list"></i>
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /icon button menus -->



    <!-- Button options title -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">
            Additional options
        </h6>
        <span class="text-muted d-block">Button toolbars, groups and controls</span>
    </div>
    <!-- /button options title -->


    <!-- Button options -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Loading button</h6>
                    <p class="text-muted mb-3">Custom loading state</p>

                    <button type="button" data-initial-text="<i class='ph-spinner me-2'></i> Loading state" data-loading-text="<i class='ph-spinner spinner me-2'></i> Loading..." class="btn btn-light btn-loading">
                        <i class="ph-spinner me-2"></i>
                        Loading state
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Radio button group</h6>
                    <p class="text-muted mb-3">Bootstrap <code>radio</code> button group</p>

                    <div class="btn-group">
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked="">
                        <label class="btn btn-primary" for="option1">Option 1</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-primary" for="option2">Option 2</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                        <label class="btn btn-primary" for="option3">Option 3</label>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Justified link group</h6>
                    <p class="text-muted mb-3">Justified <code>links</code> in button group</p>

                    <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-secondary">Left</a>
                        <a href="#" class="btn btn-secondary">Middle</a>
                        <a href="#" class="btn btn-secondary">Right</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Button group</h6>
                    <p class="text-muted mb-3">Group of buttons in <code>btn-group</code></p>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Single toggle button</h6>
                    <p class="text-muted mb-3">Using <code>data-toggle="button"</code></p>

                    <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
                    <label class="btn btn-light" for="btn-check">Single toggle</label>
                </div>
            </div>

            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Button group nesting</h6>
                    <p class="text-muted mb-3">Example of nested button groups</p>

                    <div class="btn-group">
                        <button type="button" class="btn btn-teal">1</button>
                        <button type="button" class="btn btn-teal">2</button>

                        <div class="btn-group">
                            <button type="button" class="btn btn-teal dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu" style="">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">One more action</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Separated line</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Button toolbar</h6>
                    <p class="text-muted mb-3">Complex <code>btn-group</code> components</p>

                    <div class="btn-toolbar">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-light">1</button>
                            <button type="button" class="btn btn-light">2</button>
                            <button type="button" class="btn btn-light">3</button>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-light">4</button>
                            <button type="button" class="btn btn-light">5</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Checkbox button group</h6>
                    <p class="text-muted mb-3">Bootstrap <code>checkbox</code> button group</p>

                    <div class="btn-group">
                        <input type="checkbox" class="btn-check" id="btn-group-check1" autocomplete="off" checked="">
                        <label class="btn btn-primary" for="btn-group-check1">Option 1</label>

                        <input type="checkbox" class="btn-check" id="btn-group-check2" autocomplete="off">
                        <label class="btn btn-primary" for="btn-group-check2">Option 2</label>

                        <input type="checkbox" class="btn-check" id="btn-group-check3" autocomplete="off">
                        <label class="btn btn-primary" for="btn-group-check3">Option 3</label>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <div class="">
                    <h6 class="m-0 fw-semibold">Justified button group</h6>
                    <p class="text-muted mb-3">Justified <code>buttons</code> in button group</p>

                    <div class="btn-group d-flex">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /button options -->



    <!-- Progress buttons title -->
    <!-- <div class="mb-3 py-2">
						<h6 class="mb-0">
							Progress animation
						</h6>
						<span class="text-muted d-block">Button loading spinner with progress</span>
					</div> -->
    <!-- /progress buttons title -->


    <!-- Progress buttons -->
    <!-- <div class="row">
						<div class="col-lg-4">
							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Expand Left</h6>
									<p class="text-muted mb-3">Spinner appears on left</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-style="expand-left" data-spinner-color="#333" data-spinner-size="20">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
		                        </div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Expand Right</h6>
									<p class="text-muted mb-3">Spinner appears on right</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-style="expand-right" data-spinner-color="#333" data-spinner-size="20">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="expand-right" data-spinner-size="20">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
		                        </div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Expand Up</h6>
									<p class="text-muted mb-3">Spinner appears on top</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="expand-up">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="expand-up">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
		                        </div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Expand Down</h6>
									<p class="text-muted mb-3">Spinner appears on bottom</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="expand-down">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="expand-down">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
		                        </div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Slide Left</h6>
									<p class="text-muted mb-3">Spinner slides from right</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-left">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="slide-left">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Slide Right</h6>
									<p class="text-muted mb-3">Spinner slides from left</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-right">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="slide-right">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Slide Up</h6>
									<p class="text-muted mb-3">Spinner slides from bottom</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-up">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="slide-up">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Slide Down</h6>
									<p class="text-muted mb-3">Spinner slides from top</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-down">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="slide-down">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Zoom In</h6>
									<p class="text-muted mb-3">Spinner appears after zoom in</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="zoom-in">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="zoom-in">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Zoom Out</h6>
									<p class="text-muted mb-3">Spinner appears after zoom out</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="zoom-out">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="zoom-out">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Fixed Position</h6>
									<p class="text-muted mb-3">Spinner appears instead of text</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="fade">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="fade">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>

							<div class="card card-body border-top-primary">
								<div class="text-center">
									<h6 class="m-0 fw-semibold">Border radius</h6>
									<p class="text-muted mb-3">Border radius animation</p>

			                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="radius">
			                        	<span class="ladda-label">Spinner</span>
		                        	</button>
			                        <button type="button" class="btn btn-teal btn-ladda btn-ladda-progress" data-style="radius">
			                        	<span class="ladda-label">Spinner + Progress</span>
		                        	</button>
	                        	</div>
							</div>
						</div>
					</div> -->
    <!-- /progress buttons -->

</div>
<!-- /content area -->

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_buttons.js')}}"></script>
@endsection
