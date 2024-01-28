@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Grid System @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Grid options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Grid options</h5>
        </div>

        <div class="card-body">
            Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. While Bootstrap uses <code>ems</code> or <code>rems</code> for defining most sizes, <code>pxs</code> are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size. See how aspects of the Bootstrap grid system work across multiple devices with a handy table. For a complete set of examples please refer to <a href="https://getbootstrap.com/docs/5.1/layout/grid/" target="_blank">this page</a>.
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">
                            xs<br>
                            <span class="fw-normal text-muted">&lt;576px</span>
                        </th>
                        <th class="text-center">
                            sm<br>
                            <span class="fw-normal text-muted">≥576px</span>
                        </th>
                        <th class="text-center">
                            md<br>
                            <span class="fw-normal text-muted">≥768px</span>
                        </th>
                        <th class="text-center">
                            lg<br>
                            <span class="fw-normal text-muted">≥992px</span>
                        </th>
                        <th class="text-center">
                            xl<br>
                            <span class="fw-normal text-muted">≥1200px</span>
                        </th>
                        <th class="text-center">
                            xxl<br>
                            <span class="fw-normal text-muted">≥1400px</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-nowrap" scope="row">Max container width</th>
                        <td>None (auto)</td>
                        <td>540px</td>
                        <td>720px</td>
                        <td>960px</td>
                        <td>1140px</td>
                        <td>1320px</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Class prefix</th>
                        <td><code>.col-</code></td>
                        <td><code>.col-sm-</code></td>
                        <td><code>.col-lg-</code></td>
                        <td><code>.col-lg-</code></td>
                        <td><code>.col-xl-</code></td>
                        <td><code>.col-xxl-</code></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row"># of columns</th>
                        <td colspan="6">12</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Gutter width</th>
                        <td colspan="6">40px (20px on each side of a column)</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Nestable</th>
                        <td colspan="6">Yes</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Column ordering</th>
                        <td colspan="6">Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /grid options -->


    <!-- Auto layout columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Auto-layout columns</h5>
        </div>

        <div class="card-body">
            <h6>Equal-width</h6>
            <p class="mb-3">Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like .col-sm-6. For example, here are two grid layouts that apply to every device and viewport, from xs to xl. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        1 of 2
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        2 of 2
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        1 of 3
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        2 of 3
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        3 of 3
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Setting one column width</h6>
            <p class="mb-3">Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        1 of 2
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        2 of 3 (wider)
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        2 of 2
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        1 of 3
                    </div>
                </div>
                <div class="col-5">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        2 of 3 (wider)
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        3 of 3
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Variable width content</h6>
            <p class="mb-3">Use <code>.col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content. In this case the browser will calculate and select a width for the grid column. Also you can use optional flex helper classes to add custom grid appearance and mix other grid column classes with auto width.</p>

            <div class="row justify-content-lg-center">
                <div class="col col-lg-2">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        1 of 2
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Variable width content
                    </div>
                </div>
                <div class="col col-lg-2">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        2 of 2
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        1 of 3
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Variable width content
                    </div>
                </div>
                <div class="col col-lg-2">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        3 of 3
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Equal-width multi-row</h6>
            <p class="mb-3">Create equal-width columns that span multiple rows by inserting a <code>.w-100</code> where you want the columns to break to a new line. Make the breaks responsive by mixing the <code>.w-100</code> with some <a href="content_helpers">responsive display utilities</a>. Equal-width columns can be broken into multiple lines, but there was a <a href="https://github.com/philipwalton/flexbugs#11-min-and-max-size-declarations-are-ignored-when-wrapping-flex-items">Safari flexbox bug</a> that prevented this from working without an explicit <code>flex-basis</code> or <code>border</code>.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /auto layout columns -->


    <!-- Responsive classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Responsive classes</h5>
        </div>

        <div class="card-body">
            <h6>All breakpoints</h6>
            <p class="mb-3">For grids that are the same from the smallest of devices to the largest, use the <code>.col</code> and <code>.col-*</code> classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to <code>.col</code>.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-8
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-4
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Stacked to horizontal</h6>
            <p class="mb-3">Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked on extra small devices before becoming horizontal on desktop (medium) devices.</p>

            <div class="row">
                <div class="col-sm-8">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm-8
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm-4
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm
                    </div>
                </div>
                <div class="col-sm">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm
                    </div>
                </div>
                <div class="col-sm">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Mix and match</h6>
            <p class="mb-3">Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. For a better idea of how it all works - <strong>First row</strong>: Stack the columns on mobile by making one full-width and the other half-width. <strong>Second row</strong>: Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop. <strong>Third row</strong>: Columns are always 50% wide, on mobile and desktop</p>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-12 .col-lg-8
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-lg-4
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-lg-4
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-lg-4
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-lg-4
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /responsive classes -->


    <!-- Alignment -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Alignment</h5>
        </div>

        <div class="card-body">
            <h6>No gutters</h6>
            <p class="mb-3">The gutters between columns in our predefined grid classes can be removed with <code>.g-0</code>. This removes the negative margins from <code>.row</code> and the horizontal padding from all immediate children columns. Note that column overrides are scoped to only the first children columns and are targeted via attribute selector. While this generates a more specific selector, column padding can still be further customized with <a href="content_helpers">spacing utilities</a>.</p>

            <div class="row g-0">
                <div class="col-12 col-sm-6 col-lg-8">
                    <div class="bg-secondary text-white rounded-start py-2 px-3 mb-3">
                        .col-12 .col-sm-6 .col-lg-8
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-secondary text-white rounded-end border-start border-white border-opacity-25 py-2 px-3 mb-3">
                        .col-6 .col-lg-4
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Column wrapping</h6>
            <p class="mb-3">If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-9
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-4 <br> Since 9 + 4 = 13 > 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6<br>Subsequent columns continue along the new line.
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Column breaks</h6>
            <p class="mb-3">Use <code>.col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content. In this case the browser will calculate and select a width for the grid column. Also you can use optional flex helper classes to add custom grid appearance and mix other grid column classes with auto width.</p>

            <div class="row">
                <div class="col-6 col-sm-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-sm-4
                    </div>
                </div>
                <div class="col-col-6 col-sm-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-sm-4
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-6 col-sm-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-sm-4
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-6 .col-sm-4
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /alignment -->


    <!-- Reordering -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Reordering</h5>
        </div>

        <div class="card-body">
            <h6>Order classes</h6>
            <p class="mb-3">Use <code>.order-</code> classes for controlling the <strong>visual</strong> order of your content. These classes are responsive, so you can set the <code>order</code> by breakpoint (e.g., <code>.order-1.order-lg-2</code>). Includes support for <code>1</code> through <code>12</code> across all five grid tiers.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        First, but unordered
                    </div>
                </div>
                <div class="col order-12">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Second, but last
                    </div>
                </div>
                <div class="col order-1">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Third, but first
                    </div>
                </div>
            </div>

            <p class="mb-3">There’s also a responsive <code>.order-first</code> class that quickly changes the order of one element by applying <code>order: -1</code>. This class can also be intermixed with the numbered <code>.order-*</code> classes as needed.</p>

            <div class="row">
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        First, but unordered
                    </div>
                </div>
                <div class="col">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Second, but unordered
                    </div>
                </div>
                <div class="col order-first">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Third, but first
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /reordering -->


    <!-- Offsetting columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Offsetting columns</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can offset grid columns in two ways: our responsive .offset- grid classes and our margin utilities. Grid classes are sized to match columns while margins are more useful for quick layouts where the width of the offset is variable.</p>

            <h6 class="pt-2">Offset classes</h6>
            <p class="mb-3">Move columns to the right using <code>.offset-lg-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.offset-lg-4</code> moves <code>.col-lg-4</code> over four columns.</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-4
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-4 .offset-lg-4
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 offset-lg-3">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-3 .offset-lg-3
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-3">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-3 .offset-lg-3
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-6 .offset-lg-3
                    </div>
                </div>
            </div>

            <p class="mb-3">In addition to column clearing at responsive breakpoints, you may need to reset offsets:</p>

            <div class="row">
                <div class="col-sm-5 col-lg-6">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm-5 .col-lg-6
                    </div>
                </div>
                <div class="col-sm-5 offset-sm-2 col-lg-6 offset-lg-0">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm-5 .offset-sm-2 .col-lg-6 .offset-lg-0
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-5 col-lg-6">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col.col-sm-6.col-lg-5.col-lg-6
                    </div>
                </div>
                <div class="col-sm-6 col-lg-5 offset-lg-2 col-lg-6 offset-lg-0">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-sm-6 .col-lg-5 .offset-lg-2 .col-lg-6 .offset-lg-0
                    </div>
                </div>
            </div>


            <h6 class="pt-2">Margin utilities</h6>
            <p class="mb-3">With the move to flexbox in v4, you can use margin utilities like <code>.ms-auto</code> to force sibling columns away from one another.</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-4
                    </div>
                </div>
                <div class="col-lg-4 ms-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-4 .ms-auto
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 ms-lg-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-3 .ms-lg-auto
                    </div>
                </div>
                <div class="col-lg-3 ms-lg-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-lg-3 .ms-lg-auto
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-auto me-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-auto .me-auto
                    </div>
                </div>
                <div class="col-auto">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        .col-auto
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /offsetting columns -->


    <!-- Nesting -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Nesting</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>

            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                        Level 1: .col-sm-12

                        <div class="row mt-3">
                            <div class="col-8 col-sm-6">
                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                    Level 2: .col-8 .col-sm-6
                                </div>
                            </div>
                            <div class="col-4 col-sm-6">
                                <div class="bg-secondary text-white rounded py-2 px-3 mb-3">
                                    Level 2: .col-4 .col-sm-6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /nesting -->

</div>
<!-- /content area -->

@endsection
