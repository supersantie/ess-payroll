@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Text Styling @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Text color options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Contextual text colors</h5>
        </div>

        <div class="card-body">
            Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles. Contextual text classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code>.text-white</code> and <code>.text-muted</code> class has no link styling</strong>. You can also easily set the background of an element to any contextual class.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Text</th>
                        <th style="width: 20%;">Link</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-muted">Muted text color</span></td>
                        <td><a href="#" class="text-muted">Muted link color</a></td>
                        <td>For muted inline text and text link color use <code>.text-muted</code> class added to the link or text container</td>
                    </tr>
                    <tr>
                        <td><span class="text-secondary">Secondary text color</span></td>
                        <td><a href="#" class="link-secondary">Secondary link color</a></td>
                        <td>For secondary inline text and text link color use <code>.text-secondary</code> class in text element and <code>.link-secondary</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-dark">Dark text color</span></td>
                        <td><a href="#" class="link-dark">Dark link color</a></td>
                        <td>For dark inline text and text link color use <code>.text-dark</code> class in text element and <code>.link-dark</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-body">Default text color</span></td>
                        <td><a href="#" class="link-body">Default link color</a></td>
                        <td>For default inline text and text link color use <code>.text-body</code> class in text element and <code>.link-body</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-primary">Primary text color</span></td>
                        <td><a href="#" class="link-primary">Primary link color</a></td>
                        <td>For primary inline text and text link color use <code>.text-primary</code> class in text element and <code>.link-primary</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-danger">Danger text color</span></td>
                        <td><a href="#" class="link-danger">Danger link color</a></td>
                        <td>For danger inline text and text link color use <code>.text-danger</code> class in text element and <code>.link-danger</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-success">Success text color</span></td>
                        <td><a href="#" class="link-success">Success link color</a></td>
                        <td>For success inline text and text link color use <code>.text-success</code> class in text element and <code>.link-success</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-warning">Warning text color</span></td>
                        <td><a href="#" class="link-warning">Warning link color</a></td>
                        <td>For warning inline text and text link color use <code>.text-warning</code> class in text element and <code>.link-warning</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-info">Info text color</span></td>
                        <td><a href="#" class="link-info">Info link color</a></td>
                        <td>For info inline text and text link color use <code>.text-info</code> class in text element and <code>.link-info</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-pink">Pink text color</span></td>
                        <td><a href="#" class="link-pink">Pink link color</a></td>
                        <td>For pink inline text and text link color use <code>.text-pink</code> class in text element and <code>.link-pink</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-purple">Purple text color</span></td>
                        <td><a href="#" class="link-purple">Purple link color</a></td>
                        <td>For purple inline text and text link color use <code>.text-purple</code> class in text element and <code>.link-purple</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-indigo">Indigo text color</span></td>
                        <td><a href="#" class="link-indigo">Indigo link color</a></td>
                        <td>For indigo inline text and text link color use <code>.text-indigo</code> class in text element and <code>.link-indigo</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="text-teal">Teal text color</span></td>
                        <td><a href="#" class="link-teal">Teal link color</a></td>
                        <td>For teal inline text and text link color use <code>.text-teal</code> class in text element and <code>.link-teal</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="bg-dark py-1 px-2 rounded"><span class="text-yellow">Yellow text color</span></span></td>
                        <td><span class="bg-dark py-1 px-2 rounded"><a href="#" class="link-yellow">Yellow link color</a></span></td>
                        <td>For yellow inline text and text link color use <code>.text-yellow</code> class in text element and <code>.link-yellow</code> in anchor</td>
                    </tr>
                    <tr>
                        <td><span class="bg-dark py-1 px-2 rounded"><span class="text-white">White text color</span></span></td>
                        <td><span class="bg-dark py-1 px-2 rounded"><a href="#" class="link-white">White link color</a></span></td>
                        <td>For white inline text and text link color use <code>.text-white</code> class in text element and <code>.link-white</code> in anchor</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /text color options -->


    <!-- Text options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Text options</h5>
        </div>

        <div class="card-body">Limitless template supports the majority of all possible text styling options - weights, sizes, styles and additional elements such as marks, abbreviations, keyboard inputs, sample and variable inputs etc. All these stylings can be applied any section heading, form components, content and UI elements just by adding proper class to the element. Basic text styles are included to BS framework by default, Limitless includes more extended typography.</div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 30%;">Example</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th colspan="3">Links</th>
                    </tr>
                    <tr>
                        <td><a href="#">This is a default link</a></td>
                        <td>Default style for <code>&lt;a></code> element</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-body">This is a text color link</a></td>
                        <td>To use a link with default text color link, add <code>.text-body</code> class</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="link-danger">This is a contextual color link</a></td>
                        <td>To use a link with contextual color link, add <code>.link-danger</code> or any other contextual class</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="link-purple">This is a custom color link</a></td>
                        <td>To use a link with custom color link, add <code>.link-purple</code> or any other text color class</td>
                    </tr>

                    <tr class="table-active">
                        <th colspan="3">Font weight</th>
                    </tr>
                    <tr>
                        <td>This is a <span class="fw-lighter">lighter text</span></td>
                        <td>For thin font weight use <code>.fw-lighter</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="fw-light">light text</span></td>
                        <td>For light font weight use <code>.fw-light</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="fw-normal">regular text</span></td>
                        <td>For forced regular font weight use <code>.fw-normal</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="fw-semibold">semibold text</span></td>
                        <td>For semibold font weight use <code>.fw-semibold</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="fw-bold">bold text</span></td>
                        <td>For bold font weight use <code>.fw-bold</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="fw-bolder">bolder text</span></td>
                        <td>For black font weight use <code>.fw-bolder</code> class</td>
                    </tr>

                    <tr class="table-active">
                        <th colspan="3">Font style</th>
                    </tr>
                    <tr>
                        <td>This is an <em>italic text</em></td>
                        <td>For italic font style use <code>em</code> tag or <code>.fst-italic</code> class</td>
                    </tr>
                    <tr>
                        <td>This is an <span class="text-uppercase">uppercase text</span></td>
                        <td>For uppercase text transformation use <code>.text-uppercase</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="text-lowercase">lowercase</span> text</td>
                        <td>For lowercase text transformation use <code>.text-lowercase</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <span class="text-capitalize">capitalized text</span></td>
                        <td>For capitalize text transformation use <code>.text-capitalize</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a <del>deleted text</del></td>
                        <td>For indicating blocks of text that have been deleted use the <code>&lt;del></code> tag</td>
                    </tr>
                    <tr>
                        <td>This is a <s>strikethrough text</s></td>
                        <td>For indicating blocks of text that are no longer relevant use the <code>&lt;s></code> tag</td>
                    </tr>
                    <tr>
                        <td>This is an <u>underlined text</u></td>
                        <td>To underline text use the <code>&lt;u></code> tag</td>
                    </tr>
                    <tr>
                        <td><span class="d-inline-block text-truncate" style="max-width: 180px;">This is a truncated text with an ellipsis</span></td>
                        <td>For longer content, you can add a <code>.text-truncate</code> class to truncate the text with an ellipsis</td>
                    </tr>

                    <tr class="table-active">
                        <th colspan="3">Font size</th>
                    </tr>
                    <tr>
                        <td><span class="fs-lg">This is a larger text size</span></td>
                        <td>For larger text size use <code>.fs-lg</code> class</td>
                    </tr>
                    <tr>
                        <td>This is a default text size</td>
                        <td>To reset any font size to default, use <code>.fs-base</code> class</td>
                    </tr>
                    <tr>
                        <td><span class="fs-sm">This is a smaller text size</span></td>
                        <td>For smaller text size use <code>.fs-sm</code> class</td>
                    </tr>
                    <tr>
                        <td><span class="fs-xs">This is a mini text size</span></td>
                        <td>For mini text size use <code>.fs-xs</code> class</td>
                    </tr>

                    <tr class="table-active">
                        <th colspan="3">Text elements</th>
                    </tr>
                    <tr>
                        <td>This is a <mark>highlighted</mark> text</td>
                        <td>For text highlighting in another context, use the <code>&lt;mark></code> tag</td>
                    </tr>
                    <tr>
                        <td>This is a <ins>inserted text</ins></td>
                        <td>For indicating additions to the document use the <code>&lt;ins></code> tag</td>
                    </tr>
                    <tr>
                        <td>Basic <abbr title="Abbr title" data-bs-popup="tooltip">abbreviation</abbr></td>
                        <td>For expanded text on abbr hover, use the <code>&lt;abbr></code> element</td>
                    </tr>
                    <tr>
                        <td><abbr title="Abbr title" data-bs-popup="tooltip" class="initialism">Abbreviation</abbr> with initialism</td>
                        <td>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size</td>
                    </tr>
                    <tr>
                        <td>Press <kbd>ctrl + ,</kbd> to edit</td>
                        <td>Use the <code>&lt;kbd></code> to indicate input that is typically entered via keyboard</td>
                    </tr>
                    <tr>
                        <td><var>y</var> = <var>m</var><var>x</var> + <var>b</var></td>
                        <td>Use the <code>&lt;var></code> to indicate variables</td>
                    </tr>
                    <tr>
                        <td><samp>This is a sample text</samp></td>
                        <td>Use the <code>&lt;samp></code> to indicate blocks sample output from a program</td>
                    </tr>
                    <tr>
                        <td><code>Inline code snippet</code></td>
                        <td>Wrap inline snippets of code with <code>&lt;code></code></td>
                    </tr>
                    <tr>
                        <td>This is a <sub>sub text</sub></td>
                        <td>Use <code>&lt;sub></code> tag to display subscripted text</td>
                    </tr>
                    <tr>
                        <td>This is a <sup>sup text</sup></td>
                        <td>Use <code>&lt;sup></code> tag to display superscripted text</td>
                    </tr>
                    <tr>
                        <td><small>Small text</small></td>
                        <td>Use <code>&lt;small></code> tag to display smaller text</td>
                    </tr>

                    <tr class="table-active">
                        <th colspan="3">Text alignment</th>
                    </tr>
                    <tr>
                        <td class="text-start">Left aligned text</td>
                        <td>For left text alignment, use <code>.text-start</code> alignment class. You can also use viewport classes <code>.text-[sm, md, lg, xl]-start</code> for better alignment control</td>
                    </tr>
                    <tr>
                        <td class="text-center">Centered text</td>
                        <td>For centered text, use <code>.text-center</code> alignment class. You can also use viewport classes <code>.text-[sm, md, lg, xl]-center</code> for better alignment control</td>
                    </tr>
                    <tr>
                        <td class="text-end">Right aligned text</td>
                        <td>For right text alignment, use <code>.text-end</code> alignment class. You can also use viewport classes <code>.text-[sm, md, lg, xl]-end</code> for better alignment control</td>
                    </tr>
                    <tr>
                        <td class="text-justify">Word break</td>
                        <td>Prevent long strings of text from breaking your components' layout by using <code>.text-break</code> class</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">No wrap text</td>
                        <td>For no wrap text, use <code>.text-nowrap</code> alignment class</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /text options -->

</div>
<!-- /content area -->

@endsection
