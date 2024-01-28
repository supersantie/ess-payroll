@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Invoices @endslot
@slot('subtitle') Templates @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Invoice template -->
    <div class="card">
        <div class="card-header d-flex align-items-center py-0">
            <h5 class="py-3 mb-0">Invoice template</h5>
            <div class="d-inline-flex ms-auto">
                <button type="button" class="btn btn-light"><i class="ph-file-arrow-down me-2"></i> Save</button>
                <button type="button" class="btn btn-light ms-3"><i class="ph-printer me-2"></i> Print</button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center mt-2 mb-3">
                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" class="h-24px" alt="">
                            <h4 class="d-none d-sm-inline-block text-body mb-0 ms-2">Limitless</h4>
                        </div>

                        <ul class="list list-unstyled mt-2 mb-0">
                            <li>2269 Elba Lane</li>
                            <li>Paris, France</li>
                            <li>888-555-2311</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="text-sm-end mb-4">
                        <h4 class="text-primary mb-2 mt-lg-2">Invoice #49029</h4>
                        <ul class="list list-unstyled mb-0">
                            <li>Date: <span class="fw-semibold">January 12, 2015</span></li>
                            <li>Due date: <span class="fw-semibold">May 12, 2015</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-lg-flex flex-lg-wrap">
                <div class="mb-4 mb-lg-2">
                    <span class="text-muted">Invoice To:</span>
                    <ul class="list list-unstyled mb-0">
                        <li>
                            <h5 class="my-2">Rebecca Manes</h5>
                        </li>
                        <li><span class="fw-semibold">Normand axis LTD</span></li>
                        <li>3 Goodman Street</li>
                        <li>London E1 8BF</li>
                        <li>United Kingdom</li>
                        <li>888-555-2311</li>
                        <li><a href="#">rebecca@normandaxis.ltd</a></li>
                    </ul>
                </div>

                <div class="mb-2 ms-auto">
                    <span class="text-muted">Payment Details:</span>
                    <div class="d-flex flex-wrap wmin-lg-400">
                        <ul class="list list-unstyled mb-0">
                            <li>
                                <h5 class="my-2">Total Due:</h5>
                            </li>
                            <li>Bank name:</li>
                            <li>Country:</li>
                            <li>City:</li>
                            <li>Address:</li>
                            <li>IBAN:</li>
                            <li>SWIFT code:</li>
                        </ul>

                        <ul class="list list-unstyled text-end mb-0 ms-auto">
                            <li>
                                <h5 class="my-2">$8,750</h5>
                            </li>
                            <li><span class="fw-semibold">Profit Bank Europe</span></li>
                            <li>United Kingdom</li>
                            <li>London E1 8BF</li>
                            <li>3 Goodman Street</li>
                            <li><span class="fw-semibold">KFH37784028476740</span></li>
                            <li><span class="fw-semibold">BPT4E</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Rate</th>
                        <th>Hours</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="fw-bold">Create UI design model</div>
                            <span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
                        </td>
                        <td>$70</td>
                        <td>57</td>
                        <td><span class="fw-semibold">$3,990</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="fw-bold">Support tickets list doesn't support commas</div>
                            <span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
                        </td>
                        <td>$70</td>
                        <td>12</td>
                        <td><span class="fw-semibold">$840</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="fw-bold">Fix website issues on mobile</div>
                            <span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
                        </td>
                        <td>$70</td>
                        <td>31</td>
                        <td><span class="fw-semibold">$2,170</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-body border-top">
            <div class="d-lg-flex flex-lg-wrap">
                <div class="pt-2 mb-3">
                    <h6 class="mb-3">Authorized person</h6>
                    <div class="mb-3">
                        <img src="{{URL::asset('assets/images/signature.png')}}" width="150" alt="">
                    </div>

                    <ul class="list-unstyled text-muted">
                        <li>Themesbrand</li>
                        <li>2269 Elba Lane</li>
                        <li>Paris, France</li>
                        <li>888-555-2311</li>
                    </ul>
                </div>

                <div class="pt-2 mb-3 wmin-lg-400 ms-auto">
                    <h6 class="mb-3">Total due</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Subtotal:</th>
                                    <td class="text-end">$7,000</td>
                                </tr>
                                <tr>
                                    <th>Tax: <span class="fw-normal">(25%)</span></th>
                                    <td class="text-end">$1,750</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td class="text-end text-primary">
                                        <h5 class="fw-semibold">$8,750</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-primary">
                            Send invoice
                            <i class="ph-paper-plane-tilt ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</span>
        </div>
    </div>
    <!-- /invoice template -->

</div>
<!-- /content area -->

@endsection
