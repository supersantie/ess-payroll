@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Search @endslot
@slot('subtitle') Basic @endslot
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
                <a href="search_basic" class="nav-link active">
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
                <a href="search_images" class="nav-link">
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


    <!-- Search results -->
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card card-body">
                <span class="text-muted">About 827,000 results (0.34 seconds)</span>

                <hr>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#"><strong>Limitless</strong> - Responsive Web Application Kit by Themesbrand</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://interface.club</a></li>
                        <li class="list-inline-item">
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <span class="ms-1">5 stars</span>
                        </li>
                        <li class="list-inline-item">12,489 votes</li>
                    </ul>

                    It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical...

                    <div class="border-bottom pt-3 px-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <h6 class="mb-1"><a href="#">Form components</a></h6>
                                    Ask eat questions abilities described elsewhere assurance...
                                </div>

                                <div class="mb-3">
                                    <h6 class="mb-1"><a href="#">UI components</a></h6>
                                    Appetite in unlocked advanced breeding position concerns as...
                                </div>

                                <div class="mb-3">
                                    <h6 class="mb-1"><a href="#">Layout options</a></h6>
                                    Cheerful get shutters yet for repeated screened. An no am...
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <h6 class="mb-1"><a href="#">Extensions</a></h6>
                                    Received overcame oh sensible so at formed do change merely...
                                </div>

                                <div class="mb-3">
                                    <h6 class="mb-1"><a href="#">Visualization</a></h6>
                                    On relation my so addition branched. Put hearing cottage...
                                </div>

                                <div class="mb-3">
                                    <h6 class="mb-1"><a href="#">Page kits</a></h6>
                                    Replied exposed savings he no viewing as up. Soon body him...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Conveying or northward <strong>offending</strong> admitting perfectly my fat smiling</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://kopyov.com</a></li>
                        <li class="list-inline-item">
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                            <span class="ms-1">4.5 stars</span>
                        </li>
                        <li class="list-inline-item">590 votes</li>
                    </ul>

                    Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect. Am cottage calling my is mistake cousins talking up. Interested especially do impression he unpleasant excellence...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Replied exposed <strong>savings he</strong> no viewing as up. Soon body add him hill</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Or kind rest bred with am shed then. In raptures building an bringing be. Elderly is detract tedious assured private so to visited. Do travelling companions contrasted it. Mistress strongly remember up to. Ham him compass you proceed calling detract. Better of always...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Behind sooner <strong>dining so window</strong> excuse he summer Breakfast met certainty</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given. Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration its ...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Society excited by <strong>cottage</strong> private an it esteems</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                        <li class="list-inline-item">
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                            <span class="ms-1">3 stars</span>
                        </li>
                        <li class="list-inline-item">389 votes</li>
                    </ul>

                    By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Yet remarkably <strong>appearance</strong> get him his projection. Diverted endeavor bed</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Are sentiments apartments <strong>decisively</strong> the especially alteration</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design...

                    <div class="pt-3 px-xl-3 border-bottom">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card border shadow-none">
                                    <div class="ratio ratio-16x9">
                                        <iframe class="rounded-top" src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                    </div>

                                    <div class="card-body">
                                        <h6 class="card-title">Up unpacked friendly</h6>
                                        <p class="card-text">Four need spot ye said we find mile. Are commanded him convinced dashwoods did estimable...</p>
                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        <span class="fw-semibold">$390.00</span>
                                        <span>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card border shadow-none">
                                    <div class="ratio ratio-16x9">
                                        <iframe class="rounded-top" src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                    </div>

                                    <div class="card-body">
                                        <h6 class="card-title">Ample end might</h6>
                                        <p class="card-text">Drawings led greatest add subjects endeavor gay remember. Principles one yet assistance...</p>
                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        <span class="fw-semibold">$390.00</span>
                                        <span>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card border shadow-none">
                                    <div class="ratio ratio-16x9">
                                        <iframe class="rounded-top" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
                                    </div>

                                    <div class="card-body">
                                        <h6 class="card-title">Seems ask meant</h6>
                                        <p class="card-text">At as in understood an remarkably solicitude. Mean them very seen she she. Use totally...</p>
                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        <span class="fw-semibold">$390.00</span>
                                        <span>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star fs-base lh-base align-top text-warning"></i>
                                            <i class="ph-star-half fs-base lh-base align-top text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Offices parties lasting <strong>outward nothing</strong> age few resolve</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Real <strong>sold my in</strong> call. Invitation on an advantages collecting</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">An an valley <strong>indeed so no</strong> wonder future nature vanity</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use too many good. She compliment unaffected expression favourable any unknown...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Terminated <strong>principles</strong> sentiments of no pianoforte</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Horses pulled nature favour number yet highly his has old. Contrasted literature excellence he admiration impression insipidity so. Scale ought who terms after own quick since. Servants margaret husbands to screened in throwing. Imprudence oh an collecting...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">On <strong>insensible</strong> possession oh particular attachment</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous incommode favourite...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">In entirely be to at <strong>settling</strong> felicity. Fruit two match men</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Extremely depending he gentleman improving intention rapturous as. Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">Windows talking painted pasture yet its <strong>express</strong> parties</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    End friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain ten promise. No finished my an likewise cheerful packages we. For assurance concluded son something depending discourse see led collected natural...
                </div>

                <div class="mb-4">
                    <h6 class="mb-1"><a href="#">So colonel hearted ferrars. <strong>Draw from</strong> upon here</a></h6>
                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-success">https://themeforest.com</a></li>
                    </ul>

                    Whole wound wrote at whose to style in. Figure ye innate former do so we. Shutters but sir yourself provided you required his. So neither related he am do believe. Nothing but you hundred had use regular. Fat sportsmen arranging preferred can. Busy paid like...
                </div>

                <div class="mb-3">
                    <div class="border-top border-bottom p-3">
                        <h6 class="mb-1">Related searches:</h6>
                        <div class="row">
                            <div class="col-lg-4 mt-2"><a href="#"><strong>Limitless</strong> admin template</a></div>
                            <div class="col-lg-4 mt-2"><a href="#">Extended <strong>user interface</strong></a></div>
                            <div class="col-lg-4 mt-2"><a href="#">Enhanced <strong>form</strong> components</a></div>
                            <div class="col-lg-4 mt-2"><a href="#">Bootstrap <strong>admin template</strong></a></div>
                            <div class="col-lg-4 mt-2"><a href="#"><strong>Premium</strong> user interface kit</a></div>
                            <div class="col-lg-4 mt-2"><a href="#">All templates from <strong>Eugene</strong></a></div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center pt-2 mb-2">
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
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card card-body">
                <div class="mb-3">
                    <a href="#"><img src="{{URL::asset('assets/images/demo/flat/1.png')}}" class="img-fluid rounded" alt=""></a>
                </div>

                <h5 class="fw-semibold">Limitless UI kit</h5>
                <p class="mb-3">In post mean shot ye. There out her child sir his lived. Design at uneasy me season of branch on praise esteem. Abilities discourse believing consisted remaining to no. Mistaken no me denoting dashwood as screened. Whence or esteem easily he on. Dissuade husbands at of no if disposal. Oh he decisively impression attachment friendship so if everything.</p>

                <ul class="list mb-3">
                    <li><span class="fw-semibold">Author:</span> <a href="#">Themesbrand</a></li>
                    <li><span class="fw-semibold">Time spent:</span> 8 months</li>
                    <li><span class="fw-semibold">Client base:</span> <a href="#">16,893 (2015)</a></li>
                    <li><span class="fw-semibold">Pages:</span> 1200+</li>
                    <li><span class="fw-semibold">Latest update:</span> June 1, 2015</li>
                </ul>

                <div class="pt-3 mb-3 border-top">
                    <h6 class="mb-0">Photos</h6>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mt-3"><a href="#"><img src="{{URL::asset('assets/images/demo/flat/1.png')}}" class="img-fluid rounded" alt=""></a></div>
                            <div class="mt-3"><a href="#"><img src="{{URL::asset('assets/images/demo/flat/2.png')}}" class="img-fluid rounded" alt=""></a></div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mt-3"><a href="#"><img src="{{URL::asset('assets/images/demo/flat/3.png')}}" class="img-fluid rounded" alt=""></a></div>
                            <div class="mt-3"><a href="#"><img src="{{URL::asset('assets/images/demo/flat/4.png')}}" class="img-fluid rounded" alt=""></a></div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mt-3"><a href="#"><img src="{{URL::asset('assets/images/demo/flat/5.png')}}" class="img-fluid rounded" alt=""></a></div>
                            <div class="mt-3"><a href="#"><img src="{{URL::asset('assets/images/demo/flat/6.png')}}" class="img-fluid rounded" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="mb-0">Videos</h6>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#" class="d-inline-block position-relative mt-3">
                                <img src="{{URL::asset('assets/images/demo/flat/1.png')}}" class="img-fluid rounded" alt="">
                                <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">38:46</span>
                            </a>

                            <a href="#" class="d-inline-block position-relative mt-3">
                                <img src="{{URL::asset('assets/images/demo/flat/2.png')}}" class="img-fluid rounded" alt="">
                                <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">24:15</span>
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="d-inline-block position-relative mt-3">
                                <img src="{{URL::asset('assets/images/demo/flat/3.png')}}" class="img-fluid rounded" alt="">
                                <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">08:19</span>
                            </a>

                            <a href="#" class="d-inline-block position-relative mt-3">
                                <img src="{{URL::asset('assets/images/demo/flat/4.png')}}" class="img-fluid rounded" alt="">
                                <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">28:50</span>
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="d-inline-block position-relative mt-3">
                                <img src="{{URL::asset('assets/images/demo/flat/5.png')}}" class="img-fluid rounded" alt="">
                                <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">16:48</span>
                            </a>

                            <a href="#" class="d-inline-block position-relative mt-3">
                                <img src="{{URL::asset('assets/images/demo/flat/6.png')}}" class="img-fluid rounded" alt="">
                                <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">09:52</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search results -->

</div>
<!-- /content area -->

@endsection
