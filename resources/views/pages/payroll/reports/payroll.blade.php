@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Reports @endslot
@slot('subtitle') Payroll @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Payroll List</h5>
            <div class="d-flex gap-2">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-plus"></i>
                        </span>
                        Add Entry
                    </button>

                    <div class="dropdown-menu">
                        <a href="javascript:(0)" class="dropdown-item" id="modal_remote">Add manually</a>
                        <a href="#" class="dropdown-item">Upload a file...</a>
                        <a href="#" class="dropdown-item">Upload biometric file</a>
                        <a href="#" class="dropdown-item">Download CSV template</a>
                    </div>
                </div>

                <a href="{{ route('reports.payroll.export') }}" role="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="release_payroll">
                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                        <i class="ph-download"></i>
                    </span>
                    Export as CSV
                </a>
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
                    <th>Paid Hours</th>
                    <th>Overtime</th>
                    <th>SSS</th>
                    <th>Philheath</th>
                    <th>Pag Ibig</th>
                    <th>Net Pay</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payrolls as $item) 
                    @foreach ($item->payrolls as $subItem)
                    <tr>
                        <th class="d-flex justify-content-center ">
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <td>{{ $item->first_name .' '. $item->last_name }}</td>
                        <td>{{ $subItem->paid_hours }}</td>
                        <td>{{ $subItem->overtime }}</td>
                        <td>{{ $subItem->sss }}</td>
                        <td>{{ $subItem->phil_health }}</td>
                        <td>{{ $subItem->pag_ibig }}</td>
                        <td>{{ $subItem->net_pay }}</td>
                        <td>{{ $subItem->start_date }}</td>
                        <td>{{ $subItem->end_date }}</td>
                        <td><span class="badge {{ $statusColors[$subItem->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($subItem->status) }}</span></td>
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

