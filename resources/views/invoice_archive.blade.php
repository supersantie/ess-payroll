@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Invoices @endslot
@slot('subtitle') Archive @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Invoice archive -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Invoice archive</h5>
        </div>

        <table class="table invoice-archive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Period</th>
                    <th>Issued to</th>
                    <th>Status</th>
                    <th>Issue date</th>
                    <th>Due date</th>
                    <th>Amount</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#0025</td>
                    <td>February 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Rebecca Manes</a>
                        <div class="fs-sm text-muted">Payment method: Skrill</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold" selected>On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        April 18, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Mar 16, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$17,890</div>
                        <span class="fs-sm text-muted">VAT $4,890</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0024</td>
                    <td>February 2015</td>
                    <td>
                        <a href="#" class="fw-bold">James Alexander</a>
                        <div class="fs-sm text-muted">Payment method: Wire transfer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        April 17, 2015
                    </td>
                    <td>
                        <span class="badge bg-warning">5 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$2,769</div>
                        <span class="fs-sm text-muted">VAT $2,839</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0023</td>
                    <td>February 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Jeremy Victorino</a>
                        <div class="fs-sm text-muted">Payment method: Payoneer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        April 17, 2015
                    </td>
                    <td>
                        <span class="badge bg-primary">27 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$1,500</div>
                        <span class="fs-sm text-muted">VAT $1,984</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0022</td>
                    <td>January 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Margo Baker</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel" selected>Canceled</option>
                        </select>
                    </td>
                    <td>
                        January 15, 2015
                    </td>
                    <td>
                        <span class="badge bg-primary">12 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$4,580</div>
                        <span class="fs-sm text-muted">VAT $992</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0021</td>
                    <td>January 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Beatrix Diaz</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue" selected>Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        January 10, 2015
                    </td>
                    <td>
                        <span class="badge bg-danger">- 3 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$7,990</div>
                        <span class="fs-sm text-muted">VAT $1,294</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0020</td>
                    <td>January 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Richard Vango</a>
                        <div class="fs-sm text-muted">Payment method: Wire transfer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid" selected>Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        January 10, 2015
                    </td>
                    <td>
                        <span class="badge bg-secondary">On hold</span>
                    </td>
                    <td>
                        <div class="fw-bold">$12,120</div>
                        <span class="fs-sm text-muted">VAT $3,278</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0019</td>
                    <td>January 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Will Baker</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold" selected>On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        December 26, 2014
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Feb 25, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$5,390</div>
                        <span class="fs-sm text-muted">VAT $2,880</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0018</td>
                    <td>January 2015</td>
                    <td>
                        <a href="#" class="fw-bold">Joseph Mills</a>
                        <div class="fs-sm text-muted">Payment method: Skrill</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending" selected>Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        June 17, 2015
                    </td>
                    <td>
                        <span class="badge bg-secondary">On hold</span>
                    </td>
                    <td>
                        <div class="fw-bold">$10,280</div>
                        <span class="fs-sm text-muted">VAT $2,190</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0017</td>
                    <td>December 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Buzz Brenson</a>
                        <div class="fs-sm text-muted">Payment method: Wire transfer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending" selected>Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        May 6, 2015
                    </td>
                    <td>
                        <span class="badge bg-warning">2 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$43,320</div>
                        <span class="fs-sm text-muted">VAT $1,299</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0016</td>
                    <td>December 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Zachary Willson</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue" selected>Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        March 7, 2015
                    </td>
                    <td>
                        <span class="badge bg-primary">15 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$7,100</div>
                        <span class="fs-sm text-muted">VAT $1,450</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0015</td>
                    <td>December 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Bastian Miller</a>
                        <div class="fs-sm text-muted">Payment method: Payoneer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid" selected>Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        March 23, 2015
                    </td>
                    <td>
                        <span class="badge bg-warning">6 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$1,030</div>
                        <span class="fs-sm text-muted">VAT $229</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0014</td>
                    <td>December 2014</td>
                    <td>
                        <a href="#" class="fw-bold">William Samuel</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel" selected>Canceled</option>
                        </select>
                    </td>
                    <td>
                        March 2, 2015
                    </td>
                    <td>
                        <span class="badge bg-secondary">On hold</span>
                    </td>
                    <td>
                        <div class="fw-bold">$800</div>
                        <span class="fs-sm text-muted">VAT $189</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0013</td>
                    <td>November 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Monica Smith</a>
                        <div class="fs-sm text-muted">Payment method: Wire transfer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending" selected>Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        February 25, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Feb 15, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$6,300</div>
                        <span class="fs-sm text-muted">VAT $1,200</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0012</td>
                    <td>November 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Jordana Miles</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        February 26, 2015
                    </td>
                    <td>
                        <span class="badge bg-primary">12 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$2,200</div>
                        <span class="fs-sm text-muted">VAT $689</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0011</td>
                    <td>November 2014</td>
                    <td>
                        <a href="#" class="fw-bold">John Craving</a>
                        <div class="fs-sm text-muted">Payment method: Payoneer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        May 9, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Jan 28, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$2,600</div>
                        <span class="fs-sm text-muted">VAT $370</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0010</td>
                    <td>November 2014</td>
                    <td>
                        <a href="#" class="fw-bold">James Basel</a>
                        <div class="fs-sm text-muted">Payment method: Wire transfer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue" selected>Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        June 1, 2015
                    </td>
                    <td>
                        <span class="badge bg-warning">5 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$6,800</div>
                        <span class="fs-sm text-muted">VAT $2,118</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0009</td>
                    <td>November 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Lucy Johnson</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        April 10, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Jan 17, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$900</div>
                        <span class="fs-sm text-muted">VAT $199</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0008</td>
                    <td>October 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Kinga Wallace</a>
                        <div class="fs-sm text-muted">Payment method: Skrill</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending" selected>Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        April 12, 2015
                    </td>
                    <td>
                        <span class="badge bg-primary">12 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$1,200</div>
                        <span class="d-block fs-sm text-muted font-weight-normal">VAT $298</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0007</td>
                    <td>October 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Anna Zuniga</a>
                        <div class="fs-sm text-muted">Payment method: Payoneer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        March 29, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Jan 14, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$13,000</div>
                        <span class="fs-sm text-muted">VAT $4,290</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0006</td>
                    <td>October 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Nicolette Grey</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending" selected>Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        February 23, 2015
                    </td>
                    <td>
                        <span class="badge bg-secondary">On hold</span>
                    </td>
                    <td>
                        <div class="fw-bold">$5,200</div>
                        <span class="fs-sm text-muted">VAT $1,300</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0005</td>
                    <td>October 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Vanessa Aurelius</a>
                        <div class="fs-sm text-muted">Payment method: Wire transfer</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        January 10, 2015
                    </td>
                    <td>
                        <span class="badge bg-warning">9 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$3,000</div>
                        <span class="fs-sm text-muted">VAT $789</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0004</td>
                    <td>October 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Hanna Walden</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        May 2, 2015
                    </td>
                    <td>
                        <span class="badge bg-primary">20 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$2,830</div>
                        <span class="fs-sm text-muted">VAT $600</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0003</td>
                    <td>September 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Dori Laperriere</a>
                        <div class="fs-sm text-muted">Payment method: Skrill</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold" selected>On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        May 1, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Jan 10, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$12,850</div>
                        <span class="fs-sm text-muted">VAT $3,590</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0002</td>
                    <td>September 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Jordano Diressimo</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue">Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid" selected>Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        June 22, 2015
                    </td>
                    <td>
                        <span class="badge bg-success">Paid on Jan 9, 2015</span>
                    </td>
                    <td>
                        <div class="fw-bold">$10,900</div>
                        <span class="fs-sm text-muted">VAT $3,690</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>

                <tr>
                    <td>#0001</td>
                    <td>September 2014</td>
                    <td>
                        <a href="#" class="fw-bold">Patrick Muller</a>
                        <div class="fs-sm text-muted">Payment method: Paypal</div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="overdue" selected>Overdue</option>
                            <option value="hold">On hold</option>
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="invalid">Invalid</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        April 4, 2015
                    </td>
                    <td>
                        <span class="badge bg-warning">5 days</span>
                    </td>
                    <td>
                        <div class="fw-bold">$9,390</div>
                        <span class="fs-sm text-muted">VAT $2,548</span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-2">
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /invoice archive -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/invoice_archive.js')}}"></script>
@endsection
