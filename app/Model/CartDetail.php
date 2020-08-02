<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartDetail extends Model
{
    use SoftDeletes;
    protected $hidden=['created_at','updated_at','deleted_at'];

    public function transaction_header(){
        return $this->belongsTo(TransactionHeader::class,'cart_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
