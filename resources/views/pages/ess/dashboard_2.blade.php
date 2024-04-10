@extends('layouts.ess-master')
@section('content')
    @component('components.ess-breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('subtitle')
            Welcome to Workfolio ESS
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="row justify-content-center align-items-center g-2 mb-4">
            <div class="col"></div>
            <div class="col text-center ">
                <img src="{{ URL::asset('assets/images/logo_icon.svg') }}" alt="" height="150" width="150">
                <h1>Welcome, {{ session('info')->first_name }}!</h1>
                <p class="fs-1">What would you like to do?</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12 col-md">
                <div class="card card-body">
                    <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
                        <i
                            class="ph-calendar bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0"></i>

                        <div class="flex-fill text-nowrap ">
                            <h6 class="mb-0">Time & Attendance</h6>
                            <a href="{{ route('tna.index') }}">Visit</a> Time & Attendance and manage it.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card card-body">
                    <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
                        <i
                            class="ph-scroll bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0"></i>

                        <div class="flex-fill text-nowrap ">
                            <h6 class="mb-0">My Payslips</h6>
                            <a href="#">Visit</a> My Payslips to view and download.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card card-body">
                    <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
                        <i
                            class="ph-calendar-blank bg-pink bg-opacity-10 text-pink lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0"></i>

                        <div class="flex-fill text-nowrap ">
                            <h6 class="mb-0">Appointments</h6>
                            <a href="#">Book an Appointment</a> in Checkups or Counselling.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12 col-md">
                <div class="card card-body">
                    <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
                        <i
                            class="ph-coins bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0"></i>

                        <div class="flex-fill text-nowrap">
                            <h6 class="mb-0">Reimbursements</h6>
                            <a href="#">File a reimbursement</a> and wait for the management approval.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card card-body">
                    <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
                        <i
                            class="ph-newspaper-clipping bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0"></i>

                        <div class="flex-fill text-nowrap">
                            <h6 class="mb-0">Request Certificates</h6>
                            <a href="#">Request a cerficates</a> for your personal requirements.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card card-body">
                    <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
                        <i
                            class="ph-check-square bg-info bg-opacity-10 text-info lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0"></i>

                        <div class="flex-fill text-nowrap">
                            <h6 class="mb-0">Survey & Feedbacks</h6>
                            <a href="#">Send a feedback</a> for the company growth.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button dropdowns title -->
        <div class="mb-3 py-2 d-flex align-items-center justify-content-between ">
            <div>
                <h6 class="mb-0">
                    Browse Articles
                </h6>
                <span class="text-muted d-block">Enjoy and have a learning experience by reading our articles.</span>
            </div>

            <a href="#" class="link-primary">See All</a>
        </div>
        <!-- /button dropdowns title -->


        <div class="row justify-content-center align-items-start g-2">
            @php $count = 0; @endphp
            @foreach ($articles as $article)
                @if ($count < 4)
                    <div class="col-12 col-md">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid" src="{!! URL::asset('assets/images/demo/flat/' . $loop->iteration . '.png') !!}" alt="">
                            </a>

                            <div class="card-body">
                                <h5 class="card-title">{{ $article->hwarticle_title }}</h5>
                                <p class="card-text">By default, cards are designed to showcase linked images with minimal
                                    required markup, including default class for rounded corners.</p>
                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-labeled btn-labeled-start">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="ph-link"></i>
                                    </span>
                                    Read the article
                                </button>
                            </div>
                        </div>
                    </div>
                    @php $count++; @endphp
                @endif
            @endforeach
        </div>

        <!-- Button dropdowns title -->
        <div class="mb-3 py-2">
            <h6 class="mb-0">
                Browse Programs
            </h6>
            <span class="text-muted d-block">Be part of our program and show your communication with your
                co-workers.</span>
        </div>
        <div class="row justify-content-center align-items-start g-2">
            @php $count = 0; @endphp
            @foreach ($programs as $program)
                @if ($count < 4)
                    <div class="col-12 col-md">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid" src="{!! URL::asset('assets/images/demo/flat/' . $loop->iteration . '.png') !!}" alt="">
                            </a>

                            <div class="card-body">
                                <h5 class="card-title">{{ $program->hwprogram_name }}</h5>
                                <p class="card-text">By default, cards are designed to showcase linked images with minimal
                                    required markup, including default class for rounded corners.</p>
                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-labeled btn-labeled-start">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="ph-link"></i>
                                    </span>
                                    Read the article
                                </button>
                            </div>
                        </div>
                    </div>
                    @php $count++; @endphp
                @endif
            @endforeach
        </div>

    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/uploaders/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/pickers/datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/charts/pages/widgets_content.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
@endsection
