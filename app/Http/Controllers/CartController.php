<?php

namespace App\Http\Controllers;

use App\Model\CartDetail;
use App\Model\CartHeader;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function getCartByUserId($id){
        $cart=CartHeader::with(['cart_detail','cart_detail.product'])->where('user_id','=',$id)->get();
        return response()->json($cart);
    }

    function insertCart(Request $req){
        $ch=CartHeader::where('user_id','=',$req->user_id)->first();
        if($ch==null){
            $ch=new CartHeader();
            $ch->user_id=$req->user_id;
            $ch->save();
        }
        $products = $req->get('products');
        foreach ($products as $p) {
            $cd=CartDetail::where('cart_id','=',$ch->id)-> where('product_id','=',$p['product_id'])->first();
            if($cd==null){
                $cd=new CartDetail();
                $cd->cart_id=$ch->id;
                $cd->product_id=$p['product_id'];
                $cd->quantity=$p['quantity'];
            }
            else{
                $cd->quantity+=$p['quantity'];
            }
            $cd->save();
        }
        return response()->json([
            "message"=>"success insert transaction data"
        ]);
    }
}
