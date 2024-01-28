@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Columns &amp; Waterfalls @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic columns</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic columns -->


    <!-- Stacked columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked columns</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked columns -->


    <!-- Thermometer chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Thermometer chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_thermometer"></div>
            </div>
        </div>
    </div>
    <!-- /thermometer chart -->


    <!-- Stacked clustered columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked clustered columns</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_clustered"></div>
            </div>
        </div>
    </div>
    <!-- /stacked clustered columns -->


    <!-- Compositive waterfall -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Compositive waterfall</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_compositive_waterfall"></div>
            </div>
        </div>
    </div>
    <!-- /compositive waterfall -->


    <!-- Change waterfall -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Change waterfall</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_change_waterfall"></div>
            </div>
        </div>
    </div>
    <!-- /change waterfall -->


    <!-- Columns timeline -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Columns timeline</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="columns_timeline"></div>
            </div>
        </div>
    </div>
    <!-- /columns timeline -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/bars/columns_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/columns_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/columns_thermometer.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/columns_stacked_clustered.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/columns_timeline.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/waterfall_compositive.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/waterfall_change.js')}}"></script>
@endsection
