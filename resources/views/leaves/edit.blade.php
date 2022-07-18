@extends('layouts.dashbord')


@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Permission Manage</h4>
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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('leave.update',$leave->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Number</strong>
                                        <input type="text" name="EmpNo" value="{{ $leave->EmpNo }}"
                                            class="form-control" placeholder="EmpNo">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Name:</strong>
                                        <input type="text" name="EmpName" value="{{ $leave->EmpName }}"
                                            class="form-control" placeholder="EmapName">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Leave Type:</strong>
                                        <input type="text" name="LeaveType" value="{{ $leave->LeaveType }}" class="form-control"
                                            placeholder="NIC">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Leave Catogory:</strong>
                                        <input type="text" name="leaveCatogory" value="{{ $leave->leaveCatogory }}" disabled
                                            class="form-control" placeholder="leaveCatogory">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Reason:</strong>
                                            <textarea class="form-control" name="Reason" id=""  rows="4">
                                                {{ $leave->Reason }}
                                            </textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Date Of Join:</strong>
                                        <input type="date" name="Date" value="{{ $leave->Date }}"
                                            class="form-control" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Permission:</strong>
                                        <select class="form-select" name="Permission" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Grant Permission</option>
                                            <option value="0">Don't Grant Permission</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                    
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
