@extends('layouts.ess-master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Leave
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Leaves</h5>

                <div class="d-flex gap-2">


                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start" data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-plus"></i>
                        </span>
                        Request Leave
                    </button>


                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        Request a Leave
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form id="leaveRequestForm">
                                    <div class="modal-body">
                                        <div class="row justify-content-center align-items-center g-2 mb-3">
                                            <div class="col">
                                                <label for="" class="form-label">Date</label>
                                                <input type="date" class="form-control" name="leave_date" id=""
                                                    aria-describedby="helpId" placeholder="" />

                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Leave Category</label>
                                                <select class="form-select form-select-lg" name="leave_category"
                                                    id="" required>
                                                    <option selected>Select one</option>
                                                    <option value="leave without pay">Leave Without Pay</option>
                                                    <option value="sick">Sick Leave</option>
                                                    <option value="vacation">Vacation Leave</option>
                                                    <option value="matertinity">Matertinity Leave</option>
                                                    <option value="birthday">Birthday Leave</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col">
                                                <label for="" class="form-label">Reason for leaving:</label>
                                                <textarea class="form-control" name="reason" id="" rows="3"
                                                    placeholder="Explain your reason for leaving..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



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
                        <th>Reason</th>
                        <th>Leave Category</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leaves as $item)
                        <tr>
                            <th data-orderable="false" class="text-center">
                                <input type="checkbox" class="form-check-input" id="cc_li_c">
                            </th>
                            <td>{{ \Carbon\Carbon::parse($item->leave_date)->format('d M Y') }}</td>
                            <td>{{ $item->reason }}</td>
                            <td>{{ Str::title($item->leave_category) }}</td>
                            <td><span
                                    class="badge {{ $statusColors[$item->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($item->status) }}</span>
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
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>

    <script>
        $(function() {
            $("#leaveRequestForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('leaves.store') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        // Check if the response contains the expected data
                        if (response && response.success) {
                            // Close the modal
                            $('#modalId').modal('hide');

                            // Display SweetAlert for success
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.success,
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
                    error: function(xhr) {
                        // Close the modal (in case it's still open)
                        $('#modalId').modal('hide');

                        // Parse the response JSON to extract the error message
                        var errorMessage = 'An error occurred while saving attendance records.';
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMessage = xhr.responseJSON.error;
                        }

                        // Display SweetAlert for error with the error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: errorMessage,
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        });
                        console.error(xhr);
                    }
                });
            });
        })
    </script>
@endsection
