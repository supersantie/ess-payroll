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

                    <!-- Unlock form -->
                    <form class="login-form" action="index">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="card-img-actions d-inline-block mb-3">
                                        <img class="rounded-circle" src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="160" height="160" alt="">
                                        <div class="card-img-actions-overlay card-img rounded-circle">
                                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                                <i class="ph-upload-simple"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mb-3">
                                    <h6 class="mb-0">Victoria Baker</h6>
                                    <span class="text-muted">Unlock your account</span>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Enter password</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="password" class="form-control" placeholder="•••••••••••">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <label class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" checked>
                                        <span class="form-check-label">Remember</span>
                                    </label>

                                    <a href="login_password_recover" class="ms-auto">Forgot password?</a>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="ph-lock-key-open me-2"></i>
                                    Unlock
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /unlock form -->

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
