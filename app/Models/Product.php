<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'image_url',
        'category_id',
        'is_featured',
    ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
