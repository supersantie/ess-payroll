@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Toasts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Toasts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Toast component</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position. Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Basic toast</div>
                    <p class="mb-3">A very basic example of toast. Keep in mind that for performance reasons you must initialize them yourself. Also toasts will automatically hide if you don't specify <code>autohide: false</code></p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Dismiss button</div>
                    <p class="mb-3">Our default <code>close</code> button can be used either in toast header or body. You can also use any element or button type with <code>data-bs-dismiss="toast"</code> attribute to close the toast</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-body d-flex">
                                <div class="flex-fill">
                                    Hello, world! This is a toast message.
                                </div>

                                <button type="button" class="btn-close flex-shrink-0 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Rounded toast</div>
                    <p class="mb-3">Depending on toast location and overall component styling, you can show toasts with fully rounded corners. Just add <code>.rounded-pill</code> class to the base <code>.toast</code> container</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast rounded-pill px-2 show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Custom close button</div>
                    <p class="mb-3">You can also use regular buttons as alternative to "times" icon. Here we moved the button outside <code>.toast-body</code> so that is fills all available height and wrapped all content in flex container</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="width: 75%; margin: auto;">
                            <div class="d-flex flex-wrap">
                                <div class="toast-body me-auto">
                                    Hello, world! This is a toast message.
                                </div>

                                <button type="button" class="btn btn-link border-transparent ms-2" data-bs-dismiss="toast">Dismiss</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Toast with header</div>
                    <p class="mb-3">Toast headers use <code>display: flex</code>, allowing easy alignment of content thanks to our margin and flexbox utilities. Altough header is optional, it's recommended for better user experience</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="fw-semibold me-auto">Toast header</div>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Header with dismiss button</div>
                    <p class="mb-3">The right side in the header is usually reserved for some secondary text or action links, and is the default location of dismiss button. Use button with <code>.btn-close</code> within header container</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Header with icon</div>
                    <p class="mb-3">Toast header text supports contextual icons in any alignment, style and color. Just add icon markup and control the distance between icons and text with our margin utility classes</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <i class="ph-check-circle me-2"></i>
                                <div class="fw-semibold me-auto">Toast header</div>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Header with loading spinner</div>
                    <p class="mb-3">You can also use spinner component to visually indicate the loading state. Use our regular spinner markup inside <code>.toast-header</code> container before/after text and margin utility classes</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="spinner-border spinner-border-sm me-2" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="fw-semibold me-auto">Toast header</div>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Helper text</div>
                    <p class="mb-3">If you need to show a time stamp or any other text, just add to the header container. Additionally wrap header text in container with <code>.me-auto</code> to push all other content to the right</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <small class="text-muted">1 hour ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Header badge</div>
                    <p class="mb-3">Alternatively you can also show badge instead of helper text. The logic here is the same, and badge supports all styles and colors. Multiple badgeas are also supported</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <span class="badge bg-primary text-white">Update</span>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Toast with block button</div>
                    <p class="mb-3">Toast supports multiple bodies. Here we added <code>.border-top</code> to the second <code>.toast-body</code> to disually separate 2 containers and added regular button to simulate action panel</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                            <div class="toast-body border-top">
                                <button type="button" class="btn btn-primary w-100">
                                    Confirm
                                    <i class="ph-arrow-circle-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Toast with button group</div>
                    <p class="mb-3">You can also use multiple buttons to display a group of buttons in our usual toolbar format. You can change button alignment and fully control all styling options via our utility classes</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                            <div class="toast-body border-top text-end">
                                <button type="button" class="btn btn-light">Cancel</button>
                                <button type="button" class="btn btn-primary ms-2">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Custom header background</div>
                    <p class="mb-3">One of the possible options for creating a set of contextual notifications. Use our color classes in <code>.toast-header</code> container along with <code>.text-white</code> and <code>.btn-close-white</code> classes</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header bg-success text-white">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Custom border color</div>
                    <p class="mb-3">In addition to custom header background, you can also add our color utility classes <code>.border-[color]</code> to <code>.toast</code> and <code>.toast-header</code> containers to change the main border color</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast border-success fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header border-success bg-success text-white">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Dark toast</div>
                    <p class="mb-3">By default, toast component is designed in a light theme. You can create different toast color schemes with our color and background utilities. For a crisp edge, remove the default border with <code>.border-0</code></p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast bg-dark border-0 text-white fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header bg-white bg-opacity-10 text-white border-0">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-2">Toast with custom background color</div>
                    <p class="mb-3">You can also use all our 9 colors to create a custom contextual set of notifications with solid background color. Just use <code>.bg-[color]</code> and <code>.text-white</code> in <code>.toast</code> container</p>

                    <div class="border rounded p-2 p-lg-4 mb-4">
                        <div class="toast bg-success text-white border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true" style="margin: auto;">
                            <div class="toast-header bg-black bg-opacity-10 text-white">
                                <div class="fw-semibold me-auto">Toast header</div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /toasts -->

</div>
<!-- /content area -->

@endsection
