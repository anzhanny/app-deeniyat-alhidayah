<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'tb_student';
    protected $fillable = 
    [
        'name',
        'email',
        'password',
        'birthdate',
        'gender',
        'nis',
        'phone',
        'address',
        'class_id',
        'is_active',
        'father_name',
        'father_job',
        'mother_name',
        'mother_job',
        'photo'
    ];
}
