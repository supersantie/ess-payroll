@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Offcanvas @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Page panels -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Offcanvas component</h5>
        </div>

        <div class="card-body">
            Offcanvas is a sidebar component that can be toggled via JavaScript to appear from the left, right, or bottom edge of the viewport. Buttons or anchors are used as triggers that are attached to specific elements you toggle, and data attributes are used to invoke our JavaScript. Offcanvas includes support for a header with a close button and an optional body class for some initial padding.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Placement</th>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Right placement</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_right">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Basic offcanvas panel, sticked to the <strong>right</strong> of the viewport. Requires <code>.offcanvas-end</code> modifier class to be added to the offcanvas container. Offcanvas body is scrollable by default</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Left placement</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_left">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Basic offcanvas panel, sticked to the <strong>left</strong> of the viewport. Requires <code>.offcanvas-start</code> modifier class to be added to the offcanvas container. Offcanvas body is scrollable by default</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Top placement</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_top">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Basic offcanvas panel, sticked to the <strong>top</strong> of the viewport. Requires <code>.offcanvas-top</code> modifier class to be added to the offcanvas container. Not scrollable and takes all available space</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Bottom placement</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_bottom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Basic offcanvas panel, sticked to the <strong>bottom</strong> of the viewport. Requires <code>.offcanvas-bottom</code> modifier class to be added to the offcanvas container. Not scrollable and takes all available space</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Content</th>
                    </tr>
                    <tr>
                        <td>Tabbed content</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_tabs">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Vertical offcanvas panel with justified tabs. Content is scrollable</td>
                    </tr>
                    <tr>
                        <td>Header with subtitle</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_subtitle">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panel supports header and footer. Header can contain single or multiple lines of text (title and subtitle) in different colors and sizes, and optional close button</td>
                    </tr>
                    <tr>
                        <td>Centered content</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_centered">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panel body text can be centered in 2 directions - vertical and horizontal. Useful for showing empty statuses, errors or actions. Add <code>.d-flex</code> to offcanvas body and wrap inner content in a <code>div</code> with <code>.m-auto</code> class.</td>
                    </tr>
                    <tr>
                        <td>Sticky footer</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_footer">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panels also support footers made with custom markup. Headers are always sticked to the top, footers to the bottom and body is scrollable.</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Options</th>
                    </tr>
                    <tr>
                        <td>Disable backdrop</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_backdrop">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Disable offcanvas backdrop by adding <code>data-bs-backdrop="false"</code> to the offcanvas container. Clicking outside doesn't close the panel, but Escape key works as expected</td>
                    </tr>
                    <tr>
                        <td>Disable keyboard interaction</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_keyboard">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Disable keyboard interaction with offcanvas by adding <code>data-bs-keyboard="false"</code> to the offcanvas container. By default offcanvas panel can be closed when escape key is pressed</td>
                    </tr>
                    <tr>
                        <td>Resizable offcanvas</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_resizable">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>In some cases you may need to increase or decrease offcanvas size by dragging a handle. For instance, list of notifications or preview of some content. We have added a custom solution for left and right panels, where you can set min and max widths in data attributes in offcanvas container</td>
                    </tr>
                    <tr>
                        <td>Remote source</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_remote">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Load remote source with vanilla JS. Optionally you can add loading animation. Content is injected in <code>onShow</code> offcanvas callback</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Panel sizing</th>
                    </tr>
                    <tr>
                        <td>Mini size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_mini">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panel in xs size. Mini panel width is <code>60px</code> (default icon size + 20px padding on both sides). To use, add <code>offcanvas-xs</code> class to offcanvas container</td>
                    </tr>
                    <tr>
                        <td>Small size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_small">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panel in sm size. Small panel width is <code>156px</code> (mini size + additional 50px on both sides). To use, add <code>offcanvas-sm</code> class to offcanvas container</td>
                    </tr>
                    <tr>
                        <td>Default size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_right">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panel in default size. Default panel width is <code>320px</code>. Since this is a default size, panel markup doesn't require any additional sizing classes</td>
                    </tr>
                    <tr>
                        <td>Large size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_large">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Offcanvas panel in lg size. Large panel width is <code>400px</code>. To use, add <code>offcanvas-lg</code> class to offcanvas container</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Optional panel header/footer colors</th>
                    </tr>
                    <tr>
                        <td>Primary header/footer</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_primary">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Primary color theme. To use, add <code>.bg-primary.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Danger header/footer</td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_danger">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Danger color theme. To use, add <code>.bg-danger.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Success header/footer</td>
                        <td><button type="button" class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_success">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Success color theme. To use, add <code>.bg-success.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Warning header/footer</td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_warning">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Warning color theme. To use, add <code>.bg-warning.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Info header/footer</td>
                        <td><button type="button" class="btn btn-info" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_info">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Info color theme. To use, add <code>.bg-warning.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Dark header/footer</td>
                        <td><button type="button" class="btn btn-dark" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_dark">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Dark color theme. To use, add <code>.bg-dark.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Light header/footer</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_light">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Light color theme. To use, add <code>.bg-light.text-white</code> classes to <code>.offcanvas-header</code> and/or offcanvas footer containers</td>
                    </tr>
                    <tr>
                        <td>Custom color theme</td>
                        <td><button type="button" class="btn btn-indigo" data-bs-toggle="offcanvas" data-bs-target="#panel_theme_custom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Custom color theme. To use, add <code>.bg-[pink|purple|indigo|teal|yellow]</code> and <code>.text-white</code> classes from the color system to <code>.offcanvas-header</code> and/or footer containers</td>
                    </tr>


                    <tr>
                        <th colspan="3" class="table-light">Panel events</th>
                    </tr>
                    <tr>
                        <td>onShow event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="offcanvas" data-bs-target="#panel_onshow">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
                    </tr>
                    <tr>
                        <td>onShown event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="offcanvas" data-bs-target="#panel_onshown">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event is fired when the panel has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
                    </tr>
                    <tr>
                        <td>onHide event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="offcanvas" data-bs-target="#panel_onhide">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event is fired immediately when the <code>hide</code> instance method has been called</td>
                    </tr>
                    <tr>
                        <td>onHidden event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="offcanvas" data-bs-target="#panel_onhidden">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event is fired when the panel has finished being hidden from the user (will wait for CSS transitions to complete)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /page panels -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/notifications/bootbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_offcanvas.js')}}"></script>
@endsection
