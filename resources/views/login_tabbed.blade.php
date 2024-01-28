<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Themesbrand</title>

    @include('layouts.head-css')

</head>

<body class="bg-dark">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <!-- Login form -->
                    <form class="login-form wmin-sm-400" action="index">
                        <div class="card mb-0">
                            <ul class="nav nav-tabs nav-tabs-underline nav-justified bg-light rounded-top mb-0">
                                <li class="nav-item">
                                    <a href="#login-tab1" class="nav-link active" data-bs-toggle="tab">
                                        <h6 class="my-1">Sign in</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#login-tab2" class="nav-link" data-bs-toggle="tab">
                                        <h6 class="my-1">Register</h6>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content card-body">
                                <div class="tab-pane fade show active" id="login-tab1">
                                    <div class="text-center mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" class="h-48px" alt="">
                                        </div>
                                        <h5 class="mb-0">Login to your account</h5>
                                        <span class="d-block text-muted">Enter your credentials below</span>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" placeholder="john@doe.com" required>
                                            <div class="invalid-feedback">Enter your username</div>
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="password" class="form-control" placeholder="•••••••••••" required>
                                            <div class="invalid-feedback">Enter your username</div>
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-lock text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">Enter your password</div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <label class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input" checked>
                                            <span class="form-check-label">Remember</span>
                                        </label>

                                        <a href="login_password_recover" class="ms-auto">Forgot password?</a>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                    </div>

                                    <div class="text-center text-muted content-divider mb-3">
                                        <span class="px-2">or sign in with</span>
                                    </div>

                                    <div class="text-center mb-3">
                                        <button type="button" class="btn btn-outline-primary btn-icon rounded-pill border-width-2"><i class="ph-facebook-logo"></i></button>
                                        <button type="button" class="btn btn-outline-pink btn-icon rounded-pill border-width-2 ms-2"><i class="ph-dribbble-logo"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-icon rounded-pill border-width-2 ms-2"><i class="ph-github-logo"></i></button>
                                        <button type="button" class="btn btn-outline-info btn-icon rounded-pill border-width-2 ms-2"><i class="ph-twitter-logo"></i></button>
                                    </div>

                                    <div class="text-center text-muted content-divider mb-3">
                                        <span class="px-2">Don't have an account?</span>
                                    </div>

                                    <div class="mb-3">
                                        <a href="#" class="btn btn-light w-100">Sign up</a>
                                    </div>

                                    <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                                </div>

                                <div class="tab-pane fade" id="login-tab2">
                                    <div class="text-center mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" class="h-48px" alt="">
                                        </div>
                                        <h5 class="mb-0">Create account</h5>
                                        <span class="d-block text-muted">All fields are required</span>
                                    </div>

                                    <div class="text-center text-muted content-divider mb-3">
                                        <span class="px-2">Your credentials</span>
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

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="password" class="form-control" placeholder="•••••••••••">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-lock text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center text-muted content-divider mb-3">
                                        <span class="px-2">Your contacts</span>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Your email</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" placeholder="john@doe.com">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-at text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Repeat email</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" placeholder="john@doe.com">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-at text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center text-muted content-divider mb-3">
                                        <span class="px-2">Additions</span>
                                    </div>

                                    <div class="mb-3">
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

                                    <button type="submit" class="btn btn-teal w-100">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /login form -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    @include('layouts.right-sidebar')

</body>
</html>
