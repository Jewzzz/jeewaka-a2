@extends('layouts.dashbord')


@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4> Edit Employee</h4>
            </div>
            <div class="d-flex justify-content-end"> 
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Employee Deatail') }}
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

                        <form action="{{ route('employee.update',$employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Number:</strong>
                                        <input type="text" name="EmpNo" value="{{ $employee->EmpNo }}"
                                            class="form-control" placeholder="EmpNo">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Name:</strong>
                                        <input type="text" name="EmpName" value="{{ $employee->EmpName }}"
                                            class="form-control" placeholder="EmapName">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee NIC:</strong>
                                        <input type="text" name="NIC" value="{{ $employee->NIC }}" class="form-control"
                                            placeholder="NIC">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee email:</strong>
                                        <input type="text" name="email" value="{{ $employee->email }}"
                                            class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Number:</strong>
                                        <input type="text" name="ContactNumber" value="{{ $employee->ContactNumber }}"
                                            class="form-control" placeholder="ContactNumber">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Date Of Join:</strong>
                                        <input type="date" name="DateOfJoin" value="{{ $employee->DateOfJoin }}"
                                            class="form-control" placeholder="DateOfJoin">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Is Active:</strong>
                                        <select class="form-select" name="isActive" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
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
