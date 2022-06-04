<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Client extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $guarded = [];
    protected $hidden = [
        'password'
    ];
    use HasFactory;


    public function wishList(){
        return $this->belongsToMany(Product::class,'wish_lists')->withTimestamps();
    }
    public function wishListHas($productId){

        return self::wishList()->where('product_id',$productId)->exists();

    }
}
