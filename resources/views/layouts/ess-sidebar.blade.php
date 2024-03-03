        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->


                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" id="navbar-nav" data-nav-type="accordion">
                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">ESS</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ess.dashboard') }}"
                                class="nav-link {{ request()->routeIs('ess.dashboard') ? 'active' : '' }}">
                                <i class="ph-house"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tna.index') }}"
                                class="nav-link {{ request()->routeIs('tna.index') ? 'active' : '' }}">
                                <i class="ph-folder-simple-lock"></i>
                                <span>
                                    Time & Attendance
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-spinner-gap"></i>
                                <span>Requests</span>
                            </a>
                            <ul class="nav-group-sub collapse ">
                                <a href="{{ route('leaves.index') }}"
                                    class="nav-link {{ request()->routeIs('leaves.index') ? 'active' : '' }}">Leave</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('reimbursements.index') }}"
                                class="nav-link {{ request()->routeIs('reimbursements.index') ? 'active' : '' }}">Reimbursement</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('certificate.index') }}"
                                class="nav-link {{ request()->routeIs('certificate.index') ? 'active' : '' }}">Certificate
                                of Employment</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('payslips.index') }}"
                            class="nav-link {{ request()->routeIs('payslips.index') ? 'active' : '' }}">
                            <i class="ph-scroll"></i>
                            <span>
                                Payslips
                            </span>
                        </a>
                    </li>
                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->
