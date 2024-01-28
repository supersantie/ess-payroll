@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extensions @endslot
@slot('subtitle') Drag and Drop @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Dropdown menus -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Sorting menu items</h6>
        </div>

        <div class="card-body">
            <p class="mb-3">The following examples demonstrate how dropdown menu items can be sorting. This is the default use case, all you need is to specify dropdown menu <code>id</code> if single menu or <code>class</code> if multiple menus, also set the element that gets mirror elements appended using <code>mirrorContainer</code> option. All menu functionality works until drag starts - all links are clickable, all submenus are toggling. Examples below include basic use cases and components.</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3 mb-lg-0">
                        <p class="fw-semibold">Default items sorting</p>
                        <div class="dropdown-menu dropdown-menu-sortable" style="display: block; position: static; width: 100%; margin-top: 0; z-index: auto;">
                            <div class="dropdown-header">Menu header</div>
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3 mb-lg-0">
                        <p class="fw-semibold">Menu with submenus</p>
                        <div class="dropdown-menu dropdown-menu-sortable" style="display: block; position: static; width: 100%; margin-top: 0; z-index: auto;">
                            <div class="dropdown-header">Menu header</div>
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu dropdown-submenu-start">
                                <a href="#" class="dropdown-item">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu dropdown-submenu-start">
                                        <a href="#" class="dropdown-item">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3 mb-lg-0">
                        <p class="fw-semibold">Menu components</p>
                        <div class="dropdown-menu dropdown-menu-sortable" style="display: block; position: static; width: 100%; margin-top: 0; z-index: auto;">
                            <div class="dropdown-header">Menu header</div>
                            <a href="#" class="dropdown-item">Action <span class="badge bg-primary ms-auto">Added</span></a>
                            <a href="#" class="dropdown-item">Another action <span class="badge bg-danger rounded-pill ms-auto">98</span></a>
                            <a href="#" class="dropdown-item">Something else here <span class="ms-auto"><i class="ph-command me-1"></i>F</span></a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-submenu dropdown-submenu-start">
                                <a href="#" class="dropdown-item">More options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Second level link</a>
                                    <div class="dropdown-submenu dropdown-submenu-start">
                                        <a href="#" class="dropdown-item">Second level link</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                            <a href="#" class="dropdown-item">Third level link</a>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item">Second level link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dropdown menus -->


    <!-- Form components -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Draggable form components</h6>
        </div>

        <div class="card-body">
            <p class="mb-3">The following example demonstrates how form components can be draggable/sortable. Form components are placed inside 2 columns, that are connected in plugin configuration. Draggable functionality is attached to <code>&lt;div class="mb-3" /></code> input wrapper container - you can easily sort rows inside each column or drag/drop rows from one column to another. All elements inside form groups are working until drag starts. Works with all form layouts.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Default items sorting</p>
                    <div class="border rounded p-3 mb-3 mb-lg-0" id="forms-target-left">
                        <div class="mb-3">
                            <label class="form-label cursor-move">Enter your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label cursor-move">Enter your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label cursor-move">Attach screenshot:</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label cursor-move">Your message:</label>
                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Right form container</p>
                    <div class="border rounded p-3 mb-3 mb-lg-0" id="forms-target-right">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">Full name:</label>
                                    <input type="text" placeholder="Themesbrand" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">Your email:</label>
                                    <input type="text" placeholder="email@domain.com" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">Country:</label>
                                    <select class="form-select">
                                        <option value="">Select your country</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">State/Province:</label>
                                    <input type="text" placeholder="Bayern" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">ZIP code:</label>
                                    <input type="text" placeholder="1031" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">City:</label>
                                    <input type="text" placeholder="Munich" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label cursor-move">Address line:</label>
                                    <input type="text" placeholder="Ring street 12" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label cursor-move">Additional message:</label>
                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /form components -->


    <!-- Sortable media list -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Sortable media list</h6>
        </div>

        <div class="card-body">
            <p class="mb-3">The following examples demonstrate sorting feature added to simple media lists. The functionality is the same as in other examples, but here we've added custom <code>handle</code> to each media list and set container, that gets elements appended using <code>mirrorContainer</code> option to keep it inside list - by default, all draggable elements are appended to <code>body</code>. You can also move items between 2 or more columns, copy them on dragging or remove original item when drag is completed.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Left list container</p>
                    <div class="border rounded mb-3 mb-lg-0">
                        <ul class="list-group list-group-borderless media-list-container py-2" id="media-list-target-left">
                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Monica Smith</div>
                                    One preparatory festive outran blatantly indecisively interminable bid popular much and less
                                </div>

                                <div class="ms-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chats me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope-open me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Bastian Miller</div>
                                    As ouch lizard hurried less ingenuously malicious yikes belched agilely shrank more diabolically
                                </div>

                                <div class="ms-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chats me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope-open me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Jordana Mills</div>
                                    Kiwi that dear because wow barring dear temperate narrowly securely indecently this persistently
                                </div>

                                <div class="ms-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chats me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope-open me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Freddy Walden</div>
                                    Impotently much wedded within truly amidst therefore toward as as insect pre-set where foolhardily
                                </div>

                                <div class="ms-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chats me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope-open me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">William Miles</div>
                                    Strangely mounted the and as however repaid wow goodness oh falcon unproductive and some bred
                                </div>

                                <div class="ms-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chats me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope-open me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Right list container</p>
                    <div class="border rounded mb-3 mb-lg-0">
                        <ul class="list-group list-group-borderless media-list-container py-2" id="media-list-target-right">
                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">James Alexander</div>
                                    Far jauntily manta laughed pugnacious hey hey ouch globefish far yikes crud overheard far off
                                </div>

                                <div class="ms-3">
                                    <span class="badge bg-primary">Colleague</span>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Margo Baker</div>
                                    Away one gosh gracefully tenably hid amid far overlay ouch oh until oyster crud much in far far
                                </div>

                                <div class="ms-3">
                                    <span class="badge bg-danger">Partner</span>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Vanessa Aurelius</div>
                                    Bled wept across mindful constructively suggestive hello fuzzily this jocosely capybara well to
                                </div>

                                <div class="ms-3">
                                    <span class="badge bg-teal">Client</span>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Zachary Willson</div>
                                    Dragonfly oversold forgot ouch less darn firefly one while honey until cockatoo more as the rat
                                </div>

                                <div class="ms-3">
                                    <span class="badge bg-secondary">Investor</span>
                                </div>
                            </li>

                            <li class="list-group-item d-flex align-items-start">
                                <a href="#" class="d-inline-flex align-items-center me-3">
                                    <i class="ph-dots-six dragula-handle me-2"></i>
                                    <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" width="40" height="40" class="rounded-circle" alt="">
                                </a>

                                <div class="flex-fill">
                                    <div class="fw-semibold">Benjamin Loretti</div>
                                    Hello some plentiful a beneath much glanced that savage pending dashingly and hare insane dull
                                </div>

                                <div class="ms-3">
                                    <span class="badge bg-indigo">Office</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /sortable media list -->


    <!-- Draggable cards -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Sortable cards</h6>
        </div>

        <div class="card-body">
            <p class="mb-3">The following examples demonstrate how content cards can be dragged around. Just like jQuery UI Sortable examples, this sorting library does the same, but it doesn't require that much styling. In these examples the whole card is a handle, but you can also specify a custom dragging handle such as control icon on the top right corner. All links in tables are clickable and card control functionality (collapsing/expanding, reloading and closing) still works until drag starts.</p>

            <div class="bg-light border rounded p-3 pb-0">
                <div class="row">
                    <div class="col-lg-6" id="cards-target-left">
                        <div class="card">
                            <div class="card-header py-2">
                                <div class="fw-semibold my-1">Draggable card #1</div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-light">
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
                                            <td>James</td>
                                            <td>Lorry</td>
                                            <td><a href="#">@jimmylorry</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chris</td>
                                            <td>Ludacris</td>
                                            <td><a href="#">@cluda</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jacob</td>
                                            <td>Williams</td>
                                            <td><a ref="#">@jacwill</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td colspan="2">Martin Cooper</td>
                                            <td><a href="#">@marcoop</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header py-2">
                                <div class="fw-semibold my-1">Draggable card #3</div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-light">
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
                                            <td>James</td>
                                            <td>Lorry</td>
                                            <td><a href="#">@jimmylorry</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chris</td>
                                            <td>Ludacris</td>
                                            <td><a href="#">@cluda</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jacob</td>
                                            <td>Williams</td>
                                            <td><a ref="#">@jacwill</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td colspan="2">Martin Cooper</td>
                                            <td><a href="#">@marcoop</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" id="cards-target-right">
                        <div class="card">
                            <div class="card-header py-2">
                                <div class="fw-semibold my-1">Draggable card #2</div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-light">
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
                                            <td>James</td>
                                            <td>Lorry</td>
                                            <td><a href="#">@jimmylorry</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chris</td>
                                            <td>Ludacris</td>
                                            <td><a href="#">@cluda</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jacob</td>
                                            <td>Williams</td>
                                            <td><a ref="#">@jacwill</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td colspan="2">Martin Cooper</td>
                                            <td><a href="#">@marcoop</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header py-2">
                                <div class="fw-semibold my-1">Draggable card #4</div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-light">
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
                                            <td>James</td>
                                            <td>Lorry</td>
                                            <td><a href="#">@jimmylorry</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chris</td>
                                            <td>Ludacris</td>
                                            <td><a href="#">@cluda</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jacob</td>
                                            <td>Williams</td>
                                            <td><a ref="#">@jacwill</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td colspan="2">Martin Cooper</td>
                                            <td><a href="#">@marcoop</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /draggable cards -->


    <!-- Collapsible cards -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Sortable collapsible cards</h6>
        </div>

        <div class="card-body">
            <p class="mb-3">The following examples demonstrate sorting feature added to the set of cards with accordion and collapsible functionality. Here handles are not specified and the whole card is a draggable handle. Both sets are separated - you can sort cards in a single column only without dragging to another column. The functionality is pretty much the same, the only difference is we need to use the same <code>id</code> to define <code>data-parent</code> and sortable container for accordion.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Accordion example</p>
                    <div class="card-group-vertical bg-light border rounded p-3" id="accordion-target">
                        <div class="card">
                            <div class="card-header py-2">
                                <a class="d-block fw-semibold text-body my-1" data-bs-toggle="collapse" data-bs-parent="#accordion-target" href="#accordion-control-group1">
                                    <i class="ph-caret-down collapsible-indicator me-2"></i>
                                    Accordion Item #1
                                </a>
                            </div>

                            <div id="accordion-control-group1" class="card-collapse collapse show">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header py-2">
                                <a class="d-block fw-semibold text-body collapsed my-1" data-bs-toggle="collapse" data-bs-parent="#accordion-target" href="#accordion-control-group2">
                                    <i class="ph-caret-down collapsible-indicator me-2"></i>
                                    Accordion Item #2
                                </a>
                            </div>

                            <div id="accordion-control-group2" class="card-collapse collapse">
                                <div class="card-body">
                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header py-2">
                                <a class="d-block fw-semibold text-body collapsed my-1" data-bs-toggle="collapse" data-bs-parent="#accordion-target" href="#accordion-control-group3">
                                    <i class="ph-caret-down collapsible-indicator me-2"></i>
                                    Accordion Item #3
                                </a>
                            </div>

                            <div id="accordion-control-group3" class="card-collapse collapse">
                                <div class="card-body">
                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Collapsible example</p>
                    <div class="card-group-vertical bg-light border rounded p-3" id="collapsible-target">
                        <div class="card">
                            <div class="card-header py-2">
                                <a class="d-block fw-semibold text-body my-1" data-bs-toggle="collapse" href="#collapsible-control-group1">
                                    <i class="ph-caret-down collapsible-indicator me-2"></i>
                                    Collapsible Item #1
                                </a>
                            </div>

                            <div id="collapsible-control-group1" class="card-collapse collapse show">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header py-2">
                                <a class="d-block fw-semibold text-body collapsed my-1" data-bs-toggle="collapse" href="#collapsible-control-group2">
                                    <i class="ph-caret-down collapsible-indicator me-2"></i>
                                    Collapsible Item #2
                                </a>
                            </div>

                            <div id="collapsible-control-group2" class="card-collapse collapse">
                                <div class="card-body">
                                    Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header py-2">
                                <a class="d-block fw-semibold text-body collapsed my-1" data-bs-toggle="collapse" href="#collapsible-control-group3">
                                    <i class="ph-caret-down collapsible-indicator me-2"></i>
                                    Collapsible Item #3
                                </a>
                            </div>

                            <div id="collapsible-control-group3" class="card-collapse collapse">
                                <div class="card-body">
                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /collapsible cards -->


    <!-- Tabs and pills -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Sortable tabs and pills</h6>
        </div>

        <div class="card-body">
            <p class="mb-3">The following examples demonstrate sorting feature added to the tab and pill navigation types. Dragula functionality can be added to all available tabs and pills layouts and supports all available options. In these examples each nav type has a single container where dragging is allowed, because this is related to nav item position, tab content stays in its original container. In most cases we need to set the element that gets elements appended using <code>mirrorContainer</code> option. In our case it's an <code>id</code> added to the tabs/pills nav.</p>

            <!-- Tabs -->
            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Basic tabs</p>
                    <div class="border rounded p-3 mb-3">
                        <ul class="nav nav-tabs nav-tabs-underline mb-3" id="tabs-target-left">
                            <li class="nav-item">
                                <a href="#highlight-tab1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-list me-2"></i>
                                    Active tab
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#highlighted-tab2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-at me-2"></i>
                                    Inactive tab
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    Dropdown
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#highlighted-tab3" class="dropdown-item" data-bs-toggle="tab">Dropdown tab</a>
                                    <a href="#highlighted-tab4" class="dropdown-item" data-bs-toggle="tab">Another tab</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="highlighted-tab1">
                                Highlight top border of the active tab by adding <code>.nav-tabs-underline</code> class.
                            </div>

                            <div class="tab-pane" id="highlighted-tab2">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                            </div>

                            <div class="tab-pane" id="highlighted-tab3">
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                            </div>

                            <div class="tab-pane" id="highlighted-tab4">
                                Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Justified tabs</p>
                    <div class="border rounded p-3 mb-3">
                        <ul class="nav nav-tabs nav-tabs-underline nav-justified mb-3" id="tabs-target-right">
                            <li class="nav-item">
                                <a href="#highlighted-justified-tab1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-list me-2"></i>
                                    Active tab
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#highlighted-justified-tab2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-at me-2"></i>
                                    Inactive tab
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    Dropdown
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#highlighted-justified-tab3" class="dropdown-item" data-bs-toggle="tab">Dropdown tab</a>
                                    <a href="#highlighted-justified-tab4" class="dropdown-item" data-bs-toggle="tab">Another tab</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="highlighted-justified-tab1">
                                To use in tabs with equal widths add <code>.nav-justified .nav-tabs-underline</code> classes.
                            </div>

                            <div class="tab-pane" id="highlighted-justified-tab2">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                            </div>

                            <div class="tab-pane" id="highlighted-justified-tab3">
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                            </div>

                            <div class="tab-pane" id="highlighted-justified-tab4">
                                Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /tabs -->


            <!-- Pills -->
            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Basic pills</p>
                    <div class="border rounded p-3 mb-3">
                        <ul class="nav nav-pills mb-3" id="pills-target-left">
                            <li class="nav-item">
                                <a href="#basic-pill1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-list me-2"></i>
                                    Active pill
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#basic-pill2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-at me-2"></i>
                                    Inactive pill
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    Dropdown
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#basic-pill3" class="dropdown-item" data-bs-toggle="tab">Dropdown pill</a>
                                    <a href="#basic-pill4" class="dropdown-item" data-bs-toggle="tab">Another pill</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="basic-pill1">
                                Basic pills example using <code>.nav-pills</code> class. Also requires base <code>.nav</code> class.
                            </div>

                            <div class="tab-pane fade" id="basic-pill2">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                            </div>

                            <div class="tab-pane fade" id="basic-pill3">
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                            </div>

                            <div class="tab-pane fade" id="basic-pill4">
                                Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Justified pills</p>
                    <div class="border rounded p-3 mb-3">
                        <ul class="nav nav-pills nav-justified mb-3" id="pills-target-right">
                            <li class="nav-item">
                                <a href="#justified-pill1" class="nav-link active" data-bs-toggle="tab">
                                    <i class="ph-list me-2"></i>
                                    Active pill
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#justified-pill2" class="nav-link" data-bs-toggle="tab">
                                    <i class="ph-at me-2"></i>
                                    Inactive pill
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    Dropdown
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#justified-pill3" class="dropdown-item" data-bs-toggle="tab">Dropdown pill</a>
                                    <a href="#justified-pill4" class="dropdown-item" data-bs-toggle="tab">Another pill</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="justified-pill1">
                                Easily make pills equal widths of their parent with <code>.nav-justified</code> class.
                            </div>

                            <div class="tab-pane fade" id="justified-pill2">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                            </div>

                            <div class="tab-pane fade" id="justified-pill3">
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                            </div>

                            <div class="tab-pane fade" id="justified-pill4">
                                Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /pills -->

        </div>
    </div>
    <!-- /tabs and pills -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/ui/dragula.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/uploaders/bs_custom_file_input.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extension_dnd.js')}}"></script>
@endsection
