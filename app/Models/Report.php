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
        'class_id',
        'teacher_id',
        'daily_value',
        'monthly_exam',
        'final_exam',
    ];
    protected $dates = ['created_at', 'updated_at'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function class()
    {
        return $this->belongsTo(TbClass::class, 'class_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
