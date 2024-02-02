@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Reports @endslot
@slot('subtitle') Payslip @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between ">
            <h5 class="mb-0">Payslip List</h5>

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

                <button type="button" class="btn btn-secondary btn-labeled btn-labeled-start" id="release_payroll"
                    disabled>
                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                        <i class="ph-paper-plane-tilt"></i>
                    </span>
                    Release Payroll
                </button>
            </div>
        </div>

        <div class="card-body">
            The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>. The <code>responsive</code> option can be given as a boolean value, or as an object with configuration options.
        </div>

        <table class="table datatable-responsive">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Cutoff Period</th>
                    <th>Daily Rate</th>
                    <th>Overtime Pay</th>
                    <th>Gross Pay</th>
                    <th>Deduction</th>
                    <th>SSS</th>
                    <th>Philhealth</th>
                    <th>Pagibig</th>
                    <th>Total Pay</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
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

