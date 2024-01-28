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

                    <!-- Registration form -->
                    <form action="index" class="flex-fill">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" class="h-48px" alt="">
                                            </div>
                                            <h5 class="mb-0">Create account</h5>
                                            <span class="d-block text-muted">All fields are required</span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="form-control-feedback form-control-feedback-start">
                                                <input type="text" class="form-control" placeholder="JohnDoe">
                                                <div class="form-control-feedback-icon">
                                                    <i class="ph-user-circle text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">First name</label>
                                                    <div class="form-control-feedback form-control-feedback-start">
                                                        <input type="text" class="form-control" placeholder="John">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-user-circle-plus text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <div class="form-control-feedback form-control-feedback-start">
                                                        <input type="text" class="form-control" placeholder="Doe">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-user-circle-plus text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Create password</label>
                                                    <div class="form-control-feedback form-control-feedback-start">
                                                        <input type="password" class="form-control" placeholder="•••••••••••">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-lock text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Repeat password</label>
                                                    <div class="form-control-feedback form-control-feedback-start">
                                                        <input type="password" class="form-control" placeholder="•••••••••••">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-lock text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your email</label>
                                                    <div class="form-control-feedback form-control-feedback-start">
                                                        <input type="email" class="form-control" placeholder="john@doe.com">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-at text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Repeat email</label>
                                                    <div class="form-control-feedback form-control-feedback-start">
                                                        <input type="email" class="form-control" placeholder="john@doe.com">
                                                        <div class="form-control-feedback-icon">
                                                            <i class="ph-at text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-check mb-2">
                                                <input type="checkbox" name="remember" class="form-check-input" checked>
                                                <span class="form-check-label">Send me <a href="#">&nbsp;test account settings</a></span>
                                            </label>

                                            <label class="form-check mb-2">
                                                <input type="checkbox" name="remember" class="form-check-input" checked>
                                                <span class="form-check-label">Subscribe to monthly newsletter</span>
                                            </label>

                                            <label class="form-check">
                                                <input type="checkbox" name="remember" class="form-check-input">
                                                <span class="form-check-label">Accept <a href="#">&nbsp;terms of service</a></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="card-body text-end border-top">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ph-plus me-2"></i>
                                            Create account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /registration form -->

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
