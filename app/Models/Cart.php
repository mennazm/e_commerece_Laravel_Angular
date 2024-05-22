<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'Cart_item_id';

    protected $fillable = [
        'Quantity', 'User_id', 'Product_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_id');
    }
}
