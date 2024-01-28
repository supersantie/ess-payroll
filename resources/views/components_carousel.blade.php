@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Carousel @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Slides only -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Slides only</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators. The following exmaple demonstrates carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.w-100</code> on carousel images to prevent browser default image alignment. In browsers where the Page Visibility API is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.)</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('assets/images/demo/carousel/1.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/2.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/3.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/4.jpg')}}" class="d-block w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /slides only -->


    <!-- With controls -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">With controls</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Adding in the previous and next controls. We recommend using <code>&lt;button></code> elements, but you can also use <code>&lt;a></code> elements with <code>role="button"</code>. Be sure to set a unique id on the <code>.carousel</code> for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a <code>data-bs-target</code> attribute (or href for links) that matches the id of the <code>.carousel</code> element.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('assets/images/demo/carousel/2.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/3.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/4.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/1.jpg')}}" class="d-block w-100" alt="">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /with controls -->


    <!-- With indicators -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">With indicators</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can also add the indicators to the carousel, alongside the controls, too. Indicators are small rectangles displayed at the bottom of the carousel to visually indicate the number of slides in the carousel. Be sure to include carousel id in <code>data-bs-target</code> and link slides in <code>data-bs-slide-to</code> attributes. Indicators can also work without prev and next navigation buttons.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('assets/images/demo/carousel/3.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/4.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/1.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/2.jpg')}}" class="d-block w-100" alt="">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /with incidators -->


    <!-- With captions -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">With captions</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with <code>.d-md-block</code>.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('assets/images/demo/carousel/4.jpg')}}" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/1.jpg')}}" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/2.jpg')}}" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/3.jpg')}}" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fourth slide label</h5>
                            <p>Some representative placeholder content for the fourth slide.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /with captions -->


    <!-- With multiple items -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">With multiple items</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can have up to 12 items per slide with the help of our grid system. Carousel itself doesn't require any modifications, just use <code>.row</code> and <code>.col-*</code> containers inside each <code>.carousel-item</code> to show multiple images. You can also mix them and show different number of images per slide, but keep in mind that the height of carousel can jump.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleGrid" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleGrid" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleGrid" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleGrid" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner row">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/5.jpg')}}" class="d-block w-100" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/6.jpg')}}" class="d-block w-100" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/7.jpg')}}" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/8.jpg')}}" class="d-block w-100" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/7.jpg')}}" class="d-block w-100" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/6.jpg')}}" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/7.jpg')}}" class="d-block w-100" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/8.jpg')}}" class="d-block w-100" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{URL::asset('assets/images/demo/carousel/5.jpg')}}" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleGrid" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleGrid" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /with multiple items -->


    <!-- Dark variant -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dark variant</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker controls, indicators, and captions. Controls have been inverted from their default white fill with the <code>filter</code> CSS property. Captions and controls have additional Sass variables that customize the <code>color</code> and <code>background-color</code>.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#f5f5f5"></rect>
                            <text x="50%" y="50%" fill="#aaa" text-anchor="middle" font-size="3em" dy="-.5em">First slide</text>
                        </svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#f5f5f5"></rect>
                            <text x="50%" y="50%" fill="#aaa" text-anchor="middle" font-size="3em" dy="-.5em">Second slide</text>
                        </svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#f5f5f5"></rect>
                            <text x="50%" y="50%" fill="#aaa" text-anchor="middle" font-size="3em" dy="-.5em">Third slide</text>
                        </svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#f5f5f5"></rect>
                            <text x="50%" y="50%" fill="#aaa" text-anchor="middle" font-size="3em" dy="-.5em">Fourth slide</text>
                        </svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fourth slide label</h5>
                            <p>Some representative placeholder content for the fourth slide.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /dark variant -->


    <!-- Disable touch swiping -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Disable touch swiping</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Carousels support swiping left/right on touchscreen devices to move between slides. This can be disabled using the <code>data-bs-touch</code> attribute. The example below also does not include the <code>data-bs-ride</code> attribute and has <code>data-bs-interval="false"</code> so it doesn’t autoplay.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('assets/images/demo/carousel/1.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/2.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/3.jpg')}}" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('assets/images/demo/carousel/4.jpg')}}" class="d-block w-100" alt="">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /disable touch swiping -->

</div>
<!-- /content area -->

@endsection
