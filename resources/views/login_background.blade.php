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
                    <form class="login-form" method="POST" action="{{ route('ess.login.verify') }}">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                        <img src="{{URL::asset('assets/images/logo_icon.svg')}}" class="h-48px" alt="">
                                    </div>
                                    <h5 class="mb-0">Login to your account</h5>
                                    <span class="d-block text-muted">Enter your credentials below</span>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Employee Code') }}</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input id="employee_code" type="employee_code"
                                            class="form-control mask_currency @error('employee_code') is-invalid @enderror"
                                            name="employee_code" required autofocus>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                        @error('employee_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password" required>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
