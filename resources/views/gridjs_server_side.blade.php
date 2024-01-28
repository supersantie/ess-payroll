@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') GridJS @endslot
@slot('subtitle') Server Side @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Server-side data -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Import server-side data</h5>
        </div>

        <div class="card-body">
            Grid.js supports global search on all rows and columns. Set <code>search: true</code> in your JS configuration to enable the search plugin. Optionally you can also add <code>server</code> config to your search definition to enable server-side search. Besides generic settings, you can also specify a custom selector to customize searchable fields and tell the engine to ignore hidden columns (they are searchable by default).
        </div>

        <div class="gridjs-example-server border-top"></div>
    </div>
    <!-- /server-side data -->


    <!-- Server side search -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Server side search</h5>
        </div>

        <div class="card-body">
            Add <code>server</code> config to your <code>search</code> definition to enable server-side search. To load and import data from a remote URL. Server storage uses <code>fetch</code> API to send the call and fetch the data. Note - server base URL is required in any server side implementation, whether it's a data load or sort/pagination/search configuration
        </div>

        <div class="gridjs-example-server-search border-top"></div>
    </div>
    <!-- /server side search -->


    <!-- Server side pagination -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Server side pagination</h5>
        </div>

        <div class="card-body">
            Add <code>server</code> property to the <code>pagination</code> config to enable server-side pagination. Also, make sure the <code>total</code> property is correctly defined in the main <code>server</code> config block. Multiple customization options are available for both client and server side pagination configuration: limit, starting page, labels, language, number of buttons etc
        </div>

        <div class="gridjs-example-server-pagination border-top"></div>
    </div>
    <!-- /server side pagination -->


    <!-- Server side sorting -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Server side sorting</h5>
        </div>

        <div class="card-body">
            Simply add <code>server</code> config to the <code>sort</code> block to enable server-side sorting. In the following example we fetch the data from remote source and disable sorting in the "Image" column just like we would disable sorting in a regular grid configuration. Sort has 2 config options: 1) <strong>Generic config</strong>: to enable sort for all columns, enable multi column sort, server-side integration etc; 2) <strong>Column specific config</strong>: to enable sort on a specific column, to set custom comparator function, etc
        </div>

        <div class="gridjs-example-server-sorting border-top"></div>
    </div>
    <!-- /server side sorting -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/tables/gridjs/gridjs.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gridjs_server_side.js')}}"></script>
@endsection
