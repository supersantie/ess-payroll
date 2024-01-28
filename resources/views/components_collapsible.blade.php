@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Collapsible @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Collapsible options -->
    <div class="mb-3">
        <h6 class="mb-0">
            Collapsible options
        </h6>
        <span class="text-muted d-block">Examples of elements and states</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Inline or block element</h6>
                <p class="mb-3">In this example, collapsible JS plugin is attached to inline <code>&lt;span></code> element instead of button or link</p>

                <span class="fw-semibold cursor-pointer" data-bs-toggle="collapse" data-bs-target="#collapse-text">
                    Toggle content
                </span>

                <div class="collapse" id="collapse-text">
                    <div class="mt-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Text links</h6>
                <p class="mb-3">Inline links with <code>href</code> attribute also can toggle the visibility of content, where href is an ID of collapsible container</p>

                <a href="#collapse-link" class="fw-semibold" data-bs-toggle="collapse">
                    Toggle content
                </a>

                <div class="collapse" id="collapse-link">
                    <div class="mt-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Single or multiple icons</h6>
                <p class="mb-3">Content in block or inline elements can contain text, image, SVG, or icon. Here text link contains icon only</p>

                <a href="#collapse-icon" class="text-body" data-bs-toggle="collapse">
                    <i class="ph-arrow-circle-down"></i>
                </a>

                <div class="collapse" id="collapse-icon">
                    <div class="mt-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Link with href</h6>
                <p class="mb-3">While not recommended from a semantic point of view, you can also use a link with the <code>href</code> attribute</p>

                <div>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse-link-collapsed">
                        Toggle content
                    </a>
                </div>

                <div class="collapse" id="collapse-link-collapsed">
                    <div class="mt-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Button with data attribute</h6>
                <p class="mb-3">We recommend using a button with the <code>data-bs-target</code> attribute, use of <code>data-bs-toggle="collapse"</code> is required</p>

                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse-button-collapsed">
                        Toggle content
                    </button>
                </div>

                <div class="collapse" id="collapse-button-collapsed">
                    <div class="mt-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Input with data attribute</h6>
                <p class="mb-3">You can also use collapsible attached to <code>input type="button"</code>, although this tag is generally not recommended</p>

                <div>
                    <input type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse-input-collapsed" value="Toggle content">
                </div>

                <div class="collapse" id="collapse-input-collapsed">
                    <div class="mt-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Open by default</h6>
                <p class="mb-3">Collapsible content can be expanded by default. Use <code>.show</code> in <code>.collapse</code> element to expand content</p>

                <div>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse-link-expanded">
                        Toggle content
                    </a>
                </div>

                <div class="collapse show" id="collapse-link-expanded">
                    <div class="border rounded p-3 mt-3">
                        Content
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Collapsible width</h6>
                <p class="mb-3">Add the <code>.collapse-horizontal</code> modifier class to <code>.collapse</code>and set a <code>width</code> on the immediate child element</p>

                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse-button-expanded">
                        Toggle content
                    </button>
                </div>

                <div class="collapse collapse-horizontal show" id="collapse-button-expanded">
                    <div class="border rounded p-3 mt-3 mb-0" style="width: 250px;">
                        Content
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6 class="fw-semibold">Input with data attribute</h6>
                <p class="mb-2">A <code>button</code> or <code>a</code> can show and hide multiple elements by referencing them with a selector in its <code>href</code> or <code>data-bs-target</code> attribute</p>

                <div>
                    <div class="btn-group btn-group-spaced">
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#multi-collapse-content1">
                            First
                        </button>
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target="#multi-collapse-content2">
                            Second
                        </button>
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="collapse" data-bs-target=".multi-collapse">
                            All
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse show" id="multi-collapse-content1">
                            <div class="border rounded p-3 mt-3">
                                First column
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="collapse multi-collapse show" id="multi-collapse-content2">
                            <div class="border rounded p-3 mt-3">
                                Second column
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /collapsible options -->


    <!-- Accordion markup -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Accordion markup</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Collapsible content sections can be attached to any markup, in this example it's using markup from our Accordion component. The accordion component has two main states: collapsed and expanded. The chevron icon at the end of the accordion indicates which state the accordion is in. The chevron points down to indicate collapsed and up to indicate expanded.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                            Collapsible Item #1
                        </button>
                    </h2>
                    <div id="collapsed_item1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the first item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item2">
                            Collapsible Item #2
                        </button>
                    </h2>
                    <div id="collapsed_item2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the second item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item3">
                            Collapsible Item #3
                        </button>
                    </h2>
                    <div id="collapsed_item3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <span class="fw-semibold">This is the third item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /accordion markup -->


    <!-- Cards -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Cards</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Content cards can be collapsible as well, and you can control what toggler triggers it: all elements in card header, card title text, icon or a specific element. Be sure to place the toggler outside <code>&lt;div class="collapse"></code> container. In the following example card title is a regular anchor element with <code>.text-body</code> class that is highlighted with different color in active state.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="card border shadow-none">
                <div class="card-header border-bottom-0">
                    <h6 class="mb-0">
                        <a data-bs-toggle="collapse" class="text-body" href="#collapsible-card1">Collapsible card #1</a>
                    </h6>
                </div>

                <div id="collapsible-card1" class="collapse border-top show">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                </div>
            </div>

            <div class="card border shadow-none">
                <div class="card-header border-bottom-0">
                    <h6 class="mb-0">
                        <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-card2">Collapsible card #2</a>
                    </h6>
                </div>

                <div id="collapsible-card2" class="collapse border-top">
                    <div class="card-body">
                        Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                    </div>
                </div>
            </div>

            <div class="card border shadow-none">
                <div class="card-header border-bottom-0">
                    <h6 class="mb-0">
                        <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-card3">Collapsible card #3</a>
                    </h6>
                </div>

                <div id="collapsible-card3" class="collapse border-top">
                    <div class="card-body">
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /cards -->


    <!-- Card group -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Card group</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Card group is a list of cards that are displayed seamlessly as 1 component. All cards in this layout require a wrapper container with <code>.card-group-vertical</code> class, which cleans up all spacings and borders in children cards. Height collapse in horizontal card group is also supported. Toggler options are similar to previous example.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="card-group-vertical">
                <div class="card border shadow-none">
                    <div class="card-header">
                        <h6 class="mb-0">
                            <a data-bs-toggle="collapse" class="text-body" href="#collapsible-card-group1">Collapsible card #1</a>
                        </h6>
                    </div>

                    <div id="collapsible-card-group1" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                    </div>
                </div>

                <div class="card border shadow-none">
                    <div class="card-header">
                        <h6 class="mb-0">
                            <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-card-group2">Collapsible card #2</a>
                        </h6>
                    </div>

                    <div id="collapsible-card-group2" class="collapse">
                        <div class="card-body">
                            Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                        </div>
                    </div>
                </div>

                <div class="card border shadow-none">
                    <div class="card-header">
                        <h6 class="mb-0">
                            <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-card-group3">Collapsible card #3</a>
                        </h6>
                    </div>

                    <div id="collapsible-card-group3" class="collapse">
                        <div class="card-body">
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /card group -->


    <!-- Toggle indicator -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Toggle indicator</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can also add a visual indication of current collapsible state. The icon is not hardcoded, which means you can use any icon from the default pack, just make sure you add <code>.collapsible-indicator</code> class to icon element. This class looks for <code>.collapsed</code> class in parent container and rotates the icon depending on the state. Icon indicator can aligned to the left and right.</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="fw-bold border-bottom pb-2 mb-3">Left indicator example</div>

                    <div class="card-group-vertical">
                        <div class="card border shadow-none">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left1">
                                        <i class="ph-caret-down collapsible-indicator me-2"></i>
                                        Collapsible card #1
                                    </a>
                                </h6>
                            </div>

                            <div id="collapsible-card-indicator-left1" class="collapse show">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>

                        <div class="card border shadow-none">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a class="collapsed d-flex align-items-center text-body" data-bs-toggle="collapse" href="#collapsible-card-indicator-left2">
                                        <i class="ph-caret-down collapsible-indicator me-2"></i>
                                        Collapsible card #2
                                    </a>
                                </h6>
                            </div>

                            <div id="collapsible-card-indicator-left2" class="collapse">
                                <div class="card-body">
                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                </div>
                            </div>
                        </div>

                        <div class="card border shadow-none">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a class="collapsed d-flex align-items-center text-body" data-bs-toggle="collapse" href="#collapsible-card-indicator-left3">
                                        <i class="ph-caret-down collapsible-indicator me-2"></i>
                                        Collapsible card #3
                                    </a>
                                </h6>
                            </div>

                            <div id="collapsible-card-indicator-left3" class="collapse">
                                <div class="card-body">
                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fw-bold border-bottom pb-2 mb-3">Right indicator example</div>

                    <div class="card-group-vertical">
                        <div class="card border shadow-none">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-right1">
                                        Collapsible card #1
                                        <i class="ph-caret-down collapsible-indicator ms-auto"></i>
                                    </a>
                                </h6>
                            </div>

                            <div id="collapsible-card-indicator-right1" class="collapse show">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>

                        <div class="card border shadow-none">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a class="collapsed d-flex align-items-center text-body" data-bs-toggle="collapse" href="#collapsible-card-indicator-right2">
                                        Collapsible card #2
                                        <i class="ph-caret-down collapsible-indicator ms-auto"></i>
                                    </a>
                                </h6>
                            </div>

                            <div id="collapsible-card-indicator-right2" class="collapse">
                                <div class="card-body">
                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                </div>
                            </div>
                        </div>

                        <div class="card border shadow-none">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a class="collapsed d-flex align-items-center text-body" data-bs-toggle="collapse" href="#collapsible-card-indicator-right3">
                                        Collapsible card #3
                                        <i class="ph-caret-down collapsible-indicator ms-auto"></i>
                                    </a>
                                </h6>
                            </div>

                            <div id="collapsible-card-indicator-right3" class="collapse">
                                <div class="card-body">
                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /toggle indicator -->


    <!-- Nested elements -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Nested elements</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">All collapsible elements work independently, if ID's in toggle button and collapsible containers match. This allows you to have as many nested collapsible elements as we need. In this example we have a set of collapsible cards, each of them has another set of collapsible elements. All options from the examples above are fully supported.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Example</div>

            <div class="card border shadow-none">
                <div class="card-header">
                    <h6 class="mb-0">
                        <a data-bs-toggle="collapse" class="text-body" href="#collapsible-parent-card1">Collapsible card #1</a>
                    </h6>
                </div>

                <div id="collapsible-parent-card1" class="collapse show">
                    <div class="card-body">
                        <p class="mb-3">Here goes some text content and a set of collapsible elements in the card #1</p>

                        <div class="card-group-vertical">
                            <div class="card border shadow-none">
                                <div class="card-header">
                                    <a class="text-body" data-bs-toggle="collapse" href="#collapsible-child1-card1">Nested card #1</a>
                                </div>

                                <div id="collapsible-child1-card1" class="collapse show">
                                    <div class="card-body">
                                        Card content #1
                                    </div>
                                </div>
                            </div>

                            <div class="card border shadow-none">
                                <div class="card-header">
                                    <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-child1-card2">Nested card #2</a>
                                </div>

                                <div id="collapsible-child1-card2" class="collapse">
                                    <div class="card-body">
                                        Card content #2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border shadow-none">
                <div class="card-header">
                    <h6 class="mb-0">
                        <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-parent-card2">Collapsible card #2</a>
                    </h6>
                </div>

                <div id="collapsible-parent-card2" class="collapse">
                    <div class="card-body">
                        <p class="mb-3">Here goes some text content and a set of collapsible elements in the card #2</p>

                        <div class="card-group-vertical">
                            <div class="card border shadow-none">
                                <div class="card-header">
                                    <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-child2-card1">Nested card #1</a>
                                </div>

                                <div id="collapsible-child2-card1" class="collapse">
                                    <div class="card-body">
                                        Card content #1
                                    </div>
                                </div>
                            </div>

                            <div class="card border shadow-none">
                                <div class="card-header">
                                    <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-child2-card2">Nested card #2</a>
                                </div>

                                <div id="collapsible-child2-card2" class="collapse">
                                    <div class="card-body">
                                        Card content #2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border shadow-none">
                <div class="card-header">
                    <h6 class="mb-0">
                        <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-parent-card3">Collapsible card #3</a>
                    </h6>
                </div>

                <div id="collapsible-parent-card3" class="collapse">
                    <div class="card-body">
                        <p class="mb-3">Here goes some text content and a set of collapsible elements in the card #3</p>

                        <div class="card-group-vertical">
                            <div class="card border shadow-none">
                                <div class="card-header">
                                    <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-child3-card1">Nested card #1</a>
                                </div>

                                <div id="collapsible-child3-card1" class="collapse">
                                    <div class="card-body">
                                        Card content #1
                                    </div>
                                </div>
                            </div>

                            <div class="card border shadow-none">
                                <div class="card-header">
                                    <a class="collapsed text-body" data-bs-toggle="collapse" href="#collapsible-child3-card2">Nested card #2</a>
                                </div>

                                <div id="collapsible-child3-card2" class="collapse">
                                    <div class="card-body">
                                        Card content #2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /nested elements -->

</div>
<!-- /content area -->

@endsection
