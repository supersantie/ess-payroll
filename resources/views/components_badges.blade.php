@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Badges @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic badges -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default badges</h5>
        </div>

        <div class="card-body">
            Badge component allows you to easily highlight new or unread items, label and categorize using keywords that describe them, notify users about some useful information and mark items depending on the priority. Badges don't have background color by default and require <code>.bg-*</code> color utility classes, some of them also require <code>.text-*</code> classes to match color contrast ratio.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Basic examples</th>
                    </tr>
                    <tr>
                        <td style="width: 25%;">Primary badge</td>
                        <td style="width: 20%;"><span class="badge bg-primary">Primary</span></td>
                        <td>Primary color. To use, add <code>.bg-primary</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Secondary badge</td>
                        <td><span class="badge bg-secondary">Secondary</span></td>
                        <td>Secondary color. To use, add <code>.bg-secondary</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Danger badge</td>
                        <td><span class="badge bg-danger">Danger</span></td>
                        <td>Red badge in danger context. To use, add <code>.bg-danger</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Success badge</td>
                        <td><span class="badge bg-success">Success</span></td>
                        <td>Green badge in success context. To use, add <code>.bg-success</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Warning badge</td>
                        <td><span class="badge bg-warning">Warning</span></td>
                        <td>Orange badge in warning context. To use, add <code>.bg-warning</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Info badge</td>
                        <td><span class="badge bg-info">Info</span></td>
                        <td>Cyan badge in info context. To use, add <code>.bg-info</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Light badge</td>
                        <td><span class="badge bg-light text-body">Light</span></td>
                        <td>Light color. To use, add <code>.bg-light</code> and <code>.text-body</code> classes to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Dark badge</td>
                        <td><span class="badge bg-dark">Dark</span></td>
                        <td>Dark color. To use, add <code>.bg-dark</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Transparent badge</td>
                        <td><span class="badge text-body">Transparent</span></td>
                        <td>Badge with transparent background. To use, add <code>.text-body</code> class to the base <code>.badge</code> container</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Additional colors</th>
                    </tr>
                    <tr>
                        <td>Pink badge color</td>
                        <td><span class="badge bg-pink">Pink</span></td>
                        <td>Pink color. To use, add <code>.bg-pink</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Purple badge color</td>
                        <td><span class="badge bg-purple">Purple</span></td>
                        <td>Purple color. To use, add <code>.bg-purple</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Indigo badge color</td>
                        <td><span class="badge bg-indigo">Indigo</span></td>
                        <td>Indigo color. To use, add <code>.bg-indigo</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Teal badge color</td>
                        <td><span class="badge bg-teal">Teal</span></td>
                        <td>Teal color. To use, add <code>.bg-teal</code> class to the base <code>.badge</code> container</td>
                    </tr>
                    <tr>
                        <td>Yellow badge color</td>
                        <td><span class="badge bg-yellow text-black">Yellow</span></td>
                        <td>Yellow color. To use, add <code>.bg-yellow</code> and <code>.text-black</code> classes to the base <code>.badge</code> container</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Optional styles</th>
                    </tr>
                    <tr>
                        <td>Roundless badge</td>
                        <td><span class="badge bg-success rounded-0">Roundless badge</span></td>
                        <td>This badge doesn't have rounded borders. To use, add <code>.rounded-0</code> class to the <code>.badge</code> element</td>
                    </tr>
                    <tr>
                        <td>Block badge</td>
                        <td><span class="badge bg-danger d-block">Block badge</span></td>
                        <td>This badge fills 100% width of a parent element. To use, add <code>.d-block</code> or <code>.w-100</code> class to the <code>.badge</code> element</td>
                    </tr>
                    <tr>
                        <td>Linked badge</td>
                        <td><a href="#" class="badge bg-primary">Linked badge</a></td>
                        <td>You can also use badges as a link in an <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td>Label with dropdown</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="badge bg-indigo d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-danger rounded-pill me-2"></span>
                                        High priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-info rounded-pill me-2"></span>
                                        Normal priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-primary rounded-pill me-2"></span>
                                        Low priority
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Dropdown menu attached to the badge</td>
                    </tr>

                    <tr class="table-border-solid">
                        <td>Icon in badge</td>
                        <td>
                            <span class="badge bg-warning p-1">
                                <i class="ph-star"></i>
                            </span>
                        </td>
                        <td>Badge with icon. To use, add <code>.p-1</code> and color classes to <code>.badge</code> element</td>
                    </tr>
                    <tr>
                        <td>Icon in linked badge</td>
                        <td>
                            <a href="#" class="badge bg-primary p-1">
                                <i class="ph-gear"></i>
                            </a>
                        </td>
                        <td>Linked badge with icon. To use, add <code>.p-1</code> and color classes to <code>.badge</code> link element</td>
                    </tr>
                    <tr>
                        <td>Icon in rounded badge</td>
                        <td>
                            <span class="badge bg-pink rounded-pill p-1">
                                <i class="ph-bell"></i>
                            </span>
                        </td>
                        <td>Rounded linked icon. Usage is the same, but with additional <code>.rounded-pill</code> class</td>
                    </tr>
                    <tr>
                        <td>Icon in linked rounded badge</td>
                        <td>
                            <a href="#" class="badge bg-secondary rounded-pill p-1">
                                <i class="ph-map-pin"></i>
                            </a>
                        </td>
                        <td>The same as above, but inside link element</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /basic badges -->


    <!-- Striped badges -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Striped badges</h5>
        </div>

        <div class="card-body">
            Striped badge simulates a classic styling of tags from the old days. All color versions have consistent background color that is set with <code>.bg-light</code> color utility class, and since the default styling of badge element is very limited, the use of other utilities is required. You can control the width of left/right border and its color, as well as background and text colors. All is configurable.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Basic examples</th>
                    </tr>
                    <tr>
                        <td style="width: 25%;">Primary badge</td>
                        <td style="width: 20%;"><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-primary">Primary</span></td>
                        <td>Primary border color. Requires a combination of various utility classes along with <code>.border-primary</code> class</td>
                    </tr>
                    <tr>
                        <td>Secondary badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-secondary">Secondary</span></td>
                        <td>Secondary border color. Requires a combination of various utility classes along with <code>.border-secondary</code> class</td>
                    </tr>
                    <tr>
                        <td>Danger badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-danger">Danger</span></td>
                        <td>Red border color in danger context. Requires a combination of various utility classes along with <code>.border-danger</code> class</td>
                    </tr>
                    <tr>
                        <td>Success badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-success">Success</span></td>
                        <td>Green border color in success context. Requires a combination of various utility classes along with <code>.border-success</code> class</td>
                    </tr>
                    <tr>
                        <td>Warning badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-warning">Warning</span></td>
                        <td>Orange border color in warning context. Requires a combination of various utility classes along with <code>.border-warning</code> class</td>
                    </tr>
                    <tr>
                        <td>Info badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-info">Info</span></td>
                        <td>Cyan border color in info context. Requires a combination of various utility classes along with <code>.border-info</code> class</td>
                    </tr>
                    <tr>
                        <td>Dark badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-dark">Default</span></td>
                        <td>Dark border color. Requires a combination of various utility classes along with <code>.border-dark</code> class</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Additional colors</th>
                    </tr>
                    <tr>
                        <td>Pink badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-pink">Pink</span></td>
                        <td>Pink border color. Requires a combination of various utility classes along with <code>.border-pink</code> class</td>
                    </tr>
                    <tr>
                        <td>Purple badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-purple">Purple</span></td>
                        <td>Purple border color. Requires a combination of various utility classes along with <code>.border-purple</code> class</td>
                    </tr>
                    <tr>
                        <td>Indigo badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-indigo">Indigo</span></td>
                        <td>Indigo border color. Requires a combination of various utility classes along with <code>.border-indigo</code> class</td>
                    </tr>
                    <tr>
                        <td>Teal badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-teal">Teal</span></td>
                        <td>Teal border color. Requires a combination of various utility classes along with <code>.border-teal</code> class</td>
                    </tr>
                    <tr>
                        <td>Yellow badge</td>
                        <td><span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-yellow">Yellow</span></td>
                        <td>Yellow border color. Requires a combination of various utility classes along with <code>.border-yellow</code> class</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Optional styles</th>
                    </tr>
                    <tr>
                        <td>Right border</td>
                        <td><span class="badge bg-light border-end border-width-3 text-body rounded-end-0 border-success">Right border</span></td>
                        <td>To highlight right border instead of left, add <code>.border-end.rounded-end-0</code> classes in <code>.badge</code> element</td>
                    </tr>
                    <tr>
                        <td>Linked badge</td>
                        <td><a href="#" class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-danger">Linked badge</a></td>
                        <td>Linked striped badge. Use <code>.border-*</code> color class and other utility classes in <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td>Label with dropdown</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-danger rounded-pill me-2"></span>
                                        High priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-info rounded-pill me-2"></span>
                                        Normal priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-primary rounded-pill me-2"></span>
                                        Low priority
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Dropdown menu attached to the striped badge with optional caret</td>
                    </tr>

                    <tr class="table-border-solid">
                        <td>Icon in striped badge</td>
                        <td>
                            <span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-teal p-1">
                                <i class="ph-gear"></i>
                            </span>
                        </td>
                        <td>Badge with icon. To use, add <code>.p-1</code> and color classes to <code>.badge</code> element</td>
                    </tr>
                    <tr>
                        <td>Icon in linked striped badge</td>
                        <td>
                            <a href="#" class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-purple p-1">
                                <i class="ph-dots-three-outline"></i>
                            </a>
                        </td>
                        <td>Linked badge with icon. To use, add <code>.p-1</code> and color classes to <code>.badge</code> link element</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /striped badges -->


    <!-- Flat badges -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Flat badges</h5>
        </div>

        <div class="card-body">
            Flat badges use background color with 20% opacity and corresponding text color. They don't require any custom class names as all styling is done via <code>.bg-opacity-25</code> background opacity class, which also works well in dark theme. Depending on design choice, you can change opacity level from 20% to 10|25|50|75|100 by using utility classes.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Basic examples</th>
                    </tr>
                    <tr>
                        <td style="width: 25%;">Primary badge</td>
                        <td style="width: 20%;"><span class="badge bg-primary bg-opacity-20 text-primary">Primary</span></td>
                        <td>Light primary color. Use <code>.bg-primary.text-primary</code> classes in combination with <code>.bg-opacity-20</code> to make primary background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Secondary badge</td>
                        <td><span class="badge bg-secondary bg-opacity-20 text-secondary">Secondary</span></td>
                        <td>Light secondary color. Use <code>.bg-secondary.text-secondary</code> classes in combination with <code>.bg-opacity-20</code> to make secondary background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Danger badge</td>
                        <td><span class="badge bg-danger bg-opacity-20 text-danger">Danger</span></td>
                        <td>Light red color in danger context. Use <code>.bg-danger.text-danger</code> classes in combination with <code>.bg-opacity-20</code> to make danger background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Success badge</td>
                        <td><span class="badge bg-success bg-opacity-20 text-success">Success</span></td>
                        <td>Light green color in success context. Use <code>.bg-success.text-success</code> classes in combination with <code>.bg-opacity-20</code> to make success background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Warning badge</td>
                        <td><span class="badge bg-warning bg-opacity-20 text-warning">Warning</span></td>
                        <td>Light orange color in warning context. Use <code>.bg-warning.text-warning</code> classes in combination with <code>.bg-opacity-20</code> to make warning background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Info badge</td>
                        <td><span class="badge bg-info bg-opacity-20 text-info">Info</span></td>
                        <td>Light cyan color in info context. Use <code>.bg-info.text-info</code> classes in combination with <code>.bg-opacity-20</code> to make info background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Dark badge</td>
                        <td><span class="badge bg-dark bg-opacity-20 text-reset">Dark</span></td>
                        <td>Light black color. Use <code>.bg-dark.text-reset</code> classes in combination with <code>.bg-opacity-20</code> to make dark background semi-transparent</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Additional colors</th>
                    </tr>
                    <tr>
                        <td>Pink badge color</td>
                        <td><span class="badge bg-pink bg-opacity-20 text-pink">Pink</span></td>
                        <td>Light pink color. Use <code>.bg-pink.text-pink</code> classes in combination with <code>.bg-opacity-20</code> to make pink background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Purple badge color</td>
                        <td><span class="badge bg-purple bg-opacity-20 text-purple">Purple</span></td>
                        <td>Light purple color. Use <code>.bg-purple.text-purple</code> classes in combination with <code>.bg-opacity-20</code> to make purple background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Indigo badge color</td>
                        <td><span class="badge bg-indigo bg-opacity-20 text-indigo">Indigo</span></td>
                        <td>Light indigo color. Use <code>.bg-indigo.text-indigo</code> classes in combination with <code>.bg-opacity-20</code> to make indigo background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Teal badge color</td>
                        <td><span class="badge bg-teal bg-opacity-20 text-teal">Teal</span></td>
                        <td>Light teal color. Use <code>.bg-teal.text-teal</code> classes in combination with <code>.bg-opacity-20</code> to make teal background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Yellow badge color</td>
                        <td><span class="badge bg-yellow bg-opacity-20 text-yellow">Yellow</span></td>
                        <td>Light yellow color. Use <code>.bg-yellow.text-yellow</code> classes in combination with <code>.bg-opacity-20</code> to make yellow background semi-transparent</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Flat badge options</th>
                    </tr>
                    <tr>
                        <td>Roundless badge</td>
                        <td><span class="badge bg-success bg-opacity-20 text-success rounded-0">Roundless badge</span></td>
                        <td>This badge doesn't have rounded borders. To use, add <code>.rounded-0</code> class to the <code>.badge</code> element</td>
                    </tr>
                    <tr>
                        <td>Linked flat badge</td>
                        <td><a href="#" class="badge bg-primary bg-opacity-20 text-primary">Linked badge</a></td>
                        <td>Use <code>.badge</code> and other utility classes in <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td>Block badge</td>
                        <td><span class="badge bg-danger bg-opacity-20 text-danger d-block">Block badge</span></td>
                        <td>To make flat badge full width, use <code>.d-block</code> class. Works with linked badges as well</td>
                    </tr>
                    <tr>
                        <td>Flat badge with dropdown</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="badge bg-indigo bg-opacity-20 text-indigo d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-danger rounded-pill me-2"></span>
                                        High priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-info rounded-pill me-2"></span>
                                        Normal priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-primary rounded-pill me-2"></span>
                                        Low priority
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Dropdown menu attached to the flat badge with optional caret</td>
                    </tr>

                    <tr class="table-border-solid">
                        <td>Icon in flat badge</td>
                        <td>
                            <span class="badge bg-indigo bg-opacity-20 text-purple p-1">
                                <i class="ph-star"></i>
                            </span>
                        </td>
                        <td>Icon inside flat badge. To use, add <code>.p-1</code> in combination with color classes</td>
                    </tr>
                    <tr>
                        <td>Icon in linked flat badge</td>
                        <td>
                            <a href="#" class="badge bg-primary bg-opacity-20 text-primary p-1">
                                <i class="ph-gear"></i>
                            </a>
                        </td>
                        <td>Icon inside linked flat badge. To use, add <code>.p-1</code> in combination with color classes</td>
                    </tr>
                    <tr>
                        <td>Icon in flat rounded badge</td>
                        <td>
                            <span class="badge bg-pink bg-opacity-20 text-pink rounded-pill p-1">
                                <i class="ph-bell"></i>
                            </span>
                        </td>
                        <td>Icon inside rounded flat badge. To use, add <code>.p-1</code> in combination with color classes</td>
                    </tr>
                    <tr>
                        <td>Icon in linked rounded badge</td>
                        <td>
                            <a href="#" class="badge bg-teal bg-opacity-20 text-teal rounded-pill p-1">
                                <i class="ph-map-pin"></i>
                            </a>
                        </td>
                        <td>The same as above, but inside link element</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /flat badges -->


    <!-- Pill badges -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Pill badges</h5>
        </div>

        <div class="card-body">
            Rounded badges is a classic style of numeric values, mostly used as counters. All badges have minimum width that equals badge height, which means the badge is displayed as a perfect circle if the value consists of 1 digit and grows horizontally. No custom badge classes are required, just use global <code>.rounded-pill</code> utility class in <code>.badge</code> element.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="3" class="table-light">Basic examples</th>
                    </tr>
                    <tr>
                        <td style="width: 25%;">Primary pill badge</td>
                        <td style="width: 20%;"><span class="badge bg-primary rounded-pill">32</span></td>
                        <td>Primary color. Use <code>.bg-primary</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Secondary pill badge</td>
                        <td><span class="badge bg-secondary rounded-pill">78</span></td>
                        <td>Secondary color. Use <code>.bg-secondary</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Danger pill badge</td>
                        <td><span class="badge bg-danger rounded-pill">34</span></td>
                        <td>Red color in danger context. Use <code>.bg-danger</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Success pill badge</td>
                        <td><span class="badge bg-success rounded-pill">65</span></td>
                        <td>Green color in success context. Use <code>.bg-success</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Warning pill badge</td>
                        <td><span class="badge bg-warning rounded-pill">76</span></td>
                        <td>Orange color in warning context. Use <code>.bg-warning</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Info pill badge</td>
                        <td><span class="badge bg-info rounded-pill">98</span></td>
                        <td>Cyan color in info context. Use <code>.bg-info</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Light pill badge</td>
                        <td><span class="badge bg-light text-body rounded-pill">24</span></td>
                        <td>Light color. Use <code>.bg-light.text-body</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Dark pill badge</td>
                        <td><span class="badge bg-dark rounded-pill">72</span></td>
                        <td>Dark color. Use <code>.bg-dark</code> and <code>.rounded-pill</code> classes</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Additional colors</th>
                    </tr>
                    <tr>
                        <td>Pink badge color</td>
                        <td><span class="badge bg-pink rounded-pill">48</span></td>
                        <td>Pink color. Use <code>.bg-pink</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Purple badge color</td>
                        <td><span class="badge bg-purple rounded-pill">54</span></td>
                        <td>Purple color. Use <code>.bg-purple</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Indigo badge color</td>
                        <td><span class="badge bg-indigo rounded-pill">20</span></td>
                        <td>Indigo color. Use <code>.bg-indigo</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Teal badge color</td>
                        <td><span class="badge bg-teal rounded-pill">86</span></td>
                        <td>Teal color. Use <code>.bg-teal</code> and <code>.rounded-pill</code> classes</td>
                    </tr>
                    <tr>
                        <td>Yellow badge color</td>
                        <td><span class="badge bg-yellow text-dark rounded-pill">42</span></td>
                        <td>Yellow color. To use, add <code>.bg-yellow.text-dark</code> and <code>.rounded-pill</code> classes</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Pill badge options</th>
                    </tr>
                    <tr>
                        <td>Linked badge</td>
                        <td><a href="#" class="badge bg-danger rounded-pill">22</a></td>
                        <td>Linked badge. Use <code>.badge</code> and other badge classes in <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td>Badge with dropdown</td>
                        <td>
                            <div class="droppdown">
                                <a href="#" class="badge bg-primary rounded-pill d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">57</a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-danger rounded-pill me-2"></span>
                                        High priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-info rounded-pill me-2"></span>
                                        Normal priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-primary rounded-pill me-2"></span>
                                        Low priority
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Dropdown menu attached to the <code>badge</code> element.</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Flat pill badges</th>
                    </tr>
                    <tr>
                        <td>Primary badge</td>
                        <td><span class="badge bg-primary bg-opacity-20 text-primary rounded-pill">59</span></td>
                        <td>Light primary color. Use <code>.bg-primary.text-primary.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make primary background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Secondary badge</td>
                        <td><span class="badge bg-secondary bg-opacity-20 text-secondary rounded-pill">64</span></td>
                        <td>Light secondary color. Use <code>.bg-secondary.text-secondary.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make secondary background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Danger badge</td>
                        <td><span class="badge bg-danger bg-opacity-20 text-danger rounded-pill">83</span></td>
                        <td>Light red color in danger context. Use <code>.bg-danger.text-danger.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make danger background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Success badge</td>
                        <td><span class="badge bg-success bg-opacity-20 text-success rounded-pill">93</span></td>
                        <td>Light green color in success context. Use <code>.bg-success.text-success.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make success background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Warning badge</td>
                        <td><span class="badge bg-warning bg-opacity-20 text-warning rounded-pill">38</span></td>
                        <td>Light orange color in warning context. Use <code>.bg-warning.text-warning.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make warning background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Info badge</td>
                        <td><span class="badge bg-info bg-opacity-20 text-info rounded-pill">67</span></td>
                        <td>Light cyan color in info context. Use <code>.bg-info.text-info.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make info background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Dark badge</td>
                        <td><span class="badge bg-dark bg-opacity-20 text-reset rounded-pill">82</span></td>
                        <td>Light black color. Use <code>.bg-dark.text-reset.rounded-pill</code> classes in combination with <code>.bg-opacity-20</code> to make dark background semi-transparent</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Additional colors</th>
                    </tr>
                    <tr>
                        <td>Pink badge color</td>
                        <td><span class="badge bg-pink bg-opacity-20 text-pink ">Pink</span></td>
                        <td>Light pink color. Use <code>.bg-pink.text-pink</code> classes in combination with <code>.bg-opacity-20</code> to make pink background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Purple badge color</td>
                        <td><span class="badge bg-purple bg-opacity-20 text-purple ">Purple</span></td>
                        <td>Light purple color. Use <code>.bg-purple.text-purple</code> classes in combination with <code>.bg-opacity-20</code> to make purple background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Indigo badge color</td>
                        <td><span class="badge bg-indigo bg-opacity-20 text-indigo ">Indigo</span></td>
                        <td>Light indigo color. Use <code>.bg-indigo.text-indigo</code> classes in combination with <code>.bg-opacity-20</code> to make indigo background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Teal badge color</td>
                        <td><span class="badge bg-teal bg-opacity-20 text-teal ">Teal</span></td>
                        <td>Light teal color. Use <code>.bg-teal.text-teal</code> classes in combination with <code>.bg-opacity-20</code> to make teal background semi-transparent</td>
                    </tr>
                    <tr>
                        <td>Yellow badge color</td>
                        <td><span class="badge bg-yellow bg-opacity-20 text-yellow ">Yellow</span></td>
                        <td>Light yellow color. Use <code>.bg-yellow.text-yellow</code> classes in combination with <code>.bg-opacity-20</code> to make yellow background semi-transparent</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-light">Flat pill badge options</th>
                    </tr>
                    <tr>
                        <td>Linked pill badge</td>
                        <td><a href="#" class="badge bg-danger bg-opacity-20 text-danger rounded-pill">49</a></td>
                        <td>Linked pill flat badge. Use <code>.badge</code> and other border/text color classes in an <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td>Pill badge with dropdown</td>
                        <td>
                            <div class="dropup">
                                <a href="#" class="badge bg-primary bg-opacity-20 text-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">94</a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-danger rounded-pill me-2"></span>
                                        High priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-info rounded-pill me-2"></span>
                                        Normal priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="border border-width-4 border-primary rounded-pill me-2"></span>
                                        Low priority
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Dropdown menu attached to the badge with optional caret</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /pill badges -->

</div>
<!-- /content area -->

@endsection
