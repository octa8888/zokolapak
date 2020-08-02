<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TransactionHeader;
use App\Model\TransactionDetail;

class TransactionController extends Controller
{
    function getTransactionByUserId($id){
        // $transaction=TransactionDetail::with('transaction_header')->get();
        // return response()->json($transaction);
        $transaction=TransactionHeader::find($id)->transaction_details;
        return response()->json($transaction);
    }
}
