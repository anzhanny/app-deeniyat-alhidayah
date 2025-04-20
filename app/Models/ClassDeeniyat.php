<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassDeeniyat extends Model
{
    use HasFactory;

    protected $table = 'tb_class';
    protected $fillable = 
    [
        'class_name',
        'teacher_id'
    ];
}
