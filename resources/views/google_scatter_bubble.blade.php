@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Google @endslot
@slot('subtitle') Scatter &amp; Bubbles @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Bubble charts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bubble charts</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6 class="fw-semibold">Simple bubble chart</h6>
                <p class="mb-3">Example of a simple <code>bubble</code> chart. A bubble chart is used to visualize a data set with two to four dimensions. The first two dimensions are visualized as coordinates, the third as color and the fourth as size. Bubble charts can be considered a variation of the scatter plot, in which the data points are replaced with bubbles. By default all bubble charts display tips when hovering over bubbles. </p>

                <div class="chart-container">
                    <div class="chart" id="google-bubble"></div>
                </div>
            </div>

            <div class="mb-3">
                <h6 class="fw-semibold">Color by numbers</h6>
                <p class="mb-3">Example of a simple bubble chart, where the bubbles are colored in proportion to a value using the <code>colorAxis</code> option. Depending on the data, bubbles can have one or more colors. In this example we've set start and end colors, color scale will be based on them. Minimum and maximum values are set automatically. Both x-axes and y-axes are numeric in bubble charts unlike in other charts, where axes are numeric and categorical.</p>

                <div class="chart-container">
                    <div class="chart" id="google-bubble-gradient"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bubble charts -->


    <!-- Scatter charts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Scatter charts</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6 class="fw-semibold">Simple scatter chart</h6>
                <p class="mb-3">Example of a simple <code>scatter</code> chart. A scatter chart is a type of mathematical diagram using <span class="fw-semibold">Cartesian coordinates</span> to display values for two variables for a set of data. The data is displayed as a collection of points, each having the value of one variable determining the position on the horizontal axis and the value of the other variable determining the position on the vertical axis. When the user hovers over the points, tooltips are displayed with more information.</p>

                <div class="chart-container">
                    <div class="chart" id="google-scatter"></div>
                </div>
            </div>

            <div class="mb-3">
                <h6 class="fw-semibold">Diff scatter chart</h6>
                <p class="mb-3">A <code>diff chart</code> is a chart designed to highlight the differences between two charts with comparable data. By making the changes between analogous values prominent, they can reveal variations between datasets. You create a diff chart by calling the computeDiff method with two datasets to generate a third dataset representing the diff, and then drawing that. Supports all scatter chart options, as it jsut combines 2 charts into 1.</p>

                <div class="chart-container">
                    <div class="chart" id="google-scatter-diff"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bubble charts -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/google/bubbles/bubble.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/bubbles/bubble_gradient.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/scatter/scatter.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/scatter/scatter_diff.js')}}"></script>
@endsection
