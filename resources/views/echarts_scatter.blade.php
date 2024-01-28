@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Scatter @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic scatter -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic scatter chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="scatter_basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic scatter -->


    <!-- Bubble size calculation -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bubble size calculation</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="scatter_bubble_size"></div>
            </div>
        </div>
    </div>
    <!-- /bubble size calculation -->


    <!-- Large scale scatter -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Large scale scatter</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="scatter_scale"></div>
            </div>
        </div>
    </div>
    <!-- /large scale scatter -->


    <!-- Scale roaming -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Scale roaming</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="scatter_roaming"></div>
            </div>
        </div>
    </div>
    <!-- /scale roaming -->


    <!-- Category scatter -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Category scatter</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="scatter_category"></div>
            </div>
        </div>
    </div>
    <!-- /category scatter -->


    <!-- Punch card -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Punch card</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="scatter_punch"></div>
            </div>
        </div>
    </div>
    <!-- /punch card -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/scatter/scatter_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/scatter/scatter_size.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/scatter/scatter_scale.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/scatter/scatter_roaming.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/scatter/scatter_category.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/scatter/scatter_punch.js')}}"></script>
@endsection
