@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Job Search @endslot
@slot('subtitle') Apply @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Apply form -->
    <div class="card">
        <div class="card-body pb-0">
            <div class="d-lg-flex align-items-lg-center mb-3">
                <a href="#" class="d-block me-lg-3 mb-3 mb-lg-0">
                    <img src="{{URL::asset('assets/images/demo/brands/microsoft.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h5 class="mb-0">Interaction UX/UI Industrial Designer</h5>
                    <ul class="list-inline list-inline-bullet text-muted mt-1 mt-lg-0 mb-0">
                        <li class="list-inline-item">Utrecht, Netherlands</li>
                        <li class="list-inline-item">3 days ago</li>
                    </ul>
                </div>

                <div class="ms-lg-3 mt-2 mt-lg-0">
                    <a href="#" class="btn btn-primary"><i class="ph-check me-2"></i> Save this job</a>
                </div>
            </div>
        </div>

        <form action="#">
            <fieldset class="card-body pb-0">
                <h6 class="mb-3">Personal details</h6>

                <div class="mb-3">
                    <label class="form-label">First name: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter first name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Last name: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter last name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Repeat password: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Repeat password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone number:</label>
                    <input type="text" class="form-control" placeholder="Enter phone #">
                </div>

                <div>
                    <label class="form-label">Birth date:</label>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <select name="birth-month" class="form-select">
                                    <option value="" disabled="">Select month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <select name="birth-day" class="form-select">
                                    <option value="" disabled>Select day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="...">...</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <select name="birth-year" class="form-select">
                                    <option value="" disabled>Select year</option>
                                    <option value="1">1980</option>
                                    <option value="2">1981</option>
                                    <option value="3">1982</option>
                                    <option value="4">1983</option>
                                    <option value="5">1984</option>
                                    <option value="6">1985</option>
                                    <option value="7">1986</option>
                                    <option value="8">1987</option>
                                    <option value="9">1988</option>
                                    <option value="10">1989</option>
                                    <option value="11">1990</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="card-body pb-0">
                <h6 class="mt-1 mb-3">Your education</h6>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">School name: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter school name">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Specialization: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter specialization">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Degree level: <span class="text-danger">*</span></label>
                            <select name="level1" class="form-select">
                                <option value="" disabled>Choose an option...</option>
                                <option value="student">Student</option>
                                <option value="bsc">Bachelor</option>
                                <option value="msc">Master</option>
                                <option value="as">Associate</option>
                                <option value="phd">Doctorate</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Period: <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Start date (YYYY/MM/DD)">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="End date (YYYY/MM/DD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">School name: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter school name">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Specialization: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter specialization">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Degree level: <span class="text-danger">*</span></label>
                            <select name="level2" class="form-select">
                                <option value="" disabled>Choose an option...</option>
                                <option value="student">Student</option>
                                <option value="bsc">Bachelor</option>
                                <option value="msc">Master</option>
                                <option value="as">Associate</option>
                                <option value="phd">Doctorate</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Period: <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Start date (YYYY/MM/DD)">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="End date (YYYY/MM/DD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="card-body pb-0">
                <h6 class="mt-1 mb-3">Your experience</h6>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Location:</label>
                            <select name="location1" class="form-select">
                                <option value="" disabled>Choose an option</option>
                                <option value="netherlands">Netherlands</option>
                                <option value="hungary">Hungary</option>
                                <option value="uk">United Kingdom</option>
                                <option value="germany">Germany</option>
                                <option value="other">...</option>
                                <option value="spain">Spain</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Company: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter company name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Position: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter position">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Period: <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Start date (YYYY/MM/DD)">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="End date (YYYY/MM/DD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Location:</label>
                            <select name="location2" class="form-select">
                                <option value="" disabled>Choose an option...</option>
                                <option value="netherlands">Netherlands</option>
                                <option value="hungary">Hungary</option>
                                <option value="uk">United Kingdom</option>
                                <option value="germany">Germany</option>
                                <option value="other">...</option>
                                <option value="spain">Spain</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Company: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter company name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Position: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter position">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Period: <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Start date (YYYY/MM/DD)">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="End date (YYYY/MM/DD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Location:</label>
                            <select name="location3" class="form-select">
                                <option value="" disabled>Choose an option...</option>
                                <option value="netherlands">Netherlands</option>
                                <option value="hungary">Hungary</option>
                                <option value="uk">United Kingdom</option>
                                <option value="germany">Germany</option>
                                <option value="other">...</option>
                                <option value="spain">Spain</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Company: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter company name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Position: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter position">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Period: <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Start date (YYYY/MM/DD)">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="End date (YYYY/MM/DD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="card-body pb-0">
                <h6 class="mb-3">Upload files</h6>

                <div class="mb-3">
                    <label class="form-label">Upload your CV: <span class="text-danger">*</span></label>
                    <input type="file" class="form-control">
                    <div class="form-text">Accepted formats: doc, docx, pdf. Max file size 2Mb</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload cover letter: <span class="text-danger">*</span></label>
                    <input type="file" class="form-control">
                    <div class="form-text">Accepted formats: doc, docx, pdf. Max file size 2Mb</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload recommendations:</label>
                    <input type="file" class="form-control">
                    <div class="form-text">Accepted formats: doc, docx, pdf. Max file size 2Mb</div>
                </div>
            </fieldset>

            <fieldset class="card-body pb-0">
                <h6 class="mt-1 mb-3">Other information</h6>

                <div class="mb-3">
                    <label class="form-label">Where did you find us?</label>
                    <select name="source" class="form-select">
                        <option value="" disabled>Choose an option...</option>
                        <option value="monster">Monster.com</option>
                        <option value="linkedin">LinkedIn</option>
                        <option value="google">Google</option>
                        <option value="adwords">Google AdWords</option>
                        <option value="other">Other source</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="mb-2">Availability:</label>

                    <label class="form-check mb-2">
                        <input type="radio" name="availability" class="form-check-input">
                        <span class="form-check-label">Immediately</span>
                    </label>

                    <label class="form-check mb-2">
                        <input type="radio" name="availability" class="form-check-input">
                        <span class="form-check-label">1 - 2 weeks</span>
                    </label>

                    <label class="form-check mb-2">
                        <input type="radio" name="availability" class="form-check-input">
                        <span class="form-check-label">3 - 4 weeks</span>
                    </label>

                    <label class="form-check mb-2">
                        <input type="radio" name="availability" class="form-check-input">
                        <span class="form-check-label">More than 1 month</span>
                    </label>
                </div>

                <div>
                    <label class="form-label">Additional information:</label>
                    <textarea name="additional-info" rows="4" cols="4" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                </div>
            </fieldset>

            <fieldset class="card-body text-end">
                <button type="submit" class="btn btn-light">Cancel</button>
                <button type="submit" class="btn btn-primary ms-3">
                    Submit form
                    <i class="ph-paper-plane-tilt ms-2"></i>
                </button>
            </fieldset>
        </form>
    </div>
    <!-- /apply form -->

</div>
<!-- /content area -->

@endsection
