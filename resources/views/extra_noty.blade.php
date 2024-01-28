@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') Noty Notifications @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Noty notifications -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Noty notifications</h5>
        </div>

        <div class="card-body">
            Noty is a jQuery plugin that makes it easy to create <code>alert</code> - <code>success</code> - <code>error</code> - <code>warning</code> - <code>information</code> - <code>confirmation</code> messages as an alternative the standard alert dialog. The API provides lots of other options to customise the text, animation, speed, buttons and much more. It also has various callbacks for the buttons such as opening and closing the notifications and queue control.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <th colspan="3">Notification layouts</th>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Error notice</td>
                        <td style="width: 20%;">
                            <button type="button" class="btn btn-danger" id="noty_error">Launch <i class="ph-play-circle ms-2"></i></button>
                        </td>
                        <td>Error notification. To use, add <code>type: 'error'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Success notice</td>
                        <td><button type="button" class="btn btn-success" id="noty_success">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Success notification. To use, add <code>type: 'success'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Warning notice</td>
                        <td><button type="button" class="btn btn-warning" id="noty_warning">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Warning notification. To use, add <code>type: 'warning'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Information notice</td>
                        <td><button type="button" class="btn btn-primary" id="noty_info">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Info notification. To use, add <code>type: 'info'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Alert notice</td>
                        <td><button type="button" class="btn btn-secondary" id="noty_alert">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Simple alert layout. To use, add <code>type: 'alert'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Confirmation dialog</td>
                        <td><button type="button" class="btn btn-light" id="noty_confirm">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Confirmation dialog with buttons and callbacks. To use, add <code>type: 'confirm'</code> option to the notification configuration</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Notification position. Top</th>
                    </tr>
                    <tr>
                        <td>Top position</td>
                        <td><button type="button" class="btn btn-light" id="noty_top">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Top notification position. To use, add <code>layout: 'top'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Top left position</td>
                        <td><button type="button" class="btn btn-light" id="noty_top_left">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Top left notification position. To use, add <code>layout: 'topLeft'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Top center position</td>
                        <td><button type="button" class="btn btn-light" id="noty_top_center">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Top center notification position. To use, add <code>layout: 'topCenter'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Top right position</td>
                        <td><button type="button" class="btn btn-light" id="noty_top_right">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Top right notification position. To use, add <code>layout: 'topRight'</code> option to the notification configuration</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Notification position. Center</th>
                    </tr>
                    <tr>
                        <td>Center left position</td>
                        <td><button type="button" class="btn btn-light" id="noty_center_left">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Center left notification position. To use, add <code>layout: 'centerLeft'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Center position</td>
                        <td><button type="button" class="btn btn-light" id="noty_center">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Center notification position. To use, add <code>layout: 'center'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Center right position</td>
                        <td><button type="button" class="btn btn-light" id="noty_center_right">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Center right notification position. To use, add <code>layout: 'centerRight'</code> option to the notification configuration</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Notification position. Bottom</th>
                    </tr>
                    <tr>
                        <td>Bottom left position</td>
                        <td><button type="button" class="btn btn-light" id="noty_bottom_left">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Bottom left notification position. To use, add <code>layout: 'bottomLeft'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Bottom center position</td>
                        <td><button type="button" class="btn btn-light" id="noty_bottom_center">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Bottom center notification position. To use, add <code>layout: 'bottomCenter'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Bottom right position</td>
                        <td><button type="button" class="btn btn-light" id="noty_bottom_right">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Bottom right notification position. To use, add <code>layout: 'bottomRight'</code> option to the notification configuration</td>
                    </tr>
                    <tr>
                        <td>Bottom position</td>
                        <td><button type="button" class="btn btn-light" id="noty_bottom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Bottom notification position. To use, add <code>layout: 'bottom'</code> option to the notification configuration</td>
                    </tr>

                    <tr class="table-border-double table-light">
                        <th colspan="3">Other examples</th>
                    </tr>
                    <tr>
                        <td>Overlay</td>
                        <td><button type="button" class="btn btn-light" id="noty_overlay">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>To display a dark page overlay when notification is shown, set <code>modal</code> to <code>true</code> in noty config</td>
                    </tr>
                    <tr>
                        <td>Sticky</td>
                        <td><button type="button" class="btn btn-light" id="noty_sticky">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Set <code>timeout</code> option to <code>false</code> to disable timer. Progress bar will be also disabled</td>
                    </tr>
                    <tr>
                        <td>Close button</td>
                        <td><button type="button" class="btn btn-light" id="noty_close">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>By default, notification is closable on click. To use close button instead, use <code>closeWith: ['button']</code> option</td>
                    </tr>
                    <tr>
                        <td>No progress</td>
                        <td><button type="button" class="btn btn-light" id="noty_progress">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Noty's <code>progressBar</code> option displays a progress bar if timeout is not false. Set to <code>false</code> to disable</td>
                    </tr>
                    <tr>
                        <td>Custom background color</td>
                        <td><button type="button" class="btn btn-light" id="noty_custom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>To use a theme with custom background color, add <code> bg-[color]</code> class to <code>theme</code> option</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /noty notifications -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/notifications/noty.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_noty.js')}}"></script>
@endsection
