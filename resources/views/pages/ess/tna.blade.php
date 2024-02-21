@extends('layouts.ess-master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Attendance
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Your Time Log</h5>

                <div class="d-flex gap-2">

                    <button type="button" class="btn btn-success btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-fingerprint-simple"></i>
                        </span>
                        Time In
                    </button>

                    <button type="button" class="btn btn-danger btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-fingerprint-simple"></i>
                        </span>
                        Time Out
                    </button>

                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start" id="release_payroll">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-download"></i>
                        </span>
                        Export Sheet
                    </button>


                </div>
            </div>

            {{-- <div class="card-body">
                The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with
                a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method
                shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>.
                The <code>responsive</code> option can be given as a boolean value, or as an object with configuration
                options.
            </div> --}}

            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th data-orderable="false" class="text-center">
                            <input type="checkbox" class="form-check-input" id="cc_li_c">
                        </th>
                        <th>Date</th>
                        <th>Image Capture</th>
                        <th>IP Address</th>
                        <th>Location</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/extensions/responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/notifications/bootbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/forms/selects/select2.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/extra_sweetalert.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>
@endsection
