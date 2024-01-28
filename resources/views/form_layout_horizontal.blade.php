@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Form Layouts @endslot
@slot('subtitle') Horizontal @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic layout -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic layout</h5>
        </div>

        <div class="card-body">
            Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label></code>s as well so they’re vertically centered with their associated form controls. Checkboxes and radios require wrapper with <code>.form-check-horizontal</code> class.
        </div>

        <div class="card-body border-top">
            <form action="#">
                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Name:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Themesbrand">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Password:</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" placeholder="Your strong password">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Your state:</label>
                    <div class="col-lg-9">
                        <select class="form-control form-control-select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="WA">Washington</option>
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
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Gender:</label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" checked>
                                <span class="form-check-label">Male</span>
                            </label>

                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender">
                                <span class="form-check-label">Female</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Your avatar:</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control">
                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Tags:</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                            <option value="slack" data-icon="slack-logo" selected>Slack</option>
                            <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                            <option value="telegram" data-icon="telegram-logo">Telegram</option>
                            <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                            <option value="twitter" data-icon="twitter-logo">Twitter</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Your message:</label>
                    <div class="col-lg-9">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->


    <!-- Right labels -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Right aligned labels</h5>
        </div>

        <div class="card-body">
            To avoid large white space between labels and form elements on wide screens, labels can be aligned to the right with <code>.text-[breakpoint]-end</code> class. UX guidelines suggest this layout as it brings the label closer to the field to make scanning the form faster and easier. But it doesn't work for all use cases (heavy multi column forms, forms in popups etc) as it also creates a large white space on the left side.
        </div>

        <div class="card-body border-top">
            <form action="#">
                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Name:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Themesbrand">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Password:</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" placeholder="Your strong password">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Your state:</label>
                    <div class="col-lg-9">
                        <select class="form-control form-control-select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="WA">Washington</option>
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
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Gender:</label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" checked>
                                <span class="form-check-label">Male</span>
                            </label>

                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender">
                                <span class="form-check-label">Female</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Your avatar:</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control">
                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Tags:</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                            <option value="slack" data-icon="slack-logo" selected>Slack</option>
                            <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                            <option value="telegram" data-icon="telegram-logo">Telegram</option>
                            <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                            <option value="twitter" data-icon="twitter-logo">Twitter</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label text-lg-end">Your message:</label>
                    <div class="col-lg-9">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /right labels -->


    <!-- Legend -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Fieldsets with legend</h5>
        </div>

        <div class="card-body">
            The <code>&lt;legend></code> HTML element represents a caption for the content of its parent <code>&lt;fieldset></code>. According to standards, it must be used inside field set, but thanks to helper classes, the look and feel can be justified and legends and regular text dividers can look the same. If you care about accessibility in your project, always use recommended markup structure to fully support screen readers.
        </div>

        <div class="card-body border-top">
            <form action="#">
                <fieldset>
                    <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Mandatory fields</legend>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Password:</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Optional fields</legend>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Your state:</label>
                        <div class="col-lg-9">
                            <select class="form-control form-control-select2">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="WA">Washington</option>
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
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Gender:</label>
                        <div class="col-lg-9">
                            <div class="form-check-horizontal">
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" checked>
                                    <span class="form-check-label">Male</span>
                                </label>

                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender">
                                    <span class="form-check-label">Female</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Your avatar:</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control">
                            <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Additional information</legend>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Tags:</label>
                        <div class="col-lg-9">
                            <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                                <option value="slack" data-icon="slack-logo" selected>Slack</option>
                                <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                                <option value="telegram" data-icon="telegram-logo">Telegram</option>
                                <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                                <option value="twitter" data-icon="twitter-logo">Twitter</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Your message:</label>
                        <div class="col-lg-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>
                </fieldset>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /legend -->


    <!-- Static mode -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Static mode</h5>
        </div>

        <div class="card-body">
            Static elements in horizontal form require additional classes or attributes to keep the spacing and styling consistent. If you want to have <code>&lt;input readonly></code> elements in your form styled as plain text for instance, use the <code>.form-control-plaintext</code> class to remove the default form field styling and preserve the correct margin and padding.
        </div>

        <div class="card-body border-top">
            <form action="#">
                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Name:</label>
                    <div class="col-lg-9">
                        <div class="form-control form-control-plaintext">Themesbrand</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Password:</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" readonly value="Your password">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Your state:</label>
                    <div class="col-lg-9">
                        <select class="form-control form-control-select2" disabled>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV" selected>Nevada</option>
                                <option value="WA">Washington</option>
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
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Gender:</label>
                    <div class="col-lg-9">
                        <div class="form-check-horizontal">
                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender-disabled" disabled checked>
                                <span class="form-check-label">Male</span>
                            </label>

                            <label class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender-disabled" disabled>
                                <span class="form-check-label">Female</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Your avatar:</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" disabled>
                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Tags:</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" disabled data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                            <option value="slack" data-icon="slack-logo" selected>Slack</option>
                            <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                            <option value="telegram" data-icon="telegram-logo">Telegram</option>
                            <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                            <option value="twitter" data-icon="twitter-logo">Twitter</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">Your message:</label>
                    <div class="col-lg-9">
                        <div class="form-control form-control-plaintext">
                            <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /static mode -->


    <!-- Centered form -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Centered form</h5>
        </div>

        <div class="card-body">
            Horizontal form can have a %-based width and aligned to the center. Use a regular grid markup with offsetting classes as a form wrapper. Mind the breakpoint in <code>.col-*</code> classes to ensure the proper width is used on small screens. This example is using <code>lg</code> breakpoint, which means on desktop screens the form has 33.3% width and 100% on small screens.
        </div>

        <div class="card-body border-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Enter your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Enter your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Select your state:</label>
                            <div class="col-lg-8">
                                <select data-placeholder="Select your state" class="form-control form-control-select2">
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Attach screenshot:</label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control">
                                <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /centered form -->


    <!-- Centered card -->
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Centered card</h5>
                </div>

                <div class="card-body">
                    Here the logic is similar to previous example, but instead of wrapping the form in grid containers, the grid is applied to the card that contains the form. Form elements in this case always have 100% width and form width is controlled by grid columns width.
                </div>

                <div class="card-body border-top">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Enter your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Enter your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Select your state:</label>
                            <div class="col-lg-8">
                                <select data-placeholder="Select your state" class="form-control form-control-select2">
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Attach screenshot:</label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control">
                                <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /centered card -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_layouts.js')}}"></script>
@endsection
