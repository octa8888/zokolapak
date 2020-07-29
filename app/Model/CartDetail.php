<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartDetail extends Model
{
    use SoftDeletes;

    public function transaction_header(){
        return $this->belongsTo(TransactionHeader::class,'cart_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
