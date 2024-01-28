@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Form Actions @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Form action components -->
    <div class="mb-3">
        <h6 class="mb-0">
            Form action components
        </h6>
        <span class="text-muted d-block">Form actions with mixed elements</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Left aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left aligned buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /left aligned buttons -->


            <!-- Text + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="ph-code me-1"></i> Some HTML is supported</span>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /text + button -->


            <!-- Inline list + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Inline list + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="list-inline mb-0">
                                <a href="#" class="list-inline-item text-body">Support</a>
                                <a href="#" class="list-inline-item text-body">Terms</a>
                                <a href="#" class="list-inline-item text-body">Policy</a>
                            </div>

                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /inline list + button -->


            <!-- Checkbox + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Checkbox + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Save as template</span>
                            </label>

                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /checkbox + button -->

        </div>

        <div class="col-lg-4">

            <!-- Right aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right aligned buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /right aligned buttons -->


            <!-- Text link + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text link + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#">Can't send message?</a>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /text link + button -->


            <!-- Icon list + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Icon list + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body text-link-highlight rounded-pill me-2"><i class="ph-image"></i></a>
                                <a href="#" class="text-body text-link-highlight rounded-pill me-2"><i class="ph-smiley"></i></a>
                                <a href="#" class="text-body text-link-highlight rounded-pill me-2"><i class="ph-paperclip"></i></a>
                            </div>

                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /icon list + button -->


            <!-- Switch + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Switch + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <label class="form-check form-check-inline form-switch">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Start discussion</span>
                            </label>

                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /switch + button -->

        </div>

        <div class="col-lg-4">

            <!-- Left and right buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left/right buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /left and right buttons -->


            <!-- Status text + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Status text + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <div class="spinner-border spinner-border-sm me-2" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                Processing...
                            </span>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /status text + button -->


            <!-- Left alternate button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left alternate button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-light btn-icon"><i class="ph-question"></i></a>
                            <div class="d-inline-flex">
                                <button type="reset" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /left alternate button -->


            <!-- Select + button -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Select + button</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="d-lg-flex justify-content-between align-items-center flex-wrap">
                            <div class="wmin-lg-200 mb-3 mb-lg-0">
                                <select class="form-select">
                                    <option value="1">Send to all contacts</option>
                                    <option value="2">Send to my contacts</option>
                                    <option value="3">Save as draft</option>
                                    <option value="4">Don't have in Sent</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary ms-lg-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /select + button -->

        </div>
    </div>
    <!-- /form action components -->


    <!-- Form actions positioning -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Form actions alignment
        </h6>
        <span class="text-muted d-block">Using text or flexbox utility classes</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Left alignment -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left aligned</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </form>
                </div>
            </div>
            <!-- /left alignment -->

        </div>

        <div class="col-lg-4">

            <!-- Centered buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Centered actions</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /centered buttons -->

        </div>

        <div class="col-lg-4">

            <!-- Right alignment -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right aligned</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">Your name: </label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password: </label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your message: </label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /right alignment -->

        </div>
    </div>
    <!-- /form actions positioning -->


    <!-- Optional styles -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Optional styles
        </h6>
        <span class="text-muted d-block">White, grey and custom backgrounds</span>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Grey background -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Grey background</h6>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div>
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                        <button type="reset" class="btn btn-link">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>
            </form>
            <!-- /grey background -->

        </div>

        <div class="col-lg-4">

            <!-- Transparent background -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Transparent background</h6>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div>
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-between align-items-center bg-transparent">
                        <button type="reset" class="btn btn-link">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>
            </form>
            <!-- /transparent background -->

        </div>

        <div class="col-lg-4">

            <!-- Dark background -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Dark background</h6>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Your name:</label>
                            <input type="text" class="form-control" placeholder="Themesbrand">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div>
                            <label class="form-label">Your message:</label>
                            <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>

                    <div class="card-footer bg-dark d-flex justify-content-between align-items-center border-top-0">
                        <button type="submit" class="btn btn-outline-white border-2">Cancel</button>
                        <button type="submit" class="btn btn-outline-white border-2">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>
            </form>
            <!-- /dark background -->

        </div>
    </div>
    <!-- /optional styles -->


    <!-- In horizontal forms -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            In horizontal forms
        </h6>
        <span class="text-muted d-block">Styling and alignment options</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Left buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <button type="reset" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /left buttons -->


            <!-- Left and right buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left and right buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /left and right buttons -->

        </div>

        <div class="col-lg-6">

            <!-- Right buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto text-end">
                                <button type="reset" class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /right buttons -->


            <!-- Centered buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Centered buttons</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /centered buttons -->

        </div>
    </div>
    <!-- /in horizontal forms -->


    <!-- Optional button styles -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">
            Optional button styles
        </h6>
        <span class="text-muted d-block">Action buttons placement and spacing</span>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Grey background, left button spacing -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Grey bg and left spacing</h6>
                    </div>

                    <div class="card-footer bg-light border-top-0 border-bottom">
                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="reset" class="btn btn-link">Cancel</button>
                                    <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="reset" class="btn btn-link">Cancel</button>
                                    <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /grey background, left button spacing -->


            <!-- Grey background, no left button spacing -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Grey background</h6>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-between align-items-center border-top-0 border-bottom">
                        <button type="reset" class="btn btn-link">Cancel</button>
                        <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-link">Cancel</button>
                        <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>
            </form>
            <!-- /grey background, no left button spacing -->

        </div>

        <div class="col-lg-6">

            <!-- White background, left button spacing -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">White bg and left spacing</h6>
                    </div>

                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <div class="row">
                            <div class="col-lg-8 ms-lg-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                    <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /white background, left button spacing -->


            <!-- White background, no left button spacing -->
            <form action="#">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">White background</h6>
                    </div>

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Themesbrand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-4">Your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-form-label col-lg-4">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /white background, no left button spacing -->

        </div>
    </div>
    <!-- /optional button styles -->

</div>
<!-- /content area -->

@endsection
