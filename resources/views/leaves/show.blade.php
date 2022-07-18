@extends('layouts.dashbord')
  
@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4> Show Leaves</h4>
            </div>
            <div class="d-flex justify-content-end"> 
                <a class="btn btn-primary" href="{{ route('leave.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Leave Deatail') }}
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Employee Number: </strong>
                                {{ $leave->EmpNo }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Employee name: </strong>
                                {{ $leave->EmpName }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Leave Type: </strong>
                                {{ $leave->LeaveType }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Leave Catogory: </strong>
                                {{ $leave->leaveCatogory }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Reason: </strong>
                                {{ $leave->Reason }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Leave Date: </strong>
                                {{ $leave->Date }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission: </strong>
                                @if ($leave->Permission == 0)
                                    <span class="badge bg-danger">Not Yet</span>
                                @else
                                    <span class="badge bg-success">Ok</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
   
</div>

@endsection