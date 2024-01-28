@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extensions @endslot
@slot('subtitle') Image Cropper @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Cropper demonstration -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Cropper demonstration</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">This example demonstrates some basic functionality with previews in different sizes. <code>X</code> and <code>Y</code> values display current cropping zone position, <code>width</code> and <code>height</code> values display current cropping zone size, <code>scaleX</code> and <code>scaleY</code> values display current image scale. You can get image, crop box and container data by clicking on the proper button on the right side. Also you can change cropping zone aspect ratio and download cropped image on the fly.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="image-cropper-container mb-3">
                        <img src="{{URL::asset('assets/images/demo/images/for_crop.png')}}" alt="" class="cropper" id="demo-cropper-image">
                    </div>

                    <div class="demo-cropper-toolbar mb-3">
                        <label class="fw-semibold mb-1">Toolbar:</label>
                        <div class="btn-group d-flex">
                            <button type="button" class="btn btn-primary btn-icon" data-method="setDragMode" data-option="move" title="Move">
                                <span class="ph-arrows-out-cardinal"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="setDragMode" data-option="crop" title="Crop">
                                <span class="ph-crop"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                <span class="ph-arrow-left"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                <span class="ph-arrow-right"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                <span class="ph-arrow-up"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                <span class="ph-arrow-down"></span>
                            </button>
                        </div>
                    </div>

                    <div class="demo-cropper-toolbar mb-3">
                        <div class="btn-group d-flex">
                            <button type="button" class="btn btn-primary btn-icon" data-method="zoom" data-option="0.1" title="Zoom In">
                                <span class="ph-magnifying-glass-plus"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                <span class="ph-magnifying-glass-minus"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="rotate" data-option="-45" title="Rotate Left">
                                <span class="ph-arrow-counter-clockwise"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="rotate" data-option="45" title="Rotate Right">
                                <span class="ph-arrow-clockwise"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                <span class="ph-arrows-left-right"></span>
                            </button>

                            <button type="button" class="btn btn-primary btn-icon" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                <span class="ph-arrows-down-up"></span>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="fw-semibold mb-1">Crop:</label>
                        <div class="btn-group d-flex demo-cropper-toolbar">
                            <button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal">
                                Get Cropped Canvas
                            </button>

                            <button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 150, &quot;height&quot;: 150 }" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal">
                                150&times;150
                            </button>

                            <button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 120, &quot;height&quot;: 120 }" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal">
                                120&times;120
                            </button>

                            <button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 90, &quot;height&quot;: 90 }" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal">
                                90&times;90
                            </button>

                            <button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 60, &quot;height&quot;: 60 }" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal">
                                60&times;60
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="fw-semibold mb-1">Aspect ratio:</label>
                        <div class="btn-group d-flex demo-cropper-ratio">
                            <input type="radio" class="btn-check" id="aspectRatio2" name="aspectRatio" autocomplete="off" value="1" checked>
                            <label class="btn btn-light" for="aspectRatio2">1:1</label>

                            <input type="radio" class="btn-check" id="aspectRatio0" name="aspectRatio" autocomplete="off" value="1.7777777777777777">
                            <label class="btn btn-light" for="aspectRatio0">16:9</label>

                            <input type="radio" class="btn-check" id="aspectRatio1" name="aspectRatio" autocomplete="off" value="1.3333333333333333">
                            <label class="btn btn-light" for="aspectRatio1">4:3</label>

                            <input type="radio" class="btn-check" id="aspectRatio3" name="aspectRatio" autocomplete="off" value="0.6666666666666666">
                            <label class="btn btn-light" for="aspectRatio3">2:3</label>

                            <input type="radio" class="btn-check" id="aspectRatio4" name="aspectRatio" autocomplete="off" value="NaN">
                            <label class="btn btn-light" for="aspectRatio4">Free</label>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-lg-4">
                            <label for="crop_clear">Clear</label>
                            <span class="form-switch mx-1">
                                <input type="checkbox" class="form-check-input clear-crop-switch" id="crop_clear" checked>
                            </span>
                            <label for="crop_clear">Crop</label>
                        </div>

                        <div class="col-lg-4">
                            <label for="crop_mode">Disable</label>
                            <span class="form-switch mx-1">
                                <input type="checkbox" class="form-check-input enable-disable-switch" id="crop_mode" checked>
                            </span>
                            <label for="crop_mode">Enable</label>
                        </div>

                        <div class="col-lg-4">
                            <label for="crop_destroy">Destroy</label>
                            <span class="form-switch mx-1">
                                <input type="checkbox" class="form-check-input destroy-create-switch" id="crop_destroy" checked>
                            </span>
                            <label for="crop_destroy">Create</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="eg-preview d-lg-flex justify-content-lg-center align-items-lg-center text-center wmin-0 mb-3">
                        <div class="preview preview-lg d-lg-inline-block mt-3 mx-auto me-lg-0 mt-lg-0 ms-lg-3 overflow-hidden rounded"></div>
                        <div class="preview preview-md d-lg-inline-block mt-3 mx-auto me-lg-0 mt-lg-0 ms-lg-3 overflow-hidden rounded"></div>
                        <div class="preview preview-sm d-lg-inline-block mt-3 mx-auto me-lg-0 mt-lg-0 ms-lg-3 overflow-hidden rounded"></div>
                        <div class="preview preview-xs d-lg-inline-block mt-3 mx-auto me-lg-0 mt-lg-0 ms-lg-3 overflow-hidden rounded"></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">X value:</label>
                                <input type="text" class="form-control" id="dataX" placeholder="x">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Width:</label>
                                <input type="text" class="form-control" id="dataWidth" placeholder="width">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">ScaleX:</label>
                                <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Y value:</label>
                                <input type="text" class="form-control" id="dataY" placeholder="y">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Height:</label>
                                <input type="text" class="form-control" id="dataHeight" placeholder="height">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">ScaleY:</label>
                                <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">General data:</label>
                        <div class="input-group">
                            <input class="form-control" id="showData1" type="text" placeholder="General data">
                            <button class="btn btn-light" id="getData" type="button">Get Data</button>
                            <button class="btn btn-light" id="setData" type="button">Set Data</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Container &amp; image data:</label>
                        <div class="input-group">
                            <input class="form-control" id="showData2" type="text" placeholder="Container and image data">
                            <button class="btn btn-light" id="getContainerData" type="button">Get Container Data</button>
                            <button class="btn btn-light" id="getImageData" type="button">Get Image Data</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Canvas data:</label>
                        <div class="input-group">
                            <input class="form-control" id="showData3" type="text" placeholder="Canvas data">
                            <button class="btn btn-light" id="getCanvasData" type="button">Get Canvas Data</button>
                            <button class="btn btn-light" id="setCanvasData" type="button">Set Canvas Data</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Crop box data:</label>
                        <div class="input-group">
                            <input class="form-control" id="showData4" type="text" placeholder="Crop box data">
                            <button class="btn btn-light" id="getCropBoxData" type="button">Get Crop Box Data</button>
                            <button class="btn btn-light" id="setCropBoxData" type="button">Set Crop Box Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /cropper demonstration -->


    <!-- Basic usage -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic usage</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">This is the most basic example of <code>cropper</code> implementation. By default cropping area is centered and takes 80% of image space. The image is resizable, but should be wrapped in block element with fixed height.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/1.png')}}" alt="" class="crop-basic">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Hidden overlay</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates default options, but with hidden black modal layer above the cropper. To hide the modal set <code>modal</code> option to <code>false</code>. If visible, modal color can be easily changed in css.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/2.png')}}" alt="" class="crop-modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic usage -->


    <!-- Zone options -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Fixed position</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates cropped area that has <code>fixed position</code> and can't be moved. Although it isn't movable, other options remain available: resize, dragging, callbacks, aspect ratios, modal etc.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/3.png')}}" alt="" class="crop-not-movable">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Fixed size</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates cropped area that has <code>fixed size</code> and can't be resized. Although it isn't resizable, other options remain available: moving, dragging, callbacks, aspect ratios, modal etc.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/4.png')}}" alt="" class="crop-not-resizable">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /zone options -->


    <!-- Disable functionality -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Disabled autocrop</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">In this example cropping zone is not rendered automatically when initialize and available only on a new drag. By default, cropping zone is always <code>visible</code> and can be hidden by setting <code>autoCrop</code> option to <code>false</code>.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/5.png')}}" alt="" class="crop-auto">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Disabled image drag</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">In this example the user can't drag the image within container, but can drag cropping area.. By default, this feature is disabled and can be enabled by setting <code>movable</code> option to <code>false</code>.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/6.png')}}" alt="" class="crop-drag">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /disable functionality -->


    <!-- Ratios -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Fixed 16:9 ratio</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">Thix example demonstrates fixed <code>16:9</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified using <code>aspectRatio</code> option.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/7.png')}}" alt="" class="crop-16-9">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Fixed 4:3 ratio</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">Thix example demonstrates fixed <code>4:3</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified using <code>aspectRatio</code> option.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/8.png')}}" alt="" class="crop-4-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ratios -->


    <!-- Zone sizing -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Minimum zone size</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates the <code>minimum</code> width and height (px of original image) of the cropping zone. Better use this option only when you are sure that the image has this <code>minimum</code> width and height. By default, both values aren't specified.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/9.png')}}" alt="" class="crop-min">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Disabled zoom</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates the ability to disable <code>zoom</code> feature, it works in both options: disables zoom on scroll and zoom on touch. By default, image cropper is zoomable, to disable zooming set <code>zoomable</code> option to <code>false</code>.</p>

                    <div class="image-cropper-container">
                        <img src="{{URL::asset('assets/images/demo/images/10.png')}}" alt="" class="crop-zoomable">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /zone sizing -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/media/cropper.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extension_image_cropper.js')}}"></script>
@endsection
