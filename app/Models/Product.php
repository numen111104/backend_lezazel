<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'description', 'price', 'category_id', 'tags'
    ];    

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
