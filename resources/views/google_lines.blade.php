@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Google @endslot
@slot('subtitle') Line Charts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Simple line chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Simple line chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of simple <code>line</code> chart based on Google visualization library. A line chart or line graph is a type of chart which displays information as a series of data points called 'markers' connected by straight line segments. Line Charts show how a particular data changes at equal intervals of time. A line chart is rendered within the browser using <code>SVG</code> or <code>VML</code>. Displays tips when hovering over points.</p>

            <div class="chart-container">
                <div class="chart" id="google-line"></div>
            </div>
        </div>
    </div>
    <!-- /simple line chart -->


    <!-- Simple area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Simple area chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>area</code> chart. An area chart or area graph displays graphically quantitive data. It is based on the line chart. The area between axis and line are commonly emphasized with colors, textures and hatchings. Commonly one compares with an area chart two or more quantities. An area chart that is rendered within the browser using <code>SVG</code> or <code>VML</code>. Displays tips when hovering over points.</p>

            <div class="chart-container">
                <div class="chart" id="google-area"></div>
            </div>
        </div>
    </div>
    <!-- /simple area chart -->


    <!-- Stacked area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked area chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>stacked area</code> chart. By default, the area chart draws the series on top of one another. You can stack them atop one another instead, so that the data values at each x-value are summed. The order of the legend entries in stacked chart is different - it is reversed, placing series 0 at the bottom, to better correspond with the stacking of the series elements, making the legend correspond to the data.</p>

            <div class="chart-container">
                <div class="chart" id="google-area-stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked area chart -->


    <!-- Line intervals -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Line intervals</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>line intervals</code> in charts. Intervals around a series might be used to portray confidence intervals, minimum and maximum values around a value, percentile sampling, or anything else that requires a varying margin around a series. Line intervals are sometimes used to show the raw data from which a trendline was extracted. To draw a trendline on a chart, use the trendlines option and specify which data series to use.</p>

            <div class="chart-container">
                <div class="chart" id="google-line-intervals"></div>
            </div>
        </div>
    </div>
    <!-- /line intervals -->


    <!-- Area intervals -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Area intervals</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>area intervals</code>in charts. An area interval renders interval data as a set of nested shaded areas. Nesting of pairs of columns is similar to that of box intervals, except that an even number of columns is required. This is accomplished by setting style to <code>'area'</code>. There are six styles of interval: <code>line</code>, <code>bar</code>, <code>box</code>, <code>stick</code>, <code>point</code>, and <code>area</code>. For even greater customization, intervals styles can be combined inside one chart.</p>

            <div class="chart-container">
                <div class="chart" id="google-area-intervals"></div>
            </div>
        </div>
    </div>
    <!-- /area intervals -->


    <!-- Stepped area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stepped area chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>stepped area</code> chart. A stepped area chart is rendered within the browser using <code>SVG</code> or <code>VML</code>. Displays tips when hovering over steps. The Step Line chart type is similar to the Line chart type, but it does not use the shortest distance to connect two data points. Instead, this chart type uses vertical and horizontal lines to connect the data points in a series forming a step-like progression.</p>

            <div class="chart-container">
                <div class="chart" id="google-area-stepped"></div>
            </div>
        </div>
    </div>
    <!-- /stepped area chart -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/google/lines/lines.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/lines/area.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/lines/area_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/lines/line_intervals.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/lines/area_intervals.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/lines/area_stepped.js')}}"></script>
@endsection
