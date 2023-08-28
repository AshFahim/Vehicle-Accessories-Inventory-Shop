<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $primarykey = "id";
    protected $fillable = ['user_id', 'product_id', 'order_id', 'rating', 'comment'];
}
