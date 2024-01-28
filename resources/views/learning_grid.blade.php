@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Learning @endslot
@slot('subtitle') Grid Layout @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Vertical cards -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/1.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">38:46</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Data Governance</a>
                            <span class="text-success ms-auto">$49.99</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Themesbrand</a></li>
                            <li class="list-inline-item">Nov 1st, 2016</li>
                        </ul>
                    </div>

                    <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite.</p>

                    One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 382</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 60 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(49)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/2.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">24:40</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Java language</a>
                            <span class="text-success ms-auto">$54.90</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Malcolm Davis</a></li>
                            <li class="list-inline-item">Oct 25th, 2016</li>
                        </ul>
                    </div>

                    <p>"How about if I sleep a little bit longer and forget all this nonsense", he thought, but that was something.</p>

                    However hard he threw himself onto his right, he always rolled back to where he was. He must <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 544</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 90 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(53)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/3.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">1:10:50</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Python language</a>
                            <span class="text-success ms-auto">$99.90</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Mark Staters</a></li>
                            <li class="list-inline-item">Oct 26th, 2016</li>
                        </ul>
                    </div>

                    <p>Anyone or become friendly with them. It can all go to Hell!" He felt a slight itch up on his belly.</p>

                    Headboard so that he could lift his head better; found where the itch was, and saw that it <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 64</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 60 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(654)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/4.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">50:45</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">LESS language</a>
                            <span class="text-danger ms-auto">Free</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">James Alexander</a></li>
                            <li class="list-inline-item"> Nov 3rd, 2016</li>
                        </ul>
                    </div>

                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>

                    I am alone, and feel the charm of existence in this spot, which was created for the bliss <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 272</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 15 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(12)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/5.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">09:58</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Data Management</a>
                            <span class="text-success ms-auto">$79.99</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Jeremy Victorino</a></li>
                            <li class="list-inline-item">Nov 4th, 2016</li>
                        </ul>
                    </div>

                    <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was.</p>

                    When, while the lovely valley teems with vapour around me, and the meridian sun strikes upper <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 34</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 80 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(8)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/6.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">35:10</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Web Development</a>
                            <span class="text-success ms-auto">$39.99</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Margo Baker</a></li>
                            <li class="list-inline-item">Nov 5th, 2016</li>
                        </ul>
                    </div>

                    <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth.</p>

                    Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 84</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 60 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(36)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/7.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">52:15</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">SASS language</a>
                            <span class="text-success ms-auto">$44.90</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Monica Smith</a></li>
                            <li class="list-inline-item">Nov 6th, 2016</li>
                        </ul>
                    </div>

                    <p>Who formed us in his own image, and the breath of that universal love which bears and sustains us.</p>

                    When darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 183</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 30 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(96)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/8.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">30:12</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Office Management</a>
                            <span class="text-danger ms-auto">Free</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Bastian Miller</a></li>
                            <li class="list-inline-item">Nov 7th, 2016</li>
                        </ul>
                    </div>

                    <p>Oh, would I could describe these conceptions, could impress upon paper all that is living so full and.</p>

                    Oh my friend -- but it is too much for my strength -- I sink under the weight of the splendour <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 93</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 40 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(57)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/9.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">44:20</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">PHP language</a>
                            <span class="text-danger ms-auto">Free</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Jordana Mills</a></li>
                            <li class="list-inline-item">Nov 8th, 2016</li>
                        </ul>
                    </div>

                    <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was.</p>

                    When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 301</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 20 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(19)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/10.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">05:20</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Software testing</a>
                            <span class="text-danger ms-auto">Free</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Buzz Brenson</a></li>
                            <li class="list-inline-item">Nov 9th, 2016</li>
                        </ul>
                    </div>

                    <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs thin.</p>

                    "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 48</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 90 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(4)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/11.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">09:54</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Server management</a>
                            <span class="text-success ms-auto">$84.90</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Zachary Willson</a></li>
                            <li class="list-inline-item">Nov 10th, 2016</li>
                        </ul>
                    </div>

                    <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman.</p>

                    And above it there hung a picture that he had recently cut out of an illustrated magazine and <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 43</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 100 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(64)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/12.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">48:40</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Database management</a>
                            <span class="text-success ms-auto">$112.50</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">William Miles</a></li>
                            <li class="list-inline-item">Nov 11th, 2016</li>
                        </ul>
                    </div>

                    <p>However hard he threw himself onto his right, he always rolled back to where he was fully right.</p>

                    Travelling day in and day out. Doing business like this takes much more effort than doing <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 293</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 120 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(86)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/13.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">12:58</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Graphic design</a>
                            <span class="text-success ms-auto">$76.00</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Freddy Walden</a></li>
                            <li class="list-inline-item">Nov 12th, 2016</li>
                        </ul>
                    </div>

                    <p>Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting.</p>

                    "How about if I sleep a little bit longer and forget all this nonsense", he thought, but that <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 419</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 160 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(38)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/14.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">26:35</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">User experience</a>
                            <span class="text-danger ms-auto">Free</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Dori Laperriere</a></li>
                            <li class="list-inline-item">Nov 13th, 2016</li>
                        </ul>
                    </div>

                    <p>He felt a slight itch up on his belly; pushed himself slowly up on his back towards the headboard.</p>

                    So that he could lift his head better; found where the itch was, and saw that it was covered <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 190</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 200 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(193)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/15.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">08:56</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Human relationships</a>
                            <span class="text-danger ms-auto">Free</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Vanessa Aurelius</a></li>
                            <li class="list-inline-item">Nov 14th, 2016</li>
                        </ul>
                    </div>

                    <p>Which he didn't know what to make of; and when he tried to feel the place with one of his legs he drew.</p>

                    It quickly back because as soon as he touched it he was overcome by a cold shudder. He slid <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 205</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 80 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(128)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/16.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">25:50</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Leadership</a>
                            <span class="text-success ms-auto">$55.00</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Nathan Jacobson</a></li>
                            <li class="list-inline-item">Nov 15, 2016</li>
                        </ul>
                    </div>

                    <p>"Getting up early all the time", he thought, "it makes you very stupid. You've got to get enough sleep.</p>

                    For instance, whenever I go back to the guest house during the morning to copy out the contract <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 82</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 90 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(27)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/17.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">47:17</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Business development</a>
                            <span class="text-success ms-auto">$95.90</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Barbara Walden</a></li>
                            <li class="list-inline-item">Nov 16th, 2016</li>
                        </ul>
                    </div>

                    <p>But who knows, maybe that would be the best thing for me. If I didn't have my parents to think about.</p>

                    I'd have gone up to the boss and told him just what I think, tell him everything I would let <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 67</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 80 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(59)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                        <img src="{{URL::asset('assets/images/demo/flat/18.png')}}" class="img-fluid card-img" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">22:14</span>
                    </a>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="d-flex flex-nowrap my-1">
                            <a href="#" class="me-2">Business operations</a>
                            <span class="text-success ms-auto">$89.90</span>
                        </h6>

                        <ul class="list-inline list-inline-bullet text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-body">Craig Johnson</a></li>
                            <li class="list-inline-item">Nov 17th, 2016</li>
                        </ul>
                    </div>

                    <p>And it's a funny sort of business to be sitting up there at your desk, talking down at your subordinates.</p>

                    Well, there's still some hope; once I've got the money together to pay off my parents' debt <a href="#">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="ph-users me-1"></i> 42</li>
                        <li class="list-inline-item"><i class="ph-clock me-1"></i> 90 hours</li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <span class="text-muted ms-1">(432)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /vertical cards -->


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