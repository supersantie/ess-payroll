@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Checkboxes &amp; Radios @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Checkboxes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Checkboxes</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6>Native checkboxes</h6>
                <p class="mb-3">The HTML input element <code>&lt;input type=checkbox></code> is an input element to enter an array of different values. The <code>value</code> attribute is used to define the value submitted by the checkbox. The <code>checked</code> attribute is used to indicate whether this item is selected. The <code>indeterminate</code> attribute is used to indicate that the checkbox is in an indeterminate state (on most platforms, this draws a horizontal line across the checkbox).</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" id="dc_ls_c" checked>
                                    <label class="ms-2" for="dc_ls_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center mb-2">
                                    <input type="checkbox" id="dc_ls_u">
                                    <label class="ms-2" for="dc_ls_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="checkbox" id="dc_ls_cd" checked disabled>
                                    <label class="ms-2" for="dc_ls_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="checkbox" id="dc_ls_ud" disabled>
                                    <label class="ms-2" for="dc_ls_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked stretched</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" id="dc_lss_c" checked>
                                    <label class="ms-auto" for="dc_lss_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center mb-2">
                                    <input type="checkbox" id="dc_lss_u">
                                    <label class="ms-auto" for="dc_lss_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="checkbox" id="dc_lss_cd" checked disabled>
                                    <label class="ms-auto" for="dc_lss_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="checkbox" id="dc_lss_ud" disabled>
                                    <label class="ms-auto" for="dc_lss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center flex-row-reverse">
                                    <input type="checkbox" id="dc_rs_c" checked>
                                    <label class="me-2" for="dc_rs_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse mb-2">
                                    <input type="checkbox" id="dc_rs_u">
                                    <label class="me-2" for="dc_rs_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="checkbox" id="dc_rs_cd" checked disabled>
                                    <label class="me-2" for="dc_rs_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="checkbox" id="dc_rs_ud" disabled>
                                    <label class="me-2" for="dc_rs_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked stretched</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center flex-row-reverse">
                                    <input type="checkbox" id="dc_rss_c" checked>
                                    <label class="me-auto" for="dc_rss_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse mb-2">
                                    <input type="checkbox" id="dc_rss_u">
                                    <label class="me-auto" for="dc_rss_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="checkbox" id="dc_rss_cd" checked disabled>
                                    <label class="me-auto" for="dc_rss_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="checkbox" id="dc_rss_ud" disabled>
                                    <label class="me-auto" for="dc_rss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left inline</p>
                            <div class="border p-3 rounded">
                                <div class="d-inline-flex align-items-center me-3">
                                    <input type="checkbox" id="dc_li_c" checked>
                                    <label class="ms-2" for="dc_li_c">Checked</label>
                                </div>

                                <div class="d-inline-flex align-items-center">
                                    <input type="checkbox" id="dc_li_u">
                                    <label class="ms-2" for="dc_li_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right inline</p>
                            <div class="border p-3 rounded">
                                <div class="d-inline-flex flex-row-reverse align-items-center me-3">
                                    <input type="checkbox" id="dc_ri_c" checked>
                                    <label class="me-2" for="dc_ri_c">Checked</label>
                                </div>

                                <div class="d-inline-flex flex-row-reverse align-items-center">
                                    <input type="checkbox" id="dc_ri_u">
                                    <label class="me-2" for="dc_ri_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <h6>Custom CSS checkboxes</h6>
                <p class="mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control. Custom checkboxes can also utilize the <code>:indeterminate</code> pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked checkboxes</p>

                            <div class="border p-3 rounded">
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_ls_c" checked>
                                    <label class="form-check-label" for="cc_ls_c">Checked</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="cc_ls_u">
                                    <label class="form-check-label" for="cc_ls_u">Unchecked</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_ls_cd" checked disabled>
                                    <label class="form-check-label" for="cc_ls_cd">Checked disabled</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="cc_ls_ud" disabled>
                                    <label class="form-check-label" for="cc_ls_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked stretched checkboxes</p>

                            <div class="border p-3 rounded">
                                <div class="form-check text-end mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_lss_c" checked>
                                    <label class="form-check-label" for="cc_lss_c">Checked</label>
                                </div>

                                <div class="form-check text-end mb-3">
                                    <input type="checkbox" class="form-check-input" id="cc_lss_u">
                                    <label class="form-check-label" for="cc_lss_u">Unchecked</label>
                                </div>

                                <div class="form-check text-end mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_lss_cd" checked disabled>
                                    <label class="form-check-label" for="cc_lss_cd">Checked disabled</label>
                                </div>

                                <div class="form-check text-end">
                                    <input type="checkbox" class="form-check-input" id="cc_lss_ud" disabled>
                                    <label class="form-check-label" for="cc_lss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked checkboxes</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-reverse mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_rs_c" checked>
                                    <label class="form-check-label" for="cc_rs_c">Checked</label>
                                </div>

                                <div class="form-check form-check-reverse mb-3">
                                    <input type="checkbox" class="form-check-input" id="cc_rs_u">
                                    <label class="form-check-label" for="cc_rs_u">Unchecked</label>
                                </div>

                                <div class="form-check form-check-reverse mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_rs_cd" checked disabled>
                                    <label class="form-check-label" for="cc_rs_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-check-reverse">
                                    <input type="checkbox" class="form-check-input" id="cc_rs_ud" disabled>
                                    <label class="form-check-label" for="cc_rs_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked stretched checkboxes</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_rss_c" checked>
                                    <label class="form-check-label" for="cc_rss_c">Checked</label>
                                </div>

                                <div class="form-check form-check-reverse text-start mb-3">
                                    <input type="checkbox" class="form-check-input" id="cc_rss_u">
                                    <label class="form-check-label" for="cc_rss_u">Unchecked</label>
                                </div>

                                <div class="form-check form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" id="cc_rss_cd" checked disabled>
                                    <label class="form-check-label" for="cc_rss_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-check-reverse text-start">
                                    <input type="checkbox" class="form-check-input" id="cc_rss_ud" disabled>
                                    <label class="form-check-label" for="cc_rss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left inline checkboxes</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="cc_li_c" checked>
                                    <label class="form-check-label" for="cc_li_c">Checked</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="cc_li_u">
                                    <label class="form-check-label" for="cc_li_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right inline checkboxes</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline form-check-reverse">
                                    <input type="checkbox" class="form-check-input" id="cc_ri_c" checked>
                                    <label class="form-check-label" for="cc_ri_c">Checked</label>
                                </div>

                                <div class="form-check form-check-inline form-check-reverse">
                                    <input type="checkbox" class="form-check-input" id="cc_ri_u">
                                    <label class="form-check-label" for="cc_ri_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Colors</p>

                            <div class="border px-3 pt-3 pb-2 rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-secondary" checked>
                                            <span class="form-check-label">Secondary</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-danger" checked>
                                            <span class="form-check-label">Danger</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-success" checked>
                                            <span class="form-check-label">Success</span>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-warning" checked>
                                            <span class="form-check-label">Warning</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-info" checked>
                                            <span class="form-check-label">Info</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-dark" checked>
                                            <span class="form-check-label">Dark</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Inversed checkbox</p>

                            <div class="p-3 bg-dark rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-check text-white mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-white" checked>
                                            <span class="form-check-label">Checked</span>
                                        </label>

                                        <label class="form-check text-white mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-white">
                                            <span class="form-check-label">Unchecked</span>
                                        </label>

                                        <label class="form-check text-white">
                                            <input type="checkbox" class="form-check-input form-check-input-white" checked disabled>
                                            <span class="form-check-label">Disabled</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <h6>Checkbox switches</h6>
                <p class="mb-3">A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute, but unlike custom checkboxes don't support <code>indeterminate</code> state. Supports 6 alternative colors and is ready for dark backgrounds.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                    <label class="form-check-label" for="sc_ls_c">Checked</label>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input type="checkbox" class="form-check-input" id="sc_ls_u">
                                    <label class="form-check-label" for="sc_ls_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_ls_cd" checked disabled>
                                    <label class="form-check-label" for="sc_ls_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="sc_ls_ud" disabled>
                                    <label class="form-check-label" for="sc_ls_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked stretched switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch text-end mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_lss_c" checked>
                                    <label class="form-check-label" for="sc_lss_c">Checked</label>
                                </div>

                                <div class="form-check form-switch text-end mb-3">
                                    <input type="checkbox" class="form-check-input" id="sc_lss_u">
                                    <label class="form-check-label" for="sc_lss_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch text-end mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_lss_cd" checked disabled>
                                    <label class="form-check-label" for="sc_lss_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch text-end">
                                    <input type="checkbox" class="form-check-input" id="sc_lss_ud" disabled>
                                    <label class="form-check-label" for="sc_lss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch form-check-reverse mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_rs_c" checked>
                                    <label class="form-check-label" for="sc_rs_c">Checked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse mb-3">
                                    <input type="checkbox" class="form-check-input" id="sc_rs_u">
                                    <label class="form-check-label" for="sc_rs_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_rs_cd" checked disabled>
                                    <label class="form-check-label" for="sc_rs_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse">
                                    <input type="checkbox" class="form-check-input" id="sc_rs_ud" disabled>
                                    <label class="form-check-label" for="sc_rs_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked stretched switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_rss_c" checked>
                                    <label class="form-check-label" for="sc_rss_c">Checked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse text-start mb-3">
                                    <input type="checkbox" class="form-check-input" id="sc_rss_u">
                                    <label class="form-check-label" for="sc_rss_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="checkbox" class="form-check-input" id="sc_rss_cd" checked disabled>
                                    <label class="form-check-label" for="sc_rss_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse text-start">
                                    <input type="checkbox" class="form-check-input" id="sc_rss_ud" disabled>
                                    <label class="form-check-label" for="sc_rss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left inline switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline form-switch">
                                    <input type="checkbox" class="form-check-input" id="sc_li_c" checked>
                                    <label class="form-check-label" for="sc_li_c">Checked</label>
                                </div>

                                <div class="form-check form-check-inline form-switch">
                                    <input type="checkbox" class="form-check-input" id="sc_li_u">
                                    <label class="form-check-label" for="sc_li_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right inline switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline form-switch form-check-reverse">
                                    <input type="checkbox" class="form-check-input" id="sc_ri_c" checked>
                                    <label class="form-check-label" for="sc_ri_c">Checked</label>
                                </div>

                                <div class="form-check form-check-inline form-switch form-check-reverse">
                                    <input type="checkbox" class="form-check-input" id="sc_ri_u">
                                    <label class="form-check-label" for="sc_ri_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <p class="fw-semibold">Color options</p>

                        <div class="border px-3 pt-3 pb-2 rounded mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-secondary" id="sc_r_secondary" checked>
                                        <label class="form-check-label" for="sc_r_secondary">Secondary</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-danger" id="sc_r_danger" checked>
                                        <label class="form-check-label" for="sc_r_danger">Danger</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-success" id="sc_r_success" checked>
                                        <label class="form-check-label" for="sc_r_success">Success</label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-warning" id="sc_r_warning" checked>
                                        <label class="form-check-label" for="sc_r_warning">Warning</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-info" id="sc_r_info" checked>
                                        <label class="form-check-label" for="sc_r_info">Info</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" id="sc_r_dark" checked>
                                        <label class="form-check-label" for="sc_r_dark">Dark</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p class="fw-semibold">Inversed colors</p>

                        <div class="p-3 bg-dark rounded">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-check form-switch text-white mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-white" checked>
                                        <span class="form-check-label">Checked</span>
                                    </label>

                                    <label class="form-check form-switch text-white mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-white">
                                        <span class="form-check-label">Unchecked</span>
                                    </label>

                                    <label class="form-check form-switch text-white">
                                        <input type="checkbox" class="form-check-input form-check-input-white" checked disabled>
                                        <span class="form-check-label">Disabled</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /checkboxes -->


    <!-- Radios -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Radios</h5>
            <span class="card-subtitle text-muted">Native, custom and switches. Left and right alignment</span>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6>Native radios</h6>
                <p class="mb-3">Radio button is an element that can be turned on and off. Radio buttons are almost always grouped together in groups. Only one radio button within the same <code>radiogroup</code> may be selected at a time. The user can switch which radio button is turned on by selecting it with the mouse or keyboard. Other radio buttons in the same group are turned off. A label, specified with the <code>label</code> attribute may be added beside the radio button.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center">
                                    <input type="radio" name="dr_ls" id="dr_ls_c" checked>
                                    <label class="ms-2" for="dr_ls_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center mb-2">
                                    <input type="radio" name="dr_ls" id="dr_ls_u">
                                    <label class="ms-2" for="dr_ls_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="radio" id="dr_ls_cd" checked disabled>
                                    <label class="ms-2" for="dr_ls_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="radio" id="dr_ls_ud" disabled>
                                    <label class="ms-2" for="dr_ls_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked stretched</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center">
                                    <input type="radio" name="dr_ls_r" id="dr_ls_r_c" checked>
                                    <label class="ms-auto" for="dr_ls_r_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center mb-2">
                                    <input type="radio" name="dr_ls_r" id="dr_ls_r_u">
                                    <label class="ms-auto" for="dr_ls_r_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="radio" id="dr_ls_r_cd" checked disabled>
                                    <label class="ms-auto" for="dr_ls_r_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center disabled">
                                    <input type="radio" id="dr_ls_r_ud" disabled>
                                    <label class="ms-auto" for="dr_ls_r_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center flex-row-reverse">
                                    <input type="radio" name="dr_rs" id="dr_rs_c" checked>
                                    <label class="me-2" for="dr_rs_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse mb-2">
                                    <input type="radio" name="dr_rs" id="dr_rs_u">
                                    <label class="me-2" for="dr_rs_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="radio" id="dr_rs_cd" checked disabled>
                                    <label class="me-2" for="dr_rs_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="radio" id="dr_rs_ud" disabled>
                                    <label class="me-2" for="dr_rs_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked stretched</p>
                            <div class="border p-3 rounded">
                                <div class="d-flex align-items-center flex-row-reverse">
                                    <input type="radio" name="dr_rls" id="dr_rls_c" checked>
                                    <label class="me-auto" for="dr_rls_c">Checked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse mb-2">
                                    <input type="radio" name="dr_rls" id="dr_rls_u">
                                    <label class="me-auto" for="dr_rls_u">Unchecked</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="radio" id="dr_rls_cd" checked disabled>
                                    <label class="me-auto" for="dr_rls_cd">Checked disabled</label>
                                </div>

                                <div class="d-flex align-items-center flex-row-reverse disabled">
                                    <input type="radio" id="dr_rls_ud" disabled>
                                    <label class="me-auto" for="dr_rls_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left inline</p>
                            <div class="border p-3 rounded">
                                <div class="d-inline-flex align-items-center me-3">
                                    <input type="radio" name="dr_li" id="dr_li_c" checked>
                                    <label class="ms-2" for="dr_li_c">Checked</label>
                                </div>

                                <div class="d-inline-flex align-items-center">
                                    <input type="radio" name="dr_li" id="dr_li_u">
                                    <label class="ms-2" for="dr_li_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right inline</p>
                            <div class="border p-3 rounded">
                                <div class="d-inline-flex flex-row-reverse align-items-center me-3">
                                    <input type="radio" name="dr_ri" id="dr_ri_c" checked>
                                    <label class="me-2" for="dr_ri_c">Checked</label>
                                </div>

                                <div class="d-inline-flex flex-row-reverse align-items-center">
                                    <input type="radio" name="dr_ri" id="dr_ri_u">
                                    <label class="me-2" for="dr_ri_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <h6>Custom CSS radios</h6>
                <p class="mb-3">Custom radios use the same approach as checkboxes, they share the same set of colors and styles. Both can be easily customized in <code>_variables-core.scss</code> file simply by changing shared variable values. Here are the examples of label alignment, single radio with no text label is also supported.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked radios</p>

                            <div class="border p-3 rounded">
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input" name="cr-l" id="cr_l_s_s" checked>
                                    <label class="form-check-label" for="cr_l_s_s">Selected</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="cr-l" id="cr_l_s_u">
                                    <label class="form-check-label" for="cr_l_s_u">Unselected</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input" id="cr_l_s_sd" checked disabled>
                                    <label class="form-check-label" for="cr_l_s_sd">Selected disabled</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="cr_l_s_ud" disabled>
                                    <label class="form-check-label" for="cr_l_s_ud">Unselected disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked stretched radios</p>

                            <div class="border p-3 rounded">
                                <div class="form-check text-end mb-2">
                                    <input type="radio" class="form-check-input" name="cr_l_s" id="cr_lr_s_s" checked>
                                    <label class="form-check-label" for="cr_lr_s_s">Selected</label>
                                </div>

                                <div class="form-check text-end mb-3">
                                    <input type="radio" class="form-check-input" name="cr_l_s" id="cr_lr_s_u">
                                    <label class="form-check-label" for="cr_lr_s_u">Unselected</label>
                                </div>

                                <div class="form-check text-end mb-2">
                                    <input type="radio" class="form-check-input" id="cr_lr_s_sd" checked disabled>
                                    <label class="form-check-label" for="cr_lr_s_sd">Selected disabled</label>
                                </div>

                                <div class="form-check text-end">
                                    <input type="radio" class="form-check-input" id="cr_lr_s_ud" disabled>
                                    <label class="form-check-label" for="cr_lr_s_ud">Unselected disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked radios</p>

                            <div class="border p-3 rounded">
                                <div class="form-check text-end form-check-reverse mb-2">
                                    <input type="radio" class="form-check-input" name="cr-r" id="cr_r_s_s" checked>
                                    <label class="form-check-label" for="cr_r_s_s">Selected</label>
                                </div>

                                <div class="form-check text-end form-check-reverse mb-3">
                                    <input type="radio" class="form-check-input" name="cr-r" id="cr_r_s_u">
                                    <label class="form-check-label" for="cr_r_s_u">Unselected</label>
                                </div>

                                <div class="form-check text-end form-check-reverse mb-2">
                                    <input type="radio" class="form-check-input" id="cr_r_s_sd" checked disabled>
                                    <label class="form-check-label" for="cr_r_s_sd">Selected disabled</label>
                                </div>

                                <div class="form-check text-end form-check-reverse">
                                    <input type="radio" class="form-check-input" id="cr_r_s_ud" disabled>
                                    <label class="form-check-label" for="cr_r_s_ud">Unselected disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked stretched radios</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-reverse text-start mb-2">
                                    <input type="radio" class="form-check-input" name="cr_r_s" id="cr_rl_s_s" checked>
                                    <label class="form-check-label" for="cr_rl_s_s">Selected</label>
                                </div>

                                <div class="form-check form-check-reverse text-start mb-3">
                                    <input type="radio" class="form-check-input" name="cr_r_s" id="cr_rl_s_u">
                                    <label class="form-check-label" for="cr_rl_s_u">Unselected</label>
                                </div>

                                <div class="form-check form-check-reverse text-start mb-2">
                                    <input type="radio" class="form-check-input" id="cr_rl_s_sd" checked disabled>
                                    <label class="form-check-label" for="cr_rl_s_sd">Selected disabled</label>
                                </div>

                                <div class="form-check form-check-reverse text-start">
                                    <input type="radio" class="form-check-input" id="cr_rl_s_ud" disabled>
                                    <label class="form-check-label" for="cr_rl_s_ud">Unselected disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left inline radios</p>
                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cr-i-l" id="cr_l_i_s" checked>
                                    <label class="form-check-label" for="cr_l_i_s">Selected</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cr-i-l" id="cr_l_i_u">
                                    <label class="form-check-label" for="cr_l_i_u">Unselected</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right inline radios</p>
                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline form-check-reverse">
                                    <input type="radio" class="form-check-input" name="cr-i-r" id="cr_r_i_s" checked>
                                    <label class="form-check-label" for="cr_r_i_s">Selected</label>
                                </div>

                                <div class="form-check form-check-inline form-check-reverse">
                                    <input type="radio" class="form-check-input" name="cr-i-r" id="cr_r_i_u">
                                    <label class="form-check-label" for="cr_r_i_u">Unselected</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Contextual colors</p>
                            <div class="border px-3 pt-3 pb-2 rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-check mb-2">
                                            <input type="radio" class="form-check-input form-check-input-secondary" name="radio_contextual_colors" checked>
                                            <span class="form-check-label">Secondary</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="radio" class="form-check-input form-check-input-danger" name="radio_contextual_colors">
                                            <span class="form-check-label">Danger</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="radio" class="form-check-input form-check-input-success" name="radio_contextual_colors">
                                            <span class="form-check-label">Success</span>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-check mb-2">
                                            <input type="radio" class="form-check-input form-check-input-warning" name="radio_contextual_colors">
                                            <span class="form-check-label">Warning</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="radio" class="form-check-input form-check-input-info" name="radio_contextual_colors">
                                            <span class="form-check-label">Info</span>
                                        </label>

                                        <label class="form-check mb-2">
                                            <input type="radio" class="form-check-input form-check-input-dark" name="radio_contextual_colors">
                                            <span class="form-check-label">Dark</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Inversed radio</p>
                            <div class="p-3 bg-dark rounded">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-check text-white mb-2">
                                            <input type="radio" class="form-check-input form-check-input-white" name="radio_inverse_colors" checked>
                                            <span class="form-check-label">Checked</span>
                                        </label>

                                        <label class="form-check text-white mb-2">
                                            <input type="radio" class="form-check-input form-check-input-white" name="radio_inverse_colors">
                                            <span class="form-check-label">Unchecked</span>
                                        </label>

                                        <label class="form-check text-white">
                                            <input type="radio" class="form-check-input form-check-input-white" name="radio_inverse_colors" disabled>
                                            <span class="form-check-label">Disabled</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <h6>Radio switches</h6>
                <p class="mb-3">You can also use normal radio buttons as switches, all default colors and shapes are supported as well. Use same class names, but different input type and other attributes like <code>name</code>, <code>id</code> and <code>value</code>. None of these examples requires JS, all inputs are designed with pure CSS.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch mb-2">
                                    <input type="radio" class="form-check-input" name="sr-ls" id="sr_ls_c" checked>
                                    <label class="form-check-label" for="sr_ls_c">Checked</label>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input type="radio" class="form-check-input" name="sr-ls" id="sr_ls_u">
                                    <label class="form-check-label" for="sr_ls_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch mb-2">
                                    <input type="radio" class="form-check-input" id="sr_ls_cd" checked disabled>
                                    <label class="form-check-label" for="sr_ls_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input type="radio" class="form-check-input" id="sr_ls_ud" disabled>
                                    <label class="form-check-label" for="sr_ls_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left stacked stretched switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch text-end mb-2">
                                    <input type="radio" class="form-check-input" name="sr_lss" id="sr_lss_c" checked>
                                    <label class="form-check-label" for="sr_lss_c">Checked</label>
                                </div>

                                <div class="form-check form-switch text-end mb-3">
                                    <input type="radio" class="form-check-input" name="sr_lss" id="sr_lss_u">
                                    <label class="form-check-label" for="sr_lss_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch text-end mb-2">
                                    <input type="radio" class="form-check-input" id="sr_lss_cd" checked disabled>
                                    <label class="form-check-label" for="sr_lss_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch text-end">
                                    <input type="radio" class="form-check-input" id="sr_lss_ud" disabled>
                                    <label class="form-check-label" for="sr_lss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch form-check-reverse mb-2">
                                    <input type="radio" class="form-check-input" name="sr-rs" id="sr_rs_c" checked>
                                    <label class="form-check-label" for="sr_rs_c">Checked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse mb-3">
                                    <input type="radio" class="form-check-input" name="sr-rs" id="sr_rs_u">
                                    <label class="form-check-label" for="sr_rs_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse mb-2">
                                    <input type="radio" class="form-check-input" id="sr_rs_cd" checked disabled>
                                    <label class="form-check-label" for="sr_rs_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse">
                                    <input type="radio" class="form-check-input" id="sr_rs_ud" disabled>
                                    <label class="form-check-label" for="sr_rs_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right stacked stretched switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="radio" class="form-check-input" name="sr-rss" id="sr_rss_c" checked>
                                    <label class="form-check-label" for="sr_rss_c">Checked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse text-start mb-3">
                                    <input type="radio" class="form-check-input" name="sr-rss" id="sr_rss_u">
                                    <label class="form-check-label" for="sr_rss_u">Unchecked</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse text-start mb-2">
                                    <input type="radio" class="form-check-input" id="sr_rss_cd" checked disabled>
                                    <label class="form-check-label" for="sr_rss_cd">Checked disabled</label>
                                </div>

                                <div class="form-check form-switch form-check-reverse text-start">
                                    <input type="radio" class="form-check-input" id="sr_rss_ud" disabled>
                                    <label class="form-check-label" for="sr_rss_ud">Unchecked disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Left inline switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline form-switch">
                                    <input type="radio" class="form-check-input" name="sr-li" id="sr_li_c" checked>
                                    <label class="form-check-label" for="sr_li_c">Checked</label>
                                </div>

                                <div class="form-check form-check-inline form-switch">
                                    <input type="radio" class="form-check-input" name="sr-li" id="sr_li_u">
                                    <label class="form-check-label" for="sr_li_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="fw-semibold">Right inline switches</p>

                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline form-switch form-check-reverse">
                                    <input type="radio" class="form-check-input" name="sr-ri" id="sr_ri_c" checked>
                                    <label class="form-check-label" for="sr_ri_c">Checked</label>
                                </div>

                                <div class="form-check form-check-inline form-switch form-check-reverse">
                                    <input type="radio" class="form-check-input" name="sr-ri" id="sr_ri_u">
                                    <label class="form-check-label" for="sr_ri_u">Unchecked</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <p class="fw-semibold">Color options</p>

                        <div class="border px-3 pt-3 pb-2 rounded mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check form-switch mb-2">
                                        <input type="radio" class="form-check-input form-check-input-secondary" name="radio-switch-colors" id="sr_r_secondary" checked>
                                        <label class="form-check-label" for="sr_r_secondary">Secondary</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="radio" class="form-check-input form-check-input-danger" name="radio-switch-colors" id="sr_r_danger">
                                        <label class="form-check-label" for="sr_r_danger">Danger</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="radio" class="form-check-input form-check-input-success" name="radio-switch-colors" id="sr_r_success">
                                        <label class="form-check-label" for="sr_r_success">Success</label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check form-switch mb-2">
                                        <input type="radio" class="form-check-input form-check-input-warning" name="radio-switch-colors" id="sr_r_warning">
                                        <label class="form-check-label" for="sr_r_warning">Warning</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="radio" class="form-check-input form-check-input-info" name="radio-switch-colors" id="sr_r_info">
                                        <label class="form-check-label" for="sr_r_info">Info</label>
                                    </div>

                                    <div class="form-check form-switch mb-2">
                                        <input type="radio" class="form-check-input form-check-input-dark" name="radio-switch-colors" id="sr_r_dark">
                                        <label class="form-check-label" for="sr_r_dark">Dark</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p class="fw-semibold">Inversed colors</p>

                        <div class="p-3 bg-dark rounded">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-check form-switch text-white mb-2">
                                        <input type="radio" class="form-check-input form-check-input-white" name="radio-switch-white" checked>
                                        <span class="form-check-label">Checked</span>
                                    </label>

                                    <label class="form-check form-switch text-white mb-2">
                                        <input type="radio" class="form-check-input form-check-input-white" name="radio-switch-white">
                                        <span class="form-check-label">Unchecked</span>
                                    </label>

                                    <label class="form-check form-switch text-white">
                                        <input type="radio" class="form-check-input form-check-input-white" checked disabled>
                                        <span class="form-check-label">Disabled</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /radio switches -->

</div>
<!-- /content area -->

@endsection
