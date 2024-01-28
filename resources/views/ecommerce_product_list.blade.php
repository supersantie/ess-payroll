@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') ECommerce @endslot
@slot('subtitle') Product List @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- List -->
    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/1.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/1.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Fathom Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Aloha</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$49.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">85 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/2.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/2.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Mystery Air Long Sleeve T Shirt</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Long sleeve shirts</a></li>
                </ul>

                <p class="mb-3">Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect. Am cottage calling my is mistake cousins talking up. Interested especially do impression he unpleasant excellence...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Burton</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$25.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">34 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/3.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/3.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Women’s Prospect Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">Or kind rest bred with am shed then. In raptures building an bringing be. Elderly is detract tedious assured private so to visited. Do travelling companions contrasted it. Mistress strongly remember up to. Ham him compass you proceed calling detract. Better of always...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">DC Shoes</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$63.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="icon-star-empty3 font-size-base text-warning"></i>
                </div>

                <div class="text-muted">63 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/4.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/4.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Overlook Short Sleeve T Shirt</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">T-Shirts</a></li>
                </ul>

                <p class="mb-3">Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Aped</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$57.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">74 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/5.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/5.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Infinite Ride Liner</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Winter sports</a></li>
                </ul>

                <p class="mb-3">He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Giro</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$89.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">39 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/6.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/6.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Custom Snowboard</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Winter sports</a></li>
                </ul>

                <p class="mb-3">Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use too many good. She compliment unaffected expression favourable any unknown...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Head</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$35.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="icon-star-empty3 font-size-base text-warning"></i>
                    <i class="icon-star-empty3 font-size-base text-warning"></i>
                </div>

                <div class="text-muted">38 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/7.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/7.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Kids' Day Hiker 20L Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous incommode favourite...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Hurley</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$143.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">48 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/8.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/8.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Lunch Sack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">Extremely depending he gentleman improving intention rapturous as. Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Kinetic</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$93.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">64 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/9.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/9.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Cambridge Jacket</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Winter jackets</a></li>
                </ul>

                <p class="mb-3">End friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain ten promise. No finished my an likewise cheerful packages we. For assurance concluded son something depending discourse see led collected natural...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Miller</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$36.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="icon-star-empty3 font-size-base text-warning"></i>
                </div>

                <div class="text-muted">94 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/10.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/10.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Covert Jacket</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Winter jackets</a></li>
                </ul>

                <p class="mb-3">Whole wound wrote at whose to style in. Figure ye innate former do so we. Shutters but sir yourself provided you required his. So neither related he am do believe. Nothing but you hundred had use regular. Fat sportsmen arranging preferred can. Busy paid like...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Picture</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$25.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">15 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/11.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/11.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Day Hiker Pinnacle 31L Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Pieps</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$47.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">145 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/12.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/12.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Kids' Gromlet Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Rope</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$85.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">37 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/13.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/13.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Tinder Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Reef</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$47.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="icon-star-empty3 font-size-base text-warning"></i>
                </div>

                <div class="text-muted">64 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/14.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/14.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Almighty Snowboard Boot</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Sport accessories</a></li>
                </ul>

                <p class="mb-3">Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Roxy</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$76.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="icon-star-empty3 font-size-base text-warning"></i>
                </div>

                <div class="text-muted">2 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-sm-flex align-items-lg-start text-center text-lg-start">
            <div class="me-lg-3 mb-3 mb-lg-0">
                <a href="{{URL::asset('assets/images/demo/products/1.jpeg')}}" data-bs-popup="lightbox">
                    <img src="{{URL::asset('assets/images/demo/products/1.jpeg')}}" width="100" alt="">
                </a>
            </div>

            <div class="flex-fill">
                <h6 class="mb-1">
                    <a href="#">Fathom Backpack</a>
                </h6>

                <ul class="list-inline list-inline-bullet mb-3 mb-lg-2">
                    <li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
                </ul>

                <p class="mb-3">By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable...</p>

                <ul class="list-inline list-inline-bullet mb-0">
                    <li class="list-inline-item">All items from <a href="#">Stance</a></li>
                    <li class="list-inline-item">Add to <a href="#">wishlist</a></li>
                </ul>
            </div>

            <div class="flex-shrink-0 text-center mt-3 mt-lg-0 ms-lg-3">
                <h5 class="mb-0">$59.99</h5>

                <div class="my-1">
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star fs-base lh-base align-top text-warning"></i>
                    <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                </div>

                <div class="text-muted">32 reviews</div>

                <button type="button" class="btn btn-primary mt-3">
                    <i class="ph-shopping-cart me-2"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>
    <!-- /list -->


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
