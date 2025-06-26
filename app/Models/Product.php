<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'harga',
        'stok',
        'gambar',
        'kategori_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function orderProduct(){
        return $this->hasMany(OrderProduct::class);
    }
}
