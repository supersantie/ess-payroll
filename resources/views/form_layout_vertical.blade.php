@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Form Layouts @endslot
@slot('subtitle') Vertical @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic layout -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic layout</h5>
        </div>

        <div class="card-body">
            Vertical form is the most common layout. Since Bootstrap applies <code>display: block</code> and <code>width: 100%</code> to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis. Also use <code>.form-label</code> class in labels to add bottom margin. Be sure to use an appropriate type attribute on all inputs (e.g., <code>email</code> for email address or <code>number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
        </div>

        <div class="card-body border-top">
            <form action="#">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" placeholder="Themesbrand">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" placeholder="Your strong password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Your state:</label>
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

                <div class="mb-3">
                    <label class="form-label">Gender:</label>
                    <div>
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

                <div class="mb-3">
                    <label class="form-label">Your avatar:</label>
                    <input type="file" class="form-control">
                    <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tags:</label>
                    <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                        <option value="slack" data-icon="slack-logo" selected>Slack</option>
                        <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                        <option value="telegram" data-icon="telegram-logo">Telegram</option>
                        <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                        <option value="twitter" data-icon="twitter-logo">Twitter</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Your message:</label>
                    <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->


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
                <fieldset class="mb-3">
                    <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Mandatory fields</legend>

                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="Themesbrand">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control" placeholder="Your strong password">
                    </div>
                </fieldset>

                <fieldset class="mb-3">
                    <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Optional fields</legend>

                    <div class="mb-3">
                        <label class="form-label">Your state:</label>
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

                    <div class="mb-3">
                        <label class="form-label">Gender:</label>
                        <div>
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

                    <div class="mb-3">
                        <label class="form-label">Your avatar:</label>
                        <input type="file" class="form-control">
                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="fs-base fw-bold border-bottom pb-2 mb-3">Additional information</legend>

                    <div class="mb-3">
                        <label class="form-label">Tags:</label>
                        <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                            <option value="slack" data-icon="slack-logo" selected>Slack</option>
                            <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                            <option value="telegram" data-icon="telegram-logo">Telegram</option>
                            <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                            <option value="twitter" data-icon="twitter-logo">Twitter</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
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
            Static elements in vertical form require additional classes or attributes to keep the spacing and styling consistent. If you want to have <code>&lt;input readonly></code> elements in your form styled as plain text for instance, use the optional <code>.form-control-plaintext</code> class to remove the default form field styling and preserve the correct margin and padding.
        </div>

        <div class="card-body border-top">
            <form action="#">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <div class="form-control-plaintext">Themesbrand</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" readonly value="Your password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Your state:</label>
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

                <div class="mb-3">
                    <label class="form-label">Gender:</label>
                    <div>
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

                <div class="mb-3">
                    <label class="form-label">Your avatar:</label>
                    <input type="file" class="form-control" disabled>
                    <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tags:</label>
                    <select multiple="multiple" disabled data-placeholder="Enter tags" class="form-control form-control-select2-icons">
                        <option value="slack" data-icon="slack-logo" selected>Slack</option>
                        <option value="instagram" data-icon="instagram-logo" selected>Instagram</option>
                        <option value="telegram" data-icon="telegram-logo">Telegram</option>
                        <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                        <option value="twitter" data-icon="twitter-logo">Twitter</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Your message:</label>
                    <div class="form-control-plaintext">
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
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
            Vertical form can have a %-based width and aligned to the center. Use a regular grid markup with offsetting classes as a form wrapper. Mind the breakpoint in <code>.col-*</code> classes to ensure the proper width is used on small screens. This example is using <code>lg</code> breakpoint, which means on desktop screens the form has 33.3% width and 100% on small screens.
        </div>

        <div class="card-body border-top">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Enter your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Enter your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select your state:</label>
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

                        <div class="mb-3">
                            <label class="form-label">Attach screenshot:</label>
                            <input type="file" class="form-control">
                            <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
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
        <div class="col-lg-6 offset-lg-3">
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
                            <label class="form-label">Enter your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="row mb-3">
                            <label class="form-label">Enter your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="row mb-3">
                            <label class="form-label">Select your state:</label>
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

                        <div class="row mb-3">
                            <label class="form-label">Attach screenshot:</label>
                            <input type="file" class="form-control">
                            <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                        </div>

                        <div class="row mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
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
