@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Uploaders @endslot
@slot('subtitle') Plupload @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- All runtimes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">All runtimes</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Plupload is a cross-browser <code>multi-runtime</code> file uploading API. Basically, a set of tools that will help you to build a reliable and visually appealing file uploader in minutes. This example replaced a specific div with a the jQuery uploader <code>queue</code> widget. It will automatically check for different runtimes in the configured order, if it fails it will not convert the specified element.</p>

            <p class="fw-semibold">Queue widget example:</p>
            <div class="file-uploader"><span>Your browser doesn't have Flash installed.</span></div>
        </div>
    </div>
    <!-- /all runtimes -->


    <!-- HTML4 runtime -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">HTML4 runtime</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of multiple fime uploader with <code>HTML4</code> runtime. This kind of runtime doesn't support <code>drag and drop</code> functionality. This is the most standard runtime which supports older versions of all modern browsers. Currently, Plupload may be considered as consisting of three parts: low-level <code>pollyfills</code>, <code>Plupload API</code> and <code>Widgets</code>.</p>

            <p class="fw-semibold">HTML4 runtime example:</p>
            <div class="html4-uploader"><span>Your browser doesn't have HTML 4 support.</span></div>
        </div>
    </div>
    <!-- /HTML4 runtime -->


    <!-- HTML5 runtime -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">HTML5 runtime</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of <code>HTML5</code> runtime. The main benefit of HTML5 runtime is that files not only can be picked from browse dialog, but also can be dropped directly from the desktop. In some browsers, mostly in those based on WebKit, it is possible to drag and drop whole folders. Please note: drag and drop feature will not work in some legacy browsers.</p>

            <p class="fw-semibold">HTML5 runtime example:</p>
            <div class="html5-uploader"><span>Your browser doesn't support native upload.</span></div>
        </div>
    </div>
    <!-- /HTML5 runtime -->


    <!-- Events -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Uploader events</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This example shows you how to bind various <code>events</code> to your plupload instance. Current example demonstrates 2 <code>preInit</code> events: <code>Init</code> - fires when the current RunTime has been initialized and <code>UploadFile</code> - fires when a file is to be uploaded by the runtime. All 15 <code>post init</code> events attached to the uploader you can see in the block below in upload process.</p>

            <p class="fw-semibold">Uploader events example:</p>
            <div class="uploader-events mb-3"><span>Your browser doesn't support native upload.</span></div>

            <p class="fw-semibold">Uploader events:</p>
            <div class="card card-body pre-scrollable" id="log"></div>
        </div>
    </div>
    <!-- /events -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/plupload/plupload.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/plupload/plupload.queue.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/uploader_plupload.js')}}"></script>
@endsection
