<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'Title', 'Image', 'Price', 'Details'
    ];

    public function productOrders()
    {
        return $this->hasMany(ProductOrder::class, 'Product_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'Product_id');
    }
}