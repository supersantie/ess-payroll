@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Dashboard
        @endslot
    @endcomponent
    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <!-- Quick stats boxes -->
        <div class="row">
            <div class="col-lg-4">

                <!-- Members online -->
                <div class="card bg-teal text-white">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="mb-0">77</h3>
                            <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+25</span>
                        </div>

                        <div>
                            Active Employees
                            <div class="fs-sm opacity-75">52 avg</div>
                        </div>
                    </div>

                    <div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
                </div>
                <!-- /members online -->

            </div>

            <div class="col-lg-4">

                <!-- Current server load -->
                <div class="card bg-pink text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">49.4%</h3>
                            <div class="dropdown d-inline-flex ms-auto">
                                <a href="#" class="text-white d-inline-flex align-items-center dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrows-clockwise me-2"></i>
                                        Update data
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            Tardiness
                            <div class="fs-sm opacity-75">34.6% avg</div>
                        </div>
                    </div>

                    <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                </div>
                <!-- /current server load -->

            </div>

            <div class="col-lg-4">

                <!-- Today's revenue -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">PHP 46,522.50</h3>
                            <div class="ms-auto">
                                <a class="text-white" data-card-action="reload">
                                    <i class="ph-arrows-clockwise"></i>
                                </a>
                            </div>
                        </div>

                        <div>
                            Total Net Pay
                            <div class="fs-sm opacity-75">Last month PHP 48,870.00</div>
                        </div>
                    </div>

                    <div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
                </div>
                <!-- /today's revenue -->

            </div>
        </div>
        <!-- /quick stats boxes -->
        <div class="row">
            <div class="col col-12">

                <!-- Traffic sources -->
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Payroll Analytics</h5>
                        <div class="ms-auto">
                            <label class="form-check form-switch form-check-reverse">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Live update</span>
                            </label>
                        </div>
                    </div>

                    <div class="card-body pb-0">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#"
                                        class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-3">
                                        <i class="ph-plus"></i>
                                    </a>
                                    <div>
                                        <div class="fw-semibold">New visitors</div>
                                        <span class="text-muted">2,349 avg</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                            </div>

                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#"
                                        class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3">
                                        <i class="ph-clock"></i>
                                    </a>
                                    <div>
                                        <div class="fw-semibold">New sessions</div>
                                        <span class="text-muted">08:20 avg</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                            </div>

                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#"
                                        class="bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3">
                                        <i class="ph-users-three"></i>
                                    </a>
                                    <div>
                                        <div class="fw-semibold">Total employees</div>
                                        <span class="text-muted">5,378 avg</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="total-online"></div>
                            </div>
                        </div>
                    </div>

                    <div class="chart position-relative" id="traffic-sources"></div>
                </div>
                <!-- /traffic sources -->

            </div>

        </div>
        <!-- /main charts -->


        <!-- Dashboard content -->
        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Payroll List</h5>
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
                                    <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                    <td>{{ $subItem->paid_hours }}</td>
                                    <td>{{ $subItem->overtime }}</td>
                                    <td>{{ $subItem->sss }}</td>
                                    <td>{{ $subItem->phil_health }}</td>
                                    <td>{{ $subItem->pag_ibig }}</td>
                                    <td>{{ $subItem->net_pay }}</td>
                                    <td>{{ $subItem->start_date }}</td>
                                    <td>{{ $subItem->end_date }}</td>
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
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <!-- Theme JS files -->
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/extensions/responsive.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/pages/dashboard.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/streamgraph.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/sparklines.js') }}"></script> --}}
    <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/lines.js') }}"></script>


    <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/bars.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/progress.js') }}"></script>




    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
@endsection
