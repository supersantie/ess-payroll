@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Areas @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic area -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic area</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="area_basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic area -->


    <!-- Stacked area -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked area</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="area_stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked area -->


    <!-- Reversed values axis -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Reversed value axis</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="area_reversed_axis"></div>
            </div>
        </div>
    </div>
    <!-- /reversed value axis -->


    <!-- Area multiples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Area multiples</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="area_multiple" style="height: 440px;"></div>
            </div>
        </div>
    </div>
    <!-- /area multiples -->


    <!-- Show values -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Show values</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="area_values"></div>
            </div>
        </div>
    </div>
    <!-- /show values -->


    <!-- Zoom option -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Area zoom</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="area_zoom"></div>
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
<script src="{{URL::asset('assets/demo/charts/echarts/lines/area_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/area_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/area_reversed_axis.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/area_multiple.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/area_point_values.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/lines/area_zoom.js')}}"></script>
@endsection
