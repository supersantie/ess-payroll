@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Deduction & Contributions
        @endslot
        @slot('subtitle')
            Deduction
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Deduction List</h5>


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
                        <th>Cut-off date</th>
                        <th>Employee name</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deductions as $employee)
                    @foreach ($employee->deductions as $deduction)
                        @foreach ($deduction->cutoffs as $cutoff)
                            <tr>
                                <td>{{ $cutoff->end_date }}</td>
                                <td>{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                                <td>{{ $deduction->amount }}</td>
                                <td>{{ Str::title($deduction->type) }}</td>
                                <td>{{ Str::title($deduction->status) }}</td>
                                <td></td>
                            </tr>
                        @endforeach
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
