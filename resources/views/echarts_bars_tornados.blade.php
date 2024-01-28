@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Bars &amp; Tornados @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic bars -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic bar chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic bars -->


    <!-- Stacked bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked bar chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked bar chart -->


    <!-- Stacked clustered bar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked clustered bar chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_stacked_clustered" style="height: 450px;"></div>
            </div>
        </div>
    </div>
    <!-- /stacked clustered bar -->


    <!-- Floating bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Floating bar chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_float"></div>
            </div>
        </div>
    </div>
    <!-- /floating bar chart -->


    <!-- Mix bar and line -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Mix bar and line</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_mix"></div>
            </div>
        </div>
    </div>
    <!-- /mix bar and line -->


    <!-- Negative stack tornado -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Negative stack tornado</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="tornado_negative_stack" style="height: 450px"></div>
            </div>
        </div>
    </div>
    <!-- /negative stack tornado -->


    <!-- Staggered labels tornado -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Staggered labels tornado</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="tornado_staggered" style="height: 450px"></div>
            </div>
        </div>
    </div>
    <!-- /staggered labels tornado -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/bars/bars_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/bars_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/bars_stacked_clustered.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/bars_floating.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/bars_line.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/tornado_negative_stack.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/tornado_staggered.js')}}"></script>
@endsection
