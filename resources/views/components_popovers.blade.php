@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Dashboard @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Popover overview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Popover component</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Popover is a small container with content that hovers over its parent element. Since popovers are built on top of tooltip plugin, it is required to include both of them. Popover supports all availbale tooltip options, but has a different template - title, content and arrow. It supports four alignment options: <code>top</code>, <code>right</code>, <code>bottom</code> and <code>left</code>. The popover plugin generates content and markup on demand, and by default places tooltips <code>after</code> their trigger element.</p>

            <div class="row">
                <div class="col-md-6">
                    <p><span class="fw-semibold">Top popover</span> <span class="d-block text-muted">data-bs-placement="top"</span></p>
                    <div class="border rounded p-2 p-lg-4 mb-3">
                        <div class="popover bs-popover-top" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
                            <div class="popover-arrow" style="position: absolute; left: 50%; margin-left: -2.5px;"></div>
                            <h3 class="popover-header">Popover top</h3>
                            <div class="popover-body">
                                Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <p><span class="fw-semibold">Right popover</span> <span class="d-block text-muted">data-bs-placement="end"</span></p>
                    <div class="border rounded p-2 p-lg-4 mb-3">
                        <div class="popover bs-popover-end" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
                            <div class="popover-arrow" style="position: absolute; top: 50%; margin-top: -2.5px;"></div>
                            <h3 class="popover-header">Popover right</h3>
                            <div class="popover-body">
                                Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p><span class="fw-semibold">Bottom popover</span> <span class="d-block text-muted">data-bs-placement="bottom"</span></p>
                    <div class="border rounded p-2 p-lg-4 mb-3">
                        <div class="popover bs-popover-bottom" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
                            <div class="popover-arrow" style="position: absolute; left: 50%; margin-left: -2.5px;"></div>
                            <h3 class="popover-header">Popover bottom</h3>
                            <div class="popover-body">
                                Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <p><span class="fw-semibold">Left popover</span> <span class="d-block text-muted">data-bs-placement="start"</span></p>
                    <div class="border rounded p-2 p-lg-4 mb-3">
                        <div class="popover bs-popover-start" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
                            <div class="popover-arrow" style="position: absolute; top: 50%; margin-top: -2.5px;"></div>
                            <h3 class="popover-header">Popover left</h3>
                            <div class="popover-body">
                                Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Popover positions</th>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Left position</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-primary" data-bs-popup="popover" data-bs-placement="left" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Popover in <code>left</code> direction. To use, add <code>data-bs-placement="left"</code> to the popover element.</td>
                    </tr>
                    <tr>
                        <td>Top position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="popover" data-bs-placement="top" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Popover in <code>top</code> direction. To use, add <code>data-bs-placement="top"</code> to the popover element.</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Popover in default <code>right</code> direction, <code>data-bs-placement="right"</code> is optional.</td>
                    </tr>
                    <tr>
                        <td>Bottom position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="popover" data-bs-placement="bottom" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Popover in <code>bottom</code> direction. To use, add <code>data-bs-placement="bottom"</code> to the popover element.</td>
                    </tr>
                    <tr>
                        <td>Auto position</td>
                        <td><button type="button" class="btn btn-primary" data-bs-popup="popover" data-bs-placement="bottom" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>When <code>auto</code> is specified, it will dynamically reorient the popover.</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Popover options</th>
                    </tr>
                    <tr>
                        <td>Hover trigger</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="popover" title="Popover title" data-bs-trigger="hover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Use the <code>hover</code> trigger to show popover when the user's cursor enters the element and dismiss when leaves.</td>
                    </tr>
                    <tr>
                        <td>Focus trigger</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="popover" title="Popover title" data-bs-trigger="focus" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Use the <code>focus</code> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</td>
                    </tr>
                    <tr>
                        <td>HTML support</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="popover" title="Popover <span class='text-danger'>title</span>" data-bs-html="true" data-bs-content="Add <u>some</u> <i>HTML</i> <strong>stuff</strong>.">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Insert HTML into the popover. If false, <code>innerText</code> property will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                    </tr>
                    <tr>
                        <td>Disabled animation</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="popover" title="Popover title" data-bs-animation="false" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Add or remove a CSS <code>fade</code> transition to the popover by setting <code>data-animation</code> to <code>true</code> (default) or <code>false</code>.</td>
                    </tr>
                    <tr>
                        <td>Delayed popover</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="popover" title="Popover title" data-bs-delay="600" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Delay showing and hiding the popover (<code>ms</code>) - does not apply to <code>manual</code> trigger type. If a number is supplied, delay is applied to both hide/show.</td>
                    </tr>
                    <tr>
                        <td>No title</td>
                        <td><button type="button" class="btn btn-light" data-bs-popup="popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>If <code>title</code> attribute is not specified, popover will display only body text.</td>
                    </tr>
                    <tr>
                        <td>Custom header color</td>
                        <td><button type="button" class="btn btn-light" data-popup="popover-custom" data-bs-placement="bottom" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Popovers support custom <code>title</code> color styling through <code>template</code> option. To use, add custom color class to <code>.popover|.popover-arrow|,popover-header</code> elements.</td>
                    </tr>
                    <tr>
                        <td>Custom solid color</td>
                        <td><button type="button" class="btn btn-light" data-popup="popover-solid" data-bs-placement="bottom" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Besides title, popovers also support a <code>solid</code> color fill option. To use, add custom color class to <code>.popover|.popover-arrow|.popover-header</code> elements.</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Popover events</th>
                    </tr>
                    <tr>
                        <td>Show event</td>
                        <td><button type="button" class="btn btn-light" id="popover-show">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>show</code> event. This event fires immediately when the <code>show</code> instance method is called.</td>
                    </tr>
                    <tr>
                        <td>Shown event</td>
                        <td><button type="button" class="btn btn-light" id="popover-shown">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>shown</code> event. This event is fired when the popover has been made visible to the user.</td>
                    </tr>
                    <tr>
                        <td>Hide event</td>
                        <td><button type="button" class="btn btn-light" id="popover-hide">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>hide</code> event. This event is fired immediately when the <code>hide</code> instance method has been called.</td>
                    </tr>
                    <tr>
                        <td>Hidden event</td>
                        <td><button type="button" class="btn btn-light" id="popover-hidden">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>hidden</code> event. This event is fired when the popover has finished being hidden from the user.</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Popover methods</th>
                    </tr>
                    <tr>
                        <td>Show method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="show-popover-method-target">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="show-popover-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>show</code> method. This method reveals an element's popover. Popovers whose both title and content are zero-length are never displayed.</td>
                    </tr>
                    <tr>
                        <td>Hide method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="hide-popover-method-target" data-bs-popup="popover" data-bs-placement="top" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-trigger="manual" data-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="hide-popover-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>hide</code> method. This method hides an element's popover. Hover on <code>Target</code> button and then click <code>play</code> button to hide a popover.</td>
                    </tr>
                    <tr>
                        <td>Toggle method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="toggle-popover-method-target" data-bs-popup="popover" data-bs-placement="top" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-trigger="manual" data-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="toggle-popover-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>toggle</code> method. This method toggles an element's popover. Click on <code>play</code> button to toggle <code>Target</code> button popover.</td>
                    </tr>
                    <tr>
                        <td>Dispose method</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="dispose-popover-method-target" data-bs-popup="popover" data-bs-placement="top" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="dispose-popover-method"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>dispose</code> method. This method hides and disposes an element's popover. Click on <code>Target</code> button and then <code>play</code> button to dispose a popover.</td>
                    </tr>
                    <tr>
                        <td>Enable/Disable methods</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light" id="toggle-enabled-popover-method-target" data-bs-popup="popover" data-bs-placement="top" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-container="body">Target</button>
                                <button type="button" class="btn btn-primary btn-icon" id="toggle-enabled-popover-method" data-toggle="button"><i class="ph-play-circle"></i></button>
                            </div>
                        </td>
                        <td>Example of a <code>toggleEnabled</code> method. Toggles the ability for an element’s popover to be shown or hidden. Hover on <code>Target</code> button and then <code>play</code> button to disable and enable a popover</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /popover overview -->

</div>
<!-- /content area -->

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_popovers.js')}}"></script>
@endsection
