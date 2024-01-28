@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Pies &amp; Donuts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Pie and donut -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Basic pie -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic pie chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_basic"></div>
                    </div>
                </div>
            </div>
            <!-- /basic pie -->

        </div>

        <div class="col-xl-6">

            <!-- Basic donut -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic donut chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_donut"></div>
                    </div>
                </div>
            </div>
            <!-- /basic donut -->

        </div>
    </div>
    <!-- /pie and donut -->


    <!-- Nested and infographic -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Nested pie chart -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Nested pie chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_nested"></div>
                    </div>
                </div>
            </div>
            <!-- /nested pie chart -->

        </div>

        <div class="col-xl-6">

            <!-- Infographic style -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Infographic style</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_infographic"></div>
                    </div>
                </div>
            </div>
            <!-- /infographic style -->

        </div>
    </div>
    <!-- /nested and infographic -->


    <!-- Nightingale roses -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Nightingale roses (hidden labels) -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Nightingale roses (hidden labels)</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_rose"></div>
                    </div>
                </div>
            </div>
            <!-- /nightingale roses (hidden labels) -->

        </div>

        <div class="col-xl-6">

            <!-- Nightingale roses (visible labels) -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Nightingale roses (visible labels)</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_rose_labels"></div>
                    </div>
                </div>
            </div>
            <!-- /nightingale roses (visible labels) -->

        </div>
    </div>
    <!-- /nightingale roses -->


    <!-- Multi levels and timeline -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Multi level donut chart -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Multi level donut chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_levels"></div>
                    </div>
                </div>
            </div>
            <!-- /multi level donut chart -->

        </div>

        <div class="col-xl-6">

            <!-- Pie chart timeline -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Pie chart timeline</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="pie_timeline"></div>
                    </div>
                </div>
            </div>
            <!-- /pie chart timeline -->

        </div>
    </div>
    <!-- /multi levels and timeline -->


    <!-- Donut multiples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Donut multiples</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart has-fixed-height" id="pie_multiples" style="height: 550px;"></div>
            </div>
        </div>
    </div>
    <!-- /donut multiples -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_donut.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_nested.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_infographic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_rose.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_rose_labels.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_levels.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_timeline.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/pies/pie_multiple.js')}}"></script>
@endsection
