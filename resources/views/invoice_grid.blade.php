@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Invoices @endslot
@slot('subtitle') Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="flex-1 order-2 order-lg-1">

            <!-- Filter toolbar -->
            <div class="navbar navbar-expand-lg border rounded py-1 mb-3">
                <div class="container-fluid">
                    <div class="text-center d-lg-none w-100">
                        <button type="button" class="navbar-toggler dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#navbar-filter">
                            <i class="ph-funnel me-2"></i>
                            Filters
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-filter">
                        <span class="navbar-text d-inline-flex align-items-center me-3">
                            <i class="ph-funnel me-2"></i>
                            Filter:
                        </span>

                        <ul class="navbar-nav flex-wrap">
                            <li class="nav-item dropdown">
                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                                    By date
                                </a>

                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Show all</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Today</a>
                                    <a href="#" class="dropdown-item">Yesterday</a>
                                    <a href="#" class="dropdown-item">This week</a>
                                    <a href="#" class="dropdown-item">This month</a>
                                    <a href="#" class="dropdown-item">This year</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown ms-lg-1">
                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                                    By status
                                </a>

                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Show all</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Open</a>
                                    <a href="#" class="dropdown-item">On hold</a>
                                    <a href="#" class="dropdown-item">Resolved</a>
                                    <a href="#" class="dropdown-item">Closed</a>
                                    <a href="#" class="dropdown-item">Duplicate</a>
                                    <a href="#" class="dropdown-item">Invalid</a>
                                    <a href="#" class="dropdown-item">Wontfix</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown ms-lg-1">
                                <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
                                    By priority
                                </a>

                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Show all</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Highest</a>
                                    <a href="#" class="dropdown-item">High</a>
                                    <a href="#" class="dropdown-item">Normal</a>
                                    <a href="#" class="dropdown-item">Low</a>
                                </div>
                            </li>
                        </ul>

                        <span class="navbar-text d-inline-flex align-items-center me-3 ms-lg-auto">
                            <i class="ph-arrows-down-up me-2"></i>
                            Sorting:
                        </span>

                        <ul class="navbar-nav flex-wrap">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon active rounded">
                                    <i class="ph-sort-ascending"></i>
                                    <span class="d-lg-none ms-2">Ascending</span>
                                </a>
                            </li>

                            <li class="nav-item ms-lg-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                    <i class="ph-sort-descending"></i>
                                    <span class="d-lg-none ms-2">Descending</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /filter toolbar -->


            <!-- Invoice grid -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Leonardo Fellini</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0028</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/01/25</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$8,750</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/02/25</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Rebecca Manes</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0027</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/24</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$5,100</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/24</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>James Alexander</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0026</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/23</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$12,500</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-primary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Pending</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/23</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Jeremy Victorino</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0025</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/22</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$1,950</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Skrill</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-secondary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">On hold</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/22</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Margo Baker</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0024</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/21</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$2,000</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-warning fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Canceled</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/21</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Beatrix Diaz</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0023</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/20</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$750</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Payoneer</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/20</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center text-muted content-divider mb-3">
                <span class="p-2">Yesterday</span>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Richard Vango</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0022</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/19</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$6,120</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/19</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Will Baker</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0021</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/18</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$3,500</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/18</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Joseph Mills</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0020</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/17</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$4,950</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/17</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Buzz Brenson</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0019</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/16</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$900</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Skrill</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-primary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Pending</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/16</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Zachary Willson</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0018</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/15</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$1,140</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-secondary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">On hold</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/15</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Bastian Miller</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0017</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/14</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$7,500</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-warning fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Canceled</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/14</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>William Samuel</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0016</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/13</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$2,300</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-primary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Pending</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/13</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Monica Smith</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0015</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/12</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$3,700</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Payoneer</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-primary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Pending</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/12</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center text-muted content-divider mb-3">
                <span class="p-2">March 15, 2022</span>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Jordana Miles</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0014</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/11</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$5,000</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Payoneer</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/11</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>John Craving</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0013</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/10</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$12,000</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/10</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>James Basel</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0012</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/09</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$9,000</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-secondary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">On hold</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/09</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Lucy Johnson</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0011</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/08</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$21,000</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Skrill</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/08</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Kinga Wallace</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0010</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/07</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$1,900</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Payoneer</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/07</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Anna Zuniga</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0009</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/06</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$18,200</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-primary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Pending</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/06</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Nicolette Grey</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0008</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/05</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$2,600</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-warning fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Canceled</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/05</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Vanessa Aurelius</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0007</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/04</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$10,800</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-secondary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">On hold</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/04</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center text-muted content-divider mb-3">
                <span class="p-2">March 14, 2022</span>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Jordano Diressimo</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0004</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/02/01</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$6,500</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/03/01</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Patrick Muller</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0003</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/01/28</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$12,700</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/02/28</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Marta Stewings</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0002</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/01/27</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$900</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Skrill</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/02/27</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <h6>Marko Bastic</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Invoice #: <a href="#">0001</a></li>
                                        <li>Issued on: <span class="fw-semibold">2022/01/26</span></li>
                                    </ul>
                                </div>

                                <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                    <h6>$10,000</h6>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Method: <span class="fw-semibold">Paypal</span></li>
                                        <li class="dropdown">
                                            Status:
                                            <a href="#" class="link-secondary fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">On hold</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Overdue
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-clock me-2"></i>
                                                    Pending
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-check-circle me-2"></i>
                                                    Paid
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item active">
                                                    <i class="ph-spinner-gap me-2"></i>
                                                    On hold
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-x me-2"></i>
                                                    Canceled
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span>
                                <i class="ph-bell-ringing me-1"></i>
                                Due:
                                <span class="fw-semibold">2022/02/26</span>
                            </span>

                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                    <i class="ph-arrow-square-out"></i>
                                </a>
                                <div class="d-inline-flex dropdown ms-3">
                                    <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-printer me-2"></i>
                                            Print invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-arrow-down me-2"></i>
                                            Download invoice
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-plus me-2"></i>
                                            Edit invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x me-2"></i>
                                            Remove invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /invoice grid -->


            <!-- Pagination -->
            <div class="d-flex justify-content-center pt-3 mb-3">
                <ul class="pagination pagination-flat">
                    <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link rounded-pill">1</a></li>
                    <li class="page-item"><a href="#" class="page-link rounded-pill">2</a></li>
                    <li class="page-item align-self-center"><span class="mx-2">...</span></li>
                    <li class="page-item"><a href="#" class="page-link rounded-pill">58</a></li>
                    <li class="page-item"><a href="#" class="page-link rounded-pill">59</a></li>
                    <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-right"></i></a></li>
                </ul>
            </div>
            <!-- /pagination -->

        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Invoice actions -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Actions</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-teal w-100 flex-column py-2 mb-2">
                                    <i class="ph-file-plus ph-2x mb-1"></i>
                                    New invoice
                                </button>

                                <button type="button" class="btn btn-purple w-100 flex-column py-2">
                                    <i class="ph-archive ph-2x mb-1"></i>
                                    Archive
                                </button>
                            </div>

                            <div class="col">
                                <button type="button" class="btn btn-warning w-100 flex-column py-2 mb-2">
                                    <i class="ph-chart-bar ph-2x mb-1"></i>
                                    Statistics
                                </button>

                                <button type="button" class="btn btn-primary w-100 flex-column py-2">
                                    <i class="ph-gear ph-2x mb-1"></i>
                                    Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /invoice actions -->


                <!-- Navigation -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Navigation</span>
                    </div>

                    <div class="nav nav-sidebar">
                        <li class="nav-item-header">
                            <div class="opacity-50">Main</div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-plus me-2"></i>
                                Create invoice
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-pencil me-2"></i>
                                Edit invoice
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-archive me-2"></i>
                                Acrhive
                                <span class="badge bg-secondary rounded-pill ms-auto">190</span>
                            </a>
                        </li>

                        <li class="nav-item-header">
                            <div class="opacity-50">Invoices</div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-files me-2"></i>
                                All invoices
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-file-plus me-2"></i>
                                Pending invoices
                                <span class="badge bg-primary rounded-pill ms-auto">16</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-check-circle me-2"></i>
                                Paid invoices
                                <span class="badge badge-success badge-pill ms-auto">50</span>
                            </a>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-gear me-2"></i>
                                Settings
                            </a>
                        </li>
                    </div>
                </div>
                <!-- /navigation -->


                <!-- Filter -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Filter</span>
                    </div>

                    <div class="sidebar-section-body">
                        <form action="#">
                            <div class="mb-3">
                                <div class="fw-semibold mb-3">Amount range:</div>
                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">$0 - $999</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">$1,000 - $1,999</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">$2,000 - $4,999</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">$5,000 - $9,999</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">$10,000 +</span>
                                </label>
                            </div>

                            <div class="mb-3">
                                <div class="fw-semibold mb-3">Payment method:</div>
                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Wire transfer</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Paypal</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Payoneer</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Skrill</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Cash</span>
                                </label>
                            </div>

                            <div class="mb-3">
                                <div class="fw-semibold mb-3">Invoice status:</div>
                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Overdue</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">On hold</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Pending</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Paid</span>
                                </label>

                                <label class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" checked>
                                    <span class="form-check-label">Canceled</span>
                                </label>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <button type="reset" class="btn btn-light w-100 btn-sm">Reset</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary w-100 btn-sm">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /filter -->


                <!-- Latest updates -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Latest updates</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                    <i class="ph-check"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <a href="#">Richard Vango</a> paid invoice #0020
                                <div class="fs-sm text-muted mt-1">4 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-secondary bg-opacity-10 text-secondary lh-1 rounded-pill p-2">
                                    <i class="ph-infinity"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                Status of invoice <a href="#">#0029</a> has been changed to "On hold"
                                <div class="fs-sm text-muted mt-1">36 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                    <i class="ph-check"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <a href="#">Chris Arney</a> paid invoice #0031 with Paypal
                                <div class="fs-sm text-muted mt-1">2 hours ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-danger bg-opacity-10 text-danger lh-1 rounded-pill p-2">
                                    <i class="ph-x"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                Invoice <a href="#">#0041</a> has been canceled
                                <div class="fs-sm text-muted mt-1">Apr 28, 21:39</div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3">
                                <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                    <i class="ph-plus"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                New invoice #0029 has been sent to <a href="#">Beatrix Diaz</a>
                                <div class="fs-sm text-muted mt-1">Apr 20, 21:39</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /latest updates -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /right sidebar component -->

    </div>
    <!-- /inner container -->

</div>
<!-- /content area -->

@endsection
