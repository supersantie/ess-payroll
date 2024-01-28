@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Basic Lines @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Simple line chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Simple line chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of simple <code>line chart</code>. Data stores in <code>.tsv</code> file. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.extent</code> - compute domains; <code>d3.svg.axis</code> - display axes; <code>d3.svg.line</code> - display line shape.</p>

            <div class="chart-container">
                <div class="chart" id="d3-line-basic"></div>
            </div>
        </div>
    </div>
    <!-- /simple line chart -->


    <!-- Area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Area chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>area chart</code>. Lines are hidden by default, but can be easily added in chart options. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.extent</code> and <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

            <div class="chart-container">
                <div class="chart" id="d3-area-basic"></div>
            </div>
        </div>
    </div>
    <!-- /area chart -->


    <!-- Bivariate area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bivariate Area Chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>two-value</code> area chart. Lines as in previous example are optional. Data stored in <code>.tsv</code> file. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.extent</code>, <code>d3.min</code> and <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

            <div class="chart-container">
                <div class="chart" id="d3-area-bivariate"></div>
            </div>
        </div>
    </div>
    <!-- /bivariate area chart -->


    <!-- Multiple series -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiple series</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>multiple series</code> line chart. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.scale.category10</code>, <code>d3.scale.ordinal </code>- color encoding; <code>d3.extent</code>, <code>d3.min</code> and <code>d3.max</code> - compute domains; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes; <code>d3.svg.line</code> - display line shape.</p>

            <div class="chart-container">
                <div class="chart" id="d3-line-multi-series"></div>
            </div>
        </div>
    </div>
    <!-- /multiple series -->


    <!-- Stacked areas -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked areas</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>stacked area</code> chart. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.format</code> - format percentages; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.scale.category20</code>, <code>d3.scale.ordinal</code> - color encoding; <code>d3.extent</code> and <code>d3.max</code> - compute domains; <code>d3.layout.stack</code> - compute stacked y-positions; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

            <div class="chart-container">
                <div class="chart" id="d3-area-stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked areas -->


    <!-- Stacked areas via nest -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked areas via nest</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of stacked areas via nest, constructed from a CSV file. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.format</code> - format percentages; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.scale.category20</code>, <code>d3.scale.ordinal</code> - color encoding; <code>d3.extent</code> and <code>d3.max</code> - compute domains; <code>d3.layout.stack</code> - compute stacked y-positions; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

            <div class="chart-container">
                <div class="chart" id="d3-area-stacked-nest"></div>
            </div>
        </div>
    </div>
    <!-- /stacked areas via nest -->


    <!-- Gradient encoding -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Gradient encoding</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This variation of a line chart demonstrates how to use a <code>linear gradient</code> as a quantitative color encoding redundant with <code>y-position</code>. The gradient units are defined as userSpaceOnUse, such that the gradient stops can be positioned explicitly rather than based on the line’s bounding box.</p>

            <div class="chart-container">
                <div class="chart" id="d3-line-gradient"></div>
            </div>
        </div>
    </div>
    <!-- /gradient encoding -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic_bivariate.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic_area.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic_multi_series.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic_stacked_nest.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/lines/lines_basic_gradient.js')}}"></script>
@endsection
