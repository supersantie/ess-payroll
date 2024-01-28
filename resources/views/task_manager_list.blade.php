@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Task Manager @endslot
@slot('subtitle') List @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Task manager table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Task manager</h5>
        </div>

        <table class="table tasks-list">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Period</th>
                    <th>Task Description</th>
                    <th>Priority</th>
                    <th>Latest update</th>
                    <th>Status</th>
                    <th>Assigned users</th>
                    <th class="text-center text-muted" style="width: 30px;"><i class="ph-check"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#25</td>
                    <td>Today</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">New blog layout</a></div>
                        <div class="text-muted">Grumbled ripely eternal sniffed the when hello less much..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            22 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved" selected="selected">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#24</td>
                    <td>Today</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Create UI design model</a></div>
                        <div class="text-muted">One morning, when Gregor Samsa woke from troubled..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            22 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#23</td>
                    <td>Today</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">New icons set for an iOS app</a></div>
                        <div class="text-muted">A collection of textile samples lay spread out on the table..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            22 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold" selected="selected">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#22</td>
                    <td>Today</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Create ad campaign banners set</a></div>
                        <div class="text-muted">That he had recently cut out of an illustrated magazine..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            22 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved" selected="selected">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#21</td>
                    <td>Yesterday</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Edit the draft for the icons</a></div>
                        <div class="text-muted">You've got to get enough sleep. Other travelling salesmen..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-warning d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-warning rounded-pill p-1 me-2"></div>
                                High
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            21 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid" selected="selected">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#20</td>
                    <td>Yesterday</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Fix validation issues and commit</a></div>
                        <div class="text-muted">But who knows, maybe that would be the best thing for me..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            22 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved" selected="selected">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#19</td>
                    <td>Yesterday</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Support tickets list doesn't support commas</a></div>
                        <div class="text-muted">I'd have gone up to the boss and told him just what i think..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            21 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed" selected="selected">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face23.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#18</td>
                    <td>Yesterday</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Help Web devs with HTML integration</a></div>
                        <div class="text-muted">Samsa was a travelling salesman - and above it there hung..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-success d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-success rounded-pill p-1 me-2"></div>
                                Low
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            21 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved" selected="selected">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#17</td>
                    <td>2 days ago</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Another icon set</a></div>
                        <div class="text-muted">A wonderful serenity has taken possession of my entire soul..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-success d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-success rounded-pill p-1 me-2"></div>
                                Low
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            20 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid" selected="selected">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#16</td>
                    <td>2 days ago</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">iOS application design mockups</a></div>
                        <div class="text-muted">Sweet mornings of spring which I enjoy with my whole heart..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            21 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#15</td>
                    <td>2 days ago</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">UI/UX design review</a></div>
                        <div class="text-muted">I am alone, and feel the charm of existence in this spot..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            20 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold" selected="selected">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face19.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#14</td>
                    <td>2 days ago</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Marketing campaign review</a></div>
                        <div class="text-muted">Which was created for the bliss of souls like mine..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-success d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-success rounded-pill p-1 me-2"></div>
                                Low
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            20 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#13</td>
                    <td>2 days ago</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Fix website issues on mobile</a></div>
                        <div class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-warning d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-warning rounded-pill p-1 me-2"></div>
                                High
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            21 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid" selected="selected">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face17.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#12</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Add updated responsive styles</a></div>
                        <div class="text-muted">I should be incapable of drawing a single stroke at the present..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            17 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#11</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Merge latest changes</a></div>
                        <div class="text-muted">When, while the lovely valley teems with vapour around me..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            16 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix" selected="selected">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face21.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face22.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#10</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Create landing page for a new app</a></div>
                        <div class="text-muted">A few stray gleams steal into the inner sanctuary, I throw..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-warning d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-warning rounded-pill p-1 me-2"></div>
                                High
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            17 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#9</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Update JS code in app.js file</a></div>
                        <div class="text-muted">When I hear the buzz of the little world among the stalks..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-warning d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-warning rounded-pill p-1 me-2"></div>
                                High
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            15 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold" selected="selected">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#8</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Combine .js files in /app/js/</a></div>
                        <div class="text-muted">Insects and flies, then I feel the presence of the Almighty..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            14 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved" selected="selected">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#7</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Create application Photoshop draft</a></div>
                        <div class="text-muted">Who formed us in his own image, and the breath of that universal..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            20 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid" selected="selected">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#6</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Cartoon characters for app ads</a></div>
                        <div class="text-muted">My friend, when darkness overspreads my eyes, and heaven..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            17 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold" selected="selected">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#5</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Google AdWords campain graphics</a></div>
                        <div class="text-muted">Seem to dwell in my soul and absorb its power, like the form..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-success d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-success rounded-pill p-1 me-2"></div>
                                Low
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            18 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid" selected="selected">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face23.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#4</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Monthly statistics report</a></div>
                        <div class="text-muted">I sink under the weight of the splendour of these visions..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-danger d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-danger rounded-pill p-1 me-2"></div>
                                Blocker
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            19 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#3</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Create invoice template</a></div>
                        <div class="text-muted">Far far away, behind the word mountains, far from the..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-warning d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-warning rounded-pill p-1 me-2"></div>
                                High
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            20 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved" selected="selected">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#2</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Add images to the product gallery</a></div>
                        <div class="text-muted">Countries Vokalia and Consonantia, there live the blind..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-primary d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-primary rounded-pill p-1 me-2"></div>
                                Normal
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            21 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed" selected="selected">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>#1</td>
                    <td>Last week</td>
                    <td>
                        <div class="fw-semibold"><a href="task_manager_detailed">Update User profile page</a></div>
                        <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="link-success d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="bg-success rounded-pill p-1 me-2"></div>
                                Low
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <span class="bg-danger rounded-pill p-1 me-2"></span>
                                    Blocker
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-warning rounded-pill p-1 me-2"></span>
                                    High priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="bg-primary rounded-pill p-1 me-2"></span>
                                    Normal priority
                                </a>
                                <a href="#" class="dropdown-item active">
                                    <span class="bg-success rounded-pill p-1 me-2"></span>
                                    Low priority
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center">
                            <i class="ph-calendar me-2"></i>
                            19 January, 2022
                        </div>
                    </td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="open">Open</option>
                            <option value="hold">On hold</option>
                            <option value="resolved">Resolved</option>
                            <option value="dublicate">Dublicate</option>
                            <option value="invalid">Invalid</option>
                            <option value="wontfix">Wontfix</option>
                            <option value="closed">Closed</option>
                        </select>
                    </td>
                    <td>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                        <a href="#"><img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></a>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="ph-calendar-check me-2"></i> Check in</a>
                                <a href="#" class="dropdown-item"><i class="ph-paperclip me-2"></i> Attach screenshot</a>
                                <a href="#" class="dropdown-item"><i class="ph-user-switch me-2"></i> Reassign</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ph-pencil me-2"></i> Edit task</a>
                                <a href="#" class="dropdown-item"><i class="ph-x me-2"></i> Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /task manager table -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/extensions/natural_sort.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/task_manager_list.js')}}"></script>
@endsection
