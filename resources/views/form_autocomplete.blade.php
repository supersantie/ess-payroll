@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Autocomplete @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Autocomplete -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Autocomplete</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Autocomplete (<code>autoComplete.js</code>) is a simple, pure vanilla Javascript library progressively designed for speed, high versatility, and seamless integration with a wide range of projects & systems. It has no dependencies, includes powerful search engine with two different modes, is highly customizable and works with regular inputs (text field, textarea and contentEditable elements).</div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Basic usage</div>
                        <p class="mb-3">Simple example of search field with autocomplete. Includes a few overrides of default options to make it work like a regular suggestion engine: highlight of matching bit and display selected item in the field value.</p>
                        <input type="search" class="form-control" id="autocomplete_basic" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Disable selection</div>
                        <p class="mb-3">By default, autocomplete displays the list of mathing results, but doesn't update input value when menu item is selected. This can be changed via <code>selection</code> input event. This example shows the default behaviour.</p>
                        <input type="search" class="form-control" id="autocomplete_selection" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Threshold</div>
                        <p class="mb-3">Threshold option is responsible for setting threshold value of the minimum characters length where <code>autoComplete.js</code> engine starts. In this example threshold value is set to <code>3</code>. Type <strong>nia</strong> to see it in action</p>
                        <input type="search" class="form-control" id="autocomplete_threshold" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Debounce</div>
                        <p class="mb-3">Debounce option is responsible for setting delay time duration (in milliseconds) that counts after typing is done for <code>autoComplete.js</code> engine to start. Default value is <code>0</code>, in this example it's set to <code>500ms</code>.</p>
                        <input type="search" class="form-control" id="autocomplete_debounce" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Search engine</div>
                        <p class="mb-3">SearchEngine option is responsible for setting the Search engine Type/Mode or custom engine. Supports <code>strict</code> (default) and <code>loose</code> modes. In this example <code>searchEngine</code> option is set to <code>loose</code>.</p>
                        <input type="search" class="form-control" id="autocomplete_engine" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Open list on focus</div>
                        <p class="mb-3">The library includes <code>onfocus</code> event, which provides extra customization of search results. In this example results list is triggered on focus when suggestion is selected. Choose some country and then click on input field.</p>
                        <input type="search" class="form-control" id="autocomplete_focus" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Multiple choices</div>
                        <p class="mb-3">With additional configuration of <code>query</code> option and <code>selection</code> event, search field can support multiple selection separated by comma. Example below demonstrates this behaviour.</p>
                        <input type="search" class="form-control" id="autocomplete_multiple" autocomplete="new-search" placeholder="Search country">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Counter</div>
                        <p class="mb-3">Display total number of matches and current count of maximum displayed items set in JS configuration. Works in combination with <code>maxResults</code> option that sets the limit of items displayed in the menu.</p>
                        <input type="search" class="form-control" id="autocomplete_count" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">No results</div>
                        <p class="mb-3">The message that is shown to the user when search query doesn't match any data entry can be easily customized via <code>resultsList</code> set of options. Type <strong>"Sweden"</strong> to see it in action</p>
                        <input type="search" class="form-control" id="autocomplete_empty" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Disabled highlight</div>
                        <p class="mb-3">By default, autocomplete doesn't highlight matching characters in the list of results, but shows the list of general matches. To change this behaviour, set <code>highlight</code> option to <code>true</code> in <code>resultItem</code> option.</p>
                        <input type="search" class="form-control" id="autocomplete_highlight" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">External data source</div>
                        <p class="mb-3">This example loads external JSON file with a list of countries. You can easily customize appearance of results and selection, add dynamic placeholders or loading indicators in <code>data</code> configuration.</p>
                        <input type="search" class="form-control" id="autocomplete_external_source" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Ignore duplicates</div>
                        <p class="mb-3">External data set includes duplicated value - <strong>Austria</strong>. This example filters out all duplicates in data set and returns a single value. This behaviour can be easily achieved with <code>filter</code> configuration option</p>
                        <input type="search" class="form-control" id="autocomplete_duplicates" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Recent searches</div>
                        <p class="mb-3">Results list can include search history in a simple list format. You can customize its appearance in <code>resultsList</code> option and <code>selection</code> event. Select some country and then trigger the menu again.</p>
                        <input type="search" class="form-control" id="autocomplete_recent" autocomplete="new-search" placeholder="Search country">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Start with</div>
                        <p class="mb-3">The data can be filtered in a way that the list will include only the exact query starting from the 1st word. If you type <strong>A</strong>, United <strong>A</strong>rab Emirates will be ignored since the 1st letter in the 1st word doesn't contain that query.</p>
                        <input type="search" class="form-control" id="autocomplete_start" autocomplete="new-search" placeholder="Search country">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /autocomplete -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/forms/inputs/autocomplete.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_autocomplete.js')}}"></script>
@endsection
