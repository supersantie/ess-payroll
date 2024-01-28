@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Conversation @endslot
@slot('subtitle') Layouts @endslot
@endcomponent

<!-- Content area -->
<div class="content">
    <div class="row">
        <div class="col-lg-6">

            <!-- Basic layout -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Default layout</h5>
                </div>

                <div class="card-body">
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
            <!-- /basic layout -->


            <!-- Display name -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Display name</h5>
                </div>

                <div class="card-body">
                    <div class="media-chat-scrollable mb-3">
                        <div class="media-chat vstack gap-3">
                            <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                            <div class="media-chat-item hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">Victoria</span>
                                            <span class="opacity-50 ms-2">Mon, 9:54 am</span>
                                        </div>
                                        Below mounted advantageous spread yikes bat stubbornly crud a and a excepting
                                    </div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">James</span>
                                            <span class="opacity-50 ms-2">Mon, 10:24 am</span>
                                        </div>
                                        Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.
                                    </div>
                                </div>
                            </div>

                            <div class="media-chat-item hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">Victoria</span>
                                            <span class="opacity-50 ms-2">Mon, 10:56 am</span>
                                        </div>
                                        Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.
                                    </div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">James</span>
                                            <span class="opacity-50 ms-2">Mon, 11:29 am</span>
                                        </div>
                                        Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever
                                    </div>
                                </div>
                            </div>

                            <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

                            <div class="media-chat-item hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">Victoria</span>
                                            <span class="opacity-50 ms-2">Tue, 10:28 am</span>
                                        </div>
                                        Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.
                                    </div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">James</span>
                                            <span class="opacity-50 ms-2">Tue, 8:12 am</span>
                                        </div>
                                        Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe
                                    </div>
                                </div>
                            </div>

                            <div class="content-divider justify-content-center text-muted mx-0">Today</div>

                            <div class="media-chat-item hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">Victoria</span>
                                            <span class="opacity-50 ms-2">Wed, 4:20 pm</span>
                                        </div>
                                        Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.
                                    </div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container mt-2">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div>
                                    <div class="media-chat-message">
                                        <div class="fs-sm lh-sm">
                                            <span class="fw-semibold">James</span>
                                            <span class="opacity-50 ms-2">
                                                <i class="ph-checks me-1"></i>
                                                2 hours ago
                                            </span>
                                        </div>
                                        Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.
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
            <!-- /display name -->


            <!-- No avatars -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">No avatars</h5>
                </div>

                <div class="card-body">
                    <div class="media-chat-scrollable mb-3">
                        <div class="media-chat vstack gap-3">
                            <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">Victoria</span>
                                        <span class="opacity-50 ms-2">Mon, 9:54 am</span>
                                    </div>
                                    Below mounted advantageous spread yikes bat stubbornly crud a and a excepting
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">James</span>
                                        <span class="opacity-50 ms-2">Mon, 10:24 am</span>
                                    </div>
                                    Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.
                                </div>
                            </div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">Victoria</span>
                                        <span class="opacity-50 ms-2">Mon, 10:56 am</span>
                                    </div>
                                    Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">James</span>
                                        <span class="opacity-50 ms-2">Mon, 11:29 am</span>
                                    </div>
                                    Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever
                                </div>
                            </div>

                            <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">Victoria</span>
                                        <span class="opacity-50 ms-2">Tue, 6:40 am</span>
                                    </div>
                                    Regardless equitably hello heron glum cassowary jocosely before reliably a jeepers wholehearted shuddered more that some where far by koala.
                                </div>
                            </div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">Victoria</span>
                                        <span class="opacity-50 ms-2">Tue, 10:28 am</span>
                                    </div>
                                    Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">James</span>
                                        <span class="opacity-50 ms-2">Tue, 8:12 am</span>
                                    </div>
                                    Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe
                                </div>
                            </div>

                            <div class="content-divider justify-content-center text-muted mx-0">Today</div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">Victoria</span>
                                        <span class="opacity-50 ms-2">Wed, 4:20 pm</span>
                                    </div>
                                    Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">
                                    <div class="fs-sm lh-sm">
                                        <span class="fw-semibold">James</span>
                                        <span class="opacity-50 ms-2">
                                            <i class="ph-checks me-1"></i>
                                            2 hours ago
                                        </span>
                                    </div>
                                    Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.
                                </div>
                            </div>

                            <div class="media-chat-item">
                                <div class="media-chat-message fs-sm">
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
            <!-- /no avatars -->

        </div>

        <div class="col-lg-6">

            <!-- Line content divider -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Line content divider</h5>
                </div>

                <div class="card-body">
                    <div class="media-chat-scrollable mb-3">
                        <div class="media-chat vstack gap-2">
                            <div class="content-divider justify-content-center text-muted mx-0">
                                <span class="px-2">Monday, Feb 10</span>
                            </div>

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

                            <div class="content-divider justify-content-center text-muted mx-0">
                                <span class="px-2">Yesterday</span>
                            </div>

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

                            <div class="content-divider justify-content-center text-muted mx-0">
                                <span class="px-2">Today</span>
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
            <!-- /line content divider -->


            <!-- Vertical orientation -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Vertical orientation</h5>
                </div>

                <div class="card-body">
                    <div class="media-chat-scrollable mb-3">
                        <div class="media-chat vstack gap-3">
                            <div class="content-divider justify-content-center text-muted mx-0">Monday, Feb 10</div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>

                                <div class="hstack gap-2 mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted">Mon, 9:54 am</div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>

                                <div class="hstack gap-2 flex-row-reverse mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted text-end">Mon, 10:24 am</div>
                                </div>
                            </div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>

                                <div class="hstack gap-2 mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted">Mon, 10:56 am</div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>

                                <div class="hstack gap-2 flex-row-reverse mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted text-end">Mon, 11:29 am</div>
                                </div>
                            </div>

                            <div class="content-divider justify-content-center text-muted mx-0">Yesterday</div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>

                                <div class="hstack gap-2 mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted">Tue, 10:28 am</div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>

                                <div class="hstack gap-2 flex-row-reverse mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted">Tue, 8:12 am</div>
                                </div>
                            </div>

                            <div class="content-divider justify-content-center text-muted mx-0">Today</div>

                            <div class="media-chat-item">
                                <div class="media-chat-message">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>

                                <div class="hstack gap-2 mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted">Wed, 4:20 pm</div>
                                </div>
                            </div>

                            <div class="media-chat-item media-chat-item-reverse">
                                <div class="media-chat-message">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>

                                <div class="hstack gap-2 flex-row-reverse mt-2">
                                    <a href="#" class="d-block status-indicator-container">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </a>
                                    <div class="fs-sm text-muted">
                                        <i class="ph-checks text-primary me-1"></i>
                                        2 hours ago
                                    </div>
                                </div>
                            </div>

                            <div class="media-chat-item hstack gap-2">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
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
            <!-- /vertical orientation -->


            <!-- Stacked layout -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Stacked layout</h5>
                </div>

                <div class="card-body">
                    <div class="media-chat-scrollable mb-3">
                        <div class="media-chat vstack gap-3">
                            <div class="text-muted">Monday, Feb 10</div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">Victoria Baker</a>
                                        <span class="text-muted fs-sm ms-2">Mon, 9:54 am</span>
                                    </div>
                                    Below mounted advantageous spread yikes bat stubbornly crud a and a excepting
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">James Alexander</a>
                                        <span class="text-muted fs-sm ms-2">Mon, 10:24 am</span>
                                    </div>
                                    Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">Victoria Baker</a>
                                        <span class="text-muted fs-sm ms-2">Mon, 10:56 am</span>
                                    </div>
                                    Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">James Alexander</a>
                                        <span class="text-muted fs-sm ms-2">Mon, 11:29 am</span>
                                    </div>
                                    Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever
                                </div>
                            </div>

                            <div class="text-muted">Yesterday</div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">Victoria Baker</a>
                                        <span class="text-muted fs-sm ms-2">Tue, 6:40 am</span>
                                    </div>
                                    Regardless equitably hello heron glum cassowary jocosely before reliably a jeepers wholehearted shuddered more that some where far by koala.
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">Victoria Baker</a>
                                        <span class="text-muted fs-sm ms-2">Tue, 10:28 am</span>
                                    </div>
                                    Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">James Alexander</a>
                                        <span class="text-muted fs-sm ms-2">Tue, 8:12 am</span>
                                    </div>
                                    Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe
                                </div>
                            </div>

                            <div class="text-muted">Today</div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">Victoria Baker</a>
                                        <span class="text-muted fs-sm ms-2">Wed, 4:20 pm</span>
                                    </div>
                                    Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
                                <a href="#" class="d-block status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>

                                <div class="flex-fill">
                                    <div>
                                        <a href="#" class="fw-semibold">Victoria Baker</a>
                                        <span class="text-muted fs-sm ms-2">
                                            <i class="ph-checks text-primary me-1"></i>
                                            2 hours ago
                                        </span>
                                    </div>
                                    Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey
                                </div>
                            </div>

                            <div class="hstack align-items-start gap-3">
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
            <!-- /stacked layout -->

        </div>
    </div>
</div>
<!-- /content area -->

@endsection
