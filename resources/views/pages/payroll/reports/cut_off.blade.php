@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Reports @endslot
@slot('subtitle') Cut-off @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Cut-off List</h5>
        </div>

        <div class="card-body">
            The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>. The <code>responsive</code> option can be given as a boolean value, or as an object with configuration options.
        </div>

        <table class="table datatable-responsive">
            <thead>
                <tr>
                    <th>Generated date</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Total Released Amount</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cutoffs as $key)
                    <tr>
                        <td>{{ $key->generated_date }}</td>
                        <td>{{ $key->start_date }}</td>
                        <td>{{ $key->end_date }}</td>
                        <td>{{ $key->total_released_amount }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/responsive.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/datatables_extension_responsive.js')}}"></script>
@endsection

