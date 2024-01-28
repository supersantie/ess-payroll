@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Extended Controls @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Elastic textarea -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Elastic textarea</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Autosize is a small, stand-alone script to automatically adjust textarea height to fit text. Visually it looks similar to container with <code>contentEditable</code> attribute, but retains default textarea functionality. The <code>autosize</code> function accepts a single textarea element, or an array or array-like object (such as a NodeList or jQuery collection) of textarea elements.</div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="border-bottom pb-2 mb-2">
                            <span class="fw-bold">Basic example</span>
                        </div>

                        <p class="mb-3">Drop Autosize into any existing website and it should Just Work™. The source is short and well commented if you are curious to how it works.</p>
                        <textarea rows="3" cols="3" class="form-control elastic" placeholder="Textarea"></textarea>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="border-bottom pb-2 mb-2">
                            <span class="fw-bold">Manual triggering</span>
                            <a href="javascript:void(0)" class="elastic-manual-trigger float-end">
                                Trigger autosize
                                <i class="ph-arrow-circle-right ms-1"></i>
                            </a>
                        </div>

                        <p class="mb-3">When the value of a textarea has been changed through JavaScript, trigger the <code>autosize.resize</code> event immediately after to update the height.</p>
                        <textarea rows="3" cols="3" class="form-control elastic-manual" placeholder="Textarea placeholder"></textarea>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="border-bottom pb-2 mb-2">
                            <span class="fw-bold">Events</span>
                            <a href="javascript:void(0)" class="elastic-events-trigger float-end">
                                Trigger autosize
                                <i class="ph-arrow-circle-right ms-1"></i>
                            </a>
                        </div>

                        <p class="mb-3">The library supports <code>autosize:resized</code> event, which is fired every time autosize adjusts the textarea height. Check console log.</p>
                        <textarea rows="3" cols="3" class="form-control elastic-events" placeholder="Textarea placeholder"></textarea>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="border-bottom pb-2 mb-2">
                            <span class="fw-bold">Destroy method</span>
                            <a href="javascript:void(0)" class="elastic-destroy-trigger float-end">
                                Destroy autosize
                                <i class="ph-arrow-circle-right ms-1"></i>
                            </a>
                        </div>

                        <p class="mb-3">Trigger the <code>autosize.destroy</code> event to remove autosize from a textarea element. Once <code>destroy</code> button clicked, autosize will be removed.</p>
                        <textarea rows="3" cols="3" class="form-control elastic-destroy" placeholder="Textarea placeholder"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /elastic textarea -->


    <!-- Masked inputs -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Masked inputs</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Input mask (imask.min.js) is a simple lightweight JS library for masked inputs. The library consists of two independent layers: model and view. Model layer contains all masking facilities which can be used independently without UI. View layer is a glue between UI element and model, it connects listeners and controls changes in both directions. Input processing is based on a simple idea of comparing states before and after change. State before change is obtained on <code>keydown</code> and on <code>input</code> actual processing takes place.</div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <label class="form-label">Date:</label>
                        <input type="text" class="form-control" placeholder="Enter starting date" id="mask_date">
                        <span class="form-text">'dd.mm.yyyy' in range [01.01.1990, 01.01.2020]</span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Phone:</label>
                        <input type="text" class="form-control" placeholder="Enter your phone #" id="mask_phone">
                        <span class="form-text">+{3}(000)000-00-00</span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Phone + Ext:</label>
                        <input type="text" class="form-control" placeholder="Enter your phone #" id="mask_phone_ext">
                        <span class="form-text">+{3}(000)000-00-00 / a00000</span>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <label class="form-label">Currency:</label>
                        <input type="text" class="form-control" placeholder="Enter amount in USD" id="mask_currency">
                        <span class="form-text">${number}</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <label class="form-label">International format:</label>
                        <input type="text" class="form-control" placeholder="Enter your phone in international format" id="mask_phone_int">
                        <span class="form-text">+{3}0 000 000 000</span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Tax ID:</label>
                        <input type="text" class="form-control" placeholder="Enter your tax id" id="mask_tax">
                        <span class="form-text">00-000000</span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">SSN:</label>
                        <input type="text" class="form-control" placeholder="Enter your social security number" id="mask_ssn">
                        <span class="form-text">000-00-0000</span>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <label class="form-label">Credit card:</label>
                        <input type="text" class="form-control" placeholder="Enter your credit card number" id="mask_card">
                        <span class="form-text">0000-0000-0000-0000</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <label class="form-label">Product key:</label>
                        <input type="text" class="form-control" placeholder="Enter your product key" id="mask_product_key">
                        <span class="form-text">a*-000-a000</span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Purchase order:</label>
                        <input type="text" class="form-control" placeholder="Enter your order #" id="mask_order">
                        <span class="form-text">aaa-000-***</span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">ISBN:</label>
                        <input type="text" class="form-control" placeholder="Enter your ISBN" id="mask_isbn">
                        <span class="form-text">000-00-000-0000-0</span>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <label class="form-label">Dynamic mask:</label>
                        <input type="text" class="form-control" placeholder="Enter phone # or anything" id="mask_dynamic">
                        <span class="form-text">+{3}(000)000-00-00 OR any other input</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /masked inputs -->


    <!-- Password generator -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Password generator</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Passy is a simple and lightweight library that generates passwords. In configuration you can specify what characters the generated password will contain, minimum and maximum length and threshold values. Worth mentioning: Passy does not store, remember or share passwords. It just generates random values on client side.</div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Text feedback</div>
                        <p class="mb-3">Password checker is displayed as text form helper, which appears below the input field. You can easily change the appearance of text feedback in JS configuration.</p>

                        <div class="mb-3">
                            <input type="text" class="form-control text-indicator" placeholder="Enter your password">
                            <div class="form-text password-indicator-text"></div>
                        </div>

                        <button type="button" class="btn btn-primary generate-text">Generate 12 characters password</button>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Checker inside badge</div>
                        <p class="mb-3">Password checker is attached to the badge, which appears below the input field. Empty badge is hidden, if you add any text inside badge, it'll stay visible.</p>

                        <div class="mb-3">
                            <input type="text" class="form-control badge-indicator" placeholder="Enter your password">
                            <span class="badge form-text password-indicator-badge"></span>
                        </div>

                        <button type="button" class="btn btn-primary generate-badge">Generate 12 characters password</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Label inside addon</div>
                        <p class="mb-3">In this example password checker appears as input group <code>text addon</code>. Can be left and/or right aligned, supports all input group styles. Styles can be adjusted in JS config.</p>

                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control group-indicator" placeholder="Enter your password">
                                <span class="input-group-text password-indicator-group">No password</span>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary generate-group">Generate 8 characters password</button>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Label inside input</div>
                        <p class="mb-3">Rules are the same as for password checker inside badge, but this one has absolute position and placed inside <code>form-group</code>. Empty badge is also hidden.</p>

                        <div class="position-relative mb-3">
                            <input type="text" class="form-control badge-indicator-absolute" placeholder="Enter your password">
                            <span class="badge password-indicator-badge-absolute position-absolute end-0 top-50 translate-middle-y me-2"></span>
                        </div>

                        <button type="button" class="btn btn-primary generate-badge-absolute">Generate 10 characters password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /password generator -->


    <!-- Bootstrap maxlength -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Maxlength</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Maxlength plugin integrates by default with Bootstrap using badges, text or any other customizable element to display the maximum length of the field where the user is inserting text. This plugin uses and extends the HTML5 attribute <code>maxlength</code> to work. The indicator shows up on focusing on the element, and disappears when the focus is lost. Try out demo configuration below.</div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Basic example</div>
                        <p class="mb-2">Basic example of maxlength plugin. The badge will show up right below the input by default when the remaining chars are 10 or less. This is a default value and position.</p>
                        <div>
                            <input type="text" class="form-control maxlength" maxlength="20" placeholder="Type 10 characters...">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Label position</div>
                        <p class="mb-2">The field counter can be positioned at the top, bottom, left or right via <code>placement</code> option. You can also place the maxlength indicator on the corners: bottom-right, top-right, top-left, bottom-left and centered-right.</p>
                        <div>
                            <input type="text" class="form-control maxlength-badge-position pe-5" maxlength="20" placeholder="Centered right position">
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Full featured</div>
                        <p class="mb-2">This is a complete example where all the options configured for the bootstrap-maxlength counter are setted. <strong>Please note:</strong> if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.</p>
                        <div>
                            <input type="text" class="form-control maxlength-options" maxlength="20" placeholder="Always visible with custom text">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Change the threshold value</div>
                        <p class="mb-2">Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option. In this example badge appears when the remaining chars are <code>15</code> or less.</p>
                        <div>
                            <input type="text" class="form-control maxlength-threshold" maxlength="20" placeholder="Type 5 characters...">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Custom options</div>
                        <p class="mb-2">Example with custom options. All options can be mixed: here badge will show up after entering 10 characters, badge has different color and shows up after the limit is reached.</p>
                        <div>
                            <input type="text" class="form-control maxlength-custom" maxlength="20" placeholder="With Primary and Danger badges">
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Textarea example</div>
                        <p class="mb-2">Bootstrap maxlength supports textarea as well as inputs. Even on old IE. Maxlength, attached to the textarea supports all available options and settings by default.</p>
                        <div>
                            <textarea rows="3" cols="3" maxlength="225" class="form-control maxlength-textarea" placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bootstrap maxlength -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/inputs/imask.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/inputs/autosize.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/inputs/passy.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/inputs/maxlength.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_controls_extended.js')}}"></script>
@endsection
