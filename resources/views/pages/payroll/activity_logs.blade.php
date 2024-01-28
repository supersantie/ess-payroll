@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Home @endslot
@slot('subtitle') Activity Logs @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Activity Logs List</h5>
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
                    <th>Action Type</th>
                    <th>Description</th>
                    <th>Action Date</th>
                    <th>Time Elapsed</th>
                    <th>Ip Address</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $item) 
                    @foreach ($item->activity_logs as $subItem)
                    <tr>
                        <th class="d-flex justify-content-center ">
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <td><span class="badge {{ $actionColors[$subItem->action_type] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($subItem->action_type) }}</span></td>
                        <td>{{ $subItem->description }}</td>
                        <td><a href="#">{{ $subItem->action_date }}</a></td>
                        <td>{{ $subItem->time_elapsed }}</td>
                        <td>{{ $subItem->ip_address }}</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end ">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Export to .pdf
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-csv me-2"></i>
                                            Export to .csv
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-doc me-2"></i>
                                            Export to .doc
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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

