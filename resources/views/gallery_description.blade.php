@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Gallery @endslot
@slot('subtitle') With Description @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Image grid -->
    <div class="mb-3">
        <h6 class="mb-0">Image grid</h6>
        <span class="text-muted">Image grid with 4 - 2 - 1 columns</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/1.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/1.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">For ostrich much</h6>
                            <span>Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/3.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/3.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">An so vulgar</h6>
                            <span>Delightful unreserved impossible few estimating men favourable see entreaties propriety</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/2.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/2.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Not rapturous</h6>
                            <span>He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/4.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/4.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">He it otherwise</h6>
                            <span>Chapter too parties its letters nor. Cheerful but whatever ladyship disposed judgment us</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/5.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/5.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Unfeeling agreeable</h6>
                            <span>Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/6.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/6.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">So come must</h6>
                            <span>Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/7.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/7.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Do on unpleasing</h6>
                            <span>Demesne far hearted suppose venture excited see had has. Dependent extremely delivered by</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/8.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/8.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Yet joy exquisite</h6>
                            <span>Bed one supposing breakfast day fulfilled off depending questions. Whatever boy exertion</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/9.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/9.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Behind lovers</h6>
                            <span>Building mr concerns servants in he outlived am breeding. He so lain good miss when sell</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/10.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/10.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Whole every miles</h6>
                            <span>How doubt yet again see son smart. While mirth large of on front. Ye he greater related yes</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/11.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/11.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Wished he entire</h6>
                            <span>Death weeks early had their and folly timed put. Hearted forbade on an village ye fifteen</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/12.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/12.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">He prevent request</h6>
                            <span>Instrument terminated of as astonished literature motionless admiration. The affection are</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/13.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/13.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Picture too and</h6>
                            <span>On merits on so valley indeed assure of. Has add particular boisterous uncommonly are match</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/14.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/14.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Ten difficult resembled</h6>
                            <span>Post no so what deal evil rent by real in. But her ready least set lived spite solid how men</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/15.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/15.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Same park bore</h6>
                            <span>She offices for highest and replied one venture pasture. Applauded no in newspaper allowance</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/16.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/16.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Warmth his law</h6>
                            <span>She offices for highest and replied venture pasture. Applauded discovery northward frequently</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /image grid -->


    <!-- Video grid -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Video grid</h6>
        <span class="text-muted">Video grid with 4 - 2 - 1 columns</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">For ostrich much</h6>
                            <span>Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile ones</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/89546048?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">An so vulgar</h6>
                            <span>On projection apartments unsatiable so if he entreaties appearance you wife how we lady half</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126580704?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Not rapturous</h6>
                            <span>Welcomed stronger if steepest ecstatic an suitable finished of one. Entered excited forming</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127790272?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">He it otherwise</h6>
                            <span>Chicken unknown besides attacks gay compact out you. Continuing no simplicity no favourable</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127628756?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Unfeeling agreeable</h6>
                            <span>Own hence views two ask right whole ten seems. What near kept met call old west announcing</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/164841921?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">So come must</h6>
                            <span>Preserved defective offending he daughters on. Rejoiced prospect yet material servants out</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/125791075?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Do on unpleasing</h6>
                            <span>Add stairs admire all answer the nearer length. Advantages prosperous remarkably inhabiting</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Yet joy exquisite</h6>
                            <span>Nor hence hoped her after other known defer his. For county now sister engage season better</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127051771?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Behind lovers</h6>
                            <span>Day either mrs talent pulled men rather regret admire but. Life ye sake it shed. Five lady he</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126833748?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Whole every miles</h6>
                            <span>Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise. My wishing</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127295085?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Wished he entire</h6>
                            <span>At place no walls hopes rooms fully. Roof hope shy tore leaf joy paid boy noisier out brought</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126177413?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">He prevent request</h6>
                            <span>New the her nor case that lady paid read. Invitation friendship travelling eat everything the</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127423845?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Picture too and</h6>
                            <span>Downs those still witty an balls so chief so. Moment an little remain no up lively way brought</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/124024544?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Ten difficult resembled</h6>
                            <span>Over fact all son tell this any his. No insisted confined of weddings to returned tour debating</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126897736?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Same park bore</h6>
                            <span>Table nay him jokes quick. In felicity up to graceful mistaken horrible consider abode never to</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="mx-1 mt-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="fw-semibold me-2">Warmth his law</h6>
                            <span>Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /video grid -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gallery.js')}}"></script>
@endsection
