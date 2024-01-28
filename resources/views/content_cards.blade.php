@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Cards @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Card titles and subtitles -->
    <div class="mb-3">
        <h6 class="mb-0">Card titles and subtitles</h6>
        <span class="text-muted">Titles, subtitles and header elements</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Basic card example without header elements
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">Card title</h6>
                    <span class="ms-2">With inline subtitle</span>
                </div>

                <div class="card-body">
                    Card header with title and inline subtitle
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Card title</h6>
                    With block subtitle
                </div>

                <div class="card-body">
                    Card header with title and block subtitle
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">Card title</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                        <a class="text-body mx-2" data-card-action="reload">
                            <i class="ph-arrows-clockwise"></i>
                        </a>
                        <a class="text-body" data-card-action="remove">
                            <i class="ph-x"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body">
                        Basic card with card controls
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">Card title</h6>
                    <span class="ms-2">With inline subtitle</span>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                        <a class="text-body mx-2" data-card-action="reload">
                            <i class="ph-arrows-clockwise"></i>
                        </a>
                        <a class="text-body" data-card-action="remove">
                            <i class="ph-x"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body">
                        Card with inline header subtitle and card controls
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <div>
                        <h6 class="mb-0">Card title</h6>
                        With block subtitle
                    </div>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                        <a class="text-body mx-2" data-card-action="reload">
                            <i class="ph-arrows-clockwise"></i>
                        </a>
                        <a class="text-body" data-card-action="remove">
                            <i class="ph-x"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body">
                        Card with block header subtitle and card controls
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /card titles and subtitles -->


    <!-- Card titles -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card title options</h6>
        <span class="text-muted">Card heading font options for titles</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-lighter mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Card title with lighter font weight
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="fw-light mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Card title with light font weight
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="fw-normal mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Card title with regular font weight
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Card title with semibold font weight (default)
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="fw-bold mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Card title with bold font weight
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="fw-bold mb-0">Card <span class="fw-normal">title</span></h6>
                </div>

                <div class="card-body">
                    Mixing font weights in card title
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="text-uppercase mb-0">Card title</h6>
                </div>

                <div class="card-body">
                    Card title in uppercase
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-muted">Muted</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with muted color
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-primary">Primary</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with primary color
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-danger">Danger</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with danger color
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-success">Success</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with success color
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-warning">Warning</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with warning color
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-info">Info</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with info color
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default <span class="text-teal">Teal</span></h6>
                </div>

                <div class="card-body">
                    Mixing default color with custom color
                </div>
            </div>
        </div>
    </div>
    <!-- /card titles -->


    <!-- Card title sizes -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card title sizing</h6>
        <span class="text-muted">Card title font colors using standard html headings</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">H1 title</h1>
                </div>

                <div class="card-body">
                    H1 title heading using <code>&lt;h1 class="mb-0"></code> markup
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">H3 title</h3>
                </div>

                <div class="card-body">
                    H3 title heading using <code>&lt;h3 class="mb-0"></code> markup
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">H5 title</h5>
                </div>

                <div class="card-body">
                    H5 title heading using <code>&lt;h5 class="mb-0"></code> markup
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">H2 title</h2>
                </div>

                <div class="card-body">
                    H2 title heading using <code>&lt;h2 class="mb-0"></code> markup
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">H4 title</h4>
                </div>

                <div class="card-body">
                    H4 title heading using <code>&lt;h4 class="mb-0"></code> markup
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">H6 title</h6>
                </div>

                <div class="card-body">
                    H6 title heading using <code>&lt;h6 class="mb-0"></code> markup
                </div>
            </div>
        </div>
    </div>
    <!-- /card title sizes -->


    <!-- Header options -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card header options</h6>
        <span class="text-muted">Background, text and border colors</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Transparent header</h6>
                </div>

                <div class="card-body">
                    Default flat card style using <code>.card</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom-0 pb-0">
                    <h6 class="mb-0">Card title</h6>
                </div>
                <div class="card-body">
                    Display card header without bottom border
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light">
                    <h6 class="mb-0">Light header</h6>
                </div>

                <div class="card-body">
                    Card with light header color - add <code>.bg-light</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-dark border-bottom-0 text-white">
                    <h6 class="mb-0">Dark header</h6>
                </div>

                <div class="card-body">
                    Card with dark header color - add <code>.bg-dark</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white border-bottom-0">
                    <h6 class="mb-0">Primary header</h6>
                </div>

                <div class="card-body">
                    Card with primary header color - add <code>.bg-primary</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-secondary text-white border-bottom-0">
                    <h6 class="mb-0">Secondary header</h6>
                </div>

                <div class="card-body">
                    Card with secondary header color - add <code>.bg-secondary</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success text-white border-bottom-0">
                    <h6 class="mb-0">Green (success) header</h6>
                </div>

                <div class="card-body">
                    Card with green (success context) header - add <code>.bg-success</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-warning text-white border-bottom-0">
                    <h6 class="mb-0">Orange (warning) header</h6>
                </div>

                <div class="card-body">
                    Card with orange (warning context) header - add <code>.bg-warning</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-danger text-white border-bottom-0">
                    <h6 class="mb-0">Red (danger) header</h6>
                </div>

                <div class="card-body">
                    Card with red (danger context) header - add <code>.bg-danger</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info text-white border-bottom-0">
                    <h6 class="mb-0">Blue (info) header</h6>
                </div>

                <div class="card-body">
                    Card with blue (info context) header - add <code>.bg-info</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success bg-opacity-10 text-success">
                    <h6 class="mb-0">Custom light color</h6>
                </div>

                <div class="card-body">
                    Card header with custom light colors - add <code>.bg-[color].bg-opacity-10</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-teal text-white border-bottom-0">
                    <h6 class="mb-0">Custom dark color</h6>
                </div>

                <div class="card-body">
                    Card header with custom dark colors - add <code>.bg-*</code> class to card header container
                </div>
            </div>
        </div>
    </div>
    <!-- /header options -->


    <!-- Bordered cards title -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Bordered cards</h6>
        <span class="text-muted">Available card styles and colors</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0">Transparent header</h6>
                </div>

                <div class="card-body">
                    Default flat card style using <code>.card</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border shadow-sm">
                <div class="card-header border-bottom-0 pb-0">
                    <h6 class="mb-0">Card title</h6>
                </div>
                <div class="card-body">
                    Display card header without bottom border
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border shadow-sm">
                <div class="card-header bg-light">
                    <h6 class="mb-0">Light header</h6>
                </div>

                <div class="card-body">
                    Card with light header color - add <code>.bg-light</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border border-dark shadow-sm">
                <div class="card-header bg-dark text-white border-bottom-0">
                    <h6 class="mb-0">Dark header</h6>
                </div>

                <div class="card-body">
                    Card with dark header color - add <code>.bg-dark</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-primary shadow-sm">
                <div class="card-header bg-primary text-white border-bottom-0">
                    <h6 class="mb-0">Primary header</h6>
                </div>

                <div class="card-body">
                    Card with primary header color - add <code>.bg-primary</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border border-secondary shadow-sm">
                <div class="card-header bg-secondary text-white border-bottom-0">
                    <h6 class="mb-0">Secondary header</h6>
                </div>

                <div class="card-body">
                    Card with secondary header color - add <code>.bg-secondary</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-success shadow-sm">
                <div class="card-header bg-success text-white border-bottom-0">
                    <h6 class="mb-0">Green (success) header</h6>
                </div>

                <div class="card-body">
                    Card with green (success context) header - add <code>.bg-success</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border border-warning shadow-sm">
                <div class="card-header bg-warning text-white border-bottom-0">
                    <h6 class="mb-0">Orange (warning) header</h6>
                </div>

                <div class="card-body">
                    Card with orange (warning context) header - add <code>.bg-warning</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-danger shadow-sm">
                <div class="card-header bg-danger text-white border-bottom-0">
                    <h6 class="mb-0">Red (danger) header</h6>
                </div>

                <div class="card-body">
                    Card with red (danger context) header - add <code>.bg-danger</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border border-info shadow-sm">
                <div class="card-header bg-info text-white border-bottom-0">
                    <h6 class="mb-0">Blue (info) header</h6>
                </div>

                <div class="card-body">
                    Card with blue (info context) header - add <code>.bg-info</code> class to card header container
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-success shadow-sm">
                <div class="card-header bg-success bg-opacity-10 text-success border-success">
                    <h6 class="mb-0">Custom light color</h6>
                </div>

                <div class="card-body">
                    Card header with custom light colors - add <code>.bg-[color]-100</code> class to card header container
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border border-teal shadow-sm">
                <div class="card-header bg-teal text-white border-bottom-0">
                    <h6 class="mb-0">Custom dark color</h6>
                </div>

                <div class="card-body">
                    Card header with custom dark colors - add <code>.bg-*</code> class to card header container
                </div>
            </div>
        </div>
    </div>
    <!-- /bordered cards -->


    <!-- Card borders -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card borders</h6>
        <span class="text-muted">Custom 4 side borders for content cards</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-top border-top-success rounded-top-0">
                <div class="card-header">
                    <h6 class="mb-0">Top custom border</h6>
                </div>

                <div class="card-body">
                    Custom color of the <strong>top</strong> border. Use optional <code>.rounded-top-0</code> class to remove rounded top corners
                </div>
            </div>

            <div class="card border-start border-start-danger rounded-start-0">
                <div class="card-header">
                    <h6 class="mb-0">Left custom border</h6>
                </div>

                <div class="card-body">
                    Custom color of the <strong>left</strong> border. Use optional <code>.rounded-start-0</code> class to remove rounded left corners
                </div>
            </div>

            <div class="card border-top border-top-info border-bottom border-bottom-info rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Top and bottom borders</h6>
                </div>

                <div class="card-body">
                    Custom color of the <strong>top</strong> and <strong>bottom</strong> borders. Use optional <code>.rounded-0</code> class to remove rounded corners
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-bottom border-bottom-success rounded-bottom-0">
                <div class="card-header">
                    <h6 class="mb-0">Bottom custom border</h6>
                </div>

                <div class="card-body">
                    Custom color of the <strong>bottom</strong> border. Use optional <code>.rounded-bottom-0</code> class to remove rounded bottom corners
                </div>
            </div>

            <div class="card border-end border-end-danger rounded-end-0">
                <div class="card-header">
                    <h6 class="mb-0">Right custom border</h6>
                </div>

                <div class="card-body">
                    Custom color of the <strong>right</strong> border. Use optional <code>.rounded-end-0</code> class to remove rounded right corners
                </div>
            </div>

            <div class="card border-start border-start-info border-end border-end-info rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Left and right borders</h6>
                </div>

                <div class="card-body">
                    Custom color of the <strong>left</strong> and <strong>right</strong> borders. Use optional <code>.rounded-0</code> class to remove rounded corners
                </div>
            </div>
        </div>
    </div>
    <!-- /card borders -->


    <!-- Bordered cards border width -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Border sizing</h6>
        <span class="text-muted">Available in 1 default and 2 optional sizes</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-top border-top-warning border-bottom border-bottom-warning rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Basic size</h6>
                </div>

                <div class="card-body">
                    Basic border size of the element, defined in core variables. Any card border can be highlighted with proper class name
                </div>
            </div>

            <div class="card border-top border-top-width-2 border-top-secondary border-bottom border-bottom-width-2 border-bottom-secondary rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Double size</h6>
                </div>

                <div class="card-body">
                    Double border size using <code>.border-*-width-2</code> class, where "*" is border direction. Use <code>.border-width-2</code> class to make all borders thicker
                </div>
            </div>

            <div class="card border-top border-top-width-3 border-top-success border-bottom border-bottom-width-3 border-bottom-success rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Tripple size</h6>
                </div>

                <div class="card-body">
                    Tripple border size using <code>.border-*-width-3</code> class, where "*" is border direction. Use <code>.border-width-3</code> class to make all borders thicker
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-start border-start-primary border-end border-end-primary rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Basic size</h6>
                </div>

                <div class="card-body">
                    Basic border size of the element, defined in core variables. Any card border can be highlighted with proper class name
                </div>
            </div>

            <div class="card border-start border-start-width-2 border-start-indigo border-end border-end-width-2 border-end-indigo rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Double size</h6>
                </div>

                <div class="card-body">
                    Double border size using <code>.border-*-width-2</code> class, where "*" is border direction. Use <code>.border-width-2</code> class to make all borders thicker
                </div>
            </div>

            <div class="card border-start border-start-width-3 border-start-pink border-end border-end-width-3 border-end-pink rounded-0">
                <div class="card-header">
                    <h6 class="mb-0">Tripple size</h6>
                </div>

                <div class="card-body">
                    Tripple border size using <code>.border-*-width-3</code> class, where "*" is border direction. Use <code>.border-width-3</code> class to make all borders thicker
                </div>
            </div>
        </div>
    </div>
    <!-- /bordered cards border width -->


    <!-- Card backgrounds -->
    <div class="mb-3 mt-2">
        <h6 class="mb-0">Card backgrounds</h6>
        <span class="text-muted">Optional default and custom background colors</span>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-light">
                <div class="card-header">
                    <h6 class="mb-0">Light background</h6>
                </div>

                <div class="card-body">
                    Card with light background color using <code>.bg-light</code> class
                </div>
            </div>

            <div class="card bg-primary text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Primary background</h6>
                </div>

                <div class="card-body">
                    Card with primary background color using <code>.bg-primary</code> class
                </div>
            </div>

            <div class="card bg-danger text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Red (danger) background</h6>
                </div>

                <div class="card-body">
                    Card with red (danger) background color using <code>.bg-danger</code> class
                </div>
            </div>

            <div class="card bg-success text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Green (success) background</h6>
                </div>

                <div class="card-body">
                    Card with green (success) background color using <code>.bg-success</code> class
                </div>
            </div>

            <div class="card bg-success bg-opacity-10 border-success">
                <div class="card-header border-success">
                    <h6 class="mb-0">Alpha backgrounds</h6>
                </div>

                <div class="card-body">
                    Card with custom light background color using <code>.bg-[color].bg-opacity-10</code> class
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card bg-dark text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Dark background</h6>
                </div>

                <div class="card-body">
                    Card with dark background color using <code>.bg-dark</code> class
                </div>
            </div>

            <div class="card bg-secondary text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Secondary background</h6>
                </div>

                <div class="card-body">
                    Card with secondary background color using <code>.bg-secondary</code> class
                </div>
            </div>

            <div class="card bg-warning text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Orange (warning) background</h6>
                </div>

                <div class="card-body">
                    Card with orange (warning) background color using <code>.bg-warning</code> class
                </div>
            </div>

            <div class="card bg-info text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Blue (info) background</h6>
                </div>

                <div class="card-body">
                    Card with blue (info) background color using <code>.bg-info</code> class
                </div>
            </div>

            <div class="card bg-purple text-white" data-color-theme="dark">
                <div class="card-header border-white border-opacity-20">
                    <h6 class="mb-0">Custom background</h6>
                </div>

                <div class="card-body">
                    Card with custom background color using <code>.bg-*</code> classes
                </div>
            </div>
        </div>
    </div>
    <!-- /card backgrounds -->

</div>
<!-- /content area -->

@endsection