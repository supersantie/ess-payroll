@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Uploaders @endslot
@slot('subtitle') Dropzone @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Multiple file upload -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiple files</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of a <code>multiple</code> file uploader based on <code>Dropzone.js</code> library. Dropzone.js is a light weight JavaScript library that turns an HTML element into a dropzone. This means that a user can drag and drop a file onto it, and the file gets uploaded to the server via AJAX. By default Dropzone is a multiple file uploader, so this example is a basic setup. Uploading process runs automatically and image thumbnail previews are shown right after file selection.</p>

            <p class="fw-semibold">Multiple file upload example:</p>
            <form action="#" class="dropzone" id="dropzone_multiple"></form>
        </div>
    </div>
    <!-- /multiple file upload -->


    <!-- Single file upload -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Single file</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of a <code>single</code> file uploader based on <code>Dropzone.js</code> library. By default, dropzone is a multiple file uploader and does not have specific option allowing us to switch to single file uploading mode, but this functionality can be achieved by adding more options to the plugin settings, such as <code>addedfile</code> callback and <code>maxFiles</code> option set to <code>1</code>. Now only 1 file can be selected and it will be replaced with another one instead of adding it to the preview.</p>

            <p class="fw-semibold">Single file upload example:</p>
            <form action="#" class="dropzone" id="dropzone_single"></form>
        </div>
    </div>
    <!-- /single file upload -->


    <!-- Accepted file formats -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">File formats</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of dropzone file uploader with specified <code>file formats</code>. The default implementation of <code>accept</code> checks the file's mime type or extension against this list. This is a comma separated list of mime types or file extensions. Eg.: <code>image/*</code>, <code>application/pdf</code>, <code>.psd</code>. If the Dropzone is clickable, this option will be used as <code>accept</code> parameter on the hidden file input as well. Thsi example accepts <code>images</code> only with maximum size of <code>1Mb</code>.</p>

            <p class="fw-semibold">File formats example:</p>
            <form action="#" class="dropzone" id="dropzone_accepted_files"></form>
        </div>
    </div>
    <!-- /accepted file formats -->


    <!-- Removable thumbnails -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Removable thumbnails</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of dropzone file uploader with <code>remove</code> thumbnail option applied to every thumbnail in the preview by setting <code>addRemoveLinks</code> option to <code>true</code>. This will add a link to every file preview to remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>, <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code> options are used for the wording.</p>

            <p class="fw-semibold">Removable thumbnails example:</p>
            <form action="#" class="dropzone" id="dropzone_remove"></form>
        </div>
    </div>
    <!-- /removable thumbnails -->


    <!-- File limits -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">File limitations</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of dropzone uploader with different <code>limits</code>: <code>maxFilesize</code> - maximum size of files allowed, in Mb; <code>maxFiles</code> - if not <code>null</code> defines how many files this Dropzone handles, if it exceeds, the event <code>maxfilesexceeded</code> will be called. The dropzone element gets the class <code>dz-max-files-reached accordingly</code> so you can provided visual feedback; <code>maxThumbnailFilesize</code> - in MB. When the filename exceeds this limit, the thumbnail will not be generated.</p>

            <p class="fw-semibold">File limits example:</p>
            <form action="#" class="dropzone" id="dropzone_file_limits"></form>
        </div>
    </div>
    <!-- /file limits -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/uploaders/dropzone.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/uploader_dropzone.js')}}"></script>
@endsection
