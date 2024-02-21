@extends('layouts.ess-master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('subtitle')
            Welcome to Workfolio ESS
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <!-- Widgets list -->
        <div class="row">
            <div class="col-lg-6 col-xl-3">

                <!-- User details (with sample pattern) -->
                <div class="card">
                    <div class="card-body bg-primary text-white text-center card-img-top"
                        style="background-image: url(assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="{{ URL::asset('assets/images/demo/users/face6.jpg') }}"
                                width="170" height="170" alt="">
                            <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-plus"></i>
                                </a>
                                <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                    <i class="ph-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="mb-0">{{ session('info')->first_name . ' ' . session('info')->last_name }}</h6>
                        <span class="opacity-75">Head of UX</span>

                        <ul class="list-inline list-inline-condensed mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-github-logo"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-twitter-logo"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-gitlab-logo"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body border-top-0">
                        <div class="d-sm-flex flex-sm-wrap mb-3">
                            <div class="fw-semibold">Full name:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0">Victoria Anna Davidson</div>
                        </div>

                        <div class="d-sm-flex flex-sm-wrap mb-3">
                            <div class="fw-semibold">Phone number:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0">+3630 8911837</div>
                        </div>

                        <div class="d-sm-flex flex-sm-wrap mb-3">
                            <div class="fw-semibold">Corporate Email:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0"><a href="#">corporate@domain.com</a></div>
                        </div>

                        <div class="d-sm-flex flex-sm-wrap">
                            <div class="fw-semibold">Personal Email:</div>
                            <div class="ms-sm-auto mt-1 mt-sm-0"><a href="#">personal@domain.com</a></div>
                        </div>
                    </div>
                </div>
                <!-- /user details (with sample pattern) -->


                <!-- List of latest updates -->
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Latest updates</h5>

                        <div class="ms-auto">
                            <a href="#">All updates</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                    <i class="ph-arrow-clockwise"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <a href="#">David Linner</a> requested refund for a double card charge
                                <div class="text-muted fs-sm">12 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-secondary bg-opacity-10 text-secondary lh-1 rounded-pill p-2">
                                    <i class="ph-infinity"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                User <a href="#">Christopher Wallace</a> is awaiting for staff reply
                                <div class="text-muted fs-sm">16 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                    <i class="ph-money"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                All sellers have received monthly payouts
                                <div class="text-muted fs-sm">4 hours ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-danger bg-opacity-10 text-danger lh-1 rounded-pill p-2">
                                    <i class="ph-check"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                Ticket #43683 has been closed by <a href="#">Victoria Wilson</a>
                                <div class="text-muted fs-sm">Apr 28, 21:39</div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3">
                                <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                    <i class="ph-chats"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <a href="#">Beatrix Diaz</a> left a new feedback for Camo backpack
                                <div class="text-muted fs-sm">Mar 30, 05:46</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /list of latest updates -->


            </div>

            <div class="col-lg-6 col-xl-3">


                <!-- Colored info widget -->
                <div class="card card-body bg-pink text-white"
                    style="background-image: url(assets/images/backgrounds/panel_bg.png);">
                    <div class="d-flex">
                        <div class="me-3 align-self-center">
                            <i class="ph-wave-sine ph-2x"></i>
                        </div>

                        <div class="flex-fill text-end">
                            <h6 class="mb-0">Employee Self Service</h6>
                            <span class="opacity-75">Empower Your Workflow, Simplify Success!</span>
                        </div>
                    </div>
                </div>
                <!-- /colored info widget -->



                <!-- Share your thoughts -->
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Report a problem</h5>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <textarea name="enter-message" class="form-control mb-3" rows="3" cols="1"
                                placeholder="Enter your message..."></textarea>

                            <div class="d-flex align-items-center">
                                <div>
                                    <a href="#"
                                        class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1"
                                        data-bs-popup="tooltip" title="" data-bs-original-title="Formatting">
                                        <i class="ph-text-aa"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1"
                                        data-bs-popup="tooltip" title="" data-bs-original-title="Emoji">
                                        <i class="ph-smiley"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1"
                                        data-bs-popup="tooltip" title="" data-bs-original-title="Send file">
                                        <i class="ph-paperclip"></i>
                                    </a>
                                </div>

                                <button type="button" class="btn btn-primary ms-auto">
                                    Submit
                                    <i class="ph-paper-plane-tilt ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /share your thoughts -->


                <!-- Simple stats with thumbnail -->
                <div class="card">
                    <a href="#" class="d-block mx-1 mt-1">
                        <img src="{{ URL::asset('assets/images/demo/flat/19.png') }}" class="img-fluid card-img"
                            alt="">
                    </a>

                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">2,345</h5>
                                <span class="text-muted fs-sm">today</span>
                            </div>

                            <div class="col-4">
                                <h5 class="mb-0">3,568</h5>
                                <span class="text-muted fs-sm">this week</span>
                            </div>

                            <div class="col-4">
                                <h5 class="mb-0">32,693</h5>
                                <span class="text-muted fs-sm">overall</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /simple stats with thumbnail -->

                <!-- Messages widget -->
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Notifications</h5>

                        <div class="ms-auto">
                            <a href="#" class="text-body">
                                <i class="ph-gear"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3 position-relative">
                                <img src="{{ URL::asset('assets/images/demo/users/face10.jpg') }}" class="rounded-circle"
                                    width="40" jeight="40" alt="">
                                <span
                                    class="badge bg-primary position-absolute top-0 start-100 translate-middle rounded-pill">5</span>
                            </div>

                            <div class="flex-fill">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-semibold"><a href="#">James Alexander</a></div>
                                    <span class="fs-sm text-muted">14:58</span>
                                </div>

                                Who knows, maybe that would be the best thing for me...
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3 position-relative">
                                <img src="{{ URL::asset('assets/images/demo/users/face3.jpg') }}" class="rounded-circle"
                                    width="40" jeight="40" alt="">
                                <span
                                    class="badge bg-primary position-absolute top-0 start-100 translate-middle rounded-pill">4</span>
                            </div>

                            <div class="flex-fill">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-semibold"><a href="#">Margo Baker</a></div>
                                    <span class="fs-sm text-muted">12:16</span>
                                </div>

                                That was something he was unable to do because...
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3">
                                <img src="{{ URL::asset('assets/images/demo/users/face24.jpg') }}" class="rounded-circle"
                                    width="40" jeight="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-semibold"><a href="#">Jeremy Victorino</a></div>
                                    <span class="fs-sm text-muted">22:48</span>
                                </div>

                                But that would be extremely strained and suspicious...
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <img src="{{ URL::asset('assets/images/demo/users/face4.jpg') }}" class="rounded-circle"
                                    width="40" jeight="40" alt="">
                            </div>

                            <div class="flex-fill">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-semibold"><a href="#">Beatrix Diaz</a></div>
                                    <span class="fs-sm text-muted">Tue</span>
                                </div>

                                What a strenuous career it is that I've chosen...
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /messages widget -->


            </div>

            <div class="col-lg-6 col-xl-3">

                <div class="card">
                    <div class="card-body text-center">
                        <i class="ph-angular-logo ph-3x text-danger mt-1 mb-3"></i>
                        <h6>Angular</h6>
                        <p class="mb-3">Inanimately alongside candidly much and jeez conductively hid submissively
                            hatchet</p>
                        <a href="#">Read more &rarr;</a>
                    </div>
                </div>


                <!-- Upload file widget -->
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="mb-0">Upload file</h6>

                        <div class="ms-auto">
                            <a href="#" class="text-body">
                                <i class="ph-gear"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <input type="file" class="form-control">
                        <div class="form-text">Accepted formats: gif, png, jpg</div>
                    </div>
                </div>
                <!-- /upload widget -->

                <!-- List of files -->
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="mb-0">
                            <i class="ph-folder me-2"></i>
                            My files
                        </h5>

                        <div class="ms-auto">
                            <span class="text-muted">(93)</span>
                        </div>
                    </div>

                    <div class="list-group list-group-borderless py-2">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="ph-file-pdf me-3"></i>
                            Hello_exotic_staunch.pdf <span class="badge bg-success ms-auto">New</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="ph-file-doc me-3"></i>
                            That_well_ecstatically.docx
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="ph-file-csv me-3"></i>
                            Shared_coast_concurrent.csv
                            <span class="badge badge-secondary ml-auto">Draft</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="ph-file-doc me-3"></i>
                            Into_intrepid_belated.docx
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="ph-arrow-right me-3"></i>
                            Show all files (93)
                        </a>
                    </div>
                </div>
                <!-- /list of files -->

                <!-- Widget with rounded icon -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="d-inline-flex bg-success bg-opacity-10 text-success rounded-pill p-2 mb-3 mt-1">
                            <i class="ph-book ph-2x m-1"></i>
                        </div>
                        <h5 class="card-title">Knowledge Base</h5>
                        <p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far
                            inanimately alongside candidly much and jeez</p>
                        <a href="#" class="btn btn-success mb-1">Browse articles</a>
                    </div>
                </div>
                <!-- /widget with rounded icon -->
            </div>

            <div class="col-lg-6 col-xl-3">

                <!-- Inline user card -->
                <div class="card card-body flex-row">
                    <a href="#" class="me-3">
                        <img src="{{ URL::asset('assets/images/demo/users/face8.jpg') }}" class="rounded-circle"
                            width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">William Brenson</h6>
                        <span class="text-muted">Chief officer</span>
                    </div>

                    <div class="dropdown align-self-center ms-3">
                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                            <i class="ph-list"></i>
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
                                <i class="ph-chart-line me-2"></i>
                                Statistics
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /inline user card -->


                <!-- Seamless vertical button group -->
                <div class="mb-3">
                    <div class="row row-tile g-0">
                        <div class="col">
                            <a href="{{ route('ess.tna.capture') }}" role="button"
                                class="btn btn-light w-100 flex-column rounded-0 rounded-top-start py-2">
                                <i class="ph-calendar-check text-primary ph-2x mb-1"></i>
                                Time & Attendance
                            </a>

                            <button type="button"
                                class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-start py-2">
                                <i class="ph-spinner-gap text-info ph-2x mb-1"></i>
                                File a Request
                            </button>
                        </div>

                        <div class="col">
                            <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-top-end py-2">
                                <i class="ph-receipt text-pink ph-2x mb-1"></i>
                                My Payslips
                            </button>

                            <button type="button"
                                class="btn btn-light w-100 flex-column rounded-0 rounded-bottom-end py-2">
                                <i class="ph-kanban text-success ph-2x mb-1"></i>
                                My Tasks
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /seamless vertical button group -->


                <!-- Seamless horizontal button group -->
                <div class="mb-3">
                    <div class="d-flex btn-group">
                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-start py-2">
                            <i class="ph-microsoft-teams-logo text-purple ph-2x mb-1"></i>
                            Teams
                        </button>

                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 py-2">
                            <i class="ph-behance-logo text-primary ph-2x mb-1"></i>
                            Behance
                        </button>

                        <button type="button" class="btn btn-light w-100 flex-column rounded-0 rounded-end py-2">
                            <i class="ph-youtube-logo text-danger ph-2x mb-1"></i>
                            Youtube
                        </button>
                    </div>
                </div>
                <!-- /seamless horizontal button group -->


                <!-- My tasks -->
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">My Tasks</h5>

                        <div class="ms-auto">
                            <span class="badge bg-indigo">43 new</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <input type="checkbox" class="form-check-input" id="task1" checked>
                            </div>

                            <div class="flex-fill">
                                <h6 class="mb-0">
                                    <label for="task1" class="fw-semibold cursor-pointer mb-0">Resplendent much
                                        during</label>
                                </h6>

                                Urchin that understood yikes special ladybug that
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <input type="checkbox" class="form-check-input" id="task2">
                            </div>

                            <div class="flex-fill">
                                <h6 class="mb-0">
                                    <label for="task2" class="fw-semibold cursor-pointer mb-0">Insect far hound</label>
                                </h6>

                                Hey where more that much meanly shivered salamander
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <input type="checkbox" class="form-check-input" id="task3">
                            </div>

                            <div class="flex-fill">
                                <h6 class="mb-0">
                                    <label for="task3" class="fw-semibold cursor-pointer mb-0">The him father
                                        parish</label>
                                </h6>

                                Reran sincere said monkey one slapped jeepers
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <a href="#">View completed tasks (16)</a>
                        </div>

                        <div class="form-control form-control-content mb-3" contenteditable=""
                            data-placeholder="Type your comment..."></div>

                        <div class="d-flex align-items-center">
                            <div>
                                <a href="#"
                                    class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1"
                                    data-bs-popup="tooltip" title="" data-bs-original-title="Formatting">
                                    <i class="ph-text-aa"></i>
                                </a>
                                <a href="#"
                                    class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1"
                                    data-bs-popup="tooltip" title="" data-bs-original-title="Emoji">
                                    <i class="ph-smiley"></i>
                                </a>
                                <a href="#"
                                    class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1"
                                    data-bs-popup="tooltip" title="" data-bs-original-title="Send file">
                                    <i class="ph-paperclip"></i>
                                </a>
                            </div>

                            <button type="button" class="btn btn-primary ms-auto">Create task</button>
                        </div>
                    </div>
                </div>
                <!-- /my tasks -->
            </div>
        </div>
        <!-- /widgets list -->

    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/uploaders/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/pickers/datepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/charts/pages/widgets_content.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#modalId').on('shown.bs.modal', function() {
                const videoElement = $('#video')[0]; // Get the video element using jQuery

                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(function(stream) {
                        videoElement.srcObject = stream;
                    })
                    .catch(function(error) {
                        console.error('Error accessing the camera:', error);
                    });
            });

            $('#modalId').on('hidden.bs.modal', function() {
                const videoElement = $('#video')[0];
                const stream = videoElement.srcObject;
                if (stream) {
                    const tracks = stream.getTracks();
                    tracks.forEach(track => track.stop());
                    videoElement.srcObject = null;
                }
            });
        });
    </script>
@endsection
