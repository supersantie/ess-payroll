@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Helper Classes @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Helper classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Helper classes</h5>
        </div>

        <div class="card-body">
            Besides basic typography classes, helper classes are an extra set of additional predefined classes, that can be applied to different content or layout elements and components. Helper classes are custom additions mostly, written especially for current layout, except common BS helpers. Below is a summarized table with all available classes, descriptions and content type. Flex utilities are moved to a separate page and include various examples.
        </div>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Borders</span></td>
                    </tr>
                    <tr>
                        <td><code>.border-0</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Use this class to remove <strong>all</strong> borders from an element</td>
                    </tr>
                    <tr>
                        <td><code>.border-[side]-0</code><br><code>.border-[side]-[breakpoint]-0</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Use this class to remove specific borders. Available <strong>[side]</strong> options: <code>start</code>, <code>end</code>, <code>top</code>, <code>bottom</code>.</td>
                    </tr>
                    <tr>
                        <td><code>.border-width-0</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets border width to 0. Useful for inheriting other border properties</td>
                    </tr>
                    <tr>
                        <td><code>.border</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds a border to an element with pre-defined BS's default width and color properties</td>
                    </tr>
                    <tr>
                        <td><code>.border-width-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds the border to an element. Available <strong>[size]</strong> options: 0, 1, 2, 3, 4, 5</td>
                    </tr>
                    <tr>
                        <td><code>.border-width-[side]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Same as <code>.border-[size]</code>, but for specific <strong>[side]</strong>: <code>start</code>, <code>end</code>, <code>top</code>, <code>bottom</code></td>
                    </tr>
                    <tr>
                        <td><code>.border-[color]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes color of all element's borders. Supports all available color classes, including <code>transparent</code> option</td>
                    </tr>
                    <tr>
                        <td><code>.border-[side]-[color]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>If you need to change color of some specific border, use this class combination. Options for <strong>[side]</strong>: <code>left</code>, <code>right</code>, <code>top</code>, <code>bottom</code></td>
                    </tr>
                    <tr>
                        <td><code>.border-style-[dashed|dotted]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes border style from solid to dashed or dotted. Dashed borders also support top/bottom/left/right options</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Border radius</span></td>
                    </tr>
                    <tr>
                        <td><code>.rounded</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Rounds all borders. Default value is defined in <code>$border-radius</code> variable</td>
                    </tr>
                    <tr>
                        <td><code>.rounded-[side]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Rounds borders of specific <strong>[side]</strong>: <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></td>
                    </tr>
                    <tr>
                        <td><code>.rounded-[side]-[start|end]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Rounds borders of 1 corner of specific vertical <strong>[side]</strong>: <code>top</code>, <code>bottom</code></td>
                    </tr>
                    <tr>
                        <td><code>.rounded-0</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Removes rounded corners from all borders</td>
                    </tr>
                    <tr>
                        <td><code>.rounded-[side]-0</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Removes rounded corners from specific <strong>[side]</strong>: <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></td>
                    </tr>
                    <tr>
                        <td><code>.rounded-pill</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>100rem</code> border radius to all borders</td>
                    </tr>
                    <tr>
                        <td><code>.rounded-[side]-pill</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>100rem</code> border radius to specific <strong>[side]</strong>: <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></td>
                    </tr>
                    <tr>
                        <td><code>.rounded-circle</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>50%</code> border radius to all borders</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Transformations</span></td>
                    </tr>
                    <tr>
                        <td><code>.rotate-cw</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Rotates element <strong>clockwise</strong>. Options for <strong>[value]</strong>: <code>45</code>, <code>90</code>, <code>180</code> degrees</td>
                    </tr>
                    <tr>
                        <td><code>.rotate-ccw</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Rotates element <strong>counterclockwise</strong>. Options for <strong>[value]</strong>: <code>45</code>, <code>90</code>, <code>180</code> degrees</td>
                    </tr>
                    <tr>
                        <td><code>.spinner</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds infinite clockwise rotation</td>
                    </tr>
                    <tr>
                        <td><code>.spinner-reverse</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds infinite counterclockwise rotation</td>
                    </tr>
                    <tr>
                        <td><code>.translate-middle</code><br><code>.translate-middle-[x|y|start|top]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Centers element vertically and/or horizontally</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Positioning</span></td>
                    </tr>
                    <tr>
                        <td><code>.position-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes element's positiion. Available options for <strong>[value]</strong>: <code>relative</code>, <code>static</code>, <code>absolute</code>, <code>fixed</code>, <code>sticky</code></td>
                    </tr>
                    <tr>
                        <td><code>.fixed-[top|bottom]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Position an element at the top (bottom) of the viewport, from edge to edge</td>
                    </tr>
                    <tr>
                        <td><code>.sticky-[top|bottom]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Position an element at the top (bottom) of the viewport relatively to its parent</td>
                    </tr>
                    <tr>
                        <td><code>.top-[0|50|100|auto]</code></td>
                        <td class="text-muted">All except static</td>
                        <td>Resets <code>top</code> property for fixed, absolute and relative opsitions</td>
                    </tr>
                    <tr>
                        <td><code>.bottom-[0|50|100|auto]</code></td>
                        <td class="text-muted">All except static</td>
                        <td>Resets <code>bottom</code> property for fixed, absolute and relative opsitions</td>
                    </tr>
                    <tr>
                        <td><code>.start-[0|50|100|auto]</code></td>
                        <td class="text-muted">All except static</td>
                        <td>Resets <code>left</code> property for fixed, absolute and relative opsitions</td>
                    </tr>
                    <tr>
                        <td><code>.end-[0|50|100|auto]</code></td>
                        <td class="text-muted">All except static</td>
                        <td>Resets <code>right</code> property for fixed, absolute and relative opsitions</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Alignment</span></td>
                    </tr>
                    <tr>
                        <td><code>.float-[side]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Element floating. Options for <strong>[side]</strong>: <code>start</code>, <code>end</code> sides</td>
                    </tr>
                    <tr>
                        <td><code>.float-[breakpoint]-[side]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Responsive variations of element floating. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.float-none</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Removes floating</td>
                    </tr>
                    <tr>
                        <td><code>.clearfix</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Easily clear floats by adding <code>.clearfix</code> to the element</td>
                    </tr>
                    <tr>
                        <td><code>.text-[side]</code></td>
                        <td class="text-muted">Inline element, text</td>
                        <td>Element alignment. Options for <strong>[side]</strong>: <code>left</code>, <code>center</code>, <code>right</code> sides</td>
                    </tr>
                    <tr>
                        <td><code>.text-[breakpoint]-[side]</code></td>
                        <td class="text-muted">Inline element, text</td>
                        <td>Responsive variations of element alignment. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.align-[value]</code></td>
                        <td class="text-muted">Inline element, table</td>
                        <td>Vertical alignment. Options for <strong>[value]</strong>: <code>baseline</code>, <code>top</code>, <code>middle</code>, <code>bottom</code>, <code>text-top</code> and <code>text-bottom</code></td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Images</span></td>
                    </tr>
                    <tr>
                        <td><code>.img-fluid</code></td>
                        <td class="text-muted">Images only</td>
                        <td>Applies max-width: 100%; and height: auto; to the image so that it scales nicely to the parent element</td>
                    </tr>
                    <tr>
                        <td><code>.img-thumbnail</code></td>
                        <td class="text-muted">Images only</td>
                        <td>Adds grey frame with white background color</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Sizing</span></td>
                    </tr>
                    <tr>
                        <td><code>.wmin-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets a minimum width of the element in pixels. Available options for <strong>[value]</strong>: <code>200</code>, <code>250</code>, <code>300</code>, <code>350</code>, <code>400</code>, <code>450</code>, <code>500</code>, <code>550</code>, <code>600</code> pixels</td>
                    </tr>
                    <tr>
                        <td><code>.wmin-[breakpoint]-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Responsive variations of width utilities. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.mw-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets a maximum width of the element in pixels. Available option for <strong>[value]</strong> is <code>100%</code></td>
                    </tr>
                    <tr>
                        <td><code>.vw-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets viewport container width in <code>vw</code>. Available option for <strong>[value]</strong> is <code>100</code></td>
                    </tr>
                    <tr>
                        <td><code>.min-vw-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets viewport container min-width in <code>vw</code>. Available option for <strong>[value]</strong> is <code>100</code></td>
                    </tr>
                    <tr>
                        <td><code>.w-[responsive value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets a responsive <strong>width</strong> of the element in percents. Values are: [25, 50, 75, 100, auto]. Supports breakpoints</td>
                    </tr>
                    <tr>
                        <td><code>.w-[fixed values]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets a responsive <strong>width</strong> of the element in pixels. Values are: 16px, 24px, 32px, 40px, 48px, 56px, 64px, 72px, 80px</td>
                    </tr>
                    <tr>
                        <td><code>.h-[responsive value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets a responsive <strong>height</strong> of the element in percents. Values are: [25, 50, 75, 100, auto]. Supports breakpoints</td>
                    </tr>
                    <tr>
                        <td><code>.h-[fixed values]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets a responsive <strong>height</strong> of the element in pixels. Values are: 16px, 24px, 32px, 40px, 48px, 56px, 64px, 72px, 80px</td>
                    </tr>
                    <tr>
                        <td><code>.vh-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets viewport container height in <code>vh</code>. Available option for <strong>[value]</strong> is <code>100</code></td>
                    </tr>
                    <tr>
                        <td><code>.min-vh-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Sets viewport container min-height in <code>vh</code>. Available option for <strong>[value]</strong> is <code>100</code></td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Visibility</span></td>
                    </tr>
                    <tr>
                        <td><code>.overflow-[value]</code></td>
                        <td class="text-muted">Containers</td>
                        <td>Content overflow utility. Available options for <strong>[value]</strong>: <code>hidden</code> - hides content, <code>visible</code> - shows content, <strong>auto</strong> - makes content scrollable, <strong>scroll</strong> - always displays scrollbar</td>
                    </tr>
                    <tr>
                        <td><code>.visible</code></td>
                        <td class="text-muted">Containers</td>
                        <td>Makes the element invisible for the user, but visible for screen readers</td>
                    </tr>
                    <tr>
                        <td><code>.invisible</code></td>
                        <td class="text-muted">Containers</td>
                        <td>Can be used to toggle only the visibility of an element, meaning its display is not modified and the element can still affect the flow of the document</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Display</span></td>
                    </tr>
                    <tr>
                        <td><code>.d-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Set of classes for <code>display</code> property. Values are: inline, inline-block, block, grid, table, table-row, table-cell, flex, inline-flex, none</td>
                    </tr>
                    <tr>
                        <td><code>.d-[breakpoint]-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Responsive variations of <code>d-[value]</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Spacing</span></td>
                    </tr>
                    <tr>
                        <td><code>.m-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>margin</code> property to <strong>all</strong> sides. Available <strong>[size]</strong> are: <code>0</code>, <code>1</code> ~ 5px, <code>2</code> ~ 10px, <code>3</code> ~ 20px, <code>4</code> ~ 30px, <code>5</code> ~ 40px, <code>auto</code></td>
                    </tr>
                    <tr>
                        <td><code>.m-[breakpoint]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Responsive variations of <code>.m-[size]</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.m[s,e,t,b,x,y]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>margin</code> property to the specific side: <code>s</code> - left (start), <code>e</code> - right (end), <code>t</code> - top, <code>b</code> - bottom, <code>x</code> - horizontal, <code>y</code> - vertical. Options for the size are the same</td>
                    </tr>
                    <tr>
                        <td><code>.m[s,e,t,b]-[breakpoint]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Same as for <code>.m-[breakpoint]-[size]</code>, except <code>x</code> and <code>y</code> options</td>
                    </tr>
                    <tr>
                        <td><code>.p-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>padding</code> property to <strong>all</strong> sides. Available <strong>[size]</strong> are: <code>0</code>, <code>1</code> ~ 5px, <code>2</code> ~ 10px, <code>3</code> ~ 20px, <code>4</code> ~ 30px, <code>5</code> ~ 40px, <code>auto</code></td>
                    </tr>
                    <tr>
                        <td><code>.p-[breakpoint]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Responsive variations of <code>.p-[size]</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code> screen sizes</td>
                    </tr>
                    <tr>
                        <td><code>.p[s,e,t,b,x,y]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds <code>padding</code> property to the specific side: <code>s</code> - left (start), <code>e</code> - right (end), <code>t</code> - top, <code>b</code> - bottom, <code>x</code> - horizontal, <code>y</code> - vertical. Options for the size are the same</td>
                    </tr>
                    <tr>
                        <td><code>.p[s,e,t,b]-[breakpoint]-[size]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Same as for <code>.p-[breakpoint]-[size]</code>, except <code>x</code> and <code>y</code> options</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Text</span></td>
                    </tr>
                    <tr>
                        <td><code>.font-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Sets/overrides font family. Available <strong>[value]</strong> options: <code>monospace</code>, <code>serif</code></td>
                    </tr>
                    <tr>
                        <td><code>.fs-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Sets/overrides font size. Available <strong>[value]</strong> options: <code>base</code> ~ 14px, <code>xs</code> ~ 12px; <code>sm</code> - 13px, <code>lg</code> ~ 15px</td>
                    </tr>
                    <tr>
                        <td><code>.fw-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Sets/overrides font weight. Available <strong>[value]</strong> options: <code>light</code>, <code>lighter</code>, <code>normal</code>, <code>medium</code>, <code>semibold</code>, <code>bold</code>, <code>bolder</code></td>
                    </tr>
                    <tr>
                        <td><code>.fst-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Sets/overrides font style. Available <strong>[value]</strong> options: <code>italic</code>, <code>normal</code></td>
                    </tr>
                    <tr>
                        <td><code>.lh-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Line height. Available <strong>[value]</strong> options: <code>base</code>, <code>xs</code>; <code>sm</code>, <code>lg</code> and <code>1</code></td>
                    </tr>
                    <tr>
                        <td><code>.text-decoration-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Text decoration. Available <strong>[value]</strong> options: <code>none</code>, <code>underline</code>, <code>line-through</code></td>
                    </tr>
                    <tr>
                        <td><code>.text-[value]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Various text styles. Available <strong>[value]</strong> options: <code>lowercase</code>, <code>uppercase</code>, <code>capitalize</code>, <code>wrap</code>, <code>nowrap</code>, <code>break</code></td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Color</span></td>
                    </tr>
                    <tr>
                        <td><code>.text-[color]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Sets text color. Available <strong>[value]</strong> options: <code>muted</code>, <code>white</code>, <code>dark</code>, <code>black</code>, <code>primary</code>, <code>secondary</code>, <code>danger</code>, <code>success</code>, <code>warning</code>, <code>info</code>, <code>pink</code>, <code>purple</code>, <code>indigo</code>, <code>teal</code>, <code>yellow</code></td>
                    </tr>
                    <tr>
                        <td><code>.link-[color]</code></td>
                        <td class="text-muted">Text</td>
                        <td>Sets text link color. Available <strong>[value]</strong> options: <code>muted</code>, <code>white</code>, <code>dark</code>, <code>black</code>, <code>primary</code>, <code>secondary</code>, <code>danger</code>, <code>success</code>, <code>warning</code>, <code>info</code>, <code>pink</code>, <code>purple</code>, <code>indigo</code>, <code>teal</code>, <code>yellow</code></td>
                    </tr>
                    <tr>
                        <td><code>.bg-[color]</code></td>
                        <td class="text-muted">Block and inline elements</td>
                        <td>Sets background color. Available <strong>[value]</strong> options: <code>muted</code>, <code>white</code>, <code>dark</code>, <code>black</code>, <code>primary</code>, <code>secondary</code>, <code>danger</code>, <code>success</code>, <code>warning</code>, <code>info</code>, <code>pink</code>, <code>purple</code>, <code>indigo</code>, <code>teal</code>, <code>yellow</code></td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Opacity</span></td>
                    </tr>
                    <tr>
                        <td><code>.opacity-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes opacity of an element. Available <strong>[value]</strong> options: 0, 25, 50, 75, 100</td>
                    </tr>
                    <tr>
                        <td><code>.border-opacity-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes border opacity. Supported values are: 0, 10, 15, 20, 25, 50, 75, 100</td>
                    </tr>
                    <tr>
                        <td><code>.text-opacity-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes text opacity. Supported values are: 0, 10, 15, 20, 25, 50, 75, 100</td>
                    </tr>
                    <tr>
                        <td><code>.bg-opacity-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes background color opacity. Supported values are: 0, 10, 15, 20, 25, 50, 75, 100</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Shadow</span></td>
                    </tr>
                    <tr>
                        <td><code>.shadow</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds box shadowto an element</td>
                    </tr>
                    <tr>
                        <td><code>.shadow-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Adds or removes box shadow. Supported values are: none, sm, lg</td>
                    </tr>

                    <tr class="table-light">
                        <td colspan="3"><span class="fw-semibold">Misc</span></td>
                    </tr>
                    <tr>
                        <td><code>.user-select-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Enable or disable selection. Available <strong>[value]</strong> options: all, auto, none</td>
                    </tr>
                    <tr>
                        <td><code>.pe-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes pointer events. Available <strong>[value]</strong> options: none, auto</td>
                    </tr>
                    <tr>
                        <td><code>.cursor-[value]</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Changes cursor style. Available <strong>[value]</strong> options: <code>move</code>, <code>pointer</code> and <code>default</code> styles</td>
                    </tr>
                    <tr>
                        <td><code>.filter-none</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Removes all CSS filters</td>
                    </tr>
                    <tr>
                        <td><code>.transition-none</code></td>
                        <td class="text-muted">Any element</td>
                        <td>Removes all CSS transitions</td>
                    </tr>
                    <tr>
                        <td><code>zindex</code></td>
                        <td class="text-muted">jQuery plugins</td>
                        <td>Resets z-index of an element. Values are: 1, auto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /helper classes -->

</div>
<!-- /content area -->

@endsection
