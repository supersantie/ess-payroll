@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Gallery @endslot
@slot('subtitle') General Pages @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- List styles -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Feed list styles</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Feed list is a regular bullet list with a custom style, where each item has a small bullet and item connector. It can be easily extended to support children elements, multiple lines, images, icons, action buttons etc. The most common use case for this list style is notifications or activity feed. It supports 3 different shapes (circle, square and rhombus) and 2 styles (empty and filled).</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Empty circle</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Empty square</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-square">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Empty rhombus</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-rhombus">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Filled circle</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-solid">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Filled circle</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-square list-feed-solid">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Filled circle</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-rhombus list-feed-solid">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /list styles -->


    <!-- Color options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Color options</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can change default bullet and connector color with our border color utility classes. You can apply custom border color to the whole list by adding the same color class to all items, or change border color in each item separately. To change colors, simply add <code>.border-[color]</code> to <code>.list-feed-item</code> element. This option is supported by all bullet shapes and styles.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">All empty list items</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item border-success">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item border-success">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item border-success">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item border-success">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item border-success">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item border-success">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Partial empty list items</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item border-warning">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item border-info">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item border-pink">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item border-secondary">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item border-teal">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item border-danger">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">All solid list items</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-solid">
                                <div class="list-feed-item border-warning">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item border-warning">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item border-warning">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item border-warning">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item border-warning">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item border-warning">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Partial solid list items</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-solid">
                                <div class="list-feed-item border-warning">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item border-info">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item border-pink">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item border-secondary">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item border-teal">
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item border-danger">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /color options -->


    <!-- Time and date -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Date and time</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">In these examples we added time and date stamp to each item in different alignment options. Date and time stamps can be displayed before the bullet and connector, sticked to the right edge of the container, displayed above or below the item text. In case of left aligned stamps, <code>.list-feed-time</code> class is required in the list item element.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Left aligned</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed list-feed-time">
                                <div class="list-feed-item">
                                    <span class="feed-time text-muted fs-sm">12:47</span>
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    <span class="feed-time text-muted fs-sm">10:25</span>
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    <span class="feed-time text-muted fs-sm">09:37</span>
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <span class="feed-time text-muted fs-sm">08:28</span>
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    <span class="feed-time text-muted fs-sm">07:58</span>
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <span class="feed-time text-muted fs-sm">06:32</span>
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Top aligned</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item">
                                    <div class="text-muted">Jan 12, 12:47</div>
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                </div>

                                <div class="list-feed-item">
                                    <div class="text-muted">Jan 11, 10:25</div>
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                </div>

                                <div class="list-feed-item">
                                    <div class="text-muted">Jan 10, 09:37</div>
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                </div>

                                <div class="list-feed-item">
                                    <div class="text-muted">Jan 9, 08:28</div>
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                </div>

                                <div class="list-feed-item">
                                    <div class="text-muted">Jan 8, 07:58</div>
                                    All sellers have received payouts for December, 2016!
                                </div>

                                <div class="list-feed-item">
                                    <div class="text-muted">Jan 7, 06:32</div>
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Right aligned</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">David Linner</a> requested refund for a double bank card charge
                                    </span>
                                    <div class="ms-auto text-muted fs-sm">12:47</div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                    </span>
                                    <div class="ms-auto text-muted fs-sm">10:25</div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                    </span>
                                    <div class="ms-auto text-muted fs-sm">09:37</div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                    </span>
                                    <div class="ms-auto text-muted fs-sm">08:28</div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        All sellers have received payouts for December, 2016!
                                    </span>
                                    <div class="ms-auto text-muted fs-sm">07:58</div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                    </span>
                                    <div class="ms-auto text-muted fs-sm">06:32</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold">Bottom aligned</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item">
                                    <a href="#">David Linner</a> requested refund for a double bank card charge
                                    <div class="text-muted">Jan 12, 12:47</div>
                                </div>

                                <div class="list-feed-item">
                                    User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                    <div class="text-muted">Jan 11, 10:25</div>
                                </div>

                                <div class="list-feed-item">
                                    Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                    <div class="text-muted">Jan 10, 09:37</div>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                    <div class="text-muted">Jan 9, 08:28</div>
                                </div>

                                <div class="list-feed-item">
                                    All sellers have received payouts for December, 2016!
                                    <div class="text-muted">Jan 8, 07:58</div>
                                </div>

                                <div class="list-feed-item">
                                    <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                    <div class="text-muted">Jan 7, 06:32</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /time and date -->


    <!-- Other options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Other options</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A few more examples of how the feed list is displayed with inline elements. Here we show a simple list of actionable icons and a list with dropdown menu. Icons and dropdown menus can be also displayed in the feed item itself. For better alignment, add <code>.d-flex.flex-nowrap</code> classes to each <code>.list-feed-item</code> element.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Icon list</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">David Linner</a> requested refund for a double bank card charge
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body">
                                                <i class="ph-chats"></i>
                                            </a>
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body">
                                                <i class="ph-chats"></i>
                                            </a>
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body">
                                                <i class="ph-chats"></i>
                                            </a>
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body">
                                                <i class="ph-chats"></i>
                                            </a>
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        All sellers have received payouts for December, 2016!
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body">
                                                <i class="ph-chats"></i>
                                            </a>
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body">
                                                <i class="ph-chats"></i>
                                            </a>
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-gear"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p class="fw-semibold">Icon dropdown</p>
                        <div class="border p-3 rounded">
                            <div class="list-feed">
                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">David Linner</a> requested refund for a double bank card charge
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Start chat
                                                        <i class="ph-chats ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Make a call
                                                        <i class="ph-phone ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Send mail
                                                        <i class="ph-envelope ms-auto"></i>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        Statistics
                                                        <i class="ph-chart-bar ms-auto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Start chat
                                                        <i class="ph-chats ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Make a call
                                                        <i class="ph-phone ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Send mail
                                                        <i class="ph-envelope ms-auto"></i>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        Statistics
                                                        <i class="ph-chart-bar ms-auto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Start chat
                                                        <i class="ph-chats ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Make a call
                                                        <i class="ph-phone ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Send mail
                                                        <i class="ph-envelope ms-auto"></i>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        Statistics
                                                        <i class="ph-chart-bar ms-auto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">Themesbrand</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Start chat
                                                        <i class="ph-chats ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Make a call
                                                        <i class="ph-phone ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Send mail
                                                        <i class="ph-envelope ms-auto"></i>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        Statistics
                                                        <i class="ph-chart-bar ms-auto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        All sellers have received payouts for December, 2016!
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Start chat
                                                        <i class="ph-chats ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Make a call
                                                        <i class="ph-phone ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Send mail
                                                        <i class="ph-envelope ms-auto"></i>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        Statistics
                                                        <i class="ph-chart-bar ms-auto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-feed-item d-flex flex-nowrap">
                                    <span class="me-3">
                                        <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                    </span>

                                    <div class="ms-auto">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        Start chat
                                                        <i class="ph-chats ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Make a call
                                                        <i class="ph-phone ms-auto"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        Send mail
                                                        <i class="ph-envelope ms-auto"></i>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        Statistics
                                                        <i class="ph-chart-bar ms-auto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /other options -->

</div>
<!-- /content area -->


@endsection
