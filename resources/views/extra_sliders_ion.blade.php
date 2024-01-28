@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') Ion Range Sliders @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic examples -->
    <div class="mb-3">
        <h6 class="mb-0">
            Basic examples
        </h6>
        <span class="text-muted d-block">Sliders with basic functionality</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Basic slider example</h6>
                <p class="mb-3">Default setup without configuration parameters. Initialize slider on regular <code>input type="text"</code> element</p>

                <input type="text" class="form-control ion-height-helper" id="ion-basic">
            </div>

            <div class="card card-body">
                <h6>Set up range and step</h6>
                <p class="mb-3">In the following example slider is configured with a range that has negative values, both <code>min</code> and <code>from</code> options</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-negative">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Set start point</h6>
                <p class="mb-3">You can configure mininim value, maximum value and starting point of a range slider with <code>min</code>, <code>max</code> and <code>start</code> options</p>

                <input type="text" class="form-control ion-height-helper" id="ion-start">
            </div>

            <div class="card card-body">
                <h6>Custom stepping</h6>
                <p class="mb-3">Set slider step using <code>step</code> option. Slider step is always greater than 0 and could be fractional. Default value is <code>1</code></p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-step">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Basic range slider</h6>
                <p class="mb-3">To configure a basic range slider, set <code>type</code> config option to <code>double</code> and specify range with <code>from</code> and <code>to</code> options</p>

                <input type="text" class="form-control ion-height-helper" id="ion-range">
            </div>

            <div class="card card-body">
                <h6>Fractional step</h6>
                <p class="mb-3">A range slider with fractional values, meaning values have decimal values. Negative values are also supported</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-fractional">
            </div>
        </div>
    </div>
    <!-- /basic examples -->


    <!-- Customizing values -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Customizing values
        </h6>
        <span class="text-muted d-block">Prettify visual look of numbers</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom number values</h6>
                <p class="mb-3">Set up custom numbers in the grid using an array of numbers in <code>values</code> config option. Make sure the grid is enabled</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-custom-numbers">
            </div>

            <div class="card card-body">
                <h6>Disable prettify</h6>
                <p class="mb-3">If you need to show big and ugly numbers without any formatting, set <code>prettify_enabled</code> option to <code>false</code></p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-numbers-no-prettify">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom value names</h6>
                <p class="mb-3">Besides numbers in your range slider you can also use any strings as your grid values in your <code>values</code> array</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-custom-strings">
            </div>

            <div class="card card-body">
                <h6>Enable prettify</h6>
                <p class="mb-3">Change visual look of big numbers and improve their readability by enabling prettify option and setting separator</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-numbers-prettify">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Months values</h6>
                <p class="mb-3">Another example of using strings as values, here the grid and slider values display month shorthand names</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-custom-months">
            </div>

            <div class="card card-body">
                <h6>Custom separator</h6>
                <p class="mb-3">Don't like spacing? Add your own separator with <code>prettify_separator</code> option. Use comma, space or any other symbol</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-custom-separator">
            </div>
        </div>
    </div>
    <!-- /customizing values -->


    <!-- Decorating numbers -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Decorating numbers
        </h6>
        <span class="text-muted d-block">Add prefixes, postfixes, symbols etc.</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Numbers with prefix</h6>
                <p class="mb-3">Range slider supports custom prefix in values that can be set in <code>prefix</code> option. It can be any symbol or text</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-custom-prefix">
            </div>

            <div class="card card-body">
                <h6>Decorate both values</h6>
                <p class="mb-3">Determine how to decorate close values. Used for <code>"double"</code> type and only if <code>prefix</code> or <code>postfix</code> was set up</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-decorate-both">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Numbers with postfix</h6>
                <p class="mb-3">Adding custom postfix to values with <code>postfix</code> option. Will be set up right after the number and can be anything</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-custom-postfix">
            </div>

            <div class="card card-body">
                <h6>Decoration separator</h6>
                <p class="mb-3">Set your own separator for close values. Used for <code>double</code> type. In this example <code>" - "</code> is changed to <code>" → "</code></p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-decorate-both-custom">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Number with no limit</h6>
                <p class="mb-3">You can manipulate text labels to simulate the value that has no fixed number. Use <code>max_postfix</code> option</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-max-no-limit">
            </div>

            <div class="card card-body">
                <h6>Remove decoration</h6>
                <p class="mb-3">You can turn off decoration of the second value by setting <code>decorate_both</code> configuration option to <code>false</code></p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-decorate-both-remove">
            </div>
        </div>
    </div>
    <!-- /decorating numbers -->


    <!-- Advanced examples -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Advanced examples
        </h6>
        <span class="text-muted d-block">More complex slider examples</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Values inside container</h6>
                <p class="mb-3">If <code>force_edges</code> is set to <code>true</code>, slider will be always displayed inside its container and numbers won't overflow</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-force-edges">
            </div>

            <div class="card card-body">
                <h6>Grid values density</h6>
                <p class="mb-3">You can control the number of grid units with <code>grid_num</code> option. By default each interval has 4 sub intervals</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-grid-values">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Disabled slider</h6>
                <p class="mb-3">If <code>disable</code> option is set to <code>true</code>, slider becomes inactive and disabled. input is disabled too. Invisible to forms</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-disabled">
            </div>

            <div class="card card-body">
                <h6>Attach values to steps</h6>
                <p class="mb-3">Snap grid to sliders step (<code>step</code> param) by enabling <code>grid_snap</code> option. If activated, <code>grid_num</code> will not be used</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-grid-snap">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Keyboard controls</h6>
                <p class="mb-3">If <code>keyboard</code> is set to <code>true</code> (default), slider can be controlled by keyboard using arrows and <kbd>A</kbd>, <kbd>S</kbd>, <kbd>W</kbd> and <kbd>D</kbd> keys</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-keyboard">
            </div>

            <div class="card card-body">
                <h6>Fractional step</h6>
                <p class="mb-3">Attach values to fractional steps by setting <code>grid</code> and <code>grid_snap</code> options to <code>true</code>. By default grid snap is disabled</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-grid-snap-fractional">
            </div>
        </div>
    </div>
    <!-- /advanced examples -->


    <!-- Manipulations -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Manipulations
        </h6>
        <span class="text-muted d-block">Manipulation intervals, handles etc.</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Minimum interval size</h6>
                <p class="mb-3">Use <code>min_interval</code> option to set minimum diapason between sliders. Works only in <code>double</code> slider type</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-interval-min">
            </div>

            <div class="card card-body">
                <h6>Lock left handle</h6>
                <p class="mb-3">Fix 'from' (or start) slider handle by setting <code>from_fixed</code> option to <code>true</code>. Works in both single and range sliders</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-lock-from">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Maximum interval size</h6>
                <p class="mb-3">Use <code>max_interval</code> option to set maximum diapason between sliders. Works only in <code>double</code> slider type</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-interval-max">
            </div>

            <div class="card card-body">
                <h6>Lock right handle</h6>
                <p class="mb-3">Fix 'to' (or end) slider handle by setting <code>to_fixed</code> option to <code>true</code>. Works in both single and range sliders</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-lock-to">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Dragging interval</h6>
                <p class="mb-3">Enable dragging the whole range by setting <code>drag_interval</code> option to <code>true</code>. Works only in <code>double</code> slider type</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-interval-drag">
            </div>

            <div class="card card-body">
                <h6>Lock both handles</h6>
                <p class="mb-3">You can lock both slider handles and disable user interaction by setting both <code>from_fixed</code> and <code>to_fixed</code> to <code>true</code></p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-lock-both">
            </div>
        </div>
    </div>
    <!-- /manipulations -->


    <!-- Slider colors title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Other examples
        </h6>
        <span class="text-muted d-block">Format date and time, setting limits etc.</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Movement limit</h6>
                <p class="mb-3">Set limits (min and max) for slider movement using <code>from_min | from_max</code> and <code>to_min | to_max</code> options</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-movement-limit">
            </div>

            <div class="card card-body">
                <h6>Moment.js format</h6>
                <p class="mb-3">The format of date and time can be changed with <code>moment.js</code> library. Use <code>min</code>, <code>max</code>, <code>from</code> and <code>prettify</code> options</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-moment-basic">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Highlight limited zone</h6>
                <p class="mb-3">If slider has movement limits, the zone can be highlighted with different color using <code>from_shadow</code> option</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-highlight-limit">
            </div>

            <div class="card card-body">
                <h6>Time format</h6>
                <p class="mb-3">The same as with date formatting, but in this example we changed time format from 24 to 12 hours format</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-moment-time">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Highlight in range</h6>
                <p class="mb-3">More complex example of zone highlight, where both <code>to_shadow</code> and <code>from_shadow</code> are used in range slider type</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-highlight-range">
            </div>

            <div class="card card-body">
                <h6>Localization</h6>
                <p class="mb-3">Example of a range slider with date/ time localization using <code>moment.js</code> library. Works with all slider types and options</p>

                <input type="text" class="form-control ion-pips-height-helper" id="ion-moment-local">
            </div>
        </div>
    </div>
    <!-- /slider colors -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/sliders/ion_rangeslider.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/moment/moment_locales.min.js')}}"></script>

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_sliders_ion.js')}}"></script>
@endsection
