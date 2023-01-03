<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    protected $table = 'plants';

    protected $fillable  = ['name', 'type', 'description', 'price', 'image'];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
