@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Fullcalendar @endslot
@slot('subtitle') Advanced Examples @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- External events -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">External events</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">It’s possible to take elements that live outside of a calendar and make them drag-and-droppable. When they are dropped on a specific date of a calendar, a new event might be created and certain callbacks might fire. It is possible to achieve this using FullCalendar alone, without any third party libraries. In the most basic case, you can create a draggable element by instantiating a <code>Draggable</code>. You must also set the calendar’s <code>droppable</code> setting to <code>true</code> and add some config.</p>

            <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3">
                        <h6>Draggable Events</h6>
                        <div class="bg-light border rounded p-2 mb-3" id="external-events-list">
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2" data-color="#546E7A">
                                <div class="fc-event-main">Sauna and stuff</div>
                            </div>
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2" data-color="#26A69A">
                                <div class="fc-event-main">Lunch time</div>
                            </div>
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2" data-color="#546E7A">
                                <div class="fc-event-main">Meeting with Fred</div>
                            </div>
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2" data-color="#FF7043">
                                <div class="fc-event-main">Shopping</div>
                            </div>
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2" data-color="#5C6BC0">
                                <div class="fc-event-main">Restaurant</div>
                            </div>
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2">
                                <div class="fc-event-main">Basketball</div>
                            </div>
                            <div class="fc fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                <div class="fc-event-main">Daily routine</div>
                            </div>
                        </div>

                        <label class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="drop-remove" checked>
                            <span class="form-check-label">Remove after drop</span>
                        </label>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="fullcalendar-external"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /external events -->


    <!-- Selectable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Selectable</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">In this example, Fullcalendar allows a user to highlight multiple days or timeslots by clicking and dragging. To let the user make selections by clicking and dragging, the <code>interaction</code> plugin must be loaded and this option must be set to <code>true</code>. You can either load it separately or use a global bundle (default). To use, set <code>selectable</code> option to <code>true</code>.</p>

            <div class="fullcalendar-selectable"></div>
        </div>
    </div>
    <!-- /selectable -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/fullcalendar_advanced.js')}}"></script>
@endsection
