@extends('layouts.master')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Attendance
        @endslot
    @endcomponent

    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ">
                <h5 class="mb-0">Attendance List</h5>

                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-start" id="bootbox_form">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="ph-plus"></i>
                        </span>
                        Add Entry
                    </button>
                    

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary btn-labeled btn-labeled-start dropdown-toggle"
                            data-bs-toggle="dropdown">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            File
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Upload a file...</a>
                            <a href="#" class="dropdown-item">Download CSV template</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                The <code>Responsive</code> extension for DataTables can be applied to a DataTable in one of two ways; with
                a specific <code>class name</code> on the table, or using the DataTables initialisation options. This method
                shows the latter, with the <code>responsive</code> option being set to the boolean value <code>true</code>.
                The <code>responsive</code> option can be given as a boolean value, or as an object with configuration
                options.
            </div>

            <table class="table datatable-responsive">
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
                                            <i class="ph-file-csv me-2"></i>
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
    </div>
    <!-- /content area -->
@endsection
@section('center-scripts')
    <script src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/tables/datatables/extensions/responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/notifications/bootbox.min.js') }}"></script>
    <script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/notifications/sweet_alert.min.js')}}"></script>
@endsection
@section('scripts')

    <script src="{{ URL::asset('assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <script src="{{URL::asset('assets/demo/pages/form_select2.js')}}"></script>
    <script src="{{URL::asset('assets/demo/pages/extra_sweetalert.js')}}"></script>
    <script>
        const Modals = function() {

            const _componentModalRemote = function() {
                function load(url, element) {
                    req = new XMLHttpRequest();
                    req.open("GET", url, false);
                    req.send(null);

                    element.innerHTML = req.responseText;
                }

                const remoteDataModal = document.getElementById('modal_remote');
                if (remoteDataModal) {
                    remoteDataModal.addEventListener('show.bs.modal', function() {
                        load("../../../assets/demo/data/wizard/education.html", remoteDataModal
                            .querySelector('.modal-body'));
                    });
                }
            };

            // Modal callbacks
            const _componentModalCallbacks = function() {

                // onShow callback
                const onShowCallbackModal = document.getElementById('modal_onshow');
                if (onShowCallbackModal) {
                    onShowCallbackModal.addEventListener('show.bs.modal', function() {
                        alert('onShow callback fired.')
                    });
                }

                // onShown callback
                const onShownCallbackModal = document.getElementById('modal_onshown');
                if (onShownCallbackModal) {
                    onShownCallbackModal.addEventListener('shown.bs.modal', function() {
                        alert('onShown callback fired.')
                    });
                }

                // onHide callback
                const onHideCallbackModal = document.getElementById('modal_onhide');
                if (onHideCallbackModal) {
                    onHideCallbackModal.addEventListener('hide.bs.modal', function() {
                        alert('onHide callback fired.')
                    });
                }

                // onHidden callback
                const onHiddenCallbackModal = document.getElementById('modal_onhidden');
                if (onHiddenCallbackModal) {
                    onHiddenCallbackModal.addEventListener('hidden.bs.modal', function() {
                        alert('onHidden callback fired.')
                    });
                }
            };

            // Bootbox extension
            const _componentModalBootbox = function() {
                if (typeof bootbox == 'undefined') {
                    console.warn('Warning - bootbox.min.js is not loaded.');
                    return;
                }

                // Alert dialog
                const bbAlert = document.querySelector('#alert');
                if (bbAlert) {
                    bbAlert.addEventListener('click', function() {
                        bootbox.alert({
                            title: 'Check this out!',
                            message: 'Native alert dialog has been replaced with Bootbox alert box.'
                        });
                    });
                }

                // Confirmation dialog
                const bbConfirm = document.querySelector('#confirm');
                if (bbConfirm) {
                    bbConfirm.addEventListener('click', function() {
                        bootbox.confirm({
                            title: 'Confirm dialog',
                            message: 'Native confirm dialog has been replaced with Bootbox confirm box.',
                            buttons: {
                                confirm: {
                                    label: 'Yes',
                                    className: 'btn-primary'
                                },
                                cancel: {
                                    label: 'Cancel',
                                    className: 'btn-link'
                                }
                            },
                            callback: function(result) {
                                bootbox.alert({
                                    title: 'Confirmation result',
                                    message: 'Confirm result: ' + result
                                });
                            }
                        });
                    });
                }

                // Prompt dialog
                const bbPrompt = document.querySelector('#prompt');
                if (bbPrompt) {
                    bbPrompt.addEventListener('click', function() {
                        bootbox.prompt({
                            title: 'Please enter your name',
                            buttons: {
                                confirm: {
                                    label: 'Yes',
                                    className: 'btn-primary'
                                },
                                cancel: {
                                    label: 'Cancel',
                                    className: 'btn-link'
                                }
                            },
                            callback: function(result) {
                                if (result === null) {
                                    bootbox.alert({
                                        title: 'Prompt dismissed',
                                        message: 'You have cancelled this damn thing'
                                    });
                                } else {
                                    bootbox.alert({
                                        title: 'Hi <strong>' + result + '</strong>',
                                        message: 'How are you doing today?'
                                    });
                                }
                            }
                        });
                    });
                }

                // Prompt dialog with default value
                const bbPromptValue = document.querySelector('#prompt_value');
                if (bbPromptValue) {
                    bbPromptValue.addEventListener('click', function() {
                        bootbox.prompt({
                            title: 'What is your real name?',
                            value: 'Themesbrand',
                            buttons: {
                                confirm: {
                                    label: 'Yes',
                                    className: 'btn-primary'
                                },
                                cancel: {
                                    label: 'Cancel',
                                    className: 'btn-link'
                                }
                            },
                            callback: function(result) {
                                if (result === null) {
                                    bootbox.alert({
                                        title: 'Prompt dismissed',
                                        message: 'You have cancelled this damn thing'
                                    });
                                } else {
                                    bootbox.alert({
                                        title: 'Hi <strong>' + result + '</strong>',
                                        message: 'How are you doing today?'
                                    });
                                }
                            }
                        });
                    });
                }

                // Custom bootbox dialog
                const bbCustom = document.querySelector('#bootbox_custom');
                if (bbCustom) {
                    bbCustom.addEventListener('click', function() {
                        bootbox.dialog({
                            message: 'I am a custom dialog',
                            title: 'Custom title',
                            buttons: {
                                success: {
                                    label: 'Success!',
                                    className: 'btn-success',
                                    callback: function() {
                                        bootbox.alert({
                                            title: 'Success!',
                                            message: 'This is a great success!'
                                        });
                                    }
                                },
                                danger: {
                                    label: 'Danger!',
                                    className: 'btn-danger',
                                    callback: function() {
                                        bootbox.alert({
                                            title: 'Ohh noooo!',
                                            message: 'Uh oh, look out!'
                                        });
                                    }
                                },
                                main: {
                                    label: 'Click ME!',
                                    className: 'btn-primary',
                                    callback: function() {
                                        bootbox.alert({
                                            title: 'Hooray!',
                                            message: 'Something awesome just happened!'
                                        });
                                    }
                                }
                            }
                        });
                    });
                }

                // Custom bootbox dialog with form
                const bbForm = document.querySelector('#bootbox_form');
                if (bbForm) {
                    bbForm.addEventListener('click', function() {
                        bootbox.dialog({
                            title: 'Add entry',
                            message: '<form action="">' +
                                '<div class="row mb-3">' +
                                '<label class="col-md-4 col-form-label">Name</label>' +
                                '<div class="col-md-8">' +
                                '<input id="name" name="name" type="text" placeholder="Your name" class="form-control">' +
                                '<div class="form-text text-muted">Here goes your name</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<label class="col-md-4 col-form-label">How awesome is this?</label>' +
                                '<div class="col-md-8">' +
                                '<div class="form-check-horizontal">' +
                                '<div class="form-check mb-2">' +
                                '<label class="form-check-label">' +
                                '<input type="radio" class="form-check-input" name="awesomeness" id="awesomeness-0" value="Really awesome" checked>' +
                                'Really awesome' +
                                '</label>' +
                                '</div>' +
                                '<div class="form-check">' +
                                '<label class="form-check-label">' +
                                '<input type="radio" class="form-check-input" name="awesomeness" id="awesomeness-1" value="Super cool">' +
                                'Super cool' +
                                '</label>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</form>',
                            buttons: {
                                success: {
                                    label: 'Save',
                                    className: 'btn-success',
                                callback: function() {
                                        const name = document.querySelector('#name').value;
                                        const answer = document.querySelector(
                                            'input[name="awesomeness"]:checked').value;
                                        bootbox.alert({
                                            title: 'Hello ' + name + '!',
                                            message: 'You have chosen <strong>' +
                                                answer + '</strong>.'
                                        });
                                    }
                                }
                            }
                        });
                    });
                }
            };


            //
            // Return objects assigned to module
            //

            return {
                initComponents: function() {
                    _componentModalRemote();
                    _componentModalCallbacks();
                    _componentModalBootbox();
                }
            }
        }();


        document.addEventListener('DOMContentLoaded', function() {
            Modals.initComponents();
        });
    </script>
@endsection
