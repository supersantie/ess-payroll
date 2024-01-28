@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') General Pages @endslot
@slot('subtitle') Knowledgebase @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Search field -->
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex align-items-sm-start">
                <div class="form-control-feedback form-control-feedback-start flex-grow-1 mb-3 mb-sm-0">
                    <input type="text" class="form-control" placeholder="Search our knowledgebase">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 mb-3 mb-sm-0">
                    <select class="form-select">
                        <option value="0">All categories</option>
                        <option value="1">Getting started</option>
                        <option value="2">Registration</option>
                        <option value="3">General info</option>
                        <option value="4">Your settings</option>
                        <option value="5">Copyrights</option>
                        <option value="6">Contacting authors</option>
                    </select>
                </div>

                <div class="ms-sm-3">
                    <button type="submit" class="btn btn-primary w-100 w-sm-auto">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /search field -->


    <!-- Info blocks -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="d-inline-flex bg-success bg-opacity-10 text-success rounded-pill p-2 mb-3 mt-1">
                        <i class="ph-book ph-2x m-1"></i>
                    </div>
                    <h5 class="card-title">Knowledge Base</h5>
                    <p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far inanimately alongside candidly much and jeez</p>
                    <a href="#" class="btn btn-success mb-1">Browse articles</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="d-inline-flex bg-warning bg-opacity-10 text-warning rounded-pill p-2 mb-3 mt-1">
                        <i class="ph-lifebuoy ph-2x m-1"></i>
                    </div>
                    <h5 class="card-title">Support center</h5>
                    <p class="mb-3">Dear spryly growled much far jeepers vigilantly less and far hideous and some mannishly less jeepers less and and crud</p>
                    <a href="#" class="btn btn-warning mb-1">Open a ticket</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="d-inline-flex bg-primary bg-opacity-10 text-primary rounded-pill p-2 mb-3 mt-1">
                        <i class="ph-newspaper ph-2x m-1"></i>
                    </div>
                    <h5 class="card-title">Articles and news</h5>
                    <p class="mb-3">Diabolically somberly astride crass one endearingly blatant depending peculiar antelope piquantly popularly adept much</p>
                    <a href="#" class="btn btn-primary mb-1">Browse news</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /info blocks -->


    <!-- Directory -->
    <div class="py-2 mb-3">
        <h5 class="mb-0">Browse articles by category</h5>
        <span class="text-muted">Yikes snuffed goat macaw overlay much and goodness and alas kookaburra a goldfish</span>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Getting started <span class="ms-1">(93)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> And hello exotic staunch <span class="badge bg-primary ms-auto">Popular</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> That and well ecstatically
                            </a>
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Sheared coasted so concurrent
                            </a>
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Into darn intrepid belated
                            </a>
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (93)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Becoming an author <span class="ms-1">(56)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Jeepers therefore one
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Near and ladybug forewent <span class="badge bg-success ms-auto">Review</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Well much strove when stuck
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Lorikeet much fantastic less
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (56)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> General info for all authors <span class="ms-1">(29)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Lackadaisical dear crude <span class="badge bg-danger ms-auto">Closed</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Effortless one powerlessly
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Some less hey and less <span class="badge bg-indigo ms-auto">Article</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Jeepers pill nonsensically
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (29)
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Your statement &amp; documents <span class="ms-1">(58)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="icon-file-text2"></i> Incongruously gorilla <span class="badge bg-teal ms-auto">New</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="icon-file-text2"></i> Playful amongst hence
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="icon-file-text2"></i> Sobbingly altruistic nasty
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="icon-file-text2"></i> Hung insecure far ferret
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="icon-arrow-right22"></i> Show all articles (58)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Account settings <span class="ms-1">(92)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Reined and this vigorous <span class="badge bg-primary ms-auto">Popular</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Oh positively well crab
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Recast then impalpable cried
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Eclectic mechanically as on <span class="badge bg-danger ms-auto">Closed</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (92)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Protecting your copyright <span class="ms-1">(15)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> And dear dealt bat far redid
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Trout some after effective <span class="badge bg-secondary ms-auto">On hold</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> The one rhythmically whale
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Admirably spun a the belched <span class="badge bg-indigo ms-auto">Article</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (15)
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Intellectual Property <span class="ms-1">(12)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Gagged more much around <span class="badge bg-danger ms-auto">Closed</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Much oh much along gnu
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Aardvark far the until alas <span class="badge bg-success ms-auto">Review</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Hence expeditiously goldfish
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (12)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Item support <span class="ms-1">(34)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Shark hello less well
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Far pious gosh cuttingly <span class="badge bg-success ms-auto">Review</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Tonally guardedly jeepers
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Since growled overheard
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (34)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mt-1 mb-2"><i class="ph-folder me-2"></i> Contacting authors <span class="ms-1">(85)</span></div>
                        <div class="list-group list-group-sm list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Jeepers circa sneered well
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Oh one ouch ouch armadillo <span class="badge bg-primary ms-auto">Popular</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center rounded">
                                <i class="ph-file-text me-2"></i> Thus went far and pending <span class="badge bg-secondary ms-auto">On hold</span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-file-text me-2"></i> Or cat together chose eagle
                            </a>

                            <a href="#" class="list-group-item list-group-item-action rounded">
                                <i class="ph-caret-right me-2"></i> Show all articles (85)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /directory -->


    <!-- Latest added -->
    <div class="py-2 mb-3">
        <h5 class="mb-0">Latest articles &amp; videos</h5>
        <span class="text-muted">Dear bawled since some the contrary much hyena jeez clear fox despite the concomitant</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-success bg-opacity-10 text-success rounded-pill p-2 me-3">
                        <i class="ph-file-text"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Walking away fallaciously</a></h6>
                        Ouch licentiously lackadaisical crud together began gregarious below near darn goodness
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-warning bg-opacity-10 text-warning rounded-pill p-2 me-3">
                        <i class="ph-file-video"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Nutria and rewound</a></h6>
                        Strove the darn hey as far oh alas and yikes and gosh knitted this slept via gerbil baneful
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-info bg-opacity-10 text-info rounded-pill p-2 me-3">
                        <i class="ph-file-code"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Bound befell well</a></h6>
                        And since left before understandably much groomed along burped through dear and gosh
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-success bg-opacity-10 text-success rounded-pill p-2 me-3">
                        <i class="ph-file-text"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Porcupine strict nodded</a></h6>
                        Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-warning bg-opacity-10 text-warning rounded-pill p-2 me-3">
                        <i class="ph-file-video"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Ducked ravenously dear</a></h6>
                        Reran sincere said monkey one slapped jeepers rubbed fleetly incongruously due yet llama
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-info bg-opacity-10 text-info rounded-pill p-2 me-3">
                        <i class="ph-file-code"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Contemptibly bleakly</a></h6>
                        Speechless far goodness bent as boa crud because vague far koala the that lantern alas sold
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-success bg-opacity-10 text-success rounded-pill p-2 me-3">
                        <i class="ph-file-text"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Blamelessly wow hence</a></h6>
                        A without walking some objective hiccupped some this overlay immorally crud and gosh
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-warning bg-opacity-10 text-warning rounded-pill p-2 me-3">
                        <i class="ph-file-video"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Manatee broadcast</a></h6>
                        And some where indecently manta floated raptly youthful unlike swept dragonfly pulled moth
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-info bg-opacity-10 text-info rounded-pill p-2 me-3">
                        <i class="ph-file-code"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Stretched flamboyant</a></h6>
                        Some when foolhardy dangerous so less less aimlessly along hazardously oversaw much stopped
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /latest added -->


    <!-- Featured articles -->
    <div class="py-2 mb-3">
        <h5 class="mb-0">Featured articles and tutorials</h5>
        <span class="text-muted">And porcupine the wallaby far the due thus rash did near dear far pangolin parrot less</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/4.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">For ostrich much</h5>
                    <p class="card-text">Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent saucy wherever towards.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">April 12, 2022</span>
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

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/3.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Helpfully stolidly</h5>
                    <p class="card-text">Hippopotamus aside while a shrewdly this after kookaburra wow in haphazardly much salmon buoyantly sullen gosh</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">April 11, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(35)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/2.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Considering far</h5>
                    <p class="card-text">Kookaburra so hey a less tritely far congratulated this winked some under had unblushing beyond sympathetic</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">May 25, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(42)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/5.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Despite perversely</h5>
                    <p class="card-text">Coming merits and was talent enough far. Sir joy northward sportsmen education. Put still any about manor heard</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">May 20, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(59)</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- /featured articles -->


    <!-- Submit a ticket -->
    <div class="card card-body">
        <div class="d-flex align-items-center align-items-lg-start flex-column flex-lg-row">
            <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-lg-3 mb-3 mb-lg-0">
                <i class="ph-file-search"></i>
            </div>

            <div class="flex-fill text-center text-lg-start">
                <h6 class="mb-0">Can't find what you're looking for?</h6>
                <span class="text-muted">Maladroit forgetfully under until the fraternally on one much whispered waked much cumulatively some rabidly after thanks hey</span>
            </div>

            <a href="#" class="btn btn-success align-self-lg-center ms-lg-3 mt-3 mt-lg-0">
                <i class="ph-chat me-2"></i>
                Submit a ticket
            </a>
        </div>
    </div>
    <!-- /submit a ticket -->

</div>
<!-- /content area -->

@endsection
