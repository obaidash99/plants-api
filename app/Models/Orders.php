<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'plant_id',
        'name',
        'email',
        'password',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'total_price',
        'payment_mode',
        'payment_id',
        'status',
        'message',
        'tracking_no',
    ];
}
