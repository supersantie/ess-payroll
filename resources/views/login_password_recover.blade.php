<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Themesbrand</title>

    @include('layouts.head-css')

</head>

<body>

    @include('layouts.auth-navbar')


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <!-- Password recovery form -->
                    <form class="login-form" action="index">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <div class="d-inline-flex bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-3 mb-3 mt-1">
                                        <i class="ph-arrows-counter-clockwise ph-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Password recovery</h5>
                                    <span class="d-block text-muted">We'll send you instructions in email</span>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Your email</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="email" class="form-control" placeholder="john@doe.com">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-at text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="ph-arrow-counter-clockwise me-2"></i>
                                    Reset password
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /password recovery form -->

                </div>
                <!-- /content area -->


                @include('layouts.footer')

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    @include('layouts.right-sidebar')

</body>
</html>
