<?php

use App\Models\User;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Leave Route
Route::apiResource('leaves', LeaveApiController::class);



// Route::post('leaves' , [LeaveApiController::class , 'store']);

// Route::post('/leaves', function () {
//     return Leave::create([
//         'EmpNo' => request('EmpNo'),
//         'EmpName' => request('EmpName'),
//         'LeaveType' => request('LeaveType'),
//         'leaveCatogory' => request('leaveCatogory'),
//         'Reason' => request('Reason'),
//         'Date' => request('Date'),
//         'Permission' => request('Permission'),
//     ]);

// });


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
