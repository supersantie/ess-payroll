@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Blog @endslot
@slot('subtitle') Horizontal Layout @endslot
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
            <div class="card blog-horizontal">
                <div class="card-header border-bottom-0 pb-0">
                    <h5 class="my-1">
                        <a href="#" class="text-body">Blog layout #1 with image</a>
                    </h5>
                </div>

                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog1.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                    The bedding was hardly able to cover it and seemed ready to slide off any moment. The bedding was hardly able to cover it and seemed ready to slide off any moment <a href="#">[...]</a>
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
            <div class="card blog-horizontal">
                <div class="card-header border-bottom-0 pb-0">
                    <h5 class="my-1">
                        <a href="#" class="text-body">Blog layout #1 with video</a>
                    </h5>
                </div>

                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <div class="ratio ratio-16x9">
                            <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/164841921?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" class="rounded"></iframe>
                        </div>
                    </div>

                    <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>

                    Gregor then turned to look out the window. Drops of rain could be heard hitting the pane. "How about if I sleep a little bit longer and forget all this nonsense" <a href="#">[...]</a>
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
            <div class="card blog-horizontal">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog2.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="mt-1 mb-3">
                        <a href="#" class="text-body">Blog layout #2 with image</a>
                    </h5>

                    <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed.</p>
                    One morning, when Gregor Samsa woke from troubled dreams, he found himself <a href="#">[...]</a>
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
            <div class="card blog-horizontal">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" class="rounded"></iframe>
                        </div>
                    </div>

                    <h5 class="mt-1 mb-3">
                        <a href="#" class="text-body">Blog layout #2 with video</a>
                    </h5>

                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted.</p>

                    Gregor then turned to look out the window at the dull weather <a href="#">[...]</a>
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
        <span class="text-muted">Layout without buttons</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Blog layout #3 with image -->
            <div class="card blog-horizontal">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog3.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="my-1">
                            <a href="#" class="text-body">Blog layout #3 with image</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-heart text-pink me-1"></i>
                                    281
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite.</p>

                    One morning, when Gregor Samsa woke from troubled dreams, he found himself <a href="#">[...]</a>
                </div>
            </div>
            <!-- /blog layout #3 with image -->

        </div>

        <div class="col-lg-6">

            <!-- Blog layout #3 with video -->
            <div class="card blog-horizontal">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <div class="ratio ratio-16x9">
                            <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/175738725?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" class="rounded"></iframe>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="my-1">
                            <a href="#" class="text-body">Blog layout #3 with video</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-heart text-pink me-1"></i>
                                    281
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>

                    Gregor then turned to look out the window at the dull weather. "How about if I sleep <a href="#">[...]</a>
                </div>
            </div>
            <!-- /blog layout #3 with video -->
        </div>
    </div>
    <!-- /layout 3 -->


    <!-- Media sizes -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Media sizes</h6>
        <span class="text-muted">4 different media sizes</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Mini size -->
            <div class="card blog-horizontal blog-horizontal-xs">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog4.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="my-1">
                            <a href="#" class="text-body">Blog with mini media</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-heart text-pink me-1"></i>
                                    281
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. The bedding was hardly able to cover it.</p>
                    His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked <a href="#">[...]</a>
                </div>
            </div>
            <!-- /mini size -->

        </div>

        <div class="col-lg-6">

            <!-- Small size -->
            <div class="card blog-horizontal blog-horizontal-sm">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog5.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="my-1">
                            <a href="#" class="text-body">Blog with small media</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-heart text-pink me-1"></i>
                                    281
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness.</p>
                    Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane <a href="#">[...]</a>
                </div>
            </div>
            <!-- /small size -->

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Default size -->
            <div class="card blog-horizontal">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog2.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="my-1">
                            <a href="#" class="text-body">Blog with default media</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-heart text-pink me-1"></i>
                                    281
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed.</p>
                    The bedding was hardly able to cover it and seemed ready to slide off any moment. The bedding was hardly able to cover it and seemed ready to slide off <a href="#">[...]</a>
                </div>
            </div>
            <!-- /default size -->

        </div>

        <div class="col-lg-6">

            <!-- Large size -->
            <div class="card blog-horizontal blog-horizontal-lg">
                <div class="card-body">
                    <div class="card-img-actions me-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/images/blog3.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="my-1">
                            <a href="#" class="text-body">Blog with large media</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ph-heart text-pink me-1"></i>
                                    281
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
                    His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked out the window at the dull weather <a href="#">[...]</a>
                </div>
            </div>
            <!-- /large size -->

        </div>
    </div>
    <!-- /media sizes -->


    <!-- No media -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Basic layouts</h6>
        <span class="text-muted">Layouts without media</span>
    </div>

    <div class="row">
        <div class="col-sm-6">

            <!-- Clean blog layout #1 -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <a href="#" class="text-body">Blog post #1 title</a>
                    </h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                    <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                        <p class="fs-base mb-2">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
                        <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                    </blockquote>
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
            <!-- /clean blog layout #1 -->

        </div>

        <div class="col-sm-6">

            <!-- Clean blog layout #3 -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <a href="#" class="text-body">Blog post #3 title</a>
                    </h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                    <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                        <p class="fs-base mb-2">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
                        <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                    </blockquote>
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
            <!-- /clean blog layout #3 -->

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">

            <!-- Clean blog layout #2 -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="mb-1">
                            <a href="#" class="text-body">Blog post #2 title</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet mb-3">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item"><a href="#">12 comments</a></li>
                            <li class="list-inline-item"><a href="#"><i class="ph-heart text-pink me-2"></i> 281</a></li>
                        </ul>
                    </div>

                    <p class="mb-3">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                    <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                        <p class="mb-2 fs-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
                        <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                    </blockquote>
                </div>

                <div class="card-body d-sm-flex justify-content-sm-between align-items-sm-center pt-0">
                    <ul class="list-inline mb-3 mb-sm-0">
                        <li class="list-inline-item me-1"><a href="#"><span class="badge bg-primary bg-opacity-10 text-primary">Text</span></a></li>
                        <li class="list-inline-item me-1"><a href="#"><span class="badge bg-primary bg-opacity-10 text-primary">Blog</span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="badge bg-primary bg-opacity-10 text-primary">Post</span></a></li>
                    </ul>

                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <!-- /clean blog layout #2 -->

        </div>

        <div class="col-sm-6">

            <!-- Clean blog layout #2 -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="mb-1">
                            <a href="#" class="text-body">Blog post #4 title</a>
                        </h5>

                        <ul class="list-inline list-inline-bullet mb-3">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2022</li>
                            <li class="list-inline-item"><a href="#">12 comments</a></li>
                            <li class="list-inline-item"><a href="#"><i class="ph-heart text-pink me-2"></i> 281</a></li>
                        </ul>
                    </div>

                    <p class="mb-3">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                    <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                        <p class="mb-2 fs-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
                        <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                    </blockquote>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center py-2">
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                        <span class="ms-2">Themesbrand</span>
                    </a>

                    <a href="#" class="btn btn-link">Full article</a>
                </div>
            </div>
            <!-- /clean blog layout #2 -->

        </div>
    </div>
    <!-- /no media -->


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
