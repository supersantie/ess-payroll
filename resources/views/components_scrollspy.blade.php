@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Scrollspy @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="flex-1 order-2 order-lg-1">

            <!-- Scrollspy -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">ScrollSpy component</h5>
                </div>

                <div class="card-body">

                    <!-- How it works -->
                    <div class="mb-4">
                        <h6 class="fw-semibold" id="scrollspy_how_it_works">How it works</h6>
                        <p>Scrollspy is a component that automatically updates Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport. Scrollspy has a few requirements to function properly:</p>
                        <ul class="">
                            <li>It must be used on a Bootstrap nav component or list group.</li>
                            <li>Scrollspy requires <code>position: relative;</code> on the element you’re spying on, usually the <code>&lt;body&gt;</code> or <code>&lt;div class="content-inner"&gt;</code>.</li>
                            <li>When spying on elements other than the <code>&lt;body&gt;</code>, be sure to have a <code>height</code> set and <code>overflow-y: scroll;</code> applied.</li>
                            <li>Anchors (<code>&lt;a&gt;</code>) are required and must point to an element with that <code>id</code>.</li>
                        </ul>
                        When successfully implemented, your nav or list group will update accordingly, moving the <code>.active</code> class from one item to the next based on their associated targets.
                    </div>
                    <!-- /how it works -->


                    <!-- Navbar example -->
                    <div class="mb-4">
                        <h6 class="fw-semibold" id="scrollspy_navbar_example">Example in navbar</h6>
                        <p class="mb-3">Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.</p>

                        <div class="mb-3">
                            <nav class="navbar navbar-expand-lg border rounded-top py-2 px-3" id="navbar_scrollspy">
                                <a class="navbar-brand fw-bold" href="#">Navbar</a>
                                <ul class="nav nav-pills justify-content-end flex-fill">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#scrollspyHeading1">First</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                            <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                            <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                            <div data-bs-spy="scroll" data-bs-target="#navbar_scrollspy" data-bs-offset="0" class="overflow-auto position-relative border border-top-0 rounded-bottom p-3" style="height: 200px;" tabindex="0">
                                <h4 id="scrollspyHeading1">First heading</h4>
                                <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>

                                <h4 id="scrollspyHeading2">Second heading</h4>
                                <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>

                                <h4 id="scrollspyHeading3">Third heading</h4>
                                <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>

                                <h4 id="scrollspyHeading4">Fourth heading</h4>
                                <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>

                                <h4 id="scrollspyHeading5">Fifth heading</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            </div>
                        </div>

                        <p>Markup example</p>
                        <pre class="language-markup">
											<code>
												&lt;nav id="navbar-example2" class="navbar bg-light px-3">
													&lt;a class="navbar-brand" href="#">Navbar&lt;/a>
													&lt;ul class="nav nav-pills">
														&lt;li class="nav-item">
															&lt;a class="nav-link" href="#scrollspyHeading1">First&lt;/a>
														&lt;/li>
														&lt;li class="nav-item">
															&lt;a class="nav-link" href="#scrollspyHeading2">Second&lt;/a>
														&lt;/li>
														&lt;li class="nav-item dropdown">
															&lt;a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown&lt;/a>
															&lt;ul class="dropdown-menu">
																&lt;li>&lt;a class="dropdown-item" href="#scrollspyHeading3">Third&lt;/a>&lt;/li>
																&lt;li>&lt;a class="dropdown-item" href="#scrollspyHeading4">Fourth&lt;/a>&lt;/li>
																&lt;li>&lt;hr class="dropdown-divider">&lt;/li>
																&lt;li>&lt;a class="dropdown-item" href="#scrollspyHeading5">Fifth&lt;/a>&lt;/li>
															&lt;/ul>
														&lt;/li>
													&lt;/ul>
												&lt;/nav>
												&lt;div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
													&lt;h4 id="scrollspyHeading1">First heading&lt;/h4>
													&lt;p>...&lt;/p>
													&lt;h4 id="scrollspyHeading2">Second heading&lt;/h4>
													&lt;p>...&lt;/p>
													&lt;h4 id="scrollspyHeading3">Third heading&lt;/h4>
													&lt;p>...&lt;/p>
													&lt;h4 id="scrollspyHeading4">Fourth heading&lt;/h4>
													&lt;p>...&lt;/p>
													&lt;h4 id="scrollspyHeading5">Fifth heading&lt;/h4>
													&lt;p>...&lt;/p>
												&lt;/div>
											</code>
										</pre>
                    </div>
                    <!-- /navbar example -->


                    <!-- Nested nav example -->
                    <div class="mb-4">
                        <h6 class="fw-semibold" id="scrollspy_nested_example">Example with nested nav</h6>
                        <p class="mb-3">Scrollspy also works with nested <code>.navs</code>. If a nested <code>.nav</code> is <code>.active</code>, its parents will also be <code>.active</code>. Scroll the area next to the navbar and watch the active class change.</p>

                        <div class="mb-3">
                            <div class="border rounded p-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <nav class="nav nav-pills flex-column mb-3 mb-lg-0" id="scrollspy_nest">
                                            <a class="nav-link active" href="#item-1">Item 1</a>
                                            <nav class="nav nav-pills flex-column">
                                                <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                                <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                            </nav>
                                            <a class="nav-link" href="#item-2">Item 2</a>
                                            <a class="nav-link" href="#item-3">Item 3</a>
                                            <nav class="nav nav-pills flex-column">
                                                <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                                <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                            </nav>
                                        </nav>
                                    </div>
                                    <div class="col-lg-8">
                                        <div data-bs-spy="scroll" data-bs-target="#scrollspy_nest" data-bs-offset="0" class="position-relative overflow-auto" style="height: 334px;" tabindex="0">
                                            <h4 id="item-1">Item 1</h4>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="item-1-1">Item 1-1</h5>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="item-1-2">Item 1-2</h5>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h4 id="item-2">Item 2</h4>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h4 id="item-3">Item 3</h4>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="item-3-1">Item 3-1</h5>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="item-3-2">Item 3-2</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Markup example</p>
                        <pre class="language-markup">
											<code>
												&lt;div class="row">
													&lt;div class="col-4">
														&lt;nav class="nav nav-pills flex-column" id="scrollspy_nest">
															&lt;a class="nav-link active" href="#item-1">Item 1&lt;/a>
															&lt;nav class="nav nav-pills flex-column">
																&lt;a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1&lt;/a>
																&lt;a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2&lt;/a>
															&lt;/nav>
															&lt;a class="nav-link" href="#item-2">Item 2&lt;/a>
															&lt;a class="nav-link" href="#item-3">Item 3&lt;/a>
															&lt;nav class="nav nav-pills flex-column">
																&lt;a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1&lt;/a>
																&lt;a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2&lt;/a>
															&lt;/nav>
														&lt;/nav>
													&lt;/div>
													&lt;div class="col-8">
														&lt;div data-bs-spy="scroll" data-bs-target="#scrollspy_nest" data-bs-offset="0" class="some-class" tabindex="0">
															&lt;h4 id="item-1">Item 1&lt;/h4>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="item-1-1">Item 1-1&lt;/h5>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="item-1-2">Item 1-2&lt;/h5>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h4 id="item-2">Item 2&lt;/h4>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h4 id="item-3">Item 3&lt;/h4>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="item-3-1">Item 3-1&lt;/h5>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="item-3-2">Item 3-2&lt;/h5>
															&lt;p>...&lt;/p>
														&lt;/div>
													&lt;/div>
												&lt;/div>
											</code>
										</pre>
                    </div>
                    <!-- /nested nav example -->


                    <!-- List group example -->
                    <div class="mb-4">
                        <h6 class="fw-semibold" id="scrollspy_list_group_example">Example with list group</h6>
                        <p class="mb-3">Scrollspy also works with <code>.list-group</code>s. Scroll the area next to the list group and watch the active class change.</p>

                        <div class="mb-3">
                            <div class="border rounded p-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div id="scrollspy_list_group" class="list-group mb-3 mb-lg-0">
                                            <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                                            <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                                            <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                                            <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div data-bs-spy="scroll" data-bs-target="#scrollspy_list_group" data-bs-offset="0" class="position-relative overflow-auto" style="height: 300px;" tabindex="0">
                                            <h5 id="list-item-1">Item 1</h5>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="list-item-2">Item 2</h5>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="list-item-3">Item 3</h5>
                                            <p class="mb-3">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h5 id="list-item-4">Item 4</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Markup example</p>
                        <pre class="language-markup">
											<code>
												&lt;div class="row">
													&lt;div class="col-4">
														&lt;div id="scrollspy_list_group" class="list-group">
															&lt;a class="list-group-item list-group-item-action" href="#list-item-1">Item 1&lt;/a>
															&lt;a class="list-group-item list-group-item-action" href="#list-item-2">Item 2&lt;/a>
															&lt;a class="list-group-item list-group-item-action" href="#list-item-3">Item 3&lt;/a>
															&lt;a class="list-group-item list-group-item-action" href="#list-item-4">Item 4&lt;/a>
														&lt;/div>
													&lt;/div>
													&lt;div class="col-8">
														&lt;div data-bs-spy="scroll" data-bs-target="#scrollspy_list_group" data-bs-offset="0" class="some-class" tabindex="0">
															&lt;h5 id="list-item-1">Item 1&lt;/h5>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="list-item-2">Item 2&lt;/h5>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="list-item-3">Item 3&lt;/h5>
															&lt;p class="mb-3">...&lt;/p>
															&lt;h5 id="list-item-4">Item 4&lt;/h5>
															&lt;p>...&lt;/p>
														&lt;/div>
													&lt;/div>
												&lt;/div>
											</code>
										</pre>
                    </div>
                    <!-- /list group example -->


                    <!-- Usage -->
                    <div id="scrollspy_usage">

                        <!-- Usage via data attributes -->
                        <div class="mb-4">
                            <h6 class="fw-semibold" id="scrollspy_data_attributes">Usage via Data Attributes</h6>
                            <p class="mb-3">To easily add scrollspy behavior to your topbar navigation, add <code>data-bs-spy="scroll"</code> to the element you want to spy on (most typically this would be the <body>). Then add the <code>data-bs-target</code> attribute with the ID or class of the parent element of any Bootstrap <code>.nav component</code>.</p>

                            <p>Add CSS styles:</p>
                            <pre class="language-css mb-3">
												<code>
													.content-wrapper {
														position: relative;
													}
												</code>
											</pre>

                            <p>And add markup:</p>
                            <pre class="language-markup">
												<code>
													&lt;div class="content-inner" data-bs-spy="scroll" data-bs-target=".sidebar-component-right">
														[...]
														&lt;div class="sidebar sidebar-component sidebar-component-right sidebar-sticky ...">
															&lt;div class="sidebar-content">
																[...]
															&lt;/div>
														&lt;/div>
														[...]
													&lt;/div>
												</code>
											</pre>
                        </div>
                        <!-- /usage via data attributes -->


                        <!-- Usage via JS -->
                        <div class="mb-4">
                            <h6 class="fw-semibold" id="scrollspy_js">Usage via JavaScript</h6>
                            <p>After adding <code>position: relative;</code> in your CSS, call the scrollspy via JavaScript:</p>

                            <pre class="language-javascript mb-3">
												<code>
													// Initialize
													const scrollspyElement = document.querySelector('.content-inner');
													const scrollSpy = new bootstrap.ScrollSpy(scrollspyElement, {
														target: '.sidebar-component-right'
													});
												</code>
											</pre>
                        </div>
                        <!-- /usage via JS -->

                    </div>
                    <!-- /usage -->


                    <!-- Methods -->
                    <div class="mb-4">
                        <h6 class="fw-semibold" id="scrollspy_methods">Scrollspy Methods</h6>
                        <p>Scrollspy supports 4 methods: <code>refresh</code> - when using scrollspy in conjunction with adding or removing of elements from the DOM, you'll need to call the refresh method; <code>dispose</code> - destroys an element’s scrollspy, <code>getInstance</code> - static method which allows you to get the scrollspy instance associated with a DOM element, <code>getOrCreateInstance</code> - Static method which allows you to get the scrollspy instance associated with a DOM element, or create a new one in case it wasn’t initialized.</p>

                        <pre class="language-javascript mb-3">
											<code>
												// Refresh Scrollspy
												const dataSpyList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'));
												dataSpyList.forEach(function (dataSpyEl) {
													bootstrap.ScrollSpy.getInstance(dataSpyEl).refresh();
												});

												// Destroy Scrollspy
												const dataSpyList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'));
												dataSpyList.forEach(function (dataSpyEl) {
													bootstrap.ScrollSpy.getInstance(dataSpyEl).dispose();
												});

												// getInstance method
												const scrollSpyContentEl = document.getElementById('content');
												const scrollSpy = bootstrap.ScrollSpy.getInstance(scrollSpyContentEl); // Returns a Bootstrap scrollspy instance

												// getOrCreateInstance method
												const scrollSpyContentEl = document.getElementById('content');
												const scrollSpy = bootstrap.ScrollSpy.getOrCreateInstance(scrollSpyContentEl); // Returns a Bootstrap scrollspy instance
											</code>
										</pre>
                    </div>
                    <!-- /methods -->


                    <!-- Options -->
                    <div class="mb-4">
                        <h6 class="fw-semibold" id="scrollspy_options">Scrollspy Options</h6>
                        <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-offset=""</code>.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Default</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>offset</td>
                                        <td>number</td>
                                        <td>10</td>
                                        <td>Pixels to offset from top when calculating position of scroll</td>
                                    </tr>
                                    <tr>
                                        <td>method</td>
                                        <td>string</td>
                                        <td>auto</td>
                                        <td>Finds which section the spied element is in. <code>auto</code> will choose the best method to get scroll coordinates. <code>offset</code> will use the Element.getBoundingClientRect() method to get scroll coordinates. <code>position</code> will use the HTMLElement.offsetTop and HTMLElement.offsetLeft properties to get scroll coordinates.</td>
                                    </tr>
                                    <tr>
                                        <td>target</td>
                                        <td>string | jQuery object | DOM element</td>
                                        <td></td>
                                        <td>Specifies element to apply Scrollspy plugin</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /options -->


                    <!-- Events -->
                    <div class="mb-3">
                        <h6 class="fw-semibold" id="scrollspy_events">Scrollspy Events</h6>

                        <div class="table-responsive mb-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Event Type</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>activate.bs.scrollspy</code></td>
                                        <td>This event fires on the scroll element whenever a new item becomes activated by the scrollspy.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p>Example code:</p>
                        <pre class="language-javascript mb-3">
											<code>
												const firstScrollSpyEl = document.querySelector('[data-bs-spy="scroll"]');
												firstScrollSpyEl.addEventListener('activate.bs.scrollspy', function () {
													// do something...
												});
											</code>
										</pre>
                    </div>
                    <!-- /events -->

                </div>
            </div>
            <!-- /scrollspy -->

        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sticky-lg-top order-1 order-lg-2 wmin-lg-300 ms-lg-3 mb-3" id="page_nav">
            <h6 class="fw-semibold mt-lg-3 mb-3">On this page</h6>

            <ul class="nav nav-scrollspy flex-column">
                <li class="nav-item"><a href="#scrollspy_how_it_works" class="nav-link">How it works</a></li>
                <li class="nav-item"><a href="#scrollspy_navbar_example" class="nav-link">Example in navbar</a></li>
                <li class="nav-item"><a href="#scrollspy_nested_example" class="nav-link">Example with nested nav</a></li>
                <li class="nav-item"><a href="#scrollspy_list_group_example" class="nav-link">Example with list group</a></li>
                <li class="nav-item">
                    <a href="#scrollspy_usage" class="nav-link">Usage</a>
                    <ul class="nav nav-scrollspy flex-column">
                        <li class="nav-item"><a href="#scrollspy_data_attributes" class="nav-link">Via data attributes</a></li>
                        <li class="nav-item"><a href="#scrollspy_js" class="nav-link">Via JavaScript</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#scrollspy_methods" class="nav-link">Plugin methods</a></li>
                <li class="nav-item"><a href="#scrollspy_options" class="nav-link">Plugin options</a></li>
                <li class="nav-item"><a href="#scrollspy_events" class="nav-link">Plugin events</a></li>
            </ul>
        </div>
        <!-- /right sidebar component -->

    </div>
    <!-- /inner container -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/components_progress.js')}}"></script>
@endsection
