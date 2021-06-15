<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'branch',
        'course',
        'address',
        'phone_no',
        'email',
        'gender'
    ];

}
