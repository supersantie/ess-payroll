@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Uploaders @endslot
@slot('subtitle') File Input @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Multiple file uploader -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiple file upload</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Bootstrap <code>file input</code> plugin enhances the HTML 5 file input for Bootstrap 3.x into an advanced widget with file preview for various files, multiple selection and more. The plugin enhances these concepts and simplifies the widget initialization with simple HTML markup on a file input. It offers support for previewing a wide variety of files i.e. images, text, html, video, audio, flash, and objects.</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" multiple="multiple">
        </div>
    </div>
    <!-- /multiple file uploader -->


    <!-- Single file uploader -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Single file uploader</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Single file upload can be also considered the default state, because JS configuration is the same in both single and multiple modes. The only difference is <code>multiple</code> attribute in file input type. You can disable certain features like previews and make it a regular customized 1 line file input. Keep in mind that input field itself has <code>readonly</code> attribute by default.</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input">
        </div>
    </div>
    <!-- /single file uploader -->


    <!-- Hidden preview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hidden preview</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">When files are selected, file input library displays a list of thumbnails with actions by default. This preview area with all thumbnails and actions can be hidden by setting <code>data-show-preview</code> attribute or <code>showPreview</code> JS configuration option to <code>false</code>. Note - this option also disables initial drag and drop area and makes it less interactive, so that user can use only 1 option to choose files by clicking <code>Browse</code> button</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" data-show-preview="false">
        </div>
    </div>
    <!-- /hidden preview -->


    <!-- Using data attributes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Using data-attributes</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Use file input attributes (e.g. multiple upload) for setting input behavior and data attributes to control plugin options. For example, hide/show display of upload button and caption. Note that for multiple inputs, your server code must receive an array of file objects (e.g. for PHP server code, you must use the array naming convention for your input)</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
        </div>
    </div>
    <!-- /using data attributes -->


    <!-- Disabled input -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Disabled input</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Set the file input widget to be <code>readonly</code> or <code>disabled</code> by adding corresponding attribute to the file input. The following example demonstrates the disabled input field, which also disables input styling in focus state and removes pointer events from file input field and "Browse" button. See "Using plugin methods" example for reference</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" disabled>
        </div>
    </div>
    <!-- /disabled input -->


    <!-- Hidden caption -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hidden caption</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Initialize file input widget via javascript (data attributes are not supported in this particular example). Hide the caption and display widget with only buttons (and hide the drop zone by setting dropZoneEnabled to false). You can envelop the input within a container with the file-loading class to show a spinning indicator, while the plugin loads.</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input-caption">
        </div>
    </div>
    <!-- /hidden caption -->


    <!-- Sizing -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input group sizing</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Since file input library is built on top of Bootstrap, it re-uses class name logic accross containers. This allows us to control input group sizing just like we would do it in the input group component itself. Use <code>input-group-[sm|lg]</code> class values in <code>data-input-group-class</code> data attribute to change default sizing to small or large.</p>

            <div class="mb-3">
                <p class="fw-semibold">Large file input</p>
                <input type="file" class="file-input form-control-lg" data-input-group-class="input-group-lg">
            </div>

            <div class="mb-3">
                <p class="fw-semibold">Default file input</p>
                <input type="file" class="file-input">
            </div>

            <div class="mb-3">
                <p class="fw-semibold">Small file input</p>
                <input type="file" class="file-input form-control-sm" data-input-group-class="input-group-sm">
            </div>
        </div>
    </div>
    <!-- /sizing -->


    <!-- Overwrite styles -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Overwrite styles</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Thanks to deep customization possibilities via both JS and data attributes, file input allows us to adjust default styling without even touching any CSS. In the following example we configured file input to show only image files for selection &amp; preview. We also changed control button labels, styles, and icons for the browse, upload, and remove buttons</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input-custom" data-show-caption="true" data-show-upload="true" accept="image/*">
        </div>
    </div>
    <!-- /overwrite styles -->


    <!-- File extensions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Specify file extensions</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Using data attributes to configure the entire widget. This example shows how you can pass json within data attributes in the HTML markup (check data-allowed-file-extensions which basically sets the plugin property allowedFileExtensions) Allow only specific file extensions. In this example only <code>jpg</code>, <code>gif</code>, <code>png</code> and <code>txt</code> extensions are allowed</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" data-allowed-file-extensions='["jpg", "gif", "png", "txt"]'>
        </div>
    </div>
    <!-- /file extensions -->


    <!-- File types -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Specify file types</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">With <code>accept</code> option that can be specified in the markup, you can control file types that users are allowed to upload. In this example we limited file types to <code>image</code> and <code>video</code> only by adding <code>accept="image/*, video/*"</code> attribute. Additionally you can configure the condition for validating the file types using <code>`fileTypeSettings`</code> in your JS configuration</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" accept="image/*, video/*">
        </div>
    </div>
    <!-- /file types -->


    <!-- Always display preview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Always display preview</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Display preview on load with preset files/images and captions with <code>overwriteInitial</code> set to <code>false</code>. So the initial preview is always displayed when additional files are overwritten (useful for multiple upload) scenario. Check how the initial preview config can allow file thumbnails to include actions for delete and download (via the delete url (<code>url</code>) and the download url (<code>downloadUrl</code>)</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input-preview" data-show-remove="true">
        </div>
    </div>
    <!-- /always display preview -->


    <!-- Overwrite preview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Overwrite preview</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Similar configuration to scenario 1, but with <code>overwriteInitial</code> set to <code>true</code> that will overwrite files in the initial preview on selection. This scenario shows how you can set a different file name than the caption for your file actions. The file name for download is automatically displayed as the caption setting. </p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input-overwrite">
        </div>
    </div>
    <!-- /overwrite preview -->


    <!-- Block button -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Block button</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">File input configuration options allows us to change default styles of any button: browse, upload, remove etc. Besides different color options, we can also use our utility classes to change width of the main "Browse" button. Here we added <code>w-100</code> width helper class to <code>data-browse-class</code> attribute to give the button 100% width.</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" data-browse-class="btn btn-primary w-100" data-show-remove="false" data-show-caption="false" data-show-upload="false">
        </div>
    </div>
    <!-- /block button -->


    <!-- Methods -->
    <div class="card">
        <div class="card-header d-flex align-items-center py-0">
            <h5 class="py-3 mb-0">Using plugin methods</h5>
            <button type="button" class="btn btn-success btn-sm ms-auto" id="btn-modify">Disable file input</button>
        </div>

        <div class="card-body">
            <p class="mb-3">Demonstration on usage of <code>enable/disable</code> plugin methods to manipulate the fileinput plugin. Besides mode toggle, file input also supports <code>destroy</code>, <code>create</code>, <code>refresh</code> and <code>clear</code> methods. Click the button to disable file input and click again to enable it. JS config looks like this - <code>$([selector]).fileinput([method])</code>.</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input" id="file-input-methods" data-browse-class="btn btn-primary" data-main-class="input-group" data-show-remove="true" data-show-caption="true" data-show-upload="true">
        </div>
    </div>
    <!-- /methods -->


    <!-- AJAX upload -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">AJAX upload</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Asynchronous / Parallel AJAX based uploads with drag and drop functionality. Just set the <code>uploadUrl</code> data property and <code>multiple</code> to <code>true</code>. Note that the file input name attribute for multiple uploads should be setup as a array format. You can modify files selected before upload i.e. append or delete</p>

            <p class="fw-semibold">Example</p>
            <input type="file" class="file-input-ajax" multiple="multiple">
        </div>
    </div>
    <!-- /AJAX upload -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/fileinput/fileinput.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/uploader_bootstrap.js')}}"></script>
@endsection
