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
                <div class="mb-4">
                    Think of the <code>settings</code> in your payroll system as the customized controls that shape and
                    direct
                    the payroll processes according to your company's specific standards, ensuring accuracy and efficiency
                    in
                    financial transactions.
                </div>
                <form action="#">
                    <fieldset class="mb-3">
    
                        <div class="mb-3">
                            <label class="form-label">System Name:</label>
                            <input type="text" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea rows="3" cols="3" maxlength="225" class="form-control maxlength-textarea" placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                    </fieldset>
    
                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Contributions</legend>
                        <div class="mb-4">
                            You may set the system's <code>contribution amount</code> if the government benefits raise up.
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SSS:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency">
                        </div>
    
                        <div class="mb-3">
                            <label class="form-label">Philhealth:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">PAG IBIG:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency">
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Compensations</legend>
                        <div class="mb-4">
                            You can change the percentage of system's <code>compensations</code>.
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Overtime Rate:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Holiday Rate:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Night Differential Rate:</label>
                            <input type="text" class="form-control" placeholder="Enter amount in PHP" id="mask_currency">
                        </div>
                    </fieldset>
    
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save Changes <i class="ph-floppy-disk ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/inputs/imask.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/inputs/maxlength.min.js')}}"></script>
@endsection
@section('scripts')
    <script src="{{URL::asset('assets/demo/pages/form_layouts.js')}}"></script>
    <script src="{{URL::asset('assets/demo/pages/form_controls_extended.js')}}"></script>
@endsection
