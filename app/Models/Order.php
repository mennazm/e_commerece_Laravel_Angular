<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Date', 'Total_price', 'State', 'User_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }

    public function productOrders()
    {
        return $this->hasMany(ProductOrder::class, 'Order_id');
    }
}
