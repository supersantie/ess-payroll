@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Form Layouts @endslot
@slot('subtitle') Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Default grid -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Default form</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-2">
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-10">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-3">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-9">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-4">
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-8">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-5">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-7">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Horizontal form</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-2">
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-10">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-3">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-9">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-4">
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-8">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-5">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-7">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /default grid -->


    <!-- Alignment -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Right inputs</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" placeholder=".col-lg-12">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-11 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-11 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-10 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-10 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-9 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-9 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-8 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-8 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-7 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-7 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-6 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-6 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-5 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-5 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-4 ms-lg-auto">
                                <input type="text" class="form-control" placeholder=".col-lg-4 .ms-lg-auto">
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Left inputs</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" placeholder="col-lg-12">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-11">
                                <input type="text" class="form-control" placeholder="col-lg-11">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="col-lg-10">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="col-lg-9">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-8">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" placeholder="col-lg-7">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="col-lg-6">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-5">
                                <input type="text" class="form-control" placeholder="col-lg-5">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="col-lg-4">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /alignment -->


    <!-- Centered inputs -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Centered horizontal inputs</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3 text-lg-end">Label</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Full width">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-lg-10 mx-lg-auto">
                                <div class="row">
                                    <label class="col-form-label col-lg-3 text-lg-end">Label</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="col-lg-10 mx-lg-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-lg-8 mx-lg-auto">
                                <div class="row">
                                    <label class="col-form-label col-lg-3 text-lg-end">Label</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="col-lg-8 mx-lg-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-lg-6 mx-lg-auto">
                                <div class="row">
                                    <label class="col-form-label col-lg-3 text-lg-end">Label</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="col-lg-6 mx-lg-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-lg-4 mx-lg-auto">
                                <div class="row">
                                    <label class="col-form-label col-lg-4 text-lg-end">Label</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="col-lg-4 mx-lg-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Centered vertical inputs</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-10 mx-lg-auto">
                                <div class="mb-3">
                                    <label class="form-label">Row label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-10 mx-lg-auto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 mx-lg-auto">
                                <div class="mb-3">
                                    <label class="form-label">Row label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-8 mx-lg-auto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 mx-lg-auto">
                                <div class="mb-3">
                                    <label class="form-label">Row label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-6 mx-lg-auto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 mx-lg-auto">
                                <div class="mb-3">
                                    <label class="form-label">Row label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-4 mx-lg-auto">
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /centered inputs -->


    <!-- Row and input labels (default form) -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Vertical row label</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <label class="form-label">Label</label>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-2">
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-10">
                                </div>
                            </div>
                        </div>

                        <label class="form-label">Label</label>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-3">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-9">
                                </div>
                            </div>
                        </div>

                        <label class="form-label">Label</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-4">
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-8">
                                </div>
                            </div>
                        </div>

                        <label class="form-label">Label</label>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-5">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-7">
                                </div>
                            </div>
                        </div>

                        <label class="form-label">Label</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Vertical input label</h6>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-2">
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-10">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-3">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-9">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-4">
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-8">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-5">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-7">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row and input labels (default form) -->


    <!-- Row label (horizontal form) -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Horizontal row labels</h6>
        </div>

        <div class="card-body">
            <form action="#">
                <div class="row">
                    <label class="col-lg-2 col-form-label">Label</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-1">
                                </div>
                            </div>

                            <div class="col-lg-11">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-11">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-2 col-form-label">Label</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-2">
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-2 col-form-label">Label</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-3">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-9">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-2 col-form-label">Label</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-4">
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-8">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-2 col-form-label">Label</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-5">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-7">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-2 col-form-label">Label</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="col-lg-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /row label (horizontal form) -->


    <!-- Input label (horizontal form) -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Horizontal input labels</h6>
        </div>

        <div class="card-body">
            <form action="#">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-10">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-3">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-9">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-4">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-8">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-5">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-7">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-6">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <label class="col-lg-4 col-form-label text-lg-end">Label: </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /input label (horizontal form) -->


    <!-- Multiple row inputs (vertical) -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Multiple vertical inputs</h6>
        </div>

        <div class="card-body">
            <form action="#">
                <label class="form-label">First form group</label>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First row, first input">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Second row, first input">
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First row, second input">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Second row, second input">
                        </div>
                    </div>
                </div>

                <label class="form-label">Second form group</label>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First row, first input">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Second row, first input">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First row, second input">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Second row, second input">
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /multiple row inputs (vertical) -->


    <!-- Multiple row inputs (horizontal) -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Multiple horizontal inputs</h6>
        </div>

        <div class="card-body">
            <form action="#">
                <div class="row">
                    <label class="col-lg-2 col-form-label">First form group</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First row, first input">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Second row, first input">
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First row, second input">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Second row, second input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-2 col-form-label">First form group</label>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First row, first input">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Second row, first input">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First row, second input">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Second row, second input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /multiple row inputs (horizontal) -->

</div>
<!-- /content area -->

@endsection
