<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'images', 'price', 'category_id'];

    function category(){
        return $this->belongsTo(Category::class);
    }

}
