@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Search @endslot
@slot('subtitle') Images @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Search field -->
    <div class="card">
        <form action="#" class="card-body d-sm-flex">
            <div class="form-control-feedback form-control-feedback-start flex-grow-1 mb-3 mb-sm-0">
                <input type="text" class="form-control" value="Limitless interface kit" placeholder="Search">
                <div class="form-control-feedback-icon">
                    <i class="ph-magnifying-glass"></i>
                </div>
            </div>

            <div class="ms-sm-3">
                <select class="form-select wmin-sm-200 mb-3 mb-sm-0">
                    <option value="1">Getting started</option>
                    <option value="2">Registration</option>
                    <option value="3">General info</option>
                    <option value="4">Your settings</option>
                    <option value="5">Copyrights</option>
                    <option value="6">Contacting sellers</option>
                </select>
            </div>

            <div class="ms-sm-3">
                <button type="submit" class="btn btn-primary w-100 w-sm-auto">Search</button>
            </div>
        </form>
    </div>
    <!-- /search field -->


    <!-- Tabs -->
    <div class="nav-tabs-responsive mb-3">
        <ul class="nav nav-tabs nav-tabs-underline">
            <li class="nav-item">
                <a href="search_basic" class="nav-link">
                    <i class="ph-monitor me-2"></i>
                    Website
                </a>
            </li>
            <li class="nav-item">
                <a href="search_users" class="nav-link">
                    <i class="ph-users-three me-2"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a href="search_images" class="nav-link active">
                    <i class="ph-image me-2"></i>
                    Images
                </a>
            </li>
            <li class="nav-item">
                <a href="search_videos" class="nav-link">
                    <i class="ph-monitor-play me-2"></i>
                    Videos
                </a>
            </li>
            <li class="nav-item ms-lg-auto">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-boundary="body">
                    <i class="ph-gear me-2"></i>
                    Options
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">One more line</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- /tabs -->


    <!-- Images grid -->
    <div class="text-muted font-size-sm mb-3">About 827,000 results (0.34 seconds)</div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/1.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">For ostrich much</h6>
                    Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/2.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">An so vulgar</h6>
                    Delightful unreserved impossible few estimating men favourable see entreaties propriety
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/3.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Not rapturous</h6>
                    He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/4.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">He it otherwise</h6>
                    Chapter too parties its letters nor. Cheerful but whatever ladyship disposed judgment us
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/5.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Unfeeling agreeable</h6>
                    Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">So come must</h6>
                    Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/7.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Do on unpleasing</h6>
                    Demesne far hearted suppose venture excited see had has. Dependent extremely delivered by
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Yet joy exquisite</h6>
                    Bed one supposing breakfast day fulfilled off depending questions. Whatever boy exertion
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/9.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Behind lovers</h6>
                    Building mr concerns servants in he outlived am breeding. He so lain good miss when sell
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/10.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Whole every miles</h6>
                    How doubt yet again see son smart. While mirth large of on front. Ye he greater related yes
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/11.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Wished he entire</h6>
                    Death weeks early had their and folly timed put. Hearted forbade on an village ye fifteen
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/12.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">He prevent request</h6>
                    Instrument terminated of as astonished literature motionless admiration. The affection are
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/13.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Picture too and</h6>
                    On merits on so valley indeed assure of. Has add particular boisterous uncommonly are match
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/14.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Ten difficult resembled</h6>
                    Post no so what deal evil rent by real in. But her ready least set lived spite solid how men
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/15.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Same park bore</h6>
                    She offices for highest and replied one venture pasture. Applauded no in newspaper allowance
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/16.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Warmth his law</h6>
                    She offices for highest and replied venture pasture. Applauded discovery northward frequently
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/17.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Unwilling sportsmen</h6>
                    Attention he extremity unwilling on otherwise. Conviction up partiality as delightful
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/18.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Attacks may set</h6>
                    Left did fond drew fat head poor. So if he into shot half many long. China fully
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/19.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Missed he engage</h6>
                    One the what walk then she. Demesne mention promise you justice arrived inquietude
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/20.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Still tried means</h6>
                    Outweigh it families distance wandered ye an. Mr unsatiable literature connection
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/21.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Up is opinion</h6>
                    Finished her are its honoured drawings nor. Pretty see mutual thrown all not
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/22.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Disposing commanded</h6>
                    Several any had enjoyed shewing studied two. Up intention remainder sportsmen
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/23.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Be an as cordially</h6>
                    Few again any alone style added abode ask. Nay projecting unpleasing boisterous
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/24.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-plus"></i>
                        </a>

                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="card-title">Northward affection</h6>
                    Own six moments produce elderly pasture far arrival. Hold our year they ten upon
                </div>
            </div>
        </div>
    </div>
    <!-- /images grid -->


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
