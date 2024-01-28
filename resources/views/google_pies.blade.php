@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Google @endslot
@slot('subtitle') Pie Charts @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic pie charts -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic pie chart</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">A <code>pie chart</code> is a divided into sectors, illustrating numerical proportion. In a pie chart, the arc length of each sector (and consequently its central angle and area), is proportional to the quantity it represents. While it is named for its resemblance to a pie which has been sliced, there are variations on the way it can be presented.</p>

                    <div class="chart-container has-scroll text-center">
                        <div class="d-inline-block" id="google-pie"></div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Rotated pie chart</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">By default, <code>pie</code> charts begin with the left edge of the first slice pointing straight up. You can change that with the <code>pieStartAngle</code> option. Here, we rotate the chart clockwise 180 degrees with an option of <code>pieStartAngle: 180</code>. So chosen because that particular angle happens to make the slices reflected.</p>

                    <div class="chart-container has-scroll text-center">
                        <div class="d-inline-block" id="google-pie-rotate"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Basic donut chart</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">A <code>donut chart</code> is functionally identical to a pie chart, with the exception of a blank center and the ability to support multiple statistics at once. donut charts provide a better data intensity ratio to standard pie charts since the blank center can be used to display additional related data.</p>

                    <div class="chart-container has-scroll text-center">
                        <div class="d-inline-block" id="google-donut"></div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Rotated donut chart</h5>
                </div>

                <div class="card-body">
                    <p class="mb-3">By default, <code>donut</code> charts begin with the left edge of the first slice pointing straight up. You can change that with the <code>pieStartAngle</code> option. Here, we rotate the chart clockwise 180 degrees with an option of <code>pieStartAngle: 180</code>. So chosen because that particular angle happens to make the slices reflected.</p>

                    <div class="chart-container has-scroll text-center">
                        <div class="d-inline-block" id="google-donut-rotate"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic pie charts -->


    <!-- 3D pie charts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">3D pie charts</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">A <code>3D pie</code> chart is used to give the chart a 3D look. Often used for aesthetic reasons, the third dimension does not improve the reading of the data; on the contrary, these plots are difficult to interpret because of the distorted effect of perspective associated with the third dimension. The use of superfluous dimensions not used to display the data of interest is discouraged for charts in general, not only for pie charts.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="chart-container has-scroll text-center mb-3">
                        <div class="d-inline-block" id="google-pie-3d"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="chart-container has-scroll text-center mb-3">
                        <div class="d-inline-block" id="google-3d-exploded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /3D pie charts -->


    <!-- Exploded pie charts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Exploded pie charts</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of pie charts with<code>exploded</code> slices. Pie slices can be separated from the rest of the chart with the offset property of the slices option. To separate a slice, create a slices object and assign the appropriate slice number an offset between 0 and 1. Below, we assign progressively larger offsets to slices 4 (Gujarati), 12 (Marathi), 14 (Oriya), and 15 (Punjabi). Examples below display both pie and donut chart versions.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="chart-container has-scroll text-center mb-3">
                        <div class="d-inline-block" id="google-pie-exploded"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="chart-container has-scroll text-center mb-3">
                        <div class="d-inline-block" id="google-donut-exploded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /exploded pie charts -->


    <!-- Diff pie charts -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Diff pie charts</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Inner circle radius</h6>
                        <p class="mb-3">Example of <code>diff</code> pie chart with <code>radius</code> factor - the relative size of the circles can be controlled with <code>diff.innerCircle.radiusFactor</code> option.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="d-inline-block" id="google-pie-diff-radius"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Inner circle transparency</h6>
                        <p class="mb-3">Example of <code>diff</code> pie chart with <code>transparency</code> - the transparency of each data can be controlled with <code>diff.oldData.opacity</code> and <code>diff.newData.opacity</code>.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="d-inline-block" id="google-pie-diff-opacity"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <h6 class="fw-semibold">Inner circle border</h6>
                        <p class="mb-3">Example of <code>diff</code> pie chart with <code>border</code> factor - the border between the two datas can be controlled with <code>diff.innerCircle.borderFactor</code> option.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="d-inline-block" id="google-pie-diff-border"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-semibold">Inverted difference</h6>
                        <p class="mb-3">Example of <code>diff</code> pie chart with <code>inverted</code> behaviour - the behavior can be inverted so that the oldest data surrounds the newest data with <code>diff.oldData.inCenter</code> option.</p>

                        <div class="chart-container has-scroll text-center">
                            <div class="d-inline-block" id="google-pie-diff-invert"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /diff pie charts -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/charts/google/pies/pie.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_exploded.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_rotate.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/donut.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/donut_rotate.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/donut_exploded.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_3d.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/3d_exploded.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_diff_radius.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_diff_border.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_diff_opacity.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/google/pies/pie_diff_invert.js')}}"></script>
@endsection
