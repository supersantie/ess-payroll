@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Conversation @endslot
@slot('subtitle') Options @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inside tabs -->
    <div class="mb-3">
        <h6 class="mb-0">Chat inside tabs</h6>
        <span class="text-muted">Place conversation inside tabs or pills</span>
    </div>

    <div class="card">
        <div class="nav-tabs-responsive">
            <ul class="nav nav-tabs nav-tabs-underline flex-nowrap text-nowrap mb-0">
                <li class="nav-item">
                    <a href="#james" class="nav-link active" data-bs-toggle="tab">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="fw-semibold">James</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#william" class="nav-link" data-bs-toggle="tab">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>
                        <span class="fw-semibold">William</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#jared" class="nav-link" data-bs-toggle="tab">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="fw-semibold">Jared</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#mark" class="nav-link" data-bs-toggle="tab">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>
                        <span class="fw-semibold">Mark</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body tab-content">
            <div class="tab-pane fade show active" id="james">
                <div class="media-chat-scrollable mb-3">
                    <div class="media-chat vstack gap-2">
                        <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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

                        <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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

            <div class="tab-pane fade" id="william">
                <div class="media-chat-scrollable mb-3">
                    <div class="media-chat vstack gap-2">
                        <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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
                                <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
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

            <div class="tab-pane fade" id="jared">
                <div class="media-chat-scrollable mb-3">
                    <div class="media-chat vstack gap-2">
                        <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
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

            <div class="tab-pane fade" id="mark">
                <div class="media-chat-scrollable mb-3">
                    <div class="media-chat vstack gap-2">
                        <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                            </div>
                        </div>

                        <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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
                                <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
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
    <!-- /inside tabs -->


    <!-- Inside accordion -->
    <div class="mb-3 py-2">
        <h6 class="mb-0">Chat inside accordion</h6>
        <span class="text-muted">Conversation inside collapsible or accordion</span>
    </div>

    <div class="card">
        <div class="accordion accordion-flush" id="chat_accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <a href="#chat_accordion_item1" class="accordion-button fw-semibold" data-bs-toggle="collapse">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="fw-semibold">James Dewalt</span>
                    </a>
                </h2>

                <div id="chat_accordion_item1" class="accordion-collapse collapse show" data-bs-parent="#chat_accordion">
                    <div class="accordion-body">
                        <div class="media-chat-scrollable mb-3">
                            <div class="media-chat vstack gap-2">
                                <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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

                                <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <a href="#chat_accordion_item2" class="accordion-button collapsed fw-semibold" data-bs-toggle="collapse">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>
                        <span class="fw-semibold">Monica Winslow</span>
                    </a>
                </h2>

                <div id="chat_accordion_item2" class="accordion-collapse collapse" data-bs-parent="#chat_accordion">
                    <div class="accordion-body">
                        <div class="media-chat-scrollable mb-3">
                            <div class="media-chat vstack gap-2">
                                <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-danger"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-danger"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-danger"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                        <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-danger"></span>
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

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <a href="#chat_accordion_item3" class="accordion-button collapsed fw-semibold" data-bs-toggle="collapse">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="fw-semibold">David Spark</span>
                    </a>
                </h2>

                <div id="chat_accordion_item3" class="accordion-collapse collapse" data-bs-parent="#chat_accordion">
                    <div class="accordion-body">
                        <div class="media-chat-scrollable mb-3">
                            <div class="media-chat vstack gap-2">
                                <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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
                                        <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                        <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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
                                        <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
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

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <a href="#chat_accordion_item4" class="accordion-button collapsed fw-semibold" data-bs-toggle="collapse">
                        <div class="status-indicator-container me-2">
                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>
                        <span class="fw-semibold">Mark Baker</span>
                    </a>
                </h2>

                <div id="chat_accordion_item4" class="accordion-collapse collapse" data-bs-parent="#chat_accordion">
                    <div class="accordion-body">
                        <div class="media-chat-scrollable mb-3">
                            <div class="media-chat vstack gap-2">
                                <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-warning"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
                                        <div class="fs-sm text-muted mt-2">Mon, 10:56 am</div>
                                    </div>
                                </div>

                                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-warning"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                                        <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

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
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-warning"></span>
                                    </a>

                                    <div>
                                        <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                        <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                                    </div>
                                </div>

                                <div class="content-divider justify-content-center text-muted mx-0">Today</div>

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
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                        <span class="status-indicator bg-warning"></span>
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
        </div>
    </div>
    <!-- /inside accordion -->


    <!-- Color options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Color options</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Chat bubbles support our background and text color utility classes, which means you can re-style them individually on-the-fly by simply adding color classes. Below you can see a few examples, just add <code>.bg-[color]</code> and <code>.text-white</code> classes to the base <code>media-chat-message</code> container. If you use additional elements such as links, images, icons or any other container, some minor color adjustments may be required.</p>

            <hr>

            <div class="media-chat vstack gap-2 mb-3">
                <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

                <div class="media-chat-item hstack align-items-start gap-3">
                    <a href="#" class="d-block status-indicator-container">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>

                    <div>
                        <div class="media-chat-message bg-secondary text-white">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
                        <div class="fs-sm text-muted mt-2">Tue, 10:28 am</div>
                    </div>
                </div>

                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                    <a href="#" class="d-block status-indicator-container">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>

                    <div>
                        <div class="media-chat-message bg-info text-white">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
                        <div class="fs-sm text-muted text-end mt-2">Mon, 10:24 am</div>
                    </div>
                </div>

                <div class="media-chat-item hstack align-items-start gap-3">
                    <a href="#" class="d-block status-indicator-container">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>

                    <div>
                        <div class="media-chat-message bg-danger text-white">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                        <div class="fs-sm text-muted mt-2">Wed, 4:20 pm</div>
                    </div>
                </div>

                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                    <a href="#" class="d-block status-indicator-container">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>

                    <div>
                        <div class="media-chat-message bg-teal text-white">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
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

                    <div>
                        <div class="media-chat-message bg-success text-white">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
                        <div class="fs-sm text-muted mt-2">Mon, 9:54 am</div>
                    </div>
                </div>

                <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                    <a href="#" class="d-block status-indicator-container">
                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>

                    <div>
                        <div class="media-chat-message bg-purple text-white">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
                        <div class="fs-sm text-muted text-end mt-2">Mon, 11:29 am</div>
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
    <!-- /color options -->

</div>
<!-- /content area -->

@endsection
