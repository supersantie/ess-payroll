@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') List Group @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic examples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic examples</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within. The most basic list group is an unordered list or a list of div's with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Text items</p>
                        <p class="mb-3">Basic example of a list group with text items. Each item requires <code>.list-group-item</code> and list group container requires <code>.list-group</code> classes for proper styling</p>

                        <div class="list-group">
                            <div class="list-group-item">An item</div>
                            <div class="list-group-item">A second item</div>
                            <div class="list-group-item">A third item</div>
                            <div class="list-group-item">A fourth item</div>
                            <div class="list-group-item">And a fifth one</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Text item states</p>
                        <p class="mb-3">Both text and actionable items support active and disabled item states. Use <code>.disabled</code> in a <code>.list-group-item</code> to make it appear disabled, and <code>.active</code> to indicate the current active selection</p>

                        <div class="list-group">
                            <div class="list-group-item active">Active item</div>
                            <div class="list-group-item">A second item</div>
                            <div class="list-group-item disabled">Disabled item</div>
                            <div class="list-group-item">A fourth item</div>
                            <div class="list-group-item">And a fifth one</div>
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold border-bottom pb-2 mb-2">Text items header</p>
                        <p class="mb-3">You can add custom headers to the list of text items by using regular <code>&lt;li></code> or <code>&lt;div></code> element with a base <code>.list-group</code> class along with our background and text utility classes</p>

                        <div class="list-group">
                            <div class="list-group-item bg-light fw-semibold">Header 1</div>
                            <div class="list-group-item">An item</div>
                            <div class="list-group-item">A second item</div>
                            <div class="list-group-item">A third item</div>
                            <div class="list-group-item bg-light fw-semibold">Header 2</div>
                            <div class="list-group-item">A fourth item</div>
                            <div class="list-group-item">And a fifth one</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Actionable items</p>
                        <p class="mb-3">Use link or button tags to create actionable list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code> to each item with base <code>.list-group-item</code> class</p>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">An item</a>
                            <a href="#" class="list-group-item list-group-item-action">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action">A third item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth item</a>
                            <a href="#" class="list-group-item list-group-item-action">And a fifth one</a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Actionable item states</p>
                        <p class="mb-3">Actionable items also support <code>.active</code> and <code>.disabled</code> classes. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events</p>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">Active item</a>
                            <a href="#" class="list-group-item list-group-item-action">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth item</a>
                            <a href="#" class="list-group-item list-group-item-action">And a fifth one</a>
                        </div>
                    </div>

                    <div>
                        <p class="fw-bold border-bottom pb-2 mb-2">Actionable items header</p>
                        <p class="mb-3">Actionable items also can display headers, just make sure you don't use links or buttons in header markup. Headers can contain icons, badges or additional links</p>

                        <div class="list-group">
                            <div class="list-group-item bg-light fw-semibold">Header 1</div>
                            <a href="#" class="list-group-item list-group-item-action">An item</a>
                            <a href="#" class="list-group-item list-group-item-action">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action">A third item</a>
                            <div class="list-group-item bg-light fw-semibold">Header 2</div>
                            <a href="#" class="list-group-item list-group-item-action">A fourth item</a>
                            <a href="#" class="list-group-item list-group-item-action">And a fifth one</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic examples -->


    <!-- Styling options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Styling options</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">List group component can be used in any container, but it doesn't usually match all use cases. You can change look and feel entirely just by using our utility classes, but to keep the markup clean we created 2 additional styling options: <strong>borderless</strong> list to match sidebar navigation style, and <strong>flush</strong> list that removes some borders and rounded corners to avoid duplicated elements</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Flush text items</p>
                        <p class="mb-3">Add <code>.list-group-flush</code> to the base <code>.list-group</code> container to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards)</p>

                        <div class="card">
                            <div class="card-header bg-primary text-white fw-semibold">
                                Card header
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">An item</div>
                                <div class="list-group-item">A second item</div>
                                <div class="list-group-item">A third item</div>
                                <div class="list-group-item">A fourth item</div>
                                <div class="list-group-item">And a fifth one</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Flush actionable items</p>
                        <p class="mb-3">Useful when a list of links needs to be displayed as a part of parent container. Can be used in modals, cards, dropdown menus, popovers, sidebars etc. In rare cases some adjustments might be needed</p>

                        <div class="card">
                            <div class="card-header bg-primary text-white fw-semibold">
                                Card header
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">An item</a>
                                <a href="#" class="list-group-item list-group-item-action">A second item</a>
                                <a href="#" class="list-group-item list-group-item-action">A third item</a>
                                <a href="#" class="list-group-item list-group-item-action">A fourth item</a>
                                <a href="#" class="list-group-item list-group-item-action">And a fifth one</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Borderless text items</p>
                        <p class="mb-3">Add <code>.list-group-borderless</code> class to the base <code>.list-group</code> container to remove horizontal borders in list items so that the list style better matches overall list style</p>

                        <div class="list-group list-group-borderless">
                            <div class="list-group-item">An item</div>
                            <div class="list-group-item">A second item</div>
                            <div class="list-group-item">A third item</div>
                            <div class="list-group-item">A fourth item</div>
                            <div class="list-group-item">And a fifth one</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Borderless actionable items</p>
                        <p class="mb-3">The same for actionable items, add <code>.list-group-borderless</code> class to make the list or links or buttons look like sidebar navigation, in case if you need to use it in custom content containers</p>

                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">An item</a>
                            <a href="#" class="list-group-item list-group-item-action">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action">A third item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth item</a>
                            <a href="#" class="list-group-item list-group-item-action">And a fifth one</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /styling options -->


    <!-- Content elements -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Content elements</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Items in list group component support a few optional elements in various styling options: <strong>badges</strong> in flat, solid, transparent, light and outline styles; <strong>icons</strong> in left and right alignment and optional colors. Neither badges nor icons have horizontal spacing by default, use our margin utility classes to control the distance between element and text label</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Badges in text items</p>
                        <p class="mb-3">List group items support badges in various styles and alignment options. Make sure to add <code>.d-flex.align-items-center</code> classes to <code>.list-group-item</code> for a perfect vertical alignment</p>

                        <div class="list-group">
                            <div class="list-group-item d-flex">
                                An item
                                <span class="badge text-success ms-auto">New</span>
                            </div>
                            <div class="list-group-item d-flex">
                                A second item
                                <span class="badge bg-danger text-white ms-auto">Escalation</span>
                            </div>
                            <div class="list-group-item d-flex">
                                A third item
                                <span class="badge bg-primary bg-opacity-20 text-primary rounded-pill ms-auto">85</span>
                            </div>
                            <div class="list-group-item d-flex">
                                A fourth item
                                <span class="badge border border-teal text-teal rounded-pill ms-auto">80</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Badges in actionable items</p>
                        <p class="mb-3">Be careful with styling the actionable item in active state and using badges with a solid bg color, due to contrast difference. Outline style or semi transparent background is recommended</p>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action d-flex">
                                An item
                                <span class="badge text-success ms-auto">New</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex">
                                A second item
                                <span class="badge bg-danger text-white ms-auto">Escalation</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex">
                                A third item
                                <span class="badge bg-primary bg-opacity-20 text-primary rounded-pill ms-auto">85</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex">
                                A fourth item
                                <span class="badge border border-teal text-teal rounded-pill ms-auto">80</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Icons in text items</p>
                        <p class="mb-3">List group items also support icons in left and right alignment. Right alignment requires <code>.d-flex.align-items-center</code> classes in list group item and <code>.ms-auto</code> in icon tag to stick it to the right</p>

                        <div class="list-group mb-3">
                            <div class="list-group-item d-flex align-items-center">
                                <i class="ph-user-circle me-2"></i>
                                An item
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                A second item
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <i class="ph-shopping-cart me-2"></i>
                                A third item
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <i class="ph-envelope-open me-2"></i>
                                A fourth item
                            </div>
                        </div>

                        <div class="list-group">
                            <div class="list-group-item d-flex align-items-center">
                                An item
                                <i class="ph-user-circle ms-auto"></i>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                A second item
                                <i class="ph-currency-circle-dollar ms-auto"></i>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                A third item
                                <i class="ph-shopping-cart ms-auto"></i>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                A fourth item
                                <i class="ph-envelope-open ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Icons in actionable items</p>
                        <p class="mb-3">Icons inherit color from actionable list group item styles in all states, so no adjustment is required. However make sure to add margin utility classes to icons as they don't have any spacing by default</p>

                        <div class="list-group mb-3">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="ph-user-circle me-2"></i>
                                An item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                A second item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="ph-shopping-cart me-2"></i>
                                A third item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="ph-envelope-open me-2"></i>
                                A fourth item
                            </a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                An item
                                <i class="ph-user-circle ms-auto"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                A second item
                                <i class="ph-currency-circle-dollar ms-auto"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                A third item
                                <i class="ph-shopping-cart ms-auto"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                A fourth item
                                <i class="ph-envelope-open ms-auto"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content elements -->


    <!-- Form elements -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Form elements</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">List groups support all available form controls in both nativa and custom style. They can be aligned to the left and right, and also can be used multiple times in the same list group item or combined with more advanced content type such as headings, multi line text, badges, buttons etc. It's not recommended to use <code>.active</code> class in actionable items as checked form control indicates the same state</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Checkboxes in text items</p>
                        <p class="mb-3">List group items support checkboxes in native browser style or custom style. In text items they are used without label by default, which means only checkbox is clickable</p>

                        <div class="list-group">
                            <label class="list-group-item">
                                <input type="checkbox" class="form-check-input me-2">
                                An item
                            </label>
                            <label class="list-group-item">
                                <input type="checkbox" class="form-check-input me-2">
                                A second item
                            </label>
                            <label class="list-group-item d-flex">
                                A third item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                            <label class="list-group-item d-flex">
                                A fourth item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Checkboxes in actionable items</p>
                        <p class="mb-3">In actionable items checkbox is wrapped in <code>&lt;label></code> element, making the whole line clickable. Use margin utility classes to control the distance between checkbox and text</p>

                        <div class="list-group">
                            <label class="list-group-item list-group-item-action">
                                <input type="checkbox" class="form-check-input me-2">
                                An item
                            </label>
                            <label class="list-group-item list-group-item-action">
                                <input type="checkbox" class="form-check-input me-2">
                                A second item
                            </label>
                            <label class="list-group-item list-group-item-action d-flex">
                                A third item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                            <label class="list-group-item list-group-item-action d-flex">
                                A fourth item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Radio buttons in text items</p>
                        <p class="mb-3">List group items support radio buttons in native browser style or custom style. In text items they are used without label by default, which means only radio button itself is clickable</p>

                        <div class="list-group">
                            <label class="list-group-item">
                                <input type="radio" name="list-group-radio" class="form-check-input me-2" checked>
                                An item
                            </label>
                            <label class="list-group-item">
                                <input type="radio" name="list-group-radio" class="form-check-input me-2">
                                A second item
                            </label>
                            <label class="list-group-item d-flex">
                                A third item
                                <input type="radio" name="list-group-radio" class="form-check-input ms-auto">
                            </label>
                            <label class="list-group-item d-flex">
                                A fourth item
                                <input type="radio" name="list-group-radio" class="form-check-input ms-auto">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Radio buttons in actionable items</p>
                        <p class="mb-3">In actionable items radio button is wrapped in <code>&lt;label></code> element, making the whole line clickable. Use margin utility classes to control the distance between radio button and text</p>

                        <div class="list-group">
                            <label class="list-group-item list-group-item-action">
                                <input type="radio" name="list-group-radio-label" class="form-check-input me-2" checked>
                                An item
                            </label>
                            <label class="list-group-item list-group-item-action">
                                <input type="radio" name="list-group-radio-label" class="form-check-input me-2">
                                A second item
                            </label>
                            <label class="list-group-item list-group-item-action d-flex">
                                A third item
                                <input type="radio" name="list-group-radio-label" class="form-check-input ms-auto">
                            </label>
                            <label class="list-group-item list-group-item-action d-flex">
                                A fourth item
                                <input type="radio" name="list-group-radio-label" class="form-check-input ms-auto">
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Switches in text items</p>
                        <p class="mb-3">List group items support switches for both checkboxes and radio buttons. In text items they are used without label by default, which means only switch itself is clickable</p>

                        <div class="list-group">
                            <label class="list-group-item form-switch">
                                <input type="checkbox" class="form-check-input ms-0 me-2">
                                An item
                            </label>
                            <label class="list-group-item form-switch">
                                <input type="checkbox" class="form-check-input ms-0 me-2">
                                A second item
                            </label>
                            <label class="list-group-item form-switch d-flex">
                                A third item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                            <label class="list-group-item form-switch d-flex">
                                A fourth item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Switches in actionable items</p>
                        <p class="mb-3">In actionable items switch is wrapped in <code>&lt;label></code> element, making the whole line clickable. Use margin utility classes to control the distance between switch and text</p>

                        <div class="list-group">
                            <label class="list-group-item list-group-item-action form-switch">
                                <input type="checkbox" class="form-check-input ms-0 me-2">
                                An item
                            </label>
                            <label class="list-group-item list-group-item-action form-switch">
                                <input type="checkbox" class="form-check-input ms-0 me-2">
                                A second item
                            </label>
                            <label class="list-group-item list-group-item-action form-switch d-flex">
                                A third item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                            <label class="list-group-item list-group-item-action form-switch d-flex">
                                A fourth item
                                <input type="checkbox" class="form-check-input ms-auto">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /form elements -->


    <!-- Contextual classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Contextual classes</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Use contextual classes to style list items with a stateful background and color. By default we support 8 primary colors and 5 optional colors from our design system. Colors in light and dark themes slightly differ to keep the contrast ratio consistent. You can still override colors with our utility classes and use all other styling options and content from previous examples.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Primary colors in text items</p>
                        <p class="mb-3">Regular text items can have alternative background and text colors that can be set by adding contextual classes. Just use <code>.list-group-item-[color]</code> in <code>.list-group-item</code> container</p>

                        <div class="list-group">
                            <div class="list-group-item">Default list group item</div>

                            <div class="list-group-item list-group-item-primary">Primary list group item</div>
                            <div class="list-group-item list-group-item-secondary">Secondary list group item</div>
                            <div class="list-group-item list-group-item-success">Success list group item</div>
                            <div class="list-group-item list-group-item-danger">Danger list group item</div>
                            <div class="list-group-item list-group-item-warning">Warning list group item</div>
                            <div class="list-group-item list-group-item-info">Info list group item</div>
                            <div class="list-group-item list-group-item-light">Light list group item</div>
                            <div class="list-group-item list-group-item-dark">Dark list group item</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Primary colors in actionable items</p>
                        <p class="mb-3">All contextual colors in actionable items also have hover and active states to provide visual feedback on user action. Use <code>.list-group-item-[color]</code> in <code>.list-group-item-action</code> container</p>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Default list group item</a>

                            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Primary list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Secondary list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-success">Success list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Danger list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Warning list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-info">Info list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">Light list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Dark list group item</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Secondary colors in text items</p>
                        <p class="mb-3">Limitless color system includes 8 primary and 5 optional secondary colors: pink, purple, teal, indigo and yellow. Use corresponding color name in <code>.list-group-item-[color]</code> container</p>

                        <div class="list-group">
                            <div class="list-group-item list-group-item-pink">Pink list group item</div>
                            <div class="list-group-item list-group-item-purple">Purple list group item</div>
                            <div class="list-group-item list-group-item-teal">Teal list group item</div>
                            <div class="list-group-item list-group-item-indigo">Indigo list group item</div>
                            <div class="list-group-item list-group-item-yellow">Yellow list group item</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Secondary colors in actionable items</p>
                        <p class="mb-3">The same is for actionable items. All secondary colors also include styles for all states by default and don't require any adjustments. Note: colors in light and dark themes are different</p>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action list-group-item-pink">Pink list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-purple">Purple list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-teal">Teal list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-indigo">Indigo list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-yellow">Yellow list group item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contextual classes -->


    <!-- Horizontal layout -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Horizontal layout</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">List group component supports 2 directions - vertical and horizontal. Simply add <code>.list-group-horizontal</code> class to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that breakpoint’s <code>min-width</code>.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Text items</p>
                        <p class="mb-3">This example uses <code>.list-group-horizontal-sm</code> class to wrap list items and change layout direction on small breakpoints. Currently horizontal list groups cannot be combined with flush list groups</p>

                        <ul class="list-group list-group-horizontal-sm">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Text item states</p>
                        <p class="mb-3">Both text and actionable items support active and disabled item states. Use <code>.disabled</code> in a <code>.list-group-item</code> to make it appear disabled, and <code>.active</code> to indicate the current active selection</p>

                        <ul class="list-group list-group-horizontal-sm">
                            <li class="list-group-item active">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item disabled">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                        </ul>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold border-bottom pb-2 mb-2">Justified list of text items</p>
                        <p class="mb-3">If you want make list group items having equal flexible width that take all available horizontal space, add <code>.flex-fill</code> and <code>.text-center</code> classes to each list group item</p>

                        <div class="list-group list-group-horizontal-sm">
                            <div class="list-group-item text-center flex-fill active">An item</div>
                            <div class="list-group-item text-center flex-fill">A second item</div>
                            <div class="list-group-item text-center flex-fill disabled">A third item</div>
                            <div class="list-group-item text-center flex-fill">A fourth item</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Actionable items</p>
                        <p class="mb-3">Use link or button tags to create actionable list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code> to each item with base <code>.list-group-item</code> class</p>

                        <div class="list-group list-group-horizontal-sm">
                            <a href="#" class="list-group-item list-group-item-action w-auto">An item</a>
                            <a href="#" class="list-group-item list-group-item-action w-auto">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action w-auto">A third item</a>
                            <a href="#" class="list-group-item list-group-item-action w-auto">A fourth item</a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold border-bottom pb-2 mb-2">Actionable item states</p>
                        <p class="mb-3">Actionable items also support <code>.active</code> and <code>.disabled</code> classes. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events</p>

                        <div class="list-group list-group-horizontal-sm">
                            <a href="#" class="list-group-item list-group-item-action w-auto active">An item</a>
                            <a href="#" class="list-group-item list-group-item-action w-auto">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action w-auto disabled">A third item</a>
                            <a href="#" class="list-group-item list-group-item-action w-auto">A fourth item</a>
                        </div>
                    </div>

                    <div>
                        <p class="fw-bold border-bottom pb-2 mb-2">Justified list of actionable items</p>
                        <p class="mb-3">Add <code>.flex-fill</code> and <code>.text-center</code> classes to each actionable list group item (anchor or button tag) and horizontal list group will take all available space</p>

                        <ul class="list-group list-group-horizontal-sm">
                            <a href="#" class="list-group-item list-group-item-action text-center flex-fill active">An item</a>
                            <a href="#" class="list-group-item list-group-item-action text-center flex-fill">A second item</a>
                            <a href="#" class="list-group-item list-group-item-action text-center flex-fill disabled">A third item</a>
                            <a href="#" class="list-group-item list-group-item-action text-center flex-fill">A fourth item</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /horizontal layout -->


    <!-- Custom content -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom content</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Simple example of a <code>custom</code> content in the list group component. You can add nearly any HTML markup, add images, custom elements and colors to the list group item. Example below demonstrates a simple content with icons, titles, right annotations and text body. Also some empty list items for extra spacing. For proper content styling, flexbox utilities must be used.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold border-bottom pb-2 mb-2">Custom content in text items</p>
                        <p class="mb-3">In this example we have a borderless list group with icon, heading, time stamp and multi line text. List group is a universal component that allows you to use any markup within list group item</p>

                        <div class="border rounded py-2">
                            <div class="list-group list-group-borderless">
                                <div class="list-group-item">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-car me-2"></i>
                                                Leapt so heedlessly
                                            </h6>
                                            <span class="fs-sm text-muted">2 days ago</span>
                                        </div>

                                        Haltered disconsolate cocky grizzly rode said oh outgrew patiently wild empirically near this and a alas some more
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-bus me-2"></i>
                                                Black where yikes
                                            </h6>
                                            <span class="fs-sm text-muted">3 days ago</span>
                                        </div>

                                        This and shivered wow boa yikes additional much one lavish gasped outside amongst jeez scurrilously and octopus
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-train me-2"></i>
                                                Gecko preparatory
                                            </h6>
                                            <span class="fs-sm text-muted">4 days ago</span>
                                        </div>

                                        Insincere dipped flauntingly yikes therefore or more clenched but beneath krill before dear however
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-person me-2"></i>
                                                Parrot slid wow
                                            </h6>
                                            <span class="fs-sm text-muted">5 days ago</span>
                                        </div>

                                        Gosh plankton thus egotistically alas satisfactorily flatly towards and far therefore oh drove convenient less
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <p class="fw-bold border-bottom pb-2 mb-2">Custom content in actionable items</p>
                        <p class="mb-3">The same as in previous example, but here all list group items are clickable. Although nearly any element is allowed in list items, nested links or buttons are not allowed due to HTML limitations</p>

                        <div class="border rounded py-2">
                            <div class="list-group list-group-borderless">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-car me-2"></i>
                                                Leapt so heedlessly
                                            </h6>
                                            <span class="fs-sm text-muted">2 days ago</span>
                                        </div>

                                        Haltered disconsolate cocky grizzly rode said oh outgrew patiently wild empirically near this and a alas some more
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-bus me-2"></i>
                                                Black where yikes
                                            </h6>
                                            <span class="fs-sm text-muted">3 days ago</span>
                                        </div>

                                        This and shivered wow boa yikes additional much one lavish gasped outside amongst jeez scurrilously and octopus
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-train me-2"></i>
                                                Gecko preparatory
                                            </h6>
                                            <span class="fs-sm text-muted">4 days ago</span>
                                        </div>

                                        Insincere dipped flauntingly yikes therefore or more clenched but beneath krill before dear however
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="my-1">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">
                                                <i class="ph-person me-2"></i>
                                                Parrot slid wow
                                            </h6>
                                            <span class="fs-sm text-muted">5 days ago</span>
                                        </div>

                                        Gosh plankton thus egotistically alas satisfactorily flatly towards and far therefore oh drove convenient less
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /custom content -->


</div>
<!-- /content area -->

@endsection
