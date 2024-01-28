@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Alerts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Default alerts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default alerts</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Provide contextual feedback messages for typical user actions with the handful of available and flexible <code>alert</code> messages. Alerts don't have default classes, only base and modifier classes: choose from <code>primary</code>, <code>success</code>, <code>info</code>, <code>warning</code> or <code>danger</code>. Wrap any text and an optional dismiss button in <code>.alert</code> and one of the five contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

            <div class="row">
                <div class="col-lg-6">
                    <p>Primary alert</p>
                    <div class="alert alert-primary border-0 alert-dismissible fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Secondary alert</p>
                    <div class="alert alert-secondary border-0 alert-dismissible fade show">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Danger alert</p>
                    <div class="alert alert-danger border-0 alert-dismissible fade show">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Success alert</p>
                    <div class="alert alert-success border-0 alert-dismissible fade show">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Warning alert</p>
                    <div class="alert alert-warning border-0 alert-dismissible fade show">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Info alert</p>
                    <div class="alert alert-info border-0 alert-dismissible fade show">
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /default alerts -->


    <!-- Bordered alerts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bordered alerts</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">All alerts have border by default and depending on use case and/or alert location, border can be removed or made stronger for a stronger appearance. Use border color helper classes to change border color if necessary. Use <code>.alert-dismissible</code> to add a close button functionality and <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

            <div class="row">
                <div class="col-lg-6">
                    <p>Primary alert</p>
                    <div class="alert alert-primary alert-dismissible fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Danger alert</p>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Success alert</p>
                    <div class="alert alert-success alert-dismissible fade show">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Warning alert</p>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Info alert</p>
                    <div class="alert alert-info alert-dismissible fade show">
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Custom color</p>
                    <div class="alert alert-purple alert-dismissible fade show">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bordered alerts -->


    <!-- Basic alerts with left icon -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Left icon</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Alerts with <code>left</code> aligned block and inline icons. Block icon is a separate element that requires background color and text color utility classes, along with <code>.alert-icon</code> class that adds necessary styling. Alert container requires <code>.alert-icon-[left|right]</code> class depending on icon alignment. Inline icon inherits color from contextual alert class and doesn't require any additions.</p>

            <div class="mb-3">
                <div class="fw-bold border-bottom pb-2 mb-3">Block icon</div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>Primary alert</p>
                        <div class="alert alert-primary alert-icon-start alert-dismissible fade show">
                            <span class="alert-icon bg-primary text-white">
                                <i class="ph-bell-ringing"></i>
                            </span>
                            <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Danger alert</p>
                        <div class="alert alert-danger alert-icon-start alert-dismissible fade show">
                            <span class="alert-icon bg-danger text-white">
                                <i class="ph-x-circle"></i>
                            </span>
                            <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Success alert</p>
                        <div class="alert alert-success alert-icon-start alert-dismissible fade show">
                            <span class="alert-icon bg-success text-white">
                                <i class="ph-check-circle"></i>
                            </span>
                            <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p>Warning alert</p>
                        <div class="alert alert-warning alert-icon-start alert-dismissible fade show">
                            <span class="alert-icon bg-warning text-white">
                                <i class="ph-warning-circle"></i>
                            </span>
                            <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Info alert</p>
                        <div class="alert alert-info alert-icon-start alert-dismissible fade show">
                            <span class="alert-icon bg-info text-white">
                                <i class="ph-info"></i>
                            </span>
                            <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Custom color</p>
                        <div class="alert alert-indigo alert-icon-start alert-dismissible fade show">
                            <span class="alert-icon bg-indigo text-white">
                                <i class="ph-gear"></i>
                            </span>
                            <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-bold border-bottom pb-2 mb-3">Inline icon</div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Primary alert</p>
                    <div class="alert alert-primary alert-dismissible fade show">
                        <i class="ph-bell-ringing me-2"></i>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Danger alert</p>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <i class="ph-x-circle me-2"></i>
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Success alert</p>
                    <div class="alert alert-success alert-dismissible fade show">
                        <i class="ph-check-circle me-2"></i>
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Warning alert</p>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <i class="ph-warning-circle me-2"></i>
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Info alert</p>
                    <div class="alert alert-info alert-dismissible fade show">
                        <i class="ph-info me-2"></i>
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Custom color</p>
                    <div class="alert alert-indigo alert-dismissible fade show">
                        <i class="ph-gear me-2"></i>
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic alerts with left icon -->


    <!-- Basic alerts with right icon -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Right icon</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Alerts with <code>right</code> aligned block and inline icons. Block icon is a separate element that requires background color and text color utility classes, along with <code>.alert-icon</code> class that adds necessary styling. Alert container requires <code>.alert-icon-[left|right]</code> class depending on icon alignment. Inline icon inherits color from contextual alert class and doesn't require any additions.</p>

            <div class="mb-3">
                <div class="fw-bold border-bottom pb-2 mb-3">Block icon</div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>Primary alert</p>
                        <div class="alert alert-primary alert-icon-end alert-dismissible fade show">
                            <span class="alert-icon bg-primary text-white">
                                <i class="ph-bell-ringing"></i>
                            </span>
                            <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Danger alert</p>
                        <div class="alert alert-danger alert-icon-end alert-dismissible fade show">
                            <span class="alert-icon bg-danger text-white">
                                <i class="ph-x-circle"></i>
                            </span>
                            <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Success alert</p>
                        <div class="alert alert-success alert-icon-end alert-dismissible fade show">
                            <span class="alert-icon bg-success text-white">
                                <i class="ph-check-circle"></i>
                            </span>
                            <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p>Warning alert</p>
                        <div class="alert alert-warning alert-icon-end alert-dismissible fade show">
                            <span class="alert-icon bg-warning text-white">
                                <i class="ph-warning-circle"></i>
                            </span>
                            <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Info alert</p>
                        <div class="alert alert-info alert-icon-end alert-dismissible fade show">
                            <span class="alert-icon bg-info text-white">
                                <i class="ph-info"></i>
                            </span>
                            <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Custom color</p>
                        <div class="alert alert-indigo alert-icon-end alert-dismissible fade show">
                            <span class="alert-icon bg-indigo text-white">
                                <i class="ph-gear"></i>
                            </span>
                            <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-bold border-bottom pb-2 mb-3">Inline icon</div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Primary alert</p>
                    <div class="alert alert-primary">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <i class="ph-bell-ringing float-end ms-2"></i>
                    </div>

                    <p>Danger alert</p>
                    <div class="alert alert-danger">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                        <i class="ph-x-circle float-end ms-2"></i>
                    </div>

                    <p>Success alert</p>
                    <div class="alert alert-success">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                        <i class="ph-check-circle float-end ms-2"></i>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Warning alert</p>
                    <div class="alert alert-warning">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                        <i class="ph-warning-circle float-end ms-2"></i>
                    </div>

                    <p>Info alert</p>
                    <div class="alert alert-info">
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
                        <i class="ph-info float-end ms-2"></i>
                    </div>

                    <p>Custom color</p>
                    <div class="alert alert-indigo">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                        <i class="ph-gear float-end ms-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic alerts with right icon -->


    <!-- Solid alerts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Solid alerts</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Examples of alerts with <code>solid</code> background color. This type of alerts are useful when you need to highlight some important information and bring more attention to it. To use solid alert styling, add contextual background color class to the base <code>.alert</code> container. Also alerts support custom color classes from a custom <a href="colors_pink">color system</a>. To use a custom color, add <code>.bg-*</code> and <code>.text-*</code> classes to the base <code>.alert</code> class.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Primary alert</p>
                    <div class="alert bg-primary text-white alert-dismissible fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p class="fw-semibold">Danger alert</p>
                    <div class="alert bg-danger text-white alert-dismissible fade show">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link text-reset">try submitting again</a>.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p class="fw-semibold">Success alert</p>
                    <div class="alert bg-success text-white alert-dismissible fade show">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link text-reset">this important</a> alert message.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Warning alert</p>
                    <div class="alert bg-warning text-white alert-dismissible fade show">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link text-reset">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p class="fw-semibold">Info alert</p>
                    <div class="alert bg-info text-white alert-dismissible fade show">
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link text-reset">super important</a>.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p class="fw-semibold">Custom color</p>
                    <div class="alert bg-indigo text-white alert-dismissible fade show">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link text-reset">alert</a> with custom color.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /solid alerts -->


    <!-- Solid alerts with left icon -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Solid left styled</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Solid alerts with <code>left</code> aligned block and inline icons. Solid alerts can also display contextual icon: block icon gets a semi-transparent black background color to make it more prominent, inline icon inherits all styles from alert container. Solid alerts perfectly suit for different kinds of notifications. To use solid alerts, simply add <code>.bg-*</code> and <code>.text-*</code> colors to <code>.alert</code> container.</p>

            <p class="mb-3">Examples of solid alerts with <code>left</code> positioned icon. .</p>

            <div class="mb-3">
                <div class="fw-bold border-bottom pb-2 mb-3">Block icon</div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>Primary alert</p>
                        <div class="alert bg-primary text-white alert-icon-start alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-bell-ringing"></i>
                            </span>
                            <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Danger alert</p>
                        <div class="alert bg-danger text-white alert-icon-start alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-x-circle"></i>
                            </span>
                            <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link text-reset">try submitting again</a>.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Success alert</p>
                        <div class="alert bg-success text-white alert-icon-start alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-check-circle"></i>
                            </span>
                            <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link text-reset">this important</a> alert message.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p>Warning alert</p>
                        <div class="alert bg-warning text-white alert-icon-start alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-warning-circle"></i>
                            </span>
                            <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link text-reset">check yourself</a>, you're not looking too good.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Info alert</p>
                        <div class="alert bg-info text-white alert-icon-start alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-info"></i>
                            </span>
                            <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link text-reset">super important</a>.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Custom color</p>
                        <div class="alert bg-indigo text-white alert-icon-start alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-gear"></i>
                            </span>
                            <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link text-reset">alert</a> with custom color.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-bold border-bottom pb-2 mb-3">Inline icon</div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Primary alert</p>
                    <div class="alert bg-primary text-white alert-dismissible fade show">
                        <i class="ph-bell-ringing me-2"></i>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Danger alert</p>
                    <div class="alert bg-danger text-white alert-dismissible fade show">
                        <i class="ph-x-circle me-2"></i>
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link text-reset">try submitting again</a>.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Success alert</p>
                    <div class="alert bg-success text-white alert-dismissible fade show">
                        <i class="ph-check-circle me-2"></i>
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link text-reset">this important</a> alert message.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Warning alert</p>
                    <div class="alert bg-warning text-white alert-dismissible fade show">
                        <i class="ph-warning-circle me-2"></i>
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link text-reset">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Info alert</p>
                    <div class="alert bg-info text-white alert-dismissible fade show">
                        <i class="ph-info me-2"></i>
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link text-reset">super important</a>.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Custom color</p>
                    <div class="alert bg-indigo text-white alert-dismissible fade show">
                        <i class="ph-gear me-2"></i>
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link text-reset">alert</a> with custom color.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /solid left styled alerts -->


    <!-- Solid right styled alerts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Solid right styled</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Solid alerts with <code>right</code> aligned block and inline icons. Solid alerts can also display contextual icon: block icon gets a semi-transparent black background color to make it more prominent, inline icon inherits all styles from alert container. Solid alerts perfectly suit for different kinds of notifications. To use solid alerts, simply add <code>.bg-*</code> and <code>.text-*</code> colors to <code>.alert</code> container.</p>

            <div class="mb-3">
                <div class="fw-bold border-bottom pb-2 mb-3">Block icon</div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>Primary alert</p>
                        <div class="alert bg-primary text-white alert-icon-end alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-bell-ringing"></i>
                            </span>
                            <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Danger alert</p>
                        <div class="alert bg-danger text-white alert-icon-end alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-x-circle"></i>
                            </span>
                            <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link text-reset">try submitting again</a>.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Success alert</p>
                        <div class="alert bg-success text-white alert-icon-end alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-check-circle"></i>
                            </span>
                            <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link text-reset">this important</a> alert message.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p>Warning alert</p>
                        <div class="alert bg-warning text-white alert-icon-end alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-warning-circle"></i>
                            </span>
                            <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link text-reset">check yourself</a>, you're not looking too good.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Info alert</p>
                        <div class="alert bg-info text-white alert-icon-end alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-info"></i>
                            </span>
                            <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link text-reset">super important</a>.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>

                        <p>Custom color</p>
                        <div class="alert bg-indigo text-white alert-icon-end alert-dismissible fade show border-0">
                            <span class="alert-icon bg-black bg-opacity-20">
                                <i class="ph-gear"></i>
                            </span>
                            <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link text-reset">alert</a> with custom color.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-bold border-bottom pb-2 mb-3">Inline icon</div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Primary alert</p>
                    <div class="alert bg-primary text-white">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                        <i class="ph-bell-ringing float-end ms-2"></i>
                    </div>

                    <p>Danger alert</p>
                    <div class="alert bg-danger text-white">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link text-reset">try submitting again</a>.
                        <i class="ph-x-circle float-end ms-2"></i>
                    </div>

                    <p>Success alert</p>
                    <div class="alert bg-success text-white">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link text-reset">this important</a> alert message.
                        <i class="ph-check-circle float-end ms-2"></i>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Warning alert</p>
                    <div class="alert bg-warning text-white">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link text-reset">check yourself</a>, you're not looking too good.
                        <i class="ph-warning-circle float-end ms-2"></i>
                    </div>

                    <p>Info alert</p>
                    <div class="alert bg-info text-white">
                        <span class="fw-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link text-reset">super important</a>.
                        <i class="ph-info float-end ms-2"></i>
                    </div>

                    <p>Custom color</p>
                    <div class="alert bg-indigo text-white">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link text-reset">alert</a> with custom color.
                        <i class="ph-gear float-end ms-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /solid right styled alerts -->


    <!-- Rounded alerts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Rounded alerts</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Examples of rounded alerts. By default, all alerts have <code>4px</code> border radius. You can use our <code>.rounded-*</code> modifier classes to change the default look or override <code>--alert-border-radius</code> variable to apply your border radius to all alerts globally. It is recommended to add <code>.text-truncate</code> to alert container to make sure that alert message doesn't wrap and text is properly truncated.</p>


            <div class="row">
                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-3">Default alerts</div>

                    <p>Basic alert</p>
                    <div class="alert alert-primary alert-dismissible text-truncate rounded-pill fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Left block icon</p>
                    <div class="alert alert-primary alert-icon-start alert-dismissible text-truncate rounded-pill fade show">
                        <span class="alert-icon bg-primary text-white rounded-pill">
                            <i class="ph-bell-ringing"></i>
                        </span>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Left inline icon</p>
                    <div class="alert alert-primary alert-dismissible text-truncate rounded-pill fade show">
                        <i class="ph-bell-ringing me-2"></i>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Right block icon</p>
                    <div class="alert alert-primary alert-icon-end alert-dismissible text-truncate rounded-pill fade show">
                        <span class="alert-icon bg-primary text-white rounded-pill">
                            <i class="ph-bell-ringing"></i>
                        </span>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Right inline icon</p>
                    <div class="alert alert-primary alert-dismissible text-truncate rounded-pill fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <i class="ph-bell-ringing float-end ms-2"></i>
                        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fw-bold border-bottom pb-2 mb-3">Solid alerts</div>

                    <p>Basic alert</p>
                    <div class="alert bg-primary text-white alert-dismissible text-truncate rounded-pill fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Left block icon</p>
                    <div class="alert bg-primary text-white alert-icon-start alert-dismissible text-truncate rounded-pill fade show">
                        <span class="alert-icon bg-black bg-opacity-20 rounded-pill">
                            <i class="ph-bell-ringing"></i>
                        </span>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Left inline icon</p>
                    <div class="alert bg-primary text-white alert-dismissible text-truncate rounded-pill fade show">
                        <i class="ph-bell-ringing me-2"></i>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Right block icon</p>
                    <div class="alert bg-primary text-white alert-icon-end alert-dismissible text-truncate rounded-pill fade show">
                        <span class="alert-icon bg-black bg-opacity-20 rounded-pill">
                            <i class="ph-bell-ringing"></i>
                        </span>
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white rounded-pill" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Right inline icon</p>
                    <div class="alert bg-primary text-white alert-dismissible text-truncate rounded-pill fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <i class="ph-bell-ringing float-end ms-2"></i>
                        <button type="button" class="btn-close btn-close-white rounded-pill" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /rounded alerts -->


    <!-- Custom colors -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom colors</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Apart from contextual colors, color system also contains 7 additional colors that can be used in context or out of it. Available colors are: <code>dark</code>, <code>light</code>, <code>pink</code>, <code>purple</code>, <code>indigo</code>, <code>teal</code> and <code>yellow</code>. To use, just add <code>.alert-[color]</code> class to <code>.alert</code> container. Additionally use <code>.border-*</code> and <code>.text-*</code> to adjust border and text color in light and dark alerts.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

            <div class="row">
                <div class="col-lg-6">
                    <p>Dark alert</p>
                    <div class="alert alert-dark alert-dismissible fade show mb-2">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <div class="alert bg-dark text-white alert-dismissible fade show">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Pink color</p>
                    <div class="alert alert-pink alert-dismissible fade show mb-2">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <div class="alert bg-pink text-white alert-dismissible fade show">
                        <span class="fw-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link text-reset">alert</a> with custom color.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Purple alert</p>
                    <div class="alert alert-purple alert-dismissible fade show mb-2">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <div class="alert bg-purple text-white alert-dismissible fade show">
                        <span class="fw-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link text-reset">try submitting again</a>.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Light alert</p>
                    <div class="alert alert-light alert-dismissible fade show border mb-2">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <div class="alert bg-light alert-dismissible fade show border">
                        <span class="fw-semibold">Morning!</span> We're glad to <a href="#" class="alert-link text-reset">see you again</a> and wish you a nice day.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Indigo alert</p>
                    <div class="alert alert-indigo alert-dismissible fade show mb-2">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <div class="alert bg-indigo text-white alert-dismissible fade show">
                        <span class="fw-semibold">Well done!</span> You successfully read <a href="#" class="alert-link text-reset">this important</a> alert message.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>

                    <p>Teal alert</p>
                    <div class="alert alert-teal alert-dismissible fade show mb-2">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <div class="alert bg-teal text-white alert-dismissible fade show">
                        <span class="fw-semibold">Warning!</span> Better <a href="#" class="alert-link text-reset">check yourself</a>, you're not looking too good.
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /custom colors -->

</div>
<!-- /content area -->

@endsection
