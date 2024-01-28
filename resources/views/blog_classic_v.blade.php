@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Blog @endslot
@slot('subtitle') Vertical Layout @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Layout 1 -->
    <div class="mb-3">
        <h6 class="mb-0">Layout #1</h6>
        <span class="text-muted">Card with transparent footer</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Blog layout #1 with image -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><a href="#" class="text-body">Blog post layout #1 with image</a></h5>
                </div>

                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="../../../assets/images/demo/images/blog1.jpg" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline list-inline-bullet text-muted mb-3 mb-sm-0">
                        <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item"><a href="#" class="text-body">12 comments</a></li>
                    </ul>

                    <a href="#" class="d-inline-flex align-items-center text-body">
                        <i class="ph-heart text-pink me-2"></i>
                        281
                    </a>
                </div>
            </div>
            <!-- /blog layout #1 with image -->

        </div>

        <div class="col-lg-6">

            <!-- Blog layout #1 with video -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><a href="#" class="text-body">Blog post layout #1 with video</a></h5>
                </div>

                <div class="card-body">
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/164841921?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>

                    Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline list-inline-bullet text-muted mb-3 mb-sm-0">
                        <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item"><a href="#" class="text-body">12 comments</a></li>
                    </ul>

                    <a href="#" class="d-inline-flex align-items-center text-body">
                        <i class="ph-heart text-pink me-2"></i>
                        281
                    </a>
                </div>
            </div>
            <!-- /blog layout #1 with video -->

        </div>
    </div>
    <!-- /layout 1 -->


    <!-- Layout 2 -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Layout #2</h6>
        <span class="text-muted">Card with default footer</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Blog layout #2 with image -->
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="../../../assets/images/demo/images/blog2.jpg" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title py-1 mb-3">
                        <a href="#" class="text-body">Blog post layout #2 with image</a>
                    </h5>

                    When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline list-inline-bullet text-muted mb-3 mb-sm-0">
                        <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item"><a href="#" class="text-body">12 comments</a></li>
                    </ul>

                    <a href="#" class="d-inline-flex align-items-center text-body">
                        <i class="ph-heart text-pink me-2"></i>
                        281
                    </a>
                </div>
            </div>
            <!-- /blog layout #2 with image -->

        </div>

        <div class="col-lg-6">

            <!-- Blog layout #2 with video -->
            <div class="card">
                <div class="card-body">
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>

                    <h5 class="card-title py-1 mb-3">
                        <a href="#" class="text-body">Blog post layout #2 with video</a>
                    </h5>

                    Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline list-inline-bullet text-muted mb-3 mb-sm-0">
                        <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item"><a href="#" class="text-body">12 comments</a></li>
                    </ul>

                    <a href="#" class="d-inline-flex align-items-center text-body">
                        <i class="ph-heart text-pink me-2"></i>
                        281
                    </a>
                </div>
            </div>
            <!-- /blog layout #2 with video -->

        </div>
    </div>
    <!-- /layout 2 -->


    <!-- Layout 3 -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Layout #3</h6>
        <span class="text-muted">Layout with labeled tags</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Blog layout #3 with image -->
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="../../../assets/images/demo/images/blog3.jpg" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Blog post layout #3 with image</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="ph-heart text-pink me-1"></i>
                                281
                            </a>
                        </li>
                    </ul>

                    When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline mb-3 mb-sm-0">
                        <li class="list-inline-item me-1"><a href="#"><span class="badge bg-teal bg-opacity-10 text-teal">Image</span></a></li>
                        <li class="list-inline-item me-1"><a href="#"><span class="badge bg-teal bg-opacity-10 text-teal">Blog</span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="badge bg-teal bg-opacity-10 text-teal">Post</span></a></li>
                    </ul>

                    <a href="#" class="btn btn-teal">Read more</a>
                </div>
            </div>
            <!-- /blog layout #3 with image -->

        </div>

        <div class="col-lg-6">

            <!-- Blog layout #3 with video -->
            <div class="card">
                <div class="card-body">
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/175738725?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Blog post layout #3 with video</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="ph-heart text-pink me-1"></i>
                                281
                            </a>
                        </li>
                    </ul>

                    Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline mb-3 mb-sm-0">
                        <li class="list-inline-item me-1"><a href="#"><span class="badge bg-teal bg-opacity-10 text-teal">Video</span></a></li>
                        <li class="list-inline-item me-1"><a href="#"><span class="badge bg-teal bg-opacity-10 text-teal">Blog</span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="badge bg-teal bg-opacity-10 text-teal">Post</span></a></li>
                    </ul>

                    <a href="#" class="btn btn-teal">Read more</a>
                </div>
            </div>
            <!-- /blog layout #3 with video -->

        </div>
    </div>
    <!-- /layout 3 -->


    <!-- Layout 4 -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Layout #4</h6>
        <span class="text-muted">Display details as icons</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Blog layout #4 with image -->
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="../../../assets/images/demo/images/blog4.jpg" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Blog post layout #4 with image</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item">
                            <a href="#" class="text-body">image</a>,
                            <a href="#" class="text-body">blog</a>,
                            <a href="#" class="text-body">post</a>
                        </li>
                    </ul>

                    When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline mb-3 mb-sm-0">
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center text-body">
                                <i class="ph-chat me-2"></i>
                                12
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center text-body">
                                <i class="ph-twitter-logo text-info me-2"></i>
                                1,489
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center text-body">
                                <i class="ph-heart text-pink me-2"></i>
                                281
                            </a>
                        </li>
                    </ul>

                    <a href="#">Full article</a>
                </div>
            </div>
            <!-- /blog layout #4 with image -->

        </div>

        <div class="col-lg-6">

            <!-- Blog layout #4 with video -->
            <div class="card">
                <div class="card-body">
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173652088?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>

                    <h5 class="card-title mb-1">
                        <a href="#" class="text-body">Blog post layout #4 with video</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                        <li class="list-inline-item">July 5th, 2022</li>
                        <li class="list-inline-item">
                            <a href="#" class="text-body">image</a>,
                            <a href="#" class="text-body">blog</a>,
                            <a href="#" class="text-body">post</a>
                        </li>
                    </ul>

                    Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline mb-3 mb-sm-0">
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center text-body">
                                <i class="ph-chat me-2"></i>
                                12
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center text-body">
                                <i class="ph-twitter-logo text-info me-2"></i>
                                1,489
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center text-body">
                                <i class="ph-heart text-pink me-2"></i>
                                281
                            </a>
                        </li>
                    </ul>

                    <a href="#">Full article</a>
                </div>
            </div>
            <!-- /blog layout #4 with video -->

        </div>
    </div>
    <!-- /layout 4 -->


    <!-- Layout 5 -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Layout #5</h6>
        <span class="text-muted">Centered blog post</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Blog layout #5 with image -->
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="../../../assets/images/demo/images/blog5.jpg" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="blog_single" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="card-title pt-1 mb-1">
                            <a href="#" class="text-body">Blog post layout #5 with image</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-3">
                            <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#" class="text-body">image</a>,
                                <a href="#" class="text-body">blog</a>,
                                <a href="#" class="text-body">post</a>
                            </li>
                        </ul>

                        <p class="mb-3">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>

                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <!-- /blog layout #5 with image -->

        </div>

        <div class="col-lg-6">

            <!-- Blog layout #5 with video -->
            <div class="card">
                <div class="card-body">
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/256987201?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>

                    <div class="text-center">
                        <h5 class="card-title pt-1 mb-1">
                            <a href="#" class="text-body">Blog post layout #5 with video</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-3">
                            <li class="list-inline-item">By <a href="#" class="text-body">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#" class="text-body">image</a>,
                                <a href="#" class="text-body">blog</a>,
                                <a href="#" class="text-body">post</a>
                            </li>
                        </ul>

                        <p class="mb-3">Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.</p>

                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <!-- /blog layout #5 with video -->

        </div>
    </div>
    <!-- /layout 5 -->


    <!-- Pagination -->
    <div class="d-flex justify-content-center pt-3 mb-3">
        <ul class="pagination pagination-flat">
            <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link rounded-pill">1</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">2</a></li>
            <li class="page-item align-self-center"><span class="mx-2">...</span></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">58</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">59</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-right"></i></a></li>
        </ul>
    </div>
    <!-- /pagination -->

</div>
<!-- /content area -->

@endsection