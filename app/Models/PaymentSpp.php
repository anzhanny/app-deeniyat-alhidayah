<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSpp extends Model
{
    use HasFactory;

    protected $table = 'tb_payment_spp';
    protected $fillable = 
    [
        'student_id',
        'month',
        'payment_status',
        'paid_at',
        'upload_transactions'
    ];
}
