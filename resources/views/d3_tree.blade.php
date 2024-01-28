@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') D3 @endslot
@slot('subtitle') Tree Layouts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic tree -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic tree layout</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of basic <code>tree</code> layout in <code>cartesian</code> orientation. The tree layout implements the <code>Reingold-Tilford</code> algorithm for efficient, tidy arrangement of layered nodes. The depth of nodes is computed by distance from the root, leading to a ragged appearance. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible. The layout supports custom styling via CSS.</p>

            <div class="chart-container has-scroll">
                <div class="chart has-minimum-width" id="d3-tree-basic"></div>
            </div>
        </div>
    </div>
    <!-- /basic tree -->


    <!-- Collapsible tree -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Collapsible tree</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">An example of basic tree layout with collapsible nodes. Current example has fixed width of <code>1280px</code>. The object returned by <code>d3.layout.tree</code> is both an object and a function. That is: you can call the layout like any other function, and the layout has additional methods that change its behavior. Like other classes in D3, layouts follow the method chaining pattern where setter methods return the layout itself, allowing multiple setters to be invoked in a concise statement.</p>

            <div class="chart-container has-scroll">
                <div class="chart has-minimum-width" id="d3-tree-collapsible"></div>
            </div>
        </div>
    </div>
    <!-- /collapsible tree -->


    <!-- Cluster dendrogram -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Cluster dendrogram</h5>
        </div>

        <div class="card-body">
            <p>Basic example of <code>tree dendrogram</code> in <code>cartesian</code> orientation. A dendrogram is a node-link diagram that places leaf nodes of the tree at the same depth. In this example, the classes (leaf nodes) are aligned on the right edge, with the packages (internal nodes) to the left. Data shows the Flare class hierarchy. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible.</p>

            <div class="chart-container has-scroll">
                <div class="chart has-minimum-width" id="d3-tree-dendrogram"></div>
            </div>
        </div>
    </div>
    <!-- /cluster dendrogram -->


    <!-- Bracket layout -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Bracket tree</h5>
        </div>

        <div class="card-body">
            <p>Example of <code>tree</code> layout with typical <code>bracket</code> style. Demo data is stored in <code>json</code> file format and demonstrates demo set of winners and challengers. All nodes are <code>collapsible</code>. Basic usage demonstrates 2 different data trees that appears on two sides of the bracket. One data set is on one side, while the other is on the opposite side. Mid elbow connections are used to create the links and you can click on a node to collapse/expand it. Instead of resizing, drag and zoom features enabled.</p>

            <div class="chart-container">
                <div class="chart" id="d3-tree-bracket"></div>
            </div>
        </div>
    </div>
    <!-- /bracket layout -->


    <!-- Radial tree layout -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Radial tree layout</h5>
        </div>

        <div class="card-body">
            <p>Example of basic <code>tree</code> layout in <code>radial</code> orientation. The tree layout implements the <code>Reingold-Tilford</code> algorithm for efficient, tidy arrangement of layered nodes. The depth of nodes is computed by distance from the root, leading to a ragged appearance. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible. The layout supports custom styling via CSS.</p>

            <div class="chart-container has-scroll">
                <div class="chart svg-center" id="d3-tree-radial"></div>
            </div>
        </div>
    </div>
    <!-- /radial tree layout -->


    <!-- Radial cluster dendrogram -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Radial dendrogram</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Basic example of <code>tree dendrogram</code> in <code>radial</code> orientation. A dendrogram is a node-link diagram that places leaf nodes of the tree at the same depth. In this example, the classes (leaf nodes) are aligned on the right edge, with the packages (internal nodes) to the left. Data shows the Flare class hierarchy. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible.</p>

            <div class="chart-container has-scroll">
                <div class="chart svg-center" id="d3-dendrogram-radial"></div>
            </div>
        </div>
    </div>
    <!-- /radial cluster dendrogram -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/d3/tree/tree_basic.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/tree/tree_collapsible.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/tree/tree_bracket.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/tree/tree_radial.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/tree/tree_dendrogram.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/d3/tree/tree_dendrogram_radial.js')}}"></script>
@endsection
