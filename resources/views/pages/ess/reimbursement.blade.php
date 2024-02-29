@extends('layouts.ess-master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Reimbursements
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Reimbursements</h5>

                <div class="d-flex gap-2">


                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start" data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-plus"></i>
                        </span>
                        File Reimbursement
                    </button>


                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        File Reimbursement
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form id="reimbursementForm">
                                    <div class="modal-body">
                                        <div class="row justify-content-center align-items-center g-2 mb-3">
                                            <div class="col">
                                                <label for="" class="form-label">Amount</label>
                                                <input type="text" class="form-control mask_currency"
                                                    placeholder="PHP 0.00" id="mask_currency" name="amount">

                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Category</label>
                                                <select class="form-select " name="reimbursement_category" id=""
                                                    required>
                                                    <option selected>Select one</option>
                                                    <option value="miscellaneous">Miscellaneous</option>
                                                    <option value="travel">Travel</option>
                                                    <option value="transportation">Travel</option>
                                                    <option value="office supplies">Office Supplies</option>
                                                    <option value="meal">Meal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 mb-3">
                                            <div class="col">
                                                <label for="" class="form-label">OR Number</label>
                                                <input type="text" class="form-control" name="or_number" id=""
                                                    aria-describedby="helpId" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 mb-3">
                                            <div class="col">
                                                <label for="" class="form-label">Attach File</label>
                                                <input type="file" class="form-control" name="proof_of_payment"
                                                    id="" aria-describedby="helpId" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col">
                                                <label for="" class="form-label">Remarks</label>
                                                <textarea class="form-control" name="remarks" id="" rows="3" placeholder="Explain the expense purpose."
                                                    required></textarea>
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

            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th data-orderable="false" class="text-center">
                            <input type="checkbox" class="form-check-input" id="cc_li_c">
                        </th>
                        <th>Amount</th>
                        <th>OR Number</th>
                        <th>Proof of payment</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reimbursements as $item)
                        <tr>
                            <th class="d-flex justify-content-center ">
                                <input type="checkbox" class="form-check-input" data-reimbursement-id="{{ $item->id }}">
                            </th>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->or_number }}</td>
                            <td>

                                <a href="{{ asset('storage/uploads/' . basename($item->proof_of_payment)) }}"
                                    class="link-primary">
                                    <i class="ph-file"></i>
                                    {{ basename($item->proof_of_payment) }}
                                </a>


                            </td>
                            <td>{{ Str::title($item->reimbursement_category) }}</td>
                            <td>
                                <span
                                    class="badge {{ $statusColors[$item->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($item->status) }}</span>
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
    <script src="{{ URL::asset('assets/js/vendor/forms/inputs/imask.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>

    <script>
        $(function() {

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

            $("#reimbursementForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('reimbursements.store') }}',
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

                        // Extract the error message from the xhr object
                        var errorMessage = 'An error occurred while saving attendance records.';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            // Parse the JSON object to extract error messages
                            var errorObject = xhr.responseJSON.errors;
                            var errorMessages = [];
                            for (var key in errorObject) {
                                if (errorObject.hasOwnProperty(key)) {
                                    errorMessages.push(errorObject[key][0]);
                                }
                            }
                            // Join error messages into a single string
                            errorMessage = errorMessages.join('<br>');
                        }

                        // Display SweetAlert for error with the error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            html: errorMessage,
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
