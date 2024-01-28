@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') SweetAlert Notifications @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Sweetalert examples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">SweetAlert Notifications</h5>
        </div>

        <div class="card-body">
            SweetAlert is a simple yet powerful replacement for JS popup boxes. With this extension you can easily replace boring browser alerts with beautiful animated popups that look like a modal dialog. Supports form controls (input fields, checkboxes, selects, radios etc) with validation, various notification types with animated icons and bunch of options for deeper customization.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-border-double table-light">
                        <th colspan="3">Notification types</th>
                    </tr>
                    <tr>
                        <td>Success type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_success">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Success notification type using <code>type: success</code> option</td>
                    </tr>
                    <tr>
                        <td>Error type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_error">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Error notification type using <code>type: error</code> option</td>
                    </tr>
                    <tr>
                        <td>Warning type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_warning">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Warning notification type using <code>type: warning</code> option</td>
                    </tr>
                    <tr>
                        <td>Info type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_info">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Info notification type using <code>type: info</code> option</td>
                    </tr>
                    <tr>
                        <td>Question type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_question">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Question notification type using <code>type: question</code> option</td>
                    </tr>
                    <tr>
                        <td>Combine messages</td>
                        <td><button type="button" class="btn btn-light" id="sweet_combine">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Message with a function attached to the "Confirm" and "Cancel" buttons</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Basic examples</th>
                    </tr>
                    <tr>
                        <td>Basic alert</td>
                        <td><button type="button" class="btn btn-light" id="sweet_basic">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Basic sweet alert example with title only</td>
                    </tr>
                    <tr>
                        <td>Title with text</td>
                        <td><button type="button" class="btn btn-light" id="sweet_title_text">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Display additional text below the title</td>
                    </tr>
                    <tr>
                        <td>Close button</td>
                        <td><button type="button" class="btn btn-light" id="sweet_close">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Show close button in top right corner of the modal</td>
                    </tr>
                    <tr>
                        <td>Custom padding</td>
                        <td><button type="button" class="btn btn-light" id="sweet_padding">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Modal window padding in pixels. Default padding value is 20px</td>
                    </tr>
                    <tr>
                        <td>Custom width</td>
                        <td><button type="button" class="btn btn-light" id="sweet_width">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Modal window width, including paddings (box-sizing: border-box). Can be in px or %</td>
                    </tr>
                    <tr>
                        <td>Auto closer</td>
                        <td><button type="button" class="btn btn-light" id="sweet_auto_closer">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Close the alert after specified amount of time using <code>timer</code> option</td>
                    </tr>
                    <tr>
                        <td>AJAX requests</td>
                        <td><button type="button" class="btn btn-light" id="sweet_ajax">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example with AJAX request, validation and callback</td>
                    </tr>
                    <tr>
                        <td>With HTML message</td>
                        <td><button type="button" class="btn btn-light" id="sweet_html">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add support of HTML in alert message</td>
                    </tr>
                    <tr>
                        <td>With custom image</td>
                        <td><button type="button" class="btn btn-light" id="sweet_image">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Notification message with a custom image. Image size is specified in config</td>
                    </tr>
                    <tr>
                        <td>With custom background image</td>
                        <td><button type="button" class="btn btn-light" id="sweet_bg">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Notification message with a custom background image. Image source is specified in config</td>
                    </tr>
                    <tr>
                        <td>Chaining notifications</td>
                        <td><button type="button" class="btn btn-light" id="sweet_chain">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Display multiple chaining modals with steps progress</td>
                    </tr>
                    <tr>
                        <td>Reversed buttons</td>
                        <td><button type="button" class="btn btn-light" id="sweet_reverse_buttons">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Set to <code>true</code> if you want to invert default buttons positions ("Confirm"-button on the right side)</td>
                    </tr>
                    <tr class="table-border-solid">
                        <td>Fullscreen</td>
                        <td><button type="button" class="btn btn-light" id="sweet_fullscreen">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Use <code>grow: 'fullscreen'</code> option to show notification in <strong>fullscreen</strong> mode</td>
                    </tr>
                    <tr>
                        <td>Stretched vertically</td>
                        <td><button type="button" class="btn btn-light" id="sweet_column">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Use <code>grow: 'column'</code> option to show notification in <strong>column</strong> mode</td>
                    </tr>
                    <tr>
                        <td>Stretched horizontally</td>
                        <td><button type="button" class="btn btn-light" id="sweet_row">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Use <code>grow: 'row'</code> to show notification in <strong>row</strong> mode</td>
                    </tr>
                    <tr class="table-border-solid">
                        <td>Disabled keyboard interaction</td>
                        <td><button type="button" class="btn btn-light" id="sweet_disabled_keyboard">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>This example can't be dismissed by pressing the <kbd>Escape</kbd> , <kbd>Space</kbd> or <kbd>Enter</kbd> keys</td>
                    </tr>
                    <tr>
                        <td>Disabled animation</td>
                        <td><button type="button" class="btn btn-light" id="sweet_disabled_animation">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>If <code>animation</code> option is set to <code>false</code>, modal CSS animation will be disabled</td>
                    </tr>
                    <tr>
                        <td>Disabled backdrop</td>
                        <td><button type="button" class="btn btn-light" id="sweet_disabled_backdrop">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Set <code>backdrop</code> option to <code>false</code> to disable a full screen click-to-dismiss backdrop</td>
                    </tr>
                    <tr>
                        <td>Disabled outside click</td>
                        <td><button type="button" class="btn btn-light" id="sweet_disabled_outside_click">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Set <code>allowOutsideClick</code> option to <code>false</code> to disable modal dismiss by clicking outside it</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Input types</th>
                    </tr>
                    <tr>
                        <td>Text input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_text">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>text</code> input type</td>
                    </tr>
                    <tr>
                        <td>Email input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_email">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>email</code> input type</td>
                    </tr>
                    <tr>
                        <td>URL input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_url">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>url</code> input type</td>
                    </tr>
                    <tr>
                        <td>Password input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_password">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>password</code> input type</td>
                    </tr>
                    <tr>
                        <td>Textarea input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_textarea">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>textarea</code> input type</td>
                    </tr>
                    <tr>
                        <td>Select input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_select">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>select</code> input type</td>
                    </tr>
                    <tr>
                        <td>Select2 single</td>
                        <td><button type="button" class="btn btn-light" id="sweet_select2_single">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of a <strong>single</strong> <code>select2</code> select</td>
                    </tr>
                    <tr>
                        <td>Select2 multiple</td>
                        <td><button type="button" class="btn btn-light" id="sweet_select2_multiple">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <strong>multiple</strong> <code>select2</code> select</td>
                    </tr>
                    <tr>
                        <td>Multiselect</td>
                        <td><button type="button" class="btn btn-light" id="sweet_multiselect">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of SweetAlert modal with Bootstrap Multiselect and validation</td>
                    </tr>
                    <tr>
                        <td>Radio input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_radio">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of SweetAlert popup with default <code>radio</code> input type</td>
                    </tr>
                    <tr>
                        <td>Checkbox input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_checkbox">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of SweetAlert popup with default <code>checkbox</code> input type</td>
                    </tr>
                    <tr>
                        <td>Range input type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_range">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Example of <code>range</code> input type</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Positions</th>
                    </tr>
                    <tr>
                        <td>Top</td>
                        <td><button type="button" class="btn btn-light" id="sweet_top">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'top'</code> to change notification position to <strong>top</strong></td>
                    </tr>
                    <tr>
                        <td>Top left</td>
                        <td><button type="button" class="btn btn-light" id="sweet_top_left">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'top-left'</code> to change notification position to <strong>top left</strong></td>
                    </tr>
                    <tr>
                        <td>Top right</td>
                        <td><button type="button" class="btn btn-light" id="sweet_top_right">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'top-right'</code> to change notification position to <strong>top right</strong></td>
                    </tr>
                    <tr>
                        <td>Center left</td>
                        <td><button type="button" class="btn btn-light" id="sweet_center_left">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'center-left'</code> to change notification position to <strong>center left</strong></td>
                    </tr>
                    <tr>
                        <td>Center right</td>
                        <td><button type="button" class="btn btn-light" id="sweet_center_right">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'center-right'</code> to change notification position to <strong>center right</strong></td>
                    </tr>
                    <tr>
                        <td>Bottom</td>
                        <td><button type="button" class="btn btn-light" id="sweet_bottom">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'bottom'</code> to change notification position to <strong>bottom</strong></td>
                    </tr>
                    <tr>
                        <td>Bottom left</td>
                        <td><button type="button" class="btn btn-light" id="sweet_bottom_left">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'bottom-left'</code> to change notification position to <strong>bottom left</strong></td>
                    </tr>
                    <tr>
                        <td>Bottom right</td>
                        <td><button type="button" class="btn btn-light" id="sweet_bottom_right">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'bottom-right'</code> to change notification position to <strong>bottom right</strong></td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Toasts</th>
                    </tr>
                    <tr>
                        <td>Success type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_success">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Success toast type using <code>type: success</code> option</td>
                    </tr>
                    <tr>
                        <td>Error type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_error">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Error toast type using <code>type: error</code> option</td>
                    </tr>
                    <tr>
                        <td>Warning type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_warning">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Warning toast type using <code>type: warning</code> option</td>
                    </tr>
                    <tr>
                        <td>Info type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_info">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Info toast type using <code>type: info</code> option</td>
                    </tr>
                    <tr>
                        <td>Question type</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_question">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Question toast type using <code>type: question</code> option</td>
                    </tr>

                    <tr class="table-border-solid">
                        <td>Top</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_top">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'top'</code> to change toast position to <strong>top</strong></td>
                    </tr>
                    <tr>
                        <td>Top left</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_top_left">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'top-left'</code> to change toast position to <strong>top left</strong></td>
                    </tr>
                    <tr>
                        <td>Center left</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_center_left">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'center-left'</code> to change toast position to <strong>center left</strong></td>
                    </tr>
                    <tr>
                        <td>Center</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_center">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'center'</code> to change toast position to <strong>center</strong></td>
                    </tr>
                    <tr>
                        <td>Center right</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_center_right">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'center-right'</code> to change toast position to <strong>center right</strong></td>
                    </tr>
                    <tr>
                        <td>Bottom</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_bottom">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'bottom'</code> to change toast position to <strong>bottom</strong></td>
                    </tr>
                    <tr>
                        <td>Bottom left</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_bottom_left">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'bottom-left'</code> to change toast position to <strong>bottom left</strong></td>
                    </tr>
                    <tr>
                        <td>Bottom right</td>
                        <td><button type="button" class="btn btn-light" id="sweet_toast_bottom_right">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Add <code>position: 'bottom-right'</code> to change toast position to <strong>bottom right</strong></td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Callbacks</th>
                    </tr>
                    <tr>
                        <td>onOpen</td>
                        <td><button type="button" class="btn btn-light" id="sweet_onopen">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Function to run when modal <code>opens</code>, provides modal DOM element as the first argument</td>
                    </tr>
                    <tr>
                        <td>onClose</td>
                        <td><button type="button" class="btn btn-light" id="sweet_onclose">Launch <i class="icon-play3 ml-2"></i></button></td>
                        <td>Function to run when modal <code>closes</code>, provides modal DOM element as the first argument</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /sweetalert examples -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/notifications/sweet_alert.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_sweetalert.js')}}"></script>
@endsection
