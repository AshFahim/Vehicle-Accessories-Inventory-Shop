<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $primarykey = "id";
    protected $fillable = ['user_id', 'bmuk_no', 'quantity',];

    public function product()
    {
        return $this->belongsTo(Product::class, 'bmuk_no', 'bmuk_no');
    }
}
