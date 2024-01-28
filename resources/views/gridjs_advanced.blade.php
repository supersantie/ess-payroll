@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') GridJS @endslot
@slot('subtitle') Advanced Examples @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Nested header -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Nested header</h5>
        </div>

        <div class="card-body">
            Grid.js supports nested (or grouped) headers, all you need to do is to define nested <code>columns</code> attribute in your column config. You can also enable "sorting" when using nested headers and use nested header with <code>fixedHeader</code> option. Sorting always works on the last column level only, because the library assumes that these are actual columns list that the grid displays.
        </div>

        <div class="gridjs-example-nested-header border-top"></div>
    </div>
    <!-- /nested header -->


    <!-- Multi column sort -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multi column sort</h5>
        </div>

        <div class="card-body">
            Grid.js supports multi column sorting. Hold the <kbd>shift</kbd> key and click on multiple columns to activate it, and click on a sort button while you're holding the <kbd>shift</kbd> key to remove the sort from that column. Multi column sorting is enabled by default and can be turned off by setting <code>multiColumn</code> option to <code>false</code>. In this example multi column sorting is disabled
        </div>

        <div class="gridjs-example-sort-multi border-top"></div>
    </div>
    <!-- /multi column sort -->


    <!-- Custom sort -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom sort</h5>
        </div>

        <div class="card-body">
            You can customize the sort plugin by using the <code>compare</code> function. Each column accepts a custom compare function. In this example, we are sorting the "Phone Number" column based on the last 4 digits. Sorting in all other columns are not affected as "Phone Number" sort config is applied in the column configuration.
        </div>

        <div class="gridjs-example-sort-custom border-top"></div>
    </div>
    <!-- /custom sort -->


    <!-- Events -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Events</h5>
        </div>

        <div class="card-body">
            Grid.js has a global EventEmitter object which is used to emit events throughout the application lifecycle. Simply, use the <code>on</code> method to capture and bind a function to events. In this example we added 4 events for demonstration: <code>load</code>, <code>ready</code>, <code>rowClick</code> and <code>cellClick</code>. Open your <strong>developer</strong> tools console to see the logs.
        </div>

        <div class="gridjs-example-events border-top"></div>
    </div>
    <!-- /events -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/tables/gridjs/gridjs.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gridjs_advanced.js')}}"></script>
@endsection
