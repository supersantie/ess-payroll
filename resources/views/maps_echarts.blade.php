@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Maps @endslot
@slot('subtitle') ECharts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- World map -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">World vector map</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Apache ECharts is an open source Javascript visualization library with very extensive customization options and powerful rendering engine. The library provides more than 20 chart types available out of the box, along with a dozen components, and each of them can be arbitrarily combined to use. And progressive rendering and stream loading make it possible to render 10 million data in realtime. This example shows a simple <code>geo</code> chart type rendered in SVG.</p>

            <div class="map-container map-echarts" id="map_world"></div>
        </div>
    </div>
    <!-- /world map -->


    <!-- Map with scatter -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Combination with chart</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">ECharts engine allows you to combine multiple chart types with shared or multiple data sets. This example demonstrates a combination of <code>world</code> map and <code>scatter</code> chart. The demo data used in this example represents population by country. Countries and bubbles are both interactive: hover on bubbles to see the tooltip with details, hover on country to see the country name. This behaviour can be easily configured.</p>

            <div class="map-container map-echarts" id="map_world_scatter"></div>
        </div>
    </div>
    <!-- /map with scatter -->


    <div class="row">
        <div class="col-lg-6">

            <!-- Viewport -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Viewport</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">In this example, world map is zoomed in to a certain viewport (Europe) that is specified in <code>center</code> configuration option in longitude and latitude by default.</p>

                    <div class="map-container map-echarts" id="map_europe"></div>
                </div>
            </div>
            <!-- /viewport -->

        </div>

        <div class="col-lg-6">

            <!-- Effect scatter -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Effect scatter</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">ECharts maps support <code>effectScatter</code> series type, which adds the scatter (bubble) graph with ripple animation. The special animation effect can visually highlight some data.</p>

                    <div class="map-container map-echarts" id="map_europe_effect"></div>
                </div>
            </div>
            <!-- /effect scatter -->

        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">

            <!-- Enable scale -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Enable scale</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">Use <code>roam: 'scale'</code> option to enable map zooming on scroll. You can also use <code>scaleLimit</code> option to set minimum and maximum scaling, where the default value is <code>'1'</code>.</p>

                    <div class="map-container map-echarts" id="map_europe_scale"></div>
                </div>
            </div>
            <!-- /enable scale -->

        </div>

        <div class="col-lg-6">

            <!-- Enable move -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Enable move</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">If you set <code>roam</code> option to <code>'move'</code>, map becomes draggable, but not scalable. Zoom level and aspect ratio of the map are fixed in this case.</p>

                    <div class="map-container map-echarts" id="map_europe_move"></div>
                </div>
            </div>
            <!-- /enable move -->

        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">

            <!-- Enable scale and move -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Enable scale and move</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">If you set <code>roam</code> option to <code>true</code>, map becomes draggable and scalable. All options from both <code>scale</code> and <code>move</code> examples also work in this setup.</p>

                    <div class="map-container map-echarts" id="map_europe_scale_move"></div>
                </div>
            </div>
            <!-- /enable scale and move -->

        </div>

        <div class="col-lg-6">

            <!-- Initial zoom level -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Initial zoom level</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">You can control the initial zoom rate of current viewport with <code>zoom</code> option. The default value is <code>1</code>, in this example it's set to <code>6</code> to scale down Europe map.</p>

                    <div class="map-container map-echarts" id="map_europe_zoom_level"></div>
                </div>
            </div>
            <!-- /initial zoom level -->

        </div>
    </div>

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/maps/echarts/world.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/maps/echarts/map_world.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_world_scatter.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_europe.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_europe_scale.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_europe_move.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_europe_scale_move.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_europe_zoom_level.js')}}"></script>
<script src="{{URL::asset('assets/demo/maps/echarts/map_europe_effect.js')}}"></script>
@endsection
