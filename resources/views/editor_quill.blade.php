@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Editors @endslot
@slot('subtitle') Quill @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic example -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic example</h5>
        </div>

        <div class="card-body">
            Quill is a free, open source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need. Quill provides granular access to the editor's content, changes and events through a simple API. Works consistently and deterministically with JSON as both input and output.
        </div>

        <div class="border-top">
            <div class="quill-basic">
                <h2>Apollo 11</h2>
                <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
                <p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
                <br>
                <h5>Technical details</h5>
                <p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                <br>
                <ul>
                    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                </ul>
                <br>
                <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>
                <br>
                Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
            </div>
        </div>
    </div>
    <!-- /basic example -->


    <!-- Full featured example -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Full featured example</h5>
        </div>

        <div class="card-body">
            Quill supports a number of formats, both in UI controls and API calls. By default all formats are enabled and allowed to exist within a Quill editor and can be configured with the formats option. This is separate from adding a control in the Toolbar. For example, you can configure Quill to allow bolded content to be pasted into an editor that has no bold button in the toolbar. This example demonstrates all evailable formats.
        </div>

        <div class="border-top">
            <div class="quill-full">
                <h2>Apollo 11</h2>
                <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
                <p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
                <br>
                <h5>Technical details</h5>
                <p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                <br>
                <ul>
                    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                </ul>
                <br>
                <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>
                <br>
                Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
            </div>
        </div>
    </div>
    <!-- /full featured example -->


    <!-- Placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Placeholder</h5>
        </div>

        <div class="card-body">
            Quill supports 2 content options: filled and empty. When in empty state, you can show a custom placeholder defined in <code>placeholder</code> config option. To show some content by default, simply add it in your <code>&lt;div></code> container where Quill is initialized. Placeholder style can be edited in CSS, in <code>.ql-blank</code> class. Placeholder gets overridden also when editor already has some content on load, so it's recommended to always have placeholder enabled.
        </div>

        <div class="border-top">
            <div class="quill-placeholder"></div>
        </div>
    </div>
    <!-- /placeholder -->


    <!-- Scrollable editor -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Scrollable editor</h5>
        </div>

        <div class="card-body">
            By default Quill editor auto grow its height. You can disable this feature by setting <code>scrollingContainer</code> option to <code>.quill-scrollable-container</code> and wrap main Quill container in <code>&lt;div class="quill-scrollable-container" /></code>. It will limit maximum height of content area to <code>20rem</code> and add a scrollbar when height reaches the limit.
        </div>

        <div class="quill-scrollable-container border-top">
            <div class="quill-scrollable">
                <h2>Apollo 11</h2>
                <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
                <p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>
                <br>
                <h5>Technical details</h5>
                <p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                <br>
                <ul>
                    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                </ul>
                <br>
                <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>
                <br>
                <h5>Return</h5>
                <p>Eagle rendezvoused with Columbia at 21:24 UTC on July 21, and the two docked at 21:35. Eagle's ascent stage was jettisoned into lunar orbit at 23:41. Just before the Apollo 12 flight, it was noted that Eagle was still likely to be orbiting the Moon. On July 23, the last night before splashdown, the three astronauts made a television broadcast in which Collins commented:</p>
                <br>
                <blockquote>... The Saturn V rocket which put us in orbit is an incredibly <a href="#">complicated</a> piece of machinery, every piece of which worked flawlessly ... We have always had confidence that this equipment will work properly. All this is possible only through the blood, sweat, and tears of a number of people ... All you see is the three of us, but beneath the surface are thousands and thousands of others, and to all of those, I would like to say, "Thank you very much."</blockquote>
                <br>
                Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
            </div>
        </div>
    </div>
    <!-- /scrollable editor -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/editors/quill/quill.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/editor_quill.js')}}"></script>
@endsection
