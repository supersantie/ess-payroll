@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') GridJS @endslot
@slot('subtitle') Data Source @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- JSON format -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">JSON format</h5>
        </div>

        <div class="card-body">
            In order to import JSON (or an array of objects), simply change the data input to <code>[{ key: value }, ... ]</code>. Grid.js expects each column to have a unique <code>id</code> field which matches the keys in the <code>data</code> object. <code>id</code> field accepts a function as well. If you have a complex JSON object, pass a function to <code>id</code> and try to refine and format your data. Tip - Grid.js tries to guess the <code>id</code> of columns by camelCasing them if column ID is not defined. E.g. <code>Phone Number</code> becomes <code>phoneNumber</code>.
        </div>

        <div class="gridjs-example-json border-top"></div>
    </div>
    <!-- /JSON format -->


    <!-- XML format -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">XML format</h5>
        </div>

        <div class="card-body">
            Using the <code>handler</code> callback you can parse and handle HTTP calls yourself. The default handler tries to cast the response to a JSON format, but you can override it to parse the data in a different format. In this example, we are our <code>demo.xml</code> file which is a XML formatted document. We also enabled all core plugins in this example: sort, search and pagination.
        </div>

        <div class="gridjs-example-xml border-top"></div>
    </div>
    <!-- /XML format -->


    <!-- Async data import -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Async data import</h5>
        </div>

        <div class="card-body">
            The <code>data</code> attribute accepts an <code>async</code> function, too. This is useful for making any external HTTP calls and loading data from a server. Here we have passed a function to the <code>data</code> attribute which returns a <code>Promise</code> object and resolves the data after 1 second.
        </div>

        <div class="gridjs-example-async border-top"></div>
    </div>
    <!-- /async data import -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/tables/gridjs/gridjs.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gridjs_data_source.js')}}"></script>
@endsection
