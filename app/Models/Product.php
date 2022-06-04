<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function image()
    {
        return $this->morphMany(Image::class, 'imagable');
    }
    public function cart(){
        return $this->hasone(Cart::class);
    }
}
