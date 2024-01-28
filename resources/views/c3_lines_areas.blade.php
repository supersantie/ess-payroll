@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') C3 @endslot
@slot('subtitle') Lines &amp; Areas @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Simple line chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic line chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-line-chart"></div>
            </div>
        </div>
    </div>
    <!-- /simple line chart -->


    <!-- Line chart with regions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart with regions</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-line-regions-chart"></div>
            </div>
        </div>
    </div>
    <!-- /line chart with regions -->


    <!-- Area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Area chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-area-chart"></div>
            </div>
        </div>
    </div>
    <!-- /area chart -->


    <!-- Stacked area chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked area chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-area-stacked-chart"></div>
            </div>
        </div>
    </div>
    <!-- /stacked area chart -->


    <!-- Step chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Step chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-step-chart"></div>
            </div>
        </div>
    </div>
    <!-- /step chart -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3v5.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/c3/c3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/c3/c3_lines_areas.js')}}"></script>
@endsection
