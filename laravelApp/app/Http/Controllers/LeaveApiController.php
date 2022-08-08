<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveApiController extends Controller
{
    //
    public function index(){
        $leave = Leave::all();
        //$products =Product::all();
        return response()->json($leave);
    }

    //store function
    public function store(Request $request){
        $request->validate([
            'empNo' => 'required',
            'empName' => 'required',
            'leaveType' => 'required',
            'leaveCatogory' => 'required',
            'reason' => 'required',
            'date' => 'required',
        ]);

        $leave = Leave::create([
            'empNo' => $request->empNo,
            'empName' => $request->empName,
            'leaveType' => $request->leaveType,
            'leaveCatogory' => $request->leaveCatogory,
            'reason' => $request->reason,
            'date' => $request->date
        ]);

        return response()->json($leave);
    }

    //update function
    public function update(Request $request , Leave $leave){
        //validation
        $request->validate([
            'empNo' => 'required',
            'empName' => 'required',
            'leaveType' => 'required',
            'leaveCatogory' => 'required',
            'reason' => 'required',
            'date' => 'required',
        ]);

        //leave update
        $leave->update([
            'empNo' => $request->empNo,
            'empName' => $request->empName,
            'leaveType' => $request->leaveType,
            'leaveCatogory' => $request->leaveCatogory,
            'reason' => $request->reason,
            'date' => $request->date
        ]);

        return response()->json($leave);
    }

    public function destroy(Leave $leave){
        $leave->delete();
        return response()->json($leave);
    }
}
