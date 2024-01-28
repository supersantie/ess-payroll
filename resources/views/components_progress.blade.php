@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Progress @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Content loaders spinners -->
    <div class="mb-3">
        <h6 class="mb-0">
            Icon spinner
        </h6>
        <span class="text-muted d-block">Animate loading progress with our rotating icons</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon spinner</h6>
                <p class="mb-3">Default icon set Phosphor contains 3 spinner icons. Use <code>.ph-spinner</code> icon and <code>.spinner</code> class for rotating animation</p>

                <div>
                    <button type="button" class="btn btn-light">
                        <i class="ph-spinner spinner me-2"></i>
                        In button
                    </button>

                    <button type="button" class="btn btn-light btn-launch-spinner ms-2" data-icon="ph-spinner">
                        In overlay
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Icon spinner with gap</h6>
                <p class="mb-3">Similar to default spinner icon, but icon with <code>.ph-spinner-gap</code> class has a minor gap between spinner lines</p>

                <div>
                    <button type="button" class="btn btn-light">
                        <i class="ph-spinner-gap spinner me-2"></i>
                        In button
                    </button>

                    <button type="button" class="btn btn-light btn-launch-spinner ms-2" data-icon="ph-spinner-gap">
                        In overlay
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Circle line icon spinner</h6>
                <p class="mb-3">Regular circle line spinner. To use this icon, add <code>.ph-circle-notch</code> along with <code>.spinner</code> animation class to any element</p>

                <div>
                    <button type="button" class="btn btn-light">
                        <i class="ph-circle-notch spinner me-2"></i>
                        In button
                    </button>

                    <button type="button" class="btn btn-light btn-launch-spinner ms-2" data-icon="ph-circle-notch">
                        In overlay
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /content loading spinners -->



    <!-- Border spinner -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Border spinner
        </h6>
        <span class="text-muted d-block">Use the border spinners for a lightweight loading indicator</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Border spinner</h6>
                <p class="mb-3">Indicate the loading state of a component with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript</p>

                <div>
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Border spinner sizes</h6>
                <p class="mb-3">Add <code>.spinner-border-[sm|lg]</code> to make a smaller/larger spinner that can quickly be used within other components</p>

                <div>
                    <div class="spinner-border spinner-border-lg" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border mx-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Border spinner colors</h6>
                <p class="mb-3">The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with text color utilities</p>

                <div>
                    <div class="spinner-border text-primary me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-success me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-info me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-light me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button spinner</h6>
                <p class="mb-3">Use border spinners in any color within buttons to indicate an action is currently processing or taking place</p>

                <div>
                    <button type="button" class="btn btn-light">
                        <div class="spinner-border me-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        Button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button spinner</h6>
                <p class="mb-3">Border spinners used in input fields in addition to input icon placeholders to indicate loading state </p>

                <div>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" placeholder="Input placeholder">
                        <div class="form-control-feedback-icon">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Card overlay</h6>
                <p class="mb-3">Border spinner can be used in our custom card overlay that indicates a progress of dynamic content loading/updating</p>

                <div>
                    <button type="button" class="btn btn-light btn-launch-spinner" data-icon="spinner-border">
                        Launch
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /border spinner -->



    <!-- Growing spinners -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Growing spinner
        </h6>
        <span class="text-muted d-block">Show loading progress indicator that scales and fades</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Growing spinner</h6>
                <p class="mb-3">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>

                <div>
                    <div class="spinner-grow" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Growing spinner sizes</h6>
                <p class="mb-3">Add <code>.spinner-grow-[sm|lg]</code> to make a smaller/larger spinner that can quickly be used within other components</p>

                <div>
                    <div class="spinner-grow spinner-grow-lg" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow mx-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Growing spinner colors</h6>
                <p class="mb-3">The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with text color utilities</p>

                <div>
                    <div class="spinner-grow text-primary me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-light me-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button spinner</h6>
                <p class="mb-3">Use growing spinners in any color within buttons to indicate an action is currently processing or taking place</p>

                <div>
                    <button type="button" class="btn btn-light">
                        <div class="spinner-grow me-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        Button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button spinner</h6>
                <p class="mb-3">Growing spinners used in input fields in addition to input icon placeholders to indicate loading state </p>

                <div>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" placeholder="Input placeholder">
                        <div class="form-control-feedback-icon">
                            <div class="spinner-grow" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Card overlay</h6>
                <p class="mb-3">Growing spinner can be used in our custom card overlay that indicates a progress of dynamic content loading/updating</p>

                <div>
                    <button type="button" class="btn btn-light btn-launch-spinner" data-icon="spinner-grow" data-spin="false">
                        Launch
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /growing spinners -->



    <!-- Progress bars title -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Progress bars
        </h6>
        <span class="text-muted d-block">Custom progress bars featuring support for stacked bars, animated backgrounds, and text labels</span>
    </div>
    <!-- /progress bars title -->


    <!-- Progress bar options -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic progress bar</h6>
                <p class="mb-3">Progress components are built with two HTML elements, some CSS to set the width, and a few attributes</p>

                <div class="progress">
                    <div class="progress-bar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Progress bar with label</h6>
                <p class="mb-3">Add labels to your progress bars by placing text within the <code>.progress-bar</code> container. Font size is adjustable</p>

                <div class="progress">
                    <div class="progress-bar bg-teal" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85% complete</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Striped progress bar</h6>
                <p class="mb-3">Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the bar’s background color</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Rounded progress bar</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> class to the base <code>.progress</code> container to make progress bar fully rounded</p>

                <div class="progress rounded-pill">
                    <div class="progress-bar bg-warning" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Animated progress bar</h6>
                <p class="mb-3">Use <code>.progress-bar-animated</code> in <code>.progress-bar</code> container to animate the stripes right to left via CSS3 animations</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="card card-body">
                <h6 class="fw-semibold">Multiple progress bars</h6>
                <p class="mb-3">Include multiple progress bars in a progress component with the base <code>.progress</code> class to display them on 1 line</p>

                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /progress bar options -->


    <!-- Progress bar colors -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Color options</h6>
                <p class="mb-3">Color system includes 11 colors and all of them can be used in progress bars via <code>.bg-[color]</code> utility classes</p>

                <div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-dark" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" style="width: 35%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-pink" style="width: 55%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-purple" style="width: 60%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-indigo" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-teal" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-yellow" style="width: 75%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Striped progress bars</h6>
                <p class="mb-3">Since stripes are semi-transparent and displayed on top of the bars, they can be used in any progress bar color</p>

                <div>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-dark" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-danger" style="width: 35%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-success" style="width: 40%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-warning" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-info" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-pink" style="width: 55%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-purple" style="width: 60%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-indigo" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-teal" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-yellow" style="width: 75%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Animated progress bars</h6>
                <p class="mb-3">Just use a regular method to animate progress bars with <code>.progress-bar-animated</code> to animate stripes in any bar</p>

                <div>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 35%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 40%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink" style="width: 55%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-purple" style="width: 60%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 75%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /progress bar colors -->



    <!-- Progress bar heights -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Bar height variations
        </h6>
        <span class="text-muted d-block">How progress bars height is handled in various progress bar styles</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic progress bars</h6>
                <p class="mb-3">We only set a height value on the <code>.progress</code>, so if you change that value the inner <code>.progress-bar</code> will automatically resize</p>

                <div class="progress mb-3" style="height: 1.375rem;">
                    <div class="progress-bar bg-info" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.875rem;">
                    <div class="progress-bar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.625rem;">
                    <div class="progress-bar bg-danger" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.375rem;">
                    <div class="progress-bar bg-success" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress" style="height: 0.125rem;">
                    <div class="progress-bar bg-indigo" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Striped progress bars</h6>
                <p class="mb-3">You can either create additional classes for progress bar height or use inline <code>height</code> property to control bar height</p>

                <div class="progress mb-3" style="height: 1.375rem;">
                    <div class="progress-bar progress-bar-striped bg-info" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.875rem;">
                    <div class="progress-bar progress-bar-striped" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.625rem;">
                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.375rem;">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress" style="height: 0.125rem;">
                    <div class="progress-bar progress-bar-striped bg-indigo" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Animated progress bars</h6>
                <p class="mb-3">Mind the text label size, as in smaller sizes text label can't be shown due to hidden overflow of the <code>.progress</code> container</p>

                <div class="progress mb-3" style="height: 1.375rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.875rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.625rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3" style="height: 0.375rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress" style="height: 0.125rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /progress bar heights -->

</div>
<!-- /content area -->

@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_progress.js')}}"></script>
@endsection
