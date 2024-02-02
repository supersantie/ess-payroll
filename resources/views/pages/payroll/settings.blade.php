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
                <div class="alert bg-danger text-white alert-icon-start alert-dismissible fade show border-0">
                    <span class="alert-icon bg-black bg-opacity-20">
                        <i class="ph-x-circle"></i>
                    </span>
                    <span class="fw-semibold">Oh snap!</span> Payroll Settings is not currently set!.
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                </div>
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
                            <input type="text" class="form-control" name="system_name" value="{{ $keySetting["system_name"] ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea rows="3" cols="3" maxlength="225" class="form-control maxlength-textarea"
                                placeholder="This textarea has a limit of 225 chars." name="system_description"></textarea>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Contributions</legend>
                        <div class="mb-4">
                            You may set the system's <code>contribution amount</code> if the government benefits raise up.
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SSS:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency" name="sss">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Philhealth:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency" name="philhealth">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">PAG IBIG:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency" name="pag_ibig">
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Compensations</legend>
                        <div class="mb-4">
                            You can change the percentage of system's <code>compensations</code>.
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Overtime Rate:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency" name="overtime_rate">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Holiday Rate:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency" name="holiday_rate">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Night Differential Rate:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency" name="night_diff_rate">
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Schedules</legend>
                        <div class="mb-4">
                            You can also configure the schedules of your company's <code>deductions</code> &
                            <code>compensations</code>.
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Payroll</label>
                            <select data-placeholder="Select something" class="form-control select-access-value" name="payroll_period">
                                <option></option>
                                <option value="monthly">Monthly</option>
                                <option value="semi monthly">Semi Monthly</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Loan Payments</label>
                            <select data-placeholder="Select something" class="form-control select-access-value" name="payroll_period">
                                <option></option>
                                <option value="monthly">Every first cut off</option>
                                <option value="semi monthly">Every second cut off</option>
                                <option value="semi monthly">Paid half per cut off</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contribution Period</label>
                            <select data-placeholder="Select something" class="form-control select-access-value" name="payroll_period">
                                <option></option>
                                <option value="monthly">Every first cut off</option>
                                <option value="semi monthly">Every second cut off</option>
                                <option value="semi monthly">Twice a month</option>
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
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/form_layouts.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_controls_extended.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/form_select2.js') }}"></script>

    <script>
        $(function(){
           $("#payrollSettingsForm").on("submit", function(e){
                e.preventDefault();

                let formData = new FormData($(this)[0])

                const csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '/payroll_settings',
                    method: 'POST',
                    data: formData,
                    processData: false,  
            contentType: false,
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
           })
        })
    </script>
@endsection
