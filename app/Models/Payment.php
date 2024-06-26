<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'amount',
        'phone_number',
        'payment_mode',
        'payment_method',
        'description',
        'reference',
        'status',
        'user_id',
        'cooperative_id',
        'order_tracking_id',
        'OrderNotificationType',
        'created_at',
        'updated_at',
        'user_id'
    ];

    //a transaction belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // atransaction belongs to a cooperative
    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}
