@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Settings
        @endslot
        @slot('subtitle')
            System
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">


        <div class="card">

            <div class="card-header">
                <h5 class="mb-0">System Settings</h5>
            </div>

            <div class="card-body border-top">
                {{-- <div class="alert bg-danger text-white alert-icon-start alert-dismissible fade show border-0">
                    <span class="alert-icon bg-black bg-opacity-20">
                        <i class="ph-x-circle"></i>
                    </span>
                    <span class="fw-semibold">Oh snap!</span> Payroll Settings is not currently set!.
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                </div> --}}
                <div class="mb-4">
                    Think of the <code>settings</code> in your payroll system as the customized controls that shape and
                    direct
                    the payroll processes according to your company's specific standards, ensuring accuracy and efficiency
                    in
                    financial transactions.
                </div>
                <form action="#" id="payrollSettingsForm">
                    <fieldset class="mb-3">

                        <div class="mb-3">
                            <label class="form-label">System Name:</label>
                            <input type="text" class="form-control" name="system_name"
                                value="{{ $payrollSettings['system_name'] ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea rows="3" cols="3" maxlength="225" class="form-control maxlength-textarea"
                                placeholder="This textarea has a limit of 225 chars." name="system_description">{{ $payrollSettings['system_description'] ?? '' }}</textarea>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Contributions</legend>
                        <div class="mb-4">
                            You may set the system's <code>contribution amount</code> if the government benefits raise up.
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SSS (%):</label>
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter employee share percentage"
                                        name="sss" value="{{ $payrollSettings['sss_ee_percentage'] }}">
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Philhealth (%):</label>
                            <input type="text" class="form-control" placeholder="Enter a percentage" id=""
                                name="philhealth" value="{{ $payrollSettings['philhealth_contribution_percentage'] }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">PAG IBIG (PHP):</label>
                            <input type="text" class="form-control" placeholder="Enter a percentage" id=""
                                name="pag_ibig" value="{{ $payrollSettings['pag_ibig_contribution_amount'] }}">
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Schedules</legend>
                        <div class="mb-4">
                            You can also configure the schedules of your company's <code>deductions</code> &
                            <code>compensations</code>.
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cut Off Period</label>
                            <select data-placeholder="Select something" class="form-control select-access-value"
                                name="cut_off_period">
                                <option></option>
                                <option value="1st cutoff"
                                    {{ $payrollSettings['cut_off_period'] == '1st cutoff' ? 'selected' : '' }}>1st Cut Off
                                </option>
                                <option value="2nd cutoff"
                                    {{ $payrollSettings['cut_off_period'] == '2nd cutoff' ? 'selected' : '' }}>2nd Cut Off
                                </option>
                            </select>

                        </div>

                        <div class="row justify-content-center align-items-center g-2 mb-3">
                            <div class="col">
                                <label class="form-label">First Cut Off Start Date</label>
                                <select data-placeholder="Must select the start" class="form-control select-access-value"
                                    name="1st_cut_off_date_start">
                                    <option></option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}"
                                            {{ $payrollSettings['1st_cut_off_date_start'] == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <label class="form-label">First Cut Off End Date</label>
                                <input type="text" name="1st_cut_off_date_end" class="form-control" id=""
                                    readonly value="{{ $payrollSettings['1st_cut_off_date_end'] }}">
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center g-2 mb-3">
                            <div class="col">
                                <label class="form-label">Second Cut Off Start Date</label>
                                <input type="text" name="2nd_cut_off_date_start" class="form-control" id=""
                                    readonly value="{{ $payrollSettings['2nd_cut_off_date_start'] }}">
                            </div>
                            <div class="col">
                                <label class="form-label">Second Cut Off End Date</label>
                                <input type="text" name="" class="form-control" id="" readonly
                                    value="{{ $payrollSettings['2nd_cut_off_date_end'] }}">
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Loan Payments</label>
                            <select data-placeholder="Select something" class="form-control select-access-value"
                                name="payroll_period">
                                <option></option>
                                <option value="1st cutoff"
                                    {{ $payrollSettings['loan_repayment_period'] == '1st cutoff' ? 'selected' : '' }}>1st
                                    Cut Off</option>
                                <option value="2nd cutoff"
                                    {{ $payrollSettings['loan_repayment_period'] == '2nd cutoff' ? 'selected' : '' }}>2nd
                                    Cut Off</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contribution Period</label>
                            <select data-placeholder="Select something" class="form-control select-access-value"
                                name="contribution_period">
                                <option></option>
                                <option value="1st cutoff"
                                    {{ $payrollSettings['contribution_period'] === '1st cutoff' ? 'selected' : '' }}>1st
                                    Cut Off</option>
                                <option value="2nd cutoff"
                                    {{ $payrollSettings['contribution_period'] === '2nd cutoff' ? 'selected' : '' }}>2nd
                                    Cut Off</option>
                            </select>

                        </div>

                    </fieldset>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save Changes <i
                                class="ph-floppy-disk ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/forms/inputs/imask.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/forms/inputs/maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>

@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/form_layouts.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_controls_extended.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/extra_sweetalert.js') }}"></script>

    <script>
        $(function() {
            $("#payrollSettingsForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData($(this)[0])

                $.ajax({
                    url: '{{ route('payroll_settings.update') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response && response.success) {

                            // Display SweetAlert for success
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Updated Payroll Settings successfully!',
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
            })
        })
    </script>
@endsection
