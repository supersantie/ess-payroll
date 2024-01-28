@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') GridJS @endslot
@slot('subtitle') Basic Examples @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic example -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic example</h5>
        </div>

        <div class="card-body">
            Grid.js is a lightweight Javascript grid plugin written in Typescript. It is developed to be used with all popular JavaScript frameworks include React, Angular.js, Vue or without any frameworks! The library is extremely fast due to an internal pipeline that takes care of caching and processing data. Grid.js uses Preact under the hood to render the templates (Note: but it can be used with any JavaScript frameworks) and employs a minimal Flux architecture to communicate with other components.
        </div>

        <div class="gridjs-example-basic border-top"></div>
    </div>
    <!-- /basic example -->


    <!-- Sorting -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sorting</h5>
        </div>

        <div class="card-body">
            Sort has 2 config options: 1) <strong>Generic config</strong>: to enable sort for all columns, enable multi column sort, server-side integration etc; 2) <strong>Column specific config</strong>: to enable sort on a specific column, to set custom comparator function, etc. To simply enable sort for all columns, set <code>sort</code> option to <code>true</code>. Optionally control server side integration and multi column sorting with a few available properties.
        </div>

        <div class="gridjs-example-sorting border-top"></div>
    </div>
    <!-- /sorting -->


    <!-- Search -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Search</h5>
        </div>

        <div class="card-body">
            Grid.js supports global search on all rows and columns. Set <code>search: true</code> in your JS configuration to enable the search plugin. Optionally you can also add <code>server</code> config to your search definition to enable server-side search. Besides generic settings, you can also specify a custom selector to customize searchable fields and tell the engine to ignore hidden columns (they are searchable by default).
        </div>

        <div class="gridjs-example-search border-top"></div>
    </div>
    <!-- /search -->


    <!-- Pagination -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Pagination</h5>
        </div>

        <div class="card-body">
            To enable grid pagination, add <code>pagination: true</code> to your configuration. You can customize nearly everything - limit, starting page, labels, language, number of buttons etc. Add <code>server</code> property to the <code>pagination</code> config to enable server-side pagination. Also, make sure the <code>total</code> property is correctly defined in the main <code>server</code> config block.
        </div>

        <div class="gridjs-example-pagination border-top"></div>
    </div>
    <!-- /pagination -->


    <!-- Resizable columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Resizable columns</h5>
        </div>

        <div class="card-body">
            Simply add <code>resizable: true</code> to your config to enable resizable columns. Resize handle is displayed in table header cells next to sorting icon, and appears on hover. By default it has <code>5px</code> width and theme's <code>primary</code> background color. You can customize general appearance in CSS variables if you need to make it more prominent.
        </div>

        <div class="gridjs-example-resizable border-top"></div>
    </div>
    <!-- /resizable columns -->


    <!-- Hidden columns -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hidden columns</h5>
        </div>

        <div class="card-body">
            Add <code>hidden: true</code> to the columns definition to hide them. The following example uses same dataset as other grids, but in this particular example the <code>email</code> column is hidden by default. Note: enabling the <code>hidden</code> flag only affects the rendering process of your Grid.js instance. Hidden columns are still searchable.
        </div>

        <div class="gridjs-example-hidden border-top"></div>
    </div>
    <!-- /hidden columns -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/tables/gridjs/gridjs.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gridjs_basic.js')}}"></script>
@endsection
