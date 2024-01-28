@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Validation Library @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Form validation -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Form validation</h5>
        </div>

        <form class="form-validate-jquery" action="#">
            <div class="card-body">
                <p class="mb-4">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. <strong>Note:</strong> <code>success</code> callback is configured for demo purposes only and can be removed in validation setup.</p>

                <div class="mb-4">
                    <div class="fw-bold border-bottom pb-2 mb-3">Basic inputs</div>

                    <!-- Basic text input -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="basic" class="form-control" required placeholder="Text input validation">
                        </div>
                    </div>
                    <!-- /basic text input -->


                    <!-- Input with icons -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="form-control-feedback form-control-feedback-end">
                                <input type="text" name="with_icon" class="form-control" required placeholder="Text input with icon validation">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-gear"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /input with icons -->


                    <!-- Input group -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <span class="input-group-text"><i class="ph-at"></i></span>
                                <input type="text" name="input_group" class="form-control" required placeholder="Input group validation">
                            </div>
                        </div>
                    </div>
                    <!-- /input group -->


                    <!-- Password field -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Password field <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="password" name="password" id="password" class="form-control" required placeholder="Minimum 5 characters allowed">
                        </div>
                    </div>
                    <!-- /password field -->


                    <!-- Repeat password -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="password" name="repeat_password" class="form-control" required placeholder="Try different password">
                        </div>
                    </div>
                    <!-- /repeat password -->


                    <!-- Email field -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Email field <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" id="email" required placeholder="Enter a valid email address">
                        </div>
                    </div>
                    <!-- /email field -->


                    <!-- Repeat email -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="email" name="repeat_email" class="form-control" required placeholder="Enter a valid email address">
                        </div>
                    </div>
                    <!-- /repeat email -->


                    <!-- Minimum characters -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="minimum_characters" class="form-control" required placeholder="Enter at least 10 characters">
                        </div>
                    </div>
                    <!-- /minimum characters -->


                    <!-- Maximum characters -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="maximum_characters" class="form-control" required placeholder="Enter 10 characters maximum">
                        </div>
                    </div>
                    <!-- /maximum characters -->


                    <!-- Minimum number -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="minimum_number" class="form-control" required placeholder="Enter a value greater than or equal to 10">
                        </div>
                    </div>
                    <!-- /minimum number -->


                    <!-- Maximum number -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="maximum_number" class="form-control" required placeholder="Please enter a value less than or equal to 10">
                        </div>
                    </div>
                    <!-- /maximum number -->


                    <!-- Basic textarea -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <textarea rows="5" cols="5" name="textarea" class="form-control" required placeholder="Default textarea"></textarea>
                        </div>
                    </div>
                    <!-- /basic textarea -->

                </div>

                <div class="mb-4">
                    <div class="fw-bold border-bottom pb-2 mb-3">Advanced inputs</div>

                    <!-- Number range -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Number range <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="number_range" class="form-control" required placeholder="Enter a value between 10 and 20">
                        </div>
                    </div>
                    <!-- /number range -->


                    <!-- Custom message -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Custom message <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="custom" class="form-control" required placeholder="Custom error message">
                        </div>
                    </div>
                    <!-- /custom message -->


                    <!-- URL validation -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">URL validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="url" class="form-control" required placeholder="Enter a valid URL address">
                        </div>
                    </div>
                    <!-- /url validation -->


                    <!-- Date validation -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Date validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="date" class="form-control" required placeholder="April, 2014 or any other date format">
                        </div>
                    </div>
                    <!-- /date validation -->


                    <!-- ISO date validation -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="date_iso" class="form-control" required placeholder="YYYY/MM/DD or any other ISO date format">
                        </div>
                    </div>
                    <!-- /iso date validation -->


                    <!-- Numbers only -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="numbers" class="form-control" required placeholder="Enter decimal number only">
                        </div>
                    </div>
                    <!-- /numbers only -->


                    <!-- Digits only -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Digits only <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="digits" class="form-control" required placeholder="Enter digits only">
                        </div>
                    </div>
                    <!-- /digits only -->


                    <!-- Credit card validation -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="card" class="form-control" required placeholder="Enter credit card number. Try 446-667-651">
                        </div>
                    </div>
                    <!-- /credit card validation -->


                    <!-- Styled file uploader -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">File uploader <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control required" id="customFile">
                        </div>
                    </div>
                    <!-- /styled file uploader -->


                    <!-- Styled select -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Select <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="styled_select" class="form-select" required>
                                <option value="">Choose an option</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!-- /styled asic select -->


                    <!-- Select2 select -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="select2" data-placeholder="Select a State..." class="form-control form-control-select2" required>
                                <option></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!-- /select2 select -->


                    <!-- Multiple select -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="default_multiple_select" class="form-select" multiple required>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <!-- /multiple select -->

                </div>

                <div class="mb-4">
                    <div class="fw-bold border-bottom pb-2 mb-3">Checkboxes and radios</div>

                    <!-- Basic single checkbox -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Basic single checkbox <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" name="single_basic_checkbox" required>
                                <span class="form-check-label">Accept our terms</span>
                            </label>
                        </div>
                    </div>
                    <!-- /basic single checkbox -->


                    <!-- Basic checkbox group -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Basic checkbox group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox" required>
                                <span class="form-check-label">Duis eget nibh purus</span>
                            </label>

                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                <span class="form-check-label">Maecenas non nulla ac nunc</span>
                            </label>

                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                <span class="form-check-label">Maecenas egestas tristique</span>
                            </label>
                        </div>
                    </div>
                    <!-- /basic checkbox group -->


                    <!-- Inline checkbox group -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Basic inline checkbox group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="basic_inline_checkbox" required>
                                <span class="form-check-label">Duis eget nibh purus</span>
                            </label>

                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="basic_inline_checkbox">
                                <span class="form-check-label">Maecenas non nulla ac nunc</span>
                            </label>
                        </div>
                    </div>
                    <!-- /inline checkbox group -->


                    <!-- Basic radio group -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Basic radio group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check mb-2">
                                <input type="radio" class="form-check-input" name="basic_radio" required>
                                <span class="form-check-label">Cras leo turpis malesuada eget</span>
                            </label>

                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="basic_radio">
                                <span class="form-check-label">Maecenas congue justo vel ipsum</span>
                            </label>
                        </div>
                    </div>
                    <!-- /basic radio group -->


                    <!-- Basic inline radio group -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Basic inline radio group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="basic_radio_group" required>
                                <span class="form-check-label">Cras leo turpis malesuada eget</span>
                            </label>

                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="basic_radio_group">
                                <span class="form-check-label">Maecenas congue justo vel ipsum</span>
                            </label>
                        </div>
                    </div>
                    <!-- /basic inline radio group -->

                </div>

                <div>
                    <div class="fw-bold border-bottom pb-2 mb-3">Switch components</div>

                    <!-- Switch single -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Swichery single <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="switch_single" required>
                                <span class="form-check-label">Accept our terms</span>
                            </label>
                        </div>
                    </div>
                    <!-- /switch single -->


                    <!-- Switch group -->
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label pt-0">Swichery group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check form-switch mb-2">
                                <input type="checkbox" class="form-check-input" name="switch_group" required>
                                <span class="form-check-label">Duis eget nibh purus</span>
                            </label>

                            <label class="form-check form-switch mb-2">
                                <input type="checkbox" class="form-check-input" name="switch_group">
                                <span class="form-check-label">Maecenas non nulla ac nunc</span>
                            </label>

                            <label class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="switch_group">
                                <span class="form-check-label">Maecenas egestas tristique</span>
                            </label>
                        </div>
                    </div>
                    <!-- /switch group -->


                    <!-- Inline switch group -->
                    <div class="row">
                        <label class="col-lg-3 col-form-label pt-0">Inline swichery group <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <label class="form-check form-check-inline form-switch">
                                <input type="checkbox" class="form-check-input" name="inline_switch_group" required>
                                <span class="form-check-label">Duis eget nibh purus</span>
                            </label>

                            <label class="form-check form-check-inline form-switch">
                                <input type="checkbox" class="form-check-input" name="inline_switch_group">
                                <span class="form-check-label">Maecenas egestas tristique</span>
                            </label>
                        </div>
                    </div>
                    <!-- /inline switch group -->

                </div>
            </div>

            <div class="card-footer d-flex justify-content-end">
                <button type="reset" class="btn btn-light" id="reset">Reset</button>
                <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /form validation -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/validation/validate.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_validation_library.js')}}"></script>
@endsection
