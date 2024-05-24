<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['Date', 'Total_price', 'State', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'product_order')
    //                 ->withPivot('Quantity', 'Price')
    //                 ->withTimestamps();
    // }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order', 'Order_id', 'Product_id')
                    ->withPivot('Quantity', 'Price', 'created_at', 'updated_at');
    }}
