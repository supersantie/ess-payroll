@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extensions @endslot
@slot('subtitle') Mark @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic example -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic example</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Mark.js is a text highlighter written in JavaScript. It can be used to dynamically mark search terms or custom regular expressions and offers you built-in options like diacritics support, separate word search, custom synonyms, iframes support, custom filters, accuracy definition, custom element, custom class name and more. Mark.js will wrap matches with a specified element and optionally with an assigned class. When not changing the default element mark, browsers will ensure that it looks highlighted by default</p>

            <p class="fw-semibold">Example</p>
            <div class="bg-light bg-opacity-50 border rounded p-3">
                <div class="form-control-feedback form-control-feedback-start mb-3">
                    <input type="text" class="form-control" name="keyword-basic" placeholder="Type 'lorem ipsum'">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                </div>

                <div class="demo-target-base">
                    Lorem ipsum dolor sit āmet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna lorem ipsum aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, nò sea takimata sanctus est lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur lorem sadipscing elitr
                </div>
            </div>
        </div>
    </div>
    <!-- /basic example -->


    <!-- Exclude matches -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Exclude matches</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">When having a context that contains multiple elements and you need to ignore matches in some of them, the option <code>exclude</code> may be worth gold. You can pass an array of exclusion selectors and matches within these selectors will be ignored from highlighting. Initialize <code>mark.js</code> directly on the div containing the content (in this case <code>.mark-exclude</code>), or specify a exclude array matching the elements that should be ignored.</p>

            <p class="fw-semibold">Example</p>
            <div class="bg-light bg-opacity-50 border rounded p-3">
                <div class="form-control-feedback form-control-feedback-start mb-3">
                    <input type="text" class="form-control" name="keyword-exclude" placeholder="Type 'lorem ipsum'">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                </div>

                <div class="demo-target-exclude">
                    <del>Lorem ipsum</del> dolor sit āmet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna <del>lorem ipsum</del> aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, nò sea takimata sanctus est lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur lorem sadipscing elitr
                </div>
            </div>
        </div>
    </div>
    <!-- /exclude matches -->


    <!-- Synonyms -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Synonyms</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">There might be cases where highlighting synonyms for words is helpful for users. Take "one" and "1" as an example. When a user searches for "one last todo", he might expect to highlight also "1 last todo". In German languages, you could also map umlauts, e.g. "ü" with "ue" or "ö" with "oe". The following example will add the synonym "1" for "one", "10" for "ten" and vice versa.</p>

            <p class="fw-semibold">Example</p>
            <div class="bg-light bg-opacity-50 border rounded p-3">
                <div class="form-control-feedback form-control-feedback-start mb-3">
                    <input type="text" class="form-control" name="keyword-synonym" placeholder="Type '1'">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                </div>

                <div class="demo-target-synonym">
                    Calm down, get hold of yourself. For example, Before you tell him what you think of him, count to ten. Often used as an imperative, this phrase in effect means that if one takes the time to count from one to ten one can regain one's composure.
                </div>
            </div>
        </div>
    </div>
    <!-- /synonyms -->


    <!-- Element and class -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Element and class</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">When you're calling <code>mark.js</code> on some container – whether by <code>mark()</code> or by <code>markRegExp()</code> – it will find matches and wraps them with a defined element (<code>&lt;mark></code> by default) and optionally with a class assigned to that element. So assuming we'd like to highlight "text" with a <code>span</code> tag and a classes <code>bg-primary, bg-opacity-10, text-primary</code> assigned, then this could be done with <code>element</code> and <code>className</code> options.</p>

            <p class="fw-semibold">Example</p>
            <div class="bg-light bg-opacity-50 border rounded p-3">
                <div class="form-control-feedback form-control-feedback-start mb-3">
                    <input type="text" class="form-control" name="keyword-element" placeholder="Type 'lorem ipsum'">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                </div>

                <div class="demo-target-element">
                    Lorem ipsum dolor sit āmet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna lorem ipsum aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, nò sea takimata sanctus est lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur lorem sadipscing elitr
                </div>
            </div>
        </div>
    </div>
    <!-- /element and class -->


    <!-- Filtering -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">List filtering and highlighting</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">The following configuration allows us not only to highlight search term, but also filter a specific list (or table) and hide all entries that don't match. This can be done with <code>mark</code> method that highlights custom search terms, and <code>unmark</code> method that removes all highlights created by the library. This config can be used in lists, list groups, tables, dropdown menus and other components.</p>

            <p class="fw-semibold">Example</p>
            <div class="bg-light bg-opacity-50 border rounded">
                <div class="p-3">
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" name="keyword-table" placeholder="Type 'Ohio'">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass"></i>
                        </div>
                    </div>
                </div>

                <table class="table table-hover border-top">
                    <thead class="table-light">
                        <tr>
                            <th>President</th>
                            <th>Birthplace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Zachary Taylor</td>
                            <td>Barboursville, Virginia</td>
                        </tr>
                        <tr>
                            <td>Warren G. Harding</td>
                            <td>Blooming Grove, Ohio</td>
                        </tr>
                        <tr>
                            <td>John Quincy Adams</td>
                            <td>Braintree, Massachusetts</td>
                        </tr>
                        <tr>
                            <td>John F. Kennedy</td>
                            <td>Brookline, Massachusetts</td>
                        </tr>
                        <tr>
                            <td>James Buchanan</td>
                            <td>Cove Gap, Pennsylvania</td>
                        </tr>
                        <tr>
                            <td>Rutherford B. Hayes</td>
                            <td>Delaware, Ohio</td>
                        </tr>
                        <tr>
                            <td>Dwight D. Eisenhower</td>
                            <td>Denison, Texas</td>
                        </tr>
                        <tr>
                            <td>Chester A. Arthur</td>
                            <td>Fairfield, Vermont</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /filtering -->


    <!-- Toggle options dynamically -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Toggle options dynamically</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">In some use cases you might need to allow users to toggle specific options dynamically via selects or checkboxes. This example demonstrates how a group of checkboxes can turn on and off certain options without changes in JS configuration. A general use case would be custom filtering. You can use <code>accuracy</code>, <code>punctuation</code>, <code>separateWordSearch</code>, <code>caseSensitive</code>, <code>ignoreJoiners</code> options. Note - some options such as RegExp can't be toggled and requires JS configuration.</p>

            <p class="fw-semibold">Example</p>
            <div class="bg-light bg-opacity-50 border rounded p-3">
                <div class="form-control-feedback form-control-feedback-start mb-3">
                    <input type="text" class="form-control" name="keyword-options" placeholder="Type 'lorem ipsum'">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="options" value="separateWordSearch" checked>
                        <span class="form-check-label">Separate word search</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="options" value="caseSensitive">
                        <span class="form-check-label">Case sensitive</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="options" value="diacritics">
                        <span class="form-check-label">Diacritics</span>
                    </label>
                </div>

                <hr>

                <div class="demo-target-options">
                    Lorem ipsum dolor sit āmet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna lorem ipsum aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, nò sea takimata sanctus est lörem ipsum dolor sit amet. Lörem ipsum dolor sit amet, consetetur lorem sadipscing elitr
                </div>
            </div>
        </div>
    </div>
    <!-- /toggle options dynamically -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/extensions/mark.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extension_mark.js')}}"></script>
@endsection
