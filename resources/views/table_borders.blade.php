@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Tables @endslot
@slot('subtitle') Borders @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Border options title -->
    <div class="mb-3">
        <h6 class="mb-0">Border options</h6>
        <span class="text-muted">Examples of <code>&lt;tbody></code> borders</span>
    </div>
    <!-- /border options title -->


    <!-- Horizontal borders -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Horizontal borders</h5>
        </div>

        <div class="card-body">
            Example of <code>horizontal</code> table borders. This is a default table border style attached to <code>.table</code> class. All borders have the same grey color and style, table itself doesn't have a border, but you can add this border using <code>.border</code> utility class added to the container with <code>.table-responsive</code> class.
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
            </table>
        </div>
    </div>
    <!-- /horizontal borders -->


    <!-- Vertical borders -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Vertical borders</h5>
        </div>

        <div class="card-body">
            Example of <code>vertical</code> table borders. This custom table border layout displays vertical borders only. However border between table <code>head</code> and table <code>body</code> is also visible for better visual separation. To use this layout add <code>.table-columned</code> class to the table with <code>.table</code> class.
        </div>

        <div class="table-responsive">
            <table class="table table-columned">
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
    <!-- /vertical borders -->


    <!-- Both borders -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Both borders</h5>
        </div>

        <div class="card-body">
            Example of a fully <code>bordered</code> table. Here we have both vertical and horizontal borders displayed. All borders have the same color, table <code>head</code> is visually divided from the table <code>body</code> with a bit darker border color. To use this layout add <code>.table-bordered</code> class to the table with <code>.table</code> class.
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
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
    <!-- /both borders -->


    <!-- Borderless table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Borderless table</h5>
        </div>

        <div class="card-body">
            Example of <code>borderless</code> table. Here all border are hidden, except border between table <code>head</code> and table <code>body</code>, table <code>body</code> and table <code>footer</code>, this border is added to all table layouts and is always visible. To hide all borders from the table, add <code>.table-borderless</code> class to the table with <code>.table</code> class.
        </div>

        <div class="table-responsive">
            <table class="table table-borderless">
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
    <!-- /borderless table -->



    <!-- Head borders title -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Table head borders</h6>
        <span class="text-muted">Basic and custom <code>&lt;thead></code> row borders</span>
    </div>
    <!-- /head borders title -->


    <!-- Default thead border -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default border</h5>
        </div>

        <div class="card-body">
            Example of a default <code>thead</code> border. This border has 1px width and slightly darker color than other borders for better visual separation of table <code>head</code> and table <code>body</code>. Vertical cell borders in the table head always have the same color as borders in table body.
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
            </table>
        </div>
    </div>
    <!-- /default thead border -->


    <!-- Solid thead border -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Solid border</h5>
        </div>

        <div class="card-body">
            Example of a <code>solid</code> border inside table head. This border inherits all styling options from the default border style, the only difference is it has <code>2px</code> width. Sometimes it could be useful for visual separation and addition highlight. To use this border add <code>.table-border-solid</code> to the table head row.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-border-solid">
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
    <!-- /solid thead border -->


    <!-- Double thead border -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Double border</h5>
        </div>

        <div class="card-body">
            Example of a <code>double</code> border inside table head. This border has <code>3px</code> width, <code>double</code> style and inherits all styling options from the default border style. Visually it displays table <code>head</code> and <code>body</code> as 2 separated table areas. To use this border add <code>.border-double</code> to the table head row.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-border-double">
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
    <!-- /double thead border -->


    <!-- Custom thead border color -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Border color</h5>
        </div>

        <div class="card-body">
            Example of a table head border with <code>custom</code> color. According to the custom color system options, you can set any of predefined colors by adding <code>.border-bottom-*</code> class to the table head row. This technique works with all border styles demonstrated above. You can check all <a href="colors_primary">available colors here &rarr;</a>.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="border-bottom-danger">
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
                    <tr class="border-top-info">
                        <td>2</td>
                        <td>Victoria</td>
                        <td>Baker</td>
                        <td>@Vicky</td>
                    </tr>
                    <tr class="border-top-primary">
                        <td>3</td>
                        <td>James</td>
                        <td>Alexander</td>
                        <td>@Alex</td>
                    </tr>
                    <tr class="border-top-success">
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- custom thead border color -->



    <!-- Body borders heading -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Table body borders</h6>
        <span class="text-muted">Custom <code>&lt;tbody></code> border styling</span>
    </div>
    <!-- /body borders heading -->


    <!-- Default border styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default border</h5>
        </div>

        <div class="card-body">
            Example of default borders inside table body. Basic table body borders have the same <code>light grey</code> color, style and width. Since this is a default table body border styling, rows don't require any additional classes and work in default markup with <code>.table</code> classes added to the table.
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
            </table>
        </div>
    </div>
    <!-- /default border styling -->


    <!-- Solid border styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Solid border</h5>
        </div>

        <div class="card-body">
            Example of a <code>solid</code> borders inside table body. This border inherits all styling options from the default border style, the only difference is it has <code>2px</code> width. To use this border add <code>.table-border-solid</code> to the table <code>body</code> row. This border style works only with horizontal borders.
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
                    <tr class="table-border-solid">
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
                    <tr class="table-border-solid">
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
    <!-- /solid border styling -->


    <!-- Double border styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Double border</h5>
        </div>

        <div class="card-body">
            Example of <code>double</code> borders inside table body. This has <code>3px</code> width and <code>double</code> style. Visually it separates rows and the table looks more like a list of rows. To use this border add <code>.border-double</code> to the table <code>body</code> row. This border style works only with horizontal borders.
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
                    <tr class="table-border-double">
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
                    <tr class="table-border-double">
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
    <!-- /double border styling -->


    <!-- Dashed border styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dashed border</h5>
        </div>

        <div class="card-body">
            Example of <code>dashed</code> borders inside table body. This border perfectly fits when you need to highlight incomplete or extra rows. Dashed border style works only with horizontal borders and only in table body, it is mostly useless in table head. To use this border style add <code>.table-border-dashed</code> to the table <code>body</code> row.
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
                    <tr class="table-border-dashed">
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
                    <tr class="table-border-dashed">
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>@Frank</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /dashed border styling -->

</div>
<!-- /content area -->

@endsection
