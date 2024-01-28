@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Gallery @endslot
@slot('subtitle') Media Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Image grid -->
    <div class="mb-3">
        <h6 class="mb-0">Image grid</h6>
        <span class="text-muted">Image grid with 4 - 2 - 1 columns</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/17.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/17.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/18.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/18.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/19.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/19.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions m-1">
                    <img class="card-img img-fluid" src="../../../assets/images/demo/flat/20.png" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="../../../assets/images/demo/flat/20.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                            <i class="ph-plus"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                            <i class="ph-link"></i>
                        </a>
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
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/89546048?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126580704?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127790272?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127628756?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/164841921?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/125791075?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127051771?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126833748?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127295085?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126177413?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127423845?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/124024544?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126897736?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126726032?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126783354?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/175738725?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="m-1">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126060304?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
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
