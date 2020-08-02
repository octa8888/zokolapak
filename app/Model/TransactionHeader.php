<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionHeader extends Model
{
    use SoftDeletes;
    protected $hidden=['created_at','updated_at','deleted_at'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function transaction_detail(){
        return $this->hasMany(TransactionDetail::class,'transaction_id');
    }
}
