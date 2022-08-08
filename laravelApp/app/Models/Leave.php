<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'empNo',
        'empName',
        'leaveType',
        'leaveCatogory',
        'reason',
        'date',
        'permission',
    ];

}
