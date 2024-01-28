@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Widgets @endslot
@slot('subtitle') Statistics @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Simple statistics -->
    <div class="mb-3">
        <h6 class="mb-0">Simple stats</h6>
        <span class="text-muted">Boxes with icons</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center">
                    <i class="ph-hand-pointing ph-2x text-success me-3"></i>

                    <div class="flex-fill text-end">
                        <h4 class="mb-0">652,549</h4>
                        <span class="text-muted">total clicks</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center">
                    <i class="ph-users-three ph-2x text-indigo me-3"></i>

                    <div class="flex-fill text-end">
                        <h4 class="mb-0">245,382</h4>
                        <span class="text-muted">total visits</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <h4 class="mb-0">54,390</h4>
                        <span class="text-muted">total comments</span>
                    </div>

                    <i class="ph-chats ph-2x text-primary ms-3"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <h4 class="mb-0">389,438</h4>
                        <span class="text-muted">total orders</span>
                    </div>

                    <i class="ph-package ph-2x text-danger ms-3"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-primary text-white">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <h4 class="mb-0">54,390</h4>
                        total comments
                    </div>

                    <i class="ph-chats ph-2x opacity-75 ms-3"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-danger text-white">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <h4 class="mb-0">389,438</h4>
                        total orders
                    </div>

                    <i class="ph-package ph-2x opacity-75 ms-3"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success text-white">
                <div class="d-flex align-items-center">
                    <i class="ph-hand-pointing ph-2x opacity-75 me-3"></i>

                    <div class="flex-fill text-end">
                        <h4 class="mb-0">652,549</h4>
                        total clicks
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-indigo text-white">
                <div class="d-flex align-items-center">
                    <i class="ph-users-three ph-2x opacity-75 me-3"></i>

                    <div class="flex-fill text-end">
                        <h4 class="mb-0">245,382</h4>
                        total visits
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /simple statistics -->


    <!-- Statistics with progress bar -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Progress stats</h6>
        <span class="text-muted">Boxes with progress bars</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-fill">
                        <h6 class="mb-0">Server maintenance</h6>
                        <span class="text-muted">Until 1st of June</span>
                    </div>

                    <i class="ph-gear ph-2x text-indigo opacity-75 ms-3"></i>
                </div>

                <div class="progress mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-indigo" style="width: 67%"></div>
                </div>

                <div>
                    <span class="float-end">67%</span>
                    Re-indexing
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-fill">
                        <h6 class="mb-0">Services status</h6>
                        <span class="text-muted">April, 19th</span>
                    </div>

                    <i class="ph-activity ph-2x text-danger opacity-75 ms-3"></i>
                </div>

                <div class="progress mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-danger" style="width: 80%"></div>
                </div>

                <div>
                    <span class="float-end">80%</span>
                    Partly operational
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center mb-3">
                    <i class="ph-gear ph-2x text-primary opacity-75 me-3"></i>

                    <div class="flex-fill">
                        <h6 class="mb-0">Server maintenance</h6>
                        <span class="text-muted">Until 1st of June</span>
                    </div>
                </div>

                <div class="progress mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-primary" style="width: 67%"></div>
                </div>

                <div>
                    <span class="float-end">67%</span>
                    Re-indexing
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="d-flex align-items-center mb-3">
                    <i class="ph-activity ph-2x text-success opacity-75 me-3"></i>

                    <div class="flex-fill">
                        <h6 class="mb-0">Services status</h6>
                        <span class="text-muted">April, 19th</span>
                    </div>
                </div>

                <div class="progress mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-success" style="width: 80%"></div>
                </div>

                <div>
                    <span class="float-end">80%</span>
                    Partly operational
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-primary text-white">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-fill">
                        <h6 class="mb-0">Server maintenance</h6>
                        <span class="opacity-75">Until 1st of June</span>
                    </div>

                    <i class="ph-gear ph-2x ms-3"></i>
                </div>

                <div class="progress bg-primary mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-white" style="width: 67%"></div>
                </div>

                <div>
                    <span class="float-end">67%</span>
                    Re-indexing
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-danger text-white">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-fill">
                        <h6 class="mb-0">Services status</h6>
                        <span class="opacity-75">April, 19th</span>
                    </div>

                    <i class="ph-activity ph-2x ms-3"></i>
                </div>

                <div class="progress bg-danger mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-white" style="width: 80%"></div>
                </div>

                <div>
                    <span class="float-end">80%</span>
                    Partly operational
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success text-white">
                <div class="d-flex align-items-center mb-3">
                    <i class="ph-gear ph-2x me-3"></i>

                    <div class="flex-fill">
                        <h6 class="mb-0">Server maintenance</h6>
                        <span class="opacity-75">Until 1st of June</span>
                    </div>
                </div>

                <div class="progress bg-success mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-white" style="width: 67%"></div>
                </div>

                <div>
                    <span class="float-end">67%</span>
                    Re-indexing
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-indigo text-white">
                <div class="d-flex align-items-center mb-3">
                    <i class="ph-activity ph-2x me-3"></i>

                    <div class="flex-fill">
                        <h6 class="mb-0">Services status</h6>
                        <span class="opacity-75">April, 19th</span>
                    </div>
                </div>

                <div class="progress bg-indigo mb-2" style="height: 0.125rem;">
                    <div class="progress-bar bg-white" style="width: 80%"></div>
                </div>

                <div>
                    <span class="float-end">80%</span>
                    Partly operational
                </div>
            </div>
        </div>
    </div>
    <!-- /statistics with progress bar -->


    <!-- Widgets with charts -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Stats with charts</h6>
        <span class="text-muted">Boxes with charts</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">

            <!-- Basic area chart -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h4 class="mb-0">$18,390</h4>
                        <div class="d-inline-flex ms-auto">
                            <a class="text-body" data-card-action="reload">
                                <i class="ph-arrow-clockwise"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        Today's revenue
                        <div class="text-muted fs-sm">$37,578 avg</div>
                    </div>
                </div>

                <div class="rounded-bottom overflow-hidden" id="chart_area_basic"></div>
            </div>
            <!-- /basic area chart -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Basic bar chart -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">3,450</h4>
                        <span class="badge bg-success rounded-pill ms-auto">+53,6%</span>
                    </div>

                    <div>
                        Members online
                        <div class="text-muted fs-sm">489 avg</div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div id="chart_bar_basic"></div>
                </div>
            </div>
            <!-- /basic bar chart -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Basic line chart -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h4 class="mb-0">4,389</h4>
                        <div class="d-inline-flex ms-auto">
                            <a class="text-body" data-card-action="reload">
                                <i class="ph-arrow-clockwise"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        Orders weekly
                        <div class="text-muted fs-sm">4,728 avg</div>
                    </div>
                </div>

                <div id="line_chart_simple"></div>
            </div>
            <!-- /basic line chart -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Basic sparklines -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h4 class="mb-0">49.4%</h4>
                        <div class="d-inline-flex dropdown ms-auto">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-arrows-clockwise me-2"></i>
                                    Update data
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-list-dashes me-2"></i>
                                    Detailed log
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-pie-slice me-2"></i>
                                    Statistics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-x me-2"></i>
                                    Clear list
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        Current server load
                        <div class="text-muted fs-sm">34.6% avg</div>
                    </div>
                </div>

                <div class="rounded-bottom overflow-hidden" id="sparklines_basic"></div>
            </div>
            <!-- /basic sparklines -->

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">

            <!-- Area chart in colored card -->
            <div class="card bg-indigo text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">$18,390</h4>
                        <div class="d-inline-flex ms-auto">
                            <a class="text-white" data-card-action="reload">
                                <i class="ph-arrow-clockwise"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        Today's revenue
                        <div class="fs-sm opacity-75">$37,578 avg</div>
                    </div>
                </div>

                <div class="rounded-bottom overflow-hidden" id="chart_area_color"></div>
            </div>
            <!-- /area chart in colored card -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Bar chart in colored card -->
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">3,450</h4>
                        <span class="badge bg-white bg-opacity-75 text-black rounded-pill ms-auto">+53,6%</span>
                    </div>

                    <div>
                        Members online
                        <div class="fs-sm opacity-75">489 avg</div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div id="chart_bar_color"></div>
                </div>
            </div>
            <!-- /bar chart in colored card -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Line chart in colored card -->
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">4,389</h4>
                        <div class="d-inline-flex ms-auto">
                            <a class="text-white" data-card-action="reload">
                                <i class="ph-arrow-clockwise"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        Orders weekly
                        <div class="fs-sm opacity-75">4,728 avg</div>
                    </div>
                </div>

                <div id="line_chart_color"></div>
            </div>
            <!-- /line chart in colored card -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Sparklines in colored card -->
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">49.4%</h4>
                        <div class="d-inline-flex dropdown ms-auto">
                            <a href="#" class="text-white d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-arrows-clockwise me-2"></i>
                                    Update data
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-list-dashes me-2"></i>
                                    Detailed log
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-pie-slice me-2"></i>
                                    Statistics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-x me-2"></i>
                                    Clear list
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        Current server load
                        <div class="fs-sm opacity-75">34.6% avg</div>
                    </div>
                </div>

                <div class="rounded-bottom overflow-hidden" id="sparklines_color"></div>
            </div>
            <!-- /sparklines in colored card -->

        </div>
    </div>
    <!-- /widgets with charts -->


    <!-- Stats with progress -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Stats with progress</h6>
        <span class="text-muted">Rounded progress bars</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">

            <!-- Satisfaction rate -->
            <div class="card card-body text-center">
                <div class="svg-center position-relative" id="progress_icon_one"></div>
                <h4 class="progress-percentage mt-2 mb-1">0%</h4>

                Satisfaction rate
                <div class="fs-sm text-muted">54% average</div>
            </div>
            <!-- /satisfaction rate -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Productivity goal  -->
            <div class="card card-body text-center">
                <div class="svg-center position-relative" id="progress_icon_two"></div>
                <h4 class="progress-percentage mt-2 mb-1">0%</h4>

                Productivity goal
                <div class="fs-sm text-muted">87% average</div>
            </div>
            <!-- /productivity goal -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Orders processed -->
            <div class="card card-body text-center bg-teal text-white">
                <div class="svg-center position-relative" id="progress_icon_three"></div>
                <h4 class="progress-percentage mt-2 mb-1">0%</h4>

                Orders processed
                <div class="fs-sm opacity-75">83 orders pending</div>
            </div>
            <!-- /orders processed -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Order shipped -->
            <div class="card card-body text-center bg-purple text-white">
                <div class="svg-center position-relative" id="progress_icon_four"></div>
                <h4 class="progress-percentage mt-2 mb-1">0%</h4>

                Orders shipped
                <div class="fs-sm opacity-75">92 orders pending</div>
            </div>
            <!-- /orders shipped -->

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">

            <!-- Invitation stats white -->
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Invitation statistics</h6>
                    <div class="text-muted mb-3">539 invites sent</div>
                    <div class="svg-center position-relative mb-1" id="progress_percentage_one"></div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="fs-sm text-muted">Accepted</div>
                        <h5 class="mb-0">2,483</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm text-muted">Declined</div>
                        <h5 class="mb-0">1,257</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm text-muted">Pending</div>
                        <h5 class="mb-0">8,472</h5>
                    </div>
                </div>
            </div>
            <!-- /invitation stats white -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Tickets stats white -->
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Tickets statistics</h6>
                    <div class="text-muted mb-3">893 tickets in total</div>
                    <div class="svg-center position-relative mb-1" id="progress_percentage_two"></div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="fs-sm text-muted">Raised</div>
                        <h5 class="mb-0">5,328</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm text-muted">Pending</div>
                        <h5 class="mb-0">2,348</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm text-muted">Closed</div>
                        <h5 class="mb-0">4,357</h5>
                    </div>
                </div>
            </div>
            <!-- /tickets stats white -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Invitation stats colored -->
            <div class="card card-body text-center bg-primary text-white">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Invitation statistics</h6>
                    <div class="opacity-75 mb-3">539 invites sent</div>
                    <div class="svg-center position-relative mb-1" id="progress_percentage_three"></div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="fs-sm">Accepted</div>
                        <h5 class="mb-0">2,483</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm">Declined</div>
                        <h5 class="mb-0">1,257</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm">Pending</div>
                        <h5 class="mb-0">8,472</h5>
                    </div>
                </div>
            </div>
            <!-- /invitation stats colored -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Tickets stats colored -->
            <div class="card card-body text-center bg-danger text-white">
                <div class="mb-3">
                    <h6 class="mb-0 mt-1">Tickets statistics</h6>
                    <div class="opacity-75 mb-3">893 tickets in total</div>
                    <div class="svg-center position-relative mb-1" id="progress_percentage_four"></div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="fs-sm">Raised</div>
                        <h5 class="mb-0">5,328</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm">Pending</div>
                        <h5 class="mb-0">2,348</h5>
                    </div>

                    <div class="col-4">
                        <div class="fs-sm">Closed</div>
                        <h5 class="mb-0">4,357</h5>
                    </div>
                </div>
            </div>
            <!-- /tickets stats colored -->

        </div>
    </div>
    <!-- /stats with progress -->


    <!-- Other chart types -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Other chart types</h6>
        <span class="text-muted">Donuts, pies, gauges</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xl-3">

            <!-- Pie with progress -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Order statistics</h6>
                <div class="fs-sm text-muted mb-3">April 23rd, 2017</div>

                <div class="svg-center" id="pie_progress_bar"></div>
            </div>
            <!-- /pie with progress -->


            <!-- Progress arc - multiple colors -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Current CPU usage</h6>
                <div class="fs-sm text-muted mb-3">37% average</div>

                <div class="svg-center" id="arc_multi"></div>
            </div>
            <!-- /progress arc - multiple colors -->


            <!-- Simple donut -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Orders in April</h6>
                <div class="fs-sm text-muted mb-3">+24% since 2016</div>

                <div class="svg-center" id="donut_basic_stats"></div>

                <div class="row text-center">
                    <div class="col-6">
                        <div class="mt-3">
                            <h5 class="mb-0">23,568</h5>
                            <span class="text-muted fs-sm">this month</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mt-3">
                            <h5 class="mb-0">$9,464</h5>
                            <span class="text-muted fs-sm">revenue</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /simple donut -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Rounded progress - multiple -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Server usage</h6>
                <div class="fs-sm text-muted mb-3">April 25th, 2017</div>

                <div class="svg-center" id="rounded_progress_multiple"></div>
            </div>
            <!-- /rounded progress - multiple -->


            <!-- Pie arc with legend -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Orders in August</h6>
                <div class="fs-sm text-muted mb-3">+53% since 2016</div>

                <div class="svg-center" id="pie_arc_legend"></div>
            </div>
            <!-- /pie arc with legend -->


            <!-- Basic donut with legend -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Orders in May</h6>
                <div class="fs-sm text-muted mb-3">+19% since 2016</div>

                <div class="svg-center" id="donut_basic_legend"></div>
            </div>
            <!-- /basic donut with legend -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Segmented gauge -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Current RAM usage</h6>
                <div class="fs-sm text-muted mb-3">49% average</div>

                <div class="svg-center" id="segmented_gauge"></div>
            </div>
            <!-- /segmented gauge -->


            <!-- Donut with details -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Support tickets</h6>
                <div class="fs-sm text-muted mb-3">April 21st, 2017</div>

                <div class="svg-center" id="donut_basic_details"></div>
            </div>
            <!-- /donut with details -->


            <!-- Basic animated pie -->
            <div class="card card-body text-center">
                <div class="svg-center" id="pie_basic"></div>

                <span class="fw-semibold">Orders in June</span>
                <div class="fs-sm text-muted">+38% since 2016</div>
            </div>
            <!-- /basic animated pie -->

        </div>

        <div class="col-sm-6 col-xl-3">

            <!-- Rounded progress -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Calories burned</h6>
                <div class="fs-sm text-muted mb-3">April 20th, 2017</div>

                <div class="svg-center" id="rounded_progress_single"></div>
            </div>
            <!-- /rounded progress -->


            <!-- Progress arc - single color -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Current RAM usage</h6>
                <div class="fs-sm text-muted mb-3">49% average</div>

                <div class="svg-center" id="arc_single"></div>
            </div>
            <!-- /progress arc - single color -->


            <!-- Pie with legend -->
            <div class="card card-body text-center">
                <h6 class="mb-0">Orders in July</h6>
                <div class="fs-sm text-muted mb-3">+19% since 2016</div>

                <div class="svg-center" id="pie_basic_legend"></div>
            </div>
            <!-- /pie with legend -->

        </div>
    </div>
    <!-- /other chart types -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/widgets_stats.js')}}"></script>
@endsection
