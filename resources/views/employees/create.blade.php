@extends('layouts/dashbord')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Add New Employee</h4>
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

                        <form action="{{ route('employee.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Number:</strong>
                                        <input type="text" name="EmpNo" 
                                            class="form-control" placeholder="EmpNo">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Name:</strong>
                                        <input type="text" name="EmpName" 
                                            class="form-control" placeholder="EmapName">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee NIC:</strong>
                                        <input type="text" name="NIC" class="form-control"
                                            placeholder="NIC">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee email:</strong>
                                        <input type="text" name="email" 
                                            class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Employee Contact Number:</strong>
                                        <input type="text" name="ContactNumber" 
                                            class="form-control" placeholder="Contact Number">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Date Of Join:</strong>
                                        <input type="date" name="DateOfJoin" 
                                            class="form-control" placeholder="DateOfJoin">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        <input type="password" name="Password" 
                                            class="form-control" placeholder="Password">
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
    
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book No:</strong>
                    <input type="text" name="BookID" class="form-control" placeholder="Book Number">
                </div>
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="Title" class="form-control" placeholder="Book Title">
                </div>
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="Price" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <strong>Author:</strong>
                    <input type="text" name="Author" class="form-control" placeholder="Author">
                </div>
                <div class="form-group">
                    <strong>Avalability:</strong>
                    <select class="form-select" name="Avalability" aria-label="Default select example">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form> --}}
</div>
@endsection