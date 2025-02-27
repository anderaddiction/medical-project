@extends('layouts.master')
@section('title')
    @lang('translation.Form_Wizard')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection
@section('content')


@section('pagetitle')
    Form Wizard
@endsection


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Forms Steps</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <form action="#">
                    <ul class="wizard-nav mb-5">
                        <li class="wizard-list-item">
                            <div class="list-item">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Seller Details">
                                    <i class="bx bx-user-circle"></i>
                                </div>
                            </div>
                        </li>
                        <li class="wizard-list-item">
                            <div class="list-item">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Company Document">
                                    <i class="bx bx-file"></i>
                                </div>
                            </div>
                        </li>

                        <li class="wizard-list-item">
                            <div class="list-item">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Bank Details">
                                    <i class="bx bx-edit"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- wizard-nav -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Seller Details</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-firstname-input" class="form-label">First
                                            Name</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter First Name" id="basicpill-firstname-input">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-lastname-input" class="form-label">Last
                                            Name</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter Last Name" id="basicpill-lastname-input">
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-phoneno-input" class="form-label">Phone</label>
                                        <input type="text" class="form-control required" placeholder="Enter Phone"
                                            id="basicpill-phoneno-input">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control required" placeholder="Enter Email"
                                            id="basicpill-email-input">
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="basicpill-address-input" class="form-label">Address</label>
                                        <textarea id="basicpill-address-input" class="form-control required" placeholder="Enter Address" rows="2"></textarea>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>

                    </div>
                    <!-- wizard-tab -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Seller Details</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-firstname-input" class="form-label">First
                                            Name</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter First Name" id="basicpill-firstname-input">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-lastname-input" class="form-label">Last
                                            Name</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter Last Name" id="basicpill-lastname-input">
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-phoneno-input" class="form-label">Phone</label>
                                        <input type="text" class="form-control required" placeholder="Enter Phone"
                                            id="basicpill-phoneno-input">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control required" placeholder="Enter Email"
                                            id="basicpill-email-input">
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="basicpill-address-input" class="form-label">Address</label>
                                        <textarea id="basicpill-address-input" class="form-control required" placeholder="Enter Address" rows="2"></textarea>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>

                    </div>
                    <!-- wizard-tab -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Seller Details</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-firstname-input" class="form-label">First
                                            Name</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter First Name" id="basicpill-firstname-input">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-lastname-input" class="form-label">Last
                                            Name</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter Last Name" id="basicpill-lastname-input">
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-phoneno-input" class="form-label">Phonnnnne</label>
                                        <input type="text" class="form-control required" placeholder="Enter Phone"
                                            id="basicpill-phoneno-input">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control required" placeholder="Enter Email"
                                            id="basicpill-email-input">
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="basicpill-address-input" class="form-label">Address</label>
                                        <textarea id="basicpill-address-input" class="form-control required" placeholder="Enter Address" rows="2"></textarea>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>

                    </div>

                    <div class="d-flex align-items-start gap-3 mt-4">
                        <button type="button" class="btn btn-primary w-sm" id="prevBtn"
                            onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn"
                            onclick="nextPrev(1)">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
