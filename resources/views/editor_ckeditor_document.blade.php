@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Editors @endslot
@slot('subtitle') CKEditor Document @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Document editor -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Document editor</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">The document editor build designed for document editing with a customized UI representing the layout of a sheet of paper. It was created on top of the <code>DecoupledEditor</code> class and makes the best of what it offers: the freedom to choose the location of the crucial UI elements in the application. The editor in this example is a feature–rich build focused on rich text editing experience similar to the native word processors. It works best for creating documents which are usually later printed or exported to PDF files.</p>

            <form action="#">
                <div class="mb-3">
                    <div class="document-editor" id="document_editor_basic">
                        <div class="document-editor-toolbar"></div>
                        <div class="document-editor-container">
                            <div class="document-editor-editable">
                                <h2 style="text-align:center;">The Flavorful Tuscany Meetup</h2>
                                <h3 style="text-align:center;">Welcome letter</h3>

                                <p>Dear Guest,</p>
                                <p>We are delighted to welcome you to the annual <i>Flavorful Tuscany Meetup</i> and hope you will enjoy the programme as well as your stay at the <a href="http://ckeditor.com">Bilancino Hotel</a>.</p>
                                <p>Please find below the full schedule of the event.</p>

                                <figure class="table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Saturday, July 14</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>9:30 AM - 11:30 AM</td>
                                                <td>
                                                    <p><strong>Americano vs. Brewed</strong> - “know your coffee” with:&nbsp;</p>
                                                    <ul style="list-style-type:circle;">
                                                        <li>Giulia Bianchi</li>
                                                        <li>Stefano Garau</li>
                                                        <li>Giuseppe Russo</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1:00 PM - 3:00 PM</td>
                                                <td>
                                                    <p><strong>Pappardelle al pomodoro</strong> - live cooking</p>
                                                    <p>Incorporate the freshest ingredients&nbsp;<br>with Rita Fresco</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5:00 PM - 8:00 PM</td>
                                                <td><strong>Tuscan vineyards at a glance</strong> - wine-tasting&nbsp;<br>with Frederico Riscoli</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </figure>

                                <blockquote>
                                    <p>The annual Flavorful Tuscany meetups are always a culinary discovery. You get the best of Tuscan flavors during an intense one-day stay at one of the top hotels of the region. All the sessions are lead by top chefs passionate about their profession. I would certainly recommend to save the date in your calendar for this one!</p>

                                    <p>Angelina Calvino, food journalist</p>
                                </blockquote>

                                <p>Please arrive at the <a href="http://ckeditor.com">Bilancino Hotel</a> reception desk <span style="background-color:hsl(60, 75%, 60%)">at least half an hour earlier</span> to make sure that the registration process goes as smoothly as possible.</p>

                                <p>We look forward to welcoming you to the event.</p>
                                <p><img class="image_resized" style="width: 180px;" src="https://c.cksource.com/a/1/img/docs/signature.png" alt="Victoria Valc signature" /></p>
                                <p><strong>Victoria Valc</strong></p>
                                <p><strong>Event Manager</strong></p>
                                <p><strong>Bilancino Hotel</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /document editor -->


    <!-- Empty with placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Empty with placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">CKEditor can display a configurable placeholder text when the content is empty. The placeholder helps users locate the editor in the application and prompts to input the content. It works similarly to the native DOM placeholder attribute used by inputs. Placeholder can be set using the placeholder attribute of a textarea or via <code>placeholder</code> option in editor configuration.</p>

            <form action="#">
                <div class="mb-3">
                    <div class="document-editor" id="document_editor_empty">
                        <div class="document-editor-toolbar"></div>
                        <div class="document-editor-container">
                            <div class="document-editor-editable">
                                Type your text here...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /empty with placeholder -->


    <!-- Read-only mode -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Readonly mode</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">The editor can be set into a read-only mode by changing the value of the <code>Editor#isReadOnly</code> property. The read-only mode may have several applications. It may be used to impose user-based access restriction, where a selected user or a group of users is only allowed to access the content for evaluation purposes but not change it. The feature may also be used to view content that should not be edited, like financial reports, software logs or reprinted stories. While not editable, this content will still be accessible for copying or for screen readers.</p>

            <p class="mb-3">
                <button type="button" class="btn btn-dark" id="ckeditor_document_readonly_toggle">
                    <i class="ph-eye-slash me-2"></i>
                    Switch to read-only mode
                </button>
            </p>

            <form action="#">
                <div class="mb-3">
                    <div class="document-editor" id="document_editor_readonly">
                        <div class="document-editor-toolbar"></div>
                        <div class="document-editor-container">
                            <div class="document-editor-editable">
                                <h2 style="text-align:center;">The Flavorful Tuscany Meetup</h2>
                                <h3 style="text-align:center;">Welcome letter</h3>

                                <p>Dear Guest,</p>
                                <p>We are delighted to welcome you to the annual <i>Flavorful Tuscany Meetup</i> and hope you will enjoy the programme as well as your stay at the <a href="http://ckeditor.com">Bilancino Hotel</a>.</p>
                                <p>Please find below the full schedule of the event.</p>

                                <figure class="table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Saturday, July 14</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>9:30 AM - 11:30 AM</td>
                                                <td>
                                                    <p><strong>Americano vs. Brewed</strong> - “know your coffee” with:&nbsp;</p>
                                                    <ul style="list-style-type:circle;">
                                                        <li>Giulia Bianchi</li>
                                                        <li>Stefano Garau</li>
                                                        <li>Giuseppe Russo</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1:00 PM - 3:00 PM</td>
                                                <td>
                                                    <p><strong>Pappardelle al pomodoro</strong> - live cooking</p>
                                                    <p>Incorporate the freshest ingredients&nbsp;<br>with Rita Fresco</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5:00 PM - 8:00 PM</td>
                                                <td><strong>Tuscan vineyards at a glance</strong> - wine-tasting&nbsp;<br>with Frederico Riscoli</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </figure>

                                <blockquote>
                                    <p>The annual Flavorful Tuscany meetups are always a culinary discovery. You get the best of Tuscan flavors during an intense one-day stay at one of the top hotels of the region. All the sessions are lead by top chefs passionate about their profession. I would certainly recommend to save the date in your calendar for this one!</p>

                                    <p>Angelina Calvino, food journalist</p>
                                </blockquote>

                                <p>Please arrive at the <a href="http://ckeditor.com">Bilancino Hotel</a> reception desk <span style="background-color:hsl(60, 75%, 60%)">at least half an hour earlier</span> to make sure that the registration process goes as smoothly as possible.</p>

                                <p>We look forward to welcoming you to the event.</p>
                                <p><img class="image_resized" style="width: 180px;" src="https://c.cksource.com/a/1/img/docs/signature.png" alt="Victoria Valc signature" /></p>
                                <p><strong>Victoria Valc</strong></p>
                                <p><strong>Event Manager</strong></p>
                                <p><strong>Bilancino Hotel</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /read-only mode -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/editors/ckeditor/ckeditor_document.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/editor_ckeditor_document.js')}}"></script>
@endsection
