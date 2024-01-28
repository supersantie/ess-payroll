@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Task Manager @endslot
@slot('subtitle') Detailed @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="flex-1 order-2 order-lg-1">

            <!-- Task overview -->
            <div class="card">
                <div class="card-header d-lg-flex py-lg-0">
                    <h5 class="py-lg-3 mb-0">#23: Support tickets list doesn't support commas</h5>
                    <div class="mt-1 my-lg-auto ms-lg-auto">
                        <a href="#" class="btn btn-primary">Check in <i class="ph-clock ms-2"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h6>Overview</h6>
                        <p class="mb-3">Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster more examined one that combed until a less less witless pouted up voluble timorously glared elaborate giraffe steady while grinned and got one beaver to walked. Connected picked rashly ocelot flirted while wherever unwound much more one inside emotionally well much woolly amidst upon far burned ouch sadistically became.</p>
                    </div>

                    <div class="mb-4">
                        <h6>What we need</h6>
                        <p class="mb-4">Some cow goose out and sweeping wow the skillfully goodness one crazily far some jeez darn well so peevish pending nudged categorically in between about much alas handsome intolerable devotedly helpfully smiled momentously next much this this next sweepingly far. Together prim and limpet much extravagantly quail longing a ouch that walking a jeepers flamingo more.</p>

                        <div class="row px-3">
                            <div class="col-lg-6">
                                <dl>
                                    <dt class="fs-sm text-primary text-uppercase mb-2">1. Salamander much that on much</dt>
                                    <dd class="mb-3">Like partook magic this enthusiastic tasteful far crud otter this the ferret honey iguana.</dd>

                                    <dt class="fs-sm text-primary text-uppercase mb-2">2. Well far some raccoon</dt>
                                    <dd class="mb-3">Python laudably euphemistically since this copious much human this briefly hello ouch less one diligent however impotently made gave a slick up much.</dd>

                                    <dt class="fs-sm text-primary text-uppercase mb-2">3. Goldfish rapidly that far</dt>
                                    <dd class="mb-3">Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>
                                </dl>
                            </div>

                            <div class="col-lg-6">
                                <dl>
                                    <dt class="fs-sm text-primary text-uppercase mb-2">1. Misunderstood cuffed more depending</dt>
                                    <dd class="mb-3">And earthworm dear arose bald agilely sad so below cowered within ceremonially therefore via much this symbolically and newt capably.</dd>

                                    <dt class="fs-sm text-primary text-uppercase mb-2">2. Voluble much saddled mechanic</dt>
                                    <dd class="mb-3">Much took between less goodness jay mallard kneeled gnashed this up strong cooperative.</dd>

                                    <dt class="fs-sm text-primary text-uppercase mb-2">3. Before some one more</dt>
                                    <dd class="mb-3">Pending some contrary rabbit up that the more conditionally ouch confidently far so was darn logic thus dove the juicily because that placed otter.</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6>Requirements</h6>
                        <p class="mb-3">So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily.</p>

                        <div class="table-responsive border rounded">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Due date</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="fw-semibold">Design mockup</span></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ph-calendar me-2"></i>
                                                21 January, 15
                                            </div>
                                        </td>
                                        <td>Create design mockups for a new app, must be delivered before 1st of March</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><span class="fw-semibold">User interface research</span></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ph-calendar me-2"></i>
                                                24 January, 15
                                            </div>
                                        </td>
                                        <td>Create a focus group with random people, provide a research statement</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><span class="fw-semibold">New icons set</span></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ph-calendar me-2"></i>
                                                28 January, 15
                                            </div>
                                        </td>
                                        <td>Create a full set of icons required for the iOS application, send them to team lead for review</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><span class="fw-semibold">Loading optimization</span></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ph-calendar me-2"></i>
                                                1 February, 15
                                            </div>
                                        </td>
                                        <td>Review image sizes, compress them as much as possible, make sure page loading time is less than 1 second</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h6>Uploaded files</h6>
                    <p>A much goodness between destructive that save stupid firefly destructively dog goldfinch continually alas pinched for outside flailed inescapably hey brought rid crud and awakened sobbed extraordinarily wherever deer before tenable yet into dalmatian opposite save close ahead next independent mindful but far.</p>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-img-actions mx-1 mt-1">
                                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/9.png')}}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{URL::asset('assets/images/demo/flat/9.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                                            <i class="ph-magnifying-glass-plus"></i>
                                        </a>

                                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                            <i class="ph-download-simple"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="fw-semibold">dashboard_draft.png</div>
                                        <span class="text-muted ms-auto">378Kb</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-img-actions mx-1 mt-1">
                                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{URL::asset('assets/images/demo/flat/8.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                                            <i class="ph-magnifying-glass-plus"></i>
                                        </a>

                                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                            <i class="ph-download-simple"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="fw-semibold">profile_page.png</div>
                                        <span class="text-muted ms-auto">1.2Mb</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-img-actions mx-1 mt-1">
                                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{URL::asset('assets/images/demo/flat/6.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                                            <i class="ph-magnifying-glass-plus"></i>
                                        </a>

                                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                            <i class="ph-download-simple"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="fw-semibold">shopping_cart.png</div>
                                        <span class="text-muted ms-auto">1.8Mb</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-img-actions mx-1 mt-1">
                                    <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/flat/12.png')}}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{URL::asset('assets/images/demo/flat/12.png')}}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                                            <i class="ph-magnifying-glass-plus"></i>
                                        </a>

                                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                            <i class="ph-download-simple"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="fw-semibold">sales_statistics.png</div>
                                        <span class="text-muted ms-auto">2.0Mb</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        Status:
                        <div class="dropdown d-flex ms-2">
                            <a href="#" class="text-body d-inline-flex align-items-center fw-semibold dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Open
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-inline-flex mb-0">
                        <a href="#" class="text-body">
                            <i class="ph-note-pencil"></i>
                        </a>
                        <a href="#" class="text-body ms-2">
                            <i class="ph-trash"></i>
                        </a>
                        <div class="d-flex dropdown ms-2">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-circle-plus me-2"></i> Assign users</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-warning-circle me-2"></i> Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /task overview -->


            <!-- Comments -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Comments</h5>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">William Jennings</a>
                            <span class="fs-sm text-muted ms-3">Just now</span>

                            <p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    114
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">Margo Baker</a>
                            <span class="fs-sm text-muted ms-3">5 minutes ago</span>

                            <p>Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    90
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">James Alexander</a>
                            <span class="fs-sm text-muted ms-3">7 minutes ago</span>

                            <p>Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    70
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>

                            <div class="d-flex flex-column flex-lg-row mt-3">
                                <div class="me-lg-3 mb-2 mb-lg-0">
                                    <a href="#"><img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                </div>

                                <div class="flex-fill">
                                    <a href="#" class="fw-semibold">Jack Cooper</a>
                                    <span class="fs-sm text-muted ms-3">10 minutes ago</span>

                                    <p>She education get middleton day agreement performed preserved unwilling. Do however as pleased offence outward beloved by present. By outward neither he so covered.</p>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item d-inline-flex align-items-center">
                                            <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                            67
                                        </li>
                                        <li class="list-inline-item ms-2">
                                            <a href="#">Reply</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">Edit</a>
                                        </li>
                                    </ul>

                                    <div class="d-flex flex-column flex-lg-row mt-3">
                                        <div class="me-lg-3 mb-2 mb-lg-0">
                                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Natalie Wallace</a>
                                            <span class="fs-sm text-muted ms-3">1 hour ago</span>

                                            <p>Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up.</p>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item d-inline-flex align-items-center">
                                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                                    54
                                                </li>
                                                <li class="list-inline-item ms-2">
                                                    <a href="#">Reply</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-lg-row mt-3">
                                        <div class="me-lg-3 mb-2 mb-lg-0">
                                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Nicolette Grey</a>
                                            <span class="fs-sm text-muted ms-3">2 hours ago</span>

                                            <p>Although moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself.</p>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item d-inline-flex align-items-center">
                                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                                    41
                                                </li>
                                                <li class="list-inline-item ms-2">
                                                    <a href="#">Reply</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">
                        <div class="me-lg-3 mb-2 mb-lg-0">
                            <a href="#"><img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt=""></a>
                        </div>

                        <div class="flex-fill">
                            <a href="#" class="fw-semibold">Victoria Johnson</a>
                            <span class="fs-sm text-muted ms-3">3 hours ago</span>

                            <p>Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir.</p>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-flex align-items-center">
                                    <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
                                    32
                                </li>
                                <li class="list-inline-item ms-2">
                                    <a href="#">Reply</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-top border-bottom">
                    <div id="add-comment">Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she...</div>
                </div>

                <div class="card-body text-end">
                    <button type="button" class="btn btn-primary">
                        Submit
                        <i class="ph-paper-plane-tilt ms-2"></i>
                    </button>
                </div>
            </div>
            <!-- /comments -->

        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Task timer -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Task timer</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex justify-content-center mb-3">
                            <a href="#" class="text-body mx-1">Mon</a>
                            <a href="#" class="link-primary mx-1">Tue</a>
                            <a href="#" class="text-body mx-1">Wed</a>
                            <a href="#" class="text-body mx-1">Thu</a>
                            <a href="#" class="text-body mx-1">Fri</a>
                            <a href="#" class="text-body mx-1">Sat</a>
                            <a href="#" class="text-body mx-1">Sun</a>
                        </div>

                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <span class="display-6 lh-1 m-0">09</span>
                                <div class="mt-2">hours</div>
                            </div>
                            <div class="mx-1 my-2">:</div>
                            <div>
                                <span class="display-6 lh-1 m-0">54</span>
                                <div class="mt-2">minutes</div>
                            </div>
                            <div class="mx-1 my-2">:</div>
                            <div>
                                <span class="display-6 lh-1 m-0">29</span>
                                <div class="mt-2">seconds</div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex align-items-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body"><i class="ph-play-circle"></i></a>
                            <a href="#" class="text-body mx-2"><i class="ph-pause-circle"></i></a>
                            <a href="#" class="text-body"><i class="ph-stop-circle"></i></a>
                        </div>

                        <div class="dropdown d-flex ms-auto">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="bg-success rounded-circle p-1 me-2"></span>
                                Open
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">Open</a>
                                <a href="#" class="dropdown-item">On hold</a>
                                <a href="#" class="dropdown-item">Resolved</a>
                                <a href="#" class="dropdown-item">Closed</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Dublicate</a>
                                <a href="#" class="dropdown-item">Invalid</a>
                                <a href="#" class="dropdown-item">Wontfix</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /task timer -->


                <!-- Task details -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Task details</span>
                    </div>

                    <table class="table table-borderless table-xs my-2">
                        <tbody>
                            <tr>
                                <td><i class="ph-briefcase me-2"></i> Project:</td>
                                <td class="text-end"><a href="#">Singular app</a></td>
                            </tr>
                            <tr>
                                <td><i class="ph-warning-octagon me-2"></i> Priority:</td>
                                <td class="text-end">
                                    <div class="btn-group">
                                        <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                            <span class="bg-danger rounded-pill p-1 me-2"></span>
                                            Blocker
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item active">
                                                <span class="bg-danger rounded-pill p-1 me-2"></span>
                                                Blocker
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <span class="bg-warning rounded-pill p-1 me-2"></span>
                                                High priority
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <span class="bg-success rounded-pill p-1 me-2"></span>
                                                Normal priority
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <span class="bg-secondary rounded-pill p-1 me-2"></span>
                                                Low priority
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ph-clock-counter-clockwise me-2"></i> Revisions:</td>
                                <td class="text-end">29</td>
                            </tr>
                            <tr>
                                <td><i class="ph-check-square-offset me-2"></i> Status:</td>
                                <td class="text-end">Published</td>
                            </tr>
                            <tr>
                                <td><i class="ph-user-circle-plus me-2"></i> Added by:</td>
                                <td class="text-end"><a href="#">Winnie</a></td>
                            </tr>
                            <tr>
                                <td><i class="ph-calendar-check me-2"></i> Updated:</td>
                                <td class="text-end text-muted">12 May, 2015</td>
                            </tr>
                            <tr>
                                <td><i class="ph-calendar-plus me-2"></i> Created:</td>
                                <td class="text-end text-muted">25 Feb, 2015</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card-footer d-flex align-items-center">
                        <div class="d-inline-flex">
                            <a href="#" class="text-body me-2">
                                <i class="ph-pencil"></i>
                            </a>
                            <a href="#" class="text-body me-2">
                                <i class="ph-trash"></i>
                            </a>
                        </div>

                        <div class="dropdown d-flex ms-auto">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-circle-plus me-2"></i> Assign users</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-warning-circle me-2"></i> Report</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /task details -->


                <!-- Attached files -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Attached files</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex align-items-start mb-3">
                            <div class="me-2">
                                <i class="ph-file-doc"></i>
                            </div>

                            <div class="flex-fill overflow-hidden">
                                <div class="fw-semibold text-truncate">Overdrew_scowled.doc</div>
                                <ul class="list-inline list-inline-bullet fs-sm text-muted mb-0">
                                    <li class="list-inline-item">Size: 1.2Mb</li>
                                    <li class="list-inline-item">By <a href="#">Winnie</a></li>
                                </ul>
                            </div>

                            <div class="ms-3">
                                <a href="#" class="text-body">
                                    <i class="ph-download-simple"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="me-2">
                                <i class="ph-file-pdf"></i>
                            </div>

                            <div class="flex-fill overflow-hidden">
                                <div class="fw-semibold text-truncate">And_less_maternally.pdf</div>
                                <ul class="list-inline list-inline-bullet fs-sm text-muted mb-0">
                                    <li class="list-inline-item">Size: 0.9Mb</li>
                                    <li class="list-inline-item">By <a href="#">Eugene</a></li>
                                </ul>
                            </div>

                            <div class="ms-3">
                                <a href="#" class="text-body">
                                    <i class="ph-download-simple"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="me-2">
                                <i class="ph-file-video"></i>
                            </div>

                            <div class="flex-fill overflow-hidden">
                                <div class="fw-semibold text-truncate">Well_equitably.mov</div>
                                <ul class="list-inline list-inline-bullet fs-sm text-muted mb-0">
                                    <li class="list-inline-item">Size: 14.8Mb</li>
                                    <li class="list-inline-item">By <a href="#">Jenny</a></li>
                                </ul>
                            </div>

                            <div class="ms-3">
                                <a href="#" class="text-body">
                                    <i class="ph-download-simple"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="me-2">
                                <i class="ph-file-pdf"></i>
                            </div>

                            <div class="flex-fill overflow-hidden">
                                <div class="fw-semibold text-truncate">The_less_overslept.pdf</div>
                                <ul class="list-inline list-inline-bullet fs-sm text-muted mb-0">
                                    <li class="list-inline-item">Size: 4.3Mb</li>
                                    <li class="list-inline-item">By <a href="#">Natalie</a></li>
                                </ul>
                            </div>

                            <div class="ms-3">
                                <a href="#" class="text-body">
                                    <i class="ph-download-simple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /attached files -->


                <!-- Revisions -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Revisions</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                    <i class="ph-git-pull-request"></i>
                                </div>
                            </div>

                            <div class="flex-fill">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="fs-sm opacity-50">4 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2">
                                    <i class="ph-git-commit"></i>
                                </div>
                            </div>

                            <div class="flex-fill">
                                Add full font overrides for popovers and tooltips
                                <div class="fs-sm opacity-50">36 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-info bg-opacity-10 text-info lh-1 rounded-pill p-2">
                                    <i class="ph-git-branch"></i>
                                </div>
                            </div>

                            <div class="flex-fill">
                                <a href="#">Chris Arney</a> created a new <span class="fw-semibold">Design</span> branch
                                <div class="fs-sm opacity-50">2 hours ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                    <i class="ph-git-merge"></i>
                                </div>
                            </div>

                            <div class="flex-fill">
                                <a href="#">Themesbrand</a> merged <span class="fw-semibold">Master</span> and <span class="fw-semibold">Dev</span> branches
                                <div class="fs-sm opacity-50">Dec 18, 18:36</div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3">
                                <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                    <i class="ph-git-pull-request"></i>
                                </div>
                            </div>

                            <div class="flex-fill">
                                Have Carousel ignore keyboard events
                                <div class="fs-sm opacity-50">Dec 12, 05:46</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /revisions -->


                <!-- Assigned users -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Assigned users</span>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3 position-relative">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                <span class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill">6</span>
                            </a>

                            <div class="flex-fill fw-medium">
                                Rebecca Jameson
                                <div class="fs-sm text-muted">UI developer</div>
                            </div>

                            <div class="dropdown ms-3">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-dots-three-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chats me-2"></i>
                                        Start chat
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-phone me-2"></i>
                                        Make a call
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-envelope me-2"></i>
                                        Send mail
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        Statistics
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3 position-relative">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                <span class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill">9</span>
                            </a>

                            <div class="flex-fill fw-medium">
                                Walter Sommers
                                <div class="fs-sm text-muted">Lead developer</div>
                            </div>

                            <div class="dropdown ms-3">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-dots-three-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chats me-2"></i>
                                        Start chat
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-phone me-2"></i>
                                        Make a call
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-envelope me-2"></i>
                                        Send mail
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        Statistics
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill fw-medium">
                                Otto Gerwald
                                <div class="fs-sm text-muted">Front end developer</div>
                            </div>

                            <div class="dropdown ms-3">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-dots-three-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chats me-2"></i>
                                        Start chat
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-phone me-2"></i>
                                        Make a call
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-envelope me-2"></i>
                                        Send mail
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        Statistics
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill fw-medium">
                                Vince Satmann
                                <div class="fs-sm text-muted">UX expert</div>
                            </div>

                            <div class="dropdown ms-3">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-dots-three-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chats me-2"></i>
                                        Start chat
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-phone me-2"></i>
                                        Make a call
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-envelope me-2"></i>
                                        Send mail
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        Statistics
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <a href="#" class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </a>

                            <div class="flex-fill fw-medium">
                                Jason Leroy
                                <div class="fs-sm text-muted">SEO specialist</div>
                            </div>

                            <div class="dropdown ms-3">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-dots-three-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chats me-2"></i>
                                        Start chat
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-phone me-2"></i>
                                        Make a call
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-envelope me-2"></i>
                                        Send mail
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        Statistics
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /assigned users -->


                <!-- Latest comments -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Latest comments</span>
                    </div>

                    <div class="list-group list-group-borderless py-1">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Will Samuel</span>
                                <div class="text-muted">And he looked over at the alarm clock, ticking..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-checks fs-base text-primary align-text-top me-1"></i>
                                    Just now
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Margo Baker</span>
                                <div class="text-muted">However hard he threw himself onto..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-checks fs-base text-primary align-text-top me-1"></i>
                                    6 minutes ago
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Monica Smith</span>
                                <div class="text-muted">Yes, but was it possible to quietly sleep through..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-check fs-base align-text-top me-1"></i>
                                    Yesterday
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">Jordana Mills</span>
                                <div class="text-muted">What should he do now? The next train went at..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-check fs-base align-text-top me-1"></i>
                                    Monday
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                            </div>
                            <div class="flex-fill">
                                <span class="fw-semibold">John Craving</span>
                                <div class="text-muted">Gregor then turned to look out the window..</div>
                                <div class="fs-sm text-muted mt-1">
                                    <i class="ph-checks fs-base text-primary align-text-top me-1"></i>
                                    Jan 24, 14:50
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /latest comments -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /right sidebar component -->

    </div>
    <!-- /inner container -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/editors/quill/quill.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/task_manager_detailed.js')}}"></script>
@endsection
