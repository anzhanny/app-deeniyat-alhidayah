<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'tb_teacher';
    protected $fillable = 
    [
        'name',
        'email',
        'nip',
        'birthdate',
        'phone'
    ]
  ;  
}

