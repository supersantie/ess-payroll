@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Fullcalendar @endslot
@slot('subtitle') Formats @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Internationalization -->
    <div class="card">
        <div class="card-header d-lg-flex py-0">
            <h5 class="py-3 mb-0">Internationalization</h5>
            <div class="mb-3 my-lg-auto ms-lg-auto">
                <select id="lang-selector" class="form-select"></select>
            </div>
        </div>

        <div class="card-body">
            <p class="mb-3">Customize the language and localization options for the calendar using <code>locale</code> option. If you are simply loading one language, you do not need to specify the <code>locale</code> option. FullCalendar will look at the most recent language file loaded and use it. However, if more than one language file is loaded, or the combined <code>locales-all.js</code> file is loaded, you must explicitly specify which language to use via the lang option.</p>

            <div class="fullcalendar-languages"></div>
        </div>
    </div>
    <!-- /internationalization -->


    <!-- Formats -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Date formats</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">FullCalendar also uses optional adapted <code>moment.js</code> plugin to parse and display date and time. Moment plugin allows you to control different display formats: time, title, column and popover. This means you can adapt Fullcalendar to any locale and customize almost everything to your needs. The following example demonstrates different setups for <code>time</code>, <code>column</code> and <code>title</code> date/time formats in different view modes.</p>

            <div class="fullcalendar-formats"></div>
        </div>
    </div>
    <!-- /formats -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/main.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/fullcalendar/locales-all.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/fullcalendar_formats.js')}}"></script>
@endsection
