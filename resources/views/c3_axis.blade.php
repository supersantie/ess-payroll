@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') C3 @endslot
@slot('subtitle') Chart Axis @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Categorized axes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Categorized axis</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-axis-categorized"></div>
            </div>
        </div>
    </div>
    <!-- /xategorized axes -->


    <!-- Additional axes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Additional axis</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-axis-additional"></div>
            </div>
        </div>
    </div>
    <!-- /additional axes -->


    <!-- Axis tick culling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Axis tick culling</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-axis-tick-culling"></div>
            </div>
        </div>
    </div>
    <!-- /axis tick culling -->


    <!-- Axis tick rotation -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Axis tick rotation</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-axis-tick-rotation"></div>
            </div>
        </div>
    </div>
    <!-- /axis tick rotation -->


    <!-- Axis labels -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Additional axis labels</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-axis-labels"></div>
            </div>
        </div>
    </div>
    <!-- /axis labels -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3v5.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/c3/c3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/c3/c3_axis.js')}}"></script>
@endsection
