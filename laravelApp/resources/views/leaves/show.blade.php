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
                                {{ $leave->empNo }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Employee name: </strong>
                                {{ $leave->empName }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Leave Type: </strong>
                                {{ $leave->leaveType }}
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
                                {{ $leave->reason }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Leave Date: </strong>
                                {{ $leave->date }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission: </strong>
                                @if ($leave->permission == 0)
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
