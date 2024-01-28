@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Editors @endslot
@slot('subtitle') CKEditor Classic @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- CKEditor default -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Classic editor</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Classic editor is what most users traditionally learnt to associate with a rich text editor — a toolbar with an editing area placed in a specific position on the page, usually as a part of a form that you use to submit some content to the server. During its initialization the editor hides the used editable element on the page and renders “instead” of it. This is why it is usually used to replace <code>&lt;textarea></code> elements.</p>

            <form action="#">
                <div class="mb-3">
                    <textarea class="form-control" id="ckeditor_classic_prefilled">
										<h1>Apollo 11</h1>
										<figure class="image image-style-side">
											<img src="https://c.cksource.com/a/1/img/sample.jpg" alt="Saturn V carrying Apollo 11.">
											<figcaption>Leaving your comfort zone might lead you to such beautiful sceneries like this one.</figcaption>
										</figure>

										<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

										<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

										<h5>Technical details</h5>
										<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
										<ol>
											<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
											<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
											<li><strong>Lunar Module</strong> for landing on the Moon.</li>
										</ol>
										<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

										<h5>Mission crew</h5>

										<table style="width: 100%">
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

										Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
									</textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /CKEditor default -->


    <!-- Empty with placeholder -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Empty with placeholder</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">CKEditor can display a configurable placeholder text when the content is empty. The placeholder helps users locate the editor in the application and prompts to input the content. It works similarly to the native DOM placeholder attribute used by inputs. Placeholder can be set using the placeholder attribute of a textarea or via <code>placeholder</code> option in editor configuration.</p>

            <form action="#">
                <div class="mb-3">
                    <textarea class="form-control" id="ckeditor_classic_empty" placeholder="Enter your text..."></textarea>
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
                <button type="button" class="btn btn-light" id="ckeditor_classic_readonly_toggle">
                    <i class="ph-eye-slash me-2"></i>
                    Switch to read-only mode
                </button>
            </p>

            <form action="#">
                <div class="mb-3">
                    <textarea class="form-control" id="ckeditor_classic_readonly">
										<h1>Apollo 11</h1>
										<figure class="image image-style-side">
											<img src="https://c.cksource.com/a/1/img/sample.jpg" alt="Saturn V carrying Apollo 11.">
											<figcaption>Leaving your comfort zone might lead you to such beautiful sceneries like this one.</figcaption>
										</figure>

										<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

										<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

										<h5>Technical details</h5>
										<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
										<ol>
											<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
											<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
											<li><strong>Lunar Module</strong> for landing on the Moon.</li>
										</ol>
										<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

										<h5>Mission crew</h5>

										<table style="width: 100%">
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

										Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
									</textarea>
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
<script src="{{URL::asset('assets/js/vendor/editors/ckeditor/ckeditor_classic.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/editor_ckeditor_classic.js')}}"></script>
@endsection
