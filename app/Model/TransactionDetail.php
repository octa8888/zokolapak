<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    public function transaction_header(){
        return $this->belongsTo(TransactionHeader::class,'transaction_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
