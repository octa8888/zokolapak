<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;
    protected $hidden=['created_at','updated_at','deleted_at'];

    public function transaction_header(){
        return $this->belongsTo(TransactionHeader::class,'transaction_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
