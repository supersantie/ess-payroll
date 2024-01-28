@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECharts @endslot
@slot('subtitle') Funnels &amp; Calendars @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic and sorting -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Basic funnel -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic funnel chart</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="funnel_basic"></div>
                    </div>
                </div>
            </div>
            <!-- /basic funnel -->

        </div>

        <div class="col-xl-6">

            <!-- Data sorting control -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data sorting control</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="funnel_sorting"></div>
                    </div>
                </div>
            </div>
            <!-- /data sorting control -->

        </div>
    </div>
    <!-- /basic and sorting -->


    <!-- Funnel alignment -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Right funnel -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Right funnel alignment</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="funnel_right"></div>
                    </div>
                </div>
            </div>
            <!-- /right funnel -->

        </div>

        <div class="col-xl-6">

            <!-- Left funnel -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Left funnel alignment</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="funnel_left"></div>
                    </div>
                </div>
            </div>
            <!-- /left funnel -->

        </div>
    </div>
    <!-- /funnel alignment -->


    <!-- Multiple funnels -->
    <div class="row">
        <div class="col-xl-6">

            <!-- Multiple funnels (overlay) -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Multiple funnels (overlay)</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="funnel_multiple_overlay"></div>
                    </div>
                </div>
            </div>
            <!-- /multiple funnels (overlay) -->

        </div>

        <div class="col-xl-6">

            <!-- Multiple funnels (separate) -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Multiple funnels (separate)</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="funnel_multiple_separate"></div>
                    </div>
                </div>
            </div>
            <!-- /multiple funnels (separate) -->

        </div>
    </div>
    <!-- /multiple funnels -->


    <!-- Single calendar -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Single calendar</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="calendar_single" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    <!-- /single calendar -->


    <!-- Multiple calendars -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiple calendars</h5>
        </div>

        <div class="card-body">
            <div class="chart-container">
                <div class="chart" id="calendar_multiple" style="height: 720px;"></div>
            </div>
        </div>
    </div>
    <!-- /multiple calendars -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/echarts/funnels/funnel_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/funnels/funnel_sorting.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/funnels/funnel_right.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/funnels/funnel_left.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/funnels/funnel_multiple_overlay.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/funnels/funnel_multiple_separate.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/calendars/calendar_single.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/calendars/calendar_multiple.js')}}"></script>
@endsection
