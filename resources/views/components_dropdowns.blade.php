@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Dropdowns @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic dropdowns -->
    <div class="mb-3">
        <h6 class="mb-0">
            Dropdown menus
        </h6>
        <span class="text-muted d-block">Dropdown menu component in light color theme</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic dropdown</h6>
                <p class="mb-3">Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more separated line</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Disabled items</h6>
                <p class="mb-3">Add <code>.disabled</code> to menu items with <code>.dropdown-item</code> class in the dropdown to style them as disabled items</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item disabled">Disabled item</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more separated line</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Active menu item</h6>
                <p class="mb-3">Add <code>.active</code> to menu items with <code>.dropdown-item</code> class in the dropdown to style them as active items</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item active">Active item</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more separated line</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic dropdowns -->



    <!-- Dropdown headers -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Dropdown headers
        </h6>
        <span class="text-muted d-block">Label group headers with default and optional styling</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Default header</h6>
                <p class="mb-3">Add a header to label sections of actions in any dropdown menu. Use <code>.dropdown-header</code> class for proper styling</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="dropdown-header">Header first</div>
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-header">Header second</div>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Header with underline</h6>
                <p class="mb-3">Use dropdown divider as visual header separator. Make sure <code>.dropdown-header</code> also has <code>.py-0</code> to reset inner spacing</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="dropdown-header py-0">Header first</div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header py-0">Header Second</div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Uppercase headers</h6>
                <p class="mb-3">You can change default header styling with our utility classes. In this example all headers are capitalized</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="dropdown-header text-uppercase fs-sm lh-sm">Header first</div>
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-header text-uppercase fs-sm lh-sm">Header second</div>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Highlighted header</h6>
                <p class="mb-3">Use <code>.bg-[color]</code> and <code>.text-[color]</code> utility classes to apply custom background or text color</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="dropdown-header bg-light mb-2">Header first</div>
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-header bg-light my-2">Header second</div>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Heading elements</h6>
                <p class="mb-3">Headings are also allowed in dropdown header. Just use tags from <code>h1</code> to <code>h6</code> with <code>.mb-0</code> class to reset default spacing</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="dropdown-header">
                        <h6 class="lh-base mb-0">Header first</h6>
                    </div>
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-header">
                        <h6 class="lh-base mb-0">Header Second</h6>
                    </div>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Menu header icons</h6>
                <p class="mb-3">All dropdown elements support icons. It is recommended to use flex utility classes for pixel perfect vertical alignment</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="dropdown-header d-flex align-items-center">
                        <i class="ph-list me-2"></i>
                        Header first
                        <a href="#" class="ms-auto">
                            <i class="ph-gear"></i>
                        </a>
                    </div>
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-header bg-light d-flex align-items-center my-2">
                        <i class="ph-list me-2"></i>
                        Header second
                        <a href="#" class="ms-auto">
                            <i class="ph-gear"></i>
                        </a>
                    </div>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdown headers -->



    <!-- Dropdowns with submenu -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Dropdown submenu
        </h6>
        <span class="text-muted d-block">Custom multilevel submenu that opens on click and hover</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic submenu (on click)</h6>
                <p class="mb-3">Opening submenu in dropdowns on click is recommended due to hover not being supported on touch screens</p>

                <div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Submenu on click</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Basic submenu (on hover)</h6>
                <p class="mb-3">Toggling submenu on hover is also supported. To use, remove <code>.dropdown-toggle</code> class from menu items in submenu</p>

                <div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Submenu on hover</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu">
                                        <a href="#" class="dropdown-item">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dropup menu (on click)</h6>
                <p class="mb-3">Submenus don't support dynamic flipping. You can do it manually by adding <code>.dropup</code> class to <code>.dropdown-submenu</code> container</p>

                <div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Submenu on click</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu dropup">
                                <a href="#" class="dropdown-item dropdown-toggle">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu dropup">
                                        <a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Dropup menu (on hover)</h6>
                <p class="mb-3">The same works for submenus triggered on hover. Add <code>.dropup</code> to submenu and remove <code>.dropdown-toggle</code> from link</p>

                <div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Submenu on hover</a>

                        <div class="dropdown-menu dropup">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu dropup">
                                <a href="#" class="dropdown-item">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu dropup">
                                        <a href="#" class="dropdown-item">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Left orientation (on click)</h6>
                <p class="mb-3">Add <code>.dropdown-submenu-start</code> to submenu container to display it on the left. Kepp in mind that it's not dynamic</p>

                <div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Submenu on click</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu dropdown-submenu-start">
                                <a href="#" class="dropdown-item dropdown-toggle">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu dropdown-submenu-start">
                                        <a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Left orientation (on hover)</h6>
                <p class="mb-3">The same works for hover option. Add <code>.dropdown-submenu-start</code> to submenu and remove <code>.dropdown-toggle</code> from link</p>

                <div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Submenu on hover</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu dropdown-submenu-start">
                                <a href="#" class="dropdown-item">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu dropdown-submenu-start">
                                        <a href="#" class="dropdown-item">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdowns with submenu -->



    <!-- Dropdowns with icons -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Dropdown elements
        </h6>
        <span class="text-muted d-block">Icons, badges, checkboxes, radios and switches</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Left menu item icons</h6>
                <p class="mb-3">Menu items support single or multiple icons. Use spacing util classes to control the distance betweek icons and item text</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-user-circle me-3"></i>
                        Action
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-circles-four me-3"></i>
                        Another action
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chat-circle-text me-3"></i>
                        Something else here
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ph-dots-three-circle me-3"></i>
                        One more separated line
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Right menu item icons</h6>
                <p class="mb-3">Add icon markup after menu item text label and add <code>.ms-auto</code> to align icon(s) to the right. Multiple icons are also supported</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        Action
                        <i class="ph-user-circle ms-auto"></i>
                    </a>
                    <a href="#" class="dropdown-item">
                        Another action
                        <i class="ph-circles-four ms-auto"></i>
                    </a>
                    <a href="#" class="dropdown-item">
                        Something else here
                        <i class="ph-chat-circle-text ms-auto"></i>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        One more separated line
                        <i class="ph-dots-three-circle ms-auto"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icons and text combo</h6>
                <p class="mb-3">You can also mix inline text and icons. Wrap them in <code>&lt;div /></code> and add <code>.ms-auto</code> to align elements to the right</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        Find
                        <span class="text-muted ms-auto">
                            <i class="ph-command"></i>
                            F
                        </span>
                    </a>
                    <a href="#" class="dropdown-item">
                        Find Next
                        <span class="text-muted ms-auto">
                            <i class="ph-command"></i>
                            G
                        </span>
                    </a>
                    <a href="#" class="dropdown-item">
                        Find Previous
                        <span class="text-muted ms-auto">
                            <i class="ph-arrow-fat-up"></i>
                            <i class="ph-command"></i>
                            G
                        </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        Incremental Find
                        <span class="text-muted ms-auto">
                            <i class="ph-command"></i>
                            I
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdowns with icons -->


    <!-- Dropdowns with badges -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dropdown with badges</h6>
                <p class="mb-3">Dropdown items support badges. Just add your badge after text label and apply <code>.ms-auto</code> to stick it to the right</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        Action
                        <span class="badge bg-primary text-white ms-auto">Added</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        Another action
                        <span class="badge bg-danger text-white ms-auto">Bugs</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        Something else here
                        <span class="badge bg-success text-white ms-auto">Done</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        One more separated line
                        <span class="badge bg-info text-white ms-auto">New</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dropdown with pill badges</h6>
                <p class="mb-3">The same as with regular badges, but also add <code>.rounded-pill</code> to the badge. All other badge styling options are supported</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        Action
                        <span class="badge bg-success text-white rounded-pill ms-auto">65</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        Another action
                        <span class="badge bg-warning text-white rounded-pill ms-auto">23</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        Something else here
                        <span class="badge bg-primary text-white rounded-pill ms-auto">83</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        One more separated line
                        <span class="badge bg-danger text-white rounded-pill ms-auto">98</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Left positioned</h6>
                <p class="mb-3">If you need to show badges in some rare scenarios before the text, add it as a first element and apply <code>.me-3</code> class</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        <span class="badge bg-info text-white me-3">New</span>
                        Action
                    </a>
                    <a href="#" class="dropdown-item">
                        <span class="badge bg-success text-white me-3">Done</span>
                        Another action
                    </a>
                    <a href="#" class="dropdown-item">
                        <span class="badge bg-primary text-white rounded-pill me-3">32</span>
                        Something else here
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <span class="badge bg-warning text-white rounded-pill me-3">54</span>
                        One more separated line
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdowns with badges -->


    <!-- Dropdowns with checkboxes and radios -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Menu with checkboxes</h6>
                <p class="mb-3">Dropdown menu also supports checkboxes in native and custom styling, and both can be aligned to the lext and right</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <label class="dropdown-item">
                        <input type="checkbox" class="form-check-input m-0 me-3" checked>
                        Checked
                    </label>

                    <label class="dropdown-item">
                        <input type="checkbox" class="form-check-input m-0 me-3">
                        Unchecked
                    </label>

                    <label class="dropdown-item disabled">
                        <input type="checkbox" class="form-check-input m-0 me-3" checked disabled>
                        Checked disabled
                    </label>

                    <label class="dropdown-item disabled">
                        <input type="checkbox" class="form-check-input m-0 me-3" disabled>
                        Unchecked disabled
                    </label>

                    <div class="dropdown-divider"></div>

                    <label class="dropdown-item">
                        Checked
                        <input type="checkbox" class="form-check-input m-0 ms-auto" checked>
                    </label>

                    <label class="dropdown-item">
                        Unchecked
                        <input type="checkbox" class="form-check-input m-0 ms-auto">
                    </label>

                    <label class="dropdown-item disabled">
                        Checked disabled
                        <input type="checkbox" class="form-check-input m-0 ms-auto" checked disabled>
                    </label>

                    <label class="dropdown-item disabled">
                        Unchecked disabled
                        <input type="checkbox" class="form-check-input m-0 ms-auto" disabled>
                    </label>

                    <div class="dropdown-divider"></div>

                    <label class="dropdown-item">
                        <input type="checkbox" class="m-0 me-2" checked>
                        Left checkbox native
                    </label>

                    <label class="dropdown-item">
                        Right checkbox native
                        <input type="checkbox" class="m-0 ms-auto">
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Menu with radios</h6>
                <p class="mb-3">Radio buttons in native and custom styling are also supported, and both can be aligned to the lext and right</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <label class="dropdown-item">
                        <input type="radio" class="form-check-input m-0 me-3" name="dropdown-radio" checked>
                        Checked
                    </label>

                    <label class="dropdown-item">
                        <input type="radio" class="form-check-input m-0 me-3" name="dropdown-radio">
                        Unchecked
                    </label>

                    <label class="dropdown-item">
                        <input type="radio" class="form-check-input m-0 me-3" checked disabled>
                        Checked disabled
                    </label>

                    <label class="dropdown-item disabled">
                        <input type="radio" class="form-check-input m-0 me-3" disabled>
                        Unchecked disabled
                    </label>

                    <div class="dropdown-divider"></div>

                    <label class="dropdown-item">
                        Checked
                        <input type="radio" class="form-check-input m-0 ms-auto" name="dropdown-radio-right" checked>
                    </label>

                    <label class="dropdown-item">
                        Unchecked
                        <input type="radio" class="form-check-input m-0 ms-auto" name="dropdown-radio-right">
                    </label>

                    <label class="dropdown-item disabled">
                        Checked disabled
                        <input type="radio" class="form-check-input m-0 ms-auto" checked disabled>
                    </label>

                    <label class="dropdown-item disabled">
                        Unchecked disabled
                        <input type="radio" class="form-check-input m-0 ms-auto" disabled>
                    </label>

                    <div class="dropdown-divider"></div>

                    <label class="dropdown-item">
                        <input type="radio" class="m-0 me-2" name="native-radios" checked>
                        Left radio native
                    </label>

                    <label class="dropdown-item">
                        Right radio native
                        <input type="radio" class="m-0 ms-auto" name="native-radios">
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Menu with switches</h6>
                <p class="mb-3">Checkboxes and radio buttons in switch style. Also can be aligned to the left and right or used without text label</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <label class="dropdown-item form-switch">
                        <input type="checkbox" class="form-check-input m-0 me-3" checked>
                        Checked
                    </label>

                    <label class="dropdown-item form-switch">
                        <input type="checkbox" class="form-check-input m-0 me-3">
                        Unchecked
                    </label>

                    <label class="dropdown-item form-switch disabled">
                        <input type="checkbox" class="form-check-input m-0 me-3" checked disabled>
                        Checked disabled
                    </label>

                    <label class="dropdown-item form-switch disabled">
                        <input type="checkbox" class="form-check-input m-0 me-3" disabled>
                        Unchecked disabled
                    </label>

                    <div class="dropdown-divider"></div>

                    <label class="dropdown-item form-switch">
                        Checked
                        <input type="checkbox" class="form-check-input m-0 ms-auto" checked>
                    </label>

                    <label class="dropdown-item form-switch">
                        Unchecked
                        <input type="checkbox" class="form-check-input m-0 ms-auto">
                    </label>

                    <label class="dropdown-item form-switch disabled">
                        Checked disabled
                        <input type="checkbox" class="form-check-input m-0 ms-auto" checked disabled>
                    </label>

                    <label class="dropdown-item form-switch disabled">
                        Unchecked disabled
                        <input type="checkbox" class="form-check-input m-0 ms-auto" disabled>
                    </label>

                    <div class="dropdown-divider"></div>

                    <label class="dropdown-item form-switch">
                        <input type="radio" class="form-check-input m-0 me-3" name="switch-radios" checked>
                        Radio switch checked
                    </label>

                    <label class="dropdown-item form-switch">
                        <input type="radio" class="form-check-input m-0 me-3" name="switch-radios">
                        Radio switch unchecked
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdowns with checkboxes and radios -->



    <!-- Dropdown options title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Optional elements and styling
        </h6>
        <span class="text-muted d-block">Display custom text before or after list of links, scrollable menu</span>
    </div>
    <!-- /dropdown options title -->


    <!-- Dropdown options -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dropdown text</h6>
                <p class="mb-3">Place any freeform text within a dropdown menu and use spacing utilities to control the distance</p>

                <div class="dropdown-menu py-0" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="border-bottom py-2 px-3">
                        <div class="d-flex align-items-center my-1">
                            <div class="status-indicator-container me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>
                            <div>
                                <div class="fw-semibold">Victoria Adams</div>
                                <span class="text-muted">Development Manager</span>
                            </div>
                            <div class="ms-auto">
                                <a href="#">
                                    <i class="ph-gear"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a href="#" class="dropdown-item">One more line</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Scrollable menu</h6>
                <p class="mb-3">Add <code>.dropdown-menu-scrollable[-sm|md|lg|xl]</code> class to make dropdown menu scrollable. Responsive options are supported</p>

                <div class="dropdown-menu dropdown-menu-scrollable" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        Action #1
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #2
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #3
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #4
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #5
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #6
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #7
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #8
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #9
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #10
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #11
                    </a>
                    <a href="#" class="dropdown-item">
                        Action #12
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dropdown footer</h6>
                <p class="mb-3">You can also display custom container with content below the list of links. Use our utility classes to adjust the styling accordingly</p>

                <div class="dropdown-menu py-0" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <div class="py-2">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a href="#" class="dropdown-item">One more line</a>
                    </div>

                    <div class="border-top py-2 px-3">
                        <div class="d-flex my-1">
                            <a href="#">View all options</a>

                            <div class="d-inline-flex ms-auto">
                                <a href="#">
                                    <i class="ph-activity"></i>
                                </a>
                                <a href="#" class="ms-2">
                                    <i class="ph-gear"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdown options -->



    <!-- Dropdown sizing -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Dropdown menu sizes
        </h6>
        <span class="text-muted d-block">Optional menu sizes with submenu and elements</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Large menu size</h6>
                <p class="mb-3">Use <code>.dropdown-menu-lg</code> class in <code>.dropdown-menu</code> container to increase font size and spacing of menu items</p>

                <div class="dropdown-menu dropdown-menu-lg" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-user-circle ph-lg me-3"></i>
                        Action
                        <span class="badge bg-primary text-white ms-auto">Added</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-circles-four ph-lg me-3"></i>
                        Another action
                        <span class="badge bg-danger text-white rounded-pill ms-auto">98</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chat-circle-text ph-lg me-3"></i>
                        Something else here
                        <span class="ms-auto text-muted fs-lg">
                            <i class="ph-command ph-lg"></i>
                            F
                        </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item">
                            <i class="ph-dots-three-circle ph-lg me-3"></i>
                            More options
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <a href="#" class="dropdown-item">Second level link</a>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item">Second level link</a>
                                <div class="dropdown-menu dropdown-menu-lg">
                                    <a href="#" class="dropdown-item">Third level link</a>
                                    <a href="#" class="dropdown-item">Third level link</a>
                                    <a href="#" class="dropdown-item">Third level link</a>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item">Second level link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Default menu size</h6>
                <p class="mb-3">Menu items in default size are using global padding values to match sizes of other elements. This can be adjusted in CSS or SCSS</p>

                <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-user-circle me-3"></i>
                        Action
                        <span class="badge bg-primary text-white ms-auto">Added</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-circles-four me-3"></i>
                        Another action
                        <span class="badge bg-danger text-white rounded-pill ms-auto">98</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chat-circle-text me-3"></i>
                        Something else here
                        <span class="ms-auto text-muted fs-lg">
                            <i class="ph-command"></i>
                            F
                        </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item">
                            <i class="ph-dots-three-circle me-3"></i>
                            More options
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Second level link</a>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item">Second level link</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Third level link</a>
                                    <a href="#" class="dropdown-item">Third level link</a>
                                    <a href="#" class="dropdown-item">Third level link</a>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item">Second level link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Small menu size</h6>
                <p class="mb-3">Use <code>.dropdown-menu-sm</code> class in <code>.dropdown-menu</code> container to make font size and spacing of menu items smaller</p>

                <div class="dropdown-menu dropdown-menu-sm" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-user-circle ph-sm me-2"></i>
                        Action
                        <span class="badge bg-primary text-white ms-auto">Added</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-circles-four ph-sm me-2"></i>
                        Another action
                        <span class="badge bg-danger text-white rounded-pill ms-auto">98</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chat-circle-text ph-sm me-2"></i>
                        Something else here
                        <span class="ms-auto text-muted fs-sm">
                            <i class="ph-command ph-sm"></i>
                            F
                        </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-submenu dropdown-submenu-start">
                        <a href="#" class="dropdown-item">
                            <i class="ph-dots-three-circle ph-sm me-2"></i>
                            More options
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm">
                            <a href="#" class="dropdown-item">Second level link</a>
                            <div class="dropdown-submenu dropdown-submenu-start">
                                <a href="#" class="dropdown-item">Second level link</a>
                                <div class="dropdown-menu dropdown-menu-sm">
                                    <a href="#" class="dropdown-item">Third level link</a>
                                    <a href="#" class="dropdown-item">Third level link</a>
                                    <a href="#" class="dropdown-item">Third level link</a>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item">Second level link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdown sizing -->



    <!-- Dark menu title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Dark dropdown menu
        </h6>
        <span class="text-muted d-block">Dropdown menu in dark theme. Also supports custom background colors</span>
    </div>
    <!-- /dark menu title -->


    <!-- Dark dropdowns -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dark dropdown menu</h6>
                <p class="mb-3">Opt into darker dropdowns to match a dark navbar or custom style by adding <code>.dropdown-menu-dark</code> to the menu container</p>

                <div class="dropdown-menu dropdown-menu-dark" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more separated line</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Disabled menu items</h6>
                <p class="mb-3">Add <code>.disabled</code> to menu items with <code>.dropdown-item</code> class in the dropdown to style them as disabled items</p>

                <div class="dropdown-menu dropdown-menu-dark" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item disabled">Disabled item</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more separated line</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Active menu item</h6>
                <p class="mb-3">Add <code>.active</code> to menu items with <code>.dropdown-item</code> class in the dropdown to style them as active items</p>

                <div class="dropdown-menu dropdown-menu-dark" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item active">Active item</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more separated line</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /dark dropdowns -->

</div>
<!-- /content area -->

@endsection
