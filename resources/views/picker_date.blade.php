@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Color @endslot
@slot('subtitle') Date &amp; Time @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Daterange picker -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daterange picker</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">This date range picker component creates a dropdown menu from which a user can select a range of dates. If invoked with no options, it will present two calendars to choose a start and end date from. Optionally, you can provide a list of date ranges the user can select from instead of choosing dates from the calendars. Features include limiting the selectable date range, localizable strings and date formats, a single date picker mode, a time picker, and predefined date ranges.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Basic usage</div>
                        <p class="mb-3">Daterange picker with minimum configuration. You can customize it and limit the selectable date range, localize strings and date formats, show a single date picker mode, a time picker, and predefined date ranges.</p>

                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                            <input type="text" class="form-control daterange-basic" value="01/01/2020 - 01/31/2020">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Display week numbers</div>
                        <p class="mb-3">By default, date picker displays only day grid with day names. You can optionally display localized week numbers at the start of each week on the calendars. To do that, set <code>showWeekNumbers</code> to <code>true</code>.</p>

                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                            <input type="text" class="form-control daterange-weeknumbers" value="03/18/2020 - 03/23/2020">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Display time picker</div>
                        <p class="mb-3">In addition to days and weeks, you can also show 2 select boxes with time range. To show them, set <code>timePicker</code> option to <code>true</code>. Also use <code>timePickerIncrement</code> to change minutes increment and <code>timePicker24Hour</code> to change time format.</p>

                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                            <input type="text" class="form-control daterange-time" value="03/18/2020 - 03/23/2020">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Single date picker</div>
                        <p class="mb-3">Show only a single calendar to choose one date, instead of a range picker with two calendars. The start and end dates provided to your callback will be the same single date chosen. Just set <code>singleDatePicker</code> to <code>true</code>.</p>

                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                            <input type="text" class="form-control daterange-single" value="03/18/2020">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Text field attachment</div>
                        <p class="mb-3">Another example of basic range picker, but attached to a regular input field to demonstrate flexibility of configuration. You can attach it to any element: button or inline text, input field or heading. No extra config requred.</p>

                        <input type="text" class="form-control daterange-basic" value="03/18/2020 - 03/23/2020">
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Button class options</div>
                        <p class="mb-3">Use 3 options to customize action buttons: <code>buttonClasses</code> to change classes in both apply and cancel buttons, <code>applyButtonClasses</code> to update classes in Apply button and <code>cancelButtonClasses</code> to update classes in Cancel button.</p>

                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                            <input type="text" class="form-control daterange-buttons" value="03/18/2020 - 03/23/2020">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show picker on right</div>
                        <p class="mb-3">Default alignment of date picker if left. Use <code>opens</code> option with <code>'left'/'right'/'center'</code> values to change the alignment to right or center relalatively to the HTML element it's attached to. In RTL direction alignment is mirrored.</p>

                        <div class="input-group">
                            <input type="text" class="form-control daterange-left" value="03/18/2020 - 03/23/2020">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Display date dropdowns</div>
                        <p class="mb-3">Daterange picker doesn't allow you to quickly jump to specific year or month by default. Set <code>showDropdowns</code> option to <code>true</code> to display 2 select boxes with a list of years and months in the header area.</p>

                        <div class="input-group">
                            <input type="text" class="form-control daterange-datemenu" value="03/18/2020 - 03/23/2020">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">10 minute increments</div>
                        <p class="mb-3">As mentioned yearlier, minutes selection list is displayed with 30 minutes increment. You can modify this value with <code>timePickerIncrement</code> option. This example demonstrates 10 minutes increment.</p>

                        <div class="input-group">
                            <input type="text" class="form-control daterange-increments" value="08/01/2020 1:00 PM - 08/01/2020 1:30 PM">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Localization (ru)</div>
                        <p class="mb-3">Combination of daterange picker's <code>locale</code> and <code>ranges</code> options allow you to provide localized strings for buttons and labels, customize the date format, and change the first day of week for the calendars.</p>

                        <div class="input-group">
                            <input type="text" class="form-control daterange-locale" value="08/01/2020 1:00 PM - 08/01/2020 1:30 PM">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Pre-defined ranges &amp; callback</div>
                        <p class="mb-3">Daterange picker can also have pre-defined date ranges displayed as a list of ranges in menu format and an ability to select a custom range. Calendars are hidden by default and shown only when custom range is selected.</p>

                        <div class="input-group">
                            <input type="text" class="form-control daterange-predefined" placeholder="Select dates">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Date picker attached to the button</div>
                        <p class="mb-3">The following example demonstrates daterange picker attached to the button. The logic is similar to input field, but selected date range is appended to <code>&lt;span></code> element inside the button, to avoid overriding of other child elements.</p>

                        <button type="button" class="btn btn-danger daterange-ranges">
                            <i class="ph-calendar me-2"></i>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /daterange picker -->


    <!-- Date picker -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Date picker</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Date picker is a remake of widely used <a href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">Bootstrap Datepicker</a> written from scratch using vanilla JS to reproduce similar usability. Works in 3 modes: dropdown, inline and range. Also supports keyboard operations, localization, customization via SCSS/CSS and is dependency free. This specific version includes a few additions, custom design and re-uses Bootstrap classes for seamless integration with Bootstrap framework.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Basic usage</div>
                        <p class="mb-3">By default, Datepicker object is attached to an <code>&lt;input></code> element that is configured as a regular date picker displayed in dropdown. Aside from a couple of exceptions, config options can be updated dynamically using the <code>setOptions()</code> method.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-basic" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Hide when the date is selected</div>
                        <p class="mb-3">Date picker remains opened when date is selected and can be closed with pressing <kbd>Esc</kbd> key or clicking outside. If <code>autoHide</code> option is set to <code>true</code>, picker gets hidden immediately after a date is selected.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-autohide" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Show week numbers</div>
                        <p class="mb-3">If <code>calendarWeeks</code> option is set to <code>true</code>, week numbers will be displayed in the first column of days grid. Week numbers use ISO week-numbering year, which has 52 or 53 full weeks. That is 364 or 371 days instead of the usual 365 or 366 days.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-week-numbers" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Clearing selected date</div>
                        <p class="mb-3">Depending on specific use case, date picker can have a clear button that allows you to clear selected date in both input field and date picker itself. To show clear button, set <code>clearBtn</code> option to <code>true</code> in date picker configuration.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-clear-date" value="11/25/2021" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Today button</div>
                        <p class="mb-3">Today button allows you to quickly jump to today's date if you navigate away. It's displayed below the days grid on the same line with Clear button and is hidden by default. Set <code>todayBtn</code> option to <code>true</code> to enable it.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-date-today" placeholder="01/01/2022">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Disable week days</div>
                        <p class="mb-3">Date picker can have certain week days disabled. That's especially useful when you need to prevent users from selecting weekend days for instance. Use <code>daysOfWeekDisabled</code> option with an array of day numbers starting from <code>0</code> (Sunday).</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-weekdays-disabled" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Disable specific dates</div>
                        <p class="mb-3">Date picker can also have specific dates disabled. Useful when you need to disable public holidays or days with no available time slots. Supports array of date strings, date objects, time values or mix of those. Bear in mind date formatting.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-dates-disabled" value="01/12/2022" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Highlight week days</div>
                        <p class="mb-3">Date picker can also have week days highlighted with different color. Although you can highlight up to 6 days, they all can have only 1 general style. Use <code>daysOfWeekHighlighted</code> option with an array of numbers starting from <code>0</code> (Sunday).</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-days-highlighted" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Date range</div>
                        <p class="mb-3">Date range picker is essentially a wrapper/controller of 2 date pickers, which cannot be attached to elements that contain less than 2 <code>&lt;input></code> elements. Range picker supports almost all options from regular date picker and are applied to its start- and end-date pickers.</p>

                        <div class="input-group datepicker-range">
                            <input type="text" class="form-control" placeholder="From">
                            <input type="text" class="form-control" placeholder="To">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Date format</div>
                        <p class="mb-3">Date format can be easily changed in <code>format</code> config option. It must be declared using the combination of the predefined tokens and separators. Alternatively to format string you can use object that contains custom parser and formatter functions.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-date-format" placeholder="Enter date in yyyy-mm-dd format">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Multiple dates</div>
                        <p class="mb-3">Regular date picker can be easily turned into multiple date picker with <code>maxNumberOfDates</code> option. Default value is <code>1</code>, no limit is applied if <code>0</code> is set. Additionally use <code>dateDelimiter</code> option to change dates separator in the input field.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-multiple-dates" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Minimum date</div>
                        <p class="mb-3">By default, date picker doesn't have minimum limit of selectable date and is infinite. To set minimum date that user can select, use <code>minDate</code> config option. You can use <code>String</code>, <code>Date</code> or <code>Number</code> date types.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-date-min" placeholder="Min date is 01/01/2022">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Maximum date</div>
                        <p class="mb-3">By default, date picker doesn't have maximum limit of selectable date and is infinite. To set maximum date that user can select, use <code>maxDate</code> config option. You can use <code>String</code>, <code>Date</code> or <code>Number</code> date types.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-date-max" placeholder="Max date is 01/01/2022">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Limit pick level</div>
                        <p class="mb-3">The level that the date picker allows to pick. Default value of <code>pickLevel</code> option is <code>0</code>, which corresponds to date. You can also use <code>1</code> to set month and <code>2</code> to set year. This example allows you to pick only a month and a year.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-pick-level" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Default view</div>
                        <p class="mb-3">The view displayed when the date picker opens. Default view can be changed with <code>startView</code> option, where allowed values are <code>0</code> (days, default), <code>1</code> (months), <code>2</code> (years) and <code>3</code> (decades). In this example start view is set to years.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-default-view" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Display title</div>
                        <p class="mb-3">Date picker can have a title shown in the date picker's title bar above month/year toolbar, use a string in <code>title</code> option to add it. Title bar is not displayed if the title is empty, this is a default behaviour.</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-with-title" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Start day of the week</div>
                        <p class="mb-3">Default start day of the week is Sunday, but this differs per country. You can change it to Monday by setting <code>weekStart</code> option value to <code>6</code>. The count starts from <code>0</code> (Sunday) to <code>6</code> (Saturday).</p>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ph-calendar"></i>
                            </span>
                            <input type="text" class="form-control datepicker-start-day" placeholder="Pick a date">
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">Date range one side</div>
                        <p class="mb-3">When <code>allowOneSidedRange</code> option is <code>false</code>, if the user selects a date on one side while the other side is blank, the date range picker complements the blank side with the same date as the selected side. The same is applied to the other side automatically.</p>

                        <div class="input-group datepicker-range-one-side">
                            <input type="text" class="form-control" placeholder="From">
                            <input type="text" class="form-control" placeholder="To">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /pickadate picker -->




    <!-- <div class="card">
						<div class="card-header">
							<h5 class="card-title">Daterange picker</h5>
						</div>

						<div class="card-body">
							<p class="mb-3">This date range picker component for <code>Bootstrap</code> creates a dropdown menu from which a user can select a range of dates. If invoked with no options, it will present two calendars to choose a start and end date from. Optionally, you can provide a list of date ranges the user can select from instead of choosing dates from the calendars.</p>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Basic date range picker:</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="ph-calendar"></i></span>
											</span>
											<input type="text" class="form-control flatpickr-basic" value="01-01-2020"> 
										</div>
									</div>

									<div class="form-group">
										<label>Display week numbers:</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
											<input type="text" class="form-control daterange-weeknumbers" value="03/18/2013 - 03/23/2013"> 
										</div>
									</div>

									<div class="form-group">
										<label>Display time picker:</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
											<input type="text" class="form-control daterange-time" value="03/18/2013 - 03/23/2013"> 
										</div>
									</div>

									<div class="form-group">
										<label>Basic single date picker:</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
											<input type="text" class="form-control daterange-single" value="03/18/2013">
										</div>
									</div>

									<div class="form-group">
										<label>Simple text field attachment:</label>
										<input type="text" class="form-control daterange-basic" value="03/18/2013 - 03/23/2013"> 
									</div>

									<div class="form-group">
										<label>Button class options:</label>
										<input type="text" class="form-control daterange-buttons" value="03/18/2013 - 03/23/2013"> 
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<label>Show picker on right:</label>
										<div class="input-group">
											<input type="text" class="form-control daterange-left" value="03/18/2013 - 03/23/2013"> 
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
										</div>
									</div>

									<div class="form-group">
										<label>Display date dropdowns:</label>
										<div class="input-group">
											<input type="text" class="form-control daterange-datemenu" value="03/18/2013 - 03/23/2013"> 
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
										</div>
									</div>

									<div class="form-group">
										<label>10 minute increments:</label>
										<div class="input-group">
											<input type="text" class="form-control daterange-increments" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
										</div>
									</div>

									<div class="form-group">
										<label>Localization (ru):</label>
										<div class="input-group">
											<input type="text" class="form-control daterange-locale" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>
										</div>
									</div>

									<div class="form-group">
										<label class="d-block">Pre-defined ranges &amp; callback:</label>
										<button type="button" class="btn btn-light daterange-predefined">
											<i class="icon-calendar22 me-2"></i>
											<span></span>
										</button>
									</div>

									<div class="form-group">
										<label class="d-block">Date picker inside button:</label>
										<button type="button" class="btn btn-danger daterange-ranges">
											<i class="icon-calendar22 me-2"></i>
											<span></span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div> -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/pickers/daterangepicker.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/pickers/datepicker.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/picker_date.js')}}"></script>
@endsection
