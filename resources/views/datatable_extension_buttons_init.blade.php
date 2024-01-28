@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Datatables @endslot
@slot('subtitle') Buttons Init @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic initialization -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic initialization</h5>
        </div>

        <div class="card-body">
            This example shows the <code>copy</code>, <code>csv</code>, <code>excel</code>, <code>pdf</code> and <code>print</code> buttons being used to display data export options. Buttons can be initialised very easily though the <code>buttons</code> object which can be given as an array of the buttons that you wish to display. The <code>B</code> option in the <code>dom</code> parameter will instruct DataTables where the buttons should be placed in the document - in this case, at the top right.
        </div>

        <table class="table datatable-button-init-basic">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$130,500</td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$159,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic initialization -->


    <!-- Custom button -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom button</h5>
        </div>

        <div class="card-body">
            This example shows a single button that is specified using the <code>buttons.buttons.text</code> and <code>buttons.buttons.action</code> parameters only - it simply shows an alert when activated, but any Javascript function could be run when the button is activated. All parameters are optional, and each plug-in button type can also specify its own parameters. Also this example shows how buttons can have optional classes.
        </div>

        <table class="table datatable-button-init-custom">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$130,500</td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$159,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /custom button -->


    <!-- Button collection -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Button collection</h5>
        </div>

        <div class="card-body">
            This simple example shows a <strong>collection</strong> with two custom buttons. This collection button provides the ability to show a list of buttons when activated. The buttons it will display in the sub-list are defined by its <code>buttons</code> property which can take all of the same button options as the <code>buttons.buttons</code> array (which the exception of another collection - collections cannot be nested).
        </div>

        <table class="table datatable-button-init-collection">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$130,500</td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$159,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /button collection -->


    <!-- Page length button -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Page length button</h5>
        </div>

        <div class="card-body">
            This example shows the <code>pageLength</code> button being used with <code>lengthMenu</code> to specify page lengths of 10, 25, 50 and all rows, with language strings used for the buttons. The <code>pageLength</code> button acts in exactly the same way as the default length list and will inherit the options specified by the <code>lengthMenu</code> option. Dropdown menu uses default Bootstrap styling and control button style if fully configurable through options.
        </div>

        <table class="table datatable-button-init-length">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-light">Inactive</span></td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td>$130,500</td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td>$159,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /page length button -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/buttons.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/datatables_extension_buttons_init.js')}}"></script>
@endsection
