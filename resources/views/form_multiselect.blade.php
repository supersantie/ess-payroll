@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Multiselect @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Multiselect examples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiselect</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Multiselect is a JQuery based plugin to provide an intuitive user interface for using select inputs with the multiple attribute present. Instead of a regular select, the library displays the button with dropdown menu containing the single options as checkboxes. Although the same feature can be achieved with regular dropdown menu and a list of checkboxes, this library provides extensive list of additional options that dropdown menu doesn't have. Explore the examples below.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Basic examples</div>

                <!-- Default multiselect -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default select</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /default multiselect -->


                <!-- Default multiselect with selected options -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default selected options</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes" selected>Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms" selected>Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /default multiselect with selected options -->


                <!-- Options with divider -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Options with divider</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option data-role="divider"></option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /options with divider -->


                <!-- Option groups support -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Option groups support</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <optgroup label="Mathematics">
                                <option value="analysis">Analysis</option>
                                <option value="algebra">Linear Algebra</option>
                                <option value="discrete">Discrete Mathematics</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                                <option value="programming">Introduction to Programming</option>
                                <option value="complexity">Complexity Theory</option>
                                <option value="software">Software Engineering</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /option groups support -->


                <!-- Options with and without groups -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Options with and without groups</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="lab">Lab Course</option>
                            <option value="proseminar">Proseminar</option>
                            <optgroup label="Mathematics">
                                <option value="analysis">Analysis</option>
                                <option value="algebra">Linear Algebra</option>
                                <option value="probability">Probability Theory</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                                <option value="programming">Introduction to Programming</option>
                                <option value="automata">Automata Theory</option>
                                <option value="software">Software Engineering</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /options with and without groups -->


                <!-- Dropdown with max height -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Dropdown with max height</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-max-height="200">
                            <optgroup label="Mathematics">
                                <option value="analysis">Analysis</option>
                                <option value="algebra">Linear Algebra</option>
                                <option value="discrete">Discrete Mathematics</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                                <option value="programming">Introduction to Programming</option>
                                <option value="complexity">Complexity Theory</option>
                                <option value="software">Software Engineering</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /dropdown with max height -->


                <!-- Select All option -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With <span class="fw-semibold">Select all</span> option</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-include-select-all-option="true">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /select All option -->


                <!-- Select All option selected -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select all option response</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-include-select-all-option="true">
                            <option value="cheese" selected>Cheese</option>
                            <option value="tomatoes" selected>Tomatoes</option>
                            <option value="mozarella" selected>Mozzarella</option>
                            <option value="mushrooms" selected>Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /select All option selected -->


                <!-- Filtering options -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3"><span class="fw-semibold">Filtering</span> option</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-enable-filtering="true" data-enable-case-insensitive-filtering="true">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /filtering options -->


                <!-- Select All and filtering options -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3"><span class="fw-semibold">Select All</span> and <span class="fw-semibold">Filtering</span> options</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-include-select-all-option="true" data-enable-filtering="true" data-enable-case-insensitive-filtering="true">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /select All and filtering options -->


                <!-- Optgroups, filtering and select all -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Full featured example</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-include-select-all-option="true" data-enable-filtering="true">
                            <option value="lab">Lab Course</option>
                            <option value="proseminar">Proseminar</option>
                            <optgroup label="Mathematics">
                                <option value="analysis">Analysis</option>
                                <option value="algebra">Linear Algebra</option>
                                <option value="probability">Probability Theory</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                                <option value="programming">Introduction to Programming</option>
                                <option value="complexity">Complexity Theory</option>
                                <option value="software">Software Engineering</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /optgroups, filtering and select all -->


                <!-- Disabled select -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled select</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" disabled>
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /disabled select -->


                <!-- Disabled options -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled options</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes" disabled selected>Tomatoes</option>
                            <option value="mozarella" disabled>Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /disabled options -->


                <!-- Disabled optgroups -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled optgroups</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <optgroup label="Mathematics" disabled>
                                <option value="analysis">Analysis</option>
                                <option value="algebra">Linear Algebra</option>
                                <option value="probability">Probability Theory</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                                <option value="programming">Introduction to Programming</option>
                                <option value="complexity">Complexity Theory</option>
                                <option value="software">Software Engineering</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /disabled optgroups -->


                <!-- Prevent deselect -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Prevent deselect</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-prevent-deselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /prevent deselect -->


                <!-- Single select -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single select</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /single select -->


                <!-- Alternative labels for options -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Alternative labels for options</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="analysis" label="An (Analysis)">Analysis</option>
                            <option value="algebra" label="LA (Linear Algebra)">Linear Algebra</option>
                            <option value="discrete" label="Discrete (Mathematics)">Discrete Mathematics</option>
                        </select>
                    </div>
                </div>
                <!-- /alternative labels for options -->


                <!-- Limit options number -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Limit options number</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-number-displayed="1">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /limit options number -->


                <!-- Custom empty text -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Custom empty text</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-non-selected-text="Please choose">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /custom empty -->


                <!-- Clickable optgroups -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Clickable optgroups</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-enable-clickable-opt-groups="true">
                            <optgroup label="Mathematics">
                                <option value="analysis">Analysis</option>
                                <option value="algebra">Linear Algebra</option>
                                <option value="discrete">Discrete Mathematics</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                                <option value="programming">Introduction to Programming</option>
                                <option value="complexity">Complexity Theory</option>
                                <option value="software">Software Engineering</option>
                            </optgroup>
                            <optgroup label="Physics">
                                <option value="mechanics">Classical Mechanics</option>
                                <option value="magnetism">Electromagnetism</option>
                                <option value="quantum">Quantum Mechanics</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /clickable optgroups -->


                <!-- Disable if empty -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disable if no options are given</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-disable-if-empty="true"></select>
                    </div>
                </div>
                <!-- /disable if empty -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Input group</div>

                <!-- Within a group with addon -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Within a group with addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-user-circle"></i>
                            </span>

                            <select class="form-control multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /within a group with addon -->


                <!-- Within a group with button -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Within a group with button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light" type="button">Action</button>
                            <select class="form-control multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /within a group with button -->


                <!-- Within a group with button dropdown -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Within a group with button dropdown</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">One more separated line</a>
                            </div>

                            <select class="form-control multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /within a group with button dropdown -->


                <!-- Within a group with segmented button dropdown -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Within a group with segmented button dropdown</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">One more separated line</a>
                            </div>

                            <select class="form-control multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /within a group with segmented button dropdown -->


                <!-- Within a group with checkbox -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Within a group with checkbox</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <div class="input-group-text">
                                <input type="checkbox" class="form-check-input" checked>
                            </div>

                            <select class="form-control multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /within a group with checkbox -->


                <!-- Within a group with radio -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Within a group with radio</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <div class="input-group-text">
                                <input type="radio" class="form-check-input" name="radio" checked>
                            </div>

                            <select class="form-control multiselect" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /within a group with radio -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Sizing</div>

                <!-- Full width -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Full width button (default)</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                        </select>
                    </div>
                </div>
                <!-- /full width -->


                <!-- Fixed width in px -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Fixed width in px</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-button-width="250">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                        </select>
                    </div>
                </div>
                <!-- /fixed width in px -->


                <!-- Fixed width in % -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Fixed width in %</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple" data-button-width="50%">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                        </select>
                    </div>
                </div>
                <!-- /fixed width in % -->


                <!-- Large button -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Large select</label>
                    <div class="col-lg-9">
                        <select class="form-control form-control-lg multiselect" multiple="multiple" data-button-class="btn btn-lg">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                        </select>
                    </div>
                </div>
                <!-- /large button -->


                <!-- Default button -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default select</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                        </select>
                    </div>
                </div>
                <!-- /default button -->


                <!-- Small button -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Small select</label>
                    <div class="col-lg-9">
                        <select class="form-control form-control-sm multiselect" multiple="multiple" data-button-class="btn btn-sm">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                        </select>
                    </div>
                </div>
                <!-- /small button -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Advanced examples</div>

                <!-- Showing values -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Showing values</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-display-values" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-display-values-select">Select</button>
                                <button type="button" class="btn btn-light multiselect-display-values-deselect">Deselect</button>
                            </div>
                        </div>

                        <div class="form-text">Use "Select" and "Deselect" buttons to select or deselect cheese and tomatoes. Display selected or deselected options by using <code>$('.multiselect').val()</code> method.</div>

                        <div class="values-area mt-2"></div>
                    </div>
                </div>
                <!-- /showing values -->


                <!-- Toggle selection -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Toggle selection</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-toggle-selection" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-toggle-selection-button">Select All</button>
                            </div>
                        </div>

                        <div class="form-text">Use the button to toggle the selection. Don't forget to include <code>$.uniform.update();</code> to update checkboxes or radios state dynamically.</div>
                    </div>
                </div>
                <!-- /toggle selection -->


                <!-- Order options -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Order options</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-order-options" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-primary multiselect-order-options-button">Order</button>
                            </div>
                        </div>

                        <div class="form-text">Record the order the options are selected. When selecting an item an ordering number will be incremented and saved within the option.</div>
                    </div>
                </div>
                <!-- /order options -->


                <!-- Simulate selections -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Simulate selections</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-simulate-selections" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                        </select>

                        <div class="form-text">Simulate single selections using checkboxes. The behavior will be similar to a multiselect with radio buttons.</div>
                    </div>
                </div>
                <!-- /simulate selections -->


                <!-- Limit options and disable -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Limit options and disable</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-limit-options" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                        </select>

                        <div class="form-text">Select a maximum of 3 options. Then all other options are disabled.</div>
                    </div>
                </div>
                <!-- /limit options and disable -->


                <!-- Reset button -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Reset button</label>
                    <div class="col-lg-9">
                        <form class="d-md-flex" id="multiselect-reset-form">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-reset" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </form>

                        <div class="form-text">Using a reset button together with a multiselect. Select options then click Reset button to reset selections.</div>
                    </div>
                </div>
                <!-- /reset button -->


                <!-- Templates -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiselect templates</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-templates" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option data-role="divider"></option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option data-role="divider"></option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                        </select>

                        <div class="form-text">The templates can be overriden using the <code>templates</code> configuration option. The example below uses a <code>red</code> border color for dividers.</div>
                    </div>
                </div>
                <!-- /templates -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Events</div>

                <!-- onChange notice -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">onChange notice</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-onchange-notice" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /onChange notice -->


                <!-- onDropdownShow event -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">onDropdownShow event</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-show-event" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /onDropdownShow event -->


                <!-- onDropdownHide event -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">onDropdownHide event</label>
                    <div class="col-lg-9">
                        <select class="form-control multiselect-hide-event" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                        </select>
                    </div>
                </div>
                <!-- /onDropdownHide event -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Methods</div>

                <!-- Destroy method -->
                <div class="row mb-4">
                    <label class="col-form-label col-lg-3">Destroy method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-destroy" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-create-button">Create</button>
                                <button type="button" class="btn btn-danger multiselect-destroy-button">Destroy</button>
                            </div>
                        </div>

                        <div class="form-text">This method is used to destroy the plugin on the given element - meaning unbinding the plugin.</div>
                    </div>
                </div>
                <!-- /destroy method -->


                <!-- Refresh method -->
                <div class="row mb-4">
                    <label class="col-form-label col-lg-3">Refresh method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-refresh" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-select-button">Select</button>
                                <button type="button" class="btn btn-light multiselect-deselect-button">Deselect</button>
                                <button type="button" class="btn btn-primary btn-icon multiselect-refresh-button"><i class="ph-arrows-clockwise"></i></button>
                            </div>
                        </div>

                        <div class="form-text">This method is used to refresh the checked checkboxes based on the currently selected options within the select. Click <strong>'Select'</strong>, then click <strong>refresh</strong>. The plugin will update the checkboxes.</div>
                    </div>
                </div>
                <!-- /refresh method -->


                <!-- Rebuild method -->
                <div class="row mb-4">
                    <label class="col-form-label col-lg-3">Rebuild method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-rebuild" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-add-button">Add</button>
                                <button type="button" class="btn btn-light multiselect-delete-button">Delete</button>
                                <button type="button" class="btn btn-primary btn-icon multiselect-rebuild-button"><i class="ph-arrows-clockwise"></i></button>
                            </div>
                        </div>

                        <div class="form-text">Rebuilds the whole dropdown menu. All selected options will remain selected (if still existent!). Click <strong>Add</strong> button and then click <strong>Rebuild</strong> button, open dropdown and you'll notice new options added to the bottom of the list.</div>
                    </div>
                </div>
                <!-- /rebuild method -->


                <!-- Select method -->
                <div class="row mb-4">
                    <label class="col-form-label col-lg-3">Select method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-select" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-select-cheese-button">Cheese</button>
                                <button type="button" class="btn btn-light multiselect-select-onions-button">Onions</button>
                            </div>
                        </div>

                        <div class="form-text">Selects an option by its value (which has to be given as string). Works also using an array of values.</div>
                    </div>
                </div>
                <!-- /select method -->


                <!-- Deselect method -->
                <div class="row mb-4">
                    <label class="col-form-label col-lg-3">Deselect method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-deselect" multiple="multiple">
                                    <option value="cheese" selected>Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions" selected>Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light multiselect-deselect-cheese-button">Deselect Cheese</button>
                                <button type="button" class="btn btn-light multiselect-deselect-onions-button">Deselect Onions</button>
                            </div>
                        </div>

                        <div class="form-text">Deselect an option by its value (which has to be given as string). Works also using an array of values.</div>
                    </div>
                </div>
                <!-- /deselect method -->


                <!-- Disable method -->
                <div class="row mb-4">
                    <label class="col-form-label col-lg-3">Disable method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-disable" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-danger multiselect-disable1-button">Disable</button>
                                <button type="button" class="btn btn-light multiselect-enable1-button">Enable</button>
                            </div>
                        </div>

                        <div class="form-text">Disable both the underlying select and the dropdown button.</div>
                    </div>
                </div>
                <!-- /disable method -->


                <!-- Enable method -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Enable method</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <div class="flex-grow-1">
                                <select class="form-control multiselect-method-enable" multiple="multiple" disabled>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-primary multiselect-enable2-button">Enable</button>
                                <button type="button" class="btn btn-light multiselect-disable2-button">Disable</button>
                            </div>
                        </div>

                        <div class="form-text">Enable both the underlying select and the dropdown button.</div>
                    </div>
                </div>
                <!-- /enable method -->

            </div>
        </div>
    </div>
    <!-- /multiselect example -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_multiselect.js')}}"></script>
@endsection
