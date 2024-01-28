@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECommerce @endslot
@slot('subtitle') Customers @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Customers -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Customers</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="customers_chart"></div>
            </div>
        </div>

        <table class="table table-striped text-nowrap table-customers">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Registered</th>
                    <th>Email</th>
                    <th>Payment method</th>
                    <th>Orders history</th>
                    <th>Value</th>
                    <th>Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">James Alexander</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.12.30
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>July 12, 2016</td>
                    <td><a href="#">james@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">25 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">34 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 322.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Jeremy Victorino</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.03.05
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>September 4, 2016</td>
                    <td><a href="#">jeremy@interface.club</a></td>
                    <td>Cash on delivery</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">43 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">65 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 1,432.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Margo Baker</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.03.27
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>July 10, 2016</td>
                    <td><a href="#">margo@interface.club</a></td>
                    <td>Paypal</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">38 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">53 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 489.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Monica Smith</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.10.03
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>June 27, 2016</td>
                    <td><a href="#">monica@interface.club</a></td>
                    <td>Cash on delivery</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">15 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">235 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 940.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Jemmy Royle</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.11.25
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>January 2, 2016</td>
                    <td><a href="#">jemmy@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">23 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">65 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 772.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Ashlynn Ben</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.04.14
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>February 25, 2016</td>
                    <td><a href="#">ashlynn@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">23 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">75 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 662.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Ray Sammy</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.02.20
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>March 20, 2016</td>
                    <td><a href="#">ray@interface.club</a></td>
                    <td>Visa</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">42 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">542 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 499.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Brian Leslie</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.12.24
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>July 12, 2016</td>
                    <td><a href="#">brian@interface.club</a></td>
                    <td>Paypal</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">14 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">45 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 946.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Patrick Marilynn</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.09.28
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>October 4, 2016</td>
                    <td><a href="#">patrick@interface.club</a></td>
                    <td>Wire transfer</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">24 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">76 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 538.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Roland Cydney</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.02.12
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>August 1, 2016</td>
                    <td><a href="#">roland@interface.club</a></td>
                    <td>Paypal</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">27 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">236 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 432.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Deanna Joss</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.05.20
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>May 17, 2016</td>
                    <td><a href="#">deanna@interface.club</a></td>
                    <td>Visa</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">53 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">236 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 472.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Dawn Justin</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.06.17
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>May 12, 2016</td>
                    <td><a href="#">dawn@interface.club</a></td>
                    <td>Wire transfer</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">63 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">75 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 402.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Blondie Madison</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.01.26
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>March 26, 2016</td>
                    <td><a href="#">blondie@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">12 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">53 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 839.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Derryl Carrie</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.09.15
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>July 26, 2016</td>
                    <td><a href="#">derryl@interface.club</a></td>
                    <td>Visa</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">43 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">90 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 471.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Vincent Doris</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.02.23
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>June 25, 2016</td>
                    <td><a href="#">vincent@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">41 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">76 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 902.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Diantha Royston</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.02.04
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>September 25, 2016</td>
                    <td><a href="#">diantha@interface.club</a></td>
                    <td>Paypal</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">7 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">234 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 543.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face17.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Lilian Knox</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.05.18
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>March 5, 2016</td>
                    <td><a href="#">lilian@interface.club</a></td>
                    <td>Visa</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">8 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">34 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 2,472.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Toria Eveline</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.03.28
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>August 26, 2016</td>
                    <td><a href="#">toria@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">53 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">90 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 2,372.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face19.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Tiffany Willemina</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.07.29
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>November 19, 2016</td>
                    <td><a href="#">tiffany@interface.club</a></td>
                    <td>Paypal</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">21 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">42 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 1,930.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Trenton Alison</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.09.16
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>July 25, 2016</td>
                    <td><a href="#">trenton@interface.club</a></td>
                    <td>Wire transfer</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">5 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">29 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 830.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face21.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Brandon Gilbert</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.11.25
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>December 26, 2016</td>
                    <td><a href="#">brandon@interface.club</a></td>
                    <td>Paypal</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">15 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">89 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 903.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face22.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Troy Webster</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.10.24
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>May 29, 2016</td>
                    <td><a href="#">troy@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">12 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">53 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 394.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face23.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Elbert Cailyn</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.08.20
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>February 28, 2016</td>
                    <td><a href="#">elbert@interface.club</a></td>
                    <td>Visa</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">10 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">93 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 192.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Coen Grant</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.12.24
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>June 17, 2016</td>
                    <td><a href="#">coen@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">19 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">75 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 252.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="user_pages_profile_tabbed" class="d-block me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed" class="fw-semibold">Charles Elian</a>
                                <div class="fs-sm text-muted">
                                    Latest order: 2016.01.28
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>September 21, 2016</td>
                    <td><a href="#">charles@interface.club</a></td>
                    <td>MasterCard</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="#">3 orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="#">19 orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">&euro; 2,345.00</h6>
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="pl-0"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /customers -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/responsive.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/ecommerce_customers.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/ecommerce/customers.js')}}"></script>
@endsection
