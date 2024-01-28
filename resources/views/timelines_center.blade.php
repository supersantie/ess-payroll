@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Timelines @endslot
@slot('subtitle') Center @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Timeline -->
    <div class="timeline timeline-center">
        <div class="timeline-container">

            <!-- Sales stats -->
            <div class="timeline-row timeline-row-full">
                <div class="timeline-icon">
                    <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" alt=""></a>
                </div>

                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h6 class="mb-0">Daily statistics</h6>
                        <div class="mt-1 mt-sm-0 ms-sm-auto">
                            <span><i class="ph-clock-counter-clockwise text-success me-2"></i> Updated 3 hours ago</span>

                            <div class="d-inline-flex ms-3">
                                <a class="text-body" data-card-action="reload"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="daily_statistics"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /sales stats -->


            <!-- Blog post -->
            <div class="timeline-row timeline-row-start">
                <div class="timeline-icon">
                    <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" alt="">
                </div>

                <div class="timeline-time">
                    <a href="#">Lucy</a> added a new post
                    <div class="text-muted">49 minutes ago</div>
                </div>

                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h6 class="mb-0">Himalayan sunset</h6>
                        <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                            <span><i class="ph-check-circle text-success me-1"></i> 49 minutes ago</span>
                            <div class="d-inline-flex ms-auto ms-sm-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-img-actions mb-3">
                            <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/cover3.jpg')}}" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="blog_single" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="mb-3">
                            <i class="ph-chats me-2"></i>
                            <a href="#">Jason Ansley</a> commented:
                        </h6>

                        <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                            <p class="mb-2 fs-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                            <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                        </blockquote>
                    </div>

                    <div class="card-body d-flex justify-content-between align-items-center pt-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-eye me-2"></i> 438</a></li>
                            <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-chats me-2"></i> 71</a></li>
                        </ul>

                        <a href="#" class="d-inline-block">Read post</a>
                    </div>
                </div>
            </div>
            <!-- /blog post -->


            <!-- Date stamp -->
            <div class="timeline-date text-muted">
                <i class="ph-clock-counter-clockwise me-2"></i> <span class="fw-semibold">Monday</span>, April 18
            </div>
            <!-- /date stamp -->


            <!-- Video post -->
            <div class="timeline-row timeline-row-end">
                <div class="timeline-icon">
                    <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" alt="">
                </div>

                <div class="timeline-time">
                    <a href="#">Margo</a> uploaded a video
                    <div class="text-muted">1 hour ago</div>
                </div>

                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h6 class="mb-0">Peru mountains</h6>
                        <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                            <span><i class="ph-check-circle text-success me-1"></i> Today, 8:39 am</span>
                            <div class="d-inline-flex ms-auto ms-sm-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /video post -->


            <!-- Messages -->
            <div class="timeline-row timeline-row-full">
                <div class="timeline-icon">
                    <div class="bg-info text-white">
                        <i class="ph-chats"></i>
                    </div>
                </div>

                <div class="timeline-time">
                    <a href="#">James</a> sent you a message
                    <div class="text-muted">29 minutes ago</div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="mb-0">Conversation with James</h6>
                        <div class="ms-auto">
                            <div class="d-inline-flex ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="media-chat-scrollable mb-3">
                            <div class="media-chat vstack gap-2">
                                <div class="content-divider justify-content-center text-muted mx-0">Today</div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
                                        <div class="fs-sm text-muted mt-2">Tue, 10:28 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                        <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                                    </div>
                                </div>


                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                                        <div class="fs-sm text-muted mt-2">Wed, 4:20 pm</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
                                        <div class="fs-sm text-muted mt-2">
                                            <i class="ph-checks text-primary me-1"></i>
                                            2 hours ago
                                        </div>
                                    </div>
                                </div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div class="align-self-center">
                                        <span class="fw-semibold">Victoria</span> is typing
                                        <div class="typing-indicator">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-control form-control-content mb-3" contenteditable data-placeholder="Type message here and hit enter..."></div>

                        <div class="d-flex align-items-center">
                            <div>
                                <a href="#" class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1" data-bs-popup="tooltip" title="Formatting">
                                    <i class="ph-text-aa"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1" data-bs-popup="tooltip" title="Emoji">
                                    <i class="ph-smiley"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1" data-bs-popup="tooltip" title="Send file">
                                    <i class="ph-paperclip"></i>
                                </a>
                            </div>

                            <button type="button" class="btn btn-primary ms-auto">
                                Send
                                <i class="ph-paper-plane-tilt ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /messages -->


            <!-- Tasks -->
            <div class="timeline-row timeline-row-start">
                <div class="timeline-icon">
                    <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" alt="">
                </div>

                <div class="timeline-time">
                    <a href="#">Roger</a> added a new task
                    <div class="text-muted">2 hours ago</div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="d-inline-flex">
                                <span class="badge bg-primary me-2">Research</span>
                                <span class="badge bg-yellow text-black me-2">Design</span>
                            </div>

                            <div class="dropdown ms-auto">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                    <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                    <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                    <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="mb-1"><a href="task_manager_detailed">#24. Create UI design model</a></h6>
                            <p class="mb-2">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger..</p>
                        </div>

                        <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                            <div class="d-flex flex-wrap">
                                <div><span class="text-muted"><i class="ph-calendar me-1"></i> 28.06.2022</span></div>
                                <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Eternity app</a></div>
                            </div>

                            <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                                <a href="#" class="me-1">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                                </a>
                                <a href="#" class="me-1">
                                    <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                                </a>
                                <a href="#" class="me-1">
                                    <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                                </a>
                                <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex align-items-center">
                        <span>
                            <i class="ph-bell-ringing me-1"></i>
                            Due: <span class="fw-semibold">23 hours</span>
                        </span>

                        <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                            <div class="dropdown d-inline-flex">
                                <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-check-square-offset me-2"></i>
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
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="d-inline-flex">
                                <span class="badge bg-yellow text-black me-2">Design</span>
                                <span class="badge bg-success me-2">Development</span>
                            </div>

                            <div class="dropdown ms-auto">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                    <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                    <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                    <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="mb-1"><a href="task_manager_detailed">#23. New icons set for an iOS app</a></h6>
                            <p class="mb-2">Affluent luckily or distinctly demonstrable strewed outside coaxingly and after and rational this fitted..</p>
                        </div>

                        <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                            <div class="d-flex flex-wrap">
                                <div><span class="text-muted"><i class="ph-calendar me-1"></i> 22.06.2022</span></div>
                                <div class="ms-3"><a href="#"><i class="ph-circles-three me-1"></i> Eternity app</a></div>
                            </div>

                            <div class="d-inline-flex align-items-center mt-2 mt-sm-0 ms-sm-auto">
                                <a href="#" class="me-1">
                                    <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                                </a>
                                <a href="#" class="me-1">
                                    <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt="">
                                </a>
                                <a href="#" class="text-body">&nbsp;<i class="ph-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex align-items-center">
                        <span>
                            <i class="ph-bell-ringing me-1"></i>
                            Due: <span class="fw-semibold">15 hours</span>
                        </span>

                        <div class="d-inline-flex mt-2 mt-sm-0 ms-auto">
                            <div class="dropdown d-inline-flex">
                                <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-check-square-offset me-2"></i>
                                    On hold
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Open</a>
                                    <a href="#" class="dropdown-item active">On hold</a>
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
                </div>
            </div>
            <!-- /tasks -->


            <!-- Date stamp -->
            <div class="timeline-date text-muted">
                <i class="ph-clock-counter-clockwise me-2"></i> <span class="fw-semibold">Tuesday</span>, April 19
            </div>
            <!-- /date stamp -->


            <!-- Weekly stats -->
            <div class="timeline-row timeline-row-end">
                <div class="timeline-icon">
                    <div class="bg-warning text-white">
                        <i class="ph-chart-line"></i>
                    </div>
                </div>

                <div class="timeline-time">
                    New report has been generated
                    <div class="text-muted">1 day ago</div>
                </div>

                <div class="card">
                    <div class="card-header d-flex">
                        <h6 class="mb-0">Weekly sales statistics</h6>
                        <div class="ms-auto">
                            <span>
                                <i class="ph-arrow-circle-up text-success me-1"></i>
                                <span class="fw-semibold">23.7%</span>
                            </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="tornado_negative_stack"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /weekly stats -->


            <!-- Invoices -->
            <div class="timeline-row timeline-row-start">
                <div class="timeline-icon">
                    <div class="bg-warning text-white">
                        <i class="ph-money"></i>
                    </div>
                </div>

                <div class="timeline-time">
                    Invoices from <a href="#">Leonardo</a> and <a href="#">Rebecca</a> have been updated
                    <div class="text-muted">4 hours ago</div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                            <div>
                                <h6>Leonardo Fellini</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Invoice #: <a href="#">0028</a></li>
                                    <li>Issued on: <span class="fw-semibold">01.06.2022</span></li>
                                </ul>
                            </div>

                            <div class="text-sm-end mt-3 mt-sm-0 ms-auto">
                                <h6>$8,750</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Method: <span class="fw-semibold">SWIFT</span></li>
                                    <li class="dropdown">
                                        Status: &nbsp;
                                        <a href="#" class="d-inline-flex align-items-center link-danger dropdown-toggle" data-bs-toggle="dropdown">Overdue</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item active">
                                                <i class="ph-warning-circle me-2"></i>
                                                Overdue
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-clock me-2"></i>
                                                Pending
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-check-circle me-2"></i>
                                                Paid
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-spinner-gap me-2"></i>
                                                On hold
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-x me-2"></i>
                                                Canceled
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                            <span class="badge badge-mark border-danger mr-2"></span>
                            Due:
                            <span class="fw-semibold">10.06.2022</span>
                        </div>

                        <div class="d-inline-flex">
                            <a href="#" class="text-body">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-3">
                                <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-printer me-2"></i>
                                        Print invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-plus me-2"></i>
                                        Edit invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-x me-2"></i>
                                        Remove invoice
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                            <div>
                                <h6>Rebecca Manes</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Invoice #: <a href="#">0027</a></li>
                                    <li>Issued on: <span class="fw-semibold">20.05.2022</span></li>
                                </ul>
                            </div>

                            <div class="text-sm-end mt-3 mt-sm-0 ms-auto">
                                <h6>$5,100</h6>
                                <ul class="list list-unstyled mb-0">
                                    <li>Method: <span class="fw-semibold">Paypal</span></li>
                                    <li class="dropdown">
                                        Status: &nbsp;
                                        <a href="#" class="d-inline-flex align-items-center link-success dropdown-toggle" data-bs-toggle="dropdown">Paid</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-warning-circle me-2"></i>
                                                Overdue
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-clock me-2"></i>
                                                Pending
                                            </a>
                                            <a href="#" class="dropdown-item active">
                                                <i class="ph-check-circle me-2"></i>
                                                Paid
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-spinner-gap me-2"></i>
                                                On hold
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-x me-2"></i>
                                                Canceled
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                            <span class="badge badge-mark border-danger mr-2"></span>
                            Due:
                            <span class="fw-semibold">14.06.2022</span>
                        </div>

                        <div class="d-inline-flex">
                            <a href="#" class="text-body">
                                <i class="ph-arrow-square-out"></i>
                            </a>
                            <div class="d-inline-flex dropdown ms-3">
                                <a href="#" class="d-inline-flex align-items-center text-body dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-printer me-2"></i>
                                        Print invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-arrow-down me-2"></i>
                                        Download invoice
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-plus me-2"></i>
                                        Edit invoice
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-x me-2"></i>
                                        Remove invoice
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /invoices -->


            <!-- Schedule -->
            <div class="timeline-row timeline-row-full">
                <div class="timeline-icon">
                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" alt="">
                </div>

                <div class="timeline-time">
                    <a href="#">Victoria's</a> schedule
                    <div class="text-muted">1 day ago</div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="mb-0">Anna's schedule</h6>
                        <div class="ms-auto">
                            <div class="d-inline-flex ms-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="my-schedule"></div>
                    </div>
                </div>
            </div>
            <!-- /schedule -->

        </div>
    </div>
    <!-- /timeline -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/timelines.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/tornado_negative_stack.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/timelines/daily_statistics.js')}}"></script>
@endsection
