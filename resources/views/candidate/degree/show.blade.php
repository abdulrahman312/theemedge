@extends('layouts.app')

@section('content')
    @include('shared.flash_data')
    <div class="page-header">
        <h2 class="">
            Admission Candidate Details
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <span><strong>Created on </strong>{{ $candidate->createdAt->toDayDateTimeString() }}</span> <br/>
            <span>
                <strong>Course selected: </strong>
                {{ $candidate->course->title }}
            </span><br>
            <span>
                <strong>Admission Reference Id: </strong>
                {{ $candidate->admissionReferenceId }}
            </span>
        </div>
        <div class="col-md-6">
            <a href="{{route('candidate.degree.print', $candidate)}}" class="btn btn-primary">
                <i class="fa fa-fw fa-print"></i> Print
            </a>
            <a href="{{route('candidate.degree.edit', $candidate->id)}}" class="btn btn-primary">
                <i class="fa fa-fw fa-edit"></i> Edit
            </a>
        </div>
    </div>
    <div class="row">
        
            <div id="enquiry">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title"><b>Personal Details</b></h5>
                    </div>
                    <div class="panel-body">
                        <div>
                            <strong><i class="fa fa-fw fa-user"></i> Full Name: 
                            </strong> {{ $candidate->name }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-user"></i> Father Name: 
                            </strong> {{ $candidate->fatherName }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-date"></i> Date of Birth: 
                            </strong> {{ $candidate->dateOfBirth }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-user"></i> Gender: 
                            </strong> {{ $candidate->gender }}
                        </div>
                         <div>
                            <strong><i class="fa fa-fw fa-contact"></i> Applied For Year: 
                            </strong> {{ $candidate->appliedForYear }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-contact"></i> Contact Number: 
                            </strong> {{ $candidate->contactNo }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-user"></i> Mobile Number: 
                            </strong> {{ $candidate->mobileNo }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-location-arrow"></i> Residential Area:
                            </strong> {{ $candidate->residentialArea }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-location-arrow"></i> Admission Type:
                            </strong> {{ $candidate->admissionType }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-location-arrow"></i> Student Category:
                            </strong> {{ $candidate->studentCategory }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-location-arrow"></i> Adhar Card Number:
                            </strong> {{ $candidate->adharCardNo }}
                        </div>
                        <div>
                            <strong><i class="fa fa-fw fa-location-arrow"></i> Pan Card Number:
                            </strong> {{ $candidate->panCardNo }}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title"><b>Academics Details</b></h5>
                    </div>
                    <div class="panel-body">
                        <strong>SSC Percentage: </strong> {{ $candidate->sscPercentage }}&percnt;<br/>
                        @if($candidate->appliedForYear == 1)
                            <strong>HSC Percentage: </strong> {{ $candidate->hscPercentage }}&percnt;<br/>
                            <strong>HSC Physics: </strong> {{ $candidate->cetPhysics }} <br/>
                            <strong>HSC Chemistry: </strong> {{ $candidate->cetChemistry }} <br/>
                            <strong>HSC Mathematics: </strong> {{ $candidate->cetMaths }} <br/>
                            <strong>JEE Main Score: </strong> {{ $candidate->jeeMainScore }}<br/>
                        @elseif($candidate->appliedForYear == 2)
                            <strong>Diploma Percentage: </strong> {{ $candidate->diplomaPercentage}}&percnt;
                        @endif
                    </div>
                </div>
            </div>
        
    </div>
@stop