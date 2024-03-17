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

        <!-- Widgets list -->
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <!-- User details (with sample pattern) -->
                <div class="card">
                    <div class="card-body bg-primary text-white text-center card-img-top"
                        style="background-image: url(assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle"
                                src="{{ session('ess_account')->avatar ? asset('storage/uploads/avatar/' . session('ess_account')->employee_code . '/' . basename(session('ess_account')->avatar)) : 'https://placehold.co/170' }}"
                                width="170" height="170" alt="">

                            <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-camera"></i>
                                </a>
                            </div>
                        </div>


                        <h6 class="mb-0">{{ session('info')->first_name . ' ' . session('info')->last_name }}</h6>
                        <span class="opacity-75">{{ session('info')->job_role }}</span>
                    </div>

                    <div class="card-body border-top-0">
                        <div class="d-sm-flex flex-sm-wrap mb-3">
                            <div class="fw-semibold">Full name:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0">{{ session('info')->first_name . ' ' . session('info')->last_name }}</div>
                        </div>

                        <div class="d-sm-flex flex-sm-wrap mb-3">
                            <div class="fw-semibold">Phone number:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0">--</div>
                        </div>

                        <div class="d-sm-flex flex-sm-wrap mb-3">
                            <div class="fw-semibold">Corporate Email:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0"><a href="#">{{ session('ess_account')->working_email }}</a></div>
                        </div>

                        <div class="d-sm-flex flex-sm-wrap">
                            <div class="fw-semibold">Personal Email:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0"><a href="#">{{ session('ess_account')->email }}</a></div>
                        </div>
                    </div>
                </div>
                <!-- /user details (with sample pattern) -->
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>

        </div>
        <!-- /widgets list -->

    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/uploaders/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/pickers/datepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/charts/pages/widgets_content.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#modalId').on('shown.bs.modal', function() {
                const videoElement = $('#video')[0]; // Get the video element using jQuery

                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(function(stream) {
                        videoElement.srcObject = stream;
                    })
                    .catch(function(error) {
                        console.error('Error accessing the camera:', error);
                    });
            });

            $('#modalId').on('hidden.bs.modal', function() {
                const videoElement = $('#video')[0];
                const stream = videoElement.srcObject;
                if (stream) {
                    const tracks = stream.getTracks();
                    tracks.forEach(track => track.stop());
                    videoElement.srcObject = null;
                }
            });
        });
    </script>
@endsection
