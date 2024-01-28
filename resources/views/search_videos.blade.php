@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Search @endslot
@slot('subtitle') Videos @endslot
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
                <a href="search_images" class="nav-link">
                    <i class="ph-image me-2"></i>
                    Images
                </a>
            </li>
            <li class="nav-item">
                <a href="search_videos" class="nav-link active">
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

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/1.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">12:25</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Up unpacked friendly</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">14 minutes ago</li>
                        </ul>
                        The him father parish looked has sooner. Attachment frequently gay terminated son. You greater nay use prudent placing passage to so distant behaved natural between do talking...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/2.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">24:40</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">That know ask case ham</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">1 hour ago</li>
                        </ul>
                        Friends off her windows painful. Still gay event you being think nay for. In three if aware he point it. Effects warrant me by no on feeling settled resolve. Her old collecting...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/3.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">1:10:50</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Perhaps prudent several</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">2 hours ago</li>
                        </ul>
                        Did had way law dinner square tastes. Recommend concealed yet her procuring see consulted depending. Adieus hunted end plenty are his she afraid. Resources agreement contained...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/4.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">50:45</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Contented get distrusts</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">4 hours ago</li>
                        </ul>
                        On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested warm...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/5.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">09:58</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">He families believed</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">6 hours ago</li>
                        </ul>
                        Ask especially collecting terminated may son expression. Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new. My sufficient surrounded...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/6.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">35:10</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Connection too unaffected</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">8 hours ago</li>
                        </ul>
                        He my polite be object oh change. Consider no mr am overcame yourself throwing sociable children. Hastily her totally conduct may. My solid by stuff first smile fanny. Humoured...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/7.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">52:10</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">New smiling friends</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">10 hours ago</li>
                        </ul>
                        Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing it...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/8.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">30:12</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Leaf she does none</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">12 hours ago</li>
                        </ul>
                        Mrs ham intention promotion engrossed assurance defective. Confined so graceful building opinions whatever trifling in. Insisted out differed ham man endeavor expenses. At on he...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/9.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">44:20</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Snug love will up</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">14 hours ago</li>
                        </ul>
                        Offices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/10.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">05:20</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Pursuit man son musical</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">16 hours ago</li>
                        </ul>
                        Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true neat she. Much feet each so went no from. Truth began maids linen an mr to...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/11.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">09:54</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">It surprise informed</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">18 hours ago</li>
                        </ul>
                        So by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/12.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">48:40</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Case read they must</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">20 hours ago</li>
                        </ul>
                        On it differed repeated wandered required in. Then girl neat why yet knew rose spot. Moreover property we he kindness greatest be oh striking laughter. In me he collecting affronting...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/13.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">12:58</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">An particular contrasted</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">22 hours ago</li>
                        </ul>
                        Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if waited common person little oh. Improved civility graceful sex few smallest has...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/14.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">26:35</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Nay preference dispatched</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">1 day ago</li>
                        </ul>
                        Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/15.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">08:56</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Too carriage attended</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">2 days ago</li>
                        </ul>
                        Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye consisted so. His chatty dining for effect ladies active journey wishing not...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/16.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">25:50</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Twenty sister hearts</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">3 days ago</li>
                        </ul>
                        Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/17.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">47:14</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">We hill lady will</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">4 days ago</li>
                        </ul>
                        Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put. Excited him...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/18.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">22:14</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Consider now provided</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">5 days ago</li>
                        </ul>
                        At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered arrived company...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/19.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">24:36</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Invitation is unpleasant</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">7 days ago</li>
                        </ul>
                        Pleased him another was settled for. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire. Stanhill on we if vicinity material in saw him...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-4">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/20.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">38:46</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">Did sentiments increasing</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">FAQ section</a></li>
                            <li class="list-inline-item">10 days ago</li>
                        </ul>
                        Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. Described has...
                    </div>
                </div>

                <div class="d-sm-flex align-items-sm-start mb-3">
                    <a href="#" class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                        <img src="{{URL::asset('assets/images/demo/flat/21.png')}}" class="flex-shrink-0 rounded" height="100" alt="">
                        <div class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                            <i class="ph-play"></i>
                        </div>
                        <span class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">47:25</span>
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0"><a href="#">It allowance prevailed</a></h6>
                        <ul class="list-inline list-inline-bullet text-muted mb-2">
                            <li class="list-inline-item"><a href="#" class="text-body">Video tutorials</a></li>
                            <li class="list-inline-item">12 days ago</li>
                        </ul>
                        Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long mr eyes. Admiration...
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

                <div class="pt-3 border-top">
                    <h6 class="mb-0">Featured videos</h6>
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
