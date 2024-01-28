@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECommerce @endslot
@slot('subtitle') Product Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Grid -->
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/1.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/1.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body">Fathom Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Men's Accessories</a>
                    </div>

                    <h4 class="mb-0">$49.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">85 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/2.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/2.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Mystery Air Long Sleeve T Shirt</a>
                        </h6>

                        <a href="#" class="text-muted">Men's Fashion</a>
                    </div>

                    <h4 class="mb-0">$25.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">34 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/3.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/3.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Women’s Prospect Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Women's Accessories</a>
                    </div>

                    <h4 class="mb-0">$63.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">63 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/4.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/4.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Overlook Short Sleeve T Shirt</a>
                        </h6>

                        <a href="#" class="text-muted">Men's Fashion</a>
                    </div>

                    <h4 class="mb-0">$57.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">74 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/5.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/5.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Infinite Ride Liner</a>
                        </h6>

                        <a href="#" class="text-muted">Winter sports</a>
                    </div>

                    <h4 class="mb-0">$89.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">39 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/6.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/6.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Custom Snowboard</a>
                        </h6>

                        <a href="#" class="text-muted">Winter sports</a>
                    </div>

                    <h4 class="mb-0">$35.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">38 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/7.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/7.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Kids' Day Hiker 20L Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Men's accessories</a>
                    </div>

                    <h4 class="mb-0">$143.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">48 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/8.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/8.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Lunch Sack</a>
                        </h6>

                        <a href="#" class="text-muted">Accessories</a>
                    </div>

                    <h4 class="mb-0">$93.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">64 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/9.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/9.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Cambridge Jacket</a>
                        </h6>

                        <a href="#" class="text-muted">Winter jackets</a>
                    </div>

                    <h4 class="mb-0">$36.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">94 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/10.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/10.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Covert Jacket</a>
                        </h6>

                        <a href="#" class="text-muted">Winter jackets</a>
                    </div>

                    <h4 class="mb-0">$25.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">15 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/11.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/11.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Day Hiker Pinnacle 31L Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Men's accessories</a>
                    </div>

                    <h4 class="mb-0">$47.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">145 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/12.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/12.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Kids' Gromlet Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Men's accessories</a>
                    </div>

                    <h4 class="mb-0">$85.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">37 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/13.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/13.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Tinder Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Men's accessories</a>
                    </div>

                    <h4 class="mb-0">$47.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">64 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/14.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/14.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Almighty Snowboard Boot</a>
                        </h6>

                        <a href="#" class="text-muted">Winter sports</a>
                    </div>

                    <h4 class="mb-0">$76.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">2 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/1.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/1.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Fathom Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Men's Accessories</a>
                    </div>

                    <h4 class="mb-0">$59.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">32 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/2.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/2.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Mystery Air Long Sleeve T Shirt</a>
                        </h6>

                        <a href="#" class="text-muted">Men's Fashion</a>
                    </div>

                    <h4 class="mb-0">$25.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">34 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/3.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/3.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Women’s Prospect Backpack</a>
                        </h6>

                        <a href="#" class="text-muted">Women's Accessories</a>
                    </div>

                    <h4 class="mb-0">$63.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">63 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/4.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/4.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Overlook Short Sleeve T Shirt</a>
                        </h6>

                        <a href="#" class="text-muted">Men's Fashion</a>
                    </div>

                    <h4 class="mb-0">$57.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">74 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/5.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/5.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Infinite Ride Liner</a>
                        </h6>

                        <a href="#" class="text-muted">Winter sports</a>
                    </div>

                    <h4 class="mb-0">$89.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">39 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <a href="{{URL::asset('assets/images/demo/products/6.jpeg')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/products/6.jpeg')}}" class="card-img" width="90" alt="">
                            <span class="card-img-actions-overlay card-img">
                                <i class="ph-plus text-white ph-2x"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="mb-0">
                            <a href="#" class="text-body mb-0">Custom Snowboard</a>
                        </h6>

                        <a href="#" class="text-muted">Winter sports</a>
                    </div>

                    <h4 class="mb-0">$35.99</h4>

                    <div>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                        <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    </div>

                    <div class="text-muted mb-3">38 reviews</div>

                    <button type="button" class="btn btn-primary">
                        <i class="ph-shopping-cart me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /grid -->


    <!-- Pagination -->
    <div class="d-flex justify-content-center pt-1 mb-1">
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
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/ecommerce_product_list.js')}}"></script>
@endsection
