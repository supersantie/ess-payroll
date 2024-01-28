@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Velocity @endslot
@slot('subtitle') Advanced Examples @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Properties -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Properties map</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Velocity auto-prefixes properties (e.g. transform becomes webkit-transform on WebKit browsers); do not prefix properties yourself. Velocity animates one numeric value per property. Hence, you can pass in: <code>{ padding: 1 }</code> or <code>{ paddingLeft: 1, paddingRight: 1 }</code>. But you cannot pass in <code>{ padding: "1 1 1 1" }</code> because you're providing multiple numeric values.<br>
                Velocity supports the <code>px</code>, <code>em</code>, <code>rem</code>, <code>%</code>, <code>deg</code>, and <code>vw/vh</code> units. If you do not provide a unit, an appropriate one is automatically assigned — usually <code>px</code>, but <code>deg</code> in the case of rotateZ for example. Velocity supports four value operators: <code>+</code>, <code>-</code>, <code>*</code>, and <code>/</code>. You may suffix an equals sign onto any one of them to perform relative math operations.</p>

            <p>
                <a href="#" class="velocity-properties fw-semibold">
                    <i class="ph-play-circle me-2"></i>
                    Run animation
                </a>
            </p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Card 1</h6>
                        </div>

                        <div class="card-body">
                            Card 1 content
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Card 2</h6>
                        </div>

                        <div class="card-body">
                            Card 2 content
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Card 2</h6>
                        </div>

                        <div class="card-body">
                            Card 2 content
                        </div>
                    </div>
                </div>
            </div>

            <p class="fw-semibold">Example code:</p>
            <pre class="language-javascript">
								<code>
									// Properties animation
									Velocity(currentElements, {
										marginLeft: 20,
										marginRight: 20,
										opacity: 0.5
									});
									Velocity(currentElements, "reverse", {
										delay: 1000,
										complete: function() {
											currentElements.forEach(function(cards) {
												cards.removeAttribute('style');
											});
										}
									});
								</code>
							</pre>
        </div>
    </div>
    <!-- /properties -->


    <!-- Chained animation -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chained animation</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">When multiple Velocity calls are stacked onto an element (or a series of elements), they automatically queue onto one another — with each one firing once its prior animation has completed. Current example demonstrates animation of left margin; then, when finished, animate the right margin property, then animate opacity property. To animate an element back to the values prior to its last Velocity call, pass in <code>reverse</code> as Velocity's first argument.</p>

            <p>
                <a href="#" class="velocity-chained fw-semibold">
                    <i class="ph-play-circle me-2"></i>
                    Run animation
                </a>
            </p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Card 1</h6>
                        </div>

                        <div class="card-body">
                            Card 1 content
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Card 2</h6>
                        </div>

                        <div class="card-body">
                            Card 2 content
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Card 2</h6>
                        </div>

                        <div class="card-body">
                            Card 2 content
                        </div>
                    </div>
                </div>
            </div>

            <p class="fw-semibold">Example code:</p>
            <pre class="language-javascript">
								<code>
									// Chained animation
									Velocity(currentElements, {
										marginLeft: 20,
										marginRight: 20,
										opacity: 0.5
									});
									Velocity(currentElements, "reverse", {
										delay: 1000
									});
									Velocity(currentElements, {
										marginRight: 20
									});
									Velocity(currentElements, "reverse", {
										delay: 1000
									});
									Velocity(currentElements, {
										opacity: 0.5
									});
									Velocity(currentElements, "reverse", {
										delay: 1000,
										complete: function() {
											currentElements.forEach(function(cards) {
												cards.removeAttribute('style');
											});
										}
									});
								</code>
							</pre>
        </div>
    </div>
    <!-- /chained animation -->


    <!-- Effects options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Effect options</h5>
        </div>

        <div class="card-body">

            <!-- Stagger -->
            <div class="velocity-container mb-4">
                <h6>Stagger effect</h6>
                <p class="mb-3">There are three options that work only with UI pack effects, but not with traditional Velocity calls: <code>stagger</code>, <code>drag</code> and <code>backwards</code>. They are passed into a UI pack call as standard Velocity call options.
                    Specify the <code>stagger</code> option in <code>ms</code> to successively delay the animation of each element in a set by the targeted amount. You can also pass in a value function to define your own stagger falloffs.</p>

                <p>
                    <a href="#" class="velocity-stagger fw-semibold">
                        <i class="ph-play-circle me-2"></i>
                        Run stagger example
                    </a>
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 1</h6>
                            </div>

                            <div class="card-body">
                                Card 1 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 3 content
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold">Example code:</p>
                <pre class="language-javascript">
									<code>
										// Stagger option
										Velocity(currentElements, 'transition.slideUpIn', {
											stagger: 500
										});
									</code>
								</pre>
            </div>
            <!-- /stagger -->


            <!-- Drag -->
            <div class="velocity-container mb-4">
                <h6>Drag effect</h6>
                <p class="mb-3">Set the <code>drag</code> option to <code>true</code> to successively increase the animation duration of each element in a set. The last element will animate with a duration equal to the sequence's original value, whereas the elements before the last will have their duration values gradually approach the original value. The end result is a cross-element easing effect.</p>

                <p>
                    <a href="#" class="velocity-drag fw-semibold">
                        <i class="ph-play-circle me-2"></i>
                        Run drag example
                    </a>
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 1</h6>
                            </div>

                            <div class="card-body">
                                Card 1 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold">Example code:</p>
                <pre class="language-javascript">
									<code>
										// Drag option
										Velocity(currentElements, 'transition.slideUpBigIn', {
											duration: 1000,
											drag: true
										});
									</code>
								</pre>
            </div>
            <!-- /drag -->


            <!-- Backwards -->
            <div class="velocity-container">
                <h6>Backwards effect</h6>
                <p class="mb-3">Set the <code>backwards</code> option to <code>true</code> to animate starting with the last element in a set. This option is ideal for use with an effect that transitions elements out of view since the backwards option mirrors the behavior of elements transitioning into view (which, by default, animate in the forwards direction — from the first element to the last).</p>

                <p>
                    <a href="#" class="velocity-backwards fw-semibold">
                        <i class="ph-play-circle me-2"></i>
                        Run backwards example
                    </a>
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 1</h6>
                            </div>

                            <div class="card-body">
                                Card 1 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold">Example code:</p>
                <pre class="language-javascript">
									<code>
										// Backwards option
										Velocity(currentElements, 'transition.slideDownOut', {
											stagger: 400,
											backwards: true
										});
										Velocity(currentElements, {
											opacity: 1
										}, {
											duration: 500,
											display: 'block'
										});
									</code>
								</pre>
            </div>
            <!-- /backwards -->

        </div>
    </div>
    <!-- /effects options -->


    <!-- Callbacks -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Animation callbacks</h5>
        </div>

        <div class="card-body">

            <!-- Begin callback -->
            <div class="velocity-container mb-4">
                <h6>Begin callback</h6>
                <p class="mb-3">Pass <code>begin</code> a function to be triggered <span class="fw-semibold">prior to the start</span> of the animation. As with <code>complete</code>, the begin callback is executed <code>once</code> per call, even if multiple elements are being animated. Further, if a call is looped, the begin callback only fires once — at the beginning of the first loop alternation.<br>
                    The callback is passed the entire raw DOM (not jQuery) element array as both its context and its first argument. To access these elements individually, you must iterate over the array using jQuery's $<code>.each()</code> or JavaScript's native <code>.forEach()</code>.</p>

                <p>
                    <a href="#" class="velocity-begin fw-semibold">
                        <i class="ph-play-circle me-2"></i>
                        Begin callback example
                    </a>
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 1</h6>
                            </div>

                            <div class="card-body">
                                Card 1 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold">Example code:</p>
                <pre class="language-javascript">
									<code>
										// Begin callback
										Velocity(currentElements, {
											marginLeft: 20,
											marginRight: 20,
											opacity: 0.5
										}, {
											begin: function() {
												alert('Begin callback example');
											}
										});
										Velocity(currentElements, "reverse", {
											delay: 1000,
											complete: function() {
												currentElements.forEach(function(cards) {
													cards.removeAttribute('style');
												});
											}
										});
									</code>
								</pre>
            </div>
            <!-- /begin callback -->

            <!-- Complete callback -->
            <div class="velocity-container mb-4">
                <h6>Complete callback</h6>
                <p class="mb-3"><code>Complete</code> is the converse of the <code>begin</code> option. Pass the complete option a function to be triggered once the animation has finished. The function is executed <code>once</code> per call, even if multiple elements are being animated at once. Further, if a call is looped, the complete callback only fires once — at the end of the last loop alternation.<br>
                    The callback is passed the entire raw DOM (not jQuery) element array as both its context and its first argument. To access these elements individually, you must iterate over the array using jQuery's <code>$.each()</code> or JavaScript's native <code>.forEach()</code>.</p>

                <p>
                    <a href="#" class="velocity-complete fw-semibold">
                        <i class="ph-play-circle me-2"></i>
                        Complete callback example
                    </a>
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 1</h6>
                            </div>

                            <div class="card-body">
                                Card 1 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold">Example code:</p>
                <pre class="language-javascript">
									<code>
										// Complete callback
										Velocity(currentElements, {
											marginLeft: 20,
											marginRight: 20,
											opacity: 0.5
										}, {
										complete: function() {
											alert('Complete callback example');
										}
										});
										Velocity(currentElements, "reverse", {
											delay: 1000,
											complete: function() {
												currentElements.forEach(function(cards) {
													cards.removeAttribute('style');
												});
											}
										});
									</code>
								</pre>
            </div>
            <!-- /complete callback -->

            <!-- Progress callback -->
            <div class="velocity-container">
                <h6>Progress callback</h6>
                <p class="mb-3">Pass the <code>progress</code> option a callback function to be repeatedly triggered througout the duration of the animation. The callback is passed the entire raw DOM (not jQuery) element array as both its context and its first argument. To access these elements individually, you must iterate over the array using jQuery's <code>$.each()</code> or JavaScript's native <code>.forEach()</code>. Further, it's passed <code>percentComplete</code> (decimal value), <code>timeRemaining</code> (in ms), and <code>timeStart</code> (Unix time).</p>

                <p>
                    <a href="#" class="velocity-progress fw-semibold">
                        <i class="ph-play-circle me-2"></i>
                        Complete callback example
                    </a>
                    <span class="text-muted ms-2" id="percentComplete"></span>
                    <span class="text-muted ms-2" id="timeRemaining"></span>
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 1</h6>
                            </div>

                            <div class="card-body">
                                Card 1 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Card 2</h6>
                            </div>

                            <div class="card-body">
                                Card 2 content
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold">Example code:</p>
                <pre class="language-javascript">
									<code>
										// Elements to display progress
										const percentage = document.querySelector('#percentComplete');
										const time = document.querySelector('#timeRemaining');

										// Progress callback
										Velocity(currentElements, {
											marginLeft: 20,
											marginRight: 20,
											opacity: 0.5
										}, {
										duration: 1000,
											progress: function(elements, percentComplete, timeRemaining, timeStart) {
												percentage.innerHTML = Math.round(percentComplete * 100) + '% complete.';
												time.innerHTML = timeRemaining + 'ms remaining.';
											}
										});
										Velocity(currentElements, "reverse", {
											delay: 1000,
											complete: function() {
												currentElements.forEach(function(cards) {
													cards.removeAttribute('style');
												});
											}
										});
									</code>
								</pre>
            </div>
            <!-- /progress callback -->

        </div>
    </div>
    <!-- /callbacks -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/velocity/velocity.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/velocity/velocity.ui.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/animations_velocity_examples.js')}}"></script>
@endsection
