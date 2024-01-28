@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Typography @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Default headings -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Heading styles</h6>
        <div class="text-muted">Default heading sizes and font weights</div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-lighter mb-0">Thin headings</h6>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap mb-3">
                        <h1 class="mb-0 fw-lighter">H1 Heading</h1>
                        <span class="align-self-end text-muted ms-2">Lighter 26px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h2 class="mb-0 fw-lighter">H2 Heading</h2>
                        <span class="align-self-end text-muted ms-2">Lighter 24px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h3 class="mb-0 fw-lighter">H3 Heading</h3>
                        <span class="align-self-end text-muted ms-2">Lighter 22px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h4 class="mb-0 fw-lighter">H4 Heading</h4>
                        <span class="align-self-end text-muted ms-2">Lighter 20px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h5 class="mb-0 fw-lighter">H5 Heading</h5>
                        <span class="align-self-end text-muted ms-2">Lighter 18px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-1">
                        <h6 class="mb-0 fw-lighter">H6 Heading</h6>
                        <span class="align-self-end text-muted ms-2">Lighter 16px</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="fw-medium mb-0">Medium headings</h6>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap mb-3">
                        <h1 class="mb-0 fw-medium">H1 Heading</h1>
                        <span class="align-self-end text-muted ms-2">Medium 26px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h2 class="mb-0 fw-medium">H2 Heading</h2>
                        <span class="align-self-end text-muted ms-2">Medium 24px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h3 class="mb-0 fw-medium">H3 Heading</h3>
                        <span class="align-self-end text-muted ms-2">Medium 22px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h4 class="mb-0 fw-medium">H4 Heading</h4>
                        <span class="align-self-end text-muted ms-2">Medium 20px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h5 class="mb-0 fw-medium">H5 Heading</h5>
                        <span class="align-self-end text-muted ms-2">Medium 18px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-1">
                        <h6 class="mb-0 fw-medium">H6 Heading</h6>
                        <span class="align-self-end text-muted ms-2">Medium 16px</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-light mb-0">Light headings</h6>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap mb-3">
                        <h1 class="mb-0 fw-light">H1 Heading</h1>
                        <span class="align-self-end text-muted ms-2">Light 26px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h2 class="mb-0 fw-light">H2 Heading</h2>
                        <span class="align-self-end text-muted ms-2">Light 24px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h3 class="mb-0 fw-light">H3 Heading</h3>
                        <span class="align-self-end text-muted ms-2">Light 22px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h4 class="mb-0 fw-light">H4 Heading</h4>
                        <span class="align-self-end text-muted ms-2">Light 20px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h5 class="mb-0 fw-light">H5 Heading</h5>
                        <span class="align-self-end text-muted ms-2">Light 18px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-1">
                        <h6 class="mb-0 fw-light">H6 Heading</h6>
                        <span class="align-self-end text-muted ms-2">Light 16px</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Semibold headings</h6>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap mb-3">
                        <h1 class="mb-0">H1 Heading</h1>
                        <span class="align-self-end text-muted ms-2">Semibold 26px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h2 class="mb-0">H2 Heading</h2>
                        <span class="align-self-end text-muted ms-2">Semibold 24px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h3 class="mb-0">H3 Heading</h3>
                        <span class="align-self-end text-muted ms-2">Semibold 22px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h4 class="mb-0">H4 Heading</h4>
                        <span class="align-self-end text-muted ms-2">Semibold 20px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h5 class="mb-0">H5 Heading</h5>
                        <span class="align-self-end text-muted ms-2">Semibold 18px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-1">
                        <h6 class="mb-0">H6 Heading</h6>
                        <span class="align-self-end text-muted ms-2">Semibold 16px</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-normal mb-0">Regular headings</h6>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap mb-3">
                        <h1 class="mb-0 fw-normal">H1 Heading</h1>
                        <span class="align-self-end text-muted ms-2">Normal 26px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h2 class="mb-0 fw-normal">H2 Heading</h2>
                        <span class="align-self-end text-muted ms-2">Normal 24px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h3 class="mb-0 fw-normal">H3 Heading</h3>
                        <span class="align-self-end text-muted ms-2">Normal 22px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h4 class="mb-0 fw-normal">H4 Heading</h4>
                        <span class="align-self-end text-muted ms-2">Normal 20px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h5 class="mb-0 fw-normal">H5 Heading</h5>
                        <span class="align-self-end text-muted ms-2">Normal 18px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-1">
                        <h6 class="mb-0 fw-normal">H6 Heading</h6>
                        <span class="align-self-end text-muted ms-2">Normal 16px</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="fw-bold mb-0">Bold headings</h6>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap mb-3">
                        <h1 class="mb-0 fw-bold">H1 Heading</h1>
                        <span class="align-self-end text-muted ms-2">Bold 26px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h2 class="mb-0 fw-bold">H2 Heading</h2>
                        <span class="align-self-end text-muted ms-2">Bold 24px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h3 class="mb-0 fw-bold">H3 Heading</h3>
                        <span class="align-self-end text-muted ms-2">Bold 22px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h4 class="mb-0 fw-bold">H4 Heading</h4>
                        <span class="align-self-end text-muted ms-2">Bold 20px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <h5 class="mb-0 fw-bold">H5 Heading</h5>
                        <span class="align-self-end text-muted ms-2">Bold 18px</span>
                    </div>

                    <div class="d-flex flex-wrap mb-1">
                        <h6 class="mb-0 fw-bold">H6 Heading</h6>
                        <span class="align-self-end text-muted ms-2">Bold 16px</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /default headings -->


    <!-- Heading icons -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Heading elements</h6>
        <div class="text-muted">Optional icons, labels and badges</div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left heading icon</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 mb-1">
                        <i class="ph-check-circle"></i>
                        Left icon
                    </h6>
                    <div class="text-muted">Display icon before heading text</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right inline icon</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 mb-1">
                        Right inline icon
                        <i class="ph-check-circle ms-2"></i>
                    </h6>
                    <div class="text-muted">Display icon after heading text</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right floating icon</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 justify-content-between mb-1">
                        Right floating icon
                        <i class="ph-check-circle"></i>
                    </h6>
                    <div class="text-muted">Stick icon to the right of the container</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left heading label</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 mb-1">
                        <span class="badge bg-info">New</span>
                        Left badge
                    </h6>
                    <div class="text-muted">Heading text with left badge</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right inline badge</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 mb-1">
                        Right inline badge
                        <span class="badge bg-danger">Bug</span>
                    </h6>
                    <div class="text-muted">Heading text with right inline badge</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right floating badge</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 justify-content-between mb-1">
                        Right floating badge
                        <span class="badge bg-success">Fixed</span>
                    </h6>
                    <div class="text-muted">Heading text with right floating badge</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left heading pill badge</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 mb-1">
                        <span class="badge bg-warning rounded-pill">48</span>
                        Heading text
                    </h6>
                    <div class="text-muted">Heading text with left pill badge</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right inline pill badge</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 mb-1">
                        Heading text
                        <span class="badge bg-success rounded-pill">93</span>
                    </h6>
                    <div class="text-muted">Heading text with right inline pill badge</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right floating pill badge</h6>
                </div>

                <div class="card-body">
                    <h6 class="hstack gap-2 justify-content-between mb-1">
                        Heading text
                        <span class="badge bg-primary rounded-pill">37</span>
                    </h6>
                    <div class="text-muted">Heading text with right floating pill badge</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /heading icons -->


    <!-- List options -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">List options</h6>
        <div class="text-muted">Basic list examples with optional classes</div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Default unordered list</h6>
                <p class="mb-3">Use <code>.list</code> class in regular <code>ul</code> element to add some spacing between list items. Multiple levels are supported</p>

                <div class="border rounded p-3">
                    <ul class="list mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul class="list">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>

            <div class="card card-body">
                <h6>Unstyled list</h6>
                <p class="mb-3">Remove the default <code>list-style</code> and left margin on list items. This only applies to immediate children list items</p>

                <div class="border rounded p-3">
                    <ul class="list list-unstyled mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul class="list">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Square list type</h6>
                <p class="mb-3">Change default bullet list item shape to square shape by adding <code>.list-square</code> class to the list container</p>

                <div class="border rounded p-3">
                    <ul class="list list-square mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul class="list list-square">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>

            <div class="card card-body">
                <h6>Default ordered list</h6>
                <p class="mb-3">Display numbered list with multiple nested levels with <code>&lt;ol></code> (ordered list) element and <code>.list</code> class</p>

                <div class="border rounded p-3">
                    <ol class="list mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ol class="list">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ol>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Circle list type</h6>
                <p class="mb-3">Change default bullet list item shape to circle shape by adding <code>.list-circle</code> class to the list container</p>

                <div class="border rounded p-3">
                    <ul class="list list-circle mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul class="list">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>

            <div class="card card-body">
                <h6>List with icons</h6>
                <p class="mb-3">(Un)ordered list items support icons, badges and other inline elements, in both directions and all levels</p>

                <div class="border rounded p-3">
                    <ul class="list list-unstyled mb-0">
                        <li><i class="ph-stack-overflow-logo me-2"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="ph-spotify-logo me-2"></i> Nulla volutpat aliquam velit
                            <ul class="list list-unstyled ps-4">
                                <li><i class="ph-gitlab-logo me-2"></i> Phasellus iaculis neque</li>
                                <li><i class="ph-sketch-logo me-2"></i> Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li><i class="ph-instagram-logo me-2"></i> Faucibus porta lacus fringilla vel</li>
                        <li><i class="ph-phosphor-logo me-2"></i> Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /list options -->


    <!-- List sizing -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">List vertical sizing</h6>
        <div class="text-muted">List item vertical sizing options</div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Default list size</h6>
                <p class="mb-3">Use regular <code>ul</code> or <code>ol</code> elements to create a list of content. Kepp in mind that there's no distance between items</p>

                <div class="border rounded p-3">
                    <ul class="mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom list spacing</h6>
                <p class="mb-3">If you want to have <code>5px</code> margin between list items, use <code>.list</code> class in ordered or unordered list container</p>

                <div class="border rounded p-3">
                    <ul class="list mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul class="list">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Extended list</h6>
                <p class="mb-3">You can also control the gap between list items with our margin utility classes. We are using <code>.mt-2</code> class in this example</p>

                <div class="border rounded p-3">
                    <ul class="list mb-0">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li class="mt-2">Nulla volutpat aliquam velit
                            <ul class="list">
                                <li class="mt-2">Phasellus iaculis neque</li>
                                <li class="mt-2">Purus sodales ultricies</li>
                            </ul>
                        </li>
                        <li class="mt-2">Faucibus porta lacus fringilla vel</li>
                        <li class="mt-2">Aenean sit amet erat nunc</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /list sizing -->


    <!-- Inline lists -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Inline lists</h6>
        <div class="text-muted">Inline list style options</div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Default inline list</h6>
                <p class="mb-3">Use <code>.list-inline</code> class in <code>ul/ol</code> elements and <code>.list-inline-item</code> in items to create inline content list</p>

                <div class="border rounded p-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">1. First item</li>
                        <li class="list-inline-item">2. Second item</li>
                        <li class="list-inline-item">3. Third item</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Condensed inline list</h6>
                <p class="mb-3">You can use our margin utility classes in list items to control the distance between them</p>

                <div class="border rounded p-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-1">1. First item</li>
                        <li class="list-inline-item me-1">2. Second item</li>
                        <li class="list-inline-item">3. Third item</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Separated inline list</h6>
                <p class="mb-3">Use <code>.list-inline-bullet</code> in inline list container to add rounded bullet between list items</p>

                <div class="border rounded p-3">
                    <ul class="list-inline list-inline-bullet mb-0">
                        <li class="list-inline-item">First item</li>
                        <li class="list-inline-item">Second item</li>
                        <li class="list-inline-item">Third item</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /inline lists -->


    <!-- Description lists -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Description lists</h6>
        <div class="text-muted">Vertical and horizontal description lists</div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6>Vertical description list</h6>
                <p class="mb-3">Create vertical list of terms with their associated descriptions with <code>dl</code> element in parent container and <code>dt</code> element to add title, and <code>dd</code> element to add description</p>

                <div class="border rounded p-3">
                    <dl class="mb-0">
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>

                        <dt>Euismod</dt>
                        <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                            <br>
                            Donec id elit non mi porta gravida at eget metus.
                        </dd>

                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6>Horizontal description list</h6>
                <p class="mb-3 text-muted">Align terms and descriptions horizontally by using our grid system’s predefined classes. For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis</p>

                <div class="border rounded p-3">
                    <dl class="row mb-0">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                        </dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">
                            Etiam porta sem malesuada magna mollis euismod.
                        </dd>

                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </dd>

                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-4">Nested definition list</dt>
                                <dd class="col-sm-8">Aenean posuere tortor</dd>
                            </dl>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!-- /description lists -->


    <!-- Blockquotes -->
    <div class="mb-3 mt-2">
        <h6>Blockquote styling</h6>
        <div class="text-muted">Borders, icons and images</div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6>Left border</h6>
                <p class="mb-3">Add optional left border to any blockquote with a combination of <code>.border-start</code> and <code>.border-width-[number]</code> classes added to the main <code>.blockquote</code> container. Adjust padding if needed</p>

                <hr class="mt-0">

                <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                    <p class="mb-1">Paid a cobra along or the sloth dear much eagle gosh from disagreeably lethargic before.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>

            <div class="card card-body">
                <h6>Left aligned image</h6>
                <p class="mb-3">Blockquote can be used with left image, usually user avatar. Add <code>.d-[breakpoint]-flex</code> class to the main blockquote container and add image markup inside</p>

                <hr class="mt-0">

                <blockquote class="blockquote d-flex mb-0">
                    <div class="me-3">
                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="46" height="46" class="rounded-pill" alt="">
                    </div>

                    <div>
                        <p class="mb-1">Dear far dove lynx inaudibly between after under after on some far warthog.</p>
                        <footer class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </div>
                </blockquote>
            </div>

            <div class="card card-body">
                <h6>Left aligned icon</h6>
                <p class="mb-3">You can also use blockquote with an icon, just like the example with user avatar. You can control icon size with <code>.ph-[2x|3x]</code> classes for perfect alignment</p>

                <hr class="mt-0">

                <blockquote class="blockquote d-flex py-2 mb-0">
                    <div class="me-3 align-self-start">
                        <i class="ph-chats ph-3x text-muted opacity-25"></i>
                    </div>

                    <div>
                        <p class="mb-1">Paid a cobra along or the sloth dear much eagle gosh from disagreeably lethargic before.</p>
                        <footer class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </div>
                </blockquote>
            </div>

            <div class="card card-body">
                <blockquote class="blockquote text-center py-2 mb-0">
                    <div class="mb-3">
                        <img class="rounded-pill" src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="46" height="46" alt="">
                    </div>

                    <p class="mb-1">Well hey as seagull more and staunchly uniquely much less alas delicate much checked.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6>Right border</h6>
                <p class="mb-3">Add optional right border to any blockquote with a combination of <code>.border-end</code> and <code>.border-width-[number]</code> classes added to the main <code>.blockquote</code> container. Adjust padding if needed</p>

                <hr class="mt-0">

                <blockquote class="blockquote border-end border-width-5 py-2 pe-3 mb-0">
                    <p class="mb-1">Or a more far thought close mammoth that so one bee more fidgeted checked and written.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>

            <div class="card card-body">
                <h6>Right aligned image</h6>
                <p class="mb-3">Blockquote can be also used with right image. Add <code>.d-[breakpoint]-flex</code> class to the main blockquote container and add image markup inside</p>

                <hr class="mt-0">

                <blockquote class="blockquote d-flex mb-0">
                    <div class="me-auto">
                        <p class="mb-1">Well hey as seagull more and staunchly uniquely much less alas delicate much checked.</p>
                        <footer class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </div>

                    <div class="ms-3">
                        <img class="rounded-circle" src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="46" height="46" alt="">
                    </div>
                </blockquote>
            </div>

            <div class="card card-body">
                <h6>Right aligned icon</h6>
                <p class="mb-3">Icon in blockquotes can be also aligned to the right. Markup is a bit different, but logic is exactly the same as in previous example. Just make sure spacing between elements is correct</p>

                <hr class="mt-0">

                <blockquote class="blockquote d-flex py-2 mb-0">
                    <div class="me-auto">
                        <p class="mb-1">Or a more far thought close mammoth that so one bee more fidgeted checked and written.</p>
                        <footer class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </div>

                    <div class="ms-3 align-self-start">
                        <i class="ph-chats ph-3x text-muted opacity-25"></i>
                    </div>
                </blockquote>
            </div>

            <div class="card card-body">
                <blockquote class="blockquote text-center py-2 mb-0">
                    <div class="mb-3">
                        <i class="ph-chats ph-3x text-muted opacity-25"></i>
                    </div>

                    <p class="mb-1">Well hey as seagull more and staunchly uniquely much less alas delicate much checked.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <!-- /blockquotes -->

</div>
<!-- /content area -->

@endsection
