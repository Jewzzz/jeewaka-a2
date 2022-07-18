<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'EmpNo',
        'EmpName',
        'LeaveType',
        'leaveCatogory',
        'Reason',
        'Date',
        'Permission',
    ];

}
