@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Tabs @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic tabs title -->
    <div class="mb-3">
        <h6 class="mb-0">
            Basic tabs
        </h6>
        <span class="text-muted d-block">Bordered tabs layout with optional overline border</span>
    </div>
    <!-- /basic tabs title -->


    <!-- Basic tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic tabs</h6>
                <p class="mb-3">All navigations in Limitless share general markup and styles. All ot them require <code>.nav</code> class for basic styling and modifier nav type class. Use <code>.nav-tabs</code> to display nav links as tabs.</p>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic justified</h6>
                <p class="mb-3">Force your <code>.nav</code> ’s contents to extend the full width. To proportionately fill all available space with your nav items, use <code>.nav-fill</code>. For equal-width elements, use <code>.nav-justified</code></p>

                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /basic tabs -->


    <!-- Rounded basic tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic roundless</h6>
                <p class="mb-3">Use <code>.rounded-top-0</code> class in <code>.nav-link</code> element to remove rounded corners from links. Additionally you can use <code>.border-top-0</code> to remove top border in containers with top border</p>

                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#" class="nav-link rounded-top-0 active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link rounded-top-0">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-top-0 dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Justified roundedless</h6>
                <p class="mb-3">Similar to tabs with auto width, use <code>.rounded-top-0</code> in nav link container to make corners roundless. Useful when tabs are displayed in toolbars or to match styling of parent container</p>

                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item"><a href="#" class="nav-link rounded-top-0 active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link rounded-top-0">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-top-0 dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /rounded basic tabs -->


    <!-- Highlighted tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Highlighted tabs</h6>
                <p class="mb-3">By default, border on all sides in active tab share the same color. You can highlight top border in active tab by adding <code>.nav-tabs-highlight</code> class to the base <code>.nav</code> container</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Highlighted justified</h6>
                <p class="mb-3">To highlight top border in active tab in nav container that has equal nav link widths, add <code>.nav-tabs-highlight</code> class to <code>.nav-tabs-justified</code> or <code>.nav-tabs-filled</code> container</p>

                <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /highlighted tabs -->



    <!-- Underline tabs title-->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Undeline tabs
        </h6>
        <span class="text-muted d-block">Display only <code>bottom</code> border in active tab</span>
    </div>
    <!-- /underline tabs title -->


    <!-- Underline tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Underline tabs</h6>
                <p class="mb-3">An emphasized tab that is always paired with an attached background container. It is commonly used for larger content areas. Active tab is highlighted with thick bottom line</p>

                <ul class="nav nav-tabs nav-tabs-underline">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Underline justified</h6>
                <p class="mb-3">Underline always takes all available space and always matches tab width. Use both <code>.nav-tabs-underline</code> and <code>.nav-tabs-[justfied|filled]</code> classes in base nav container</p>

                <ul class="nav nav-tabs nav-tabs-underline nav-justified">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- /underline tabs -->


    <!-- Underline borderless -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Underline borderless</h6>
                <p class="mb-3">By default, all tab layouts include bottom border for better visual separation. You can hide it by adding our <code>.border-bottom-0</code> utility class to the base <code>.nav</code> container</p>

                <ul class="nav nav-tabs nav-tabs-underline border-bottom-0">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Underline borderless justified</h6>
                <p class="mb-3">Justified tabs also can be borderless. This option can be very useful when tabs are displayed in some container that has slightly darker backround color, e.g. sub-pages</p>

                <ul class="nav nav-tabs nav-tabs-underline nav-justified border-bottom-0">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /underline borderless -->



    <!-- Overline tabs title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Overline tabs
        </h6>
        <span class="text-muted d-block">Display only <code>top</code> border in active tab</span>
    </div>
    <!-- /overline tabs title -->


    <!-- Overline tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Overline tabs</h6>
                <p class="mb-3">Similar to underline layout, overline tabs are commonly used as navigation in bottom areas, e.g. card footer. In overline tabs, active tab is highlighted with thick top line</p>

                <ul class="nav nav-tabs nav-tabs-overline">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Overline justified</h6>
                <p class="mb-3">Overline always takes all available space and always matches tab width. Use both <code>.nav-tabs-overline</code> and <code>.nav-tabs-[justfied|filled]</code> classes in base nav container</p>

                <ul class="nav nav-tabs nav-tabs-overline nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /overline tabs -->


    <!-- Overline borderless -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Overline borderless</h6>
                <p class="mb-3">By default, overline tab layout include top border for better visual separation. You can hide it by adding our <code>.border-top-0</code> utility class to the base <code>.nav</code> container</p>

                <ul class="nav nav-tabs nav-tabs-overline border-top-0">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Overline borderless justified</h6>
                <p class="mb-3">Justified tabs also can be borderless. This option can be very useful when tabs are displayed in some container that has slightly darker backround color, e.g. sub-pages</p>

                <ul class="nav nav-tabs nav-tabs-overline border-top-0 nav-justified">
                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Inactive</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /overline borderless -->



    <!-- Vertical tabs -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Vertical tabs
        </h6>
        <span class="text-muted d-block">Stack tabs navigation and display it on the left or right side</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Left alignment</h6>
                <div>Tabs support vertical layout. If you need to display a list of tabs on the left, add <code>.nav-tabs-vertical</code> and <code>.nav-tabs-vertical-start</code> classes to the base tabs container</div>

                <hr>

                <div class="d-lg-flex">
                    <ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-start wmin-lg-200 me-lg-3 mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a href="#vertical-left-tab1" class="nav-link active" data-bs-toggle="tab">
                                <i class="ph-user-circle me-2"></i>
                                Active
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#vertical-left-tab2" class="nav-link" data-bs-toggle="tab">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                Inactive
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-shopping-cart me-2"></i>
                                Dropdown
                            </a>
                            <div class="dropdown-menu">
                                <a href="#vertical-left-tab3" class="dropdown-item" data-bs-toggle="tab">Dropdown tab</a>
                                <a href="#vertical-left-tab4" class="dropdown-item" data-bs-toggle="tab">Another tab</a>
                            </div>
                        </li>
                    </ul>

                    <div class="tab-content flex-lg-fill">
                        <div class="tab-pane fade show active" id="vertical-left-tab1">
                            Basic vertical tabs with left nav using <code>.nav-tabs-vertical</code> class.
                        </div>

                        <div class="tab-pane fade" id="vertical-left-tab2">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                        </div>

                        <div class="tab-pane fade" id="vertical-left-tab3">
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                        </div>

                        <div class="tab-pane fade" id="vertical-left-tab4">
                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Right alignment</h6>
                <div>If you need to display a list of tabs on the right and content on the left, add <code>.nav-tabs-vertical</code> and <code>.nav-tabs-vertical-end</code> classes to the base tabs container</div>

                <hr>

                <div class="d-lg-flex">
                    <div class="tab-content flex-lg-fill">
                        <div class="tab-pane fade show active" id="vertical-right-tab1">
                            Basic vertical tabs with right nav using <code>.nav-tabs-vertical nav-tabs-vertical-right</code> class.
                        </div>

                        <div class="tab-pane fade" id="vertical-right-tab2">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                        </div>

                        <div class="tab-pane fade" id="vertical-right-tab3">
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                        </div>

                        <div class="tab-pane fade" id="vertical-right-tab4">
                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-end wmin-lg-200 ms-lg-3 mt-3 mt-lg-0">
                        <li class="nav-item"><a href="#vertical-right-tab1" class="nav-link active" data-bs-toggle="tab">Active</a></li>
                        <li class="nav-item"><a href="#vertical-right-tab2" class="nav-link" data-bs-toggle="tab">Inactive</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu">
                                <a href="#vertical-right-tab3" class="dropdown-item" data-bs-toggle="tab">Dropdown tab</a>
                                <a href="#vertical-right-tab4" class="dropdown-item" data-bs-toggle="tab">Another tab</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /vertical tabs -->




    <!-- Solid tabs title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Solid tabs
        </h6>
        <span class="text-muted d-block">Make tabs stand out and display them as toolbar</span>
    </div>
    <!-- /solid tabs title -->


    <!-- Solid tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid tabs</h6>
                <p class="mb-3">Solid tabs can be displayed as a toolbar. Our custom <code>.nav-tabs-solid</code> class adds background color to the nav and applies our regular active component item style</p>

                <ul class="nav nav-tabs nav-tabs-solid mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-tabs-solid rounded">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid justified</h6>
                <p class="mb-3">Force solid tabs contents to extend the full width. To proportionately fill all available space with your nav items, use <code>.nav-fill</code>. For equal-width elements, use <code>.nav-justified</code></p>

                <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-tabs-solid nav-justified rounded">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /solid tabs -->


    <!-- Solid bordered tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid bordered tabs</h6>
                <p class="mb-3">Add border to solid tabs with <code>.border</code> utility class, if you need to display them as a stand alone component. Optionally use <code>.rounded-[start|end]</code> to round left or right corners only</p>

                <ul class="nav nav-tabs nav-tabs-solid border mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-tabs-solid border rounded">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Solid bordered justified</h6>
                <p class="mb-3">To stretch solid tabs so that they either have equal width or proportionally fill all 100% width. Use <code>.nav-[justified|filled] .nav-tabs-solid</code> along with <code>.border</code> class</p>

                <ul class="nav nav-tabs nav-tabs-solid nav-justified border mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-tabs-solid nav-justified border rounded">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /solid bordered tabs -->


    <!-- Colored tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Colored tabs</h6>
                <p class="mb-3">You can use any background color from our color system in solid tabs. Use <code>.nav-tabs-solid.nav-tabs-solid-dark</code> and <code>.bg-[color]</code> to apply custom styles in active state</p>

                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-secondary mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-secondary rounded">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Colored justified</h6>
                <p class="mb-3">The same as in tabs with auto width, but including either <code>.nav-justified</code> or <code>.nav-filled</code> classes depending on fill option. Use our border radius utility classes to rounded nav corners</p>

                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-secondary nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-secondary nav-justified rounded">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded-start active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link rounded-end dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /colored tabs -->



    <!-- Javascript behaviour -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Javascript behaviour
        </h6>
        <span class="text-muted d-block">Positioning, stacked options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Basic tabs</h6>
                <p class="mb-3">Use the tab JavaScript plugin to extend our navigational tabs and pills to create tabbable panes of local content. Just add <code>.data-bs-toggle="tab"</code> to all nav links and assign ID's to content panes</p>

                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="#js-tab1" class="nav-link active" data-bs-toggle="tab">
                            Active
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#js-tab2" class="nav-link" data-bs-toggle="tab">
                            Inactive
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#js-tab3" class="nav-link disabled" data-bs-toggle="tab">
                            Disabled
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="js-tab1">
                        This is some placeholder content the <strong>first</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-tab2">
                        This is some placeholder content the <strong>second</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-tab3">
                        This is some placeholder content the <strong>third</strong> tab's associated content
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Tabs with dropdown</h6>
                <p class="mb-3">Tabs can be toggled from dropdown menu items, if they contain <code>data-bs-toggle="tab"</code> with corresponding content pane ID. Call the dropdown in a regular way via <code>data-bs-toggle="dropdown"</code> in nav link</p>

                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="#js-dropdown-pill1" class="nav-link active" data-bs-toggle="tab">
                            Active
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#js-dropdown-pill2" class="nav-link" data-bs-toggle="tab">
                            Inactive
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#js-dropdown-pill3" class="dropdown-item" data-bs-toggle="tab">Dropdown pill</a>
                            <a href="#js-dropdown-pill4" class="dropdown-item" data-bs-toggle="tab">Another pill</a>
                        </div>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="js-dropdown-pill1">
                        This is some placeholder content the <strong>first</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-dropdown-pill2">
                        This is some placeholder content the <strong>second</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-dropdown-pill3">
                        This is some placeholder content the <strong>third</strong> tab's associated content
                    </div>

                    <div class="tab-pane fade" id="js-dropdown-pill4">
                        This is some placeholder content the <strong>fourth</strong> tab's associated content
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->



    <!-- Tab options title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Optional styling and elements
        </h6>
        <span class="text-muted d-block">Display icons, labels, badges and images in nav tabs</span>
    </div>
    <!-- /tab options title -->


    <!-- Tabs alignment -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Centered position</h6>
                <p class="mb-3">By default, tabs are left aligned. But you can control it with our flex utility classes. To center tabs horizontally, add <code>.justify-content-center</code> to the base <code>.nav-tabs</code> container</p>

                <ul class="nav nav-tabs nav-tabs-highlight justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Right position</h6>
                <p class="mb-3">The same as centered tabs, but with a different class name - <code>.justify-content-end</code>. You can also use responsive variations to change tabs alignment on different breakpoints</p>

                <ul class="nav nav-tabs nav-tabs-highlight justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Active</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inactive</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown tab</a>
                            <a href="#" class="dropdown-item">Another tab</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /tabs alignment -->


    <!-- Tabs with close button -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Tabs with close button</h6>
                <p class="mb-3">This style is usually used for dynamic navigation with some edit/remove functionality. Use flex utility classes in nav links and include a <code>span</code> element with <code>.nav-btn-close</code> class</p>

                <ul class="nav nav-tabs nav-tabs-underline">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center active pe-2">
                            Active
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center pe-2">
                            Inactive
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center pe-2" data-bs-toggle="dropdown">
                            Dropdown
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Justified tabs with close button</h6>
                <p class="mb-3">Justified and filled tabs here require additional <code>.justify-content-center</code> class in <code>.nav-link</code> element to center tab text, because by default the text is aligned to the left</p>

                <ul class="nav nav-tabs nav-tabs-underline nav-justified">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center justify-content-center active pe-2">
                            Active
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center justify-content-center pe-2">
                            Inactive
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center justify-content-center pe-2" data-bs-toggle="dropdown">
                            Dropdown
                            <span class="nav-btn-close rounded-1 ms-2 me-1">
                                <i class="ph-x ph-sm"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /tabs with close button -->


    <!-- Multiline tabs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Multiline tabs</h6>
                <p class="mb-3">To display a large sized navigation with title and subtitle, use 2 elements inside <code>.nav-link</code> container. You can style up the text as you want with text utility classes</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link active">
                            <div>
                                <div class="fw-semibold">Language &amp; region</div>
                                <span class="opacity-50">My localisation settings</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="me-2">
                                <div class="fw-semibold">Privacy &amp; settings</div>
                                <span class="opacity-50">Configure my account</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Multiline with icon</h6>
                <p class="mb-3">Tabs support icons in different sizes and styles. Background can be controlled with <code>.bg-[color].bg-opacity-[value]</code> classes, text color can be changed via our text color utility classes</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link active ps-2">
                            <div class="d-flex align-items-center">
                                <i class="ph-globe ph-lg bg-primary text-primary bg-opacity-10 rounded p-2 me-3"></i>
                                <div>
                                    <div class="fw-semibold">Language &amp; region</div>
                                    <span class="opacity-50">My localisation settings</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle ps-2" data-bs-toggle="dropdown">
                            <div class="d-flex align-items-center me-2">
                                <i class="ph-gear ph-lg bg-primary text-primary bg-opacity-10 rounded p-2 me-3"></i>
                                <div>
                                    <div class="fw-semibold">Privacy &amp; settings</div>
                                    <span class="opacity-50">Configure my account</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /multiline tabs -->


    <!-- Icons and labels -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Tabs with icons</h6>
                <p class="mb-3">Icons are supported in all navigation types, in both left and right alignment options. They don't have spacing by default, so use <code>.ms-2</code> to add left spacing and <code>.me-2</code> to add right spacing</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="ph-user-circle me-2"></i>
                            Left icon
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Right icon
                            <i class="ph-currency-circle-dollar ms-2"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Tabs with labels</h6>
                <p class="mb-3">Text labels with custom style are using <code>.badge</code> component, but with slightly rounded corners. Empty labels are hidden by default, so it's recommended to always use pill text as well</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span class="badge bg-secondary me-2">Bug</span>
                            Left label
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Right label
                            <span class="badge bg-warning ms-2">Fixed</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="badge bg-success">Priority</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /icons and labels -->


    <!-- Badges and images -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Tabs with badges</h6>
                <p class="mb-3">Display <code>badges</code> on the left/right sides and in empty tab. Tabs in all states use the same color theme, so feel free to choose any badge style or color. Use margin utility classes to add spacing</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span class="badge bg-dark rounded-pill me-2">62</span>
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Inactive
                            <span class="badge bg-teal rounded-pill ms-2">23</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="badge bg-pink rounded-pill">34</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <h6 class="fw-semibold">Tabs with images</h6>
                <p class="mb-3">Nav tabs also support small images in left and right alignment. Just use regular <code>&lt;img&gt;</code> element with width/height attributes set to <code>22</code> (default line height) and flex classes to center them properly</p>

                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center active">
                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="22" height="22" class="rounded-pill me-2" alt="">
                            Active
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center">
                            Inactive
                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="22" height="22" class="rounded-pill ms-2" alt="">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="22" height="22" class="rounded-pill" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Dropdown pill</a>
                            <a href="#" class="dropdown-item">Another pill</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /badges and images -->

</div>
<!-- /content area -->

@endsection
