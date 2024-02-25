@extends('layouts.master-login')

@section('content')
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">


        <!-- Login form -->
        <form class="otp-form" id="OtpForm" method="POST">
            @csrf
            <div class="card mb-0">
                <div class="card-body">

                    <div class="text-center mb-3">
                        <div class="d-inline-flex bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-3 mb-3 mt-1">
                            <i class="ph-envelope ph-2x"></i>
                        </div>
                        <h5 class="mb-0">We send OTP in gcr****@gmail.com</h5>
                        <span class="d-block text-muted">We'll send you instructions in email</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-4">
                        <input type="text" class="form-control" name="" maxlength="1" size="1"
                            pattern="[0-9]" inputmode="numeric" autocomplete="off" autofocus required />
                        <input type="text" class="form-control" name="" maxlength="1" size="1"
                            pattern="[0-9]" inputmode="numeric" autocomplete="off" required />
                        <input type="text" class="form-control" name="" maxlength="1" size="1"
                            pattern="[0-9]" inputmode="numeric" autocomplete="off" required />
                        <input type="text" class="form-control" name="" maxlength="1" size="1"
                            pattern="[0-9]" inputmode="numeric" autocomplete="off" required />
                        <input type="text" class="form-control" name="" maxlength="1" size="1"
                            pattern="[0-9]" inputmode="numeric" autocomplete="off" required />
                        <input type="text" class="form-control" name="" maxlength="1" size="1"
                            pattern="[0-9]" inputmode="numeric" autocomplete="off" required />
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100"> {{ __('Verify OTP') }}</button>
                    </div>

                </div>
            </div>
        </form>
        <!-- /login form -->

    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('input[type="text"]').on('input', function() {
                if ($(this).val().length >= $(this).attr('maxlength')) {
                    $(this).next('input[type="text"]').focus();
                }
            });

            $('input[type="text"]').on('paste', function(e) {
                var pastedData = (e.originalEvent || e).clipboardData.getData('text/plain');
                var inputs = $(this).closest('.d-flex').find('input[type="text"]');
                var currentIndex = inputs.index(this);
                var remainingLength = $(this).attr('maxlength') - $(this).val().length;

                // Distribute pasted data across input fields
                for (var i = 0; i < pastedData.length; i++) {
                    if (currentIndex + i < inputs.length) {
                        if ($(inputs[currentIndex + i]).attr('maxlength') - $(inputs[currentIndex + i])
                            .val().length > 0) {
                            $(inputs[currentIndex + i]).val(pastedData[i]);
                        } else {
                            break;
                        }
                    }
                }

                // Move to the next input field if available
                for (var i = currentIndex; i < inputs.length; i++) {
                    var remainingLength = $(inputs[i]).attr('maxlength') - $(inputs[i]).val().length;
                    if (remainingLength > 0) {
                        $(inputs[i]).focus();
                        break;
                    }
                }
            });

            $('input[type="text"]').on('keydown', function(e) {
                if (e.which == 8 && $(this).val() == '') {
                    $(this).prev('input[type="text"]').focus();
                }
            });

            $("#OtpForm").on("submit", function(e) {
                e.preventDefault();

                // Get all input values from the form
                var otpInputs = $(".otp-form input[type='text']").map(function() {
                    return $(this).val();
                }).get().join('');

                $.ajax({
                    url: '{{ route('auth.validate.otp') }}',
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        otp_code: otpInputs,
                        employee_code: '{{ $employeeCode }}',
                    },
                    success: function(response) {
                        // Check if the response indicates success
                        if (response.success) {
                            // If success, redirect the user to the ess.index route
                            window.location.href = '{{ route('ess.dashboard') }}';
                        } else {
                            // Handle other success cases if needed
                        }
                    },
                    error: function(err) {
                        console.error(err);
                        // Handle error response
                    }
                });
            });
        });
    </script>
@endsection
