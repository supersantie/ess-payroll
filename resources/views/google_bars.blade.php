@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Google @endslot
@slot('subtitle') Bar Charts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Column chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Column chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A column graph is a chart that uses <code>vertical</code> bars to show comparisons among categories. One axis of the chart shows the specific categories being compared, and the other axis represents a discrete value. Like all Google charts, column charts display tooltips when the user hovers over the data. By default, text labels are hidden, but can be turned on in chart settings.</p>

            <div class="chart-container">
                <div class="chart" id="google-column"></div>
            </div>
        </div>
    </div>
    <!-- /column chart -->


    <!-- Stacked column chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stacked column chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Stacked <code>column</code> charts present the information in the same sequence on each bar. The stacked bar chart stacks bars that represent different groups on top of each other. The height of the resulting bar shows the combined result of the groups. However, stacked bar charts are not suited to datasets where some groups have negative values. In such cases, grouped bar charts are preferable.</p>

            <div class="chart-container">
                <div class="chart" id="google-column-stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked column chart -->


    <!-- Bar chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bar chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A bar graph is a chart that uses <code>horizontal</code> bars to show comparisons among categories. One axis of the chart shows the specific categories being compared, and the other axis represents a discrete value. Like all Google charts, column charts display tooltips when the user hovers over the data. By default, text labels are hidden, but can be turned on in chart settings.</p>

            <div class="chart-container">
                <div class="chart" id="google-bar"></div>
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
            <p class="mb-3">Stacked <code>column</code> charts present the information in the same sequence on each bar. The stacked bar chart stacks bars that represent different groups on top of each other. The height of the resulting bar shows the combined result of the groups. However, stacked bar charts are not suited to datasets where some groups have negative values. In such cases, grouped bar charts are preferable.</p>

            <div class="chart-container">
                <div class="chart" id="google-bar-stacked"></div>
            </div>
        </div>
    </div>
    <!-- /stacked bar chart -->


    <!-- Simple histogram -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Simple histogram</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>histogram</code> is a chart that groups numeric data into bins, displaying the bins as segmented columns. They're used to depict the distribution of a dataset: how often values fall into ranges. Google Charts automatically chooses the number of bins for you. All bins are equal width and have a height proportional to the number of data points in the bin. In other respects, histograms are similar to column charts.</p>

            <div class="chart-container">
                <div class="chart" id="google-histogram"></div>
            </div>
        </div>
    </div>
    <!-- /simple histogram -->


    <!-- Combo chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Combo chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>combo</code> chart based on Google Visualization library. A chart that lets you render each series as a different marker type from the following list: line, area, bars, candlesticks, and stepped area. To assign a default marker type for series, specify the seriesType property. Use the series property to specify properties of each series individually.</p>

            <div class="chart-container">
                <div class="chart" id="google-combo"></div>
            </div>
        </div>
    </div>
    <!-- /combo chart -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/google/bars/column.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/bars/column_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/bars/bar.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/bars/bar_stacked.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/bars/histogram.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/bars/combo.js')}}"></script>
@endsection
