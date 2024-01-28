@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') C3 @endslot
@slot('subtitle') Chart Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Chart grid -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart grid</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-grid-lines"></div>
            </div>
        </div>
    </div>
    <!-- /chart grid -->


    <!-- Chart grid x lines -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart X lines</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-grid-lines-x"></div>
            </div>
        </div>
    </div>
    <!-- /chart grid x lines -->


    <!-- Chart grid Y lines -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chart Y lines</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-grid-lines-y"></div>
            </div>
        </div>
    </div>
    <!-- /chart grid Y lines -->


    <!-- Show rects on chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Show rects on chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-grid-region"></div>
            </div>
        </div>
    </div>
    <!-- /show rects on chart -->


    <!-- Custom data regions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom data regions</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-grid-chart-region"></div>
            </div>
        </div>
    </div>
    <!-- /custom data regions -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3v5.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/c3/c3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/c3/c3_grid.js')}}"></script>
@endsection
