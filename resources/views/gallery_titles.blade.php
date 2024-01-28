@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Gallery @endslot
@slot('subtitle') With Title @endslot
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
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/1.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/1.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">For ostrich much</div>
                            <span class="fs-sm text-muted">Size: 432kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/3.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/3.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">An so vulgar</div>
                            <span class="fs-sm text-muted">Size: 543kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/2.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/2.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Not rapturous</div>
                            <span class="fs-sm text-muted">Size: 219kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/4.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/4.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">He it otherwise</div>
                            <span class="fs-sm text-muted">Size: 329kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/5.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/5.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Unfeeling agreeable</div>
                            <span class="fs-sm text-muted">Size: 329kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/6.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">So come must</div>
                            <span class="fs-sm text-muted">Size: 329kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/7.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/7.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Do on unpleasing</div>
                            <span class="fs-sm text-muted">Size: 938kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/8.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Yet joy exquisite</div>
                            <span class="fs-sm text-muted">Size: 493kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/9.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/9.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Behind lovers</div>
                            <span class="fs-sm text-muted">Size: 378kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/10.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/10.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Whole every miles</div>
                            <span class="fs-sm text-muted">Size: 983kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/11.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/11.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Wished he entire</div>
                            <span class="fs-sm text-muted">Size: 763kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/12.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/12.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">He prevent request</div>
                            <span class="fs-sm text-muted">Size: 348kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/13.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/13.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Picture too and</div>
                            <span class="fs-sm text-muted">Size: 328kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/14.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/14.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Ten difficult resembled</div>
                            <span class="fs-sm text-muted">Size: 473kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/15.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/15.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Same park bore</div>
                            <span class="fs-sm text-muted">Size: 573kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/16.png')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="{{URL::asset('assets/images/demo/flat/16.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
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
                            <div class="fw-semibold me-2">Warmth his law</div>
                            <span class="fs-sm text-muted">Size: 893kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">For ostrich much</div>
                            <span class="fs-sm text-muted">Size: 432kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">An so vulgar</div>
                            <span class="fs-sm text-muted">Size: 543kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Not rapturous</div>
                            <span class="fs-sm text-muted">Size: 219kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">He it otherwise</div>
                            <span class="fs-sm text-muted">Size: 329kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Unfeeling agreeable</div>
                            <span class="fs-sm text-muted">Size: 329kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">So come must</div>
                            <span class="fs-sm text-muted">Size: 329kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Do on unpleasing</div>
                            <span class="fs-sm text-muted">Size: 938kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Yet joy exquisite</div>
                            <span class="fs-sm text-muted">Size: 493kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Behind lovers</div>
                            <span class="fs-sm text-muted">Size: 378kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Whole every miles</div>
                            <span class="fs-sm text-muted">Size: 983kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Wished he entire</div>
                            <span class="fs-sm text-muted">Size: 763kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">He prevent request</div>
                            <span class="fs-sm text-muted">Size: 348kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Picture too and</div>
                            <span class="fs-sm text-muted">Size: 328kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Ten difficult resembled</div>
                            <span class="fs-sm text-muted">Size: 473kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Same park bore</div>
                            <span class="fs-sm text-muted">Size: 573kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
                            <div class="fw-semibold me-2">Warmth his law</div>
                            <span class="fs-sm text-muted">Size: 893kb</span>
                        </div>

                        <div class="d-inline-flex ms-auto">
                            <a href="#" class="text-body"><i class="ph-download-simple"></i></a>
                            <a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
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
