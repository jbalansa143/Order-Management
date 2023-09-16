<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'order_number',
        'category',
        'quantity',
        'price',
        'image',
        'status',
        'is_completed',
    ];
}