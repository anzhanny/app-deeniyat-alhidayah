<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'tb_material';
    protected $fillable = ['material_name', 'class_id'];
    protected $dates = ['created_at', 'updated_at'];

    public function class()
    {
        return $this->belongsTo(TbClass::class, 'class_id', 'id');
    }
}
