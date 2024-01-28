@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Pills @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Pills layouts title -->
    <div class="mb-3">
        <h6 class="mb-0">
            Pill layouts
        </h6>
        <span class="text-muted d-block">Varations of basic, outline and toolbar pill styles</span>
    </div>
    <!-- /pills layouts title -->


    <!-- Basic pills -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic pills</h6>
                <p class="mb-3">All navigations in Limitless share general markup and styles. All ot them require <code>.nav</code> class for basic styling and modifier nav type class. Use <code>.nav-pills</code> to display nav links as pills.</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Basic rounded</h6>
                <p class="mb-3">Pills are using global border radius variable in their CSS. You can either override it globally or locally using our utility classes. To use, add <code>.rounded-pill</code> to all <code>.nav-link</code> elements.</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Justified pills</h6>
                <p class="mb-3">Force your <code>.nav</code> ’s contents to extend the full width. To proportionately fill all available space with your nav items, use <code>.nav-fill</code>. For equal-width elements, use <code>.nav-justified</code></p>

                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Justified rounded</h6>
                <p class="mb-3">The same logic also works in navigations with <code>.nav-justified</code> or <code>.nav-fill</code> modifier classes - just add <code>.rounded-pill</code> class to nav link elements for fully rounded corners</p>

                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /basic pills -->


    <!-- Outline pills -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline pills</h6>
                <p class="mb-3">A classic style of horizontal nav that looks similar to outline buttons and list groups - outline pills. To use, simply add <code>.nav-pills-outline</code> class to the base <code>.nav-pills</code> container</p>

                <ul class="nav nav-pills nav-pills-outline">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Outline rounded</h6>
                <p class="mb-3">Outline pills can have fully rounded corners, the base container doesn't require any additional modifier classes. Just add <code>.rounded-pill</code> utility class to each <code>.nav-link</code> element</p>

                <ul class="nav nav-pills nav-pills-outline">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline justified</h6>
                <p class="mb-3">Rounded corners in justified pills. You can also use our flex utility classes to stack pills vertically on different screen sizes by adding <code>.flex-column.flex-[breakpoint]-row</code> classes</p>

                <ul class="nav nav-pills nav-pills-outline nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Outline rounded justified</h6>
                <p class="mb-3">To use rounded corners in justified pills, add <code>.rounded-pill</code> to all links in <code>.nav-pills-outline</code> container. You can also use utility classes to modify appearance on different screen sizes</p>

                <ul class="nav nav-pills nav-pills-outline nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-pill">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /bordered pills -->


    <!-- Toolbar pills -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills toolbar</h6>
                <p class="mb-3">You can display pills as a bordered toolbar. All nav items have negative left margin that equals border width. Be careful with overriding wrapping behaviour as it can break the layout</p>

                <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Rounded toolbar</h6>
                <p class="mb-3">To make pills in the toolbar rounded, add <code>.rounded-start-pill</code> and <code>.rounded-end-pill</code> classes to the first/last links. For better horizontal appearance, you can also use padding utility classes</p>

                <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start-pill active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Toolbar justified</h6>
                <p class="mb-3">Pills toolbar can be also stretched to fill all available space. Bear in mind that using flex utility classes to transform horizontal nav to vertical on certain breakpoints is not yet supported</p>

                <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Rounded justified toolbar</h6>
                <p class="mb-3">Use <code>.rounded-start-pill</code> and <code>.rounded-end-pill</code> classes to the first/last links. If you need to use 6+ items, consider using default or outline style instead as they support stacking layout</p>

                <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start-pill active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /toolbar pills -->


    <!-- Outline group -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Outline group</h6>
                <p class="mb-3">Display pills as a group of nav items within a custom container. You can control inner container padding, border width/color, border radius and container width with our utility classes</p>

                <div>
                    <ul class="nav nav-pills d-inline-flex border rounded p-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded active">Active</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded">Inactive</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Dropdown pill</a>
                                <a href="#" class="dropdown-item">Another pill</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded outline group</h6>
                <p class="mb-3">If you add <code>.rounded-pill</code> class to all nav links and parent container, pills group will have fully rounded mobile-like nav items. For a full width, remove <code>.d-inline-flex</code> from pills container</p>

                <div>
                    <ul class="nav nav-pills d-inline-flex border rounded-pill p-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded-pill active">Active</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded-pill">Inactive</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Dropdown pill</a>
                                <a href="#" class="dropdown-item">Another pill</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /outline group -->


    <!-- Solid group -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Group with background</h6>
                <p class="mb-3">Same as outline example above, but with a custom background color. Instead of border utility classes, you can also color classes to set custom background color or a mix of both</p>

                <div>
                    <ul class="nav nav-pills d-inline-flex bg-light rounded p-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded active">Active</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded">Inactive</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Dropdown pill</a>
                                <a href="#" class="dropdown-item">Another pill</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded group with background</h6>
                <p class="mb-3">Fancy mobile-like toolbar with a custom background color and fully rounded nav links. To get this style, just add <code>.rounded-pill</code> to all nav links and base pills container</p>

                <div>
                    <ul class="nav nav-pills d-inline-flex bg-light rounded-pill p-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded-pill active">Active</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link rounded-pill">Inactive</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link rounded-pill dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Dropdown pill</a>
                                <a href="#" class="dropdown-item">Another pill</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /solid group -->



    <!-- Javascript behaviour -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Javascript behaviour
        </h6>
        <span class="text-muted d-block">Positioning, stacked options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic pills</h6>
                <p class="mb-3">Use the tab JavaScript plugin to extend our navigational tabs and pills to create tabbable panes of local content. Just add <code>.data-bs-toggle="tab"</code> to all nav links and assign ID's to content panes</p>

                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="#js-tab1" class="nav-link active" data-bs-toggle="tab">
                            Active
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#js-tab2" class="nav-link" data-bs-toggle="tab">
                            Inactive
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#js-tab3" class="nav-link disabled" data-bs-toggle="tab">
                            Disabled
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="js-tab1">
                        This is some placeholder content the <strong>first</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-tab2">
                        This is some placeholder content the <strong>second</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-tab3">
                        This is some placeholder content the <strong>third</strong> tab's associated content
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills with dropdown</h6>
                <p class="mb-3">Pills can be toggled from dropdown menu items, if they contain <code>data-bs-toggle="tab"</code> attribute with corresponding content pane ID. Call the dropdown in a regular way via <code>data-bs-toggle="dropdown"</code> in nav link</p>

                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="#js-dropdown-pill1" class="nav-link active" data-bs-toggle="tab">
                            Active
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#js-dropdown-pill2" class="nav-link" data-bs-toggle="tab">
                            Inactive
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#js-dropdown-pill3" class="dropdown-item" data-bs-toggle="tab">Dropdown pill</a>
                            <a href="#js-dropdown-pill4" class="dropdown-item" data-bs-toggle="tab">Another pill</a>
                        </div>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="js-dropdown-pill1">
                        This is some placeholder content the <strong>first</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-dropdown-pill2">
                        This is some placeholder content the <strong>second</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-dropdown-pill3">
                        This is some placeholder content the <strong>third</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-dropdown-pill4">
                        This is some placeholder content the <strong>fourth</strong> tab's associated content
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->



    <!-- Vertical pills title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Vertical pills
        </h6>
        <span class="text-muted d-block">Vertical pills styling and alignment options</span>
    </div>
    <!-- /vertical pills title -->


    <!-- Stacked pills -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Stacked pills</h6>
                <p class="mb-3">Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility. Use responsive versions of you need to stack them on some viewports only</p>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Stacked with icons/badges</h6>
                <p class="mb-3">Vertical pills support optional elements such as icon and badges, just like a regular navigation. All elements can be aligned to the left, right, or both. Use flex utilities for a perfect alignment</p>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="ph-user-circle me-2"></i>
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="ph-currency-circle-dollar me-2"></i>
                            Inactive
                            <span class="badge bg-dark ms-auto">Bug</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-shopping-cart me-2"></i>
                            Dropdown
                            <span class="badge bg-primary rounded-pill ms-auto">95</span>
                        </a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /stacked pills -->


    <!-- Staked outline -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Stacked outline</h6>
                <p class="mb-3">To stack outline pills, add <code>.nav-pills-outline.flex-column</code> to nav container. You can also make horizontal nav stackable on certain viewports with responsive classes</p>

                <ul class="nav nav-pills nav-pills-outline flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="ph-user-circle me-2"></i>
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="ph-currency-circle-dollar me-2"></i>
                            Inactive
                            <span class="badge bg-dark ms-auto">Bug</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-shopping-cart me-2"></i>
                            Dropdown
                            <span class="badge bg-primary rounded-pill ms-auto">95</span>
                        </a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Stacked toolbar</h6>
                <p class="mb-3">Toolbar also can be stacked, but it doesn't support responsive classes out of the box as all stylings are assigned to <code>.flex-column</code> class. You can customize it by yourself in CSS if necessary</p>

                <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="ph-user-circle me-2"></i>
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="ph-currency-circle-dollar me-2"></i>
                            Inactive
                            <span class="badge bg-dark ms-auto">Bug</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-shopping-cart me-2"></i>
                            Dropdown
                            <span class="badge bg-primary rounded-pill ms-auto">95</span>
                        </a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /stacked outline -->


    <!-- Stacked nav alignment -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Left alignment</h6>

                <div class="d-lg-flex justify-content-lg-between">
                    <ul class="nav nav-pills flex-column wmin-lg-250 me-lg-3 mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a href="#stacked-left-pill1" class="nav-link active" data-bs-toggle="tab">
                                <i class="ph-user-circle me-2"></i>
                                Active
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#stacked-left-pill2" class="nav-link" data-bs-toggle="tab">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                Inactive
                                <span class="badge bg-dark ms-auto">Bug</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-shopping-cart me-2"></i>
                                Dropdown
                                <span class="badge bg-primary rounded-pill ms-auto">95</span>
                            </a>

                            <div class="dropdown-menu">
                                <a href="#stacked-left-pill3" class="dropdown-item" data-bs-toggle="tab">Dropdown pill</a>
                                <a href="#stacked-left-pill4" class="dropdown-item" data-bs-toggle="tab">Another pill</a>
                            </div>
                        </li>
                    </ul>

                    <div class="tab-content flex-1">
                        <div class="tab-pane fade show active" id="stacked-left-pill1">
                            Stacked pills navigation aligned to the <code>left</code> using a set of our flexbox and margin utility classes. Both containers are also stackable on small screens
                        </div>

                        <div class="tab-pane fade" id="stacked-left-pill2">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                        </div>

                        <div class="tab-pane fade" id="stacked-left-pill3">
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                        </div>

                        <div class="tab-pane fade" id="stacked-left-pill4">
                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Right alignment</h6>

                <div class="d-lg-flex justify-content-lg-between">
                    <div class="tab-content flex-1">
                        <div class="tab-pane fade show active" id="stacked-right-pill1">
                            Stacked pills navigation aligned to the <code>right</code> using a set of our flexbox and margin utility classes. Both containers are also stackable on small screens
                        </div>

                        <div class="tab-pane fade" id="stacked-right-pill2">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                        </div>

                        <div class="tab-pane fade" id="stacked-right-pill3">
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                        </div>

                        <div class="tab-pane fade" id="stacked-right-pill4">
                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                        </div>
                    </div>

                    <ul class="nav nav-pills flex-column wmin-lg-250 ms-lg-3 mt-3 mt-lg-0">
                        <li class="nav-item">
                            <a href="#stacked-right-pill1" class="nav-link active" data-bs-toggle="tab">
                                <i class="ph-user-circle me-2"></i>
                                Active
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#stacked-right-pill2" class="nav-link" data-bs-toggle="tab">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                Inactive
                                <span class="badge bg-dark ms-auto">Bug</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-shopping-cart me-2"></i>
                                Dropdown
                                <span class="badge bg-primary rounded-pill ms-auto">95</span>
                            </a>

                            <div class="dropdown-menu">
                                <a href="#stacked-right-pill3" class="dropdown-item" data-bs-toggle="tab">Dropdown pill</a>
                                <a href="#stacked-right-pill4" class="dropdown-item" data-bs-toggle="tab">Another pill</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /stacked nav alignment -->



    <!-- Pills styling title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Optional styling and elements
        </h6>
        <span class="text-muted d-block">Display icons, labels, badges and images in nav pills</span>
    </div>
    <!-- /pills styling title -->


    <!-- Pills alignment -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Centered pills</h6>
                <p class="mb-3">By default, pills are left aligned. But you can control it with our flex utility classes. To center pills horizontally, add <code>.justify-content-center</code> to the base <code>.nav-pills</code> container</p>

                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Right alignment</h6>
                <p class="mb-3">The same as centered pills, but with a different class name - <code>.justify-content-end</code>. You can also use responsive variations to change pills alignment on different breakpoints</p>

                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /pills position -->


    <!-- Close button -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills with close button</h6>
                <p class="mb-3">This style is usually used for dynamic navigation with some edit/remove functionality. Use flex utility classes in nav links and include a <code>span</code> element with <code>.nav-btn-close</code> class</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center active pe-2">
                            Active
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center pe-2">
                            Inactive
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center pe-2" data-bs-toggle="dropdown">
                            Dropdown
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Rounded style</h6>
                <p class="mb-3">Our utility classes allows us to fully control the appearance and style of almost elements. In rounded pills you can also add <code>.rounded-pill</code> to the close button of remove background completely</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center rounded-pill active pe-2">
                            Active
                            <span class="nav-btn-close rounded-pill ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center rounded-pill pe-2">
                            Inactive
                            <span class="nav-btn-close rounded-pill ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center rounded-pill pe-2" data-bs-toggle="dropdown">
                            Dropdown
                            <span class="nav-btn-close rounded-pill ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /close button -->


    <!-- Multiline pills -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Multiline pills</h6>
                <p class="mb-3">To display a large sized navigation with title and subtitle, use 2 elements inside <code>.nav-link</code> container. You can style up the text as you want with text utility classes</p>

                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link active">
                            <div>
                                <div class="fw-semibold">Language &amp; region</div>
                                <span class="opacity-50">My localisation settings</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="me-2">
                                <div class="fw-semibold">Privacy &amp; settings</div>
                                <span class="opacity-50">Configure my account</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Multiline with icon</h6>
                <p class="mb-3">Pills support icons in different sizes and styles. Background can be controlled with <code>.bg-[color].bg-opacity-[value]</code> classes, but mind the inversed background color in active state</p>

                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link active ps-2">
                            <div class="d-flex align-items-center">
                                <i class="ph-globe ph-lg bg-black bg-opacity-10 rounded p-2 me-3"></i>
                                <div>
                                    <div class="fw-semibold">Language &amp; region</div>
                                    <span class="opacity-50">My localisation settings</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle ps-2" data-bs-toggle="dropdown">
                            <div class="d-flex align-items-center me-2">
                                <i class="ph-gear ph-lg bg-black bg-opacity-10 rounded p-2 me-3"></i>
                                <div>
                                    <div class="fw-semibold">Privacy &amp; settings</div>
                                    <span class="opacity-50">Configure my account</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /multiline pills -->


    <!-- Icons and labels -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills with icons</h6>
                <p class="mb-3">Icons are supported in all navigation types, in both left and right alignment options. They don't have spacing by default, so use <code>.ms-2</code> to add left spacing and <code>.me-2</code> to add right spacing</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="ph-user-circle me-2"></i>
                            Left icon
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Right icon
                            <i class="ph-currency-circle-dollar ms-2"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills with labels</h6>
                <p class="mb-3">Text labels with custom style are using <code>.badge</code> component, but with slightly rounded corners. Empty labels are hidden by default, so it's recommended to always use pill text as well</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span class="badge bg-secondary me-2">Bug</span>
                            Left label
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Right label
                            <span class="badge bg-warning ms-2">Fixed</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="badge bg-success">Priority</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /icons and labels -->


    <!-- Badges and images -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills with badges</h6>
                <p class="mb-3">Display <code>badges</code> on the left/right sides and in empty pill. Here choosing a suitable badge style is recommended, because in active state background color matches theme's primary color</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span class="badge bg-dark rounded-pill me-2">62</span>
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Inactive
                            <span class="badge bg-teal rounded-pill ms-2">23</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="badge bg-pink rounded-pill">34</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Pills with images</h6>
                <p class="mb-3">Nav pills also support small images in left and right alignment. Just use regular <code>&lt;img></code> element with width/height attributes set to <code>22</code> (default line height) and flex classes to center them properly</p>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center active">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="22" height="22" class="rounded-pill me-2" alt="">
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center">
                            Inactive
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="22" height="22" class="rounded-pill ms-2" alt="">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="22" height="22" class="rounded-pill" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /badges and images -->

</div>
<!-- /content area -->

@endsection
