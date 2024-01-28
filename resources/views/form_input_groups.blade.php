@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Input Groups @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Input group addons -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input group addons</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input, select or file input. Use <code>.input-group</code> with an <code>.input-group-text</code> to prepend or append elements to a single or multiple <code>.form-control</code> and <code>.form-select</code> elements. Place one add-on or button on either side of an input. You may also place one on both sides of an input. While multiple <code>&lt;input></code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input></code>.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Text addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Left addon">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple left addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="text" class="form-control" placeholder="Multiple left addons">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right addon">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple right addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Multiple right addons">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left and right text addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" placeholder="Left and right addons">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Icon addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <button class="btn btn-light" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">No addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Centered addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <span class="input-group-text">
                                <i class="ph-arrows-left-right"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Icon addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left icon addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-user-circle"></i></span>
                            <input type="text" class="form-control" placeholder="Left icon">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right icon addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right icon">
                            <span class="input-group-text"><i class="ph-user-circle"></i></span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left and right icon addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-at"></i></span>
                            <input type="text" class="form-control" placeholder="Left and right icons">
                            <span class="input-group-text"><i class="ph-question"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Spinner addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left spinner addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <div class="spinner-border spinner-border-sm">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                            <input type="text" class="form-control" placeholder="Left spinner">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right spinner addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right spinner">
                            <span class="input-group-text">
                                <div class="spinner-border spinner-border-sm">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left and right spinner addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <div class="spinner-border spinner-border-sm">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                            <input type="text" class="form-control" placeholder="Left and right spinners">
                            <span class="input-group-text">
                                <div class="spinner-border spinner-border-sm">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Form addons</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default checkbox</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <input type="checkbox" checked>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Custom checkbox</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <input type="checkbox" class="form-check-input mt-0" checked>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default radio</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <input type="radio" name="addon-radio">
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Custom radio</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <input type="radio" class="form-check-input mt-0" name="addon-radio-custom" checked>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Switch</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text form-switch">
                                <input type="checkbox" class="form-check-input m-0" checked>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Color options</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Solid color addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="ph-user-circle"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input color addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text bg-input">
                                <i class="ph-user-circle"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text color addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text bg-input text-primary">
                                <i class="ph-user-circle"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Outline addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-primary text-primary">
                                <i class="ph-user-circle"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ms-0" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Light color addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text bg-primary-100 border-primary text-primary">
                                <i class="ph-user-circle"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ms-0" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Validation states</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Valid state</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control is-valid" placeholder="Left addon">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Invalid state</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control is-invalid" placeholder="Left addon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /input group addons -->


    <!-- Input group buttons -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input group buttons</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Optional buttons as addons. Buttons in input groups are a bit different and don't require one extra level of nesting. Instead of wrapping the buttons in <code>.input-group-text</code>, you need to add button markup as-is before or after form inputs. Input group buttons support all available button options except sizing - all buttons height will be adjusted automatically according to the input group size.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Button addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="Left button">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right button">
                            <button class="btn btn-light" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left and right buttons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light btn-icon" type="button">
                                <i class="ph-user-circle"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Left and right buttons">
                            <button class="btn btn-light" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Button dropdown addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button dropdown</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                            <input type="text" class="form-control" placeholder="Left dropdown">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button dropdown</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right dropdown">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left and right button dropdowns</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                            <input type="text" class="form-control" placeholder="Left and right dropdowns">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Segmented button addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                            <input type="text" class="form-control" placeholder="Left buttons">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right buttons">
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left and right buttons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light">Button</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>

                            <input type="text" class="form-control" placeholder="Left and right buttons">

                            <button type="button" class="btn btn-light btn-icon"><i class="ph-gear"></i></button>
                            <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Color options</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Solid button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-success" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text color button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-link text-success border" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Outline button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-outline-success" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Light button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-success-100 border-success text-success" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /input group buttons -->


    <!-- Input group with select -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input group with selects</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">You can also use selects instead of regular inputs and also mix them in different order. Selects in input group don't require any additional wrappers and/or specific class names, it works out of the box and logic is similar to input fields. Just add <code>&lt;select></code> element markup with <code>.form-select</code> class inside <code>.input-group</code> or mix it with other elements such as buttons, file/text inputs or text addons.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Text addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple left addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <span class="input-group-text">@</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple right addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Button addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light" type="button">Button</button>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple left buttons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <button class="btn btn-light" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple right buttons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Multiple selects</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light" type="button">Button</button>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <button class="btn btn-light" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">No addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Centered addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <span class="input-group-text">
                                <i class="ph-arrows-left-right"></i>
                            </span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Mixing types</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With left text input</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <button class="btn btn-light" type="button">
                                <i class="ph-gear"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left select auto width</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <button class="btn btn-light" type="button">
                                <i class="ph-gear"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With right text input</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Right select auto width</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /input group with select -->


    <!-- Input group with file input -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input group with file input</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">You can also use file inputs instead of regular inputs and also mix them in different order. File inputs in input group don't require any additional wrappers and/or specific class names, it works out of the box and logic is similar to input fields. Just add a regular file input type markup with <code>.form-control</code> class inside <code>.input-group</code> or mix it with other elements such as buttons, selects, text inputs or text addons.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Text addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">.pdf, .png</span>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple left addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">.pdf</span>
                            <span class="input-group-text">.png</span>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right text addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="file" class="form-control">
                            <span class="input-group-text">.pdf, .png</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple right addons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="file" class="form-control">
                            <span class="input-group-text">.pdf</span>
                            <span class="input-group-text">.png</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Button addon</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Left button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button class="btn btn-light" type="button">Button</button>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple left buttons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Right button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="file" class="form-control">
                            <button class="btn btn-light" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple right buttons</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="file" class="form-control">
                            <button type="button" class="btn btn-light">Action</button>
                            <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Mixing types</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With left text input</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                            <input type="file" class="form-control">
                            <button class="btn btn-light" type="button">
                                <i class="ph-gear"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With left select</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                            <input type="file" class="form-control">
                            <button class="btn btn-light" type="button">
                                <i class="ph-gear"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With right text input</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control">
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">With right select</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Validation states</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Valid state</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control is-valid">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">Invalid state</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control is-invalid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /input group with file input -->


    <!-- Input group options -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Sizing options</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Input group supports 3 sizing variations: default, small and large. Default size doesn't require any additional sizing class name, small size requires <code>.input-group-sm</code> class and large size requires <code>.input-group-lg</code> class added to default <code>.input-group</code> container. All other elements within input group are adjusted automatically.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Input fields</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input - large</label>
                    <div class="col-lg-9">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="ph-at"></i>
                            </span>
                            <input type="text" class="form-control" placeholder=".input-group-lg">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input - default</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-at"></i>
                            </span>
                            <input type="text" class="form-control" placeholder=".input-group">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text input - small</label>
                    <div class="col-lg-9">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">
                                <i class="ph-at"></i>
                            </span>
                            <input type="text" class="form-control" placeholder=".input-group-sm">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Selects</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select - large</label>
                    <div class="col-lg-9">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="ph-user-circle"></i>
                            </span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select - default</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-user-circle"></i>
                            </span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Select - small</label>
                    <div class="col-lg-9">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">
                                <i class="ph-user-circle"></i>
                            </span>
                            <select class="form-select">
                                <option value="1" selected>Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">File inputs</div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">File input - large</label>
                    <div class="col-lg-9">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control form-control-lg">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">File input - default</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-form-label col-lg-3">File input - small</label>
                    <div class="col-lg-9">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">
                                <i class="ph-file-arrow-up"></i>
                            </span>
                            <input type="file" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /input group options -->

</div>
<!-- /content area -->

@endsection
