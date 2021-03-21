<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'category_id'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
