@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Inputs @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Input fields -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input fields</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling set by <code>.form-control</code> class. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>div</code> container and add <code>.mb-3</code> for optimum spacing. Labels in horizontal form require <code>.col-form-label</code> class for proper spacing.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <!-- Default input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default text input</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <!-- /default input -->


                <!-- Password -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Password</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control">
                    </div>
                </div>
                <!-- /password -->


                <!-- Input with placeholder -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input with placeholder</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Enter your username...">
                    </div>
                </div>
                <!-- /input with placeholder -->


                <!-- Predefined value -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Predefined value</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" value="https://">
                    </div>
                </div>
                <!-- /predefined value -->


                <!-- Disabled autocomplete -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled autocomplete</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
                    </div>
                </div>
                <!-- /disabled autocomplete -->


                <!-- Maximum value -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Maximum value</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
                    </div>
                </div>
                <!-- /maximum value -->


                <!-- Focus on label click -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3 cursor-pointer" for="clickable_label">Focus on label click</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="clickable_label" placeholder="Field focus on label click">
                    </div>
                </div>
                <!-- /focus on label click -->


                <!-- Static text -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Static text</label>
                    <div class="col-lg-9">
                        <div class="form-control-plaintext">This is a static text</div>
                    </div>
                </div>
                <!-- /static text -->


                <!-- Static input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Static input</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control-plaintext" readonly value="This is a static readonly input">
                    </div>
                </div>
                <!-- /static input -->


                <!-- Textarea -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Textarea</label>
                    <div class="col-lg-9">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                    </div>
                </div>
                <!-- /textarea -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Input sizing</div>

                <!-- Sizing -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Inputs</label>
                    <div class="col-lg-9">
                        <div class="mb-3">
                            <input class="form-control form-control-lg" type="text" placeholder="Large input height">
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Default input height">
                        </div>

                        <div>
                            <input class="form-control form-control-sm" type="text" placeholder="Small input height">
                        </div>
                    </div>
                </div>
                <!-- /sizing -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Input and label sizing</div>

                <!-- Large size -->
                <div class="row mb-3">
                    <label class="col-form-label col-form-label-lg col-lg-3">Large size</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control form-control-lg" placeholder=".col-form-label-lg .form-control-lg">
                    </div>
                </div>
                <!-- /large size -->


                <!-- Default size -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default size</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder=".col-form-label .form-control">
                    </div>
                </div>
                <!-- /default size -->


                <!-- Small size -->
                <div class="row mb-3">
                    <label class="col-form-label col-form-label-sm col-lg-3">Small size</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control form-control-sm" placeholder=".col-form-label-sm .form-control-sm">
                    </div>
                </div>
                <!-- /small size -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">States</div>

                <!-- Readonly input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Read only field</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" readonly value="Enter your username">
                    </div>
                </div>
                <!-- /readonly input -->


                <!-- Disabled input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled field</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" disabled value="Enter your username">
                    </div>
                </div>
                <!-- /disabled input -->


                <!-- Readonly textarea -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Read only textarea</label>
                    <div class="col-lg-9">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your text" readonly></textarea>
                    </div>
                </div>
                <!-- /readonly textarea -->


                <!-- Disabled textarea -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Disabled textarea</label>
                    <div class="col-lg-9">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your text" disabled></textarea>
                    </div>
                </div>
                <!-- /disabled textarea -->

            </div>
        </div>
    </div>
    <!-- /input fields -->


    <!-- Selects -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Selects</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Demo of single/multiple selects and datalist combo box. Single and multiple selects require <code>.form-select</code> class for consistent cross browser styling. Input with corresponding <code>datalist</code> element requires regular <code>.form-control</code> class, since it's a text input that acts as combo select and allows you to type, select and type & select. More info about datalist can be found <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist" target="_blank">here</a>.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <!-- Single select -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single select</label>
                    <div class="col-lg-9">
                        <select class="form-select">
                            <option value="opt1">Styled select box</option>
                            <option value="opt2">Option 2</option>
                            <option value="opt3">Option 3</option>
                            <option value="opt4">Option 4</option>
                            <option value="opt5">Option 5</option>
                            <option value="opt6">Option 6</option>
                            <option value="opt7">Option 7</option>
                            <option value="opt8">Option 8</option>
                        </select>
                    </div>
                </div>
                <!-- /single select -->


                <!-- Data list -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Data list combo</label>
                    <div class="col-lg-9">
                        <input list="datalist_example" class="form-control" placeholder="Select option">

                        <datalist id="datalist_example">
                            <option value="Option 1">
                            <option value="Option 2">
                            <option value="Option 3">
                            <option value="Option 4">
                            <option value="Option 5">
                            <option value="Option 6">
                            <option value="Option 7">
                            <option value="Option 8">
                        </datalist>
                    </div>
                </div>
                <!-- /data list -->


                <!-- Multiple select -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple select</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" class="form-select">
                            <option selected>Amsterdam</option>
                            <option selected>Atlanta</option>
                            <option>Baltimore</option>
                            <option>Boston</option>
                            <option>Buenos Aires</option>
                            <option>Calgary</option>
                            <option selected>Chicago</option>
                            <option>Denver</option>
                            <option>Dubai</option>
                            <option>Frankfurt</option>
                            <option>Hong Kong</option>
                            <option>Honolulu</option>
                            <option>Houston</option>
                            <option>Kuala Lumpur</option>
                            <option>London</option>
                            <option>Los Angeles</option>
                            <option>Melbourne</option>
                            <option>Mexico City</option>
                            <option>Miami</option>
                            <option>Minneapolis</option>
                        </select>
                    </div>
                </div>
                <!-- /multiple select -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Sizing</div>

                <!-- Sizing -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Selects</label>
                    <div class="col-lg-9">
                        <div class="mb-3">
                            <select class="form-select form-select-lg">
                                <option value="opt1">Large select height</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <select class="form-select">
                                <option value="opt1">Default select height</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </div>

                        <div>
                            <select class="form-select form-select-sm">
                                <option value="opt1">Small select height</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /sizing -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">States</div>

                <!-- Disabled single select -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled single select</label>
                    <div class="col-lg-9">
                        <select class="form-select" disabled>
                            <option value="opt1">Disabled select box</option>
                            <option value="opt2">Option 2</option>
                            <option value="opt3">Option 3</option>
                            <option value="opt4">Option 4</option>
                            <option value="opt5">Option 5</option>
                            <option value="opt6">Option 6</option>
                            <option value="opt7">Option 7</option>
                            <option value="opt8">Option 8</option>
                        </select>
                    </div>
                </div>
                <!-- /disabled single select -->


                <!-- Disabled data list -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Disabled data list</label>
                    <div class="col-lg-9">
                        <input list="datalist_disabled_example" class="form-control" disabled placeholder="Select option">

                        <datalist id="datalist_disabled_example">
                            <option value="Option 1">
                            <option value="Option 2">
                            <option value="Option 3">
                            <option value="Option 4">
                            <option value="Option 5">
                            <option value="Option 6">
                            <option value="Option 7">
                            <option value="Option 8">
                        </datalist>
                    </div>
                </div>
                <!-- /disabled data list -->


                <!-- Disabled multiple select -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Disabled multiple select</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" class="form-select" disabled>
                            <option selected>Amsterdam</option>
                            <option selected>Atlanta</option>
                            <option>Baltimore</option>
                            <option>Boston</option>
                            <option>Buenos Aires</option>
                            <option>Calgary</option>
                            <option selected>Chicago</option>
                            <option>Denver</option>
                            <option>Dubai</option>
                            <option>Frankfurt</option>
                            <option>Hong Kong</option>
                            <option>Honolulu</option>
                            <option>Houston</option>
                            <option>Kuala Lumpur</option>
                            <option>London</option>
                            <option>Los Angeles</option>
                            <option>Melbourne</option>
                            <option>Mexico City</option>
                            <option>Miami</option>
                            <option>Minneapolis</option>
                        </select>
                    </div>
                </div>
                <!-- /disabled multiple select -->

            </div>
        </div>
    </div>
    <!-- /selects -->


    <!-- File inputs -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">File input</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Selects don't have <code>readonly</code> state by definition, the only difference in style is <code>disabled</code> state. All disabled styles in selects are sharing same look and feel with other form elements, such as input fields and file inputs.</div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

                <!-- Single file input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single file input</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control">
                        <div class="form-text">Accepts all file types</div>
                    </div>
                </div>
                <!-- /single file input -->


                <!-- Single file input with filter -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Single input with filter</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" accept="image/*">
                        <div class="form-text">Accepts only images</div>
                    </div>
                </div>
                <!-- /single file input with filter -->


                <!-- Multiple file input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple files input</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" multiple>
                        <div class="form-text">Accepts all file types</div>
                    </div>
                </div>
                <!-- /multiple file input -->


                <!-- Multiple file input with filter -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Multiple input with filter</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" multiple accept="image/*">
                        <div class="form-text">Accepts only images</div>
                    </div>
                </div>
                <!-- /multiple file input with filter -->

            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Sizing</div>

                <!-- Large file input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Large size</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control form-control-lg">
                    </div>
                </div>
                <!-- /large file input -->


                <!-- Default file input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Default size</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control">
                    </div>
                </div>
                <!-- /default file input -->


                <!-- Small file input -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Small size</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control form-control-sm">
                    </div>
                </div>
                <!-- /small file input -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">States</div>

                <!-- Disabled file input -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Disabled state</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" disabled>
                    </div>
                </div>
                <!-- /disabled file input -->

            </div>
        </div>
    </div>
    <!-- /file inputs -->


    <!-- Form helpers -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Form helpers</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Block-level or inline-level form text helpers. Form text below inputs can be styled with <code>.form-text</code> or <code>.badge</code> classes. If a block-level element will be used, a top margin is added for easy spacing from the inputs above. Inline text can use any typical inline HTML element (be it a <code>&lt;span></code>, <code>&lt;small></code>, or something else) with nothing more than the same class.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Block helpers</div>

                <!-- Text form helpers -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Text form helpers</label>
                    <div class="col-lg-9">
                        <div class="row gy-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <div class="form-text">Left aligned helper</div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <div class="form-text text-center">Centered helper</div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <div class="form-text text-end">Right aligned helper</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /text form helpers -->


                <!-- Framed form helpers -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Framed form helpers</label>
                    <div class="col-lg-9">
                        <div class="row gy-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control rounded-bottom-0" placeholder="Input placeholder">
                                <div class="form-text bg-light border border-top-0 rounded-bottom px-2 py-1 mt-0">Left aligned helper</div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control rounded-bottom-0" placeholder="Input placeholder">
                                <div class="form-text bg-light border border-top-0 rounded-bottom text-center px-2 py-1 mt-0">Centered helper</div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control rounded-bottom-0" placeholder="Input placeholder">
                                <div class="form-text bg-light border border-top-0 rounded-bottom text-end px-2 py-1 mt-0">Right aligned helper</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /framed form helpers -->


                <!-- Attached badge form helpers -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Attached full width badge helpers</label>
                    <div class="col-lg-9">
                        <div class="row gy-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control border-bottom-0 rounded-bottom-0" placeholder="Input placeholder">
                                <div class="badge bg-primary d-block text-start rounded-top-0">Left aligned badge</div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control border-bottom-0 rounded-bottom-0" placeholder="Input placeholder">
                                <div class="badge bg-danger d-block rounded-top-0">Centered badge</div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control border-bottom-0 rounded-bottom-0" placeholder="Input placeholder">
                                <div class="badge bg-info d-block text-end rounded-top-0">Right aligned badge</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /attached badge form helpers -->


                <!-- Full width badge helpers -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Full width badge helpers</label>
                    <div class="col-lg-9">
                        <div class="row gy-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <span class="badge d-block bg-primary text-start mt-1">Left aligned badge</span>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <span class="badge d-block bg-danger mt-1">Centered badge</span>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <span class="badge d-block bg-info text-end mt-1">Right aligned badge</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /full width badge helpers -->


                <!-- Block badge helpers -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Block badge helpers</label>
                    <div class="col-lg-9">
                        <div class="row gy-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <div class="mt-1">
                                    <span class="badge bg-primary">Left aligned badge</span>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <div class="text-center mt-1">
                                    <span class="badge bg-danger">Centered badge</span>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="Input placeholder">
                                <div class="text-end mt-1">
                                    <span class="badge bg-info">Right aligned badge</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /block badge helpers -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Inline helpers</div>

                <!-- Inlint text helper -->
                <div class="row align-items-center mb-3">
                    <label class="col-form-label col-lg-3">Inline text helper</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Input placeholder">
                    </div>
                    <div class="col-lg-4">
                        <div class="form-text">Inline text helper</div>
                    </div>
                </div>
                <!-- /inline text helper -->


                <!-- Inline badge helper -->
                <div class="row align-items-center">
                    <label class="col-form-label col-lg-3">Inline badge helper</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Input placeholder">
                    </div>
                    <div class="col-lg-4">
                        <span class="badge bg-primary mt-1 mt-lg-0">Inline badge helper</span>
                    </div>
                </div>
                <!-- /inline badge helper -->

            </div>
        </div>
    </div>
    <!-- /form helpers -->


    <!-- Input icons -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Input icons</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Form icon helpers. Can be user with any icon format - icon font, image, HTML symbol or SVG. Icon helpers are not supported in selects, textareas and file inputs due to specifics of custom styling. Images and SVG's require manual sizing and icon font (default) automatically scales up or down depending on input size. Spinners are also supported in various sizes.</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Icons</div>

                <!-- Inputs with icon -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Input with icons</label>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-control-feedback form-control-feedback-start mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Left icon, input large">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-lg">
                                        <i class="ph-at ph-lg"></i>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-start mb-3">
                                    <input type="text" class="form-control" placeholder="Left icon, input default">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-at"></i>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-start mb-3 mb-lg-0">
                                    <input type="text" class="form-control form-control-sm" placeholder="Left icon, input small">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-sm">
                                        <i class="ph-at ph-sm"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-control-feedback form-control-feedback-end mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Right icon, input large">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-lg">
                                        <i class="ph-at ph-lg"></i>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-end mb-3">
                                    <input type="text" class="form-control" placeholder="Right icon, input default">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-at"></i>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-end mb-3 mb-lg-0">
                                    <input type="text" class="form-control form-control-sm" placeholder="Right icon, input small">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-sm">
                                        <i class="ph-at ph-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /inputs with icon -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Spinners</div>

                <!-- Inputs with spinner -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Input with spinners</label>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-control-feedback form-control-feedback-start mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Left icon, input large">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-lg">
                                        <div class="spinner-border spinner-border-lg" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-start mb-3">
                                    <input type="text" class="form-control" placeholder="Left icon, input default">
                                    <div class="form-control-feedback-icon">
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-start mb-3 mb-lg-0">
                                    <input type="text" class="form-control form-control-sm" placeholder="Left icon, input small">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-sm">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-control-feedback form-control-feedback-end mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Right icon, input large">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-lg">
                                        <div class="spinner-border spinner-border-lg" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-end mb-3">
                                    <input type="text" class="form-control" placeholder="Right icon, input default">
                                    <div class="form-control-feedback-icon">
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-control-feedback form-control-feedback-end mb-3 mb-lg-0">
                                    <input type="text" class="form-control form-control-sm" placeholder="Right icon, input small">
                                    <div class="form-control-feedback-icon form-control-feedback-icon-sm">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /inputs with spinner -->

            </div>
        </div>
    </div>
    <!-- /input icons -->


    <!-- Local styling -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Local styling</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Input fields support all available text options via available helper classes. Just add any text class to elements with <code>.form-control</code> or <code>.form-select</code> class, e.g. <code>&lt;class="form-control text-uppercase"></code> to apply custom text styling. You can also change text alignment, input shape and text/border/background color. Examples below demonstrate some of the options. For all available utility classes, refer to <a href="content_helpers">this page</a>.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

            <!-- Light font weight -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Light text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control fw-light" placeholder="Input with light text">
                </div>
            </div>
            <!-- /light font weight -->


            <!-- Semibold font weight -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Semibold text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control fw-semibold" placeholder="Input with semibold text">
                </div>
            </div>
            <!-- /semibold font weight -->


            <!-- Bold font weight -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Bold text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control fw-bold" placeholder="Input with bold text">
                </div>
            </div>
            <!-- /bold font weight -->


            <!-- Capitalized text -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Capitalized text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control text-capitalize" placeholder="Input with capitalized text">
                </div>
            </div>
            <!-- /capitalized text -->


            <!-- Centered text -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Centered text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control text-center" placeholder="Input with centered text">
                </div>
            </div>
            <!-- /centered text -->


            <!-- Right text -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Right aligned text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control text-end" placeholder="Input with right aligned text">
                </div>
            </div>
            <!-- /right text -->


            <!-- Uppercase text -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Uppercase text</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control text-uppercase" placeholder="Input with uppercase text">
                </div>
            </div>
            <!-- /uppercase text -->


            <!-- Rounded input -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Rounded input</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control rounded-pill" placeholder="Rounded input">
                </div>
            </div>
            <!-- /rounded input -->


            <!-- Roundless input -->
            <div class="row">
                <label class="col-form-label col-lg-3">Roundless input</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control rounded-0" placeholder="Roundless input">
                </div>
            </div>
            <!-- /roundless input -->

        </div>
    </div>
    <!-- /local styling -->


    <!-- Custom options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Custom options</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Form fields can be mixed with JS and other components to provide additional functionality in certain use cases. You can add tooltips, popovers, floating buttons and change their behaviour (e.g. trigger tooltip on hover of focus) simply by adding elements with utility classes or calling JS components with data attributes. Here are some examples:</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Popups</div>

                <!-- Tooltip on focus -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Tooltip on focus</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" data-bs-popup="tooltip" data-bs-trigger="focus" title="Tooltip on focus" placeholder="Click on input">
                    </div>
                </div>
                <!-- /tooltip on focus -->


                <!-- Tooltip on hover -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Tooltip on hover</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" data-bs-popup="tooltip" title="Tooltip on hover" placeholder="Hover on input">
                    </div>
                </div>
                <!-- /tooltip on hover -->


                <!-- Popover on focus -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Popover on focus</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" data-bs-popup="popover" data-bs-trigger="focus" title="Popover on focus" data-bs-content="And here's some amazing content. It's very engaging. Right?" placeholder="Click on input">
                    </div>
                </div>
                <!-- /popover on focus -->


                <!-- Popover on hover -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Popover on hover</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" data-bs-popup="popover" data-bs-trigger="hover" title="Popover on hover" data-bs-content="And here's some amazing content. It's very engaging. Right?" placeholder="Hover on input">
                    </div>
                </div>
                <!-- /popover on hover -->

            </div>

            <div>
                <div class="fw-bold border-bottom pb-2 mb-3">Buttons</div>

                <!-- Floating button -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Floating button</label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <input type="text" class="form-control pe-5" placeholder="Input placeholder">

                            <div class="position-absolute end-0 top-50 translate-middle-y me-1">
                                <button type="button" class="btn btn-light btn-sm btn-icon rounded-pill">
                                    <i class="ph-x ph-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /floating button -->


                <!-- Button with collapse -->
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Button with collapse</label>
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <input type="text" class="form-control pe-5" placeholder="Input placeholder">

                            <div class="position-absolute end-0 top-50 translate-middle-y me-1">
                                <button type="button" class="btn btn-light btn-sm btn-icon rounded-pill" data-bs-toggle="collapse" data-bs-target="#collapsible_input">
                                    <i class="ph-caret-down ph-sm"></i>
                                </button>
                            </div>
                        </div>

                        <div class="collapse" id="collapsible_input">
                            <div class="border rounded p-3 mt-3">
                                <h6 class="mb-3">Advanced filters</h6>
                                <div class="d-md-flex mb-3">
                                    <div class="row flex-grow-1">
                                        <div class="col-md-4">
                                            <div class="mb-3 mb-md-0">
                                                <select class="form-select">
                                                    <option value="1" selected>User</option>
                                                    <option value="2">Department</option>
                                                    <option value="3">Company</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 mb-md-0">
                                                <select class="form-select">
                                                    <option value="1" selected>is</option>
                                                    <option value="2">is not</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 mb-md-0">
                                                <select class="form-select">
                                                    <option value="1" selected>Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Deleted</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-group d-flex ms-md-3">
                                        <button type="button" class="btn btn-light btn-icon">
                                            <i class="ph-plus"></i>
                                        </button>

                                        <button type="button" class="btn btn-light btn-icon">
                                            <i class="ph-trash"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="d-md-flex">
                                    <div class="row flex-grow-1">
                                        <div class="col-md-4">
                                            <div class="mb-3 mb-md-0">
                                                <select class="form-select">
                                                    <option value="1">User</option>
                                                    <option value="2" selected>Department</option>
                                                    <option value="3">Company</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 mb-md-0">
                                                <select class="form-select">
                                                    <option value="1">is</option>
                                                    <option value="2" selected>is not</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 mb-md-0">
                                                <select class="form-select">
                                                    <option value="1" selected>Sales</option>
                                                    <option value="2">Marketing</option>
                                                    <option value="3">Development</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-group d-flex ms-md-3">
                                        <button type="button" class="btn btn-light btn-icon">
                                            <i class="ph-plus"></i>
                                        </button>

                                        <button type="button" class="btn btn-light btn-icon">
                                            <i class="ph-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /buttno with collapse -->


                <!-- Button with dropdown -->
                <div class="row">
                    <label class="col-form-label col-lg-3">Button with dropdown</label>
                    <div class="col-lg-9">
                        <div class="position-relative zindex-1">
                            <input type="text" class="form-control pe-5" placeholder="Input placeholder">

                            <div class="position-absolute end-0 top-50 translate-middle-y me-1">
                                <button type="button" class="btn btn-light btn-sm btn-icon rounded-pill" data-bs-toggle="dropdown">
                                    <i class="ph-caret-down ph-sm"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Option 1</a>
                                    <a href="#" class="dropdown-item">Option 2</a>
                                    <a href="#" class="dropdown-item">Option 3</a>
                                    <a href="#" class="dropdown-item">Option 4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /button with dropdown -->

            </div>
        </div>
    </div>
    <!-- /custom options -->


    <!-- Additional input types -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Additional input types</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Examples of additional input types to demonstrate how global styling is applied to them. All text input fields require our global <code>.form-control</code> class for consistent style and some inputs have their own classes: <code>.form-range</code> for range input and a combination of <code>.form-control.form-control-color</code> classes for color picker. It is strongly recommended to use content specific input type (e.g. <code>search</code> for search functionality, <code>email</code> for email inputs, etc) to trigger relevant keyboards on mobile devices.</p>

            <div class="fw-bold border-bottom pb-2 mb-3">Examples</div>

            <!-- Datetime field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Datetime</label>
                <div class="col-lg-9">
                    <input class="form-control" type="datetime-local" name="datetime-local">
                    <div class="form-text">Using <code>input type="datetime-local"</code></div>
                </div>
            </div>
            <!-- /datetime field -->


            <!-- Date field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Date</label>
                <div class="col-lg-9">
                    <input class="form-control" type="date" name="date">
                    <div class="form-text">Using <code>input type="date"</code></div>
                </div>
            </div>
            <!-- /date field -->


            <!-- Month fiels -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Month</label>
                <div class="col-lg-9">
                    <input class="form-control" type="month" name="month">
                    <div class="form-text">Using <code>input type="month"</code></div>
                </div>
            </div>
            <!-- /month field -->


            <!-- Time field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Time</label>
                <div class="col-lg-9">
                    <input class="form-control" type="time" name="time">
                    <div class="form-text">Using <code>input type="time"</code></div>
                </div>
            </div>
            <!-- /time field -->


            <!-- Week field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Week</label>
                <div class="col-lg-9">
                    <input class="form-control" type="week" name="week">
                    <div class="form-text">Using <code>input type="week"</code></div>
                </div>
            </div>
            <!-- /week field -->


            <!-- Native number field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Number (native)</label>
                <div class="col-lg-9">
                    <input class="form-control" type="number" name="number" value="5">
                    <div class="form-text">Using <code>input type="number"</code></div>
                </div>
            </div>
            <!-- /native number field -->


            <!-- Custom number field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Number (custom)</label>
                <div class="col-lg-9">
                    <div class="row gy-3">
                        <div class="col">
                            <div class="input-group">
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="ph-minus ph-sm"></i>
                                </button>
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="ph-plus ph-sm"></i>
                                </button>
                                <input class="form-control form-control-number" type="number" name="number" value="5">
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group">
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="ph-minus ph-sm"></i>
                                </button>
                                <input class="form-control form-control-number text-center" type="number" name="number" value="5">
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="ph-plus ph-sm"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group">
                                <input class="form-control form-control-number" type="number" name="number" value="5">
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="ph-minus ph-sm"></i>
                                </button>
                                <button type="button" class="btn btn-light btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="ph-plus ph-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /custom number field -->


            <!-- Email field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Email</label>
                <div class="col-lg-9">
                    <input class="form-control" type="email" name="email" placeholder="email@domain.com">
                    <div class="form-text">Using <code>input type="email"</code></div>
                </div>
            </div>
            <!-- /email field -->


            <!-- URL field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">URL</label>
                <div class="col-lg-9">
                    <input class="form-control" type="url" name="url" placeholder="https://google.com">
                    <div class="form-text">Using <code>input type="url"</code></div>
                </div>
            </div>
            <!-- /url field -->


            <!-- Search field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Search</label>
                <div class="col-lg-9">
                    <input class="form-control" type="search" name="search" placeholder="Type here to search">
                    <div class="form-text">Using <code>input type="search"</code></div>
                </div>
            </div>
            <!-- /search field -->


            <!-- Tel field -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Tel</label>
                <div class="col-lg-9">
                    <input class="form-control" type="tel" name="tel" placeholder="Enter your phone number">
                    <div class="form-text">Using <code>input type="tel"</code></div>
                </div>
            </div>
            <!-- /tel field -->


            <!-- Color picker -->
            <div class="row mb-3">
                <label class="col-form-label col-lg-3">Color</label>
                <div class="col-lg-9">
                    <input class="form-control form-control-color" type="color" name="color">
                    <div class="form-text">Using <code>input type="color"</code></div>
                </div>
            </div>
            <!-- /color picker -->


            <!-- Range field -->
            <div class="row">
                <label class="col-form-label col-lg-3">Range</label>
                <div class="col-lg-9">
                    <div class="mt-lg-2">
                        <input class="form-range" type="range" name="range" min="0" max="10">
                        <div class="form-text">Using <code>input type="range"</code></div>
                    </div>
                </div>
            </div>
            <!-- /range field -->

        </div>
    </div>
    <!-- /additional input types -->

</div>
<!-- /content area -->

@endsection
