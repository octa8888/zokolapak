<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getAllProducts(){
        $products=Product::all();
        return response()->json($products);
    }

    function insertProduct(Request $req){
        $p= new Product();
        $p->product_name=$req->product_name;
        $p->description=$req->description;
        $p->price=$req->price;
        $p->save();

        return response()->json(
            [
                "name"=>$p->product_name,
                "description"=>$p->description,
                "price"=>$p->price,
            ]
        );
    }
}
