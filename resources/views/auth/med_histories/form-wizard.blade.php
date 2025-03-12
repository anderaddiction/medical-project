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
                                    title="Company Document">
                                    <i class="bx bx-file"></i>
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
                                    title="Company Document">
                                    <i class="bx bx-file"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- wizard-nav -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Identity Data</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="names" class="form-label">Names
                                        </label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter Names" id="names" name="names">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lastnames" class="form-label">Last
                                            Names</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter Last Names" id="lastnames" name="lastnames">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="text" class="form-control required" placeholder="Enter Age"
                                            id="age" name="age">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="birthDate" class="form-label">Birth date</label>
                                        <input type="email" class="form-control required" placeholder="Enter Birth date"
                                            id="birthDate" name="birthDate">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="birthPlace" class="form-label">Birth place</label>
                                        <input type='text' name="birthPlace" id="birthPlace" class="form-control required" placeholder="Enter birth place">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type='text' name="gender" id="gender" class="form-control required" placeholder="Enter gender">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="idType" class="form-label">Document type</label>
                                        <input type='text' name="idType" id="idType" class="form-control required" placeholder="Enter birth place">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="idNumber" class="form-label">Document number</label>
                                        <input type='text' name="idNumber" id="idNumber" class="form-control required" placeholder="Enter birth place">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type='text' name="occupation" id="occupation" class="form-control required" placeholder="Enter birth place">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="schooling" class="form-label">schooling
                                        </label>
                                        <input type="text" name="schooling" class="form-control required"
                                            placeholder="Enter schooling" id="schooling">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="institution" class="form-label">Institution</label>
                                        <input type="text" name="institution" class="form-control required"
                                            placeholder="Enter Institution" id="institution">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="affilatedEntity" class="form-label">Affilated Entity
                                        </label>
                                        <input type="text" name="affilatedEntity" class="form-control required"
                                            placeholder="Enter Affilated Entity" id="affilatedEntity">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="relationType" class="form-label">relation Type</label>
                                        <input type="text" name="relationType" class="form-control required"
                                            placeholder="Enter relation Type" id="relationType">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address
                                        </label>
                                        <input type="text" name="address" class="form-control required"
                                            placeholder="Enter Address" id="address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="residencePlace" class="form-label">place of residence</label>
                                        <input type="text" name="residencePlace" class="form-control required"
                                            placeholder="Enter place of residence" id="residencePlace">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="email" name="email" class="form-control required"
                                            placeholder="Enter Email" id="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control required"
                                            placeholder="Enter Phone" id="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="responsible" class="form-label">Responsible</label>
                                        <input type='text' name="responsible" id="responsible" class="form-control required" placeholder="Enter Patient Responsible">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="relationship" class="form-label">Relationship</label>
                                        <input type='text' name="relationship" id="relationship" class="form-control required" placeholder="Enter Relationship">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="relationshipPhone" class="form-label">Relationship's Phone</label>
                                        <input type='text' name="relationshipPhone" id="relationshipPhone" class="form-control required" placeholder="Enter Relationship's Phone">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="companion" class="form-label">Companion
                                        </label>
                                        <input type="text" name="companion" class="form-control required"
                                            placeholder="Enter Companion" id="companion">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="companionPhone" class="form-label">companion's Phone</label>
                                        <input type="text" name="companionPhone" class="form-control required"
                                            placeholder="Enter companion's Phone" id="companionPhone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="poblation" class="form-label">Poblation
                                        </label>
                                        <input type="text" name="poblation" class="form-control required"
                                            placeholder="Enter Poblation" id="poblation">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="conflict" class="form-label">victim of the armed conflict</label>
                                        <select class="form-select required" name="conflict" id="conflict">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="discapacity" class="form-label">Discapacity</label>
                                        <select class="form-select required" name="discapacity" id="discapacity">

                                            <option value="0">None</option>
                                            <option value="1">physical</option>
                                            <option value="2">mental</option>
                                            <option value="3">visual</option>
                                            <option value="4">sensorial</option>
                                            <option value="5">cognitive</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="ethnia" class="form-label">Ethnia</label>
                                        <select class="form-select required" name="ethnia" id="ethnia">

                                            <option value="0">None</option>
                                            <option value="1">Afro</option>
                                            <option value="2">Palenquero</option>
                                            <option value="3">Razial</option>
                                            <option value="4">Negra</option>
                                            <option value="5">Indigena</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- wizard-tab -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Reason</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="prenatalCondition" class="form-label">Prenatal conditions</label>
                                        <select class="form-select required" name="prenatalCondition" id="prenatalCondition">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="periPosCondition" class="form-label">Perinatal and Postnatal Conditions</label>
                                        <select class="form-select required" name="periPosCondition" id="periPosCondition">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="reason" class="form-label">Reason</label>
                                        <textarea class="form-control required" placeholder="Enter Reason"
                                            id="reason" name="reason" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="diagnosis" class="form-label">Diagnosis</label>
                                        <textarea id="diagnosis" name="diagnosis" class="form-control required" placeholder="Enter diagnsosis" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- wizard-tab -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Personal and Pathological History</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="disease" class="form-label">User's disease history</label>
                                        <textarea id="disease" name="disease" class="form-control required" placeholder="Enter disease history" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="surgicalHistory" class="form-label">Surgical History</label>
                                        <select class="form-select required" name="surgicalHistory" id="surgicalHistory">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="allergies" class="form-label">Allergies</label>
                                        <input type="text" name="allergies" class="form-control required" placeholder="Enter allergies"
                                            id="allergies">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="treatment" class="form-label">Treatment</label>
                                        <input type="text" id="treatment" name="treatment" class="form-control required" placeholder="Enter Treatment">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="medication" class="form-label">Medication</label>
                                        <input type="text" name="medication" class="form-control required" placeholder="Enter Medication"
                                            id="medication">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="pregnancies" class="form-label">Pregnancies</label>
                                        <select class="form-select required" name="pregnancies" id="pregnancies">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="birthType" class="form-label">Birth Type</label>
                                        <select class="form-select required" name="birthType" id="birthType">

                                            <option value="0">vaginal</option>
                                            <option value="1">cesarea</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="births" class="form-label">Births</label>
                                        <select class="form-select required" name="births" id="births">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="birthReason" class="form-label">Reason</label>
                                        <input type="text" name="birthReason" id="birthReason" class="form-control required" placeholder="Enter Reason">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="abortions" class="form-label">Abortions</label>
                                        <select class="form-select required" name="abortions" id="abortions">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="gestationalAge" class="form-label">Gestational Age</label>
                                        <input type="number" name="gestationalAge" id="gestationalAge" class="form-control required" placeholder="Enter Reason">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="threatAbrotion" class="form-label">Threat of Abortion</label>
                                        <select class="form-select required" name="threatAbrotion" id="threatAbrotion">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="inducedLabor" class="form-label">Induced Labor</label>
                                        <select class="form-select required" name="inducedLabor" id="inducedLabor">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="infections" class="form-label">Infections during Pregnancy</label>
                                        <select class="form-select required" name="infections" id="infections">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="infectionsReason" class="form-label">Reason</label>
                                            <select class="form-select required" name="infections" id="infections">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="malnutrition" class="form-label">Malnutrition</label>
                                        <select class="form-select required" name="malnutrition" id="malnutrition">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="bornWeight" class="form-label">Born Weight</label>
                                        <input type="text" name="bornWeight" id="bornWeight" class="form-control required" placeholder="Enter Born Weight">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="bTreatment" class="form-label">Treatment</label>
                                        <select class="form-select required" name="bTreatment" id="bTreatment">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="size">Size</label>
                                        <input type="text" id="size" name="size" class="form-control" placeholder="Enter size">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="alcoholism" class="form-label">Alcoholism</label>
                                        <select class="form-select required" name="alcoholism" id="alcoholism">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="anoxia" class="form-label">Anoxia</label>
                                        <select class="form-select required" name="anoxia" id="anoxia">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="drugAddiction" class="form-label">Drug Addiction</label>
                                        <select class="form-select required" name="drugAddiction" id="drugAddiction">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="resuscitation" class="form-label">Resuscitation Maneuvers</label>
                                        <select class="form-select required" name="resuscitation" id="resuscitation">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="mothersAge" class="form-label">Mothers Age</label>
                                        <input type="text" id="mothersAge" name="mothersAge" class="form-control" placeholder="Enter Mothers Age">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="fathersAge" class="form-label">Fathers Age</label>
                                        <input type="text" id="fathersAge" name="fathersAge" class="form-control" placeholder="Enter Fathers Age">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="incubator" class="form-label">Incubator</label>
                                        <select class="form-select required" name="incubator" id="incubator">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="malformations" class="form-label">Malformations</label>
                                        <select class="form-select required" name="malformations" id="malformations">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="observations">Observations</label>
                                        <textarea name="observations" id="observations" class="form-control" placeholder="Enter observations"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- wizard-nav -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>Actual Clinical Description</h5>
                            <p class="card-title-desc">Fill all information below</p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="actualWeight" class="form-label">Weight</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter weight" id="actualWeight" name="actualWeight">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="actualSize" class="form-label">Size</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Enter Size" id="actualSize" name="actualSize">
                                    </div>
                                </div><!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="normalVision" class="form-label">Normal Vision</label>
                                        <select class="form-select required" name="normalVision" id="normalVision">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="visionDeficit" class="form-label">Deficit:</label>
                                        <input type="text" class="form-control required" placeholder="Enter Deficit"
                                            id="visionDeficit" name="visionDeficit">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="normalAudition" class="form-label">Normal Audition</label>
                                        <select class="form-select required" name="normalAudition" id="normalAudition">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="auditionDeficit" class="form-label">Deficit:</label>
                                        <input type="text" class="form-control required" placeholder="Enter Deficit"
                                            id="auditionDeficit" name="auditionDeficit">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h3 class='form-label'>Feeding</h3>
                                    <div class="mb-3">
                                        <label for="breastfeeding" class="form-label">Breastfeeding</label>
                                        <select class="form-select required" name="breastfeeding" id="breastfeeding">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="bottleUse" class="form-label">Bottle Use</label>
                                        <select class="form-select required" name="bottleUse" id="bottleUse">

                                            <option value="0">No</option>
                                            <option value="1">Yes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="reasonBottle" class="form-label">Reason why started bottle feeding</label>
                                        <input type="text" class="form-control required" placeholder="Enter Deficit"
                                            id="reasonBottle" name="reasonBottle">
                                    </div>
                                </div><!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="complementaryFeeding" class="form-label">age at which complementary feeding began</label>
                                        <input type="text" class="form-control required" placeholder="Enter Deficit"
                                            id="complementaryFeeding" name="complementaryFeeding">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="dietBased" class="form-label">Diet Based On</label>
                                        <select class="form-select required" name="dietBased" id="dietBased">

                                            <option value="0">Solid</option>
                                            <option value="1">Semisolid</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="sphincterControl" class="form-label">Sphincter Control</label>
                                        <select class="form-select required" name="sphincterControl" id="sphincterControl">

                                            <option value="0">Total</option>
                                            <option value="1">Partial</option>
                                            <option value="2">Does not Control</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                        <!-- wizard-tab -->

                        <div class="wizard-tab">
                            <div class="text-center mb-4">
                                <h5>Psychomotor development</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div>
                                <h5 class="text-center mb-4">Motor development</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="headSupport" class="form-label">Head Support</label>
                                            <select class="form-select required" name="headSupport" id="headSupport">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="month" class="form-label">Month</label>
                                            <input type="number" class="form-control required" name="month" id="month" placeholder="Enter how many months it started">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="sitting" class="form-label">sitting</label>
                                            <select class="form-select required" name="sitting" id="sitting">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="month" class="form-label">Month</label>
                                            <input type="number" class="form-control required" name="month" id="month" placeholder="Enter how many months it started">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="crawled" class="form-label">crawled</label>
                                            <select class="form-select required" name="crawled" id="crawled">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="month" class="form-label">Month</label>
                                            <input type="number" class="form-control required" name="month" id="month" placeholder="Enter how many months it started">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="walked" class="form-label">walked</label>
                                            <select class="form-select required" name="walked" id="walked">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="month" class="form-label">Month</label>
                                            <input type="number" class="form-control required" name="month" id="month" placeholder="Enter how many months it started">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="language" class="form-label">Language development</label>
                                            <input type="text" class="form-control required" name="language" id="language" placeholder="Enter age">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="firstWords" class="form-label">First words</label>
                                            <input type="text" class="form-control required" name="firstWords" id="firstWords" placeholder="Enter age">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="visualContact" class="form-label">visual Contact</label>
                                            <select class="form-select required" name="visualContact" id="visualContact">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="verbalLang" class="form-label">verbal Language</label>
                                            <select class="form-select required" name="verbalLang" id="verbalLang">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="socialDevelop" class="form-label">social-adaptative developmtent</label>
                                            <input type="text" name="socialDevelop" id="socialDevelop" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="dailyIndependent" class="form-label">independent from daily activities</label>
                                            <select class="form-select required" name="dailyIndependent" id="dailyIndependent">

                                                <option value="0">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- wizard-nav -->

                        <div class="wizard-tab">
                            <div class="text-center mb-4">
                                <h5>Behaivoral aspects</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="tantrums" class="form-label">Tantrums</label>
                                            <select class="form-select required" name="tantrums" id="tantrums">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="hyperactivity" class="form-label">Hyperactivity</label>
                                            <select class="form-select required" name="hyperactivity" id="hyperactivity">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="dependency" class="form-label">Dependency</label>
                                            <select class="form-select required" name="dependency" id="dependency">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="excessiveCrying" class="form-label">Excessive Crying</label>
                                            <select class="form-select required" name="excessiveCrying" id="excessiveCrying">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="tics" class="form-label">Tics</label>
                                            <select class="form-select required" name="tics" id="tics">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="anxiety" class="form-label">Anxiety</label>
                                            <select class="form-select required" name="anxiety" id="anxiety">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="aggressiveness" class="form-label">Aggressiveness</label>
                                            <select class="form-select required" name="aggressiveness" id="aggressiveness">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="selfHarm" class="form-label">Self-harm</label>
                                            <select class="form-select required" name="selfHarm" id="selfHarm">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="lossOfAppetite" class="form-label">Loss of Appetite</label>
                                            <select class="form-select required" name="lossOfAppetite" id="lossOfAppetite">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="eatingNonFoodObjects" class="form-label">Eating Non-Food Objects</label>
                                            <select class="form-select required" name="eatingNonFoodObjects" id="eatingNonFoodObjects">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="thumbSucking" class="form-label">Thumb Sucking</label>
                                            <select class="form-select required" name="thumbSucking" id="thumbSucking">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="attachmentToObjects" class="form-label">Attachment to Objects</label>
                                            <select class="form-select required" name="attachmentToObjects" id="attachmentToObjects">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="repetitiveMovements" class="form-label">Repetitive Movements</label>
                                            <select class="form-select required" name="repetitiveMovements" id="repetitiveMovements">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="hypersensitivityStimuli" class="form-label">Hypersensitivity to Stimuli</label>
                                            <select class="form-select required" name="hypersensitivityStimuli" id="hypersensitivityStimuli">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="difficultySocializing" class="form-label">Difficulty Socializing</label>
                                            <select class="form-select required" name="difficultySocializing" id="difficultySocializing">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="takingThingsWithoutPermission" class="form-label">Taking Things Without Permission</label>
                                            <select class="form-select required" name="takingThingsWithoutPermission" id="takingThingsWithoutPermission">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="BehaviorObservations" class="form-label">Observations</label>
                                            <textarea name="BehaviorObservations" class="form-control" id="BehaviorObservations" placeholder="Enter Observations"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="Schooled" class="form-label">Schooled</label>
                                            <select class="form-select required" name="Schooled" id="Schooled">
                                                <option value="0" selected>No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="preschoolEntryAge" class="form-label">Preschool Entry Age</label>
                                            <input type="text" name="preschoolEntryAge" class="form-control" id="preschoolEntryAge">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="preschoolAdaptation" class="form-label">Preschool Adaptation</label>
                                                <select class="form-select required" name="preschoolAdaptation" id="preschoolAdaptation">
                                                    <option value="0" selected>Good</option>
                                                    <option value="1">Regular</option>
                                                    <option value="2">Bad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="learningDifficulty" class="form-label">Learning Difficulty</label>
                                                <select class="form-select required" name="learningDifficulty" id="learningDifficulty">
                                                    <option value="0" selected>No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="schoolReinforcement" class="form-label">School Reinforcement</label>
                                                <select class="form-select required" name="schoolReinforcement" id="schoolReinforcement">
                                                    <option value="0" selected>No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                            <!-- wizard-tab -->

                            <div class="wizard-tab">
                                <div class="text-center mb-4">
                                    <h5>familiar history</h5>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="fatherName" class="form-label">Father's Name</label>
                                                <input type="text" class="form-control" id="fatherName" name="fatherName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="fatherAge" class="form-label">Father's Age</label>
                                                <input type="number" class="form-control" id="fatherAge" name="fatherAge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="fatherOccupation" class="form-label">Father's Occupation</label>
                                                <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="fatherPhone" class="form-label">Father's Phone</label>
                                                <input type="tel" class="form-control" id="fatherPhone" name="fatherPhone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="fatherEducation" class="form-label">Father's Education</label>
                                                <input type="text" class="form-control" id="fatherEducation" name="fatherEducation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="motherName" class="form-label">Mother's Name</label>
                                                <input type="text" class="form-control" id="motherName" name="motherName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="motherAge" class="form-label">Mother's Age</label>
                                                <input type="number" class="form-control" id="motherAge" name="motherAge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="motherOccupation" class="form-label">Mother's Occupation</label>
                                                <input type="text" class="form-control" id="motherOccupation" name="motherOccupation">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="motherPhone" class="form-label">Mother's Phone</label>
                                                <input type="tel" class="form-control" id="motherPhone" name="motherPhone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="motherEducation" class="form-label">Mother's Education</label>
                                                <input type="text" class="form-control" id="motherEducation" name="motherEducation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="psychiatricDisorder" class="form-label">Psychiatric Disorder</label>
                                                <input type="text" class="form-control" id="psychiatricDisorder" name="psychiatricDisorder">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="cognitiveDisability" class="form-label">Cognitive Disability</label>
                                                <select class="form-select" id="cognitiveDisability" name="cognitiveDisability">
                                                    <option value="no" selected>No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="drugAddiction" class="form-label">Drug Addiction</label>
                                                <input type="text" class="form-control" id="drugAddiction" name="drugAddiction">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="alcoholism" class="form-label">Alcoholism</label>
                                                <input type="text" class="form-control" id="alcoholism" name="alcoholism">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="otherConditions" class="form-label">Other Conditions</label>
                                                <textarea class="form-control" id="otherConditions" name="otherConditions" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- wizard-nav -->

                            <div class="wizard-tab">
                                <div class="text-center mb-4">
                                    <h5>Diagnosis hypothesis</h5>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <div>
                                   <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="diagnosisHypothesis" class="form-label">Diagnosis Hypothesis</label>
                                            <textarea class="form-control" id="diagnosisHypothesis" name="diagnosisHypothesis" rows="3"></textarea>
                                        </div>
                                    </div>

                                   </div>
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