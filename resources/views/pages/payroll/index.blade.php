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
                            <h3 class="mb-0">{{ $employees->where('status', '!=', 'terminated')->count() }}</h3>
                            <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+
                                {{ $currentMonthEmployeesCount }}</span>
                        </div>

                        <div>
                            Active Employees
                            <div class="fs-sm opacity-75">{{ $employees->count() }} overall</div>
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
                            <h3 class="mb-0">{{ Illuminate\Support\Number::currency($currentMonthReleasedAmount, 'PHP') }}
                            </h3>
                            <div class="ms-auto">
                                <a class="text-white" data-card-action="reload">
                                    <i class="ph-arrows-clockwise"></i>
                                </a>
                            </div>
                        </div>

                        <div>
                            Total Net Pay
                            <div class="fs-sm opacity-75">Last month
                                {{ Illuminate\Support\Number::currency($previousMonthReleasedAmount, 'PHP') }}</div>
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
                    </div>

                    <div class="card-body pb-0">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#"
                                        class="bg-danger bg-opacity-10 text-danger lh-1 rounded-pill p-2 me-3">
                                        <i class="ph-money"></i>
                                    </a>
                                    <div>
                                        <div class="fw-semibold">Total Salary Expense</div>
                                        <span
                                            class="text-muted">{{ Illuminate\Support\Number::currency($totalReleasedAmountYear, 'PHP') }}</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                            </div>

                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#"
                                        class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3">
                                        <i class="ph-scales"></i>
                                    </a>
                                    <div>
                                        <div class="fw-semibold">Total Contributions</div>
                                        <span
                                            class="text-muted">{{ Illuminate\Support\Number::currency(42780, 'PHP') }}</span>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                            </div>

                            <div class="col-sm-4">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <a href="#"
                                        class="bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3">
                                        <i class="ph-gift"></i>
                                    </a>
                                    <div>
                                        <div class="fw-semibold">Total Incentives Disbursed</div>
                                        <span
                                            class="text-muted">{{ Illuminate\Support\Number::currency(17082, 'PHP') }}</span>
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
                        @foreach ($employees as $item)
                            @foreach ($item->payrolls as $subItem)
                                <tr>
                                    <th class="d-flex justify-content-center ">
                                        <input type="checkbox" class="form-check-input">
                                    </th>
                                    <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                    <td>{{ $subItem->paid_hours }}</td>
                                    <td>{{ $subItem->overtime }}</td>
                                    <td><span class="text-danger fw-bold">-
                                            {{ Illuminate\Support\Number::currency($subItem->sss, 'PHP') }}</span></td>
                                    <td><span class="text-danger fw-bold">-
                                            {{ Illuminate\Support\Number::currency($subItem->phil_health, 'PHP') }}</span>
                                    </td>
                                    <td><span class="text-danger fw-bold">-
                                            {{ Illuminate\Support\Number::currency($subItem->pag_ibig, 'PHP') }}</span>
                                    </td>
                                    <td><span class="text-success fw-bold">+
                                            {{ Illuminate\Support\Number::currency($subItem->net_pay, 'PHP') }}</span></td>
                                    <td>{{ \Carbon\Carbon::parse($subItem->start_date)->format('d F Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($subItem->end_date)->format('d F Y') }}</td>
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
    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <script src="{{ URL::asset('assets/demo/pages/dashboard.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/streamgraph.js') }}"></script> --}}
    <script>
        var D3Streamgraph = function() {
            var _streamgraph = function() {
                if (typeof d3 == 'undefined') {
                    console.warn('Warning - d3.min.js is not loaded.');
                    return;
                }

                // Main variables
                var element = $('#traffic-sources')[0];
                var height = 340;

                // Initialize chart only if element exists in the DOM
                if (element) {
                    // Basic setup
                    // ------------------------------
                    // Define main variables
                    var d3Container = d3.select(element);
                    var margin = {
                        top: 5,
                        right: 50,
                        bottom: 40,
                        left: 50
                    };
                    var width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;
                    height = height - margin.top - margin.bottom;
                    var tooltipOffset = 30;

                    // Tooltip
                    var tooltip = d3Container.append("div")
                        .attr("class", "d3-tip e")
                        .style("display", "none");

                    // Format date
                    var format = d3.time.format("%m/%d/%y %H:%M");
                    var formatDate = d3.time.format("%H:%M");

                    // Use CSS vars for easy color switching
                    var colors = d3Container.append('style')
                        .attr('type', 'text/css')
                        .html(`
                            .streamgraph-layers-group {
                                --sg-color-1: #03A9F4;
                                --sg-color-2: #29B6F6;
                                --sg-color-3: #4FC3F7;
                                --sg-color-4: #81D4FA;
                                --sg-color-5: #B3E5FC;
                                --sg-color-6: #E1F5FE;
                            }
    
                            [data-color-theme="dark"] .streamgraph-layers-group {
                                --sg-color-1: #225ea8;
                                --sg-color-2: #1e90c0;
                                --sg-color-3: #40b6c4;
                                --sg-color-4: #7fcdbb;
                                --sg-color-5: #c7e8b4;
                                --sg-color-6: #edf8b1;
                            }
                        `);

                    // Colors
                    var colorrange = ['var(--sg-color-1)', 'var(--sg-color-2)', 'var(--sg-color-3)',
                        'var(--sg-color-4)', 'var(--sg-color-5)', 'var(--sg-color-6)'
                    ];

                    // Construct scales
                    // ------------------------------
                    // Horizontal
                    var x = d3.time.scale().range([0, width]);

                    // Vertical
                    var y = d3.scale.linear().range([height, 0]);

                    // Colors
                    var z = d3.scale.ordinal().range(colorrange);

                    // Create axes
                    // ------------------------------
                    // Horizontal
                    var xAxis = d3.svg.axis()
                        .scale(x)
                        .orient("bottom")
                        .ticks(d3.time.hours, 4)
                        .innerTickSize(4)
                        .tickPadding(8)
                        .tickFormat(d3.time.format("%H:%M")); // Display hours and minutes in 24h format

                    // Left vertical
                    var yAxis = d3.svg.axis()
                        .scale(y)
                        .ticks(6)
                        .innerTickSize(4)
                        .outerTickSize(0)
                        .tickPadding(8)
                        .tickFormat(function(d) {
                            return (d / 1000) + "k";
                        });

                    // Right vertical
                    var yAxis2 = yAxis;

                    // Dash lines
                    var gridAxis = d3.svg.axis()
                        .scale(y)
                        .orient("left")
                        .ticks(6)
                        .tickPadding(8)
                        .tickFormat("")
                        .tickSize(-width, 0, 0);

                    // Create chart
                    // ------------------------------
                    // Container
                    var container = d3Container.append("svg");

                    // SVG element
                    var svg = container
                        .attr('width', width + margin.left + margin.right)
                        .attr("height", height + margin.top + margin.bottom)
                        .append("g")
                        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

                    // Construct chart layout
                    // ------------------------------
                    // Stack
                    var stack = d3.layout.stack()
                        .offset("silhouette")
                        .values(function(d) {
                            return d.values;
                        })
                        .x(function(d) {
                            return d.date;
                        })
                        .y(function(d) {
                            return d.value;
                        });

                    // Nest
                    var nest = d3.nest()
                        .key(function(d) {
                            return d.key;
                        });

                    // Area
                    var area = d3.svg.area()
                        .interpolate("cardinal")
                        .x(function(d) {
                            return x(d.date);
                        })
                        .y0(function(d) {
                            return y(d.y0);
                        })
                        .y1(function(d) {
                            return y(d.y0 + d.y);
                        });

                    // Load data
                    // ------------------------------
                    d3.csv("../../../assets/demo/data/dashboard/traffic_sources.csv", function(error, data) {
                        // Pull out values
                        data.forEach(function(d) {
                            d.date = format.parse(d.date);
                            d.value = +d.value;
                        });

                        // Stack and nest layers
                        var layers = stack(nest.entries(data));

                        // Set input domains
                        // ------------------------------
                        // Horizontal
                        x.domain(d3.extent(data, function(d, i) {
                            return d.date;
                        }));

                        // Vertical
                        y.domain([0, d3.max(data, function(d) {
                            return d.y0 + d.y;
                        })]);

                        // Add grid
                        // ------------------------------
                        // Horizontal grid. Must be before the group
                        svg.append("g")
                            .attr("class", "d3-grid-dashed")
                            .call(gridAxis);

                        // Append chart elements
                        // ------------------------------
                        // Stream layers
                        // Create group
                        var group = svg.append('g')
                            .attr('class', 'streamgraph-layers-group');

                        // And append paths to this group
                        var layer = group.selectAll(".streamgraph-layer")
                            .data(layers)
                            .enter()
                            .append("path")
                            .attr("class", "streamgraph-layer d3-slice-border")
                            .attr("d", function(d) {
                                return area(d.values);
                            })
                            .style('stroke-width', 1)
                            .style('box-shadow', '0 4px 8px rgba(0,0,0,0.5)')
                            .style("fill", function(d, i) {
                                return z(i);
                            });

                        // Add transition
                        var layerTransition = layer
                            .style('opacity', 0)
                            .transition()
                            .duration(750)
                            .delay(function(d, i) {
                                return i * 50;
                            })
                            .style('opacity', 1);

                        // Append axes
                        // ------------------------------
                        // Left vertical
                        svg.append("g")
                            .attr("class", "d3-axis d3-axis-left")
                            .call(yAxis.orient("left"));

                        // Hide first tick
                        d3.select(svg.selectAll('.d3-axis-left .tick text')[0][0])
                            .style("visibility", "hidden");

                        // Right vertical
                        svg.append("g")
                            .attr("class", "d3-axis d3-axis-right")
                            .attr("transform", "translate(" + width + ", 0)")
                            .call(yAxis2.orient("right"));

                        // Hide first tick
                        d3.select(svg.selectAll('.d3-axis-right .tick text')[0][0])
                            .style("visibility", "hidden");

                        // Horizontal
                        var xaxisg = svg.append("g")
                            .attr("class", "d3-axis d3-axis-horizontal")
                            .attr("transform", "translate(0," + height + ")")
                            .call(xAxis);

                        // Add extra subticks for hidden hours
                        xaxisg.selectAll(".d3-axis-subticks")
                            .data(x.ticks(d3.time.hours), function(d) {
                                return d;
                            })
                            .enter()
                            .append("line")
                            .attr("class", "d3-axis-subticks")
                            .attr("y1", 0)
                            .attr("y2", 4)
                            .attr("x1", x)
                            .attr("x2", x);

                        // Add hover line and pointer
                        // ------------------------------
                        // Append group to the group of paths to prevent appearance outside chart area
                        var hoverLineGroup = group.append("g")
                            .attr("class", "hover-line");

                        // Add line
                        var hoverLine = hoverLineGroup
                            .append("line")
                            .attr("class", "d3-crosshair-line")
                            .attr("y1", 0)
                            .attr("y2", height)
                            .style("opacity", 0);

                        // Add pointer
                        var hoverPointer = hoverLineGroup
                            .append("rect")
                            .attr("class", "d3-crosshair-line")
                            .attr("x", 2)
                            .attr("y", 2)
                            .attr("width", 6)
                            .attr("height", 6)
                            .style('fill', '#03A9F4')
                            .style("opacity", 0);

                        // Append events to the layers group
                        // ------------------------------
                        layerTransition.each("end", function() {
                            layer
                                .on("mouseover", function(d, i) {
                                    svg.selectAll(".streamgraph-layer")
                                        .transition()
                                        .duration(250)
                                        .style("opacity", function(d, j) {
                                            return j != i ? 0.75 :
                                                1; // Mute all except hovered
                                        });
                                })
                                .on("mousemove", function(d, i) {
                                    mouse = d3.mouse(this);
                                    mousex = mouse[0];
                                    mousey = mouse[1];
                                    datearray = [];
                                    var invertedx = x.invert(mousex);
                                    invertedx = invertedx.getHours();
                                    var selected = (d.values);
                                    for (var k = 0; k < selected.length; k++) {
                                        datearray[k] = selected[k].date;
                                        datearray[k] = datearray[k].getHours();
                                    }
                                    mousedate = datearray.indexOf(invertedx);
                                    pro = d.values[mousedate].value;

                                    // Display mouse pointer
                                    hoverPointer
                                        .attr("x", mousex - 3)
                                        .attr("y", mousey - 6)
                                        .style("opacity", 1);

                                    hoverLine
                                        .attr("x1", mousex)
                                        .attr("x2", mousex)
                                        .style("opacity", 1);

                                    // Tooltip
                                    tooltip.html(
                                            '<ul class="list-unstyled mb-1 p-0">' +
                                            '<li>' +
                                            '<div class="fs-base my-1"><i class="ph-arrow-circle-left"></i><span class="d-inline-block ms-2"></span>' +
                                            d.key + '</div>' + '</li>' +
                                            '<li>' + 'Visits: &nbsp;' +
                                            "<span class='fw-semibold float-end'>" + pro +
                                            '</span>' + '</li>' +
                                            '<li>' + 'Time: &nbsp; ' +
                                            '<span class="fw-semibold float-end">' + formatDate(
                                                d.values[mousedate].date) + '</span>' +
                                            '</li>' +
                                            '</ul>'
                                        )
                                        .style("display", "block");

                                    // Tooltip arrow
                                    tooltip.append('div').attr('class', 'd3-tip-arrow');
                                })
                                .on("mouseout", function(d, i) {
                                    // Revert full opacity to all paths
                                    svg.selectAll(".streamgraph-layer")
                                        .transition()
                                        .duration(250)
                                        .style("opacity", 1);

                                    // Hide cursor pointer
                                    hoverPointer.style("opacity", 0);

                                    // Hide tooltip
                                    tooltip.style("display", "none");

                                    hoverLine.style("opacity", 0);
                                });
                        });

                        // Append events to the chart container
                        // ------------------------------
                        d3Container
                            .on("mousemove", function(d, i) {
                                mouse = d3.mouse(this);
                                mousex = mouse[0];
                                mousey = mouse[1];

                                // Move tooltip vertically
                                tooltip.style("top", (mousey - (this.querySelector('.d3-tip')
                                        .getBoundingClientRect().height / 2)) - 2 +
                                    "px") // Half tooltip height - half arrow width

                                // Move tooltip horizontally
                                if (mousex >= (this.getBoundingClientRect().width - this.querySelector(
                                        '.d3-tip').getBoundingClientRect().width - margin.right - (
                                        tooltipOffset * 2))) {
                                    tooltip
                                        .style("left", (mousex - this.querySelector('.d3-tip')
                                                .getBoundingClientRect().width - tooltipOffset) +
                                            "px"
                                        ) // Change tooltip direction from right to left to keep it inside graph area
                                        .attr("class", "d3-tip w");
                                } else {
                                    tooltip
                                        .style("left", (mousex + tooltipOffset) + "px")
                                        .attr("class", "d3-tip e");
                                }
                            });
                    });

                    // Resize chart
                    // ------------------------------
                    // Call function on window resize
                    var resizeStreamTimer;
                    $(window).resize(function() {
                        clearTimeout(resizeStreamTimer);
                        resizeStreamTimer = setTimeout(function() {
                            resizeStream();
                        }, 200);
                    });

                    // Call function on sidebar width change
                    var sidebarToggle = $('.sidebar-control');
                    if (sidebarToggle) {
                        sidebarToggle.each(function() {
                            $(this).click(resizeStream);
                        });
                    }

                    // Resize function
                    // Since D3 doesn't support SVG resize by default,
                    // we need to manually specify parts of the graph that need to
                    // be updated on window resize
                    function resizeStream() {
                        // Layout
                        // -------------------------
                        // Define width
                        width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;

                        // Main svg width
                        container.attr("width", width + margin.left + margin.right);

                        // Width of appended group
                        svg.attr("width", width + margin.left + margin.right);

                        // Horizontal range
                        x.range([0, width]);

                        // Chart elements
                        // -------------------------
                        // Horizontal axis
                        svg.selectAll('.d3-axis-horizontal').call(xAxis);

                        // Horizontal axis subticks
                        svg.selectAll('.d3-axis-subticks').attr("x1", x).attr("x2", x);

                        // Grid lines width
                        svg.selectAll(".d3-grid-dashed").call(gridAxis.tickSize(-width, 0, 0));

                        // Right vertical axis
                        svg.selectAll(".d3-axis-right").attr("transform", "translate(" + width + ", 0)");

                        // Area paths
                        svg.selectAll('.streamgraph-layer').attr("d", function(d) {
                            return area(d.values);
                        });
                    }
                }
            };

            // Return objects assigned to module
            return {
                init: function() {
                    _streamgraph();
                }
            };
        }();

        $(function() {
            D3Streamgraph.init();
        });
    </script>

    {{-- <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/sparklines.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/lines.js') }}"></script> --}}


    {{-- <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/bars.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/demo/charts/pages/dashboard/progress.js') }}"></script> --}}
@endsection
