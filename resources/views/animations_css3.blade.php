@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('title') Animations @endslot
@slot('subtitle') CSS Animations @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Attention seekers -->
    <div class="mb-3">
        <h6 class="mb-0">
            Attention seekers
        </h6>
        <span class="text-muted d-block">Basic animations using <code>animate.css</code></span>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Bounce</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounce">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce animation using <code>bounce</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Shake</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="shake">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Shake animation using <code>shake</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Flash</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="flash">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flash animation using <code>flash</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Swing</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="swing">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Swing animation using <code>swing</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Pulse</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="pulse">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Pulse animation using <code>pulse</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Tada</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="tada">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Tada animation using <code>tada</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Rubberband</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rubberBand">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rubberband animation using <code>rubberBand</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Wobble</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="wobble">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Wobble animation using <code>wobble</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /attention seekers -->


    <!-- Bouncing entrances -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Bouncing entrances
        </h6>
        <span class="text-muted d-block">Entrance options for <code>bounce</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceInLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceInLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce In Left animation using <code>bounceInLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce In animation using <code>bounceIn</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceInRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceInRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce In Right animation using <code>bounceInRight</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceInUp</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceInUp">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce In Up animation using <code>bounceInUp</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceInDown</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceInDown">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce In Down animation using <code>bounceInDown</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /bouncing entrances -->


    <!-- Bouncing exits -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Bouncing exits
        </h6>
        <span class="text-muted d-block">Exit options for <code>bounce</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceOutLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceOutLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Out Left animation using <code>bounceOutLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Out animation using <code>bounceOut</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceOutRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceOutRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Out Right animation using <code>bounceOutRight</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceOutUp</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceOutUp">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Out Up animation using <code>bounceOutUp</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">BounceOutDown</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="bounceOutDown">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Bounce Out Down animation using <code>bounceOutDown</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /bouncing exits -->


    <!-- Fading entrances -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Fading entrances
        </h6>
        <span class="text-muted d-block">Entrance options for <code>fade</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In animation using <code>fadeIn</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Left animation using <code>fadeInLeft</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Right animation using <code>fadeInRight</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInDown</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInDown">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Down animation using <code>fadeInDown</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInLeftBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInLeftBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Left Big animation using <code>fadeInLeftBig</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInRightBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInRightBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Right Big animation using <code>fadeInRightBig</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInDownBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInDownBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Down Big animation using <code>fadeInDownBig</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInUp</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInUp">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Up animation using <code>fadeInUp</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeInUpBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeInUpBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade In Up Big animation using <code>fadeInUpBig</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /fading entrances -->


    <!-- Fading exits -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Fading exits
        </h6>
        <span class="text-muted d-block">Exit options for <code>fade</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out animation using <code>fadeOut</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Left animation using <code>fadeOutLeft</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Right animation using <code>fadeOutRight</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutDown</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutDown">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Down animation using <code>fadeOutDown</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutLeftBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutLeftBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Left Big animation using <code>fadeOutLeftBig</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutRightBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutRightBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Right Big animation using <code>fadeOutRightBig</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutDownBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutDownBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Down Big animation using <code>fadeOutDownBig</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutUp</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutUp">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Up animation using <code>fadeOutUp</code> class
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FadeOutUpBig</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="fadeOutUpBig">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Fade Out Up Big animation using <code>fadeOutUpBig</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /fading exits -->


    <!-- Flippers -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Flip animations
        </h6>
        <span class="text-muted d-block">Options for <code>flip</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipInX</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="flipInX">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip In X animation using <code>flipInX</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Flip</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="flip">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip animation using <code>flip</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipInY</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="flipInY">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip In Y animation using <code>flipInY</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipOutX</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="flipOutX">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Out X animation using <code>flipOutX</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">FlipOutY</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="flipOutY">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Flip Out Y animation using <code>flipOutY</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /flippers -->


    <!-- Lightspeed -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Lightspeed animations
        </h6>
        <span class="text-muted d-block">Options for <code>light speed</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">LightSpeedIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="lightSpeedIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Light Speed In animation using <code>lightSpeedIn</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">LightSpeedOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="lightSpeedOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Light Speed Out animation using <code>lightSpeedOut</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /lightspeed -->


    <!-- Rotating entrances -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Rotating entrances
        </h6>
        <span class="text-muted d-block">Entrance options for <code>rotate</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateInDownLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateInDownLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate In Down Left animation using <code>rotateInDownLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate In animation using <code>rotateIn</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateInDownRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateInDownRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate In Down Right animation using <code>rotateInDownRight</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateInUpLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateInUpLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate In Up Left animation using <code>rotateInUpLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateInUpRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateInUpRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate In Up Right animation using <code>rotateInUpRight</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /rotating entrances -->


    <!-- Rotating exits -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Rotating exits
        </h6>
        <span class="text-muted d-block">Exit options for <code>rotate</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateOutDownLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateOutDownLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate Out Down Left animation using <code>rotateOutDownLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate Out animation using <code>rotateOut</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateOutDownRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateOutDownRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate Out Down Right animation using <code>rotateOutDownRight</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateOutUpLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateOutUpLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate Out Up Left animation using <code>rotateOutUpLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RotateOutUpRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rotateOutUpRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Rotate Out Up Right animation using <code>rotateOutUpRight</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /rotating exits -->


    <!-- Special animations -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Special animations
        </h6>
        <span class="text-muted d-block">Options for <code>special</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RollIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rollIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Roll In animation using <code>rollIn</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">Hinge</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="hinge">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Hinge animation using <code>hinge</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">RollOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="rollOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Roll Out animation using <code>rollOut</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /special animations -->


    <!-- Zoom entrances -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Zoom entrances
        </h6>
        <span class="text-muted d-block">Entrance options for <code>zoom</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomInLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomInLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom In Left animation using <code>zoomInLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomIn</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomIn">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom In animation using <code>zoomIn</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomInRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomInRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom In Right animation using <code>zoomInRight</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomInUp</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomInUp">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom In Up animation using <code>zoomInUp</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomInDown</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomInDown">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom In Down animation using <code>zoomInDown</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /zoom entrances -->


    <!-- Zoom exits -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Zoom exits
        </h6>
        <span class="text-muted d-block">Exit options for <code>zoom</code> animations</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomOutLeft</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomOutLeft">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom Out Left animation using <code>zoomOutLeft</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomOut</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomOut">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom Out animation using <code>zoomOut</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomOutRight</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomOutRight">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom Out Right animation using <code>zoomOutRight</code> class
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomOutUp</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomOutUp">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom Out Up animation using <code>zoomOutUp</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h6 class="mb-0">ZoomOutDown</h6>
                    <div class="ms-auto">
                        <a href="#" class="text-body animation" data-animation="zoomOutDown">
                            <i class="ph-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    Zoom Out Down animation using <code>zoomOutDown</code> class
                </div>
            </div>
        </div>
    </div>
    <!-- /zoom exits -->

</div>
<!-- /content area -->

@endsection
@section('scripts')
<!-- Theme JS files -->
<script src="{{URL::asset('assets/demo/pages/animations_css3.js')}}"></script>

@endsection
