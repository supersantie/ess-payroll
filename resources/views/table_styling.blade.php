@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Tables @endslot
@slot('subtitle') Styling @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Default styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default styling</h5>
        </div>

        <div class="card-body">
            Example of a table with default styling. By default any table with <code>.table</code> class has <code>transparent</code> background color and grey border color. Table header and table footer have the same styling: transparent background, semibold font weight, darker horizontal border and the same height as table body cells.
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
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
    <!-- /default styling -->


    <!-- Table header styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Table header styling</h5>
        </div>

        <div class="card-body">
            Example of a custom table <code>header</code> styling. Table header supports default contextual and custom background colors available in <a href="colors_primary">custom color system</a>. To use custom color in the table header, add <code>.bg-*</code> class to the header row. All border and text colors will be automatically adjusted.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-dark text-white">
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /table header styling -->


    <!-- Table footer styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Table footer styling</h5>
        </div>

        <div class="card-body">
            Example of a custom table <code>footer</code> styling. Table footer supports custom background colors available in <a href="colors_primary">custom color system</a>. To use custom color in the table footer, add <code>.bg-*</code> class to the footer row. All border and text colors will be autocatically adjusted.
        </div>

        <div class="table-responsive">
            <table class="table">
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="bg-dark text-white">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /table footer styling -->


    <!-- Contextual classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Contextual and custom colors</h5>
        </div>

        <div class="card-body">
            Example of contextual classes for table <code>rows</code>. Contextual classes are used to color table rows or individual cells. These classes come with Bootstrap by default and have much lighter colors than in custom template colors.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Payment Taken</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="table-success">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="table-danger">
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
                    </tr>
                    <tr class="table-warning">
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>03/04/2012</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>03/04/2012</td>
                        <td>Pending</td>
                    </tr>
                    <tr class="table-active">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr class="table-light">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr class="table-dark">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr class="table-info">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>05/04/2012</td>
                        <td>Information</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>05/04/2012</td>
                        <td>Information</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /contextual classes -->


    <!-- Custom row colors -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom row colors</h5>
        </div>

        <div class="card-body">
            Example of <code>custom colors</code> for table rows. Add one of the custom colors from the template color system to any table row for additional highlighting. Unlike contextual classes, these colors are much stronger. View all <a href="colors_primary">available colors here &rarr;</a>.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Payment Taken</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-primary text-white">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="bg-secondary text-white">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="bg-danger text-white">
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
                    </tr>
                    <tr class="bg-success text-white">
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>03/04/2012</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>03/04/2012</td>
                        <td>Pending</td>
                    </tr>
                    <tr class="bg-warning text-white">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>04/04/2012</td>
                        <td>Call in to confirm</td>
                    </tr>
                    <tr class="bg-info text-white">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>05/04/2012</td>
                        <td>Information</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>05/04/2012</td>
                        <td>Information</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /custom row colors -->


    <!-- Dark table color -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dark table</h5>
        </div>

        <div class="card-body">
            Example of a table with <code>dark</code> background color. Limitless includes a base class for all dark and solid tables - <code>.table-dark</code> that needs to be added to <code>.table</code> container. This class inverts all colors in the light theme and enables dark table mode in light theme.
        </div>

        <div class="table-responsive">
            <table class="table table-dark">
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /dark table color -->


    <!-- Dark table options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dark table options</h5>
        </div>

        <div class="card-body">
            Table with custom background color supports all default table layouts and options. In this example our table displays all possible borders, striped rows and changes background color on row hover. All border, row and text colors are adjusted automatically.
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-bordered table-striped table-hover">
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /dark table options -->


    <!-- Color combination -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Color combination</h5>
        </div>

        <div class="card-body">
            This example demonstrates <code>combination</code> of colors, added to the table and table header. Here we have one general color added to the <code>&lt;table></code> and highlighted table header with another color added to the header <code>row</code>. Body and footer rows are also support this option.
        </div>

        <div class="table-responsive">
            <table class="table table-dark bg-primary">
                <thead>
                    <tr class="bg-dark">
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /color combination -->


    <!-- Inside colored card -->
    <div class="card bg-dark text-white">
        <div class="card-header border-bottom-white border-opacity-10">
            <h6 class="mb-0">Inside colored card</h6>
        </div>

        <div class="card-body">
            Example of a basic table placed inside the card with custom background color. This panel doesn't have any color classes and automatically inherits border and text colors from the colored panel styles. Color combination are also supported.
        </div>

        <div class="table-responsive border-white border-opacity-15">
            <table class="table table-dark">
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
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /inside colored card -->

</div>
<!-- /content area -->

@endsection
