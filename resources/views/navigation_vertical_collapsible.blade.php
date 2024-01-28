@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Vertical Nav @endslot
@slot('subtitle') Collapsible @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Info alert -->
    <div class="alert alert-success alert-dismissible">
        <div class="alert-heading fw-semibold">Collapsible navigation type</div>
        Default navigation type is <code>collapsible</code> - when new level is expanded, current level remains opened. This logic works in all navigation levels.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <!-- /info alert -->


    <!-- Navigation types -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Navigation types</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Default navigation type is <strong>collapsible</strong>: when new item is expanded, current level remains opened. This logic works in all navigation levels. Collapsible navigation doesn't require any additional classes or data attributes. The second navigation type is <strong>accordion</strong>: when new item is expanded, current level is collapsed. This logic also works in all navigation levels. In folded sidebar parent level of navigation doesn't have click event and shows child levels on hover/focus, but child levels functionality remains the same according to the type of navigation. Sidebar navigation supports up to 3 levels of children menus.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Collapsible type:</p>
                    <div class="sidebar sidebar-expand w-100 border rounded mb-lg-4">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <div class="sidebar-section sidebar-section-body">
                                <div class="d-flex justify-content-center">
                                    <a href="#">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                    </a>

                                    <div class="flex-fill ms-3">
                                        <div class="fw-semibold">Victoria Baker</div>
                                        <div class="fs-sm lh-1 opacity-50 mt-1">
                                            Senior developer
                                        </div>
                                    </div>

                                    <div class="ms-3 align-self-center">
                                        <button type="button" class="btn btn-light border-transparent btn-icon btn-sm rounded-pill">
                                            <i class="ph-gear"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Navigation -->
                            <div class="sidebar-section">
                                <ul class="nav nav-sidebar" data-nav-type="collapsible">
                                    <li class="nav-item-header">
                                        <div class="text-uppercase fs-sm lh-sm opacity-50">Navigation header</div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <i class="ph-plus-circle"></i>
                                            Active link
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-circles-three-plus"></i>
                                            Top level link
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-pencil"></i>
                                            With children
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Second level link
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Second level link
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-user-plus"></i>
                                            Multiple levels
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level</a>
                                            </li>
                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link">Second level with child</a>
                                                <ul class="nav-group-sub collapse">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link disabled">
                                            <i class="ph-users-three"></i>
                                            Disabled levels
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Second level link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Collapsible type in child levels:</p>
                    <div class="sidebar sidebar-expand w-100 border rounded mb-lg-4">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <div class="sidebar-section sidebar-section-body">
                                <div class="d-flex justify-content-center">
                                    <a href="#">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="40" height="40" class="rounded-pill" alt="">
                                    </a>

                                    <div class="flex-fill ms-3">
                                        <div class="fw-semibold">Victoria Baker</div>
                                        <div class="fs-sm lh-1 opacity-50 mt-1">
                                            Senior developer
                                        </div>
                                    </div>

                                    <div class="ms-3 align-self-center">
                                        <button type="button" class="btn btn-light border-transparent btn-icon btn-sm rounded-pill">
                                            <i class="ph-gear"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Navigation -->
                            <div class="sidebar-section">
                                <ul class="nav nav-sidebar" data-nav-type="collapsible">
                                    <li class="nav-item-header">
                                        <div class="text-uppercase fs-sm lh-sm opacity-50">Navigation header</div>
                                    </li>

                                    <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                                        <a href="#" class="nav-link">
                                            <i class="ph-circles-three-plus"></i>
                                            Multiple children
                                        </a>

                                        <ul class="nav-group-sub collapse show">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Single item</a>
                                            </li>
                                            <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                                                <a href="#" class="nav-link">Level with child</a>
                                                <ul class="nav-group-sub collapse show">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link">Level with child</a>
                                                <ul class="nav-group-sub collapse">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link disabled">Disabled child levels</a>
                                                <ul class="nav-group-sub collapse">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Third level</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /navigation types -->


    <!-- Navigation classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Navigation classes</h5>
        </div>

        <div class="card-body">
            This table contains all classes related to the vertical sidebar navigation. Vertical navigation is a custom layout element that uses global <code>nav</code> component classes and adapted for main navigation purposes. Depending on the needs, it supports different options such as collapsing type, icons, badges, combination with other sidebar components etc. This list explains the logic and purpose:
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th style="width: 20%;">Class</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.nav</code></td>
                        <td>Global wrapper for navigation list. It uses default Bootstrap's styles of <code>.nav</code> component and similar markup options.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-sidebar</code></td>
                        <td>Default navigation class, must be used with any navigation type and color. Responsible for targeting specific style changes and basic styling of item colors, borders and icons.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-item-header</code></td>
                        <td>Targets optional <code>header</code> element for separating group of nav items. In main sidebar this class is responsible for toggling text in folded sidebar mode. Use text utility classes to style inner content.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-item-divider</code></td>
                        <td>Navigation item with this class separates groups of related menu items - it adds thick light (dark in light sidebar) line with extra vertical spacing. Useful in long lists.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-item</code></td>
                        <td>This class is required as an immediate nav link parent in any <code>.nav</code> container. Since active link color is different from hover and initial states color, <code>.nav-item</code> has 1px vertical spacing to separate items that have same background color. Dropdown menu items have same logic.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-link</code></td>
                        <td>This class is responsible for navigation link styling and is also required as a part of nav list class structure. It's also a target for <code>.active</code> and <code>disabled</code> states. Please note - this class doesn't reset <code>&lt;button></code> styles, so make sure you use <code>&lt;a></code> instead.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-link.active</code></td>
                        <td>Combination of these classes in a single <code>&lt;a></code> element highlights nav item link and indicates the current page. By default, expanded submenu and <code>active</code> item state color is the same in each level.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-link.disabled</code></td>
                        <td>Combination of these classes in a single <code>&lt;a></code> element disables all pointer and click events and mutes out nav link text and background colors.</td>
                    </tr>

                    <tr>
                        <td><code>.nav-item-submenu</code></td>
                        <td>This class indicates nav list item with children menu levels and needs to be added to <code>.nav-item</code> container.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-item-expanded</code></td>
                        <td>Responsible for <strong>expanding</strong> submenu on page load - this class should be added to <code>.nav-item</code> container in all levels.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-item-open</code></td>
                        <td>This class also should be used in combination with <code>.nav-item</code> and/or <code>.nav-item-expanded</code> classes, since it's responsible for some styling and toggles dynamically.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-group-sub</code></td>
                        <td>Navigation submenu class - should be used with <code>.nav</code> class in <code>&lt;ul></code> element in all menu levels.</td>
                    </tr>

                    <tr>
                        <td><code>.nav-sidebar-icons-reverse</code></td>
                        <td>Add this class to <code>.nav-sidebar</code> container to change icons alignment from <code>left</code> to <code>right</code>.</td>
                    </tr>
                    <tr>
                        <td><code>.nav-sidebar-bordered</code></td>
                        <td>Add this class to <code>.nav-sidebar</code> container if you want to add horizontal borders to all navigation links on the first level.</td>
                    </tr>

                    <tr>
                        <td><code>[data-nav-type="collapsible"]</code></td>
                        <td>Default navigation behaviour - when new item is expanded, current level remains opened. Actually navigation container doesn't require this, but is used for the sake of semantic naming.</td>
                    </tr>
                    <tr>
                        <td><code>[data-nav-type="accordion"]</code></td>
                        <td>Changes default <code>collapsible</code> navigation type to <code>accordion</code> type - when new item is expanded, current level is collapsed.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /navigation classes -->


    <!-- Navigation markup -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Navigation markup</h5>
        </div>

        <div class="card-body">
            <h6>Collapsible and accordion types</h6>
            <p class="mb-3">Flexible template functionality offers 2 different kinds of navigation: collapsible and accordion. Both have custom JS code and provide extended control over the child nav items. Default type is <code>collapsible</code> navigation: open as many child levels as you want, they all will be visible all the time. Second type is <code>accordion</code> navigation: allows to display only 1 parent level, collapsing all others. Both navigation types have hidden 2nd level in mini sidebar that opens on hover/focus.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Collapsible navigation markup</p>
                    <pre class="language-markup mb-3 mb-lg-4" data-line="2">
										<code>
											&lt;!-- Collapsible navigation markup -->
											&lt;ul class="nav nav-sidebar" data-nav-type="collapsible">
												&lt;li class="nav-item-header">
													&lt;div class="text-uppercase fs-sm lh-sm opacity-50">Group title&lt;/div>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-plus-circle">&lt;/i>
														Top level link
													&lt;/a>
												&lt;/li>

												&lt;li class="nav-item nav-item-submenu">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-circles-three-plus">&lt;/i>
														&lt;span>Top level with subnav&lt;/span>
													&lt;/a>

													&lt;ul class="nav-group-sub collapse">
														&lt;li class="nav-item">
															&lt;a href="#" class="nav-link">2nd level item&lt;/a>
														&lt;/li>
														...
													&lt;/ul>
												&lt;/li>
												...
											&lt;/ul>
											&lt;!-- /collapsible navigation markup -->										
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Accordion navigation markup</p>
                    <pre class="language-markup mb-3 mb-lg-4" data-line="2">
										<code>
											&lt;!-- Accordion navigation markup -->
											&lt;ul class="nav nav-sidebar" data-nav-type="accordion">
												&lt;li class="nav-item-header">
													&lt;div class="text-uppercase fs-sm lh-sm opacity-50">Group title&lt;/div>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-plus-circle">&lt;/i>
														Top level link
													&lt;/a>
												&lt;/li>

												&lt;li class="nav-item nav-item-submenu">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-circles-three-plus">&lt;/i>
														&lt;span>Top level with subnav&lt;/span>
													&lt;/a>

													&lt;ul class="nav-group-sub collapse">
														&lt;li class="nav-item">
															&lt;a href="#" class="nav-link">2nd level item&lt;/a>
														&lt;/li>
														...
													&lt;/ul>
												&lt;/li>
												...
											&lt;/ul>
											&lt;!-- /accordion navigation markup -->										
										</code>
									</pre>
                </div>
            </div>


            <h6>Icons alignment</h6>
            <p class="mb-3">Sidebar navigation supports icons in all menu levels. Default icons alignment is left, default visual hierarchy is: icon > text > arrow, adding <code>.nav-sidebar-icons-reverse</code> class to <code>.nav-sidebar</code> container changes it to text > icon > arrow. But despite the default layout, icons are completely optional, so feel free to remove icons markup from the nav links if for some reason you don't need them.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Default left icons position</p>
                    <pre class="language-markup mb-3 mb-lg-4" data-line="2, 6, 13">
										<code>
											&lt;!-- Left icons -->
											&lt;ul class="nav nav-sidebar" data-nav-type="accordion">
												...
												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-plus-circle">&lt;/i>
														Navigation link #1
													&lt;/a>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-circles-three-plus">&lt;/i>
														Navigation link #2
													&lt;/a>
												&lt;/li>
												...
											&lt;/ul>
											&lt;!-- /left icons -->										
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Optional right icons position</p>
                    <pre class="language-markup mb-3 mb-lg-4" data-line="2, 6, 13">
										<code>
											&lt;!-- Right icons -->
											&lt;ul class="nav nav-sidebar nav-sidebar-icons-reverse" data-nav-type="accordion">
												...
												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-plus-circle">&lt;/i>
														Navigation link #1
													&lt;/a>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-circles-three-plus">&lt;/i>
														Navigation link #2
													&lt;/a>
												&lt;/li>
												...
											&lt;/ul>
											&lt;!-- /right icons -->										
										</code>
									</pre>
                </div>
            </div>


            <h6>Other options</h6>
            <p class="mb-3">Default navigation menu doesn't have any horizontal borders. But you can easily change this behaviour just by adding <code>.nav-sidebar-bordered</code> class to the main <code>.nav-sidebar</code> container. You can also use additional components - such as badges, badge pills, extra text or icons - within <code>.nav-link</code>. But for proper vertical and horizontal alignment you need to use flexbox utility classes and extra containers. See the example with badges.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Bordered navigation markup</p>
                    <pre class="language-markup mb-3 mb-lg-0" data-line="2">
										<code>
											&lt;!-- Bordered navigation -->
											&lt;ul class="nav nav-sidebar nav-sidebar-bordered" data-nav-type="accordion">
												&lt;li class="nav-item-header">
													&lt;div class="text-uppercase fs-sm lh-sm opacity-50">Group title&lt;/div>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-plus-circle">&lt;/i>
														Navigation link #1
													&lt;/a>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-circles-three-plus">&lt;/i>
														Navigation link #2
													&lt;/a>
												&lt;/li>
												...
											&lt;/ul>
											&lt;!-- /bordered navigation -->										
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Navigation with badges</p>
                    <pre class="language-markup mb-3 mb-lg-0" data-line="7, 15">
										<code>
											&lt;!-- Badges -->
											&lt;ul class="nav nav-sidebar" data-nav-type="accordion">
												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-plus-circle">&lt;/i>
														Nav link with badge
														&lt;span class="badge bg-danger ms-auto">New&lt;/span>
													&lt;/a>
												&lt;/li>

												&lt;li class="nav-item">
													&lt;a href="#" class="nav-link">
														&lt;i class="ph-circles-three-plus">&lt;/i>
														Nav link with badge pill
														&lt;span class="badge bg-primary rounded-pill ms-auto">32&lt;/span>
													&lt;/a>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /badges -->										
										</code>
									</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /navigation markup -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
