@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECommerce @endslot
@slot('subtitle') Order History @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Orders history (static table) -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Orders history (static table)</h5>
        </div>

        <div class="table-responsive">
            <table class="table text-nowrap">
                <thead>
                    <tr>
                        <th colspan="2">Product name</th>
                        <th>Size</th>
                        <th>Colour</th> 
                        <th>Article number</th>
                        <th>Units</th>
                        <th>Price</th>
                        <th class="text-center" style="width: 20px;"><i class="ph-dots-three"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td colspan="7" class="fw-semibold">New orders</td>
                        <td class="text-end">
                            <span class="badge bg-secondary rounded-pill">24</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0" style="width: 45px;">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/1.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Fathom Backpack</a>
                            <div class="d-inline-flex align-items-center text-muted fs-sm">
                                <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                Processing
                            </div>
                        </td>
                        <td>34cm x 29cm</td>
                        <td>Orange</td>
                        <td>
                            <a href="#">1237749</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 79.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/2.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Mystery Air Long Sleeve T Shirt</a>
                            <div class="d-inline-flex align-items-center text-muted fs-sm">
                                <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                Processing
                            </div>
                        </td>
                        <td>L</td>
                        <td>Process Red</td>
                        <td>
                            <a href="#">345634</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 38.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/3.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Women’s Prospect Backpack</a>
                            <div class="d-inline-flex align-items-center text-muted fs-sm">
                                <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                Processing
                            </div>
                        </td>
                        <td>46cm x 28cm</td>
                        <td>Neu Nordic Print</td>
                        <td>
                            <a href="#">5739584</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 60.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/4.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Overlook Short Sleeve T Shirt</a>
                            <div class="d-inline-flex align-items-center text-muted fs-sm">
                                <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                Processing
                            </div>
                        </td>
                        <td>M</td>
                        <td>Gray Heather</td>
                        <td>
                            <a href="#">434450</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 35.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="7" class="fw-semibold">Shipped orders</td>
                        <td class="text-end">
                            <span class="badge bg-success rounded-pill">42</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/5.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Infinite Ride Liner</a>
                            <span class="fs-sm text-muted">10.04.2022</span>
                        </td>
                        <td>43</td>
                        <td>Black</td>
                        <td>
                            <a href="#">34739</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 210.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/6.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Custom Snowboard</a>
                            <span class="fs-sm text-muted">09.04.2022</span>
                        </td>
                        <td>151</td>
                        <td>Black/Blue</td>
                        <td>
                            <a href="#">5574832</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 600.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/7.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Kids' Day Hiker 20L Backpack</a>
                            <span class="fs-sm text-muted">08.04.2022</span>
                        </td>
                        <td>24cm x 29cm</td>
                        <td>Figaro Stripe</td>
                        <td>
                            <a href="#">6684902</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 55.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/8.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Lunch Sack</a>
                            <span class="fs-sm text-muted">07.04.2022</span>
                        </td>
                        <td>24cm x 20cm</td>
                        <td>Junk Food Print</td>
                        <td>
                            <a href="#">5574829</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 20.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/9.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Cambridge Jacket</a>
                            <span class="fs-sm text-muted">06.04.2022</span>
                        </td>
                        <td>XL</td>
                        <td>Nomad/Railroad</td>
                        <td>
                            <a href="#">475839</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 175.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/10.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Covert Jacket</a>
                            <span class="fs-sm text-muted">05.04.2022</span>
                        </td>
                        <td>XXL</td>
                        <td>Mocha/Glacier Sierra</td>
                        <td>
                            <a href="#">589439</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 126.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="7" class="fw-semibold">Cancelled orders</td>
                        <td class="text-end">
                            <span class="badge bg-danger rounded-pill">9</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/11.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Day Hiker Pinnacle 31L Backpack</a>
                            <span class="fs-sm text-muted">04.04.2022</span>
                        </td>
                        <td>42cm x 26.5cm</td>
                        <td>Blotto Ripstop</td>
                        <td>
                            <a href="#">5849305</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 130.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/12.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Kids' Gromlet Backpack</a>
                            <span class="fs-sm text-muted">03.04.2022</span>
                        </td>
                        <td>22cm x 20cm</td>
                        <td>Slime Camo Print</td>
                        <td>
                            <a href="#">4438495</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 35.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/13.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Tinder Backpack</a>
                            <span class="fs-sm text-muted">02.04.2022</span>
                        </td>
                        <td>42cm x 26cm</td>
                        <td>Dark Tide Twill</td>
                        <td>
                            <a href="#">4759383</a>
                        </td>
                        <td>2</td>
                        <td>
                            <h6 class="mb-0">&euro; 180.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pe-0">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/products/14.jpeg')}}" height="60" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="#" class="d-block fw-semibold">Almighty Snowboard Boot</a>
                            <span class="fs-sm text-muted">01.04.2022</span>
                        </td>
                        <td>45</td>
                        <td>Multiweave</td>
                        <td>
                            <a href="#">34432</a>
                        </td>
                        <td>1</td>
                        <td>
                            <h6 class="mb-0">&euro; 370.00</h6>
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-truck me-2"></i>
                                        Track parcel
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-wallet me-2"></i>
                                        Payment details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-warning-circle me-2"></i>
                                        Report problem
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /orders history (static table) -->


    <!-- Orders history (datatable) -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Orders history (Datatable)</h5>
        </div>

        <table class="table table-orders-history text-nowrap">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Product name</th>
                    <th>Size</th>
                    <th>Colour</th>
                    <th>Article number</th>
                    <th>Units</th>
                    <th>Price</th>
                    <th class="text-center"><i class="ph-dots-three"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. New orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/1.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Fathom Backpack</a>
                                <div class="d-inline-flex align-items-center text-muted fs-sm">
                                    <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                    Processing
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>34cm x 29cm</td>
                    <td>Orange</td>
                    <td>
                        <a href="#">1237749</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 79.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1. New orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/2.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Mystery Air Long Sleeve T Shirt</a>
                                <div class="d-inline-flex align-items-center text-muted fs-sm">
                                    <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                    Processing
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>L</td>
                    <td>Process Red</td>
                    <td>
                        <a href="#">345634</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 38.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1. New orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/3.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Women’s Prospect Backpack</a>
                                <div class="d-inline-flex align-items-center text-muted fs-sm">
                                    <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                    Processing
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>46cm x 28cm</td>
                    <td>Neu Nordic Print</td>
                    <td>
                        <a href="#">5739584</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 60.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1. New orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/4.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Overlook Short Sleeve T Shirt</a>
                                <div class="d-inline-flex align-items-center text-muted fs-sm">
                                    <span class="bg-secondary rounded-pill p-1 me-1"></span>
                                    Processing
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>M</td>
                    <td>Gray Heather</td>
                    <td>
                        <a href="#">434450</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 35.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>2. Shipped orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/5.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Infinite Ride Liner</a>
                                <span class="fs-sm text-muted">20.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>43</td>
                    <td>Black</td>
                    <td>
                        <a href="#">34739</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 210.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>2. Shipped orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/6.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Custom Snowboard</a>
                                <span class="fs-sm text-muted">19.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>151</td>
                    <td>Black/Blue</td>
                    <td>
                        <a href="#">5574832</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 600.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>2. Shipped orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/7.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Kids' Day Hiker 20L Backpack</a>
                                <span class="fs-sm text-muted">18.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>24cm x 29cm</td>
                    <td>Figaro Stripe</td>
                    <td>
                        <a href="#">6684902</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 55.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>2. Shipped orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/8.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Lunch Sack</a>
                                <span class="fs-sm text-muted">17.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>24cm x 20cm</td>
                    <td>Junk Food Print</td>
                    <td>
                        <a href="#">5574829</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 20.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>2. Shipped orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/9.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Cambridge Jacket</a>
                                <span class="fs-sm text-muted">16.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>XL</td>
                    <td>Nomad/Railroad</td>
                    <td>
                        <a href="#">475839</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 175.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>2. Shipped orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/10.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Covert Jacket</a>
                                <span class="fs-sm text-muted">15.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>XXL</td>
                    <td>Mocha/Glacier Sierra</td>
                    <td>
                        <a href="#">589439</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 126.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>3. Cancelled orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/11.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Day Hiker Pinnacle 31L Backpack</a>
                                <span class="fs-sm text-muted">14.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>42cm x 26.5cm</td>
                    <td>Blotto Ripstop</td>
                    <td>
                        <a href="#">5849305</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 130.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>3. Cancelled orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/12.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Kids' Gromlet Backpack</a>
                                <span class="fs-sm text-muted">13.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>22cm x 20cm</td>
                    <td>Slime Camo Print</td>
                    <td>
                        <a href="#">4438495</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 35.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>3. Cancelled orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/13.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Tinder Backpack</a>
                                <span class="fs-sm text-muted">12.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>42cm x 26cm</td>
                    <td>Dark Tide Twill</td>
                    <td>
                        <a href="#">4759383</a>
                    </td>
                    <td>2</td>
                    <td>
                        <h6 class="mb-0">&euro; 180.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>3. Cancelled orders</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/products/14.jpeg')}}" height="60" alt="">
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="d-block fw-semibold">Almighty Snowboard Boot</a>
                                <span class="fs-sm text-muted">11.05.2022</span>
                            </div>
                        </div>
                    </td>
                    <td>45</td>
                    <td>Multiweave</td>
                    <td>
                        <a href="#">34432</a>
                    </td>
                    <td>1</td>
                    <td>
                        <h6 class="mb-0">&euro; 370.00</h6>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Track parcel
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-arrow-down me-2"></i>
                                    Download invoice
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-wallet me-2"></i>
                                    Payment details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /orders history (datatable) -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="../../../assets/js/jquery/jquery.min.js"></script>
<script src="../../../assets/js/vendor/tables/datatables/datatables.min.js"></script>
<script src="../../../assets/js/vendor/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
<script src="../../../assets/js/vendor/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
<script src="../../../assets/js/vendor/tables/datatables/extensions/buttons.min.js"></script>
@endsection
@section('scripts')
<script src="../../../assets/demo/pages/ecommerce_orders_history.js"></script>
@endsection
