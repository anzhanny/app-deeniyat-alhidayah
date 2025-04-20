<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'tb_report';
    protected $fillable = 
    [
        'student_id',
        'teacher_id',
        'daily_value',
        'monthly_exam',
        'final_exam',
        'academic_year_first',
        'academic_year_last'
    ];
}
