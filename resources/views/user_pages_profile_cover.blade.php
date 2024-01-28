@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') User Pages @endslot
@slot('subtitle') Profile Cover @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="tab-content flex-fill order-2 order-lg-1">
            <div class="tab-pane fade active show" id="activity">

                <!-- Sales stats -->
                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h5 class="mb-0">Weekly statistics</h5>
                        <div class="mt-2 mt-sm-0 ms-auto">
                            <span>
                                <i class="ph-clock-counter-clockwise me-1"></i>
                                Updated 2 hours ago
                            </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="tornado_negative_stack"></div>
                        </div>
                    </div>
                </div>
                <!-- /sales stats -->


                <!-- Blog posts -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-sm-flex">
                                <h6 class="mb-0">Himalayan sunset</h6>
                                <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                    <span class="text-muted">49 minutes ago</span>
                                    <div class="d-inline-flex ms-auto ms-sm-3">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-gear"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-lock-key me-2"></i>
                                                    Hide user posts
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-prohibit-inset me-2"></i>
                                                    Block user
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-user-circle-minus me-2"></i>
                                                    Unfollow user
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-brackets-curly me-2"></i>
                                                    Embed post
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Report this post
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="card-img-actions mb-3">
                                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/cover3.jpg')}}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="blog_single" class="btn btn-outline-white btn-icon rounded-pill">
                                            <i class="ph-link"></i>
                                        </a>
                                    </div>
                                </div>

                                <h6 class="mb-3">
                                    <i class="ph-chats me-2"></i>
                                    <a href="#">Jason Ansley</a> commented:
                                </h6>

                                <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                                    <p class="mb-2 fs-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                                    <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                                </blockquote>
                            </div>

                            <div class="card-body d-flex justify-content-between align-items-center pt-0">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-eye me-2"></i> 438</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-chats me-2"></i> 71</a></li>
                                </ul>

                                <a href="#" class="d-inline-block">Read post</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-sm-flex">
                                <h5 class="mb-0">Behind the word mountains</h5>
                                <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                    <span class="text-muted">2 hours ago</span>
                                    <div class="d-inline-flex ms-auto ms-sm-3">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-gear"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-lock-key me-2"></i>
                                                    Hide user posts
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-prohibit-inset me-2"></i>
                                                    Block user
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-user-circle-minus me-2"></i>
                                                    Unfollow user
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-brackets-curly me-2"></i>
                                                    Embed post
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Report this post
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="card-img-actions mb-3">
                                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/cover.jpg')}}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="blog_single" class="btn btn-outline-white btn-icon rounded-pill">
                                            <i class="ph-link"></i>
                                        </a>
                                    </div>
                                </div>

                                <h6 class="mb-3">
                                    <i class="ph-chats me-2"></i>
                                    <a href="#">Tim Smith</a> commented:
                                </h6>

                                <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                                    <p class="mb-2 fs-base">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                    <footer class="blockquote-footer">Mark, <cite title="Source Title">12:58 pm</cite></footer>
                                </blockquote>
                            </div>

                            <div class="card-body d-flex justify-content-between align-items-center pt-0">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-eye me-2"></i> 589</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-chats me-2"></i> 54</a></li>
                                </ul>

                                <a href="#" class="d-inline-block">Read post</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /blog posts -->


                <!-- Invoices -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                    <div>
                                        <h6>Leonardo Fellini</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Invoice #: <a href="#">0028</a></li>
                                            <li>Issued on: <span class="fw-semibold">2022/01/25</span></li>
                                        </ul>
                                    </div>

                                    <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                        <h6>$8,750</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status:
                                                <a href="#" class="link-danger fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Overdue</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item active">
                                                        <i class="ph-warning-circle me-2"></i>
                                                        Overdue
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-clock me-2"></i>
                                                        Pending
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-check-circle me-2"></i>
                                                        Paid
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-spinner-gap me-2"></i>
                                                        On hold
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-x me-2"></i>
                                                        Canceled
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <span>
                                    <i class="ph-bell-ringing me-1"></i>
                                    Due:
                                    <span class="fw-semibold">2022/02/25</span>
                                </span>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                        <i class="ph-arrow-square-out"></i>
                                    </a>
                                    <div class="d-inline-flex dropdown ms-3">
                                        <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-printer me-2"></i>
                                                Print invoice
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-arrow-down me-2"></i>
                                                Download invoice
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-plus me-2"></i>
                                                Edit invoice
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-x me-2"></i>
                                                Remove invoice
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                    <div>
                                        <h6>Rebecca Manes</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Invoice #: <a href="#">0027</a></li>
                                            <li>Issued on: <span class="fw-semibold">2022/02/24</span></li>
                                        </ul>
                                    </div>

                                    <div class="text-sm-end mb-0 mt-3 mt-sm-0 ms-auto">
                                        <h6>$5,100</h6>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Method: <span class="fw-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status:
                                                <a href="#" class="link-success fw-semibold d-inline-flex align-items-center dropdown-toggle ms-1" data-bs-toggle="dropdown">Paid</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-warning-circle me-2"></i>
                                                        Overdue
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-clock me-2"></i>
                                                        Pending
                                                    </a>
                                                    <a href="#" class="dropdown-item active">
                                                        <i class="ph-check-circle me-2"></i>
                                                        Paid
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-spinner-gap me-2"></i>
                                                        On hold
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-x me-2"></i>
                                                        Canceled
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <span>
                                    <i class="ph-bell-ringing me-1"></i>
                                    Due:
                                    <span class="fw-semibold">2022/03/24</span>
                                </span>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#invoice">
                                        <i class="ph-arrow-square-out"></i>
                                    </a>
                                    <div class="d-inline-flex dropdown ms-3">
                                        <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-printer me-2"></i>
                                                Print invoice
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-arrow-down me-2"></i>
                                                Download invoice
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-file-plus me-2"></i>
                                                Edit invoice
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-x me-2"></i>
                                                Remove invoice
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /invoices -->


                <!-- Video posts -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-sm-flex">
                                <h6 class="mb-0">Peru mountains</h6>
                                <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                    <span><i class="ph-check-circle text-success me-1"></i> Today, 8:39 am</span>
                                    <div class="d-inline-flex ms-auto ms-sm-3">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-gear"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-lock-key me-2"></i>
                                                    Hide user posts
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-prohibit-inset me-2"></i>
                                                    Block user
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-user-circle-minus me-2"></i>
                                                    Unfollow user
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-brackets-curly me-2"></i>
                                                    Embed post
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Report this post
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="mb-3">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

                                <div class="ratio ratio-16x9">
                                    <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-sm-flex">
                                <h6 class="mb-0">Woodturner master</h6>
                                <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                    <span><i class="ph-check-circle text-success me-1"></i> Yesterday, 7:52 am</span>
                                    <div class="d-inline-flex ms-auto ms-sm-3">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-gear"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-lock-key me-2"></i>
                                                    Hide user posts
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-prohibit-inset me-2"></i>
                                                    Block user
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-user-circle-minus me-2"></i>
                                                    Unfollow user
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-brackets-curly me-2"></i>
                                                    Embed post
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i class="ph-warning-circle me-2"></i>
                                                    Report this post
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="mb-3">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.</p>

                                <div class="ratio ratio-16x9">
                                    <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /video posts -->

            </div>

            <div class="tab-pane fade" id="schedule">

                <!-- Available hours -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Available hours</h5>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="available_hours"></div>
                        </div>
                    </div>
                </div>
                <!-- /available hours -->


                <!-- Schedule -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">My schedule</h5>
                    </div>

                    <div class="card-body">
                        <div class="my-schedule"></div>
                    </div>
                </div>
                <!-- /schedule -->

            </div>

            <div class="tab-pane fade" id="settings">

                <!-- Profile info -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Profile information</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" value="Victoria" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Full name</label>
                                        <input type="text" value="Smith" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address line 1</label>
                                        <input type="text" value="Ring street 12" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address line 2</label>
                                        <input type="text" value="building D, flat #67" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" value="Munich" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">State/Province</label>
                                        <input type="text" value="Bayern" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">ZIP code</label>
                                        <input type="text" value="1031" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" readonly="readonly" value="victoria@smith.com" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your country</label>
                                        <select class="form-select">
                                            <option value="germany" selected>Germany</option>
                                            <option value="france">France</option>
                                            <option value="spain">Spain</option>
                                            <option value="netherlands">Netherlands</option>
                                            <option value="other">...</option>
                                            <option value="uk">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone #</label>
                                        <input type="text" value="+99-99-9999-9999" class="form-control">
                                        <div class="form-text text-muted">+99-99-9999-9999</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Upload profile image</label>
                                        <input type="file" class="form-control">
                                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /profile info -->


                <!-- Account settings -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Account settings</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" value="Vicky" readonly class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Current password</label>
                                        <input type="password" value="password" readonly class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">New password</label>
                                        <input type="password" placeholder="Enter new password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Repeat password</label>
                                        <input type="password" placeholder="Repeat new password" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Profile visibility</label>

                                        <label class="form-check mb-2">
                                            <input type="radio" name="visibility" class="form-check-input" checked>
                                            <span class="form-check-label">Visible to everyone</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="radio" name="visibility" class="form-check-input">
                                            <span class="form-check-label">Visible to friends only</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="radio" name="visibility" class="form-check-input">
                                            <span class="form-check-label">Visible to my connections only</span>
                                        </label>

                                        <label class="form-check">
                                            <input type="radio" name="visibility" class="form-check-input">
                                            <span class="form-check-label">Visible to my colleagues only</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Notifications</label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked>
                                            <span class="form-check-label">Password expiration notification</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked>
                                            <span class="form-check-label">New message notification</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked>
                                            <span class="form-check-label">New task notification</span>
                                        </label>

                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label">New contact request notification</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /account settings -->

            </div>
        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Navigation -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Navigation</span>
                    </div>

                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-user me-2"></i>
                                My profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-coins me-2"></i>
                                Balance
                                <span class="text-muted fs-sm fw ms-auto">$1,430</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-share-network me-2"></i>
                                Connections
                                <span class="badge bg-danger rounded-pill ms-auto">29</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-users-three me-2"></i>
                                Friends
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-calendar me-2"></i>
                                Events
                                <span class="badge bg-teal rounded-pill ms-auto">48</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-gear me-2"></i>
                                Account settings
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /navigation -->


                <!-- Balance changes -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <div class="fw-semibold">Balance changes</div>
                        <span class="ms-auto">
                            <i class="ph-arrow-down text-danger"></i> <span class="fw-semibold">- 29.4%</span>
                        </span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="balance_statistics"></div>
                        </div>
                    </div>
                </div>
                <!-- /balance changes -->


                <!-- Latest connections -->
                <div class="card">
                    <div class="sidebar-section-header d-flex border-bottom">
                        <span class="fw-semibold">Latest connections</span>
                        <div class="ms-auto">
                            <span class="badge bg-success rounded-pill">+32</span>
                        </div>
                    </div>

                    <div class="list-group list-group-borderless py-2">
                        <div class="list-group-item text-muted">Office staff</div>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">James Alexander</div>
                                <span class="text-muted">UI/UX expert</span>
                            </div>

                            <div class="bg-success rounded-pill p-1"></div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">Jeremy Victorino</div>
                                <span class="text-muted">Senior designer</span>
                            </div>

                            <div class="bg-danger rounded-pill p-1"></div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">Jordana Mills</div>
                                <span class="text-muted">Sales consultant</span>
                            </div>

                            <div class="bg-secondary rounded-pill p-1"></div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">William Miles</div>
                                <span class="text-muted">SEO expert</span>
                            </div>

                            <div class="bg-success rounded-pill p-1"></div>
                        </a>

                        <div class="list-group-item text-muted">Partners</div>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">Margo Baker</div>
                                <span class="text-muted">Google</span>
                            </div>

                            <div class="bg-success rounded-pill p-1"></div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">Beatrix Diaz</div>
                                <span class="text-muted">Facebook</span>
                            </div>

                            <div class="bg-warning rounded-pill p-1"></div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="40" height="40" alt="">

                            <div class="flex-fill">
                                <div class="fw-semibold">Richard Vango</div>
                                <span class="text-muted">Microsoft</span>
                            </div>

                            <div class="bg-secondary rounded-pill p-1"></div>
                        </a>
                    </div>
                </div>
                <!-- /latest connections -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /right sidebar component -->

    </div>
    <!-- /inner container -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/user_pages_profile.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/tornado_negative_stack.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/profile/balance_stats.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/profile/available_hours.js')}}"></script>
@endsection
