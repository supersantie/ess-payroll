@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Card Content @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Card image placement -->
    <div class="mb-3">
        <h6 class="mb-0">Card image placement</h6>
        <span class="text-muted">Top, middle and bottom placements</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Top placement -->
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/4.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="{{URL::asset('assets/images/demo/flat/4.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Top placement</h5>
                    <p class="card-text">Default <code>top</code> placement - image always comes first in the card with text or other content below. Use <code>.card-img-top</code> image class to round top image corners.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(12)</span>
                    </span>
                </div>
            </div>
            <!-- /top placement -->


            <!-- Below card header -->
            <div class="card">
                <div class="card-header d-flex border-0">
                    <h6 class="mb-0">Below card header</h6>
                    <div class="ms-auto">
                        <span class="badge bg-danger">Paid</span>
                    </div>
                </div>

                <div class="card-img-actions">
                    <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/7.png')}}" alt="">
                    <div class="card-img-actions-overlay">
                        <a href="{{URL::asset('assets/images/demo/flat/7.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <p class="card-text">Example of the card image, placed right after card header and before card content body. Image requires <code>.img-fluid</code> class for proper sizing.</p>
                </div>

                <div class="card-footer">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Add comment...">
                        <button class="btn btn-primary" type="button">
                            <i class="ph-paper-plane-tilt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /below card header -->

        </div>

        <div class="col-lg-4">

            <!-- Middle placement -->
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Middle placement</h5>
                    <p class="card-text">Example of <code>middle</code> placement - image placed between card content containers (card header, card body and card footer). Image requires <code>.img-fluid</code> class for proper sizing.</p>
                </div>

                <div class="card-img-actions">
                    <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/5.png')}}" alt="">
                    <div class="card-img-actions-overlay">
                        <a href="{{URL::asset('assets/images/demo/flat/5.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="fw-semibold">Nov 12, 11:25 am</span>
                    <span class="text-success fw-semibold">Due in 12 days</span>
                </div>
            </div>
            <!-- /middle placement -->


            <!-- Multiple titles -->
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span><i class="ph-user-circle me-2"></i> <a href="#">Themesbrand</a></span>
                    <span class="text-muted">Added 2 hours ago</span>
                </div>

                <div class="card-img-actions">
                    <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">
                    <div class="card-img-actions-overlay">
                        <a href="{{URL::asset('assets/images/demo/flat/8.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="mb-3">Multiple titles</h6>
                    <p class="card-text">Another example of middle image placement - after header, before body that includes card title. Image also requires <code>.img-fluid</code> class.</p>
                </div>

                <div class="card-footer d-flex justify-content-between border-top-0 pt-0 pb-3">
                    <ul class="list-inline mb-0 me-2">
                        <li class="list-inline-item">
                            <a href="#" class="text-pink">
                                <i class="ph-heart"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-body">
                                <i class="ph-chat-text"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">Edit</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /multiple titles -->

        </div>

        <div class="col-lg-4">

            <!-- Bottom placement -->
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Bottom placement</h5>
                    <p class="card-text">Example of <code>bottom</code> placement - image always comes last in the card with text or other content above. Use <code>.card-img-bottom</code> image class to round bottom image corners.</p>
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="text-muted">Processing...</div>
                    <div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="card-img-actions">
                    <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="">
                    <div class="card-img-actions-overlay">
                        <a href="{{URL::asset('assets/images/demo/flat/6.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>
            </div>
            <!-- /bottom placement -->


            <!-- Multiple footers -->
            <div class="card">
                <div class="card-img-actions">
                    <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/9.png')}}" alt="">
                    <div class="card-img-actions-overlay">
                        <a href="{{URL::asset('assets/images/demo/flat/9.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>

                <div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pb-0">
                    <span class="text-muted">23 430 followers</span>

                    <ul class="list-inline list-inline-condensed mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="text-indigo">
                                <i class="ph-thumbs-up"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-danger">
                                <i class="ph-thumbs-down"></i>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3">
                            <a href="#" class="text-muted">
                                <i class="ph-flag"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <h6 class="mb-3">Multiple footers</h6>
                    <p class="card-text">In this example card image is on top, but content has multiple containers - use spacing utility classes to control vertical spacing of card content.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="#" class="text-body">
                        <i class="ph-chats me-1"></i>
                        Comment
                    </a>
                    <span class="text-muted">
                        <i class="ph-eye me-1"></i>
                        673
                    </span>
                </div>
            </div>
            <!-- /multiple footers -->

        </div>
    </div>
    <!-- /card image placement -->


    <!-- Card image overlays -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Card image overlays</h6>
        <span class="text-muted">Link, zoom and overlay with actions</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Linked image -->
            <div class="card">
                <a href="#">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/1.png')}}" alt="">
                </a>

                <div class="card-body">
                    <h5 class="card-title">Linked image</h5>
                    <p class="card-text">By default, cards are designed to showcase linked images with minimal required markup, including default class for rounded corners.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(43)</span>
                    </span>
                </div>
            </div>
            <!-- /linked image -->

        </div>

        <div class="col-lg-4">

            <!-- Zooming -->
            <div class="card">
                <div class="card-img-actions">
                    <a href="{{URL::asset('assets/images/demo/flat/2.png')}}" class="text-white" data-popup="lightbox">
                        <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/2.png')}}" alt="">
                        <span class="card-img-actions-overlay card-img-top">
                            <i class="ph-plus ph-2x"></i>
                        </span>
                    </a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Zooming</h5>
                    <p class="card-text">Extend card image with simple zoomable lightbox. The icon is inserted directly in HTML and can be easily changed.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 2 hours ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(86)</span>
                    </span>
                </div>
            </div>
            <!-- /zooming -->

        </div>

        <div class="col-lg-4">

            <!-- Overlay buttons -->
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/3.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="{{URL::asset('assets/images/demo/flat/3.png')}}" class="btn btn-outline-white border-width-2" data-popup="lightbox">
                            Preview
                        </a>
                        <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                            Details
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Overlay buttons</h5>
                    <p class="card-text">Add as many buttons or links as you want, all of them will be vertically and horizontally centered. Supports all available styles.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated yesterday</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(79)</span>
                    </span>
                </div>
            </div>
            <!-- /overlay buttons -->

        </div>
    </div>
    <!-- /card image overlays -->


    <!-- Card video placement -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Card video options</h6>
        <span class="text-muted">Video container placements</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Top placement -->
            <div class="card">
                <div class="ratio ratio-16x9">
                    <iframe src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" class="card-img-top" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Top placement</h5>
                    <p class="card-text">Default <code>top</code> placement - video always comes first in the card with text or other content below. Use <code>.card-img-top</code> helper class to round top video container corners.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(12)</span>
                    </span>
                </div>
            </div>
            <!-- /top placement -->

        </div>

        <div class="col-lg-4">

            <!-- Middle placement -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Middle placement</h5>
                    <p class="card-text">Example of <code>middle</code> placement - video placed between card content containers (header, body and footer). Middle option doesn't require any additional video container classes.</p>
                </div>

                <div class="ratio ratio-16x9">
                    <iframe src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                </div>

                <div class="card-footer d-flex justify-content-between border-0">
                    <span class="fw-semibold">Nov 12, 11:25 am</span>
                    <span class="text-success fw-semibold">Due in 12 days</span>
                </div>
            </div>
            <!-- /middle placement -->

        </div>

        <div class="col-lg-4">

            <!-- Bottom placement -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bottom placement</h5>
                    <p class="card-text">Example of <code>bottom</code> placement - video always comes last in the card with text or other content above. Use <code>.card-img-bottom</code> helper class to round bottom video container corners.</p>
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="d-inline-flex align-items-center text-muted">
                        <div class="spinner-border spinner-border-sm me-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        Uploading...
                    </div>

                    <div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="ratio ratio-16x9">
                    <iframe class="card-img-bottom" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                </div>
            </div>
            <!-- /bottom placement -->

        </div>
    </div>
    <!-- /card video placement -->


    <!-- Card text options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Card text options</h6>
        <span class="text-muted">Various text placement variations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Bordered header and footer -->
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="fw-semibold">Invoice <a href="#">#4323</a></span>
                    <span class="text-success fw-semibold">Due in 4 days</span>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Bordered header and footer</h6>
                    <p class="card-text">This example demonstrates how header and footer can handle multiple text containers. Both containers have transparent background color.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    Issued 23.12.2017

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Edit</a></li>
                        <li class="list-inline-item"><a href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <!-- /bordered header and footer -->


            <!-- Dark header, transparent footer -->
            <div class="card">
                <div class="card-header bg-dark text-white d-flex justify-content-between">
                    Nov 12, 11:25am
                    <span class="fw-semibold">Due in 12 days</span>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Dark header, transparent footer</h6>
                    <p class="card-text">You can easily mix header and footer styles on the fly just by adding utility classes to the footer and header containers.</p>
                </div>

                <div class="card-footer d-flex justify-content-between border-top-0 pt-0 pb-3">
                    <span class="text-muted">Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(12)</span>
                    </span>
                </div>
            </div>
            <!-- /dark header, transparent footer -->


            <!-- Transparent header, white footer -->
            <div class="card">
                <div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center border-bottom-0 pb-0">
                    <div>
                        <i class="ph-user-circle me-1"></i> Hi, <strong>Eugene</strong>
                    </div>
                    <div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Transparent header, white footer</h6>
                    <p class="card-text">This combination can be useful when your main content and actions need to be separated, but visually be a part of the card.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="What's new?">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-paper-plane-tilt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /transparent header, white footer -->

        </div>

        <div class="col-lg-4">

            <!-- Grey header and footer -->
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <span class="fw-semibold">Invoice <a href="#">#5490</a></span>
                    <span class="text-success fw-semibold">Due in 3 days</span>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Grey header and footer</h6>
                    <p class="card-text">In this example header and footer have light grey background color. Grey color is default for the footer, but header requires <code>.bg-light</code> class.</p>
                </div>

                <div class="card-footer bg-light d-flex justify-content-between">
                    Issued 26.12.2017

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Edit</a></li>
                        <li class="list-inline-item"><a href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <!-- /grey header and footer -->


            <!-- Transparent header, dark footer -->
            <div class="card">
                <div class="card-header d-flex justify-content-between border-bottom-0 pb-0">
                    <span class="text-muted">Dec 28, 03:49am</span>
                    <span class="text-danger fw-semibold">Overdue</span>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Transparent header, dark footer</h6>
                    <p class="card-text">This example demonstrates transparent card header and dark card footer. Card title is placed inside card body content.</p>
                </div>

                <div class="card-footer bg-dark text-white d-flex justify-content-between">
                    <span>Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="opacity-75 ms-1">(53)</span>
                    </span>
                </div>
            </div>
            <!-- /transparent header, dark footer -->


            <!-- Transparent header and footer -->
            <div class="card">
                <div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center border-bottom-0 pb-0">
                    <div>
                        <i class="ph-user-circle me-1"></i> Hi, <strong>Eugene</strong>
                    </div>
                    <div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Transparent header and footer</h6>
                    <p class="card-text">If you need to extend the card with 2 extra areas with context info without separation, this combination might be very useful.</p>
                </div>

                <div class="card-footer d-flex justify-content-between border-top-0 pt-0 pb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="What's new?">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-paper-plane-tilt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /transparent header and footer -->

        </div>

        <div class="col-lg-4">

            <!-- Custom header and footer colors -->
            <div class="card">
                <div class="card-header bg-dark text-white d-flex justify-content-between">
                    <span class="fw-semibold">Invoice <a href="#" class="text-white">#2490</a></span>
                    <span class="fw-semibold">Due in 2 days</span>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Custom header and footer color</h6>
                    <p class="card-text">You can easily mix footer and header colors - just add color helper class to both containers and optional <code>.text-white</code> class to links.</p>
                </div>

                <div class="card-footer bg-dark text-white d-flex justify-content-between">
                    <span class="opacity-75">Issued 26.12.2017</span>

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-white">Edit</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Delete</a></li>
                    </ul>
                </div>
            </div>
            <!-- /custom header and footer colors -->


            <!-- Custom border color -->
            <div class="card border-success">
                <div class="card-header bg-success bg-opacity-10 border-success d-flex justify-content-between">
                    <span class="fw-semibold">Jan 3, 02:50am</span>
                    <span class="text-success fw-semibold">Due in 5 days</span>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Custom border color</h6>
                    <p class="card-text">If you want to highlight cards or content areas, add color helper classes to the card and/or card footer and header.</p>
                </div>

                <div class="card-footer d-flex justify-content-between border-top-0 pt-0 pb-3">
                    <span class="text-muted">Uploaded 4 days ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(452)</span>
                    </span>
                </div>
            </div>
            <!-- /custom border class -->


            <!-- Grey header, transparent footer -->
            <div class="card">
                <div class="card-header bg-light d-sm-flex justify-content-sm-between align-items-sm-center">
                    <div>
                        <i class="ph-user-circle me-1"></i> Hi, <strong>Eugene</strong>
                    </div>
                    <div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Grey header, transparent footer</h6>
                    <p class="card-text">And this combination is a perfect solution for displaying header with alternate content that is not really important, but nice to have.</p>
                </div>

                <div class="card-footer d-flex justify-content-between border-top-0 pt-0 pb-3">
                    <div class="input-group">
                        <input type="text" class="form-control border-end-0" placeholder="What's new?">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-paper-plane-tilt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /grey header, transparent footer -->

        </div>
    </div>
    <!-- /card text options -->


    <!-- Card content alignment -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Card content alignment</h6>
        <span class="text-muted">Horizontal and vertical content alignment</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Left alignment -->
            <div class="card">
                <div class="card-body">
                    <i class="ph-check ph-2x text-success border border-width-3 border-success rounded-pill p-2 mb-3"></i>
                    <h5 class="card-title">Left alignment</h5>
                    <p class="mb-3">Left content alignment is the default option in left-to-right direction that doesn't require any extra utility classes.</p>

                    <a href="#" class="btn btn-success">Read more</a>
                </div>
            </div>
            <!-- /left alignment -->


            <!-- Top alignment -->
            <div class="card text-center" style="min-height: 350px;">
                <div class="card-body">
                    <i class="ph-check ph-2x text-success border border-width-3 border-success rounded-pill p-2 mb-3"></i>
                    <h5 class="card-title">Top alignment</h5>
                    <p class="mb-3">Top content alignment is also the default option in LTR layout. Other vertical alignment options require flex utility classes.</p>

                    <a href="#" class="btn btn-success">Read more</a>
                </div>
            </div>
            <!-- /top alignment -->

        </div>

        <div class="col-lg-4">

            <!-- Center alignment -->
            <div class="card text-center">
                <div class="card-body">
                    <i class="ph-x ph-2x text-danger border border-width-3 border-danger rounded-pill p-2 mb-3"></i>
                    <h5 class="card-title">Center alignment</h5>
                    <p class="mb-3">Use <code>.text-center</code> alignment utility class to center content horizontally. Responsive options are also available</p>

                    <a href="#" class="btn btn-danger">Read more</a>
                </div>
            </div>
            <!-- /center alignment -->


            <!-- Middle alignment -->
            <div class="card card-body justify-content-center text-center" style="min-height: 350px;">
                <div>
                    <i class="ph-x ph-2x text-danger border border-width-3 border-danger rounded-pill p-2 mb-3"></i>
                    <h5 class="card-title">Middle alignment</h5>
                    <p class="mb-3">Use <code>.justify-content-center</code> class to center content vertically. Add optional breakpoints to enable responsiveness</p>

                    <a href="#" class="btn btn-danger">Read more</a>
                </div>
            </div>
            <!-- /middle alignment -->

        </div>

        <div class="col-lg-4">

            <!-- Right alignment -->
            <div class="card text-end">
                <div class="card-body">
                    <i class="ph-lock-simple ph-2x text-primary border border-width-3 border-primary rounded-pill p-2 mb-3"></i>
                    <h5 class="card-title">Right alignment</h5>
                    <p class="mb-3">Use <code>.text-end</code> alignment utility class to center content horizontally. Add optional breakpoints to enable responsiveness</p>

                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <!-- /right alignment -->


            <!-- Bottom alignment -->
            <div class="card card-body justify-content-end text-center" style="min-height: 350px;">
                <div>
                    <i class="ph-lock-simple ph-2x text-primary border border-width-3 border-primary rounded-pill p-2 mb-3"></i>
                    <h5 class="card-title">Bottom alignment</h5>
                    <p class="mb-3">Use <code>.justify-content-end</code> class to stick content to the bottom. Add optional breakpoints to enable responsiveness</p>

                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <!-- /bottom alignment -->

        </div>
    </div>
    <!-- /card content alignment -->


    <!-- Card table options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Card table options</h6>
        <span class="text-muted">Various table placement options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Card body + table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Card body + table</h5>
                </div>

                <div class="card-body">
                    Simple example of the table that comes right after card body container (default placement). Doesn't require any additional classes since default table style doesn't include horizontal borders.
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Franklin</td>
                                <td>Morrison</td>
                                <td>@Frank</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="d-inline-flex">
                        <span class="me-2">Export to:</span>
                        <a href="#">
                            <i class="ph-file-doc"></i>
                        </a>
                        <a href="#" class="mx-2">
                            <i class="ph-file-pdf"></i>
                        </a>
                        <a href="#">
                            <i class="ph-file-xls"></i>
                        </a>
                    </div>

                    <div class="d-inline-flex mb-0 mt-1 mt-sm-0">
                        <a href="#">Download</a>
                        <a href="#" class="ms-2">Upload</a>
                    </div>
                </div>
            </div>
            <!-- /card body + table -->


            <!-- Table + card body -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Table + card body</h5>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Franklin</td>
                                <td>Morrison</td>
                                <td>@Frank</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-body border-top">
                    In this example card body container comes after table - by default all table cells have top border, in this specific case card body includes top border for better visual content separation.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start py-sm-2">
                    <div>3290 entries found</div>

                    <ul class="pagination pagination-linked justify-content-between mt-2 mt-sm-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link rounded">&larr; &nbsp; Older</a>
                        </li>
                        <li class="page-item ms-1">
                            <a href="#" class="page-link rounded">Newer &nbsp; &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /table + card body -->

        </div>

        <div class="col-lg-6">

            <!-- Combined table styles -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Combined table styles</h5>
                </div>

                <div class="card-body">
                    In this example table combines all default table styles: stripes, borders and row highlight. As always, all tables require base <code>.table</code> class for proper styling that matches Limitless theme.
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Franklin</td>
                                <td>Morrison</td>
                                <td>@Frank</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <div class="d-inline-flex">
                        <span class="me-2">Export to:</span>
                        <a href="#">
                            <i class="ph-file-doc"></i>
                        </a>
                        <a href="#" class="mx-2">
                            <i class="ph-file-pdf"></i>
                        </a>
                        <a href="#">
                            <i class="ph-file-xls"></i>
                        </a>
                    </div>

                    <div class="d-inline-flex mb-0 mt-1 mt-sm-0">
                        <a href="#">Download</a>
                        <a href="#" class="ms-2">Upload</a>
                    </div>
                </div>
            </div>
            <!-- /combined table styles -->


            <!-- Table at the bottom -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Table at the bottom</h5>
                </div>

                <div class="card-body">
                    This element's order can be handy if you need to show the table at the very bottom of the card, below all other content containers - header, body and footer. You can of course add other content below.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start py-sm-2">
                    <div>5332 entries found</div>

                    <ul class="pagination pagination-linked pagination-sm justify-content-between mt-2 mt-sm-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link rounded">&larr; &nbsp; Older</a>
                        </li>
                        <li class="page-item ms-1">
                            <a href="#" class="page-link rounded">Newer &nbsp; &rarr;</a>
                        </li>
                    </ul>
                </div>

                <div class="table-responsive border-top">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Franklin</td>
                                <td>Morrison</td>
                                <td>@Frank</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /table at the bottom -->

        </div>
    </div>
    <!-- /card table options -->


    <!-- Card navigation options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Card navigation options</h6>
        <span class="text-muted">Adapted navigation list for cards</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Text list group -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Text list group</h5>
                    <p class="card-text">Create lists of content in a card with a flush list group. Use <code>.list-group-flush</code> class to remove borders and rounded corners.</p>
                </div>

                <ul class="list-group list-group-flush border-top">
                    <li class="list-group-item d-flex">
                        Sheared coasted so concurrent
                        <span class="badge bg-dark ms-auto">New</span>
                    </li>
                    <li class="list-group-item d-flex">
                        Goodness instead gull vulture
                        <span class="badge bg-pink rounded-pill ms-auto">38</span>
                    </li>
                    <li class="list-group-item d-flex">
                        Devilish yellow unsafe jerkily
                        <span class="badge bg-indigo ms-auto">Fixed</span>
                    </li>
                    <li class="list-group-item d-flex">
                        Relentless ouch essentially
                        <span class="badge bg-success rounded-pill ms-auto">40</span>
                    </li>
                </ul>

                <div class="card-footer d-flex justify-content-between border-top">
                    <span class="text-muted">Updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(12)</span>
                    </span>
                </div>
            </div>
            <!-- /text list group -->

        </div>

        <div class="col-lg-4">

            <!-- Linked list group -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Linked list group</h5>
                    <p class="card-text">Actionable list group items with hover, disabled, and active states. Use flex utility classes if your list items contain badges, text etc.</p>
                </div>

                <ul class="list-group list-group-flush border-top">
                    <a href="#" class="list-group-item list-group-item-action d-flex">
                        <span class="fw-semibold">
                            <i class="ph-squares-four me-2"></i>
                            Basic components
                        </span>
                        <span class="badge bg-success ms-auto">New</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex active">
                        <span class="fw-semibold">
                            <i class="ph-puzzle-piece me-2"></i>
                            Data tables extensions
                        </span>
                        <span class="badge bg-indigo rounded-pill ms-auto">38</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex">
                        <span class="fw-semibold">
                            <i class="ph-circles-three me-2"></i>
                            Application pages
                        </span>
                        <span class="badge bg-pink ms-auto">Fixed</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex disabled">
                        <span class="fw-semibold">
                            <i class="ph-list me-2"></i>
                            Horizontal navigation
                        </span>
                        <span class="badge bg-dark rounded-pill ms-auto">40</span>
                    </a>
                </ul>

                <div class="card-footer d-flex justify-content-between border-top">
                    <span class="text-muted">Updated 2 hours ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(86)</span>
                    </span>
                </div>
            </div>
            <!-- /linked list group -->

        </div>

        <div class="col-lg-4">

            <!-- Multi column -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Multi column</h5>
                    <p class="card-text">Simple example of list nav with multiple columns. Use a set of responsive flex and spacing utility classes for proper positioning and spacing.</p>
                </div>

                <ul class="list-group list-group-flush border-top">
                    <li class="list-group-item d-flex">
                        <span class="fw-semibold">Full name:</span>
                        <div class="ms-auto">Victoria Anna Davidson</div>
                    </li>
                    <li class="list-group-item d-flex">
                        <span class="fw-semibold">Phone number:</span>
                        <div class="ms-auto">+31 641 266545</div>
                    </li>
                    <li class="list-group-item d-flex">
                        <span class="fw-semibold">Corporate email:</span>
                        <div class="ms-auto"><a href="#">corporate@domain.com</a></div>
                    </li>
                    <li class="list-group-item d-flex">
                        <span class="fw-semibold">Personal email:</span>
                        <div class="ms-auto"><a href="#">personal@domain.com</a></div>
                    </li>
                </ul>

                <div class="card-footer d-flex justify-content-between border-top">
                    <span class="text-muted">Updated yesterday</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(79)</span>
                    </span>
                </div>
            </div>
            <!-- /multi column -->

        </div>
    </div>
    <!-- /card navigation options -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/content_cards_content.js')}}"></script>
@endsection
