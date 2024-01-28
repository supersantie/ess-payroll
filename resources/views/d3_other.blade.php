@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Other Charts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Streamgraph chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Streamgraph chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>streamgraph</code> chart with data tooltip. Streamgraphs are a generalization of stacked area graphs where the baseline is free. By shifting the baseline, it is possible to minimize the change in slope (or “wiggle”) in individual series, thereby making it easier to perceive the thickness of any given layer across the data. Hover on area to see the tooltip with data on the top left corner.</p>

            <div class="chart-container">
                <div class="chart" id="traffic-sources"></div>
            </div>
        </div>
    </div>
    <!-- /streamgraph chart -->


    <!-- Waterfall chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Waterfall chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Basic example of <code>waterfall</code> chart. The waterfall chart is normally used for understanding how an initial value is affected by a series of intermediate positive or negative values. Usually the initial and the final values are represented by whole columns, while the intermediate values are denoted by floating columns. The columns are color-coded for distinguishing between positive and negative values. Axis labels rotated just for fun.</p>

            <div class="chart-container has-scroll">
                <div class="chart has-minimum-width" id="d3-waterfall"></div>
            </div>
        </div>
    </div>
    <!-- /waterfall chart -->


    <!-- Bubble chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bubble chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>bubble</code> chart layout. Bubble charts encode data in the area of circles. This type of chart can facilitate the understanding of social, economical, medical, and other scientific relationships. Although less perceptually-accurate than bar charts, they can pack hundreds of values into a small space. Data tooltip is displayed on circle hover.</p>

            <div class="chart-container has-scroll">
                <div class="chart" id="d3-bubbles"></div>
            </div>
        </div>
    </div>
    <!-- /bubble chart -->


    <!-- Zoomable treemap -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Zoomable treemap</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Treemaps display hierarchical (tree-structured) data as a set of nested rectangles. Each branch of the tree is given a rectangle, which is then tiled with smaller rectangles representing sub-branches. A leaf node's rectangle has an area proportional to a specified dimension on the data. Often the leaf nodes are colored to show a separate dimension of the data.</p>

            <div class="mb-3">
                <div class="form-check form-check-inline mb-0">
                    <input type="radio" class="form-check-input treemap-actions" value="size" name="treemap-mode" id="size" checked>
                    <label class="form-check-label" for="size">Size</label>
                </div>

                <div class="form-check form-check-inline mb-0">
                    <input type="radio" class="form-check-input treemap-actions" value="count" name="treemap-mode" id="mode">
                    <label class="form-check-label" for="mode">Count</label>
                </div>
            </div>

            <div class="chart-container has-scroll">
                <div class="chart has-minimum-width" id="d3-treemap"></div>
            </div>
        </div>
    </div>
    <!-- /zoomable treemap -->

</div>
<!-- /content area -->


@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/other/treemap.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/other/bubbles.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/other/streamgraph.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/other/waterfall.js')}}"></script>
@endsection
