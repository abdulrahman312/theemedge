@extends('layouts.app')

@section('styles')
    <style type="text/css">
        #admissionForm > fieldset {
            margin-top: 5px;
        }

    </style>
@stop

@section('content')
    <div class="page-header">
        <h4> Admission Form </h4>
    </div>
    @include('shared.flash_data')
    <form role="form" id="admissionForm" action="{{route('candidate.degree.store')}}" method="post" class="">
        {{ csrf_field() }}
        <fieldset>
            <legend>Admission Details</legend>
            <div class="form-group">
                <label class="" for="admissionReferenceId">Admission Reference Id: </label>
                <input type="text" class="form-control" id="admissionReferenceId" name="admissionReferenceId"
                       value="{{old('admissionReferenceId')}}" placeholder="Reference Id"/>
            </div>
            <div class="form-group">
                <label for="admissionType" class="clearfix">Admission Type</label>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="admissionType" name="admissionType" value="0"> CAP
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="admissionType" name="admissionType" value="2"> Minority
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="studentCategory">Category: </label>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="studentCategory" name="studentCategory"
                               value="0" /> Open
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="studentCategory" name="studentCategory"
                               value="1" /> OBC
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="studentCategory" name="studentCategory"
                               value="2" /> SC/ST
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="studentCategory" name="studentCategory"
                               value="0" />  VJ/NT
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="approvedCourseId">Course</label>
                <select id="approvedCourseId" class="form-control" name="approvedCourseId">
                    @if(count($courses))
                        @foreach($courses as $course)
                            <option value="{{$course->id}}">{{ $course->title }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="appliedForYear">Year</label>
                <select id="appliedForYear" class="form-control" name="appliedForYear">
                    <option selected disabled>Select Year</option>
                    <option value="1">First Year</option>
                    <option value="2">Direct Second Year</option>
                </select>
            </div>
        </fieldset>
        <fieldset>
            <legend>Personal Details</legend>
            <!-- Name fields -->
            <div class="form-group">
                <label class="" for="lastName">Last Name: </label>
                <input type="text" class="form-control" id="lastName" name="lastName"
                       value="{{old('lastName')}}" placeholder="Last Name"/>
            </div>
            <div class="form-group">
                <label class="" for="firstName">First Name: </label>
                <input type="text" class="form-control" id="firstName" name="firstName"
                       value="{{old('firstName')}}" placeholder="First Name"/>
            </div>
            <div class="form-group">
                <label class="" for="middleName">Middle Name: </label>
                <input type="text" class="form-control" id="middleName" name="middleName"
                       value="{{old('middleName')}}" placeholder="Middle Name">
            </div>

            <div class="form-group">
                <label class="" for="fatherName">Father Name: </label>
                <input type="text" class="form-control" id="fatherName" name="fatherName"
                       value="{{old('fatherName')}}" placeholder="Father Name">
            </div>

            <!-- Name fields -->

            <div class="form-group">
                <label class="" for="dateOfBirth">Date of Birth </label>
                <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth"
                       value="{{old('dateOfBirth')}}" placeholder="Date Of Birth">
            </div>

            <div class="form-group">
                <label class="" for="gender">Gender: </label>
                <label>
                    <input type="radio" id="gender" name="gender" value="{{old('gender')}}"> Male &nbsp;&nbsp;
                </label>
                <label>
                    <input type="radio" id="gender" name="gender" value="{{old('gender')}}"> Female
                </label>
            </div>
            <div class="form-group">
                <label for="contactNo" class="">
                    Contact No
                </label>
                <input type="text" class="form-control" id="contactNo" name="contactNo"
                       placeholder="Contact">
            </div>
            <div class="form-group">
                <label for="contactNo" class="">Mobile No</label>
                <input type="text" class="form-control" id="mobileNo" name="mobileNo"
                       placeholder="Mobile No">
            </div>
            <div class="form-group">
                <label class=" " for="sscPercentage">SSC %</label>
                <input type="number" class="form-control" name="sscPercentage" id="sscPercentage"
                       step="0.01" min="35" max="100" value="{{old('sscPercentage')}}"/>
            </div>
            <div class="form-group">
                <label class="" for="hscPercentage">HSC %</label>
                <input type="number" class="form-control" name="hscPercentage" id="hscPercentage"
                       step="0.01" min="40" max="100" value="{{old('hscPercentage')}}"/>
            </div>
            <div class="form-group">
                <label class="">HSC Marks</label>
                <input type="number" class="form-control" name="hscPhysics" id="hscPhysics"
                       max="100" min="40" placeholder="Physics" value="{{old('hscPhysics')}}"/>
                <input type="number" class="form-control" name="hscChemistry" id="hscChemistry"
                       max="100" min="40" placeholder="Chemistry" value="{{old('hscChemistry')}}"/>
                <input type="number" class="form-control" name="hscMaths" id="hscMaths"
                       max="100" min="40" placeholder="Mathematics" value="{{old('hscMaths')}}"/>
            </div>
            <div class="form-group">
                <label for="jeeMainScore" class="">JEE Main Score</label>
                <input type="number" class="form-control" id="jeeMainScore"
                       name="jeeMainScore" value="{{old('jeeMainScore')}}"/>
            </div>
            <div class="form-group">
                <label class="" for="diplomaPercentage">Diploma %</label>
                <input type="number" class="form-control" name="diplomaPercentage"
                       id="diplomaPercentage" step="0.01" min="35" max="100"
                       value="{{ old('diplomaPercentage') }}"/>
            </div>
            <div class="form-group">
                <label class="" for="residentialArea">Residential Area</label>
                <input type="text" class="form-control" name="residentialArea"
                       id="residentialArea" list="residentialAreasList"/>
            </div>

            <div class="form-group">
                <label class="" for="adharCardNo">Adhar Card Number: </label>
                <input type="text" class="form-control" id="adharCardNo" name="adharCardNo"
                       value="{{old('adharCardNo')}}" placeholder="Adhar Card Number"/>
            </div>

            <div class="form-group">
                <label class="" for="panCardNo">Pan Card Number: </label>
                <input type="text" class="form-control" id="panCardNo" name="panCardNo"
                       value="{{old('panCardNo')}}" placeholder="Pan Card Number"/>
            </div>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <button type="submit" class="btn btn-success ">Submit</button>
                <button type="reset" class="btn btn-danger ">Reset</button>
            </div>
        </fieldset>
    </form>

@stop

@section('scripts')

@stop