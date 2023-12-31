<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;


class Category extends Model
{
    use HasFactory;
    // Add [name] to fillable property to allow mass assignment on [App\Models\Category].
    protected $fillable = ['name', 'product_id', 'user_id'];

    function product(){
        return $this->hasMany(Product::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }
}
