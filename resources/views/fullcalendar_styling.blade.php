@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Fullcalendar @endslot
@slot('subtitle') Styling @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Event colors -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Event colors</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">FullCalendar allows you to change the color of all events on the calendar using the <code>eventColor</code> option. Also you can change text, border and background colors for events in a specific Event Source with <code>event source</code> options (backgroundColor, color, textColor and borderColor) and for individual events with <code>color</code> option, which sets an event's background and border color. Example below demonstrates event colors based on a day of the week.</p>

            <div class="fullcalendar-event-colors"></div>
        </div>
    </div>
    <!-- /event colors -->


    <!-- Background events -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Background events</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Events that appear as background highlights can be achieved by setting an Event Object's <code>rendering</code> property to <code>background</code>. Background events that are <span class="fw-semibold">timed</span> will only be rendered on the time slots in agenda view. Background events that are <span class="fw-semibold">all-day</span> will only be rendered in month view or the all-day slots of agenda view. Also the spans of time <span class="fw-semibold">not</span> occupied by an event can be colored by setting the <code>rendering</code> property to <code>inverse-background</code>.</p>

            <div class="fullcalendar-background-colors"></div>
        </div>
    </div>
    <!-- /background events -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/fullcalendar_styling.js')}}"></script>
@endsection
