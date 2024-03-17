@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Reports
        @endslot
        @slot('subtitle')
            Cut-off
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Cut Off List</h5>

                <a href="{{ route('reports.cut_off.export') }}" role="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="release_payroll">
                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                        <i class="ph-download"></i>
                    </span>
                    Export as CSV
                </a>

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
                            <td>{{ \Carbon\Carbon::parse($key->generated_date)->format('d F Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($key->start_date)->format('d F Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($key->end_date)->format('d F Y') }}</td>
                            <td class="">{{ Illuminate\Support\Number::currency($key->total_released_amount, 'PHP') }}</td>
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
