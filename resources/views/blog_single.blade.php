@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Home @endslot
@slot('subtitle') Dashboard @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="flex-1 order-2 order-lg-1">

            <!-- Post -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="mb-3 text-center">
                            <a href="#" class="d-inline-block">
                                <img src="{{URL::asset('assets/images/demo/cover3.jpg')}}" class="img-fluid rounded" alt="">
                            </a>
                        </div>

                        <h3 class="card-title pt-2 mb-1">
                            <a href="#" class="text-body">Although moreover mistaken kindness me feelings do be marianne</a>
                        </h3>

                        <ul class="list-inline list-inline-bullet text-muted mb-3">
                            <li class="list-inline-item">By <a href="#">Eugene</a></li>
                            <li class="list-inline-item">July 5th, 2016</li>
                            <li class="list-inline-item"><a href="#">12 comments</a></li>
                            <li class="list-inline-item"><a href="#"><i class="ph-heart text-pink me-1"></i> 281</a></li>
                        </ul>

                        <div class="mb-3">
                            <p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any.</p>

                            <p>Started his hearted any civilly. So me by marianne admitted speaking. Men bred fine call ask. Cease one miles truth day above seven. Suspicion sportsmen provision suffering mrs saw engrossed something. Snug soon he on plan in be dine some.</p>

                            <p>Death there mirth way the noisy merit. Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems.</p>
                        </div>

                        <div class="bg-light border-start border-start-width-3 border-start-primary rounded-end p-3">
                            <blockquote class="blockquote d-flex mb-0">
                                <div class="me-3">
                                    <img class="rounded-circle" src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="46" height="46" alt="">
                                </div>

                                <div>
                                    Dear far dove lynx inaudibly between after under after on some far warthog.
                                    <footer class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Insipidity the sufficient discretion</h5>

                        <p>Raising say express had chiefly detract demands she. Quiet led own cause three him. Front no party young abode state up. Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly. He improve started no we manners however effects. Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything. Up help home head spot an he room in.</p>

                        <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only. Music leave say doors him. Tore bred form if sigh case as do. Staying he no looking if do opinion. Sentiments way understood end partiality and his.</p>
                    </div>

                    <div>
                        <h5>Out believe has request not how comfort evident</h5>

                        <p class="mb-3">Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.</p>

                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list list-unstyled">
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Style never met and those among great
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        At no or september sportsmen
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Depending listening delivered
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Person plenty answer to exeter it
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list list-unstyled">
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Law use assistance especially resolution
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Way necessary had intention happiness
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Furniture furnished or on strangers
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        But why smiling man her imagine
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list list-unstyled">
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Chiefly can man her out believe
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Solicitude it introduced companions
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        My almost or horses period
                                    </li>
                                    <li>
                                        <i class="ph-check-circle text-success me-2"></i>
                                        Motionless are six terminated man
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /post -->


            <!-- About author -->
            <div class="card">
                <div class="card-header d-sm-flex border-bottom-0 pb-0">
                    <h5 class="mb-0">About the author</h5>

                    <div class="d-inline-flex align-items-center ms-sm-auto">
                        <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Google Drive"><i class="ph-google-logo"></i></a>
                        <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Twitter"><i class="ph-twitter-logo"></i></a>
                        <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Github"><i class="ph-github-logo"></i></a>
                        <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Linked In"><i class="ph-linkedin-logo"></i></a>
                    </div>
                </div>

                <div class="card-body d-flex flex-column flex-lg-row">
                    <div class="me-lg-3 mb-2 mb-lg-0">
                        <a href="#">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </a>
                    </div>

                    <div class="flex-fill">
                        <h6 class="mb-1">James Alexander</h6>
                        <p>So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily</p>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Author profile</a></li>
                            <li class="list-inline-item"><a href="#">All posts by James</a></li>
                            <li class="list-inline-item"><a href="#">https://website.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /about author -->


            <!-- Comments -->
            <div class="card">
                <div class="card-header d-sm-flex">
                    <h6 class="mb-0">Discussion</h6>
                    <ul class="list-inline text-muted mb-0 ms-sm-auto">
                        <li class="list-inline-item">42 comments</li>
                        <li class="list-inline-item">75 pending review</li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">William Jennings</a>
                            <span class="fs-sm text-muted ms-3">Just now</span>

                            <p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    114
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">Margo Baker</a>
                            <span class="fs-sm text-muted ms-3">5 minutes ago</span>

                            <p>Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    90
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">James Alexander</a>
                            <span class="fs-sm text-muted ms-3">7 minutes ago</span>

                            <p>Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    70
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>

                            <div class="d-flex flex-column flex-lg-row mt-3">
                                <div class="me-lg-3 mb-2 mb-lg-0">
                                    <a href="#"><img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                </div>

                                <div class="flex-fill">
                                    <a href="#" class="fw-semibold">Jack Cooper</a>
                                    <span class="fs-sm text-muted ms-3">10 minutes ago</span>

                                    <p>She education get middleton day agreement performed preserved unwilling. Do however as pleased offence outward beloved by present. By outward neither he so covered.</p>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item d-inline-flex align-items-center">
                                            <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                            67
                                        </li>
                                        <li class="list-inline-item ms-2">
                                            <a href="#">Reply</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">Edit</a>
                                        </li>
                                    </ul>

                                    <div class="d-flex flex-column flex-lg-row mt-3">
                                        <div class="me-lg-3 mb-2 mb-lg-0">
                                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Natalie Wallace</a>
                                            <span class="fs-sm text-muted ms-3">1 hour ago</span>

                                            <p>Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up.</p>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item d-inline-flex align-items-center">
                                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                                    54
                                                </li>
                                                <li class="list-inline-item ms-2">
                                                    <a href="#">Reply</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-lg-row mt-3">
                                        <div class="me-lg-3 mb-2 mb-lg-0">
                                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Nicolette Grey</a>
                                            <span class="fs-sm text-muted ms-3">2 hours ago</span>

                                            <p>Although moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself.</p>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item d-inline-flex align-items-center">
                                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                                    41
                                                </li>
                                                <li class="list-inline-item ms-2">
                                                    <a href="#">Reply</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">Victoria Johnson</a>
                            <span class="fs-sm text-muted ms-3">3 hours ago</span>

                            <p>Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    32
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-top border-bottom">
                    <div id="add-comment">Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she...</div>
                </div>

                <div class="card-body text-end">
                    <button type="button" class="btn btn-primary">
                        Submit
                        <i class="ph-paper-plane-tilt ms-2"></i>
                    </button>
                </div>
            </div>
            <!-- /comments -->

        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Search -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Search articles</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="form-control-feedback form-control-feedback-end">
                            <input type="search" class="form-control" placeholder="Search...">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /search -->


                <!-- Categories -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Categories</span>
                    </div>

                    <div class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-file-text me-2"></i>
                                Posts
                                <span class="text-muted fs-sm fw-normal ms-auto">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-file-video me-2"></i>
                                Video
                                <span class="text-muted fs-sm fw-normal ms-auto">26</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-file-image me-2"></i>
                                Images
                                <span class="text-muted fs-sm fw-normal ms-auto">83</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-files me-2"></i>
                                Articles
                                <span class="text-muted fs-sm fw-normal ms-auto">43</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-camera me-2"></i>
                                Photography
                                <span class="text-muted fs-sm fw-normal ms-auto">72</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-books me-2"></i>
                                Books
                                <span class="text-muted fs-sm fw-normal ms-auto">97</span>
                            </a>
                        </li>
                    </div>
                </div>
                <!-- /categories -->


                <!-- Share -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Share</span>
                    </div>

                    <div class="sidebar-section-body pb-0">
                        <ul class="list-inline text-center mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-primary btn-icon btn-lg rounded-pill mb-3">
                                    <i class="ph-facebook-logo"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-danger btn-icon btn-lg rounded-pill mb-3">
                                    <i class="ph-youtube-logo"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-info btn-icon btn-lg rounded-pill mb-3">
                                    <i class="ph-twitter-logo"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-warning btn-icon btn-lg rounded-pill mb-3">
                                    <i class="ph-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /share -->


                <!-- Recent comments -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Recent comments</span>
                    </div>

                    <div class="sidebar-section-body">
                        <li class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">James Alexander</a>
                                <div class="text-muted">Who knows, maybe that...</div>
                            </div>
                        </li>

                        <li class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Margo Baker</a>
                                <div class="text-muted">That was something he...</div>
                            </div>
                        </li>

                        <li class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                <div class="text-muted">But that would be...</div>
                            </div>
                        </li>

                        <li class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                <div class="text-muted">What a strenuous career...</div>
                            </div>
                        </li>

                        <li class="d-flex">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Richard Vango</a>
                                <div class="text-muted">Other travelling salesmen...</div>
                            </div>
                        </li>
                    </div>
                </div>
                <!-- /recent comments -->


                <!-- Photos from Flickr -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Photos from Flickr</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="row g-0">
                            <div class="col">
                                <div class="card-img-actions">
                                    <a href="{{URL::asset('assets/images/demo/flat/8.png')}}" class="text-white" data-bs-popup="lightbox">
                                        <img class="img-fluid rounded-top-start" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">
                                        <span class="card-img-actions-overlay rounded-top-start">
                                            <i class="ph-plus"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="card-img-actions">
                                    <a href="{{URL::asset('assets/images/demo/flat/4.png')}}" class="text-white" data-bs-popup="lightbox">
                                        <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/4.png')}}" alt="">
                                        <span class="card-img-actions-overlay">
                                            <i class="ph-plus"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="card-img-actions">
                                    <a href="{{URL::asset('assets/images/demo/flat/5.png')}}" class="text-white" data-bs-popup="lightbox">
                                        <img class="img-fluid rounded-bottom-start" src="{{URL::asset('assets/images/demo/flat/5.png')}}" alt="">
                                        <span class="card-img-actions-overlay rounded-bottom-start">
                                            <i class="ph-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card-img-actions">
                                    <a href="{{URL::asset('assets/images/demo/flat/6.png')}}" class="text-white" data-bs-popup="lightbox">
                                        <img class="img-fluid rounded-top-end" src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="">
                                        <span class="card-img-actions-overlay rounded-top-end">
                                            <i class="ph-plus"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="card-img-actions">
                                    <a href="{{URL::asset('assets/images/demo/flat/7.png')}}" class="text-white" data-bs-popup="lightbox">
                                        <img class="img-fluid" src="{{URL::asset('assets/images/demo/flat/7.png')}}" alt="">
                                        <span class="card-img-actions-overlay">
                                            <i class="ph-plus"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="card-img-actions">
                                    <a href="{{URL::asset('assets/images/demo/flat/8.png')}}" class="text-white" data-bs-popup="lightbox">
                                        <img class="img-fluid rounded-bottom-end" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">
                                        <span class="card-img-actions-overlay rounded-bottom-end">
                                            <i class="ph-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /photos from Flickr -->


                <!-- Online users -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Online users</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">James Alexander</a>
                                <div class="fs-sm text-muted">Santa Ana, CA.</div>
                            </div>

                            <div class="align-self-center">
                                <div class="bg-success border-success rounded-pill p-1"></div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                <div class="fs-sm text-muted">Dowagiac, MI.</div>
                            </div>

                            <div class="align-self-center">
                                <div class="bg-danger border-danger rounded-pill p-1"></div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Margo Baker</a>
                                <div class="fs-sm text-muted">Kasaan, AK.</div>
                            </div>

                            <div class="align-self-center">
                                <div class="bg-success border-success rounded-pill p-1"></div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                <div class="fs-sm text-muted">Neenah, WI.</div>
                            </div>

                            <div class="align-self-center">
                                <div class="bg-warning border-warning rounded-pill p-1"></div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Richard Vango</a>
                                <div class="fs-sm text-muted">Grapevine, TX.</div>
                            </div>

                            <div class="align-self-center">
                                <div class="bg-secondary border-secondary rounded-pill p-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /online users -->


                <!-- Tags -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Tags</span>
                    </div>

                    <div class="sidebar-section-body pb-2">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-primary rounded-start-0 mb-2">Audio</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-warning rounded-start-0 mb-2">Gallery</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-indigo rounded-start-0 mb-2">Image</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-teal rounded-start-0 mb-2">Music</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-pink rounded-start-0 mb-2">Blog</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-purple rounded-start-0 mb-2">Learn</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-primary rounded-start-0 mb-2">Youtube</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-secondary rounded-start-0 mb-2">Twitter</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-warning rounded-start-0 mb-2">Eugene</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="badge bg-light border-start border-width-3 text-body border-indigo rounded-start-0 mb-2">Limitless</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /tags -->


                <!-- Archive -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Archive</span>
                    </div>

                    <div class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">January 2018</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">December 2017</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">November 2017</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">October 2017</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">September 2017</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">August 2017</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">July 2017</a>
                        </li>
                    </div>
                </div>
                <!-- /archive -->

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
<script src="{{URL::asset('assets/js/vendor/editors/quill/quill.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/blog_single.js')}}"></script>
@endsection
