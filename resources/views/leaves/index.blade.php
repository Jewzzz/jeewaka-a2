@extends('layouts.dashbord')

@section('content')
<main>

    <div class="container">

        <div class="row" style="padding: 1vw 0vw">
            <div class="col-lg-12 margin-tb">
                <h4>Manage Leave</h4>
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
                    <th>LeaveType</th>
                    <th>leaveCatogory</th>
                    <th>Date</th>
                    <th>Permission</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($leaves as $leave)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $leave->EmpNo }}</td>
                    <td>{{ $leave->EmpName }}</td>
                    <td>{{ $leave->LeaveType }}</td>
                    <td>{{ $leave->leaveCatogory }}</td>
                    <td>{{ $leave->Date }}</td>
                    <td>
                        @if ($leave->Permission == 0)
                        <span class="badge bg-danger">Pending</span>
                        @else
                        <span class="badge bg-success">Ok</span>
                        @endif

                    </td>
                    <td>
                        {{-- <form action="{{ route('employee.destroy',$employee->id) }}" method="POST"> --}}

                            <a class="btn btn-info" href="{{ route('leave.show',$leave->id) }}">Show</a>

                            @if ($leave->Permission == 0)
                                <a class="btn btn-primary" href="{{ route('leave.edit', $leave->id) }}">Grant Permission</a>
                            @else
                                <a class="btn btn-danger" href="{{ route('leave.edit', $leave->id) }}">Cancel Permission</a>
                            @endif

                            

                            {{-- @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>

{!! $leaves->links() !!}

@endsection
