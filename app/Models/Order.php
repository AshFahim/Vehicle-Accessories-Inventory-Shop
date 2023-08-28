<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primarykey = "id";
    protected $fillable = ['user_id', 'status', 'payment_method', 'shipping_address', 'billing_address', 'shipping_method', 'total_cost'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
