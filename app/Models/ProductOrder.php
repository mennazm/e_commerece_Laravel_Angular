<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOrder extends Model
{
    use HasFactory;

    protected $table = 'product_order';

    protected $primaryKey = 'Order_item_id';

    protected $fillable = [
        'Product_id', 'Order_id', 'Quantity', 'Price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'Order_id');
    }
}
