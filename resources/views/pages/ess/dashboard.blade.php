@extends('layouts.ess-master')
@section('content')
    @component('components.ess-breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('subtitle')
            Welcome to Workfolio ESS
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-img-actions">
                        <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/demo/users/face1.jpg') }}"
                            alt="">
                        <div class="card-img-actions-overlay card-img-top">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-plus"></i>
                            </a>
                            <a href="user_pages_profile" class="btn btn-outline-white btn-icon rounded-pill ms-2">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>


                    <div class="card-body text-center">
                        <h6 class="mb-0">{{ session('info')->first_name . ' ' . session('info')->last_name }}</h6>
                        <span class="text-muted"> {{ session('info')->job_role }}</span>

                        <div class="d-flex justify-content-center mt-3">
                            <a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
                                <i class="ph-dribbble-logo"></i>
                            </a>
                            <a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
                                <i class="ph-twitter-logo"></i>
                            </a>
                            <a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
                                <i class="ph-microsoft-teams-logo"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="row">
                    <div class="col-lg-4">

                        <!-- Members online -->
                        <div class="card bg-teal text-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">49.4%</h3>
                                    <div class="dropdown d-inline-flex ms-auto">
                                        <a href="#"
                                            class="text-white d-inline-flex align-items-center dropdown-toggle"
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
                                        <a href="#"
                                            class="text-white d-inline-flex align-items-center dropdown-toggle"
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
                                    <h3 class="mb-0">49.4%</h3>
                                    <div class="dropdown d-inline-flex ms-auto">
                                        <a href="#"
                                            class="text-white d-inline-flex align-items-center dropdown-toggle"
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

                            <div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->

                    </div>
                </div>

                <div class="row">
                    <div class="col col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between ">
                                <h5 class="mb-0">Leave Requests</h5>

                                <div class="d-flex gap-2">

                                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start"
                                        id="release_payroll">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="ph-plus"></i>
                                        </span>
                                        Request Leave
                                    </button>

                                </div>
                            </div>

                            <table class="table datatable-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center">Date to take</th>
                                        <th class="text-center">Leave Type</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <span class="d-none d-xl-block">03/28/2024</span>
                                            <span class="d-block d-xl-none">28 March 2024</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-secondary">Sick Leave</span>
                                        </td>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-danger">Declined</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <span class="d-none d-xl-block">04/14/2024</span>
                                            <span class="d-block d-xl-none">14 April 2024</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-teal">Birthday Leave</span>
                                        </td>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-success">Approved</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between ">
                                <h5 class="mb-0">Payslips</h5>

                                <div class="d-flex gap-2">

                                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start"
                                        id="release_payroll">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="ph-download"></i>
                                        </span>
                                        Export Sheet
                                    </button>

                                </div>
                            </div>

                            <table class="table datatable-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Hours</th>
                                        <th class="text-center">Gross</th>
                                        <th class="text-center">Deductions</th>
                                        <th class="text-center">Net</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($payrolls)
                                        @foreach ($payrolls->payrolls as $subItem)
                                            <tr>
                                                <th class="d-flex justify-content-center ">
                                                    <input type="checkbox" class="form-check-input">
                                                </th>
                                                <td class="text-center">{{ $subItem->paid_hours }}</td>
                                                <td class="text-center">{{ $subItem->net_pay }}</td>
                                                <td><span
                                                        class="badge {{ $statusColors[$subItem->status] ?? 'bg-secondary bg-opacity-10 text-secondary' }}">{{ Str::title($subItem->status) }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('payslips.pdf', ['id' => $subItem->id]) }}"
                                                        class="btn btn-info export-pdf-btn"
                                                        data-payroll-id="{{ $subItem->id }}">
                                                        <i class="ph-file-pdf me-2"></i>
                                                        Export to .pdf
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/uploaders/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/pickers/datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/visualization/echarts/echarts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/demo/charts/pages/widgets_content.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    {{-- <script src="{{URL::asset('assets/demo/charts/echarts/calendars/calendar_single.js')}}"></script> --}}

    <script>
        /* ------------------------------------------------------------------------------
         *
         *  # Echarts - Single calendar example
         *
         *  Demo JS code for single calendar chart [light theme]
         *
         * ---------------------------------------------------------------------------- */


        // Setup module
        // ------------------------------

        var EchartsCalendarSingleLight = function() {


            //
            // Setup module components
            //

            // Single calendar chart
            var _calendarSingleLightExample = function() {
                if (typeof echarts == 'undefined') {
                    console.warn('Warning - echarts.min.js is not loaded.');
                    return;
                }

                // Define element
                var calendar_single_element = document.getElementById('calendar_single');


                //
                // Charts configuration
                //

                if (calendar_single_element) {

                    // Initialize chart
                    var calendar_single = echarts.init(calendar_single_element, null, {
                        renderer: 'svg'
                    });


                    //
                    // Chart config
                    //

                    // Demo data
                    function getVirtulData(year) {
                        year = year || '2017';
                        var date = +echarts.number.parseDate(year + '-01-01');
                        var end = +echarts.number.parseDate((+year + 1) + '-01-01');
                        var dayTime = 3600 * 24 * 1000;
                        var data = [];
                        for (var time = date; time < end; time += dayTime) {
                            data.push([
                                echarts.format.formatTime('yyyy-MM-dd', time),
                                Math.floor(Math.random() * 10000)
                            ]);
                        }
                        return data;
                    }

                    // Options
                    calendar_single.setOption({

                        // Global text styles
                        textStyle: {
                            fontFamily: 'var(--body-font-family)',
                            color: 'var(--body-color)',
                            fontSize: 14,
                            lineHeight: 22,
                            textBorderColor: 'transparent'
                        },

                        // Add title
                        title: {
                            text: 'Github commits',
                            subtext: 'Open source information',
                            left: 'center',
                            textStyle: {
                                fontSize: 18,
                                fontWeight: 500,
                                color: 'var(--body-color)'
                            },
                            subtextStyle: {
                                fontSize: 12,
                                color: 'rgba(var(--body-color-rgb), 0.5)'
                            }
                        },

                        // Add tooltip
                        tooltip: {
                            trigger: 'item',
                            className: 'shadow-sm rounded',
                            backgroundColor: 'var(--white)',
                            borderColor: 'var(--gray-400)',
                            padding: 15,
                            textStyle: {
                                color: '#000'
                            }
                        },

                        // Add legend
                        legend: {
                            orient: 'vertical',
                            top: 'center',
                            left: 0,
                            data: ['IE', 'Opera', 'Safari', 'Firefox', 'Chrome'],
                            itemHeight: 8,
                            itemWidth: 8,
                            textStyle: {
                                color: 'var(--body-color)'
                            }
                        },

                        // Visual map
                        visualMap: {
                            min: 0,
                            max: 10000,
                            type: 'piecewise',
                            orient: 'horizontal',
                            left: 'center',
                            bottom: 0,
                            itemGap: 30,
                            textStyle: {
                                fontSize: 12,
                                color: 'var(--body-color)'
                            }
                        },

                        // Calendar
                        calendar: {
                            top: 80,
                            left: 30,
                            right: 5,
                            cellSize: ['auto', 25],
                            range: '2016',
                            itemStyle: {
                                borderColor: 'var(--card-bg)',
                            },
                            splitLine: {
                                lineStyle: {
                                    color: 'var(--dark)',
                                    width: 3
                                }
                            },
                            dayLabel: {
                                color: 'var(--body-color)'
                            },
                            monthLabel: {
                                color: 'var(--body-color)'
                            },
                            yearLabel: {
                                show: false
                            }
                        },

                        // Add series
                        series: [{
                            type: 'heatmap',
                            coordinateSystem: 'calendar',
                            data: getVirtulData(2016)
                        }]
                    });
                }


                //
                // Resize charts
                //

                // Resize function
                var triggerChartResize = function() {
                    calendar_single_element && calendar_single.resize();
                };

                // On sidebar width change
                var sidebarToggle = document.querySelectorAll('.sidebar-control');
                if (sidebarToggle) {
                    sidebarToggle.forEach(function(togglers) {
                        togglers.addEventListener('click', triggerChartResize);
                    });
                }

                // On window resize
                var resizeCharts;
                window.addEventListener('resize', function() {
                    clearTimeout(resizeCharts);
                    resizeCharts = setTimeout(function() {
                        triggerChartResize();
                    }, 200);
                });
            };


            //
            // Return objects assigned to module
            //

            return {
                init: function() {
                    _calendarSingleLightExample();
                }
            }
        }();


        // Initialize module
        // ------------------------------

        document.addEventListener('DOMContentLoaded', function() {
            EchartsCalendarSingleLight.init();
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#modalId').on('shown.bs.modal', function() {
                const videoElement = $('#video')[0]; // Get the video element using jQuery

                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(function(stream) {
                        videoElement.srcObject = stream;
                    })
                    .catch(function(error) {
                        console.error('Error accessing the camera:', error);
                    });
            });

            $('#modalId').on('hidden.bs.modal', function() {
                const videoElement = $('#video')[0];
                const stream = videoElement.srcObject;
                if (stream) {
                    const tracks = stream.getTracks();
                    tracks.forEach(track => track.stop());
                    videoElement.srcObject = null;
                }
            });
        });
    </script>
@endsection
