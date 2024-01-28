@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Forms @endslot
@slot('subtitle') Select2 Selects @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Single select -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Single select</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Single select2 select is a jQuery based replacement for browser default select boxes. Is re-uses look and feel from regular selects, but significantly extends default functionality by applying custom style to the menu (similar to dropdown menu), adding filtering, supporting remote data sets and many other features. Check out some examples of single select with various options below:</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Basic examples</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Basic select</label>
                    <div class="col-lg-9">
                        <select class="form-control select" data-minimum-results-for-search="Infinity">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Fixed select width</label>
                    <div class="col-lg-9">
                        <select class="form-control select" data-width="250" data-minimum-results-for-search="Infinity">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Select with search</label>
                    <div class="col-lg-9">
                        <select class="form-control select">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Select with placeholder</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a State..." class="form-control select">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Select with icons</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a state..." class="form-control select-icons">
                            <option value="slack" data-icon="slack-logo">Slack</option>
                            <option value="instagram" data-icon="instagram-logo">Instagram</option>
                            <option value="telegram" data-icon="telegram-logo">Telegram</option>
                            <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                            <option value="twitter" data-icon="twitter-logo">Twitter</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Disabled items</label>
                    <div class="col-lg-9">
                        <select class="form-control select">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ" disabled>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID" disabled>Idaho</option>
                                <option value="WY" disabled>Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR" disabled>Arkansas</option>
                                <option value="KS">Kansas</option>
                                <option value="KY" disabled>Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Disabled select</label>
                    <div class="col-lg-9">
                        <select class="form-control select" disabled>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Input group</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Left addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <select class="form-control select" data-width="1%">
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Right addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-width="1%">
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Left button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-success">Button</button>
                            <select class="form-control select" data-width="1%">
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Right button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-width="1%">
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                            <button type="button" class="btn btn-success">Button</button>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Multiple selects</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-width="1%">
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                            <select class="form-control select" data-width="1%">
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Mix with text input</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select flex-grow-0" data-minimum-results-for-search="Infinity" data-width="auto">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Sizing</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Large size</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Default size</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a State..." class="form-control select">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Small size</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>


            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Advanced examples</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Minimum input</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Enter 'as'" class="form-control select" data-minimum-input-length="2" data-minimum-results-for-search="Infinity">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>

                        <div class="form-text">Select2 supports a minimum input setting which is useful for large remote datasets where short search terms are not very useful. Simply specify a number of input characters using <code>minimumInputLength</code> option</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Customizing how results are matched</label>
                    <div class="col-lg-9">
                        <select class="form-control select-matched-customize">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>

                        <div class="form-text">Example of how matched results can be customized. Unlike other dropdowns on this page, this one matches options only if the term appears in the beginning of the string as opposed to anywhere</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Loading array data</label>
                    <div class="col-lg-9">
                        <div class="mb-3">
                            <p>1. Example below loads array:</p>
                            <select class="form-control select-data-array"></select>
                        </div>

                        <div>
                            <p>2. Example below loads array with selected option:</p>
                            <select class="form-control select-data-array">
                                <option value="2" selected>duplicate</option>
                            </select>
                        </div>

                        <div class="form-text">Select2 provides a way to load the data from a local array. You can provide initial selections with array data by providing the option tag for the selected values, similar to how it would be done for a standard select.</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Loading remote data</label>
                    <div class="col-lg-9">
                        <select class="form-control select-remote-data">
                            <option value="3620194" selected>select2/select2</option>
                        </select>

                        <div class="form-text">Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example, we can search for repositories using GitHub's API. Example also includes infinite scrolling feature</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Diacritics support</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Type 'aero'" class="form-control select-search">
                            <option>Aeróbics</option>
                            <option>Aeróbics en Agua</option>
                            <option>Aerografía</option>
                            <option>Aeromodelaje</option>
                            <option>Águilas</option>
                            <option>Ajedrez</option>
                            <option>Ala Delta</option>
                            <option>Álbumes de Música</option>
                            <option>Alusivos</option>
                            <option>Análisis de Escritura a Mano</option>
                        </select>

                        <div class="form-text">Select2's default matcher will ignore diacritics, making it easier for users to filter results in international selects. Type <strong>"aero"</strong> into the select above</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Clearing results</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a state" class="form-control select" data-allow-clear="true">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL" selected>Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>

                        <div class="form-text">Whether or not a clear button is displayed when the select box has a selection. The button, when clicked, resets the value of the select box back to the placeholder</div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Programmatic access</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Set and get value</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" class="form-control select-access-value">
                                <option></option>
                                <option value="CA">California</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-set">Set to California</button>
                                <button type="button" class="btn btn-light access-get">Alert selected value</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Enable and disable menu</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" class="form-control select-access-enable">
                                <option></option>
                                <option value="CA">California</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-disable">Disable</button>
                                <button type="button" class="btn btn-light access-enable">Enable</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Destroy and create menu</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" class="form-control select-access-create">
                                <option></option>
                                <option value="CA">California</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-destroy">Destroy</button>
                                <button type="button" class="btn btn-light access-create">Create</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Open and close menu</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" class="form-control select-access-open">
                                <option></option>
                                <option value="CA">California</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-open">Open</button>
                                <button type="button" class="btn btn-light access-close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /single select -->


    <!-- Multiple select -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Multiple select</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Multiple Select2 select is a very extensive alternative to regular multiple select, where selected options are displayed as inline list of pills. It also supports various features such as remote data sets, programmatic control, internationalization, tagging, grouping, real time filtering and more. Check out some examples of multiple select with various options below:</p>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Basic examples</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Multiple select</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" class="form-control select">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA" selected>Iowa</option>
                                <option value="KS" selected>Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Fixed width select</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" class="form-control select" data-width="400">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS" selected>Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">With placeholder</label>
                    <div class="col-lg-9">
                        <select data-placeholder="Select a State..." multiple="multiple" class="form-control select">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">With icons</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" data-placeholder="Select a state..." class="form-control select-icons">
                            <option value="slack" data-icon="slack-logo" selected>Slack</option>
                            <option value="instagram" data-icon="instagram-logo">Instagram</option>
                            <option value="telegram" data-icon="telegram-logo" selected>Telegram</option>
                            <option value="whatsapp" data-icon="whatsapp-logo">Whatsapp</option>
                            <option value="twitter" data-icon="twitter-logo">Twitter</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Disabled search</label>
                    <div class="col-lg-9">
                        <select class="form-control select-multiple-search-disabled" multiple="multiple">
                            <option value="AZ" selected>Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                            <option value="IL" selected>Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Disable menu items</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" class="form-control select">
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ" disabled>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID" disabled>Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR" selected>Arkansas</option>
                                <option value="KS">Kansas</option>
                                <option value="KY" disabled>Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Disabled select</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" class="form-control select" disabled>
                            <option value="AZ" selected>Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID" selected>Idaho</option>
                            <option value="WY" selected>Wyoming</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Input group</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Left addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Right addon</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Left button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <button type="button" class="btn btn-success">Button</button>
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Right button</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                            <button type="button" class="btn btn-success">Button</button>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Multiple selects</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ" selected>Arizona</option>
                                    <option value="CO" selected>Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL" selected>Alabama</option>
                                    <option value="AR" selected>Arkansas</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Mix with text input</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class="form-control select" data-placeholder="Select state" multiple data-width="1%">
                                <option></option>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO" selected>Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Input placeholder">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Sizing</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Large size</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID" selected>Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA" selected>Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Default size</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control select">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL" selected>Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Small size</label>
                    <div class="col-lg-9">
                        <select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm">
                            <option></option>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY" selected>Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Advanced examples</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Tagging support</label>
                    <div class="col-lg-9">
                        <select class="form-control select" multiple="multiple" data-tags="true">
                            <option value="AZ">Arizona</option>
                            <option value="CO" selected>Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                            <option value="AL" selected>Alabama</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                        </select>

                        <div class="form-text">Select2 can be used to quickly set up fields used for tagging. When tagging is enabled the user can select from pre-existing tags or create a new tag by picking the first choice</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Maximum input length</label>
                    <div class="col-lg-9">
                        <select class="form-control select" multiple="multiple" data-tags="true" data-maximum-input-length="5">
                            <option value="AZ">Arizona</option>
                            <option value="CO" selected>Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                            <option value="AL" selected>Alabama</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                        </select>

                        <div class="form-text">Select2 can be set a limit on the number of characters that can be entered per tag. You would not be able to enter any input of more than 5 characters long</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Auto tokenization</label>
                    <div class="col-lg-9">
                        <select class="form-control select" multiple="multiple" data-tags="true" data-token-separators="[',', ' ']">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                            <option value="AL" selected>Alabama</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                        </select>

                        <div class="form-text">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Limiting the number of selections</label>
                    <div class="col-lg-9">
                        <select class="form-control select" multiple="multiple" data-maximum-selection-length="3">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                            <option value="AL">Alabama</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY" selected>Kentucky</option>
                        </select>

                        <div class="form-text">Select2 multi-value select boxes can set restrictions regarding the maximum number of options selected. The select below is declared with <code>maximumSelectionLength</code> option</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Diacritics support</label>
                    <div class="col-lg-9">
                        <select class="form-control select" data-placeholder="Type 'aero'" multiple="multiple">
                            <option>Aeróbics</option>
                            <option>Aeróbics en Agua</option>
                            <option>Aerografía</option>
                            <option>Aeromodelaje</option>
                            <option>Águilas</option>
                            <option>Ajedrez</option>
                            <option>Ala Delta</option>
                            <option>Álbumes de Música</option>
                            <option>Alusivos</option>
                            <option>Análisis de Escritura a Mano</option>
                        </select>

                        <div class="form-text">Select2's default matcher will ignore diacritics, making it easier for users to filter results in international selects. Type <strong>"aero"</strong> into the select above</div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="fw-bold border-bottom pb-2 mb-3">Programmatic access</div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Reacting to external value changes</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-value">
                                <option value="AK">Alaska</option>
                                <option value="CA">California</option>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light change-to-ca">Select California</button>
                                <button type="button" class="btn btn-light change-to-ak-co">Select Alaska and Colorado</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Enable and disable menu</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-enable">
                                <option value="AK">Alaska</option>
                                <option value="CA">California</option>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-multiple-disable">Disable</button>
                                <button type="button" class="btn btn-light access-multiple-enable">Enable</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Destroy and create menu</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-create">
                                <option value="AK">Alaska</option>
                                <option value="CA">California</option>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-multiple-destroy">Destroy</button>
                                <button type="button" class="btn btn-light access-multiple-create">Create</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Clear selection</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select states" multiple="multiple" class="form-control select-access-multiple-clear">
                                <option value="AK">Alaska</option>
                                <option value="CA">California</option>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-multiple-clear">Clear selection</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">Open and close menu</label>
                    <div class="col-lg-9">
                        <div class="d-md-flex">
                            <select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-open">
                                <option value="AK">Alaska</option>
                                <option value="CA">California</option>
                                <option value="AZ" selected>Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY" selected>Wyoming</option>
                                <option value="CT">Connecticut</option>
                            </select>

                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="button" class="btn btn-light access-multiple-open">Open</button>
                                <button type="button" class="btn btn-light access-multiple-close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /multiple select -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_select2.js')}}"></script>
@endsection
