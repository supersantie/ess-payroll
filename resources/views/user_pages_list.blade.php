@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') User Pages @endslot
@slot('subtitle') User List @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Simple lists -->
    <div class="row">
        <div class="col-lg-6">

            <!-- Simple list -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Simple user list</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    <div class="list-group-item fw-semibold">Team leaders</div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">James Alexander</div>
                            <span class="text-muted">Development</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jeremy Victorino</div>
                            <span class="text-muted">Finances</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Margo Baker</div>
                            <span class="text-muted">Marketing</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-secondary"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Monica Smith</div>
                            <span class="text-muted">Design</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Office staff</div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Bastian Miller</div>
                            <span class="text-muted">Web dev</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jordana Mills</div>
                            <span class="text-muted">Sales consultant</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Buzz Brenson</div>
                            <span class="text-muted">UX expert</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Zachary Willson</div>
                            <span class="text-muted">Illustrator</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">William Miles</div>
                            <span class="text-muted">SEO expert</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Partners</div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Freddy Walden</div>
                            <span class="text-muted">Microsoft</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Dori Laperriere</div>
                            <span class="text-muted">Google</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Vanessa Aurelius</div>
                            <span class="text-muted">Facebook</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video" data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /simple list -->

        </div>

        <div class="col-lg-6">

            <!-- Dropdown list -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Dropdown list</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    <div class="list-group-item fw-semibold">Team leaders</div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">James Alexander</div>
                            <span class="text-muted">Development</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jeremy Victorino</div>
                            <span class="text-muted">Finances</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Margo Baker</div>
                            <span class="text-muted">Marketing</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Monica Smith</div>
                            <span class="text-muted">Design</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Office staff</div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-secondary"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Bastian Miller</div>
                            <span class="text-muted">Web dev</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jordana Mills</div>
                            <span class="text-muted">Sales consultant</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Buzz Brenson</div>
                            <span class="text-muted">UX expert</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Zachary Willson</div>
                            <span class="text-muted">Illustrator</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">William Miles</div>
                            <span class="text-muted">SEO expert</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Partners</div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Freddy Walden</div>
                            <span class="text-muted">Microsoft</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Dori Laperriere</div>
                            <span class="text-muted">Google</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">Vanessa Aurelius</div>
                            <span class="text-muted">Facebook</span>
                        </div>

                        <div class="d-flex align-self-center dropdown ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#call">
                                    <i class="ph-phone me-2"></i>
                                    Make a call
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#chat">
                                    <i class="ph-chats me-2"></i>
                                    Start chat
                                </a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#video">
                                    <i class="ph-video-camera me-2"></i>
                                    Video call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /dropdown list -->

        </div>
    </div>
    <!-- /simple lists -->


    <!-- Linked lists -->
    <div class="row">
        <div class="col-lg-6">

            <!-- List with text -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Linked list (text)</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    <div class="list-group-item fw-semibold">Team leaders</div>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">James Alexander</div>
                            <span class="text-muted">Development</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Vienna
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jeremy Victorino</div>
                            <span class="text-muted">Finances</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Mexico
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Margo Baker</div>
                            <span class="text-muted">Marketing</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Tokyo
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-secondary"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Monica Smith</div>
                            <span class="text-muted">Design</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                New York
                            </span>
                        </div>
                    </a>

                    <div class="list-group-item fw-semibold">Office staff</div>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Bastian Miller</div>
                            <span class="text-muted">Web dev</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Hamburg
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jordana Mills</div>
                            <span class="text-muted">Sales consultant</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Amsterdam
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Buzz Brenson</div>
                            <span class="text-muted">UX expert</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Madrid
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Zachary Willson</div>
                            <span class="text-muted">Illustrator</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Paris
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">William Miles</div>
                            <span class="text-muted">SEO expert</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Berlin
                            </span>
                        </div>
                    </a>

                    <div class="list-group-item fw-semibold">Partners</div>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Freddy Walden</div>
                            <span class="text-muted">Microsoft</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Palo Alto
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Dori Laperriere</div>
                            <span class="text-muted">Google</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                Dublin
                            </span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Vanessa Aurelius</div>
                            <span class="text-muted">Facebook</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="text-muted">
                                <i class="ph-map-pin me-1"></i>
                                London
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /list with text -->

        </div>

        <div class="col-lg-6">

            <!-- List with badges -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Linked list (badges)</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    <div class="list-group-item fw-semibold">Team leaders</div>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">James Alexander</div>
                            <span class="text-muted">Development</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-primary">Berlin</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jeremy Victorino</div>
                            <span class="text-muted">Finances</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-danger">Hague</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Margo Baker</div>
                            <span class="text-muted">Marketing</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-success">Munich</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-secondary"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Monica Smith</div>
                            <span class="text-muted">Design</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-indigo">Zurich</span>
                        </div>
                    </a>

                    <div class="list-group-item fw-semibold">Office staff</div>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Bastian Miller</div>
                            <span class="text-muted">Web dev</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-primary">Berlin</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Jordana Mills</div>
                            <span class="text-muted">Sales consultant</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-success">Munich</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Buzz Brenson</div>
                            <span class="text-muted">UX expert</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-indigo">Zurich</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Zachary Willson</div>
                            <span class="text-muted">Illustrator</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-indigo">Zurich</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">William Miles</div>
                            <span class="text-muted">SEO expert</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-success">Munich</span>
                        </div>
                    </a>

                    <div class="list-group-item fw-semibold">Partners</div>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Freddy Walden</div>
                            <span class="text-muted">Microsoft</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-primary">Berlin</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Dori Laperriere</div>
                            <span class="text-muted">Google</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-danger">Hague</span>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action hstack gap-3">
                        <div class="status-indicator-container">
                            <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">Vanessa Aurelius</div>
                            <span class="text-muted">Facebook</span>
                        </div>

                        <div class="align-self-center ms-3">
                            <span class="badge bg-primary">Berlin</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /list with badges -->

        </div>
    </div>
    <!-- /linked lists -->


    <!-- Collapsible lists -->
    <div class="row">
        <div class="col-lg-6">

            <!-- Collapsible list -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Collapsible list</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    <div class="list-group-item fw-semibold">Team leaders</div>

                    <div>
                        <a href="#james" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">James Alexander</div>
                                <span class="text-muted">Last.fm</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="james">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#jeremy" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Jeremy Victorino</div>
                                <span class="text-muted">Spotify</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="jeremy">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#margo" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Margo Baker</div>
                                <span class="text-muted">eBay</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="margo">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#monica" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-secondary"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Monica Smith</div>
                                <span class="text-muted">Amazon</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="monica">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Office staff</div>

                    <div>
                        <a href="#bastian" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Bastian Miller</div>
                                <span class="text-muted">Yahoo</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="bastian">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#jordana" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Jordana Mills</div>
                                <span class="text-muted">Paypal</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="jordana">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#buzz" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Buzz Brenson</div>
                                <span class="text-muted">Oracle</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="buzz">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#zachary" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-secondary"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Zachary Willson</div>
                                <span class="text-muted">Salesforce</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="zachary">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#william" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">William Miles</div>
                                <span class="text-muted">Bing</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="william">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Partners</div>

                    <div>
                        <a href="#freddy" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-secondary"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Freddy Walden</div>
                                <span class="text-muted">Microsoft</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="freddy">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#dori" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Dori Laperriere</div>
                                <span class="text-muted">Google</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="dori">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#vanessa" class="list-group-item list-group-item-action hstack gap-3 collapsed" data-bs-toggle="collapse">
                            <div class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </div>

                            <div class="flex-fill">
                                <div class="fw-semibold">Vanessa Aurelius</div>
                                <span class="text-muted">Facebook</span>
                            </div>

                            <div class="align-self-center ms-3">
                                <i class="ph-caret-down collapsible-indicator"></i>
                            </div>
                        </a>

                        <div class="collapse" id="vanessa">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /collapsible list -->

        </div>

        <div class="col-lg-6">

            <!-- Clickable handle -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Clickable handle</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    <div class="list-group-item fw-semibold">Team leaders</div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">James Alexander</a>
                                <div class="text-muted">Last.fm</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#james-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="james-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                <div class="text-muted">Spotify</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#jeremy-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="jeremy-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Margo Baker</a>
                                <div class="text-muted">eBay</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#margo-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="margo-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-secondary"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Monica Smith</a>
                                <div class="text-muted">Amazon</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#monica-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="monica-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Office staff</div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Bastian Miller</a>
                                <div class="text-muted">Yahoo</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#bastian-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="bastian-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Jordana Mills</a>
                                <div class="text-muted">Paypal</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#jordana-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="jordana-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Buzz Brenson</a>
                                <div class="text-muted">Oracle</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#buzz-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="buzz-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-secondary"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Zachary Willson</a>
                                <div class="text-muted">Salesforce</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#zachary-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="zachary-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">William Miles</a>
                                <div class="text-muted">Bing</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#william-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="william-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item fw-semibold">Partners</div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-secondary"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Freddy Walden</a>
                                <div class="text-muted">Microsoft</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#freddy-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="freddy-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Dori Laperriere</a>
                                <div class="text-muted">Google</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#dori-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="dori-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="list-group-item hstack gap-3">
                            <a href="#" class="status-indicator-container">
                                <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>

                            <div class="flex-fill">
                                <a href="#" class="fw-semibold">Vanessa Aurelius</a>
                                <div class="text-muted">Facebook</div>
                            </div>

                            <div class="align-self-center ms-3">
                                <a href="#vanessa-handle" class="text-body collapsed" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="vanessa-handle">
                            <div class="p-3">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="ph-map-pin me-2"></i> Amsterdam</li>
                                    <li><i class="ph-briefcase me-2"></i> Senior Designer</li>
                                    <li><i class="ph-phone me-2"></i> +1(800)431 8996</li>
                                    <li><i class="ph-at me-2"></i> <a href="#">james@alexander.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /clickable handle -->

        </div>
    </div>
    <!-- /collapsible lists -->

</div>
<!-- /content area -->

@endsection
