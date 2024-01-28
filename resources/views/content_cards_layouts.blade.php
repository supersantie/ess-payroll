@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Card Layouts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Cards in grid columns -->
    <div class="mb-3">
        <h6 class="mb-0">
            Card grid
        </h6>
        <span class="text-muted d-block">Render cards in grid columns</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/1.png')}}" alt="">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness.</p>
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
        </div>

        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/2.png')}}" alt="">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 12 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(24)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/3.png')}}" alt="">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Or kind rest bred with am shed then. In raptures building an bringing be. Elderly is detract tedious assured private so to visited. Do travelling companions contrasted.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 5 hours ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(63)</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- /cards in grid columns -->


    <!-- Card group -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Card group
        </h6>
        <span class="text-muted d-block">Single container with equal size columns</span>
    </div>

    <div class="card-group mb-sm-3">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/4.png')}}" alt="">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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

        <div class="card">
            <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/5.png')}}" alt="">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <span class="text-muted">Last updated 3 mins ago</span>
                <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <span class="text-muted ms-1">(24)</span>
                </span>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <span class="text-muted">Last updated 3 mins ago</span>
                <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star-half fs-base text-warning"></i>
                    <span class="text-muted ms-1">(63)</span>
                </span>
            </div>
        </div>
    </div>
    <!-- /card group -->


    <!-- Seamless card group -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Seamless card group
        </h6>
        <span class="text-muted d-block">Card group without vertical borders</span>
    </div>

    <div class="card-group mb-sm-3">
        <div class="card border-end-0 shadow-none">
            <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/7.png')}}" alt="">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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

        <div class="card border-end-0 shadow-none">
            <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <span class="text-muted">Last updated 3 mins ago</span>
                <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <span class="text-muted ms-1">(24)</span>
                </span>
            </div>
        </div>

        <div class="card shadow-none">
            <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/9.png')}}" alt="">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <span class="text-muted">Last updated 3 mins ago</span>
                <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star-half fs-base text-warning"></i>
                    <span class="text-muted ms-1">(63)</span>
                </span>
            </div>
        </div>
    </div>
    <!-- /seamless card group -->


    <!-- Card deck -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Card deck
        </h6>
        <span class="text-muted d-block">Cards with equal width and height</span>
    </div>

    <div class="row row-cols-sm-3 mb-sm-3">
        <div class="col-sm">
            <div class="card h-sm-100 mb-sm-0">
                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/10.png')}}" alt="">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        </div>

        <div class="col-sm">
            <div class="card h-sm-100 mb-sm-0">
                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/11.png')}}" alt="">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(24)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card h-sm-100 mb-sm-0">
                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/demo/flat/12.png')}}" alt="">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">Last updated 3 mins ago</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(63)</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- /card deck -->


    <!-- Card columns -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Card columns
        </h6>
        <span class="text-muted d-block">Cards in Masonry-like layout</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body bg-primary text-white text-center" style="background-image: url(assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div class="mb-3">
                    <h5 class="fw-semibold mb-0 mt-1">
                        Victoria Davidson
                    </h5>

                    <span class="d-block">Head of UX</span>
                </div>

                <a href="#" class="d-inline-block mb-3">
                    <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-pill" width="110" height="110" alt="">
                </a>

                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-phone"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-chats"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-envelope"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between mb-2">
                        <span class="fs-sm lh-sm text-uppercase text-muted fw-semibold">Nov 12, 11:25am</span>
                        <span class="fs-sm lh-sm text-uppercase text-success fw-semibold">Due in 12 days</span>
                    </div>

                    <h6 class="pt-1">
                        <a href="#">Ticket #462 - Application design and development</a>
                    </h6>

                    <p class="mb-3">Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy.</p>

                    <div class="d-flex flex-wrap align-items-center">
                        <a href="#" class="status-indicator-container me-1">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="34" height="34" class="rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>
                        <a href="#" class="status-indicator-container me-1">
                            <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" width="34" height="34" class="rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>
                        <a href="#" class="status-indicator-container me-1">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="34" height="34" class="rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </a>
                        <a href="#" class="btn btn-light btn-icon btn-sm rounded-pill">
                            <i class="ph-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <a href="#">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold text-body d-block">Themesbrand</a>
                            <span class="text-muted">Amsterdam, Netherlands</span>
                        </div>
                    </div>
                </div>

                <img src="{{URL::asset('assets/images/demo/blog/3.jpg')}}" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">Card title that wraps to a new line</h5>
                    <p class="card-text">By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan.</p>
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
        </div>

        <div class="col-lg-4">
            <div class="card">
                <img class="card-img" src="{{URL::asset('assets/images/demo/blog/2.jpg')}}" alt="Card image cap">
            </div>

            <div class="card bg-pink text-white text-center p-3" style="background-image: url(assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div>
                    <a href="#" class="btn btn-outline-white btn-lg btn-icon border-width-2 rounded-pill mb-3 mt-1">
                        <i class="ph-quotes"></i>
                    </a>
                </div>

                <figure class="mb-0">
                    <blockquote class="blockquote mb-0">
                        <p>"Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion"</p>
                        <figcaption class="blockquote-footer text-white text-opacity-75 mt-0">
                            <span>
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </span>
                        </figcaption>
                    </blockquote>
                </figure>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <div class="d-flex mb-3">
                    <div class="flex-fill">
                        <h6 class="mb-0">Server maintenance</h6>
                        <span class="text-muted">Until 1st of June</span>
                    </div>

                    <div class="ms-3 align-self-center">
                        <i class="ph-gear ph-lg text-success"></i>
                    </div>
                </div>

                <div class="progress mb-2" style="height: 0.125rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div>
                    <span class="float-end">67%</span>
                    Re-indexing
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="{{URL::asset('assets/images/demo/blog/12.jpg')}}" alt="Card image cap">

                <div class="card-header d-flex justify-content-between border-0 pb-0">
                    <ul class="list-inline mb-0 me-2">
                        <li class="list-inline-item">
                            <a href="#" class="text-pink"><i class="ph-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-body"><i class="ph-chats"></i></a>
                        </li>
                    </ul>

                    <span class="text-muted">2 hours ago</span>
                </div>

                <div class="card-body">
                    <p class="mb-3">Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use.</p>
                    <p class="mb-0">
                        <a href="#" class="me-1">#limitless</a>
                        <a href="#" class="me-1">#template</a>
                        <a href="#" class="me-1">#is</a>
                        <a href="#" class="me-1">#awesome</a>
                    </p>
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
        </div>
    </div>
    <!-- /card columns -->

</div>
<!-- /content area -->

@endsection
