@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Tables @endslot
@slot('subtitle') Sizing @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Extra large table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Extra large table</h5>
        </div>

        <div class="card-body">
            Example of <code>extra large</code> table sizing using <code>.table-xl</code> class added to the <code>.table</code>. All table rows have <code>60px</code> height in REM units.
        </div>

        <div class="table-responsive">
            <table class="table table-xl">
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
                    <tr>
                        <td>5</td>
                        <td>Winnie</td>
                        <td>the Pooh</td>
                        <td>@Winnie</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Garry</td>
                        <td>Smith</td>
                        <td>@Garry</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ian</td>
                        <td>Berg</td>
                        <td>@Ian</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /extra large table -->


    <!-- Large table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Large table</h5>
        </div>

        <div class="card-body">
            Example of <code>large</code> table sizing using <code>.table-lg</code> class added to the <code>.table</code>. All table rows have <code>53px</code> height in REM units.
        </div>

        <div class="table-responsive">
            <table class="table table-lg">
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
                    <tr>
                        <td>5</td>
                        <td>Winnie</td>
                        <td>the Pooh</td>
                        <td>@Winnie</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Garry</td>
                        <td>Smith</td>
                        <td>@Garry</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ian</td>
                        <td>Berg</td>
                        <td>@Ian</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /large table -->


    <!-- Default table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default table</h5>
        </div>

        <div class="card-body">
            Example of <code>default</code> table sizing. This table doesn't require any additional classes in <code>.table</code> container. All table rows have <code>44px</code> height in REM units.
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
                    <tr>
                        <td>5</td>
                        <td>Winnie</td>
                        <td>the Pooh</td>
                        <td>@Winnie</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Garry</td>
                        <td>Smith</td>
                        <td>@Garry</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ian</td>
                        <td>Berg</td>
                        <td>@Ian</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /default table -->


    <!-- Small table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Small table</h5>
        </div>

        <div class="card-body">
            Example of <code>small</code> table sizing using <code>.table-sm</code> class added to the <code>.table</code>. All table rows have <code>40px</code> height in REM units.
        </div>

        <div class="table-responsive">
            <table class="table table-sm">
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
                    <tr>
                        <td>5</td>
                        <td>Winnie</td>
                        <td>the Pooh</td>
                        <td>@Winnie</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Garry</td>
                        <td>Smith</td>
                        <td>@Garry</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ian</td>
                        <td>Berg</td>
                        <td>@Ian</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /small table -->


    <!-- Mini table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Mini table</h5>
        </div>

        <div class="card-body">
            Example of <code>mini</code> table sizing using <code>.table-xs</code> class added to the <code>.table</code>. All table rows have <code>36px</code> height in REM units.
        </div>

        <div class="table-responsive">
            <table class="table table-xs">
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
                    <tr>
                        <td>5</td>
                        <td>Winnie</td>
                        <td>the Pooh</td>
                        <td>@Winnie</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Garry</td>
                        <td>Smith</td>
                        <td>@Garry</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ian</td>
                        <td>Berg</td>
                        <td>@Ian</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /mini table -->

</div>
<!-- /content area -->

@endsection
