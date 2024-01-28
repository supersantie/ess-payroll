@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') Dynamic Trees @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Initialization options -->
    <div class="mb-3">
        <h6 class="mb-0">
            Initialization options
        </h6>
        <span class="text-muted d-block">Data type and data source options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Default unordered list markup -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Unordered list markup</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Current example demonstrates multi level file tree with default options, initialized from an <code>&lt;ul></code> element. The markup also contains elements in custom styling</p>

                    <div class="tree-default border rounded p-3">
                        <ul class="d-none mb-0">
                            <li class="folder expanded">Expanded folder with children
                                <ul>
                                    <li class="expanded">Expanded sub-item
                                        <ul>
                                            <li class="active focused">Active sub-item (active and focus on init)</li>
                                            <li>Basic <i>menu item</i> with <strong class="fw-semibold">HTML support</strong></li>
                                        </ul>
                                    </li>
                                    <li>Collapsed sub-item
                                        <ul>
                                            <li>Sub-item 2.2.1</li>
                                            <li>Sub-item 2.2.2</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-tooltip" title="Look, a tool tip!">Menu item with key and tooltip</li>
                            <li class="folder">Collapsed folder
                                <ul>
                                    <li>Sub-item 1.1</li>
                                    <li>Sub-item 1.2</li>
                                </ul>
                            </li>
                            <li class="selected">This is a selected item</li>
                            <li class="expanded">Document with some children (expanded on init)
                                <ul>
                                    <li>Document sub-item</li>
                                    <li>Another document sub-item
                                        <ul>
                                            <li>Sub-item 2.1.1</li>
                                            <li>Sub-item 2.1.2</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /default unordered list markup -->

        </div>

        <div class="col-lg-6">

            <!-- Load JSON data -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Load JSON data</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">In this example multi level file tree initialized from <code>JSON</code> data type and attached to <code>&lt;div></code> block element. The element itself is empty, all markup comes from <code>json</code> file</p>

                    <div class="tree-ajax border rounded p-3"></div>
                </div>
            </div>
            <!-- /load JSON data -->

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Embed JSON data -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Embed JSON data</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">To embed JSON data in the markup, specify data type via <code>data-type</code> attribute and hide it using <code>.d-none</code> class to avoid flashing of unstyled/unloaded content before initialization</p>

                    <div class="tree-json border rounded p-3" data-type="json">
                        <div class="d-none">
                            [
                            {"title": "Expanded folder with children", "expanded": true, "folder": true, "children": [
                            {"key": "1_2", "title": "Expanded sub-item", "expanded": true, "children": [
                            {"key": "1_2_1", "title": "Active sub-item (active and focus on init)", "active": true, "focused": true},
                            {"key": "1_2_2", "title": "Basic &lt;i>menu item&lt;/i> with &lt;strong class='fw-semibold'>HTML support&lt;/strong>"}
                            ]},
                            {"key": "1_3", "title": "Expanded sub-item", "children": [
                            {"key": "1_3_1", "title": "Sub-item 2.2.1"},
                            {"key": "1_3_2", "title": "Sub-item 2.2.2"}
                            ]}
                            ]},
                            {"key": "2", "title": "Menu item with key and tooltip", "extraClasses": "has-tooltip", "tooltip": "Look, a tool tip!"},
                            {"key": "3", "title": "Collapsed folder", "folder": true, "children": [
                            {"key": "3_1", "title": "Sub-item 1.1"},
                            {"key": "3_1", "title": "Sub-item 1.2"}
                            ]},
                            {"key": "4", "title": "This is a selected item", "selected": true},
                            {"key": "5", "title": "Document with some children (expanded on init)", "expanded": true, "children": [
                            {"key": "5_1", "title": "Document sub-item"},
                            {"key": "5_2", "title": "Another document sub-item", "children": [
                            {"key": "5_2_1", "title": "Sub-item 2.1.1"},
                            {"key": "5_2_2", "title": "Sub-item 2.1.2"}
                            ]}
                            ]}
                            ]
                        </div>
                    </div>
                </div>
            </div>
            <!-- /embed JSON data -->

        </div>

        <div class="col-lg-6">

            <!-- Tree with drag and drop support -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Drag and drop support</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Fancytree supports drag'n'drop of tree nodes based on native HTML5 API. Any element that has the <code>draggable="true"</code> attribute set may be dropped over a Fancytree node</p>

                    <div class="tree-drag border rounded p-3"></div>
                </div>
            </div>
            <!-- /tree with drag and drop support -->

        </div>
    </div>
    <!-- /initialization options -->


    <!-- Selectable nodes -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Selectable nodes
        </h6>
        <span class="text-muted d-block">Single an multiple selections</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Tree with checkbox -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Multiple select</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">This tree has multi selection enabled: a single-click handler selects the node; a keydown handler selects on <kbd>space</kbd>. In this mode all nodes have inline checkboxes</p>

                    <div class="tree-checkbox border rounded p-3"></div>
                </div>
            </div>
            <!-- /tree with checkbox -->

        </div>

        <div class="col-lg-6">

            <!-- Tree checkbox options -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Disable selection</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">You can turn off a node selection by adding <code>.hideCheckbox</code> class to it or disable it using <code>.unselectable</code> class. All other interactions with the node will remain enabled</p>

                    <div class="tree-checkbox-options border rounded p-3">
                        <ul class="d-none mb-0">
                            <li class="folder expanded">Expanded folder with children
                                <ul>
                                    <li class="expanded">Expanded sub-item
                                        <ul>
                                            <li class="active focused">Active sub-item (active and focus on init)</li>
                                            <li class="hideCheckbox">Sub-item with hidden checkbox</li>
                                        </ul>
                                    </li>
                                    <li>Collapsed sub-item
                                        <ul>
                                            <li>Sub-item 2.2.1</li>
                                            <li>Sub-item 2.2.2</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="hideCheckbox">Menu item with hidden checkbox</li>
                            <li class="folder hideCheckbox">Collapsed folder with hidden checkbox
                                <ul>
                                    <li>Sub-item 1.1</li>
                                    <li>Sub-item 1.2</li>
                                </ul>
                            </li>
                            <li class="unselectable"><strong>This is an unselectable checkbox</strong></li>

                            <li class="expanded">Document with some children (expanded on init)
                                <ul>
                                    <li class="unselectable selected">Checked unselectable document sub-item</li>
                                    <li>Another document sub-item
                                        <ul>
                                            <li>Sub-item 2.1.1</li>
                                            <li>Sub-item 2.1.2</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /tree checkbox options -->

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Tree persistence -->
            <div class="card">
                <div class="card-header d-flex flex-wrap align-items-center py-0">
                    <h6 class="mb-0">Tree persistence</h6>
                    <div class="ms-auto ms-auto my-2 py-1">
                        <button type="button" class="btn btn-danger btn-sm reset-cookies">Reset cookies</button>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">Store and restore tree status using cookies or local storage: click, expand or select nodes and reload the page. To see it in action, select or unselect nodes and reload the page</p>

                    <div class="tree-persistence border rounded p-3"></div>
                </div>
            </div>
            <!-- /tree persistence -->

        </div>

        <div class="col-lg-6">

            <!-- Select all/deselect all checkboxes -->
            <div class="card">
                <div class="card-header d-flex flex-wrap align-items-center">
                    <h6 class="mb-0">Toggle checkboxes state</h6>
                    <div class="ms-auto">
                        <label class="form-check form-check-reverse">
                            <input type="checkbox" class="form-check-input" id="select_all">
                            <span class="form-check-label">Select all</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">Change checkboxes state programmatically using <code>setSelected()</code> parameter with <code>true</code> or <code>false</code> properties. Use <code>Select all</code> checkbox to check or uncheck all nodes</p>

                    <div class="tree-checkbox-toggle border rounded p-3"></div>
                </div>
            </div>
            <!-- /select all/deselect all checkboxes -->

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Hierarchical select -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Hierarchical select</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Hierarchical multi selection example. A single-click handler selects the node; a keydown handler selects on <kbd>space</kbd>. All parent nodes get indeterminate checkbox state</p>

                    <div class="tree-checkbox-hierarchical border rounded p-3">
                        <ul class="mb-0">
                            <li class="folder expanded">Expanded folder with children
                                <ul>
                                    <li class="expanded">Expanded sub-item
                                        <ul>
                                            <li>Menu sub-item</li>
                                            <li class="selected">This is a selected item</li>
                                        </ul>
                                    </li>
                                    <li>Collapsed sub-item
                                        <ul>
                                            <li>Sub-item 2.2.1</li>
                                            <li>Sub-item 2.2.2</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="popup" title="Look, a tool tip!">Menu item with key and tooltip</li>
                            <li class="folder">Collapsed folder
                                <ul>
                                    <li>Sub-item 1.1</li>
                                    <li>Sub-item 1.2</li>
                                </ul>
                            </li>
                            <li>Basic <i>menu item</i> with <strong class="fw-semibold">HTML support</strong></li>

                            <li class="expanded">Document with some children (expanded on init)
                                <ul>
                                    <li class="selected">Document sub-item</li>
                                    <li class="selected">Another document sub-item</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">

            <!-- Single select -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Single select</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Single select example. Although functionality wise there's no other changes, all checkboxes are displayed as radio buttons with corresponding styling. Markup is still the same</p>

                    <div class="tree-radio fancytree-radio border rounded p-3"></div>
                </div>
            </div>
            <!-- /single select -->

        </div>
    </div>
    <!-- /selectable nodes -->


    <!-- Various examples -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">
            Various examples
        </h6>
        <span class="text-muted d-block">Fancytree examples with options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Tree editable -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Editable nodes</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">Node titles can be changed via inline editing using <code>dblclick</code>, <kbd>Shift + click [F2]</kbd> or <kbd>Enter</kbd> (on Mac only). Press <kbd>Enter</kbd> or <kbd>Tab</kbd> key to save your changes</p>

                    <div class="tree-editable border rounded p-3"></div>
                </div>
            </div>
            <!-- /tree editable -->

        </div>

        <div class="col-lg-6">

            <!-- Tree with child counter -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Child counter</h6>
                </div>

                <div class="card-body">
                    <p class="mb-3">The following example demonstrates optional tiny badges that display count of children elements at parent node. It's controlled by <code>childcounter</code> extension stored in a separate file</p>

                    <div class="tree-child-count border rounded p-3"></div>
                </div>
            </div>
            <!-- /tree with child counter -->

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Enable/disable tree -->
            <div class="card">
                <div class="card-header d-flex flex-wrap align-items-center">
                    <h6 class="mb-0">Toggle state</h6>
                    <div class="ms-auto">
                        <label class="form-check form-check-reverse">
                            <input type="checkbox" class="form-check-input" id="enable_disable">
                            <span class="form-check-label">Disable tree</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates the usage of some Fancytree API functions, such as disabling and enabling file tree. Check <code>Disable</code> checkbox to see it in action</p>

                    <div class="tree-toggle border rounded p-3"></div>
                </div>
            </div>
            <!-- /enable/disable tree -->

        </div>

        <div class="col-lg-6">

            <!-- Tree sorting -->
            <div class="card">
                <div class="card-header d-sm-flex flex-sm-wrap align-items-sm-center py-sm-0">
                    <h6 class="mb-0">Tree sorting</h6>
                    <div class="ms-sm-auto my-sm-2 py-sm-1">
                        <button type="button" class="btn btn-primary btn-sm sort-tree">Sort tree</button>
                        <button type="button" class="btn btn-success btn-sm sort-branch ms-2">Sort active</button>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates a <code>sorting</code> feature of child list by title in 2 ways: full tree and in active nodes only. Set <code>deep</code> option to <code>true</code> to sort all descendant nodes</p>

                    <div class="tree-sorting border rounded p-3">
                        <ul class="mb-0">
                            <li class="expanded">Document with some children (expanded on init)
                                <ul>
                                    <li>Document sub-item</li>
                                    <li>Another document sub-item
                                        <ul>
                                            <li>Sub-item 2.1.1</li>
                                            <li>Sub-item 2.1.2</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="folder expanded active">Expanded folder with children
                                <ul>
                                    <li title="node 1" class="expanded">Expanded sub-item
                                        <ul>
                                            <li>Active sub-item (active and focus on init)</li>
                                            <li>Basic <i>menu item</i> with <strong class="fw-semibold">HTML support</strong></li>
                                        </ul>
                                    </li>
                                    <li title="node 2">Collapsed sorting node
                                        <ul>
                                            <li>Sub-item 2.2.1</li>
                                            <li>Sub-item 2.2.2</li>
                                        </ul>
                                    </li>
                                    <li title="node 3" class="expanded">Another sortable node</li>
                                </ul>
                            </li>
                            <li class="selected">This is a selected item</li>
                            <li class="folder">Collapsed folder
                                <ul>
                                    <li>Sub-item 1.1</li>
                                    <li>Sub-item 1.2</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /tree sorting -->

        </div>
    </div>
    <!-- /various examples -->


    <!-- Table tree -->
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Table tree</h6>
        </div>

        <div class="card-body">
            The following example demonstrates rendered tree as a table (aka tree grid) and support keyboard navigation in a grid with embedded input controls. Table functionality is based on Fancytree's <code>table.js</code> extension. The tree table extension takes care of rendering the node into one of the columns. Other columns have to be rendered in the <code>renderColumns</code> event.
        </div>

        <div class="table-responsive">
            <table class="table tree-table">
                <thead>
                    <tr>
                        <th style="width: 46px;"></th>
                        <th style="width: 80px;">#</th>
                        <th>Items</th>
                        <th style="width: 80px;">Key</th>
                        <th style="width: 46px;">Like</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /table tree -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/trees/fancytree_all.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/trees/fancytree_childcounter.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/trees/fancytree.dnd5.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_trees.js')}}"></script>
@endsection
