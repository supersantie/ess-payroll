@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Tags @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Tokenfield -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tokenfield</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Input field with tagging/token/chip capabilities written in raw JavaScript. Tokens in OS X or Chips in Android - small UI elements which are inserted into various input fields that often combine with autocomplete functionality. Tokens allow designers to display extra information about input. Tokenfield intended use case is work with structured data. More specifically, it expects autocomplete data to be <code>JSON</code> formatted array of objects where each object contains token <code>ID</code> and token <code>Name</code>.</div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Basic usage</div>
                        <p class="mb-3">Tokenfield could be applied to any visible <code>&lt;input></code> element that allows users to input text or number. Without additional options, this Tokenfield would allow users to add multiple token items without any specific restrictions.</p>

                        <input type="text" class="form-control tokenfield-basic" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Input group with addons</div>
                        <p class="mb-3">Token input field is adapted for input groups. It shares global input styling with <code>.form-control</code> elements for consistency and can be used with different elements: inputs, selects, text addons, button addons, icons etc.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-user"></i>
                            </span>
                            <input type="text" class="form-control tokenfield-basic" placeholder="Select car brand">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Placeholder</div>
                        <p class="mb-3">You can either use a regular input field placeholder or set it in tokenfield configuration. If <code>placeholder</code> option is set to null (default), tokenfield will try to use placeholder attribute from the original element set in <code>el</code>.</p>

                        <input type="text" class="form-control tokenfield-placeholder" placeholder="Custom placeholder">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Disable custom tokens</div>
                        <p class="mb-3">By default, token field allows user to add custom tokens instead of using preset list of tokens or tokens retrieved from the server. To disable this behaviour and limit selection to the tokens from the list. set <code>newItems</code> option to <code>false</code>.</p>

                        <input type="text" class="form-control tokenfield-custom" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Single token selection</div>
                        <p class="mb-3">Tokenfield allows user to select or add multiple number of tokens, in fact there is no limit. In some cases you can disable multiple tokens in the field and allow only 1. To do that, set <code>multiple</code> optino to <code>false</code>.</p>

                        <input type="text" class="form-control tokenfield-single" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Limit number of items</div>
                        <p class="mb-3">You can also limit the number of selected tokens in the input field. Use <code>maxItems: [number]</code> to add a limit. The default value is <code>0</code>, which allows user to enter as many items as possible. Here you can't enter more than 2 tokens.</p>

                        <input type="text" class="form-control tokenfield-limit" placeholder="Select car brand">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Allow matching only from the beginning</div>
                        <p class="mb-3">Tokenfield can be configured to do matching only from the <strong>beginning</strong> of the string - it compiles match regex to basicall this format: <code>/^{value}/i</code>. To use this feature, set <code>matchStart</code> option to <code>true</code>.</p>

                        <input type="text" class="form-control tokenfield-match-start" placeholder="Select car brand">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Allow matching only from the end</div>
                        <p class="mb-3">Tokenfield can be configured to do matching only from the <strong>end</strong> of the string - it compiles match regex to basicall this format: <code>/{value}$/i</code>. To use this feature, set <code>matchEnd</code> option to <code>true</code>.</p>

                        <input type="text" class="form-control tokenfield-match-end" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Add item on blur</div>
                        <p class="mb-3">If <code>addItemOnBlur</code> option is set to <code>true</code>, new item will be added to the tokenfield on input blur. Either sets new item or first match from suggested list. To test it, type something and click outside the field.</p>

                        <input type="text" class="form-control tokenfield-blur" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Custom delimiters</div>
                        <p class="mb-3">You can specify certain characters/sets of characters to be used as delimiters during tokenization or input events on tokenfield. Use <code>delimiters</code> option with an array of delimiters. In this example new token is added every time you press <kbd>,</kbd> key.</p>

                        <input type="text" class="form-control tokenfield-delimiters" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Add items on paste</div>
                        <p class="mb-3">If <code>addItemsOnPaste</code> config option is set to <code>true</code>, new items will be added to the tokenfield on paste. Tokenization happens using delimiters options listed above. Try to copy and paste some text to see it in action.</p>

                        <input type="text" class="form-control tokenfield-paste" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Minimum characters to display menu</div>
                        <p class="mb-3">By default, user needs to type at least 2 characters to see the list of matches. This number can be controlled with <code>minChars</code> option. This example allows you to enter 1 character to see the list of all matches. Type "A" to see it in action.</p>

                        <input type="text" class="form-control tokenfield-min-chars" placeholder="Select car brand">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Remote data source</div>
                        <p class="mb-3">Tokenfield also works with remote data source stored in JSON file. Options are set as properties of an object assigned to remote property of the parent options object. In this example all tokens are loaded from <code>car_brands.json</code> file.</p>

                        <input type="text" class="form-control tokenfield-remote" placeholder="Select car brand">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Remote autocomplete with data remapping</div>
                        <p class="mb-3">Tokenfield has several overridable methods which allow user to remap given token data or change how some elements are rendered. In this example Tokenfield fetches remote data for autocomplete and renders labels in capital letters</p>

                        <input type="text" class="form-control tokenfield-remote-remap" placeholder="Select car brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /tokenfield -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/forms/tags/tokenfield.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_tags.js')}}"></script>
@endsection
