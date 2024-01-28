@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Accordion @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Collapsed atate -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Collapsed state</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">The accordion component has two main states: collapsed and expanded. The chevron icon at the end of the accordion indicates which state the accordion is in. The chevron points down to indicate collapsed and up to indicate expanded. Starting in a collapsed state gives the user a high level overview of the available information. Accordions begin by default in the collapsed state with all content panels closed.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="accordion" id="accordion_collapsed">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapsed_item1" class="accordion-collapse collapse" data-bs-parent="#accordion_collapsed">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the first item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item2">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapsed_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_collapsed">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the second item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item3">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapsed_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_collapsed">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the third item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /collapsed state -->


    <!-- Expanded state -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Expanded state</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can set one of the accordion items to be expanded by default. To render an accordion that’s expanded, add the <code>.open</code> class on the <code>.accordion</code>. For a consistent visual appearance and correct class name switching, you also need to remove <code>.collapsed</code> class from the active <code>.accordion-button</code> element. Note that only 1 accordion item can be expanded.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="accordion" id="accordion_expanded">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="expanded_item1" class="accordion-collapse collapse show" data-bs-parent="#accordion_expanded">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the first item's accordion body.</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the second item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="expanded_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the third item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /expanded state -->


    <!-- Always open -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Always open</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Accordion component can be configured in a way that allows users independently expand each section of the accordion allowing for multiple sections to be open at once. To convert accordion to a list of collapsible elements, omit the <code>data-bs-parent</code> attribute on each <code>.accordion-collapse</code> to make accordion items stay open when another item is opened.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="accordion" id="accordion_collapsed">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#always_open1">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="always_open1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the first item's accordion body.</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#always_open2">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="always_open2" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the second item's accordion body.</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#always_open3">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="always_open3" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the third item's accordion body.</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /always open -->


    <!-- Flush -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Accordion as child component</h5>
        </div>

        <div class="card-body border-bottom">
            The accordion component can be used as a stand alone container with its own styles properties (e.g. border, background color etc) or within another component like card. In certain use cases you would want to remove default styling and display accordion as sub-component. Add <code>.accordion-flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.
        </div>

        <div class="accordion accordion-flush" id="accordion_flush">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush_item1">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="flush_item1" class="accordion-collapse collapse show" data-bs-parent="#accordion_flush">
                    <div class="accordion-body">
                        <span class="fw-semibold">This is the first item's accordion body.</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush_item2">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="flush_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_flush">
                    <div class="accordion-body">
                        <span class="fw-semibold">This is the second item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush_item3">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="flush_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_flush">
                    <div class="accordion-body">
                        <span class="fw-semibold">This is the third item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /flush -->

</div>
<!-- /content area -->

@endsection
