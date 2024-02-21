<!DOCTYPE html>
<html lang="en" dir="ltr" data-color-theme="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Themesbrand</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.svg') }}">

    @include('layouts.head-css')

</head>

<body>
    <!-- navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner my-4">


                <div class="text-center h-100">
                    <img src="{{ URL::asset('assets/images/logo_icon.svg') }}" alt="" style="height: 32px;">
                    <div class="mt-2">
                        <h6 class="m-0 fw-semibold">Workfolio TNA</h6>
                        <p class="text-muted mb-3">Empower Your Workflow, Simplify Success!</p>
                    </div>
                    <div class="mx-auto container">

                        <video id="videoElement" style="height: 300px; width: 100%;" autoplay></video>

                        <div class="btn-group d-flex ">
                            <button type="button" class="btn btn-lg btn-success btn-labeled btn-labeled-start">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="ph-fingerprint-simple"></i>
                                </span>
                                Time In
                            </button>
                            <button type="button" class="btn btn-lg btn-danger btn-labeled btn-labeled-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="ph-fingerprint-simple"></i>
                                </span>
                                Time Out
                            </button>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="link-primary"> Go back</a>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
<script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then(function(stream) {
                    var video = $('#videoElement')[0];
                    video.srcObject = stream;
                    video.play();
                })
                .catch(function(error) {
                    console.error('Error accessing webcam:', error);
                });
        }
    });
</script>

</html>
