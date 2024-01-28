@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Basic Bars @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Vertical bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Vertical bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of simple <code>vertical</code> bar chart based on <code>D3.js</code> library. This simple bar chart is constructed from a TSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.format</code> - format percentages; <code>d3.scale.ordinal</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-vertical"></div>
            </div>
        </div>
    </div>
    <!-- /vertical bar chart -->


    <!-- Horizontal bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Horizontal bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of simple <code>horizontal</code> bar chart based on <code>D3.js</code> library. This simple bar chart is constructed from a TSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.format</code> - format percentages; <code>d3.scale.ordinal</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-horizontal"></div>
            </div>
        </div>
    </div>
    <!-- /horizontal bar chart -->


    <!-- Tooltip implementation -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tooltip implementation</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of bar chart with implemented data tooltip. Tooltip functionality is based on <code>D3.tip</code> addition to the <code>D3.js</code> library. For initialization create and return a configurable function for a tooltip. The tip must be called on the context of the target visualization. Tooltips support: styling via CSS, offsets and directions. Direction can be <code>n</code>, <code>s</code>, <code>e</code>, <code>w</code>, <code>nw</code>, <code>ne</code>, <code>sw</code> or <code>se</code>.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-tooltip"></div>
            </div>
        </div>
    </div>
    <!-- /tooltip implementation -->


    <!-- Grouped bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Grouped bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This <code>grouped</code> bar chart is constructed from a CSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - x-position encoding and color encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.format</code> - SI prefix formatting (e.g., “10M” for 10,000,000); <code>d3.max</code> - compute domains; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-grouped"></div>
            </div>
        </div>
    </div>
    <!-- /grouped bar chart -->


    <!-- Stacked bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This <code>stacked</code> bar chart is constructed from a CSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - x-position encoding and color encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.format</code> - SI prefix formatting (e.g., “10M” for 10,000,000); <code>d3.max</code> - compute domains; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked bar chart -->


    <!-- Normalized stacked bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Normalized stacked bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>normalized</code> stacked bar chart. This variation of a bar chart shows percentages rather than absolute numbers and fills the whole chart area. <code>D3.js</code> library allows us to add transitions between different types of charts. The most common transition is from <code>stacked</code> to <code>grouped</code> chart. Also this type of normalized bar charts can have additional labels for better readability.</p>

            <div class="chart-container">
                <div class="chart" id="d3-bar-normalized"></div>
            </div>
        </div>
    </div>
    <!-- /normalized stacked bar chart -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_basic_vertical.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_basic_horizontal.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_basic_tooltip.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_basic_grouped.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_basic_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/bars/bars_basic_stacked_normalized.js')}}"></script>
@endsection
