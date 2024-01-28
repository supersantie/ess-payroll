@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Fullcalendar @endslot
@slot('subtitle') Basic Views @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic view -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic view</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">FullCalendar is a JS plugin that provides a full-sized, drag &amp; drop event calendar like the one below. It uses AJAX to fetch events on-the-fly and is easily configured to use your own feed format. It is visually customizable with a rich API. Example below demonstrates a default view of the calendar with a basic setup: draggable and editable events, and starting date.</p>

            <div class="fullcalendar-basic"></div>
        </div>
    </div>
    <!-- /basic view -->


    <!-- Agenda view -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Agenda view</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">FullCalendar has a number of different "views", or ways of displaying days and events. The following 5 views are all built in to FullCalendar: <code>month</code>, <code>timeGrid</code>, <code>list view</code>, <code>dayGrid</code>, <code>custom views</code>. You can define header buttons to allow the user to switch between them. Also you can set the initial view of the calendar with the defaultView option. The following example demonstrates <code>timeGrid</code> views.</p>

            <div class="fullcalendar-agenda"></div>
        </div>
    </div>
    <!-- /agenda view -->


    <!-- List view -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">List view</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A list view is a type of available views that displays events in a flat list. Only days with events are displayed. A list view displays events during a specific interval of time. There are 4 preset list views: <code>listDay</code>, <code>listWeek</code>, <code>listMonth</code>, and <code>listYear</code>. The following example demonstrates <code>listWeek</code>, <code>listDay</code> and <code>listMonth</code> views.</p>

            <div class="fullcalendar-list"></div>
        </div>
    </div>
    <!-- /list view -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/fullcalendar_basic.js')}}"></script>
@endsection
