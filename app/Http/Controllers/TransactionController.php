<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TransactionHeader;
use App\Model\TransactionDetail;

class TransactionController extends Controller
{
    function getTransactionsByUserId($id){
        // $transaction=TransactionDetail::with('transaction_header')->get();
        // return response()->json($transaction);
        // $transaction=TransactionHeader::with('transaction_detail')->where('user_id','=',$id)->get();
        $transactions=TransactionHeader::with(['transaction_detail','transaction_detail.product'])->where('user_id','=',$id)->get();
        return response()->json($transactions);
    }
}
