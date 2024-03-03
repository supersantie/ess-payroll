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

                    <button type="button" class="btn btn-success btn-labeled btn-labeled-start" id="timeIn">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-fingerprint-simple"></i>
                        </span>
                        Time In
                    </button>

                    <button type="button" class="btn btn-danger btn-labeled btn-labeled-start" id="timeOut">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-fingerprint-simple"></i>
                        </span>
                        Time Out
                    </button>

                    <button type="button" class="btn btn-info btn-labeled btn-labeled-start" id="overtimeIn" disabled>
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-fingerprint-simple"></i>
                        </span>
                        Overtime In
                    </button>

                    <button type="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="overtimeOut"
                        disabled>
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-fingerprint-simple"></i>
                        </span>
                        Overtime Out
                    </button>

                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start" id="release_payroll">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-download"></i>
                        </span>
                        Export Sheet
                    </button>

                </div>
            </div>

            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th data-orderable="false" class="text-center">
                            <input type="checkbox" class="form-check-input" id="cc_li_c">
                        </th>
                        <th>Date</th>
                        <th class="text-center">Time In</th>
                        <th class="text-center">Time Out</th>
                        <th class="text-center">Working Hours</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Payroll Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendances as $item)
                        <tr>
                            <th data-orderable="false" class="text-center">
                                <input type="checkbox" class="form-check-input" id="cc_li_c">
                            </th>
                            <td>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                            <td class="text-center">{{ $item->time_in }}</td>
                            <td class="text-center">{{ $item->time_out ?? '--' }}</td>
                            <td class="text-center">{{ $item->working_hours ?? '--' }}</td>
                            <td class="text-center">
                                @if ($statusColors[$item->status])
                                    <span
                                        class="badge {{ $statusColors[$item->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($item->status) }}</span>
                                @else
                                    --
                                @endif

                            </td>
                            <td class="text-center"><span
                                    class="badge {{ $statusColors[$item->payroll_status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($item->payroll_status) }}</span>
                            </td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end ">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-pdf me-2"></i>
                                                Export to .pdf
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-csv me-2"></i>
                                                Export to .csv
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-doc me-2"></i>
                                                Export to .doc
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
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

    <script>
        $(function() {

            $("#timeIn").on('click', function() {
                // Show a SWAL that asks if the user is sure
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to record the time in?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success', // Bootstrap success button class
                    cancelButtonClass: 'btn btn-danger', // Bootstrap danger button class
                    confirmButtonText: 'Yes, record it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If true then submit an ajax call.
                        $.ajax({
                            url: "{{ route('tna.store') }}",
                            method: "POST",
                            data: {
                                _token: '{{ csrf_token() }}',
                                attendance_type: 'Time In'
                            },
                            success: function(response) {
                                // Handle the success response
                                Swal.fire({
                                    title: 'Recorded!',
                                    text: 'Your time in has been successfully recorded.', // Display error message received from server
                                    icon: 'success',
                                    confirmButtonClass: 'btn btn-primary',
                                    confirmButtonText: 'Close'
                                });
                                // You can add any further actions you need to perform after a successful AJAX call
                            },
                            error: function(xhr, status, error) {
                                // Handle any errors that occur during the AJAX call
                                var errorMessage = xhr.responseJSON
                                    .error; // Extract error message from JSON response
                                Swal.fire({
                                    title: 'Error!',
                                    text: errorMessage, // Display error message received from server
                                    icon: 'error',
                                    confirmButtonClass: 'btn btn-primary',
                                    confirmButtonText: 'Close'
                                });
                            }
                        });
                    }
                });
            });



            $("#timeOut").on('click', function() {
                // Show a Swal that asks if the user is sure
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to record the time out?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success', // Bootstrap success button class
                    cancelButtonClass: 'btn btn-danger', // Bootstrap danger button class
                    confirmButtonText: 'Yes, record it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If true then submit an ajax call.
                        $.ajax({
                            url: "{{ route('tna.store') }}",
                            method: "POST",
                            data: {
                                _token: '{{ csrf_token() }}',
                                attendance_type: 'Time Out'
                            },
                            success: function(response) {
                                // Handle the success response
                                Swal.fire({
                                    title: 'Recorded!',
                                    text: 'Your time out has been successfully recorded.', // Display error message received from server
                                    icon: 'success',
                                    confirmButtonClass: 'btn btn-primary',
                                    confirmButtonText: 'Close'
                                });
                                // You can add any further actions you need to perform after a successful AJAX call
                            },
                            error: function(xhr, status, error) {
                                // Handle any errors that occur during the AJAX call
                                Swal.fire({
                                    title: 'Error!',
                                    text: errorMessage, // Display error message received from server
                                    icon: 'error',
                                    confirmButtonClass: 'btn btn-primary',
                                    confirmButtonText: 'Close'
                                });
                            }
                        });
                    }
                });
            });


        })
    </script>
@endsection
