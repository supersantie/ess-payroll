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
                            <a href="javascript:(0)" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#addManuallyModal">Add manually</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#uploadFileModal">Upload a file...</a>
                            <a href="{{ asset('storage/templates/attendance-template-upload.xlsx') }}"
                                class="dropdown-item">Download CSV template</a>
                        </div>

                        {{-- Add manually modal --}}
                        <div class="modal fade" id="addManuallyModal" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">
                                            Add Manually
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form id="manualEntryForm">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                You are using the <code>manual entry</code>. But you have a choice to <a
                                                    href="" class="link-primary">Upload a file</a> to lessen the
                                                hassle.
                                            </div>
                                            <div class="mb-3 d-flex align-items-center  justify-content-between gap-2">
                                                <select data-placeholder="Select a employee..."
                                                    class="form-control select w-100" name="employee">
                                                    @foreach ($employees as $item)
                                                        <option value="{{ $item->code }}   ">
                                                            {{ $item->first_name . ' ' . $item->last_name }} </option>
                                                    @endforeach
                                                </select>
                                                <div class="d-flex align-items-center gap-2 w-100 ">
                                                    <button type="button" id="addRow"
                                                        class="btn btn-success btn-labeled btn-labeled-start flex-shrink-0 ">
                                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                            <i class="ph-plus"></i>
                                                        </span>
                                                        Add Row
                                                    </button>
                                                    <button type="button" id="clearAll"
                                                        class="btn btn-danger btn-labeled btn-labeled-start flex-shrink-0 ">
                                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                            <i class="ph-trash"></i>
                                                        </span>
                                                        Clear all
                                                    </button>
                                                </div>
                                            </div>
                                            <table class="w-100" id="manualAttendanceTable">
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">
                                                Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- Upload file modal --}}
                        <div class="modal fade" id="uploadFileModal" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document">
                                <form id="importExcelForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">
                                                Modal title
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Choose file</label>
                                                <input type="file" class="form-control" name="file" id=""
                                                    placeholder="" aria-describedby="fileHelpId" />
                                                <div id="fileHelpId" class="form-text">Help text</div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                This table stores attendance data for individuals, allowing tracking of their presence or absence in various
                events, classes, or meetings. It facilitates manual entry of attendance records, as well as import/export
                functionality for convenient data management. Additionally, it supports modification of attendance data to
                accommodate updates or corrections.
            </div>

            <div class="card-body">
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
                            <th>Payroll</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $item)
                            @foreach ($item->attendances as $subItem)
                                <tr>
                                    <th class="d-flex justify-content-center ">
                                        <input type="checkbox" class="form-check-input"
                                            data-employee-id="{{ $item->code }}">
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
                                    <td><span
                                        class="badge {{ $payrollStatusColors[$subItem->payroll_status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($subItem->payroll_status) }}</span>
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

            const checkboxes = $('.datatable-responsive tbody input[type="checkbox"]');
            // Function to initialize event listeners for checkboxes
            function initializeCheckboxEventListeners() {
                // Get the header checkbox and all checkboxes in the table body
                const selectAllCheckbox = $('#cc_li_c');
                const releasePayrollButton = $('#release_payroll');

                // Add an event listener to the header checkbox
                selectAllCheckbox.on('change', function() {
                    // Toggle the checked state of all checkboxes in the table body
                    $('.datatable-responsive tbody input[type="checkbox"]').prop('checked', $(this).prop(
                        'checked'));

                    // Set the indeterminate state based on checked checkboxes in the table body
                    updateIndeterminateState();

                    // Enable/disable the release payroll button based on the number of checked checkboxes
                    releasePayrollButton.prop('disabled', $(
                        '.datatable-responsive tbody input[type="checkbox"]:checked').length === 0);
                });

                // Add an event listener to each checkbox in the table body (using event delegation)
                $('.datatable-responsive tbody').on('change', 'input[type="checkbox"]', function() {
                    // Update the state of the header checkbox based on the checkboxes in the table body
                    selectAllCheckbox.prop('checked', $(
                        '.datatable-responsive tbody input[type="checkbox"]:checked').length === $(
                        '.datatable-responsive tbody input[type="checkbox"]').length);

                    // Set the indeterminate state based on checked checkboxes in the table body
                    updateIndeterminateState();

                    // Enable/disable the release payroll button based on the number of checked checkboxes
                    releasePayrollButton.prop('disabled', $(
                        '.datatable-responsive tbody input[type="checkbox"]:checked').length === 0);
                });

                // Function to update the indeterminate state of the header checkbox
                function updateIndeterminateState() {
                    const checkedCheckboxes = $('.datatable-responsive tbody input[type="checkbox"]:checked');
                    selectAllCheckbox.prop('indeterminate', checkedCheckboxes.length > 0 && checkedCheckboxes
                        .length <
                        $('.datatable-responsive tbody input[type="checkbox"]').length);
                }
            }

            // Initialize event listeners for checkboxes
            initializeCheckboxEventListeners();


            // Add an event listener to the release payroll button
            $('#release_payroll').on('click', function() {
                // Get all checkboxes within the DataTable
                const checkboxes = $('.datatable-responsive tbody input[type="checkbox"]');

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
                    url: '/payroll/store',
                    method: 'POST',
                    data: {
                        'name': 'test',
                        'employeeIds': employeeIds, // Include the array in the data
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    success: function(response) {
                        // Check if the response contains the expected data
                        if (response && response.cutoff_release) {
                            // Close the modal
                            $('#addManuallyModal').modal('hide');

                            // Display SweetAlert for success
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Attendance record saved successfully!',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            }).then(function() {
                                location.reload()
                            });

                        } else {
                            // Handle unexpected response
                            console.error('Unexpected response format:', response);
                        }
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });



            var maxRows = 5; // Maximum number of rows
            // Add Row
            $("#addRow").click(function() {
                var currentRows = $("#manualAttendanceTable tbody tr").length;

                if (currentRows < maxRows) {
                    var newRow = '<tr>' +
                        '<td><input type="date" class="form-control" name="date[]" id="" aria-describedby="helpId" placeholder="" /></td>' +
                        '<td><input type="time" class="form-control" name="time_in[]" id="" value="09:00" aria-describedby="helpId" placeholder="" /></td>' +
                        '<td><input type="time" class="form-control" name="time_out[]" id="" value="18:00" aria-describedby="helpId" placeholder="" /></td>' +
                        '<td><button type="button" class="btn btn-danger btn-icon delete-row"><i class="ph-trash"></i></button></td>' +
                        '</tr>';

                    $("#manualAttendanceTable tbody").append(newRow);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Maximum limit of 5 rows reached!',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                        },
                    });
                }
            });

            // Remove Row
            $(document).on('click', '.delete-row', function() {
                $(this).closest('tr').remove();
            });

            // Clear All
            $("#clearAll").click(function() {
                $("#manualAttendanceTable tbody").empty();
            });

            $("#manualEntryForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData($(this)[0]);
                $.ajax({
                    url: '/attendance/store',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    success: function(response) {
                        // Check if the response contains the expected data
                        if (response && response.attendance_records) {
                            // Close the modal
                            $('#addManuallyModal').modal('hide');

                            // Display SweetAlert for success
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Attendance record saved successfully!',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            }).then(function() {
                                location.reload()
                            });
                        } else {
                            // Handle unexpected response
                            console.error('Unexpected response format:', response);
                        }
                    },
                    error: function(error) {
                        // Close the modal (in case it's still open)
                        $('#addManuallyModal').modal('hide');

                        // Display SweetAlert for error
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'An error occurred while saving attendance records.',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        });
                        console.error(error);
                    }
                });
            });

            $("#importExcelForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData($(this)[0]);
                $.ajax({
                    url: '/attendance/import',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    success: function(response) {
                        // Check if the response contains the expected data
                        if (response && response.success) {
                            // Close the modal
                            $('#uploadFileModal').modal('hide');

                            // Display SweetAlert for success
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Upload Attendance record saved successfully!',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            }).then(function() {
                                location.reload()
                            });
                        } else {
                            // Handle unexpected response
                            console.error('Unexpected response format:', response);
                        }
                    },
                    error: function(response) {
                        // Close the modal (in case it's still open)
                        $('#uploadFileModal').modal('hide');

                        // Format error messages into a list
                        var errorList = '';
                        if (response.responseJSON && response.responseJSON.errors) {
                            errorList = '<ul class="list-group">';
                            $.each(response.responseJSON.errors, function(index, error) {
                                errorList += '<li class="list-group-item">' + error +
                                    '</li>';
                            });
                            errorList += '</ul>';
                        }

                        // Display Swal with error messages
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            html: 'An error occurred while saving attendance records:<br><br>' +
                                errorList,
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        }).then(function() {
                            location.reload()
                        });
                        console.error(response);
                    }

                });
            });



        });
    </script>
@endsection
