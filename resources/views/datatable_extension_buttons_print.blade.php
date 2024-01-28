@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Datatables @endslot
@slot('subtitle') Print Buttons @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic initialization -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic initialization</h5>
        </div>

        <div class="card-body">
            This simple example shows Buttons configured with the <code>print</code> button type only. The print button will open a new window in the end user's browser and, by default, automatically trigger the print function allowing the end user to print the table. The window will be closed once the print is complete, or has been cancelled. Also you can disable auto printing option (see the example below).
        </div>

        <table class="table datatable-button-print-basic">
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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


    <!-- Disable auto print -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Disable auto print</h5>
        </div>

        <div class="card-body">
            By default, when the print button opens the print view window it will automatically call the browser's <code>window.print()</code> method to present the browser's print dialogue box to the end user and they can set the options they wish. When the print action is confirmed or cancelled the print view window is then automatically closed. If this is not what you want, you can easily disable this behaviour by setting <code>autoPrint</code> option to <code>false</code>.
        </div>

        <table class="table datatable-button-print-disable">
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
    <!-- /disable auto print -->


    <!-- Column selector -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Column selector</h5>
        </div>

        <div class="card-body">
            The <code>exportOptions.columns</code> option of the <code>print</code> button provides the ability to select only certain columns (using a <code>column-selector</code>). In this example only the visible columns are used for the printing. The column visibility buttons (<code>colvis</code>) are included in this example so the column visibility can be easily changed. Additionally, the last column in the table is hidden by default (<code>columns.visible</code>).
        </div>

        <table class="table datatable-button-print-columns">
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
    <!-- /column selector -->


    <!-- Row selector -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Row selector</h5>
        </div>

        <div class="card-body">
            The print button provides a lot of flexibility in the selection of the data that is to be exported. In this example the <strong>Select</strong> extension for DataTables is used to give the end user the ability to select rows by clicking on them. Two print buttons are utilised in this example to demonstrate the <code>exportOptions</code> option: the <strong>first</strong> button will print all rows (after filtering); the <strong>second</strong> button will print only the selected rows.
        </div>

        <table class="table datatable-button-print-rows">
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
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
    <!-- /row selector -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/select.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/datatables_extension_buttons_print.js')}}"></script>
@endsection
