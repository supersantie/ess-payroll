@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Datatables @endslot
@slot('subtitle') Styling @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Default style</h5>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->


    <!-- Striped rows -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Striped rows</h5>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /striped rows -->


    <!-- Hover rows -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hover rows</h5>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /hover rows -->


    <!-- Bordered table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bordered table</h5>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic table-bordered">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /bordered table -->


    <!-- Style combinations -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Style combinations</h5>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Chantal</td>
                    <td><a href="#">Nailor</a></td>
                    <td>Technical Services Librarian</td>
                    <td>10 Jan 1980</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Delma</td>
                    <td>Bonds</td>
                    <td>Lead Brand Manager</td>
                    <td>21 Dec 1968</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roland</td>
                    <td>Salmos</td>
                    <td><a href="#">Senior Program Developer</a></td>
                    <td>5 Jun 1986</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Coy</td>
                    <td>Wollard</td>
                    <td>Customer Service Operator</td>
                    <td>12 Oct 1982</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxwell</td>
                    <td>Maben</td>
                    <td>Regional Representative</td>
                    <td>25 Feb 1988</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to .pdf
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to .csv
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to .doc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /style combinations -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/datatables_basic.js')}}"></script>
@endsection
