@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Editors @endslot
@slot('subtitle') Trumbowyg @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic initialization -->
    <div class="card">
        <div class="card-header border-bottom-0 pb-0">
            <h5 class="mb-0">Default initialization</h5>
        </div>

        <div class="card-body">
            Trumbowyg is a light, translatable and customisable jQuery plugin. Options and design are entirely configurable to suit your needs. However, the default design is compatible with Retina display and optimized for a great and simple user experience. No useless features, just the necessary ones to generate clean, semantic code.
        </div>

        <form class="border-top" action="#">
            <div id="trumbowyg_default">
                <h2>Apollo 11</h2>
                <div class="float-end ms-3"><img alt="Saturn V carrying Apollo 11" src="https://c.cksource.com/a/1/img/sample.jpg"></div>

                <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

                <p class="mb-3">Armstrong spent about <del>three and a half</del> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

                <h5 class="fw-semibold">Technical details</h5>
                <p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                <ol>
                    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                </ol>
                <p class="mb-3">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

                <h5 class="fw-semibold">Mission crew</h5>

                <div class="card card-table table-responsive shadow-none">
                    <table class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Astronaut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Commander</td>
                                <td>Neil A. Armstrong</td>
                            </tr>
                            <tr>
                                <td>Command Module Pilot</td>
                                <td>Michael Collins</td>
                            </tr>
                            <tr>
                                <td>Lunar Module Pilot</td>
                                <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
            </div>

            <div class="card-body text-end border-top">
                <button type="submit" class="btn btn-primary">Save changes <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /basic initialization -->


    <!-- Custom toolbar -->
    <div class="card">
        <div class="card-header border-bottom-0 pb-0">
            <h5 class="mb-0">Custom toolbar</h5>
        </div>

        <div class="card-body">
            Trumbowyg allows you to choose the buttons that appears in the button pane. The <code>btns</code> option is an array containing string values representing the buttons or vertical separators (using the pipe character). To create your own custom button pane, define an array and pass it to the <code>btns</code> option.
        </div>

        <form class="border-top" action="#">
            <div id="trumbowyg_custom">
                <h2>Apollo 11</h2>
                <div class="float-end ms-3"><img alt="Saturn V carrying Apollo 11" src="https://c.cksource.com/a/1/img/sample.jpg"></div>

                <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

                <p class="mb-3">Armstrong spent about <del>three and a half</del> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

                <h5 class="fw-semibold">Technical details</h5>
                <p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                <ol>
                    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                </ol>
                <p class="mb-3">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

                <h5 class="fw-semibold">Mission crew</h5>

                <div class="card card-table table-responsive shadow-none">
                    <table class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Astronaut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Commander</td>
                                <td>Neil A. Armstrong</td>
                            </tr>
                            <tr>
                                <td>Command Module Pilot</td>
                                <td>Michael Collins</td>
                            </tr>
                            <tr>
                                <td>Lunar Module Pilot</td>
                                <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
            </div>

            <div class="card-body text-end border-top">
                <button type="submit" class="btn btn-primary">Save changes <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /custom toolbar -->


    <!-- Additional plugins -->
    <div class="card">
        <div class="card-header border-bottom-0 pb-0">
            <h5 class="mb-0">Additional plugins</h5>
        </div>

        <div class="card-body">
            Trumbowyg editor comes with 10 optional plugins: <strong>base64</strong> - allows you to insert images inline as base64; <strong>clean paste</strong> - cleans up the HTML code before insert content into the editor; <strong>colors</strong> - adds foreground and background color selectors; <strong>emoji</strong> - allows you to insert some emojis in your editor; <strong>insert audio</strong> - inserts audio files; <strong>noembed</strong> - embed any content from a link; <strong>paste image</strong> - handles paste events; <strong>preformatted</strong> - wraps selected content in pre tag; <strong>template</strong> - manages custom HTML templates; <strong>upload</strong> - adds an upload front-end allowing users to upload an image with progress bar.
        </div>

        <form class="border-top" action="#">
            <div id="trumbowyg_plugins">
                <h2>Apollo 11</h2>
                <div class="float-end ms-3"><img alt="Saturn V carrying Apollo 11" src="https://c.cksource.com/a/1/img/sample.jpg"></div>

                <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

                <p class="mb-3">Armstrong spent about <del>three and a half</del> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

                <h5 class="fw-semibold">Technical details</h5>
                <p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                <ol>
                    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                </ol>
                <p class="mb-3">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

                <h5 class="fw-semibold">Mission crew</h5>

                <div class="card card-table table-responsive shadow-none">
                    <table class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Astronaut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Commander</td>
                                <td>Neil A. Armstrong</td>
                            </tr>
                            <tr>
                                <td>Command Module Pilot</td>
                                <td>Michael Collins</td>
                            </tr>
                            <tr>
                                <td>Lunar Module Pilot</td>
                                <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
            </div>

            <div class="card-body text-end border-top">
                <button type="submit" class="btn btn-primary">Save changes <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
    <!-- /additional plugins -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/trumbowyg.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/base64/trumbowyg.base64.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/cleanpaste/trumbowyg.cleanpaste.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/colors/trumbowyg.colors.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/insertaudio/trumbowyg.insertaudio.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/noembed/trumbowyg.noembed.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/preformatted/trumbowyg.preformatted.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/template/trumbowyg.template.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/upload/trumbowyg.upload.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/editors/trumbowyg/plugins/pasteimage/trumbowyg.pasteimage.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/editor_trumbowyg.js')}}"></script>
@endsection
