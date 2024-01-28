@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Gallery @endslot
@slot('subtitle') Media Library @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Media library -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Media library emulation</h6>
        </div>

        <table class="table media-library">
            <thead>
                <tr>
                    <th>
                        <input type="checkbox" class="form-check-input">
                    </th>
                    <th>Preview</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>File info</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/1.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/1.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Ignorant saw her drawings</a></td>
                    <td><a href="#">Themesbrand</a></td>
                    <td>Jun 10, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 215 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/2.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/2.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Case oh an that or away sigh</a></td>
                    <td><a href="#">James Alexander</a></td>
                    <td>Jun 9, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 636 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/3.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/3.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Acuteness you exquisite ourselves</a></td>
                    <td><a href="#">Jeremy Victorino</a></td>
                    <td>Jun 9, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 295 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/4.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/4.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Enquire ye without it garrets</a></td>
                    <td><a href="#">Margo Baker</a></td>
                    <td>Jun 8, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 593 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/5.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/5.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Interest received followed</a></td>
                    <td><a href="#">Monica Smith</a></td>
                    <td>Jun 8, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 993 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/6.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/6.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">His exquisite sincerity</a></td>
                    <td><a href="#">Bastian Miller</a></td>
                    <td>Jun 9, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 472 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/7.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/7.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">So we me unknown</a></td>
                    <td><a href="#">Jordana Mills</a></td>
                    <td>Jun 6, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 364 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/8.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/8.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Sufficient impossible him may</a></td>
                    <td><a href="#">Buzz Brenson</a></td>
                    <td>May 29, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 643 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/9.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/9.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Oppose exeter income simple</a></td>
                    <td><a href="#">Zachary Willson</a></td>
                    <td>Jun 2, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 643 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/10.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/10.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Scale began quiet up short</a></td>
                    <td><a href="#">William Miles</a></td>
                    <td>Jun 5, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 633 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/11.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/11.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Sportsmen shy forfeited</a></td>
                    <td><a href="#">Freddy Walden</a></td>
                    <td>Jun 7, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 543 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/12.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/12.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">View fine me gone this</a></td>
                    <td><a href="#">Dori Laperriere</a></td>
                    <td>Jun 1, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 655 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/13.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/13.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Compact greater and demands</a></td>
                    <td><a href="#">Vanessa Aurelius</a></td>
                    <td>May 28, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 237 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/14.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/14.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Park be fine easy am size</a></td>
                    <td><a href="#">Monica Smith</a></td>
                    <td>May 20, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 902 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/15.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/15.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">As society explain country</a></td>
                    <td><a href="#">Jordana Mills</a></td>
                    <td>May 20, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 983 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/16.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/16.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Sentiments nor everything off</a></td>
                    <td><a href="#">Buzz Brenson</a></td>
                    <td>May 21, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 760 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/17.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/17.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Concerns greatest margaret</a></td>
                    <td><a href="#">Jeremy Victorino</a></td>
                    <td>May 3, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 278 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/18.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/18.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Door neat week do find</a></td>
                    <td><a href="#">Themesbrand</a></td>
                    <td>May 10, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 578 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/19.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/19.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Unpacked endeavor steepest</a></td>
                    <td><a href="#">Margo Baker</a></td>
                    <td>May 18, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 893 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/20.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/20.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Painted no or affixed</a></td>
                    <td><a href="#">James Alexander</a></td>
                    <td>May 9, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 534 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/21.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/21.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Exposed neither pressed</a></td>
                    <td><a href="#">Bastian Miller</a></td>
                    <td>May 8, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 689 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/22.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/22.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Warrant present garrets</a></td>
                    <td><a href="#">Freddy Walden</a></td>
                    <td>May 20, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 410 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/23.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/23.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Now seven world think</a></td>
                    <td><a href="#">Zachary Willson</a></td>
                    <td>May 4, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 357 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .jpg</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/24.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/24.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Up unwilling eagerness</a></td>
                    <td><a href="#">William Miles</a></td>
                    <td>May 12, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 346 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{URL::asset('assets/images/demo/flat/25.png')}}" data-bs-popup="lightbox">
                            <img src="{{URL::asset('assets/images/demo/flat/25.png')}}" alt="" class="img-preview rounded">
                        </a>
                    </td>
                    <td><a href="#">Collecting if sympathize</a></td>
                    <td><a href="#">Jordana Mills</a></td>
                    <td>May 16, 2015</td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> 378 Kb</li>
                            <li><span class="fw-semibold">Format:</span> .png')}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Move to trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /media library -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/media/glightbox.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/gallery_library.js')}}"></script>
@endsection
