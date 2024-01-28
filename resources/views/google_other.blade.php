@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Google @endslot
@slot('subtitle') Other Examples @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Geo chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Geo chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>geochart</code> is a map of a country, a continent, or a region with areas identified in one of three ways: <span class="fw-semibold">region</span> mode, <span class="fw-semibold">markers</span> mode and <span class="fw-semibold">text</span> mode. A geochart is rendered within the browser using <code>SVG</code> or <code>VML</code>. Note that the geochart is not scrollable or draggable, and it's a line drawing rather than a terrain map. The <code>regions</code> style fills entire regions (typically countries) with colors corresponding to the values that you assign.</p>

            <div class="chart-container text-center has-scroll">
                <div class="d-inline-block" id="google-geo-region"></div>
            </div>
        </div>
    </div>
    <!-- /geo chart -->


    <!-- Trendlines -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Trendlines</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>trendline</code> is a line superimposed on a chart revealing the overall direction of the data. Google Charts can automatically generate trendlines for Scatter Charts, Bar Charts, Column Charts, and Line Charts. Here, we display a generated trendline for Bar chart for each of two series, setting the labels in the legend to "Bug line" (for series 0) and "Test line" (series 1).</p>

            <div class="chart-container">
                <div class="chart" id="google-trendline"></div>
            </div>
        </div>
    </div>
    <!-- /trendlines -->


    <!-- Candlestick chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Candlestick chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>candlestick</code> chart is used to show an opening and closing value overlaid on top of a total variance. Candlestick charts are often used to show stock value behavior. In this chart, items where the opening value is less than the closing value (a gain) are drawn as filled boxes, and items where the opening value is more than the closing value (a loss) are drawn as hollow boxes.</p>

            <div class="chart-container">
                <div class="chart" id="google-candlestick"></div>
            </div>
        </div>
    </div>
    <!-- /candlestick chart -->


    <!-- Diff chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Diff chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>diff</code> chart is a chart designed to highlight the differences between two charts with comparable data. By making the changes between analogous values prominent, they can reveal variations between datasets. You create a diff chart by calling the computeDiff method with two datasets to generate a third dataset representing the diff, and then drawing that.</p>

            <div class="chart-container">
                <div class="chart" id="google-diff"></div>
            </div>
        </div>
    </div>
    <!-- /diff chart -->


    <!-- Sankey diagrams -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sankey diagrams</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>sankey diagram</code> is a visualization used to depict a flow from one set of values to another. The things being connected are called <span class="fw-semibold">nodes</span> and the connections are called <span class="fw-semibold">links</span>. Sankeys are best used when you want to show a many-to-many mapping between two domains (e.g., universities and majors) or multiple paths through a set of stages.</p>

            <div class="chart-container">
                <div class="chart" id="google-sankey"></div>
            </div>
        </div>
    </div>
    <!-- /sankey diagrams -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/google/other/geo.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/other/trendline.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/other/diff.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/other/sankey.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/other/candlestick.js')}}"></script>
@endsection
