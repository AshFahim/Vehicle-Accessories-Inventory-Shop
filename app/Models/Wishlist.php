<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = "wishlists";
    protected $primarykey = "id";
    protected $fillable = ['user_id', 'bmuk_no',];
}
