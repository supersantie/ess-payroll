<!-- Page header -->
<div class="page-header page-header-light shadow">
    {{-- <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                {{$title}} - <span class="fw-normal">{{$subtitle}}</span>
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">

            </div>
        </div>
    </div> --}}

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="index" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="#" class="breadcrumb-item">{{$title}}</a>
                <span class="breadcrumb-item active">{{$subtitle}}</span>
            </div>

            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
            <div class="d-lg-flex mb-2 mb-lg-0">


                <div class="dropdown ms-lg-3">
                    <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                        <i class="ph-gear me-2"></i>
                        <span class="flex-1">Settings</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                        <a href="{{ route('payroll_settings') }}" class="dropdown-item">
                            <i class="ph-airplay me-2"></i>
                            System
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-shield-warning me-2"></i>
                            Roles & Permissions
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="ph-gear me-2"></i>
                            All settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->
