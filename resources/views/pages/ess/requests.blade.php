@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Home @endslot
@slot('subtitle') Activity Logs @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Activity Logs List</h5>
            <div class="d-flex gap-2">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-download"></i>
                        </span>
                        Export As
                    </button>

                    <div class="dropdown-menu">
                        <a href="javascript:(0)" class="dropdown-item">Download as XLSX</a>
                        <a href="javascript:(0)" class="dropdown-item">Download as PDF</a>
                        <a href="javascript:(0)" class="dropdown-item d-flex align-items-center  justify-content-between ">Forward to email <i class="ph-paper-plane-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>. The <code>responsive</code> option can be given as a boolean value, or as an object with configuration options.
        </div>

        <table class="table datatable-responsive">
            <thead>
                <tr>
                    <th data-orderable="false" class="text-center">
                        <input type="checkbox" class="form-check-input" id="cc_li_c">
                    </th>
                    <th>Name</th>
                    <th>Employee Code</th>
                    <th>Request Type</th>
                    <th>Date Requested</th>
                    <th>Ip Address</th>
                    <th class="text-center" data-orderable="false">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $item) 
                    <tr>
                        <th class="d-flex justify-content-center ">
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <td></td>
                        <td>{{ $item->employees->first_name }}</td>
                        <td>{{ $item->employee_code }}</td>
                        <td>{{ $item->request_type }}</td>
                        <td>{{ $item->created_at->format('M. d, Y - h:i A') }}</td>
                        <td></td>
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

