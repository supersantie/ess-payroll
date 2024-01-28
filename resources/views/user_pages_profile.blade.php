@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') User Pages @endslot
@slot('subtitle') Profile @endslot
@endcomponent

<!-- Content area -->
<div class="content">
    <div class="tab-content flex-1 order-2 order-lg-1">
        <div class="tab-pane fade active show" id="activity">

            <!-- Weekly stats -->
            <div class="card">
                <div class="card-header d-sm-flex">
                    <h5 class="mb-0">Weekly statistics</h5>
                    <div class="mt-2 mt-sm-0 ms-auto">
                        <span>
                            <i class="ph-clock-counter-clockwise me-1"></i>
                            Updated 2 hours ago
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="tornado_negative_stack"></div>
                    </div>
                </div>
            </div>
            <!-- /weekly stats -->


            <!-- Blog posts -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-sm-flex">
                            <h5 class="mb-0">Himalayan sunset</h5>
                            <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                <span class="text-muted">49 minutes ago</span>
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

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-sm-flex">
                            <h5 class="mb-0">Behind the word mountains</h5>
                            <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                <span class="text-muted">2 hours ago</span>
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
                                <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/cover.jpg')}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="blog_single" class="btn btn-outline-white btn-icon rounded-pill">
                                        <i class="ph-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h6 class="mb-3">
                                <i class="ph-chats me-2"></i>
                                <a href="#">Tim Smith</a> commented:
                            </h6>

                            <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                                <p class="mb-2 fs-base">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                <footer class="blockquote-footer">Mark, <cite title="Source Title">12:58 pm</cite></footer>
                            </blockquote>
                        </div>

                        <div class="card-body d-flex justify-content-between align-items-center pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-eye me-2"></i> 589</a></li>
                                <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-chats me-2"></i> 54</a></li>
                            </ul>

                            <a href="#" class="d-inline-block">Read post</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /blog posts -->


            <!-- Conversation -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="mb-0">Conversation with James</h5>
                    <div class="ms-auto">
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
            <!-- /conversation -->


            <!-- Video posts -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-sm-flex">
                            <h5 class="mb-0">Peru mountains</h5>
                            <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                <span class="text-muted">Today, 8:39 am</span>
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

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-sm-flex">
                            <h5 class="mb-0">Woodturner master</h5>
                            <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                <span class="text-muted">Yesterday, 7:52 am</span>
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
                            <p class="mb-3">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.</p>

                            <div class="ratio ratio-16x9">
                                <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /video posts -->

        </div>

        <div class="tab-pane fade" id="schedule">

            <!-- Available hours -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Available hours</h5>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="available_hours"></div>
                    </div>
                </div>
            </div>
            <!-- /available hours -->


            <!-- Schedule -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">My schedule</h5>
                </div>

                <div class="card-body">
                    <div class="my-schedule"></div>
                </div>
            </div>
            <!-- /schedule -->

        </div>

        <div class="tab-pane fade" id="settings">

            <!-- Profile info -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Profile information</h5>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" value="Victoria" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Full name</label>
                                    <input type="text" value="Smith" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Address line 1</label>
                                    <input type="text" value="Ring street 12" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Address line 2</label>
                                    <input type="text" value="building D, flat #67" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" value="Munich" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">State/Province</label>
                                    <input type="text" value="Bayern" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">ZIP code</label>
                                    <input type="text" value="1031" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" readonly="readonly" value="victoria@smith.com" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your country</label>
                                    <select class="form-select">
                                        <option value="germany" selected>Germany</option>
                                        <option value="france">France</option>
                                        <option value="spain">Spain</option>
                                        <option value="netherlands">Netherlands</option>
                                        <option value="other">...</option>
                                        <option value="uk">United Kingdom</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone #</label>
                                    <input type="text" value="+99-99-9999-9999" class="form-control">
                                    <div class="form-text text-muted">+99-99-9999-9999</div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Upload profile image</label>
                                    <input type="file" class="form-control">
                                    <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /profile info -->


            <!-- Account settings -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Account settings</h5>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" value="Vicky" readonly class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Current password</label>
                                    <input type="password" value="password" readonly class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">New password</label>
                                    <input type="password" placeholder="Enter new password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Repeat password</label>
                                    <input type="password" placeholder="Repeat new password" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Profile visibility</label>

                                    <label class="form-check mb-2">
                                        <input type="radio" name="visibility" class="form-check-input" checked>
                                        <span class="form-check-label">Visible to everyone</span>
                                    </label>

                                    <label class="form-check mb-2">
                                        <input type="radio" name="visibility" class="form-check-input">
                                        <span class="form-check-label">Visible to friends only</span>
                                    </label>

                                    <label class="form-check mb-2">
                                        <input type="radio" name="visibility" class="form-check-input">
                                        <span class="form-check-label">Visible to my connections only</span>
                                    </label>

                                    <label class="form-check">
                                        <input type="radio" name="visibility" class="form-check-input">
                                        <span class="form-check-label">Visible to my colleagues only</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Notifications</label>

                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" checked>
                                        <span class="form-check-label">Password expiration notification</span>
                                    </label>

                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" checked>
                                        <span class="form-check-label">New message notification</span>
                                    </label>

                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" checked>
                                        <span class="form-check-label">New task notification</span>
                                    </label>

                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="form-check-label">New contact request notification</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /account settings -->

        </div>
    </div>
</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/user_pages_profile.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/echarts/bars/tornado_negative_stack.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/profile/balance_stats.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/profile/available_hours.js')}}"></script>
@endsection
