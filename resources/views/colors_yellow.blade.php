@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Colors @endslot
@slot('subtitle') Yellow Palette @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Palette classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Palette classes</h5>
        </div>

        <div class="card-body">
            <p>Yellow color palette includes 1 main <code>yellow</code> color. Majority of components and layout parts are coded with maximum flexibility and support different color options that can be changed on-the-fly just by adding or replacing proper color class. Also works perfectly in combination with other helpers, which makes Limitless very flexible and configurable.</p>
            <p>SASS files include 10 different shades and tints of each color, but class names include only 1 of them. You can easy add new shades or tints of any color if you need to just by adding color variable to theme color map and re-compile your SASS files. That will generate all necessary color classes for all components and automatically add all states to them.</p>
            <strong>Please note:</strong> default Bootstrap contextual classes - yellow, yellow, yellow, yellow, yellow - are still available and correspond to main colors, so you can use both <code>.bg-yellow</code> and <code>.[btn|btn-flat|btn-outline|table|alert]-yellow</code> as main color classes. For light semi-transparent yellow background color, use our background opacity classes, (e.g. <code>.bg-yellow.bg-opacity-25</code>) and optionally <code>.text-yellow</code> class.
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
                        <td><code>.bg-yellow</code></td>
                        <td>Class for background color. You can control the transparency with our opacity utility classes and use them in combination with background color, e.g. <code>.bg-yellow.bg-opacity-25</code>. Available values are 10, 20, 25, 50, 75, 100.</td>
                    </tr>
                    <tr>
                        <td><code>.button-yellow</code></td>
                        <td>Class for solid buttons. Includes hover, active and open states</td>
                    </tr>
                    <tr>
                        <td><code>.button-outline-yellow</code></td>
                        <td>Class for outline buttons. Includes hover, active and open states</td>
                    </tr>
                    <tr>
                        <td><code>.button-flat-yellow</code></td>
                        <td>Class for flat buttons. Includes hover, active and open states</td>
                    </tr>

                    <tr>
                        <td><code>.alert-yellow</code></td>
                        <td>Classes for light alerts. You can use <code>.bg-yellow</code> in combination with <code>.text-white</code> for solid background color</td>
                    </tr>
                    <tr>
                        <td><code>.table-yellow</code></td>
                        <td>Classes for light table rows or cells. You can use <code>.bg-yellow</code> in combination with <code>.text-white</code> for solid background color</td>
                    </tr>
                    <tr>
                        <td><code>.list-group-item-yellow</code></td>
                        <td>Classes for inline and clickable list group items. Include hover, and active states</td>
                    </tr>
                    <tr>
                        <td><code>.border-yellow</code></td>
                        <td>Classes for border color. Useful when only border needs to have different colors - validation, highlights, custom buttons etc. Can be used with form controls, selects, cards, buttons and any other block element. Control border opacity with <code>.border-opacity-[10|20|25|50|75|100]</code> classes</td>
                    </tr>
                    <tr>
                        <td><code>.border-top-yellow</code></td>
                        <td>Classes for <code>top</code> border color. Use this class if you need to highlight top border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-bottom-yellow</code></td>
                        <td>Classes for <code>bottom</code> border color. Use this class if you need to highlight bottom border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-start-yellow</code></td>
                        <td>Classes for <code>left</code> border color. Use this class if you need to highlight left border only</td>
                    </tr>
                    <tr>
                        <td><code>.border-end-yellow</code></td>
                        <td>Classes for <code>right</code> border color. Use this class if you need to highlight right border only</td>
                    </tr>
                    <tr>
                        <td><code>.text-yellow</code></td>
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
        <div class="alert alert-yellow alert-dismissible fade show">
            Very basic alert in yellow color palette
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /basic alert -->


        <!-- Styled alert -->
        <div class="alert alert-yellow alert-icon-start alert-dismissible fade show">
            <span class="alert-icon bg-yellow text-black">
                <i class="ph-bell-ringing"></i>
            </span>
            Here you can see how yellow palette can be used with different components. By the way, this alert uses it as well
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /styled alert -->


        <!-- Solid alert -->
        <div class="alert bg-yellow text-black alert-dismissible fade show">
            Alert that has solid background color and dark text
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /solid alert -->


        <!-- Solid alert with icon -->
        <div class="alert alert-icon-start bg-yellow text-black alert-dismissible fade show">
            <span class="alert-icon bg-black bg-opacity-20">
                <i class="ph-bell-ringing"></i>
            </span>
            Alert that has solid background color, dark text and an icon
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <!-- /solid alert with icon -->

    </div>
    <!-- /alert options -->


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
                <p class="mb-3">Use <code>.text-yellow</code> class in any inline or block element to change text color. Edit <code>--yellow</code> var to change it globally</p>

                <div>
                    <span class="text-yellow">Yellow text</span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Flat badge</h6>
                <p class="mb-3">Use <code>.bg-yellow</code> and <code>.bg-opacity-20</code> along with <code>.text-yellow</code> classes to show semi-transparent badge</p>

                <div>
                    <span class="badge bg-yellow bg-opacity-20 text-yellow">Flat badge</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Link</h6>
                <p class="mb-3">Use <code>.link-yellow</code> class in anchor tag to apply a yellow color scheme to links. This class also adds hover state</p>

                <div>
                    <a href="#" class="link-yellow">Yellow link</a>
                </div>
            </div>

            <div class="card card-body">
                <h6>Badge pill</h6>
                <p class="mb-3">Add <code>.rounded-pill</code> utility class to <code>.badge.bg-yellow</code> element to show a regular badge with fully rounded corners</p>

                <div>
                    <span class="badge bg-yellow text-black rounded-pill">390</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Badge</h6>
                <p class="mb-3">Add <code>.bg-yellow</code> class to the base <code>.badge</code> element. Badge colors are controlled by color utility classes</p>

                <div>
                    <span class="badge bg-yellow text-black">Badge element</span>
                </div>
            </div>

            <div class="card card-body">
                <h6>Outline badge</h6>
                <p class="mb-3">To show a badge in outline style, use <code>.border.border-yellow</code> along with <code>.text-yellow</code> set of classes</p>

                <div>
                    <span class="badge border border-yellow text-yellow">Outline badge</span>
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
                    <div class="progress-bar bg-yellow" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Striped bar color</h6>
                <p class="mb-3">Add <code>.progress-bar-striped</code> to any progress bar to apply a stripe over the bar’s <code>yellow</code> background color</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-yellow" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Animated bar color</h6>
                <p class="mb-3">Use <code>.progress-bar-animated</code> in yellow progress bar to animate the stripes right to left via CSS3 animations</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <tr class="bg-yellow border-yellow text-black">
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-yellow">
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
                            <tr class="bg-yellow border-yellow text-black">
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
                            <tr class="bg-yellow text-black">
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
                            <tr class="bg-yellow bg-opacity-10">
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
                                <th class="bg-yellow bg-opacity-10">First Name</th>
                                <th>Last Name</th>
                                <th class="bg-yellow text-black">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="bg-yellow bg-opacity-10">Eugene</td>
                                <td>Kopyov</td>
                                <td class="bg-yellow text-black">@Kopyov</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="bg-yellow bg-opacity-10">Victoria</td>
                                <td>Baker</td>
                                <td class="bg-yellow text-black">@Vicky</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="bg-yellow bg-opacity-10">James</td>
                                <td>Alexander</td>
                                <td class="bg-yellow text-black">@Alex</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th class="bg-yellow bg-opacity-10">First Name</th>
                                <th>Last Name</th>
                                <th class="bg-yellow text-black">Username</th>
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
                    <table class="table table-dark bg-yellow text-black">
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
                <p class="mb-3">Add <code>.btn-yellow</code> to the button or anchor element with the base <code>.btn</code> class to show a button in a solid style</p>

                <div>
                    <button type="button" class="btn btn-yellow">
                        <i class="ph-circles-four me-2"></i>
                        Basic button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled basic button</h6>
                <p class="mb-3">Add <code>.btn-yellow</code> to labeled solid button and control background color of button label with bg color utility classes</p>

                <div>
                    <button type="button" class="btn btn-yellow btn-labeled btn-labeled-start">
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
                <p class="mb-3">Add <code>.btn-outline-yellow</code> to the button or anchor element to show a yellow button in an outline style</p>

                <div>
                    <button type="button" class="btn btn-outline-yellow">
                        <i class="ph-circles-four me-2"></i>
                        Outline button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled outline button</h6>
                <p class="mb-3">Add <code>.btn-outline-yellow</code> to labeled outline button and control bg color of label with utility classes</p>

                <div>
                    <button type="button" class="btn btn-outline-yellow btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-yellow text-black">
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
                <p class="mb-3">Add <code>.btn-flat-yellow</code> to the button or anchor element to show a yellow button in a flat style</p>

                <div>
                    <button type="button" class="btn btn-flat-yellow">
                        <i class="ph-circles-four me-2"></i>
                        Flat button
                    </button>
                </div>
            </div>

            <div class="card card-body">
                <h6>Labeled flat button</h6>
                <p class="mb-3">Add <code>.btn-flat-yellow</code> to labeled flat button and control background color of button label with bg color utility classes</p>

                <div>
                    <button type="button" class="btn btn-flat-yellow btn-labeled btn-labeled-start">
                        <span class="btn-labeled-icon bg-yellow text-black">
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
                <div class="card-header bg-yellow text-black">
                    <h6 class="mb-0">Yellow card</h6>
                </div>

                <div class="card-body">
                    Yellow card using <code>.bg-yellow</code> and <code>.text-black</code> utility classes added to the card header
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border border-yellow">
                <div class="card-header bg-yellow text-black">
                    <h6 class="mb-0">Yellow bordered card</h6>
                </div>

                <div class="card-body">
                    Bordered yellow card using <code>.bg-yellow.text-black</code> and <code>.border-yellow</code> utility classes
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-yellow text-black">
                <div class="card-header border-black border-opacity-10">
                    <h6 class="mb-0">Yellow solid card</h6>
                </div>

                <div class="card-body">
                    Solid yellow card using <code>.bg-yellow</code> and <code>.text-black</code> classes added to the card container
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
                <p class="mb-3">Change tooltip style to yellow color scheme in <code>template</code> configuration option and <code>.tooltip-custom</code> class</p>

                <div>
                    <button type="button" class="btn btn-yellow" data-bs-popup="tooltip-custom" title="Yellow tooltip" data-bs-placement="bottom" data-bs-container="body">
                        <i class="ph-chats me-2"></i>
                        Tooltip
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Popover background</h6>
                <p class="mb-3">Change popover style to yellow color scheme in <code>template</code> configuration option and <code>.popover-custom</code> class</p>

                <div>
                    <button type="button" class="btn btn-yellow" data-bs-popup="popover-solid" title="Yellow popover" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-placement="bottom" data-bs-container="body">
                        <i class="ph-chats me-2"></i>
                        Popover
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Noty notification</h6>
                <p class="mb-3">Add <code>bg-yellow text-black</code> to <code>theme</code> option in Noty config to show notification in yellow color scheme</p>

                <div>
                    <button class="btn btn-yellow noty-launch">
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
                <p class="mb-3">Change default light style of modal header to custom by adding <code>.bg-yellow.text-black</code> to modal header</p>

                <div>
                    <button type="button" class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#modal_yellow_header">
                        <i class="ph-chat-circle-text me-2"></i>
                        Modal dialog header
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Modal background</h6>
                <p class="mb-3">Add <code>.bg-yellow</code> and <code>.text-black</code> classes to <code>.modal-content</code> container to apply custom background to modal</p>

                <div>
                    <button type="button" class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#modal_yellow">
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
                    <button type="button" class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#modal_yellow_footer">
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
                <p class="mb-3">Use our color classes in <code>.toast-header</code> container along with <code>.text-black</code> class</p>

                <div>
                    <button type="button" class="btn btn-yellow" id="toast_header">
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
                    <button type="button" class="btn btn-yellow" id="toast_header_border">
                        <i class="ph-chat-circle-text me-2"></i>
                        Toast border
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body">
                <h6>Toast background</h6>
                <p class="mb-3">Use <code>.bg-[color]</code> and <code>.text-black</code> in <code>.toast</code> container to change the default toast color scheme</p>

                <div>
                    <button type="button" class="btn btn-yellow" id="toast_solid">
                        <i class="ph-chat-circle-text me-2"></i>
                        Toast background
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /notifications and dialogs -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/notifications/noty.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/colors_yellow.js')}}"></script>
@endsection
