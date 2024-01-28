@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Velocity @endslot
@slot('subtitle') UI effects @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic callouts -->
    <div class="mb-3">
        <h6 class="mb-0">
            Velocity callouts
        </h6>
        <span class="text-muted d-block">Basic animations using <code>velocity</code> UI pack</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Bounce</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-animation" data-animation="bounce">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce animation using <code>bounce</code> callout
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Swing</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-animation" data-animation="swing">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Swing animation using <code>swing</code> callout
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Shake</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-animation" data-animation="shake">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Shake animation using <code>shake</code> callout
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Tada</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-animation" data-animation="tada">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Tada animation using <code>tada</code> callout
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Flash</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-animation" data-animation="flash">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flash animation using <code>flash</code> callout
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Pulse</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-animation" data-animation="pulse">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Pulse animation using <code>pulse</code> callout
                </div>
            </div>
        </div>
    </div>
    <!-- /basic callouts -->


    <!-- Basic transitions -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Basic transitions
        </h6>
        <span class="text-muted d-block">Basic transitions of <code>velocity</code> UI pack</span>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="fadeIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In animation using <code>fadeIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="fadeOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out animation using <code>fadeOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SwoopIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="swoopIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Swoop In animation using <code>swoopIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SwoopOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="swoopOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Swoop Out animation using <code>swoopOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">WhirlIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="whirlIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Whirl In animation using <code>whirlIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">WhirlOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="whirlOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Whirl Out animation using <code>whirlOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ShrinkIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="shrinkIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Shrink In animation using <code>shrinkIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ShrinkOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="shrinkOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Shrink Out animation using <code>shrinkOut</code> transition
                </div>
            </div>
        </div>
    </div>
    <!-- /basic transitions -->


    <!-- Bounce transitions -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Bounce transitions
        </h6>
        <span class="text-muted d-block">Set of In and Out <code>bounce</code> transitions</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce In animation using <code>bounceIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Out animation using <code>bounceOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceUpIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceUpIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Up In animation using <code>bounceUpIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceUpOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceUpOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Up Out animation using <code>bounceUpOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceDownIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceDownIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Down In animation using <code>bounceDownIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceDownOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceDownOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Down Out animation using <code>bounceDownOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceLeftIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceLeftIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Left In animation using <code>bounceLeftIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceLeftOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceLeftOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Left Out animation using <code>bounceLeftOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceRightIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceRightIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Right In animation using <code>bounceRightIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceRightOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="bounceRightOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Right Out animation using <code>bounceRightOut</code> transition
                </div>
            </div>
        </div>
    </div>
    <!-- /bounce transitions -->


    <!-- Slide transitions -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Slide transitions
        </h6>
        <span class="text-muted d-block">Set of In and Out <code>slide</code> transitions</span>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideUpIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideUpIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Up In animation using <code>slideUpIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideUpOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideUpOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Up Out animation using <code>slideUpOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideUpBigIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideUpBigIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Up Big In animation using <code>slideUpBigIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideUpBigOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideUpBigOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Up Big Out animation using <code>slideUpBigOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideDownIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideDownIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Down In animation using <code>slideDownIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideDownOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideDownOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Down Out animation using <code>slideDownOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideDownBigIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideDownBigIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Down Big In animation using <code>slideDownBigIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideDownBigOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideDownBigOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Down Big Out animation using <code>slideDownBigOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideLeftIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideLeftIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Left In animation using <code>slideLeftIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideLeftOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideLeftOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Left Out animation using <code>slideLeftOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideLeftBigIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideLeftBigIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Left Big In animation using <code>slideLeftBigIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideLeftBigOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideLeftBigOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Left Big Out animation using <code>slideLeftBigOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideRightIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideRightIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Right In animation using <code>slideRightIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideRightOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideRightOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Right Out animation using <code>slideRightOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideRightBigIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideRightBigIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Right Big In animation using <code>slideRightBigIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">SlideRightBigOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="slideRightBigOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Slide Right Big Out animation using <code>slideRightBigOut</code> transition
                </div>
            </div>
        </div>
    </div>
    <!-- /slide transitions -->


    <!-- Perspective transitions -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Perspective transitions
        </h6>
        <span class="text-muted d-block">Set of In and Out <code>perspective</code> transitions</span>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveUpIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveUpIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Up In animation using <code>perspectiveUpIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveUpOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveUpOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Up Out animation using <code>perspectiveUpOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveDownIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveDownIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Down In animation using <code>perspectiveDownIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveDownOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveDownOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Down Out animation using <code>perspectiveDownOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveLeftIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveLeftIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Left In animation using <code>perspectiveLeftIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveLeftOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveLeftOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Left Out animation using <code>perspectiveLeftOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveRightIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveRightIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Right In animation using <code>perspectiveRightIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">PerspectiveRightOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="perspectiveRightOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Perspective Right Out animation using <code>perspectiveRightOut</code> transition
                </div>
            </div>
        </div>
    </div>
    <!-- /perspective transitions -->


    <!-- Flip transitions -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Flip transitions
        </h6>
        <span class="text-muted d-block">Set of In and Out <code>flip</code> transitions</span>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipXIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipXIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip X In animation using <code>flipXIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipXOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipXOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip X Out animation using <code>flipXOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipYIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipYIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Y In animation using <code>flipYIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipYOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipYOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Y Out animation using <code>flipYOut</code> transition
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipBounceXIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipBounceXIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Bounce X In animation using <code>flipBounceXIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipBounceXOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipBounceXOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Bounce X Out animation using <code>flipBounceXOut</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipBounceYIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipBounceYIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Bounce Y In animation using <code>flipBounceYIn</code> transition
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipBounceYOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body velocity-transition" data-transition="flipBounceYOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Bounce Y Out animation using <code>flipBounceYOut</code> transition
                </div>
            </div>
        </div>
    </div>
    <!-- /flip transitions -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/velocity/velocity.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/velocity/velocity.ui.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/animations_velocity_ui.js')}}"></script>
@endsection
