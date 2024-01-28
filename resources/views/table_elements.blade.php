@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Tables @endslot
@slot('subtitle') Elements @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Table components -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Table components</h5>
        </div>

        <div class="card-body">
            Table below contains different examples of components that can be used in the table: form components, interface components, buttons, list of actions etc. All of them are adapted for different cases, such as multiple elements in the same table cell. These components support all available sizes and styles. Charts are also supported, but in certain sizes.
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-lg">
                <tbody>
                    <tr class="table-light">
                        <th colspan="3">Control buttons and icons</th>
                    </tr>
                    <tr>
                        <td class="wmin-lg-300">Control links</td>
                        <td class="wmin-lg-350">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body">
                                    <i class="ph-gear"></i>
                                </a>
                            </div>
                        </td>
                        <td>Basic table row control buttons. These links appear as a list of links with icons</td>
                    </tr>
                    <tr>
                        <td>Colored links</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" class="text-primary">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-danger mx-2">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-teal">
                                    <i class="ph-gear"></i>
                                </a>
                            </div>
                        </td>
                        <td>Control links support different colors: default Bootstrap contextual colors and custom text colors from the custom color system. To use these colors add <code>.text-*</code> class to <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td>Links with tooltip</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Remove">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Options">
                                    <i class="ph-gear"></i>
                                </a>
                            </div>
                        </td>
                        <td>Table row control links with default Bootstrap tooltip triggered on <code>hover</code></td>
                    </tr>
                    <tr>
                        <td>Links with modals</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#edit_modal">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-toggle="modal" data-bs-target="#remove_modal">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-toggle="modal" data-bs-target="#options_modal">
                                    <i class="ph-gear"></i>
                                </a>
                            </div>
                        </td>
                        <td>These control links launch <code>modals</code> with table row options. Click each icon to see it in action</td>
                    </tr>
                    <tr>
                        <td>Links with dropdown</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" class="text-body">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2">
                                    <i class="ph-trash"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Export to PDF
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-xls me-2"></i>
                                            Export to CSV
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-doc me-2"></i>
                                            Export to DOC
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>Control links with optional <code>dropdown</code> menu appended to one of the links</td>
                    </tr>
                    <tr>
                        <td>Options dropdown</td>
                        <td class="align-middle">
                            <div class="dropdown">
                                <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <div class="dropdown-header">Options</div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pen me-2"></i>
                                        Edit entry
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Remove entry
                                    </a>
                                    <div class="dropdown-header">Export</div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Export to PDF
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Export to CSV
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Export to DOC
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Here all table row controls are moved to one <code>general dropdown</code> menu, that is appended to 1 link</td>
                    </tr>
                    <tr>
                        <td>Links with text</td>
                        <td>
                            <ul class="list-inline mb-0">
                                <li class="dropdown">
                                    <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">Options</a>

                                    <div class="dropdown-menu">
                                        <div class="dropdown-header">Options</div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pen me-2"></i>
                                            Edit entry
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-trash me-2"></i>
                                            Remove entry
                                        </a>
                                        <div class="dropdown-header">Export</div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Export to PDF
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-xls me-2"></i>
                                            Export to CSV
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-doc me-2"></i>
                                            Export to DOC
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td>Control link with text and icon. Text can be placed <code>before</code> icon or <code>after</code> it. Optional <code>.me-2</code> class adds extra right margin to the icon</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Badges</th>
                    </tr>
                    <tr>
                        <td>Badge</td>
                        <td>
                            <span class="badge bg-danger">In progress</span>
                            <span class="badge bg-success bg-opacity-20 text-success ms-2">Done</span>
                        </td>
                        <td>Basic Bootstrap <code>badge</code>. Supports default contextual colors and custom colors from the color system</td>
                    </tr>
                    <tr>
                        <td>Badge pill</td>
                        <td>
                            <span class="badge bg-primary rounded-pill">92</span>
                            <span class="badge bg-danger bg-opacity-20 text-danger ms-2">190</span>
                        </td>
                        <td>Basic Bootstrap <code>badge pill</code> - badges with rounded corners</td>
                    </tr>
                    <tr>
                        <td>Linked badge</td>
                        <td>
                            <a href="#" class="badge bg-warning">Click me</a>
                        </td>
                        <td>Liked badge. To use label as a link, add <code>.badge</code> class to the link element</td>
                    </tr>
                    <tr>
                        <td>Linked badge pill</td>
                        <td>
                            <a href="#" class="badge bg-dark rounded-pill">59</a>
                        </td>
                        <td>Liked badge pill. To use badge as a link, add <code>.rounded-pill</code> class to the link element</td>
                    </tr>
                    <tr>
                        <td>Badge with dropdown</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="badge bg-teal dropdown-toggle" data-bs-toggle="dropdown">Priority</a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <span class="bg-danger border-danger rounded-pill p-1 me-2"></span>
                                        High priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="bg-info border-info rounded-pill p-1 me-2"></span>
                                        Normal priority
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="bg-primary border-primary rounded-pill p-1 me-2"></span>
                                        Low priority
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Badge with dropdown menu</td>
                    </tr>
                    <tr>
                        <td>Badge pill with dropdown</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="badge bg-indigo rounded-pill dropdown-toggle" data-bs-toggle="dropdown">50%</a>

                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrow-up text-success me-2"></i>
                                        Increase to 100%
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrow-up text-success me-2"></i>
                                        Increase to 90%
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrow-up text-success me-2"></i>
                                        Increase to 70%
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrow-down text-danger me-2"></i>
                                        Decrease to 30%
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrow-down text-danger me-2"></i>
                                        Decrease to 10%
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrow-down text-danger me-2"></i>
                                        Decrease to 0%
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>Badge pill with dropdown menu</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Styled checkboxes</th>
                    </tr>
                    <tr>
                        <td>Styled checkbox</td>
                        <td>
                            <input type="checkbox" class="form-check-input" checked>
                        </td>
                        <td>Single styled checkbox without label</td>
                    </tr>
                    <tr>
                        <td>Left position</td>
                        <td>
                            <label class="form-check form-check-inline m-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Left styled checkbox</span>
                            </label>
                        </td>
                        <td>Styled checkbox with label, <code>left</code> position</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td>
                            <label class="form-check form-check-inline form-check-reverse m-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Right styled checkbox</span>
                            </label>
                        </td>
                        <td>Styled checkbox with label, <code>right</code> position</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Styled radios</th>
                    </tr>
                    <tr>
                        <td>Styled radio</td>
                        <td>
                            <input type="radio" class="form-check-input" checked>
                        </td>
                        <td>Single styled radio without label</td>
                    </tr>
                    <tr>
                        <td>Left position</td>
                        <td>
                            <label class="form-check form-check-inline m-0">
                                <input type="radio" class="form-check-input" name="custom-radio-left" checked>
                                <span class="form-check-label">Left styled radio</span>
                            </label>
                        </td>
                        <td>Styled radio with label, <code>left</code> position</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td>
                            <label class="form-check form-check-inline form-check-reverse m-0">
                                <input type="radio" class="form-check-input" name="custom-radio-right" checked>
                                <span class="form-check-label">Right styled radio</span>
                            </label>
                        </td>
                        <td>Styled radio with label, <code>right</code> position</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Default checkboxes</th>
                    </tr>
                    <tr>
                        <td>Default checkbox</td>
                        <td>
                            <input type="checkbox" checked>
                        </td>
                        <td>Single default checkbox without label</td>
                    </tr>
                    <tr>
                        <td>Left position</td>
                        <td>
                            <label class="d-inline-flex align-items-center">
                                <input type="checkbox" checked>
                                <span class="ms-2">Left default checkbox</span>
                            </label>
                        </td>
                        <td>Default checkbox with label, <code>left</code> position</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td>
                            <label class="d-inline-flex align-items-center">
                                <span class="me-2">Right default checkbox</span>
                                <input type="checkbox" checked>
                            </label>
                        </td>
                        <td>Default checkbox with label, <code>right</code> position</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Default radios</th>
                    </tr>
                    <tr>
                        <td>Default radio</td>
                        <td>
                            <input type="radio" checked>
                        </td>
                        <td>Single default radio without label</td>
                    </tr>
                    <tr>
                        <td>Left position</td>
                        <td>
                            <label class="d-inline-flex align-items-center">
                                <input type="radio" name="radio-default" checked>
                                <span class="ms-2">Left default radio</span>
                            </label>
                        </td>
                        <td>Default radio with label, <code>left</code> position</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td>
                            <label class="d-inline-flex align-items-center">
                                <span class="me-2">Right default radio</span>
                                <input type="radio" name="radio-default">
                            </label>
                        </td>
                        <td>Default radio with label, <code>right</code> position</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Switch toggles</th>
                    </tr>
                    <tr>
                        <td>Switch</td>
                        <td>
                            <label class="form-switch">
                                <input type="checkbox" class="form-check-input" checked>
                            </label>
                        </td>
                        <td>Single switch</td>
                    </tr>
                    <tr>
                        <td>Left position</td>
                        <td>
                            <label class="form-check form-check-inline form-switch m-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Left switch</span>
                            </label>
                        </td>
                        <td>Switch checkbox with label, <code>left</code> position</td>
                    </tr>
                    <tr>
                        <td>Right position</td>
                        <td>
                            <label class="form-check form-check-inline form-switch form-check-reverse m-0">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Right switch</span>
                            </label>
                        </td>
                        <td>Switch checkbox with label, <code>right</code> position</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">File uploaders</th>
                    </tr>
                    <tr>
                        <td>Default upload</td>
                        <td>
                            <input type="file">
                        </td>
                        <td>Default single file uploader</td>
                    </tr>
                    <tr>
                        <td>Styled uploader</td>
                        <td>
                            <input type="file" class="form-control">
                        </td>
                        <td>Single file uploader, styled with pure CSS</td>
                    </tr>
                    <tr>
                        <td>Multiple uploader</td>
                        <td>
                            <input type="file" class="bootstrap-uploader" data-show-preview="false">
                        </td>
                        <td>Multiple file uploader, using <code>file_input.js</code> plugin</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">Inputs and selects</th>
                    </tr>
                    <tr>
                        <td>Input field</td>
                        <td>
                            <input type="text" class="form-control" placeholder="Text input">
                        </td>
                        <td>Basic input field with <code>.form-control</code> class. Supports all available sizes</td>
                    </tr>
                    <tr>
                        <td>Input group</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="ph-swap"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Input group">
                                <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a href="#" class="dropdown-item">One more line</a>
                                </div>
                            </div>
                        </td>
                        <td>Extended form controls with appended and prepended text of buttons</td>
                    </tr>
                    <tr>
                        <td>Spinner</td>
                        <td>
                            <div class="input-group w-md-50">
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="ph-minus ph-sm"></i>
                                </button>
                                <input class="form-control form-control-number text-center" type="number" name="number" value="5">
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="ph-plus ph-sm"></i>
                                </button>
                            </div>
                        </td>
                        <td>Basic implementation of spinners based on <code>bootspin.js</code> library</td>
                    </tr>
                    <tr>
                        <td>Default select</td>
                        <td>
                            <select name="select" class="form-select">
                                <option value="opt1">Basic select box</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </td>
                        <td>Default simple selects with <code>.form-select</code> class. Supports all available sizes</td>
                    </tr>
                    <tr>
                        <td>Select2 single</td>
                        <td>
                            <select name="select" class="form-control form-control-select2">
                                <option value="opt1">Select2 select</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </td>
                        <td>Single select based on <code>select2.js</code> library</td>
                    </tr>
                    <tr>
                        <td>Select2 multiple</td>
                        <td>
                            <select name="select" multiple="multiple" class="form-control form-control-select2">
                                <option value="opt1" selected>Option 1</option>
                                <option value="opt2" selected>Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </td>
                        <td>Multiple select based on <code>select2.js</code> library</td>
                    </tr>
                    <tr>
                        <td>Multiselect</td>
                        <td>
                            <select class="form-control form-control-multiselect" multiple="multiple">
                                <option value="opt1">Option 1</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </td>
                        <td>Multiple select with checkboxes based on <code>multiselect.js</code> library</td>
                    </tr>

                    <tr class="table-light">
                        <th colspan="3">UI components</th>
                    </tr>
                    <tr>
                        <td>Button</td>
                        <td>
                            <button type="button" class="btn btn-light">Basic button</button>
                        </td>
                        <td>Simple button, supports all sizes and colors</td>
                    </tr>
                    <tr>
                        <td>Buttons with icon</td>
                        <td>
                            <button type="button" class="btn btn-light btn-icon">
                                <i class="ph-list"></i>
                            </button>

                            <div class="btn-group ms-2">
                                <button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </button>

                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a href="#" class="dropdown-item">One more line</a>
                                </div>
                            </div>
                        </td>
                        <td>Simple button and button dropdowns with icon only, require <code>.btn-icon</code> class for padding correction</td>
                    </tr>
                    <tr>
                        <td>Button dropdown</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Button dropdown</button>

                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a href="#" class="dropdown-item">One more line</a>
                                </div>
                            </div>
                        </td>
                        <td>Button dropdown. Also supports segmented buttons and button toggles</td>
                    </tr>
                    <tr>
                        <td>Progress bar</td>
                        <td>
                            <div class="progress" style="height: 0.625rem;">
                                <div class="progress-bar bg-danger" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>Progress bar, supports all available color and sizing options</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /table components -->


    <!-- Edit modal -->
    <div id="edit_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit table</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th class="col-xs-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" value="Mark"></td>
                                <td><input type="text" class="form-control" value="Otto"></td>
                                <td><input type="text" class="form-control" value="@mdo"></td>
                                <td class="align-middle">
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body"><i class="ph-plus"></i></a>
                                        <a href="#" class="text-body ms-2"><i class="ph-x"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" value="Jacob"></td>
                                <td><input type="text" class="form-control" value="Thornton"></td>
                                <td><input type="text" class="form-control" value="@fat"></td>
                                <td class="align-middle">
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body"><i class="ph-plus"></i></a>
                                        <a href="#" class="text-body ms-2"><i class="ph-x"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" value="Larry"></td>
                                <td><input type="text" class="form-control" value="the Bird"></td>
                                <td><input type="text" class="form-control" value="@twitter"></td>
                                <td class="align-middle">
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body"><i class="ph-plus"></i></a>
                                        <a href="#" class="text-body ms-2"><i class="ph-x"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer bg-transparent">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /edit modal -->


    <!-- Remove modal -->
    <div id="remove_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    You are about to remove this row. Are you sure?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Yes, remove</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">No, thanks</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /remove modal -->


    <!-- Options modal -->
    <div id="options_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Row options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="">
                        <div class="row mb-3">
                            <label class="fw-semibold col-form-label col-sm-3">Allow select:</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-select2">
                                    <option value="single" selected>Single</option>
                                    <option value="multiple">Multiple</option>
                                    <option value="disabled">Disabled</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="fw-semibold col-form-label col-sm-3">Allow edit:</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-select2">
                                    <option value="inline">Edit inline</option>
                                    <option value="modal" selected>Edit in modal</option>
                                    <option value="popover">Edit in popover</option>
                                    <option value="disabled">Disabled</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="fw-semibold col-form-label col-sm-3">Add status:</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-select2">
                                    <option value="completed" selected>Completed</option>
                                    <option value="progress">In progress</option>
                                    <option value="assigned">Assigned</option>
                                    <option value="created">Created</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="fw-semibold col-form-label col-sm-3">Set priority:</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-select2-actions">
                                    <option value="urgent" data-icon="check-circle text-danger" selected>Urgent</option>
                                    <option value="high" data-icon="check-circle text-primary">High</option>
                                    <option value="normal" data-icon="check-circle text-success">Normal</option>
                                    <option value="low" data-icon="check-circle text-info">Low</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="fw-semibold col-form-label col-sm-3">Enable controls:</label>
                            <div class="col-sm-9">
                                <div class="form-check-horizontal">
                                    <label class="form-switch">
                                        <input type="checkbox" class="form-check-input m-0" id="enable_controls" checked>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="fw-semibold col-form-label col-sm-3">Controls:</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-select2-actions" id="available_controls" multiple="multiple">
                                    <option value="edit" data-icon="pen" selected>Edit</option>
                                    <option value="remove" data-icon="trash" selected>Remove</option>
                                    <option value="options" data-icon="gear">Options</option>
                                    <option value="add" data-icon="plus">Add</option>
                                    <option value="add" data-icon="copy">Copy</option>
                                    <option value="select" data-icon="check">Select</option>
                                    <option value="mark" data-icon="file-arrow-down">Export</option>
                                    <option value="mark" data-icon="file-arrow-up">Import</option>
                                    <option value="mark" data-icon="printer">Print</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save settings</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /options modal -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/fileinput/fileinput.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/table_elements.js')}}"></script>
@endsection
