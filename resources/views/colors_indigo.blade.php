@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('title') Colors @endslot
@slot('subtitle') Indigo Palette @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Palette classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Palette classes</h5>
        </div>

        <div class="card-body">
            <p>Indigo color palette includes 1 main <code>indigo</code> color. Majority of components and layout parts are coded with maximum flexibility and support different color options that can be changed on-the-fly just by adding or replacing proper color class. Also works perfectly in combination with other helpers, which makes Limitless very flexible and configurable.</p>
            <p>SASS files include 10 different shades and tints of each color, but class names include only 1 of them. You can easy add new shades or tints of any color if you need to just by adding color variable to theme color map and re-compile your SASS files. That will generate all necessary color classes for all components and automatically add all states to them.</p>
            <strong>Please note:</strong> default Bootstrap contextual classes - indigo, indigo, indigo, indigo, indigo - are still available and correspond to main colors, so you can use both <code>.bg-indigo</code> and <code>.[btn|btn-flat|btn-outline|table|alert]-indigo</code> as main color classes. For light semi-transparent indigo background color, use our background opacity classes, (e.g. <code>.bg-indigo.bg-opacity-25</code>) and optionally <code>.text-indigo</code> class.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 300px;">Class</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.bg-indigo</code></td>
                        <td>Class for background color. You can control the transparency with our opacity utility classes and use them in combination with background color, e.g. <code>.bg-indigo.bg-opacity-25</code>. Available values are 10, 20, 25, 50, 75, 100.</td>
                    </tr>
                    <tr>
                        <td><code>.button-indigo</code></td>
                        <td>Class for solid buttons. Includes hover, active and open states</td>
                    </tr>
                    <tr>
                        <td><code>.button-outline-indigo</code></td>
                        <td>Class for outline buttons. Includes hover, active and open states</td>
                    </tr>
                    <tr>
                        <td><code>.button-flat-indigo</code></td>
                        <td>Class for flat buttons. Includes hover, active and open states</td>
                    </tr>

                    <tr>
                        <td><code>.alert-indigo</code></td>
                        <td>Classes for light alerts. You can use <code>.bg-indigo</code> in combination with <code>.text-white</code> for solid background color</td>
                    </tr>
                    <tr>
                        <td><code>.table-indigo</code></td>
                        <td>Classes for light table rows or cells. You can use <code>.bg-indigo</code> in combination with <code>.text-white</code> for solid background color</td>
                    </tr>
                    <tr>
                        <td><code>.list-group-item-indigo</code></td>
                        <td>Classes for inline and clickable list group items. Include hover, and active states</td>
                    </tr>
                    <tr>
                        <td><code>.border-indigo</code></td>
                        <td>Classes for border color. Useful when only border needs to have different colors - validation, highlights, custom buttons etc. Can be used with form controls, selects, cards, buttons and any other block element. Control border opacity with <code>.border-opacity-[10|20|25|50|75|100]</code> classes</td>
                    </tr>
                    <tr>
                        <td><code>.border-top-indigo</code></td>
                        <td>Classes for <code>top</code> border color. Use this class if you need to highlight top border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-bottom-indigo</code></td>
                        <td>Classes for <code>bottom</code> border color. Use this class if you need to highlight bottom border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-start-indigo</code></td>
                        <td>Classes for <code>left</code> border color. Use this class if you need to highlight left border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-end-indigo</code></td>
                        <td>Classes for <code>right</code> border color. Use this class if you need to highlight right border only</td>
                    </tr>
                    <tr>
                        <td><code>.text-indigo</code></td>
                        <td>Classes for text color. These colors can be used with: text, links, icons, lists etc. Base text color doesn't require suffix. Control text color opacity with <code>.text-opacity-[10|20|25|50|75|100]</code> utility classes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /palette classes -->


    <!-- Alert options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Alert options
        </h6>
        <span class="text-muted d-block">Bordered, styled, solid in both directions</span>
    </div>

    <div class="mb-3">

        <!-- Basic alert -->
        <div class="alert alert-indigo alert-dismissible fade show">
            Very basic alert in indigo color palette
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /basic alert -->


        <!-- Styled alert -->
        <div class="alert alert-indigo alert-icon-start alert-dismissible fade show">
            <span class="alert-icon bg-indigo text-white">
                <i class="ph-bell-ringing"></i>
            </span>
            Here you can see how indigo palette can be used with different components. By the way, this alert uses it as well
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /styled alert -->


        <!-- Solid alert -->
        <div class="alert bg-indigo text-white alert-dismissible fade show">
            Alert that has solid background color and white text
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
        </div>
        <!-- /solid alert -->


        <!-- Solid alert with icon -->
        <div class="alert alert-icon-start bg-indigo text-white alert-dismissible fade show">
            <span class="alert-icon bg-black bg-opacity-20">
                <i class="ph-bell-ringing"></i>
            </span>
            Alert that has solid background color, white text and an icon
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
        </div>
        <!-- /solid alert with icon -->

    </div>
    <!-- /alert options -->


    <!-- Form components -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Form components
        </h6>
        <span class="text-muted d-block">Inputs, selects, input groups etc.</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input field text</h6>
                <p class="mb-3">Change text color in an input field with <code>.text-indigo</code> class. Use <code>.text-opacity-[value]</code> to change text opacity</p>

                <input type="text" class="form-control text-indigo" value="Input field text">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input border color</h6>
                <p class="mb-3">Change border color in an input field with <code>.border-indigo</code> class. Use <code>.border-opacity-[value]</code> to change border opacity</p>

                <input type="text" class="form-control border-indigo" placeholder="Input field border">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input with feedback</h6>
                <p class="mb-3">Change icon color in an input field with <code>.text-indigo</code> class. Use <code>.text-opacity-[value]</code> to change icon opacity</p>

                <div class="form-control-feedback form-control-feedback-end">
                    <input type="text" class="form-control" placeholder="Input with icon feedback">
                    <div class="form-control-feedback-icon text-indigo">
                        <i class="ph-question"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group text addon - text</h6>
                <p class="mb-3">Change text addon color of input group with <code>.text-indigo</code> class. Opacity classes are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text text-indigo">0.00</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group addon - background</h6>
                <p class="mb-3">Change text addon background color of input group with <code>.bg-indigo</code> class. Opacity classes are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text bg-indigo bg-opacity-20 text-indigo">0.00</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group addon - border</h6>
                <p class="mb-3">Change text addon border color of input group with <code>.border-indigo</code> class. Opacity classes are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control border-indigo" placeholder="Input field">
                    <span class="input-group-text border-indigo">0.00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group icon addon - text</h6>
                <p class="mb-3">Change icon addon color of input group with <code>.text-indigo</code> class. Supports optional opacity classes</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text text-indigo">
                        <i class="ph-circles-three"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group icon addon - background</h6>
                <p class="mb-3">Change icon addon background color of input group with <code>.bg-indigo</code> class. Supports optional opacity classes</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text bg-indigo bg-opacity-20 text-indigo">
                        <i class="ph-circles-three"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group icon addon - border</h6>
                <p class="mb-3">Change icon addon border color of input group with <code>.border-indigo</code> class. Supports optional opacity classes</p>

                <div class="input-group">
                    <input type="text" class="form-control border-indigo" placeholder="Input field">
                    <span class="input-group-text border-indigo">
                        <i class="ph-circles-three"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - solid background</h6>
                <p class="mb-3">Use a button or a link element with <code>.btn-indigo</code> class. All button elements and styles are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <button class="btn btn-indigo" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - solid border</h6>
                <p class="mb-3">Add <code>.border-indigo</code> class to <code>.form-control</code> element to give an input field the same border color as button</p>

                <div class="input-group">
                    <input type="text" class="form-control border-indigo" placeholder="Input field">
                    <button class="btn btn-indigo" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - outline</h6>
                <p class="mb-3">To show outline indigo button in an input group, use a button or a link element with <code>.btn-outline-indigo</code> class</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <button class="btn btn-outline-indigo" type="button">Button</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - outline border</h6>
                <p class="mb-3">Input group with indigo input border color and outline button. Use <code>.border-indigo</code> in <code>.form-control</code> element</p>

                <div class="input-group">
                    <input type="text" class="form-control border-indigo" placeholder="Input field">
                    <button class="btn btn-outline-indigo" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Select2 single - text</h6>
                <p class="mb-3">Use <code>.text-indigo</code> class in <code>data-container-css-class</code> attribute to show indigo text color in select2 select</p>

                <select class="form-control form-control-select2" data-container-css-class="text-indigo">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="FL">Florida</option>
                        <option value="MA">Massachusetts</option>
                        <option value="WV">West Virginia</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Select2 single - border</h6>
                <p class="mb-3">Use <code>.border-indigo</code> class in <code>data-container-css-class</code> attribute to show indigo border color in select2 select</p>

                <select class="form-control form-control-select2" data-container-css-class="border-indigo">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="FL">Florida</option>
                        <option value="MA">Massachusetts</option>
                        <option value="WV">West Virginia</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Multiselect - text</h6>
                <p class="mb-3">Use <code>.btn.text-indigo</code> classes in <code>data-button-class</code> attribute to show indigo text color in multiselect</p>

                <select class="form-control form-control-multiselect" data-button-class="btn text-indigo" multiple="multiple">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Multiselect - border</h6>
                <p class="mb-3">Use <code>.btn.border-indigo</code> classes in <code>data-button-class</code> attribute to show indigo border color in multiselect</p>

                <select class="form-control form-control-multiselect" data-button-class="btn border-indigo" multiple="multiple">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom select - text</h6>
                <p class="mb-3">Use <code>.text-indigo</code> class in <code>.form-select</code> element to change default text color in select element to indigo</p>

                <select class="form-select text-indigo">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID" selected>Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom select - border</h6>
                <p class="mb-3">Use <code>.border-indigo</code> class in <code>.form-select</code> element to change default border color in select element to indigo</p>

                <select class="form-select border-indigo">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID" selected>Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom file input - text</h6>
                <p class="mb-3">Use <code>.text-indigo</code> class in file input with <code>.form-control</code> class to change default text color to indigo</p>

                <input type="file" class="form-control text-indigo">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom file input - border</h6>
                <p class="mb-3">Use <code>.border-indigo</code> class in file input with <code>.form-control</code> class to change default border color to indigo</p>

                <input type="file" class="form-control border-indigo">
            </div>
        </div>
    </div>
    <!-- /form components -->


    <!-- Tabs -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Tabs component color
        </h6>
        <span class="text-muted d-block">Solid tabs nav and content color</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Tabs navigation color</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Add custom background color to the tab navigation with <code>.bg-indigo</code> palette classes. Make sure tags navigation container also has <code>.nav-tabs-solid</code> and <code>.nav-tabs-solid-dark</code> classes</p>

                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-indigo rounded-top border-0">
                        <li class="nav-item">
                            <a href="#colored-nav-tab1" class="nav-link rounded-top-start active" data-bs-toggle="tab">Active</a>
                        </li>
                        <li class="nav-item">
                            <a href="#colored-nav-tab2" class="nav-link" data-bs-toggle="tab">Inactive</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#colored-nav-tab3" class="dropdown-item" data-bs-toggle="tab">Dropdown tab</a>
                                <a href="#colored-nav-tab4" class="dropdown-item" data-bs-toggle="tab">Another tab</a>
                            </div>
                        </li>
                    </ul>

                    <div class="tab-content border border-top-0 rounded-bottom p-3">
                        <div class="tab-pane fade active show" id="colored-nav-tab1">
                            This is some placeholder content the <strong>first</strong> tab's associated content
                        </div>

                        <div class="tab-pane fade" id="colored-nav-tab2">
                            This is some placeholder content the <strong>second</strong> tab's associated content
                        </div>

                        <div class="tab-pane fade" id="colored-nav-tab3">
                            This is some placeholder content the <strong>third</strong> tab's associated content
                        </div>

                        <div class="tab-pane fade" id="colored-nav-tab4">
                            This is some placeholder content the <strong>fourth</strong> tab's associated content
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Solid color tabs</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Add custom background color to the tab navigation and content area with <code>.bg-indigo</code> palette classes. Also add <code>.nav-tabs-solid</code> and <code>.nav-tabs-solid-dark</code> classes to the nav container</p>

                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-indigo rounded-top border-0">
                        <li class="nav-item"><a href="#colored-tab1" class="nav-link rounded-top-start active" data-bs-toggle="tab">Active</a></li>
                        <li class="nav-item"><a href="#colored-tab2" class="nav-link" data-bs-toggle="tab">Inactive</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#colored-tab3" class="dropdown-item" data-bs-toggle="tab">Dropdown tab</a>
                                <a href="#colored-tab4" class="dropdown-item" data-bs-toggle="tab">Another tab</a>
                            </div>
                        </li>
                    </ul>

                    <div class="tab-content bg-indigo text-white border-top border-white border-opacity-20 rounded-bottom p-3">
                        <div class="tab-pane fade active show" id="colored-tab1">
                            This is some placeholder content the <strong>first</strong> tab's associated content
                        </div>

                        <div class="tab-pane fade show" id="colored-tab2">
                            This is some placeholder content the <strong>second</strong> tab's associated content
                        </div>

                        <div class="tab-pane fade show" id="colored-tab3">
                            This is some placeholder content the <strong>third</strong> tab's associated content
                        </div>

                        <div class="tab-pane fade show" id="colored-tab4">
                            This is some placeholder content the <strong>fourth</strong> tab's associated content
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /tabs -->


    <!-- Text options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Text options
        </h6>
        <span class="text-muted d-block">Color options for text, link, badge and badge pills</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Text</h6>
                <p class="mb-3">Use <code>.text-indigo</code> class in any inline or block element to change text color. Edit <code>--indigo</code> var to change it globally</p>

                <div>
                    <span class="text-indigo">Indigo text</span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Flat badge</h6>
                <p class="mb-3">Use <code>.bg-indigo</code> and <code>.bg-opacity-20</code> along with <code>.text-indigo</code> classes to show semi-transparent badge</p>

                <div>
                    <span class="badge bg-indigo bg-opacity-20 text-indigo">Flat badge</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Link</h6>
                <p class="mb-3">Use <code>.link-indigo</code> class in anchor tag to apply a indigo color scheme to links. This class also adds hover state</p>

                <div>
                    <a href="#" class="link-indigo">Indigo link</a>
                </div>
            </div>

            <div class="card card-body">
                <h6>Badge pill</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> utility class to <code>.badge.bg-indigo</code> element to show a regular badge with fully rounded corners</p>

                <div>
                    <span class="badge bg-indigo rounded-pill">390</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Badge</h6>
                <p class="mb-3">Add <code>.bg-indigo</code> class to the base <code>.badge</code> element. Badge colors are controlled by color utility classes</p>

                <div>
                    <span class="badge bg-indigo">Badge element</span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Outline badge</h6>
                <p class="mb-3">To show a badge in outline style, use <code>.border.border-indigo</code> along with <code>.text-indigo</code> set of classes</p>

                <div>
                    <span class="badge border border-indigo text-indigo">Outline badge</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /text options -->


    <!-- Progress bar -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Progress bars
        </h6>
        <span class="text-muted d-block">All colors, all sizes, all options</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Basic bar color</h6>
                <p class="mb-3">Progress components are built with two HTML elements, some CSS to set the width, and a few attributes</p>

                <div class="progress">
                    <div class="progress-bar bg-indigo" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Striped bar color</h6>
                <p class="mb-3">Add <code>.progress-bar-striped</code> to any progress bar to apply a stripe over the bar’s <code>indigo</code> background color</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-indigo" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Animated bar color</h6>
                <p class="mb-3">Use <code>.progress-bar-animated</code> in indigo progress bar to animate the stripes right to left via CSS3 animations</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /progress bar -->


    <!-- Tables -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Table color options
        </h6>
        <span class="text-muted d-block">Header, footer, rows, columns, cells etc.</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Header and footer</h6>
                </div>

                <div class="card-body">
                    Easily change background color of table header and table footer by adding color class to the table header or footer <code>tr</code> element. Adjust text color with our color utility classes
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="bg-indigo border-indigo text-white">
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-indigo">
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="bg-indigo border-indigo text-white">
                                <th class="rounded-bottom-start">#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th class="rounded-bottom-end">Username</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Table rows</h6>
                </div>

                <div class="card-body">
                    All table layouts support different row color options - semi-transparent and solid fill. For semi-transparent option use a combination of background color and background opacity classes
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-indigo text-white">
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr class="bg-indigo bg-opacity-10">
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Table columns</h6>
                </div>

                <div class="card-body">
                    Besides table rows, you can also highlight table columns in the same way as rows, but add color classes to <code>td</code> elements instead of <code>tr</code>. You can also change border color if necessary
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="bg-indigo bg-opacity-10">First Name</th>
                                <th>Last Name</th>
                                <th class="bg-indigo text-white">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="bg-indigo bg-opacity-10">Eugene</td>
                                <td>Kopyov</td>
                                <td class="bg-indigo text-white">@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="bg-indigo bg-opacity-10">Victoria</td>
                                <td>Baker</td>
                                <td class="bg-indigo text-white">@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="bg-indigo bg-opacity-10">James</td>
                                <td>Alexander</td>
                                <td class="bg-indigo text-white">@Alex</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th class="bg-indigo bg-opacity-10">First Name</th>
                                <th>Last Name</th>
                                <th class="bg-indigo text-white">Username</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Solid table</h6>
                </div>

                <div class="card-body">
                    Sometimes it may be very handy to change the background color of the whole table, you just need to add <code>.bg-*</code> classes to the table element and adjust text color via our text color utility classes
                </div>

                <div class="table-responsive">
                    <table class="table table-dark bg-indigo text-white">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Eugene</td>
                                <td>Kopyov</td>
                                <td>@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Victoria</td>
                                <td>Baker</td>
                                <td>@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>James</td>
                                <td>Alexander</td>
                                <td>@Alex</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /tables -->


    <!-- Buttons -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Button colors
        </h6>
        <span class="text-muted d-block">Button text, border and background colors</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Solid button</h6>
                <p class="mb-3">Add <code>.btn-indigo</code> to the button or anchor element with the base <code>.btn</code> class to show a button in a solid style</p>

                <div>
                    <button type="button" class="btn btn-indigo">
                        <i class="ph-circles-four me-2"></i>
                        Basic button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled basic button</h6>
                <p class="mb-3">Add <code>.btn-indigo</code> to labeled solid button and control background color of button label with bg color utility classes</p>

                <div>
                    <button type="button" class="btn btn-indigo btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Labeled
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Outline button</h6>
                <p class="mb-3">Add <code>.btn-outline-indigo</code> to the button or anchor element to show a indigo button in an outline style</p>

                <div>
                    <button type="button" class="btn btn-outline-indigo">
                        <i class="ph-circles-four me-2"></i>
                        Outline button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled outline button</h6>
                <p class="mb-3">Add <code>.btn-outline-indigo</code> to labeled outline button and control bg color of label with utility classes</p>

                <div>
                    <button type="button" class="btn btn-outline-indigo btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-indigo text-white">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Default button
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Flat button</h6>
                <p class="mb-3">Add <code>.btn-flat-indigo</code> to the button or anchor element to show a indigo button in a flat style</p>

                <div>
                    <button type="button" class="btn btn-flat-indigo">
                        <i class="ph-circles-four me-2"></i>
                        Flat button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled flat button</h6>
                <p class="mb-3">Add <code>.btn-flat-indigo</code> to labeled flat button and control background color of button label with bg color utility classes</p>

                <div>
                    <button type="button" class="btn btn-flat-indigo btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-indigo text-white">
                            <i class="ph-check-square-offset"></i>
                        </span>
                        Labeled
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /buttons -->


    <!-- Cards -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Card colors
        </h6>
        <span class="text-muted d-block">Card, card border and heading colors</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-indigo text-white">
                    <h6 class="mb-0">Indigo card</h6>
                </div>

                <div class="card-body">
                    Indigo card using <code>.bg-indigo</code> and <code>.text-white</code> utility classes added to the card header
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-indigo">
                <div class="card-header bg-indigo text-white">
                    <h6 class="mb-0">Indigo bordered card</h6>
                </div>

                <div class="card-body">
                    Bordered indigo card using <code>.bg-indigo.text-white</code> and <code>.border-indigo</code> utility classes
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-indigo text-white">
                <div class="card-header">
                    <h6 class="mb-0">Indigo solid card</h6>
                </div>

                <div class="card-body">
                    Solid indigo card using <code>.bg-indigo</code> and <code>.text-white</code> classes added to the card container
                </div>
            </div>
        </div>
    </div>
    <!-- /cards -->


    <!-- Notifications and dialogs -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Notifications &amp; dialogs
        </h6>
        <span class="text-muted d-block">Notifications, modals, popovers, tooltips</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Tooltip color</h6>
                <p class="mb-3">Change tooltip style to indigo color scheme in <code>template</code> configuration option and <code>.tooltip-custom</code> class</p>

                <div>
                    <button type="button" class="btn btn-indigo" data-bs-popup="tooltip-custom" title="Indigo tooltip" data-bs-placement="bottom" data-bs-container="body">
                        <i class="ph-chats me-2"></i>
                        Tooltip
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Popover background</h6>
                <p class="mb-3">Change popover style to indigo color scheme in <code>template</code> configuration option and <code>.popover-custom</code> class</p>

                <div>
                    <button type="button" class="btn btn-indigo" data-bs-popup="popover-solid" title="Indigo popover" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-placement="bottom" data-bs-container="body">
                        <i class="ph-chats me-2"></i>
                        Popover
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Noty notification</h6>
                <p class="mb-3">Add <code>bg-indigo text-white</code> to <code>theme</code> option in Noty config to show notification in indigo color scheme</p>

                <div>
                    <button class="btn btn-indigo noty-launch">
                        <i class="ph-chat me-2"></i>
                        Noty notification
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Modal dialog header</h6>
                <p class="mb-3">Change default light style of modal header to custom by adding <code>.bg-indigo.text-white</code> to modal header</p>

                <div>
                    <button type="button" class="btn btn-indigo" data-bs-toggle="modal" data-bs-target="#modal_indigo_header">
                        <i class="ph-chat-circle-text me-2"></i>
                        Modal dialog header
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Modal background</h6>
                <p class="mb-3">Add <code>.bg-indigo</code> and <code>.text-white</code> classes to <code>.modal-content</code> container to apply custom background to modal</p>

                <div>
                    <button type="button" class="btn btn-indigo" data-bs-toggle="modal" data-bs-target="#modal_indigo">
                        <i class="ph-chat-circle-text me-2"></i>
                        Modal background
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Modal dialog footer</h6>
                <p class="mb-3">The same as modal footer, but instead of <code>.modal-header</code> add color classes to <code>.modal-footer</code> container</p>

                <div>
                    <button type="button" class="btn btn-indigo" data-bs-toggle="modal" data-bs-target="#modal_indigo_footer">
                        <i class="ph-chat-circle-text me-2"></i>
                        Modal dialog footer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Toast header</h6>
                <p class="mb-3">Use our color classes in <code>.toast-header</code> container along with <code>.text-white</code> and <code>.btn-close-white</code> classes</p>

                <div>
                    <button type="button" class="btn btn-indigo" id="toast_header">
                        <i class="ph-chat-circle-text me-2"></i>
                        Toast header
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Toast border</h6>
                <p class="mb-3">Use color utility classes <code>.border-[color]</code> in <code>.toast</code> and <code>.toast-header</code> containers to change toast border color</p>

                <div>
                    <button type="button" class="btn btn-indigo" id="toast_header_border">
                        <i class="ph-chat-circle-text me-2"></i>
                        Toast border
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Toast background</h6>
                <p class="mb-3">Use <code>.bg-[color]</code> and <code>.text-white</code> in <code>.toast</code> container to change the default toast color scheme</p>

                <div>
                    <button type="button" class="btn btn-indigo" id="toast_solid">
                        <i class="ph-chat-circle-text me-2"></i>
                        Toast background
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /notifications and dialogs -->


    <!-- Dropdown menus -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Dropdown menu colors
        </h6>
        <span class="text-muted d-block">Dropdown and menu elements color</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Dropdown border color</h6>
                <p class="mb-3">Use or border utility classes in <code>.dropdown-menu</code> container to change default dropdown border color</p>

                <div class="dropdown-menu border-indigo border-width-2" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: 2;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-shield-indigo me-2"></i>
                        Action
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chart-bar me-2"></i>
                        Another action
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-lock-key me-2"></i>
                        Something else here
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ph-gear me-2"></i>
                        One more separated line
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Dropdown background color</h6>
                <p class="mb-3">Add <code>.bg-indigo</code> and <code>.dropdown-menu-dark</code> to dropdown container to show dropdown menu in a custom color scheme</p>

                <div class="dropdown-menu dropdown-menu-dark bg-indigo border-indigo" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: 2;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-shield-indigo me-2"></i>
                        Action
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chart-bar me-2"></i>
                        Another action
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-lock-key me-2"></i>
                        Something else here
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ph-gear me-2"></i>
                        One more separated line
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Adapted menu components</h6>
                <p class="mb-3">All dropdown elements are adapted for dropdowns in custom style. Check out dropdowns page for more indigo</p>

                <div class="dropdown-menu dropdown-menu-dark bg-indigo border-indigo" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: 2;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-shield-indigo me-2"></i>
                        Action
                        <span class="badge bg-dark bg-opacity-20 ms-auto">Badge</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chart-bar me-2"></i>
                        Another action
                        <span class="badge bg-dark bg-opacity-20 rounded-pill ms-auto">98</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <label class="dropdown-item form-check">
                        <input type="checkbox" class="form-check-input form-check-input-white m-0 me-3" checked="">
                        <span class="form-check-label">Checked</span>
                    </label>

                    <label class="dropdown-item form-check">
                        <input type="radio" class="form-check-input form-check-input-white m-0 me-3" name="dropdown-radio" checked="">
                        <span class="form-check-label">Checked</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdown menus -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/notifications/noty.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/colors_indigo.js')}}"></script>
@endsection
