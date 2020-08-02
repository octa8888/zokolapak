<?php

namespace App\Http\Controllers;

use App\Model\CartHeader;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function getCartByUserId($id){
        $cart=CartHeader::with(['cart_id','cart_id.product'])->where('user_id','=',$id)->get();
        return response()->json($cart);
    }
}
