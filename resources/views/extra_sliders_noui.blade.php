@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') NoUI Sliders @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic examples -->
    <div class="mb-3">
        <h6 class="mb-0">
            NoUI sliders
        </h6>
        <span class="text-muted d-block">Basic NoUI slider examples</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Slider handles</h6>
                <p class="mb-3">The number of handles can be set using the <code>start</code> option. This option accepts an array of initial handle positions</p>

                <div class="noui-height-helper" id="noui-slider-handles"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-handles-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-handles-upper-val"></span></span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Non-linear slider</h6>
                <p class="mb-3">Sliders can be created with ever-increasing increments by specifying the value for the slider at certain intervals</p>

                <div class="noui-height-helper" id="noui-slider-nonlinear"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-nonlinear-val"></span></span>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Values range</h6>
                <p class="mb-3">The range has a min and max value. If the min value is equal to the max value, handles are evenly spread across the slider</p>

                <div class="noui-height-helper" id="noui-slider-range"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-range-val"></span></span>
            </div>

            <div class="card card-body">
                <h6>Non-linear stepping</h6>
                <p class="mb-3">For every sub-range in a non-linear slider, stepping can be set. The <code>step</code> option only applies to the first sub-range</p>

                <div class="noui-height-helper" id="noui-slider-nonlinear-stepping"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-nonlinear-stepping-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-nonlinear-stepping-upper-val"></span></span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Stepping and snapping</h6>
                <p class="mb-3">The amount the slider changes on movement can be set using the <code>step</code> option. In this example the step is set to <code>10</code></p>

                <div class="noui-height-helper" id="noui-slider-stepping"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-stepping-val"></span></span>
            </div>

            <div class="card card-body">
                <h6>Snapping between steps</h6>
                <p class="mb-3">When a non-linear slider has been configured, the <code>snap</code> option can force the slider to jump between the specified values</p>

                <div class="noui-height-helper" id="noui-slider-snapping"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-snapping-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-snapping-upper-val"></span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic examples -->


    <!-- Slider behaviour -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Slider Behaviour
        </h6>
        <span class="text-muted d-block">Tapping, dragging, snapping etc.</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Slider behaviour</h6>
                <p class="mb-3">The range can be set to drag, and handles can move to taps. All of them can be enable by using <code>behaviour</code> option</p>

                <div class="noui-height-helper" id="noui-slider-behaviour"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-behaviour-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-behaviour-upper-val"></span></span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Fixed dragging</h6>
                <p class="mb-3">In this example the slider keeps the distance between handles fixed when the <code>'drag'</code> flag is set to <code>drag-fixed</code> value</p>

                <div class="noui-height-helper" id="noui-slider-drag-fixed"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-fixed-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-fixed-upper-val"></span></span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Tap behaviour</h6>
                <p class="mb-3">Set <code>behaviour</code> option to <code>tap</code> to allow slider handle to snap to a clicked location with a smooth transition. Default option.</p>

                <div class="noui-height-helper" id="noui-slider-tap"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-slider-tap-val"></span></span>
            </div>

            <div class="card card-body">
                <h6>Snap behaviour</h6>
                <p class="mb-3">Use <code>snap</code> to allow handle to snap to a clicked location. It can immediatly be moved, without a <code>mouseup + mousedown</code></p>

                <div class="noui-height-helper" id="noui-slider-snap"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-slider-snap-val"></span></span>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Drag behaviour</h6>
                <p class="mb-3">Makes the range draggable. This slider configuration requires two handles and the <code>connect</code> option must be set to <code>true</code></p>

                <div class="noui-height-helper" id="noui-slider-drag"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-drag-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-drag-upper-val"></span></span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Combined options</h6>
                <p class="mb-3">Most <code>'behaviour'</code> flags can be combined. In this example we combined <code>drag</code> and <code>tap</code> with <code>'-'</code> divider</p>

                <div class="noui-height-helper" id="noui-slider-combined"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-combined-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-combined-upper-val"></span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /slider behaviour -->


    <!-- Pips and scales -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Pips and scales
        </h6>
        <span class="text-muted d-block">Adding a scale/pips to a slider</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Slider with pips</h6>
                <p class="mb-3">The <code>range</code> mode uses the range to determine where the pips should be. A pip is generated for every step</p>

                <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-range"></div>
            </div>

            <div class="card card-body">
                <h6>Count mode</h6>
                <p class="mb-3">The <code>count</code> mode can be used to generate a fixed number of pips. As with <code>positions</code> mode, the <code>stepped</code> option can be used</p>

                <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-count"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Filtered steps</h6>
                <p class="mb-3">In <code>steps</code> mode, a pip is generated for every step. The <code>filter</code> option can be used to filter the generated pips</p>

                <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-filter"></div>
            </div>

            <div class="card card-body">
                <h6>Values mode</h6>
                <p class="mb-3">The <code>values</code> mode is similar to <code>positions</code>, but it accepts values instead of percentages. The <code>stepped</code> option can be used</p>

                <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-values"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>RTL direction</h6>
                <p class="mb-3">Slider pips also support <code>RTL</code> direction. Set <code>direction</code> option to <code>rtl</code> to enable right-to-left direction for the slider</p>

                <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-rtl"></div>
            </div>

            <div class="card card-body">
                <h6>Positions mode</h6>
                <p class="mb-3">Example of <code>positions</code> mode. In positions mode, pips are generated at percentage-based positions on the slider</p>

                <div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-positions"></div>
            </div>
        </div>
    </div>
    <!-- /pips and scales -->


    <!-- Advanced examples -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Advanced examples
        </h6>
        <span class="text-muted d-block">More complex NoUI slider examples</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Slider with tooltips</h6>
                <p class="mb-3">Sliders support a basic tooltip. The <code>tooltips</code> option can also accept formatting options to format the tooltips content</p>

                <div class="noui-slider-danger noui-height-helper" id="noui-slider-tooltip"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-tooltip-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-tooltip-upper-val"></span></span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Connect to lower side</h6>
                <p class="mb-3">The <code>connect</code> option can be used to control the bar between the handles or the edges of the slider</p>

                <div class="noui-slider-primary noui-height-helper" id="noui-slider-connect-lower"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-slider-connect-lower-val"></span></span>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Min handles distance</h6>
                <p class="mb-3">When using two handles, the minimum distance between the handles can be set using the <code>margin</code> option</p>

                <div class="noui-slider-danger noui-height-helper" id="noui-slider-margin"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-margin-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-margin-upper-val"></span></span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Skipping steps</h6>
                <p class="mb-3">When a slider has been configured, the <code>snap</code> option can be set to <code>true</code> to force the slider to jump between values</p>

                <div class="noui-slider-primary noui-height-helper" id="noui-slider-skip-steps"></div>

                <div class="clearfix">
                    <span class="mt-3 float-start">Value: <span class="fw-semibold" id="noui-slider-skip-lower-val"></span></span>
                    <span class="mt-3 float-end">Value: <span class="fw-semibold" id="noui-slider-skip-upper-val"></span></span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>RTL slider direction</h6>
                <p class="mb-3">By default the sliders are top-to-bottom and left-to-right, but this can be changed using the <code>direction</code> option</p>

                <div class="noui-slider-danger noui-height-helper" id="noui-slider-direction"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-slider-direction-val"></span></span>
            </div>

            <div class="card card-body">
                <h6>Connect to upper side</h6>
                <p class="mb-3">In this example the <code>connect</code> option is set to <code>upper</code> to connect handle to the upper side of the slider</p>

                <div class="noui-slider-primary noui-height-helper" id="noui-slider-connect-upper"></div>

                <span class="mt-3">Value: <span class="fw-semibold" id="noui-slider-connect-upper-val"></span></span>
            </div>
        </div>
    </div>
    <!-- /advanced examples -->


    <!-- Vertical sliders -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Vertical sliders
        </h6>
        <span class="text-muted d-block">NoUI vertical slider orientation</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Default vertical slider</h6>
                <p class="mb-3">The <code>orientation</code> setting can be used to set the slider to <code>'vertical'</code>. Note that the height needs to be set</p>

                <div>
                    <div class="noui-vertical-height-helper" id="noui-slider-values1"></div>
                    <div class="noui-vertical-height-helper" id="noui-slider-values2"></div>
                    <div class="noui-vertical-height-helper" id="noui-slider-values3"></div>
                    <div class="noui-vertical-height-helper" id="noui-slider-values4"></div>
                </div>
            </div>

            <div class="card card-body">
                <h6>Vertical ranges</h6>
                <p class="mb-3">The range has a min and max value. If the min value is equal to the max value, handles are evenly spread across the slider</p>

                <div>
                    <div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-range1"></div>
                    <div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-range2"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Connect to lower side</h6>
                <p class="mb-3">The <code>connect</code> option can be used to control the bar between the handles or the edges of the slider</p>

                <div>
                    <div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-upper1"></div>
                    <div class="noui-slider-success noui-vertical-height-helper" id="noui-slider-upper2"></div>
                    <div class="noui-slider-danger noui-vertical-height-helper" id="noui-slider-upper3"></div>
                    <div class="noui-slider-info noui-vertical-height-helper" id="noui-slider-upper4"></div>
                </div>
            </div>

            <div class="card card-body">
                <h6>Top to bottom pips</h6>
                <p class="mb-3">The <code>range</code> mode uses the range to determine where the pips should be. A pip is generated for every step</p>

                <div>
                    <div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-top1"></div>
                    <div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-top2"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Connect to upper side</h6>
                <p class="mb-3">In this example the <code>connect</code> option is set to <code>upper</code> to connect handle to the upper side of the slider</p>

                <div>
                    <div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-lower1"></div>
                    <div class="noui-slider-success noui-vertical-height-helper" id="noui-slider-lower2"></div>
                    <div class="noui-slider-danger noui-vertical-height-helper" id="noui-slider-lower3"></div>
                    <div class="noui-slider-info noui-vertical-height-helper" id="noui-slider-lower4"></div>
                </div>
            </div>

            <div class="card card-body">
                <h6>Bottom to top pips</h6>
                <p class="mb-3">Slider pips also support RTL direction. Set <code>direction</code> option to <code>rtl</code> to enable right-to-left direction for the slider</p>

                <div>
                    <div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-bottom1"></div>
                    <div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-bottom2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /vertical sliders -->


    <!-- Slider colors title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Slider colors
        </h6>
        <span class="text-muted d-block">Contextual NoUI slider alternatives</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Default slider</h6>
                <p class="mb-3">By default all sliders are using <code>primary</code> color. You can override it by changing <code>--slider-connect-bg</code> variable</p>

                <div class="mb-1 noui-height-helper" id="noui-slider-color-demo1"></div>
            </div>

            <div class="card card-body">
                <h6>Success slider style</h6>
                <p class="mb-3">Use optional <code>.noui-slider-success</code> class to change slider connect background color to <code>success</code></p>

                <div class="noui-slider-success mb-1 noui-height-helper" id="noui-slider-color-demo2"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Secondary slider style</h6>
                <p class="mb-3">Use optional <code>.noui-slider-secondary</code> class to change slider connect background color to <code>secondary</code></p>

                <div class="noui-slider-secondary mb-1 noui-height-helper" id="noui-slider-color-demo3"></div>
            </div>

            <div class="card card-body">
                <h6>Warning slider style</h6>
                <p class="mb-3">Use optional <code>.noui-slider-warning</code> class to change slider connect background color to <code>warning</code></p>

                <div class="noui-slider-warning mb-1 noui-height-helper" id="noui-slider-color-demo4"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Danger slider style</h6>
                <p class="mb-3">Use optional <code>.noui-slider-danger</code> class to change slider connect background color to <code>danger</code></p>

                <div class="noui-slider-danger mb-1 noui-height-helper" id="noui-slider-color-demo5"></div>
            </div>

            <div class="card card-body">
                <h6>Info slider style</h6>
                <p class="mb-3">Use optional <code>.noui-slider-info</code> class to change slider connect background color to <code>info</code></p>

                <div class="noui-slider-info mb-1 noui-height-helper" id="noui-slider-color-demo6"></div>
            </div>
        </div>
    </div>
    <!-- /slider colors -->


    <!-- Sizes and styles -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Other slider options
        </h6>
        <span class="text-muted d-block">Optional slider settings</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Sizes. Default handle</h6>
                <p class="mb-3">Sliders support 2 optional sizes: <code>large</code> and <code>small</code>. Use <code>.noui-slider-[lg|sm]</code> classes to change the size</p>

                <div class="noui-slider-primary noui-slider-lg noui-height-helper" id="slider-default-lg" style="margin-bottom: 30px;"></div>
                <div class="noui-slider-danger noui-height-helper" id="slider-default-md" style="margin-bottom: 30px;"></div>
                <div class="noui-slider-success noui-slider-sm mb-1 noui-height-helper" id="slider-default-sm"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Sizes. Solid handle</h6>
                <p class="mb-3">To change default handle color to match the connector background, add <code>.noui-slider-solid</code> class</p>

                <div class="noui-slider-primary noui-slider-solid noui-slider-lg noui-height-helper" id="slider-solid-lg" style="margin-bottom: 30px;"></div>
                <div class="noui-slider-danger noui-slider-solid noui-height-helper" id="slider-solid-md" style="margin-bottom: 30px;"></div>
                <div class="noui-slider-success noui-slider-solid noui-slider-sm mb-1 noui-height-helper" id="slider-solid-sm"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Sizes. White handle</h6>
                <p class="mb-3">To remove inner circle from slider handle, add <code>.noui-slider-white</code> class. You can also change its color if needed</p>

                <div class="noui-slider-primary noui-slider-white noui-slider-lg noui-height-helper" id="slider-white-lg" style="margin-bottom: 30px;"></div>
                <div class="noui-slider-danger noui-slider-white noui-height-helper" id="slider-white-md" style="margin-bottom: 30px;"></div>
                <div class="noui-slider-success noui-slider-white noui-slider-sm mb-1 noui-height-helper" id="slider-white-sm"></div>
            </div>
        </div>
    </div>
    <!-- /sizes and styles -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/sliders/nouislider.min.js')}}"></script>

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_sliders_noui.js')}}"></script>
@endsection
