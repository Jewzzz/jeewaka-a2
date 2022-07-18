<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'EmpNo',
        'EmapName',
        'NIC',
        'email',
        'ContactNumber',
        'DateOfJoin',
        'Password',
        'isActive',
    ];
}
