@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Pickers @endslot
@slot('subtitle') Color @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic examples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic examples</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Basic color picker</div>
                        <p class="mb-3">Spectrum is a simple yet powerful color picker that can be used as a cross-browser alternative to native color input. It supports dropdown and flat modes with variety of options and events.</p>

                        <input type="text" class="form-control colorpicker-basic" value="#20BF7E">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Custom button text</div>
                        <p class="mb-3">Apart from default button labels, you can set custom button's text or translate it using <code>cancelText</code> and <code>chooseText</code> properties. Default button labels are <code>Cancel</code> and <code>Choose</code>.</p>

                        <input type="text" class="form-control colorpicker-basic" data-cancel-text="No way" data-choose-text="Yes baby" value="#20BF7E">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Initially empty</div>
                        <p class="mb-3">Spectrum picker can be initialized with an empty color value, meaning the input field value remains empty. This is very useful if the picker field needs to be validated or when field is optional.</p>

                        <input type="text" class="form-control colorpicker-basic" data-allow-empty="true">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Hide picker buttons</div>
                        <p class="mb-3">You can show or hide the buttons using the <code>showButtons</code> property. If there are no buttons, the behavior will be to fire the <code>change</code> event (and update the original input) when the picker is closed.</p>

                        <input type="text" class="form-control colorpicker-basic" data-show-buttons="false" value="#20BF7E">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Disable color picker</div>
                        <p class="mb-3">Spectrum can be automatically disabled if you pass in the <code>disabled</code> flag. Additionally, if the input that you initialize spectrum on is disabled, this will be the default value. Note: you cannot enable spectrum if the input is disabled.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-disabled" value="#20BF7E">
                            <label class="form-check form-check-inline form-switch ms-3">
                                <input type="checkbox" class="form-check-input" id="enable_picker">
                                <span class="form-check-label">Enable</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <div class="fw-bold border-bottom pb-2 mb-2">Clickout fires change</div>
                        <p class="mb-3">When clicking outside of the colorpicker, you can force it to fire a <code>change</code> event rather than having it revert the change. This is <code>true</code> by default. Try to pick a color and click outside to see it in action.</p>

                        <input type="text" class="form-control colorpicker-basic" data-clickout-fires-change="false" value="#20BF7E">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic examples -->


    <!-- Picker additions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Picker additions</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show initial color</div>
                        <p class="mb-3">Spectrum can show the color that was initially set when opening. This provides an easy way to click back to what was set when opened. Pick a color and click on initial color to reset your selection.</p>

                        <input type="text" class="form-control colorpicker-basic" data-show-initial="true" value="#E63E3E">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show alpha channel</div>
                        <p class="mb-3">You can allow alpha transparency selection by setting <code>showAlpha</code> option to <code>true</code>. Opacity is shown as a slider that supports values from 0 to 100 with minimum increment.</p>

                        <input type="text" class="form-control colorpicker-basic" data-show-alpha="true" value="#E63E3E">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show input and initial</div>
                        <p class="mb-3">If you specify both the <code>showInput</code> and <code>showInitial</code> options, the CSS keeps things in order by wrapping the buttons to the bottom row, and shrinking the input. Note: this is all customizable via CSS.</p>

                        <input type="text" class="form-control colorpicker-basic" data-show-initial="true" data-show-input="true" value="#E63E3E">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show input field</div>
                        <p class="mb-3">You can add an input to allow free form typing. The color parsing is very permissive in the allowed strings. Use in combination with <code>allowEmpty</code> is recommended to allow empty value.</p>

                        <input type="text" class="form-control colorpicker-basic" data-show-input="true" value="#E63E3E">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Clear selection</div>
                        <p class="mb-3">Setting <code>allowEmpty</code> option to <code>true</code> adds an ability to reset current selection. Spectrum inserts a square area in top right corner, which clears the selected color on click.</p>

                        <input type="text" class="form-control colorpicker-basic" data-allow-empty="true" value="#E63E3E">
                    </div>

                    <div>
                        <div class="fw-bold border-bottom pb-2 mb-2">Full leatured</div>
                        <p class="mb-3">This example demonstrates a full featured color picker with combination of various options explained above: <code>showInitial</code>, <code>showInput</code>, <code>showAlpha</code> and <code>allowEmpty</code>.</p>

                        <input type="text" class="form-control colorpicker-basic" data-show-initial="true" data-show-input="true" data-show-alpha="true" data-allow-empty="true" data-preferred-format="hex" value="#E63E3E">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /picker additions -->


    <!-- Color palettes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Color palettes</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show color palette</div>
                        <p class="mb-3">Spectrum can show a palette to make it convenient for users to choose from frequently or recently used colors. When the picker is closed, the current color will be added to the palette.</p>

                        <input type="text" class="form-control colorpicker-palette" value="#27ADCA">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Toggle palette only</div>
                        <p class="mb-3">Spectrum can show a button to toggle the colorpicker next to the palette. The default value for <code>togglePaletteOnly</code> is <code>false</code>. Set it to <code>true</code> to enable the Toggle button.</p>

                        <input type="text" class="form-control colorpicker-palette-toggle" value="#27ADCA">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Limit selections</div>
                        <p class="mb-3">You can define how many elements are allowed in the <code>selectionPallete</code> at once. Elements will be removed from the palette in first in - first out order if this limit is reached.</p>

                        <input type="text" class="form-control colorpicker-palette-limit" value="#27ADCA">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show palette only</div>
                        <p class="mb-3">If you'd like, spectrum can show the palettes you specify, and nothing else. To hide color picker and show only color palette, simply set <code>showPaletteOnly</code> and <code>showPalette</code> options to <code>true</code>.</p>

                        <input type="text" class="form-control colorpicker-palette-only" value="#27ADCA">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Selection palette</div>
                        <p class="mb-3">Spectrum can keep track of what has been selected with the <code>showSelectionPalette</code> option. If the <code>localStorageKey</code> option is defined, the selection will be saved in the browser's <code>localStorage</code> object.</p>

                        <input type="text" class="form-control colorpicker-palette-selection" value="#27ADCA">
                    </div>

                    <div>
                        <div class="fw-bold border-bottom pb-2 mb-2">Hide after select</div>
                        <p class="mb-3">You can have the colorpicker automatically hidden after a palette color is selected. Set <code>hideAfterPaletteSelect</code> to <code>true</code>. Note: this behaviour is only available in color palette and doesn't work with color selection.</p>

                        <input type="text" class="form-control colorpicker-palette-hide" value="#27ADCA">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /color palettes -->


    <!-- Color formats -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Color formats</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">HEX color format</div>
                        <p class="mb-3">You can set the format that is displayed in the text box and titles in the palette swatches. Use either <code>preferredFormat</code> option in JS or <code>data-preferred-format</code> attribute in HTML.</p>

                        <input type="text" class="form-control colorpicker-basic" data-preferred-format="hex" value="#f75d1c">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">HSL color format</div>
                        <p class="mb-3">HSL stands for hue, saturation, and lightness - and represents a cylindrical-coordinate representation of colors. Color value is specified with the hsl() function, which has <code>hsl(hue, saturation, lightness)</code> syntax.</p>

                        <input type="text" class="form-control colorpicker-basic" data-preferred-format="HSL" value="#f75d1c">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">HTML color names</div>
                        <p class="mb-3">Spectrum color picker also accepts HTML color names as valid color values. You can define 140 color names, out of which 17 colors are standard. Refer to <a href="https://www.w3schools.com/tags/ref_colornames.asp" target="_blank">this page</a> to see a full list.</p>

                        <input type="text" class="form-control colorpicker-basic" data-preferred-format="name" value="orangered">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">HEX3 color format</div>
                        <p class="mb-3">Some six-digit hex colors can be written using a three-digit shorthand, which combines the duplicate digits from each color component into one. This results in a three digit hex number instead of six.</p>

                        <input type="text" class="form-control colorpicker-basic" data-preferred-format="hex3" value="#f75d1c">
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">RGB color format</div>
                        <p class="mb-3">RGB color system constructs all the colors from the combination of the Red, Green and Blue colors. Each parameter (red, green, and blue) defines the intensity of the color as an integer between 0 and 255.</p>

                        <input type="text" class="form-control colorpicker-basic" data-preferred-format="rgb" value="#f75d1c">
                    </div>

                    <div>
                        <div class="fw-bold border-bottom pb-2 mb-2">Mix color formats</div>
                        <p class="mb-3">In this example preferred color format is null, meaning it depends on input - try changing formats with the text box. Here all formats are supported and this is the default behaviour.</p>

                        <input type="text" class="form-control colorpicker-basic" data-preferred-format="name" value="#f75d1c">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /color formats -->


    <!-- Picker events -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Picker events</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Change event</div>
                        <p class="mb-3">Change event is called as the original input changes. Only happens when the input is closed (not by clicking 'Cancel' button) or the 'Choose' button is clicked.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-event-change" value="#45818e">
                            <div class="d-none ms-3" id="change-result"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Hide event</div>
                        <p class="mb-3">Called after the colorpicker is hidden. This happens when clicking outside of the picker while it is open. Note, when any colorpicker on the page is shown it will hide any that are already open.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-event-hide" value="#45818e">
                            <div class="d-none ms-3" id="hide-result"></div>
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Dragstart event</div>
                        <p class="mb-3">Dragstart event is called at the beginning of a drag event on either hue slider, alpha slider, or main color picker areas. Can be combined with other events.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-event-dragstart" value="#45818e">
                            <div class="d-none ms-3" id="dragstart-result"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Move event</div>
                        <p class="mb-3">Move event is called as the user moves around within the colorpicker. When the picker is closed, the last picked color value is remembered, but not considered selected.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-event-move" value="#45818e">
                            <div class="d-none ms-3" id="move-result"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show event</div>
                        <p class="mb-3">Show event is called after the colorpicker is opened. This is ignored on a flat colorpicker. Note, when any colorpicker on the page is shown it will hide any that are already open.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-event-show" value="#45818e">
                            <div class="d-none ms-3" id="show-result"></div>
                        </div>
                    </div>

                    <div>
                        <div class="fw-bold border-bottom pb-2 mb-2">Dragstop event</div>
                        <p class="mb-3">Dragstop event is called at the end of a drag event on either hue slider, alpha slider, or main color picker areas. Can be combined with other events.</p>

                        <div class="d-inline-flex flex-wrap align-items-center">
                            <input type="text" class="form-control colorpicker-event-dragstop" value="#45818e">
                            <div class="d-none ms-3" id="dragstop-result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /picker events -->


    <!-- Flat picker -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Flat picker</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Flat picker</div>
                        <p class="mb-3">Flat mode means that the color picker will always show up at full size, and be positioned as an inline-block element. To display color picker in flat mode, set <code>flat</code> option to <code>true</code>.</p>

                        <input type="text" class="form-control colorpicker-flat" value="#45818e">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show input field</div>
                        <p class="mb-3">In flat picker you can add an input to allow free form typing. The color parsing is very permissive in the allowed strings. Use in combination with <code>allowEmpty</code> is recommended to allow empty value</p>

                        <input type="text" class="form-control colorpicker-flat-input" data-preferred-format="hex" value="#45818e">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Flat color palette</div>
                        <p class="mb-3">Spectrum can show a palette in a flat mode to make it convenient for users to choose from frequently or recently used colors. When the picker is closed, the current color will be added to the palette.</p>

                        <input type="text" class="form-control colorpicker-flat-palette" value="#45818e">
                    </div>

                    <div>
                        <div class="fw-bold border-bottom pb-2 mb-2">Show initial color</div>
                        <p class="mb-3">Spectrum in a flat mode can show the color that was initially set. This provides an easy way to click back to what was set when opened. Pick a color and click on initial color to reset your selection.</p>

                        <input type="text" class="form-control colorpicker-flat-initial" value="#45818e">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /flat picker -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/pickers/color/spectrum.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/picker_color.js')}}"></script>
@endsection
