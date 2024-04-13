<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'address',
        'status',
        'order_id',
        'pin',
        'pin_recovery',
        
    ];

    //a order belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // a order belongs to a cooperative
    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}
