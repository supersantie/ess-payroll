@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Flex Utilities @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Enable flex behaviors -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Enable flex behaviors</h5>
        </div>

        <div class="card-body">
            Apply <code>display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties. The <code>.d-flex</code> class makes the flex container a block-level element. The <code>.d-inline-flex</code> class makes the flex container an atomic inline-level element. <strong>Please note:</strong> an anonymous flex item that contains only white space is not rendered, as if it were designated <code>display: none</code>. Also <code>clear</code> and <code>vertical-align</code> properties have no effect on flex items, and <code>float</code> causes the <code>display</code> property of the element to compute to <code>block</code>.

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Flexbox container</p>

                        <div class="bg-light border rounded p-2">
                            <div class="d-flex bg-secondary text-white py-2 px-3 rounded">
                                I'm a flexbox container!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Inline flexbox container</p>

                        <div class="d-flex bg-light border rounded p-2">
                            <div class="d-inline-flex bg-secondary text-white py-2 px-3 rounded">
                                I'm an inline flexbox container!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Display classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.d-flex</code></td>
                        <td>Displays an element as a <strong>block-level</strong> flex container</td>
                    </tr>
                    <tr>
                        <td><code>.d-[breakpoint]-flex</code></td>
                        <td>Responsive variations of <code>.d-flex</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.d-inline-flex</code></td>
                        <td>Displays an element as an <strong>inline-level</strong> flex container</td>
                    </tr>
                    <tr>
                        <td><code>.d-[breakpoint]-inline-flex</code></td>
                        <td>Responsive variations of <code>.d-inline-flex</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /enable flex behaviors -->


    <!-- Flex direction -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Flex direction</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <code>row</code>. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts). Use <code>.flex-row</code> to set a horizontal direction (the browser default), or <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side. Use <code>.flex-column</code> to set a vertical direction, or <code>.flex-column-reverse</code> to start the vertical direction from the opposite side.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Row direction</p>

                        <div class="d-flex flex-row bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item 3
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item 4
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Reverse row direction</p>

                        <div class="d-flex flex-row-reverse bg-light border rounded p-2">
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item 3
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Column direction</p>

                        <div class="d-flex flex-column bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded-top">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3">
                                Flex item 3
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3 rounded-bottom">
                                Flex item 4
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Reverse column direction</p>

                        <div class="d-flex flex-column-reverse bg-light border rounded p-2">
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3 rounded-bottom">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3">
                                Flex item 3
                            </div>
                            <div class="bg-secondary text-white border-white border-opacity-25 py-2 px-3 rounded-top">
                                Flex item 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Flex row classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.flex-row</code></td>
                        <td>Default value. The flexible items are displayed horizontally, as a row</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-row</code></td>
                        <td>Responsive variations of <code>.flex-row</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.flex-row-reverse</code></td>
                        <td>Same as row, but in reverse order</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-row-reverse</code></td>
                        <td>Responsive variations of <code>.flex-row-reverse</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Flex column classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.flex-column</code></td>
                        <td>The flexible items are displayed vertically, as a column</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-column</code></td>
                        <td>Responsive variations of <code>.flex-column</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.flex-column-reverse</code></td>
                        <td>Same as column, but in reverse order</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-column-reverse</code></td>
                        <td>Responsive variations of <code>.flex-column-reverse</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /flex direction -->


    <!-- Justify content -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Justify content</h5>
        </div>

        <div class="card-body">
            Use <code>justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code>flex-direction: column</code>). Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, or <code>around</code> values. The alignment is done after the lengths and auto margins are applied, meaning that, if in a Flexbox layout there is at least one flexible element, with <code>flex-grow</code> different from <code>0</code>, it will have no effect as there won't be any available space.

            <div class="row">
                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">Beginning (start) of the container</p>

                        <div class="d-flex justify-content-start bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">Center of the container</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">End of the container</p>

                        <div class="d-flex justify-content-end bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">With space between the lines</p>

                        <div class="d-flex justify-content-between bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">With space before, between, and after the lines</p>

                        <div class="d-flex justify-content-around bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-border-double table-light">
                        <td colspan="2"><span class="fw-semibold">Justify content classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.justify-content-[value]</code></td>
                        <td>Aligns the flex container's items when the items don't use all available space on the main-axis (horizontally). Available options for <strong>[value]</strong>: <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, or <code>around</code>.</td>
                    </tr>
                    <tr>
                        <td><code>.justify-content-[breakpoint]-[value]</code></td>
                        <td>Responsive variations of <code>.justify-content-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /justify content -->


    <!-- Align items -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Align items</h5>
        </div>

        <div class="card-body">
            Use <code>align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default). Basically it works like <code>justify-content</code>, but in the perpendicular direction. <strong>Tip:</strong> use the <code>align-self</code> property of each item to override the <code>align-items</code> property.

            <div class="row">
                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">Beginning (start) of the container</p>

                        <div class="d-flex align-items-start justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">Center of the container</p>

                        <div class="d-flex align-items-center justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">End of the container</p>

                        <div class="d-flex align-items-end justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">WBaseline of the container</p>

                        <div class="d-flex align-items-baseline justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Fit the container</p>

                        <div class="d-flex align-items-stretch justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Align items classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.align-items-[value]</code></td>
                        <td>Alignment of items inside flex container. Options for <strong>[value]</strong>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</td>
                    </tr>
                    <tr>
                        <td><code>.align-items-[breakpoint]-[value]</code></td>
                        <td>Responsive variations of <code>.align-items-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /align items -->


    <!-- Align self -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Align self</h5>
        </div>

        <div class="card-body">
            Use <code>align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from the same options as align-items: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default). The property doesn't apply to block-level boxes, or to table cells.

            <div class="row">
                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">Beginning (start) of the container</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white align-self-start border-start border-white border-opacity-25 py-2 px-3">
                                Aligned flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">Center of the container</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white align-self-center border-start border-white border-opacity-25 py-2 px-3">
                                Aligned flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mt-3">
                        <p class="fw-semibold">End of the container</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white align-self-end border-start border-white border-opacity-25 py-2 px-3">
                                Aligned flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Baseline of the container</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white align-self-baseline border-start border-white border-opacity-25 py-2 px-3">
                                Aligned flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Fit the container</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white align-self-stretch border-start border-white border-opacity-25 py-2 px-3">
                                Aligned flex item
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Align self classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.align-self-[value]</code></td>
                        <td>Alignment of the selected item inside flex container. Options for <strong>[value]</strong>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</td>
                    </tr>
                    <tr>
                        <td><code>.align-self-[breakpoint]-[value]</code></td>
                        <td>Responsive variations of <code>.align-self-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /align self -->


    <!-- Auto margins -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Auto margins</h5>
        </div>

        <div class="card-body">
            Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code>.me-auto</code>), and pushing two items to the left (<code>.ms-auto</code>). Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default <code>justify-content</code> value.

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Right auto margin</p>

                        <div class="d-flex bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded me-auto">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-start">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Left auto margin</p>

                        <div class="d-flex bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded-start">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 rounded-end">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-start border-white border-opacity-25 py-2 px-3 ms-auto rounded">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Bottom auto margin</p>

                        <div class="d-flex flex-column bg-light border rounded p-2" style="height: 180px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded mb-auto">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded-top">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3 rounded-bottom">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Top auto margin</p>

                        <div class="d-flex flex-column bg-light border rounded p-2" style="height: 180px;">
                            <div class="bg-secondary text-white py-2 px-3 rounded-top">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white border-top border-white border-opacity-25 py-2 px-3 rounded-bottom">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded mt-auto">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Auto margin classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.m[t,b,s,e]-auto</code></td>
                        <td>Pushes flex items to specified side, where "s" is left, "e" is right, "t" is top and "b" is bottom.</td>
                    </tr>
                    <tr>
                        <td><code>.m[t,b,s,e]-[breakpoint]-auto</code></td>
                        <td>Responsive variations of <code>.m[t,b,s,e]-auto</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /auto margins -->


    <!-- Flex wrap -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Flex wrap</h5>
        </div>

        <div class="card-body">
            The <code>flex-wrap</code> classes specify whether flex items are forced into a single line or can be wrapped onto multiple lines. If wrapping is allowed, this property also enables you to control the direction in which lines are stacked. <strong>Note:</strong> if the elements are not flexible items, the <code>flex-wrap</code> property has no effect. Supports 2 directions: default and reversed.

            <div class="mt-3">
                <p class="fw-semibold">No wrap</p>

                <div class="d-flex justify-content-center flex-nowrap bg-light border rounded p-2">
                    <div class="bg-secondary text-white py-2 px-3 d-flex rounded-start" style="flex-grow: 1;">
                        Flex item
                    </div>
                    <div class="bg-secondary text-white py-2 px-3 d-flex border-start border-white border-opacity-25" style="flex-grow: 1;">
                        Flex item
                    </div>
                    <div class="bg-secondary text-white py-2 px-3 d-flex border-start border-white border-opacity-25" style="flex-grow: 1;">
                        Flex item
                    </div>
                    <div class="bg-secondary text-white py-2 px-3 d-flex border-start border-white border-opacity-25 rounded-end" style="flex-grow: 1;">
                        Flex item
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Wrap - default direction</p>

                        <div class="d-flex flex-wrap bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Wrap - reversed direction</p>

                        <div class="d-flex flex-wrap-reverse bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Flex wrap classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.flex-nowrap</code></td>
                        <td>The flex items are laid out in a single line - may cause the flex container to overflow</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-nowrap</code></td>
                        <td>Responsive variations of <code>.flex-nowrap</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.flex-wrap</code></td>
                        <td>The flex items break into multiple lines</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-wrap</code></td>
                        <td>Responsive variations of <code>.flex-wrap</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.flex-wrap-reverse</code></td>
                        <td>Behaves the same as <code>.flex-wrap</code>, but in reverse order</td>
                    </tr>
                    <tr>
                        <td><code>.flex-[breakpoint]-wrap-reverse</code></td>
                        <td>Responsive variations of <code>.flex-wrap-reverse</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /flex wrap -->


    <!-- Flex order -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Flex order</h5>
        </div>

        <div class="card-body">
            Change the <span class="font-italic">visual</span> order of specific flex items with a handful of <code>order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As order takes any integer value (e.g., 5), add custom CSS for any additional values needed. Elements with the same order value are laid out in the order in which they appear in the source code. <strong>Note:</strong> If the element is not a flexible item, the order property has no effect.

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Default order</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 mx-2 rounded">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Custom order</p>

                        <div class="d-flex justify-content-center bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 mx-2 rounded order-2">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded order-3">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded order-1">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Default order</p>

                        <div class="d-flex justify-content-center flex-column bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 my-2 rounded">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Custom order</p>

                        <div class="d-flex justify-content-center flex-column bg-light border rounded p-2">
                            <div class="bg-secondary text-white py-2 px-3 my-2 rounded order-2">
                                Flex item 1
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded order-3">
                                Flex item 2
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 rounded order-1">
                                Flex item 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Flex order classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.order-[value]</code></td>
                        <td>Specify the order used to lay out flex items in their flex container. Values for <strong>[value]</strong>: <code>1</code>, <code>2</code>, ... <code>12</code>.</td>
                    </tr>
                    <tr>
                        <td><code>.order-[breakpoint]-[value]</code></td>
                        <td>Responsive variations of <code>.order-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /flex order -->


    <!-- Align content -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Align content</h5>
        </div>

        <div class="card-body">
            Use <code>align-content</code> utilities on flexbox containers to align flex items together on the cross axis. Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>stretch</code>. To demonstrate these utilities, we’ve enforced <code>flex-wrap: wrap</code> and increased the number of flex items. <strong>Note:</strong> this property has no effect on single rows of flex items.

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Start of the flex container</p>

                        <div class="d-flex flex-wrap align-content-start bg-light border rounded p-2" style="min-height: 160px;">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">End of the flex container</p>

                        <div class="d-flex flex-wrap align-content-end bg-light border rounded p-2" style="min-height: 160px;">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Center of the flex container</p>

                        <div class="d-flex flex-wrap align-content-center bg-light border rounded p-2" style="min-height: 160px;">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Evenly in the flex container</p>

                        <div class="d-flex flex-wrap align-content-between bg-light border rounded p-2" style="min-height: 160px;">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Evenly with half-size spaces on either end</p>

                        <div class="d-flex flex-wrap align-content-around bg-light border rounded p-2" style="min-height: 160px;">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mt-3">
                        <p class="fw-semibold">Stretch to take up the remaining space</p>

                        <div class="d-flex flex-wrap align-content-stretch bg-light border rounded p-2" style="min-height: 160px;">
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-start">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0">
                                Flex item
                            </div>
                            <div class="bg-secondary text-white py-2 px-3 border border-white border-opacity-25 border-end-0 border-top-0 rounded-end">
                                Flex item
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="2"><span class="fw-semibold">Align content classes</span></td>
                    </tr>
                    <tr>
                        <td><code>.align-content-[value]</code></td>
                        <td>Similar to align-items, but instead of aligning flex items, it aligns flex lines. Options for <strong>[value]</strong> are similar to <code>.justify-content-[value]</code> classes</td>
                    </tr>
                    <tr>
                        <td><code>.align-content-[breakpoint]-[value]</code></td>
                        <td>Responsive variations of <code>.align-content-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /align content -->

</div>
<!-- /content area -->

@endsection
