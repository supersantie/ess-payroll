@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Gallery @endslot
@slot('subtitle') Responsive Embeds @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Video options -->
    <div class="mb-3">
        <h6 class="mb-0">Video options</h6>
        <span class="text-muted">Sources and aspect ratios</span>
    </div>

    <div class="row">
        <div class="col-sm-6">

            <!-- Youtube -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Youtube video</h5>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h6>16:9 ratio</h6>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <h6>4:3 ratio</h6>

                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.youtube.com/embed/IyTv_SR2uUo" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- /youtube -->


            <!-- IMDB -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">IMDB video</h5>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h6>16:9 ratio</h6>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.imdb.com/videoembed/vi1942205977" frameborder="0"></iframe>
                        </div>
                    </div>

                    <h6>4:3 ratio</h6>
                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.imdb.com/videoembed/vi338798873" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
            <!-- /IMDB -->

        </div>

        <div class="col-sm-6">

            <!-- Vimeo -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Vimeo video</h5>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h6>16:9 ratio</h6>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.vimeo.com/video/195944915" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>

                    <h6>4:3 ratio</h6>
                    <div class="ratio ratio-4x3">
                        <iframe src="https://player.vimeo.com/video/195444476" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- /vimeo -->


            <!-- Ustream -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">UStream video</h5>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h6>16:9 ratio</h6>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.ustream.tv/embed/10414700?html5ui" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>

                    <h6>4:3 ratio</h6>
                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.ustream.tv/embed/6540154?html5ui" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- /ustream -->

        </div>
    </div>
    <!-- /video options -->


    <!-- Embedding options -->
    <div class="mb-3 pt-2">
        <h6 class="mb-0">Embedding options</h6>
        <span class="text-muted">Iframe, embed or object elements</span>
    </div>

    <div class="row">
        <div class="col-sm-6">

            <!-- Embed element -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Using "embed" element</h5>
                </div>

                <div class="card-body">
                    <div class="ratio ratio-16x9">
                        <embed src="https://www.youtube.com/embed/vlDzYIIOYmM">
                    </div>
                </div>
            </div>
            <!-- /embed element -->

        </div>

        <div class="col-sm-6">

            <!-- Object element -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Using "object" element</h5>
                </div>

                <div class="card-body">
                    <div class="ratio ratio-16x9">
                        <object data="https://www.youtube.com/embed/IyTv_SR2uUo"></object>
                    </div>
                </div>
            </div>
            <!-- /object element -->

        </div>
    </div>
    <!-- /embedding options -->

</div>
<!-- /content area -->

@endsection
