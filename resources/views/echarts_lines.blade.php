@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Lines @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic line -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic line</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="line_basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic line -->


    <!-- Stacked lines -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked lines</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="line_stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked lines -->


    <!-- Inverted axes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Inverted axes</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="line_inverted_axes"></div>
            </div>
        </div>
    </div>
    <!-- /inverted axes -->


    <!-- Line multiples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Line multiples</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="line_multiple" style="height: 440px;"></div>
            </div>
        </div>
    </div>
    <!-- /line multiples -->


    <!-- Show values -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Show values</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="line_values"></div>
            </div>
        </div>
    </div>
    <!-- /show values -->


    <!-- Zoom option -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Zoom option</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="line_zoom"></div>
            </div>
        </div>
    </div>
    <!-- /zoom option -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/lines/lines_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/lines_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/lines_inverted_axes.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/lines_multiple.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/lines_point_values.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/lines_zoom.js')}}"></script>
@endsection
