@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Modals @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic modals -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Modal dialogs</h5>
        </div>

        <div class="card-body">
            Modal dialog is a small window that communicates information to the user and prompt them for a response. Dialog boxes are classified as <code>"modal"</code> or <code>"modeless"</code>, depending on whether or not they block interaction with the page that initiated the dialog. Table below contains basic modal dialog examples. Click <code>Launch</code> button to run modal examples.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Basic modals</th>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Default modal dialog</td>
                        <td style="width: 20%;"><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_default">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Basic modal dialog with <code>header</code>, <code>body</code> and <code>footer</code> areas. Default examples displays: header - contains a title and a close button; footer - contains buttons and body contains static or dynamic content</td>
                    </tr>
                    <tr>
                        <td>Modal with icons</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_iconified">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal with icons added to the specified elements: heading title, footer control buttons and text inside modal body</td>
                    </tr>
                    <tr>
                        <td>Disable backdrop</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_backdrop">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Disable backdrop element using <code>data-bs-backdrop="false"</code> or alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click</td>
                    </tr>
                    <tr>
                        <td>Disable keyboard interaction</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_keyboard">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Disabled keyboard interaction. If <code>data-bs-keyboard</code> option is set to <code>false</code>, the modal can't be closed when escape key is pressed. Make sure <code>data-bs-backdrop</code> is also set to <code>static</code></td>
                    </tr>
                    <tr>
                        <td>Disable animation</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_animation">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Disabled animation. For modals that simply appear rather than fade in to view, remove the <code>.fade</code> class from your modal container</td>
                    </tr>
                    <tr>
                        <td>Scrollable modal</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_scrollable">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code> container</td>
                    </tr>
                    <tr>
                        <td>Vertically centered</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_centered">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>By default, all modals are displayed in the upper part of the screen with some distance from the top edge. You can center the modal on the screen by adding <code>.modal-dialog-centered</code> to dialog container</td>
                    </tr>
                    <tr>
                        <td>Remote source</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_remote">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Default Bootstrap's remote source option replacement using a few lines of vanilla JS and <code>onShow</code> event</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Modal sizing</th>
                    </tr>
                    <tr>
                        <td>Mini size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_mini">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal in mini size. Mini modal width is <code>300px</code>. To use, add <code>modal-xs</code> class to <code>.modal-dialog</code> container</td>
                    </tr>
                    <tr>
                        <td>Small size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_small">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal in small size. Small modal width is <code>400px</code>. To use, add <code>modal-sm</code> class to <code>.modal-dialog</code> container</td>
                    </tr>
                    <tr>
                        <td>Default size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_default">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal in default size. Default modal width is <code>600px</code>. Since this is a default size, modal markup doesn't require any additional sizing classes</td>
                    </tr>
                    <tr>
                        <td>Large size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_large">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal in large size. Large modal width is <code>900px</code>. To use, add <code>modal-lg</code> class to <code>.modal-dialog</code> container</td>
                    </tr>
                    <tr>
                        <td>Extra large size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_xlarge">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal in extra large size. Extra large modal width is <code>1140px</code>. To use, add <code>modal-xl</code> class to <code>.modal-dialog</code> container</td>
                    </tr>
                    <tr>
                        <td>Full size</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_full">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal in full width size. This modal has <code>94%</code> width of the window. To use, add <code>modal-full</code> class to <code>.modal-dialog</code> container</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="table-light">Optional modal colors</th>
                    </tr>
                    <tr>
                        <td>Default modal theme</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_default">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Default color theme. All areas of this modal dialog have <code>white</code> background color. Doesn't require any additional contextual classes</td>
                    </tr>
                    <tr>
                        <td>Primary modal header</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_theme_primary">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Primary modal. To use, add <code>.bg-primary.text-white</code> class to the <code>.modal-header</code> container and <code>.btn-close-white</code> to <code>close</code> button in modal header</td>
                    </tr>
                    <tr>
                        <td>Danger modal header</td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_theme_danger">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Danger modal. To use, add <code>.bg-danger.text-white</code> class to the <code>.modal-header</code> container and <code>.btn-close-white</code> to <code>close</code> button in modal header</td>
                    </tr>
                    <tr>
                        <td>Success modal header</td>
                        <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_theme_success">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Success modal. To use, add <code>.bg-success.text-white</code> class to the <code>.modal-header</code> container and <code>.btn-close-white</code> to <code>close</code> button in modal header</td>
                    </tr>
                    <tr>
                        <td>Warning modal header</td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_theme_warning">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Warning modal. To use, add <code>.bg-warning.text-white</code> class to the <code>.modal-header</code> container and <code>.btn-close-white</code> to <code>close</code> button in modal header</td>
                    </tr>
                    <tr>
                        <td>Info modal header</td>
                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal_theme_info">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Info modal. To use, add <code>.bg-info.text-white</code> class to the <code>.modal-header</code> container and <code>.btn-close-white</code> to <code>close</code> button in modal header</td>
                    </tr>
                    <tr>
                        <td>Custom modal header color</td>
                        <td><button type="button" class="btn btn-indigo" data-bs-toggle="modal" data-bs-target="#modal_theme_custom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal with <code>custom</code> color added to the modal header. To use, add any <a href="colors_primary">color class</a> from the color system to the <code>.modal-header</code> container and <code>.btn-close-white</code> to <code>close</code> button in modal header</td>
                    </tr>
                    <tr>
                        <td>Custom modal background color</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#modal_theme_bg_custom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal dialog with <code>solid</code> custom background color. To use, add any <a href="colors_primary">color class</a> from the color system to the <code>.modal-content</code> container. Additionaly, you can also add a custom background color to the modal header</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Form components</th>
                    </tr>
                    <tr>
                        <td>Vertical form</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_form_vertical">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal with default vertical form layout and responsive grid. Forms must be placed outside of <code>.modal-body</code> container to prevent extra horizontal padding</td>
                    </tr>
                    <tr>
                        <td>Horizontal form</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_form_horizontal">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal with horizontal form layout. It does also support responsive grid, but in this case it will look best in wider modals</td>
                    </tr>
                    <tr>
                        <td>Inline form</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_form_inline">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal with with a simple <code>inline</code> form layout</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Heading options</th>
                    </tr>
                    <tr>
                        <td>Modal with H1 heading</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_h1">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title in <code>H1</code> size. In all heading sizes, vertical position of a <code>close</code> button will be automatically adjusted to the middle of the modal header</td>
                    </tr>
                    <tr>
                        <td>Modal with H2 heading</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_h2">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title in <code>H2</code> size</td>
                    </tr>
                    <tr>
                        <td>Modal with H3 heading</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_h3">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title in <code>H3</code> size</td>
                    </tr>
                    <tr>
                        <td>Modal with H4 heading</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_h4">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title in <code>H4</code> size</td>
                    </tr>
                    <tr>
                        <td>Modal with H5 heading</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_h5">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title in <code>H5</code> size</td>
                    </tr>
                    <tr>
                        <td>Modal with H6 heading</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_h6">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title in <code>H6</code> size</td>
                    </tr>
                    <tr>
                        <td>Modal with basic title</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_title_basic">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title could be either a standard heading or any other component, but make sure you have included <code>.modal-title</code> class to it</td>
                    </tr>
                    <tr>
                        <td>Modal with subtitle</td>
                        <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_subtitle">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Modal title <code>subtitle</code>. This can be either inline or block. You can also use regular <code>&lt;div></code> or <code>&lt;span></code> element outside the heading, or <code>&lt;small></code> inside heading</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Modal events</th>
                    </tr>
                    <tr>
                        <td>onShow event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#modal_onshow">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
                    </tr>
                    <tr>
                        <td>onShown event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#modal_onshown">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
                    </tr>
                    <tr>
                        <td>onHide event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#modal_onhide">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event is fired immediately when the <code>hide</code> instance method has been called</td>
                    </tr>
                    <tr>
                        <td>onHidden event</td>
                        <td><button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#modal_onhidden">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete)</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Programmatic dialog boxes</th>
                    </tr>
                    <tr>
                        <td>Alert dialog</td>
                        <td><button type="button" class="btn btn-primary" id="alert">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of an <code>alert</code> dialog replacement with default Bootstrap modals</td>
                    </tr>
                    <tr>
                        <td>Confirm dialog</td>
                        <td><button type="button" class="btn btn-primary" id="confirm">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>confirmation</code> dialog replacement with default Bootstrap modals including callback</td>
                    </tr>
                    <tr>
                        <td>Prompt dialog</td>
                        <td><button type="button" class="btn btn-primary" id="prompt">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>prompt</code> dialog replacement with default Bootstrap modals including callback</td>
                    </tr>
                    <tr>
                        <td>Prompt with default value</td>
                        <td><button type="button" class="btn btn-primary" id="prompt_value">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a <code>prompt</code> dialog replacement with default value</td>
                    </tr>
                    <tr>
                        <td>Custom bootbox dialog</td>
                        <td><button type="button" class="btn btn-primary" id="bootbox_custom">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a custom bootbox dialog with multiple buttons and callbacks</td>
                    </tr>
                    <tr>
                        <td>Dialog with form</td>
                        <td><button type="button" class="btn btn-primary" id="bootbox_form">Launch <i class="ph-play-circle ms-2"></i></button></td>
                        <td>Example of a custom bootbox dialog with simple form and callbacks</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /basic modals -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/notifications/bootbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_modals.js')}}"></script>
@endsection
