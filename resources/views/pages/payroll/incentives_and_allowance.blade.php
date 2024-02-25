@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Deduction & Contributions
        @endslot
        @slot('subtitle')
            Company Loan
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Company Loan List</h5>

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
                            <a href="#" class="dropdown-item">Upload biometric file</a>
                            <a href="#" class="dropdown-item">Download CSV template</a>
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
                                            <div class="mb-3 d-flex flex-column   justify-content-between   ">
                                                <label for="" class="form-label">Employee Name</label>
                                                <select data-placeholder="Select a employee..."
                                                    class="form-control select w-100" name="employee">
                                                    @foreach ($employees as $item)
                                                        <option value="{{ $item->code }}   ">
                                                            {{ $item->first_name . ' ' . $item->last_name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="row justify-content-center align-items-center g-2 mb-3">

                                                <div class="col">
                                                    <label for="" class="form-label">Amount</label>
                                                    <input type="text" class="form-control mask_currency"
                                                        placeholder="Enter amount in PHP" id="amountToLoan" name="amount">
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">Perk Type</label>
                                                    <select class="form-select" name="perk_type" id="">
                                                        <option selected>Select one</option>
                                                        <option value="Food Allowance">Food Allowance</option>
                                                        <option value="Transportation Allowance">Transportation Allowance
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Remarks(Optional)</label>
                                                <textarea class="form-control" name="remarks" id="" rows="3"></textarea>
                                            </div>

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
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            Modal title
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="export_table">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-download"></i>
                        </span>
                        Export table
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

            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th data-orderable="false" class="text-center">
                            <input type="checkbox" class="form-check-input" id="cc_li_c">
                        </th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                        @foreach ($item->perks as $subItem)
                            <tr>
                                <th class="d-flex justify-content-center ">
                                    <input type="checkbox" class="form-check-input"
                                        data-employee-id="{{ $item->code }}">
                                </th>
                                <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                <td>{{ $subItem->amount }}</td>
                                <td>{{ $subItem->remarks }}</td>
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
    <script src="{{ URL::asset('assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/forms/inputs/imask.min.js') }}"></script>

    <script src="{{ URL::asset('assets/demo/pages/form_layouts.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/demo/pages/form_controls_extended.js') }}"></script> --}}
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>
    {{-- <script src="{{URL::asset('assets/demo/pages/components_modals.js')}}"></script> --}}
    <script type="module">
        $(".mask_currency").each(function(index) {
            const maskCurrency = IMask(this, {
                mask: 'PHP num', // adding 'PHP' at the beginning of the mask
                blocks: {
                    num: {
                        mask: Number,
                        signed: true, // allowing negative numbers
                        scale: 2, // digits after point, 0 for integers
                        thousandsSeparator: ",", // any single char
                        padFractionalZeros: false, // if true, then pads zeros at end to the length of scale
                        normalizeZeros: false, // appends or removes zeros at ends
                        radix: "." // fractional delimiter
                    }
                }
            });
        })

        $(document).ready(function() {
            const csrfToken = $('meta[name="csrf-token"]').attr('content');
            const selectAllCheckbox = $('#cc_li_c');
            const checkboxes = $('.datatable-responsive tbody input[type="checkbox"]');
            const releasePayrollButton = $('#releasePayrollButton');

            selectAllCheckbox.on('change', function() {
                checkboxes.each(function() {
                    const employeeId = $(this).data('employeeId');
                    this.checked = selectAllCheckbox.prop('checked');
                    if (this.checked) {
                        console.log("Employee ID checked:", employeeId);
                    }
                });
                updateIndeterminateState();
                releasePayrollButton.prop('disabled', checkboxes.filter(':checked').length === 0);
            });

            checkboxes.on('change', function() {
                selectAllCheckbox.prop('checked', checkboxes.filter(':checked').length === checkboxes
                    .length);
                updateIndeterminateState();
                releasePayrollButton.prop('disabled', checkboxes.filter(':checked').length === 0);
            });

            function updateIndeterminateState() {
                const checkedCheckboxes = checkboxes.filter(':checked');
                selectAllCheckbox.prop('indeterminate', checkedCheckboxes.length > 0 && checkedCheckboxes.length <
                    checkboxes.length);
            }

            $('select[name="employee"]').change(function() {
                // Assuming there's a function to fetch the loan amount for the selected employee
                var employeeCode = $(this).val();

                console.log(employeeCode)
            });


            $("#manualEntryForm").on("submit", function(e) {
                e.preventDefault();
                // var formData = $(this).serialize();
                let formData = new FormData($(this)[0])
                console.log('Form data:', formData);

                $.ajax({
                    url: '/perks/store',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    success: function(response) {
                        // Check if the response contains the expected data
                        if (response && response.perk_record) {
                            // Close the modal
                            $('#addManuallyModal').modal('hide');

                            // Display SweetAlert for success
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Perk record saved successfully!',
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
                        $('#addManuallyModal').modal('hide');
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
        });
    </script>
@endsection
