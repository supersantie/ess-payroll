@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') C3 @endslot
@slot('subtitle') Advanced Examples @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Transform charts -->
    <div class="card">
        <div class="card-header d-flex py-0">
            <h5 class="py-3 mb-0">Chart transforms</h5>
            <div class="ms-auto my-auto">
                <button type="button" class="btn btn-info btn-sm" id="btn-transform">Transform</button>
            </div>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-transform"></div>
            </div>
        </div>
    </div>
    <!-- /transform charts -->


    <!-- Zoomable chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Zoomable chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-chart-zoomable"></div>
            </div>
        </div>
    </div>
    <!-- /zoomable chart -->


    <!-- Chart with subchart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart with subchart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-subchart"></div>
            </div>
        </div>
    </div>
    <!-- /chart with subchart -->


    <!-- Chart label format -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart label format</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-label-format"></div>
            </div>
        </div>
    </div>
    <!-- /chart label format -->


    <!-- Chart data colors -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart data colors</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-data-color"></div>
            </div>
        </div>
    </div>
    <!-- /chart data colors -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3v5.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/c3/c3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/c3/c3_advanced.js')}}"></script>
@endsection
