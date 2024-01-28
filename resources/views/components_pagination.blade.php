@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Pagination @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Pagination layouts title -->
    <div class="mb-3">
        <h6 class="mb-0">
            Pagination layouts
        </h6>
        <span class="text-muted d-block">Bordered seamless, flat and spaced pagination styles</span>
    </div>
    <!-- /pagination layouts title -->


    <!-- Basic pagination -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Bordered pagination</h6>
                <p class="mb-3">Basic example of default navigation style. All items have borders on all sides with negative margin on sides</p>

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat pagination</h6>
                <p class="mb-3">Remove borders and background color in default state by adding <code>.pagination-flat</code> to pagination container</p>

                <ul class="pagination pagination-flat">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Spaced pagination</h6>
                <p class="mb-3">Separate pagination items and add some spacing by adding <code>.pagination-spaced</code> to pagination container</p>

                <ul class="pagination pagination-spaced">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /basic pagination -->


    <!-- Rounded pagination -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Bordered rounded</h6>
                <p class="mb-3">Use <code>.rounded-start-pill</code> and <code>.rounded-end-pill</code> classes in the first and last <code>.page-link</code> to make them fully rounded</p>

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded-start-pill">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-end-pill">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat rounded</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> to all <code>.page-link</code> items to make buttons in flat pagination fully rounded. No extra classes required</p>

                <ul class="pagination pagination-flat">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded-pill">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded-pill">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Spaced rounded</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> to all pagination buttons. Optionally use <code>.px-0</code> in buttons with arrow to give them proportional size</p>

                <ul class="pagination pagination-spaced">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded-pill px-0">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded-pill">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded-pill px-0">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /rounded pagination -->



    <!-- Pagination styles -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Pagination styles
        </h6>
        <span class="text-muted d-block">Examples of optional styles that can be created with our utility classes</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Buttons with icon</h6>
                <p class="mb-3">Optional version with left and right pagination buttons, current page number, total pages and a link to the last page</p>

                <div class="pagination d-flex align-items-center">
                    <div class="page-item disabled">
                        <a href="#" class="page-link rounded-pill px-0">
                            <i class="ph-caret-left"></i>
                        </a>
                    </div>
                    <div class="px-3">
                        1 of <a href="#">12</a>
                    </div>
                    <div class="page-item">
                        <a href="#" class="page-link rounded-pill px-0">
                            <i class="ph-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Pagination toolbar</h6>
                <p class="mb-3">A simple toolbar with pagination, page and results counter. You can also use optional form controls to allow users to just to specific page</p>

                <div class="d-flex align-items-center">
                    <span class="text-muted me-auto">Showing 5 of 20 items</span>
                    <span class="text-muted me-3">1 of 4</span>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a href="#" class="page-link rounded-pill px-0">
                                <i class="ph-caret-left"></i>
                            </a>
                        </li>
                        <li class="page-item ms-1">
                            <a href="#" class="page-link rounded-pill px-0">
                                <i class="ph-caret-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Custom pagination example</h6>
                <p class="mb-3">Custom modification of flat pagination, where active page is always centered and links to the first and last pages have smaller size</p>

                <div class="d-flex">
                    <ul class="pagination pagination-flat">
                        <li class="page-item">
                            <a href="#" class="page-link text-muted fs-sm lh-sm rounded-pill">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link rounded-pill px-2">
                                <i class="ph-caret-left text-primary"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link bg-transparent border-transparent fw-semibold text-primary cursor-default rounded-pill">15</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link rounded-pill px-2">
                                <i class="ph-caret-right text-primary"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link text-muted fs-sm lh-sm rounded-pill">30</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Simple pager</h6>
                <p class="mb-3">If you need to show a simple paging with 2 buttons only, use pagination component without <code>.active</code> class in <code>.page-item</code> container</p>

                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link">&larr; &nbsp; Older</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">Newer &nbsp; &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Linked pager</h6>
                <p class="mb-3">Add <code>.pagination-linked</code> class to <code>.pagination</code> to give buttons a default link style with <code>primary</code> background in hover state</p>

                <ul class="pagination pagination-linked">
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&larr; &nbsp; Older</a>
                    </li>
                    <li class="page-item ms-1">
                        <a href="#" class="page-link rounded">Newer &nbsp; &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Dotted pagination</h6>
                <p class="mb-3">Pagination also support links without text. Use <code>.wmin-0</code> to reset min link width, <code>.rounded-pill</code> to round links and <code>.p-1</code> to give them the size</p>

                <div class="pagination pagination-spaced align-items-center">
                    <div class="page-item me-2">
                        <a href="#" class="page-link rounded-pill px-0">
                            <i class="ph-caret-left"></i>
                        </a>
                    </div>
                    <div class="page-item">
                        <a href="#" class="page-link wmin-0 rounded-pill p-1"></a>
                    </div>
                    <div class="page-item active">
                        <a href="#" class="page-link wmin-0 rounded-pill p-1"></a>
                    </div>
                    <div class="page-item">
                        <a href="#" class="page-link wmin-0 rounded-pill p-1"></a>
                    </div>
                    <div class="page-item">
                        <a href="#" class="page-link wmin-0 rounded-pill p-1"></a>
                    </div>
                    <div class="page-item">
                        <a href="#" class="page-link wmin-0 rounded-pill p-1"></a>
                    </div>
                    <div class="page-item ms-2">
                        <a href="#" class="page-link rounded-pill px-0">
                            <i class="ph-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Borderless pagination</h6>
                <p class="mb-3">If you add <code>.border-transparent</code> and <code>.mx-0</code> to all page links, pagination will be displayed without borders. Works with all pagination styles</p>

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a href="#" class="page-link border-transparent mx-0">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link border-transparent mx-0">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link border-transparent mx-0">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link border-transparent mx-0">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link border-transparent mx-0">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">With dropdown menu</h6>
                <p class="mb-3">Pagination items also support dropdown menu to display a list of page number ranges. Dropdown toggler can be used with text or icon</p>

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item dropdown">
                        <a href="#" class="page-link" data-bs-toggle="dropdown">...</a>
                        <div class="dropdown-menu dropdown-menu-end wmin-0 w-auto">
                            <a href="#" class="dropdown-item active">1-10</a>
                            <a href="#" class="dropdown-item">11-20</a>
                            <a href="#" class="dropdown-item">21-30</a>
                            <a href="#" class="dropdown-item">31-40</a>
                            <a href="#" class="dropdown-item">41-50</a>
                        </div>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Buttons with icon</h6>
                <p class="mb-3">An example of a basic use of input fields in pagination, to allow users to manually enter page number. Also supports form selects</p>

                <div class="pagination d-flex align-items-center">
                    <div class="page-item disabled">
                        <a href="#" class="page-link rounded-pill px-0">
                            <i class="ph-caret-left"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center px-3">
                        <input type="text" class="form-control text-center" value="10" size="2">
                        <span class="mx-2">of</span>
                        <a href="#">50</a>
                    </div>
                    <div class="page-item">
                        <a href="#" class="page-link rounded-pill px-0">
                            <i class="ph-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /pagination styles -->



    <!-- Pagination options title -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Pagination options
        </h6>
        <span class="text-muted d-block">Sizing and alignment options</span>
    </div>
    <!-- /pagination options title -->


    <!-- Pagination sizes -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Bordered pagination</h6>
                <p class="mb-3">Pagination supports 2 additional sizes - small and large. To use, add <code>.pagination-[lg|sm]</code> class to the base <code>.pagination</code> container</p>

                <ul class="pagination pagination-lg mb-3">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>

                <ul class="pagination mb-3">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>

                <ul class="pagination pagination-sm">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Flat pagination</h6>
                <p class="mb-3">To use optional sizes in flat pagination, add <code>.pagination-[lg|sm]</code> class to the base <code>.pagination.pagination-flat</code> container</p>

                <ul class="pagination pagination-flat pagination-lg mb-3">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>

                <ul class="pagination pagination-flat mb-3">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>

                <ul class="pagination pagination-flat pagination-sm">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Separated pagination</h6>
                <p class="mb-3">To use optional sizes in spaced pagination, add <code>.pagination-[lg|sm]</code> class to the base <code>.pagination.pagination-spaced</code> container</p>

                <ul class="pagination pagination-spaced pagination-lg mb-3">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>

                <ul class="pagination pagination-spaced mb-3">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>

                <ul class="pagination pagination-spaced pagination-sm">
                    <li class="page-item disabled">
                        <a href="#" class="page-link rounded">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link rounded">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link rounded">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /pagination sizes -->


    <!-- Pagination alignment -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Left alignment</h6>
                <p class="mb-3">Pagination is a flex container, which means you can use our flex utility classes to control alignment. By default pagination is aligned to the left</p>

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Center alignment</h6>
                <p class="mb-3">Use <code>.justify-content-center</code> utility class in <code>.pagination</code> container to center it horizontally. Works with all pagination styles and sizes</p>

                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Right alignment</h6>
                <p class="mb-3">Use <code>.justify-content-end</code> utility class in <code>.pagination</code> container to align it to the right. Works with all pagination styles and sizes</p>

                <ul class="pagination align-self-end">
                    <li class="page-item disabled">
                        <a href="#" class="page-link">&larr;</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">&rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /pagination alignment -->

</div>
<!-- /content area -->

@endsection
