@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Blog @endslot
@slot('subtitle') Right Sidebar @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="flex-1 order-2 order-lg-1">

            <!-- Post grid -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/1.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Domestic confined any but son</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 20th, 2022</li>
                            </ul>

                            How proceed offered her offence shy forming. Returned peculiar pleasant but appetite differed she. Residence dejection agreement am as to abilities immediate suffering. Ye am depending propriety sweetness distrusts belonging collected. Smiling mention he
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 29</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/2.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Wisdom new and valley answer</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 19th, 2022</li>
                            </ul>

                            Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 64</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/3.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Announcing of invitation principles</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 18th, 2022</li>
                            </ul>

                            Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 49</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/4.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Increasing travelling own</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 17th, 2022</li>
                            </ul>

                            Supplied directly pleasant we ignorant ecstatic of jointure so if. These spoke house of we. Ask put yet excuse person see change. Do inhabiting no stimulated unpleasing of admiration he. Enquire explain another he in brandon enjoyed be service. Given mrs she first china.
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 391</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/5.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">May musical arrival beloved</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 16th, 2022</li>
                            </ul>

                            Shyness mention married son she his started now. Rose if as past near were. To graceful he elegance oh moderate attended entrance pleasure. Vulgar saw fat sudden edward way played either. Thoughts smallest at or peculiar relation breeding produced an. At depart spirit
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 36</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/6.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Be mother itself vanity</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 15th, 2022</li>
                            </ul>

                            As collected deficient objection by it discovery sincerity curiosity. Quiet decay who round three world whole has mrs man. Built the china there tried jokes which gay why. Assure in adieus wicket it is. But spoke round point and one joy. Offending her moonlight men
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 41</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/7.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Often of it tears whole</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 14th, 2022</li>
                            </ul>

                            Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 63</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/8.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Hence hopes noisy</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 13th, 2022</li>
                            </ul>

                            Considered an invitation do introduced sufficient understood instrument it. Of decisively friendship in as collecting at. No affixed be husband ye females brother garrets proceed. Least child who seven happy yet balls young. Discovery sweetness principle discourse
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 8</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/9.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Me or produce besides</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 12th, 2022</li>
                            </ul>

                            Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 82</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/10.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Offended ten old consider</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 11th, 2022</li>
                            </ul>

                            Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting boisterous insensible
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 21</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/11.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">Its had resolving otherwise</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 10th, 2022</li>
                            </ul>

                            Afford relied warmth out sir hearts sister use garden. Men day warmth formed admire former simple. Humanity declared vicinity continue supplied no an. He hastened am no property exercise of. Dissimilar comparison no terminated devonshire no literature on
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 49</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions mb-3">
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/12.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h5 class="card-title pt-1 mb-1">
                                <a href="#" class="text-body">He moonlight difficult</a>
                            </h5>

                            <ul class="list-inline list-inline-bullet text-muted mb-3">
                                <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                <li class="list-inline-item">July 9th, 2022</li>
                            </ul>

                            Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to. Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor
                        </div>

                        <div class="card-footer d-flex">
                            <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 93</a>
                            <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /post grid -->


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
