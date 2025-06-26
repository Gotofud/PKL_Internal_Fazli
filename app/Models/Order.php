<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_harga', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderProduct(){
        return $this->hasMany(OrderProduct::class);
    }
}
