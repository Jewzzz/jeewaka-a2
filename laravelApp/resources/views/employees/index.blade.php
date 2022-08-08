@extends('layouts.dashbord')

@section('content')
<main>

    <div class="container">

        <div class="row" style="padding: 1vw 0vw">
            <div class="col-lg-12 margin-tb">
                <h4>Manage Employee</h4>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-success" href="{{ route('employee.create') }}"> + Add New</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No</th>
                    <th>EmpNo</th>
                    <th>EmapName</th>
                    <th>NIC</th>
                    <th>email</th>
                    <th>ContactNumber</th>
                    <th>DateOfJoin</th>
                    <th>isActive</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $employee->EmpNo }}</td>
                    <td>{{ $employee->EmpName }}</td>
                    <td>{{ $employee->NIC }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->ContactNumber }}</td>
                    <td>{{ $employee->DateOfJoin }}</td>
                    <td>
                        @if ($employee->isActive == 0)
                        <span class="badge bg-danger">Not Active</span>
                        @else
                        <span class="badge bg-success">Active</span>
                        @endif

                    </td>
                    <td>
                        <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>

{!! $employees->links() !!}

@endsection
