<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
