@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Advanced Lines @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Chained transitions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chained transitions</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This variation of a line chart demonstrates a sequence of <code>chained transitions</code>. Clicking on the radio buttons changes the displayed metric. First, the line transitions to the new values. Then, the axes rescale to fit the new data. X-axes remain the same. Transitions may have per-element delays and durations, computed using functions of data similar to other operators. This makes it easy to stagger a transition for different elements, either based on data or index.</p>
            <p class="mb-3">
                <div class="form-check form-check-inline mb-0">
                    <input type="radio" class="form-check-input d3-transitions-control" value="New York" name="custom-inline-radio" id="new_york" checked>
                    <label class="form-check-label" for="new_york">New York</label>
                </div>

                <div class="form-check form-check-inline mb-0">
                    <input type="radio" class="form-check-input d3-transitions-control" value="San Francisco" name="custom-inline-radio" id="san_francisco">
                    <label class="form-check-label" for="san_francisco">San Francisco</label>
                </div>
            </p>

            <div class="chart-container">
                <div class="chart" id="d3-chained-transitions"></div>
            </div>
        </div>
    </div>
    <!-- /chained transitions -->


    <!-- Difference area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Difference area chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of bivariate area chart that uses <code>clipping</code> to alternate colors. This example demonstrates the difference in temperatures of 2 cities: When New York is warmer than San Francisco, the difference between the two is filled in green. When San Francisco is warmer, the difference is filled in orange. Colors can be set directly in JS code or in CSS. Demo data is stored in <code>TSV</code> file.</p>

            <div class="chart-container">
                <div class="chart" id="d3-difference"></div>
            </div>
        </div>
    </div>
    <!-- /difference area chart -->


    <!-- Pan and zoom -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Pan and zoom</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">An example of <code>d3.behavior.zoom</code> applied using <code>x-</code> and <code>y-scales</code>. This behavior automatically creates event listeners to handle zooming and panning gestures on a container element. Both mouse and touch events are supported. Scale extent from 1 to 10, try to move the graph inside area and use mouse wheel for zoom in/zoom out.</p>

            <div class="chart-container">
                <div class="chart" id="d3-pan-zoom"></div>
            </div>
        </div>
    </div>
    <!-- /pan and zoom -->


    <!-- Small multiples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Small multiples</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Multiple clarts within 1 container. This example shows a few interesting techniques with D3.js: 1. Stock prices in <code>CSV format</code> are loaded asynchronously; 2. Stock prices are <code>nested</code> by symbol; 3. The <code>x-scale</code> is the minimum and maximum across symbols; 4. The <code>y-scale</code> is local to each symbol; the domain is set per multiple; 5. Area and line shapes are used to fill and stroke separately.</p>

            <div class="chart-container">
                <div class="chart" id="d3-small-multiples"></div>
            </div>
        </div>
    </div>
    <!-- /small multiples -->


    <!-- Path transitions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Path transitions</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>path transitions</code>. When implementing realtime displays of time-series data, we often use the x-axis to encode time as position: as time progresses, new data comes in from the right, and old data slides out to the left. D3 has many built-in interpolators to simplify the transitioning of arbitrary values; an interpolator is a function that maps a parametric value t in the <code>domain [0,1]</code> to a color, number or arbitrary value.</p>
            <div class="chart-container">
                <div class="chart" id="d3-spline-transition"></div>
            </div>
        </div>
    </div>
    <!-- /path transitions -->


    <!-- Missing data with tooltips -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Missing data with tooltips</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of chart with <code>missed data</code> and <code>d3-tip</code> tooltip extension. Regions with missed data remain unfilled and reserve the space, so the whole chart looks like a full chart with empty areas. D3 tooltips are added to the <code>dots</code>, appended to the <code>body</code> and positioned on <code>top</code>.Tooltips support: styling via CSS, offsets and directions. Direction can be <code>n</code>, <code>s</code>, <code>e</code>, <code>w</code>, <code>nw</code>, <code>ne</code>, <code>sw</code> or <code>se</code>. The direction will also automatically be included as a classname on the tooltip element which allows for different style hooks based on the direction.</p>
            <div class="chart-container">
                <div class="chart" id="d3-missing-data"></div>
            </div>
        </div>
    </div>
    <!-- /missing data with tooltips -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_advanced_difference.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_advanced_missing.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_advanced_small_multiples.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_advanced_transitions.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_advanced_zoom.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_advanced_spline_transition.js')}}"></script>
@endsection
