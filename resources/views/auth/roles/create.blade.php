@extends('layouts.master')
@section('title') @lang('translation.Form_Elements') @endsection
@section('content')


@section('pagetitle')Form Elements @endsection



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Textual inputs</h4>
            </div>
            <div class="card-body">

                <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to
                    each
                    textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="text" value="Artisanal kale" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="search" value="How do I shoot web"
                            id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="email" value="bootstrap@example.com"
                            placeholder="Enter Email" id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="url" value="https://getbootstrap.com"
                            placeholder="Enter URL" id="example-url-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="tel" value="1-(555)-555-5555"
                            placeholder="Enter Telephone" id="example-tel-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="password" value="hunter2"
                            placeholder="Enter Password" id="example-password-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="number" value="42" placeholder="Enter Number"
                            id="example-number-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and
                        Time</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="datetime-local" value="2019-08-19T13:45:00"
                            id="example-datetime-local-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="date" value="2019-08-19" id="example-date-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="month" value="2019-08" id="example-month-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="week" value="2019-W33" id="example-week-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                    <div class="col-md-10">
                        <input class="form-control required" type="time" value="13:45:00" id="example-time-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
                    <div class="col-md-10">
                        <input class="form-control form-control-color mw-100" type="color" value="#3b76e1"
                            id="example-color-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Select</label>
                    <div class="col-md-10">
                        <select class="form-select required">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <label for="exampleDataList" class="col-md-2 col-form-label">Datalist</label>
                    <div class="col-md-10">
                        <input class="form-control required" list="datalistOptions" id="exampleDataList"
                            placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Form layouts</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mt-4 mt-xl-0">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Form
                                groups</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">First Name</label>
                                    <input type="text" class="form-control required" placeholder="Enter First Name"
                                        id="formrow-firstname-input">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-email-input">Email</label>
                                            <input type="email" class="form-control required" placeholder="Enter Email"
                                                id="formrow-email-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-password-input">Password</label>
                                            <input type="password" class="form-control required"
                                                placeholder="Enter password" id="formrow-password-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                    <label class="form-check-label" for="formrow-customCheck">Check me out</label>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-lg-auto">
                        <div class="mt-5 mt-lg-4 mt-xl-0">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                Horizontal form</h5>

                            <form>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First
                                        name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control required" placeholder="Enter First Name"
                                            id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control required" placeholder="Enter Email"
                                            id="horizontal-email-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-password-input"
                                        class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control required"
                                            placeholder="Enter Password" id="horizontal-password-input">
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" class="form-check-input" id="horizontal-customCheck">
                                            <label class="form-check-label" for="horizontal-customCheck">Remember
                                                me</label>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Inline forms
                        layout</h5>

                    <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                        <div class="col-12">
                            <label class="visually-hidden" for="specificSizeInputName">Name</label>
                            <input type="text" class="form-control required" id="specificSizeInputName"
                                placeholder="Enter Name">
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control required" id="specificSizeInputGroupUsername"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                <label class="form-check-label" for="autoSizingCheck2">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-6">
                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Inline
                            forms layout used by hstack</h5>
                        <form class="row gx-3 gy-2 align-items-center">
                            <div class="hstack gap-3">
                                <input class="form-control me-auto" type="text" placeholder="Add your item here...">
                                <button type="button" class="btn btn-secondary">Submit</button>
                                <div class="vr"></div>
                                <button type="reset" class="btn btn-outline-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sizing</h4>
            </div>
            <div class="card-body">
                <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code>
                    and <code>.form-control-sm</code>.</p>
                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label">Default input</label>
                                <input class="form-control required" type="text" placeholder="Default input">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label class="form-label">Small Input</label>
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label class="form-label">Large Input</label>
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Range Inputs</h4>
            </div>
            <div class="card-body">
                <p class="card-title-desc">Create custom <code>&lt;input type="range"&gt;</code>
                    controls with <code>.form-range</code>.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label for="customRange1" class="form-label">Example range</label>
                            <input type="range" class="form-range" id="customRange1">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Min and max</h5>
                            <p class="card-title-desc">Range inputs have implicit values for min and
                                max—0 and 100, respectively.</p>
                            <input type="range" class="form-range" min="0" max="5" id="customRange1">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Steps</h5>
                            <p class="card-title-desc">By default, range inputs “snap” to integer
                                values. To change this, you can specify a <code>step</code> value.</p>
                            <input type="range" class="form-range" min="0" max="5" id="customRange2">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Checkboxes</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">

                        <div>
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Form
                                Checkboxes
                            </h5>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                <label class="form-check-label" for="formCheck1">
                                    Form Checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                                <label class="form-check-label" for="formCheck2">
                                    Form Checkbox checked
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ms-auto">

                        <div class="mt-md-0">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Form
                                Checkboxes
                                Right</h5>
                            <div>
                                <div class="form-check form-check-right mb-3">
                                    <input class="form-check-input" type="checkbox" id="formCheckRight1">
                                    <label class="form-check-label" for="formCheckRight1">
                                        Form Checkbox Right
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="form-check form-check-right">
                                    <input class="form-check-input" type="checkbox" id="formCheckRight2" checked>
                                    <label class="form-check-label" for="formCheckRight2">
                                        Form Checkbox Right checked
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Radios</h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h5 class="font-size-14 mb-4">Form Radios</h5>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                <label class="form-check-label" for="formRadios1">
                                    Form Radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                <label class="form-check-label" for="formRadios2">
                                    Form Radio checked
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ms-auto">
                        <div class="mt-lg-0">
                            <h5 class="font-size-14 mb-4">Form Radios Right</h5>
                            <div>
                                <div class="form-check form-check-right mb-3">
                                    <input class="form-check-input" type="radio" name="formRadiosRight"
                                        id="formRadiosRight1" checked>
                                    <label class="form-check-label" for="formRadiosRight1">
                                        Form Radio Right
                                    </label>
                                </div>
                            </div>

                            <div>
                                <div class="form-check form-check-right">
                                    <input class="form-check-input" type="radio" name="formRadiosRight"
                                        id="formRadiosRight2">
                                    <label class="form-check-label" for="formRadiosRight2">
                                        Form Radio Right checked
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Switches</h4>
            </div>
            <div class="card-body">
                <p class="card-title-desc">A switch has the markup of a custom checkbox but uses the
                    <code>.form-switch</code> class to render a toggle switch. Switches also support the
                    <code>disabled</code> attribute.
                </p>

                <div class="row">

                    <div class="col-sm-6">
                        <div>
                            <h5 class="font-size-14 mb-3">Switch examples</h5>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                                <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"
                                    checked disabled>
                                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                                    switch checkbox input</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mt-4 mt-sm-0">
                            <h5 class="font-size-14 mb-3">Switch sizes</h5>

                            <div class="form-check form-switch mb-3" dir="ltr">
                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizesm" checked>
                                <label class="form-check-label" for="SwitchCheckSizesm">Small Size Switch</label>
                            </div>

                            <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd">
                                <label class="form-check-label" for="SwitchCheckSizemd">Medium Size Switch</label>
                            </div>

                            <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked>
                                <label class="form-check-label" for="SwitchCheckSizelg">Large Size Switch</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">File browser</h4>
            </div>
            <div class="card-body">

                <div>
                    <h5 class="font-size-14"><i class="mdi mdi-arrow-right text-primary"></i> Default file input
                    </h5>
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="mt-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control required" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mt-4">
                                <div>
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6">
                            <div class="mt-4">
                                <div>
                                    <label for="formFileLg" class="form-label">Large file input example</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>

                <div class="mt-4 pt-2">
                    <h5 class="font-size-14 mb-0"><i class="mdi mdi-arrow-right text-primary"></i> Custom file input
                    </h5>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mt-4">

                            <div>
                                <label class="form-label">With Label</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control required" id="inputGroupFile01">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control required" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mt-4">

                            <div>
                                <label class="form-label">With Button</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-primary" type="button"
                                        id="inputGroupFileAddon03">Button</button>
                                    <input type="file" class="form-control required" id="inputGroupFile03"
                                        aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                </div>

                                <div class="input-group">
                                    <input type="file" class="form-control required" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <button class="btn btn-primary" type="button"
                                        id="inputGroupFileAddon04">Button</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
