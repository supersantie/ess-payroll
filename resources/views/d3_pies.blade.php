@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Pie Charts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic pie charts -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Pie charts</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Basic pie chart</h6>
                        <p class="mb-3">Example of a simple <code>pie chart</code> constructed from a CSV file. The chart employs a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - color encoding; <code>d3.svg.arc</code> - display arcs; <code>d3.layout.pie</code> - compute arc angles from data.</p>

                        <div class="chart-container text-center">
                            <div class="chart svg-center" id="d3-pie-basic"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Pie entry transition</h6>
                        <p class="mb-3">Example of simple entry transition of a <code>pie chart</code>. A transition is a special type of selection where the operators apply smoothly over time rather than instantaneously. You derive a transition from a selection using the transition operator.</p>

                        <div class="chart-container text-center">
                            <button type="button" class="btn btn-primary btn-sm pie-animation mb-3">Animate</button>
                            <div class="chart svg-center" id="d3-pie-entry-animation"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Pie chart update</h6>
                        <p class="mb-3">This variation of a <code>pie chart</code> demonstrates how to update values with an animated transition. Clicking on the radio buttons changes the displayed metric.</p>

                        <div class="chart-container text-center">
                            <div class="pie-radios mb-3">
                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input pie-dataset" value="apples" name="fruits-pie" id="pie_apple" checked>
                                    <label class="form-check-label" for="pie_apple">Apples</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input pie-dataset" value="oranges" name="fruits-pie" id="pie_orange">
                                    <label class="form-check-label" for="pie_orange">Oranges</label>
                                </div>
                            </div>

                            <div class="chart svg-center" id="d3-pie-update"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Pie arc tween</h6>
                        <p class="mb-3">An example of <code>pie chart</code> tweening arcs, <code>attrTween</code> transitions the value of the attribute with the specified name according to the specified <code>tween</code> function. The starting and ending value of the transition are determined by <code>tween</code>.</p>

                        <div class="chart-container text-center">
                            <div class="chart svg-center" id="d3-pie-arc-tween"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Donut charts</h5>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Basic donut chart</h6>
                        <p class="mb-3">Example of a simple <code>donut chart</code> constructed from a CSV file. The chart employs a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - color encoding; <code>d3.svg.arc</code> - display arcs; <code>d3.layout.pie</code> - compute arc angles from data.</p>

                        <div class="chart-container text-center">
                            <div class="chart svg-center" id="d3-donut-basic"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Donut entry transition</h6>
                        <p class="mb-3">Example of simple entry transition of a <code>donut chart</code>. A transition is a special type of selection where the operators apply smoothly over time rather than instantaneously. You derive a transition from a selection using the transition operator.</p>

                        <div class="chart-container text-center">
                            <button type="button" class="btn btn-primary btn-sm donut-animation mb-3">Animate</button>
                            <div class="chart svg-center" id="d3-donut-entry-animation"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Donut chart update</h6>
                        <p class="mb-3">This variation of a <code>donut chart</code> demonstrates how to update values with an animated transition. Clicking on the radio buttons changes the displayed metric.</p>

                        <div class="chart-container text-center">
                            <div class="donut-radios mb-3">
                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input donut-dataset" value="lemons" name="fruits-donut" id="donut_lemon" checked>
                                    <label class="form-check-label" for="donut_lemon">Lemons</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input type="radio" class="form-check-input donut-dataset" value="melons" name="fruits-donut" id="donut_melon">
                                    <label class="form-check-label" for="donut_melon">Melons</label>
                                </div>
                            </div>

                            <div class="chart svg-center" id="d3-donut-update"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Donut arc tween</h6>
                        <p class="mb-3">An example of <code>donut chart</code> tweening arcs, <code>attrTween</code> transitions the value of the attribute with the specified name according to the specified <code>tween</code> function. The starting and ending value of the transition are determined by <code>tween</code>.</p>

                        <div class="chart-container text-center">
                            <div class="chart svg-center" id="d3-donut-arc-tween"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic pie charts -->


    <!-- Multiple pies -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Pie multiples</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6 class="fw-semibold">Pie multiples</h6>
                <p class="mb-3">An example of multiple <code>pie charts</code> created with <code>D3.js</code>. The data is represented as a two-dimensional array of numbers; each row in the array is mapped to a pie chart. Thus, each pie represents the relative value of a number (such as 1,013) within its rows. Note that in this dataset, the totals for each row are not equal.</p>

                <div class="chart-container text-center">
                    <div class="chart svg-inline" id="d3-pie-multiple"></div>
                </div>
            </div>

            <div class="mb-3">
                <h6 class="fw-semibold">Donut multiples</h6>
                <p class="mb-3">An example of multiple <code>donut charts</code> created with <code>D3.js</code>. The data is represented as a two-dimensional array of numbers; each row in the array is mapped to a pie chart. Thus, each pie represents the relative value of a number (such as 1,013) within its rows. Note that in this dataset, the totals for each row are not equal.</p>

                <div class="chart-container text-center">
                    <div class="chart svg-inline" id="d3-donut-multiple"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /multiple pies -->


    <!-- Multiples with nesting -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Nesting pie charts</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6 class="fw-semibold">Pie multiples with nesting</h6>
                <p class="mb-3">An example of multiple <code>pie charts</code> with nesting. The data is represented as a tabular array of objects; each row in the table is mapped to an arc, and rows are grouped into pie charts using <code>d3.nest</code>. Nesting allows elements in an array to be grouped into a hierarchical tree structure; think of it like the GROUP BY operator in SQL, except you can have multiple levels of grouping, and the resulting output is a tree rather than a flat table.</p>

                <div class="chart-container text-center">
                    <div class="chart svg-inline" id="d3-pie-nesting"></div>
                </div>
            </div>

            <div class="mb-3">
                <h6 class="fw-semibold">Donut multiples with nesting</h6>
                <p class="mb-3">An example of multiple <code>donut charts</code> with nesting. The data is represented as a tabular array of objects; each row in the table is mapped to an arc, and rows are grouped into pie charts using <code>d3.nest</code>. Nesting allows elements in an array to be grouped into a hierarchical tree structure; think of it like the GROUP BY operator in SQL, except you can have multiple levels of grouping, and the resulting output is a tree rather than a flat table.</p>

                <div class="chart-container text-center">
                    <div class="chart svg-inline" id="d3-donut-nesting"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /multiples with nesting -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/pies/pie_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/pie_entry_animation.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/pie_multiple.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/pie_multiple_nesting.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/pie_update.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/pie_arc_tween.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/donut_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/donut_entry_animation.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/donut_multiple.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/donut_multiple_nesting.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/donut_update.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/pies/donut_arc_tween.js')}}"></script>
@endsection
