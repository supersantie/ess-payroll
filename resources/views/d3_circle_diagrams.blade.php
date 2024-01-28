@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Circle Diagrams @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Venn diagrams -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic Venn diagrams</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Basic Venn diagram</h6>
                        <p class="mb-3">A <code>Venn diagram</code> is a diagram that shows all possible logical relations between a finite collection of sets. It's constructed with a collection of simple closed curves drawn in a plane, usually circles.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-venn-basic"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Custom colors</h6>
                        <p class="mb-3">Since basic example of Venn diagram has a set of default colors (example above), custom colors can be also applied. This example demonstrates a basic set of <code>D3.js</code> categorical colors that applied to the circles.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-venn-colors"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Custom layout</h6>
                        <p class="mb-3">Venn diagram layout uses <code>SVG</code> for drawing circles, that means it supports all available shape styling. This example demonstrates flexibility of SVG's <code>stroke</code> and <code>fill</code> properties and shows rings instead of circles.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-venn-rings"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Advanced Venn diagrams</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Weighted diagram</h6>
                        <p class="mb-3">An example providing weights on the importance of each intersection area. This defines the non-overlapping intersection areas as being unimportant - so that the sets cluster around set '2' here.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-venn-weighted"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Simple interaction</h6>
                        <p class="mb-3">Example of Venn diagram with simple <code>interaction</code>. On circle hover, text changes the size and circles change fill opacity. Basically all nodes support custom styling. Also added optional callback on circle click.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-venn-interactive"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Tooltip</h6>
                        <p class="mb-3">Example of Venn diagram with optional <code>tooltip</code>. Tooltip appears on <code>mouseover</code>, follows the cursor position on <code>moucemove</code> while it's on the circle and disappears on <code>mouseout</code>. Fully customizable via CSS.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-venn-tooltip"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /venn diagrams -->


    <!-- Chord diagrams -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic chords</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Basic chord diagram</h6>
                        <p class="mb-3">Basic example of <code>chord</code> diagram. Chord diagrams show directed relationships among a group of entities. This example also demonstrates simple interactivity by using mouseover filtering.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="mb-3">
                                <button type="button" class="btn btn-danger btn-sm" id="clear-basic">Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="render-basic">Render</button>
                            </div>

                            <div class="chart svg-center" id="d3-chord-basic"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Simple update and render</h6>
                        <p class="mb-3">A cleaner interface for updating and rendering the chart: chord returns an object; chord takes a container as its argument; <code>chord.update</code>, <code>chord.render</code> and <code>chord.clear</code> chart functions.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary btn-sm" id="update-chart">Update</button>
                                <button type="button" class="btn btn-danger btn-sm" id="clear-chart">Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="render-chart">Render</button>
                            </div>

                            <div class="chart svg-center" id="d3-chord-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Chord tweens</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Chord and tick tweens</h6>
                        <p class="mb-3">Example of <code>chord</code> and <code>tick</code> tweens for updates. Demonstrates an <code>animation</code> of ticks, labels and quadratic Bézier curves between arcs. During animation, all ticks and labels are hidden and appear after update.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary btn-sm" id="update-tween">Update</button>
                                <button type="button" class="btn btn-danger btn-sm" id="clear-tween">Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="render-tween">Render</button>
                            </div>

                            <div class="chart svg-center" id="d3-chord-tweens"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Arc tweens</h6>
                        <p class="mb-3">Example of <code>arc</code> tweens for updates. The chord layout is designed to work in conjunction with the chord shape and the arc shape. Animation of these arc shapes are demonstrated in this example.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary btn-sm" id="update-arc">Update</button>
                                <button type="button" class="btn btn-danger btn-sm" id="clear-arc">Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="render-arc">Render</button>
                            </div>

                            <div class="chart svg-center" id="d3-chord-arc"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /chord diagrams -->


    <!-- Sunburst diagrams -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic sunburst</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Sunburst diagram</h6>
                        <p class="mb-3">A <code>sunburst</code> is similar to the treemap, except it uses a <code>radial</code> layout. The root node of the tree is at the center, with leaves on the circumference. The area of each arc corresponds to its value.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="basic-options mb-3">
                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input mode-basic" value="size" name="sunbirst1" id="sunbirst1_size">
                                    <label class="form-check-label" for="sunbirst1_size">Size</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input mode-basic" value="count" name="sunbirst1" id="sunbirst1_count" checked>
                                    <label class="form-check-label" for="sunbirst1_count">Count</label>
                                </div>
                            </div>

                            <div class="chart svg-center" id="d3-sunburst-basic"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Sunburst with distortion</h6>
                        <p class="mb-3">A sunburst (radial partition layout) built with <code>D3</code>, featuring interactive distortion based on InterRing: when you click on a node, it expands to fill 80% of the parent arc. Clicking on the root node resets all distortions.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-sunburst-distortion"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Zoomable sunburst</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Zoom and update</h6>
                        <p class="mb-3">Example of <code>zooming</code> and <code>updating</code> data combination. Click on any arc to zoom in, and click on the center circle to zoom out. Use the Size/Count radio buttons to update the data.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="combined-options mb-3">
                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input mode-combined" value="size" name="sunbirst2" id="sunbirst2_size">
                                    <label class="form-check-label" for="sunbirst2_size">Size</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input mode-combined" value="count" name="sunbirst2" id="sunbirst2_count" checked>
                                    <label class="form-check-label" for="sunbirst2_count">Count</label>
                                </div>
                            </div>

                            <div class="chart svg-center" id="d3-sunburst-combined"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Zoomable sunburst</h6>
                        <p class="mb-3">Example of <code>zoomable</code> sunburst diagram. Presents child levels as a parent level on arc click. Demo data has 3 levels, click on any arc to zoom in and click on the center circle to zoom out.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="chart svg-center" id="d3-sunburst-zoom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /sunburst diagrams -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/venn.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/venn/venn_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/venn/venn_colors.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/venn/venn_rings.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/venn/venn_weighted.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/venn/venn_interactive.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/venn/venn_tooltip.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/chords/chord_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/chords/chord_chart.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/chords/chord_tweens.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/chords/chord_arcs.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/sunburst/sunburst_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/sunburst/sunburst_distortion.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/sunburst/sunburst_zoom.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/sunburst/sunburst_combined.js')}}"></script>
@endsection
