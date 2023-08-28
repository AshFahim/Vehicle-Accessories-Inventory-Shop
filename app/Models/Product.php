<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primarykey = "bmuk_no";
    protected $fillable = ['bmuk_no', 'euro_id', 'oem_id', 'price', 'image', 'collection', 'filter_type', 'car_brand', 'model', 'specification'];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'bmuk_no');
    }
}
