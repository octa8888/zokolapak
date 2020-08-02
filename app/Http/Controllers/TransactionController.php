<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TransactionHeader;
use App\Model\TransactionDetail;
use DateTime;

class TransactionController extends Controller
{
    function getTransactionsByUserId($id)
    {
        $transactions = TransactionHeader::with(['transaction_detail', 'transaction_detail.product'])->where('user_id', '=', $id)->get();
        return response()->json($transactions);
    }

    function getTransactionById($id)
    {
        $transactions = TransactionHeader::with(['transaction_detail', 'transaction_detail.product'])->find($id);
        return response()->json($transactions);
    }

    function insertTransaction(Request $req)
    {
        $th = new TransactionHeader();

        $products = $req->get('products');

        $th->user_id = $req->user_id;
        $th->transaction_date = new DateTime();
        $th->save();

        foreach ($products as $p) {
            $td = new TransactionDetail();
            $td->transaction_id = $th->id;
            $td->product_id=$p['product_id'];
            $td->quantity=$p['quantity'];
            $td->save();
        }
        return response()->json([
            "message"=>"success insert transaction data"
        ]);
    }
}
