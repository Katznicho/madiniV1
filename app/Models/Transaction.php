<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'cooperative_id',
        'amount',
        'phone_number',
         'payment_mode',
         'payment_method',
         'description',
         'reference',
         'status',
         'order_tracking_id',
         'OrderNotificationType',
         'user_id',
         'order_id'
       
    ];
}