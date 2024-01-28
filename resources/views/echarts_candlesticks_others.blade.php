@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Candlesticks &amp; Others @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Radars -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Basic radar chart -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic radar chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="radar_basic"></div>
                    </div>
                </div>
            </div>
            <!-- /basic radar chart -->

        </div>

        <div class="col-xl-6">

            <!-- Filled radar areas -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Filled radar areas</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="radar_filled"></div>
                    </div>
                </div>
            </div>
            <!-- /filled radar areas -->

        </div>
    </div>
    <!-- /radars -->


    <!-- Gauges -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Basic gauge chart -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic gauge chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="gauge_basic"></div>
                    </div>
                </div>
            </div>
            <!-- /basic gauge chart -->

        </div>

        <div class="col-xl-6">

            <!-- Gauge styling options -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Gauge styling options</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="gauge_custom"></div>
                    </div>
                </div>
            </div>
            <!-- /gauge styling options -->

        </div>
    </div>
    <!-- /gauges -->


    <!-- Basic candlestick chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic candlestick chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="candlestick_basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic candlestick chart -->


    <!-- Candlestick with line -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Candlestick with line</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="candlestick_line"></div>
            </div>
        </div>
    </div>
    <!-- /candlestick with line -->


    <!-- Candlestick with scatter -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Candlestick with scatter</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="candlestick_scatter" style="height: 500px;"></div>
            </div>
        </div>
    </div>
    <!-- /candlestick with scatter -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/radar/radar_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/radar/radar_filled.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/gauge/gauge_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/gauge/gauge_custom.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/candlesticks/candlestick_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/candlesticks/candlestick_line.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/candlesticks/candlestick_scatter.js')}}"></script>
@endsection
