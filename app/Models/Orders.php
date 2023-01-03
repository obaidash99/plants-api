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
        'total_price',
        'payment_mode',
        'payment_id',
        'status',
        'tracking_no',
    ];

    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}
