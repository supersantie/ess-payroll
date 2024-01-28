@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Colors @endslot
@slot('subtitle') Success Palette @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Palette classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Palette classes</h5>
        </div>

        <div class="card-body">
            <p>Success color palette includes 1 main <code>success</code> color. Majority of components and layout parts are coded with maximum flexibility and support different color options that can be changed on-the-fly just by adding or replacing proper color class. Also works perfectly in combination with other helpers, which makes Limitless very flexible and configurable.</p>
            <p>SASS files include 10 different shades and tints of each color, but class names include only 1 of them. You can easy add new shades or tints of any color if you need to just by adding color variable to theme color map and re-compile your SASS files. That will generate all necessary color classes for all components and automatically add all states to them.</p>
            <strong>Please note:</strong> default Bootstrap contextual classes - success, success, success, warning, info - are still available and correspond to main colors, so you can use both <code>.bg-success</code> and <code>.[btn|btn-flat|btn-outline|table|alert]-success</code> as main color classes. For light semi-transparent success background color, use our background opacity classes, (e.g. <code>.bg-success.bg-opacity-25</code>) and optionally <code>.text-success</code> class.
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
                        <td><code>.bg-success</code></td>
                        <td>Class for background color. You can control the transparency with our opacity utility classes and use them in combination with background color, e.g. <code>.bg-success.bg-opacity-25</code>. Available values are 10, 20, 25, 50, 75, 100.</td>
                    </tr>
                    <tr>
                        <td><code>.button-success</code></td>
                        <td>Class for solid buttons. Includes hover, active and open states</td>
                    </tr>
                    <tr>
                        <td><code>.button-outline-success</code></td>
                        <td>Class for outline buttons. Includes hover, active and open states</td>
                    </tr>
                    <tr>
                        <td><code>.button-flat-success</code></td>
                        <td>Class for flat buttons. Includes hover, active and open states</td>
                    </tr>

                    <tr>
                        <td><code>.alert-success</code></td>
                        <td>Classes for light alerts. You can use <code>.bg-success</code> in combination with <code>.text-white</code> for solid background color</td>
                    </tr>
                    <tr>
                        <td><code>.table-success</code></td>
                        <td>Classes for light table rows or cells. You can use <code>.bg-success</code> in combination with <code>.text-white</code> for solid background color</td>
                    </tr>
                    <tr>
                        <td><code>.list-group-item-success</code></td>
                        <td>Classes for inline and clickable list group items. Include hover, and active states</td>
                    </tr>
                    <tr>
                        <td><code>.border-success</code></td>
                        <td>Classes for border color. Useful when only border needs to have different colors - validation, highlights, custom buttons etc. Can be used with form controls, selects, cards, buttons and any other block element. Control border opacity with <code>.border-opacity-[10|20|25|50|75|100]</code> classes</td>
                    </tr>
                    <tr>
                        <td><code>.border-top-success</code></td>
                        <td>Classes for <code>top</code> border color. Use this class if you need to highlight top border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-bottom-success</code></td>
                        <td>Classes for <code>bottom</code> border color. Use this class if you need to highlight bottom border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-start-success</code></td>
                        <td>Classes for <code>left</code> border color. Use this class if you need to highlight left border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-end-success</code></td>
                        <td>Classes for <code>right</code> border color. Use this class if you need to highlight right border only</td>
                    </tr>
                    <tr>
                        <td><code>.text-success</code></td>
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
        <div class="alert alert-success alert-dismissible fade show">
            Very basic alert in success color palette
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /basic alert -->


        <!-- Styled alert -->
        <div class="alert alert-success alert-icon-start alert-dismissible fade show">
            <span class="alert-icon bg-success text-white">
                <i class="ph-bell-ringing"></i>
            </span>
            Here you can see how success palette can be used with different components. By the way, this alert uses it as well
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /styled alert -->


        <!-- Solid alert -->
        <div class="alert bg-success text-white alert-dismissible fade show">
            Alert that has solid background color and white text
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
        </div>
        <!-- /solid alert -->


        <!-- Solid alert with icon -->
        <div class="alert alert-icon-start bg-success text-white alert-dismissible fade show">
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
                <p class="mb-3">Change text color in an input field with <code>.text-success</code> class. Use <code>.text-opacity-[value]</code> to change text opacity</p>

                <input type="text" class="form-control text-success" value="Input field text">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input border color</h6>
                <p class="mb-3">Change border color in an input field with <code>.border-success</code> class. Use <code>.border-opacity-[value]</code> to change border opacity</p>

                <input type="text" class="form-control border-success" placeholder="Input field border">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input with feedback</h6>
                <p class="mb-3">Change icon color in an input field with <code>.text-success</code> class. Use <code>.text-opacity-[value]</code> to change icon opacity</p>

                <div class="form-control-feedback form-control-feedback-end">
                    <input type="text" class="form-control" placeholder="Input with icon feedback">
                    <div class="form-control-feedback-icon text-success">
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
                <p class="mb-3">Change text addon color of input group with <code>.text-success</code> class. Opacity classes are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text text-success">0.00</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group addon - background</h6>
                <p class="mb-3">Change text addon background color of input group with <code>.bg-success</code> class. Opacity classes are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text bg-success bg-opacity-20 text-success">0.00</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group addon - border</h6>
                <p class="mb-3">Change text addon border color of input group with <code>.border-success</code> class. Opacity classes are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control border-success" placeholder="Input field">
                    <span class="input-group-text border-success">0.00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group icon addon - text</h6>
                <p class="mb-3">Change icon addon color of input group with <code>.text-success</code> class. Supports optional opacity classes</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text text-success">
                        <i class="ph-circles-three"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group icon addon - background</h6>
                <p class="mb-3">Change icon addon background color of input group with <code>.bg-success</code> class. Supports optional opacity classes</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <span class="input-group-text bg-success bg-opacity-20 text-success">
                        <i class="ph-circles-three"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group icon addon - border</h6>
                <p class="mb-3">Change icon addon border color of input group with <code>.border-success</code> class. Supports optional opacity classes</p>

                <div class="input-group">
                    <input type="text" class="form-control border-success" placeholder="Input field">
                    <span class="input-group-text border-success">
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
                <p class="mb-3">Use a button or a link element with <code>.btn-success</code> class. All button elements and styles are also supported</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <button class="btn btn-success" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - solid border</h6>
                <p class="mb-3">Add <code>.border-success</code> class to <code>.form-control</code> element to give an input field the same border color as button</p>

                <div class="input-group">
                    <input type="text" class="form-control border-success" placeholder="Input field">
                    <button class="btn btn-success" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - outline</h6>
                <p class="mb-3">To show outline success button in an input group, use a button or a link element with <code>.btn-outline-success</code> class</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input field">
                    <button class="btn btn-outline-success" type="button">Button</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Input group button - outline border</h6>
                <p class="mb-3">Input group with success input border color and outline button. Use <code>.border-success</code> in <code>.form-control</code> element</p>

                <div class="input-group">
                    <input type="text" class="form-control border-success" placeholder="Input field">
                    <button class="btn btn-outline-success" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Select2 single - text</h6>
                <p class="mb-3">Use <code>.text-success</code> class in <code>data-container-css-class</code> attribute to show success text color in select2 select</p>

                <select class="form-control form-control-select2" data-container-css-class="text-success">
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
                <p class="mb-3">Use <code>.border-success</code> class in <code>data-container-css-class</code> attribute to show success border color in select2 select</p>

                <select class="form-control form-control-select2" data-container-css-class="border-success">
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
                <p class="mb-3">Use <code>.btn.text-success</code> classes in <code>data-button-class</code> attribute to show success text color in multiselect</p>

                <select class="form-control form-control-multiselect" data-button-class="btn text-success" multiple="multiple">
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
                <p class="mb-3">Use <code>.btn.border-success</code> classes in <code>data-button-class</code> attribute to show success border color in multiselect</p>

                <select class="form-control form-control-multiselect" data-button-class="btn border-success" multiple="multiple">
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
                <p class="mb-3">Use <code>.text-success</code> class in <code>.form-select</code> element to change default text color in select element to success</p>

                <select class="form-select text-success">
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
                <p class="mb-3">Use <code>.border-success</code> class in <code>.form-select</code> element to change default border color in select element to success</p>

                <select class="form-select border-success">
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
                <p class="mb-3">Use <code>.text-success</code> class in file input with <code>.form-control</code> class to change default text color to success</p>

                <input type="file" class="form-control text-success">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Custom file input - border</h6>
                <p class="mb-3">Use <code>.border-success</code> class in file input with <code>.form-control</code> class to change default border color to success</p>

                <input type="file" class="form-control border-success">
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
                    <p class="mb-3">Add custom background color to the tab navigation with <code>.bg-success</code> palette classes. Make sure tags navigation container also has <code>.nav-tabs-solid</code> and <code>.nav-tabs-solid-dark</code> classes</p>

                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-success rounded-top border-0">
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
                    <p class="mb-3">Add custom background color to the tab navigation and content area with <code>.bg-success</code> palette classes. Also add <code>.nav-tabs-solid</code> and <code>.nav-tabs-solid-dark</code> classes to the nav container</p>

                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-dark bg-success rounded-top border-0">
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

                    <div class="tab-content bg-success text-white border-top border-white border-opacity-20 rounded-bottom p-3">
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
                <p class="mb-3">Use <code>.text-success</code> class in any inline or block element to change text color. Edit <code>--success</code> var to change it globally</p>

                <div>
                    <span class="text-success">Success text</span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Flat badge</h6>
                <p class="mb-3">Use <code>.bg-success</code> and <code>.bg-opacity-20</code> along with <code>.text-success</code> classes to show semi-transparent badge</p>

                <div>
                    <span class="badge bg-success bg-opacity-20 text-success">Flat badge</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Link</h6>
                <p class="mb-3">Use <code>.link-success</code> class in anchor tag to apply a success color scheme to links. This class also adds hover state</p>

                <div>
                    <a href="#" class="link-success">Success link</a>
                </div>
            </div>

            <div class="card card-body">
                <h6>Badge pill</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> utility class to <code>.badge.bg-success</code> element to show a regular badge with fully rounded corners</p>

                <div>
                    <span class="badge bg-success rounded-pill">390</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Badge</h6>
                <p class="mb-3">Add <code>.bg-success</code> class to the base <code>.badge</code> element. Badge colors are controlled by color utility classes</p>

                <div>
                    <span class="badge bg-success">Badge element</span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Outline badge</h6>
                <p class="mb-3">To show a badge in outline style, use <code>.border.border-success</code> along with <code>.text-success</code> set of classes</p>

                <div>
                    <span class="badge border border-success text-success">Outline badge</span>
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
                    <div class="progress-bar bg-success" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Striped bar color</h6>
                <p class="mb-3">Add <code>.progress-bar-striped</code> to any progress bar to apply a stripe over the bar’s <code>success</code> background color</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Animated bar color</h6>
                <p class="mb-3">Use <code>.progress-bar-animated</code> in success progress bar to animate the stripes right to left via CSS3 animations</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <tr class="bg-success border-success text-white">
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-success">
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
                            <tr class="bg-success border-success text-white">
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
                            <tr class="bg-success text-white">
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
                            <tr class="bg-success bg-opacity-10">
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
                                <th class="bg-success bg-opacity-10">First Name</th>
                                <th>Last Name</th>
                                <th class="bg-success text-white">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="bg-success bg-opacity-10">Eugene</td>
                                <td>Kopyov</td>
                                <td class="bg-success text-white">@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="bg-success bg-opacity-10">Victoria</td>
                                <td>Baker</td>
                                <td class="bg-success text-white">@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="bg-success bg-opacity-10">James</td>
                                <td>Alexander</td>
                                <td class="bg-success text-white">@Alex</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th class="bg-success bg-opacity-10">First Name</th>
                                <th>Last Name</th>
                                <th class="bg-success text-white">Username</th>
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
                    <table class="table table-dark bg-success text-white">
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
                <p class="mb-3">Add <code>.btn-success</code> to the button or anchor element with the base <code>.btn</code> class to show a button in a solid style</p>

                <div>
                    <button type="button" class="btn btn-success">
                        <i class="ph-circles-four me-2"></i>
                        Basic button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled basic button</h6>
                <p class="mb-3">Add <code>.btn-success</code> to labeled solid button and control background color of button label with bg color utility classes</p>

                <div>
                    <button type="button" class="btn btn-success btn-labeled btn-labeled-start">
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
                <p class="mb-3">Add <code>.btn-outline-success</code> to the button or anchor element to show a success button in an outline style</p>

                <div>
                    <button type="button" class="btn btn-outline-success">
                        <i class="ph-circles-four me-2"></i>
                        Outline button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled outline button</h6>
                <p class="mb-3">Add <code>.btn-outline-success</code> to labeled outline button and control bg color of label with utility classes</p>

                <div>
                    <button type="button" class="btn btn-outline-success btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-success text-white">
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
                <p class="mb-3">Add <code>.btn-flat-success</code> to the button or anchor element to show a success button in a flat style</p>

                <div>
                    <button type="button" class="btn btn-flat-success">
                        <i class="ph-circles-four me-2"></i>
                        Flat button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled flat button</h6>
                <p class="mb-3">Add <code>.btn-flat-success</code> to labeled flat button and control background color of button label with bg color utility classes</p>

                <div>
                    <button type="button" class="btn btn-flat-success btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-success text-white">
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
                <div class="card-header bg-success text-white">
                    <h6 class="mb-0">Success card</h6>
                </div>

                <div class="card-body">
                    Success card using <code>.bg-success</code> and <code>.text-white</code> utility classes added to the card header
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-success">
                <div class="card-header bg-success text-white">
                    <h6 class="mb-0">Success bordered card</h6>
                </div>

                <div class="card-body">
                    Bordered success card using <code>.bg-success.text-white</code> and <code>.border-success</code> utility classes
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-success text-white">
                <div class="card-header">
                    <h6 class="mb-0">Success solid card</h6>
                </div>

                <div class="card-body">
                    Solid success card using <code>.bg-success</code> and <code>.text-white</code> classes added to the card container
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
                <p class="mb-3">Change tooltip style to success color scheme in <code>template</code> configuration option and <code>.tooltip-custom</code> class</p>

                <div>
                    <button type="button" class="btn btn-success" data-bs-popup="tooltip-custom" title="Success tooltip" data-bs-placement="bottom" data-bs-container="body">
                        <i class="ph-chats me-2"></i>
                        Tooltip
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Popover background</h6>
                <p class="mb-3">Change popover style to success color scheme in <code>template</code> configuration option and <code>.popover-custom</code> class</p>

                <div>
                    <button type="button" class="btn btn-success" data-bs-popup="popover-solid" title="Success popover" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-placement="bottom" data-bs-container="body">
                        <i class="ph-chats me-2"></i>
                        Popover
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Noty notification</h6>
                <p class="mb-3">Add <code>bg-success text-white</code> to <code>theme</code> option in Noty config to show notification in success color scheme</p>

                <div>
                    <button class="btn btn-success noty-launch">
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
                <p class="mb-3">Change default light style of modal header to custom by adding <code>.bg-success.text-white</code> to modal header</p>

                <div>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_success_header">
                        <i class="ph-chat-circle-text me-2"></i>
                        Modal dialog header
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Modal background</h6>
                <p class="mb-3">Add <code>.bg-success</code> and <code>.text-white</code> classes to <code>.modal-content</code> container to apply custom background to modal</p>

                <div>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_success">
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
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_success_footer">
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
                    <button type="button" class="btn btn-success" id="toast_header">
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
                    <button type="button" class="btn btn-success" id="toast_header_border">
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
                    <button type="button" class="btn btn-success" id="toast_solid">
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

                <div class="dropdown-menu border-success border-width-2" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: 2;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-shield-warning me-2"></i>
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
                <p class="mb-3">Add <code>.bg-success</code> and <code>.dropdown-menu-dark</code> to dropdown container to show dropdown menu in a custom color scheme</p>

                <div class="dropdown-menu dropdown-menu-dark bg-success border-success" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: 2;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-shield-warning me-2"></i>
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
                <p class="mb-3">All dropdown elements are adapted for dropdowns in custom style. Check out dropdowns page for more info</p>

                <div class="dropdown-menu dropdown-menu-dark bg-success border-success" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: 2;">
                    <a href="#" class="dropdown-item">
                        <i class="ph-shield-warning me-2"></i>
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
<script src="{{URL::asset('assets/demo/pages/colors_success.js')}}"></script>
@endsection
