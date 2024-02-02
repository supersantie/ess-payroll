@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Overtime
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Overtime List</h5>

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
                            <a href="#" class="dropdown-item">Add manually</a>
                            <a href="#" class="dropdown-item">Upload a file...</a>
                            <a href="#" class="dropdown-item">Download CSV template</a>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="export_table"
                        >
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-download"></i>
                        </span>
                        Export table
                    </button>
                </div>

            </div>

            <div class="card-body">
                The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with
                a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method
                shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>.
                The <code>responsive</code> option can be given as a boolean value, or as an object with configuration
                options.
            </div>

            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th data-orderable="false" class="text-center">
                            <input type="checkbox" class="form-check-input" id="cc_li_c">
                        </th>
                        <th>Date Issued</th>
                        <th>Employee Code</th>
                        <th>Name</th>
                        <th class="text-center">Number of Hours</th>
                        <th class="text-center">Rate Percentage</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                        @foreach ($item->overtimes as $subItem)
                            <tr>
                                <th class="d-flex justify-content-center ">
                                    <input type="checkbox" class="form-check-input">
                                </th>
                                <td>{{ $subItem->date_issued }}</td>
                                <td><a href="#">{{ $item->code }}</a></td>
                                <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                <td class="text-center">{{ $subItem->no_of_hours }}</td>
                                <td class="text-center">{{ $subItem->rate_percentage }}</td>
                                <td><span
                                        class="badge {{ $statusColors[$subItem->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($subItem->status) }}</span>
                                </td>
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
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/extensions/responsive.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
@endsection
