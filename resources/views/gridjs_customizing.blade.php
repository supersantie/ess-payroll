@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') GridJS @endslot
@slot('subtitle') Customizing @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Cell formatting -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Cell formatting</h5>
        </div>

        <div class="card-body">
            You can customize cells and format them at runtime using <code>formatter</code> property, it is also possible to add HTML content to cells (see examples below). In this example we added a custom text prefix to all cells in the first column, including HTML tag and class with a help of built-in <code>gridjs.html()</code> function and used that in <code>formatter</code> function or directly in <code>data</code> array.
        </div>

        <div class="gridjs-example-cell-formatting border-top"></div>
    </div>
    <!-- /cell formatting -->


    <!-- Cell attributes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Cell attributes</h5>
        </div>

        <div class="card-body">
            Add custom attributes to each cell (and header cell) of your table using the attributes config. This example adds <code>data-field="name"</code> to all cells of the "Name" column. You can also add custom ID or class name. Note - <code>class</code> attribute requires base <code>gridjs-th</code> class to keep the styling and optional <code>gridjs-th-sort</code> if sorting is enabled. See JS configuration of this grid for reference.
        </div>

        <div class="gridjs-example-cell-attributes border-top"></div>
    </div>
    <!-- /cell attributes -->


    <!-- Row buttons -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Row buttons</h5>
        </div>

        <div class="card-body">
            You can get access to the cell or the entire row using the <code>formatter</code> function. In this example, we are adding a button to each row which has an <code>onClick</code> handler function that can read the entire row. You can use either single button or a button group, and optionally disable sorting in the last column where you show action buttons. Buttons support plain text label and/or icons.
        </div>

        <div class="gridjs-example-row-buttons border-top"></div>
    </div>
    <!-- /row buttons -->


    <!-- HTML in cells -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">HTML in cells</h5>
        </div>

        <div class="card-body">
            In this example we added a simple <code>mailto</code> link to each row and inserted the link value from "Email" cell in each row. Note: using the <code>html</code> function can expose your application to XSS attacks. Make sure you understand the implications of using this function and always sanitize the user inputs before passing them to the <code>html</code> function
        </div>

        <div class="gridjs-example-cell-html border-top"></div>
    </div>
    <!-- /HTML in cells -->


    <!-- HTML in header -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">HTML in header</h5>
        </div>

        <div class="card-body">
            In this example we added icons to table header cells using <code>name</code> property. You can also create a virtual DOM and attach it to header cells. Note: using the <code>html</code> function can expose your application to XSS attacks. Make sure you understand the implications of using this function and always sanitize the user inputs before passing them to the <code>html</code> function
        </div>

        <div class="gridjs-example-header-html border-top"></div>
    </div>
    <!-- /HTML in header -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/tables/gridjs/gridjs.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gridjs_customizing.js')}}"></script>
@endsection
