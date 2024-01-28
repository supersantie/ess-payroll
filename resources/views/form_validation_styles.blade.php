@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Validation Styles @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Custom styles -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom styles</h5>
        </div>

        <form class="needs-validation" novalidate>
            <div class="card-body">
                <p class="mb-4">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form></code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. When attempting to submit, you’ll see the <code>:invalid</code> and <code>:valid</code> styles applied to your form controls. Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. Background icons for <code>&lt;select></code> are only available with <code>.form-select</code>, and not <code>.form-control</code>.</p>

                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" required placeholder="Input placeholder">
                        <div class="invalid-feedback">Invalid feedback</div>
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Password input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" required placeholder="Input placeholder">
                        <div class="invalid-feedback">Invalid feedback</div>
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                            <div class="form-control-feedback-icon">
                                <i class="ph-at"></i>
                            </div>
                            <div class="invalid-feedback">Invalid feedback</div>
                            <div class="valid-feedback">Valid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select class="form-select" required="">
                            <option selected disabled value="">Please select</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                        <div class="invalid-feedback">Invalid feedback</div>
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">File input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" required>
                        <div class="invalid-feedback">Invalid feedback</div>
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                            <div class="invalid-feedback">Invalid feedback</div>
                            <div class="valid-feedback">Valid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Textarea <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <textarea class="form-control" required placeholder="Textarea placeholder"></textarea>
                        <div class="invalid-feedback">Invalid feedback</div>
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Switch <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-switch mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Check this switch</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Check this checkbox</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Checkbox 1</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>

                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Checkbox 2</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>

                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Checkbox 3</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Radio <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-2">
                                <input type="radio" class="form-check-input" name="radio-stacked" required>
                                <span class="form-check-label">Toggle this radio</span>
                            </label>

                            <label class="form-check mb-0">
                                <input type="radio" class="form-check-input" name="radio-stacked" required>
                                <span class="form-check-label" for="validationFormCheck3">Or toggle this other radio</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /custom styles -->


    <!-- Browser defaults -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Browser defaults</h5>
        </div>

        <form>
            <div class="card-body">
                <p class="mb-4">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback. While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p>

                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" required placeholder="Input placeholder">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Password input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" required placeholder="Input placeholder">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                            <div class="form-control-feedback-icon">
                                <i class="ph-at"></i>
                            </div>
                            <div class="invalid-feedback">Invalid feedback</div>
                            <div class="valid-feedback">Valid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select class="form-select" required="">
                            <option selected disabled value="">Please select</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">File input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Textarea <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <textarea class="form-control" required placeholder="Textarea placeholder"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Switch <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-switch mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Check this switch</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Check this checkbox</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Checkbox 1</span>
                            </label>

                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Checkbox 2</span>
                            </label>

                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Checkbox 3</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Radio <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-2">
                                <input type="radio" class="form-check-input" name="radio-stacked2" required>
                                <span class="form-check-label">Toggle this radio</span>
                            </label>

                            <label class="form-check mb-0">
                                <input type="radio" class="form-check-input" name="radio-stacked2" required>
                                <span class="form-check-label" for="validationFormCheck3">Or toggle this other radio</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /browser defaults -->


    <!-- Server side -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Server side</h5>
        </div>

        <form>
            <div class="card-body">
                <p class="mb-4">We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes. For invalid fields, ensure that the invalid feedback/error message is associated with the relevant form field using <code>aria-describedby</code> (noting that this attribute allows more than one <code>id</code> to be referenced, in case the field already points to additional form text).</p>

                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control is-valid" value="Field value" required placeholder="Input placeholder">
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Password input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control is-valid" value="Field value" required placeholder="Input placeholder">
                        <div class="valid-feedback">Valid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="text" class="form-control is-invalid" required placeholder="Input placeholder">
                            <div class="form-control-feedback-icon">
                                <i class="ph-at"></i>
                            </div>
                            <div class="invalid-feedback">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select class="form-select is-invalid" required="">
                            <option selected disabled value="">Please select</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                        <div class="invalid-feedback">Invalid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">File input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control is-invalid" required>
                        <div class="invalid-feedback">Invalid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control is-invalid" required placeholder="Input placeholder">
                            <div class="invalid-feedback">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Textarea <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <textarea class="form-control is-invalid" required placeholder="Textarea placeholder"></textarea>
                        <div class="invalid-feedback">Invalid feedback</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Switch <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-switch mb-0">
                                <input type="checkbox" class="form-check-input is-valid" required checked>
                                <span class="form-check-label">Check this switch</span>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input is-invalid" required>
                                <span class="form-check-label">Check this checkbox</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input is-invalid" required>
                                <span class="form-check-label">Checkbox 1</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                            </label>

                            <label class="form-check mb-2">
                                <input type="checkbox" class="form-check-input is-valid" required checked>
                                <span class="form-check-label">Checkbox 2</span>
                                <div class="valid-feedback">Valid feedback</div>
                            </label>

                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input is-invalid" required>
                                <span class="form-check-label">Checkbox 3</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Radio <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check mb-2">
                                <input type="radio" class="form-check-input is-invalid" name="radio-stacked2" required>
                                <span class="form-check-label">Toggle this radio</span>
                            </label>

                            <label class="form-check mb-0">
                                <input type="radio" class="form-check-input is-invalid" name="radio-stacked2" required>
                                <span class="form-check-label" for="validationFormCheck3">Or toggle this other radio</span>
                                <div class="invalid-feedback">Invalid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /server side -->


    <!-- Tooltips -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tooltips</h5>
        </div>

        <form class="needs-validation" novalidate>
            <div class="card-body">
                <p class="mb-4">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</p>

                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                            <div class="invalid-tooltip">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Password input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                            <div class="invalid-tooltip">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <select class="form-select" required>
                                <option selected disabled value="">Please select</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                            <div class="invalid-tooltip">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">File input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <input type="file" class="form-control" required>
                            <div class="invalid-tooltip">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group has-validation position-relative">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" required placeholder="Input placeholder">
                            <div class="invalid-tooltip">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Textarea <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <textarea class="form-control" required placeholder="Textarea placeholder"></textarea>
                            <div class="invalid-tooltip">Invalid feedback</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Switch <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-switch position-relative mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Check this switch</span>
                                <div class="invalid-tooltip">Invalid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check position-relative mb-0">
                                <input type="checkbox" class="form-check-input" required>
                                <span class="form-check-label">Check this checkbox</span>
                                <div class="invalid-tooltip">Invalid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Radio <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check position-relative mb-2">
                                <input type="radio" class="form-check-input" name="radio-stacked" required>
                                <span class="form-check-label">Toggle this radio</span>
                            </label>

                            <label class="form-check position-relative mb-0">
                                <input type="radio" class="form-check-input" name="radio-stacked" required>
                                <span class="form-check-label" for="validationFormCheck3">Or toggle this other radio</span>
                                <div class="invalid-tooltip">Invalid feedback</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /tooltips -->

</div>
<!-- /content area -->

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_validation_styles.js')}}"></script>
@endsection
