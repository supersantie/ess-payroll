@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Tooltips @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Tooltip overview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tooltip component</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Tooltip is a small text block with information about the item being hovered, clicked or focused on. Bootstrap tooltip extensions supports four alignment options: <code>top</code>, <code>right</code>, <code>bottom</code> and <code>left</code>. The tooltip plugin generates content and markup on demand, and by default places tooltips <code>after</code> their trigger element. The required markup for a tooltip is only a <code>data</code> attribute and <code>title</code> on the HTML element you wish to have a tooltip.</p>

            <div class="row">
                <div class="col-lg-3 col-lg-6 col-sm-6">
                    <p><span class="fw-semibold">Top tooltip</span> <span class="d-block text-muted">data-bs-placement="top"</span></p>
                    <div class="text-center border rounded p-2 p-lg-4 mb-3">
                        <div class="tooltip fade show bs-tooltip-top" style="display: inline-block; position: relative; margin: 0; padding: 0; z-index: 100;">
                            <div class="tooltip-arrow" style="position: absolute; left: 50%; bottom: -7px; transform: translateX(-50%);"></div>
                            <div class="tooltip-inner" style="margin: auto;">Some tooltip text</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-lg-6 col-sm-6">
                    <p><span class="fw-semibold">Right tooltip</span> <span class="d-block text-muted">data-bs-placement="right"</span></p>
                    <div class="text-center border rounded p-2 p-lg-4 mb-3">
                        <div class="tooltip fade show bs-tooltip-end" style="display: inline-block; position: relative; margin: 0; padding: 0; z-index: 100;">
                            <div class="tooltip-arrow" style="position: absolute; left: -7px; top: 50%; transform: translateY(-50%);"></div>
                            <div class="tooltip-inner" style="margin: auto;">Some tooltip text</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-lg-6 col-sm-6">
                    <p><span class="fw-semibold">Bottom tooltip</span> <span class="d-block text-muted">data-bs-placement="bottom"</span></p>
                    <div class="text-center border rounded p-2 p-lg-4 mb-3">
                        <div class="tooltip fade show bs-tooltip-bottom" style="display: inline-block; position: relative; margin: 0; padding: 0; z-index: 100;">
                            <div class="tooltip-arrow" style="position: absolute; left: 50%; top: -7px; transform: translateX(-50%);"></div>
                            <div class="tooltip-inner" style="margin: auto;">Some tooltip text</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-lg-6 col-sm-6">
                    <p><span class="fw-semibold">Left tooltip</span> <span class="d-block text-muted">data-bs-placement="left"</span></p>
                    <div class="text-center border rounded p-2 p-lg-4 mb-3">
                        <div class="tooltip fade show bs-tooltip-start" style="display: inline-block; position: relative; margin: 0; padding: 0; z-index: 100;">
                            <div class="tooltip-arrow" style="position: absolute; right: -7px; top: 50%; transform: translateY(-50%);"></div>
                            <div class="tooltip-inner" style="margin: auto;">Some tooltip text</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Tooltip positions</th>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Left tooltip position</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-primary" data-bs-popup="tooltip" title="Left tooltip" data-bs-placement="left" id="left">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Tooltip in <code>left</code> direction. To use, add <code>data-bs-placement="left"</code> to the tooltip element</td>
                    </tr>
                    <tr>
                        <td>Top position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="tooltip" title="Top tooltip">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Tooltip in <code>left</code> direction. To use, add <code>data-bs-placement="left"</code> to the tooltip element</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="tooltip" title="Right tooltip" data-bs-placement="right">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Tooltip in default <code>top</code> direction, <code>data-bs-placement="top"</code> is optional</td>
                    </tr>
                    <tr>
                        <td>Bottom position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="tooltip" title="Bottom tooltip" data-bs-placement="bottom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Tooltip in <code>bottom</code> direction. To use, add <code>data-bs-placement="bottom"</code> to the tooltip element</td>
                    </tr>
                    <tr>
                        <td>Auto position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="tooltip" title="Bottom tooltip" data-bs-placement="auto">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>When <code>auto</code> is specified, it will dynamically reorient the popover</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Tooltip options</th>
                    </tr>
                    <tr>
                        <td>Click trigger</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-trigger="click">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Tooltip triggered on <code>click</code>. To use, add <code>data-bs-trigger="click"</code> to the tooltip element. To hide tooltip, click the same button again</td>
                    </tr>
                    <tr>
                        <td>Focus trigger</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-trigger="focus">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Use the <code>focus</code> trigger to dismiss tooltips on the user’s next click of a different element than the toggle element</td>
                    </tr>
                    <tr>
                        <td>HTML support</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="tooltip" title="<strong>Tooltip</strong> <i>with</i> <u>HTML</u>" data-bs-html="true">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Insert HTML into the tooltip. If false, <code>innerText</code> property will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                    </tr>
                    <tr>
                        <td>Disabled animation</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-animation="false">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Add or remove a CSS <code>fade</code> transition to the tooltip by setting <code>data-bs-animation</code> to <code>true</code> (default) or <code>false</code></td>
                    </tr>
                    <tr>
                        <td>Delayed tooltip</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-delay="600">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Delay showing and hiding the tooltip (ms) - does not apply to <code>manual</code> trigger type. If a number is supplied, delay is applied to both hide/show</td>
                    </tr>
                    <tr>
                        <td>Custom color</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="tooltip-custom" data-bs-trigger="click" title="I'm a teal tooltip">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Tooltips support custom color styling through <code>template</code> option. To use, wrap <code>.tooltip-arrow</code> and <code>.tooltip-inner</code> in the div with a custom color class</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Tooltip events</th>
                    </tr>
                    <tr>
                        <td>Show event</td>
                        <td><button type="button" class="btn btn-light" id="tooltip-show">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>show</code> event. This event fires immediately when the <code>show</code> instance method is called</td>
                    </tr>
                    <tr>
                        <td>Shown event</td>
                        <td><button type="button" class="btn btn-light" id="tooltip-shown">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>shown</code> event. This event is fired when the tooltip has been made visible to the user</td>
                    </tr>
                    <tr>
                        <td>Hide event</td>
                        <td><button type="button" class="btn btn-light" id="tooltip-hide">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>hide</code> event. This event is fired immediately when the <code>hide</code> instance method has been called</td>
                    </tr>
                    <tr>
                        <td>Hidden event</td>
                        <td><button type="button" class="btn btn-light" id="tooltip-hidden">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>hidden</code> event. This event is fired when the tooltip has finished being hidden from the user</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Tooltip methods</th>
                    </tr>
                    <tr>
                        <td>Show method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="show-tooltip-method-target" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-trigger="manual" data-bs-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="show-tooltip-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>show</code> method. This method reveals an element's tooltip. Tooltips with zero-length titles are never displayed</td>
                    </tr>
                    <tr>
                        <td>Hide method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="hide-tooltip-method-target" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-trigger="manual" data-bs-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="hide-tooltip-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>hide</code> method. This method hides an element's tooltip. Hover on <code>Target</code> button and then click <code>play</code> button to hide a tooltip</td>
                    </tr>
                    <tr>
                        <td>Toggle method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="toggle-tooltip-method-target" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-trigger="manual" data-bs-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="toggle-tooltip-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>toggle</code> method. This method toggles an element's tooltip. Click on <code>play</code> button to toggle <code>Target</code> button tooltip</td>
                    </tr>
                    <tr>
                        <td>Dispose method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="dispose-tooltip-method-target" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-trigger="click" data-bs-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="dispose-tooltip-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>dispose</code> method. This method hides and destroys an element's tooltip. Click on <code>Target</code> button and then <code>play</code> button to destroy a tooltip</td>
                    </tr>
                    <tr>
                        <td>Enable/Disable methods</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="toggle-enabled-tooltip-method-target" data-bs-popup="tooltip" title="I'm a tooltip" data-bs-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="toggle-enabled-tooltip-method" data-toggle="button"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>toggleEnabled</code> method. Toggles the ability for an element’s tooltip to be shown or hidden. Hover on <code>Target</code> button and then <code>play</code> button to disable and enable a tooltip</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /tooltip overview -->

</div>
<!-- /content area -->

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_tooltips.js')}}"></script>
@endsection
