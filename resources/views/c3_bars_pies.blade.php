@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') C3 @endslot
@slot('subtitle') Bars &amp; Pies @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Pies -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic pie chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container text-center">
                        <div class="d-inline-block" id="c3-pie-chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic donut chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container text-center">
                        <div class="d-inline-block" id="c3-donut-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /pies -->


    <!-- Bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic bar chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-bar-chart"></div>
            </div>
        </div>
    </div>
    <!-- /bar chart -->


    <!-- Stacked bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked bar chart</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-bar-stacked-chart"></div>
            </div>
        </div>
    </div>
    <!-- /stacked bar chart -->


    <!-- Combined chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Combination of charts</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-combined-chart"></div>
            </div>
        </div>
    </div>
    <!-- /combined chart -->


    <!-- Scatter plot -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Scatter plot</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="c3-scatter-chart"></div>
            </div>
        </div>
    </div>
    <!-- /scatter plot -->

</div>
<!-- /content area -->


@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3v5.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/c3/c3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/c3/c3_bars_pies.js')}}"></script>
@endsection
