<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'tracking_id', 'customer_name', 'phone', 'whatsapp',
        'address', 'city', 'notes', 'items', 'total', 'status'
    ];

    protected $casts = [
        'items' => 'array',
        'total' => 'decimal:2',
    ];
}
