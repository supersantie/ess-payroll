@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Advanced Lines @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Simple interaction -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Simple interaction</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This <code>interactive</code> bar chart demonstrates basic interactivity: tooltips that display bar value; multiple data sets with smooth animation between them; color range option; bar value position and appearance. "Change data set" checkbox changes data sets and launches smooth transition between them, uncheck this checkbox to change data set to the first one. <code>Tooltip</code> is a D3 plugin that is called directly in chart settings.</p>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input toggle-dataset" id="change_set">
                <label class="form-check-label" for="change_set">Change data set</label>
            </div>

            <div class="chart-container">
                <div class="chart" id="d3-simple-interaction"></div>
            </div>
        </div>
    </div>
    <!-- /simple interaction -->


    <!-- Sortable vertical bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sortable vertical bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This variation of a simple bar chart adds <code>sorting</code> with staggered delay and translucency to improve readability during the transition. Use the checkbox in the top right to turn sorting on or off. During the sort, bars keep their default colors for better visibility. There's an additional side padding added to the chart area, distance between bars as well as their size are fully customizable.</p>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input toggle-sort" id="sort_values">
                <label class="form-check-label" for="sort_values">Sort values</label>
            </div>

            <div class="chart-container">
                <div class="chart" id="d3-bar-sortable-vertical"></div>
            </div>
        </div>
    </div>
    <!-- /sortable vertical bar chart -->


    <!-- Sortable horizontal bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sortable horizontal bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Another example demonstrating how to <code>sort</code> a horizontal bar chart and animate the reordering. The staggered delay makes it easier to follow individual bars. As in horizontal bar chart example, bars keep their original colors. Optional value text can be placed on the left and right sides or centered. Bar height depend on chart container height and bar number displayed.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-sortable-horizontal"></div>
            </div>
        </div>
    </div>
    <!-- /sortable horizontal bar chart -->


    <!-- Stacked to multiples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked to multiples</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This variation of a stacked bar chart adds an option to change <code>stacked</code> bar chart <code>to multiple</code> on the fly by selecting the radio button. Chart labels move according to the bar group position. This type of layout and transitions are available for both bar directions - vertical and horizontal. It uses one data set for both chart types. Vertical axes labels are optional and hidden by default.</p>

            <p class="mb-3">
                <div class="form-check form-check-inline mb-0">
                    <input type="radio" class="form-check-input stacked-multiple" value="multiples" name="stacked-multiple" id="bar_multiples" checked>
                    <label class="form-check-label" for="bar_multiples">Multiples</label>
                </div>

                <div class="form-check form-check-inline mb-0">
                    <input type="radio" class="form-check-input stacked-multiple" value="stacked" name="stacked-multiple" id="bar_stacked">
                    <label class="form-check-label" for="bar_stacked">Stacked</label>
                </div>
            </p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-stacked-multiples"></div>
            </div>
        </div>
    </div>
    <!-- /stacked to multiples -->


    <!-- Histogram with tooltip -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Histogram with tooltip</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This example shows basic <code>histogram</code> with optional tooltip. The data is randomly generated. The values are then binned at regular intervals using D3’s histogram layout. The x-axis uses a linear scale, such that the tick values appear between bars; this provides better indication that each bar represents the count of values between its surrounding tick values.</p>

            <div class="chart-container">
                <div class="chart" id="d3-histogram"></div>
            </div>
        </div>
    </div>
    <!-- /histogram with tooltip -->


    <!-- Path transitions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hierarchical bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This bar chart visualizes hierarchical data using D3. Each blue bar represents a folder, whose length encodes the total size of all files in that folder (and all subfolders). Clicking on a bar dives into that folder, while clicking on the background bubbles back up to the parent folder. Data stored in JSON file.</p>

            <div class="chart-container">
                <div class="chart" id="d3-hierarchical-bars"></div>
            </div>
        </div>
    </div>
    <!-- /path transitions -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_advanced_simple_interaction.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_advanced_sortable_horizontal.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_advanced_sortable_vertical.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_advanced_stacked_multiple.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_advanced_histogram.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_advanced_hierarchical.js')}}"></script>
@endsection
