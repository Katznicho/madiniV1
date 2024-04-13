<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cooperative_id',
        'total_cost',
        'purchase_cost',
        'delivery_cost',
        'quantity',
        'status',
        'delivery_address_id',
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
