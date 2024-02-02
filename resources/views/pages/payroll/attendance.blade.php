@extends('layouts.master')
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
                <h5 class="mb-0">Attendance List</h5>

                <div class="d-flex gap-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-labeled btn-labeled-start dropdown-toggle"
                            data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-plus"></i>
                            </span>
                            Add Entry
                        </button>

                        <div class="dropdown-menu">
                            <a href="javascript:(0)" class="dropdown-item" id="modal_remote">Add manually</a>
                            <a href="#" class="dropdown-item">Upload a file...</a>
                            <a href="#" class="dropdown-item">Upload biometric file</a>
                            <a href="#" class="dropdown-item">Download CSV template</a>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="release_payroll"
                        disabled>
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-paper-plane-tilt"></i>
                        </span>
                        Release Payroll
                    </button>
                </div>
            </div>

            <div class="card-body">
                The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with
                a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method
                shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>.
                The <code>responsive</code> option can be given as a boolean value, or as an object with configuration
                options.
            </div>

            <div class="card-body">
                <div class="alert alert-info border-0 alert-dismissible fade show">
                    <span class="fw-semibold">Heads up!</span> You are currently viewing <a href="#"
                        class="alert-link">January 01 2024 to January 31 2024</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>

            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th data-orderable="false" class="text-center">
                            <input type="checkbox" class="form-check-input" id="cc_li_c">
                        </th>
                        <th>Date</th>
                        <th>Employee Code</th>
                        <th>Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th class="text-center">Working Hours</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                        @foreach ($item->attendances as $subItem)
                            <tr>
                                <th class="d-flex justify-content-center ">
                                    <input type="checkbox" class="form-check-input" data-employee-id="{{ $item->code }}">
                                </th>
                                <td>{{ $subItem->date }}</td>
                                <td><a href="#">{{ $item->code }}</a></td>
                                <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                <td>{{ $subItem->time_in }}</td>
                                <td>{{ $subItem->time_out }}</td>
                                <td class="text-center">{{ $subItem->working_hours }}</td>
                                <td><span
                                        class="badge {{ $statusColors[$subItem->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($subItem->status) }}</span>
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
    <script src="{{ URL::asset('assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/extra_sweetalert.js') }}"></script>
    {{-- <script src="{{URL::asset('assets/demo/pages/components_modals.js')}}"></script> --}}
    <script>
        const Modals = function() {

            const _componentModalBootbox = function() {
                if (typeof bootbox == 'undefined') {
                    console.warn('Warning - bootbox.min.js is not loaded.');
                    return;
                }

                const bbAlert = document.querySelector('#alert');
                if (bbAlert) {
                    bbAlert.addEventListener('click', function() {
                        bootbox.alert({
                            title: 'Check this out!',
                            message: 'Native alert dialog has been replaced with Bootbox alert box.'
                        });
                    });
                }
            };

            const _componentModalRemote = function() {
                function load(url, element) {
                    req = new XMLHttpRequest();
                    req.open("GET", url, false);
                    req.send(null);

                    element.innerHTML = req.responseText;
                }

                const remoteDataModal = document.getElementById('modal_remote');
                if (remoteDataModal) {
                    remoteDataModal.addEventListener('click', function() {
                        load("resources/views/layouts/modals/attendance_modal.blade.php", remoteDataModal
                            .querySelector('.modal-body'));
                    });
                }
            };

            return {
                initComponents: function() {
                    _componentModalBootbox();
                    _componentModalRemote();
                }
            }
        }();


        $(document).ready(function() {
            Modals.initComponents();

            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Get the header checkbox and all checkboxes in the table body
            const selectAllCheckbox = $('#cc_li_c');
            const checkboxes = $('.datatable-responsive tbody input[type="checkbox"]');
            const releasePayrollButton = $('#release_payroll');

            // Add an event listener to the header checkbox
            selectAllCheckbox.on('change', function() {
                // Loop through all checkboxes in the table body and set their checked property
                checkboxes.each(function() {
                    const employeeId = $(this).data('employeeId');

                    this.checked = selectAllCheckbox.prop('checked');

                    if (this.checked) {
                        console.log("Employee ID checked:", employeeId);
                    }
                });

                // Set the indeterminate state based on checked checkboxes in the table body
                updateIndeterminateState();

                releasePayrollButton.prop('disabled', checkboxes.filter(':checked').length === 0);
            });

            // Add an event listener to each checkbox in the table body
            checkboxes.on('change', function() {
                // If any checkbox in the body is unchecked, uncheck the header checkbox
                selectAllCheckbox.prop('checked', checkboxes.filter(':checked').length === checkboxes
                    .length);

                // Set the indeterminate state based on checked checkboxes in the table body
                updateIndeterminateState();

                // console.log($(this).val());

                releasePayrollButton.prop('disabled', checkboxes.filter(':checked').length === 0);

            });

            // Function to update the indeterminate state of the header checkbox
            function updateIndeterminateState() {
                const checkedCheckboxes = checkboxes.filter(':checked');
                selectAllCheckbox.prop('indeterminate', checkedCheckboxes.length > 0 && checkedCheckboxes.length <
                    checkboxes.length);
            }

            $('#release_payroll').on('click', function() {
                // Get the checked checkboxes and log their employee IDs
                const checkedCheckboxes = checkboxes.filter(':checked');
                const employeeIds = [];

                checkedCheckboxes.each(function() {
                    const employeeId = $(this).data('employeeId');
                    console.log("Employee ID checked for payroll release:", employeeId);
                    employeeIds.push(employeeId);
                });

                // Send the checked checkboxes' values through AJAX
                $.ajax({
                    url: '/attendance/release',
                    method: 'POST',
                    data: {
                        'name': 'test',
                        'employeeIds': employeeIds, // Include the array in the data
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

        });
    </script>
@endsection
