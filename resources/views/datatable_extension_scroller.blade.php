@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Datatables @endslot
@slot('subtitle') Scroller @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic Scroller example -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic example</h5>
        </div>

        <div class="card-body">
            <code>Scroller</code> is a plug-in for DataTables which enhances built-in scrolling features to allow large amounts of data to be rendered on page very quickly. This is done by <code>Scroller</code> through the use of a virtual rendering technique that will render <strong>only</strong> the part of the table that is actually required for the current view. Scroller assumes that all rows are of the <strong>same height</strong> (in order to preform the required calculations). Demo data in this example has 2,500 rows.
        </div>

        <table class="table datatable-scroller">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ZIP / Post code</th>
                    <th>Country</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /basic Scroller example -->


    <!-- With Buttons extension -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">With Buttons extension</h5>
        </div>

        <div class="card-body">
            Scroller also supports DataTable's <code>Buttons</code> extension. Buttons can be initialised very easily though the <code>buttons</code> object which can be given as an array of the buttons that you wish to display. The <code>B</code> option in the dom parameter will instruct DataTables where the buttons should be placed in the document - in this case, at the top right. This example shows the <code>copy</code>, <code>csv</code>, <code>excel</code>, <code>pdf</code> and <code>print</code> buttons being used to display data export options for the DataTable.
        </div>

        <table class="table datatable-scroller-buttons">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ZIP / Post code</th>
                    <th>Country</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /with Buttons extension -->


    <!-- State saving -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">State saving</h5>
        </div>

        <div class="card-body">
            Scroller will automatically integrate with DataTables in order to <code>save</code> the scrolling position of the table, if state saving is enabled in the DataTable (<code>stateSave</code>). This example shows that in practice - to demonstrate, scroll the table and then reload the page. When the page is reloaded, the table's state will be altered to match what they had previously set up.
        </div>

        <table class="table datatable-scroller-state">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ZIP / Post code</th>
                    <th>Country</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /state saving -->


    <!-- Using API -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Using API</h5>
        </div>

        <div class="card-body">
            This example shows a trivial use of the <code>API</code> methods that Scroller adds to the DataTables API to scroll to a row once the table's data has been loaded. In this case <code>scroller().scrollToRow()</code> is used to jump to row 1000. DataTables' <code>info</code> control element is automatically updated and shows the current visible row. Table height is configurable through <code>scrollY</code> string.
        </div>

        <table class="table datatable-scroller-api">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ZIP / Post code</th>
                    <th>Country</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /using API -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/scroller.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/buttons.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/datatables_extension_scroller.js')}}"></script>
@endsection
