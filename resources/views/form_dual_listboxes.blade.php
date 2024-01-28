@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Dual Listboxes @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic example -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic example</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Dual listbox is a simple and light weight component that makes multi select pretty and easy to use with only javascript. It supports filtering, sorting, programmatic control and a set of events and methods. It converts a regular <code>select</code> element into 2 select boxes with a number of actions that allow you to move items between windows. THis is a very basic example with default configuration.</p>

            <select multiple class="form-control listbox-basic">
                <option value="option1" selected>Classical mechanics</option>
                <option value="option2">Electromagnetism</option>
                <option value="option4">Relativity</option>
                <option value="option5" selected>Quantum mechanics</option>
                <option value="option7">Astrophysics</option>
                <option value="option8" selected>Biophysics</option>
                <option value="option9">Chemical physics</option>
                <option value="option10">Econophysics</option>
                <option value="option11">Geophysics</option>
                <option value="option12">Medical physics</option>
                <option value="option13">Physical chemistry</option>
                <option value="option14" selected>Continuum mechanics</option>
                <option value="option15">Electrodynamics</option>
                <option value="option16" selected>Quantum field theory</option>
                <option value="option17">Scattering theory</option>
                <option value="option18" selected>Chaos theory</option>
                <option value="option19" selected>Newton's laws of motion</option>
                <option value="option20">Thermodynamics</option>
            </select>
        </div>
    </div>
    <!-- /basic example -->


    <!-- Add options in config -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Add options in config</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">In the following example we initialize dual listbox on empty select and add options dynamically in component JS configuration. All options are stored in JSON format and added in <code>options</code> config option. Available keys are: <code>name</code>, <code>value</code> and <code>selected</code> in boolean type with <code>true</code> value.</p>

            <select multiple class="form-control listbox-options"></select>
        </div>
    </div>
    <!-- /add options in config -->


    <!-- Buttons text -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Buttons text</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Dual listbox library allows you to customize all button labels, whether you want to change default labels or add localization support. The library includes 4 options for buttons that accept values in plain text or HTML formats: <code>addButtonText</code>, <code>removeButtonText</code>, <code>addAllButtonText</code>, <code>removeAllButtonText</code>. In this example we are using caret icons from our icon set.</p>

            <select multiple class="form-control listbox-buttons">
                <option value="option1" selected>Classical mechanics</option>
                <option value="option2">Electromagnetism</option>
                <option value="option4">Relativity</option>
                <option value="option5" selected>Quantum mechanics</option>
                <option value="option7">Astrophysics</option>
                <option value="option8" selected>Biophysics</option>
                <option value="option9">Chemical physics</option>
                <option value="option10">Econophysics</option>
                <option value="option11">Geophysics</option>
                <option value="option12">Medical physics</option>
                <option value="option13">Physical chemistry</option>
                <option value="option14" selected>Continuum mechanics</option>
                <option value="option15">Electrodynamics</option>
                <option value="option16" selected>Quantum field theory</option>
                <option value="option17">Scattering theory</option>
                <option value="option18" selected>Chaos theory</option>
                <option value="option19" selected>Newton's laws of motion</option>
                <option value="option20">Thermodynamics</option>
            </select>
        </div>
    </div>
    <!-- /buttons text -->


    <!-- Sorting -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Sort items</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">The list of selected items supports manual ordering, where individual items in select area can be moved up and down on button click. This feature is simple and doesn't support multiple items selection, but in certain use cases it can be handy (e.g. to move important items into visible area and then store the list in cookies).</p>

            <select multiple class="form-control listbox-sorting">
                <option value="option1" selected>Classical mechanics</option>
                <option value="option2">Electromagnetism</option>
                <option value="option4">Relativity</option>
                <option value="option5" selected>Quantum mechanics</option>
                <option value="option7">Astrophysics</option>
                <option value="option8" selected>Biophysics</option>
                <option value="option9">Chemical physics</option>
                <option value="option10">Econophysics</option>
                <option value="option11">Geophysics</option>
                <option value="option12">Medical physics</option>
                <option value="option13">Physical chemistry</option>
                <option value="option14" selected>Continuum mechanics</option>
                <option value="option15">Electrodynamics</option>
                <option value="option16" selected>Quantum field theory</option>
                <option value="option17">Scattering theory</option>
                <option value="option18" selected>Chaos theory</option>
                <option value="option19" selected>Newton's laws of motion</option>
                <option value="option20">Thermodynamics</option>
            </select>
        </div>
    </div>
    <!-- /sorting -->


    <!-- Hide buttons -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hide buttons</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">You can also hide action buttons individually or all together. Set the following options to <code>false</code> to hide buttons: <code>showAddButton</code>, <code>showAddAllButton</code>, <code>showRemoveButton</code> and <code>showRemoveAllButton</code>. If buttons are hidden, you can move select items from one window to another on double click.</p>

            <select multiple class="form-control listbox-buttons-hidden">
                <option value="option1" selected>Classical mechanics</option>
                <option value="option2">Electromagnetism</option>
                <option value="option4">Relativity</option>
                <option value="option5" selected>Quantum mechanics</option>
                <option value="option7">Astrophysics</option>
                <option value="option8" selected>Biophysics</option>
                <option value="option9">Chemical physics</option>
                <option value="option10">Econophysics</option>
                <option value="option11">Geophysics</option>
                <option value="option12">Medical physics</option>
                <option value="option13">Physical chemistry</option>
                <option value="option14" selected>Continuum mechanics</option>
                <option value="option15">Electrodynamics</option>
                <option value="option16" selected>Quantum field theory</option>
                <option value="option17">Scattering theory</option>
                <option value="option18" selected>Chaos theory</option>
                <option value="option19" selected>Newton's laws of motion</option>
                <option value="option20">Thermodynamics</option>
            </select>
        </div>
    </div>
    <!-- /hide buttons -->

</div>
<!-- content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/forms/inputs/dual_listbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_dual_listboxes.js')}}"></script>
@endsection
