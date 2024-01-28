@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECommerce @endslot
@slot('subtitle') Pricing Tables @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Pricing table -->
    <div class="mb-3">
        <h6 class="mb-0">Table view</h6>
        <span class="text-muted">Simple table with content</span>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered table-lg text-center">
                <thead>
                    <tr>
                        <th class="text-start">Choose a plan</th>
                        <th>
                            <h6 class="my-1">Basic</h6>
                            <h4 class="mb-0">
                                €25
                                <span class="fs-base fw-normal text-muted">/ month</span>
                            </h4>
                        </th>
                        <th>
                            <h6 class="my-1">Professional</h6>
                            <h4 class="mb-0">
                                €35
                                <span class="fs-base fw-normal text-muted">/ month</span>
                            </h4>
                        </th>
                        <th>
                            <h6 class="my-1">Business</h6>
                            <h4 class="mb-0">
                                €49
                                <span class="fs-base fw-normal text-muted">/ month</span>
                            </h4>
                        </th>
                        <th>
                            <h6 class="my-1">Enterprise</h6>
                            <h4 class="mb-0">
                                €60
                                <span class="fs-base fw-normal text-muted">/ month</span>
                            </h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start">Disk storage</td>
                        <td>25Gb</td>
                        <td>75Gb</td>
                        <td>150Gb</td>
                        <td>256Gb</td>
                    </tr>
                    <tr>
                        <td class="text-start">Monthly bandwidth</td>
                        <td>25GB</td>
                        <td>50GB</td>
                        <td>100GB</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td class="text-start">Domain names</td>
                        <td>1</td>
                        <td>10</td>
                        <td>20</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td class="text-start">Subdomains</td>
                        <td>5</td>
                        <td>15</td>
                        <td>50</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td class="text-start">Email accounts</td>
                        <td>10</td>
                        <td>30</td>
                        <td>50</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td class="text-start">Site builder</td>
                        <td><i class="ph-x-circle text-danger"></i></td>
                        <td><i class="ph-x-circle text-danger"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start">Backups</td>
                        <td><i class="ph-x-circle text-danger"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start">CPanel</td>
                        <td><i class="ph-x-circle text-danger"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start">24/7 support</td>
                        <td><i class="ph-x-circle text-danger"></i></td>
                        <td><i class="ph-x-circle text-danger"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start">30 days money back</td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                        <td><i class="ph-check-circle text-success"></i></td>
                    </tr>

                    <tr class="table-border-solid">
                        <td> </td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                <i class="ph-shopping-cart me-2"></i>
                                Order
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                <i class="ph-shopping-cart me-2"></i>
                                Order
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                <i class="ph-shopping-cart me-2"></i>
                                Order
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                <i class="ph-shopping-cart me-2"></i>
                                Order
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /pricing table -->


    <!-- Pricing table two -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Seamless cards</h6>
        <span class="text-muted">Display as a card group</span>
    </div>

    <div class="card-group mb-3">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="mt-2 mb-3">Personal</h4>
                <h1 class="display-6 fw-semibold"><span class="me-1">$</span>29</h1>
                <div class="mb-3">
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>25GB</strong> space
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>2GB</strong> RAM
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>1</strong> domain
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>5</strong> emails
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>Daily</strong> backups
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>24/7</strong> support
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-light">Purchase</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body text-center">
                <h4 class="mt-2 mb-3">Business</h4>
                <h1 class="display-6 fw-semibold"><span class="me-1">$</span>39</h1>
                <div class="mb-3">
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>75GB</strong> space
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>4GB</strong> RAM
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>10</strong> domains
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>15</strong> emails
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>Daily</strong> backups
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>24/7</strong> support
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-indigo">Purchase</a>
            </div>

            <div class="ribbon-container">
                <div class="ribbon bg-indigo text-white text-uppercase fs-sm fw-semibold shadow-sm">Top value</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body text-center">
                <h4 class="mt-2 mb-3">Corporate</h4>
                <h1 class="display-6 fw-semibold"><span class="me-1">$</span>49</h1>
                <div class="mb-3">
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>150GB</strong> space
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>8GB</strong> RAM
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>20</strong> domains
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>50</strong> emails
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>Daily</strong> backups
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>24/7</strong> support
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-light">Purchase</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body text-center">
                <h4 class="mt-2 mb-3">Enterprise</h4>
                <h1 class="display-6 fw-semibold"><span class="me-1">$</span>59</h1>
                <div class="border-bottom py-2">
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>256GB</strong> space
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>16GB</strong> RAM
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>Unlimited</strong> domains
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>Unlimited</strong> emails
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>Daily</strong> backups
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <div class="my-1">
                            <strong>24/7</strong> support
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-light">Purchase</a>
            </div>
        </div>
    </div>
    <!-- /pricing table two -->


    <!-- Pricing table one -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Separate boxes</h6>
        <span class="text-muted">Pricing tables grid</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Personal</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>29</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>25GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>2GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>1</strong> domain
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>5</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light">Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Business</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>39</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>75GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>4GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>10</strong> domains
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>15</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light">Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Corporate</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>49</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>150GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>8GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>20</strong> domains
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>50</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-danger">Purchase</a>
                </div>

                <div class="ribbon-container">
                    <div class="ribbon bg-danger text-white text-uppercase fs-sm fw-semibold shadow-sm">Popular</div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Enterprise</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>59</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>256GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>16GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Unlimited</strong> domains
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Unlimited</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light">Purchase</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /pricing table one -->


    <!-- Color variations -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Color highlight</h6>
        <span class="text-muted">Custom color background</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Personal</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>29</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>25GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>2GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>1</strong> domain
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>5</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-pink">Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Business</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>39</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>75GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>4GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>10</strong> domains
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>15</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-pink">Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card bg-pink text-white">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Corporate</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>49</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>150GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>8GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>20</strong> domains
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>50</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dark">Purchase</a>
                </div>

                <div class="ribbon-container">
                    <div class="ribbon bg-white text-black text-uppercase fs-sm fw-semibold shadow-sm">Popular</div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="mt-2 mb-3">Enterprise</h4>
                    <h1 class="display-6 fw-semibold"><span class="me-1">$</span>59</h1>
                    <div class="mb-3">
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>256GB</strong> space
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>16GB</strong> RAM
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Unlimited</strong> domains
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Unlimited</strong> emails
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>Daily</strong> backups
                            </div>
                        </div>
                        <div class="border-bottom py-2">
                            <div class="my-1">
                                <strong>24/7</strong> support
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-pink">Purchase</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /color variations -->

</div>
<!-- /content area -->

@endsection
