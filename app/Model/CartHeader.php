<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartHeader extends Model
{
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function cart_detail(){
        return $this->hasMany(CartDetail::class);
    }
}
